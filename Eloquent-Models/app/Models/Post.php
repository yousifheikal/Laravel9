<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function scopeYousif($query){

        return $query->where('id', '>=', 4);
    }
    //The best method to insert data manual
    //First Method To accept data
    protected $fillable=['title', 'body'];

    //Second Method to accept data
    //Accept all data
   //    protected $guarded = [];

    //Accept All data but title not accept
    //protected $guarded = [];
}
