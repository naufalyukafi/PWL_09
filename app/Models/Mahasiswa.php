<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloq
use App\Models\Mahasiswa;

class Mahasiswa extends Model
{
    protected $table='mahasiswa'; //Eloquent akan membuat model mahasiswa menyimpan record di table mahasiswas
    protected $primaryKey='nim'; //Mengambil isi DB dengan primaryKey

    protected $fillable = [
        'nim',
        'name',
        'kelas_id',
        'jurusan',
        'no_handphone',
        'e_mail',
        'tgl_lahir'
    ];
    /**
     * Get the user that owns the Mahasiswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
