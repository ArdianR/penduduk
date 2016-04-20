<?php 
	 class Datavisimisi extends CI_Model
	 {
	 	
	 	public function all()
	 	{
		 	$query=$this->db->get('visimisi');
		 	if($query->num_rows>0)
		 	{
		 		return $query;
		 	}
		 	else
		 	{
		 		return null;
		 	}
	 	}
	 	public function add()
	 	{
	 		$query=$this->db->get('visimisi');
	 		if ($query->num_rows>0) 
	 		{
	 			foreach ($query->result() as $row)
	 				$id=$row->id;


	 			$this->db->where('id',$id);
	 			$data=array(
	 				'id'=>$id,
	 				'visimisi'=>$this->input->post('visimisi')
	 				);

	 			$this->db->update('visimisi',$data);
	 		}
	 		else
	 		{
	 			$id=1;
	 			$data=array(
	 				'id'=>$id,
	 				'visimisi'=>$this->input->post('visimisi')
	 				);
	 			$this->db->insert('visimisi',$data);
	 		}
	 	}
	 }