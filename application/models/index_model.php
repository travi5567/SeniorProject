
<?php

class index_model extends CI_Model {

  function __construct()
    {
        parent::__construct();
    }

	function home() {
			
		}

  function createFolder($data) {
    $this->db->insert('senior', $data);
    return;
  }

  function getFolderNames() {
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('senior');
    return $q->result();
  }

  function getImagenames() {
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get('images');
    return $query->result();
  }

  function deleteFolder() {
    $this->db->where('id', $this->uri->segment(3)); 
    $this->db->delete('senior');
  }

  function addImage($db_data) {
    $this->db->where('imageName');
    $this->db->insert('images', $db_data);
  }

		
	}
