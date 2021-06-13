<?php




use Illuminate\Routing\Controller as BaseController;

class loginController extends BaseController
{
    public function checklog()
    {
        if(session('user_id')!=null){
            return redirect('Home');
           
        }
        else{
            $old_user=Request::old('username');
        return view('login')
        ->with('csrf_token',csrf_token())
        ->with('old',$old_user);
    
        }

    }

    public function login()
    {
      $pass=request('password');
       
       $user=User::where('username',request('user'))->first();
       if(Hash::check($pass,$user->password)&&isset($user)){
                Session::put('user_id',$user->id);
                 return redirect('Home');
            }
        else{
            return redirect('Login')->withInput();
        }
        
    }

    public function logout()
    {
        Session::flush();
        return redirect('Login');
    }
}

?>