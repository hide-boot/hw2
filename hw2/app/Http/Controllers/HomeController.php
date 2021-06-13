<?php


use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function home()
    {

   $user=User::find(session('user_id'));
   if($user!=null){
   return view('home_film')
   ->with('nome',$user->username)
   ->with('user',$user->id)
   ->with('csrf_token',csrf_token());
   }
   else{
    return view('home_film');
   }
    }

    public function anime()
    {

   $user=User::find(session('user_id'));
   if($user!=null){
        return view('home_anime')
        ->with('nome',$user->username)
        ->with('user',$user->id)
        ->with('csrf_token',csrf_token());
   }
   else{
     return view('home_anime');
   }
    }

    public function serie()
    {

   $user=User::find(session('user_id'));
   if($user!=null){
        return view('home_serie')
        ->with('nome',$user->username)
        ->with('user',$user->id)
        ->with('csrf_token',csrf_token());
   }
   else{
        return view('home_serie');
   }
}


public function myaccount()
{
     $user=User::find(session('user_id'));
   if($user!=null){
        
        return view('myaccount')
        ->with('nome',$user->username)
        ->with('user',$user->id)
        ->with('image',$user->image)
        ->with('eta',$user->eta)
        ->with('hobby',$user->hobby)
        ->with('csrf_token',csrf_token());
   }
   else{
        return view('login');
   }

}





}
?>
