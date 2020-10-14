<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_post extends Model
{
    protected $table = 'users_posts';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
}
