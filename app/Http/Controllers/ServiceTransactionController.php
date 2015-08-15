<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Employee;

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
        $data = $request->only('field', 'description');

        $tags = $this->parseServiceDescription($data['description']);

        die(var_dump($tags));
        // $parsed = $this->parseServiceDescription($request->description);
    } 

    public function sendMessage()    
    {
        SMS::send('This is my message', [], function($sms) {
            $sms->to('+639308229814');
        });
    }

    public function processMatching()
    {
        $employee = Employee
    }
}
