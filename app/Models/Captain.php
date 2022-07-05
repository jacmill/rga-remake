<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Captain extends Authenticatable
{
    use Notifiable;

    protected $table = "captains";
    protected $fillable = ["name", "last_name", "email", "password", "remember_token"];
    public $timestamps = false;
    public function team() {
        return $this->belongsTo(Team::class);
    }
}
