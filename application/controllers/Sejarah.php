<<?php

    class sejarah extends CI_Controller
    {
        function index()
        {
            $this->data['main_view'] = 'depan/v_sejarah';
            $this->load->view('theme/template', $this->data);
        }
    }
    ?>