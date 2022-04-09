<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;

    // protected $guarded = [];

    
    protected $fillable = ['preferences', 'portfolio', 'about', 'contact'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
