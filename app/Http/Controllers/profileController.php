<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class profileController extends Controller
{
public function greeting(){
        return view('user.profile')
            ->with('name','Hasbi')
            ->with('occupation','POS Sales');
    }
}
