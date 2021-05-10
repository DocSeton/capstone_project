<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Event;
use \App\Models\Post;
use \App\Models\EventRegistration;
use \App\Models\Admin;
use \App\Models\Evaluation;
use \App\Models\Image;
use \App\Models\Attendance;
use \App\Models\GalleryLink;
use Carbon\Carbon;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{

  /**
   * Create a new controller instance.
   * THIS PREVENTS ANONYMOUS USERS FROM ACCESSING ANY OF THE PAGES OR VIEW BELOW
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }


  public function home(){

    return view('admin.admin');
  }

  public function reports(){
    $current = Carbon::now();
    $current = new Carbon();
    $userdept = auth()->user()->department;
    $user = auth()->user()->name;
    $event = Event::where('author', $user)->get();
    $eventusers = User::where('role', 'Student')->where('department', $userdept)->get();
    $eventusers2 = User::where('role', 'Student')->where('department', $userdept)->get();
    $reports = Event::where('department', $userdept)->where('status', 'Approved')->get();
    $reports2 = Event::where('department', $userdept)->where('status', 'Approved')->get();
    $registered = EventRegistration::where('department', $userdept)->get();
    $registered2 = EventRegistration::where('department', $userdept)->get();
    $attendance = Attendance::where('department', $userdept)->get();
    $attendance2 = Attendance::where('department', $userdept)->get();

    return view('admin.reports', compact('reports','event','eventusers','registered','attendance','current','eventusers2','reports2','registered2','attendance2'));
  }

  public function print(){

    return view('admin.print');
  }

  public function userhome(){

    $postevent = Post::all();
    return view('userhome', compact('postevent'));

    //return view('userhome');
  }


  public function index()
  {
    $userdept = auth()->user()->department;
    $current = Carbon::now();
    $current = new Carbon();
    $postevent = Post::where('department', $userdept)->get();
    return view('home', compact('postevent','current'));

  }


  public function userevent()
  {
    $loggeduser = auth()->user()->name;
    $userevent = EventRegistration::where('user', $loggeduser)->get();
    return view('users.usersevent',['userevent'=>$userevent]);

  }


  public function calendar(){

    return view('calendar');
  }




  public function admin(Request $request)
  {
    $current = Carbon::now();
    $current = new Carbon();
    $loggeduser = auth()->user()->name;
    $userdept = auth()->user()->department;

   $event = Event::where('author', $loggeduser)->get();
   $user = User::where('department', $userdept)->where('role', 'Student')->get();
   $userevent = Event::where('author', $loggeduser)->get();
   $approved = Event::where('status', 'Approved')->where('author',$loggeduser)->get();
   $approved2 = Event::where('status', 'Approved')->where('author',$loggeduser)->get();
   $created = Event::where('status', 'Created')->where('author',$loggeduser)->get();
   $registered = EventRegistration::where('status', 'Registered')->where('department',$userdept)->get();

   return view('admin', compact('event','user','approved','registered','userevent','created','current','approved2'));


  }

  public function evaluations()
  {
    $loggeduser = auth()->user()->name;
    $events = Evaluation::where('author', $loggeduser)->get();
    return view('evaluation.evaluationlink',['events'=>$events]);

  }


  public function createusers()
  {
    return view('users.createusers');

  }


  public function sample(){

    return view('evaluation.sampleholder');
  }

  // Update
    public function update(Request $request,$id){
       $data = $request->except('_method','_token','submit');

       $validator = Validator::make($request->all(), [
         'name' => 'required',
         'middlename' => 'required',
         'lastname' => 'required',
         'email' => 'required',
         'password' => 'required',
         'role' => 'required',
         'department' => 'required',
       ]);

       if ($validator->fails()) {
          return redirect()->Back()->withInput()->withErrors($validator);
       }
       $users = User::find($id);

       if($users->update($data)){

          Session::flash('message', 'Record updated successfully!');
          Session::flash('alert-class', 'alert-success');
          return redirect()->route('users.adminusers');
       }else{
          Session::flash('message', 'Data not updated!');
          Session::flash('alert-class', 'alert-danger');
       }

       return Back()->withInput();
      }



// EDIT
      public function edit($id){
       $users = User::find($id);

       return view('users.edit')->with('users',$users);
    }



    public function viewusers(Request $request){
      $userdept = auth()->user()->department;
      $users = User::where('department', $userdept)->where('role', 'Student')->get();
      return view('evaluation.viewusers', compact('users','userdept'));


    }

    public function gallery(Request $request){
      $user = auth()->user()->name;
      $images = GalleryLink::where('author', $user)->get();
      return view('gallery.gallery', compact('images','user'));

    }

    public function usergallery(Request $request){
      $userdept = auth()->user()->department;
      $images = GalleryLink::where('college', $userdept)->get();
      return view('users.usergallery', compact('images','userdept'));

    }

    public function gallerylink(Request $request){
      $loggeduser = auth()->user()->name;
      $events = Event::where('author', $loggeduser)->where('status','Approved')->get();
      return view('gallery.gallerylink',['events'=>$events]);

    }


    public function uploadgallerylink($id){

      $current = Carbon::now();
      $current = new Carbon();
      $loggeduser = auth()->user()->name;
      $events = Event::find($id);
      $postevent = Event::where('author', $loggeduser)->where('status','Approved')->get();
     return view('gallery.uploadlink', compact('events','current','loggeduser','postevent'));
  }


  public function uploadlink(Request $request, $id)
  {
    $validator = Validator::make($request->all(), [

       'event' => 'required',
       'time' => 'required',
       'venue' => 'required',
       'duration' => 'required',
       'venue' => 'required',
       'link' => 'required',
       'image' => 'required',
    ]);

    if ($validator->fails()) {
       return redirect()->Back()->withInput()->withErrors($validator);
    }

    if ($request->hasFile('image')) {

      $name = $request->file('image')->getClientOriginalName();
      $request->file('image')->storeAs('public/images/gallery', $name);

      $postgallerylink = new GalleryLink();
      $postgallerylink->author = request('author');
      $postgallerylink->college = request('college');
      $postgallerylink->event = request('event');
      $postgallerylink->description = request('description');
      $postgallerylink->duration = request('duration');
      $postgallerylink->time = request('time');
      $postgallerylink->venue = request('venue');
      $postgallerylink->link = request('link');
      $postgallerylink->image = $name;
      Session::flash('message', 'Event posted successfully!');
      Session::flash('alert-class', 'alert-success');
      $postgallerylink->save();

    }else{

      $postgallerylink = new GalleryLink();
      $postgallerylink->author = request('author');
      $postgallerylink->college = request('college');
      $postgallerylink->event = request('event');
      $postgallerylink->description = request('description');
      $postgallerylink->duration = request('duration');
      $postgallerylink->time = request('time');
      $postgallerylink->venue = request('venue');
      $postgallerylink->link = request('link');
      $postgallerylink->image = $name;
      Session::flash('message', 'Event posted successfully!');
      Session::flash('alert-class', 'alert-success');
      $postgallerylink->save();

      }

        return redirect()->route('admin')->withInput();

  }




  public function uploadedgallerylinks(Request $request)
  {
    $loggeduser = auth()->user()->name;
    $links = GalleryLink::where('author', $loggeduser)->get();
    return view('gallery.uploadedgallerylinks',['links'=>$links]);


  }


  // Edit Gallery
      public function galleryedit($id){
       $links = GalleryLink::find($id);

       return view('gallery.edit')->with('links',$links);
    }


    // Update Gallery
      public function galleryupdate(Request $request,$id){
         $data = $request->except('_method','_token','submit');

         $validator = Validator::make($request->all(), [

           'link' => 'required',
           'image' => 'required',

         ]);

         if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
         }

            $gallery = GalleryLink::find($id);


           if ($request->hasFile('image')) {

             $name = $request->file('image')->getClientOriginalName();
             $request->file('image')->storeAs('public/images/gallery', $name);
             $gallery->link = request('link');
             $gallery->image = $name;
             $gallery->save();

           }

           return redirect()->route('gallery.gallery')->withInput();

      }




    public function uploadphotos(Request $request){

      return view('gallery.uploadphotos');

    }


    public function getupload(Request $request){
      $loggeduser = auth()->user()->name;
      $events = Event::where('author', $loggeduser)->where('status', 'Approved')->get();
      return view('event.uploadevaluation',['events'=>$events]);


    }


    public function upload(Request $request){

      $request->validate([
        'author' => 'required',
        'link' => 'required',
        'event' => 'required',
      ]);

      $uploadeval = new Evaluation();
      $uploadeval->author = request('author');
      $uploadeval->link = request('link');
      $uploadeval->event = request('event');
      $uploadeval->save();

      return redirect()->route('evaluation.evaluationlink');
    }





    // Edit
        public function editlink($id){
        $loggeduser = auth()->user()->name;
        $event = Event::where('author', $loggeduser)->get();
         $events = Evaluation::find($id);
         return view('evaluation.evaledit',compact('event','events'));
      }

    // Update
      public function updatelink(Request $request,$id){
         $data = $request->except('_method','_token','submit');

         $validator = Validator::make($request->all(), [

           'author' => 'required',
           'link' => 'required',
           'event' => 'required',


         ]);

         if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
         }
         $events = Evaluation::find($id);

         if($events->update($data)){

            Session::flash('message', 'Record updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('evaluation.evaluationlink');
         }else{
            Session::flash('message', 'Data not updated!');
            Session::flash('alert-class', 'alert-danger');
         }

         return Back()->withInput();
        }


    // Delete
        public function destroylink($id){
           Evaluation::destroy($id);

           Session::flash('message', 'Record deleted successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect()->route('evaluation.evaluationlink')->withInput();
        }


        public function showattendance(Request $request)
        {

            $event = Attendance::all();
           return view('attendance.showattendance', compact('event'));

        }



        public function addattendance(Request $request)
        {
          $current = Carbon::now();
          $current = new Carbon();
          $loggeduser = auth()->user()->name;
          $userdept = auth()->user()->department;

           $event = Event::where('attendance_status', 'Yes')->get();
           $user = User::where('department', $userdept)->where('role', 'Student')->get();
           $userevent = Event::where('author', $loggeduser)->get();
           $approved = Event::where('status', 'Approved')->where('author',$loggeduser)->get();

           return view('attendance.addattendance', compact('event','user','approved','userevent','current'));

        }


        public function addstudent(Request $request, $id)

        {
          $userdept = auth()->user()->department;
          $user = User::where('department', $userdept)->where('role', 'Student')->get();
          $events = Event::find($id);
          return view('attendance.addstudent', compact('events','user','userdept'));
        //  return view('attendance.addstudent')->with('events',$events);

        }


        public function addstudentattendance(Request $request,$id){

          $data = $request->except('_method','_token','submit');

          $validator = Validator::make($request->all(), [
            'title' => 'required',
            'author' => 'required',
            'department' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'attendee' => 'required',
            'in_or_out' => 'required',
            'attendee_attendance_status' => 'required',


          ]);

          if ($validator->fails()) {
             return redirect()->Back()->withInput()->withErrors($validator);
          }

          $postevent = new Attendance();
          $postevent->title = request('title');
          $postevent->author = request('author');
          $postevent->department = request('department');
          $postevent->time_start = request('time_start');
          $postevent->time_end = request('time_end');
          $postevent->attendee = request('attendee');
          $postevent->duration = request('duration');
          $postevent->venue = request('venue');
          $postevent->in_or_out = request('in_or_out');
          $postevent->attendee_attendance_status = request('attendee_attendance_status');

          $postevent->save();

          Session::flash('message', 'Registration succesful!');
          Session::flash('alert-class', 'alert-success');
          return redirect()->route('attendance.showattendance')->withInput();


        }




}
