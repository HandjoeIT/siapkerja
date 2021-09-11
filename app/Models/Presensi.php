<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    /**
     * The Attributes that aren't mass assignable.
     * 
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'check_in',
        'break',
        'back',
        'check_out',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_workers');
    }
}
