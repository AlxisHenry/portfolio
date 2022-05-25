<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsDate extends Model
{

    use HasFactory;

    protected $fillable = ['FullDate', 'UpdateDate', 'UploadDate'];

    protected $table = "news_dates";
    protected $primaryKey = 'identifier';

}
