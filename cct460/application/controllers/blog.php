
<?php
  class Blog extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('blog_model');
    }

    function index()
    {
      $data['title'] = "My blog";
      $data['posts'] = $this->blog_model->getPosts();
      $this->load->view('blog_view', $data);
    }
  
  } 