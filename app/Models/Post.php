<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    // use HasFactory;
    public $primaryKey = 'id';
    // Timestamps - true by default
    public $timestamps = true;

    // Adding a relationship between the post and the user. Showing that a post belongs to a user
    public function user(){
        return $this->belongsTo('App\Models\User');
        // return $this->belongsTo(User::class);
    }
}
