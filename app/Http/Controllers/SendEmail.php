<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendEmail extends Controller
{
    public function fn_sendmail()
    {
    	$data = array(
    			'name' => "Mohit Sharma",
    	);
    	
    	Mail::send('mailtemplate', $data, function ($message) {
    		$message->from('mohit9987@gmail.com', 'Learning Laravel');
    	
    		$message->to('mohit9987@gmail.com')->subject('There is a new ticket!');
    	});
    		 
    }
}
