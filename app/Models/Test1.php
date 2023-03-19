<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test1 extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'test1s';
    protected $guarded = [];
}
