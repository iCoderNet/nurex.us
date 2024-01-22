<?php
/**
 * @package     MilliyCore
 * @link        https://milliysoft.uz/mCore
 * @copyright   Copyright (C) 2022-2023 MilliySoft DTM
 * @license     LICENSE.txt (see attached file)
 * @version     VERSION.txt (see attached file)
 * @author      https://riack5h3n.uz
 */

define('_MILLIY_CORE', 1);
require 'vendor/send_mail.php';
require('vendor/autoload.php');


$page_name = 'Home Page';

switch($act){
	case 'calculate':
		$transportFrom = isset($_POST['transportFrom']) ? $_POST['transportFrom'] : 'Not Included';
		$transportTo = isset($_POST['transportTo']) ? $_POST['transportTo'] : 'Not Included';
		$transportType = isset($_POST['transportType']) ? $_POST['transportType'] : 'Not Included';
		$vehicleYear = isset($_POST['vehicleYear']) ? $_POST['vehicleYear'] : 'Not Included';
		$vehicleMake = isset($_POST['vehicleMake']) ? $_POST['vehicleMake'] : 'Not Included';
		$vehicleModel = isset($_POST['vehicleModel']) ? $_POST['vehicleModel'] : 'Not Included';
		$operable = isset($_POST['operable']) ? $_POST['operable'] : 'Not Included';
		$email = isset($_POST['email']) ? $_POST['email'] : 'Not Included';
		$date = isset($_POST['date']) ? $_POST['date'] : 'Not Included';
		$phone = isset($_POST['phone']) ? $_POST['phone'] : 'Not Included';

        send_mail_user($email, "Car Shipping Quota for your vehicle", "Thanks for reaching out Nurex LLC. Your request has been submitted successfully ✅");

		$content="Transport From: $transportFrom <br>
				  Transport To: $transportTo <br>
				  Transport Type: $transportType <br>
				  Vehicle Year: $vehicleYear <br>
				  Vehicle Make: $vehicleMake <br>
				  Vehicle Model: $vehicleModel <br>
				  Operable: $operable <br>
				  Email: $email <br>
				  Date: $date <br>
				  Phone: $phone <br>
				  ";
        $recipient = "ship.nurex@gmail.com";
        $subject = "Calculate Order";
        send_mail($email, $recipient, $subject, $content);

		echo "<script>
        new AWN().success('Thank you for contacting us. We will get back to you shortly.');;
        </script>"; 
	default:
	require('vendor/head.php');
?>
           
            <div class="pbmit-slider-area">
                <!-- START Home 01 REVOLUTION SLIDER 6.6.14 --><p class="rs-p-wp-fix"></p>
				<rs-module-wrap id="rev_slider_4_1_wrapper" data-alias="home-01" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
					<rs-module id="rev_slider_4_1" data-version="6.6.14">
						<rs-slides style="overflow: hidden; position: absolute;">
							<rs-slide style="position: absolute;" data-key="rs-4" data-title="Slide" data-thumb="/assets/revolution/images/slider-1-50x100.jpg" data-in="o:0;" data-out="a:false;">
								<img src="/assets/revolution/images/slider-1.jpg" alt="" title="slider-1" width="1920" height="771" class="rev-slidebg tp-rs-img" data-bg="p:center top;f:auto;" data-no-retina>
	<!--
								--><rs-layer
									id="slider-4-slide-4-layer-0" 
									data-type="image"
									data-rsp_ch="on"
									data-xy="xo:31px,43px,32px,19px;y:b;yo:40px,7px,5px,6px;"
									data-text="w:normal;s:20,17,12,7;l:0,21,15,9;"
									data-dim="w:1076px,941px,714px,440px;h:451px,394px,299px,184px;"
									data-frame_0="x:right;"
									data-frame_1="st:600;sp:2000;sR:600;"
									data-frame_999="o:0;st:w;sR:6400;"
									data-loop_0="y:-10px;"
									data-loop_999="y:10px;sp:6000;e:sine.inOut;yym:t;"
									style="z-index:8;"
								><img src="/assets/revolution/images/test.png" alt="" class="tp-rs-img" width="1076" height="451" data-no-retina> 
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-4-layer-2" 
									class="rev-btn"
									data-type="button"
									data-color="#0b4bd3"
									data-rsp_ch="on"
									data-xy="x:r;xo:49px,77px,58px,35px;yo:260px,324px,246px,151px;"
									data-text="w:normal;s:16,14,10,6;l:18,15,11,6;ls:-0.4px,0px,0px,0px;fw:500;"
									data-dim="minh:0px,none,none,none;"
									data-vbility="t,t,f,f"
									data-padding="t:55,40,30,19;r:50,40,30,19;b:55,40,30,19;l:50,40,30,19;"
									data-border="bor:50%,50%,50%,50%;"
									data-frame_0="sX:0.9;sY:0.9;"
									data-frame_1="e:power2.inOut;st:1960;sp:1000;sR:1960;"
									data-frame_999="o:0;st:w;sR:6040;"
									data-frame_hover="c:#000;bgc:#fff;bor:50%,50%,50%,50%;sp:200;e:power1.inOut;"
									style="z-index:12;background-color:#ffffff;font-family:'Space Grotesk';"
								>Learn<br> More 
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-4-layer-3" 
									data-type="text"
									data-color="#000000"
									data-rsp_ch="on"
									data-xy="x:l,l,l,c;xo:0,30px,22px,-76px;yo:200px,225px,202px,188px;"
									data-text="w:normal;s:90,70,53,34;l:90,70,53,36;fw:700;"
									data-frame_0="x:175%;o:1;"
									data-frame_0_mask="u:t;x:-100%;"
									data-frame_1="e:power3.out;st:1360;sp:1000;sR:1360;"
									data-frame_1_mask="u:t;"
									data-frame_999="o:0;st:w;sR:6640;"
									style="z-index:9;font-family:'Space Grotesk';text-transform:capitalize;"
								>we haul the vehicles 
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-4-layer-4" 
									data-type="text"
									data-color="#000000"
									data-rsp_ch="on"
									data-xy="x:l,r,r,r;xo:275px,30px,22px,27px;yo:398px,398px,344px,278px;"
									data-text="w:normal;s:22,19,17,17;l:26,22,24,28;fw:500;"
									data-dim="w:877px,767px,582px,425px;h:79px,69px,52px,auto;"
									data-frame_0="x:175%;o:1;"
									data-frame_0_mask="u:t;x:-100%;"
									data-frame_1="e:power3.out;st:1770;sp:1000;sR:1770;"
									data-frame_1_mask="u:t;"
									data-frame_999="o:0;st:w;sR:6230;"
									style="z-index:10;font-family:'Schibsted Grotesk';"
								>Our goal is delivering your car safe and on time  
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-4-layer-6" 
									data-type="image"
									data-rsp_ch="on"
									data-xy="xo:105px,91px,69px,42px;yo:403px,407px,359px,292px;"
									data-text="w:normal;s:20,17,12,7;l:0,21,15,9;"
									data-dim="w:107px,93px,70px,43px;h:36px,31px,23px,14px;"
									data-vbility="t,t,t,f"
									data-frame_0="x:-50,-43,-32,-19;"
									data-frame_1="st:1770;sp:1000;"
									data-frame_999="o:0;st:w;"
									data-loop_0="x:-10px;"
									data-loop_999="x:10px;sp:4500;e:sine.inOut;yym:t;"
									style="z-index:13;"
								><img src="/assets/revolution/images/slider-sharp.png" alt="" class="tp-rs-img" width="107" height="36" data-no-retina> 
								</rs-layer><!--
	-->						</rs-slide>
							<rs-slide style="position: absolute;" data-key="rs-11" data-title="Slide" data-thumb="/assets/revolution/images/slider-1-50x100.jpg" data-in="o:0;" data-out="a:false;">
								<img src="/assets/revolution/images/slider-1.jpg" alt="" title="slider-1" width="1920" height="771" class="rev-slidebg tp-rs-img" data-bg="p:center top;f:auto;" data-no-retina>
	<!--
								--><rs-layer
									id="slider-4-slide-11-layer-0" 
									data-type="image"
									data-rsp_ch="on"
									data-xy="xo:31px,43px,32px,19px;y:b;yo:40px,7px,5px,6px;"
									data-text="w:normal;s:20,17,12,7;l:0,21,15,9;"
									data-dim="w:1076px,941px,714px,440px;h:450px,371px,281px,173px;"
									data-frame_0="x:right;"
									data-frame_1="st:600;sp:2000;sR:600;"
									data-frame_999="o:0;st:w;sR:6400;"
									data-loop_999="sX:0.8;sY:0.8;o:0.6;sp:6000;e:power2.inOut;yys:t;yyf:t;"
									style="z-index:8;"
								><img src="/assets/revolution/images/test2.png" alt="" class="tp-rs-img" width="1140" height="450" data-no-retina> 
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-11-layer-2" 
									class="rev-btn"
									data-type="button"
									data-color="#0b4bd3"
									data-rsp_ch="on"
									data-xy="x:r;xo:49px,77px,58px,35px;yo:260px,324px,246px,151px;"
									data-text="w:normal;s:16,14,10,6;l:18,15,11,6;ls:-0.4px,0px,0px,0px;fw:500;"
									data-dim="minh:0px,none,none,none;"
									data-vbility="t,t,f,f"
									data-padding="t:55,40,30,19;r:50,40,30,19;b:55,40,30,19;l:50,40,30,19;"
									data-border="bor:50%,50%,50%,50%;"
									data-frame_0="sX:0.9;sY:0.9;"
									data-frame_1="e:power2.inOut;st:1960;sp:1000;sR:1960;"
									data-frame_999="o:0;st:w;sR:6040;"
									data-frame_hover="c:#000;bgc:#fff;bor:50%,50%,50%,50%;sp:200;e:power1.inOut;"
									style="z-index:12;background-color:#ffffff;font-family:'Space Grotesk';"
								>Learn<br> More 
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-11-layer-3" 
									data-type="text"
									data-color="#000000"
									data-rsp_ch="on"
									data-xy="x:l,l,l,c;xo:0,30px,22px,-76px;yo:200px,225px,202px,188px;"
									data-text="w:normal;s:90,70,53,34;l:90,70,53,36;fw:700;"
									data-frame_0="x:175%;o:1;"
									data-frame_0_mask="u:t;x:-100%;"
									data-frame_1="e:power3.out;st:1360;sp:1000;sR:1360;"
									data-frame_1_mask="u:t;"
									data-frame_999="o:0;st:w;sR:6640;"
									style="z-index:9;font-family:'Space Grotesk';text-transform:capitalize;"
								>the new logistic <br> revolutions. 
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-11-layer-4" 
									data-type="text"
									data-color="#000000"
									data-rsp_ch="on"
									data-xy="x:l,r,r,r;xo:275px,30px,22px,12px;yo:398px,398px,344px,278px;"
									data-text="w:normal;s:22,19,17,17;l:26,22,24,28;fw:500;"
									data-dim="w:877px,767px,582px,439px;h:79px,69px,52px,auto;"
									data-frame_0="x:175%;o:1;"
									data-frame_0_mask="u:t;x:-100%;"
									data-frame_1="e:power3.out;st:1770;sp:1000;sR:1770;"
									data-frame_1_mask="u:t;"
									data-frame_999="o:0;st:w;sR:6230;"
									style="z-index:10;font-family:'Schibsted Grotesk';"
								>It was popularized in the 1960s with the release of<br> Letterset sheets containing.  
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-11-layer-6" 
									data-type="image"
									data-rsp_ch="on"
									data-xy="xo:105px,91px,69px,42px;yo:403px,407px,359px,292px;"
									data-text="w:normal;s:20,17,12,7;l:0,21,15,9;"
									data-dim="w:107px,93px,70px,43px;h:36px,31px,23px,14px;"
									data-vbility="t,t,t,f"
									data-frame_0="x:-50,-43,-32,-19;"
									data-frame_1="st:1770;sp:1000;"
									data-frame_999="o:0;st:w;"
									data-loop_0="x:-10px;"
									data-loop_999="x:10px;sp:4500;e:sine.inOut;yym:t;"
									style="z-index:13;"
								><img src="/assets/revolution/images/slider-sharp.png" alt="" class="tp-rs-img" width="107" height="36" data-no-retina> 
								</rs-layer><!--
	-->						</rs-slide>
							<rs-slide style="position: absolute;" data-key="rs-12" data-title="Slide" data-thumb="/assets/revolution/images/slider-1-50x100.jpg" data-in="o:0;" data-out="a:false;">
								<img src="/assets/revolution/images/slider-1.jpg" alt="" title="slider-1" width="1920" height="771" class="rev-slidebg tp-rs-img" data-bg="p:center top;f:auto;" data-no-retina>
	<!--
								--><rs-layer
									id="slider-4-slide-12-layer-0" 
									data-type="image"
									data-rsp_ch="on"
									data-xy="xo:31px,43px,32px,19px;y:b;yo:40px,7px,5px,6px;"
									data-text="w:normal;s:20,17,12,7;l:0,21,15,9;"
									data-dim="w:1076px,941px,714px,440px;h:450px,357px,271px,167px;"
									data-frame_0="x:right;"
									data-frame_1="st:600;sp:2000;sR:600;"
									data-frame_999="o:0;st:w;sR:6400;"
									data-loop_0="y:-15px;"
									data-loop_999="y:15px;sp:6000;e:sine.inOut;yym:t;"
									style="z-index:8;"
								><img src="/assets/revolution/images/test3.png" alt="" class="tp-rs-img" width="1187" height="450" data-no-retina> 
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-12-layer-2" 
									class="rev-btn"
									data-type="button"
									data-color="#0b4bd3"
									data-rsp_ch="on"
									data-xy="x:r;xo:49px,77px,58px,35px;yo:260px,324px,246px,151px;"
									data-text="w:normal;s:16,14,10,6;l:18,15,11,6;ls:-0.4px,0px,0px,0px;fw:500;"
									data-dim="minh:0px,none,none,none;"
									data-vbility="t,t,f,f"
									data-padding="t:55,40,30,19;r:50,40,30,19;b:55,40,30,19;l:50,40,30,19;"
									data-border="bor:50%,50%,50%,50%;"
									data-frame_0="sX:0.9;sY:0.9;"
									data-frame_1="e:power2.inOut;st:1960;sp:1000;sR:1960;"
									data-frame_999="o:0;st:w;sR:6040;"
									data-frame_hover="c:#000;bgc:#fff;bor:50%,50%,50%,50%;sp:200;e:power1.inOut;"
									style="z-index:12;background-color:#ffffff;font-family:'Space Grotesk';"
								>Learn<br> More 
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-12-layer-3" 
									data-type="text"
									data-color="#000000"
									data-rsp_ch="on"
									data-xy="x:l,l,l,c;xo:0,30px,22px,-76px;yo:200px,225px,202px,188px;"
									data-text="w:normal;s:90,70,53,34;l:90,70,53,36;fw:700;"
									data-frame_0="x:175%;o:1;"
									data-frame_0_mask="u:t;x:-100%;"
									data-frame_1="e:power3.out;st:1360;sp:1000;sR:1360;"
									data-frame_1_mask="u:t;"
									data-frame_999="o:0;st:w;sR:6640;"
									style="z-index:9;font-family:'Space Grotesk';text-transform:capitalize;"
								>the new logistic <br> revolutions. 
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-12-layer-4" 
									data-type="text"
									data-color="#000000"
									data-rsp_ch="on"
									data-xy="x:l,r,r,r;xo:275px,30px,22px,12px;yo:398px,398px,344px,278px;"
									data-text="w:normal;s:22,19,17,17;l:26,22,24,28;fw:500;"
									data-dim="w:877px,767px,582px,445px;h:79px,69px,52px,auto;"
									data-frame_0="x:175%;o:1;"
									data-frame_0_mask="u:t;x:-100%;"
									data-frame_1="e:power3.out;st:1770;sp:1000;sR:1770;"
									data-frame_1_mask="u:t;"
									data-frame_999="o:0;st:w;sR:6230;"
									style="z-index:10;font-family:'Schibsted Grotesk';"
								>It was popularized in the 1960s with the release of<br> Letterset sheets containing.  
								</rs-layer><!--

								--><rs-layer
									id="slider-4-slide-12-layer-6" 
									data-type="image"
									data-rsp_ch="on"
									data-xy="xo:105px,91px,69px,42px;yo:403px,407px,359px,292px;"
									data-text="w:normal;s:20,17,12,7;l:0,21,15,9;"
									data-dim="w:107px,93px,70px,43px;h:36px,31px,23px,14px;"
									data-vbility="t,t,t,f"
									data-frame_0="x:-50,-43,-32,-19;"
									data-frame_1="st:1770;sp:1000;"
									data-frame_999="o:0;st:w;"
									data-loop_0="x:-10px;"
									data-loop_999="x:10px;sp:4500;e:sine.inOut;yym:t;"
									style="z-index:13;"
								><img src="/assets/revolution/images/slider-sharp.png" alt="" class="tp-rs-img" width="107" height="36" data-no-retina> 
								</rs-layer><!--
	-->						</rs-slide>
						</rs-slides>
						<rs-static-layers><!--
						--></rs-static-layers>
					</rs-module>
				</rs-module-wrap>
				<!-- END REVOLUTION SLIDER -->
            </div>
        </header>
        <!-- Header Main Area End Here -->

        <!-- Page Content -->
        <div class="page-content">
            
            <!-- Marquee --> 
            <!-- <section class="marquee_one">
				<div class="container-fluid p-0">
					<div class="swiper-slider marquee">
						<div class="swiper-wrapper">
							<article class="swiper-slide pbmit-marquee-effect-style-1">
								<div class="pbmit-tag-wrapper">
									<h2 class="pbmit-element-title" data-text="Real-time Tracking">
										Real-time Tracking    
									</h2>
								</div>
							</article>
							<article class="swiper-slide pbmit-marquee-effect-style-1">
								<div class="pbmit-tag-wrapper">
									<h2 class="pbmit-element-title" data-text="Transparent Pricing">
										Transparent Pricing    
									</h2>
								</div>
							</article>
							<article class="swiper-slide pbmit-marquee-effect-style-1">
								<div class="pbmit-tag-wrapper">
									<h2 class="pbmit-element-title" data-text="Warehouse">
										Warehouse    
									</h2>
								</div>
							</article>
						</div>
					</div>
				</div>
            </section>             -->
            <!-- Marquee End   -->

            <!-- Service Start -->
            <section class="section-lgt pbmit-element-service-style-1 service_one">
				<div id="CalculateOrder" class="container pbmit-col-stretched-yes pbmit-col-right p-0">
					<!-- <div class="pbmit-col-stretched-right"> -->
						<!-- <div class="pbmit-element-posts-wrapper row">
							<article class="pbmit-service-style-1">
								<div class="pbminfotech-post-item">
									<div class="pbmit-service-img-wrapper" style="background-image: url(/assets/images/homepage-1/service/service-01.jpg);">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="/assets/images/homepage-1/service/service-01.jpg" class="img-fluid" alt="">
											</div>
										</div>
									</div>
									<div class="pbminfotech-box-content">
										<div class="pbminfotech-box-number">01</div>
										<h3 class="pbmit-service-title">
											<a href="/service-details.php">Air Freight</a>
										</h3>
										<div class="pbmit-svg-btn">
											<a class="btn-arrow" href="/service-details.php">
												<i class="pbmit-base-icon-right-arrow-2"></i>
											</a>
										</div>
									</div>
									<div class="pbminfotech-icon-box">
										<img src="/assets/images/homepage-1/service/service-01.jpg" alt="">
									</div>
								</div>
							</article>
							<article class="pbmit-service-style-1">
								<div class="pbminfotech-post-item">
									<div class="pbmit-service-img-wrapper" style="background-image: url(/assets/images/homepage-1/service/service-02.jpg);">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="/assets/images/homepage-1/service/service-02.jpg" class="img-fluid" alt="">
											</div>
										</div>
									</div>
									<div class="pbminfotech-box-content">
										<div class="pbminfotech-box-number">02</div>
										<h3 class="pbmit-service-title">
											<a href="/service-details.php">Train Freight</a>
										</h3>
										<div class="pbmit-svg-btn">
											<a class="btn-arrow" href="/service-details.php">
												<i class="pbmit-base-icon-right-arrow-2"></i>
											</a>
										</div>
									</div>
									<div class="pbminfotech-icon-box">
										<img src="/assets/images/homepage-1/service/service-02.jpg" alt="">
									</div>
								</div>
							</article>
							<article class="pbmit-service-style-1">
								<div class="pbminfotech-post-item">
									<div class="pbmit-service-img-wrapper" style="background-image: url(/assets/images/homepage-1/service/service-03.jpg);">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="/assets/images/homepage-1/service/service-03.jpg" class="img-fluid" alt="">
											</div>
										</div>
									</div>
									<div class="pbminfotech-box-content">
										<div class="pbminfotech-box-number">03</div>
										<h3 class="pbmit-service-title">
											<a href="/service-details.php">Sea Freight</a>
										</h3>
										<div class="pbmit-svg-btn">
											<a class="btn-arrow" href="/service-details.php">
												<i class="pbmit-base-icon-right-arrow-2"></i>
											</a>
										</div>
									</div>
									<div class="pbminfotech-icon-box">
										<img src="/assets/images/homepage-1/service/service-03.jpg" alt="">
									</div>
								</div>
							</article>
							<article class="pbmit-service-style-1">
								<div class="pbminfotech-post-item">
									<div class="pbmit-service-img-wrapper" style="background-image: url(/assets/images/homepage-1/service/service-04.jpg);">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="/assets/images/homepage-1/service/service-04.jpg" class="img-fluid" alt="">
											</div>
										</div>
									</div>
									<div class="pbminfotech-box-content">
										<div class="pbminfotech-box-number">04</div>
										<h3 class="pbmit-service-title">
											<a href="/service-details.php">Road Freight</a>
										</h3>
										<div class="pbmit-svg-btn">
											<a class="btn-arrow" href="/service-details.php">
												<i class="pbmit-base-icon-right-arrow-2"></i>
											</a>
										</div>
									</div>
									<div class="pbminfotech-icon-box">
										<img src="/assets/images/homepage-1/service/service-04.jpg" alt="">
									</div>
								</div>
							</article>
							<article class="pbmit-service-style-1">
								<div class="pbminfotech-post-item">
									<div class="pbmit-service-img-wrapper" style="background-image: url(/assets/images/homepage-1/service/service-05.jpg);">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="/assets/images/homepage-1/service/service-05.jpg" class="img-fluid" alt="">
											</div>
										</div>
									</div>
									<div class="pbminfotech-box-content">
										<div class="pbminfotech-box-number">05</div>
										<h3 class="pbmit-service-title">
											<a href="/service-details.php">Stow Ability</a>
										</h3>
										<div class="pbmit-svg-btn">
											<a class="btn-arrow" href="/service-details.php">
												<i class="pbmit-base-icon-right-arrow-2"></i>
											</a>
										</div>
									</div>
									<div class="pbminfotech-icon-box">
										<img src="/assets/images/homepage-1/service/service-05.jpg" alt="">
									</div>
								</div>
							</article>
						</div> -->
						<form  method="post" action="/index.php?act=calculate">
							<div class="form1">
								<div class="mb-3">
									<label for="transportFrom" class="form-label">Transport car FROM</label>
									<input type="text" class="form-control" id="transportFrom" name="transportFrom" placeholder="ZIP or City" required>
									<ul class="results-1"></ul>

									<select id="selectOptions" class="form-select  form-select-lg mb-3" multiple style="display: none; z-index: 999; height: auto; position: absolute; width: 60%;">
									<!-- Options will be dynamically added here -->
									</select>
								</div>
								<div class="mb-3">
									<label for="transportTo" class="form-label">Transport car TO</label>
									<input type="text" class="form-control" id="transportTo" name="transportTo" placeholder="ZIP or City" required>
									<ul class="results-2"></ul>

									<select id="selectOptions2" class="form-select  form-select-lg mb-3" multiple style="display: none; z-index: 999; height: auto; position: absolute; width: 60%;">
									<!-- Options will be dynamically added here -->
									</select>
								</div>
								<label for="transportType" class="form-label">Transport type</label>
								<div class="mb-3 d-flex gap-3" id="transportType">
									<div class="form-check">
										<input type="radio" class="form-check-input" id="open" name="transportType" value="open">
										<label class="form-check-label" for="open">Open</label>
									</div>

									<div class="form-check">
										<input type="radio" class="form-check-input" id="enclosed" name="transportType" value="enclosed">
										<label class="form-check-label" for="enclosed">Enclosed</label>
									</div>
								</div>

								<button type="button" class="btn btn-primary w-100" onclick="showForm2()">Vehicle details</button>
							</div>
							
							<div class="form2" style="display: none;">
								<div class="row">
									<div class="col mb-3">
										<label for="vehicleYear" class="form-label">Vehicle year</label>
										<select class="form-select" name="vehicleYear" id="vehicleYear" aria-label="Make year">
											<option selected>Make year</option>
											<?for ($i=2024; $i > 1899; $i--) { 
												echo "<option value='".$i."'>".$i."</option>";
											}?>
										</select>
									</div>
									<div class="col mb-3">
										<label for="vehicleMake" class="form-label">Vehicle make</label>
										<select class="form-select" name="vehicleMake" id="vehicleMake" aria-label="Vehicle make">
											<option selected>Vehicle make</option>
											<option value="">Vehicle make</option>
											<option value="acura">Acura</option>
											<option value="alfa-romeo">Alfa romeo</option>
											<option value="aston-martin">Aston martin</option>
											<option value="audi">Audi</option>
											<option value="bentley">Bentley</option>
											<option value="bmw">Bmw</option>
											<option value="buick">Buick</option>
											<option value="cadillac">Cadillac</option>
											<option value="chevrolet">Chevrolet</option>
											<option value="chrysler">Chrysler</option>
											<option value="dodge">Dodge</option>
											<option value="delorean">Delorean</option>
											<option value="ferrari">Ferrari</option>
											<option value="fiat">Fiat</option>
											<option value="ford">Ford</option>
											<option value="gmc">Gmc</option>
											<option value="honda">Honda</option>
											<option value="hyundai">Hyundai</option>
											<option value="infiniti">Infiniti</option>
											<option value="jaguar">Jaguar</option>
											<option value="jeep">Jeep</option>
											<option value="lamborgini">Lamborgini</option>
											<option value="land-rover">Land rover</option>
											<option value="lexus">Lexus</option>
											<option value="lincoln">Lincoln</option>
											<option value="maserati">Maserati</option>
											<option value="mazda">Mazda</option>
											<option value="mercedes-benz">Mercedes benz</option>
											<option value="mclaren">Mclaren</option>
											<option value="mini">Mini</option>
											<option value="mitsubishi">Mitsubishi</option>
											<option value="nissan">Nissan</option>
											<option value="polestar">Polestar</option>
											<option value="porsche">Porsche</option>
											<option value="ram">Ram</option>
											<option value="rolls-royce">Rolls-royce</option>
											<option value="smart">Smart</option>
											<option value="subaru">Subaru</option>
											<option value="tesla-motors">Tesla</option>
											<option value="toyota">Toyota</option>
											<option value="volkswagen">Volkswagen</option>
											<option value="volvo">Volvo</option>
											<option value="alpine">Alpine</option>
											<option value="ariel">Ariel</option>
											<option value="aro">Aro</option>
											<option value="bristol">Bristol</option>
											<option value="bufori">Bufori</option>
											<option value="bugatti">Bugatti</option>
											<option value="caterham">Caterham</option>
											<option value="citroen">Citroen</option>
											<option value="cupra">Cupra</option>
											<option value="dacia">Dacia</option>
											<option value="daewoo">Daewoo</option>
											<option value="daihatsu">Daihatsu</option>
											<option value="datsun">Datsun</option>
											<option value="donkervoort">Donkervoort</option>
											<option value="dr-motor">Dr-motor</option>
											<option value="ds-automobiles">Ds-automobiles</option>
											<option value="fisker">Fisker</option>
											<option value="fso">Fso</option>
											<option value="geely">Geely</option>
											<option value="genesis">Genesis</option>
											<option value="gta-motor">Gta-motor</option>
											<option value="hindustan">Hindustan</option>
											<option value="holden">Holden</option>
											<option value="hummer">Hummer</option>
											<option value="isuzu">Isuzu</option>
											<option value="karma">Karma</option>
											<option value="kia">Kia</option>
											<option value="koenigsegg">Koenigsegg</option>
											<option value="ktm">Ktm</option>
											<option value="lada">Lada</option>
											<option value="lamborghini">Lamborghini</option>
											<option value="lancia">Lancia</option>
											<option value="lotus">Lotus</option>
											<option value="mahindra">Mahindra</option>
											<option value="marussia">Marussia</option>
											<option value="maruti-suzuki">Maruti-suzuki</option>
											<option value="maybach">Maybach</option>
											<option value="mercedes-amg">Mercedes-amg</option>
											<option value="mercury">Mercury</option>
											<option value="mg">Mg</option>
											<option value="morgan">Morgan</option>
											<option value="oldsmobile">Oldsmobile</option>
											<option value="opel">Opel</option>
											<option value="pagani">Pagani</option>
											<option value="panoz">Panoz</option>
											<option value="perodua">Perodua</option>
											<option value="peugeot">Peugeot</option>
											<option value="pininfarina">Pininfarina</option>
											<option value="pontiac">Pontiac</option>
											<option value="proton">Proton</option>
											<option value="qoros">Qoros</option>
											<option value="ram-trucks">Ram-trucks</option>
											<option value="renault">Renault</option>
											<option value="saab">Saab</option>
											<option value="saleen">Saleen</option>
											<option value="samsung">Samsung</option>
											<option value="santana">Santana</option>
											<option value="saturn">Saturn</option>
											<option value="scion">Scion</option>
											<option value="seat">Seat</option>
											<option value="skoda">Skoda</option>
											<option value="spyker">Spyker</option>
											<option value="ssangyong">Ssangyong</option>
											<option value="suzuki">Suzuki</option>
											<option value="tata-motors">Tata-motors</option>
											<option value="tesla">Tesla</option>
											<option value="tvr">Tvr</option>
											<option value="vauxhall">Vauxhall</option>
											<option value="wiesmann">Wiesmann</option>
											<option value="zender">Zender</option>
											<option value="zenvo">Zenvo</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<label for="vehicleModel" class="form-label">Vehicle model</label>
										<!-- <select class="form-select" name="vehicleModel" id="vehicleModel" aria-label="Vehicle model">
											<option selected>Vehicle model</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select> -->
										<input type="text" class="form-control" id="vehicleModel" name="vehicleModel" placeholder="Vehicle model" required>
									</div>
								</div>
								<div class="row ml-0">
									<label for="operable" class="form-label mt-3">Is it operable?</label>
									<div class="mb-3 d-flex gap-3" id="operable">
										<div class="form-check">
											<input type="radio" class="form-check-input" id="operable1" name="operable" value="yes">
											<label class="form-check-label" for="operable1">Yes</label>
										</div>

										<div class="form-check">
											<input type="radio" class="form-check-input" id="operable2" name="operable" value="no">
											<label class="form-check-label" for="operable2">No</label>	
										</div>
									</div>
								</div>

								<button type="button" class="btn btn-primary w-100 mb-3" onclick="showForm3()">Vehicle details</button>
								<span class="text-secondary" onclick="showForm1()"> <i class="fa-solid fa-arrow-left" ></i> Previous step</span>
							</div>

							<div class="form3" style="display: none;">
								
								<div class="row">
									<div class="col">
										<label for="emailForm" class="form-label">Your Email</label>
										<input type="email" class="form-control" id="emailForm" name="email" placeholder="Email Address" required>
									</div>
								</div>

								<div class="row">
									<div class="col mb-3">
										<label for="dateForm" class="form-label">First available date</label>
										<input type="date" class="form-control" id="dateForm" name="date" lang="en-US" required>
									</div>
									<div class="col mb-3">
										<label for="phoneForm" class="form-label">Phone number</label>
										<input type="text" class="form-control" id="phoneForm" name="phone" placeholder="Phone number" required>
									</div>
								</div>
								

								<button type="submit" class="btn btn-primary w-100 mb-3">Submit</button>
								<span class="text-secondary"  onclick="showForm2()"> <i class="fa-solid fa-arrow-left"></i> Previous step</span>
							</div>
						</form>
					<!-- </div> -->
				</div>
            </section>
            <!-- Service End --> 

            <!-- About Us Start --> 
            <section class="about-us_one">
				<div class="container">
					<div class="row g-0">
						<div class="col-md-12 col-xl-6">
							<div class="about-one_imgbox">
								<div class="about-one_img1">
									<img src="/assets/images/homepage-1/about-us-01.png" class="img-fluid" alt="">
								</div>
								<div class="about-one_img2">
									<img src="/assets/images/homepage-1/about-us-02.png" class="img-fluid" alt="">
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-6">
							<div class="about-one_rightbox">
								<div class="pbmit-heading-subheading">
									<h4 class="pbmit-subtitle">About Us</h4>
									<h2 class="pbmit-title">Shipments delivered on time with no hassle.</h2>
									<div class="pbmit-heading_desc">
										Our team discussed every single detail to make sure is the most versatile and unique theme created so far.No coding skills required to create unique sites.
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<ul class="list-group list-group-borderless">
											<li class="list-group-item">
												<span class="pbmit-icon-list-icon">
													<i aria-hidden="true" class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
												</span>
												<span class="pbmit-icon-list-text">Monthly Checkups</span>
											</li>
											<li class="list-group-item">
												<span class="pbmit-icon-list-icon">
													<i aria-hidden="true" class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
												</span>
												<span class="pbmit-icon-list-text">Caring Medical Team</span>
											</li>
											<li class="list-group-item">
												<span class="pbmit-icon-list-icon">
													<i aria-hidden="true" class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
												</span>
												<span class="pbmit-icon-list-text">Proactive and Fast Results</span>
											</li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="list-group list-group-borderless">
											<li class="list-group-item">
												<span class="pbmit-icon-list-icon">
													<i aria-hidden="true" class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
												</span>
												<span class="pbmit-icon-list-text">Monthly Checkups</span>
											</li>
											<li class="list-group-item">
												<span class="pbmit-icon-list-icon">
													<i aria-hidden="true" class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
												</span>
												<span class="pbmit-icon-list-text">Caring Medical Team</span>
											</li>
											<li class="list-group-item">
												<span class="pbmit-icon-list-icon">
													<i aria-hidden="true" class="pbmit-logistbiz-icon pbmit-logistbiz-icon-check"></i>
												</span>
												<span class="pbmit-icon-list-text">Proactive and Fast Results</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="about-one-bottom_box">
									<div class="row g-0 align-items-center">
										<div class="col-md-3 col-xl-4">
											<a class="pbmit-btn pbmit-btn-outline" onclick="document.getElementById('CalculateOrder').scrollIntoView({block: 'center'});">Get Quote</a>
										</div>
										<div class="col-md-9 col-xl-8">
											<div class="pbmit-ihbox-style-1">
												<a class="pbmit-ihbox-headingicon d-flex"  href="tel:+1 (571)-771-37-33">
													<div class="pbmit-ihbox-icon">
														<div class="pbmit-ihbox-icon-wrapper">
															<div class="pbmit-icon-wrapper pbmit-icon-type-icon">
																<i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-call"></i>
															</div>
														</div>
													</div>
													<div class="pbmit-ihbox-contents">
														<div class="pbmit-heading-desc">Call us today</div>
														<h2 style="font-size: 24px">+1 (571)-771-37-33</h2>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </section>
            <!-- About Us End -->

            <!-- Ihbox Start -->
            <section class="active-onhover">
				<div class="container">
					<div class="pbmit-heading-subheading">
						<h4 class="pbmit-subtitle">Why logistic</h4>
						<h2 class="pbmit-title">Why should you choose <br> our services?</h2>
					</div>
					<div class="ihbox-section_one">
						<div class="row">
							<article class="pbmit-miconheading-style-3 col-md-12">
								<div class="pbmit-ihbox-style-3">
									<div class="pbmit-ihbox-box d-flex">
										<div class="pbmit-ihbox-box-number">01</div>
										<div class="pbmit-ihbox-number">
											<h2 class="pbmit-element-title">
												Real-time <br>Tracking
											</h2>
										</div>
										<div class="pbmit-ihbox-contents">
											<div class="pbmit-heading-desc">Labore dolore magna aliqua enim ad min imveniam quis nostrud exercitation.</div>
										</div>
										<div class="pbmit-ihbox-img">
											<div class="pbmit-ihbox-icon">
												<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
													<img src="/assets/images/homepage-1/ihbox/hover-img-01.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
							<article class="pbmit-miconheading-style-3 col-md-12">
								<div class="pbmit-ihbox-style-3">
									<div class="pbmit-ihbox-box d-flex">
										<div class="pbmit-ihbox-box-number">02</div>
										<div class="pbmit-ihbox-number">
											<h2 class="pbmit-element-title">
												Transparent <br>Pricing
											</h2>
										</div>
										<div class="pbmit-ihbox-contents">
											<div class="pbmit-heading-desc">Labore dolore magna aliqua enim ad min imveniam quis nostrud exercitation.</div>
										</div>
										<div class="pbmit-ihbox-img">
											<div class="pbmit-ihbox-icon">
												<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
													<img src="/assets/images/homepage-1/ihbox/hover-img-02.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
							<article class="pbmit-miconheading-style-3 col-md-12">
								<div class="pbmit-ihbox-style-3">
									<div class="pbmit-ihbox-box d-flex">
										<div class="pbmit-ihbox-box-number">03</div>
										<div class="pbmit-ihbox-number">
											<h2 class="pbmit-element-title">
												On Time <br>Delivery
											</h2>
										</div>
										<div class="pbmit-ihbox-contents">
											<div class="pbmit-heading-desc">Labore dolore magna aliqua enim ad min imveniam quis nostrud exercitation.</div>
										</div>
										<div class="pbmit-ihbox-img">
											<div class="pbmit-ihbox-icon">
												<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
													<img src="/assets/images/homepage-1/ihbox/hover-img-04.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
							<article class="pbmit-miconheading-style-3 col-md-12">
								<div class="pbmit-ihbox-style-3">
									<div class="pbmit-ihbox-box d-flex">
										<div class="pbmit-ihbox-box-number">04</div>
										<div class="pbmit-ihbox-number">
											<h2 class="pbmit-element-title">
												Security For <br>Vehicle
											</h2>
										</div>
										<div class="pbmit-ihbox-contents">
											<div class="pbmit-heading-desc">Labore dolore magna aliqua enim ad min imveniam quis nostrud exercitation.</div>
										</div>
										<div class="pbmit-ihbox-img">
											<div class="pbmit-ihbox-icon">
												<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
													<img src="/assets/images/homepage-1/ihbox/hover-img-05.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
            </section>
            <!-- Ihbox End --> 

			<!-- Testimonial Start -->
			<section class="section-lgb overflow-hidden m-5">
				<div class="container pbmit-col-stretched-yes pbmit-col-left">
					<div class="row g-0">
						<div class="col-md-12 col-xl-6">
							<div  style="height: 50vh;" class="swiper-slider" data-arrows-class="testimonial-one_arrow" data-loop="true" data-autoplay="true" data-dots="false" data-arrows="true" data-columns="1" data-margin="30" data-effect="slide">
								<div class="swiper-wrapper">
									<div class="swiper-slide" >
										<div class="">
											<img src="/assets/images/swipe1.png" class="img-fluid" width="100%" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="">
											<img src="/assets/images/swipe2.png" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-6">
							<div class="pbmit-heading-subheading">
								<h4 class="pbmit-subtitle">Testimonials</h4>
								<h2 class="pbmit-title">What our happy clients say about?</h2>
							</div>
							<div class="testimonial-one_arrow swiper-btn-custom d-flex flex-row-reverse"></div>
							<div class="swiper-slider" data-arrows-class="testimonial-one_arrow" data-loop="true" data-autoplay="true" data-dots="false" data-arrows="true" data-columns="1" data-margin="30" data-effect="slide">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<!-- Slide1 -->
										<article class="pbmit-testimonial-style-2">
											<div class="pbminfotech-post-item">
												<div class="pbminfotech-box-desc">
													<blockquote class="pbminfotech-testimonial-text">
														<p>“It was really great working with Nurex team and I am happy I was introduced to this team! It’s not easy to work on a website some”</p>
													</blockquote>
												</div>
												<div class="pbminfotech-box-author d-flex align-items-center">
													<div class="pbminfotech-box-img">
														<div class="pbmit-featured-img-wrapper">
															<div class="pbmit-featured-wrapper">
																<img src="/assets/images/homepage-1/testimonial/testimonial-01.png" alt="">
															</div>
														</div>
													</div>
													<div class="pbmit-auther-content">
														<h3 class="pbminfotech-box-title">Porter Victoria</h3>
														<div class="pbminfotech-testimonial-detail">Ceo &amp; Founder</div>
													</div>
												</div>
											</div>
										</article>
									</div>
									<div class="swiper-slide">
										<!-- Slide2 -->
										<article class="pbmit-testimonial-style-2">
											<div class="pbminfotech-post-item">
												<div class="pbminfotech-box-desc">
													<blockquote class="pbminfotech-testimonial-text">
														<p>“It was really great working with Nurex team and I am happy I was introduced to this team! It’s not easy to work on a website some”</p>
													</blockquote>
												</div>
												<div class="pbminfotech-box-author d-flex align-items-center">
													<div class="pbminfotech-box-img">
														<div class="pbmit-featured-img-wrapper">
															<div class="pbmit-featured-wrapper">
																<img src="/assets/images/homepage-1/testimonial/testimonial-02.png" alt="">
															</div>
														</div>
													</div>
													<div class="pbmit-auther-content">
														<h3 class="pbminfotech-box-title">David Wrner</h3>
														<div class="pbminfotech-testimonial-detail">Ceo & Founder</div>
													</div>
												</div>
											</div>
										</article>
									</div>
									<div class="swiper-slide">
										<!-- Slide3 -->
										<article class="pbmit-testimonial-style-2">
											<div class="pbminfotech-post-item">
												<div class="pbminfotech-box-desc">
													<blockquote class="pbminfotech-testimonial-text">
														<p>“It was really great working with Nurex team and I am happy I was introduced to this team! It’s not easy to work on a website some”</p>
													</blockquote>
												</div>
												<div class="pbminfotech-box-author d-flex align-items-center">
													<div class="pbminfotech-box-img">
														<div class="pbmit-featured-img-wrapper">
															<div class="pbmit-featured-wrapper">
																<img src="/assets/images/homepage-1/testimonial/testimonial-03.png" alt="">
															</div>
														</div>
													</div>
													<div class="pbmit-auther-content">
														<h3 class="pbminfotech-box-title">John Martin</h3>
														<div class="pbminfotech-testimonial-detail">Ceo & Founder</div>
													</div>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			

			<section class="reviews">
        <div class="owl-carousel owl-theme owl-loaded owl-drag">
            <div class="d-flex review_head align-items-center justify-content-between">
                <h3 class="text-white">Reviews</h3>
            </div>
            <div class="owl-stage-outer review_cards">
                <div class="owl-stage" style="width: 6289px; transform: translate3d(-2979px, 0px, 0px); transition: all 0.25s ease 0s;"><div class="owl-item card_content cloned" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Transportation Service</h3>
                                            <h4 class="adress">Kent</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Great people to work with, Transported a couple vehicles for them. Always making sure things are going good. Looking forward to continue working together</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div><div class="owl-item card_content cloned" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Gregiry</h3>
                                            <h4 class="adress">Florida</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Paul was very communicative and helpful in getting my car from Miami, FL to Atlanta, GA. Process was easy and car arrived in 1 day. Price was reasonable and much less than other companies.</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div><div class="owl-item card_content cloned" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Dui</h3>
                                            <h4 class="adress">Texas</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Perfect customer service. Jake keeps updating the status from scheduling the pick up to upon delivery. Would recommend the service from Jake!! Would recommend the service from Jake!! Would recommend the service from Jake!!</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div><div class="owl-item card_content cloned" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Joanne Dyer</h3>
                                            <h4 class="adress">Indiana</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>I shipped my car from FL to GA. Nurex helped me to get it done. All went very smoothly. I would really appreciate their help. And I would recommend this company to use.</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div><div class="owl-item card_content cloned" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Brianna Winslow</h3>
                                            <h4 class="adress">Arizona</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>I recommend specially Nurex LLC. The main reason of this recommendation is the great service for my vehicle transport. Thanks for this service!</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div>
                    
                    
                        <div class="owl-item card_content" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Julie Gibbs</h3>
                                            <h4 class="adress">Washingtan</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>I am extremely satisfied with the service of this company. They Guaranteed two day delivery, yet I am pleased to report that they delivered my vehicle less than 24 hours! That is unheard of. I will recommend this company to anyone who need their vehicles in a hurry.</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div>
                    
                        <div class="owl-item card_content" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Beth</h3>
                                            <h4 class="adress">They Did An Excellent Job!</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>The one thing that stands out about these guys is their willingness to keep me in the loop. I had a vehicle ready for the return home, and knew exactly who would be best at auto transport service:</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div>
                    
                        <div class="owl-item card_content" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Kevin Alvarenga</h3>
                                            <h4 class="adress">My Experience With Nurex LLC</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>My situation was rough and pretty tight with in the time frame that was given but David Jones from Nurex LLC. was a blessing he stuck with me for many days back and fourth. Communication was excellent with a well timely manner,and David was very transparent about prices nothing to worry about or to have in the back of your head.</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div>
                    
                        <div class="owl-item card_content" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Transport</h3>
                                            <h4 class="adress">California</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Adam Johnson did a great job of getting my car shipped when others couldn't do it I appreciate his hard work and effort I will use them in the future as need be very reliable and trustworthy.</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div>
                    
                        <div class="owl-item card_content active" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Transportation Service</h3>
                                            <h4 class="adress">Kent</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Great people to work with, Transported a couple vehicles for them. Always making sure things are going good. Looking forward to continue working together</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div>
                    
                        <div class="owl-item card_content active" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Gregiry</h3>
                                            <h4 class="adress">Florida</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Paul was very communicative and helpful in getting my car from Miami, FL to Atlanta, GA. Process was easy and car arrived in 1 day. Price was reasonable and much less than other companies.</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div>
                    
                        <div class="owl-item card_content active" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Dui</h3>
                                            <h4 class="adress">Texas</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Perfect customer service. Jake keeps updating the status from scheduling the pick up to upon delivery. Would recommend the service from Jake!! Would recommend the service from Jake!! Would recommend the service from Jake!!</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div>
                    
                        <div class="owl-item card_content" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Joanne Dyer</h3>
                                            <h4 class="adress">Indiana</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>I shipped my car from FL to GA. Nurex helped me to get it done. All went very smoothly. I would really appreciate their help. And I would recommend this company to use.</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div>
                    
                        <div class="owl-item card_content" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Brianna Winslow</h3>
                                            <h4 class="adress">Arizona</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>I recommend specially Nurex LLC. The main reason of this recommendation is the great service for my vehicle transport. Thanks for this service!</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div>
                    
                <div class="owl-item card_content cloned" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Julie Gibbs</h3>
                                            <h4 class="adress">Washingtan</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>I am extremely satisfied with the service of this company. They Guaranteed two day delivery, yet I am pleased to report that they delivered my vehicle less than 24 hours! That is unheard of. I will recommend this company to anyone who need their vehicles in a hurry.</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div><div class="owl-item card_content cloned" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Beth</h3>
                                            <h4 class="adress">They Did An Excellent Job!</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>The one thing that stands out about these guys is their willingness to keep me in the loop. I had a vehicle ready for the return home, and knew exactly who would be best at auto transport service:</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div><div class="owl-item card_content cloned" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Kevin Alvarenga</h3>
                                            <h4 class="adress">My Experience With Nurex LLC</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>My situation was rough and pretty tight with in the time frame that was given but David Jones from Nurex LLC. was a blessing he stuck with me for many days back and fourth. Communication was excellent with a well timely manner,and David was very transparent about prices nothing to worry about or to have in the back of your head.</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div><div class="owl-item card_content cloned" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Transport</h3>
                                            <h4 class="adress">California</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Adam Johnson did a great job of getting my car shipped when others couldn't do it I appreciate his hard work and effort I will use them in the future as need be very reliable and trustworthy.</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div><div class="owl-item card_content cloned" style="width: 301px; margin-right: 30px;">
                        
                             <a>
                                <div class="review_card ">
                                    <div class="d-flex">
                                        <div>
                                            <h3 class="text-white user_name">Transportation Service</h3>
                                            <h4 class="adress">Kent</h4>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Great people to work with, Transported a couple vehicles for them. Always making sure things are going good. Looking forward to continue working together</p>
                                    </div>
                                    <div class="foot_card  d-flex">
                                        <div class="d-flex card_foot  align-items-center justify-content-between">
                                            <div class="stars  d-flex">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                                    <img class="star" src="/assets/ch/images/act_star.svg" alt="act_star">
                                                
                                            </div>
                                            <div class="logo">
                                                <img src="/assets/images/logo.png" alt="Nurex review">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        

                        </div></div>
            </div>
        <!-- <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M36 36C29.3726 42.6274 18.6274 42.6274 12 36C5.37258 29.3726 5.37258 18.6274 12 12C18.6274 5.37258 29.3726 5.37258 36 12" stroke="white" stroke-opacity="0.3" stroke-width="3" stroke-linecap="round"></path>
            <path d="M40.9719 24.0014H16.9707M16.9707 24.0014L25.1651 16.001M16.9707 24.0014L25.1651 32.0018" stroke="white" stroke-opacity="0.3" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg></button><button type="button" role="presentation" class="owl-next"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 36C18.6274 42.6274 29.3726 42.6274 36 36C42.6274 29.3726 42.6274 18.6274 36 12C29.3726 5.37258 18.6274 5.37258 12 12" stroke="white" stroke-opacity="0.3" stroke-width="3" stroke-linecap="round"></path>
            <path d="M7.02807 24.0014H31.0293M31.0293 24.0014L22.8349 16.001M31.0293 24.0014L22.8349 32.0018" stroke="white" stroke-opacity="0.3" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div> -->
			</section>
			<!-- Testimonial End -->

			<!-- Blog Start -->
			<!-- <section class="blog-section_one">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="pbmit-heading-subheading">
								<h4 class="pbmit-subtitle">Blogs</h4>
								<h2 class="pbmit-title">News & Articles</h2>
							</div>
						</div>
						<div class="col-md-6">
							<div class="blog-one_btn">
								<a class="pbmit-btn" href="blog-classic.html">Show All</a>
							</div>
						</div>
					</div>
					<div class="row">
						<article class="pbmit-ele-blog pbmit-blog-style-2 col-md-12">
							<div class="post-item">
								<div class="pbmit-blog-content d-flex align-items-center">
									<div class="pbmit-meta-date-wrapper">
										<span class="pbmit-day-wrap">24</span>
										<span class="pbmit-date-wrap">Aug 2023</span>
									</div>
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="/assets/images/homepage-1/blog/blog-01.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<div class="pbmit-box-content-wrapper">
										<div class="pbmit-category-comment-wraper d-flex align-items-center">
											<div class="pbmit-meta-cat-wrapper pbmit-meta-line">
												<div class="pbmit-meta-category">
													<a href="blog-classic.html" rel="category tag">Development</a>
												</div>
											</div>
										</div>
										<h3 class="pbmit-post-title">
											<a href="blog-single-details.html">Your Guide To Picking The Right Shipping Container</a>
										</h3>
									</div>
									<a class="pbmit-btn pbmit-btn-outline" href="blog-single-details.html">Read Continue</a>
								</div>
							</div>
						</article>
						<article class="pbmit-ele-blog pbmit-blog-style-2 col-md-12">
							<div class="post-item">
								<div class="pbmit-blog-content d-flex align-items-center">
									<div class="pbmit-meta-date-wrapper">
										<span class="pbmit-day-wrap">23</span>
										<span class="pbmit-date-wrap">Aug 2023</span>
									</div>
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="/assets/images/homepage-1/blog/blog-02.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<div class="pbmit-box-content-wrapper">
										<div class="pbmit-category-comment-wraper d-flex align-items-center">
											<div class="pbmit-meta-cat-wrapper pbmit-meta-line">
												<div class="pbmit-meta-category">
													<a href="blog-classic.html" rel="category tag">Construction</a>
												</div>
											</div>
										</div>
										<h3 class="pbmit-post-title">
											<a href="blog-single-details.html">The Guide On How to Ship Oversize Loads</a>
										</h3>
									</div>
									<a class="pbmit-btn pbmit-btn-outline" href="blog-single-details.html">Read Continue</a>
								</div>
							</div>
						</article>
						<article class="pbmit-ele-blog pbmit-blog-style-2 col-md-12">
							<div class="post-item">
								<div class="pbmit-blog-content d-flex align-items-center">
									<div class="pbmit-meta-date-wrapper">
										<span class="pbmit-day-wrap">22</span>
										<span class="pbmit-date-wrap">Aug 2023</span>
									</div>
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="/assets/images/homepage-1/blog/blog-03.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<div class="pbmit-box-content-wrapper">
										<div class="pbmit-category-comment-wraper d-flex align-items-center">
											<div class="pbmit-meta-cat-wrapper pbmit-meta-line">
												<div class="pbmit-meta-category">
													<a href="blog-classic.html" rel="category tag">Branding</a>
												</div>
											</div>
										</div>
										<h3 class="pbmit-post-title">
											<a href="blog-single-details.html">Remote Asset Monitoring and Control</a>
										</h3>
									</div>
									<a class="pbmit-btn pbmit-btn-outline" href="blog-single-details.html">Read Continue</a>
								</div>
							</div>
						</article>
					</div>
				</div>
			</section> -->
			<!-- Blog End -->

        </div>
        <!-- Page Content End -->

		<script src="/assets/ch/jquery.min.js"></script>
		<script src="https://unpkg.com/imask"></script>
		<script src="/assets/ch/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="/assets/ch/jquery.min_1.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="/assets/ch/owl.carousel.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="/assets/ch/carousel.js"></script>
		<script src="https://unpkg.com/scrollreveal"></script>
		<script src="/assets/ch/tom-select.complete.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
		<script src="/assets/ch/reveal.js"></script>
		<script src="/assets/ch/index.js"></script>
		<script src="/assets/ch/map.js"></script>
		<script src="/assets/ch/navbar.js"></script>


		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script>
$(document).ready(function() {
  $('#transportFrom').on('input', function() {
    var inputText = $(this).val().toLowerCase();
    $('#selectOptions').html('');
    var resultsList = $('.results-1');
	$.ajax({
		url: 'https://api.proshipautotransport.com/api/zip-codes?text='+inputText,
		method: 'GET',
		success: function(response) {
		  response.data.forEach(function(option) {
			$('#selectOptions').append(`<option> ${option.primary_city} ${option.state} ${option.name} </option>`);
		  })
		  $('#selectOptions').show();
		}
	});
  });
  

  $('#selectOptions').on('change', function() {
	$("#transportFrom").val($(this).val());
	$('#selectOptions').hide();
    
    var resultsList = $('.results-1');
    resultsList.html('');
    selectedOptions.forEach(function(option) {
      resultsList.append('<li>' + option + '</li>');
    });
  });

  $('#transportTo').on('input', function() {
    var inputText = $(this).val().toLowerCase();
    $('#selectOptions2').html('');
    var resultsList = $('.results-2');
    $.ajax({
		url: 'https://api.proshipautotransport.com/api/zip-codes?text='+inputText,
		method: 'GET',
		success: function(response) {
		  response.data.forEach(function(option) {
			$('#selectOptions2').append(`<option> ${option.primary_city} ${option.state} ${option.name} </option>`);
		  })
		  $('#selectOptions2').show();
		}
	});
  });
  

  $('#selectOptions2').on('change', function() {
	$("#transportTo").val($(this).val());
	$('#selectOptions2').hide();
    
    var resultsList = $('.results-2');
    resultsList.html('');
    selectedOptions.forEach(function(option) {
      resultsList.append('<li>' + option + '</li>');
    });
  });
	});
	function showForm1() {
		$(".form1").show();
		$(".form2").hide();
		$(".form3").hide();
	}
	function showForm2() {
		$(".form2").show();
		$(".form1").hide();
		$(".form3").hide();
	}
	function showForm3() {
		$(".form3").show();
		$(".form1").hide();
		$(".form2").hide();
	}

</script>

</script>
<?php
require('vendor/end.php');
}
?>