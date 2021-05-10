<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use \App\Models\Event;
use \App\Models\Post;
use \App\Models\EventRegistration;
use \App\Models\Admin;
use \App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class EventController extends Controller
{
    public function create(){

      return view('event.create');
    }

    public function viewevent(Request $request)
    {
      $loggeduser = auth()->user()->name;
      $events = Event::where('author', $loggeduser)->where('status','Created')->get();
      return view('event.viewevent',['events'=>$events]);


    }

    public function approvedevents(Request $request)
    {
      $loggeduser = auth()->user()->name;
      $events = Event::where('author', $loggeduser)->where('status','Approved')->get();
      return view('event.approvedevents',['events'=>$events]);


    }


    public function requested(Request $request)
    {
      $loggeduser = auth()->user()->name;
      $events = Event::where('author', $loggeduser)->where('status','Approved')->get();
    //  $events = DB::select('select * from events where status = "Approved"');
      return view('event.requested',['events'=>$events]);


    }


    public function postedevent(Request $request)
    {
      $loggeduser = auth()->user()->name;
      $events = Post::where('author', $loggeduser)->get();
      //$events = DB::select('select * from posts');
      return view('event.postedevent',['events'=>$events]);


    }



//Create/Add
    public function addevent(Request $request){

      $data = $request->except('_method','_token','submit');

      $validator = Validator::make($request->all(), [
         'author' => 'required',
         'title' => 'required',
         'description' => 'required',
         'date_from' => 'required',
         'date_to' => 'required',
         'time_start' => 'required',
         'time_end' => 'required',
         'venue' => 'required',
        // 'file' => 'required',
      ]);

      if ($validator->fails()) {
         return redirect()->Back()->withInput()->withErrors($validator);
      }

      if($record = Event::firstOrCreate($data)){

         Session::flash('message', 'Added Successfully!');
         Session::flash('alert-class', 'alert-success');


         return redirect()->route('event.viewevent');
      }else{
         Session::flash('message', 'Data not saved!');
         Session::flash('alert-class', 'alert-danger');
      }

      return Back();

    }


// Edit
    public function edit($id){
     $events = Event::find($id);

     return view('event.edit')->with('events',$events);
  }

// Update
  public function update(Request $request,$id){
     $data = $request->except('_method','_token','submit');

     $validator = Validator::make($request->all(), [
       'author' => 'required',
       'title' => 'required',
       'description' => 'required',
       'date_from' => 'required',
       'date_to' => 'required',
       'time_start' => 'required',
       'time_end' => 'required',
       'venue' => 'required',

     ]);

     if ($validator->fails()) {
        return redirect()->Back()->withInput()->withErrors($validator);
     }
     $events = Event::find($id);

     if($events->update($data)){

        Session::flash('message', 'Record updated successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('event.viewevent');
     }else{
        Session::flash('message', 'Data not updated!');
        Session::flash('alert-class', 'alert-danger');
     }

     return Back()->withInput();
    }


// Delete
    public function destroy($id){
       Event::destroy($id);

       Session::flash('message', 'Record deleted successfully!');
       Session::flash('alert-class', 'alert-success');
       return redirect()->route('event.viewevent')->withInput();
    }




}
