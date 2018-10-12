<?php

namespace App\Http\Controllers;
use App\infomembre; 
use App\Membre;
use App\Post;
use App\Postulation;
use Auth;
use Image;
use Session;
use Alert;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function store(Request $request)
{
    $this->validate($request, [
        'id'=> 'required',
        'info' => 'required',
        'eduction' => 'required',
        'exp' => 'required'
    ]);
     

     $infomembre=infomembre::create([

        'idmembre'=>$request->id,
        'info'=>$request->info,
        'eduction'=>$request->eduction,
        'exp' => $request->exp




       ]);
}
public function change(){
    $this->validate($request, [
        'id'=> 'required',
        'info' => 'required',
        'eduction' => 'required',
        'exp' => 'required'
    ]);

}

public function update_avatar(Request $request){
    if($request->hasfile('avatar')){
    $avatar= $request->file('avatar');
    $filename=time() .'.'.$avatar->getClientOriginalExtension();
    Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'. $filename));
    $user=  Auth::guard('membre')->user();
    $user->avatar=$filename;
    $user->save();
    alert()->success('Votre Photo de Profil a ete change .', 'bien!');
    
    $posts= Post::all();
    $postulations= Postulation::all();
          
          return view('donneurHome',compact('posts'),compact('postulations')) ;
       


    }
   

    
}




public function update_avatarfree(Request $request){
    if($request->hasfile('avatar')){
    $avatar= $request->file('avatar');
    $filename=time() .'.'.$avatar->getClientOriginalExtension();
    Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'. $filename));
    $user=  Auth::guard('membre')->user();
    $user->avatar=$filename;
    $user->save();
    alert()->success('Votre Photo de Profil a ete change .', 'bien!');
    $posts= Post::all();
    $postulations= Postulation::all();
    return view('freelancerHome',compact('posts'),compact('postulations'));
    
    

    }
    }

    public function updateinfodonneur(Request $request)
    {
        $this->validate($request, [
            
            'info' => 'required',
            'address' => 'required',
            
        ]);
         
        $user=  Auth::guard('membre')->user();
        
          
            $infod=$request->info;
            $addressd=$request->address;
            $user->info=$infod;
            $user->address=$addressd;
            
          $user->save();
    
          return view('donneurHome',compact('posts'),compact('postulations')) ;
    
          

         }

         public function updateinfofreelancer(Request $request)
         {
             $this->validate($request, [
                 
                 'info' => 'required',
                 'exp' => 'required',
                 'education' => 'required',
                 
             ]);
              
             $user=  Auth::guard('membre')->user();
             
               
                 $infod=$request->info;
                 $expd=$request->exp;
                 $educationd=$request->education;
                 $user->info=$infod;
                 $user->exp=$expd;
                 $user->exp=$educationd;
               $user->save();
         
               return view('freelancerHome',compact('posts'),compact('postulations'));
         
               
     
              }
              public function ModifierPass(Request $request)
         {
             $this->validate($request, [
                 
                 'Email1' => 'required',
                 'pass' => 'required',
                 'pass1' => 'required',
                 
             ]);
              
             $user=  Auth::guard('membre')->user();
             
               
                 $password=$request->pass;
                
               $user->save();
         
               return view('freelancerHome',compact('posts'),compact('postulations'));
         
               
     
              }



              public function Postuler(Request $request){
                if($request->hasfile('cv')){
                $cv= $request->file('cv');
                $idpost= intval($request->postid);

                $filename=time() .'.'.$cv->getClientOriginalExtension();
                Image::make($cv)->resize(300,300)->save(public_path('/uploads/cv/'. $filename));
             
               
               
               $membre= Membre::findOrFail(Auth::guard('membre')->user()->id);
               $membre->postulations()->save( new Postulation(['cv'=>$request->cv,'post_id'=>$idpost]));
               alert()->message('Message', 'vous avez bien postuler a cette offre ');
               $posts= Post::all();
              
               $postulations= Postulation::all();
               return view('freelancerHome',compact('posts'),compact('postulations'));
                }
            }
            public function accepter(Request $request){                
                $membre= Membre::findOrFail(Auth::guard('membre')->user()->id);
                $idpost=intval($request->postid);

                $membre->postulations()->save( Postulation(['etat'=>$etat]));



            }
        }
