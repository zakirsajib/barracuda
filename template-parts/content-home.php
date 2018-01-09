<?php
/**
 * Template part for displaying page content in frontpage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Barracuda
 */

?>

<!-- Page Content -->
    
    <!--club start*/-->
    <section class="homebarracuda-club" id="club">
            <div class="feature-onworking-list">
                        <div class="col-md-6 col-sm-6">
                            <div class="club-left-contents padding-top padding-bottom">
                                <div class="text-center">
	                                <?php if(get_field('club_logo')):?>
	                                	<img src="<?php the_field('club_logo')?>" alt="Smiling Barracuda Blue Logo">
	                                <?php else:?>
	                                <img src="<?php echo get_template_directory_uri(); ?>/images/barracuda-logo-full.png" alt="Smiling Barracuda Blue Logo">
	                                <?php endif;?>	
	                            </div>
                                <?php if(get_field('club_statement')):?>
                                	<?php the_field('club_statement');?>
                                <?php else:?>
	                                <p class="top50">Growing as a founder and entrepreneur is just as important as growing your business if you don’t want to get left behind. </p>
	                                <p class="top20">Smiling Barracuda is an entrepreneur led network of high quality, experienced and successful founders, experts and innovators. Our prime focus is to support SME founders through this personal growth to become successful entrepreneurs. </p>
                                <?php endif;?>        
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="club-right-contents padding-top padding-bottom">
                                <?php if(get_field('club_heading')):?>
                                	<h2><?php the_field('club_heading')?></h2>
                                <?php else:?>
                                	<h2>The Network</h2>
                                <?php endif;?>                             
                                <div class="media">
								    <div class="media-left pull-left media-middle">
								        <?php if(get_field('founders_icon')):?>
								        <img class="media-object img-responsive" src="<?php the_field('founders_icon')?>" alt="Founders Icon" />
								        <?php else:?>
								        <img class="media-object img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/founders_icon.png" alt="Founders Icon" />
								        <?php endif;?>
								    </div>
								    <div class="media-body">
								      <?php if(get_field('founders_heading')):?>
								      		<h4 class="media-heading"><?php the_field('founders_heading');?></h4>
								      <?php else:?>
								      		<h4 class="media-heading">Founders and Peers</h4>
								      <?php endif;?>
								      <?php if(get_field('founders_descriptions')):?>
								      <p><?php the_field('founders_descriptions')?></p>
								      <?php else:?>
								      <p>Our entrepreneurial network allows you to connect with like-minded talented founders. Share experiences and skills with people growing similar size businesses and support each other in the challenges you all face.</p>
								    <?php endif;?>
								    </div>
                                </div>
                                <div class="media">
								    <div class="media-left pull-left media-middle">
								        <?php if(get_field('experts_icon')):?>
								        <img class="media-object img-responsive" src="<?php the_field('experts_icon')?>" alt="Experts Icon" />
								        <?php else:?>
								       <img class="media-object img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/experts_icon.png" alt="Experts Icon" /><?php endif;?>
								    </div>
								    <div class="media-body">
								      <?php if(get_field('experts_heading')):?>
								      		<h4 class="media-heading"><?php the_field('experts_heading')?></h4>
								      <?php else:?>
								      		<h4 class="media-heading">Experts and Innovators</h4>
								      <?php endif;?>
								      <?php if(get_field('experts_descriptions')):?>
								      	<p><?php the_field('experts_descriptions')?></p>
								      <?php else:?>
								      <p>Lean on a team of advisors and mentors ranging from academic experts, industry and domain experts and technical experts from UCL, Imperial, Cambridge, Southampton University, King’s College, EIE, XnTree, Cognicity and Growth Builder… to name a few!</p><?php endif;?>
								    </div>
								</div>
                           </div>
						</div>
				</div>
    </section>
    <!--club ends-->
    
    
    
    
    <!--programme  starts-->
    <section class="programme padding-top padding-bottom" id="programme">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
	                <?php if(get_field('programme_heading')):?>
	                	<h2><?php the_field('programme_heading')?></h2>
	                <?php else:?>
	                	<h2>The Founders Programme</h2>
	                <?php endif;?>
	            </div>
                <div class="col-md-6">
	                <?php if(get_field('programme_descriptions')):?>
	                	<p class="lead"><?php the_field('programme_descriptions')?></p>
	                <?php else:?>
	                	<p class="lead">Parallel to the network, we run a one year (5 workshops) programme that helps each founder to develop their business and product models. </p>
	                <?php endif;?>
	           </div>
            </div>
            <div class="programme-table top20">
                <div class="row">
	                <div class="col-md-12 bottom20">
		                <?php if(get_field('programme_table_heading')):?>
		                	<?php the_field('programme_table_heading');?>
		                <?php endif;?>
		            </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3 col-sm-3">
                            <div class="education match-height">
                            	<?php if(get_field('programme_column_1')):?>
                            		<?php the_field('programme_column_1');?>
                            	<?php else:?>
                            	<p>1. Education</p>
								<p>Our domain experts lead an open discussion on their area of expertise relating to growth and sales, from brand and PR to selling to corporates.</p><?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="inspiration match-height">
                            	<?php if(get_field('programme_column_2')):?>
                            		<?php the_field('programme_column_2');?>
                            	<?php else:?>
                            	<p>2. Inspiration</p>
								<p>Each workshop hosts an invited later stage founder to speak about their success story. Sharing what they did, what worked and key strategies to their growth.</p><?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="accountability match-height">
	                            <?php if(get_field('programme_column_3')):?>
                            		<?php the_field('programme_column_3');?>
                            	<?php else:?>
	                            <p>3. Accountability</p>
								<p>Each founder has their sales revenues against forecasts centrally processed, aggregated and openly discussed each quarter. </p><?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
	                        <div class="support match-height">
		                        <?php if(get_field('programme_column_4')):?>
                            		<?php the_field('programme_column_4');?>
                            	<?php else:?>
                            	<p>4. Support</p>
								<p>We conclude with a facilitated session to share achievements and growth challenges, and collectively debate on how we solve these problems as a group.</p><?php endif;?>
	                        </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="programme-application top50">
	            <div class="row">
		            <div class="col-md-2">
			            <?php if(get_field('programme_logo')):?>
			            <img src="<?php the_field('programme_logo')?>" class="programme-application-logo" alt="Smiling Barracuda Programme Logo">
			            <?php else:?>
			            <img src="<?php echo get_template_directory_uri(); ?>/images/programme-logo.png" class="programme-application-logo" alt="Smiling Barracuda Programme Logo"><?php endif;?>
		            </div>
		            <div class="programme-application-message col-md-7 top25">
			        <?php if(get_field('programme_application_descriptions')):?>
			        	<?php the_field('programme_application_descriptions')?>
			        <?php else:?>
			        	<p>To be considered for the programme starting in January 2018, Apply Now!</p>
						<p>Applications are open until Christmas Day. </p>
						<p>Applicants must be available for interview (via skype) in the first two weeks of January 2018. </p>
					<?php endif;?>
		            </div>
		            <div class="programme-application-buton col-md-3 top50">
			            <?php if(get_field('programme_application_button_label') AND get_field('programme_application_button_url')):?>
			            <a href="<?php the_field('programme_application_button_url')?>" target="_blank" class="btn btn-default btn-lg btn-block"><?php the_field('programme_application_button_label')?></a>
			            <?php else:?>
			            <a href="the-founders-programme-application-form" target="_blank" class="btn btn-default btn-lg btn-block">Apply Now</a><?php endif;?>
		            </div>
				</div>
            </div>
        </div>
    </section>
    <!--programme  ends-->
    
	<!--team  starts-->
    <section class="who-we-are padding-top padding-bottom" id="team">
        <div class="container">
            <div class="row">
            	<div class="col-md-12"><div class="who-we-are-heading"><h2><?php the_field('team_heading')?></h2></div></div>
            </div>
            <div class="row">
            	<div class="team-members">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="col-lg-3 col-md-6 col-sm-6">
	                            <div class="team-member-1  hover-div-yellow">
	                                <div class="team-member-data top50 match-height">
	                                    <div class="row">
		                                    <div class="person-info col-md-10 col-xs-10">
		                                    	<?php if(get_field('1_team_member_name')):?>
		                                    		<h3 class="name-member"><?php the_field('1_team_member_name')?></h3>
		                                    	<?php else:?>
		                                    		<h3 class="name-member">Freddie Talberg</h3>
		                                    	<?php endif;?>
												<?php if(get_field('1_team_profession')):?>
													<p class="profession"><?php the_field('1_team_profession')?></p>
												<?php else:?>
													<p class="profession">Director</p>
												<?php endif;?>
		                                    </div>
		                                    <div class="person-linkedin col-md-2 col-xs-2">
			                                    <a href="<?php the_field('1_team_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-linkedin.jpg" alt="<?php the_field('1_team_member_name')?> Linkedin"></a>
		                                    </div>
	                                    </div>
	                                    <div class="row">
	                                    	<div class="col-md-12 p3 top20">
		                                    	<?php if(get_field('1_team_member_profile')):?>
		                                    		<?php the_field('1_team_member_profile')?>
		                                    	<?php else:?>
		                                    	Experienced Founder with a demonstrated history of scaling businesses in the tech sector and working with fellow growth tech entrepreneur founders.<?php endif;?>
		                                    </div>
	                                    </div>
	                                </div>
	                                <div class="img-hover-circal top50">
	                                    <div class="member-1-img-back ">
	                                        <div class="img-center">
	                                            <?php if(get_field('1_team_member_image')):?>
	                                            <img class="img-responsive" src="<?php the_field('1_team_member_image')?>" alt="<?php the_field('1_team_member_name')?>">
	                                            <?php else:?>
	                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/talberg.jpg" alt="<?php the_field('1_team_member_name')?>"><?php endif;?>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-3 col-md-6 col-sm-6">
	                            <div class="team-member-2  hover-div-blue">
	                                <div class="team-member-data top50 match-height">
	                                    <div class="row">
		                                    <div class="person-info col-md-10 col-xs-10">
												<?php if(get_field('2_team_member_name')):?>
													<h3 class="name-member"><?php the_field('2_team_member_name')?></h3>
												<?php else:?>
													<h3 class="name-member">Emily Holgate</h3>
												<?php endif;?>
												<?php if(get_field('2_team_profession')):?>
													<p class="profession"><?php the_field('2_team_profession')?></p>
												<?php else:?>
													<p class="profession top15">Community Manager</p>
												<?php endif;?>
		                                    </div>
		                                    <div class="person-linkedin col-md-2 col-xs-2">
			                                    <a href="<?php the_field('2_team_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-linkedin.jpg" alt="<?php the_field('2_team_member_name')?>"></a>
		                                    </div>
		                                </div>
		                                <div class="row">
	                                    	<div class="col-md-12 p3 top20">
		                                    	<?php if(get_field('2_team_member_profile')):?>
		                                    		<?php the_field('2_team_member_profile')?>
		                                    	<?php else:?>Emily is the founding partner of Utterly Events. Emily designs and coordinates entrepreneurial events for scale up business to strengthen their culture and help them grow.<?php endif;?>
											</div>
		                                </div>
	                                </div>
	                                <div class="img-hover-circal top50">
	                                    <div class="member-2-img-back ">
	                                        <div class="img-center">
		                                        <?php if(get_field('2_team_member_image')):?>
		                                        <img class="img-responsive" src="<?php the_field('2_team_member_image')?>" alt="<?php the_field('2_team_member_name')?>">
		                                        <?php else:?>
	                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/emily.jpg" alt="<?php the_field('2_team_member_name')?>"><?php endif;?>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-3 col-md-6 col-sm-6">
	                            <div class="team-member-3  hover-div-yellow">
	                                <div class="team-member-data top50 match-height">
	                                    <div class="row">
		                                    <div class="person-info col-md-10 col-xs-10">
			                                    <?php if(get_field('3_team_member_name')):?>
			                                    	<h3 class="name-member"><?php the_field('3_team_member_name')?></h3>
			                                    <?php else:?>
	                                    			<h3 class="name-member">Colin Nunn</h3>
	                                    		<?php endif;?>
	                                    		<?php if(get_field('3_team_profession')):?>
	                                    		<p class="profession top15"><?php the_field('3_team_profession')?></p>
	                                    		<?php else:?>
												<p class="profession top15">Finance Director</p><?php endif;?>
											</div>
											<div class="person-linkedin col-md-2 col-xs-2">
			                                    <a href="<?php the_field('3_team_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-linkedin.jpg" alt="<?php the_field('3_team_member_name')?>"></a>
		                                    </div>
										</div>
	                                    <div class="row">
	                                    	<div class="col-md-12 p3 top20">
		                                    	<?php if(get_field('3_team_member_profile')):?>
		                                    		<?php the_field('3_team_member_profile')?>
		                                    	<?php else:?>Colin has been a part time Finance Director for many Start Ups. He is the expert Finance person everyone needs and cannot afford full time! <?php endif;?></div>
	                                    </div>
	                                </div>
	                                <div class="img-hover-circal top50">
	                                    <div class="member-3-img-back ">
	                                        <div class="img-center">
		                                        <?php if(get_field('3_team_member_image')):?>
		                                        <img class="img-responsive" src="<?php the_field('3_team_member_image')?>" alt="<?php the_field('3_team_member_name')?>">
		                                        <?php else:?>
	                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/colin.jpg" alt="Colin Nunn"><?php endif;?>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-3 col-md-6 col-sm-6">
	                            <div class="team-member-4  hover-div-yellow">
	                                <div class="team-member-data top50 match-height">
	                                    <div class="row">
		                                    <div class="person-info col-md-10 col-xs-10">
			                                    <?php if(get_field('4_team_member_name')):?>
			                                    	<h3 class="name-member"><?php the_field('4_team_member_name')?></h3>
			                                    <?php else:?>
	                                    			<h3 class="name-member">Emeline Wraith</h3>
	                                    		<?php endif;?>
												<?php if(get_field('4_team_profession')):?>
												<p class="profession top15"><?php the_field('4_team_profession')?></p>
												<?php else:?>
												<p class="profession top15">Brand and PR for start-up & Growth</p>
												<?php endif;?>
		                                    </div>
		                                    <div class="person-linkedin col-md-2 col-xs-2">
			                                    <a href="<?php the_field('4_team_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-linkedin.jpg" alt="<?php the_field('4_team_member_name')?>"></a>
		                                    </div>
	                                    </div>
	                                    <div class="row">
	                                    	<div class="col-md-12 p3 top20">
		                                    	<?php if(get_field('4_team_member_profile')):?>
		                                    		<?php the_field('4_team_member_profile')?>
		                                    	<?php else:?>Emeline is founder of PR agency Good to Goat. Domain mentor for accelerators XnTreee with wealth of knowledge to help scaling businesses that will discuss the use of brand and PR in the sales process.<?php endif;?></div>
	                                    </div>
	                                </div>
	                                <div class="img-hover-circal top50">
	                                    <div class="member-4-img-back ">
	                                        <div class="img-center">
		                                        <?php if(get_field('4_team_member_image')):?>
	                                            <img class="img-responsive" src="<?php the_field('4_team_member_image')?>" alt="<?php the_field('4_team_member_name')?>">
	                                            <?php else:?>
	                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/emeline.jpg" alt="Emeline Wraith"><?php endif;?>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				</div>
            </div>
        </div>
    </section>
    <!--team  ends-->
    
    <!-- contact us starts -->
    <section class="contact-us padding-top padding-bottom" id="contact">
        <div class="container">
            <div class="row">
	            <div class="col-md-4">
                    <div class="office-location">
                        <h2><?php the_field('contact_left_heading')?></h2>
                        <div class="social-contact">
	                        <ul class="list-inline">
		                        <li><a href="<?php the_field('contact_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="LinkedIn Barracuda"></a></li>
		                        <li><a href="https://twitter.com/<?php the_field('contact_twitter_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter Barracuda"></a></li>
		                        <li class="follow-us">Follow us at<br/><a href="https://twitter.com/<?php the_field('contact_twitter_url')?>" target="_blank">@<?php the_field('contact_twitter_url')?></a></li>
	                        </ul>
                        </div>
                        <div class="map top25">
	                        <?php if(get_field('google_map_shortcode')):?>
	                        	<?php the_field('google_map_shortcode')?>
	                        <?php endif;?>
                        </div>
                        <div class="address top25">
                            <i class="fa fa-map-marker" ></i>
                            <?php if(get_field('contact_address')):?>
                            	<?php the_field('contact_address')?>
                            <?php else:?>
	                            <div class="alert alert-warning">No Address found!</div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="social-info">
                        <h2><?php the_field('column_right_heading')?></h2>                      
                        <div class="contact-us-form top55">
	                        <?php if(get_field('contact_form_shortcode')):?>
	                        	<?php echo do_shortcode(the_field('contact_form_shortcode'));?>
	                        <?php else:?>
	                        	<?php echo do_shortcode('[ninja_form id=1]');?>  
	                        <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us end -->
</div><!-- end parallax content -->