<?php
 class Curd extends CI_Controller
 {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Curd_Model');
    }

    public function insert(){
        $user=$this->Curd_Model->get_data('curd');
        
        $this->load->view('insert',['user'=>$user]);
    }
        
    public function insert_data()
    {
    
    $this->load->model('Curd_Model');
    $data = array();
    $data['post']= $this->input->post('fname');
    $data['postedby']=$this->input->post('lname');
    $res=$this->Curd_Model->insert_to_db($data);
        if($res){ 
            $this->session->set_flashdata('resp_message','Data not inserted');
            redirect(base_url(),'index.php/Curd/insert');
        }       
        else{
            $this->session->set_flashdata('resp_message','Data  inserted');
            redirect(base_url(),'index.php/Curd/insert');
        }
     }


        
    }

    
 

 


?>
