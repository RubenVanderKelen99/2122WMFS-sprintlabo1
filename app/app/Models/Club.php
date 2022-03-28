<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function clubGround() {
        return $this->hasOne(ClubGround::class);
    }

    public function games() {
        return $this->hasMany(Game::class);
    }

}
