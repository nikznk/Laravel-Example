<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        $tasks = [
            'Hello',
             'i am',
             'Groot'    
        ]; 
        return view('welcome')->with([
            'tasks' => [ 'Hello',
            'i am',
            'Groot' ] ]);     
    }
    public function about()
    {
       return view('about');
    }
    public function contact()
    {
       return view('contact');
    }

}
