<?php
   class jenis_kamar extends CI_Controller{
    function index(){
          
        $data['tbl_jenis_kamar'] = $this->M_jenis_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('jenis_kamar/jenis_kamar' , $data);
        $this->load->view('partial_admin/footer');
    }
    function tambah_jenis_kamar()
    {
        $data['tbl_jenis_kamar'] = $this->M_jenis_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/topbar');
        $this->load->view('jenis_kamar/tambah_jenis_kamar');
        $this->load->view('partial_admin/footer');    
    }
    function proses_tambah_jenis_kamar()
    {

        $add =[
            'id_jenis' => $this->input->post('id_jenis'),
            'kamar' => $this->input->post('kamar'),
            'keterangan' => $this->input->post('keterangan'),
            'harga' => $this->input->post('harga'),
            'foto' => $this->input->post('foto'),
        ];
        $this->db->insert('tbl_jenis_kamar', $add);
        redirect(base_url('index.php/jenis_kamar'));
    }
    function hapus_jenis_kamar($id_jenis_kamar)
    {
        $this->M_jenis_kamar->hapus($id_jenis_kamar);
        redirect (base_url('index.php/jenis_kamar'));
    }
    function update_jenis_kamar($id_jenis)
    {
        $this->load->model('M_jenis_kamar');
        $data['tbl_jenis_kamar'] = $this->M_jenis_kamar->update($id_jenis);
            $this->load->view('partial_admin/header');
            $this->load->view('partial_admin/sidebar');
            $this->load->view('partial_admin/topbar');
            $this->load->view('jenis_kamar/update_jenis_kamar', $data);
            $this->load->view('partial_admin/footer');
    }
    function proses_update_jenis_kamar()
    {
        $data = [
            'id_jenis' => $this->input->post('id_jenis'),
            'kamar' => $this->input->post('kamar'),
            'keterangan' => $this->input->post('keterangan'),
            'harga' => $this->input->post('harga'),
            'foto' => $this->input->post('foto'),
        ];
        $this->db->where('id_jenis', $this->input->post('id_jenis'));
        $this->db->update('tbl_jenis_kamar',$data);
        redirect(base_url('index.php/jenis_kamar'));
   }
}
?>