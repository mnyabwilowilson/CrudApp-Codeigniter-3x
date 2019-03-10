<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Category extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('CategoryModel', 'cm');
		}

		public function index()
		{
			$data['category'] = $this->cm->getAllCategory();
			$this->load->view('layout/header');
			$this->load->view('category/index', $data);
			$this->load->view('layout/footer');
		}

		public function add()
		{
			$this->load->view('layout/header');
			$this->load->view('category/add');
			$this->load->view('layout/footer');
		}

		public function submit()
		{
			$insertCategory = $this->cm->insertCategory();

			if ($insertCategory) {
				
				$this->session->set_flashdata('success_msg', 'Category is successfully added');

			} else {
				
				$this->session->set_flashdata('error_msg', 'Failure to add category');

			}
			
			redirect(base_url('category/index'));
		}

		public function edit($id)
		{
			$data['category'] = $this->cm->getCategoryById($id);
			$this->load->view('layout/header');
			$this->load->view('category/edit', $data);
			$this->load->view('layout/footer');
		}

		public function update()
		{
			$updateCategory = $this->cm->updateCategory();

			if ($updateCategory) {
				
				$this->session->set_flashdata('success_msg', 'Category is successfully edited');

			} else {
				
				$this->session->set_flashdata('error_msg', 'Failure to edit category');

			}
			
			redirect(base_url('category/index'));
		}

		public function delete($id)
		{
			$deleteCategory = $this->cm->deleteCategory($id);

			if ($deleteCategory) {
				
				$this->session->set_flashdata('success_msg', 'Category is successfully deleted');

			} else {
				
				$this->session->set_flashdata('error_msg', 'Failure to delete category');

			}
			
			redirect(base_url('category/index'));
		}
	}
?>