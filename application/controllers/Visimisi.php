<<?php

    class Visimisi extends CI_Controller
    {
        function index()
        {
            $this->data['main_view'] = 'depan/v_visimisi';
            $this->load->view('theme/template', $this->data);
        }
    }
    ?>