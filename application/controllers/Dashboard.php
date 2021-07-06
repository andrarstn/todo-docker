<?php 
    class Dashboard extends CI_Controller{
        public function index(){
            if(empty($this->session->userdata('username'))){
                redirect('login');
            }
            $this->load->model('Todo_Model');
            $data['title'] = "To Do List";
            $data['active'] = "dashboard";
            $table = 'activity';
            $where = array('user_id' => $this->session->userdata('id') , 'status' => 0);
            $data['activity'] = $this->Todo_Model->get_num_data($table, $where);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('dashboard', $data);
            $this->load->view('templates/footer');
        }
    }
?>