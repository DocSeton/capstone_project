<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use DataTables;


class AdminUserController extends Controller
{
  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return \App\Models\Admin
   */

  public function addusers(){

    $data = request()->validate([
      'department' => 'required',
      'email' => 'required',
      'password' => 'required'

    ]);

    $admins = new \App\Models\Admin();

    $admins->department = request('department');
    $admins->email = request('email');
    $admins->password = request('password');

    $admins->save();

    return  redirect()->back();

  }

}
