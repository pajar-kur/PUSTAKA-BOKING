<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $allowedFields = ['nama', 'nis', 'kelas', 'tgl', 'tpl', 'alamat', 'gender', 'agama'];

    public function simpan($data)
    {
        $this->insert($data);

        return true; // mengembalikan nilai true jika data berhasil disimpan
    }
}