<?php
class News_model extends CI_Model {

        
        /* ============================================================================= */
        /* this __construct used to call database connection, or can be made in autoload */

        public function __construct() {
                $this->load->database();
        }


        /* =============================================================================== */
        /* create a function in order to get all news from database*/

        public function get_news($slug = FALSE) {
        if ($slug === FALSE){
                $this->db->order_by('id', 'DESC');
                $query = $this->db->get('news'); //news here is table's name in database
                return $query->result_array();
        }

        $query = $this->db->get_where('news', ['slug' => $slug]); //news is table's name in db
        return $query->row_array();
        }



        /* =================================================================================== */
        /* create a function to insert a news in database */

        public function set_news() {

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'preview' => $this->input->post('preview'),
                'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
        }



        /* =================================================================================== */
        /* create a function to delete news in database */

        public function delete_news($id){
                $this->db->where('id' , $id);
                $this->db->delete('news');
                return true;
        }



        /* ==================================================================================== */
        /* create a function to update news in database */

        public function update_news(){
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

                $data = array(
                        'title' => $this->input->post('title'),
                        'slug' => $slug,
                        'text' => $this->input->post('text')
                );
        $this->db->where('id' , $this->input->post('id'));
        return $this->db->update('news', $data);
        }

}