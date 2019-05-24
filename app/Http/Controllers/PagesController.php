<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
      $title = "Coucou";
      return view('pages/about', ['title' => $title]);
    }
}
