<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function create() {
        return view('landing');
    }
    public function store(ContactFormRequest $request) {

        $contact=[];

        $contact['name']=$request->get('name');
        $contact['email']=$request->get('email');
        $contact['message']=$request->get('message');

        flash('Ваше сообщение было отправлено!')->success();


        Mail::to('prozardanwork@gmail.com')->send(new ContactEmail($contact));
        return redirect()->route('contact.create');
    }
} 
