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
            $name = $user[0]->name;
            $user_data = array(
                'name' => $name
            );
         //   echo $level;
            $this->load->view('navbar',$user_data);
            if($level == 1){
                $this->load->view('navbar',$user_data);
            $this->load->view('firstquestion');
            $this->load->view('footer');
            }
            else if($level == 2){
                $this->load->view('secondquestion');
                $this->load->view('footer');
            }
            else if($level == 3){
                $this->load->view('thirdquestion');
                $this->load->view('footer');
            }
            else if($level == 4){
                $this->load->view('complete');
                $this->load->view('footer');
            }
        
         }
        //$this->load->view('footer');
    }
    
    public function register_submit(){
        $this->load->model('user_model');
        $data = new stdClass();
        $post_input =  $this->input->post();
        $level = 1;
        $input_data = array(
            'name' => $post_input['name'],
            'email' => $post_input['email'],
            'password' => md5($post_input['password']),
            'phone' => $post_input['phone'],
            'roll' => $post_input['roll'],
            'level' => $level
        );
        $insertion = $this->user_model->insert($input_data);
        if($insertion){
            $data->success = true;
            echo json_encode($data);
        }else {
            $data->success = false;
            echo json_encode($data);
        }
    }
    
    public function login_submit(){
        $input_post = $this->input->post();
        $this->load->model('user_model');
        $email = $input_post['email'];
        $password = md5($input_post['password']);
        $user = $this->user_model->verify_user($email,$password);
        if(!$user){
            //$this->load->view('login_view');
            $data = new stdClass();
            $data->success = false;
            echo json_encode($data);
            exit();
        }  else {
            $user_id = $user[0]->id;
            $_SESSION['user_id']=$user_id;
            $data = new stdClass();
            $data->success = true;
            echo json_encode($data);
        }
    }
    //background-image:url("../image/oth.jpg") !important;
    public function logout(){
        session_destroy();
        $this->load->view('login_view');
        
    }
    
    public function user_response(){
        $input_post = $this->input->post();
        $user_id = $_SESSION['user_id'];
        $this->load->model('user_model');
        $this->load->model('question_model');
        $answer = $input_post['answer'];
        $user = $this->user_model->get_user($user_id);
        $level = $user[0]->level;
        $response = $this->question_model->get_answer($level);
        if($answer == $response[0]->answer){
            $this->user_model->update_level($level,$user_id);
        }
        $url = base_url('/home');
        redirect($url);
    }
    
    public function about_us(){
        $this->load->model('user_model');
        $user_id = $_SESSION['user_id'];

        $user = $this->user_model->get_user($user_id);

        $user_data = array(
            'name' => $user[0]->name,
        );

        $this->load->view('navbar', $user_data);
        $this->load->view('about_us');
        $this->load->view('footer');
        
    }
    
    public function help(){
        $this->load->model('user_model');
        $user_id = $_SESSION['user_id'];

        $user = $this->user_model->get_user($user_id);

        $user_data = array(
            'name' => $user[0]->name,
        );

        $this->load->view('navbar', $user_data);
        $this->load->view('help');
        $this->load->view('footer');
        
    }
}
?>