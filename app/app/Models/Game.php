<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['starts_at', 'home_score', 'away_score'];

    public function competition() {
        return $this->belongsTo(Competition::class);
    }

    public function homeClub() {
        return $this->belongsTo(Club::class, 'home_club_id');
    }

    public function awayClub() {
        return $this->belongsTo(Club::class, 'away_club_id');
    }

    public function scopeScored($query) {
        return Game::where('home_score', '!==', null);
    }

    public function scopeUnScored($query) {
        return Game::where('home_score', '===', null);
    }
}
