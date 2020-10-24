<?php
 class  Curd_Model extends CI_model{
    public function __construct(){
        parent::__construct();
    }
    public function insert_to_db($data){
       $this->db->insert('curd',$data);
     }
     public function get_data(){
       $resp=$this->db->get('curd')->result_array();
       return $resp;
     }

     }
 



?>
