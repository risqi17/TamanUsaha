<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('m_product');
	$this->load->model('m_feedback');
	$this->load->helper('url');
	}

	public function header(){
		$cat['cat']=$this->m_product->read_category()->result();
		$this->load->view('header',$cat);
	}

	public function index()
	{
		$data['product']=$this->m_product->read_product()->result();
		$this->header();
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
	}
	public function addFeedback(){
		$data = array(
			'fee_email_user' => $this->input->post('email'),
			'fee_feedback' => $this->input->post('pesan')
		);
		$this->m_feedback->addFeedback($data);
		redirect(base_url());
	}
	public function DetailProduct($id){
		$data['product'] = $this->m_product->DetailProduct($id)->result();
		$this->header();
		$this->load->view('product_details', $data);
		$this->load->view('footer');
	}

	//search and kategori
	public function pilih_cat()
	{
		$id=$this->input->get('id');
		$data['data']=$this->m_product->cari_cat($id);
		$this->header();
		$this->load->view('product_search', $data);
		$this->load->view('footer', $data);
	}
	public function search_prod()
	{
		$id=$this->input->post('name');
		$data['data']=$this->m_product->cari_prod($id);
		$this->header();
		$this->load->view('product_search', $data);
		$this->load->view('footer', $data);
	}
	public function suggest_prod(){
		$kode = $_GET['term'];
        $query = $this->m_product->suggest_prod($kode);
        $searchData=array();
        foreach ($query as $key) {                
                $searchData[] = array('id'=>$key->PROD_ID,'label'=>$key->PROD_NAME,'value'=>$key->PROD_NAME);
        }
        echo json_encode($searchData);
	}
 
}
