//<?php
//session_start();
//$ins=$_SESSION["ins1"];
//if($ins=="Yes")
//{
//echo "<script> alert('Record inserted')</script>";
//session_unset();
//}
//?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Garden Truck | Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" type="text/css" href="js/font-awesome.min.css">



<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/sForm.js"></script>
<script src="js/forms.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
	<script type="text/javascript">
function LimtCharacters(txtMsg, CharLength, indicator) {
chars = txtMsg.value.length;
document.getElementById(indicator).innerHTML = CharLength - chars;
if (chars > CharLength) {
txtMsg.value = txtMsg.value.substring(0, CharLength);
}
}
</script>
<script language="JavaScript">
function valid()
{
  var Name=document.getElementById("nm").value;
  var Contact=document.getElementById("contact").value;
  var EmailId=document.getElementById("email").value;
  var Feedback=document.getElementById("feedback").value;
  
  
    
	 if(Name=="")
	 {
	   alert("Please Enter Name...!");
	   return false;
	 }
	 if(!isNaN(Name))
	 {
	   alert("Please Enter Only Alphabets...!");
	   document.getElementById("nm").value='';
	   document.getElementById("nm").focus();
	   return false;
	   }
	   
	
	if(Contact=="")
	 {
	   alert("Please Enter Mobile Number...!");
	   return false;
	 }
	 if(isNaN(Contact))
	 {
	   alert("Please Enter Only Numbers...!");
	   document.getElementById("contact").value='';
	   document.getElementById("contact").focus();
	   return false;
	 }
	 if(Contact.length!=10)
	 {
	   alert("Please Enter Only 10 Numbers...!");
	   document.getElementById("contact").value='';
	   document.getElementById("contact").focus();
	   return false;
	 }
	   
	    if(EmailId=="")
	 {
	   alert("Please Enter Email_Id...!");
	   return false;
	  
	 }
	 if(Feedback=="")
	 {
	   alert("Please Enter Feedback...!");
	   return false;
	 }
	 
	 
	   return true;
	 }  
	 </script>
<style type="text/css">
div.stars
  {
    width:270px;
    display:inline-block;
  }
 
  input.star
  {
    display:none;
  }
 
  label.star
  {
    float:right;
    padding:8px;
    font-size:36px;
    color:#444;
    transition:all .2s;
  }
  
  input.star:checked ~ label.star:before
  {
    content:'\f005';
	color:#003333;
	transition: all .25s;
  }
	
  input.star-5:checked ~ label.star:before
  {
    color:#3399CC;
	text-shadow:0 0 20px #955;
  }
	  
  input.star-1:checked ~ label.star:before
  {
	color:#003333;
	
  }
	   
  label.star:hover
  {
	transform:rotate(-15deg) scale(1.3);
  }
	   
  label.star:before
  {
	content:'\f006';
	font-family:FontAwesome;
  }
        </style>
	<style type="text/css">

.style1 {
font-size: 35px
font-weight: normal;
	
font-family: 'Andalus';
color:#6b8403;
}
.style3 {font-size: 18px}
    </style>	
	<style type="text/css">
	.style44{
	margin-left: 300px;
	}	
	</style>
</head>
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <div class="h_phone">Need Help? Call Us +1 (800) 123 4567</div>
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a> </h1>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        <div class="socials"><a href="#"></a><a href="#"></a></div>
      <!--  <div class="autor"> <a href="#">User Login</a> Social </div>-->
        <nav>
          <ul class="sf-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a>
              
            </li>
            <li><a href="products.html">Products</a></li>
            <li><a href="blog.html">Blog</a></li>
			<li><a href="Career.html">Careers</a></li>
			
            <li ><a href="contacts.html">Contacts</a>
			<li><a href="gallery.html">Gallery</a></li></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="content">
  <div class="white wt2">
    <div class="container_12">
    <!--  <div class="grid_8">-->
        <h3> Management of Nursery </h3>
		      <div class="text2">  	</div>
		 

<p>Nursery plants require due care and attention after having either emerged from the seeds or have been raised from other sources like rootstock or through tissue culture technique. Generally they are grown in the open field under the protection of mother nature where, they should be able to face the local environment. It is the duty & main objective of a commercial nursery grower to supply the nursery plants with suitable conditions necessary for their development & growth. This is the major work of management in the nursery which includes all such operations right from the emergence of young plantlet till they are fully grown-up or are ready for uprooting & transplanting in the main fields.</p><br><br>
<b>1)	Potting the seedling: -</b><br>
Before planting of sapling in the pots, the pots should be filled up with proper potting mixture. Now a days different size of earthen pots or plastic containers are used for propagation. For filling of pots loamy soil, sand and compost can be used in 1:1:1 proportion. Sprouted cuttings, bulbs, corms or polythene bag grown plants can be transferred in earthen pots for further growth. All the necessary precautions are taken before filling the pots and planting of sapling in it.<br><br>
<b>2)	Manuring & Irrigation: -</b><br>
Generally sufficient quantity of nutrients is not available in the soil used for seedbed. Hence, well rotten F.Y.M / compost and leaf mould is added to soil. Rooted cuttings, layers or grafted plants till they are transferred to the permanent location, require fertilizers. Addition of fertilizers will give healthy & vigorous plants with good root & shoot system. It is recommended that each nursery bed of 10 X 10m area should be given 300 gm of ammonium sulphate, 500 gm of Single super phosphate and 100 gm of Muriate of potash. Irrigation either in the nursery beds or watering the pots is an important operation. For potted plants hand watering is done & for beds low pressure irrigation by hose pipe is usually given. Heavy irrigation should be avoided.<br><br>
<b>3) Plant protection measures: -</b><br>
Adoption of plant protection measures, well in advance and in a planned manner is necessary for the efficient raising of nursery plants. For better protection from pest and diseases regular observation is essential. Disease control in seedbed:- The major disease of nursery stage plant is “damping off”. For its control good sanitation conditions are necessary. Preventive measures like treatment with 50% ethyl alcohol, 0.2% calcium hypo chloride and 0.01% mercury chloride is done. These treatments are given for 5 to 30 minutes. Some of the seed treatment are as follows:<br> i)	Disinfection – The infection within the seed is eliminated by use of formaldehyde, hot water or mercuric chloride.<br> ii)	Hot water treatment – Dry seeds are placed in hot water having a temperature of 480C – 550C for 10-30 minutes. <br>iii)	Protection – In dry seed treatment organo mercuric and non-mercuric compounds like agallal, aretan –6, and tafasan-6. For this the seeds are shaken within the seed container. While in wet method, the seeds are immersed for certain period in liquid suspension. <br>iv)	Soil treatment – Soil contains harmful fungi, bacteria, nematodes and even weeds seeds, which affect the growth and further development of plant. These can be eliminated by heat, chemical treatment. For that soil is disinfected by heating to the temperature of about 600C for 30 minutes.<br> v)	Chemical treatment – the chemicals like formaldehyde, methyl bromide, chloropicrin, vapam are used. Other diseases like rust, powdery mildew, leaf spot, bacterial blight, yellow vein mosaic are also observed. For control of these diseases Bordeaux mixture, Carbendazime, Redomil can be used. Tricoderma viridi a bio-fungicide can also be tried out.<br><br>
<b>4)	Weed control: -</b><br>
Weeds compete with plants for food, space and other essentials. So timely control of weeds is necessary. For weed control weeding, use of cover crops, mulching, use of chemicals (weedicides) are practiced. Pre-emergence weedicides like Basaline or post-emergence weedicide like 2; 4-D and Roundup are useful.<br><br>
<b>5)	Measures against heat and cold: -</b><br>
The younger seedling is susceptible to strong sun and low temperature. For protection from strong sun, shading with the help of timber framework of 1 meter height may be used. Net house and green house structures can also be used.<br><br>
<b>6)	Packing of nursery plants –</b><br>
Packing is the method or way in which the young plants are tied or kept together till they are transplanted. So they have to be packed in such a way that they do not lose their turgidity and are able to establish themselves on the new site. At the same time, good packing ensures their success on transplanting. For packing baskets, wooden boxes, plastic bags are used. In some parts of the country banana leaves are also used for packing the plants with their earth ball. This is useful for local transportation.<br><br>
<b>7)	Sale management –</b><br>
In general the main demand for nursery plants is during rainy season. A proper strategy should be followed for sale of nursery plants. For that advertisement in local daily newspapers, posters, hand bills, catalogue and appointment of commission agents can be followed.<br><br>
<b>8)	Management of mother plants -</b><br>

Care of mother plants is necessary so as to get good quality propagules and scion. 
A.    Labeling and records 
B.    Certification 
C.    Irrigation 
D.    Fertilization 
E.    Pruning
 F.  Protection from pests and diseases Collection and development of new mother plants Fruit   
Nurseries
 
		  <br>
		  <br>
         <!-- <address>
          <dl>
		  <br>
            <dt> Address:-  8901 Marmora Road,<br>
                            Glasgow, D04 89GR. </dt>
						
            <dd><span>Freephone:-</span>+1 800 559 6580</dd>
            <dd><span>Telephone:-</span>02313543814</dd>
            <dd><span>FAX:-</span>+1 800 889 9898</dd>
            <dd>E-mail:- <a href="#" class="link-1">PlantNursery@link.org</a></dd>
          </dl>
          </address>-->
      </div>
    </div>
        <div class="map"><center> 
          <div class="style44"> 
		
        <!--<form id="form" action="#">
          <div class="success_wrapper">
            <div class="success">Contact form submitted!<br>
              <strong>We will be in touch soon.</strong> </div>
          </div>
          <fieldset>
            <label class="name">
              <input type="text" value="Name:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="email">
              <input type="text" value="E-mail:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="phone">
              <input type="tel" value="Phone:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="message">
			<input type="text" value="Message:">
              <textarea>Message:</textarea>
              <br class="clear">
              <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
			  <tr>
			<label class="Rate">
              <input type="text" value="Rate:">
              	</label>
			<td><div class="stars">
					<input class="star star-5" id="star-5" value="star-5" type="radio" name="star" />
					<label class="star star-5" for="star-5"></label>
					<input class="star star-4" id="star-4" value="star-4" type="radio" name="star" />
					<label class="star star-4" for="star-4"></label>
					<input class="star star-3" id="star-3" value="star-3" type="radio" name="star" />
					<label class="star star-3" for="star-3"></label>
					<input class="star star-2" id="star-2" value="star-2" type="radio" name="star" />
					<label class="star star-2" for="star-2"></label>
					<input class="star star-1"  id="star-1" value="star-1" type="radio" name="star" />
					<label class="star star-1" for="star-1"></label></div></td>
			</tr>
		
            <div class="clear"></div>
            <div class="btns"><a data-type="reset" class="btn">Clear</a><span></span><a data-type="submit" class="btn" >Send</a>
              <div class="clear"></div>
            </div>
          </fieldset>
        </form>-->
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_2">
      <div class="copy"> <a href="index.html" class="footer_logo"><img src="images/footer_logo.png"	alt=""></a> &copy; 2045  </div>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="Contactus.php">Contact</a></li>
        <li><a href="about.html">News</a></li>
        <li><a href="about.html">Our People</a></li>
        <li><a href="blog.html">Blogs</a></li>
        <li><a href="about.html">About Us</a></li>
		<li><a href="Career.html">Carrer</a></li>
      </ul>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="FooterManagement Of nursery.php">Management Of Nursery</a></li>
        <li><a href="FooterTips.php">Tips</a></li>
		<li><a href="FooterGoGreen.php">Go Green </a></li>
        <li><a href="FooterGreenBenifits.php">Green Benifits</a></li>
        
       <!-- <li><a href="#">Suppliers</a></li>
		-->
      </ul>
  
   <!-- <div class="grid_2">
      <ul>
        <li><a href="#">Science &amp; Safety</a></li>
        <li><a href="#">Product </a></li>
        <li><a href="#">Our Brands</a></li>
        <li><a href="#">Agricultural </a></li>
		<li><a href="#">Terms and Conditions</a></li>
        <li><a href="#">Traits &amp; Technologies</a></li>
      </ul>-->
    </div>
    <div class="grid_3 prefix_1">
      <h4>Newsletter</h4>
      <form id="newsletter" action="#">
        <div class="success">Your subscribe request has been sent!</div>
        <label class="email"> <span>Enter e-mail address</span>
          <input type="email" value="" >
          <a href="#" class="btn" data-type="submit">Subscribe</a> <span class="error">*This is not a valid email address.</span> </label>
      </form>
    </div>
    <div class="clear"></div>
  </div>
  <div class="f_bot">
    <div class="container_12">
      <!--<div class="grid_12">Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a></div>-->
    </div>
  </div>
</footer>
</body>
</html>