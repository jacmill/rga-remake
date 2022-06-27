<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Captain extends Authenticatable
{
    protected $table = "captains";
    protected $fillable = ["name", "last_name", "email", "password", "remember_token"];
    public $timestamps = false;
}
