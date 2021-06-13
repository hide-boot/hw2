<?php
use Illuminate\Database\Eloquent\Model;

class AnimePost extends Model
{
    protected $fillable=[
        'content'
        ];
        
    public function animecomment(){
        return $this->hasMany("AnimeComment",'post'); 
    }
    
    public function animefavorites(){
        return $this->hasMany("AnimeFavorite",'post');
    }
}

?>