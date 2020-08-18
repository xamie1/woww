<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'crime', 'description', 'where_it_happened', 'duration', 'nature', 
        'status', 'physical_abuse', 'gender_of_attacker', 
        'relation_to_attacker', 'context', 'reported'
    ];

   public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $s){
        return $query->where('crime', 'like', '%'.$s. '%')
                ->orWhere('description', 'like', '%' .$s. '%')
                ->orWhere('nature', 'like', '%' .$s. '%')
                ->orWhere('status', 'like', '%' .$s. '%')
                ->orWhere('where_it_happened', 'like', '%' .$s. '%')
                ->orWhere('context', 'like', '%' .$s. '%');
    }

     public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
