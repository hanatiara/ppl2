<?php

namespace App\Controllers;

use App\Models\m_kota;

class c_kota extends BaseController
{
    public function __construct(){
        $this->m_kota = new m_kota();
    }

    public function index()
    {
        $kota = new m_kota();
        $data = array(
            'kota' => $kota->getDataKota(),
        );
        
        return view('v_kota', $data);

    }

    public function deleteKota($id) {
        $m_kota = new m_kota();
        $m_kota->delete($id);
        return redirect()->to('/kota/view');
    }

    public function updateKota() {
        helper(['form', 'url']);
        $kota = new m_kota();
        $upload = $this->request->getFile('gambar');
        // dd($upload);
        $filename = $upload->getClientName();
        $upload->move(ROOTPATH . 'public/img', $filename);
        $data = array(
            'id_kota' => $this->request->getPost('id_kota'),
            'nama_kota' => $this->request->getPost('nama_kota'),
            'jumlah_penduduk' => $this->request->getPost('jumlah_penduduk'),
            'gambar' => $filename,
        );
        
        $kota->insert($data);
        return redirect()->to('/kota/view');
        
    }

    public function create() {
        return view('v_insert_kota');
    }

    public function viewDetailKota($id) {
        $kota = new m_kota();
        $data = array(
            'kota' => $kota->viewDataKota($id),
        );
        return view('v_detail', $data);
        
    }

    public function editKota($id) {
        $kota = new m_kota();
        $data = array(
            'nama_kota' => $this->request->getPost('nama_kota'),
            'jumlah_penduduk' => $this->request->getPost('jumlah_penduduk'),
        );
        $kota->update($id,$data);
        return redirect()->to('/kota/view');
    }

    public function editViewKota($id) {
        $kota = new m_kota();
        $data = array(
            'kota' => $kota->viewDataKota($id),
        );
        return view('v_edit_kota', $data);
    }

    public function searchKota() {
        $kota = new m_kota();
        $key = $this->request->getVar('search');
        $data = array(
            'kota' => $kota->searchDataKota($key),
        );
        return view('v_kota', $data);
    }

}
?>