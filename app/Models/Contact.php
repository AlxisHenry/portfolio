<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $fillable = ['name', 'email', 'object', 'content'];

    public function scopeById($query, $id) {

        return $query->where('id', '=', $id);

    }

}
