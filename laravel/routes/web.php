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

    Route::post('/subjectsignup', [
        'uses' => 'UserController@subjectPostSignUp',
        'as' => 'subjectsignup'

    ]);


    Route::post('/parentsignup', [
        'uses' => 'UserController@parentPostSignUp',
        'as' => 'parentsignup'

    ]);

    Route::post('/captainsignup', [
        'uses' => 'UserController@captainPostSignUp',
        'as' => 'captainsignup'

    ]);

    Route::post('/chpersonsignup', [
        'uses' => 'UserController@chpersonPostSignUp',
        'as' => 'chpersonsignup'

    ]);

    Route::post('/createpost', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'createpost'

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


    Route::get('/marksView', function () {
        return view('marksView');
    })->name('marksView');

    Route::get('/marksView',[

        'uses' => 'MarksController@getViewMarks',
        'as' => 'marksView'


    ]);

    Route::get('/enterMarks', function () {
        return view('enterMarks');
    })->name('enterMarks');

    Route::get('/messages', function () {
        return view('messages');
    })->name('messages');

    Route::get('/reg_user', function () {
        return view('reg_user');
    })->name('reg_user');


//    route for user logout
    Route::get('/logout',[
        'uses' => 'UserController@getLogOut',
        'as' => 'logout'
    ]);

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



});





