<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    
    public static function getAllorders()
    {
      return self::orderBy('updated_at', 'asc')->get();
    }

    public static function getIdorder($yourId)
    {
      return self::where('id','=', $yourId)->get();
    }
}
