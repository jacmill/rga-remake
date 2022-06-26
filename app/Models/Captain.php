<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{
    protected $table = "captains";
    protected $fillable = ["name", "last_name", "email", "password", "remember_token"];
    public $timestamps = false;
}
