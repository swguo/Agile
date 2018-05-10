<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	//取得所有新聞
	public function get_all_news()
	{
		$this->db->select('*');
		$this->db->from('news');
		$this->db->order_by('news.id', 'desc');
		$query = $this->db->get();

		return $query;
	}
	//插入活動標題與描述
	public function insert_photo($title,$description,$title_en,$description_en,$time)
	{

		$data = array(			
			'title' => $title,
			'description' => $description,
			'title_en' => $title_en,
			'description_en' => $description_en,
			'push_time' => $time			
			);

		$query= $this->db->insert('photo_d', $data);	

		$index = $this->db->query('SELECT max(id) as mindex from photo_d');
		//判斷insert是否成功
		if($index == TRUE){
			return $index->result()[0]->mindex;
		} else{
			return FALSE;
		}
	}
	public function insert_photofile($photo_d_id,$filename,$pathfilename){
		$data = array(			
			'photo_d_id' => $photo_d_id,
			'filename' => $filename,			
			'pathfilename' => $pathfilename			
			);

		$query = $this->db->insert('photo', $data);	
		if($index == TRUE){
			return TRUE;
		} else{
			return FALSE;
		}

	}
	public function num_photo(){
		$query = $this->db->query("select * from photo_d");
		if ($query->num_rows() > 0) {  
            return $query->num_rows();
        }else{
        	return false;
    	}
	}
	public function show_photo($limit,$page){
		$query = $this->db->query("SELECT photo_d.id as id,title,title_en,description,description_en,push_time,pathfilename
									from photo_d left join photo on photo_d.id = photo.photo_d_id
									group by photo_d.id
									order by photo_d.id desc
									limit ".$page." , ".$limit."");

		if ($query->num_rows() > 0) {  
            return $query;
        }else{
        	return false;
    	}
	}
	public function show_photoDetail(){
		$query = $this->db->query("SELECT title,title_en,description,description_en,push_time,pathfilename from photo_d left join photo on photo_d.id = photo.photo_d_id");

		if ($query->num_rows() > 0) {  
            return $query;
        }else{
        	return false;
    	}

	}

}
