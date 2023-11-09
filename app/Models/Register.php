<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'mobile', 'email', 'gender', 'qualification', 'place', 'district'];
}
// class Register extends Model
// {
//     use HasFactory;
//     protected $fillable = ['name','mobile','email','gender','qualification','place',];
    
    
//     protected function qualification():Attribute
//     {
//         return Attribute::make(
//             set:fn($value)=>json_encode($value),
//             get:fn($value)=>json_decode($value),
//         );
//     }
//     protected $casts=['qualification'=>'array'];
// }
