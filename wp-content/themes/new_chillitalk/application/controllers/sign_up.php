<?php if(! defined('BASEPATH')) exit('Not Allowed');

class Sign_up extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
		/*if($this->session->userdata('username') == '') {
			return TRUE;
		}else{
			redirect(base_url().'myaccount/dashboard/logout_not_redirect');
		}*/
	}
	
	public function index($ref_code = null) {
		
		
		
		header("HTTP/1.1 200 OK");
		//redirect(base_url().'en/sign_up#landline');
		if($this->uri->segment('3') != '') {
			$ref_code = $this->uri->segment('3');
		}else{
			$ref_code = '';
		}
		//echo $ref_code;
		$valid = $this->form_validation;
		$input_post = $this->input;
		$valid->set_rules('first_name','First Name','required|min_length[2]');
		$valid->set_rules('last_name','Last Name','required|min_length[2]');
		$valid->set_rules('email_address','Email address','required|valid_email|min_length[4]');
		$valid->set_rules('phone_number','Phone Number','required|numeric|min_length[6]');
		$valid->set_rules('password','Password','required|min_length[4]|max_length[12]');
		$valid->set_rules('confirm_password','confirm password','matches[password]');
		
		
			
		if($valid->run()) {
			
			$first_name = $input_post->post('first_name');
			$last_name = $input_post->post('last_name');
			$country = $input_post->post('country');
			$email	 = $input_post->post('email_address');
			$phone_number = $input_post->post('phone_number');
			$password = $input_post->post('password');
			
			$uri_prefix_sign = 'http://sws.vectone.com/api/CTPCountryPrefix?countryCode2='.$country;
			$this->rest->format('application/json');
			$result_prefix_sign = $this->rest->get($uri_prefix_sign);
			
			if(preg_match('/'.$result_prefix_sign->Prefix.'/i', $phone_number)) {
				$phone_no = ltrim($phone_number,0);
			}else{
				$phone_no = $result_prefix_sign->Prefix.ltrim($phone_number,0);
			}
			
			
			
			$uri = 'http://sws.vectone.com/api/CTPWebRegister';
		    //echo $ref_code;
		  	$params = array('FirstName' => $first_name, 
							'LastName' => $last_name,
							'Email'	=> $email,
							'PhoneNo'  => $phone_no,
							'Password' => $password,
							'PlanId'  => $this->config->item('plan_id_web'),
							'Country'  => $country,
							'RefCode' => $ref_code
							);
							
		  	$this->rest->format('application/json');
		  
		 	$result = $this->rest->post($uri, $params);
		  	
			
			
			
		  	if($result->ErrCode == '0') {
				$this->session->set_userdata('signup_success','step2');
				
				$uri_login = 'http://sws.vectone.com/api/CTPLogin';
			  
				$params_login = array('Login' => $email, 
									  'Password' => $password,
									  'Site' => $this->config->item('site_code_web'),
									  'IpAddr' => $this->input->ip_address(),
									  'UserAgent' => $this->input->user_agent()
									  );
									  
				$this->rest->format('application/json');
			  
				$result_login = $this->rest->post($uri_login, $params_login);
			    
				$this->session->set_userdata('phone_no', $phone_no);
				
				if($result_login->ErrCode == '0') {
				   
				   $this->session->set_userdata('username', $email);
				   $this->session->set_userdata('password', $password);
				   $this->session->set_userdata('title', $result_login->Title);
				   $this->session->set_userdata('firstname', $result_login->FirstName);
				   $this->session->set_userdata('surname', $result_login->Surname);
				   $this->session->set_userdata('balance', $result_login->Balance);
				   $this->session->set_userdata('cust_id', $result_login->CustId);
				   $this->session->set_userdata('mobile_phone', $result_login->MobilePhone);
				   $this->session->set_userdata('account_id', $result_login->AccId);
				   $this->session->set_userdata('sec_id', $result_login->SecId);
				   $this->session->set_userdata('id_login', uniqid(rand()));
				   
				   
				   
				   $uri_register_rotw = 'http://sws.vectone.com/api/CTPRegisterRestOfWorld';
			  
				   $params_register_rotw = array('Step' => 1, 
												 'AccId' => $this->session->userdata('account_id'),
												 'CountryCode' => $country,
												 'Country' => $this->session->userdata('access_country'),
												 'City' => $this->session->userdata('access_city'),
												 'State' => $this->session->userdata('access_prov')
												 );
										
				   $this->rest->format('application/json');
				
				   $result_register_rotw = $this->rest->post($uri_register_rotw, $params_register_rotw);
				   
				   
				   
			  	   
				   
				   $uri_access_no = 'http://sws.vectone.com/api/CTPAccessNo?CountryCode='.$country;
			  
				   $this->rest->format('application/json');
				
				   $result_access_no = $this->rest->get($uri_access_no);
				  
				   
				   $num_access_no = count($result_access_no->List);
				   $this->session->set_userdata('country_flag',$country);
				   if($this->session->userdata('bundles') != '') {
						redirect(base_url().$this->session->userdata('lang').'/myaccount/home_saver_bundles/step2');
				   }else{
					   if($num_access_no == 0) {
						   redirect(base_url().$this->session->userdata('lang').'/sign_up/step2_nan/');
					   }elseif($num_access_no == 1) {
						   $this->session->set_userdata('access_no_sign_up', $result_access_no->List[0]->AccessNo);
						   redirect(base_url().$this->session->userdata('lang').'/sign_up/step2_oan/');
					   }elseif($num_access_no >= 1) {
						   $this->session->set_userdata('access_no_sign_up', $result_access_no->List[0]->AccessNo);
						   redirect(base_url().$this->session->userdata('lang').'/sign_up/step2_man/');
					   }
						
				   }
				}
			
				if($this->session->userdata('logout_success') != '') {
				   $this->session->unset_userdata('logout_success');
			   	}
				
			}else{
				
				$this->session->set_userdata('signup_failed',$result->ErrMsg);
				
				redirect(base_url().$this->session->userdata('lang').'/sign_up');
			}
		}else{
			if(validation_errors()){
				redirect(base_url().$this->session->userdata('lang').'/sign_up');
			}
		}
		
		$data = array('title' => 'Sign Up', 'content' => 'sign_up/sign_up');
		$this->load->view('template/wrapper', $data);
		
		if($this->session->userdata('signup_failed') != '') {
			$this->session->unset_userdata('signup_failed');
		}
		
		
	}
	
	
	
	
	public function finish() {
		header("HTTP/1.1 200 OK");
		//$this->session->unset_userdata('signup_success');
		/*if($this->session->userdata('step2_success') == '') {
			redirect(base_url().$this->session->userdata('lang').'/sign_up');
		}*/
		
		$this->session->set_userdata('step_sign_up', base_url().$this->session->userdata('lang').'/sign_up/step3');
		
		$data = array('title' => 'Sign Up Step 3', 'content' => 'sign_up/finish');
		$this->load->view('template/wrapper', $data);
		
		/*if($this->uri->segment('2') == 'step3') {
			$this->session->unset_userdata('step2_success');
		}*/
	}
	
	
	
	
	//  PROCESS SIGN UP WITH NO ACCESS NUMBER
	
	public function step2_nan() {
		$data = array('title' => 'Sign Up Step 3', 'content' => 'sign_up/step2_nan');
		$this->load->view('template/wrapper', $data);
	}
	
	
	// PROCESS SIGN UP WITH ONE ACCESS NUMBER
	
	public function step2_oan() {
		$valid = $this->form_validation;
		
		$country       = $this->input->post('country');
		$friend_number = $this->input->post('friend_number');
		$friend_name   = $this->input->post('friend_name');
		
		$valid->set_rules('friend_number','Friend Number','required|numeric|min_length[4]');
		$valid->set_rules('friend_name','Friend Name','required|min_length[4]');
			
		
		if($valid->run()) {
			
			$uri_prefix = 'http://sws.vectone.com/api/CTPCountryPrefix?countryCode2='.$country;
			$this->rest->format('application/json');
			$result_prefix = $this->rest->get($uri_prefix);
			
			if(preg_match('/'.$result_prefix->Prefix.'/i', $friend_number)) {
				$dest_no = ltrim($friend_number,0);
			}else{
				$dest_no = $result_prefix->Prefix.ltrim($friend_number,0);
			}
			
			
			$uri2 = 'http://sws.vectone.com/api/CTPLocalNo?accId='.$this->session->userdata('account_id');
		    
			$params2 = array('City' => '',
							 'DestNo' => $dest_no,
							 'DestName' => $friend_name,
							 'CountryCode2'  => $country
							 );
							 
			$this->rest->format('application/json');
		  
			
			$uri_rates = 'http://sws.vectone.com/api/CTARate?accountID='.$this->session->userdata('account_id').'&destNo='.$dest_no;
			
			$this->rest->format('application/json');

			$result2 = $this->rest->post($uri2, $params2);
			$result_rates = $this->rest->get($uri_rates);
			
			print_r($result2).'<br/>';
			print_r($result_rates);
			
			if($result2->ErrCode == '0') {
				
				if($result_rates->errCode == '0') {
					$this->session->set_userdata('step2_success','step3');
					$this->session->set_userdata('signup_success','step2');
					$this->session->set_userdata('dest_no',$dest_no);
					$this->session->set_userdata('local_no',$result2->LocalNo);
					$this->session->set_userdata('dest_name',$friend_name);
					$this->session->set_userdata('country', $country);
					$this->session->set_userdata('rates',$result_rates->callRate);
					redirect(base_url().$this->session->userdata('lang').'/sign_up/finish/');
				}else{
					$this->session->set_userdata('signup_failed',$result_rates->errMsg);
					redirect(base_url().$this->session->userdata('lang').'/sign_up/step2_oan/');
				}
				
			}else{
				
				$this->session->set_userdata('signup_failed',$result2->ErrMsg);
				redirect(base_url().$this->session->userdata('lang').'/sign_up/step2_oan/');
			}
			
		}
		
		$data = array('title' => 'Sign Up Step 3', 'content' => 'sign_up/step2_oan');
		$this->load->view('template/wrapper', $data);
	}
	
	public function step2_man() {
		$valid = $this->form_validation;
		
		$country       = $this->input->post('country');
		$friend_number = $this->input->post('friend_number');
		$friend_name   = $this->input->post('friend_name');
		
		$valid->set_rules('friend_number','Friend Number','required|numeric|min_length[4]');
		$valid->set_rules('friend_name','Friend Name','required|min_length[4]');
			
		
		if($valid->run()) {
			
			$uri_prefix = 'http://sws.vectone.com/api/CTPCountryPrefix?countryCode2='.$country;
			$this->rest->format('application/json');
			$result_prefix = $this->rest->get($uri_prefix);
			
			if(preg_match('/'.$result_prefix->Prefix.'/i', $friend_number)) {
				$dest_no = ltrim($friend_number,0);
			}else{
				$dest_no = $result_prefix->Prefix.ltrim($friend_number,0);
			}
			
			
			$uri2 = 'http://sws.vectone.com/api/CTPLocalNo?accId='.$this->session->userdata('account_id');
		    
			$params2 = array('City' => '',
							 'DestNo' => $dest_no,
							 'DestName' => $friend_name,
							 'CountryCode2'  => $country
							 );
							 
			$this->rest->format('application/json');
		  
			
			$uri_rates = 'http://sws.vectone.com/api/CTARate?accountID='.$this->session->userdata('account_id').'&destNo='.$dest_no;
			
			$this->rest->format('application/json');

			$result2 = $this->rest->post($uri2, $params2);
			$result_rates = $this->rest->get($uri_rates);
			
			print_r($result2).'<br/>';
			print_r($result_rates);
			
			if($result2->ErrCode == '0') {
				
				if($result_rates->errCode == '0') {
					$this->session->set_userdata('step2_success','step3');
					$this->session->set_userdata('signup_success','step2');
					$this->session->set_userdata('dest_no',$dest_no);
					$this->session->set_userdata('local_no',$result2->LocalNo);
					$this->session->set_userdata('dest_name',$friend_name);
					$this->session->set_userdata('country', $country);
					$this->session->set_userdata('rates',$result_rates->callRate);
					redirect(base_url().$this->session->userdata('lang').'/sign_up/finish/');
				}else{
					$this->session->set_userdata('signup_failed',$result_rates->errMsg);
					redirect(base_url().$this->session->userdata('lang').'/sign_up/step2_man/');
				}
				
			}else{
				
				$this->session->set_userdata('signup_failed',$result2->ErrMsg);
				redirect(base_url().$this->session->userdata('lang').'/sign_up/step2_man/');
			}
			
		}
		
		$uri_state = 'http://sws.vectone.com/api/CTPAccessNo?CountryCode='.$this->session->userdata('country2_sidebar');
			
		$this->rest->format('application/json');

		$result_state = $this->rest->get($uri_state);
			
		$data = array('title' => 'Sign Up Step 3', 
					  'content' => 'sign_up/step2_man',
					  'state' => $result_state);
		$this->load->view('template/wrapper', $data);
	}
	
	public function change_state() {
		
		$country_name = $this->input->post('country_name');
		$state = $this->input->post('state');
		
		$this->form_validation->set_rules('state','State','required');
		
		//api/CTPCountry?countryCode2={countryCode2}&langCode={langCode}
		$uri_co = 'http://sws.vectone.com/api/CTPCountry?countryCode2='.$country_name.'&langCode=ENG';
			  
	    
							
	    $this->rest->format('application/json');
	    $result_co = $this->rest->get($uri_co);
		
		
	   
		if($this->form_validation->run()){
			 $uri_register_rotw1 = 'http://sws.vectone.com/api/CTPRegisterRestOfWorld';
			  
			 $params_register_rotw1 = array('Step' => 2, 
										   'AccId' => $this->session->userdata('account_id'),
										   'CountryCode' => '',
										   'Country' => $country_name,
										   'City' => $this->session->userdata('access_city'),
										   'State' => $state
										   );
								  
			 $this->rest->format('application/json');
			 $result_register_rotw1 = $this->rest->post($uri_register_rotw1, $params_register_rotw1);
			 
			 
			 if($result_register_rotw1->ErrCode == '0') {
				 
				 $uri_acs_no = 'http://sws.vectone.com/api/CTPAccessNo?CountryCode='.$country_name.'&province='.$state.'&city=%25';
			  
									  
				 $this->rest->format('application/json');
				 $result_acs_no = $this->rest->get($uri_acs_no);
				 $this->session->set_userdata('new_access_no',$result_acs_no->List[0]->AccessNo);
				 //print_r($result_acs_no);
				 redirect(base_url().$this->session->userdata('lang').'/sign_up/step2_man');
			 }else{
				 redirect(base_url().$this->session->userdata('lang').'/sign_up/step2_man');
			 }
		}
		
	}
	
	
	
	
}