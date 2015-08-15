<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\ServiceTransaction;

class ServiceTransactionController extends Controller
{
   public function parseServiceDescription ()
   {
        $description = "gino is a man";
        $parsed = explode(' ', trim($description));

        return $parsed;
   }
}
