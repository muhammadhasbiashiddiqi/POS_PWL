<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
class ProductController extends Controller
{

    public function category() {
    	    return view('category');

	}
}
