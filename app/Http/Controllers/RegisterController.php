<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public $register_url = 'http://mypoolcity-qa.azurewebsites.net/api/register';

    public function index()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
        ]);

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');

        $response = Http::post($this->register_url, [
            "firstName" => $first_name,
            "lastName" => $last_name,
            "email" => $email,
            "password" => $password,
            "phone" => $phone,
            "userType" => 1,
        ]);

        $register_result = $response->json();
        if($register_result['status'] == true)
        {
            $class_name = ($register_result['message'] == "User is already registered.") ? "error" : "success";
            session()->flash($class_name, $register_result['message']);
            return redirect()->back();                   
        }
        else
        {
            session()->flash('error', 'Something went wrong. Please try again !');
            return redirect()->back();  
        }
    }
}
