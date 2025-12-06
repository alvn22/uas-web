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

    public function penggajian()
    {
        return $this->hasMany(Payroll::class, 'id_karyawan');
    }

    public function getTotalGajiAttribute()
    {
        return $this->jabatan->gaji_pokok + $this->divisi->tunjangan;
    }
}
