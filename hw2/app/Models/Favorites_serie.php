<?php
use Illuminate\Database\Eloquent\Model;

class SerieFavorite extends Model
{
    protected $fillable=[
        'userp',
        'post'
       
    ];
    public function user(){
        return $this->belongsToMany('User');
    }

    public function post(){
        return $this->belongsToMany('SeriePost');
    }

}

?>