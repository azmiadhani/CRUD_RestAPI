<?php
Class Note extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/CRUD_RestAPI/CrudRestAPI/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data note
    function index(){
        
        $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/note'));
        $this->load->view('note/list',$data);
    }

    // insert data note
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'nama'      =>  $this->input->post('nama'),
                'notes'=>  $this->input->post('notes'));
            $insert =  $this->curl->simple_post($this->API.'/note', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('note');
        }else{
            $this->load->view('note/create');
        }
    }

    // edit data note
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'nama'      =>  $this->input->post('nama'),
                'notes'=>  $this->input->post('notes'));
            $update =  $this->curl->simple_put($this->API.'/note', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('note');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/note',$params));
            $this->load->view('note/edit',$data);
        }
    }

    // delete data note
    function delete($id){
        if(empty($id)){
            redirect('note');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/note', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('note');
        }
    }
}