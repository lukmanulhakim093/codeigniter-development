<?php
class News extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
                $this->load->library('form_validation');
        }


        /* =========================================================================== */
        /* The method 'index' loaded first when controller 'News' was called */
        /* Go to 'application/models/News_model.php' to see connection to database */
        /* Go to 'application/views/news/index.php' to see what the content of the index */

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'News archive';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }


        /* ========================================================================== */
        /* Go to 'application/views/news/view.php' to see what the content of the view */

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item'])) {
                        show_404();
                }

                $data['title'] = $data['news_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }


        /* ============================================================================ */
        /* Go to 'application/views/news/create.php' to see what the content of the create */

        public function create()
        {

                $data['title'] = 'Create a news item';

                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('preview', 'Preview', 'required');
                $this->form_validation->set_rules('text', 'Text', 'required');

                // if the form validation detecting input error, show message error and stay on news/index page
                if ($this->form_validation->run() === FALSE) {
                        $this->load->view('templates/header', $data);
                        $this->load->view('news/create');
                        $this->load->view('templates/footer');
                } else {
                        $this->news_model->set_news();
                        redirect('news');  //redirect the page from create page to news/index page
                }
        }


        /* ================================================================================ */

        public function delete($id)
        {
                $this->news_model->delete_news($id);
                redirect('news');
        }


        /* ============================================================================== */
        /* Go to 'application/views/news/edit.php' to see what the content of the edit */

        public function edit($slug)
        {

                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item'])) {
                        show_404();
                }

                $data['title'] = 'Edit news';

                $this->load->view('templates/header', $data);
                $this->load->view('news/edit', $data);
                $this->load->view('templates/footer');
        }


        /* ==================================================================================== */
        public function update()
        {
                $this->news_model->update_news();
                redirect('news');
        }
}
