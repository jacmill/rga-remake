<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teammate extends Model
{
    protected $table = "teammates";
    protected $fillable = ["name", "last_name", "school", "age", "is_coach", "is_substitute", "teammate_id"];
    public $timestamps = false;

    public function team() {
        $this->belongsTo(Team::class);
    }
}
