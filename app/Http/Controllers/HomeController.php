<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail;


class HomeController extends Controller
{
 Public function Scanmail(){
    try {
        $email='builongmmo@gmail.com';
        $mailable = new Sendmail();
        Mail::to($email)->send($mailable);
        
    } catch (\Throwable $th) {
      dd($th);
    }
    return '123';
 }
}