<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = ['created_at' => 'datetime'];

    public function status(){
        return $this->status == 1 ? 'Published' : 'Draft';
    }
}
