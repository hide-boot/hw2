<?php

use Illuminate\Routing\Controller as BaseController;

class FavoritesController extends BaseController
{

    public function deletefilm($q)
    {
        $user=User::find(session('user_id'));
        $post=FilmPost::where('content',$q)->first();
        if($user!=null){
            if($post!=null){
                $collection=$user
                ->filmfavorites()
                ->where('post',$post->id)
                ->first()
                ->delete();
            }
                
        }
    }


    public function deleteanime($q)
    {
        $user=User::find(session('user_id'));
        $post=AnimePost::where('content',$q)->first();
        if($user!=null){
            if($post!=null){
                $collection=$user
                ->animefavorites()
                ->where('post',$post->id)
                ->first()
                ->delete();
            }
                
        }

    }

    public function deleteserie($q)
    {
        $user=User::find(session('user_id'));
        $post=SeriePost::where('content',$q)->first();
        if($user!=null){
            if($post!=null){
            $collection=$user
            ->seriefavorites()
            ->where('post',$post->id)
            ->first()
            ->delete();
          
                
            }
        }

    }

    public function addserie($q)
    {
        $user=User::find(session('user_id'));
        $post=SeriePost::where('content',$q)->first();
        $collection=$user->seriefavorites()->where('post',$post->id)->first();
       
        if($user!=null){
            if($post!=null){
                if($collection==null){
                SerieFavorite::create([
                    'userp'=>$user->id,
                    'post'=>$post->id

                ]);
                
                }

            }
        }

    }

    public function addfilm($q)
    {
        $user=User::find(session('user_id'));
        $post=FilmPost::where('content',$q)->first();
        $collection=$user->filmfavorites()->where('post',$post->id)->first();
       
        if($user!=null){
            if($post!=null){
                if($collection==null){
                FilmFavorite::create([
                    'userp'=>$user->id,
                    'post'=>$post->id

                ]);
                
                }

            }
        }

       

    }


    public function addanime($q)
    {
        $user=User::find(session('user_id'));
        $post=AnimePost::where('content',$q)->first();
        $collection=$user->animefavorites()->where('post',$post->id)->first();
       
        if($user!=null){
            if($post!=null){
                if($collection==null){
                AnimeFavorite::create([
                    'userp'=>$user->id,
                    'post'=>$post->id

                ]);
                
                }

            }
        }

    }

    public function returnfilm()
    {
        $user=User::find(session('user_id'));
        
        if($user!=null){
            $collection=$user->filmfavorites->all();
        if($collection!=null){
            for($i=0;$i<count($collection);$i++ ){
                $post=FilmPost::where('id',$collection[$i]['post'])->first();
                $text[$i]=$post->content;
            }
            return $text;
        }
       }
      

    }

    public function returnanime()
    {
        $user=User::find(session('user_id'));
        
        if($user!=null){
            $collection=$user->animefavorites->all();
            if($collection!=null){
            for($i=0;$i<count($collection);$i++ ){
                $post=AnimePost::where('id',$collection[$i]['post'])->first();
               
                $text[$i]=$post->content;
            }
            return $text;
        }
       }
      
    }


    public function returnserie()
    {
        $user=User::find(session('user_id'));
        
        if($user!=null){
            $collection=$user->seriefavorites->all();
            if($collection!=null){
            for($i=0;$i<count($collection);$i++ ){
                $post=SeriePost::where('id',$collection[$i]['post'])->first();
               
               $text[$i]=$post->content;
              
              
            }
            return $text;
        }
       }
       
     


    }
}



?>