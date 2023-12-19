<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'category_id',
        'description'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
