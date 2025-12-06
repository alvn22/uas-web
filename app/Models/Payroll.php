<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $table = 'payrolls';
    protected $guarded = [];

    public function karyawan(){
        return $this->belongsTo(Employee::class, 'id_karyawan');
    }
}
