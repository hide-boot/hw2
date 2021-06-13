<?php


use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
  
    public function apifilms($q){
        $type='movie';
        
         $url='http://www.omdbapi.com/?apikey='.env("APIKEY1").'&s='.$q.'&type='.$type;
         $json=Http::get($url);
        if($json->failed()) abort(500);
        for($i=0;$i<count($json['Search']);$i++){
            $post=FilmPost::where('content',$json['Search'][$i]['Title'])->first();
            if($post==null){
                FilmPost::create([
                    'content'=>$json['Search'][$i]['Title'],
                ]);
            }
        }
        return $json;
    }

    public function apifilmt($q)
    {
        $type='movie';
        $url='http://www.omdbapi.com/?apikey='.env("APIKEY1").'&t='.$q.'&type='.$type;
       
        $json=Http::get($url);
       if($json->failed()) abort(500);
       
        $post=FilmPost::where('content',$json['Title'])->first();
        if($post==null){
            FilmPost::create([
                'content'=>$json['Title'],
            ]);
        }
       return $json;
    }



    public function apiseries($q)
    {

            $type='series';
            
            $url='http://www.omdbapi.com/?apikey='.env("APIKEY1").'&s='.$q.'&type='.$type;
            $json=Http::get($url);
            if($json->failed()) abort(500);
            
            
       for($i=0;$i<count($json['Search']);$i++){
            $post=SeriePost::where('content',$json['Search'][$i]['Title'])->first();
            if($post==null){
                SeriePost::create([
                    'content'=>$json['Search'][$i]['Title'],
                ]);
            }  

            }

        return $json;       
    }

  
    public function apiseriet($q){
        $type='series';
        $url='http://www.omdbapi.com/?apikey='.env("APIKEY1").'&t='.$q.'&type='.$type;
       
        $json=Http::get($url);
       if($json->failed()) abort(500);
       
        $post=SeriePost::where('content',$json['Title'])->first();
        if($post==null){
            SeriePost::create([
                'content'=>$json['Title'],
            ]);
        }
       return $json;
    }


    public function apianimec($q)
    {
        $type='[categories]=';
        $page='&page[limit]=20';
        $url='https://kitsu.io/api/edge/anime?filter'.$type.$q.$page;
        $json=Http::get($url);
        for($i=0;$i<count($json['data']);$i++)
        {
            $post=AnimePost::where('content',$json['data'][$i]['attributes']['canonicalTitle'])->first();
            if($post==null){
                AnimePost::create([
                    'content'=>$json['data'][$i]['attributes']['canonicalTitle'],
                ]);
            }  


        }
        return $json;
       

    }

    public function apianimet($q)
    {
        $type='[text]=';
        $url='https://kitsu.io/api/edge/anime?filter'.$type.$q;
        $json=Http::get($url);
        for($i=0;$i<count($json['data']);$i++)
        {
            $post=AnimePost::where('content',$json['data'][$i]['attributes']['canonicalTitle'])->first();
            if($post==null){
                AnimePost::create([
                    'content'=>$json['data'][$i]['attributes']['canonicalTitle'],
                ]);
            }  


        }
        return $json;
    }





}


?>