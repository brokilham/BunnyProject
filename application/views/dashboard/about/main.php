<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Metronic | Dashboard
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
		<?php $this->load->view("dashboard/_partials/css.php") ?> 
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="<?php echo base_url('assets/dashboard/demo/demo12/media/img/logo/logo.png')?>"/>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block ">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
                            		<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                            <!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">																	
										<li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="<?php echo base_url('assets/dashboard/app/media/img/users/user4.jpg')?>" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
												<span class="m-nav__link-icon m-topbar__usericon  m--hide">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-user-ok"></i>
													</span>
												</span>
												<span class="m-topbar__username m--hide">
													Nick
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center">
														<div class="m-card-user m-card-user--skin-light">
															<div class="m-card-user__pic">
																<img src="<?php echo base_url('assets/dashboard/app/media/img/users/user4.jpg')?>" class="m--img-rounded m--marginless" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	Mark Andre
																</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">
																	mark.andre@gmail.com
																</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					My Profile
																				</span>
																				<span class="m-nav__link-badge">
																					<span class="m-badge m-badge--success">
																						2
																					</span>
																				</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">
																			Activity
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			Messages
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">
																			FAQ
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">
																			Support
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																		Logout
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>						
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->		
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<?php $this->load->view("dashboard/_partials/sidebar_menu.php") ?> 
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<div class="m-content">
                        <div class="col-lg-6">
                            <div class="m-portlet">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                About me
                                            </h3>
                                        </div>
                                    </div>
									<div class="m-portlet__head-tools">
										<ul class="m-portlet__nav">
											<li class="m-portlet__nav-item">
												<button type="button" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air" data-toggle="modal" data-target="#m_add_about" >
													Add
												</button>
											</li>							
										</ul>
									</div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin::Section-->
                                    <div class="m-section">
                                        <!--
                                            <h3 class="m-section__heading">
                                                Default Timelime
                                            </h3>
                                         -->                                  
                                        <div class="m-section__content">
                                            <!--begin::Preview-->
                                            <div class="m-demo">
                                                <div class="m-demo__preview">
                                                    <div class="m-list-timeline">
                                                        <div class="m-list-timeline__items">
                                                            <?php foreach($listAbout as $item):?>
                                                                <div class="m-list-timeline__item">
                                                                    <span class="m-list-timeline__badge"></span>
                                                                    <span class="m-list-timeline__text">
                                                                        <?php echo $item->Description ?>
                                                                    </span>
                                                                    <span class="m-list-timeline__time">
                                                                        <?php echo date_format(date_create($item->CreatedDate),"Y/m/d") ?>
                                                                    </span>
                                                                    <span class="m-list-timeline__time">                                     
                                                                        <a href="#" class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>   
                                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--icon  m-btn--icon-only m-btn--pill m-btn--air">
                                                                            <i class="fa fa-trash"></i>
                                                                        </a>                                                   
                                                                    </span>                   
                                                                </div>
                                                            <?php endforeach;?>                                                                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Preview-->              
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<?php $this->load->view("dashboard/about/add.php") ?> 
			<!-- end:: Body -->
			<?php $this->load->view("dashboard/_partials/footer.php") ?> 
		</div>
		<!-- end:: Page -->	    
	    <!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->
		<?php $this->load->view("dashboard/_partials/js.php") ?> 
	<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
<script>
	$(document).ready(function(){
		/*$(document).on('click', '#btn-save', function() { 
			alert("alert");
		});*/
		
		$("#aboutForm").on('submit', function(e) {
            e.preventDefault();

            var aboutForm = $(this);

            $.ajax({
				url:'<?=base_url()?>index.php/about/save',
                type: 'post',
                data: aboutForm.serialize(),
                success: function(response){
					if(response != null || response != "")
					{
						var arr_data = JSON.parse(response);  
						console.log(response.status);
						if(response.status == 'success') {
							$('#m_add_about').modal('hide'); 
							//$("#contactForm").hide();
						}
					}
                   

                    //$("#message").html(response.message);

                }
            });
        });
	});
</script>

