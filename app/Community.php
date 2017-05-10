<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable=[
    'user_id', 'title', 'description', 'tags', 'image', 'location', 'featured'
    ];
}
