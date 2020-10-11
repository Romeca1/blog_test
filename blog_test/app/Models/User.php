<?php
namespace App\Models;

use  Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Model
{
	public $attributes = true;
	protected $table = 'user';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name'];
}
?>