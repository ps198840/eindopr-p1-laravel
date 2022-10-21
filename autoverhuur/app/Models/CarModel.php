<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['merk', 'type', 'bouwjaar'];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "leenautos";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'autonummer';

}
