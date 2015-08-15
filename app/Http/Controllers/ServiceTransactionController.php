<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

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
        $request = $request->only('client_id', 'field', 'description');
        $matchEmployees = array();

        if (isset($request['field'])) 
        {
            $tags = isset($request['description']) ? $this->parseServiceDescription($request['description']) : null;
            
            // Employees match in the field
            $employees = DB::table('users')
                        ->where('field_id', '=', $request['field'])
                        ->join('provinces', 'provinces.provcode' , '=', 'users.provcode')
                        ->join('municipality', 'municipality.citycode' , '=', 'users.citycode')
                        ->select('users.*', 'provinces.provname', 'municipality.city_name')
                        ->get();
            $client = DB::table('users')
                        ->where('user_id', '=', $request['client_id'])
                        ->join('provinces', 'provinces.provcode' , '=', 'users.provcode')
                        ->join('municipality', 'municipality.citycode' , '=', 'users.citycode')
                        ->select('users.*', 'provinces.provname', 'municipality.city_name')
                        ->get();
            $client = (array)$client[0];

            foreach ($employees as $key => $employee) {
                // Tags Matching
                $data = (array)$employee;

                $data['tags'] = json_decode($data['tags']);
                $tagsCount = count($data['tags']);
                $data['tagPoints'] = 0;

                foreach ($tags as $key => $tag) {
                    if (in_array($tag, $data['tags'])) {
                        $data['tagPoints']++;
                    }
                }

                $data['tagPoints'] = $tagsCount > 0 ? $data['tagPoints'] /  $tagsCount : 0;
                
                //Location Matching
                $data['locationPoints'] = 0;
          
                if ($data['provcode'] == $client['provcode']) {
                    $data['locationPoints'] += 0.5;
                }

                if ($data['citycode'] == $client['citycode']) {
                    $data['locationPoints'] += 0.5;
                }

                //rating
                $employer_rate = DB::table('service_transaction')
                                ->where('employee_id', $data['user_id'])
                                ->sum('user_rate');
                $rate_count = DB::table('service_transaction')
                                ->where('employee_id', $data['user_id'])
                                ->count();
                $data['rating'] = $rate_count > 0 ? $employer_rate / $rate_count : 0 ;
                array_push($matchEmployees, $data);
            }
        }

        return $matchEmployees;
        // $parsed = $this->parseServiceDescription($request->description);
    } 


    public function sendMessage()    
    {
        SMS::send('This is my message', [], function($sms) {
            $sms->to('+639308229814');
        });
    }
}
