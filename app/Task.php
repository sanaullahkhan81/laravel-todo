<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    public function category(){

        return $this->belongsTo(Categories::class);
    }
}
