<?php

namespace App\Controllers;

use App\Models\ProkerModel;

class Proker extends BaseController
{
  protected $proker;

  public function __construct()
  {
    $this->proker = new ProkerModel();
  }

  public function index()
  {
    $proker = $this->proker->findAll();
    dd($proker);
  }

  public function pengajuanProker()
  {
    $namaProker = $this->request->getPost('namaProker');
    $tujuanProker = $this->request->getPost('tujuanProker');
    $targetJumlah = $this->request->getPost('targetJumlah');
    $namaPenanggungJawab = $this->request->getPost('namaPenanggungJawab');
    $emailPenanggungJawab = $this->request->getPost('emailPenanggungJawab');
    $tlpPenanggungJawab = $this->request->getPost('tlpPenanggungJawab');
    $anggaran = $this->request->getPost('anggaran');

    $this->proker->insert([
      'nama_proker' => $namaProker,
      'tujuan_proker' => $tujuanProker,
      'jml_target' => $targetJumlah,
      'penanggung_jawab' => $namaPenanggungJawab,
      'email_penanggung_jawab' => $emailPenanggungJawab,
      'tlp_penaggung_jawab' => $tlpPenanggungJawab,
      'anggaran' => $anggaran,
    ]);
  }

  // public function usulanProker()
  // {
  //   return view('usulan-proker');
  // }
}
