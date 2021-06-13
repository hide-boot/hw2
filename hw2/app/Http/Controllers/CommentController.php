<?php


use Illuminate\Routing\Controller as BaseController;

class CommentController extends BaseController
{


    public function oncommentanime($q)
    {
        $user=User::find(session('user_id'));
        $post=AnimePost::where('content',$q)->first();
      
        
        if($user!=null)
        {
            if($post!=null){
           $comment= $post->animecomment->all();
            if($comment!=null){
            for($i=0;$i<count($comment);$i++)
            {
                $other=User::find($comment[$i]->userc);
              
               $text[$i]['0']=$other->username;
               $text[$i]['1']=$comment[$i]->time;
               $text[$i]['2']=$comment[$i]->text;
               $text[$i]['3']=$other->image;
            }
            return $text;
             }
            }
        }
        
    }

    public function oncommentfilm($q)
    {
        $user=User::find(session('user_id'));
        $post=FilmPost::where('content',$q)->first();
      
        
        if($user!=null)
        {
            if($post!=null){
            
           $comment= $post->filmcomment->all();
            if($comment!=null){
            for($i=0;$i<count($comment);$i++)
            {
                $other=User::find($comment[$i]->userc);
              
               $text[$i]['0']=$other->username;
               $text[$i]['1']=$comment[$i]->time;
               $text[$i]['2']=$comment[$i]->text;
               $text[$i]['3']=$other->image;
            }
            return $text;
            }
        }
        }
        

    }

    public function oncommentserie($q)
    {
        $user=User::find(session('user_id'));
        $post=SeriePost::where('content',$q)->first();
      
        
        if($user!=null)
        {
            if($post!=null){
           $comment= $post->seriecomment->all();
            if($comment!=null){
            for($i=0;$i<count($comment);$i++)
            {
                $other=User::find($comment[$i]->userc);
              
               $text[$i]['0']=$other->username;
               $text[$i]['1']=$comment[$i]->time;
               $text[$i]['2']=$comment[$i]->text;
               $text[$i]['3']=$other->image;
            }
            return $text;
          }
        }
        }
        


    }

    public function incommentanime()
    {
        
        $user=User::find(session('user_id'));
        $post=AnimePost::where('content',request('hidden'))->first();
       
        if($user!=null)
        {
            if($post!=null){
            AnimeComment::create([
                'userc'=>$user->id,
                'post'=>$post->id,
                'text'=> request('comment')

           ]);
            }
        }
        return redirect('Anime');
        

       
        

       

    }

    public function incommentfilm()
    {
        $user=User::find(session('user_id'));
        $post=FilmPost::where('content',request('hidden'))->first();
       
        if($user!=null)
        {
            if($post!=null){
            FilmComment::create([
                'userc'=>$user->id,
                'post'=>$post->id,
                'text'=> request('comment')

           ]);
            }
        }
        return redirect('Home');
        


    }


    public function incommentserie()
    {
        $user=User::find(session('user_id'));
        $post=SeriePost::where('content',request('hidden'))->first();
       
        if($user!=null)
        {
            if($post!=null){
            SerieComment::create([
                'userc'=>$user->id,
                'post'=>$post->id,
                'text'=> request('comment')

           ]);
            }
        }
        return redirect('Serie');
        
    }



}



?>