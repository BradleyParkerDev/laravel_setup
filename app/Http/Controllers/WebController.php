<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function homePage()
    {
        $heading = 'Laravel Setup';
        return view('pages/home', ['heading' => $heading]);
    }

    public function authPage()
    {
        $heading = 'Auth page!';
        return view('pages/auth', ['heading' => $heading]);
    } 
    public function settingsPage()
    {
        $heading = 'Settings page!';
        return view('pages/settings', ['heading' => $heading]);
    }
      
    public function userPage(string $id)
    {
        $heading = 'User page!';
        return view('pages/user', [
            'heading' => $heading,
            'userId' => $id,
        ]);
    }
       

    

}
    
