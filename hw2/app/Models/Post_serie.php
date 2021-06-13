<?php
use Illuminate\Database\Eloquent\Model;

class SeriePost extends Model
{

    protected $fillable=[
        'content'
        ];
        
    public function seriecomment(){
        return $this->hasMany("SerieComment",'post');
    }

    public function  seriefavorites(){
        return $this->hasMany("SerieFavorite",'post');
    }
}

?>