<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('');
        $this->load->helper('url');
    }

	public function index()
	{
        /////PAGINATION/////////
        $this->load->library('pagination');

        $data['products'] = $this->mymodel->getAll('produk');
        //$data['products']['gambar'] = 
        $data2 = $this->db->get('produk');

        /////////PAGINATION////////////

        $config['base_url'] = 'http://localhost/index.php/tampil/index/';
        $config['total_rows'] = $data2->num_rows();
        $config['per_page'] = 6;

        $this->pagination->initialize($config);

        echo $this->pagination->create_links();
        //////END OF PAGINATION/////////////


        $this->load->view('header_umum');
        $this->load->view('slider');
        $this->load->view('v_section', $data);
        $this->load->view('footer');
	}
	public function login(){
        $this->load->view('vlogin');
    }
    public function keCart(){
        $this->load->view('cart');
    }

    //ADMIN
    public function keVhomeAdm(){
        $this->load->view('header_admin');
        $this->load->view('slider');
        $this->load->view('v_section_admin_menu');
        $this->load->view('v_section_admin');
        $this->load->view('footer');
    }
    public function keInputProduct(){ 
        $this->load->view('header_admin');
        $this->load->view('slider');
        $this->load->view('v_section_admin_menu');
        $this->load->view('v_section_admin_inputPro');
        $this->load->view('footer');
    }

    public function do_addproduct(){//insert produk 
        $target = "upload/".basename($_FILES['uploadimage']['name']);
        $kode_produk= $_POST['kode_produk'];
        $nama_produk = $_POST['nama_produk'];
        $kategori = $_POST['kategori'];
        $harga_produk = $_POST['harga_produk'];
        $gambar = $_FILES['uploadimage']['name'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
        $data_insert = array(
            'kode_produk' => $kode_produk,
            'nama_produk' => $nama_produk,
            'kategori' => $kategori,
            'harga_produk' => $harga_produk,
            'gambar' => $gambar,
            'deskripsi' => $deskripsi,
            'stok' => $stok
        );

        $res = $this->mymodel->masukkan('produk', $data_insert);

        if($res>=1 && move_uploaded_file($_FILES['uploadimage']['tmp_name'] , $target)){
            header("Location: http://localhost/busanakoe/index.php/tampil/product_adm");
            exit();
        }else{
            echo "<h2>Tambah produk gagal</h2>";
        }
    }

    public function kePemesanan(){
        $this->load->view('header_admin');
        $this->load->view('slider');
        $this->load->view('v_section_admin_menu');
        $this->load->view('v_section_admin_pemesanan');
        $this->load->view('footer');
    }
     public function keDataProduct(){
        $this->load->view('header_admin');
        $this->load->view('slider');
        $this->load->view('v_section_admin_menu');
        $this->load->view('v_section_admin_dataPro');
        $this->load->view('footer');
    }
    public function keDataPelanggan(){
        $this->load->view('header_admin');
        $this->load->view('slider');
        $this->load->view('v_section_admin_menu');
        $this->load->view('v_section_admin_dataPel');
        $this->load->view('footer');
    }
    public function keFormUpdate(){
        $this->load->view('header_admin');
        $this->load->view('slider');
        $this->load->view('v_section_admin_menu');
        $this->load->view('v_section_admin_updateForm');
        $this->load->view('footer');
    }

    //TAMPILAN PELANGGAN
    public function keVhomePel(){
        $this->load->view('header_pelanggan');
        $this->load->view('slider');
        $this->load->view('v_section_pelanggan');
        $this->load->view('footer');
    }
    
}