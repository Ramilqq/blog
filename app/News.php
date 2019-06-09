<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class News extends Model
{
    //
    protected $fillable = ['name' , 'title', 'desc', 'text', 'image'];


    public function players () {
        return $this->belongsTo('App\Players', 'id');
    }
    public function teams () {
        return $this->hasOne('App\Teams', 'id');
    }

    public function coments () {
        return $this->hasMany('App\Coments', 'new_id');
    }

    public function user () {
        return $this->belongsTo('App\User', 'user_id');
    }
    
}