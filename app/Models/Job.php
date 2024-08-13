<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function categories()
    {
        return Category::whereIn('id', $this->category_ids)->get();
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
