<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'brand_name',
        'condition',
        'description',
        'image',
        'seller_id',
    ];

      // 出品者
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    // コメント
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // いいね
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // いいねしたユーザー一覧
    public function likedUsers()
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }

    // この商品の購入履歴
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
