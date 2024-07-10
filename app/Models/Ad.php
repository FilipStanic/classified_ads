<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'price', 'category_id', 'type', 'user_id', 'image'];

    protected $appends = ['diff', 'is_expensive'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function getDiffAttribute()
    {
        $averagePrice = Ad::avg('price');
        return $this->price - $averagePrice;
    }

    public function getIsExpensiveAttribute()
    {
        return $this->price > 30000;
    }

}
