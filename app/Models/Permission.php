<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    
    
    protected $fillable = [
        'name',         // Nama permission
        'guard_name'    // Guard yang digunakan (default: 'web')
    ];



    // public function __construct(array $attributes = [])
    // {
    //     parent::__construct($attributes);

    //     // Ambil guard dari config
    //     $defaultGuards = config('auth.guards');

    //     // Jika tidak ada guard_name, gunakan yang pertama dalam daftar
    //     if (!isset($this->guard_name)) {
    //         $this->guard_name = $defaultGuards[0]; // Misalnya 'web'
    //     }
    // }
}
