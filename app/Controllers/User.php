<?php

namespace App\Controllers;

class User extends BaseController
{
    public function dashboard(): string
    {
        $user = $this->session->get('user');

        switch ($user) {
            case 1:
                return view('dashboard-admin');
                break;
            case 2:
                return view('dashboard-user');
                break;
        }
    }

    public function pengajuanProker(): string
    {
        return view('pengajuan-proker');
    }

    public function usulanProker(): string
    {
        return view('usulan-proker');
    }
}
