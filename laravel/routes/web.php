<?php

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

Route::group(['middleware' => ['web']], function(){

//    login view

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');;



//    route for dashboard view
    Route::get('/dashboard',[

        'uses' => 'UserController@getDashboard',
        'as' => 'dashboard',
        'middleware' => 'auth'

    ]);

    //route for user view
    Route::get('/userview',[

        'uses' => 'UserController@getUserView',
        'as' => 'userview'


    ]);



//    route for create user
    Route::post('/studentsignup', [
        'uses' => 'UserController@studentPostSignUp',
        'as' => 'studentsignup'

    ]);

//    route for create admin
    Route::post('/adminsignup', [
        'uses' => 'UserController@adminPostSignUp',
        'as' => 'adminsignup'

    ]);

//    route for create class teacher
    Route::post('/classsignup', [
        'uses' => 'UserController@classPostSignUp',
        'as' => 'classsignup'

    ]);
//    route for create subject teacher
    Route::post('/subjectsignup', [
        'uses' => 'UserController@subjectPostSignUp',
        'as' => 'subjectsignup'

    ]);

    //    route for create parents

    Route::post('/parentsignup', [
        'uses' => 'UserController@parentPostSignUp',
        'as' => 'parentsignup'

    ]);

    //    route for register captains
    Route::post('/captainsignup', [
        'uses' => 'UserController@captainPostSignUp',
        'as' => 'captainsignup'

    ]);

    //    route for register chair persons
    Route::post('/chpersonsignup', [
        'uses' => 'UserController@chpersonPostSignUp',
        'as' => 'chpersonsignup'

    ]);

    //Adding posts

    Route::post('/createpost', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'createpost',
        'middleware' => 'auth'

    ]);

//    route for sign in
    Route::post('/signin', [
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'

    ]);

    Route::get('/register', function () {
        return view('register');
    });

//    routes for other main menu itema


    Route::get('/sports',[

        'uses' => 'PostController@show',
        'as' => 'sports'

    ]);
    Route::get('/clubs',[

        'uses' => 'PostController@showc',
        'as' => 'clubs'

    ]);


    //route for view marks
    Route::get('/marksView',[

        'uses' => 'MarksController@getViewMarks',
        'as' => 'marksView',
        'middleware' => 'auth'


    ]);

    //route for enter marks
    Route::get('/enterMarks', function () {
        return view('enterMarks');
    })->name('enterMarks');







    //routes for getting user creation pages


    Route::get('/reg_user', function () {
        return view('reg_user');
    })->name('reg_user');

    Route::get('/student', function () {
        return view('student');
    })->name('student');

    Route::get('/classteacher', function () {
        return view('ClassTeacher');
    })->name('classteacher');

    Route::get('/subjectteacher', function () {
        return view('subjectteacher');
    })->name('subjectteacher');

    Route::get('/guardian', function () {
        return view('guardian');
    })->name('guardian');

    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');

    Route::get('/captain', function () {
        return view('captain');
    })->name('captain');

    Route::get('/chperson', function () {
        return view('chperson');
    })->name('chperson');




//    route for user logout
    Route::get('/logout',[
        'uses' => 'UserController@getLogOut',
        'as' => 'logout'
    ]);

    //view post
    Route::get('/spost',function(){
        return view('spost');
    })->name('spost');

    Route::get('/cpost',function(){
        return view('cpost');
    })->name('cpost');


    //create sport post
    Route::post('/addPost', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'addPost'

    ]);
    //create club post
    Route::post('/addPostClub', [
        'uses' => 'PostController@postCreateClubPost',
        'as' => 'addPostClub'

    ]);

    //save marks
    Route::post('/savemarks', [
        'uses' => 'MarksController@postSaveMarks',
        'as' => 'savemarks'

    ]);

    //fetch marks to view
    Route::post('/fetchmarks', [
        'uses' => 'MarksController@postFetchMarks',
        'as' => 'fetchmarks'

    ]);


    //send messages view
    Route::get('/sendnotes', [
        'uses' => 'MessageController@SendMessages',
        'as' => 'sendnotes'

    ]);


    //send messages
    Route::post('/send', [
        'uses' => 'MessageController@postSendMessage',
        'as' => 'send'

    ]);

    Route::get('/viewwnotes', [
        'uses' => 'MessageController@getViewMessages',
        'as' => 'viewnotes'

    ]);

    Route::get('/viewsendwnotes', [
        'uses' => 'MessageController@getSendMessages',
        'as' => 'viewsendnotes'

    ]);






});





