<?php
Class Duplicate_question_model extends CI_Model
{
 
  
 function check_duplicate($limit){
	 
	$question=strip_tags($this->input->post('question'));
			 $this->db->like('amolpatil_qbank.question',$question);

	 
		 $this->db->join('amolpatil_category','amolpatil_category.cid=amolpatil_qbank.cid');
	 $this->db->join('amolpatil_level','amolpatil_level.lid=amolpatil_qbank.lid');
	 $this->db->limit(5,$limit);
		$this->db->order_by('amolpatil_qbank.qid','desc');
		$query=$this->db->get('amolpatil_qbank');
		return $query->result_array();
 }
 
  

 
}







 



?>
