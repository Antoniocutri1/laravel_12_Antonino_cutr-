<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function contact_us(){
        return view('contactUs');
    }

    public function email(Request $request){

        Mail::to($request->input('e-mail'))->send(new ContactMail($request->all()));

        return redirect()->route('dashboard')->with('status', 'Email inviata con successo!');

    }

    public function profile(){
        return view('profile');
    }

}
