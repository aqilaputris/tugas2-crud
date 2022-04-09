<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Preferences extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function findBy($data, $value){
    return DB::table('preferences')
        ->where($data, $value)->first();


    // public function findBy($name, $value){
    //     return DB::table('preferences')
    //     ->where($name, $value)->first();
    }
}
