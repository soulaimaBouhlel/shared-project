<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query->where(fn($query) =>
        $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%')
        )
        );

        $query->when($filters['category'] ?? false, fn($query, $category) =>
        $query->whereHas('category', fn ($query) =>
        $query->where('slug', $category)
        )
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
        $query->whereHas('author', fn ($query) =>
        $query->where('username', $author)
        )
        );
    }

    public function categories()
    {
        return Category::whereIn('id', $this->category_ids)->get();
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
