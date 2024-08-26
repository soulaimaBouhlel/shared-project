<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters)
    {
        $tags = $this->tags();
        $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query->where(fn($query) =>
        $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
        )
        );


        $query->when($filters['tag'] ?? false, fn($query, $tag) =>
        $query->whereHas('tags', fn ($query) =>
        $query->where('tag_id', $tag)
        )
        );
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);

    }

}
