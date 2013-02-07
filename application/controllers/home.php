<?php 

class Home extends CI_Controller {

	function __construct()
  	{
        parent::__construct();

  	}
  function index() {
    $this->load->model('index_model');
    $foldername['foldername'] = $this->index_model->getFoldernames();
    $this->load->view('layouts/home', $foldername);
	}

	function create() {
    if(array_key_exists('createFolder',$_POST)){
      $data = array(
        'folderName' => $this->input->post('folderName'),
        'subFolderName' => $this->input->post('subFolderName'),
        'imageName' => $this->input->post('imageName')
      );
      $this->index_model->createFolder($data);
    }
    $this->foldercreated();
  }

  function delete() {
    $this->load->model('index_model');
    $foldername['foldername'] = $this->index_model->getFoldernames();
    $this->load->view('layouts/delete', $foldername);
  }

 function deleteFolder() {
   if($this->input->post('checkbox') !== false) {
      $checkbox = $this->input->post('checkbox');
      $this->index_model->deleteFolder($checkbox);
   }
 $this->folderdeleted();
}

  function foldercreated() {
    $this->load->view('partials/foldercreated');
  }

   function folderdeleted() {
     $this->load->view('partials/folderdeleted');
   }

}

