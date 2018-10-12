<?php

//Route::get('/home', function () {
   // $users[] = Auth::user();
   // $users[] = Auth::guard()->user();
    $users[] = Auth::guard('membre')->user();
  // $userss[] = Auth::guard('membre')->user();

 
  //  return view('membre.home');
//})->name('home');

