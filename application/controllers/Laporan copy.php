<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

public function dompdf()
{
    $this->load->library('mypdf');
    $data['data'] = $this->model_basic->select_all_join_2('tbl_riwayat','tbl_riwayat.*,tbl_dokumen.no_dokumen as no_dokumen,tbl_peminjam.name as name_peminjam','tbl_dokumen','tbl_riwayat.no_dokumen','tbl_dokumen.no_dokumen','tbl_peminjam','tbl_riwayat.id_peminjam','tbl_peminjam.id_peminjam');
    $data['content'] = $this->load->view('backend/admin_system/laporan_bulanan',$data,true);
    $this->load->view('backend/index',$data);
    $this->mypdf->generate('admin_system/dompdf', $data, 'tbl_riwayat', 'A4', 'landscape');
}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */