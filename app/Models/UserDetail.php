<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use SoftDeletes;

    /*
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */

    protected $guarded = [''];

    protected $fillable = [
        'firsname',
        'lastname',
        'email',
        'created_by',
        'approved_by'
    ];
}
