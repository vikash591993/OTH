<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            session_start();
        }
        $this->load->database();
    }
    
    public function index(){
        if(!isset($_SESSION['user_id'])){   
            $this->load->view('login_view');
        } else {
            $this->load->model('user_model');
            $user_id = $_SESSION['user_id'];
            $user = $this->user_model->get_user($user_id);
            $level = $user[0]->level;
            if($level == 0){
            $this->load->view('firstquestion');
            }
            else 
                $this->load->view('login_view');
        }
    }
    
    public function register_submit(){
        $this->load->model('user_model');
        $data = new stdClass();
        $post_input =  $this->input->post();
        $input_data = array(
            'name' => $post_input['name'],
            'email' => $post_input['email'],
            'password' => $post_input['password'],
            'phone' => $post_input['phone'],
            'roll' => $post_input['roll']
        );
       // $registration_submit_response = $this->user_model->verify_registration($input_data);
        //if(!$registration_submit_response){
          //  $this->user_model->insert($input_data);
            //$data->success = true;
            //echo json_encode($data);
        //}
       // else{
         //   $data->success = false;
           // echo json_encode($data);
        //}
        $this->user_model->insert($input_data);
        $sql = base_url('home');
        redirect($sql);
    }
    
    public function login_submit(){
        $input_post = $this->input->post();
        $this->load->model('user_model');
        $email = $input_post['email'];
        $password = $input_post['password'];
        $user = $this->user_model->verify_user($email,$password);
        if(!$user){
            $this->load->view('/home');
        }  else {
            $user_id = $user[0]->id;
            $_SESSION['user_id']=$user_id;
            $url = base_url('/home');
            //header('Location :'.$url);
            redirect($url);
            
        }
    }
    //background-image:url("../image/oth.jpg") !important;
    public function logout(){
        session_destroy();
        $this->load->view('login_view');
        
    }
    
    public function user_response() {
        
    }
}
?>
