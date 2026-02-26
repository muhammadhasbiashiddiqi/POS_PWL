<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function home()
    {
        return view('home'); //untuk menampilkan halaman home.blade.php yang berada di dalam folder user
    }
public function greeting(){
        return view('user.profile')
            ->with('name','Hasbi')
            ->with('occupation','Astronaut');
    }
}
