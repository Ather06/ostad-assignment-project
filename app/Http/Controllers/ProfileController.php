<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index($id) 
    {
        $name = "Donal Trump";
        $age = "75";

        //Declare data with associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        //set cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        //create the cookie
        $cookie = cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        // return statement with the response method
        return response() -> json($data, 200) -> cookie($cookie);


    }
}
