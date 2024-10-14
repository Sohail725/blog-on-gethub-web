<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailOpen extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'subscriber_id', 'opened_at'];

    // Relationship to Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // Relationship to Subscriber
    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }
}
