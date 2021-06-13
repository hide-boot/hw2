<?php
use Illuminate\Database\Eloquent\Model;

class AnimeComment extends Model
{
    protected $fillable=[
        'userc',
        'post',
        'text'
       
    ];

public function user(){
    return $this->belongsTo('User');
}

public function post()
{
    return $this->belongsTo('AnimePost');
}

}



?>