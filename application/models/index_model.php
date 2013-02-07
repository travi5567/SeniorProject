
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
    $this->db->select('folderName');
    $q = $this->db->get('senior');
  
    if($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
          $data[] = $row;
        }
      return $data;
    }
  }

  function deleteFolder($checkbox) {
    $this->db->where('folderName', 'folderName'); 
    $this->db->delete('senior', $checkbox);
    return;
  }

		
	}
