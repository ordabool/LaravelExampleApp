<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // For documantation:
    // Set Table name
    protected $table = 'posts';
    // Set Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;


    public function user(){
        return $this->belongsTo('App\User');
    }

}
