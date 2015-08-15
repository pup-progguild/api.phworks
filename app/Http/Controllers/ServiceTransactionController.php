<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\User;
use App\Province;
use App\Municipality;


use App\ServiceTransaction;
use SMS;

class ServiceTransactionController extends ParserController
{
    public function parseServiceDescription($description)
    {
        // $description = "all gino is a besides man under the table from PUP";
        $description = explode(' ', trim($description));
        
        $description = array_map('strtolower', $description);
        
        $description = $this->removePrepositions($description);
        $description = $this->removeHelpingVerb($description);
        $description = $this->removePronouns($description);
        $description = $this->removeDeterminers($description);
        

        $description = array_values($description);
        return $description;
    }

    public function getRequest(Request $request)
    {
        $matchPoints = 0;
        $data = $request->only('client_id', 'field', 'description');
        $matchEmployees = array();

        if (isset($data['field'])) 
        {
            $tags = isset($data['description']) ? $this->parseServiceDescription($data['description']) : null;
            
            // Employees match in the field
            $employees = DB::table('users')
                        ->join('provinces', 'provinces.provcode' , '=', 'users.provcode')
                        ->join('municipality', 'municipality.citycode' , '=', 'users.citycode')
                        ->select('users.*', 'provinces.provname', 'municipality.city_name')
                        ->get();
            $client = User::find($data['client_id']);

            foreach ($employees as $key => $employee) {
                // Tags Matching
                $data = (array)$employee;

                $data['tags'] = json_decode($data['tags']);
                $data['tagsCount'] = count($data['tags']);
                $data['tagPoints'] = 0;

                foreach ($tags as $key => $tag) {
                    if (in_array($tag, $data['tags'])) {
                        $data['tagPoints']++;
                    }
                }

                $data['tagPoints'] = $data['tagsCount'] > 0 ? $data['tagPoints'] /  $data['tagsCount'] : 0;
                array_push($matchEmployees, $data);
                
                //Location Matching
                // $data['provname'] = Province::where('provcode', '=', $user['provcode'])->get(array('provname'));
                // $data['cityname'] = Municipality::where('citycode', '=', $user['citycode'])->get(array('city_name'));

                // $data['provname'] = $data['provname'][0]['provname'];
                // $data['cityname'] = $data['cityname'][0]['city_name'];
            }
        }
            die(var_dump($matchEmployees));


        // $parsed = $this->parseServiceDescription($request->description);
    } 

    public function sendMessage()    
    {
        SMS::send('This is my message', [], function($sms) {
            $sms->to('+639308229814');
        });
    }
}
