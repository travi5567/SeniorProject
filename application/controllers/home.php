<?php 

class Home extends CI_Controller {

	function __construct()
  	{
        parent::__construct();
        $this->load->library('upload');
  	}
  function index() {
    
    $this->load->model('index_model');
    $data['foldername'] = $this->index_model->getFoldernames();
    $data['imagename'] = $this->index_model->getImagenames();

    $this->load->view('layouts/home', $data);
	}

	function create() {
    if(array_key_exists('createFolder',$_POST)){
      $data = array(
        'folderName' => $this->input->post('folderName')
      );
      $data = str_replace(' ', '_', $data);
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
    $this->index_model->deleteFolder();
    $this->folderdeleted();
  }

  function foldercreated() {
    $this->load->view('partials/foldercreated');
  }

  function folderdeleted() {
     $this->load->view('partials/folderdeleted');
  }

  function imagedeleted() {
     $this->load->view('partials/imagedeleted');
  }

   function do_upload() {
    $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '0';
    $config['max_width']  = '0';
    $config['max_height']  = '0';
    $this->upload->initialize($config);
    $this->load->library('upload', $config);
    
    if ( !$this->upload->do_upload('userfile'))
    {
      echo  '<p>IMAGE NOT WORKING</p>'. '<br/><p>' . $this->upload->display_errors() . '</p>';
      $uploadError = $this->upload->display_errors();
      $this->load->view('partials/upload_error', $uploadError);
    }
    else
    { 
      $upload_data = $this->upload->data();

      $db_data = array('imageName' => $upload_data['file_name']);
      $this->index_model->addImage($db_data); // replace the tablename

      $this->load->view('partials/upload_success', $db_data);         
    }
  }

  function gallery() {
    $this->load->model('index_model');
    $data['imagename'] = $this->index_model->getImagenames();
    $this->load->view('layouts/gallery', $data);
  }

  function deleteImage() {
    $this->index_model->deleteImage();
    $this->imagedeleted();
  }



}

