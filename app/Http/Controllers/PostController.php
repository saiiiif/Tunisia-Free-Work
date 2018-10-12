<?php

namespace App\Http\Controllers;

use App\Membre;
use App\Post;
use App\Postulation;
use Illuminate\Http\Request;
use Auth;
class PostController extends Controller
{
    

     function store(request $request) {
    
     $this->validate(request(),[
      
     'titre'=>'required',
     'postjob'=>'required'
     ]);


          $membre= Membre::findOrFail(Auth::guard('membre')->user()->id);
          $membre->posts()->save( new Post(['titre'=>$request->titre,'postjob'=>$request->postjob]));
          alert()->success('Votre Offre a ete postée .', 'bien!');
          $postulations= Postulation::all();
          $posts= Post::all();
         
          return view('donneurHome',compact('posts'),compact('postulations')) ;
       

     }
     
     

}
