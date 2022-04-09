<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Portofolio extends Model
{
    use HasFactory;

    protected $guarded = [];

     public static function findBy($data, $value){
         return DB::table('portofolios')
            ->where($data, $value)->first();
     }
}
