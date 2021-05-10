<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index()
  {
      return view('landing');
  }

  public function index2()
  {
      return view('index');
  }

}
