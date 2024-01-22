<?php
define('_MILLIY_CORE', 1);
$page_name = 'Contact US';

$token = "6495033122:AAEk24nvtkcZLMUYTT2LZwVUlqH9hkddlm0";
$chat_id = "-1002093565711";
$error = false;
$error_list = [];

function bot($method,$datas=[]){
	global $token;
	$url = "https://api.telegram.org/bot".$token."/".$method;
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
	$res = curl_exec($ch);
	if(curl_error($ch)){
		var_dump(curl_error($ch));
	}else{
		return json_decode($res);
	}
}

require '../vendor/send_mail.php';
require('../vendor/autoload.php');
require('../vendor/head.php');

if (isset($_POST['submit'])) {
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$subject= isset($_POST['subject']) ? $_POST['subject'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
	$message = isset($_POST['message']) ? $_POST['message'] : '';

    if(empty($name)){
        $error = true;
        $name_error = "Please enter your name";
        $error_list[] = $name_error;
    }
    if(empty($email)){
        $error = true;
        $email_error = "Please enter your valid email address";
        $error_list[] = $email_error;
    }else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $email_error = "Please enter your valid email address";
            $error_list[] = $email_error;
        }
    }
    if(empty($subject)){
        $error = true;
        $subject_error = "Please enter your subject";
        $error_list[] = $subject_error;
    }
    if(empty($message)){
        $error = true;
        $message_error = "Please enter your message";
        $error_list[] = $message_error;
    }

    if(empty($phone)){
        $error = true;
        $phone_error = "Please enter your phone";
        $error_list[] = $phone_error;
    }

    if($error){
        foreach($error_list as $error){
            echo "<script>
                new AWN().warning('".$error."');;
                </script>";
        }
    }else{
        $content="From: $name \nEmail: $email \nPhone: $phone \nSubject: $subject\nMessage: $message";
        $content1="From: $name <br>Email: $email <br>Phone: $phone <br>Message: $message";
        $recipient = "ship.nurex@gmail.com";
        $subject = "Contact Us -> $name";
        send_mail($email, $recipient, $subject, $content1);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$content,
            'parse_mode'=>'html',
        ]);
        echo "<script>
        new AWN().success('Thank you for contacting us. We will get back to you shortly.');;
        </script>"; 
    }
}




?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper" contenteditable="true">
		<div class="container">
			<div class="pbmit-title-bar-content">
				<div class="pbmit-title-bar-content-inner">
					<div class="pbmit-tbar">
						<div class="pbmit-tbar-inner">
							<h1 class="pbmit-tbar-title" >Contact Us</h1>
						</div>
					</div>
					<div class="pbmit-breadcrumb">
						<div class="pbmit-breadcrumb-inner">
							<span><a title="" href="/" class="home"><span>nurex</span></a></span>
							<span class="sep">
								<i class="pbmit-base-icon-angle-right"></i>
							</span>
							<span><span class="post-root post post-post current-item">Contact Us</span></span>
						</div>
					</div>
				</div>
			</div> 
		</div> 
	</div>
	<!-- Title Bar End-->

		<!-- Contact Us Content -->
		<div class="page-content contact_us">  

			<!-- Ihbox -->
			<section class="ihbox_section">
				<div class="container p-0">
					<div class="row">
						<div class="col-md-6 col-xl-4">
							<div class="pbmit-ihbox-style-7">
								<div class="pbmit-ihbox-box d-flex">
									<div class="pbmit-ihbox-icon">
										<div class="pbmit-ihbox-icon-wrapper">
											<div class="pbmit-icon-wrapper pbmit-icon-type-icon">
												<i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-call-1"></i>
											</div>
										</div>
									</div>
									<div class="pbmit-ihbox-contents">
										<h2 class="pbmit-element-title">Call us 24/7</h2>
										<div class="pbmit-heading-desc">+1 (571)-771-37-33 <br></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-4">
							<div class="pbmit-ihbox-style-7">
								<div class="pbmit-ihbox-box d-flex">
									<div class="pbmit-ihbox-icon">
										<div class="pbmit-ihbox-icon-wrapper">
											<div class="pbmit-icon-wrapper pbmit-icon-type-icon">
												<i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-envelope"></i>
											</div>
										</div>
									</div>
									<div class="pbmit-ihbox-contents">
										<h2 class="pbmit-element-title">Mail us 24/7</h2>
										<div class="pbmit-heading-desc">info@nurex.us</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-4">
							<div class="pbmit-ihbox-style-7">
								<div class="pbmit-ihbox-box d-flex">
									<div class="pbmit-ihbox-icon">
										<div class="pbmit-ihbox-icon-wrapper">
											<div class="pbmit-icon-wrapper pbmit-icon-type-icon">
												<i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-clock"></i>
											</div>
										</div>
									</div>
									<div class="pbmit-ihbox-contents">
										<h2 class="pbmit-element-title">Opening Hours</h2>
										<div class="pbmit-heading-desc">Mon - Fri : 08:00am - 07:00pm <br> Sat - un : 08:00am - 07:00pm</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Ihbox End -->

			<!-- Contact Form -->
			<section class="contact-form_box">
				<div class="container p-0">
					<div class="row g-0">
						<div class="col-md-12 col-xl-6">
							<div class="contact-form_leftbox">
								<div class="pbmit-heading-subheading">
									<h4 class="pbmit-subtitle">Get in touch</h4>
									<h2 class="pbmit-title">Chat with our support team to learn more</h2>
									<div class="pbmit-heading_desc">
										We provide professional services to clients in a particular area of expertise.  We have a team of experts in various fields who can offer advice on a project or problem.
									</div>
								</div>
								<div class="swiper-slider" data-loop="true" data-autoplay="false" data-dots="false" data-arrows="true" data-columns="1" data-margin="30" data-effect="slide">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<!-- Slide1 -->
											<article class="pbmit-miconheading-style-6">
												<div class="pbmit-ihbox-style-6">
													<div class="pbmit-ihbox-headingicon">
														<div class="pbmit-ihbox-headingicon d-flex">
															<div class="pbmit-ihbox-contents">
																<h2 class="pbmit-element-title"> London </h2>
																<div class="pbmit-heading-desc">
																	<ul class="pbmit-single-team-info">
																		<li><i class="demo-icon pbmit-base-icon-pin"></i>14 Tottenham Road, London, England</li>
																		<li><i class="demo-icon pbmit-base-icon-phone"></i>(+1) 555 234-8765</li>
																		<li><i class="demo-icon pbmit-base-icon-mail-alt"></i>example@info.com </li>
																	</ul>
																</div>
															</div>
														</div>
														</div>
												</div>
											</article>
										</div>
										<div class="swiper-slide">
											<!-- Slide2 -->
											<article class="pbmit-miconheading-style-6">
												<div class="pbmit-ihbox-style-6">
													<div class="pbmit-ihbox-headingicon">
														<div class="pbmit-ihbox-headingicon d-flex">
															<div class="pbmit-ihbox-contents">
																<h2 class="pbmit-element-title"> Australia </h2>
																<div class="pbmit-heading-desc">
																	<ul class="pbmit-single-team-info">
																		<li><i class="demo-icon pbmit-base-icon-pin"></i>14 Tottenham Road, London, England</li>
																		<li><i class="demo-icon pbmit-base-icon-phone"></i>(+1) 555 234-8765</li>
																		<li><i class="demo-icon pbmit-base-icon-mail-alt"></i>example@info.com </li>
																	</ul>
																</div>
															</div>
														</div>
														</div>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-6">
							<div class="contact-form_main">
								<div class="pbmit-heading-subheading animation-style2">
									<h4 class="">Send us a message</h4>
								</div>
								<form class="contact-form" method="post" id="contact-form" action="/contact.php">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder="Name" name="name" required>
										</div>
										<div class="col-sm-6">
											<input type="email" class="form-control" placeholder="Email" name="email" required>
										</div>
										<div class="col-sm-6">
											<input type="tel" class="form-control" placeholder="Phone" name="phone" required>
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder="Subject" name="subject" required>
										</div>
										<div class="col-sm-12">
											<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Message" required></textarea>
										</div>
										<div class="col-sm-12">
											<button name="submit" class="pbmit-btn">
												<i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
												<span class="pbmit-button-text">Get in touch</span>
											</button>
										</div>
										<div class="col-md-12 col-lg-12 message-status"></div>
									</div>
								</form> 
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Contact Form -->

			<!-- Iframe -->
			<section class="iframe_section">
				<div class="container">
					<iframe src="https://maps.google.com/maps?q=92%20bowery%2C%20new%20york%2C%20NY%2010013&amp;t=m&amp;z=16&amp;output=embed&amp;iwloc=near" title="92 bowery, new york, NY 10013" aria-label="92 bowery, new york, NY 10013"></iframe>
				</div>
			</section>
			<!-- Iframe End-->

			<!-- Client Start -->
			<section class="client_three">
				<div class="container-fluid">
					<div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="false" data-columns="6" data-margin="30" data-effect="slide">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<!-- Slide1 -->
								<article class="pbmit-client-style-3">
									<div class="pbmit-border-wrapper text-align-center">
										<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
											<h4 class="pbmit-hide">07</h4>
											<div class="pbmit-client-hover-img">
												<img src="/assets/images/homepage-2/client/client-dark-01.png" class="img-fluid" alt="">
											</div>
											<div class="pbmit-featured-img-wrapper">
												<div class="pbmit-featured-wrapper">
													<img src="/assets/images/homepage-2/client/client-01.png" class="img-fluid" alt="">
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<div class="swiper-slide">
								<!-- Slide2 -->
								<article class="pbmit-client-style-3">
									<div class="pbmit-border-wrapper text-align-center">
										<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
											<h4 class="pbmit-hide">07</h4>
											<div class="pbmit-client-hover-img">
												<img src="/assets/images/homepage-2/client/client-dark-02.png" class="img-fluid" alt="">
											</div>
											<div class="pbmit-featured-img-wrapper">
												<div class="pbmit-featured-wrapper">
													<img src="/assets/images/homepage-2/client/client-02.png" class="img-fluid" alt="">
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<div class="swiper-slide">
								<!-- Slide3 -->
								<article class="pbmit-client-style-3">
									<div class="pbmit-border-wrapper text-align-center">
										<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
											<h4 class="pbmit-hide">07</h4>
											<div class="pbmit-client-hover-img">
												<img src="/assets/images/homepage-2/client/client-dark-03.png" class="img-fluid" alt="">
											</div>
											<div class="pbmit-featured-img-wrapper">
												<div class="pbmit-featured-wrapper">
													<img src="/assets/images/homepage-2/client/client-03.png" class="img-fluid" alt="">
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<div class="swiper-slide">
								<!-- Slide4 -->
								<article class="pbmit-client-style-3">
									<div class="pbmit-border-wrapper text-align-center">
										<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
											<h4 class="pbmit-hide">07</h4>
											<div class="pbmit-client-hover-img">
												<img src="/assets/images/homepage-2/client/client-dark-04.png" class="img-fluid" alt="">
											</div>
											<div class="pbmit-featured-img-wrapper">
												<div class="pbmit-featured-wrapper">
													<img src="/assets/images/homepage-2/client/client-04.png" class="img-fluid" alt="">
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<div class="swiper-slide">
								<!-- Slide5 -->
								<article class="pbmit-client-style-3">
									<div class="pbmit-border-wrapper text-align-center">
										<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
											<h4 class="pbmit-hide">07</h4>
											<div class="pbmit-client-hover-img">
												<img src="/assets/images/homepage-2/client/client-dark-05.png" class="img-fluid" alt="">
											</div>
											<div class="pbmit-featured-img-wrapper">
												<div class="pbmit-featured-wrapper">
													<img src="/assets/images/homepage-2/client/client-05.png" class="img-fluid" alt="">
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
					<div class="counter-three_box">
						<div class="pbminfotech-ele-fid-style-3">
							<div class="pbmit-fld-contents">
								<div class="pbmit-fld-wrap">
									<h4 class="pbmit-fid-inner">
										<span class="pbmit-fid-before"></span>
										<span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="150" data-interval="20" data-before="" data-before-style="" data-after="" data-after-style="">0</span>
										<span class="pbmit-fid"><span>+</span></span>
									</h4>
									<h3 class="pbmit-fid-title">Most trusted compnies globally</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Client End -->

		</div>
		<!-- Contact Us Content End -->

<?php 
require('../vendor/end.php'); 
?>