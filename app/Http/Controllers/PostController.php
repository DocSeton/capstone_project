<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Models\Post;
use \App\Models\Event;
use \App\Models\EventRegistration;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class PostController extends Controller
{
    public function events(Request $request)
    {
        $current = Carbon::now();
        $current = new Carbon();
        $loggeduser = auth()->user()->name;
        $postevent = Event::where('author', $loggeduser)->where('status','Approved')->get();

        //$ongoing = DB::select('select * from events where date_from >= $current->toDateString() && date_to <= $current->toDateString()');
        return view('events', compact('postevent','loggeduser','current'));


    }

    public function homepost(Request $request)
    {
        $current = Carbon::now();
        $current = new Carbon();
        $loggeduser = auth()->user()->name;
      //  return $current->toDateString();

        $postevent = Post::where('author', $loggeduser)->get();
       return view('posts.homepost', compact('postevent','current'));


    }


    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [

         'author' => 'required',
         'title' => 'required',
         'department' => 'required',
         'event' => 'required',
         'duration' => 'required',
         'venue' => 'required',
         'date_from' => 'required',
         'date_to' => 'required',
      ]);

      if ($validator->fails()) {
         return redirect()->Back()->withInput()->withErrors($validator);
      }

      if ($request->hasFile('image')) {

        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images/posts', $name);

        $postevent = new Post();
        $postevent->author = request('author');
        $postevent->department = request('department');
        $postevent->title = request('title');
        $postevent->link = request('link');
        $postevent->event = request('event');
        $postevent->duration = request('duration');
        $postevent->venue = request('venue');
        $postevent->date_from = request('date_from');
        $postevent->date_to = request('date_to');
        $postevent->image = $name;
        Session::flash('message', 'Event posted successfully!');
        Session::flash('alert-class', 'alert-success');
        $postevent->save();

      }elseif($request->has('link')){

          $postevent = new Post();
          $postevent->author = request('author');
          $postevent->department = request('department');
          $postevent->title = request('title');
          $postevent->link = request('link');
          $postevent->event = request('event');
          $postevent->duration = request('duration');
          $postevent->venue = request('venue');
          $postevent->date_from = request('date_from');
          $postevent->date_to = request('date_to');
          Session::flash('message', 'Event posted successfully!');
          Session::flash('alert-class', 'alert-success');
          $postevent->save();

        }else{
          $postevent = new Post();
          $postevent->author = request('author');
          $postevent->department = request('department');
          $postevent->title = request('title');
          $postevent->event = request('event');
          $postevent->duration = request('duration');
          $postevent->venue = request('venue');
          $postevent->date_from = request('date_from');
          $postevent->date_to = request('date_to');
          Session::flash('message', 'Event posted successfully!');
          Session::flash('alert-class', 'alert-success');
          $postevent->save();
        }

          return redirect()->back();

    }



    // Edit Post
        public function editpost($id){
        $loggeduser = auth()->user()->name;
         $postevent = Post::where('id', $id)->get();
         $postevents = Event::where('status', 'Approved')->where('author',$loggeduser)->get();
         return view('posts.editpost', compact('postevent','postevents','loggeduser'));
         //return view('posts.editpost')->with('postevent',$postevent);
      }



    // Update Post
      public function updatepost(Request $request,$id){
         $data = $request->except('_method','_token','submit');

         $validator = Validator::make($request->all(), [
           'author' => 'required',
           'title' => 'required',
           //'link' => 'required',
           //'image' => 'required',
         ]);

         if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
         }

         $postevent = Post::find($id);


         if($postevent->update($data)){

           if ($request->hasFile('image')) {

             $name = $request->file('image')->getClientOriginalName();

             $request->file('image')->storeAs('public/images/posts', $name);

             $postevent->image = $name;

             $postevent->save();

           }

            Session::flash('message', 'Record updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('post.homepost');
         }else{
            Session::flash('message', 'Data not updated!');
            Session::flash('alert-class', 'alert-danger');
         }




         return Back()->withInput();

        }


    // Delete Post
        public function destroypost($id){
           Post::destroy($id);

           Session::flash('message', 'Record deleted successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect()->route('events');
        }



        //Register on EVENT
        public function eventregistration($id){
         $postevent = Post::where('id', $id)->get();

         return view('posts.registerevent')->with('postevent',$postevent);
        }

        public function registerevent($id){
         $postevent = Post::where('id', $id)->get();

         return view('posts.usereventregister')->with('postevent',$postevent);
        }



        public function register(Request $request,$id){

          $data = $request->except('_method','_token','submit');

          $validator = Validator::make($request->all(), [
            'user' => 'required',
            'event' => 'required',
            'author' => 'required',
            'status' => 'required',
            'department' => 'required',

          ]);

          if ($validator->fails()) {
             return redirect()->Back()->withInput()->withErrors($validator);
          }

          $postevent = new EventRegistration();
          $postevent->user = request('user');
          $postevent->event = request('event');
          $postevent->author = request('author');
          $postevent->status = request('status');
          $postevent->department = request('department');

          $postevent->save();

          Session::flash('message', 'Registration succesful!');
          Session::flash('alert-class', 'alert-success');
          return redirect()->route('home')->withInput();


        }


        public function eventpost($id){

          $current = Carbon::now();
          $current = new Carbon();
          $loggeduser = auth()->user()->name;
          $events = Event::find($id);
          $postevent = Event::where('author', $loggeduser)->where('status','Approved')->get();
         return view('event.eventpost', compact('events','current','loggeduser','postevent'));
      }




      public function postingevent(Request $request, $id)
      {
        $validator = Validator::make($request->all(), [

           'author' => 'required',
           'title' => 'required',
           'department' => 'required',
           'event' => 'required',
           'duration' => 'required',
           'venue' => 'required',
           'date_from' => 'required',
           'date_to' => 'required',
        ]);

        if ($validator->fails()) {
           return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($request->hasFile('image')) {

          $name = $request->file('image')->getClientOriginalName();
          $request->file('image')->storeAs('public/images/posts', $name);

          $postevent = new Post();
          $postevent->author = request('author');
          $postevent->department = request('department');
          $postevent->title = request('title');
          $postevent->event = request('event');
          $postevent->link = request('link');
          $postevent->duration = request('duration');
          $postevent->venue = request('venue');
          $postevent->date_from = request('date_from');
          $postevent->date_to = request('date_to');
          $postevent->image = $name;
          Session::flash('message', 'Event posted successfully!');
          Session::flash('alert-class', 'alert-success');
          $postevent->save();

        }else{


            $postevent = new Post();
            $postevent->author = request('author');
            $postevent->department = request('department');
            $postevent->title = request('title');
            $postevent->event = request('event');
            $postevent->link = request('link');
            $postevent->duration = request('duration');
            $postevent->venue = request('venue');
            $postevent->date_from = request('date_from');
            $postevent->date_to = request('date_to');
            $postevent->image = $name;
            Session::flash('message', 'Event posted successfully!');
            Session::flash('alert-class', 'alert-success');
            $postevent->save();
          }

            return redirect()->route('post.homepost')->withInput();

      }


}
