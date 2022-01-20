<?php
class budget_controller extends CI_Controller
{
    public function new_budget_summary($slug = 'add_budget')
    {
        if (!file_exists(APPPATH . '/views/pages/' . $slug . '.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_new_budget_summary',$data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function add_new_budget_summary()
    {
        //error_reporting(0);
        $date = date('Y-m-d');
        $dataA = array(
            'yearA'          => $this->input->post('yearA'),
            'yearB'          => $this->input->post('yearB'),
            'yearC'          => $this->input->post('yearC'),
            'budget_A'       => $this->input->post('budget_A'),
            'currention_A'   => $this->input->post('currention_A'),
            'last_A'         => $this->input->post('last_A'),
            'comment_A'      => $this->input->post('comment_A'),
            'budget_B'       => $this->input->post('budget_B'),
            'currention_B'   => $this->input->post('currention_B'),
            'last_B'         => $this->input->post('last_B'),
            'comment_B'      => $this->input->post('comment_B'),
            'budget_C'       => $this->input->post('budget_C'),
            'currention_C'   => $this->input->post('currention_C'),
            'last_C'         => $this->input->post('last_C'),
            'comment_C'      => $this->input->post('comment_C'),
            'budget_D'       => $this->input->post('budget_D'),
            'currention_D'   => $this->input->post('currention_D'),
            'last_D'         => $this->input->post('last_D'),
            'comment_D'      => $this->input->post('comment_D'),
            'budget_E'       => $this->input->post('budget_E'),
            'currention_E'   => $this->input->post('currention_E'),
            'last_E'         => $this->input->post('last_E'),
            'comment_E'      => $this->input->post('comment_E'),
            'budget_F'       => $this->input->post('budget_F'),
            'currention_F'   => $this->input->post('currention_F'),
            'last_F'         => $this->input->post('last_F'),
            'comment_F'      => $this->input->post('comment_F'),
            'budget_G'       => $this->input->post('budget_G'),
            'currention_G'   => $this->input->post('currention_G'),
            'last_G'         => $this->input->post('last_G'),
            'comment_G'      => $this->input->post('comment_G'),
            'budget_H'       => $this->input->post('budget_H'),
            'currention_H'   => $this->input->post('currention_H'),
            'last_H'         => $this->input->post('last_H'),
            'comment_H'      => $this->input->post('comment_H'),
            'budget_I'       => $this->input->post('budget_I'),
            'currention_I'   => $this->input->post('currention_I'),
            'last_I'         => $this->input->post('last_I'),
            'comment_I'      => $this->input->post('comment_I'),
            'budget_J'       => $this->input->post('budget_J'),
            'currention_J'   => $this->input->post('currention_J'),
            'last_J'         => $this->input->post('last_J'),
            'comment_J'      => $this->input->post('comment_J'),
            'budget_K'       => $this->input->post('budget_K'),
            'currention_K'   => $this->input->post('currention_K'),
            'last_K'         => $this->input->post('last_K'),
            'comment_K'      => $this->input->post('comment_K'),
            'budget_L'       => $this->input->post('budget_L'),
            'currention_L'   => $this->input->post('currention_L'),
            'last_L'         => $this->input->post('last_L'),
            'comment_L'      => $this->input->post('comment_L'),
            'budget_M'       => $this->input->post('budget_M'),
            'currention_M'   => $this->input->post('currention_M'),
            'last_M'         => $this->input->post('last_M'),
            'comment_M'      => $this->input->post('comment_M'),
            'budget_N'       => $this->input->post('budget_N'),
            'currention_N'   => $this->input->post('currention_N'),
            'last_N'         => $this->input->post('last_N'),
            'comment_N'      => $this->input->post('comment_N'),
            'budget_O'       => $this->input->post('budget_O'),
            'currention_O'   => $this->input->post('currention_O'),
            'last_O'         => $this->input->post('last_O'),
            'comment_O'      => $this->input->post('comment_O'),
            'budget_P'       => $this->input->post('budget_P'),
            'currention_P'   => $this->input->post('currention_P'),
            'last_P'         => $this->input->post('last_P'),
            'comment_P'      => $this->input->post('comment_P'),
            'budget_Q'       => $this->input->post('budget_Q'),
            'currention_Q'   => $this->input->post('currention_Q'),
            'last_Q'         => $this->input->post('last_Q'),
            'comment_Q'      => $this->input->post('comment_Q'),
            'budget_R'       => $this->input->post('budget_R'),
            'currention_R'   => $this->input->post('currention_R'),
            'last_R'         => $this->input->post('last_R'),
            'comment_R'      => $this->input->post('comment_R'),
            'budget_S'       => $this->input->post('budget_S'),
            'currention_S'   => $this->input->post('currention_S'),
            'last_S'         => $this->input->post('last_S'),
            'comment_S'      => $this->input->post('comment_S'),
            'budget_T'       => $this->input->post('budget_T'),
            'currention_T'   => $this->input->post('currention_T'),
            'last_T'         => $this->input->post('last_T'),
            'comment_T'      => $this->input->post('comment_T'),
            'budget_U'       => $this->input->post('budget_U'),
            'currention_U'   => $this->input->post('currention_U'),
            'last_U'         => $this->input->post('last_U'),
            'comment_U'      => $this->input->post('comment_U'),
            'budget_V'       => $this->input->post('budget_V'),
            'currention_V'   => $this->input->post('currention_V'),
            'last_V'         => $this->input->post('last_V'),
            'comment_V'      => $this->input->post('comment_V'),
            'budget_W'       => $this->input->post('budget_W'),
            'currention_W'   => $this->input->post('currention_W'),
            'last_W'         => $this->input->post('last_W'),
            'comment_W'      => $this->input->post('comment_W'),
            'budget_X'       => $this->input->post('budget_X'),
            'currention_X'   => $this->input->post('currention_X'),
            'last_X'         => $this->input->post('last_X'),
            'comment_X'      => $this->input->post('comment_X'),
            'budget_Y'       => $this->input->post('budget_Y'),
            'currention_Y'   => $this->input->post('currention_Y'),
            'last_Y'         => $this->input->post('last_Y'),
            'comment_Y'      => $this->input->post('comment_Y'),
            'budget_Z'       => $this->input->post('budget_Z'),
            'currention_Z'   => $this->input->post('currention_Z'),
            'last_Z'         => $this->input->post('last_Z'),
            'comment_Z'      => $this->input->post('comment_Z'),
            'budget_aa'       => $this->input->post('budget_aa'),
            'currention_aa'   => $this->input->post('currention_aa'),
            'last_aa'         => $this->input->post('last_aa'),
            'comment_aa'      => $this->input->post('comment_aa'),
            'budget_bb'       => $this->input->post('budget_bb'),
            'currention_bb'   => $this->input->post('currention_bb'),
            'last_bb'         => $this->input->post('last_bb'),
            'comment_bb'      => $this->input->post('comment_bb'),
            'budget_cc'       => $this->input->post('budget_cc'),
            'currention_cc'   => $this->input->post('currention_cc'),
            'last_cc'         => $this->input->post('last_cc'),
            'comment_cc'      => $this->input->post('comment_cc'),
            'budget_dd'       => $this->input->post('budget_dd'),
            'currention_dd'   => $this->input->post('currention_dd'),
            'last_dd'         => $this->input->post('last_dd'),
            'comment_dd'      => $this->input->post('comment_dd'),
            'budget_ee'       => $this->input->post('budget_ee'),
            'currention_ee'   => $this->input->post('currention_ee'),
            'last_ee'         => $this->input->post('last_ee'),
            'comment_ee'      => $this->input->post('comment_ee'),
            'budget_ff'       => $this->input->post('budget_ff'),
            'currention_ff'   => $this->input->post('currention_ff'),
            'last_ff'         => $this->input->post('last_ff'),
            'comment_ff'      => $this->input->post('comment_ff'),
            'budget_gg'       => $this->input->post('budget_gg'),
            'currention_gg'   => $this->input->post('currention_gg'),
            'last_gg'         => $this->input->post('last_gg'),
            'comment_gg'      => $this->input->post('comment_gg'),
            'budget_hh'       => $this->input->post('budget_hh'),
            'currention_hh'   => $this->input->post('currention_hh'),
            'last_hh'         => $this->input->post('last_hh'),
            'comment_hh'      => $this->input->post('comment_hh'),
            'budget_ii'       => $this->input->post('budget_ii'),
            'currention_ii'   => $this->input->post('currention_ii'),
            'last_ii'         => $this->input->post('last_ii'),
            'comment_ii'      => $this->input->post('comment_ii'),
            'budget_jj'       => $this->input->post('budget_jj'),
            'currention_jj'   => $this->input->post('currention_jj'),
            'last_jj'         => $this->input->post('last_jj'),
            'comment_jj'      => $this->input->post('comment_jj'),
            'budget_kk'       => $this->input->post('budget_kk'),
            'currention_kk'   => $this->input->post('currention_kk'),
            'last_kk'         => $this->input->post('last_kk'),
            'comment_kk'      => $this->input->post('comment_kk'),
            'budget_ll'       => $this->input->post('budget_ll'),
            'currention_ll'   => $this->input->post('currention_ll'),
            'last_ll'         => $this->input->post('last_ll'),
            'comment_ll'      => $this->input->post('comment_ll'),
            'budget_mm'       => $this->input->post('budget_mm'),
            'currention_mm'   => $this->input->post('currention_mm'),
            'last_mm'         => $this->input->post('last_mm'),
            'comment_mm'      => $this->input->post('comment_mm'),
            'budget_nn'       => $this->input->post('budget_nn'),
            'currention_nn'   => $this->input->post('currention_nn'),
            'last_nn'         => $this->input->post('last_nn'),
            'comment_nn'      => $this->input->post('comment_nn'),
            'budget_oo'       => $this->input->post('budget_oo'),
            'currention_oo'   => $this->input->post('currention_oo'),
            'last_oo'         => $this->input->post('last_oo'),
            'comment_oo'      => $this->input->post('comment_oo'),
            'budget_pp'       => $this->input->post('budget_pp'),
            'currention_pp'   => $this->input->post('currention_pp'),
            'last_pp'         => $this->input->post('last_pp'),
            'comment_pp'      => $this->input->post('comment_pp'),
            'budget_qq'       => $this->input->post('budget_qq'),
            'currention_qq'   => $this->input->post('currention_qq'),
            'last_qq'         => $this->input->post('last_qq'),
            'comment_qq'      => $this->input->post('comment_qq'),
            'budget_rr'       => $this->input->post('budget_rr'),
            'currention_rr'   => $this->input->post('currention_rr'),
            'last_rr'         => $this->input->post('last_rr'),
            'comment_rr'      => $this->input->post('comment_rr'),
            'budget_ss'       => $this->input->post('budget_ss'),
            'currention_ss'   => $this->input->post('currention_ss'),
            'last_ss'         => $this->input->post('last_ss'),
            'comment_ss'      => $this->input->post('comment_ss'),
            'budget_tt'       => $this->input->post('budget_tt'),
            'currention_tt'   => $this->input->post('currention_tt'),
            'last_tt'         => $this->input->post('last_tt'),
            'comment_tt'      => $this->input->post('comment_tt'),
            'budget_uu'       => $this->input->post('budget_uu'),
            'currention_uu'   => $this->input->post('currention_uu'),
            'last_uu'         => $this->input->post('last_uu'),
            'comment_uu'      => $this->input->post('comment_uu'),
            'budget_vv'       => $this->input->post('budget_vv'),
            'currention_vv'   => $this->input->post('currention_vv'),
            'last_vv'         => $this->input->post('last_vv'),
            'comment_vv'      => $this->input->post('comment_vv'),
            'budget_ww'       => $this->input->post('budget_ww'),
            'currention_ww'   => $this->input->post('currention_ww'),
            'last_ww'         => $this->input->post('last_ww'),
            'comment_ww'      => $this->input->post('comment_ww'),
            'budget_xx'       => $this->input->post('budget_xx'),
            'currention_xx'   => $this->input->post('currention_xx'),
            'last_xx'         => $this->input->post('last_xx'),
            'comment_xx'      => $this->input->post('comment_xx'),
            'budget_yy'       => $this->input->post('budget_yy'),
            'currention_yy'   => $this->input->post('currention_yy'),
            'last_yy'         => $this->input->post('last_yy'),
            'comment_yy'      => $this->input->post('comment_yy'),
            'add_person'     => $this->input->post('uid'),
            'add_date'       => $date,
            'status'         => 'Add'
        );

        // print_r($dataA);

        $this->load->model('budget_model');
        $this->budget_model->add_new_budget_summery($dataA);

        $this->db->insert('budget_income', $dataA);
        if ($this->db->affected_rows() > 0) {

            $this->session->set_flashdata('msg', 'information Add Sucessfully');
            redirect('view-budgets');
        }
    }
    
    public function new_budget($slug = 'add_budget')
    {
        if (!file_exists(APPPATH . '/views/pages/' . $slug . '.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_new_budget',$data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function new_budget_ex($slug = 'add_budget')
    {
        if (!file_exists(APPPATH . '/views/pages/' . $slug . '.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $login_status_check;
                $this->load->view('templates/header');
                $this->load->view('/pages/dashboard');
                $this->load->view('/pages/add_new_budget_ex',$data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function add_new_budget_ex(){

        //error_reporting(0);
        $date = date('Y-m-d');
        $dataA = array(
            'yearA'          => $this->input->post('yearA'),
            'yearB'          => $this->input->post('yearB'),
            'yearC'          => $this->input->post('yearC'),
            'budget_A'       => $this->input->post('budget_A'),
            'currention_A'   => $this->input->post('currention_A'),
            'last_A'         => $this->input->post('last_A'),
            'comment_A'      => $this->input->post('comment_A'),
            'budget_B'       => $this->input->post('budget_B'),
            'currention_B'   => $this->input->post('currention_B'),
            'last_B'         => $this->input->post('last_B'),
            'comment_B'      => $this->input->post('comment_B'),
            'budget_C'       => $this->input->post('budget_C'),
            'currention_C'   => $this->input->post('currention_C'),
            'last_C'         => $this->input->post('last_C'),
            'comment_C'      => $this->input->post('comment_C'),
            'budget_D'       => $this->input->post('budget_D'),
            'currention_D'   => $this->input->post('currention_D'),
            'last_D'         => $this->input->post('last_D'),
            'comment_D'      => $this->input->post('comment_D'),
            'budget_E'       => $this->input->post('budget_E'),
            'currention_E'   => $this->input->post('currention_E'),
            'last_E'         => $this->input->post('last_E'),
            'comment_E'      => $this->input->post('comment_E'),
            'budget_F'       => $this->input->post('budget_F'),
            'currention_F'   => $this->input->post('currention_F'),
            'last_F'         => $this->input->post('last_F'),
            'comment_F'      => $this->input->post('comment_F'),
            'budget_G'       => $this->input->post('budget_G'),
            'currention_G'   => $this->input->post('currention_G'),
            'last_G'         => $this->input->post('last_G'),
            'comment_G'      => $this->input->post('comment_G'),
            'budget_H'       => $this->input->post('budget_H'),
            'currention_H'   => $this->input->post('currention_H'),
            'last_H'         => $this->input->post('last_H'),
            'comment_H'      => $this->input->post('comment_H'),
            'budget_I'       => $this->input->post('budget_I'),
            'currention_I'   => $this->input->post('currention_I'),
            'last_I'         => $this->input->post('last_I'),
            'comment_I'      => $this->input->post('comment_I'),
            'budget_J'       => $this->input->post('budget_J'),
            'currention_J'   => $this->input->post('currention_J'),
            'last_J'         => $this->input->post('last_J'),
            'comment_J'      => $this->input->post('comment_J'),
            'budget_K'       => $this->input->post('budget_K'),
            'currention_K'   => $this->input->post('currention_K'),
            'last_K'         => $this->input->post('last_K'),
            'comment_K'      => $this->input->post('comment_K'),
            'budget_L'       => $this->input->post('budget_L'),
            'currention_L'   => $this->input->post('currention_L'),
            'last_L'         => $this->input->post('last_L'),
            'comment_L'      => $this->input->post('comment_L'),
            'budget_M'       => $this->input->post('budget_M'),
            'currention_M'   => $this->input->post('currention_M'),
            'last_M'         => $this->input->post('last_M'),
            'comment_M'      => $this->input->post('comment_M'),
            'budget_N'       => $this->input->post('budget_N'),
            'currention_N'   => $this->input->post('currention_N'),
            'last_N'         => $this->input->post('last_N'),
            'comment_N'      => $this->input->post('comment_N'),
            'budget_O'       => $this->input->post('budget_O'),
            'currention_O'   => $this->input->post('currention_O'),
            'last_O'         => $this->input->post('last_O'),
            'comment_O'      => $this->input->post('comment_O'),
            'budget_P'       => $this->input->post('budget_P'),
            'currention_P'   => $this->input->post('currention_P'),
            'last_P'         => $this->input->post('last_P'),
            'comment_P'      => $this->input->post('comment_P'),
            'budget_Q'       => $this->input->post('budget_Q'),
            'currention_Q'   => $this->input->post('currention_Q'),
            'last_Q'         => $this->input->post('last_Q'),
            'comment_Q'      => $this->input->post('comment_Q'),
            'budget_R'       => $this->input->post('budget_R'),
            'currention_R'   => $this->input->post('currention_R'),
            'last_R'         => $this->input->post('last_R'),
            'comment_R'      => $this->input->post('comment_R'),
            'budget_S'       => $this->input->post('budget_S'),
            'currention_S'   => $this->input->post('currention_S'),
            'last_S'         => $this->input->post('last_S'),
            'comment_S'      => $this->input->post('comment_S'),
            'budget_T'       => $this->input->post('budget_T'),
            'currention_T'   => $this->input->post('currention_T'),
            'last_T'         => $this->input->post('last_T'),
            'comment_T'      => $this->input->post('comment_T'),
            'budget_U'       => $this->input->post('budget_U'),
            'currention_U'   => $this->input->post('currention_U'),
            'last_U'         => $this->input->post('last_U'),
            'comment_U'      => $this->input->post('comment_U'),
            'budget_V'       => $this->input->post('budget_V'),
            'currention_V'   => $this->input->post('currention_V'),
            'last_V'         => $this->input->post('last_V'),
            'comment_V'      => $this->input->post('comment_V'),
            'budget_W'       => $this->input->post('budget_W'),
            'currention_W'   => $this->input->post('currention_W'),
            'last_W'         => $this->input->post('last_W'),
            'comment_W'      => $this->input->post('comment_W'),
            'budget_X'       => $this->input->post('budget_X'),
            'currention_X'   => $this->input->post('currention_X'),
            'last_X'         => $this->input->post('last_X'),
            'comment_X'      => $this->input->post('comment_X'),
            'budget_Y'       => $this->input->post('budget_Y'),
            'currention_Y'   => $this->input->post('currention_Y'),
            'last_Y'         => $this->input->post('last_Y'),
            'comment_Y'      => $this->input->post('comment_Y'),
            'budget_Z'       => $this->input->post('budget_Z'),
            'currention_Z'   => $this->input->post('currention_Z'),
            'last_Z'         => $this->input->post('last_Z'),
            'comment_Z'      => $this->input->post('comment_Z'),
            'budget_aa'       => $this->input->post('budget_aa'),
            'currention_aa'   => $this->input->post('currention_aa'),
            'last_aa'         => $this->input->post('last_aa'),
            'comment_aa'      => $this->input->post('comment_aa'),
            'budget_bb'       => $this->input->post('budget_bb'),
            'currention_bb'   => $this->input->post('currention_bb'),
            'last_bb'         => $this->input->post('last_bb'),
            'comment_bb'      => $this->input->post('comment_bb'),
            'budget_cc'       => $this->input->post('budget_cc'),
            'currention_cc'   => $this->input->post('currention_cc'),
            'last_cc'         => $this->input->post('last_cc'),
            'comment_cc'      => $this->input->post('comment_cc'),
            'budget_dd'       => $this->input->post('budget_dd'),
            'currention_dd'   => $this->input->post('currention_dd'),
            'last_dd'         => $this->input->post('last_dd'),
            'comment_dd'      => $this->input->post('comment_dd'),
            'budget_ee'       => $this->input->post('budget_ee'),
            'currention_ee'   => $this->input->post('currention_ee'),
            'last_ee'         => $this->input->post('last_ee'),
            'comment_ee'      => $this->input->post('comment_ee'),
            'budget_ff'       => $this->input->post('budget_ff'),
            'currention_ff'   => $this->input->post('currention_ff'),
            'last_ff'         => $this->input->post('last_ff'),
            'comment_ff'      => $this->input->post('comment_ff'),
            'budget_gg'       => $this->input->post('budget_gg'),
            'currention_gg'   => $this->input->post('currention_gg'),
            'last_gg'         => $this->input->post('last_gg'),
            'comment_gg'      => $this->input->post('comment_gg'),
            'budget_hh'       => $this->input->post('budget_hh'),
            'currention_hh'   => $this->input->post('currention_hh'),
            'last_hh'         => $this->input->post('last_hh'),
            'comment_hh'      => $this->input->post('comment_hh'),
            'budget_ii'       => $this->input->post('budget_ii'),
            'currention_ii'   => $this->input->post('currention_ii'),
            'last_ii'         => $this->input->post('last_ii'),
            'comment_ii'      => $this->input->post('comment_ii'),
            'budget_jj'       => $this->input->post('budget_jj'),
            'currention_jj'   => $this->input->post('currention_jj'),
            'last_jj'         => $this->input->post('last_jj'),
            'comment_jj'      => $this->input->post('comment_jj'),
            'budget_kk'       => $this->input->post('budget_kk'),
            'currention_kk'   => $this->input->post('currention_kk'),
            'last_kk'         => $this->input->post('last_kk'),
            'comment_kk'      => $this->input->post('comment_kk'),
            'budget_ll'       => $this->input->post('budget_ll'),
            'currention_ll'   => $this->input->post('currention_ll'),
            'last_ll'         => $this->input->post('last_ll'),
            'comment_ll'      => $this->input->post('comment_ll'),
            'budget_mm'       => $this->input->post('budget_mm'),
            'currention_mm'   => $this->input->post('currention_mm'),
            'last_mm'         => $this->input->post('last_mm'),
            'comment_mm'      => $this->input->post('comment_mm'),
            'budget_nn'       => $this->input->post('budget_nn'),
            'currention_nn'   => $this->input->post('currention_nn'),
            'last_nn'         => $this->input->post('last_nn'),
            'comment_nn'      => $this->input->post('comment_nn'),
            'budget_oo'       => $this->input->post('budget_oo'),
            'currention_oo'   => $this->input->post('currention_oo'),
            'last_oo'         => $this->input->post('last_oo'),
            'comment_oo'      => $this->input->post('comment_oo'),
            'budget_pp'       => $this->input->post('budget_pp'),
            'currention_pp'   => $this->input->post('currention_pp'),
            'last_pp'         => $this->input->post('last_pp'),
            'comment_pp'      => $this->input->post('comment_pp'),
            'budget_qq'       => $this->input->post('budget_qq'),
            'currention_qq'   => $this->input->post('currention_qq'),
            'last_qq'         => $this->input->post('last_qq'),
            'comment_qq'      => $this->input->post('comment_qq'),
            'budget_rr'       => $this->input->post('budget_rr'),
            'currention_rr'   => $this->input->post('currention_rr'),
            'last_rr'         => $this->input->post('last_rr'),
            'comment_rr'      => $this->input->post('comment_rr'),
            'budget_ss'       => $this->input->post('budget_ss'),
            'currention_ss'   => $this->input->post('currention_ss'),
            'last_ss'         => $this->input->post('last_ss'),
            'comment_ss'      => $this->input->post('comment_ss'),
            'budget_tt'       => $this->input->post('budget_tt'),
            'currention_tt'   => $this->input->post('currention_tt'),
            'last_tt'         => $this->input->post('last_tt'),
            'comment_tt'      => $this->input->post('comment_tt'),
            'budget_uu'       => $this->input->post('budget_uu'),
            'currention_uu'   => $this->input->post('currention_uu'),
            'last_uu'         => $this->input->post('last_uu'),
            'comment_uu'      => $this->input->post('comment_uu'),
            'budget_vv'       => $this->input->post('budget_vv'),
            'currention_vv'   => $this->input->post('currention_vv'),
            'last_vv'         => $this->input->post('last_vv'),
            'comment_vv'      => $this->input->post('comment_vv'),
            'budget_ww'       => $this->input->post('budget_ww'),
            'currention_ww'   => $this->input->post('currention_ww'),
            'last_ww'         => $this->input->post('last_ww'),
            'comment_ww'      => $this->input->post('comment_ww'),
            'budget_xx'       => $this->input->post('budget_xx'),
            'currention_xx'   => $this->input->post('currention_xx'),
            'last_xx'         => $this->input->post('last_xx'),
            'comment_xx'      => $this->input->post('comment_xx'),
            'budget_yy'       => $this->input->post('budget_yy'),
            'currention_yy'   => $this->input->post('currention_yy'),
            'last_yy'         => $this->input->post('last_yy'),
            'comment_yy'      => $this->input->post('comment_yy'),
            'budget_zz'       => $this->input->post('budget_zz'),
            'currention_zz'   => $this->input->post('currention_zz'),
            'last_zz'         => $this->input->post('last_zz'),
            'comment_zz'      => $this->input->post('comment_zz'),
            'budget_aaa'       => $this->input->post('budget_aaa'),
            'currention_aaa'   => $this->input->post('currention_aaa'),
            'last_aaa'         => $this->input->post('last_aaa'),
            'comment_aaa'      => $this->input->post('comment_aaa'),
            'budget_bbb'       => $this->input->post('budget_bbb'),
            'currention_bbb'   => $this->input->post('currention_bbb'),
            'last_bbb'         => $this->input->post('last_bbb'),
            'comment_bbb'      => $this->input->post('comment_bbb'),
            'budget_ccc'       => $this->input->post('budget_ccc'),
            'currention_ccc'   => $this->input->post('currention_ccc'),
            'last_ccc'         => $this->input->post('last_ccc'),
            'comment_ccc'      => $this->input->post('comment_ccc'),
            'budget_ddd'       => $this->input->post('budget_ddd'),
            'currention_ddd'   => $this->input->post('currention_ddd'),
            'last_ddd'         => $this->input->post('last_ddd'),
            'comment_ddd'      => $this->input->post('comment_ddd'),
            'budget_eee'       => $this->input->post('budget_eee'),
            'currention_eee'   => $this->input->post('currention_eee'),
            'last_eee'         => $this->input->post('last_eee'),
            'comment_eee'      => $this->input->post('comment_eee'),
            'budget_fff'       => $this->input->post('budget_fff'),
            'currention_fff'   => $this->input->post('currention_fff'),
            'last_fff'         => $this->input->post('last_fff'),
            'comment_fff'      => $this->input->post('comment_fff'),
            'budget_ggg'       => $this->input->post('budget_ggg'),
            'currention_ggg'   => $this->input->post('currention_ggg'),
            'last_ggg'         => $this->input->post('last_ggg'),
            'comment_ggg'      => $this->input->post('comment_ggg'),
            'budget_gggA'       => $this->input->post('budget_gggA'),
            'currention_gggA'   => $this->input->post('currention_gggA'),
            'last_gggA'         => $this->input->post('last_gggA'),
            'comment_gggA'      => $this->input->post('comment_gggA'),
            'budget_hhh'       => $this->input->post('budget_hhh'),
            'currention_hhh'   => $this->input->post('currention_hhh'),
            'last_hhh'         => $this->input->post('last_hhh'),
            'comment_hhh'      => $this->input->post('comment_hhh'),
            'budget_iii'       => $this->input->post('budget_iii'),
            'currention_iii'   => $this->input->post('currention_iii'),
            'last_iii'         => $this->input->post('last_iii'),
            'comment_iii'      => $this->input->post('comment_iii'),
            'budget_jjj'       => $this->input->post('budget_jjj'),
            'currention_jjj'   => $this->input->post('currention_jjj'),
            'last_jjj'         => $this->input->post('last_jjj'),
            'comment_jjj'      => $this->input->post('comment_jjj'),
            'budget_kkk'       => $this->input->post('budget_kkk'),
            'currention_kkk'   => $this->input->post('currention_kkk'),
            'last_kkk'         => $this->input->post('last_kkk'),
            'comment_kkk'      => $this->input->post('comment_kkk'),
            'budget_lll'       => $this->input->post('budget_lll'),
            'currention_lll'   => $this->input->post('currention_lll'),
            'last_lll'         => $this->input->post('last_lll'),
            'comment_lll'      => $this->input->post('comment_lll'),
            'budget_mmm'       => $this->input->post('budget_mmm'),
            'currention_mmm'   => $this->input->post('currention_mmm'),
            'last_mmm'         => $this->input->post('last_mmm'),
            'comment_mmm'      => $this->input->post('comment_mmm'),
            'budget_ppp'       => $this->input->post('budget_ppp'),
            'currention_ppp'   => $this->input->post('currention_ppp'),
            'last_ppp'         => $this->input->post('last_ppp'),
            'comment_ppp'      => $this->input->post('comment_ppp'),
            'budget_qqq'       => $this->input->post('budget_qqq'),
            'currention_qqq'   => $this->input->post('currention_qqq'),
            'last_qqq'         => $this->input->post('last_qqq'),
            'comment_qqq'      => $this->input->post('comment_qqq'),
            'budget_rrr'       => $this->input->post('budget_rrr'),
            'currention_rrr'   => $this->input->post('currention_rrr'),
            'last_rrr'         => $this->input->post('last_rrr'),
            'comment_rrr'      => $this->input->post('comment_rrr'),
            'budget_sss'       => $this->input->post('budget_sss'),
            'currention_sss'   => $this->input->post('currention_sss'),
            'last_sss'         => $this->input->post('last_sss'),
            'comment_sss'      => $this->input->post('comment_sss'),
            'budget_ttt'       => $this->input->post('budget_ttt'),
            'currention_ttt'   => $this->input->post('currention_ttt'),
            'last_ttt'         => $this->input->post('last_ttt'),
            'comment_ttt'      => $this->input->post('comment_ttt'),
            'budget_uuu'       => $this->input->post('budget_uuu'),
            'currention_uuu'   => $this->input->post('currention_uuu'),
            'last_uuu'         => $this->input->post('last_uuu'),
            'comment_uuu'      => $this->input->post('comment_uuu'),
            'budget_vvv'       => $this->input->post('budget_vvv'),
            'currention_vvv'   => $this->input->post('currention_vvv'),
            'last_vvv'         => $this->input->post('last_vvv'),
            'comment_vvv'      => $this->input->post('comment_vvv'),
            'budget_www'       => $this->input->post('budget_www'),
            'currention_www'   => $this->input->post('currention_www'),
            'last_www'         => $this->input->post('last_www'),
            'comment_www'      => $this->input->post('comment_www'),
            'budget_xxx'       => $this->input->post('budget_xxx'),
            'currention_xxx'   => $this->input->post('currention_xxx'),
            'last_xxx'         => $this->input->post('last_xxx'),
            'comment_xxx'      => $this->input->post('comment_xxx'),
            'budget_yyy'       => $this->input->post('budget_yyy'),
            'currention_yyy'   => $this->input->post('currention_yyy'),
            'last_yyy'         => $this->input->post('last_yyy'),
            'comment_yyy'      => $this->input->post('comment_yyy'),
            'budget_zzz'       => $this->input->post('budget_zzz'),
            'currention_zzz'   => $this->input->post('currention_zzz'),
            'last_zzz'         => $this->input->post('last_zzz'),
            'comment_zzz'      => $this->input->post('comment_zzz'),
            'budget_total'       => $this->input->post('budget_total'),
            'currention_total'   => $this->input->post('currention_total'),
            'last_total'         => $this->input->post('last_total'),
            'comment_total'      => $this->input->post('comment_total'),
            'add_person'     => $this->input->post('uid'),
            'add_date'       => $date,
            'status'         => 'Add'
        );


        $this->load->model('budget_model');
        $this->budget_model->add_new_budget_ex($dataA);
        
    }

    public function view_budget()
    {
        if (!file_exists(APPPATH . '/views/pages/view_budget.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('budget_model');
                $data['list_of_pending_record'] = $this->budget_model->show_budget_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/view_budget', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function details_budget()
    {
        if (!file_exists(APPPATH . '/views/pages/budget_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('budget_model');
                $data['budget_complete_info'] = $this->budget_model->get_budget_details($id);
                //print_r($data['budget_complete_info']);
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/budget_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }


    //---delete update controller : edit budget details controller

    public function delete_single_budget()
    {

        $login_status_check = $this->session->userdata('user_type');
        if ($login_status_check == null) {
            $this->session->set_userdata('status', 'Please Login First');
            $this->load->view('/pages/login');
        } else {

            $id  = $this->uri->segment(2);
            $this->load->model('budget_model');
            $result = $this->budget_model->delete_budget($id);
            if ($result == true) {
                $this->session->set_userdata('status', 'Delete Successfully');
                redirect('view-all-registers');
            }
        }
    }


    //---/delete update controller : edit budget details controller

    //---edit update controller : edit budget details controller

    public function edit_budget_details()
    {
        if (!file_exists(APPPATH . '/views/pages/edit_budget_details.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $data['userid'] = $this->session->userdata('user_type');
                $id = $this->uri->segment(2);
                $this->load->model('budget_model');

                $data['single_post_data'] = $this->budget_model->get_single_post_details($id);
                //print_r($data['single_post_data']);

                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('pages/edit_budget_details', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function update_budget()
    {
        error_reporting(0);
        $rid = $this->input->post('rid');
        // File Upload function Start
        $data = array();
        $doc = json_encode(str_replace(" ", "", $_FILES['userFiles']['name']));
        $filesCount = count($_FILES['userFiles']['name']);

        $register_id = $this->input->post('register_id');

        if ($doc == '[""]') {
            $doc = $this->input->post('userFiles2');
        }

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['userFile']['name'] = str_replace(" ", "", $_FILES['userFiles']['name'][$i]);
            $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];


            $uploadPath = 'uploads/Register/' . $register_id;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|psd|xlsx';


            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userFile');
        }
        // File Upload function End 


        //error_reporting(0);
        $today = date('Y-m-d');
        $data = array(
            'register_id'   => $this->input->post('register_id'),
            'subject'       => $this->input->post('subject'),
            'opening_date'  => $this->input->post('opening_date'),
            'close_date'    => $this->input->post('ending_date'),
            'sector'        => $this->input->post('section'),
            'total_page'    => $this->input->post('total_page'),
            'attend_ceo'    => $this->input->post('ceo_date'),
            'details'       => $this->input->post('details'),
            'file_upload'   => $doc,
            'add_date'      => $today,
            'status'        => 'Pending',
            'add_person'    => $this->input->post('uid')
        );

        //print_r($data);
        $this->db->where('id', $rid);
        $this->db->update('register_file', $data);
        // if($this->db->affected_rows() > 0){

        $this->session->set_userdata('status', 'information Add Sucessfully');
        redirect('view-all-registers');
    }

    //---/edit update controller : edit budget details controller

    public function budget_list()
    {
        if (!file_exists(APPPATH . '/views/pages/budget_list.php')) {
            show_404();
        } else {
            $login_status_check = $this->session->userdata('user_type');
            print_r($login_status_check);
            if ($login_status_check == null) {
                $this->session->set_userdata('status', 'Please Login First');
                $this->load->view('/pages/login');
            } else {
                $this->load->model('budget_model');
                $data['list_of_budget_record'] = $this->budget_model->show_all_budget_list();
                $data['userid'] = $this->session->userdata('user_type');
                $this->load->view('templates/header');
                $this->load->view('pages/dashboard');
                $this->load->view('/pages/budget_list', $data);
                $this->load->view('templates/footer');
            }
        }
    }
}
