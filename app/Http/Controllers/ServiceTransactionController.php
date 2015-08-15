<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\ServiceTransaction;

class ServiceTransactionController extends Controller
{
   public function parseServiceDescription()
   {
        $description = "gino is a man";
        $parsed = explode(' ', trim($description));

        if(($key = array_search("a", $parsed)) !== false) {
            unset($parsed[$key]);
        }

        if(($key = array_search("is", $parsed)) !== false) {
            unset($parsed[$key]);
        }

        $parsed = array_values($parsed);
        return $parsed;
   }

   // public function getRequest()
   // {
   //      $requests = Request::all();

   //      $parsed = $this->parseServiceDescription($request->description);
   // } 
}
