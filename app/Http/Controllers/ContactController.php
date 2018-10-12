<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;

class ContactController extends Controller
{
    public function getcontact()
    {
        return view('contact-us-full-width');
    }

    public function postcontact(Request $request)
    {

     $this->Validate($request,['email'=>'required|email',
     'nom'=>'min:3',
     'message'=>'min:10']) ;

    $data = array (
      'email' => $request-> email,
      'nom'=> $request ->  nom,
      'bodymessage'=> $request-> message

    );



     Mail::send('contact-us-full-width',$data, function($message) use ($data){
         $message->from($data['email']);
         $message->to('hello@dev.oi');
         $message->subject($data['nom']);


     });

    }
}
