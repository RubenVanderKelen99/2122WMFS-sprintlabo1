<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubGround extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address_line_1', 'address_line_2'];

    public function club() {
        return $this->hasOne(Club::class);
    }
}
