<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Input;
use App\Models\Admin;
use DB;
use \App\Models\EventRegistration;
use \App\Models\Attendance;
use \App\Models\Post;
use \App\Models\GalleryLink;
use Illuminate\Support\Facades\Session;
use \App\Models\Event;
use Carbon\Carbon;
use \App\Models\Image;

class SuperadminController extends Controller
{
    public function create(){

      return view('superadmin.createadmin');
    }


    public function superadmin()
    {
       $current = Carbon::now();
       $current = new Carbon();
       $loggeduser = auth()->user()->name;
       $event = Event::all();
       $user = User::where('role', 'Student')->get();
       $adminuser = User::where('role', 'Admin')->get();
       $approved = Event::where('status', 'Approved')->get();
       $created = Event::where('status', 'Created')->get();
       $allevent = Event::where('status', 'Approved')->get();

       $admin = User::where('role', 'Admin')->get();



       $adminusers = User::where('role', 'Student')->get();
       $registered = EventRegistration::where('status', 'Registered')->get();
       return view('superadmin', compact('event','user','approved','registered','adminuser','created','admin','current','allevent'));
    //  return view('superadmin');
    }

    public function edit($id){
     $events = Event::find($id);

     return view('superadmin.edit')->with('events',$events);
   }


   public function adminusersview(){

     $current = Carbon::now();
     $current = new Carbon();
     $loggeduser = auth()->user()->name;
     $event = Event::all();
     $user = User::where('role', 'Student')->get();
     $adminuser = User::where('role', 'Admin')->get();
     $approved = Event::where('status', 'Approved')->get();
     $created = Event::where('status', 'Created')->get();
     $allevent = Event::where('status', 'Approved')->get();

     $admin = User::where('role', 'Admin')->get();



     $adminusers = User::where('role', 'Student')->get();
     $registered = EventRegistration::where('status', 'Registered')->get();
     return view('superadmin.adminusers', compact('event','user','approved','registered','adminuser','created','admin','current','allevent'));
   }

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

    public function request()
    {

      $events = DB::select('select * from events where status = "Created"');
      return view('superadmin.request',['events'=>$events]);
    //  return view('superadmin.request');

    }


    public function approved(Request $request)
    {

      $events = Event::where('status','Approved')->get();
      return view('superadmin.approved',['events'=>$events]);


    }



    public function adminlogin(Request $request){
    $data = request()->validate([
    'email' => 'required',
    'password' => 'required',
    ]);

    $user_data = array(
    'email' => $request->get('email') ,
    'password' => $request->get('password')
    );

    if (Auth::attempt($user_data)) {
        // Authentication passed...
        return redirect()->intended('admin');
    }
    return Redirect::to('adminlogin')->withSuccess('Oppes! You have entered invalid credentials');
}



    public function login(){

      return view('admin.adminlogin');
    }

    public function adminregister(){

      return view('superadmin.adminregister');
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
            return redirect()->route('superadmin.request');
         }else{
            Session::flash('message', 'Data not updated!');
            Session::flash('alert-class', 'alert-danger');
         }

         return redirect()->route('superadmin.request');
        }




        public function adminusers()
        {

         $users = DB::select('select * from users where role = "Admin"');
         return view('users.adminusers',['users'=>$users]);

        }

        public function studentusers()
        {

         $users = DB::select('select * from users where role = "Student"');
         return view('users.studentusers',['users'=>$users]);

        }


        public function eventall()
        {

         $events = DB::select('select * from events');
         return view('superadmin.eventall',['events'=>$events]);

        }


        public function destroy($id){
           User::destroy($id);

           Session::flash('message', 'Record deleted successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect()->route('users.adminusers')->withInput();
        }


        public function uploadedeval()
        {
          $events = DB::select('select * from evaluations');
          return view('superadmin.uploadedeval',['events'=>$events]);

        }


        public function cas()
        {
          $current = Carbon::now();
          $current = new Carbon();
          $user = User::where('department', 'CAS')->where('role', 'Admin')->get();
          $event = Event::where('department', 'CAS')->get();
          $eventusers = User::where('role', 'Student')->where('department', 'CAS')->get();
          $eventusers2 = User::where('role', 'Student')->where('department', 'CAS')->get();
          $reports = Event::where('department', 'CAS')->where('status', 'Approved')->get();
          $reports2 = Event::where('department', 'CAS')->where('status', 'Approved')->get();
          $registered = EventRegistration::where('department', 'CAS')->get();
          $registered2 = EventRegistration::where('department', 'CAS')->get();
          $attendance = Attendance::where('department', 'CAS')->get();
          $attendance2 = Attendance::where('department', 'CAS')->get();
          $cect = Event::where('department', 'CAS')->get();

          return view('college.cas', compact('cect','event','registered','eventusers','reports','attendance','user','reports2','registered2','attendance2','eventusers2','current'));

        }



        public function cba()
        {
          $current = Carbon::now();
          $current = new Carbon();
          $user = User::where('department', 'CBA')->where('role', 'Admin')->get();
          $event = Event::where('department', 'CBA')->get();
          $eventusers = User::where('role', 'Student')->where('department', 'CBA')->get();
          $eventusers2 = User::where('role', 'Student')->where('department', 'CBA')->get();
          $reports = Event::where('department', 'CBA')->where('status', 'Approved')->get();
          $reports2 = Event::where('department', 'CBA')->where('status', 'Approved')->get();
          $registered = EventRegistration::where('department', 'CBA')->get();
          $registered2 = EventRegistration::where('department', 'CBA')->get();
          $attendance = Attendance::where('department', 'CBA')->get();
          $attendance2 = Attendance::where('department', 'CBA')->get();
          $cect = Event::where('department', 'CBA')->get();
          return view('college.cba', compact('cect','event','registered','eventusers','reports','attendance','user','reports2','registered2','attendance2','eventusers2','current'));

        }



        public function ccje()
        {
          $current = Carbon::now();
          $current = new Carbon();
          $user = User::where('department', 'CCJE')->where('role', 'Admin')->get();
          $event = Event::where('department', 'CCJE')->get();
          $eventusers = User::where('role', 'Student')->where('department', 'CCJE')->get();
          $eventusers2 = User::where('role', 'Student')->where('department', 'CCJE')->get();
          $reports = Event::where('department', 'CCJE')->where('status', 'Approved')->get();
          $reports2 = Event::where('department', 'CCJE')->where('status', 'Approved')->get();
          $registered = EventRegistration::where('department', 'CCJE')->get();
          $registered2 = EventRegistration::where('department', 'CCJE')->get();
          $attendance = Attendance::where('department', 'CCJE')->get();
          $attendance2 = Attendance::where('department', 'CCJE')->get();
          $cect = Event::where('department', 'CCJE')->get();
          return view('college.ccje', compact('cect','event','registered','eventusers','reports','attendance','user','reports2','registered2','attendance2','eventusers2','current'));

        }



        public function cect()
        {

          $current = Carbon::now();
          $current = new Carbon();
          $user = User::where('department', 'CECT')->where('role', 'Admin')->get();
          $event = Event::where('department', 'CECT')->get();
          $eventusers = User::where('role', 'Student')->where('department', 'CECT')->get();
          $eventusers2 = User::where('role', 'Student')->where('department', 'CECT')->get();
          $reports = Event::where('department', 'CECT')->where('status', 'Approved')->get();
          $reports2 = Event::where('department', 'CECT')->where('status', 'Approved')->get();
          $registered = EventRegistration::where('department', 'CECT')->get();
          $registered2 = EventRegistration::where('department', 'CECT')->get();
          $attendance = Attendance::where('department', 'CECT')->get();
          $attendance2 = Attendance::where('department', 'CECT')->get();
          $cect = Event::where('department', 'CECT')->get();
          return view('college.cect', compact('cect','event','registered','eventusers','reports','attendance','user','reports2','registered2','attendance2','eventusers2','current'));

        }



        public function coed()
        {
          $current = Carbon::now();
          $current = new Carbon();
          $user = User::where('department', 'COED')->where('role', 'Admin')->get();
          $event = Event::where('department', 'COED')->get();
          $eventusers = User::where('role', 'Student')->where('department', 'COED')->get();
          $eventusers2 = User::where('role', 'Student')->where('department', 'COED')->get();
          $reports = Event::where('department', 'COED')->where('status', 'Approved')->get();
          $reports2 = Event::where('department', 'COED')->where('status', 'Approved')->get();
          $registered = EventRegistration::where('department', 'COED')->get();
          $registered2 = EventRegistration::where('department', 'COED')->get();
          $attendance = Attendance::where('department', 'COED')->get();
          $attendance2 = Attendance::where('department', 'COED')->get();
          $cect = Event::where('department', 'COED')->get();
          return view('college.coed', compact('cect','event','registered','eventusers','reports','attendance','user','reports2','registered2','attendance2','eventusers2','current'));

        }



        public function chtm()
        {
          $current = Carbon::now();
          $current = new Carbon();
          $user = User::where('department', 'CHTM')->where('role', 'Admin')->get();
          $event = Event::where('department', 'CHTM')->get();
          $eventusers = User::where('role', 'Student')->where('department', 'CHTM')->get();
          $eventusers2 = User::where('role', 'Student')->where('department', 'CHTM')->get();
          $reports = Event::where('department', 'CHTM')->where('status', 'Approved')->get();
          $reports2 = Event::where('department', 'CHTM')->where('status', 'Approved')->get();
          $registered = EventRegistration::where('department', 'CHTM')->get();
          $registered2 = EventRegistration::where('department', 'CHTM')->get();
          $attendance = Attendance::where('department', 'CHTM')->get();
          $attendance2 = Attendance::where('department', 'CHTM')->get();
          $cect = Event::where('department', 'CHTM')->get();
          return view('college.chtm', compact('cect','event','registered','eventusers','reports','attendance','user','reports2','registered2','attendance2','eventusers2','current'));
        }



        public function conams()
        {
          $current = Carbon::now();
          $current = new Carbon();
          $user = User::where('department', 'CONAMS')->where('role', 'Admin')->get();
          $event = Event::where('department', 'CONAMS')->get();
          $eventusers = User::where('role', 'Student')->where('department', 'CONAMS')->get();
          $eventusers2 = User::where('role', 'Student')->where('department', 'CONAMS')->get();
          $reports = Event::where('department', 'CONAMS')->where('status', 'Approved')->get();
          $reports2 = Event::where('department', 'CONAMS')->where('status', 'Approved')->get();
          $registered = EventRegistration::where('department', 'CONAMS')->get();
          $registered2 = EventRegistration::where('department', 'CONAMS')->get();
          $attendance = Attendance::where('department', 'CONAMS')->get();
          $attendance2 = Attendance::where('department', 'CONAMS')->get();
          $cect = Event::where('department', 'CONAMS')->get();
          return view('college.conams', compact('cect','event','registered','eventusers','reports','attendance','user','reports2','registered2','attendance2','eventusers2','current'));

        }



        public function graduateschool()
        {
          $current = Carbon::now();
          $current = new Carbon();
          $user = User::where('department', 'Graduate School')->where('role', 'Admin')->get();
          $event = Event::where('department', 'Graduate School')->get();
          $eventusers = User::where('role', 'Student')->where('department', 'Graduate School')->get();
          $eventusers2 = User::where('role', 'Student')->where('department', 'Graduate School')->get();
          $reports = Event::where('department', 'Graduate School')->where('status', 'Approved')->get();
          $reports2 = Event::where('department', 'Graduate School')->where('status', 'Approved')->get();
          $registered = EventRegistration::where('department', 'Graduate School')->get();
          $registered2 = EventRegistration::where('department', 'Graduate School')->get();
          $attendance = Attendance::where('department', 'Graduate School')->get();
          $attendance2 = Attendance::where('department', 'Graduate School')->get();
          $cect = Event::where('department', 'Graduate School')->get();
          return view('college.graduateschool', compact('cect','event','registered','eventusers','reports','attendance','user','reports2','registered2','attendance2','eventusers2','current'));

        }


        public function jwslg()
        {
          $current = Carbon::now();
          $current = new Carbon();
          $user = User::where('department', 'JWSLG')->where('role', 'Admin')->get();
          $event = Event::where('department', 'JWSLG')->get();
          $eventusers = User::where('role', 'Student')->where('department', 'JWSLG')->get();
          $eventusers2 = User::where('role', 'Student')->where('department', 'JWSLG')->get();
          $reports = Event::where('department', 'JWSLG')->where('status', 'Approved')->get();
          $reports2 = Event::where('department', 'JWSLG')->where('status', 'Approved')->get();
          $registered = EventRegistration::where('department', 'JWSLG')->get();
          $registered2 = EventRegistration::where('department', 'JWSLG')->get();
          $attendance = Attendance::where('department', 'JWSLG')->get();
          $attendance2 = Attendance::where('department', 'JWSLG')->get();
          $cect = Event::where('department', 'JWSLG')->get();
          return view('college.jwslg', compact('cect','event','registered','eventusers','reports','attendance','user','reports2','registered2','attendance2','eventusers2','current'));

        }


        public function osa()
        {
          $current = Carbon::now();
          $current = new Carbon();
          $user = User::where('department', 'OSA')->where('role', 'Admin')->get();
          $event = Event::where('department', 'OSA')->get();
          $eventusers = User::where('role', 'Student')->where('department', 'OSA')->get();
          $eventusers2 = User::where('role', 'Student')->where('department', 'OSA')->get();
          $reports = Event::where('department', 'OSA')->where('status', 'Approved')->get();
          $reports2 = Event::where('department', 'OSA')->where('status', 'Approved')->get();
          $registered = EventRegistration::where('department', 'OSA')->get();
          $registered2 = EventRegistration::where('department', 'OSA')->get();
          $attendance = Attendance::where('department', 'OSA')->get();
          $attendance2 = Attendance::where('department', 'OSA')->get();
          $cect = Event::where('department', 'OSA')->get();
          return view('college.osa', compact('cect','event','registered','eventusers','reports','attendance','user','reports2','registered2','attendance2','eventusers2','current'));

        }


        public function collegegallery()
        {

          $cas = GalleryLink::where('college', 'CAS')->get();
          $cba = GalleryLink::where('college', 'CBA')->get();
          $ccje = GalleryLink::where('college', 'CCJE')->get();
          $cect = GalleryLink::where('college', 'CECT')->get();
          $coed = GalleryLink::where('college', 'COED')->get();
          $chtm = GalleryLink::where('college', 'CHTM')->get();
          $conams = GalleryLink::where('college', 'CONAMS')->get();
          $graduateschool = GalleryLink::where('college', 'Graduate School')->get();
          $jwslg = GalleryLink::where('college', 'JWSLG')->get();
          $osa = GalleryLink::where('college', 'OSA')->get();
          return view('superadmin.collegegallery', compact('cect','cas','cba','ccje','coed','chtm','conams','graduateschool','jwslg','osa'));
        }


}
