<div class="row-fluid"  style="background:#FFF;">
    
  <!--main logo section  start here-->
  <section class="earnm">
     <h1 class="tsddefe2">Get started with Chillitalk</h1>
  </section>
    
  <section class="apps earnm">
  	<h3>1. Select how you want to call</h3>
    <form method="POST">
      <div id="radios1">
      
        <input type="radio" id="tim1" value="landline" name="group1" checked="checked" class="{src:'<?php echo get_template_directory_uri(); ?>/img/landlineandmobile.jpg',checked:'<?php echo get_template_directory_uri(); ?>/img/landlineandmobile_select.jpg',hover:'<?php echo get_template_directory_uri(); ?>/img/landlineandmobile_select.jpg',disabled:'<?php echo get_template_directory_uri(); ?>/img/landlineandmobile.jpg' }"  title="landline" />

       <input type="radio" id="tim2" onclick="toggle('hide');" value="android" name="group1" class="{src:'<?php echo get_template_directory_uri(); ?>/img/android.png',checked:'<?php echo get_template_directory_uri(); ?>/img/android_select.png',hover:'<?php echo get_template_directory_uri(); ?>/img/android_select.png',disabled:'<?php echo get_template_directory_uri(); ?>/img/android.png'}" title="android" />
         
          <input type="radio" id="tim3" onclick="toggle('hide');" value="iPhone & iPad" name="group1"  class="{src:'<?php echo get_template_directory_uri(); ?>/img/iphone2.png',checked:'<?php echo get_template_directory_uri(); ?>/img/iphone_select.png',hover:'<?php echo get_template_directory_uri(); ?>/img/iphone_select.png',disabled:'<?php echo get_template_directory_uri(); ?>/img/iphone2.png'}"   title="iPhone" />
           
         <input type="radio" id="tim4" onclick="toggle('hide');" value="PC" name="group1"  class="{src:'<?php echo get_template_directory_uri(); ?>/img/PC-diselect.png',checked:'<?php echo get_template_directory_uri(); ?>/img/PC-diselect.png',hover:'<?php echo get_template_directory_uri(); ?>/img/PC-diselect.png',disabled:'<?php echo get_template_directory_uri(); ?>/img/PC-diselect.png'}"  title="PC"/>
      </div>
      
    </form>
    <a class="toplink" style="display: block;"></a>
    <br/><br/><br/><br/><br/><br/><br/>
              
    <div id="landline">
    	<h3 style="display: inline !important;float: left !important;text-align: left !important;width: 700px !important; text-indent:0px !important;">2. Sign-up here</h3>
         
    	<section>
        
        
          <div class="appbgcl">
      
          <?php if($this->session->userdata('signup_failed')) { ?>
          
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $this->session->userdata('signup_failed'); ?>
            </div>
          <?php } ?>
        
            <form name="frm-signup" id="frm-signup" method="post" action="<?php echo current_url(); ?>">
                <div>
                    <label>First Name</label>
                    <?php if(form_error('first_name')) { ?>
                   
                    <input type="text" name="first_name" style="border-color:red;color:red" value="<?php echo set_value('first_name'); ?>" required="required" />
                    <?php echo form_error('first_name','<span style="color:red">','</span>'); ?>
                    <?php }else{ ?>
                    <input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" required="required" />
                    <?php } ?>
                </div>
                    
                <div>
                    <label>Last Name</label>
                    <?php if(form_error('last_name')) { ?>
                    <input type="text" name="last_name" style="color:red;border-color:red;" value="<?php echo set_value('last_name'); ?>" required="required" />
                    <?php echo form_error('last_name','<span style="color:red">','</span>'); ?>
                    <?php }else{ ?>
                    <input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" required="required" />
                    
                    <?php } ?>
                </div>
                
                <div>
                    <label>Your email</label>
                    
                    <?php if(form_error('email_address')) { ?>
                    <input type="email" name="email_address" style="color:red;border-color:red" value="<?php echo set_value('email_address'); ?>" required="required" />
                    <?php echo form_error('email_address','<span style="color:red">','</span>'); ?>
                    <?php }else{ ?>
                    <input type="email" name="email_address" value="<?php echo set_value('email_address'); ?>" required="required" />
                    <?php } ?>
                </div>
                
                <div>
                    <label>Your Phone Number</label>
                    <!--<input type="text" class="<?php echo $this->session->userdata('small_flag'); ?>" value="+<?php echo $this->session->userdata('prefix_phone_web'); ?>" name="UK" readonly="readonly">-->
                    
                    <select id="country" name="country" class="leftcom" required >
                        <option value="">Select Country</option>
              <option value="AF" data-alternative-spellings="AF +93 Afganistán ?????????">Afghanistan (+93)</option>
              <option value="AL" data-alternative-spellings="AL +355 Albanie">Albania ( +355)</option>
              <option value="AN" data-alternative-spellings="AN +599 Antillas Holandesas Antilles néerlandaises"
                  data-relevancy-booster="0.5">Netherlands Antilles (+599)</option>
              <option value="DZ" data-alternative-spellings="DZ +213 Argelia Algérie ???????">Algeria (+213)</option>
              <option value="AS" data-alternative-spellings="AS +1-684 +1684  Samoa Americana Samoa américaines"
                  data-relevancy-booster="0.5">American Samoa (+1684)</option>
              <option value="AD" data-alternative-spellings="AD +376 Andorre" data-relevancy-booster="0.5">
                  Andorra (+376)</option>
              <option value="AO" data-alternative-spellings="AO +244">Angola (+244)</option>
              <option value="AI" data-alternative-spellings="AI +1-264 +1264 Anguila" data-relevancy-booster="0.5">
                  Anguilla (+1264)</option>
              <option value="AQ" data-alternative-spellings="AQ +672 Antártida Antarctique" data-relevancy-booster="0.5">
                  Antarctica (+672)</option>
              <option value="AG" data-alternative-spellings="AG +1-268 +1268 Antigua y Barbuda Antigua-et-Barbuda"
                  data-relevancy-booster="0.5">Antigua And Barbuda (+1268)</option>
              <option value="AR" data-alternative-spellings="AR +54 Argentine">Argentina (+54)</option>
              <option value="AM" data-alternative-spellings="AM +374 Arménie">Armenia (+374)</option>
              <option value="AW" data-alternative-spellings="AW +297" data-relevancy-booster="0.5">
                  Aruba (+297)</option>
              <option value="AU" data-alternative-spellings="AU +61 Australie" data-relevancy-booster="1.5">
                  Australia (+61)</option>
              <option value="AT" data-alternative-spellings="AT +43 Autriche Österreich Osterreich Oesterreich">
                  Austria (+43)</option>
              <option value="AZ" data-alternative-spellings="AZ +994 Azerbaijani Republic República de Azerbaiyán République d&#39;Azerbaïdjan">
                  Azerbaijan (+994)</option>
              <option value="BS" data-alternative-spellings="BS +1-242 +1242">Bahamas (+1242)</option>
              <option value="BH" data-alternative-spellings="BH +973 Bahréin Bahreïn ???????">Bahrain
                  (+973)</option>
              <option value="BD" data-alternative-spellings="BD +880 ????????" data-relevancy-booster="2">
                  Bangladesh (+880)</option>
              <option value="BB" data-alternative-spellings="BB +1-246 +1246 Barbade">Barbados (+1246)</option>
              <option value="BY" data-alternative-spellings="BY +375 Bielorrusia Bélarus ????????">
                  Belarus (+375)</option>
              <option value="BE" data-alternative-spellings="BE +32 Bélgica Belgique België Belgie Belgien Belgique"
                  data-relevancy-booster="1.5">Belgium (+32)</option>
              <option value="BZ" data-alternative-spellings="BZ +501 Belice ">Belize (+501)</option>
              <option value="BJ" data-alternative-spellings="BJ +229 Benín Bénin">Benin (+229)</option>
              <option value="BM" data-alternative-spellings="BM +1-441 +1441 Bermudas Bermudes"
                  data-relevancy-booster="0.5">Bermuda (+1441)</option>
              <option value="BT" data-alternative-spellings="BT +975 Bután Bhoutan">Bhutan (+975)</option>
              <option value="BO" data-alternative-spellings="BO +591 Bolivie">Bolivia (+591)</option>
              <option value="BA" data-alternative-spellings="BA +387 Bosnia y Herzegovina Bosnie-Herzégovine ????? ? ???????????">
                  Bosnia and Herzegovina (+387)</option>

              <option value="BW" data-alternative-spellings="BW +267 Botsuana">Botswana (+267)</option>
              <option value="BR" data-alternative-spellings="BR +55 Brasil Brésil Brasil" data-relevancy-booster="2">
                  Brazil (+55)</option>
              <option value="BN" data-alternative-spellings="BN +673 Brunéi Darussalam">Brunei Darussalam
                  (+673)</option>
              <option value="BG" data-alternative-spellings="BG +359 Bulgarie ????????">Bulgaria (+359)</option>
              <option value="BF" data-alternative-spellings="BF +226">Burkina Faso (+226)</option>
              <option value="BI" data-alternative-spellings="BI +257">Burundi (+257)</option>
              <option value="KH" data-alternative-spellings="KH +855 Camboya Cambodge ???????">Cambodia
                  (+855)</option>
              <option value="CM" data-alternative-spellings="CM +237 Camerún Cameroun">Cameroon (+237)</option>
              <option value="CA" data-number-format="(xxx) xxx-xxxx" data-alternative-spellings="CA +1 Canadá"
                  data-relevancy-booster="2">Canada (+1)</option>
              <option value="CV" data-alternative-spellings="CV +238 Cabo Verde Cap-Vert">Cape Verde
                  (+238)</option>
              <option value="KY" data-alternative-spellings="KY 1-345 +1345 Islas Caimán Iles Caïmans"
                  data-relevancy-booster="0.5">Cayman Islands (+1345)</option>
              <option value="CF" data-alternative-spellings="CF +236 República Centroafricana République centrafricaine">
                  Central African Republic (+236)</option>
              <option value="TD" data-alternative-spellings="TD +235 Tchad ?????>">Chad (+235)</option>
              <option value="CL" data-alternative-spellings="CL +56 Chili">Chile (+56)</option>
              <option value="CN" data-alternative-spellings="CN +86 Chine Zhongguo Zhonghua">China
                  (+86)</option>
              <option value="CO" data-alternative-spellings="CO +57 Colombie">Colombia (+57)</option>
              <option value="KM" data-alternative-spellings="KM +269 Comoras Comores ???">Comoros
                  (+269)</option>
              <option value="CG" data-alternative-spellings="CG +242">Congo (+242)</option>
              <option value="CD" data-alternative-spellings="CD +243 Democratic Republic of the Congo República Democrática del Congo République Démocratique du Congo Congo-Brazzaville">
                  Congo, the Democratic Republic of the (+243)</option>
              <option value="CK" data-alternative-spellings="CK +682 Islas Cook Iles Cook" data-relevancy-booster="0.5">
                  Cook Islands (+682)</option>
              <option value="CR" data-alternative-spellings="CR +506">Costa Rica (+506)</option>
              <option value="CI" data-alternative-spellings="CI +225 Costa de Marfil">Côte d'Ivoire
                  (+225)</option>
              <option value="HR" data-alternative-spellings="HR +385 Croacia Croatie Hrvatska">Croatia
                  (+385)</option>
              <option value="CU" data-alternative-spellings="CU +53">Cuba (+53)</option>
              <option value="CY" data-alternative-spellings="CY +357 Chipre Chypre ??p??? Kýpros Kibris">
                  Cyprus (+357)</option>
              <option value="CZ" data-alternative-spellings="CZ +420 Czech República Checa République tchèque Ceská Ceska">
                  Czech Republic (+420)</option>
              <option value="DK" data-alternative-spellings="DK +45 Dinamarca Danemark">Denmark (+45)</option>
              <option value="DJ" data-alternative-spellings="DJ +253 ??????? Jabuuti Gabuuti">Djibouti
                  (+253)</option>
              <option value="DM" data-alternative-spellings="DM +1-767 +1767 Dominique Dominique">
                  Dominica (+1767)</option>
              <option value="DO" data-alternative-spellings="DO +1-809 +1809 República Dominicana République Dominicaine">
                  Dominican Republic (+1809)</option>
              <option value="EC" data-alternative-spellings="EC +593 Equateur">Ecuador (+593)</option>
              <option value="EG" data-alternative-spellings="EG +20 Egipto Egypte" data-relevancy-booster="1.5">
                  Egypt (+20)</option>
              <option value="SV" data-alternative-spellings="SV +503">El Salvador (+503)</option>
              <option value="GQ" data-alternative-spellings="GQ +240 Guinea Ecuatorial Guinée équatoriale">
                  Equatorial Guinea (+240)</option>
              <option value="ER" data-alternative-spellings="ER +291 Erythrée ?????? ????">Eritrea
                  (+291)</option>
              <option value="EE" data-alternative-spellings="EE +372 Estonie Eesti">Estonia (+372)</option>
              <option value="ET" data-alternative-spellings="ET +251 Etiopía Ethiopie ?????">Ethiopia
                  (+251)</option>
              <option value="FK" data-alternative-spellings="FK +500 Falkland Islands Islas Malvinas Iles Falkland"
                  data-relevancy-booster="0.5">Falkland Islands (Malvinas) (+500)</option>
              <option value="FO" data-alternative-spellings="FO +298 Islas Feroe Iles Féroé Føroyar Færøerne"
                  data-relevancy-booster="0.5">Faroe Islands (+298)</option>
              <option value="FJ" data-alternative-spellings="FJ +679 Fidji Viti ?????">Fiji (+679)</option>
              <option value="FI" data-alternative-spellings="FI +358 Finlandia Finlande Suomi">Finland
                  (+358)</option>
              <option value="FR" data-alternative-spellings="FR +33 Francia" data-relevancy-booster="2.5">
                  France (+33)</option>
              <option value="GF" data-alternative-spellings="GF +594 Guayana Francesa Guyane">French
                  Guiana (+594)</option>
              <option value="PF" data-alternative-spellings="PF +689 Polinesia Francesa Polynésie française">
                  French Polynesia (+689)</option>
              <option value="GA" data-alternative-spellings="GA +241 Gabonese Republic República Gabonesa Gabon République Gabonaise">
                  Gabon (+241)</option>
              <option value="GM" data-alternative-spellings="GM +220 Gambie">Gambia (+220)</option>
              <option value="GE" data-alternative-spellings="GE +995 Georgie ??????????">Georgia (+995)</option>
              <option value="DE" data-alternative-spellings="DE +49 Alemania Allemagne Bundesrepublik">
                  Germany (+49)</option>
              <option value="GH" data-alternative-spellings="GH +233">Ghana (+233)</option>
              <option value="GI" data-alternative-spellings="GI +350" data-relevancy-booster="0.5">
                  Gibraltar (+350)</option>
              <option value="GR" data-alternative-spellings="GR +30 Grecia Grèce ????da">Greece (+30)</option>
              <option value="GL" data-alternative-spellings="GL +299 Groenlandia Groenland grønland">
                  Greenland (+299)</option>
              <option value="GD" data-alternative-spellings="GD +1-473 +1473 Granada Grenade">Grenada
                  (+1473)</option>
              <option value="GP" data-alternative-spellings="GP +590 Guadalupe">Guadeloupe (+590)</option>
              <option value="GU" data-alternative-spellings="GU +1-671 +1671">Guam (+1671)</option>
              <option value="GT" data-alternative-spellings="GT +502">Guatemala (+502)</option>
              <option value="GN" data-alternative-spellings="GN +224 Guinée">Guinea (+224)</option>
              <option value="GW" data-alternative-spellings="GW +245 Guinée-Bissau">Guinea-Bissau
                  (+245)</option>
              <option value="GY" data-alternative-spellings="GY +592">Guyana (+592)</option>
              <option value="HT" data-alternative-spellings="HT +509 Haití Haïti">Haiti (+509)</option>
              <option value="VA" data-alternative-spellings="VA +39 Vaticano">Holy See (Vatican City
                  State) (+39)</option>
              <option value="HN" data-alternative-spellings="HN +504">Honduras (+504)</option>
              <option value="HK" data-alternative-spellings="HK +852 Hongkong, China Hongkong, China Hong Kong, Chine ??">
                  Hong Kong (+852)</option>
              <option value="HU" data-alternative-spellings="HU +36 Hungría Hongrie Magyarország">
                  Hungary (+36)</option>
              <option value="IS" data-alternative-spellings="IS +354 Islandia Islande Island">Iceland
                  (+354)</option>
              <option value="IN" data-alternative-spellings="IN +91 Inde ???? ??????? Hindustan"
                  data-relevancy-booster="3">India (+91)</option>
              <option value="ID" data-alternative-spellings="ID +62 Indonésie" data-relevancy-booster="2">
                  Indonesia (+62)</option>
              <option value="IP" data-alternative-spellings="IP +883 iNum">iNum (+883)</option>
              <option value="IR" data-alternative-spellings="IR +98 Irán ?????">Iran, Islamic Republic
                  of (+98)</option>
              <option value="IQ" data-alternative-spellings="IQ +964 Irak ???????">Iraq (+964)</option>
              <option value="IE" data-alternative-spellings="IE +353 Irlanda Irlande Éire" data-relevancy-booster="1.2">
                  Ireland (+353)</option>
              <option value="IL" data-alternative-spellings="IL +972 Israël ??????? ?????">Israel
                  (+972)</option>
              <option value="IT" data-alternative-spellings="IT +39 Italia Italie" data-relevancy-booster="2">
                  Italy (+39)</option>
              <option value="JM" data-alternative-spellings="JM +1-876 +1876 Jamaïque">Jamaica (+1876)</option>
              <option value="JP" data-alternative-spellings="JP +81 Japón Japon Nippon Nihon ?? "
                  data-relevancy-booster="2.5">Japan (+81)</option>
              <option value="JO" data-alternative-spellings="JO +962 Jordania Jordanie ??????">Jordan
                  (+962)</option>
              <option value="KZ" data-alternative-spellings="KZ +7 Kazajistán ????????? ?????????">
                  Kazakhstan (+7)</option>
              <option value="KE" data-alternative-spellings="KE +254 Kenia">Kenya (+254)</option>
              <option value="KI" data-alternative-spellings="KI +686">Kiribati (+686)</option>
              <option value="KP" data-alternative-spellings="KP +850 Korea (Democratic People&#39;s Republic of) Corea (República Popular Democrática) Corée (République populaire démocratique)">
                  Korea, Democratic People's Republic of (+850)</option>
              <option value="KR" data-alternative-spellings="KR +82 Korea (Republic of) Corea (República de) Corée (République) South Korea"
                  data-relevancy-booster="1.5">Korea, Republic of (+82)</option>
              <option value="KW" data-alternative-spellings="KW +965 Koweït ??????">Kuwait (+965)</option>
              <option value="KG" data-alternative-spellings="KG +996 Kirguizistán Kirghizistan ??????????">
                  Kyrgyzstan (+996)</option>
              <option value="LA" data-alternative-spellings="LA +856 Laos">Lao People's Democratic
                  Republic (+856)</option>
              <option value="LV" data-alternative-spellings="LV +371 Letonia Lettonie Latvija">Latvia
                  (+371)</option>
              <option value="LB" data-alternative-spellings="LB +961 Líbano Liban ?????">Lebanon (+961)</option>
              <option value="LS" data-alternative-spellings="LS +266 Lesoto">Lesotho (+266)</option>
              <option value="LR" data-alternative-spellings="LR +231 Libéria">Liberia (+231)</option>
              <option value="LY" data-alternative-spellings="LY +218 Libia Libye ?????">Libyan Arab
                  Jamahiriya (+218)</option>
              <option value="LI" data-alternative-spellings="LI +423">Liechtenstein (+423)</option>
              <option value="LT" data-alternative-spellings="LT +370 Lituania Lituanie Lietuva">Lithuania
                  (+370)</option>
              <option value="LU" data-alternative-spellings="LU +352 Luxemburgo">Luxembourg (+352)</option>
              <option value="MO" data-alternative-spellings="MO +853 Macao, China Macao, China Macao, Chine">
                  Macao (+853)</option>
              <option value="MK" data-alternative-spellings="MK +389 Macédoine ??????????">Macedonia,
                  The Former Yugoslav Republic Of (+389)</option>
              <option value="MG" data-alternative-spellings="MG +261 Madagasikara">Madagascar (+261)</option>
              <option value="MW" data-alternative-spellings="MW +265">Malawi (+265)</option>
              <option value="MY" data-alternative-spellings="MY +60 Malasia Malaisie">Malaysia (+60)</option>
              <option value="MV" data-alternative-spellings="MV +960 Maldivas">Maldives (+960)</option>
              <option value="ML" data-alternative-spellings="ML +223 Malí">Mali (+223)</option>
              <option value="MT" data-alternative-spellings="MT +356 Malte">Malta (+356)</option>
              <option value="MH" data-alternative-spellings="MH +692 Islas Marshall Iles Marshall"
                  data-relevancy-booster="0.5">Marshall Islands (+692)</option>
              <option value="MQ" data-alternative-spellings="MQ +596 Martinica">Martinique (+596)</option>
              <option value="MR" data-alternative-spellings="MR +222 Mauritanie ???????????">Mauritania
                  (+222)</option>
              <option value="MU" data-alternative-spellings="MU +230 Mauricio Maurice">Mauritius (+230)</option>
              <option value="YT" data-alternative-spellings="YT +262">Mayotte (+262)</option>
              <option value="MX" data-alternative-spellings="MX +52 México Mexique" data-relevancy-booster="1.5">
                  Mexico (+52)</option>
              <option value="FM" data-alternative-spellings="FM +691 Micronésie">Micronesia, Federated
                  States of (+691)</option>
              <option value="MD" data-alternative-spellings="MD +373 Moldavia Moldavie">Moldova, Republic
                  of (+373)</option>
              <option value="MC" data-alternative-spellings="MC +377 Mónaco">Monaco (+377)</option>
              <option value="MN" data-alternative-spellings="MN +976 Mongolie">Mongolia (+976)</option>
              <option value="ME" data-alternative-spellings="ME +382 Monténégro">Montenegro (+382)</option>
              <option value="MS" data-alternative-spellings="MS +1-664 +1664" data-relevancy-booster="0.5">
                  Montserrat (+1664)</option>
              <option value="MA" data-alternative-spellings="MA +212 Marruecos Maroc">Morocco (+212)</option>
              <option value="MZ" data-alternative-spellings="MZ +258 Moçambique">Mozambique (+258)</option>
              <option value="MM" data-alternative-spellings="MM +95">Myanmar (+95)</option>
              <option value="NA" data-alternative-spellings="NA +264 Namibie Namibië">Namibia (+264)</option>
              <option value="NR" data-alternative-spellings="NR +674 Naoero" data-relevancy-booster="0.5">
                  Nauru (+674)</option>
              <option value="NP" data-alternative-spellings="NP +977 Népal ?????">Nepal (+977)</option>
              <option value="NL" data-alternative-spellings="NL +31 Netherlands Países Bajos Pays-Bas Holland"
                  data-relevancy-booster="1.5">Netherlands (+31)</option>
              <option value="NC" data-alternative-spellings="NC +687 Nueva Caledonia Nouvelle-Calédonie">
                  New Caledonia (+687)</option>
              <option value="NZ" data-alternative-spellings="NZ +64 Nueva Zelanda Nouvelle-Zélande Aotearoa">
                  New Zealand (+64)</option>
              <option value="NI" data-alternative-spellings="NI +505">Nicaragua (+505)</option>
              <option value="NE" data-alternative-spellings="NE +227 Níger Nijar">Niger (+227)</option>
              <option value="NG" data-alternative-spellings="NG +234 Nigéria Nijeriya Naíjíríà">Nigeria
                  (+234)</option>
              <option value="NU" data-alternative-spellings="NU +683 Nioué" data-relevancy-booster="0.5">
                  Niue (+683)</option>
              <option value="MP" data-alternative-spellings="MP +1-670 +1670 CNMI Islas Marianas del Norte Iles Mariannes du nord"
                  data-relevancy-booster="0.5">Northern Mariana Islands (+1670)</option>
              <option value="NO" data-alternative-spellings="NO +47 Noruega Norvège Norge Noreg"
                  data-relevancy-booster="1.5">Norway (+47)</option>
              <option value="OM" data-alternative-spellings="OM +968 Omán ????">Oman (+968)</option>
              <option value="PK" data-alternative-spellings="PK +92 Pakistán ???????" data-relevancy-booster="2">
                  Pakistan (+92)</option>
              <option value="PW" data-alternative-spellings="PW +680 Palaos" data-relevancy-booster="0.5">
                  Palau (+680)</option>
              <option value="PS" data-alternative-spellings="PS +970 Palestina ??????">Palestinian
                  Territory, Occupied (+970)</option>
              <option value="PA" data-alternative-spellings="PA +507 Panamá">Panama (+507)</option>
              <option value="PG" data-alternative-spellings="PG +675 Papúa Nueva Guinea Papouasie-Nouvelle-Guinée">
                  Papua New Guinea (+675)</option>
              <option value="PY" data-alternative-spellings="PY +595">Paraguay (+595)</option>
              <option value="PE" data-alternative-spellings="PE +51 Perú Pérou">Peru (+51)</option>
              <option value="PH" data-alternative-spellings="PH +63 Filipinas Pilipinas" data-relevancy-booster="1.5">
                  Philippines (+63)</option>
              <option value="PL" data-alternative-spellings="PL +48 Polonia Pologne Polska" data-relevancy-booster="1.25">
                  Poland (+48)</option>
              <option value="PT" data-alternative-spellings="PT +351 Portuguesa" data-relevancy-booster="1.5">
                  Portugal (+351)</option>
              <option value="PR" data-alternative-spellings="PR +1 Puerto Rico Porto Rico">Puerto
                  Rico (+1)</option>
              <option value="QA" data-alternative-spellings="QA +974 ???">Qatar (+974)</option>
              <option value="RE" data-alternative-spellings="RE +262 Reunion Reunión">Réunion (+262)</option>
              <option value="RO" data-alternative-spellings="RO +40 Rumanía Roumanie Rumania Roumania România">
                  Romania (+40)</option>
              <option value="RU" data-alternative-spellings="RU +7 Russia Rusia Russie Rossiya ?????????? ??????"
                  data-relevancy-booster="2.5">Russian Federation (+7)</option>
              <option value="RW" data-alternative-spellings="RW +250 Ruanda">Rwanda (+250)</option>
              <option value="SH" data-alternative-spellings="SH +290 Santa Elena Sainte-Hélène">Saint
                  Helena (+290)</option>
              <option value="LC" data-alternative-spellings="LC +1-758 +1758 Santa Lucía Sainte-Lucie">
                  Saint Lucia (+1758)</option>
              <option value="PM" data-alternative-spellings="PM +508 San Pedro y Miquelón Saint-Pierre et Miquelon">
                  Saint Pierre and Miquelon (+508)</option>
              <option value="VC" data-alternative-spellings="VC +1-784 +1784 San Vicente y las Granadinas Saint-Vincent-et-les-Grenadines">
                  Saint Vincent and the Grenadines (+1784)</option>
              <option value="WS" data-alternative-spellings="WS +685">Samoa (+685)</option>
              <option value="SM" data-alternative-spellings="SM +378 Saint-Marin">San Marino (+378)</option>
              <option value="ST" data-alternative-spellings="ST +239 Santo Tomé y Príncipe Sao Tomé-et-Principe">
                  Sao Tome and Principe (+239)</option>
              <option value="SA" data-alternative-spellings="SA +966 Arabia Saudí Arabie saoudite ????????">
                  Saudi Arabia (+966)</option>
              <option value="SN" data-alternative-spellings="SN +221 Sénégal">Senegal (+221)</option>
              <option value="RS" data-alternative-spellings="RS +381 Serbie ?????? Srbija">Serbia
                  (+381)</option>
              <option value="SC" data-alternative-spellings="SC +248" data-relevancy-booster="0.5">
                  Seychelles (+248)</option>
              <option value="SL" data-alternative-spellings="SL +232 Sierra Leona Sierre Leone">Sierra
                  Leone (+232)</option>
              <option value="SG" data-alternative-spellings="SG +65 Singapur Singapour Singapura  ??????????? ????????">
                  Singapore (+65)</option>
              <option value="SK" data-alternative-spellings="SK +421 Eslovaquia Slovaquie Slovenská Slovensko">
                  Slovakia (+421)</option>
              <option value="SI" data-alternative-spellings="SI +386 Eslovenia Slovénie Slovenija">
                  Slovenia (+386)</option>
              <option value="SB" data-alternative-spellings="SB +677 Islas Salomón Iles Salomon">Solomon
                  Islands (+677)</option>
              <option value="SO" data-alternative-spellings="SO +252 Somali Somalie ???????">Somalia
                  (+252)</option>
              <option value="ZA" data-alternative-spellings="ZA +27 Sudáfrica Afrique du Sud RSA Suid-Afrika">
                  South Africa (+27)</option>
              <option value="SS" data-alternative-spellings="SS +211">South Sudan (+211)</option>
              <option value="ES" data-alternative-spellings="ES +34 España Espagne" data-relevancy-booster="2">
                  Spain (+34)</option>
              <option value="LK" data-alternative-spellings="LK +94 ????? ???? ??????">Sri Lanka (+94)</option>
              <option value="SD" data-alternative-spellings="SD +249 Sudán Soudan ???????">Sudan (+249)</option>
              <option value="SR" data-alternative-spellings="SR +597 Surinam ?????? Sarnam Sranangron">
                  Suriname (+597)</option>
              <option value="SZ" data-alternative-spellings="SZ +268 Suazilandia weSwatini Swatini Ngwane">
                  Swaziland (+268)</option>
              <option value="SE" data-alternative-spellings="SE +46 Suecia Suède Sverige" data-relevancy-booster="1.5">
                  Sweden (+46)</option>
              <option value="CH" data-alternative-spellings="CH +41 Suiza Suisse Swiss Confederation Schweiz Suisse Svizzera"
                  data-relevancy-booster="1.5">Switzerland (+41)</option>
              <option value="SY" data-alternative-spellings="SY +963 Siria Syrie ?????">Syrian Arab
                  Republic (+963)</option>
              <option value="TW" data-alternative-spellings="TW +886 Taiwán Taïwan ?? ??">Taiwan (+886)</option>
              <option value="TJ" data-alternative-spellings="TJ +992 Tayikistán Tadjikistan ?????????? Toçikiston">
                  Tajikistan (+992)</option>
              <option value="TZ" data-alternative-spellings="TZ +255 Tanzanie (République unie)">Tanzania,
                  United Republic of (+255)</option>
              <option value="TH" data-alternative-spellings="TH +66 Tailandia Thaïlande ????????? Prathet Thai">
                  Thailand (+66)</option>
              <option value="TL" data-alternative-spellings="TL +670 Timor Oriental Timor oriental">
                  Timor-Leste (+670)</option>
              <option value="TG" data-alternative-spellings="TG +228">Togo (+228)</option>
              <option value="TK" data-alternative-spellings="TK +690" data-relevancy-booster="0.5">
                  Tokelau (+690)</option>
              <option value="TO" data-alternative-spellings="TO +676">Tonga (+676)</option>
              <option value="TT" data-alternative-spellings="TT +1-868 +1868 Trinidad y Tobago Trinité-et-Tobago">
                  Trinidad and Tobago (+1868)</option>
              <option value="TN" data-alternative-spellings="TN +216 Túnez Tunisie ????">Tunisia (+216)</option>
              <option value="TR" data-alternative-spellings="TR +90 Turquía Turquie Türkiye Turkiye">
                  Turkey (+90)</option>
              <option value="TM" data-alternative-spellings="TM +993 Turkmenistán Turkménistan Türkmenistan">
                  Turkmenistan (+993)</option>
              <option value="TC" data-alternative-spellings="TC +1-649 +1649 Turks &amp; Caicos Turcas y Caicos Turks &amp; Caicos (Iles)"
                  data-relevancy-booster="0.5">Turks and Caicos Islands (+1649)</option>
              <option value="TV" data-alternative-spellings="TV +688" data-relevancy-booster="0.5">
                  Tuvalu (+688)</option>
              <option value="UG" data-alternative-spellings="UG +256 Ouganda">Uganda (+256)</option>
              <option value="UA" data-alternative-spellings="UA +380 Ucrania Ukrayina ???????">Ukraine
                  (+380)</option>
              <option value="AE" data-alternative-spellings="AE +971 UAE Emirats Arabes Unis UAE ????????">
                  United Arab Emirates (+971)</option>
              <option value="GB" data-alternative-spellings="GB +44 Reino Unido Royaume-Uni Great Britain England UK Wales">
                  United Kingdom (+44)</option>
              <option value="US" data-number-format="(xxx) xxx-xxxx" data-alternative-spellings="US +1 USA United States of America Estados Unidos Etats-Unis"
                  data-relevancy-booster="3.5">United States (+1)</option>
              <option value="UY" data-alternative-spellings="UY +598">Uruguay (+598)</option>
              <option value="UZ" data-alternative-spellings="UZ +998 Uzbekistán Ouzbékistan ?????????? O&#39;zbekstan O‘zbekiston">
                  Uzbekistan (+998)</option>
              <option value="VU" data-alternative-spellings="VU +678">Vanuatu (+678)</option>
              <option value="VE" data-alternative-spellings="VE +58">Venezuela (+58)</option>
              <option value="VN" data-alternative-spellings="VN +84 Viet Nam">Vietnam (+84)</option>
              <option value="VG" data-alternative-spellings="VG +1-284 +1284 BVI Islas Vírgenes Británicas Iles Vierges britanniques"
                  data-relevancy-booster="0.5">Virgin Islands, British (+1284)</option>
              <option value="VI" data-alternative-spellings="VI +1-340 +1340 US Virgin Islands Islas Vírgenes de los Estados Unidos Iles Vierges américaines"
                  data-relevancy-booster="0.5">Virgin Islands, U.S. (+1340)</option>
              <option value="WF" data-alternative-spellings="WF +681 Wallis and Futuna Wallis y Futuna Iles Wallis-et-Futuna"
                  data-relevancy-booster="0.5">Wallis and Futuna (+681)</option>
              <option value="YE" data-alternative-spellings="YE +967 Yémen ?????">Yemen (+967)</option>
              <option value="ZM" data-alternative-spellings="ZM +260 Zambie">Zambia (+260)</option>
              <option value="ZW" data-alternative-spellings="ZW +263 Zimbabue">Zimbabwe (+263)</option>
                    </select>
                    
                    <?php if(form_error('phone_number')) { ?>
                    <input type="text" name="phone_number" class="leftcom"  style="color:red;border-color:red" value="<?php echo set_value('phone_number'); ?>" required="required" pattern="[0-9]+" />
                    <?php echo form_error('phone_number','<span style="color:red">','</span>'); ?>
                    <?php }else{ ?>
                    <input type="text" name="phone_number" value="<?php echo set_value('phone_number'); ?>" required="required" pattern="[0-9]+" />
                    <?php } ?>
                </div>
                
                <div>
                    <label>Create password</label>
                    
                    <?php if(form_error('password')) { ?>
                    <input type="password" name="password" style="color:red;border-color:red" required="required" />
                    <label>4-12 characters</label>
                    <?php echo form_error('password','<span style="color:red">','</span>'); ?>
                    <?php }else{ ?>
                     <input type="password" name="password" required="required" />
                    <label>4-12 characters</label>
                    
                    <?php } ?>           
                </div>
               
                <div>
                    <label>Confirm password</label>
                    
                    <?php if(form_error('confirm_password')) { ?>
                    <input type="password" name="confirm_password" required="required" style="border-color:red" />
                    <?php echo form_error('confirm_password','<span style="color:red">','</span>'); ?>
                    <?php }else{ ?>
                    <input type="password" name="confirm_password" required="required" />
                    <?php } ?>
                </div>
      
                <div>
                    <label>
                    </label>
                    <input type="checkbox" id="checkboxOneInput" required="required" />
                    <label for="checkboxOneInput">
                        <span>I agree to Chillitalk's Terms of services and privacy policy.
                   <!--  Note:15% VAT is added to all prices for EU citizens only.--></span>
                    </label>
                </div>
                <label></label>
                <button type="submit"  class="signupimg leftcaed" />sign-up</button>
            </form>
    	  </div>
        
    	</section>
    </div>
              
    <div id="iphone-android">
    
    <h3 id="store"> 
    2. Enter your phone number and we will send you a text message containing your Login details and a link to the Google Play Store</h3>
        
        <?php if(validation_errors()) { ?>
          <h3 class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo validation_errors(); ?>
          </h3>
        <?php } ?>
        
        <?php if($this->session->userdata('signup_failed')) { ?>
          <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $this->session->userdata('signup_failed'); ?>
          </div>
        <?php } ?>
                  
        <section>            
          <div class="appbgcl">
          
              <form name="frm-signup-mobile" id="frm-signup-mobile" 
              method="post" action="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/apps/invalid">
                 
                  <div>
                      <label>
                          Your Phone Number</label>
                   <select id="country" name="country" class="leftcom" required >
                        <option value="">Select Country</option>
              <option value="AF" data-alternative-spellings="AF +93 Afganistán ?????????">Afghanistan (+93)</option>
              <option value="AL" data-alternative-spellings="AL +355 Albanie">Albania ( +355)</option>
              <option value="AN" data-alternative-spellings="AN +599 Antillas Holandesas Antilles néerlandaises"
                  data-relevancy-booster="0.5">Netherlands Antilles (+599)</option>
              <option value="DZ" data-alternative-spellings="DZ +213 Argelia Algérie ???????">Algeria (+213)</option>
              <option value="AS" data-alternative-spellings="AS +1-684 +1684  Samoa Americana Samoa américaines"
                  data-relevancy-booster="0.5">American Samoa (+1684)</option>
              <option value="AD" data-alternative-spellings="AD +376 Andorre" data-relevancy-booster="0.5">
                  Andorra (+376)</option>
              <option value="AO" data-alternative-spellings="AO +244">Angola (+244)</option>
              <option value="AI" data-alternative-spellings="AI +1-264 +1264 Anguila" data-relevancy-booster="0.5">
                  Anguilla (+1264)</option>
              <option value="AQ" data-alternative-spellings="AQ +672 Antártida Antarctique" data-relevancy-booster="0.5">
                  Antarctica (+672)</option>
              <option value="AG" data-alternative-spellings="AG +1-268 +1268 Antigua y Barbuda Antigua-et-Barbuda"
                  data-relevancy-booster="0.5">Antigua And Barbuda (+1268)</option>
              <option value="AR" data-alternative-spellings="AR +54 Argentine">Argentina (+54)</option>
              <option value="AM" data-alternative-spellings="AM +374 Arménie">Armenia (+374)</option>
              <option value="AW" data-alternative-spellings="AW +297" data-relevancy-booster="0.5">
                  Aruba (+297)</option>
              <option value="AU" data-alternative-spellings="AU +61 Australie" data-relevancy-booster="1.5">
                  Australia (+61)</option>
              <option value="AT" data-alternative-spellings="AT +43 Autriche Österreich Osterreich Oesterreich">
                  Austria (+43)</option>
              <option value="AZ" data-alternative-spellings="AZ +994 Azerbaijani Republic República de Azerbaiyán République d&#39;Azerbaïdjan">
                  Azerbaijan (+994)</option>
              <option value="BS" data-alternative-spellings="BS +1-242 +1242">Bahamas (+1242)</option>
              <option value="BH" data-alternative-spellings="BH +973 Bahréin Bahreïn ???????">Bahrain
                  (+973)</option>
              <option value="BD" data-alternative-spellings="BD +880 ????????" data-relevancy-booster="2">
                  Bangladesh (+880)</option>
              <option value="BB" data-alternative-spellings="BB +1-246 +1246 Barbade">Barbados (+1246)</option>
              <option value="BY" data-alternative-spellings="BY +375 Bielorrusia Bélarus ????????">
                  Belarus (+375)</option>
              <option value="BE" data-alternative-spellings="BE +32 Bélgica Belgique België Belgie Belgien Belgique"
                  data-relevancy-booster="1.5">Belgium (+32)</option>
              <option value="BZ" data-alternative-spellings="BZ +501 Belice ">Belize (+501)</option>
              <option value="BJ" data-alternative-spellings="BJ +229 Benín Bénin">Benin (+229)</option>
              <option value="BM" data-alternative-spellings="BM +1-441 +1441 Bermudas Bermudes"
                  data-relevancy-booster="0.5">Bermuda (+1441)</option>
              <option value="BT" data-alternative-spellings="BT +975 Bután Bhoutan">Bhutan (+975)</option>
              <option value="BO" data-alternative-spellings="BO +591 Bolivie">Bolivia (+591)</option>
              <option value="BA" data-alternative-spellings="BA +387 Bosnia y Herzegovina Bosnie-Herzégovine ????? ? ???????????">
                  Bosnia and Herzegovina (+387)</option>

              <option value="BW" data-alternative-spellings="BW +267 Botsuana">Botswana (+267)</option>
              <option value="BR" data-alternative-spellings="BR +55 Brasil Brésil Brasil" data-relevancy-booster="2">
                  Brazil (+55)</option>
              <option value="BN" data-alternative-spellings="BN +673 Brunéi Darussalam">Brunei Darussalam
                  (+673)</option>
              <option value="BG" data-alternative-spellings="BG +359 Bulgarie ????????">Bulgaria (+359)</option>
              <option value="BF" data-alternative-spellings="BF +226">Burkina Faso (+226)</option>
              <option value="BI" data-alternative-spellings="BI +257">Burundi (+257)</option>
              <option value="KH" data-alternative-spellings="KH +855 Camboya Cambodge ???????">Cambodia
                  (+855)</option>
              <option value="CM" data-alternative-spellings="CM +237 Camerún Cameroun">Cameroon (+237)</option>
              <option value="CA" data-number-format="(xxx) xxx-xxxx" data-alternative-spellings="CA +1 Canadá"
                  data-relevancy-booster="2">Canada (+1)</option>
              <option value="CV" data-alternative-spellings="CV +238 Cabo Verde Cap-Vert">Cape Verde
                  (+238)</option>
              <option value="KY" data-alternative-spellings="KY 1-345 +1345 Islas Caimán Iles Caïmans"
                  data-relevancy-booster="0.5">Cayman Islands (+1345)</option>
              <option value="CF" data-alternative-spellings="CF +236 República Centroafricana République centrafricaine">
                  Central African Republic (+236)</option>
              <option value="TD" data-alternative-spellings="TD +235 Tchad ?????>">Chad (+235)</option>
              <option value="CL" data-alternative-spellings="CL +56 Chili">Chile (+56)</option>
              <option value="CN" data-alternative-spellings="CN +86 Chine Zhongguo Zhonghua">China
                  (+86)</option>
              <option value="CO" data-alternative-spellings="CO +57 Colombie">Colombia (+57)</option>
              <option value="KM" data-alternative-spellings="KM +269 Comoras Comores ???">Comoros
                  (+269)</option>
              <option value="CG" data-alternative-spellings="CG +242">Congo (+242)</option>
              <option value="CD" data-alternative-spellings="CD +243 Democratic Republic of the Congo República Democrática del Congo République Démocratique du Congo Congo-Brazzaville">
                  Congo, the Democratic Republic of the (+243)</option>
              <option value="CK" data-alternative-spellings="CK +682 Islas Cook Iles Cook" data-relevancy-booster="0.5">
                  Cook Islands (+682)</option>
              <option value="CR" data-alternative-spellings="CR +506">Costa Rica (+506)</option>
              <option value="CI" data-alternative-spellings="CI +225 Costa de Marfil">Côte d'Ivoire
                  (+225)</option>
              <option value="HR" data-alternative-spellings="HR +385 Croacia Croatie Hrvatska">Croatia
                  (+385)</option>
              <option value="CU" data-alternative-spellings="CU +53">Cuba (+53)</option>
              <option value="CY" data-alternative-spellings="CY +357 Chipre Chypre ??p??? Kýpros Kibris">
                  Cyprus (+357)</option>
              <option value="CZ" data-alternative-spellings="CZ +420 Czech República Checa République tchèque Ceská Ceska">
                  Czech Republic (+420)</option>
              <option value="DK" data-alternative-spellings="DK +45 Dinamarca Danemark">Denmark (+45)</option>
              <option value="DJ" data-alternative-spellings="DJ +253 ??????? Jabuuti Gabuuti">Djibouti
                  (+253)</option>
              <option value="DM" data-alternative-spellings="DM +1-767 +1767 Dominique Dominique">
                  Dominica (+1767)</option>
              <option value="DO" data-alternative-spellings="DO +1-809 +1809 República Dominicana République Dominicaine">
                  Dominican Republic (+1809)</option>
              <option value="EC" data-alternative-spellings="EC +593 Equateur">Ecuador (+593)</option>
              <option value="EG" data-alternative-spellings="EG +20 Egipto Egypte" data-relevancy-booster="1.5">
                  Egypt (+20)</option>
              <option value="SV" data-alternative-spellings="SV +503">El Salvador (+503)</option>
              <option value="GQ" data-alternative-spellings="GQ +240 Guinea Ecuatorial Guinée équatoriale">
                  Equatorial Guinea (+240)</option>
              <option value="ER" data-alternative-spellings="ER +291 Erythrée ?????? ????">Eritrea
                  (+291)</option>
              <option value="EE" data-alternative-spellings="EE +372 Estonie Eesti">Estonia (+372)</option>
              <option value="ET" data-alternative-spellings="ET +251 Etiopía Ethiopie ?????">Ethiopia
                  (+251)</option>
              <option value="FK" data-alternative-spellings="FK +500 Falkland Islands Islas Malvinas Iles Falkland"
                  data-relevancy-booster="0.5">Falkland Islands (Malvinas) (+500)</option>
              <option value="FO" data-alternative-spellings="FO +298 Islas Feroe Iles Féroé Føroyar Færøerne"
                  data-relevancy-booster="0.5">Faroe Islands (+298)</option>
              <option value="FJ" data-alternative-spellings="FJ +679 Fidji Viti ?????">Fiji (+679)</option>
              <option value="FI" data-alternative-spellings="FI +358 Finlandia Finlande Suomi">Finland
                  (+358)</option>
              <option value="FR" data-alternative-spellings="FR +33 Francia" data-relevancy-booster="2.5">
                  France (+33)</option>
              <option value="GF" data-alternative-spellings="GF +594 Guayana Francesa Guyane">French
                  Guiana (+594)</option>
              <option value="PF" data-alternative-spellings="PF +689 Polinesia Francesa Polynésie française">
                  French Polynesia (+689)</option>
              <option value="GA" data-alternative-spellings="GA +241 Gabonese Republic República Gabonesa Gabon République Gabonaise">
                  Gabon (+241)</option>
              <option value="GM" data-alternative-spellings="GM +220 Gambie">Gambia (+220)</option>
              <option value="GE" data-alternative-spellings="GE +995 Georgie ??????????">Georgia (+995)</option>
              <option value="DE" data-alternative-spellings="DE +49 Alemania Allemagne Bundesrepublik">
                  Germany (+49)</option>
              <option value="GH" data-alternative-spellings="GH +233">Ghana (+233)</option>
              <option value="GI" data-alternative-spellings="GI +350" data-relevancy-booster="0.5">
                  Gibraltar (+350)</option>
              <option value="GR" data-alternative-spellings="GR +30 Grecia Grèce ????da">Greece (+30)</option>
              <option value="GL" data-alternative-spellings="GL +299 Groenlandia Groenland grønland">
                  Greenland (+299)</option>
              <option value="GD" data-alternative-spellings="GD +1-473 +1473 Granada Grenade">Grenada
                  (+1473)</option>
              <option value="GP" data-alternative-spellings="GP +590 Guadalupe">Guadeloupe (+590)</option>
              <option value="GU" data-alternative-spellings="GU +1-671 +1671">Guam (+1671)</option>
              <option value="GT" data-alternative-spellings="GT +502">Guatemala (+502)</option>
              <option value="GN" data-alternative-spellings="GN +224 Guinée">Guinea (+224)</option>
              <option value="GW" data-alternative-spellings="GW +245 Guinée-Bissau">Guinea-Bissau
                  (+245)</option>
              <option value="GY" data-alternative-spellings="GY +592">Guyana (+592)</option>
              <option value="HT" data-alternative-spellings="HT +509 Haití Haïti">Haiti (+509)</option>
              <option value="VA" data-alternative-spellings="VA +39 Vaticano">Holy See (Vatican City
                  State) (+39)</option>
              <option value="HN" data-alternative-spellings="HN +504">Honduras (+504)</option>
              <option value="HK" data-alternative-spellings="HK +852 Hongkong, China Hongkong, China Hong Kong, Chine ??">
                  Hong Kong (+852)</option>
              <option value="HU" data-alternative-spellings="HU +36 Hungría Hongrie Magyarország">
                  Hungary (+36)</option>
              <option value="IS" data-alternative-spellings="IS +354 Islandia Islande Island">Iceland
                  (+354)</option>
              <option value="IN" data-alternative-spellings="IN +91 Inde ???? ??????? Hindustan"
                  data-relevancy-booster="3">India (+91)</option>
              <option value="ID" data-alternative-spellings="ID +62 Indonésie" data-relevancy-booster="2">
                  Indonesia (+62)</option>
              <option value="IP" data-alternative-spellings="IP +883 iNum">iNum (+883)</option>
              <option value="IR" data-alternative-spellings="IR +98 Irán ?????">Iran, Islamic Republic
                  of (+98)</option>
              <option value="IQ" data-alternative-spellings="IQ +964 Irak ???????">Iraq (+964)</option>
              <option value="IE" data-alternative-spellings="IE +353 Irlanda Irlande Éire" data-relevancy-booster="1.2">
                  Ireland (+353)</option>
              <option value="IL" data-alternative-spellings="IL +972 Israël ??????? ?????">Israel
                  (+972)</option>
              <option value="IT" data-alternative-spellings="IT +39 Italia Italie" data-relevancy-booster="2">
                  Italy (+39)</option>
              <option value="JM" data-alternative-spellings="JM +1-876 +1876 Jamaïque">Jamaica (+1876)</option>
              <option value="JP" data-alternative-spellings="JP +81 Japón Japon Nippon Nihon ?? "
                  data-relevancy-booster="2.5">Japan (+81)</option>
              <option value="JO" data-alternative-spellings="JO +962 Jordania Jordanie ??????">Jordan
                  (+962)</option>
              <option value="KZ" data-alternative-spellings="KZ +7 Kazajistán ????????? ?????????">
                  Kazakhstan (+7)</option>
              <option value="KE" data-alternative-spellings="KE +254 Kenia">Kenya (+254)</option>
              <option value="KI" data-alternative-spellings="KI +686">Kiribati (+686)</option>
              <option value="KP" data-alternative-spellings="KP +850 Korea (Democratic People&#39;s Republic of) Corea (República Popular Democrática) Corée (République populaire démocratique)">
                  Korea, Democratic People's Republic of (+850)</option>
              <option value="KR" data-alternative-spellings="KR +82 Korea (Republic of) Corea (República de) Corée (République) South Korea"
                  data-relevancy-booster="1.5">Korea, Republic of (+82)</option>
              <option value="KW" data-alternative-spellings="KW +965 Koweït ??????">Kuwait (+965)</option>
              <option value="KG" data-alternative-spellings="KG +996 Kirguizistán Kirghizistan ??????????">
                  Kyrgyzstan (+996)</option>
              <option value="LA" data-alternative-spellings="LA +856 Laos">Lao People's Democratic
                  Republic (+856)</option>
              <option value="LV" data-alternative-spellings="LV +371 Letonia Lettonie Latvija">Latvia
                  (+371)</option>
              <option value="LB" data-alternative-spellings="LB +961 Líbano Liban ?????">Lebanon (+961)</option>
              <option value="LS" data-alternative-spellings="LS +266 Lesoto">Lesotho (+266)</option>
              <option value="LR" data-alternative-spellings="LR +231 Libéria">Liberia (+231)</option>
              <option value="LY" data-alternative-spellings="LY +218 Libia Libye ?????">Libyan Arab
                  Jamahiriya (+218)</option>
              <option value="LI" data-alternative-spellings="LI +423">Liechtenstein (+423)</option>
              <option value="LT" data-alternative-spellings="LT +370 Lituania Lituanie Lietuva">Lithuania
                  (+370)</option>
              <option value="LU" data-alternative-spellings="LU +352 Luxemburgo">Luxembourg (+352)</option>
              <option value="MO" data-alternative-spellings="MO +853 Macao, China Macao, China Macao, Chine">
                  Macao (+853)</option>
              <option value="MK" data-alternative-spellings="MK +389 Macédoine ??????????">Macedonia,
                  The Former Yugoslav Republic Of (+389)</option>
              <option value="MG" data-alternative-spellings="MG +261 Madagasikara">Madagascar (+261)</option>
              <option value="MW" data-alternative-spellings="MW +265">Malawi (+265)</option>
              <option value="MY" data-alternative-spellings="MY +60 Malasia Malaisie">Malaysia (+60)</option>
              <option value="MV" data-alternative-spellings="MV +960 Maldivas">Maldives (+960)</option>
              <option value="ML" data-alternative-spellings="ML +223 Malí">Mali (+223)</option>
              <option value="MT" data-alternative-spellings="MT +356 Malte">Malta (+356)</option>
              <option value="MH" data-alternative-spellings="MH +692 Islas Marshall Iles Marshall"
                  data-relevancy-booster="0.5">Marshall Islands (+692)</option>
              <option value="MQ" data-alternative-spellings="MQ +596 Martinica">Martinique (+596)</option>
              <option value="MR" data-alternative-spellings="MR +222 Mauritanie ???????????">Mauritania
                  (+222)</option>
              <option value="MU" data-alternative-spellings="MU +230 Mauricio Maurice">Mauritius (+230)</option>
              <option value="YT" data-alternative-spellings="YT +262">Mayotte (+262)</option>
              <option value="MX" data-alternative-spellings="MX +52 México Mexique" data-relevancy-booster="1.5">
                  Mexico (+52)</option>
              <option value="FM" data-alternative-spellings="FM +691 Micronésie">Micronesia, Federated
                  States of (+691)</option>
              <option value="MD" data-alternative-spellings="MD +373 Moldavia Moldavie">Moldova, Republic
                  of (+373)</option>
              <option value="MC" data-alternative-spellings="MC +377 Mónaco">Monaco (+377)</option>
              <option value="MN" data-alternative-spellings="MN +976 Mongolie">Mongolia (+976)</option>
              <option value="ME" data-alternative-spellings="ME +382 Monténégro">Montenegro (+382)</option>
              <option value="MS" data-alternative-spellings="MS +1-664 +1664" data-relevancy-booster="0.5">
                  Montserrat (+1664)</option>
              <option value="MA" data-alternative-spellings="MA +212 Marruecos Maroc">Morocco (+212)</option>
              <option value="MZ" data-alternative-spellings="MZ +258 Moçambique">Mozambique (+258)</option>
              <option value="MM" data-alternative-spellings="MM +95">Myanmar (+95)</option>
              <option value="NA" data-alternative-spellings="NA +264 Namibie Namibië">Namibia (+264)</option>
              <option value="NR" data-alternative-spellings="NR +674 Naoero" data-relevancy-booster="0.5">
                  Nauru (+674)</option>
              <option value="NP" data-alternative-spellings="NP +977 Népal ?????">Nepal (+977)</option>
              <option value="NL" data-alternative-spellings="NL +31 Netherlands Países Bajos Pays-Bas Holland"
                  data-relevancy-booster="1.5">Netherlands (+31)</option>
              <option value="NC" data-alternative-spellings="NC +687 Nueva Caledonia Nouvelle-Calédonie">
                  New Caledonia (+687)</option>
              <option value="NZ" data-alternative-spellings="NZ +64 Nueva Zelanda Nouvelle-Zélande Aotearoa">
                  New Zealand (+64)</option>
              <option value="NI" data-alternative-spellings="NI +505">Nicaragua (+505)</option>
              <option value="NE" data-alternative-spellings="NE +227 Níger Nijar">Niger (+227)</option>
              <option value="NG" data-alternative-spellings="NG +234 Nigéria Nijeriya Naíjíríà">Nigeria
                  (+234)</option>
              <option value="NU" data-alternative-spellings="NU +683 Nioué" data-relevancy-booster="0.5">
                  Niue (+683)</option>
              <option value="MP" data-alternative-spellings="MP +1-670 +1670 CNMI Islas Marianas del Norte Iles Mariannes du nord"
                  data-relevancy-booster="0.5">Northern Mariana Islands (+1670)</option>
              <option value="NO" data-alternative-spellings="NO +47 Noruega Norvège Norge Noreg"
                  data-relevancy-booster="1.5">Norway (+47)</option>
              <option value="OM" data-alternative-spellings="OM +968 Omán ????">Oman (+968)</option>
              <option value="PK" data-alternative-spellings="PK +92 Pakistán ???????" data-relevancy-booster="2">
                  Pakistan (+92)</option>
              <option value="PW" data-alternative-spellings="PW +680 Palaos" data-relevancy-booster="0.5">
                  Palau (+680)</option>
              <option value="PS" data-alternative-spellings="PS +970 Palestina ??????">Palestinian
                  Territory, Occupied (+970)</option>
              <option value="PA" data-alternative-spellings="PA +507 Panamá">Panama (+507)</option>
              <option value="PG" data-alternative-spellings="PG +675 Papúa Nueva Guinea Papouasie-Nouvelle-Guinée">
                  Papua New Guinea (+675)</option>
              <option value="PY" data-alternative-spellings="PY +595">Paraguay (+595)</option>
              <option value="PE" data-alternative-spellings="PE +51 Perú Pérou">Peru (+51)</option>
              <option value="PH" data-alternative-spellings="PH +63 Filipinas Pilipinas" data-relevancy-booster="1.5">
                  Philippines (+63)</option>
              <option value="PL" data-alternative-spellings="PL +48 Polonia Pologne Polska" data-relevancy-booster="1.25">
                  Poland (+48)</option>
              <option value="PT" data-alternative-spellings="PT +351 Portuguesa" data-relevancy-booster="1.5">
                  Portugal (+351)</option>
              <option value="PR" data-alternative-spellings="PR +1 Puerto Rico Porto Rico">Puerto
                  Rico (+1)</option>
              <option value="QA" data-alternative-spellings="QA +974 ???">Qatar (+974)</option>
              <option value="RE" data-alternative-spellings="RE +262 Reunion Reunión">Réunion (+262)</option>
              <option value="RO" data-alternative-spellings="RO +40 Rumanía Roumanie Rumania Roumania România">
                  Romania (+40)</option>
              <option value="RU" data-alternative-spellings="RU +7 Russia Rusia Russie Rossiya ?????????? ??????"
                  data-relevancy-booster="2.5">Russian Federation (+7)</option>
              <option value="RW" data-alternative-spellings="RW +250 Ruanda">Rwanda (+250)</option>
              <option value="SH" data-alternative-spellings="SH +290 Santa Elena Sainte-Hélène">Saint
                  Helena (+290)</option>
              <option value="LC" data-alternative-spellings="LC +1-758 +1758 Santa Lucía Sainte-Lucie">
                  Saint Lucia (+1758)</option>
              <option value="PM" data-alternative-spellings="PM +508 San Pedro y Miquelón Saint-Pierre et Miquelon">
                  Saint Pierre and Miquelon (+508)</option>
              <option value="VC" data-alternative-spellings="VC +1-784 +1784 San Vicente y las Granadinas Saint-Vincent-et-les-Grenadines">
                  Saint Vincent and the Grenadines (+1784)</option>
              <option value="WS" data-alternative-spellings="WS +685">Samoa (+685)</option>
              <option value="SM" data-alternative-spellings="SM +378 Saint-Marin">San Marino (+378)</option>
              <option value="ST" data-alternative-spellings="ST +239 Santo Tomé y Príncipe Sao Tomé-et-Principe">
                  Sao Tome and Principe (+239)</option>
              <option value="SA" data-alternative-spellings="SA +966 Arabia Saudí Arabie saoudite ????????">
                  Saudi Arabia (+966)</option>
              <option value="SN" data-alternative-spellings="SN +221 Sénégal">Senegal (+221)</option>
              <option value="RS" data-alternative-spellings="RS +381 Serbie ?????? Srbija">Serbia
                  (+381)</option>
              <option value="SC" data-alternative-spellings="SC +248" data-relevancy-booster="0.5">
                  Seychelles (+248)</option>
              <option value="SL" data-alternative-spellings="SL +232 Sierra Leona Sierre Leone">Sierra
                  Leone (+232)</option>
              <option value="SG" data-alternative-spellings="SG +65 Singapur Singapour Singapura  ??????????? ????????">
                  Singapore (+65)</option>
              <option value="SK" data-alternative-spellings="SK +421 Eslovaquia Slovaquie Slovenská Slovensko">
                  Slovakia (+421)</option>
              <option value="SI" data-alternative-spellings="SI +386 Eslovenia Slovénie Slovenija">
                  Slovenia (+386)</option>
              <option value="SB" data-alternative-spellings="SB +677 Islas Salomón Iles Salomon">Solomon
                  Islands (+677)</option>
              <option value="SO" data-alternative-spellings="SO +252 Somali Somalie ???????">Somalia
                  (+252)</option>
              <option value="ZA" data-alternative-spellings="ZA +27 Sudáfrica Afrique du Sud RSA Suid-Afrika">
                  South Africa (+27)</option>
              <option value="SS" data-alternative-spellings="SS +211">South Sudan (+211)</option>
              <option value="ES" data-alternative-spellings="ES +34 España Espagne" data-relevancy-booster="2">
                  Spain (+34)</option>
              <option value="LK" data-alternative-spellings="LK +94 ????? ???? ??????">Sri Lanka (+94)</option>
              <option value="SD" data-alternative-spellings="SD +249 Sudán Soudan ???????">Sudan (+249)</option>
              <option value="SR" data-alternative-spellings="SR +597 Surinam ?????? Sarnam Sranangron">
                  Suriname (+597)</option>
              <option value="SZ" data-alternative-spellings="SZ +268 Suazilandia weSwatini Swatini Ngwane">
                  Swaziland (+268)</option>
              <option value="SE" data-alternative-spellings="SE +46 Suecia Suède Sverige" data-relevancy-booster="1.5">
                  Sweden (+46)</option>
              <option value="CH" data-alternative-spellings="CH +41 Suiza Suisse Swiss Confederation Schweiz Suisse Svizzera"
                  data-relevancy-booster="1.5">Switzerland (+41)</option>
              <option value="SY" data-alternative-spellings="SY +963 Siria Syrie ?????">Syrian Arab
                  Republic (+963)</option>
              <option value="TW" data-alternative-spellings="TW +886 Taiwán Taïwan ?? ??">Taiwan (+886)</option>
              <option value="TJ" data-alternative-spellings="TJ +992 Tayikistán Tadjikistan ?????????? Toçikiston">
                  Tajikistan (+992)</option>
              <option value="TZ" data-alternative-spellings="TZ +255 Tanzanie (République unie)">Tanzania,
                  United Republic of (+255)</option>
              <option value="TH" data-alternative-spellings="TH +66 Tailandia Thaïlande ????????? Prathet Thai">
                  Thailand (+66)</option>
              <option value="TL" data-alternative-spellings="TL +670 Timor Oriental Timor oriental">
                  Timor-Leste (+670)</option>
              <option value="TG" data-alternative-spellings="TG +228">Togo (+228)</option>
              <option value="TK" data-alternative-spellings="TK +690" data-relevancy-booster="0.5">
                  Tokelau (+690)</option>
              <option value="TO" data-alternative-spellings="TO +676">Tonga (+676)</option>
              <option value="TT" data-alternative-spellings="TT +1-868 +1868 Trinidad y Tobago Trinité-et-Tobago">
                  Trinidad and Tobago (+1868)</option>
              <option value="TN" data-alternative-spellings="TN +216 Túnez Tunisie ????">Tunisia (+216)</option>
              <option value="TR" data-alternative-spellings="TR +90 Turquía Turquie Türkiye Turkiye">
                  Turkey (+90)</option>
              <option value="TM" data-alternative-spellings="TM +993 Turkmenistán Turkménistan Türkmenistan">
                  Turkmenistan (+993)</option>
              <option value="TC" data-alternative-spellings="TC +1-649 +1649 Turks &amp; Caicos Turcas y Caicos Turks &amp; Caicos (Iles)"
                  data-relevancy-booster="0.5">Turks and Caicos Islands (+1649)</option>
              <option value="TV" data-alternative-spellings="TV +688" data-relevancy-booster="0.5">
                  Tuvalu (+688)</option>
              <option value="UG" data-alternative-spellings="UG +256 Ouganda">Uganda (+256)</option>
              <option value="UA" data-alternative-spellings="UA +380 Ucrania Ukrayina ???????">Ukraine
                  (+380)</option>
              <option value="AE" data-alternative-spellings="AE +971 UAE Emirats Arabes Unis UAE ????????">
                  United Arab Emirates (+971)</option>
              <option value="GB" data-alternative-spellings="GB +44 Reino Unido Royaume-Uni Great Britain England UK Wales">
                  United Kingdom (+44)</option>
              <option value="US" data-number-format="(xxx) xxx-xxxx" data-alternative-spellings="US +1 USA United States of America Estados Unidos Etats-Unis"
                  data-relevancy-booster="3.5">United States (+1)</option>
              <option value="UY" data-alternative-spellings="UY +598">Uruguay (+598)</option>
              <option value="UZ" data-alternative-spellings="UZ +998 Uzbekistán Ouzbékistan ?????????? O&#39;zbekstan O‘zbekiston">
                  Uzbekistan (+998)</option>
              <option value="VU" data-alternative-spellings="VU +678">Vanuatu (+678)</option>
              <option value="VE" data-alternative-spellings="VE +58">Venezuela (+58)</option>
              <option value="VN" data-alternative-spellings="VN +84 Viet Nam">Vietnam (+84)</option>
              <option value="VG" data-alternative-spellings="VG +1-284 +1284 BVI Islas Vírgenes Británicas Iles Vierges britanniques"
                  data-relevancy-booster="0.5">Virgin Islands, British (+1284)</option>
              <option value="VI" data-alternative-spellings="VI +1-340 +1340 US Virgin Islands Islas Vírgenes de los Estados Unidos Iles Vierges américaines"
                  data-relevancy-booster="0.5">Virgin Islands, U.S. (+1340)</option>
              <option value="WF" data-alternative-spellings="WF +681 Wallis and Futuna Wallis y Futuna Iles Wallis-et-Futuna"
                  data-relevancy-booster="0.5">Wallis and Futuna (+681)</option>
              <option value="YE" data-alternative-spellings="YE +967 Yémen ?????">Yemen (+967)</option>
              <option value="ZM" data-alternative-spellings="ZM +260 Zambie">Zambia (+260)</option>
              <option value="ZW" data-alternative-spellings="ZW +263 Zimbabue">Zimbabwe (+263)</option>
                    </select>
                    
                      <input type="text" name="phone_number" required="required" pattern="[0-9]+" />
                      <input type="hidden" name="device" id="device"/>
                  </div>
                  <label></label>
                
                  <button type="submit" class="signupimg leftcaed">sign-up</button>
              </form>
          </div>
        </section>
                  </div>
        </section>

       
           <div id="iphone">

      <h3 id="store1"> 
   2. Enter your phone number and we will send you a text message containing your Login details and a link to the App Store</h3>
        
        
        
        <?php if($this->session->flashdata('signup_failed')) { ?>
          <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $this->session->flashdata('signup_failed'); ?>
          </div>
        <?php } ?>
                  
        <section>            
          <div class="appbgcl">
          
              <form name="frm-signup-mobile" id="frm-signup-mobile" 
              method="post" action="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/apps/invalid">
                 
                  <div>
                      <label>
                          Your Phone Number</label>
                           <select id="country" name="country" class="leftcom" required >
                        <option value="">Select Country</option>
              <option value="AF" data-alternative-spellings="AF +93 Afganistán ?????????">Afghanistan (+93)</option>
              <option value="AL" data-alternative-spellings="AL +355 Albanie">Albania ( +355)</option>
              <option value="AN" data-alternative-spellings="AN +599 Antillas Holandesas Antilles néerlandaises"
                  data-relevancy-booster="0.5">Netherlands Antilles (+599)</option>
              <option value="DZ" data-alternative-spellings="DZ +213 Argelia Algérie ???????">Algeria (+213)</option>
              <option value="AS" data-alternative-spellings="AS +1-684 +1684  Samoa Americana Samoa américaines"
                  data-relevancy-booster="0.5">American Samoa (+1684)</option>
              <option value="AD" data-alternative-spellings="AD +376 Andorre" data-relevancy-booster="0.5">
                  Andorra (+376)</option>
              <option value="AO" data-alternative-spellings="AO +244">Angola (+244)</option>
              <option value="AI" data-alternative-spellings="AI +1-264 +1264 Anguila" data-relevancy-booster="0.5">
                  Anguilla (+1264)</option>
              <option value="AQ" data-alternative-spellings="AQ +672 Antártida Antarctique" data-relevancy-booster="0.5">
                  Antarctica (+672)</option>
              <option value="AG" data-alternative-spellings="AG +1-268 +1268 Antigua y Barbuda Antigua-et-Barbuda"
                  data-relevancy-booster="0.5">Antigua And Barbuda (+1268)</option>
              <option value="AR" data-alternative-spellings="AR +54 Argentine">Argentina (+54)</option>
              <option value="AM" data-alternative-spellings="AM +374 Arménie">Armenia (+374)</option>
              <option value="AW" data-alternative-spellings="AW +297" data-relevancy-booster="0.5">
                  Aruba (+297)</option>
              <option value="AU" data-alternative-spellings="AU +61 Australie" data-relevancy-booster="1.5">
                  Australia (+61)</option>
              <option value="AT" data-alternative-spellings="AT +43 Autriche Österreich Osterreich Oesterreich">
                  Austria (+43)</option>
              <option value="AZ" data-alternative-spellings="AZ +994 Azerbaijani Republic República de Azerbaiyán République d&#39;Azerbaïdjan">
                  Azerbaijan (+994)</option>
              <option value="BS" data-alternative-spellings="BS +1-242 +1242">Bahamas (+1242)</option>
              <option value="BH" data-alternative-spellings="BH +973 Bahréin Bahreïn ???????">Bahrain
                  (+973)</option>
              <option value="BD" data-alternative-spellings="BD +880 ????????" data-relevancy-booster="2">
                  Bangladesh (+880)</option>
              <option value="BB" data-alternative-spellings="BB +1-246 +1246 Barbade">Barbados (+1246)</option>
              <option value="BY" data-alternative-spellings="BY +375 Bielorrusia Bélarus ????????">
                  Belarus (+375)</option>
              <option value="BE" data-alternative-spellings="BE +32 Bélgica Belgique België Belgie Belgien Belgique"
                  data-relevancy-booster="1.5">Belgium (+32)</option>
              <option value="BZ" data-alternative-spellings="BZ +501 Belice ">Belize (+501)</option>
              <option value="BJ" data-alternative-spellings="BJ +229 Benín Bénin">Benin (+229)</option>
              <option value="BM" data-alternative-spellings="BM +1-441 +1441 Bermudas Bermudes"
                  data-relevancy-booster="0.5">Bermuda (+1441)</option>
              <option value="BT" data-alternative-spellings="BT +975 Bután Bhoutan">Bhutan (+975)</option>
              <option value="BO" data-alternative-spellings="BO +591 Bolivie">Bolivia (+591)</option>
              <option value="BA" data-alternative-spellings="BA +387 Bosnia y Herzegovina Bosnie-Herzégovine ????? ? ???????????">
                  Bosnia and Herzegovina (+387)</option>

              <option value="BW" data-alternative-spellings="BW +267 Botsuana">Botswana (+267)</option>
              <option value="BR" data-alternative-spellings="BR +55 Brasil Brésil Brasil" data-relevancy-booster="2">
                  Brazil (+55)</option>
              <option value="BN" data-alternative-spellings="BN +673 Brunéi Darussalam">Brunei Darussalam
                  (+673)</option>
              <option value="BG" data-alternative-spellings="BG +359 Bulgarie ????????">Bulgaria (+359)</option>
              <option value="BF" data-alternative-spellings="BF +226">Burkina Faso (+226)</option>
              <option value="BI" data-alternative-spellings="BI +257">Burundi (+257)</option>
              <option value="KH" data-alternative-spellings="KH +855 Camboya Cambodge ???????">Cambodia
                  (+855)</option>
              <option value="CM" data-alternative-spellings="CM +237 Camerún Cameroun">Cameroon (+237)</option>
              <option value="CA" data-number-format="(xxx) xxx-xxxx" data-alternative-spellings="CA +1 Canadá"
                  data-relevancy-booster="2">Canada (+1)</option>
              <option value="CV" data-alternative-spellings="CV +238 Cabo Verde Cap-Vert">Cape Verde
                  (+238)</option>
              <option value="KY" data-alternative-spellings="KY 1-345 +1345 Islas Caimán Iles Caïmans"
                  data-relevancy-booster="0.5">Cayman Islands (+1345)</option>
              <option value="CF" data-alternative-spellings="CF +236 República Centroafricana République centrafricaine">
                  Central African Republic (+236)</option>
              <option value="TD" data-alternative-spellings="TD +235 Tchad ?????>">Chad (+235)</option>
              <option value="CL" data-alternative-spellings="CL +56 Chili">Chile (+56)</option>
              <option value="CN" data-alternative-spellings="CN +86 Chine Zhongguo Zhonghua">China
                  (+86)</option>
              <option value="CO" data-alternative-spellings="CO +57 Colombie">Colombia (+57)</option>
              <option value="KM" data-alternative-spellings="KM +269 Comoras Comores ???">Comoros
                  (+269)</option>
              <option value="CG" data-alternative-spellings="CG +242">Congo (+242)</option>
              <option value="CD" data-alternative-spellings="CD +243 Democratic Republic of the Congo República Democrática del Congo République Démocratique du Congo Congo-Brazzaville">
                  Congo, the Democratic Republic of the (+243)</option>
              <option value="CK" data-alternative-spellings="CK +682 Islas Cook Iles Cook" data-relevancy-booster="0.5">
                  Cook Islands (+682)</option>
              <option value="CR" data-alternative-spellings="CR +506">Costa Rica (+506)</option>
              <option value="CI" data-alternative-spellings="CI +225 Costa de Marfil">Côte d'Ivoire
                  (+225)</option>
              <option value="HR" data-alternative-spellings="HR +385 Croacia Croatie Hrvatska">Croatia
                  (+385)</option>
              <option value="CU" data-alternative-spellings="CU +53">Cuba (+53)</option>
              <option value="CY" data-alternative-spellings="CY +357 Chipre Chypre ??p??? Kýpros Kibris">
                  Cyprus (+357)</option>
              <option value="CZ" data-alternative-spellings="CZ +420 Czech República Checa République tchèque Ceská Ceska">
                  Czech Republic (+420)</option>
              <option value="DK" data-alternative-spellings="DK +45 Dinamarca Danemark">Denmark (+45)</option>
              <option value="DJ" data-alternative-spellings="DJ +253 ??????? Jabuuti Gabuuti">Djibouti
                  (+253)</option>
              <option value="DM" data-alternative-spellings="DM +1-767 +1767 Dominique Dominique">
                  Dominica (+1767)</option>
              <option value="DO" data-alternative-spellings="DO +1-809 +1809 República Dominicana République Dominicaine">
                  Dominican Republic (+1809)</option>
              <option value="EC" data-alternative-spellings="EC +593 Equateur">Ecuador (+593)</option>
              <option value="EG" data-alternative-spellings="EG +20 Egipto Egypte" data-relevancy-booster="1.5">
                  Egypt (+20)</option>
              <option value="SV" data-alternative-spellings="SV +503">El Salvador (+503)</option>
              <option value="GQ" data-alternative-spellings="GQ +240 Guinea Ecuatorial Guinée équatoriale">
                  Equatorial Guinea (+240)</option>
              <option value="ER" data-alternative-spellings="ER +291 Erythrée ?????? ????">Eritrea
                  (+291)</option>
              <option value="EE" data-alternative-spellings="EE +372 Estonie Eesti">Estonia (+372)</option>
              <option value="ET" data-alternative-spellings="ET +251 Etiopía Ethiopie ?????">Ethiopia
                  (+251)</option>
              <option value="FK" data-alternative-spellings="FK +500 Falkland Islands Islas Malvinas Iles Falkland"
                  data-relevancy-booster="0.5">Falkland Islands (Malvinas) (+500)</option>
              <option value="FO" data-alternative-spellings="FO +298 Islas Feroe Iles Féroé Føroyar Færøerne"
                  data-relevancy-booster="0.5">Faroe Islands (+298)</option>
              <option value="FJ" data-alternative-spellings="FJ +679 Fidji Viti ?????">Fiji (+679)</option>
              <option value="FI" data-alternative-spellings="FI +358 Finlandia Finlande Suomi">Finland
                  (+358)</option>
              <option value="FR" data-alternative-spellings="FR +33 Francia" data-relevancy-booster="2.5">
                  France (+33)</option>
              <option value="GF" data-alternative-spellings="GF +594 Guayana Francesa Guyane">French
                  Guiana (+594)</option>
              <option value="PF" data-alternative-spellings="PF +689 Polinesia Francesa Polynésie française">
                  French Polynesia (+689)</option>
              <option value="GA" data-alternative-spellings="GA +241 Gabonese Republic República Gabonesa Gabon République Gabonaise">
                  Gabon (+241)</option>
              <option value="GM" data-alternative-spellings="GM +220 Gambie">Gambia (+220)</option>
              <option value="GE" data-alternative-spellings="GE +995 Georgie ??????????">Georgia (+995)</option>
              <option value="DE" data-alternative-spellings="DE +49 Alemania Allemagne Bundesrepublik">
                  Germany (+49)</option>
              <option value="GH" data-alternative-spellings="GH +233">Ghana (+233)</option>
              <option value="GI" data-alternative-spellings="GI +350" data-relevancy-booster="0.5">
                  Gibraltar (+350)</option>
              <option value="GR" data-alternative-spellings="GR +30 Grecia Grèce ????da">Greece (+30)</option>
              <option value="GL" data-alternative-spellings="GL +299 Groenlandia Groenland grønland">
                  Greenland (+299)</option>
              <option value="GD" data-alternative-spellings="GD +1-473 +1473 Granada Grenade">Grenada
                  (+1473)</option>
              <option value="GP" data-alternative-spellings="GP +590 Guadalupe">Guadeloupe (+590)</option>
              <option value="GU" data-alternative-spellings="GU +1-671 +1671">Guam (+1671)</option>
              <option value="GT" data-alternative-spellings="GT +502">Guatemala (+502)</option>
              <option value="GN" data-alternative-spellings="GN +224 Guinée">Guinea (+224)</option>
              <option value="GW" data-alternative-spellings="GW +245 Guinée-Bissau">Guinea-Bissau
                  (+245)</option>
              <option value="GY" data-alternative-spellings="GY +592">Guyana (+592)</option>
              <option value="HT" data-alternative-spellings="HT +509 Haití Haïti">Haiti (+509)</option>
              <option value="VA" data-alternative-spellings="VA +39 Vaticano">Holy See (Vatican City
                  State) (+39)</option>
              <option value="HN" data-alternative-spellings="HN +504">Honduras (+504)</option>
              <option value="HK" data-alternative-spellings="HK +852 Hongkong, China Hongkong, China Hong Kong, Chine ??">
                  Hong Kong (+852)</option>
              <option value="HU" data-alternative-spellings="HU +36 Hungría Hongrie Magyarország">
                  Hungary (+36)</option>
              <option value="IS" data-alternative-spellings="IS +354 Islandia Islande Island">Iceland
                  (+354)</option>
              <option value="IN" data-alternative-spellings="IN +91 Inde ???? ??????? Hindustan"
                  data-relevancy-booster="3">India (+91)</option>
              <option value="ID" data-alternative-spellings="ID +62 Indonésie" data-relevancy-booster="2">
                  Indonesia (+62)</option>
              <option value="IP" data-alternative-spellings="IP +883 iNum">iNum (+883)</option>
              <option value="IR" data-alternative-spellings="IR +98 Irán ?????">Iran, Islamic Republic
                  of (+98)</option>
              <option value="IQ" data-alternative-spellings="IQ +964 Irak ???????">Iraq (+964)</option>
              <option value="IE" data-alternative-spellings="IE +353 Irlanda Irlande Éire" data-relevancy-booster="1.2">
                  Ireland (+353)</option>
              <option value="IL" data-alternative-spellings="IL +972 Israël ??????? ?????">Israel
                  (+972)</option>
              <option value="IT" data-alternative-spellings="IT +39 Italia Italie" data-relevancy-booster="2">
                  Italy (+39)</option>
              <option value="JM" data-alternative-spellings="JM +1-876 +1876 Jamaïque">Jamaica (+1876)</option>
              <option value="JP" data-alternative-spellings="JP +81 Japón Japon Nippon Nihon ?? "
                  data-relevancy-booster="2.5">Japan (+81)</option>
              <option value="JO" data-alternative-spellings="JO +962 Jordania Jordanie ??????">Jordan
                  (+962)</option>
              <option value="KZ" data-alternative-spellings="KZ +7 Kazajistán ????????? ?????????">
                  Kazakhstan (+7)</option>
              <option value="KE" data-alternative-spellings="KE +254 Kenia">Kenya (+254)</option>
              <option value="KI" data-alternative-spellings="KI +686">Kiribati (+686)</option>
              <option value="KP" data-alternative-spellings="KP +850 Korea (Democratic People&#39;s Republic of) Corea (República Popular Democrática) Corée (République populaire démocratique)">
                  Korea, Democratic People's Republic of (+850)</option>
              <option value="KR" data-alternative-spellings="KR +82 Korea (Republic of) Corea (República de) Corée (République) South Korea"
                  data-relevancy-booster="1.5">Korea, Republic of (+82)</option>
              <option value="KW" data-alternative-spellings="KW +965 Koweït ??????">Kuwait (+965)</option>
              <option value="KG" data-alternative-spellings="KG +996 Kirguizistán Kirghizistan ??????????">
                  Kyrgyzstan (+996)</option>
              <option value="LA" data-alternative-spellings="LA +856 Laos">Lao People's Democratic
                  Republic (+856)</option>
              <option value="LV" data-alternative-spellings="LV +371 Letonia Lettonie Latvija">Latvia
                  (+371)</option>
              <option value="LB" data-alternative-spellings="LB +961 Líbano Liban ?????">Lebanon (+961)</option>
              <option value="LS" data-alternative-spellings="LS +266 Lesoto">Lesotho (+266)</option>
              <option value="LR" data-alternative-spellings="LR +231 Libéria">Liberia (+231)</option>
              <option value="LY" data-alternative-spellings="LY +218 Libia Libye ?????">Libyan Arab
                  Jamahiriya (+218)</option>
              <option value="LI" data-alternative-spellings="LI +423">Liechtenstein (+423)</option>
              <option value="LT" data-alternative-spellings="LT +370 Lituania Lituanie Lietuva">Lithuania
                  (+370)</option>
              <option value="LU" data-alternative-spellings="LU +352 Luxemburgo">Luxembourg (+352)</option>
              <option value="MO" data-alternative-spellings="MO +853 Macao, China Macao, China Macao, Chine">
                  Macao (+853)</option>
              <option value="MK" data-alternative-spellings="MK +389 Macédoine ??????????">Macedonia,
                  The Former Yugoslav Republic Of (+389)</option>
              <option value="MG" data-alternative-spellings="MG +261 Madagasikara">Madagascar (+261)</option>
              <option value="MW" data-alternative-spellings="MW +265">Malawi (+265)</option>
              <option value="MY" data-alternative-spellings="MY +60 Malasia Malaisie">Malaysia (+60)</option>
              <option value="MV" data-alternative-spellings="MV +960 Maldivas">Maldives (+960)</option>
              <option value="ML" data-alternative-spellings="ML +223 Malí">Mali (+223)</option>
              <option value="MT" data-alternative-spellings="MT +356 Malte">Malta (+356)</option>
              <option value="MH" data-alternative-spellings="MH +692 Islas Marshall Iles Marshall"
                  data-relevancy-booster="0.5">Marshall Islands (+692)</option>
              <option value="MQ" data-alternative-spellings="MQ +596 Martinica">Martinique (+596)</option>
              <option value="MR" data-alternative-spellings="MR +222 Mauritanie ???????????">Mauritania
                  (+222)</option>
              <option value="MU" data-alternative-spellings="MU +230 Mauricio Maurice">Mauritius (+230)</option>
              <option value="YT" data-alternative-spellings="YT +262">Mayotte (+262)</option>
              <option value="MX" data-alternative-spellings="MX +52 México Mexique" data-relevancy-booster="1.5">
                  Mexico (+52)</option>
              <option value="FM" data-alternative-spellings="FM +691 Micronésie">Micronesia, Federated
                  States of (+691)</option>
              <option value="MD" data-alternative-spellings="MD +373 Moldavia Moldavie">Moldova, Republic
                  of (+373)</option>
              <option value="MC" data-alternative-spellings="MC +377 Mónaco">Monaco (+377)</option>
              <option value="MN" data-alternative-spellings="MN +976 Mongolie">Mongolia (+976)</option>
              <option value="ME" data-alternative-spellings="ME +382 Monténégro">Montenegro (+382)</option>
              <option value="MS" data-alternative-spellings="MS +1-664 +1664" data-relevancy-booster="0.5">
                  Montserrat (+1664)</option>
              <option value="MA" data-alternative-spellings="MA +212 Marruecos Maroc">Morocco (+212)</option>
              <option value="MZ" data-alternative-spellings="MZ +258 Moçambique">Mozambique (+258)</option>
              <option value="MM" data-alternative-spellings="MM +95">Myanmar (+95)</option>
              <option value="NA" data-alternative-spellings="NA +264 Namibie Namibië">Namibia (+264)</option>
              <option value="NR" data-alternative-spellings="NR +674 Naoero" data-relevancy-booster="0.5">
                  Nauru (+674)</option>
              <option value="NP" data-alternative-spellings="NP +977 Népal ?????">Nepal (+977)</option>
              <option value="NL" data-alternative-spellings="NL +31 Netherlands Países Bajos Pays-Bas Holland"
                  data-relevancy-booster="1.5">Netherlands (+31)</option>
              <option value="NC" data-alternative-spellings="NC +687 Nueva Caledonia Nouvelle-Calédonie">
                  New Caledonia (+687)</option>
              <option value="NZ" data-alternative-spellings="NZ +64 Nueva Zelanda Nouvelle-Zélande Aotearoa">
                  New Zealand (+64)</option>
              <option value="NI" data-alternative-spellings="NI +505">Nicaragua (+505)</option>
              <option value="NE" data-alternative-spellings="NE +227 Níger Nijar">Niger (+227)</option>
              <option value="NG" data-alternative-spellings="NG +234 Nigéria Nijeriya Naíjíríà">Nigeria
                  (+234)</option>
              <option value="NU" data-alternative-spellings="NU +683 Nioué" data-relevancy-booster="0.5">
                  Niue (+683)</option>
              <option value="MP" data-alternative-spellings="MP +1-670 +1670 CNMI Islas Marianas del Norte Iles Mariannes du nord"
                  data-relevancy-booster="0.5">Northern Mariana Islands (+1670)</option>
              <option value="NO" data-alternative-spellings="NO +47 Noruega Norvège Norge Noreg"
                  data-relevancy-booster="1.5">Norway (+47)</option>
              <option value="OM" data-alternative-spellings="OM +968 Omán ????">Oman (+968)</option>
              <option value="PK" data-alternative-spellings="PK +92 Pakistán ???????" data-relevancy-booster="2">
                  Pakistan (+92)</option>
              <option value="PW" data-alternative-spellings="PW +680 Palaos" data-relevancy-booster="0.5">
                  Palau (+680)</option>
              <option value="PS" data-alternative-spellings="PS +970 Palestina ??????">Palestinian
                  Territory, Occupied (+970)</option>
              <option value="PA" data-alternative-spellings="PA +507 Panamá">Panama (+507)</option>
              <option value="PG" data-alternative-spellings="PG +675 Papúa Nueva Guinea Papouasie-Nouvelle-Guinée">
                  Papua New Guinea (+675)</option>
              <option value="PY" data-alternative-spellings="PY +595">Paraguay (+595)</option>
              <option value="PE" data-alternative-spellings="PE +51 Perú Pérou">Peru (+51)</option>
              <option value="PH" data-alternative-spellings="PH +63 Filipinas Pilipinas" data-relevancy-booster="1.5">
                  Philippines (+63)</option>
              <option value="PL" data-alternative-spellings="PL +48 Polonia Pologne Polska" data-relevancy-booster="1.25">
                  Poland (+48)</option>
              <option value="PT" data-alternative-spellings="PT +351 Portuguesa" data-relevancy-booster="1.5">
                  Portugal (+351)</option>
              <option value="PR" data-alternative-spellings="PR +1 Puerto Rico Porto Rico">Puerto
                  Rico (+1)</option>
              <option value="QA" data-alternative-spellings="QA +974 ???">Qatar (+974)</option>
              <option value="RE" data-alternative-spellings="RE +262 Reunion Reunión">Réunion (+262)</option>
              <option value="RO" data-alternative-spellings="RO +40 Rumanía Roumanie Rumania Roumania România">
                  Romania (+40)</option>
              <option value="RU" data-alternative-spellings="RU +7 Russia Rusia Russie Rossiya ?????????? ??????"
                  data-relevancy-booster="2.5">Russian Federation (+7)</option>
              <option value="RW" data-alternative-spellings="RW +250 Ruanda">Rwanda (+250)</option>
              <option value="SH" data-alternative-spellings="SH +290 Santa Elena Sainte-Hélène">Saint
                  Helena (+290)</option>
              <option value="LC" data-alternative-spellings="LC +1-758 +1758 Santa Lucía Sainte-Lucie">
                  Saint Lucia (+1758)</option>
              <option value="PM" data-alternative-spellings="PM +508 San Pedro y Miquelón Saint-Pierre et Miquelon">
                  Saint Pierre and Miquelon (+508)</option>
              <option value="VC" data-alternative-spellings="VC +1-784 +1784 San Vicente y las Granadinas Saint-Vincent-et-les-Grenadines">
                  Saint Vincent and the Grenadines (+1784)</option>
              <option value="WS" data-alternative-spellings="WS +685">Samoa (+685)</option>
              <option value="SM" data-alternative-spellings="SM +378 Saint-Marin">San Marino (+378)</option>
              <option value="ST" data-alternative-spellings="ST +239 Santo Tomé y Príncipe Sao Tomé-et-Principe">
                  Sao Tome and Principe (+239)</option>
              <option value="SA" data-alternative-spellings="SA +966 Arabia Saudí Arabie saoudite ????????">
                  Saudi Arabia (+966)</option>
              <option value="SN" data-alternative-spellings="SN +221 Sénégal">Senegal (+221)</option>
              <option value="RS" data-alternative-spellings="RS +381 Serbie ?????? Srbija">Serbia
                  (+381)</option>
              <option value="SC" data-alternative-spellings="SC +248" data-relevancy-booster="0.5">
                  Seychelles (+248)</option>
              <option value="SL" data-alternative-spellings="SL +232 Sierra Leona Sierre Leone">Sierra
                  Leone (+232)</option>
              <option value="SG" data-alternative-spellings="SG +65 Singapur Singapour Singapura  ??????????? ????????">
                  Singapore (+65)</option>
              <option value="SK" data-alternative-spellings="SK +421 Eslovaquia Slovaquie Slovenská Slovensko">
                  Slovakia (+421)</option>
              <option value="SI" data-alternative-spellings="SI +386 Eslovenia Slovénie Slovenija">
                  Slovenia (+386)</option>
              <option value="SB" data-alternative-spellings="SB +677 Islas Salomón Iles Salomon">Solomon
                  Islands (+677)</option>
              <option value="SO" data-alternative-spellings="SO +252 Somali Somalie ???????">Somalia
                  (+252)</option>
              <option value="ZA" data-alternative-spellings="ZA +27 Sudáfrica Afrique du Sud RSA Suid-Afrika">
                  South Africa (+27)</option>
              <option value="SS" data-alternative-spellings="SS +211">South Sudan (+211)</option>
              <option value="ES" data-alternative-spellings="ES +34 España Espagne" data-relevancy-booster="2">
                  Spain (+34)</option>
              <option value="LK" data-alternative-spellings="LK +94 ????? ???? ??????">Sri Lanka (+94)</option>
              <option value="SD" data-alternative-spellings="SD +249 Sudán Soudan ???????">Sudan (+249)</option>
              <option value="SR" data-alternative-spellings="SR +597 Surinam ?????? Sarnam Sranangron">
                  Suriname (+597)</option>
              <option value="SZ" data-alternative-spellings="SZ +268 Suazilandia weSwatini Swatini Ngwane">
                  Swaziland (+268)</option>
              <option value="SE" data-alternative-spellings="SE +46 Suecia Suède Sverige" data-relevancy-booster="1.5">
                  Sweden (+46)</option>
              <option value="CH" data-alternative-spellings="CH +41 Suiza Suisse Swiss Confederation Schweiz Suisse Svizzera"
                  data-relevancy-booster="1.5">Switzerland (+41)</option>
              <option value="SY" data-alternative-spellings="SY +963 Siria Syrie ?????">Syrian Arab
                  Republic (+963)</option>
              <option value="TW" data-alternative-spellings="TW +886 Taiwán Taïwan ?? ??">Taiwan (+886)</option>
              <option value="TJ" data-alternative-spellings="TJ +992 Tayikistán Tadjikistan ?????????? Toçikiston">
                  Tajikistan (+992)</option>
              <option value="TZ" data-alternative-spellings="TZ +255 Tanzanie (République unie)">Tanzania,
                  United Republic of (+255)</option>
              <option value="TH" data-alternative-spellings="TH +66 Tailandia Thaïlande ????????? Prathet Thai">
                  Thailand (+66)</option>
              <option value="TL" data-alternative-spellings="TL +670 Timor Oriental Timor oriental">
                  Timor-Leste (+670)</option>
              <option value="TG" data-alternative-spellings="TG +228">Togo (+228)</option>
              <option value="TK" data-alternative-spellings="TK +690" data-relevancy-booster="0.5">
                  Tokelau (+690)</option>
              <option value="TO" data-alternative-spellings="TO +676">Tonga (+676)</option>
              <option value="TT" data-alternative-spellings="TT +1-868 +1868 Trinidad y Tobago Trinité-et-Tobago">
                  Trinidad and Tobago (+1868)</option>
              <option value="TN" data-alternative-spellings="TN +216 Túnez Tunisie ????">Tunisia (+216)</option>
              <option value="TR" data-alternative-spellings="TR +90 Turquía Turquie Türkiye Turkiye">
                  Turkey (+90)</option>
              <option value="TM" data-alternative-spellings="TM +993 Turkmenistán Turkménistan Türkmenistan">
                  Turkmenistan (+993)</option>
              <option value="TC" data-alternative-spellings="TC +1-649 +1649 Turks &amp; Caicos Turcas y Caicos Turks &amp; Caicos (Iles)"
                  data-relevancy-booster="0.5">Turks and Caicos Islands (+1649)</option>
              <option value="TV" data-alternative-spellings="TV +688" data-relevancy-booster="0.5">
                  Tuvalu (+688)</option>
              <option value="UG" data-alternative-spellings="UG +256 Ouganda">Uganda (+256)</option>
              <option value="UA" data-alternative-spellings="UA +380 Ucrania Ukrayina ???????">Ukraine
                  (+380)</option>
              <option value="AE" data-alternative-spellings="AE +971 UAE Emirats Arabes Unis UAE ????????">
                  United Arab Emirates (+971)</option>
              <option value="GB" data-alternative-spellings="GB +44 Reino Unido Royaume-Uni Great Britain England UK Wales">
                  United Kingdom (+44)</option>
              <option value="US" data-number-format="(xxx) xxx-xxxx" data-alternative-spellings="US +1 USA United States of America Estados Unidos Etats-Unis"
                  data-relevancy-booster="3.5">United States (+1)</option>
              <option value="UY" data-alternative-spellings="UY +598">Uruguay (+598)</option>
              <option value="UZ" data-alternative-spellings="UZ +998 Uzbekistán Ouzbékistan ?????????? O&#39;zbekstan O‘zbekiston">
                  Uzbekistan (+998)</option>
              <option value="VU" data-alternative-spellings="VU +678">Vanuatu (+678)</option>
              <option value="VE" data-alternative-spellings="VE +58">Venezuela (+58)</option>
              <option value="VN" data-alternative-spellings="VN +84 Viet Nam">Vietnam (+84)</option>
              <option value="VG" data-alternative-spellings="VG +1-284 +1284 BVI Islas Vírgenes Británicas Iles Vierges britanniques"
                  data-relevancy-booster="0.5">Virgin Islands, British (+1284)</option>
              <option value="VI" data-alternative-spellings="VI +1-340 +1340 US Virgin Islands Islas Vírgenes de los Estados Unidos Iles Vierges américaines"
                  data-relevancy-booster="0.5">Virgin Islands, U.S. (+1340)</option>
              <option value="WF" data-alternative-spellings="WF +681 Wallis and Futuna Wallis y Futuna Iles Wallis-et-Futuna"
                  data-relevancy-booster="0.5">Wallis and Futuna (+681)</option>
              <option value="YE" data-alternative-spellings="YE +967 Yémen ?????">Yemen (+967)</option>
              <option value="ZM" data-alternative-spellings="ZM +260 Zambie">Zambia (+260)</option>
              <option value="ZW" data-alternative-spellings="ZW +263 Zimbabue">Zimbabwe (+263)</option>
                    </select>
                    
                    <?php if(form_error('phone_number')) { ?>
                    <input type="text" name="phone_number" class="leftcom"  style="color:red;border-color:red" value="<?php echo set_value('phone_number'); ?>" required="required" pattern="[0-9]+" />
                    <?php echo form_error('phone_number','<span style="color:red">','</span>'); ?>
                    <?php }else{ ?>
                    <input type="text" name="phone_number" value="<?php echo set_value('phone_number'); ?>" required="required" pattern="[0-9]+" />
                    <?php } ?>
                </div>
                
                <div>
                    <label>Create password</label>
                    
                    <?php if(form_error('password')) { ?>
                    <input type="password" name="password" style="color:red;border-color:red" required="required" />
                    <label>4-12 characters</label>
                    <?php echo form_error('password','<span style="color:red">','</span>'); ?>
                    <?php }else{ ?>
                     <input type="password" name="password" required="required" />
                    <label>4-12 characters</label>
                    
                    <?php } ?>           
                </div>
               
                <div>
                    <label>Confirm password</label>
                    
                    <?php if(form_error('confirm_password')) { ?>
                    <input type="password" name="confirm_password" required="required" style="border-color:red" />
                    <?php echo form_error('confirm_password','<span style="color:red">','</span>'); ?>
                    <?php }else{ ?>
                    <input type="password" name="confirm_password" required="required" />
                    <?php } ?>
                </div>
      
                <div>
                    <label>
                    </label>
                    <input type="checkbox" id="checkboxOneInput" required="required" />
                    <label for="checkboxOneInput">
                        <span>I agree to Chillitalk's Terms of services and privacy policy.
                   <!--  Note:15% VAT is added to all prices for EU citizens only.--></span>
                    </label>
                </div>
                <label></label>
                <button type="submit"  class="signupimg leftcaed" />sign-up</button>
            </form>
    	  </div>
        
    	</section>
    </div>
              
    <div id="iphone-android">
    
    <h3 id="store"> 
    2. Enter your phone number and we will send you a text message containing your Login details and a link to the Google Play Store</h3>
        
        <?php if(validation_errors()) { ?>
          <h3 class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo validation_errors(); ?>
          </h3>
        <?php } ?>
        
        <?php if($this->session->userdata('signup_failed')) { ?>
          <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $this->session->userdata('signup_failed'); ?>
          </div>
        <?php } ?>
                  
        <section>            
          <div class="appbgcl">
          
              <form name="frm-signup-mobile" id="frm-signup-mobile" 
              method="post" action="<?php echo base_url(); ?><?php echo $this->session->userdata('lang'); ?>/apps/invalid">
                 
                  <div>
                      <label>
                          Your Phone Number</label>
                   <select id="country" name="country" class="leftcom" required >
                        <option value="">Select Country</option>
              <option value="AF" data-alternative-spellings="AF +93 Afganistán ?????????">Afghanistan (+93)</option>
              <option value="AL" data-alternative-spellings="AL +355 Albanie">Albania ( +355)</option>
              <option value="AN" data-alternative-spellings="AN +599 Antillas Holandesas Antilles néerlandaises"
                  data-relevancy-booster="0.5">Netherlands Antilles (+599)</option>
              <option value="DZ" data-alternative-spellings="DZ +213 Argelia Algérie ???????">Algeria (+213)</option>
              <option value="AS" data-alternative-spellings="AS +1-684 +1684  Samoa Americana Samoa américaines"
                  data-relevancy-booster="0.5">American Samoa (+1684)</option>
              <option value="AD" data-alternative-spellings="AD +376 Andorre" data-relevancy-booster="0.5">
                  Andorra (+376)</option>
              <option value="AO" data-alternative-spellings="AO +244">Angola (+244)</option>
              <option value="AI" data-alternative-spellings="AI +1-264 +1264 Anguila" data-relevancy-booster="0.5">
                  Anguilla (+1264)</option>
              <option value="AQ" data-alternative-spellings="AQ +672 Antártida Antarctique" data-relevancy-booster="0.5">
                  Antarctica (+672)</option>
              <option value="AG" data-alternative-spellings="AG +1-268 +1268 Antigua y Barbuda Antigua-et-Barbuda"
                  data-relevancy-booster="0.5">Antigua And Barbuda (+1268)</option>
              <option value="AR" data-alternative-spellings="AR +54 Argentine">Argentina (+54)</option>
              <option value="AM" data-alternative-spellings="AM +374 Arménie">Armenia (+374)</option>
              <option value="AW" data-alternative-spellings="AW +297" data-relevancy-booster="0.5">
                  Aruba (+297)</option>
              <option value="AU" data-alternative-spellings="AU +61 Australie" data-relevancy-booster="1.5">
                  Australia (+61)</option>
              <option value="AT" data-alternative-spellings="AT +43 Autriche Österreich Osterreich Oesterreich">
                  Austria (+43)</option>
              <option value="AZ" data-alternative-spellings="AZ +994 Azerbaijani Republic República de Azerbaiyán République d&#39;Azerbaïdjan">
                  Azerbaijan (+994)</option>
              <option value="BS" data-alternative-spellings="BS +1-242 +1242">Bahamas (+1242)</option>
              <option value="BH" data-alternative-spellings="BH +973 Bahréin Bahreïn ???????">Bahrain
                  (+973)</option>
              <option value="BD" data-alternative-spellings="BD +880 ????????" data-relevancy-booster="2">
                  Bangladesh (+880)</option>
              <option value="BB" data-alternative-spellings="BB +1-246 +1246 Barbade">Barbados (+1246)</option>
              <option value="BY" data-alternative-spellings="BY +375 Bielorrusia Bélarus ????????">
                  Belarus (+375)</option>
              <option value="BE" data-alternative-spellings="BE +32 Bélgica Belgique België Belgie Belgien Belgique"
                  data-relevancy-booster="1.5">Belgium (+32)</option>
              <option value="BZ" data-alternative-spellings="BZ +501 Belice ">Belize (+501)</option>
              <option value="BJ" data-alternative-spellings="BJ +229 Benín Bénin">Benin (+229)</option>
              <option value="BM" data-alternative-spellings="BM +1-441 +1441 Bermudas Bermudes"
                  data-relevancy-booster="0.5">Bermuda (+1441)</option>
              <option value="BT" data-alternative-spellings="BT +975 Bután Bhoutan">Bhutan (+975)</option>
              <option value="BO" data-alternative-spellings="BO +591 Bolivie">Bolivia (+591)</option>
              <option value="BA" data-alternative-spellings="BA +387 Bosnia y Herzegovina Bosnie-Herzégovine ????? ? ???????????">
                  Bosnia and Herzegovina (+387)</option>

              <option value="BW" data-alternative-spellings="BW +267 Botsuana">Botswana (+267)</option>
              <option value="BR" data-alternative-spellings="BR +55 Brasil Brésil Brasil" data-relevancy-booster="2">
                  Brazil (+55)</option>
              <option value="BN" data-alternative-spellings="BN +673 Brunéi Darussalam">Brunei Darussalam
                  (+673)</option>
              <option value="BG" data-alternative-spellings="BG +359 Bulgarie ????????">Bulgaria (+359)</option>
              <option value="BF" data-alternative-spellings="BF +226">Burkina Faso (+226)</option>
              <option value="BI" data-alternative-spellings="BI +257">Burundi (+257)</option>
              <option value="KH" data-alternative-spellings="KH +855 Camboya Cambodge ???????">Cambodia
                  (+855)</option>
              <option value="CM" data-alternative-spellings="CM +237 Camerún Cameroun">Cameroon (+237)</option>
              <option value="CA" data-number-format="(xxx) xxx-xxxx" data-alternative-spellings="CA +1 Canadá"
                  data-relevancy-booster="2">Canada (+1)</option>
              <option value="CV" data-alternative-spellings="CV +238 Cabo Verde Cap-Vert">Cape Verde
                  (+238)</option>
              <option value="KY" data-alternative-spellings="KY 1-345 +1345 Islas Caimán Iles Caïmans"
                  data-relevancy-booster="0.5">Cayman Islands (+1345)</option>
              <option value="CF" data-alternative-spellings="CF +236 República Centroafricana République centrafricaine">
                  Central African Republic (+236)</option>
              <option value="TD" data-alternative-spellings="TD +235 Tchad ?????>">Chad (+235)</option>
              <option value="CL" data-alternative-spellings="CL +56 Chili">Chile (+56)</option>
              <option value="CN" data-alternative-spellings="CN +86 Chine Zhongguo Zhonghua">China
                  (+86)</option>
              <option value="CO" data-alternative-spellings="CO +57 Colombie">Colombia (+57)</option>
              <option value="KM" data-alternative-spellings="KM +269 Comoras Comores ???">Comoros
                  (+269)</option>
              <option value="CG" data-alternative-spellings="CG +242">Congo (+242)</option>
              <option value="CD" data-alternative-spellings="CD +243 Democratic Republic of the Congo República Democrática del Congo République Démocratique du Congo Congo-Brazzaville">
                  Congo, the Democratic Republic of the (+243)</option>
              <option value="CK" data-alternative-spellings="CK +682 Islas Cook Iles Cook" data-relevancy-booster="0.5">
                  Cook Islands (+682)</option>
              <option value="CR" data-alternative-spellings="CR +506">Costa Rica (+506)</option>
              <option value="CI" data-alternative-spellings="CI +225 Costa de Marfil">Côte d'Ivoire
                  (+225)</option>
              <option value="HR" data-alternative-spellings="HR +385 Croacia Croatie Hrvatska">Croatia
                  (+385)</option>
              <option value="CU" data-alternative-spellings="CU +53">Cuba (+53)</option>
              <option value="CY" data-alternative-spellings="CY +357 Chipre Chypre ??p??? Kýpros Kibris">
                  Cyprus (+357)</option>
              <option value="CZ" data-alternative-spellings="CZ +420 Czech República Checa République tchèque Ceská Ceska">
                  Czech Republic (+420)</option>
              <option value="DK" data-alternative-spellings="DK +45 Dinamarca Danemark">Denmark (+45)</option>
              <option value="DJ" data-alternative-spellings="DJ +253 ??????? Jabuuti Gabuuti">Djibouti
                  (+253)</option>
              <option value="DM" data-alternative-spellings="DM +1-767 +1767 Dominique Dominique">
                  Dominica (+1767)</option>
              <option value="DO" data-alternative-spellings="DO +1-809 +1809 República Dominicana République Dominicaine">
                  Dominican Republic (+1809)</option>
              <option value="EC" data-alternative-spellings="EC +593 Equateur">Ecuador (+593)</option>
              <option value="EG" data-alternative-spellings="EG +20 Egipto Egypte" data-relevancy-booster="1.5">
                  Egypt (+20)</option>
              <option value="SV" data-alternative-spellings="SV +503">El Salvador (+503)</option>
              <option value="GQ" data-alternative-spellings="GQ +240 Guinea Ecuatorial Guinée équatoriale">
                  Equatorial Guinea (+240)</option>
              <option value="ER" data-alternative-spellings="ER +291 Erythrée ?????? ????">Eritrea
                  (+291)</option>
              <option value="EE" data-alternative-spellings="EE +372 Estonie Eesti">Estonia (+372)</option>
              <option value="ET" data-alternative-spellings="ET +251 Etiopía Ethiopie ?????">Ethiopia
                  (+251)</option>
              <option value="FK" data-alternative-spellings="FK +500 Falkland Islands Islas Malvinas Iles Falkland"
                  data-relevancy-booster="0.5">Falkland Islands (Malvinas) (+500)</option>
              <option value="FO" data-alternative-spellings="FO +298 Islas Feroe Iles Féroé Føroyar Færøerne"
                  data-relevancy-booster="0.5">Faroe Islands (+298)</option>
              <option value="FJ" data-alternative-spellings="FJ +679 Fidji Viti ?????">Fiji (+679)</option>
              <option value="FI" data-alternative-spellings="FI +358 Finlandia Finlande Suomi">Finland
                  (+358)</option>
              <option value="FR" data-alternative-spellings="FR +33 Francia" data-relevancy-booster="2.5">
                  France (+33)</option>
              <option value="GF" data-alternative-spellings="GF +594 Guayana Francesa Guyane">French
                  Guiana (+594)</option>
              <option value="PF" data-alternative-spellings="PF +689 Polinesia Francesa Polynésie française">
                  French Polynesia (+689)</option>
              <option value="GA" data-alternative-spellings="GA +241 Gabonese Republic República Gabonesa Gabon République Gabonaise">
                  Gabon (+241)</option>
              <option value="GM" data-alternative-spellings="GM +220 Gambie">Gambia (+220)</option>
              <option value="GE" data-alternative-spellings="GE +995 Georgie ??????????">Georgia (+995)</option>
              <option value="DE" data-alternative-spellings="DE +49 Alemania Allemagne Bundesrepublik">
                  Germany (+49)</option>
              <option value="GH" data-alternative-spellings="GH +233">Ghana (+233)</option>
              <option value="GI" data-alternative-spellings="GI +350" data-relevancy-booster="0.5">
                  Gibraltar (+350)</option>
              <option value="GR" data-alternative-spellings="GR +30 Grecia Grèce ????da">Greece (+30)</option>
              <option value="GL" data-alternative-spellings="GL +299 Groenlandia Groenland grønland">
                  Greenland (+299)</option>
              <option value="GD" data-alternative-spellings="GD +1-473 +1473 Granada Grenade">Grenada
                  (+1473)</option>
              <option value="GP" data-alternative-spellings="GP +590 Guadalupe">Guadeloupe (+590)</option>
              <option value="GU" data-alternative-spellings="GU +1-671 +1671">Guam (+1671)</option>
              <option value="GT" data-alternative-spellings="GT +502">Guatemala (+502)</option>
              <option value="GN" data-alternative-spellings="GN +224 Guinée">Guinea (+224)</option>
              <option value="GW" data-alternative-spellings="GW +245 Guinée-Bissau">Guinea-Bissau
                  (+245)</option>
              <option value="GY" data-alternative-spellings="GY +592">Guyana (+592)</option>
              <option value="HT" data-alternative-spellings="HT +509 Haití Haïti">Haiti (+509)</option>
              <option value="VA" data-alternative-spellings="VA +39 Vaticano">Holy See (Vatican City
                  State) (+39)</option>
              <option value="HN" data-alternative-spellings="HN +504">Honduras (+504)</option>
              <option value="HK" data-alternative-spellings="HK +852 Hongkong, China Hongkong, China Hong Kong, Chine ??">
                  Hong Kong (+852)</option>
              <option value="HU" data-alternative-spellings="HU +36 Hungría Hongrie Magyarország">
                  Hungary (+36)</option>
              <option value="IS" data-alternative-spellings="IS +354 Islandia Islande Island">Iceland
                  (+354)</option>
              <option value="IN" data-alternative-spellings="IN +91 Inde ???? ??????? Hindustan"
                  data-relevancy-booster="3">India (+91)</option>
              <option value="ID" data-alternative-spellings="ID +62 Indonésie" data-relevancy-booster="2">
                  Indonesia (+62)</option>
              <option value="IP" data-alternative-spellings="IP +883 iNum">iNum (+883)</option>
              <option value="IR" data-alternative-spellings="IR +98 Irán ?????">Iran, Islamic Republic
                  of (+98)</option>
              <option value="IQ" data-alternative-spellings="IQ +964 Irak ???????">Iraq (+964)</option>
              <option value="IE" data-alternative-spellings="IE +353 Irlanda Irlande Éire" data-relevancy-booster="1.2">
                  Ireland (+353)</option>
              <option value="IL" data-alternative-spellings="IL +972 Israël ??????? ?????">Israel
                  (+972)</option>
              <option value="IT" data-alternative-spellings="IT +39 Italia Italie" data-relevancy-booster="2">
                  Italy (+39)</option>
              <option value="JM" data-alternative-spellings="JM +1-876 +1876 Jamaïque">Jamaica (+1876)</option>
              <option value="JP" data-alternative-spellings="JP +81 Japón Japon Nippon Nihon ?? "
                  data-relevancy-booster="2.5">Japan (+81)</option>
              <option value="JO" data-alternative-spellings="JO +962 Jordania Jordanie ??????">Jordan
                  (+962)</option>
              <option value="KZ" data-alternative-spellings="KZ +7 Kazajistán ????????? ?????????">
                  Kazakhstan (+7)</option>
              <option value="KE" data-alternative-spellings="KE +254 Kenia">Kenya (+254)</option>
              <option value="KI" data-alternative-spellings="KI +686">Kiribati (+686)</option>
              <option value="KP" data-alternative-spellings="KP +850 Korea (Democratic People&#39;s Republic of) Corea (República Popular Democrática) Corée (République populaire démocratique)">
                  Korea, Democratic People's Republic of (+850)</option>
              <option value="KR" data-alternative-spellings="KR +82 Korea (Republic of) Corea (República de) Corée (République) South Korea"
                  data-relevancy-booster="1.5">Korea, Republic of (+82)</option>
              <option value="KW" data-alternative-spellings="KW +965 Koweït ??????">Kuwait (+965)</option>
              <option value="KG" data-alternative-spellings="KG +996 Kirguizistán Kirghizistan ??????????">
                  Kyrgyzstan (+996)</option>
              <option value="LA" data-alternative-spellings="LA +856 Laos">Lao People's Democratic
                  Republic (+856)</option>
              <option value="LV" data-alternative-spellings="LV +371 Letonia Lettonie Latvija">Latvia
                  (+371)</option>
              <option value="LB" data-alternative-spellings="LB +961 Líbano Liban ?????">Lebanon (+961)</option>
              <option value="LS" data-alternative-spellings="LS +266 Lesoto">Lesotho (+266)</option>
              <option value="LR" data-alternative-spellings="LR +231 Libéria">Liberia (+231)</option>
              <option value="LY" data-alternative-spellings="LY +218 Libia Libye ?????">Libyan Arab
                  Jamahiriya (+218)</option>
              <option value="LI" data-alternative-spellings="LI +423">Liechtenstein (+423)</option>
              <option value="LT" data-alternative-spellings="LT +370 Lituania Lituanie Lietuva">Lithuania
                  (+370)</option>
              <option value="LU" data-alternative-spellings="LU +352 Luxemburgo">Luxembourg (+352)</option>
              <option value="MO" data-alternative-spellings="MO +853 Macao, China Macao, China Macao, Chine">
                  Macao (+853)</option>
              <option value="MK" data-alternative-spellings="MK +389 Macédoine ??????????">Macedonia,
                  The Former Yugoslav Republic Of (+389)</option>
              <option value="MG" data-alternative-spellings="MG +261 Madagasikara">Madagascar (+261)</option>
              <option value="MW" data-alternative-spellings="MW +265">Malawi (+265)</option>
              <option value="MY" data-alternative-spellings="MY +60 Malasia Malaisie">Malaysia (+60)</option>
              <option value="MV" data-alternative-spellings="MV +960 Maldivas">Maldives (+960)</option>
              <option value="ML" data-alternative-spellings="ML +223 Malí">Mali (+223)</option>
              <option value="MT" data-alternative-spellings="MT +356 Malte">Malta (+356)</option>
              <option value="MH" data-alternative-spellings="MH +692 Islas Marshall Iles Marshall"
                  data-relevancy-booster="0.5">Marshall Islands (+692)</option>
              <option value="MQ" data-alternative-spellings="MQ +596 Martinica">Martinique (+596)</option>
              <option value="MR" data-alternative-spellings="MR +222 Mauritanie ???????????">Mauritania
                  (+222)</option>
              <option value="MU" data-alternative-spellings="MU +230 Mauricio Maurice">Mauritius (+230)</option>
              <option value="YT" data-alternative-spellings="YT +262">Mayotte (+262)</option>
              <option value="MX" data-alternative-spellings="MX +52 México Mexique" data-relevancy-booster="1.5">
                  Mexico (+52)</option>
              <option value="FM" data-alternative-spellings="FM +691 Micronésie">Micronesia, Federated
                  States of (+691)</option>
              <option value="MD" data-alternative-spellings="MD +373 Moldavia Moldavie">Moldova, Republic
                  of (+373)</option>
              <option value="MC" data-alternative-spellings="MC +377 Mónaco">Monaco (+377)</option>
              <option value="MN" data-alternative-spellings="MN +976 Mongolie">Mongolia (+976)</option>
              <option value="ME" data-alternative-spellings="ME +382 Monténégro">Montenegro (+382)</option>
              <option value="MS" data-alternative-spellings="MS +1-664 +1664" data-relevancy-booster="0.5">
                  Montserrat (+1664)</option>
              <option value="MA" data-alternative-spellings="MA +212 Marruecos Maroc">Morocco (+212)</option>
              <option value="MZ" data-alternative-spellings="MZ +258 Moçambique">Mozambique (+258)</option>
              <option value="MM" data-alternative-spellings="MM +95">Myanmar (+95)</option>
              <option value="NA" data-alternative-spellings="NA +264 Namibie Namibië">Namibia (+264)</option>
              <option value="NR" data-alternative-spellings="NR +674 Naoero" data-relevancy-booster="0.5">
                  Nauru (+674)</option>
              <option value="NP" data-alternative-spellings="NP +977 Népal ?????">Nepal (+977)</option>
              <option value="NL" data-alternative-spellings="NL +31 Netherlands Países Bajos Pays-Bas Holland"
                  data-relevancy-booster="1.5">Netherlands (+31)</option>
              <option value="NC" data-alternative-spellings="NC +687 Nueva Caledonia Nouvelle-Calédonie">
                  New Caledonia (+687)</option>
              <option value="NZ" data-alternative-spellings="NZ +64 Nueva Zelanda Nouvelle-Zélande Aotearoa">
                  New Zealand (+64)</option>
              <option value="NI" data-alternative-spellings="NI +505">Nicaragua (+505)</option>
              <option value="NE" data-alternative-spellings="NE +227 Níger Nijar">Niger (+227)</option>
              <option value="NG" data-alternative-spellings="NG +234 Nigéria Nijeriya Naíjíríà">Nigeria
                  (+234)</option>
              <option value="NU" data-alternative-spellings="NU +683 Nioué" data-relevancy-booster="0.5">
                  Niue (+683)</option>
              <option value="MP" data-alternative-spellings="MP +1-670 +1670 CNMI Islas Marianas del Norte Iles Mariannes du nord"
                  data-relevancy-booster="0.5">Northern Mariana Islands (+1670)</option>
              <option value="NO" data-alternative-spellings="NO +47 Noruega Norvège Norge Noreg"
                  data-relevancy-booster="1.5">Norway (+47)</option>
              <option value="OM" data-alternative-spellings="OM +968 Omán ????">Oman (+968)</option>
              <option value="PK" data-alternative-spellings="PK +92 Pakistán ???????" data-relevancy-booster="2">
                  Pakistan (+92)</option>
              <option value="PW" data-alternative-spellings="PW +680 Palaos" data-relevancy-booster="0.5">
                  Palau (+680)</option>
              <option value="PS" data-alternative-spellings="PS +970 Palestina ??????">Palestinian
                  Territory, Occupied (+970)</option>
              <option value="PA" data-alternative-spellings="PA +507 Panamá">Panama (+507)</option>
              <option value="PG" data-alternative-spellings="PG +675 Papúa Nueva Guinea Papouasie-Nouvelle-Guinée">
                  Papua New Guinea (+675)</option>
              <option value="PY" data-alternative-spellings="PY +595">Paraguay (+595)</option>
              <option value="PE" data-alternative-spellings="PE +51 Perú Pérou">Peru (+51)</option>
              <option value="PH" data-alternative-spellings="PH +63 Filipinas Pilipinas" data-relevancy-booster="1.5">
                  Philippines (+63)</option>
              <option value="PL" data-alternative-spellings="PL +48 Polonia Pologne Polska" data-relevancy-booster="1.25">
                  Poland (+48)</option>
              <option value="PT" data-alternative-spellings="PT +351 Portuguesa" data-relevancy-booster="1.5">
                  Portugal (+351)</option>
              <option value="PR" data-alternative-spellings="PR +1 Puerto Rico Porto Rico">Puerto
                  Rico (+1)</option>
              <option value="QA" data-alternative-spellings="QA +974 ???">Qatar (+974)</option>
              <option value="RE" data-alternative-spellings="RE +262 Reunion Reunión">Réunion (+262)</option>
              <option value="RO" data-alternative-spellings="RO +40 Rumanía Roumanie Rumania Roumania România">
                  Romania (+40)</option>
              <option value="RU" data-alternative-spellings="RU +7 Russia Rusia Russie Rossiya ?????????? ??????"
                  data-relevancy-booster="2.5">Russian Federation (+7)</option>
              <option value="RW" data-alternative-spellings="RW +250 Ruanda">Rwanda (+250)</option>
              <option value="SH" data-alternative-spellings="SH +290 Santa Elena Sainte-Hélène">Saint
                  Helena (+290)</option>
              <option value="LC" data-alternative-spellings="LC +1-758 +1758 Santa Lucía Sainte-Lucie">
                  Saint Lucia (+1758)</option>
              <option value="PM" data-alternative-spellings="PM +508 San Pedro y Miquelón Saint-Pierre et Miquelon">
                  Saint Pierre and Miquelon (+508)</option>
              <option value="VC" data-alternative-spellings="VC +1-784 +1784 San Vicente y las Granadinas Saint-Vincent-et-les-Grenadines">
                  Saint Vincent and the Grenadines (+1784)</option>
              <option value="WS" data-alternative-spellings="WS +685">Samoa (+685)</option>
              <option value="SM" data-alternative-spellings="SM +378 Saint-Marin">San Marino (+378)</option>
              <option value="ST" data-alternative-spellings="ST +239 Santo Tomé y Príncipe Sao Tomé-et-Principe">
                  Sao Tome and Principe (+239)</option>
              <option value="SA" data-alternative-spellings="SA +966 Arabia Saudí Arabie saoudite ????????">
                  Saudi Arabia (+966)</option>
              <option value="SN" data-alternative-spellings="SN +221 Sénégal">Senegal (+221)</option>
              <option value="RS" data-alternative-spellings="RS +381 Serbie ?????? Srbija">Serbia
                  (+381)</option>
              <option value="SC" data-alternative-spellings="SC +248" data-relevancy-booster="0.5">
                  Seychelles (+248)</option>
              <option value="SL" data-alternative-spellings="SL +232 Sierra Leona Sierre Leone">Sierra
                  Leone (+232)</option>
              <option value="SG" data-alternative-spellings="SG +65 Singapur Singapour Singapura  ??????????? ????????">
                  Singapore (+65)</option>
              <option value="SK" data-alternative-spellings="SK +421 Eslovaquia Slovaquie Slovenská Slovensko">
                  Slovakia (+421)</option>
              <option value="SI" data-alternative-spellings="SI +386 Eslovenia Slovénie Slovenija">
                  Slovenia (+386)</option>
              <option value="SB" data-alternative-spellings="SB +677 Islas Salomón Iles Salomon">Solomon
                  Islands (+677)</option>
              <option value="SO" data-alternative-spellings="SO +252 Somali Somalie ???????">Somalia
                  (+252)</option>
              <option value="ZA" data-alternative-spellings="ZA +27 Sudáfrica Afrique du Sud RSA Suid-Afrika">
                  South Africa (+27)</option>
              <option value="SS" data-alternative-spellings="SS +211">South Sudan (+211)</option>
              <option value="ES" data-alternative-spellings="ES +34 España Espagne" data-relevancy-booster="2">
                  Spain (+34)</option>
              <option value="LK" data-alternative-spellings="LK +94 ????? ???? ??????">Sri Lanka (+94)</option>
              <option value="SD" data-alternative-spellings="SD +249 Sudán Soudan ???????">Sudan (+249)</option>
              <option value="SR" data-alternative-spellings="SR +597 Surinam ?????? Sarnam Sranangron">
                  Suriname (+597)</option>
              <option value="SZ" data-alternative-spellings="SZ +268 Suazilandia weSwatini Swatini Ngwane">
                  Swaziland (+268)</option>
              <option value="SE" data-alternative-spellings="SE +46 Suecia Suède Sverige" data-relevancy-booster="1.5">
                  Sweden (+46)</option>
              <option value="CH" data-alternative-spellings="CH +41 Suiza Suisse Swiss Confederation Schweiz Suisse Svizzera"
                  data-relevancy-booster="1.5">Switzerland (+41)</option>
              <option value="SY" data-alternative-spellings="SY +963 Siria Syrie ?????">Syrian Arab
                  Republic (+963)</option>
              <option value="TW" data-alternative-spellings="TW +886 Taiwán Taïwan ?? ??">Taiwan (+886)</option>
              <option value="TJ" data-alternative-spellings="TJ +992 Tayikistán Tadjikistan ?????????? Toçikiston">
                  Tajikistan (+992)</option>
              <option value="TZ" data-alternative-spellings="TZ +255 Tanzanie (République unie)">Tanzania,
                  United Republic of (+255)</option>
              <option value="TH" data-alternative-spellings="TH +66 Tailandia Thaïlande ????????? Prathet Thai">
                  Thailand (+66)</option>
              <option value="TL" data-alternative-spellings="TL +670 Timor Oriental Timor oriental">
                  Timor-Leste (+670)</option>
              <option value="TG" data-alternative-spellings="TG +228">Togo (+228)</option>
              <option value="TK" data-alternative-spellings="TK +690" data-relevancy-booster="0.5">
                  Tokelau (+690)</option>
              <option value="TO" data-alternative-spellings="TO +676">Tonga (+676)</option>
              <option value="TT" data-alternative-spellings="TT +1-868 +1868 Trinidad y Tobago Trinité-et-Tobago">
                  Trinidad and Tobago (+1868)</option>
              <option value="TN" data-alternative-spellings="TN +216 Túnez Tunisie ????">Tunisia (+216)</option>
              <option value="TR" data-alternative-spellings="TR +90 Turquía Turquie Türkiye Turkiye">
                  Turkey (+90)</option>
              <option value="TM" data-alternative-spellings="TM +993 Turkmenistán Turkménistan Türkmenistan">
                  Turkmenistan (+993)</option>
              <option value="TC" data-alternative-spellings="TC +1-649 +1649 Turks &amp; Caicos Turcas y Caicos Turks &amp; Caicos (Iles)"
                  data-relevancy-booster="0.5">Turks and Caicos Islands (+1649)</option>
              <option value="TV" data-alternative-spellings="TV +688" data-relevancy-booster="0.5">
                  Tuvalu (+688)</option>
              <option value="UG" data-alternative-spellings="UG +256 Ouganda">Uganda (+256)</option>
              <option value="UA" data-alternative-spellings="UA +380 Ucrania Ukrayina ???????">Ukraine
                  (+380)</option>
              <option value="AE" data-alternative-spellings="AE +971 UAE Emirats Arabes Unis UAE ????????">
                  United Arab Emirates (+971)</option>
              <option value="GB" data-alternative-spellings="GB +44 Reino Unido Royaume-Uni Great Britain England UK Wales">
                  United Kingdom (+44)</option>
              <option value="US" data-number-format="(xxx) xxx-xxxx" data-alternative-spellings="US +1 USA United States of America Estados Unidos Etats-Unis"
                  data-relevancy-booster="3.5">United States (+1)</option>
              <option value="UY" data-alternative-spellings="UY +598">Uruguay (+598)</option>
              <option value="UZ" data-alternative-spellings="UZ +998 Uzbekistán Ouzbékistan ?????????? O&#39;zbekstan O‘zbekiston">
                  Uzbekistan (+998)</option>
              <option value="VU" data-alternative-spellings="VU +678">Vanuatu (+678)</option>
              <option value="VE" data-alternative-spellings="VE +58">Venezuela (+58)</option>
              <option value="VN" data-alternative-spellings="VN +84 Viet Nam">Vietnam (+84)</option>
              <option value="VG" data-alternative-spellings="VG +1-284 +1284 BVI Islas Vírgenes Británicas Iles Vierges britanniques"
                  data-relevancy-booster="0.5">Virgin Islands, British (+1284)</option>
              <option value="VI" data-alternative-spellings="VI +1-340 +1340 US Virgin Islands Islas Vírgenes de los Estados Unidos Iles Vierges américaines"
                  data-relevancy-booster="0.5">Virgin Islands, U.S. (+1340)</option>
              <option value="WF" data-alternative-spellings="WF +681 Wallis and Futuna Wallis y Futuna Iles Wallis-et-Futuna"
                  data-relevancy-booster="0.5">Wallis and Futuna (+681)</option>
              <option value="YE" data-alternative-spellings="YE +967 Yémen ?????">Yemen (+967)</option>
              <option value="ZM" data-alternative-spellings="ZM +260 Zambie">Zambia (+260)</option>
              <option value="ZW" data-alternative-spellings="ZW +263 Zimbabue">Zimbabwe (+263)</option>
                    </select>
                    
                      <input type="text" name="phone_number" required="required" pattern="[0-9]{5,}" />
                      <input type="hidden" name="device" id="device" value="iphone" />
                  </div>
                  <label></label>
                
                  <button type="submit" class="signupimg leftcaed">sign-up</button>
              </form>
       </div>
              
    
     </section>
    </div>
  </div>
 
  <script type="text/javascript">
	$(document).ready(function() {
    
    var pass = $('#password').val();
    var conf_pass = $('#confirm_password').val();
	
    
    $('#confirm_password').change(function() {
      
	  if(pass != conf_pass){
        $("#confirm_password").setCustomValidity("Passwords Don't Match");
		alert('mp');
      }
	  
    });
    
    
    $('#iphone-android').hide();
      $('#iphone').hide();
		
		if(window.location.href == '<?php echo base_url().$this->session->userdata('lang'); ?>/sign_up#android') {
			$('#img_landline').attr('src','<?php echo get_template_directory_uri(); ?>/img/landlineandmobile.jpg');
			$('#img_android').attr('src','<?php echo get_template_directory_uri(); ?>/img/android_select.png');
			$('#landline').hide();
			$('#iphone-android').show();
			$('#iphone').hide();
		}
		
		if(window.location.href == '<?php echo base_url().$this->session->userdata('lang'); ?>/sign_up#iphone') {
			$('#img_landline').attr('src','<?php echo get_template_directory_uri(); ?>/img/landlineandmobile.jpg');
			$('#img_iPhone').attr('src','<?php echo get_template_directory_uri(); ?>/img/iphone_select.png');
			$('#landline').hide();
			$('#iphone-android').hide();
			$('#iphone').show();
		}
		
		$('#tim1').on('change', function() {
			$('#landline').show();
			 $('#iphone').hide();
			$('#iphone-android').hide();
			
		});
		
				
		$('#tim2').on('change', function() {
			$('#landline').hide();
			$('#iphone-android').show();
			$('#iphone').hide();
			$('#device').val('android');
			$('#store').text('2. Enter your phone number and we will send you a text message containing your Login details and a link to the Google Play Store');
		});
		
		$('#tim3').on('change', function() {
			$('#landline').hide();
			$('#iphone-android').hide();
			$('#iphone').show();
			$('#device').val('iphone');
			$('#img_landline').attr('src','<?php echo get_template_directory_uri(); ?>/img/landlineandmobile.jpg');
			$('#img_android').attr('src','<?php echo get_template_directory_uri(); ?>/img/android.png');
		
				
		});
		
		$('#tim4').on('change', function() {
			$('#landline').hide();
			$('#iphone-android').hide();
			$('#iphone').hide();
			$('#img_landline').attr('src','<?php echo get_template_directory_uri(); ?>/img/landlineandmobile.jpg');
			$('#img_android').attr('src','<?php echo get_template_directory_uri(); ?>/img/android.png');
		});
		
    });
  </script>
<style type="text/css">
   #signupat {
    background-image: 
	url("http://mundio-test.azurewebsites.net/wp-content/themes/new_chillitalk/img/signupnew.png") !important}

.signupe a {
    background-image: url("http://mundio-test.azurewebsites.net/wp-content/themes/new_chillitalk/img/signupin.png") !important;
    background-repeat: no-repeat !important;
    color: #FFFFFF !important;
    height: 30px;
    text-indent: 20px;
    width: 115px;
}
#landline h3{

text-align: justify;
width: 700px;
text-indent: 0px;
}
.txtgreen
{
background-color:#6ea600 !important;
height: 34px;
}
.txtgreen li a,.topclass select,.topclass section
{
 display:none !important;

}
#radios1 img {
    margin: -22px 33px -7px 0;
}
</style>
