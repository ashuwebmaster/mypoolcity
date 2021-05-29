<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public $auth_url = '';

    public function __construct()
    {
        $this->auth_url = "http://mypoolcity-qa.azurewebsites.net/api/auth";
    }

    public function index()
    {
        return view('login');
    }

    public function auth_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $rememberMe = ($request->input('rememberMe') == 1) ? true : false;

        try{

            $response = Http::post($this->auth_url, [
                "email" => $email,
                "password" => $password,
                "rememberMe" => $rememberMe
            ]);

            $auth_result = $response->json();

            if($auth_result['status'] == true){
                $user['email']  = $email;
                $data = $auth_result['data'];
                $user['token']  = $data['token'];
                $user['info']   = $data['accountInformation'];
                session()->put('authenticated',true);
                session()->put('user', $user);
                return redirect('/');
            }
            elseif($auth_result['status'] == false)
            {
                session()->flash('error', $auth_result['message']);
                return redirect()->back();   
            }
            else
            {
                session()->flash('error', 'Something went wrong. Please try again later!');
                return redirect()->back();  
            }

        } catch (\Exception $e)
        {
            session()->flash('error', $e->getMessage());
            return redirect()->back();  
        }  

 
    }

    public function logout()
    {
        session()->flush();
        return redirect()->back();          
    }
}
