<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User_Post extends Model
{
    protected $table = 'users_posts';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
}
