<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use \App\Models\Post;
use \App\Models\EventRegistration;
use Carbon\Carbon;
use DB;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FileUpload extends Controller
{
  public function createForm(){
    return view('image-upload');
  }


  public function fileUpload(Request $request){

    $validator = Validator::make($request->all(), [
      'author' => 'required',
      'department' => 'required',
      'image' => 'required'
    ]);

    if ($request->hasFile('image')) {

      $name = $request->file('image')->getClientOriginalName();
      $request->file('image')->storeAs('public/images/uploads', $name);

      $uploadimg = new Image();
      $uploadimg->author = request('author');
      $uploadimg->department = request('department');
      $uploadimg->image = $name;

      $uploadimg->save();

    }

    return back()->with('success', 'File has successfully uploaded!');

  }




}
