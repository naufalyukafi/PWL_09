<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloq

class Mahasiswa extends Model
{
    protected $table='mahasiswa'; //Eloquent akan membuat model mahasiswa menyimpan record di table mahasiswas
    public $timestamps=false;
    protected $primaryKey='nim'; //Mengambil isi DB dengan primaryKey

    protected $fillable = [
        'nim',
        'name',
        'kelas',
        'jurusan',
        'no_handphone',
        'e_mail',
        'tgl_lahir'
    ];
}
