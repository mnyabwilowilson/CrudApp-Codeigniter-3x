<?php
	/**
	 * 
	 */
	class CategoryModel extends CI_Model
	{
		
		function getAllCategory()
		{
			$query = $this->db->get('category');

			if ($query->num_rows() > 0) {
				
				return $query->result();

			} else {
				
				return false;

			}
			
		}

		function insertCategory()
		{
			$data = array(
				'name' => $this->input->post('txt_name'), 
				'description' => $this->input->post('txt_description'), 
				'created_at' => date('Y-m-d H:i:s'), 
			);

			$this->db->insert('category', $data);

			if ($this->db->affected_rows() > 0) {
				
				return true;

			} else {
				
				return false;

			}
			
		}

		function getCategoryById($id)
		{
			
			$this->db->where('id', $id);

			$query = $this->db->get('category');

			if ($query->num_rows() > 0) {
				
				return $query->row();

			} else {
				
				return false;

			}
			
		}

		function updateCategory()
		{
			$id = $this->input->post('txt_hidden');

			$data = array(
				'name' => $this->input->post('txt_name'), 
				'description' => $this->input->post('txt_description'), 
				'updated_at' => date('Y-m-d H:i:s') 
			);

			$this->db->where('id', $id);

			$this->db->update('category', $data);

			if ($this->db->affected_rows() > 0) {
				
				return true;

			} else {
				
				return false;

			}
		}

		function deleteCategory($id)
		{
			$this->db->where('id', $id);

			$this->db->delete('category');

			if($this->db->affected_rows() > 0){

				return true;

			}else{

				return false;
				
			}
		}

	}
?>