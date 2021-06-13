<?php 
use Illuminate\Database\Eloquent\Model;


class User extends Model
{

    protected $hidden=['password'];
    protected $fillable=[
        'username',
        'email',
        'password',
        'name',
        'surname'
    ];

    public function animecomment(){
        return $this->hasMany("AnimeComment",'userc'); 
    }
    
    public function seriecomment(){
        return $this->hasMany("SerieComment",'userc');
    }

    public function filmcomment(){
        return $this->hasMany("FilmComment",'userc');
    }

    public function filmfavorites(){
        return $this->hasMany('FilmFavorite','userp');
    }

    public function animefavorites(){
        return $this->hasMany("AnimeFavorite",'userp');
    }

    public function  seriefavorites(){
        return $this->hasMany("SerieFavorite",'userp');
    }

  

    

}




?>