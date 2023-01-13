<<?php

    class Kalender extends CI_Controller
    {
        function index()
        {
            $this->data['main_view'] = 'depan/v_kalender';
            $this->load->view('theme/template', $this->data);
        }
    }
    ?>