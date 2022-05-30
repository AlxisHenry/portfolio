<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

    use HasFactory;

    protected $fillable = ['title', 'description', 'author','documentationLink','published_at','edit_at'];
    protected $table = "board";
    protected $primaryKey = 'board_id';

    public function scopeHomeBoard($query) {

        return $query->whereBetween('board_id', [1,2])->get();

    }

}
