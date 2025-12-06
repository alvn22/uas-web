<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $guarded = [];

    public function jabatan(){
        return $this->belongsTo(Position::class, 'id_jabatan');
    }

    public function divisi(){
        return $this->belongsTo(Division::class, 'id_divisi');
    }
}
