<?php

namespace App\Models;

use CodeIgniter\Model;

class ProkerModel extends Model
{
  protected $table = 'proker';
  protected $allowedFields = [
    'nama_proker',
    'tujuan_proker',
    'jml_target',
    'penanggung_jawab',
    'email_penaggung_jawab',
    'tlp_penanggung_jawab',
    'anggaran',
  ];
}
