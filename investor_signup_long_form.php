<?php header('Access-Control-Allow-Origin: *'); ?>
<?php require('header.php'); ?>
<script src="assets/jquery.min.js"></script>
  <!-- Bootstrap -->

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

 

  <link href="assets/vendor.css" rel="stylesheet">

<style type="text/css">
body{
  background-color: transparent;
}

.jf-form{
  margin-top: 28px;
}

.jf-option-box{
  display: none;
  margin-left: 8px;
}

.jf-hide{
  display: none;
}

.jf-disabled {
    background-color: #eeeeee;
    opacity: 0.6;
    pointer-events: none;
}

/* 
overwrite bootstrap default margin-left, because the <label> doesn't contain the <input> element.
*/
.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
  position: absolute;
  margin-top: 4px \9;
  margin-left: 0px;
}

div.form-group{
  padding: 8px 8px 4px 8px;
}

.mainDescription{
  margin-bottom: 10px;
}
.responsive img{
  width: 100%;
}

p.error, p.validation-error{
  padding: 5px;
}

p.error{
  margin-top: 10px;
  color:#a94442;
}

p.server-error{
  font-weight: bold;
}

div.thumbnail{
  position: relative;
  text-align: center;
}

div.thumbnail.selected p{
  color: #ffffff;
}

div.thumbnail .glyphicon-ok-circle{
  position: absolute;
  top: 16px;
  left: 16px;
  color: #ffffff;
  font-size: 32px;
}

.jf-copyright{color: #888888; display: inline-block; margin: 16px;display:none;}

.form-group.required .control-label:after {
    color: #dd0000;
    content: "*";
    margin-left: 6px;
}

.submit .btn.disabled, .submit .btn[disabled]{
  background: transparent;
  opacity: 0.75;
}

/* for image option with span text */
.checkbox label > span, .radio label > span{
  display: block;
}

.form-group.inline .control-label,
.form-group.col-1 .control-label,
.form-group.col-2 .control-label,
.form-group.col-3 .control-label
{
  display: block;
}

.form-group.inline div.radio,
.form-group.inline div.checkbox{
  display: inline-block;
}

.form-group.col-1 div.radio,
.form-group.col-1 div.checkbox{
  display: block;
}

.form-group.col-2 div.radio,
.form-group.col-2 div.checkbox{
  display: inline-block;
  width: 48%;
}

.form-group.col-3 div.radio,
.form-group.col-3 div.checkbox{
  display: inline-block;
  width: 30%;
}

</style>

</head>

<body>


<div class="container jf-form">
  <fieldset>
<div  id="jqueryform-151158"  autocomplete="on">



<div class="form-group c85  inline" data-cid="c85">
  <label class="control-label" for="c85">What best describes you?</label>

<div class="radio">
    <input  id="c85_1" name="c85" checked type="radio" value="individual"  >
    <label  for="c85_1">
      Individual Investor
    </label>
  </div>

  <div class="radio">
    <input  id="c85_2" name="c85"  type="radio" value="vcfirm"  >
    <label  for="c85_2">
      I invest on behalf of an accredited business / VC firm / Angel Fund / Incubator / Accelerator
    </label>
  </div>

  
</div>



<div id="entity" style="display:none">
<div  class="form-group c118 required"  data-cid="c118">
  <label id="c118_label" class="control-label" for="c118">Entity Name</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-font"></i> </span>
<input type="text" class="form-control" id="c118" name="c118" value=""   />
</div>

  
</div>






</div>



<div class="form-group c1 required" data-cid="c1">
  <label id="name_label" class="control-label" for="c1">Name</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-user"></i> </span>
<input type="text" class="form-control" id="c1" name="c1" value=""    
    data-rule-required="true"  />
</div>

  
</div>

<div class="form-group c1 required" data-cid="cpassword">
  <label id="password1_label"  class="control-label" for="cpassword">Password</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-lock"></i> </span>
<input type="password" class="form-control" id="cpassword" name="cpassword" value=""    
    data-rule-required="true"  />
</div>

  
</div>

<div class="form-group c1 required" data-cid="cpassword2">
  <label id="password2_label" class="control-label" for="cpassword2">Confirm Password</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-lock"></i> </span>
<input type="password" class="form-control" id="cpassword2" name="cpassword2" value=""    
    data-rule-required="true"  />
</div>

  
</div>




<div class="form-group c2 required" data-cid="c2">
  <label id="email_label"  class="control-label" for="c2">Email</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-envelope"></i> </span>
<input type="email" class="form-control" id="c2" name="c2" value=""   
    data-rule-email="true" 
    data-rule-required="true"  />
</div>
  
</div>




<div class="form-group c28 required" data-cid="c28">
  <label id="contactno_label" class="control-label" for="c28">Contact No.</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-phone"></i> </span>
<input type="text" class="form-control" id="c28" name="c28" value=""    
    data-rule-required="true"  />
</div>

  
</div>




<div class="form-group c150 " data-cid="c150">
  <label id="linkedin_label" class="control-label" for="c150">LinkedIn URL</label>

<div class="input-group"><span class="input-group-addon left"><i class="fa fa-linkedin"></i> </span>
<input type="text" class="form-control" id="c150" name="c150" value=""     />
</div>

  
</div>




<div class="form-group c33 required" data-cid="c33">
  <label id="headline_label" class="control-label" for="c33">Professional Headline</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-header"></i> </span>
<input type="text" class="form-control" id="c33" name="c33" value=""  aria-describedby="c33-help-block"  
    data-rule-required="true"  />
</div>


  <p id="c33-help-block" class="description">This will appear in your profile. For example - Student, Growth Hacker, Entrepreneur, etc.</p>
  
</div>




<div class="form-group c38 required" data-cid="c38">
  <label id="location_label" class="control-label" for="c38">Current Location</label>

<div class="input-group"><span class="input-group-addon left"><i class="fa fa-location-arrow"></i> </span>
<input type="text" class="form-control" id="c38" name="c38" value=""  aria-describedby="c38-help-block"  
    data-rule-required="true"  />
</div>


  <p id="c38-help-block" class="description">This will appear in your profile. This information is useful to send personalized deals for you.</p>
  
</div>

<div class="form-group c39" data-cid="c39">
  <label id="currentorganization_label" class="control-label" for="c39">Current Organization</label>

<div class="input-group"><span class="input-group-addon left"><i class="fa fa-university"></i> </span>
<input type="text" class="form-control" id="c39" name="c39" value=""  aria-describedby="c39-help-block"  
    data-rule-required="true"  />
</div>
  
</div>

<div class="form-group c40" data-cid="c40">
  <label id="designation_label" class="control-label" for="c40">Designation</label>

<div class="input-group"><span class="input-group-addon left"><i class="fa fa-diamond"></i> </span>
<input type="text" class="form-control" id="c40" name="c40" value=""  aria-describedby="c40-help-block"  
    data-rule-required="true"  />
</div>


  
</div>




<div class="form-group c64  inline" data-cid="c64">
  <label id="industrypreferences_label" class="control-label" for="c64">Industry preferences</label>

<div class="checkbox">
    <input  id="c64_1" name="c64[]"  type="checkbox" value="Advertising & Marketing" 
     >
    <label  for="c64_1">
      Advertising & Marketing
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_2" name="c64[]"  type="checkbox" value="Aerospace"  >
    <label  for="c64_2">
      Aerospace
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_3" name="c64[]"  type="checkbox" value="Agriculture"  >
    <label  for="c64_3">
      Agriculture
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_4" name="c64[]"  type="checkbox" value="Analytics"  >
    <label  for="c64_4">
      Analytics
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_5" name="c64[]"  type="checkbox" value="Arts"  >
    <label  for="c64_5">
      Arts
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_6" name="c64[]"  type="checkbox" value="Automotive"  >
    <label  for="c64_6">
      Automotive
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_7" name="c64[]"  type="checkbox" value="Bio - Technology"  >
    <label  for="c64_7">
      Bio - Technology
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_8" name="c64[]"  type="checkbox" value="Business to Business"  >
    <label  for="c64_8">
      Business to Business
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_9" name="c64[]"  type="checkbox" value="Cleantech"  >
    <label  for="c64_9">
      Cleantech
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_10" name="c64[]"  type="checkbox" value="Construction"  >
    <label  for="c64_10">
      Construction
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_11" name="c64[]"  type="checkbox" value="Consulting"  >
    <label  for="c64_11">
      Consulting
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_12" name="c64[]"  type="checkbox" value="Consumer Internet"  >
    <label  for="c64_12">
      Consumer Internet
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_13" name="c64[]"  type="checkbox" value="Consumer Products"  >
    <label  for="c64_13">
      Consumer Products
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_14" name="c64[]"  type="checkbox" value="Data Science"  >
    <label  for="c64_14">
      Data Science
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_15" name="c64[]"  type="checkbox" value="Design"  >
    <label  for="c64_15">
      Design
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_16" name="c64[]"  type="checkbox" value="Education"  >
    <label  for="c64_16">
      Education
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_17" name="c64[]"  type="checkbox" value="Electronics"  >
    <label  for="c64_17">
      Electronics
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_18" name="c64[]"  type="checkbox" value="Energy"  >
    <label  for="c64_18">
      Energy
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_19" name="c64[]"  type="checkbox" value="Environment"  >
    <label  for="c64_19">
      Environment
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_20" name="c64[]"  type="checkbox" value="Fashion & Apparel"  >
    <label  for="c64_20">
      Fashion & Apparel
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_21" name="c64[]"  type="checkbox" value="Film and Television"  >
    <label  for="c64_21">
      Film and Television
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_22" name="c64[]"  type="checkbox" value="Financial Services"  >
    <label  for="c64_22">
      Financial Services
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_23" name="c64[]"  type="checkbox" value="Food & Beverages"  >
    <label  for="c64_23">
      Food & Beverages
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_24" name="c64[]"  type="checkbox" value="Gaming"  >
    <label  for="c64_24">
      Gaming
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_25" name="c64[]"  type="checkbox" value="Government & Politics"  >
    <label  for="c64_25">
      Government & Politics
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_26" name="c64[]"  type="checkbox" value="Healthcare"  >
    <label  for="c64_26">
      Healthcare
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_27" name="c64[]"  type="checkbox" value="Hospitality"  >
    <label  for="c64_27">
      Hospitality
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_28" name="c64[]"  type="checkbox" value="Internet (Software & Services) "  >
    <label  for="c64_28">
      Internet (Software & Services) 
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_29" name="c64[]"  type="checkbox" value="Investment"  >
    <label  for="c64_29">
      Investment
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_30" name="c64[]"  type="checkbox" value="Legal Services"  >
    <label  for="c64_30">
      Legal Services
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_31" name="c64[]"  type="checkbox" value="Manufacturing"  >
    <label  for="c64_31">
      Manufacturing
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_32" name="c64[]"  type="checkbox" value="Market Research"  >
    <label  for="c64_32">
      Market Research
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_33" name="c64[]"  type="checkbox" value="Media"  >
    <label  for="c64_33">
      Media
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_34" name="c64[]"  type="checkbox" value="Mobile"  >
    <label  for="c64_34">
      Mobile
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_35" name="c64[]"  type="checkbox" value="Music"  >
    <label  for="c64_35">
      Music
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_36" name="c64[]"  type="checkbox" value="Non profit"  >
    <label  for="c64_36">
      Non profit
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_37" name="c64[]"  type="checkbox" value="Pharmaceutical"  >
    <label  for="c64_37">
      Pharmaceutical
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_38" name="c64[]"  type="checkbox" value="Professional Services"  >
    <label  for="c64_38">
      Professional Services
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_39" name="c64[]"  type="checkbox" value="Real Estate"  >
    <label  for="c64_39">
      Real Estate
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_40" name="c64[]"  type="checkbox" value="Restaurants"  >
    <label  for="c64_40">
      Restaurants
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_41" name="c64[]"  type="checkbox" value="Retail"  >
    <label  for="c64_41">
      Retail
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_42" name="c64[]"  type="checkbox" value="Security"  >
    <label  for="c64_42">
      Security
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_43" name="c64[]"  type="checkbox" value="Sports"  >
    <label  for="c64_43">
      Sports
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_44" name="c64[]"  type="checkbox" value="Technology"  >
    <label  for="c64_44">
      Technology
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_45" name="c64[]"  type="checkbox" value="Transportation"  >
    <label  for="c64_45">
      Transportation
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_46" name="c64[]"  type="checkbox" value="Travel/Tourism"  >
    <label  for="c64_46">
      Travel/Tourism
    </label>
  </div>

  
</div>




<div class="form-group c58 required inline" data-cid="c58">
  <label id="advising_label" class="control-label" for="c58">Would you be interested in advising or mentoring companies you connect with on FundMyVenture</label>

<div class="radio">
    <input  id="c58_1" name="c58"  type="radio" value="yes" 
    data-rule-required="true"  >
    <label  for="c58_1">
      Yes
    </label>
  </div>

  <div class="radio">
    <input  id="c58_2" name="c58"  type="radio" value="no"  >
    <label  for="c58_2">
      No
    </label>
  </div>

  <div class="radio">
    <input  id="c58_3" name="c58"  type="radio" value="undecided"  >
    <label  for="c58_3">
      Let's see
    </label>
  </div>

  
</div>




<div class="form-group c70 required" data-cid="c70">
  <label id="pastinvestments_label" class="control-label" for="c70">Have you previously invested in any private company?</label>

<div class="radio">
    <input  id="c70_1" name="c70"  type="radio" value="yes" 
    data-rule-required="true"  >
    <label  for="c70_1">
      Yes
    </label>
  </div>

  <div class="radio">
    <input  id="c70_2" name="c70"  type="radio" value="no"  >
    <label  for="c70_2">
      No
    </label>
  </div>

  
</div>




<div class="form-group c99 " data-cid="c99">
  <label id="countryofresidence_label" class="control-label" for="c99">Country of residence</label>


<select class="form-control" id="c99" name="c99"   
    >
  <option  value="" disabled>- Select -</option>
  <option  value="India">India</option>
  <option  value="USA">USA</option>
  <option  value="United Kingdom">United Kingdom</option>
  <option  value="1">India</option>
  <option  value="2">Afghanistan</option>
  <option  value="3">Aland Islands</option>
  <option  value="4">Albania</option>
  <option  value="5">Algeria</option>
  <option  value="6">American Samoa</option>
  <option  value="7">Andorra</option>
  <option  value="8">Angola</option>
  <option  value="9">Anguilla</option>
  <option  value="10">Antarctica</option>
  <option  value="11">Antigua and Barbuda</option>
  <option  value="12">Argentina</option>
  <option  value="13">Armenia</option>
  <option  value="14">Aruba</option>
  <option  value="15">Australia</option>
  <option  value="16">Austria</option>
  <option  value="17">Azerbaijan</option>
  <option  value="18">Bahamas</option>
  <option  value="19">Bahrain</option>
  <option  value="20">Bangladesh</option>
  <option  value="21">Barbados</option>
  <option  value="22">Belarus</option>
  <option  value="23">Belgium</option>
  <option  value="24">Belize</option>
  <option  value="25">Benin</option>
  <option  value="26">Bermuda</option>
  <option  value="27">Bhutan</option>
  <option  value="28">Bolivia</option>
  <option  value="29">Bonaire, Sint Eustatius and Saba</option>
  <option  value="30">Bosnia and Herzegovina</option>
  <option  value="31">Botswana</option>
  <option  value="32">Bouvet Island</option>
  <option  value="33">Brazil</option>
  <option  value="34">British Indian Ocean Territory</option>
  <option  value="35">Brunei</option>
  <option  value="36">Bulgaria</option>
  <option  value="37">Burkina Faso</option>
  <option  value="38">Burundi</option>
  <option  value="39">Cambodia</option>
  <option  value="40">Cameroon</option>
  <option  value="41">Canada</option>
  <option  value="42">Cape Verde</option>
  <option  value="43">Cayman Islands</option>
  <option  value="44">Central African Republic</option>
  <option  value="45">Chad</option>
  <option  value="46">Chile</option>
  <option  value="47">China</option>
  <option  value="48">Christmas Island</option>
  <option  value="49">Cocos (Keeling) Islands</option>
  <option  value="50">Colombia</option>
  <option  value="51">Comoros</option>
  <option  value="52">Congo</option>
  <option  value="53">Cook Islands</option>
  <option  value="54">Costa Rica</option>
  <option  value="55">Cote d'ivoire (Ivory Coast)</option>
  <option  value="56">Croatia</option>
  <option  value="57">Cuba</option>
  <option  value="58">Curacao</option>
  <option  value="59">Cyprus</option>
  <option  value="60">Czech Republic</option>
  <option  value="61">Democratic Republic of the Congo</option>
  <option  value="62">Denmark</option>
  <option  value="63">Djibouti</option>
  <option  value="64">Dominica</option>
  <option  value="65">Dominican Republic</option>
  <option  value="66">Ecuador</option>
  <option  value="67">Egypt</option>
  <option  value="68">El Salvador</option>
  <option  value="69">Equatorial Guinea</option>
  <option  value="70">Eritrea</option>
  <option  value="71">Estonia</option>
  <option  value="72">Ethiopia</option>
  <option  value="73">Falkland Islands (Malvinas)</option>
  <option  value="74">Faroe Islands</option>
  <option  value="75">Fiji</option>
  <option  value="76">Finland</option>
  <option  value="77">France</option>
  <option  value="78">French Guiana</option>
  <option  value="79">French Polynesia</option>
  <option  value="80">French Southern Territories</option>
  <option  value="81">Gabon</option>
  <option  value="82">Gambia</option>
  <option  value="83">Georgia</option>
  <option  value="84">Germany</option>
  <option  value="85">Ghana</option>
  <option  value="86">Gibraltar</option>
  <option  value="87">Greece</option>
  <option  value="88">Greenland</option>
  <option  value="89">Grenada</option>
  <option  value="90">Guadaloupe</option>
  <option  value="91">Guam</option>
  <option  value="92">Guatemala</option>
  <option  value="93">Guernsey</option>
  <option  value="94">Guinea</option>
  <option  value="95">Guinea-Bissau</option>
  <option  value="96">Guyana</option>
  <option  value="97">Haiti</option>
  <option  value="98">Heard Island and McDonald Islands</option>
  <option  value="99">Honduras</option>
  <option  value="100">Hong Kong</option>
  <option  value="101">Hungary</option>
  <option  value="102">Iceland</option>
  <option  value="104">Indonesia</option>
  <option  value="105">Iran</option>
  <option  value="106">Iraq</option>
  <option  value="107">Ireland</option>
  <option  value="108">Isle of Man</option>
  <option  value="109">Israel</option>
  <option  value="110">Italy</option>
  <option  value="111">Jamaica</option>
  <option  value="112">Japan</option>
  <option  value="113">Jersey</option>
  <option  value="114">Jordan</option>
  <option  value="115">Kazakhstan</option>
  <option  value="116">Kenya</option>
  <option  value="117">Kiribati</option>
  <option  value="118">Kosovo</option>
  <option  value="119">Kuwait</option>
  <option  value="120">Kyrgyzstan</option>
  <option  value="121">Laos</option>
  <option  value="122">Latvia</option>
  <option  value="123">Lebanon</option>
  <option  value="124">Lesotho</option>
  <option  value="125">Liberia</option>
  <option  value="126">Libya</option>
  <option  value="127">Liechtenstein</option>
  <option  value="128">Lithuania</option>
  <option  value="129">Luxembourg</option>
  <option  value="130">Macao</option>
  <option  value="131">Macedonia</option>
  <option  value="132">Madagascar</option>
  <option  value="133">Malawi</option>
  <option  value="134">Malaysia</option>
  <option  value="135">Maldives</option>
  <option  value="136">Mali</option>
  <option  value="137">Malta</option>
  <option  value="138">Marshall Islands</option>
  <option  value="139">Martinique</option>
  <option  value="140">Mauritania</option>
  <option  value="141">Mauritius</option>
  <option  value="142">Mayotte</option>
  <option  value="143">Mexico</option>
  <option  value="144">Micronesia</option>
  <option  value="145">Moldava</option>
  <option  value="146">Monaco</option>
  <option  value="147">Mongolia</option>
  <option  value="148">Montenegro</option>
  <option  value="149">Montserrat</option>
  <option  value="150">Morocco</option>
  <option  value="151">Mozambique</option>
  <option  value="152">Myanmar (Burma)</option>
  <option  value="153">Namibia</option>
  <option  value="154">Nauru</option>
  <option  value="155">Nepal</option>
  <option  value="156">Netherlands</option>
  <option  value="157">New Caledonia</option>
  <option  value="158">New Zealand</option>
  <option  value="159">Nicaragua</option>
  <option  value="160">Niger</option>
  <option  value="161">Nigeria</option>
  <option  value="162">Niue</option>
  <option  value="163">Norfolk Island</option>
  <option  value="164">North Korea</option>
  <option  value="165">Northern Mariana Islands</option>
  <option  value="166">Norway</option>
  <option  value="167">Oman</option>
  <option  value="168">Pakistan</option>
  <option  value="169">Palau</option>
  <option  value="170">Palestine</option>
  <option  value="171">Panama</option>
  <option  value="172">Papua New Guinea</option>
  <option  value="173">Paraguay</option>
  <option  value="174">Peru</option>
  <option  value="175">Phillipines</option>
  <option  value="176">Pitcairn</option>
  <option  value="177">Poland</option>
  <option  value="178">Portugal</option>
  <option  value="179">Puerto Rico</option>
  <option  value="180">Qatar</option>
  <option  value="181">Reunion</option>
  <option  value="182">Romania</option>
  <option  value="183">Russia</option>
  <option  value="184">Rwanda</option>
  <option  value="185">Saint Barthelemy</option>
  <option  value="186">Saint Helena</option>
  <option  value="187">Saint Kitts and Nevis</option>
  <option  value="188">Saint Lucia</option>
  <option  value="189">Saint Martin</option>
  <option  value="190">Saint Pierre and Miquelon</option>
  <option  value="191">Saint Vincent and the Grenadines</option>
  <option  value="192">Samoa</option>
  <option  value="193">San Marino</option>
  <option  value="194">Sao Tome and Principe</option>
  <option  value="195">Saudi Arabia</option>
  <option  value="196">Senegal</option>
  <option  value="197">Serbia</option>
  <option  value="198">Seychelles</option>
  <option  value="199">Sierra Leone</option>
  <option  value="200">Singapore</option>
  <option  value="201">Sint Maarten</option>
  <option  value="202">Slovakia</option>
  <option  value="203">Slovenia</option>
  <option  value="204">Solomon Islands</option>
  <option  value="205">Somalia</option>
  <option  value="206">South Africa</option>
  <option  value="207">South Georgia and the South Sandwich Islands</option>
  <option  value="208">South Korea</option>
  <option  value="209">South Sudan</option>
  <option  value="210">Spain</option>
  <option  value="211">Sri Lanka</option>
  <option  value="212">Sudan</option>
  <option  value="213">Suriname</option>
  <option  value="214">Svalbard and Jan Mayen</option>
  <option  value="215">Swaziland</option>
  <option  value="216">Sweden</option>
  <option  value="217">Switzerland</option>
  <option  value="218">Syria</option>
  <option  value="219">Taiwan</option>
  <option  value="220">Tajikistan</option>
  <option  value="221">Tanzania</option>
  <option  value="222">Thailand</option>
  <option  value="223">Timor-Leste (East Timor)</option>
  <option  value="224">Togo</option>
  <option  value="225">Tokelau</option>
  <option  value="226">Tonga</option>
  <option  value="227">Trinidad and Tobago</option>
  <option  value="228">Tunisia</option>
  <option  value="229">Turkey</option>
  <option  value="230">Turkmenistan</option>
  <option  value="231">Turks and Caicos Islands</option>
  <option  value="232">Tuvalu</option>
  <option  value="233">Uganda</option>
  <option  value="234">Ukraine</option>
  <option  value="235">United Arab Emirates</option>
  <option  value="237">United States Minor Outlying Islands</option>
  <option  value="238">Uruguay</option>
  <option  value="240">Uzbekistan</option>
  <option  value="241">Vanuatu</option>
  <option  value="242">Vatican City</option>
  <option  value="243">Venezuela</option>
  <option  value="244">Vietnam</option>
  <option  value="245">Virgin Islands, British</option>
  <option  value="246">Virgin Islands, US</option>
  <option  value="247">Wallis and Futuna</option>
  <option  value="248">Western Sahara</option>
  <option  value="249">Yemen</option>
  <option  value="250">Zambia</option>
  <option  value="251">Zimbabwe</option>
  </select>

  
</div>




<div class="form-group c124  inline" data-cid="c124">
  <label id="residentindian_label" class="control-label" for="c124">You are a?</label>

<div class="radio">
    <input  id="c124_1" name="c124" checked type="radio" value="resident"  >
    <label  for="c124_1">
      Resident Indian
    </label>
  </div>

  <div class="radio">
    <input  id="c124_2" name="c124"  type="radio" value="nri"  >
    <label  for="c124_2">
      Non Resident Indian
    </label>
  </div>

  <div class="radio">
    <input  id="c124_3" name="c124"  type="radio" value="foreign"  >
    <label  for="c124_3">
      Foreign National
    </label>
  </div>

  
</div>




<div class="form-group c129  inline" data-cid="c129">
  <label id="howdidyouhearaboutus_label" class="control-label" for="c129">How did you hear about us?</label>

<div class="radio">
    <input  id="c129_1" name="c129"  type="radio" value="recommendation"  >
    <label  for="c129_1">
      Recommendation 
    </label>
  </div>

  <div class="radio">
    <input  id="c129_2" name="c129"  type="radio" value="advertisement"  >
    <label  for="c129_2">
      Advertisement
    </label>
  </div>

  <div class="radio">
    <input  id="c129_3" name="c129"  type="radio" value="friend"  >
    <label  for="c129_3">
      Friend
    </label>
  </div>

  <div class="radio">
    <input  id="c129_4" name="c129"  type="radio" value="event"  >
    <label  for="c129_4">
      Event
    </label>
  </div>

  <div class="radio">
    <input  id="c129_5" name="c129"  type="radio" value="press"  >
    <label  for="c129_5">
      Press
    </label>
  </div>

  <div class="radio">
    <input  id="c129_6" name="c129"  type="radio" value="linkedin"  >
    <label  for="c129_6">
      Linkedin
    </label>
  </div>

  <div class="radio">
    <input  id="c129_7" name="c129"  type="radio" value="facebook"  >
    <label  for="c129_7">
      Facebook
    </label>
  </div>

  <div class="radio">
    <input  id="c129_8" name="c129"  type="radio" value="twitter"  >
    <label  for="c129_8">
      Twitter
    </label>
  </div>

  <div class="radio">
    <input  id="c129_9" name="c129"  type="radio" value="google"  >
    <label  for="c129_9">
      Google Search
    </label>
  </div>

  <div class="radio">
    <input  id="c129_10" name="c129"  type="radio" value="referral"  >
    <label  for="c129_10">
      Referral
    </label>
  </div>

  <div class="radio">
    <input  id="c129_11" name="c129"  type="radio" value="other"  >
    <label  for="c129_11">
      Other
    </label>
  </div>

  
</div>


<div id="postsubmitaction"></div>
<div class="form-group submit c100 " data-cid="c100" style="position: relative;">
  <label class="control-label sr-only" for="c100" style="display: block;">Submit Button</label>

  <div class="progress" style="display: none; z-index: -1; position: absolute;">
    <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:100%">
    </div>
  </div>

  <center>
  <button  class="btn btn-primary btn-lg" style="z-index: 1;" id="submitbuttonid">
      Submit
  </button></center>
    <p class="error bg-warning" style="display:none;">
    Please check the required fields.  </p>
  <script>

function checkmail(){
  var input=document.getElementById("c2").value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(input)) {
    return false;
}
return true;
}


$( "#c85_2" ).change(function() {

if ( ($("#c85_2").is(':checked') ))
  {
document.getElementById('entity').style.display = "block";}
});

$( "#c85_1" ).change(function() {
if ( ($("#c85_1").is(':checked') ))
  document.getElementById('entity').style.display = "none";
});



$("#submitbuttonid").click(function(){
  var postsubmitactionmessage='<center>';
   var flag=0;
   var flag_final=0;
   for(var i=1;i<47;i++)
  if(document.getElementById("c64_".concat(i.toString())).checked)
    {
      flag=1;
      break;
    }
  if (($("#c85_2").is(':checked') ) && document.getElementById("c118").value=="")
  { flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Please enter the name of the entity you represent.<br>";
 
        document.getElementById("c118_label").style.backgroundColor = '#FF0044';
  }
  else if(!(($("#c85_2").is(':checked') ) && document.getElementById("c118").value==""))
    {
      
        document.getElementById("c118_label").style.backgroundColor = '#ffffff';
    }

  
   if(document.getElementById("c1").value=="")
    {flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Please enter your name.<br>";
 
        document.getElementById("name_label").style.backgroundColor = '#FF0044';
  }
    else if(document.getElementById("c1").value!="")
      {
      
        document.getElementById("name_label").style.backgroundColor = '#ffffff';
    }

    if(document.getElementById("cpassword").value=="")
    {flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Password field left empty.<br>";
 
  document.getElementById("password1_label").style.backgroundColor='#FF0044';
  }
    else if(document.getElementById("cpassword").value!="")
      {
      
        document.getElementById("password1_label").style.backgroundColor = '#ffffff';
    }




  if (document.getElementById("cpassword").value!=document.getElementById("cpassword2").value)
    {flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Passwords do not match.<br>";
 
        document.getElementById("password1_label").style.backgroundColor = '#FF0044';
        document.getElementById("password2_label").style.backgroundColor = '#FF0044';
  }
  else if (document.getElementById("cpassword").value==document.getElementById("cpassword2").value)
    {
      
        document.getElementById("password1_label").style.backgroundColor = '#ffffff';
        document.getElementById("password2_label").style.backgroundColor = '#ffffff';

    }
    
  if(!checkmail())
    {flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Please enter a valid email address.<br>";
 
        document.getElementById("email_label").style.backgroundColor = '#FF0044';
  }
    else if(checkmail()){
      document.getElementById("email_label").style.backgroundColor = '#ffffff';
    }


  if(document.getElementById("c28").value=="")
    {flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Please enter your phone number.<br>";
 
        document.getElementById("contactno_label").style.backgroundColor = '#FF0044';
  }
    else if(document.getElementById("c28").value!=""){
      document.getElementById("contactno_label").style.backgroundColor = '#ffffff';
    }










  if(document.getElementById("c33").value=="")
    {flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Please enter your professional headline.<br>";
 
        document.getElementById("headline_label").style.backgroundColor = '#FF0044';
  }
    else if(document.getElementById("c33").value!=""){
      document.getElementById("headline_label").style.backgroundColor = '#ffffff';
    }



    
  if(document.getElementById("c38").value=="")
    {flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Please enter your location.<br>";
 
        document.getElementById("location_label").style.backgroundColor = '#FF0044';
  }
    else if(document.getElementById("c38").value!=""){
      document.getElementById("location_label").style.backgroundColor = '#ffffff';
    }

 if ( ! ($("#c58_1").is(':checked') || $("#c58_2").is(':checked') || $("#c58_3").is(':checked')))
 {flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Please indicate your preferences for helping startups you connect with.<br>";
 
        document.getElementById("advising_label").style.backgroundColor = '#FF0044';
  }
    else if(($("#c58_1").is(':checked') || $("#c58_2").is(':checked') || $("#c58_3").is(':checked'))){
      document.getElementById("advising_label").style.backgroundColor = '#ffffff';
    }
  if ( ! ($("#c70_1").is(':checked') || $("#c70_2").is(':checked') ))
     {flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Please indicate if you have made angel investments in the past.<br>";
 
        document.getElementById("pastinvestments_label").style.backgroundColor = '#FF0044';
  }
    else if( ($("#c70_1").is(':checked') || $("#c70_2").is(':checked') )){
      document.getElementById("pastinvestments_label").style.backgroundColor = '#ffffff';
    }

  if(flag==0)
    {flag_final=1;
    postsubmitactionmessage=postsubmitactionmessage+"Please indicate atleast one industry preference.<br>";
 
        document.getElementById("industrypreferences_label").style.backgroundColor = '#FF0044';
  }
    else if( flag!=0){
      document.getElementById("industrypreferences_label").style.backgroundColor = '#ffffff';
    }


    if(flag_final==1){
        postsubmitactionmessage=postsubmitactionmessage+"</center>";
document.getElementById("postsubmitaction").innerHTML=postsubmitactionmessage;
document.getElementById("postsubmitaction").style.color = 'red';
    }
  else {
     var investmentpref='';
  for(var i=1;i<47;i++)
  if(document.getElementById("c64_".concat(i.toString())).checked)
    investmentpref=investmentpref+document.getElementById("c64_".concat(i.toString())).value+',';
     $.post("http://fundmyventure.co/server/investor_signup.php", { 
  name:document.getElementById("c1").value,
  password:document.getElementById("cpassword").value,
  entity:document.getElementById("c85_2").value,
  email:document.getElementById("c2").value,
  phone:document.getElementById("c28").value,
  headline:document.getElementById("c33").value,
  location:document.getElementById("c38").value,
  industrypreferences:investmentpref,
  countryofresidence:document.getElementById("c99").value,
  preferences:document.getElementById("c58_1").value,
  pastinvestments:document.getElementById("c70_1").value,
  currentorganization:document.getElementById("c39").value,
  designation:document.getElementById("c40").value,
  linkedin:document.getElementById("c150").value
})
   
.done(function( data ) {
  console.log(data);
if(data=="ok")
  {
    document.getElementById("postsubmitaction").innerHTML="<center>Signup successful. Please try logging in with the details you provided.</center>";
document.getElementById("postsubmitaction").style.color = 'green';
}
else if (data=="user already exists")
 {
    document.getElementById("postsubmitaction").innerHTML="<center>User already exists with this E-Mail ID. Try logging in to the system.</center>";
document.getElementById("postsubmitaction").style.color = 'red';}

else
 {
    document.getElementById("postsubmitaction").innerHTML="<center>Bad server request. Please try again. We apologize for the inconvenience.</center>";
document.getElementById("postsubmitaction").style.color = 'red';
}
});
}
});
  </script>


  
</div>

</div>
</fieldset>
</div>

<div class="container jf-thankyou" style="display:none;" data-redirect="" data-seconds="10">
  <h3>Your form has been submitted. We will reach out to you to understand your investing preferences further. If you don't hear back from us in the next 48 hours, please feel free to express your anger at <a href="mailto:reachout@fundmyventure.co">reachout@fundmyventure.co . Thank You!</h3>
</div>


<script src="assets/vendor.js" ></script>


<script src="assets/jqueryform.com.min.js?ver=v1.0-rc15&id=jqueryform-151158" ></script>


<style type="text/css">
/* overwrite bootstrap styles */
.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
    position: relative;
    margin-top: 0px;
    margin-left: 2px;
}

.checkbox label, .radio label {
   padding-left: 4px;
}
</style>

<style type="text/css">
.select2-hidden-accessible{
  opacity: 0;
}
</style>

<?php require('footer.php'); ?>

