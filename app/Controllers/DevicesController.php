<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DevicesModel;
// use CodeIgniter\Exceptions\PageNotFoundException;

class DevicesController extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => "Halaman | Home"
        ];

        $DeviceModel = new DevicesModel();
        $data['all_devices'] = $DeviceModel->findAll();

        echo view('devices', $data);
    }

    // public function viewDevices($slug) {
    //     $devices = new DevicesModel();
	// 	$data['devices'] = $devices->first();

    //     // tampilkan 404 error jika data tidak ditemukan
	// 	if (!$data['devices']) {
	// 		throw PageNotFoundException::forPageNotFound();
	// 	}

	// 	echo view('devices_detail', $data);
    // }
}
