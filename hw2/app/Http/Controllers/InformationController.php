<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class InformationController extends BaseController
{

    public function insertInTo(Request $request)
    {
        $user=User::find(session('user_id'));
        if($user!=null)
        {   
           
            
            if(request('hobby')!=null){
            $user->hobby=request('hobby');
            $user->save();
            
            }
            if(request('eta')!=null ){
            $user->eta=request('eta');
            $user->save();
            
            }
             if(request('image')!=null){
            $user->image=request('image');
            
            
            $user->save();
            
             }
        }

       return redirect('Myaccount');
    }


}


?>