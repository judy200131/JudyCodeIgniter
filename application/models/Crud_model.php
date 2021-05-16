
   <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    function createData() {
        $data = array (
            'lastname' => $this->input->post('lastname'),
            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'gender' => $this->input->post('gender'),
            'age' => $this->input->post('age')
        );
        $this->db->insert('users', $data);
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM users');
        return $query->result();
    }

    function getData($id) {
        $query = $this->db->query('SELECT * FROM users WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'lastname' => $this->input->post('lastname'),
            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'gender' => $this->input->post('gender'),
            'age' => $this->input->post('age')
        );
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
 
}
