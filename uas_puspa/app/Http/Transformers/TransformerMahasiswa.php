<?php
namespace App\Http\Transformers;

use League\Fractal\TransformerAbstract;
use App\Http\Models\Mahasiswa;

class TransformerMahasiswa extends TransformerAbstract
{
  public function transform(Mahasiswa $field)
  {
    // ngubah format tampilan di postman
    return [
      'NIM' => $field->nim_mhs,
      'Nama Mahasiswa' => $field->nm_mhs,
      'Tanggal Lahir' => $field->tgl_lahir,
      'Email' => $field->email_mhs,
      'Nomor Telepon' => $field->telp_mhs,
      'Jenis Kelamin' => $field->jenkel_mhs,
      'Alamat' => $field->alamat_mhs
    ];
  }
}
