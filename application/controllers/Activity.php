<?php 
    class Activity extends CI_Controller{
        public function index(){
            $table = 'activity';
            $where = 'user_id';
            $id = $this->session->userdata('id');
            $data['activity'] = $this->Todo_Model->get_specific_data($table, $where, $id)->result();
            $data['title'] = "Data Aktivitas";
            $data['active'] = "activity";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('activity',$data);
            $this->load->view('templates/footer');
        }

        public function new(){
            $data['title'] = "Tambah Aktivitas Baru";
            $data['active'] = "activity";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('new_activity',$data);
            $this->load->view('templates/footer');
        }

        public function new_act(){
            $this->_rules();

            if($this->form_validation->run() == FALSE){
                $this->new();
            }else{
                $activity = $this->input->post('activity');

                $data = array(
                    'name' => $activity,
                    'status' => 0,
                    'user_id' => $this->session->userdata('id')
                );

                $this->Todo_Model->insert_data('activity',$data);
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Aktivitas baru telah ditambahkan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('activity');
            }
        }

        public function update($id){
            $table = 'activity';
            $where = 'id';
            $data['activity'] = $this->Todo_Model->get_specific_data($table, $where, $id);
            $data['title'] = "Update Aktivitas";
            $data['active'] = "activity";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('update_activity',$data);
            $this->load->view('templates/footer');
        }

        public function update_act(){
            $this->_rules();
            if($this->form_validation->run()==FALSE){
                $this->update('');
            }else{
                $id = $this->input->post('id');
                $activity = $this->input->post('activity');
                $status = $this->input->post('status');

                $data = array(
                    'name' => $activity,
                    'status' => $status
                );

                $where = array (
                    'id' => $id
                );

                $this->Todo_Model->update_data('activity',$data, $where);
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Aktivitas Berhasil Diperbarui.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('activity');
            }
        }

        public function delete($id){
            $table = 'activity';
            $where = 'id';
            $data['activity'] = $this->Todo_Model->get_specific_data($table, $where, $id);
            $result = $data['activity']->result();
            foreach($result as $a):
                $activity = $a->name;
            endforeach;

            $where = array('id' => $id);
            $delete = $this->Todo_Model->delete_data($table, $where);

            if($delete){
                $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data aktivitas Berhasil Dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            }
            else{
                $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Aktivitas gagal dihapus. Silakan hapus data yang berelasi dengan aktivitas '.$activity.' terlebih dahulu.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
                $this->session->set_flashdata('msg',$msg);
            }
            redirect('user');
        }

        public function _rules(){
            $this->form_validation->set_rules('activity','Aktivitas','required');
        }
    }
?>