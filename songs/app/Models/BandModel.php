<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'genre', 'founded', 'active_till'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "bands";
}
