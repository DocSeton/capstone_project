<?php

use Illuminate\Support\Facades\Route;

use App\Questionnaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();



Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

Route::get('/landing', [App\Http\Controllers\MainController::class, 'index'])->name('landing');

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('landing');

Route::get('/index', [App\Http\Controllers\MainController::class, 'index2'])->name('index');


## REGISTER
Route::get('/posts/get/{id}', [App\Http\Controllers\PostController::class, 'eventregistration'])->name('posts.registerevent');
Route::post('/posts/register/{id}', [App\Http\Controllers\PostController::class, 'register'])->name('posts.register');








// USER ROUTES
Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function () {


Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

Route::get('/userhome', [App\Http\Controllers\AdminController::class, 'userhome']);

Route::get('/userevent', [App\Http\Controllers\AdminController::class, 'userevent'])->name('users.usersevent');

Route::get('/usergallery', [App\Http\Controllers\AdminController::class, 'usergallery']);



});


//ADMINS ROUTES
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {


Route::get('/uploadevaluation', [App\Http\Controllers\AdminController::class, 'getupload']);
Route::post('/uploadevaluation', [App\Http\Controllers\AdminController::class, 'upload'])->name('event.uploadevaluation');



Route::get('calendar', [App\Http\Controllers\AdminController::class, 'calendar']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

Route::get('/createusers', [App\Http\Controllers\AdminController::class, 'createusers'])->name('users.createusers');


//POST EVENT

Route::get('/homepost', [App\Http\Controllers\PostController::class, 'homepost'])->name('post.homepost');

Route::get('/events', [App\Http\Controllers\PostController::class, 'events'])->name('events');

Route::post('/events', [App\Http\Controllers\PostController::class, 'store'])->name('events');



Route::get('/eventpost/get/{id}', [App\Http\Controllers\PostController::class, 'eventpost'])->name('event.eventpost');
Route::post('/eventpost/post/{id}', [App\Http\Controllers\PostController::class, 'postingevent'])->name('event.postingevent');


//Update Post

## Update
Route::get('/posts/store/{id}', [App\Http\Controllers\PostController::class, 'editpost'])->name('posts.editpost');
Route::post('/posts/update/{id}', [App\Http\Controllers\PostController::class, 'updatepost'])->name('posts.updatepost');

## Delete
Route::get('/posts/delete/{id}', [App\Http\Controllers\PostController::class, 'destroypost'])->name('posts.delete');




Route::post('/addusers',[App\Http\Controllers\AdminUserController::class, 'addusers']);

Route::get('/adminhome', [App\Http\Controllers\AdminController::class, 'home']);

Route::get('/sampleholder', [App\Http\Controllers\AdminController::class, 'sample']);


// EVENT ROUTES

Route::get('/create', [App\Http\Controllers\EventController::class, 'create'])->name('event.create');

Route::get('/viewevent', [App\Http\Controllers\EventController::class, 'viewevent'])->name('event.viewevent');

Route::get('/approvedevents', [App\Http\Controllers\EventController::class, 'approvedevents'])->name('event.approvedevents');

Route::get('/show', [App\Http\Controllers\QuestionnaireController::class, 'show'])->name('evaluation.show');

Route::get('/requested', [App\Http\Controllers\EventController::class, 'requested'])->name('event.requested');

Route::get('/postedevent', [App\Http\Controllers\EventController::class, 'postedevent'])->name('event.postedevent');

Route::post('/addevent',[App\Http\Controllers\EventController::class, 'addevent'])->name('event.addevent');



//EVENT CRUD
## Update
Route::get('/event/store/{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('event.edit');
Route::post('/event/update/{id}', [App\Http\Controllers\EventController::class, 'update'])->name('event.update');

## Delete
Route::get('/event/delete/{id}', [App\Http\Controllers\EventController::class, 'destroy'])->name('event.delete');





// EVALUATION ROUTES

Route::get('/evaluationlink', [App\Http\Controllers\AdminController::class, 'evaluations'])->name('evaluation.evaluationlink');

//EVALUATION CRUD

## Update
Route::get('/link/store/{id}', [App\Http\Controllers\AdminController::class, 'editlink'])->name('link.edit');
Route::post('/link/update/{id}', [App\Http\Controllers\AdminController::class, 'updatelink'])->name('link.update');

## Delete
Route::get('/link/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroylink'])->name('event.delete');




Route::get('/questionnaire', [App\Http\Controllers\QuestionnaireController::class, 'create'])->name('evaluation.questionnaire');

Route::post('/questionnaire', [App\Http\Controllers\QuestionnaireController::class, 'store'])->name('evaluation.questionnaire');



Route::get('/questionnaire/{questionnaire}', [App\Http\Controllers\QuestionnaireController::class, 'showquestionnaire'])->name('evaluation.showquestionnaire');

Route::get('/customquestionnaire/{questionnaire}', [App\Http\Controllers\QuestionnaireController::class, 'customquestionnaire'])->name('evaluation.customquestionnaire');



Route::get('/questionnaire/{questionnaire}/questions/create', [App\Http\Controllers\QuestionController::class, 'createtemplate']);

Route::get('/customquestionnaire/{questionnaire}/questions/create', [App\Http\Controllers\QuestionController::class, 'createcustom']);

Route::post('/questionnaire/{questionnaire}/questions', [App\Http\Controllers\QuestionController::class, 'store']);



Route::get('/showquestions', [App\Http\Controllers\QuestionController::class, 'showquestions'])->name('question.showquestions');

Route::get('/showanswers', [App\Http\Controllers\QuestionController::class, 'showanswers'])->name('question.showanswers');

## Delete
Route::get('/attendance/delete/{id}', [App\Http\Controllers\QuestionController::class, 'destroyattendance'])->name('attendance.delete');

Route::get('/view', [App\Http\Controllers\QuestionnaireController::class, 'view'])->name('evaluation.view');

Route::get('/show', [App\Http\Controllers\QuestionnaireController::class, 'show'])->name('evaluation.show');



Route::get('/add', [App\Http\Controllers\QuestionnaireController::class, 'add'])->name('evaluation.add');

Route::get('/custom', [App\Http\Controllers\QuestionnaireController::class, 'custom']);

Route::post('/custom', [App\Http\Controllers\QuestionnaireController::class, 'addquestionnaire']);

Route::get('/questionnairecreate', [App\Http\Controllers\QuestionnaireController::class, 'questionnaire']);

Route::get('/atemplate', [App\Http\Controllers\QuestionnaireController::class, 'atemplate']);

Route::post('/atemplate', [App\Http\Controllers\QuestionnaireController::class, 'addquestionnaire']);

Route::get('/btemplate', [App\Http\Controllers\QuestionnaireController::class, 'btemplate']);


Route::get('/viewusers', [App\Http\Controllers\AdminController::class, 'viewusers'])->name('evaluation.viewusers');

Route::get('/gallery', [App\Http\Controllers\AdminController::class, 'gallery'])->name('gallery.gallery');

Route::get('/gallerylink', [App\Http\Controllers\AdminController::class, 'gallerylink'])->name('gallery.viewlinks');

Route::get('/uploadedgallerylinks', [App\Http\Controllers\AdminController::class, 'uploadedgallerylinks'])->name('gallery.uploadedgallerylinks');

//Upload of Gallery
Route::get('/gallerylink/get/{id}', [App\Http\Controllers\AdminController::class, 'uploadgallerylink'])->name('event.uploadlink');
Route::post('/gallerylink/post/{id}', [App\Http\Controllers\AdminController::class, 'uploadlink'])->name('event.galleryupload');

//Edit Gallery
Route::get('/gallery/store/{id}', [App\Http\Controllers\AdminController::class, 'galleryedit'])->name('gallery.edit');
Route::post('/gallery/update/{id}', [App\Http\Controllers\AdminController::class, 'galleryupdate'])->name('gallery.update');

## Delete
Route::get('/gallerylink/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('gallery.delete');


Route::get('/uploadphotos', [App\Http\Controllers\AdminController::class, 'uploadphotos'])->name('gallery.uploadphotos');

Route::get('/image-upload', [App\Http\Controllers\FileUpload::class, 'createForm']);

Route::post('/image-upload', [App\Http\Controllers\FileUpload::class, 'fileUpload'])->name('imageUpload');


//Attendance route

Route::get('/showattendance', [App\Http\Controllers\AdminController::class, 'showattendance'])->name('attendance.showattendance');

Route::get('/addattendance', [App\Http\Controllers\AdminController::class, 'addattendance'])->name('attendance.addattendance');

Route::get('/addstudent', [App\Http\Controllers\AdminController::class, 'addstudent']);

Route::get('/reports', [App\Http\Controllers\AdminController::class, 'reports'])->name('admin.reports');





## Update
Route::get('/attendance/store/{id}', [App\Http\Controllers\AdminController::class, 'addstudent'])->name('attendance.addstudent');
Route::post('/attendance/update/{id}', [App\Http\Controllers\AdminController::class, 'addstudentattendance'])->name('attendance.addstudentattendance');

});







// SUPER ADMIN ROUTES
Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function () {

Route::get('/collegegallery', [App\Http\Controllers\SuperadminController::class, 'collegegallery'])->name('superadmin.collegegallery');

Route::get('/eventall', [App\Http\Controllers\SuperadminController::class, 'eventall'])->name('superadmin.eventall');

Route::get('/superadmin', [App\Http\Controllers\SuperadminController::class, 'superadmin'])->name('superadmin');

Route::get('/adminusers', [App\Http\Controllers\SuperadminController::class, 'adminusers'])->name('users.adminusers');

Route::get('/studentusers', [App\Http\Controllers\SuperadminController::class, 'studentusers'])->name('users.studentusers');
##Update
Route::get('/users/store/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('users.edit');
Route::post('/users/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('users.update');

Route::get('/approved', [App\Http\Controllers\SuperadminController::class, 'approved'])->name('superadmin.approved');

Route::get('/createadmin', [App\Http\Controllers\SuperadminController::class, 'create']);

Route::post('/createadmin', [App\Http\Controllers\SuperadminController::class, 'addusers']);

Route::get('/request', [App\Http\Controllers\SuperadminController::class, 'request'])->name('superadmin.request');




## Update
Route::get('/superadmin/store/{id}', [App\Http\Controllers\SuperadminController::class, 'edit'])->name('superadmin.edit');
Route::post('/superadmin/update/{id}', [App\Http\Controllers\SuperadminController::class, 'update'])->name('superadmin.update');


## Delete
Route::get('/user/delete/{id}', [App\Http\Controllers\SuperadminController::class, 'destroy'])->name('user.delete');


Route::get('/uploadedevaluation', [App\Http\Controllers\SuperadminController::class, 'uploadedeval'])->name('superadmin.uploadedeval');

Route::get('/adminusersview', [App\Http\Controllers\SuperadminController::class, 'adminusersview'])->name('superadmin.adminusers');


//COLLEGE ROUTES

Route::get('/cas', [App\Http\Controllers\SuperadminController::class, 'cas'])->name('college.cas');
Route::get('/cba', [App\Http\Controllers\SuperadminController::class, 'cba'])->name('college.cba');
Route::get('/ccje', [App\Http\Controllers\SuperadminController::class, 'ccje'])->name('college.ccje');
Route::get('/cect', [App\Http\Controllers\SuperadminController::class, 'cect'])->name('college.cect');
Route::get('/chtm', [App\Http\Controllers\SuperadminController::class, 'chtm'])->name('college.chtm');
Route::get('/conams', [App\Http\Controllers\SuperadminController::class, 'conams'])->name('college.conams');
Route::get('/graduateschool', [App\Http\Controllers\SuperadminController::class, 'graduateschool'])->name('college.graduateschool');
Route::get('/jwslg', [App\Http\Controllers\SuperadminController::class, 'jwslg'])->name('college.jwslg');
Route::get('/coed', [App\Http\Controllers\SuperadminController::class, 'coed'])->name('college.coed');
Route::get('/osa', [App\Http\Controllers\SuperadminController::class, 'osa'])->name('college.osa');

});










// SURVEY ROUTES

Route::get('/templatesurvey/{questionnaire}', [App\Http\Controllers\SurveyController::class, 'surveytemplateview'])->name('survey.template');

Route::get('/surveys', [App\Http\Controllers\SurveyController::class, 'surveys'])->name('survey.surveys');

Route::post('/templatesurvey/{questionnaire}', [App\Http\Controllers\SurveyController::class, 'store']);
