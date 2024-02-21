<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class usercontroller extends Controller
{
    //
    function show()
    {
        $data = member::paginate(1);
        return view('List',['members'=>$data]);
    }
}