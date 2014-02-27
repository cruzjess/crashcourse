<?php
 
  class admin extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('blog_model');
    }

    function index()
    {
      $this->load->helper('form');
      $data['title'] = "My blog admin";
      $data['posts'] = $this->blog_model->getPosts();
      $this->load->view('admin_view', $data);
    }

    function create()
    {
      $this->load->helper('form');

      $data['title'] = "My blog admin";
      $this->blog_model->create_post();
      $this->load->view('admin_success_view');
    }

    function update($id)
    {
      $this->load->helper('form');

      $data['title'] = "My blog admin";
      $data['post'] = $this->blog_model->getPost($id);
      $this->load->view('templates/header', $data);
      $this->load->view('admin_update', $data);
      $this->load->view('templates/footer');
    }

    function update_post($id)
    {
      $this->load->helper('form');

      $data['title'] = "My blog admin";
      $this->blog_model->update_post($id);
      $this->load->view('admin_update_success_view', $data);
    }

    function delete($id)
    {
      $this->load->helper('form');

      $data['title'] = "My blog admin";
      $this->blog_model->delete_post($id);
      $this->load->view('admin_post_deleted_view');
    }
  }