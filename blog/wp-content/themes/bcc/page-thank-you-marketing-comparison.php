<?php
/**
 * Template Name: Thank You Marketing COMPARISON - PUSH
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bcctheme
 */

get_header();
?>

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<section class="py-3">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div>
							<?php the_content(); ?>
						</div>						
					</div>				
				</div>
			</div>
			</section>	
					
		<?php endwhile; ?>	
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="marketing_title"><span class="highlight">Great News</span> - We've found an agency suited to you!</h1>
						<div class="marketing_subhead">Based on your questions we think the best agency for you is <br><span class="company">Push Group</span>.<br> We've passed your information onto them to give you a call to discuss what you need help on in a bit more detail. In the meantime here's a bit of information about their business.</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-12 banners-choice">
						<?php //Push Group Banner ?>
						<div id="banner1" class="banners-choice_item">
							<div class="banner-inner py-3">
								<div class="banner-inner_head">
									<div class="">
										<img src="/wp-content/themes/bcc/assets/images/push-1.png" style="max-width:140px;width: 100%; height:auto;"/>
									</div>
									<div class="">
										<img src="/wp-content/themes/bcc/assets/images/stars.png" style="max-width:100px;width: 100%; height:auto;"/><span style="font-size: 12px;padding-left: 5px;">Reviews</span>
									</div>
									<div class="">
										<i>"Push is a great mobile first company"<span class="t_author"> - Helene Ambiana, Google EMEA</span></i>
									</div>
									<div class="">
										<a href="https://www.pushgroup.co.uk/" target="_blank" class="mrkt_button">Learn More</a>
									</div>
								</div>
								<div class="banner-inner_body">
									<div class="">
										CREDENTIALS
										<ul class="mktn_usp">
											<li>Google Channel Partner</li>
											<li>Microsoft Elite Partner</li>
											<li>Facebook Premier Partner</li>
										</ul>
										<img style="max-width:190px;" src="/wp-content/themes/bcc/assets/images/ads-banner1.png" class="img-fluid">
									</div>
									<div class="">
										PUSH OFFERS
										<ul class="mktn_usp">
											<li>Google/Bing Paid Search</li>
											<li>Facebook Paid Search</li>
											<li>Instagram Paid Search</li>
											<li>Inbound Paid Search</li>
										</ul>
									</div>
									<div class="company_info">
										<ul>
											<li>Years Experience: 12</li>
											<li>Staff: 45</li>
											<li>Offices: 4</li>
											<li>HQ: London, UK</li>
										</ul>		 
									</div>
								</div>
								<div class="banner-inner_footer">
									<div class="banner-inner_icons">												
										<img src="/wp-content/themes/bcc/assets/images/ppc-icon.png" class="img-fluid">
										<div>PPC</div>	
									</div>
									<div class="banner-inner_icons">										
										<img src="/wp-content/themes/bcc/assets/images/seo-icon.png" class="img-fluid">
										<div>SEO</div>
									</div>
									<div class="banner-inner_icons">
										<img src="/wp-content/themes/bcc/assets/images/web-design.png" class="img-fluid">
										<div>WEB DESIGN</div>
									</div>
									<div class="banner-inner_icons">										
										<img src="/wp-content/themes/bcc/assets/images/content-icon.png" class="img-fluid">
										<div>CONTENT</div>	
									</div>
									<div class="banner-inner_icons">
										<img src="/wp-content/themes/bcc/assets/images/cro-icon.png" class="img-fluid">
										<div>CRO</div>	
									</div>
									<div class="banner-inner_icons">										
										<img src="/wp-content/themes/bcc/assets/images/pay-per-lead.png" class="img-fluid">
										<div class="text-center">LEADS</div>
									</div>
								</div>
							</div>
						</div>
						
						<?php //Bubble Banner ?>
						<div id="banner2" class="banners-choice_item">
							<div class="banner-inner py-3">
								<div class="banner-inner_head">
									<div class="">
										<img src="/wp-content/themes/bcc/assets/images/bubble-1.png" style="max-width:80px;width: 100%; height:auto;"/>
									</div>
									<div class="">
										<img src="/wp-content/themes/bcc/assets/images/stars.png" style="max-width:100px;width: 100%; height:auto;"/><span style="font-size: 12px;padding-left: 5px;">Reviews</span>
									</div>
									<div class="">
										<i>"The market's tough, sure - but we can take it. You just try us."<span class="t_author"> - Neil Sheth, Bubble Founder</span></i>
									</div>
									<div class="">
										<a href="https://bubbldigital.com/" target="_blank" class="mrkt_button-bubbl">Learn More</a>
									</div>
								</div>
								<div class="banner-inner_body">
									<div class="">
										AT A GLANCE:
										<ul class="mktn_usp">
											<li>London based with a global team</li>
											<li>5 years' experience delivering SEO and content campaigns</li>
										</ul>
									</div>
									<div class="">
										BUBBL OFFERS
										<ul class="mktn_usp">
											<li>Search Engine Optimisation</li>
											<li>Content Marketing</li>
										</ul>
									</div>
									<div class="company_info">
										<ul>
											<li>Bubbl are well-versed in creating and delivering pitch-perfect content campaigns. With a wealth of experience across verticals, their mix of inspired content and hyper-accurate technical SEO will have your web presence firing on all cylinders.</li>
										</ul>		 
									</div>
								</div>
								
								<div class="banner-inner_footer">
									<div class="banner-inner_icons">												
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/ppc-icon.png" />
										<div>PPC</div>	
									</div>
									<div class="banner-inner_icons">										
										<img src="/wp-content/themes/bcc/assets/images/seo-icon.png" />
										<div>SEO</div>
									</div>
									<div class="banner-inner_icons">
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/web-design.png" />
										<div>WEB DESIGN</div>
									</div>
									<div class="banner-inner_icons">										
										<img src="/wp-content/themes/bcc/assets/images/content-icon.png" />
										<div>CONTENT</div>	
									</div>
									<div class="banner-inner_icons">
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/cro-icon.png" />
										<div>CRO</div>	
									</div>
									<div class="banner-inner_icons">										
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/pay-per-lead.png" />
										<div class="text-center">LEADS</div>
									</div>
								</div>
								
							</div>
						</div>
						
						<?php //POP Creative Banner ?>
						<div id="banner3" class="banners-choice_item">
							<div class="banner-inner py-3">
								<div class="banner-inner_head">
									<div class="">
										<img src="/wp-content/themes/bcc/assets/images/pop-1.png" style="max-width:80px;width: 100%; height:auto;"/>
									</div>
									<div class="">
										<img src="/wp-content/themes/bcc/assets/images/stars.png" style="max-width:100px;width: 100%; height:auto;"/><span style="font-size: 12px;padding-left: 5px;">Reviews</span>
									</div>
									<div class="">
										<i>"We test and develop websites to convert more customers."<span class="t_author"> - POP's mission</span></i>
									</div>
									<div class="">
										<a href="https://www.popcreative.co.uk/" target="_blank" class="mrkt_button-pop">Learn More</a>
									</div>
								</div>
								<div class="banner-inner_body">
									<div class="">
										AT A GLANCE:
										<ul class="mktn_usp">
											<li>Experts in getting the most out of your website</li>
											<li>24/7 Customer Support</li>
											<li>15 years' hands-on data experience</li>
										</ul>
									</div>
									<div class="">
										POP OFFERS
										<ul class="mktn_usp">
											<li>Conversion Rate Optimisation</li>
											<li>Pro Performance</li>
											<li>Web Design & Development</li>
										</ul>
									</div>
									<div class="company_info">
										<ul>
											<li>Based out of their idyllic headquarters in the Shropshire countryside, there is nothing rustic about the service POP provides. When it comes to understanding how to optimise any website to deliver results, they know every trick in the book.</li>
											
										</ul>		 
									</div>
								</div>
								
								<div class="banner-inner_footer">
									<div class="banner-inner_icons">												
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/ppc-icon.png" />
										<div>PPC</div>	
									</div>
									<div class="banner-inner_icons">										
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/seo-icon.png" />
										<div>SEO</div>
									</div>
									<div class="banner-inner_icons">
										<img src="/wp-content/themes/bcc/assets/images/web-design.png" />
										<div>WEB DESIGN</div>
									</div>
									<div class="banner-inner_icons">										
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/content-icon.png" />
										<div>CONTENT</div>	
									</div>
									<div class="banner-inner_icons">
										<img src="/wp-content/themes/bcc/assets/images/cro-icon.png" />
										<div>CRO</div>	
									</div>
									<div class="banner-inner_icons">										
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/pay-per-lead.png" />
										<div class="text-center">LEADS</div>
									</div>
								</div>
								
							</div>
						</div>
						
						<?php //Artemis Group Banner ?>
						<div id="banner4" class="banners-choice_item">
							<div class="banner-inner py-3">
								<div class="banner-inner_head">
									<div class="">
										<img src="/wp-content/themes/bcc/assets/images/artemis-logo.png" style="max-width:80px;width: 100%; height:auto;"/>
									</div>
									<div class="">
										<img src="/wp-content/themes/bcc/assets/images/stars.png" style="max-width:100px;width: 100%; height:auto;"/><span style="font-size: 12px;padding-left: 5px;">Reviews</span>
									</div>
									<div class="">
										<i>"Artemis have been one of the best investment we've ever made as a company. Totally invaluable as a partner."<span class="t_author"> - Richard Smith, Beside the Sea</span></i>
									</div>
									<div class="">
										<a href="https://artemis.marketing/" target="_blank" class="mrkt_button-artemis">Learn More</a>
									</div>
								</div>
								<div class="banner-inner_body">
									<div class="">
										AT A GLANCE:
										<ul class="mktn_usp">
											<li>No 1 rated SEO agency in the UK</li>
											<li>Proven track record for any issue</li>
											<li>Total transparency and reporting</li>
										</ul>
									</div>
									<div class="">
										ARTEMIS OFFERS
										<ul class="mktn_usp">
											<li>SEO</li>
											<li>Conversion Rate Optimisation</li>
											<li>Local SEO</li>
											<li>Review / Management Reputation</li>
										</ul>
									</div>
									<div class="company_info">
										<ul>
											<li>Years Experience: 15+</li>
											<li>Staff: 28</li>
											<li>West Sussex</li>
										</ul>		 
									</div>
								</div>

								<div class="banner-inner_footer">
									<div class="banner-inner_icons">												
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/ppc-icon.png" />
										<div>PPC</div>	
									</div>
									<div class="banner-inner_icons">										
										<img src="/wp-content/themes/bcc/assets/images/seo-icon.png" />
										<div>SEO</div>
									</div>
									<div class="banner-inner_icons">
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/web-design.png" />
										<div>WEB DESIGN</div>
									</div>
									<div class="banner-inner_icons">										
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/content-icon.png" />
										<div>CONTENT</div>	
									</div>
									<div class="banner-inner_icons">
										<img src="/wp-content/themes/bcc/assets/images/cro-icon.png" />
										<div>CRO</div>	
									</div>
									<div class="banner-inner_icons">										
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/pay-per-lead.png" />
										<div class="text-center">LEADS</div>
									</div>
								</div>

							</div>
						</div>
						
						<?php //Tribe Minor Banner ?>
						<div id="banner5" class="banners-choice_item">
							<div class="banner-inner py-3">
								<div class="banner-inner_head">
									<div class="">
										<img src="/wp-content/themes/bcc/assets/images/tribe-minor.png" style="max-width:80px;width:100%;height:auto;background-color: #013137;padding: 5px;"/>
									</div>
									<div class="">
										<img src="/wp-content/themes/bcc/assets/images/stars.png" style="max-width:100px;width: 100%; height:auto;"/><span style="font-size: 12px;padding-left: 5px;">Reviews</span>
									</div>
									<div class="">
										<i>"A standout professional, honnest and ambitious lead generation and digital marketing agency."<span class="t_author"> - Christian Barlow, Synergy VR</span></i>
									</div>
									<div class="">
										<a href="https://www.tribeminer.co.uk/" target="_blank" class="mrkt_button-tribe">Learn More</a>
									</div>
								</div>
								<div class="banner-inner_body">
									<div class="">
										AT A GLANCE:
										<ul class="mktn_usp">
											<li>Almost 20 years' combined experience in digital</li>
											<li>Data-Driven Approach</li>
											<li>Strategy and results driven</li>
										</ul>
									</div>
									<div class="">
										Tribe Minor OFFERS
										<ul class="mktn_usp">
											<li>E-Commerce</li>
											<li>Lead Generation</li>
											<li>Automation & Chatbots</li>
										</ul>
									</div>
									<div class="company_info">
										<ul>
											<li>Based in Newcastle, Tribe Miner brings a hugely experienced team who are particularly fluent in new technologies such as AR, VR and automated chatbots. Their people-focused funnel approach is proven to drive real results.</li>
											
										</ul>		 
									</div>
								</div>

								<div class="banner-inner_footer">
									<div class="banner-inner_icons">												
										<img src="/wp-content/themes/bcc/assets/images/ppc-icon.png" />
										<div>PPC</div>	
									</div>
									<div class="banner-inner_icons">										
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/seo-icon.png" />
										<div>SEO</div>
									</div>
									<div class="banner-inner_icons">
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/web-design.png" />
										<div>WEB DESIGN</div>
									</div>
									<div class="banner-inner_icons">										
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/content-icon.png" />
										<div>CONTENT</div>	
									</div>
									<div class="banner-inner_icons">
										<img class="notactive" src="/wp-content/themes/bcc/assets/images/cro-icon.png" />
										<div>CRO</div>	
									</div>
									<div class="banner-inner_icons">										
										<img src="/wp-content/themes/bcc/assets/images/pay-per-lead.png" />
										<div class="text-center">LEADS</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php

get_footer();
?>