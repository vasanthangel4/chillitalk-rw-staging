<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');

class Access_number extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('username') == '') {
			redirect(base_url().$this->session->userdata('lang').'/login_member');
		}
	}
	
	public function index() {
		
		header("HTTP/1.1 200 OK");
		$this->lang->load('myaccount/access_number');
		
		
		
		$uri = 'http://sws.vectone.com/api/CTPAccessNoCountry?viewMode=1&top=0&countryCode2=%&langcode=ENG';
		  
		//$params = array('accId' => $this->session->userdata('account_id'));
		$this->rest->format('application/json');
	  
		$result = $this->rest->get($uri);
		
		//print_r($result);
		
		$this->lang->load('myaccount/access_number');
		
		$data = array('title' => 'Home Saver Bundles',
					  'isi'   => 'access_number/list',
					  'result' => $result
					  );
		
		$this->load->view('myaccount/template/wrapper',$data);
		
		
	}
	
	public function get_access_number($val) {
		header("HTTP/1.1 200 OK");
		$tmp    = '';
		
		$uri = 'http://sws.vectone.com/api/CTPAccessNo?CountryCode='.$val;
		  
		$this->rest->format('application/json');
	  	
		$result = $this->rest->get($uri);
		
		//print_r($result);
		if(!empty($result)){
            
            foreach($result->List as $row) {   
                $tmp .= "<option value='".$row->Province."'>".$row->Province."</option>";
            }
        } else {
             $tmp .= "<option value=''>Select States</option>";
        }
        die($tmp);
       
	}
	
	public function get_detail($val) {
		
		header("HTTP/1.1 200 OK");
		$tmp    = '';
		
		$uri = 'http://sws.vectone.com/api/CTPAccessNo?CountryCode='.$val;
		  
		$this->rest->format('application/json');
	  	
		$result = $this->rest->get($uri);
		
		//print_r($result);
		if(!empty($result)){
            
			$tmp = '<h3 id="access_caption">Access Number</h3>
					<h3 id="city_caption">City</h3>
					<h3 id="state_caption">State</h3>';                
					
					foreach($result->List as $row) {
						if($row->AccessNo == '') {
							$tmp .= '<h3><small>-</small></h3>';
						}else{
							$tmp .= '<h3><small>'.$row->AccessNo .'</small></h3>';
						}
						
					   if($row->City == '') {
							$tmp .= '<h3><small>-</small></h3>';
						}else{
							$tmp .= '<h3><small>'. $row->City .'</small></h3>';
						}
						
						if($row->Province == '') {
							$tmp .= '<h3><small>-</small></h3>';
						}else{
							$tmp .= '<h3><small>'. $row->Province .'</small></h3>';
						}
					}
		   
			die($tmp);
       
		}
	}
	
	public function get_state($co,$val) {
		
		header("HTTP/1.1 200 OK");
		$tmp    = '';
		
		$uri = 'http://sws.vectone.com/api/CTPAccessNo?CountryCode='.$co.'&province='.$val;
		  
		$this->rest->format('application/json');
	  	
		$result = $this->rest->get($uri);
		
		//print_r($result);
		if(!empty($result)){
            
			$tmp = '<h3 id="access_caption">Access Number</h3>
					<h3 id="city_caption">City</h3>
					<h3 id="state_caption">State</h3>';                
					
					foreach($result->List as $row) {
						if($row->AccessNo == '') {
							$tmp .= '<h3><small>-</small></h3>';
						}else{
							$tmp .= '<h3><small>'.$row->AccessNo .'</small></h3>';
						}
						
					   if($row->City == '') {
							$tmp .= '<h3><small>-</small></h3>';
						}else{
							$tmp .= '<h3><small>'. $row->City .'</small></h3>';
						}
						
						if($row->Province == '') {
							$tmp .= '<h3><small>-</small></h3>';
						}else{
							$tmp .= '<h3><small>'. $row->Province .'</small></h3>';
						}
					}
		   
			die($tmp);
       
		}
	}
	
}