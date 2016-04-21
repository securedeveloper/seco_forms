<?php
if (!function_exists('init_seco_forms')) {

    function init_seco_forms() {
        defined('SECO_FORMS_PATH_DOCX') or define('SECO_FORMS_PATH_DOCX', dirname(__FILE__) . '/');
        defined('SECO_FORMS_PATH_HTTP') or define('SECO_FORMS_PATH_HTTP', 'http://localhost:90/sf/');

        if (!defined('SECO_FORMS_PATH_DOCX'))
            die('Seco forms Forbidden');

        require_once SECO_FORMS_PATH_DOCX . '' . 'functions.php';
    }

}

if (!function_exists('load_seco_resources')) {

    function load_seco_resources() {
        ?>
        <link href="<?= SECO_FORMS_PATH_HTTP ?>css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <link href="<?= SECO_FORMS_PATH_HTTP ?>css/jquery-ui.css" rel="stylesheet" />
        <link href="<?= SECO_FORMS_PATH_HTTP ?>css/seco_forms.css" rel="stylesheet" />
        <script src="<?= SECO_FORMS_PATH_HTTP ?>js/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="<?= SECO_FORMS_PATH_HTTP ?>js/jquery-ui.js" type="text/javascript"></script>
        <script src="<?= SECO_FORMS_PATH_HTTP ?>js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        <script src="<?= SECO_FORMS_PATH_HTTP ?>js/seco_forms.js"></script>
        <script>
            var SF = new SECOFORMS('<?= SECO_FORMS_PATH_HTTP ?>');
            SF.initialize(SF);
        </script>
        <?php
    }

}

if (!function_exists('create_seco_form')) {

    function create_seco_form() {
        ?>
        <?php
        load_seco_resources();
        ?>
        <br>
        <div class="container-fluid">
            <form>
                <div class="col-sm-12" style="">
                    <div class="col-sm-12">
                        <div class="col-sm-6" style="background-color: #FFF; min-height: 450px;">
                            <div id="build">
                                <div class="form-control-static">
                                    <label for="seco_form_name" class="col-sm-3">Form Name</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" id="seco_form_id" name="seco_form_id" value="">
                                        <input type="text" id="seco_form_name" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div id="target" class="form-horizontal text-center" style="padding:1em;">
                                        <div id="sec_form_element_list" style="margin-top:5px; margin-bottom: 5px;">
                                            <div class="formelement last" style="clear:both;width:100%; background-color:#ccc; text-align: center; padding: 1em;"><p>Drop new fields here</p></div>
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="hashwork">
                                                                                                                                                                                                                                                                                                                                                                Here...
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="background-color:#f9f9f9; border-left:1px solid #cfcfcf; min-height: 450px;">
                            <div>
                                <ul class="nav nav-tabs" role="tablist" style="margin: 0">
                                    <li class="active"><a id="secoFormOption1" href="#secoFormBuilderComponents" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span> Fields</a></li>
                                    <li class=""><a id="secoFormOption2" href="#secoFormPropertiesContainer" data-toggle="tab"><span class="glyphicon glyphicon glyphicon-cog"></span> Field Settings</a></li>
                                </ul>
                                <div id="formBuilderContainer" class="tab-content">
                                    <div class="tab-pane active" id="secoFormBuilderComponents">
                                        <br>
                                        <div class="tabbable">
                                            <div class="form-horizontal" id="components">
                                                <fieldset>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active rednaotablist" id="tabinput" style="display: block;">

                                                            <div id="seco_tools">
                                                                <div id="seco_tools_catalog">
                                                                    <h2><a href="#">Basic Input</a></h2>
                                                                    <div>
                                                                        <ul>
                                                                            <li>
                                                                                <!-- TEXT INPUT -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="text_input">
                                                                                        <div class="col-sm-3">
                                                                                            <label for="txtInput">Text Input</label>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <input style="" id="txtField" name="txtInput" type="text" placeholder="Placeholder" class="form-control" value="" />
                                                                                        </div>
                                                                                     </div>
                                                                                </div>
                                                                                <!-- //TEXT INPUT -->
                                                                            </li>
                                                                            <li>
                                                                                <!-- PREPEND TEXT -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="prepend_text">
                                                                                        <div class="col-sm-3">
                                                                                            <label for="prependedtext">Prepend Text</label>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon prefix">Prepend</span>
                                                                                                <input style="" id="prependedtext" name="prependedtext" class="form-control" placeholder="Placeholder" type="text" value="" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //PREPEND TEXT -->
                                                                            </li>
                                                                            <li>
                                                                                <!-- APPEND TEXT -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="appended_text">
                                                                                        <div class="col-sm-3">
                                                                                            <label for="appendedtext">Appended Text</label>
                                                                                        </div>
                                                                                        <div class="col-sm-9 ">
                                                                                            <div class="input-group">
                                                                                                <input style="" id="appendedtext" name="appendedtext" placeholder="Placeholder" type="text" class="form-control" value="" />
                                                                                                <span class="input-group-addon">Append</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //APPEND TEXT -->
                                                                            </li>
                                                                            <li>
                                                                                <!-- Prepend CheckBox -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="prepend_checkbox">
                                                                                        <div class="col-sm-3">
                                                                                            <label for="prependedcheckbox">Prepend Checkbox</label>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <div class="input-prepend input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <input type="checkbox" class="secoCheckBox" name="prependedcheckboxOption" id="prependedcheckboxOption" value="" />
                                                                                                </span>
                                                                                                <input style="" id="prependedcheckbox" name="prependedcheckbox" class="form-control" type="text" placeholder="Placeholder" value="" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //Prepend CheckBox -->
                                                                            </li>
                                                                            <li>
                                                                                <!-- Append CheckBox -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="append_checkbox">
                                                                                        <div class="col-sm-3">
                                                                                            <label for="appendedcheckbox">Append Checkbox</label>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <div class="input-group">
                                                                                                <input style="" id="appendedcheckbox" class="form-control" name="appendedcheckbox" type="text" placeholder="Placeholder" value="" />
                                                                                                <span class="input-group-addon">
                                                                                                    <input type="checkbox" class="secoCheckBox" name="appendedcheckboxOption" id="appendedcheckboxOption" value="" />
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //Append CheckBox -->
                                                                            </li>
                                                                            <li>
                                                                                <!-- Textarea -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="text_area">
                                                                                        <div class="col-sm-3">
                                                                                            <label for="textarea">Text Area</label>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <textarea placeholder="Placeholder" style="" id="textarea" name="textarea" class="form-control"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //Textarea -->
                                                                            </li>
                                                                            <li>
                                                                                <!-- Date -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="date">
                                                                                        <div class="col-sm-3">
                                                                                            <label>Date</label>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text" class="form-control datepicker" id="date" name="date" placeholder="" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //Date -->
                                                                            </li>
                                                                            <li>
                                                                                <!-- SUBMIT BUTTON -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="submit">
                                                                                        <div class="col-sm-3"></div>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="submit" value="Submit" name="btnSubmit" id="btnSubmit" class="btn btn-primary" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //SUBMIT BUTTON -->
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!--                                                                    <h2><a href="#">Advanced</a></h2>
                                                                                                                                        <div>
                                                                                                                                            <ul>
                                                                                                                                                <li>
                                                                                                                                                     NAME 
                                                                                                                                                    <div class="component">
                                                                                                                                                        <div class="rednao-control-group form-group row rednaoname col-sm-12  " id="rnField15"><div class="rednao_label_container col-sm-3"><label class="rednao_control_label">Name</label></div><div class="redNaoControls col-sm-9"><div class="form-inline "><div class="redNaoFirstNameDiv redNaoTwoColumnsDiv form-group col-sm-6"><input name="Name_firstname" type="text" placeholder="First Name" class="form-control redNaoInputText redNaoTwoColumns redNaoInputFirstName "></div>    <div class="redNaoLastNameDiv redNaoTwoColumnsDiv form-group col-sm-6"><input name="Name_lastname" type="text" placeholder="Last Name" class="form-control redNaoInputText redNaoTwoColumns redNaoInputLastName "></div></div>   <div>     </div></div></div>
                                                                                                                                                    </div>
                                                                                                                                                     //NAME 
                                                                                                                                                </li>
                                                                                                                                                <li>
                                                                                                                                                     PHONE 
                                                                                                                                                    <div class="component">
                                                                                                                                                        <div class="rednao-control-group form-group row rednaophone col-sm-12  " id="rnField17"><div class="rednao_label_container col-sm-3"><label class="rednao_control_label">Phone</label></div><div class="redNaoControls col-sm-9"><div class="form-inline"><div class="form-group col-sm-3"><input name="Phone_area" type="text" placeholder="Area" class="form-control redNaoInputText redNaoTwoColumns redNaoInputArea "></div>    <div class="form-group col-sm-6"><input name="Phone_phone" type="text" placeholder="Phone" class="form-control redNaoInputText redNaoTwoColumns redNaoInputPhone "></div></div><div>     </div></div></div>
                                                                                                                                                    </div>
                                                                                                                                                     //PHONE 
                                                                                                                                                </li>
                                                                                                                                                <li>
                                                                                                                                                     EMAIL 
                                                                                                                                                    <div class="component">
                                                                                                                                                        <div class="rednao-control-group form-group row rednaoemail col-sm-12  " id="rnField18"><div class="rednao_label_container col-sm-3"><label class="rednao_control_label ">Email</label></div><div class="redNaoControls col-sm-9"><input name="Email" type="text" placeholder="Placeholder" class="form-control redNaoInputText redNaoEmail"></div></div>
                                                                                                                                                    </div>
                                                                                                                                                     //EMAIL 
                                                                                                                                                </li>
                                                                                                                                                <li>
                                                                                                                                                     NUMBER 
                                                                                                                                                    <div class="component">
                                                                                                                                                        <div class="rednao-control-group form-group row rednaonumber col-sm-12  " id="rnField19"><div class="rednao_label_container col-sm-3"><label class="rednao_control_label">Number</label></div><div class="redNaoControls col-sm-9"><input name="Number" type="text" placeholder="Placeholder" class="form-control redNaoInputText redNaoNumber"></div></div>
                                                                                                                                                    </div>
                                                                                                                                                     //NUMBER 
                                                                                                                                                </li>
                                                                                                                                                <li>
                                                                                                                                                     ADDRESS 
                                                                                                                                                    <div class="component">
                                                                                                                                                        <div class="rednao-control-group form-group row rednaoaddress col-sm-12  " id="rnField16"><div class="rednao_label_container col-sm-3"><label class="rednao_control_label">Address</label></div>                <div class="redNaoControls col-sm-9"><div class="redNaoStreetAddress1Div form-group"><input name="Address_streetaddress1" type="text" placeholder="Street Address" class="form-control redNaoInputText redNaoOneColumn redNaoStreetAddress1 "></div><div class="redNaoStreetAddress2Div form-group">                        <input name="Address_streetaddress2" type="text" placeholder="Street Address 2" class="form-control redNaoInputText redNaoOneColumn redNaoStreetAddress2 "></div><div><div class="form-inline cityAndState"><div class="form-group col-sm-6">                        <input name="Address_city" type="text" placeholder="City" class="form-control redNaoInputText redNaoTwoColumns redNaoCity "></div><div class="form-group col-sm-6">                          <input name="Addressstate" type="text" placeholder="State" class="form-control redNaoInputText redNaoTwoColumns redNaoState "></div></div></div><div class="form-inline"><div class="form-group col-sm-6">                                    <input name="Addresszip" type="text" placeholder="Zip" class="form-control redNaoInputText redNaoTwoColumns redNaoZip "></div><div class="form-group col-sm-6">                        <select name="Address_country" class="form-control redNaoSelect redNaoCountry "><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic">Congo, Democratic Republic</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Mongolia">Mongolia</option><option value="Morocco">Morocco</option><option value="Monaco">Monaco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value=" Sao Tome"> Sao Tome</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia and Montenegro">Serbia and Montenegro</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option selected="selected" value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></div></div></div></div>
                                                                                                                                                    </div>
                                                                                                                                                     //ADDRESS 
                                                                                                                                                </li>
                                                                                                                                            </ul>
                                                                                                                                        </div>-->
                                                                    <h2><a href="#">Multiple Choice</a></h2>
                                                                    <div>
                                                                        <ul>
                                                                            <li>
                                                                                <!-- MULTIPLE Radio -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="multiple_radio">
                                                                                        <div class="col-sm-3">
                                                                                            <label for="multipleradio">Multiple Radio</label>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <div class="radio">
                                                                                                <label><input type="radio" id="optradio1" name="optradio">Option 1</label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label><input type="radio" id="optradio2" name="optradio">Option 2</label>
                                                                                            </div>
                                                                                            <div class="radio disabled">
                                                                                                <label><input type="radio" id="optradio3" name="optradio">Option 3</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //MULTIPLE Radio -->
                                                                            </li>
                                                                            <li>
                                                                                <!-- MULTIPLE CHECKBOX -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="multiple_checkbox">
                                                                                        <div class="col-sm-3">
                                                                                            <label>Multiple Checkbox</label>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <div class="checkbox">
                                                                                                <label><input class="secoCheckBox" id="checkbox1" name="checkbox" type="checkbox" value="">Option 1</label>
                                                                                            </div>
                                                                                            <div class="checkbox">
                                                                                                <label><input class="secoCheckBox" id="checkbox2" name="checkbox" type="checkbox" value="">Option 2</label>
                                                                                            </div>
                                                                                            <div class="checkbox">
                                                                                                <label><input class="secoCheckBox" id="checkbox3" name="checkbox" type="checkbox" value="">Option 3</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //MULTIPLE CHECKBOX -->
                                                                            </li>
                                                                            <li>
                                                                                <!-- SELECT BASIC -->
                                                                                <div class="component">
                                                                                    <div class="form-group col-sm-12" data-name="select_basic">
                                                                                        <div class="col-sm-3">
                                                                                            <label>Select Basic</label>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <select style="" name="Select_Basic" class="form-control">
                                                                                                <option value="" selected="selected">Select a value</option>
                                                                                                <option value="1">Option 1</option>
                                                                                                <option value="2">Option 2</option>
                                                                                                <option value="3">Option 3</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //SELECT BASIC -->
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="secoFormPropertiesContainer">
                                        <div id="secoFormPropertiesTable" class="form-horizontal" style="display:none; width:100%; padding: 1em;">
                                            <div class="col-sm-12 input-group">
                                                <label class="col-sm-3" for="secoFormPropertyId"> Id </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" data-type="input" maxlength="50" type="text" name="secoFormPropertyId" id="secoFormPropertyId" value="" placeholder="Default">
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-sm-12 input-group">
                                                <label class="col-sm-3" for="secoFormPropertyLabel"> Label </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" data-type="input" maxlength="50" type="text" name="secoFormPropertyLabel" id="secoFormPropertyLabel" value="" placeholder="Default">
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-sm-12 input-group">
                                                <label class="col-sm-3" for="secoFormPropertyPlaceholder"> Placeholder </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" data-type="input" maxlength="50" type="text" name="secoFormPropertyPlaceholder" id="secoFormPropertyPlaceholder" value="" placeholder="Default">
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-sm-12 input-group">
                                                <label class="col-sm-3" for="secoFormPropertyWidth"> Width </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" data-type="input" maxlength="50" type="text" name="secoFormPropertyWidth" id="secoFormPropertyWidth" value="" placeholder="Default">
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-sm-12 input-group">
                                                <label class="col-sm-3" for="secoFormPropertyHeight"> Height </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" data-type="input" maxlength="50" type="text" name="secoFormPropertyHeight" id="secoFormPropertyHeight" value="" placeholder="Default">
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-sm-12 input-group">
                                                <label class="col-sm-3" for="secoFormPropertyValue"> Height </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" data-type="input" maxlength="50" type="text" name="secoFormPropertyValue" id="secoFormPropertyValue" value="" placeholder="Default">
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-sm-12 input-group">
                                                <label class="col-sm-3" for="secoFormPropertySpacing"> Spacing </label>
                                                <div class="col-sm-9">
                                                    <select id="secoFormPropertySpacing" class="form-control" name="secoFormPropertySpacing">
                                                        <option value="col-sm-12" selected="selected">Fill entire row (12 Columns)</option>
                                                        <option value="col-sm-11">Use 11 columns</option>
                                                        <option value="col-sm-10">Use 10 columns</option>
                                                        <option value="col-sm-9">Use 9 columns</option>
                                                        <option value="col-sm-8">Use 8 columns</option>
                                                        <option value="col-sm-7">Use 7 columns</option>
                                                        <option value="col-sm-6">Use 6 columns</option>
                                                        <option value="col-sm-5">Use 5 columns</option>
                                                        <option value="col-sm-4">Use 4 columns</option>
                                                        <option value="col-sm-3">Use 3 columns</option>
                                                        <option value="col-sm-2">Use 2 columns</option>
                                                        <option value="col-sm-1">Use 1 columns</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-sm-12 input-group">
                                                <label class="col-sm-3" for="secoFormPropertyIsRequired"> Required </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="checkbox" name="secoFormPropertyIsRequired" id="secoFormPropertyIsRequired" value="0">
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-sm-12 input-group">
                                                <label class="col-sm-3" for="secoFormPropertyReadOnly"> Read Only </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="checkbox" name="secoFormPropertyReadOnly" id="secoFormPropertyReadOnly" value="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">
                        <span class="glyphicon glyphicon-floppy-disk"></span><span class="ladda-label">Save</span>
                    </button>
                </div>
            </form>
        </div>
        <?php
    }

}
init_seco_forms();
create_seco_form();
