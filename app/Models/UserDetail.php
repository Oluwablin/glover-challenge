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
        'approved_by',
        'request_type_id'
    ];

    /**
     * Relationship with the type of request made for User Detail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function request_type()
    {
        return $this->belongsTo(RequestType::class, 'request_type_id');
    }

}
