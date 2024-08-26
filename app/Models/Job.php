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
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhereHas('tags', fn($query) =>
            $query
                ->where('name', 'like', '%' . $search . '%')

            )
        )
        );


            $query->when($filters['tag'] ?? false, fn($query, $tag) =>
            $query->whereHas('tags', fn ($query) =>
            $query->where('tag_id', $tag)
            )
                    ->join('job_tag', 'jobs.id', '=', 'job_tag.job_id')
                    ->join('tags', 'tags.id', '=', 'job_tag.tag_id')
                    ->orderBy('job_tag.weight', 'desc')
                    ->select('jobs.*')
                    ->distinct()


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
