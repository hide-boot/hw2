<?php 

use Illuminate\Routing\Controller as BaseController;

class singupController extends BaseController
{
    public function newUser(){
        $request=request();
      
         User::create([
            'username'=> $request->username,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'name'=>$request->name,
            'surname'=>$request->surname
        ]);
           return redirect ('Login');
    }





    public function checkUsername($user){
        $username=urldecode($user);
        $set=User::where('username',$username)->first();
        if($set!=null){
            return ['exist'=>true];
        
        }
        else{
            return ['exist'=>false];
        }
        
    
    }




    public function checkEmail($email){
        
        $set=User::where('email',$email)->first();
        if($set!=null){
            return ['exist'=>true];
        
        }
        else{
            return ['exist'=>false];
        }
    }



    
    public function viewRegister()
    {

        return view('singup');
    }






}




?>