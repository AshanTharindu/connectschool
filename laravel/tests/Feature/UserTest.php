<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    //database testing

    //test admin
    public function testAdmin()
    {
        $admin=User::where('type','admin')->get();
        $count=$admin->count();
        $this->assertGreaterThan(0,$count);
    }

    //test students
    public function testStudent()
    {
        $student=User::where('type','student')->get();
        $count=$student->count();
        $this->assertGreaterThan(0,$count);
    }

    //test teachers
    public function testCteacher()
    {
        $classteacher=User::where('type','class_teacher')->get();
        $count=$classteacher->count();
        $this->assertGreaterThan(0,$count);
    }

    //test parents
    public function testGuardian()
    {
        $guardian=User::where('type','parent')->get();
        $count=$guardian->count();
        $this->assertGreaterThan(0,$count);
    }

    //test registering users
    public function create_user()
    {
        $req=new Request();
        $req->first_name="first";
        $req->last_name="last";
        $req->grade = "6";
        $req->class_name= "B";
        $req->parent_id = "20";
        $req->email="dummy@dummy.com";
        $req->password=bcrypt('dummy123');
        UserController::studentPostSignUp($req);
        $user=User::where('email',$req->email)->get();
        $this->assertNotNull($user);
    }


    //login page testing
    public function testLoginPage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    //login page testing
    public function testDashboardPage()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }

    //this checks the login
    public function testLogin()
    {
        Auth::attempt(['email'=>'admin@gmail.com','password'=>'1234']);
        $this->assertTrue(Auth::check());
    }
    //this checks a fake login
    public function testFakeLogin()
    {
        Auth::attempt(['email'=>'fake@gmail.com','password'=>'fake123']);
        $this->assertNotTrue(Auth::check());
    }
//this checks the logout
    public function testLogout()
    {
        Auth::logout();
        $this->assertNotTrue(Auth::check());
    }

}
