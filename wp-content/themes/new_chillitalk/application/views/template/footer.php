  <!--footer section  start here-->
                <footer>
            <section class="padfo">
               <?php echo lang('footer.first'); ?>
                <section class="sec2 leftcom">
                    <h4>
                        <?php echo lang('footer.second'); ?>  </h4>
                 <!--   <ul class="footer">
                        <li><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/application/" title="iPhone app">iPhone</a> </li>
                        <li><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/application/" title="Android">Android</a> </li>
                        
                    </ul>-->
                       <a href="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/application/">  <img src="<?php echo get_template_directory_uri(); ?>/img/ip-aroid.png" alt="Chillitalk Android" /></a>
                </section>
                <section class="sec2 leftcom">
                    <h4> <?php echo lang('footer.four'); ?></h4>
                    <ul class="footer">
                      
                        <li class="none"><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/application/">Android</a> </li>
                         <li><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/chillitalk_access_number/">Access Numbers</a> </li>
                        <li><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/earn_money/">Earn Free Credit</a> </li>
                        <li><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/rates"><?php echo lang('footer.Rates'); ?></a> </li>
                        <li><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/myaccount/top_up">Top-up</a> </li>
                        <li><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/support/"><?php echo lang('footer.Support'); ?> </a> </li>
                        <li class="none"><a href="#"><?php echo lang('footer.Loyalty'); ?>  </a> </li>
                    </ul>
                </section>
                <section class="sec3 leftcom">
                    <ul class="footer1">
                        <!--<li><a href="#"><?php echo lang('footer.About'); ?> </a> </li>-->
                        <li class="none"><a href="#"><?php echo lang('footer.Find'); ?> </a>  </li>
                        <li class="none"><a href="#"><?php echo lang('footer.security'); ?></a>  </li>
                        <li>
                       <a href="#"> <?php echo lang('footer.Privacy'); ?></a> </li>
                        <li><a href="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/terms_condition/"><?php echo lang('footer.Terms'); ?></a> </li>
                    </ul>
                </section>
                <div class="clearfix"></div>
                <section class="sec4">
                    <h5 style="display:none !important;">
                        Follow us on <a href="#"
                            target="_blank" class="fb" title="Facebook">Facebook</a> and <a href="https://twitter.com/ChilliTalk"
                                target="_blank" class="tw" title="Twitter">Twitter<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"
                                    alt="twitter" /></a> @chillitalk
                    </h5>
                    <h4>
                        © 2013 Chillitalk</h4>
                </section>
            </section>
        </footer>
 

<?php wp_footer(); ?>

<script type="text/javascript">
var __lc = {};
__lc.license = 3476332;

(function() {
	var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>

</body>
</html>
