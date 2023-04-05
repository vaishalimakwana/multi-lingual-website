<?php
	include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
		<title><?php echo $lang['title']?></title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/BeerSlider.css">
		<link rel="stylesheet" type="text/css" href="css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
		<link rel="stylesheet" type="text/css"  href="css/dropzone.css"/>

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		<select id="Languages" onchange="location = this.value;" class="mobile" style="position: fixed; bottom:0;right:0;z-index: 888;">
			   <option value = "<?php echo $lang['chooselang']?>"><?php echo $lang['chooselang']?></option>
               <option value = "index.php?lang=en">English</option>
			   <option value = "index.php?lang=hn">हिंदी</option>
               <option value = "index.php?lang=ta">தமிழ்</option>
             </select>
		<div id="site-content">
			<header class="site-header">
				
				<div class="container">
					<a href="index.php" id="branding">
						<img src="images/logo.jpg" alt="Company Name" class="logoBox">
						<div class="branding-copy">
							<!--<h1 class="site-title"><?php echo $lang['EcoSlimName']?></h1>-->
							<!--<small class="site-description"><?php echo $lang['info']?></small>-->
						</div>
					</a> <!-- #branding -->
					<nav id="navigation"> <a aria-label="mobile menu" class="nav-toggle"> <span></span> <span></span> <span></span> </a>
				  <ul class="menu-left">
					<li><a href="#aboutus"><?php echo $lang['aboutus_menu']?></a></li>
					<li><a href="#ingredients"><?php echo $lang['ingre_menu']?></a></li>
					<li><a href="#happycustomers"><?php echo $lang['customers_menu']?></a></li>
					<li><a href="#faqs"> <?php echo $lang['faqs_menu']?></a></li>
					<li><a href="#contactus"><?php echo $lang['subscription_menu']?></a></li>
					<li><a href="#blog"><?php echo $lang['blog_menu']?></a></li>  
					<!--<li><a href="#contactus"><?php echo $lang['contactus_menu']?></a></li> -->
					<li><a href="#contactus" class="button large"><?php echo $lang['ordernow_menu']?></a></li>
					<li class="LangChange">
			<select id="Languages" onchange="location = this.value;" class="desktop">
			   <option value = "<?php echo $lang['chooselang']?>"><?php echo $lang['chooselang']?></option>
               <option value = "index.php?lang=en">English</option>
			   <option value = "index.php?lang=hn">हिंदी</option>
               <option value = "index.php?lang=ta">தமிழ்</option>
             </select>
		
		</li>  
				  </ul>
			
				</nav>
					 
				</div> <!-- .container -->
				
			</header> <!-- .site-header -->
			 
			<main class="main-content">
				
			  
				<div>
					
					
						<section class="slider">
						<div>
						  <img src="images/banner1.jpg"  class="desktop">
						   <img src="images/banner1_m.jpg"  class="mobile">	
						</div>
						<div>
						  <img src="images/banner2.jpg"  class="desktop">
						   <img src="images/banner2_m.jpg"  class="mobile">	
						</div>
						<div>
						  <img src="images/banner3.jpg"  class="desktop">
						   <img src="images/banner3_m.jpg"  class="mobile">	
						</div>	
					  </section>
						<div class="container greencolor">
								<div class="custom"><img src="images/FSSAI_logo.png"/><span><i class="fa fa-check"></i><?php echo $lang['text_approved']?></span></div>
						<div class="CheckListTable">
							<div class="custom greencolor"><i class="fa fa-check"></i><?php echo $lang['listinfo1']?></div>
							<div class="custom greencolor"><i class="fa fa-check"></i><?php echo $lang['listinfo2']?></div>
							<div class="custom greencolor"><i class="fa fa-check"></i><?php echo $lang['listinfo3']?></div>
							<div class="custom greencolor"><i class="fa fa-check"></i><?php echo $lang['listinfo4']?></div>
							<div class="custom greencolor"><i class="fa fa-check"></i><?php echo $lang['listinfo5']?></div>
							<div class="custom greencolor"><i class="fa fa-check"></i><?php echo $lang['listinfo6']?></div>
						</div>
							
							
							
							
					    </div>	
					    <div class="greenColorBg">
					    <div class="container">
					    	<div class="row">
								<div class="col-md-12">
									<div class="HeadingBlock">
								<div class="title">
								<p data-xd="text1"><?php echo $lang['text1']?>
								<span><img src="images/ecoslim_name.png"/></span></p>
								</div>
								</div>	
								<div class="CheckListTable">
									<div class="custom"><i class="fa fa-check"></i><?php echo $lang['checklist1']?></div>
									<div class="custom"><i class="fa fa-check"></i><?php echo $lang['checklist2']?></div>
									<div class="custom"><i class="fa fa-check"></i><?php echo $lang['checklist3']?></div>
									<div class="custom"><i class="fa fa-check"></i><?php echo $lang['checklist4']?></div>
								</div>
								</div>	
							</div>	
					    </div>	
					</div>
						</div>	
					
					
				</div>
				
				<div id="aboutus" class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<h2 class="gradient"><?php echo $lang['aboutusheading']?></h2>
								<p><?php echo $lang['aboutusdetail']?></p> 
							

							</div>
							<div class="col-md-4">
								<figure>
									<img src="images/aboutus_img.jpg" alt="">
								</figure>
							</div>
						</div>
					</div>
				</div>

				<div id="ingredients" class="fullwidth-block" data-bg-color="#b1c783">
					<div class="container">
						<h2 class="gradient"><span class="vertical_middle"><?php echo $lang['ingreheading']?></span ><span  class="vertical_middle"><img src="images/veg_icon.png"/></span></h2>
						<div class="FlexBox colorWhite">
						
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/Chromium.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h1']?></h3>
									<p><?php echo $lang['ingre_det1']?></p>
									</div>
								
	
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/L-Carnitine.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h2']?></h3>
									<p><?php echo $lang['ingre_det2']?></p>
									</div>
						
						            
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/VitaminA.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h3']?></h3>
									<p><?php echo $lang['ingre_det3']?></p>
									</div>
							
							
									
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/VitaminC.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h4']?></h3>
									<p><?php echo $lang['ingre_det4']?></p>
									</div>
							
									
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/VitaminE.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h5']?></h3>
									<p><?php echo $lang['ingre_det5']?></p>
									</div>
							
									
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/VitaminB2.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h6']?></h3>
									<p><?php echo $lang['ingre_det6']?></p>
									</div>
							
									
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/VitaminB3.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h7']?></h3>
									<p><?php echo $lang['ingre_det7']?></p>
									</div>
							
									
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/VitaminB5.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h8']?></h3>
									<p><?php echo $lang['ingre_det8']?></p>
									</div>
							
									
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/VitaminB6.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h9']?></h3>
									<p><?php echo $lang['ingre_det9']?></p>
									</div>
							
									
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/VitaminB7.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h10']?></h3>
									<p><?php echo $lang['ingre_det10']?></p>
									</div>
							
									
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/VitaminB9.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h11']?></h3>
									<p><?php echo $lang['ingre_det11']?></p>
									</div>
							
									
									<div class="FlexTxtWid">
									<figure  class="circle">
										<img src="images/VitaminB12.jpg" alt="">
									</figure>	
									<h3><?php echo $lang['ingre_h12']?></h3>
									<p><?php echo $lang['ingre_det12']?></p>
									</div>
									
						</div>
						<div class="colorWhite">
							<div align="center">
								<h4><?php echo $lang['ingre_closing_info']?></h4>
							</div>	
						</div>	
					</div>
				</div>

				<div id="happycustomers" class="fullwidth-block">
					<div class="container">
						<h2 class="gradient"  align="center"><?php echo $lang['happycustomersheading']?></h2>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonial">
									<figure class="avatar"><img src="images/customer_thumb1.jpg" alt=""></figure>
									<div class="testimonial-content">
										<h3 class="fn"><?php echo $lang['custname1']?></h3>
										<p><?php echo $lang['customerreview1']?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="testimonial">
									<figure class="avatar"><img src="images/customer_thumb2.jpg" alt=""></figure>
									<div class="testimonial-content">
										<h3 class="fn"><?php echo $lang['custname2']?></h3>
										<p><?php echo $lang['customerreview2']?></p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
					
				<!--<div class="fullwidth-block"  data-bg-color="#ececec">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="gradient" align="center"><?php echo $lang['reviewsheading']?></h2>
								<div class="row"  align="center">
								<div class="col-md-12">
									<figure>
										<img src="images/comingsoon_img.jpg" alt="">
										
									</figure>
								</div>
								
								</div>
							</div>
							
						</div>
					</div>
				</div>-->
				
				<div class="fullwidth-block"  data-bg-color="#b1c783">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="gradient" align="center"><?php echo $lang['videosheadingen']?></h2>
								<div class="row"  align="center">
								<div class="col-md-4">
									<div class='embed-container'><iframe src='https://www.youtube.com/embed/BwY5VWmzsRA' frameborder='0' allowfullscreen></iframe></div>
								</div>
								<div class="col-md-4">
									<div class='embed-container'><iframe src='https://www.youtube.com/embed/3jXrkyWxQT0' frameborder='0' allowfullscreen></iframe></div>
								</div>
								<div class="col-md-4">
									<div class='embed-container'><iframe src='https://www.youtube.com/embed/tUtiLm8xhQg' frameborder='0' allowfullscreen></iframe></div>
								</div>	
								</div>
								
								<div class="row"  align="center">
								<div class="col-md-4">
									<div class='embed-container'><iframe src='https://www.youtube.com/embed/WIIT_a_7zFA' frameborder='0' allowfullscreen></iframe></div>
								</div>
								<div class="col-md-4">
									<div class='embed-container'><iframe src='https://www.youtube.com/embed/YsyFR7eokUU' frameborder='0' allowfullscreen></iframe></div>
								</div>
									
								</div>
								
								
								
								
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2 class="gradient" align="center"><?php echo $lang['videosheadinghn']?></h2>
								<div class="row"  align="center">
								<div class="col-md-4">
									<div class='embed-container'><iframe src='https://www.youtube.com/embed/UaSuvM8XYu4' frameborder='0' allowfullscreen></iframe></div>
								</div>
								<div class="col-md-4">
									<div class='embed-container'><iframe src='https://www.youtube.com/embed/tZzySZfPpls' frameborder='0' allowfullscreen></iframe></div>
								</div>
								<div class="col-md-4">
									<div class='embed-container'><iframe src='https://www.youtube.com/embed/NaerrBXoO7g' frameborder='0' allowfullscreen></iframe></div>
								</div>	
								</div>
								
								<div class="row"  align="center">
								<div class="col-md-4">
									<div class='embed-container'><iframe src='https://www.youtube.com/embed/l9Pb6f1zqtc' frameborder='0' allowfullscreen></iframe></div>
								</div>
								<div class="col-md-4">
									<div class='embed-container'><iframe src='https://www.youtube.com/embed/KOYy73e9PZw' frameborder='0' allowfullscreen></iframe></div>
								</div>
									
								</div>
								
								
								
								
							</div>
							
						</div>
					</div>
				</div>
					<div id="faqs" class="fullwidth-block" data-bg-color="#ececec">
					<div class="container">
						
							<div class="col-xs-12">
								
								<h2 class="gradient" align="center"><?php echo $lang['faqsheading']?></h2>
								<section><div class="fontBold"><?php echo $lang['q1']?></div><br><?php echo $lang['a1']?></section>

						<section><div class="fontBold"><?php echo $lang['q2']?></div><br><?php echo $lang['a2']?><br>

							<a href="pdf/EcoslimCompositionLetter.pdf" target="_blank">
								<strong><?php echo $lang['cletter']?></strong>
							</a>&nbsp;|&nbsp;
							<a href="pdf/EcoslimFormulationLetter.pdf" target="_blank">
								<strong><?php echo $lang['fletter']?></strong>
							</a>
						</section>

						<section><div class="fontBold"><?php echo $lang['q3']?></div><br><?php echo $lang['a3']?></section>
						<section><div class="fontBold"><?php echo $lang['q4']?></div><br><?php echo $lang['a4']?></section>
						<section><div class="fontBold"><?php echo $lang['q5']?></div><br><?php echo $lang['a5']?></section>
						<section><div class="fontBold"><?php echo $lang['q6']?></div><br><?php echo $lang['a6']?></section>
						<section><div class="fontBold"><?php echo $lang['q7']?></div><br><?php echo $lang['a7']?></section>
						<section><div class="fontBold"><?php echo $lang['q8']?></div><br><?php echo $lang['a8']?></section>
						<section><div class="fontBold"><?php echo $lang['q9']?></div><br><?php echo $lang['a9']?></section>
						<section><div class="fontBold"><?php echo $lang['q10']?></div><br><?php echo $lang['a10']?></section>
						<section><div class="fontBold"><?php echo $lang['q11']?></div><br><?php echo $lang['a11']?></section>
						<section><div class="fontBold"><?php echo $lang['q12']?></div><br><?php echo $lang['a12']?></section>
						<section><div class="fontBold"><?php echo $lang['q13']?></div><br><?php echo $lang['a13']?></section>
						<section><div class="fontBold"><?php echo $lang['q14']?></div><br><?php echo $lang['a14']?></section>
						<section><div class="fontBold"><?php echo $lang['q15']?></div><br><?php echo $lang['a15']?></section>
						<section><div class="fontBold"><?php echo $lang['q16']?></div><br><?php echo $lang['a16']?></section>
						<section><div class="fontBold"><?php echo $lang['q17']?></div><br><?php echo $lang['a17']?></section>
						<section><div class="fontBold"><?php echo $lang['q18']?></div><br><?php echo $lang['a18']?></section>
						<section><div class="fontBold"><?php echo $lang['q19']?></div><br><?php echo $lang['a19']?></section>
						<section><div class="fontBold"><?php echo $lang['q20']?></div><br><?php echo $lang['a20']?></section>						













							</div>
						</div>
					</div>


   <div class="fullwidth-block"  data-bg-color="#f3f8e9">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="gradient" align="center"><?php echo $lang['picsheading']?></h2>
								
								<style>
								.content{
								  padding: 5px; 
								  margin: 0 auto;
								}
								.content span{
								  width: 250px;
								}

								.dz-message{
								  text-align: center;
								  font-size: 28px;
								}

								.dz-preview .dz-image img{
								  width: 100% !important;
								  height: 100% !important;
								  object-fit: cover;
								}
								</style>
								   <div class='content'>
										<form action="upload.php" class="dropzone" >  
										</form> 
								   </div>   
								
							
								
								<div class="showImages">
								
								</div>
								
								<div class="row"  align="center">
								<!--<div class="col-md-6"> 
									 <div id="slider1" class="beer-slider" data-beer-label="before">
										<img src="images/before1.jpg" alt="">
										<div class="beer-reveal" data-beer-label="after">
										  <img src="images/after1.jpg" alt="">
										</div>
									  </div> 
								</div> 
								<div class="col-md-6">
									<div id="slider2" class="beer-slider" data-beer-label="before">
										<img src="images/before2.jpg" alt="">
										<div class="beer-reveal" data-beer-label="after">
										  <img src="images/after2.jpg" alt="">
										</div>
									  </div>
								</div>-->
								
								
								</div>
							</div>
							
						</div>
					</div>
				</div>

	<div id="contactus" class="fullwidth-block cta"  data-bg-color="#b1c783">
					<div class="container colorWhite">
						<div class="row">
							<div class="col-md-12">
								<h2 class="gradient" align="center"><?php echo $lang['contactusheading']?></h2>
								<div class="row"  align="center">
								
								<div class="col-md-12">
								<div class="get-trial">
									<!--<h2 class="gradient">Order a bottle</h2>-->
									
									<form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
									
										 <div class="field" style="opacity: 0;">
											
											 <input type="text" name="form_subject" value="Get Ecoslim" placeholder='Get Ecoslim' required="">
										</div>
											
									<div class="row">
										<div class="col-md-3">
											
										<div class="field">
											<label for="#"><?php echo $lang['contactname']?></label>
											<input type="text" name="form_name" value="" placeholder="Name" required="">
										</div>
										</div>
										<div class="col-md-3">
											
										<div class="field">
											<label for="#"><?php echo $lang['contactemail']?></label>
											<input type="text" name="form_email" value="" placeholder="Email" required="">
										</div>
										</div>
										<div class="col-md-3">
										<div class="field">
											<label for="#"><?php echo $lang['contactphone']?></label>
											<input type="text" name="form_phone" value="" placeholder="Whats App Number" required="">
										</div>
										</div>
										
										<div class="col-md-3">
											<div class="field">
											<label for="#"><?php echo $lang['contactcity']?></label>
												<input type="text" placeholder="City" name="form_message" required=""></textarea>
											</div>
											
										</div>
									    
										
										
									</div>	
									<div class="action">
											<button type="submit" value="Send My Order" data-loading-text="Please wait..."><?php echo $lang['sendmessage']?></button>
											</div>
									</form>	
									
								</div>
							</div>	
									
									
									
									
								<!--<div id="subscription" class="col-md-12">
									<h2 class="gradient" align="center"><?php echo $lang['subscriptionheading']?></h2>
									<div class="TableBox">
									<div class="fontBold">FSSAI Licence No: 10018022008506</div>		
									<div><a href="mailto:feedback@neemasales.com">feedback@neemasales.com</a></div>	
									<div><a href="tel:02249201801">022-49201801</a></div>
									<div><a href="tel:02249201802">022-49201802</a></div>
									<div><span><img src="images/watsapp_icon.png" alt="" ></span><a href="tel:7400116564">7400116564</a></div>	
									</div>		
								</div>
								-->
								
								</div><br><br>
								
							</div>
							
						</div>
					</div>
				</div>


    







				</div>
				

			</main> <!-- .main-content -->
				<div id="blog" class="fullwidth-block"> 
					<div class="container">
						<h2 class="gradient"  align="center"><?php echo $lang['blogheading']?></h2>
						<div class="row" align="center">
							<div class="col-md-12">
									<figure>
										<h3 class="gradient" align="center"><?php echo $lang['comingsoonheading']?></h3>
										<img src="images/comingsoon_img.jpg" alt="">
										
									</figure>
								</div>
						</div>	
						<!--<div class="row"> 
							<div class="col-md-6">
								<div class="testimonial">
									<figure class="avatar"><img src="images/person-thumb-1.jpg" alt=""></figure>
									<div class="testimonial-content">
										<h3 class="fn">Chaitali Shah</h3>
										<p>It is a great product. I’ve been using it for months now. I lost 5 kgs and am still maintaining this lost weight.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="testimonial">
									<figure class="avatar"><img src="images/person-thumb-2.jpg" alt=""></figure>
									<div class="testimonial-content">
										<h3 class="fn">Sarah Khan</h3>
										<p>Ecoslim is a very effective tablet and I have no side-effects from it. Would recommend it to all of you who are struggling with weight problems. It shows results rapidly if you follow all their recommended tips.</p>
									</div>
								</div>
							</div>
						</div>-->
					</div>
				</div>
			<footer class="site-footer">
				<div class="container">
					<div class="company-info">
						<span>Ecoslim</span>
						<!--<span>535 Avenue Street, New York</span>-->
					<!--	<span><a href="mailto:feedback@neemasales.com">feedback@neemasales.com</a></span>-->
						<span><a href="tel:02249201801">022-49201801</a></span>
						<span><a href="tel:02249201802">022-49201802</a></span>
						<span><a href="tel:7400116564"><img src="images/watsapp_icon_sm.png" alt="" > 7400116564</a></span>
						<span><a href="termsandconditions.php"  target="_blank"><?php echo $lang['tncheading']?></a></span> <span><a href="privacypolicy.php"  target="_blank"><?php echo $lang['ppheading']?></a></span>
					</div> <!-- .company-info -->
					<div class="company-info">
						<span class="licenseNoTxt">FSSAI Licence No: 10018022008506</span> 
						
						
					</div>
					<div class="vertical_middle deliveryPartnersTxt"><?php echo $lang['deliverypartners']?></div>
					<div class="company-info">
					
						<span class="partners_Wid"><img src="images/indiapost.jpg" alt="" ></span>
						<span class="partners_Wid"><img src="images/delhivery.jpg" alt="" ></span> 
						<span class="partners_Wid"><img src="images/fedex.jpg" alt="" > </span> 
						<span class="partners_Wid"><img src="images/bluedart.jpg" alt="" ></span> 
						<span class="partners_Wid"><img src="images/dtdc.jpg" alt="" > </span>
					
					</div>
					<p class="copy">
						<?php echo $lang['copyrightinfo']?>
						<a href="http://www.spellbound.co.in" target="_blank">Spellbound Inc.</a> 
						<?php echo $lang['rightsreserved']?>  
					</p>
				</div> <!-- .container -->
			</footer> <!-- .site-footer -->
		</div> <!-- #site-content -->
		
		<script src="js/jquery-1.11.1.min.js"></script>
	   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
	    <script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript" src="js/validation.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
        <!--<script src="js/BeerSlider.js"></script>
		<script src="js/plugins.js"></script>-->
		<script src="js/app.js"></script>
		
	<script type="text/javascript">
Dropzone.autoDiscover = false;
$(".dropzone").dropzone({
  init: function() { 
    myDropzone = this;
    $.ajax({
      url: 'upload.php',
      type: 'post',
      data: {request: 2},
      dataType: 'json',
      success: function(response){

        $.each(response, function(key,value) {
          var mockFile = { name: value.name, size: value.size };

          myDropzone.emit("addedfile", mockFile);
          myDropzone.emit("thumbnail", mockFile, value.path);
          myDropzone.emit("complete", mockFile);

        });

      }
    });
  }
});

								</script>	   
<script>
	
$(document).ready(function(){
  $('.slider').slick({
	  autoplay:true,
	  autoplaySpeed:1500,
  });
});	
// back to top 
$('.logoMain').on('click', function(e) {
  e.preventDefault();
  $('.nav-toggle').removeClass('open');
  $('.menu-left').removeClass('collapse');
  $('html, body').animate({
    scrollTop: 0
  }, 750, 'easeInOutQuad')
});

// smooth scroll between sections
$('a[href^="#"]').on('click', function(event) {

  var $target = $(this.getAttribute('href'));

  if($target.length) {
    event.preventDefault();
    $('html, body').stop().animate({
      scrollTop: $target.offset().top
    }, 750, 'easeInOutQuad');
  }
});

// TOGGLE HAMBURGER & COLLAPSE NAV
$('.nav-toggle').on('click', function() {
  $(this).toggleClass('open');
  $('.menu-left').toggleClass('collapse');
});
// REMOVE X & COLLAPSE NAV ON ON CLICK
$('.menu-left a').on('click', function() {
  $('.nav-toggle').removeClass('open');
  $('.menu-left').removeClass('collapse');
});

// SHOW/HIDE NAV

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
var wrap = $(".site-header");

wrap.on("scroll", function(e) {
    
  if (this.scrollTop > 147) {
    wrap.addClass("sticky");
  } else {
    wrap.removeClass("sticky");
  }
  
});
$(window).scroll(function(event){
    didScroll = true;
});

/*setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);*/

/*function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('show-nav').addClass('hide-nav');
        $('.nav-toggle').removeClass('open');
        $('.menu-left').removeClass('collapse');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('hide-nav').addClass('show-nav');
        }
    }

    lastScrollTop = st;
}*/
</script>
	</body>

</html>