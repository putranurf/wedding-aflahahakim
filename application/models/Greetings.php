<?php
	
	class Greetings extends CI_Model {
		
		function TransaksiShiftModel_() {
			parent::__construct();
			$this->load->database();			
		}
		
		public function insertGreetings($name, $greetings) {
			
			$data = array(
			'name' 		  			=> $name,
			'greetings' 	      	=> $greetings,
			'created_date' 			=> date('Y-m-d h:i:s')
			);
			$this->db->insert('greetings', $data);
			if ($this->db->affected_rows() > 0) {
				$result = TRUE;
				} else {
				$result = FALSE;
			}
			return $result;
		}

		public function readGreetings()
		{
				
			$sql = $this->db->query(
			"                     
            select * from greetings order by created_date desc
			
            ");
			
			return $sql->result();

		}
		
			
	}
	
	
	
	
	
