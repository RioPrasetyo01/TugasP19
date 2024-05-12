<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Device extends Model
{
    use HasFactory;
}
// class Device
// {
//     private static $devices = [
//         [
//             "id" => 1,
//             "name" => "Sensor Suhu",
//             "min_value" => 0,
//             "max_value" => 100,
//             "current_value" => 20
//         ],
//         [
//             "id" => 2,
//             "name" => "Sensor Kelembaban",
//             "min_value" => 0,
//             "max_value" => 100,
//             "current_value" => 30
//         ],
//         [
//             "id" => 3,
//             "name" => "Sensor Jarak",
//             "min_value" => 0,
//             "max_value" => 100,
//             "current_value" => 40
//         ],
//         [
//             "id" => 4,
//             "name" => "Sensor Gerak",
//             "min_value" => 0,
//             "max_value" => 1,
//             "current_value" => 1
//         ]
//     ];

//     public static function all(){
//         return collect(self::$devices);
//     }

//     public static function find($id){
//         $devices = static::all();
//         return $devices->firstWhere('id',$id);
//     }
// }
