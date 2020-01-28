<?php
class Pages extends CI_Controller {

        /* 'home' is default $page that automatically loaded even though it is not calls */
        
        /* checking if the page is exist unless shows the 404 error */
        public function view($page = 'home') {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                // Whoops, we don't have a page for that!
                show_404();
        }

        /* the ucfirst function used to make the title capitalized the fist letter */
        $data['title'] = ucfirst($page);

        /* this view method loads three views such as header, page, and footer */
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
        }
}