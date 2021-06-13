<?php
use Illuminate\Database\Eloquent\Model;

class FilmPost extends Model
{

    protected $fillable=[
        'content'
        
        
    ];
    public function filmcomment(){
        return $this->hasMany('FilmComment','post');
    }

    public function filmfavorites(){
        return $this->hasMany("FilmFavorite",'post');
    }

    
}
?>