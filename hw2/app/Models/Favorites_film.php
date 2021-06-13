<?php
use Illuminate\Database\Eloquent\Model;

class FilmFavorite extends Model
{
    protected $fillable=[
        'userp',
        'post'
       
    ];

    public function user(){
        return $this->belongsToMany('User');
    }

    public function post(){
        return $this->belongsToMany('FilmPost');
    }
}

?>