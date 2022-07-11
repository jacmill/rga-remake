<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Team extends Model
{
    protected $table = "teams";
    protected $fillable = ["name", "about", "game"];
    public $timestamps = false;

    public function captain() {
        return $this->hasOne(Captain::class);
    }
    public function teammates() {
        return $this->hasMany(Teammate::class);
    }
}
