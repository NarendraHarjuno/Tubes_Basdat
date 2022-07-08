<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News1 extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    protected $table = 'News1';
    protected $dates = ['deleted_at'];

    public function authors()
    {
        return $this->belongsToMany(Authors::class, 'author_news', 'author_id', 'news_id');
    }
}
