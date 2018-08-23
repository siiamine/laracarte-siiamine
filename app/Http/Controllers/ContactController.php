<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function  create(){

        return view('contact.create');
    }
    public function store(ContactRequest $request){
        $message=Message::create($request->only('name','email','message'));

        $mailable=new ContactMessageCreated($message);

        Mail::to(config('laracarte.admin_support_email'))->send($mailable);

        flashy()->success('nous vous reponderons dans les plus bref délais.');
        return redirect()->route('root_path');
    }
}
