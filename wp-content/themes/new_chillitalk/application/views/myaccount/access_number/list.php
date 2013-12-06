<div class="rightcunt">
    <?php
	function cmp($a, $b)
	{
		return strcmp($a->CountryName, $b->CountryName);
	}
	
	usort($result->CountryList, "cmp");
	?>

    <h1><?php echo lang('access.first'); ?> </h1>
        <div class="cssaver1 leftcom">
			<?php echo lang('access.second'); ?> 
            
                <div class="cssaver1 leftcom selt1">
                <form>
                    <select id="country_access">
                    	<option value="">Select Country</option>
						<?php foreach($result->CountryList as $val) { ?>
                        
							<?php if($this->session->userdata('country2_sidebar') == $val->CountryCode2) { ?>
                                <option value="<?php echo $val->CountryCode2; ?>" selected="selected">
                                    <?php echo $val->CountryName; ?>
                                </option>
                            <?php }else{ ?>
                                <option value="<?php echo $val->CountryCode2; ?>">
                                    <?php echo $val->CountryName; ?>
                                </option>
                            <?php } ?>
                        
                        
                        <?php } ?>
                        
                    </select>
                    
                    <select id="state_access">
                    
                    </select>
                </form>    
                	<br/><br/>
                    <div class="accessntxt">
                    	<div id="data-result"></div>
                    </div>
                    </div>
                </div>
                
            
            
            </div>
        </div>
    </div>

      <!--footer section  start here-->
     
<script type="text/javascript">

$('#state_access').hide();
$('#country_access').change(function(ev) {
	ev.preventDefault();
	
	 $.post("<?php echo base_url();?>en/myaccount/access_number/get_access_number/"+$('#country_access').val(),{},
	 function(obj){
		 if(obj == "<option value=''></option>") {
			 $('#state_access').hide();
		 }else{
			 $('#state_access').show();
			 $('#state_access').html(obj);
		 }
		 
		  $.post("<?php echo base_url();?>en/myaccount/access_number/get_detail/"+$('#country_access').val(),{},
			  function(obj){
				$('#data-result').html(obj);
			  });
         

	 		
	 });
	
});

$('#state_access').change(function() {
	$.post("<?php echo base_url();?>en/myaccount/access_number/get_state/"+$('#country_access').val()+"/"+$('#state_access').val(),
	{},
	function(obj){
		  $('#data-result').html(obj);
		});
	
});

$( ".leftmyaccount" ).css({height: "980px" });
</script>

<style type="text/css">
.accessntxt h3
{
    width: 230px !important;
}
</style>
