<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    // //agar data yang dihapus tidak ikut terhapus didatabase menggunakan softdelete di model student
    //use SoftDeletes;

    //ini adalah model employee, dan isi property nya disini, dan isi apa aja yang boleh di isi, untuk keamanan
    protected $fillable = ['nama', 'nip', 'tempat_lahir', 'tgl_lahir', 'jabatan', 'golongan', 'kantor', 'tgl_masuk_kerja', 'gaji_pokok_akhir', 'tgl_gajian_akhir'];
}
