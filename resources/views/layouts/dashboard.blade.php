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
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700", "Asap+Condensed:500"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Web font -->

		<!--begin::Page Vendors Styles -->
{{--		<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />--}}

        <link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->

		<!--begin::Base Styles -->
{{--		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />--}}

        <link href="{{ asset('assets/vendors/base/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
{{--		<link href="assets/demo/demo8/base/style.bundle.css" rel="stylesheet" type="text/css" />--}}

        <link href="{{ asset('assets/demo/demo8/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/dashboard/css/mainLayout.css') }}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/demo8/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Base Styles -->

{{--        my styles--}}

        @yield('style')


{{--        end: my style--}}
		<link rel="shortcut icon" href="{{ asset('assets/demo8/demo/media/img/logo/favicon.ico') }}" />
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
					m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-37564768-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body style="background-image: url({{ asset('assets/app/media/img/bg/bg-7.jpg') }})" class="m-page--fluid m-page--loading-enabled m-page--loading m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">

		<!-- begin::Page loader -->
		<div class="m-page-loader m-page-loader--base">
			<div class="m-blockui">
				<span>الرجاء الإنتظار ...</span>
				<span>
					<div class="m-loader m-loader--brand"></div>
				</span>
			</div>
		</div>

		<!-- end::Page Loader -->

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- begin::Header -->
			<header id="m_header" class="m-grid__item		m-header " m-minimize="minimize" m-minimize-mobile="minimize" m-minimize-offset="10" m-minimize-mobile-offset="10">
				<div class="m-header__top">
					<div class="m-container m-container--fluid m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">

							<!-- begin::Brand -->
							<div class="m-stack__item m-brand m-stack__item--left">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="index.html" class="m-brand__logo-wrapper">
											<img alt="" src="{{ asset('assets/media/logoHighFive.png') }}" class="m-brand__logo-default" />
{{--											<img alt="" src="{{ asset('assets/demo/demo8/media/img/logo/logo_inverse.png') }}" class="m-brand__logo-inverse" />--}}
											<img alt="" src="{{ asset('assets/media/highFive.png') }}" class="m-brand__logo-inverse" />
										</a>
									</div>
									<div class="m-stack__item m-stack__item--middle m-brand__tools">

										<!-- begin::Responsive Header Menu Toggler-->
										<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>

										<!-- end::Responsive Header Menu Toggler-->

										<!-- begin::Topbar Toggler-->
										<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
											<i class="flaticon-more"></i>
										</a>

										<!--end::Topbar Toggler-->
									</div>
								</div>
							</div>

							<!-- end::Brand -->

							<!--begin::Search-->

							<!--end::Search-->

							<!-- begin::Topbar -->
							<div class="m-stack__item m-stack__item--right m-header-head" id="m_header_nav">
								<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
									<div class="m-stack__item m-topbar__nav-wrapper">
										<ul class="m-topbar__nav m-nav m-nav--inline">

{{--                                            start notification--}}
{{--											<li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">--}}
{{--												<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">--}}
{{--													<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>--}}
{{--													<span class="m-nav__link-icon">--}}
{{--														<span class="m-nav__link-icon-wrapper">--}}
{{--															<i class="flaticon-alarm"></i>--}}
{{--														</span>--}}
{{--													</span>--}}
{{--												</a>--}}
{{--												<div class="m-dropdown__wrapper">--}}
{{--													<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>--}}
{{--													<div class="m-dropdown__inner">--}}
{{--														<div class="m-dropdown__header m--align-center">--}}
{{--															<span class="m-dropdown__header-title">9 New</span>--}}
{{--															<span class="m-dropdown__header-subtitle">User Notifications</span>--}}
{{--														</div>--}}
{{--														<div class="m-dropdown__body">--}}
{{--															<div class="m-dropdown__content">--}}
{{--																<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">--}}
{{--																	<li class="nav-item m-tabs__item">--}}
{{--																		<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">--}}
{{--																			Alerts--}}
{{--																		</a>--}}
{{--																	</li>--}}
{{--																	<li class="nav-item m-tabs__item">--}}
{{--																		<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>--}}
{{--																	</li>--}}
{{--																	<li class="nav-item m-tabs__item">--}}
{{--																		<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>--}}
{{--																	</li>--}}
{{--																</ul>--}}
{{--																<div class="tab-content">--}}
{{--																	<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">--}}
{{--																		<div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">--}}
{{--																			<div class="m-list-timeline m-list-timeline--skin-light">--}}
{{--																				<div class="m-list-timeline__items">--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>--}}
{{--																						<span class="m-list-timeline__text">12 new users registered</span>--}}
{{--																						<span class="m-list-timeline__time">Just now</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge"></span>--}}
{{--																						<span class="m-list-timeline__text">System shutdown--}}
{{--																							<span class="m-badge m-badge--success m-badge--wide">pending</span>--}}
{{--																						</span>--}}
{{--																						<span class="m-list-timeline__time">14 mins</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge"></span>--}}
{{--																						<span class="m-list-timeline__text">New invoice received</span>--}}
{{--																						<span class="m-list-timeline__time">20 mins</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge"></span>--}}
{{--																						<span class="m-list-timeline__text">DB overloaded 80%--}}
{{--																							<span class="m-badge m-badge--info m-badge--wide">settled</span>--}}
{{--																						</span>--}}
{{--																						<span class="m-list-timeline__time">1 hr</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge"></span>--}}
{{--																						<span class="m-list-timeline__text">System error ---}}
{{--																							<a href="#" class="m-link">Check</a>--}}
{{--																						</span>--}}
{{--																						<span class="m-list-timeline__time">2 hrs</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item m-list-timeline__item--read">--}}
{{--																						<span class="m-list-timeline__badge"></span>--}}
{{--																						<span href="" class="m-list-timeline__text">New order received--}}
{{--																							<span class="m-badge m-badge--danger m-badge--wide">urgent</span>--}}
{{--																						</span>--}}
{{--																						<span class="m-list-timeline__time">7 hrs</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item m-list-timeline__item--read">--}}
{{--																						<span class="m-list-timeline__badge"></span>--}}
{{--																						<span class="m-list-timeline__text">Production server down</span>--}}
{{--																						<span class="m-list-timeline__time">3 hrs</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge"></span>--}}
{{--																						<span class="m-list-timeline__text">Production server up</span>--}}
{{--																						<span class="m-list-timeline__time">5 hrs</span>--}}
{{--																					</div>--}}
{{--																				</div>--}}
{{--																			</div>--}}
{{--																		</div>--}}
{{--																	</div>--}}
{{--																	<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">--}}
{{--																		<div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">--}}
{{--																			<div class="m-list-timeline m-list-timeline--skin-light">--}}
{{--																				<div class="m-list-timeline__items">--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>--}}
{{--																						<a href="" class="m-list-timeline__text">New order received</a>--}}
{{--																						<span class="m-list-timeline__time">Just now</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>--}}
{{--																						<a href="" class="m-list-timeline__text">New invoice received</a>--}}
{{--																						<span class="m-list-timeline__time">20 mins</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>--}}
{{--																						<a href="" class="m-list-timeline__text">Production server up</a>--}}
{{--																						<span class="m-list-timeline__time">5 hrs</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>--}}
{{--																						<a href="" class="m-list-timeline__text">New order received</a>--}}
{{--																						<span class="m-list-timeline__time">7 hrs</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>--}}
{{--																						<a href="" class="m-list-timeline__text">System shutdown</a>--}}
{{--																						<span class="m-list-timeline__time">11 mins</span>--}}
{{--																					</div>--}}
{{--																					<div class="m-list-timeline__item">--}}
{{--																						<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>--}}
{{--																						<a href="" class="m-list-timeline__text">Production server down</a>--}}
{{--																						<span class="m-list-timeline__time">3 hrs</span>--}}
{{--																					</div>--}}
{{--																				</div>--}}
{{--																			</div>--}}
{{--																		</div>--}}
{{--																	</div>--}}
{{--																	<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">--}}
{{--																		<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">--}}
{{--																			<div class="m-stack__item m-stack__item--center m-stack__item--middle">--}}
{{--																				<span class="">All caught up!--}}
{{--																					<br>No new logs.</span>--}}
{{--																			</div>--}}
{{--																		</div>--}}
{{--																	</div>--}}
{{--																</div>--}}
{{--															</div>--}}
{{--														</div>--}}
{{--													</div>--}}
{{--												</div>--}}
{{--											</li>--}}
{{--											<li class="m-nav__item m-topbar__quick-actions m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">--}}
{{--												<a href="#" class="m-nav__link m-dropdown__toggle">--}}
{{--													<span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>--}}
{{--													<span class="m-nav__link-icon">--}}
{{--														<span class="m-nav__link-icon-wrapper">--}}
{{--															<i class="flaticon-share"></i>--}}
{{--														</span>--}}
{{--													</span>--}}
{{--												</a>--}}
{{--												<div class="m-dropdown__wrapper">--}}
{{--													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>--}}
{{--													<div class="m-dropdown__inner">--}}
{{--														<div class="m-dropdown__header m--align-center">--}}
{{--															<span class="m-dropdown__header-title">Quick Actions</span>--}}
{{--															<span class="m-dropdown__header-subtitle">Shortcuts</span>--}}
{{--														</div>--}}
{{--														<div class="m-dropdown__body m-dropdown__body--paddingless">--}}
{{--															<div class="m-dropdown__content">--}}
{{--																<div class="m-scrollable" data-scrollable="false" data-height="380" data-mobile-height="200">--}}
{{--																	<div class="m-nav-grid m-nav-grid--skin-light">--}}
{{--																		<div class="m-nav-grid__row">--}}
{{--																			<a href="#" class="m-nav-grid__item">--}}
{{--																				<i class="m-nav-grid__icon flaticon-file"></i>--}}
{{--																				<span class="m-nav-grid__text">Generate Report</span>--}}
{{--																			</a>--}}
{{--																			<a href="#" class="m-nav-grid__item">--}}
{{--																				<i class="m-nav-grid__icon flaticon-time"></i>--}}
{{--																				<span class="m-nav-grid__text">Add New Event</span>--}}
{{--																			</a>--}}
{{--																		</div>--}}
{{--																		<div class="m-nav-grid__row">--}}
{{--																			<a href="#" class="m-nav-grid__item">--}}
{{--																				<i class="m-nav-grid__icon flaticon-folder"></i>--}}
{{--																				<span class="m-nav-grid__text">Create New Task</span>--}}
{{--																			</a>--}}
{{--																			<a href="#" class="m-nav-grid__item">--}}
{{--																				<i class="m-nav-grid__icon flaticon-clipboard"></i>--}}
{{--																				<span class="m-nav-grid__text">Completed Tasks</span>--}}
{{--																			</a>--}}
{{--																		</div>--}}
{{--																	</div>--}}
{{--																</div>--}}
{{--															</div>--}}
{{--														</div>--}}
{{--													</div>--}}
{{--												</div>--}}
{{--											</li>--}}
{{--                                            --}}

											<li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
												<a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-topbar__userpic">
														<img src="{{ asset('assets/app/media/img/users/user4.jpg') }}" class="m--img-rounded m--marginless m--img-centered" alt="" />
													</span>
													<span class="m-nav__link-icon m-topbar__usericon  m--hide">
														<span class="m-nav__link-icon-wrapper">
															<i class="flaticon-user-ok"></i>
														</span>
													</span>
													<span class="m-topbar__username m--hide">Nick</span>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__header m--align-center">
															<div class="m-card-user m-card-user--skin-light">
																<div class="m-card-user__pic">
																	<img src="{{ asset('assets/app/media/img/users/user4.jpg') }}" class="m--img-rounded m--marginless" alt="" />
																</div>
																<div class="m-card-user__details">
																	<span class="m-card-user__name m--font-weight-500">{{ Auth::user()->name }}</span>
																	<a href="" class="m-card-user__email m--font-weight-300 m-link">{{ Auth::user()->email }}</a>
																</div>
															</div>
														</div>
														<div class="m-dropdown__body">
															<div class="m-dropdown__content">
																<ul class="m-nav m-nav--skin-light">
																	<li class="m-nav__section m--hide">
																		<span class="m-nav__section-text">Section</span>
																	</li>
{{--																	<li class="m-nav__item">--}}
{{--																		<a href="profile.html" class="m-nav__link">--}}
{{--																			<i class="m-nav__link-icon flaticon-profile-1"></i>--}}
{{--																			<span class="m-nav__link-title">--}}
{{--																				<span class="m-nav__link-wrap">--}}
{{--																					<span class="m-nav__link-text">My Profile</span>--}}
{{--																					<span class="m-nav__link-badge">--}}
{{--																						<span class="m-badge m-badge--success">2</span>--}}
{{--																					</span>--}}
{{--																				</span>--}}
{{--																			</span>--}}
{{--																		</a>--}}
{{--																	</li>--}}
{{--																	<li class="m-nav__item">--}}
{{--																		<a href="profile.html" class="m-nav__link">--}}
{{--																			<i class="m-nav__link-icon flaticon-share"></i>--}}
{{--																			<span class="m-nav__link-text">Activity</span>--}}
{{--																		</a>--}}
{{--																	</li>--}}
{{--																	<li class="m-nav__item">--}}
{{--																		<a href="profile.html" class="m-nav__link">--}}
{{--																			<i class="m-nav__link-icon flaticon-chat-1"></i>--}}
{{--																			<span class="m-nav__link-text">Messages</span>--}}
{{--																		</a>--}}
{{--																	</li>--}}
{{--																	<li class="m-nav__separator m-nav__separator--fit">--}}
{{--																	</li>--}}
{{--																	<li class="m-nav__item">--}}
{{--																		<a href="profile.html" class="m-nav__link">--}}
{{--																			<i class="m-nav__link-icon flaticon-info"></i>--}}
{{--																			<span class="m-nav__link-text">FAQ</span>--}}
{{--																		</a>--}}
{{--																	</li>--}}
{{--																	<li class="m-nav__item">--}}
{{--																		<a href="profile.html" class="m-nav__link">--}}
{{--																			<i class="m-nav__link-icon flaticon-lifebuoy"></i>--}}
{{--																			<span class="m-nav__link-text">Support</span>--}}
{{--																		</a>--}}
{{--																	</li>--}}
{{--																	<li class="m-nav__separator m-nav__separator--fit">--}}
{{--																	</li>--}}
																	<li class="m-nav__item">
																		<a href="{{ route('logout') }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>

{{--                                            chat button bigin --}}
{{--											<li id="m_quick_sidebar_toggle" class="m-nav__item">--}}
{{--												<a href="#" class="m-nav__link m-dropdown__toggle">--}}
{{--													<span class="m-nav__link-icon m-nav__link-icon-alt">--}}
{{--														<span class="m-nav__link-icon-wrapper">--}}
{{--															<i class="flaticon-grid-menu"></i>--}}
{{--														</span>--}}
{{--													</span>--}}
{{--												</a>--}}
{{--											</li>--}}

{{--                                            end button--}}
										</ul>
									</div>
								</div>
							</div>

							<!-- end::Topbar -->
						</div>
					</div>
				</div>
				<div class="m-header__bottom">
					<div class="m-container m-container--fluid m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">

							<!-- begin::Horizontal Menu -->
							<div class="m-stack__item m-stack__item--fluid m-header-menu-wrapper">
								<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
									<i class="la la-close"></i>
								</button>
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item {{Request::is('Dashboard') ? 'm-menu__item--active m-menu__item--active-tab' : '' }}  m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true">
											<a href="{{ url('/Dashboard') }}" class="m-menu__link">
												<span class="m-menu__link-text">الصفحة الرئيسية</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
{{--											start: secand nav --}}

                                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
                                                <span class="m-menu__arrow m-menu__arrow--adjust"></span>

                                            </div>


                                        </li>
										<li class="m-menu__item {{Request::is('Dashboard/Users/show') ? 'm-menu__item--active m-menu__item--active-tab' : '' }}  m-menu__item--submenu m-menu__item--tabs" >
											<a href="{{ url('/Dashboard/Users/show') }}" class="m-menu__link ">
{{--                                                m-menu__toggle--}}
												<span class="m-menu__link-text">المستخدمين</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>

											</div>
										</li>
{{--										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true">--}}
{{--											<a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link">--}}
{{--												<span class="m-menu__link-text">Reports</span>--}}
{{--												<i class="m-menu__hor-arrow la la-angle-down"></i>--}}
{{--												<i class="m-menu__ver-arrow la la-angle-right"></i>--}}
{{--											</a>--}}
{{--											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">--}}
{{--												<span class="m-menu__arrow m-menu__arrow--adjust"></span>--}}
{{--												<ul class="m-menu__subnav">--}}
{{--													<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true">--}}
{{--														<a href="builder.html" class="m-menu__link ">--}}
{{--															<i class="m-menu__link-icon flaticon-graphic-2"></i>--}}
{{--															<span class="m-menu__link-text">Orders</span>--}}
{{--														</a>--}}
{{--													</li>--}}
{{--													<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true">--}}
{{--														<a href="builder.html" class="m-menu__link ">--}}
{{--															<i class="m-menu__link-icon flaticon-analytics"></i>--}}
{{--															<span class="m-menu__link-text">Customers</span>--}}
{{--														</a>--}}
{{--													</li>--}}
{{--													<li class="m-menu__item " aria-haspopup="true">--}}
{{--														<a href="inner.html" class="m-menu__link ">--}}
{{--															<i class="m-menu__link-icon flaticon-notes"></i>--}}
{{--															<span class="m-menu__link-text">Revenue</span>--}}
{{--														</a>--}}
{{--													</li>--}}
{{--													<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true">--}}
{{--														<a href="builder.html" class="m-menu__link ">--}}
{{--															<i class="m-menu__link-icon flaticon-clipboard"></i>--}}
{{--															<span class="m-menu__link-text">Invoices</span>--}}
{{--														</a>--}}
{{--													</li>--}}
{{--													<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true">--}}
{{--														<a href="builder.html" class="m-menu__link ">--}}
{{--															<i class="m-menu__link-icon flaticon-alarm-1"></i>--}}
{{--															<span class="m-menu__link-text">Bills</span>--}}
{{--														</a>--}}
{{--													</li>--}}
{{--													<li class="m-menu__item  m-menu__item--actions" aria-haspopup="true">--}}
{{--														<div class="m-menu__link m-menu__link--toggle-skip">--}}
{{--															<div class="dropdown">--}}
{{--																<a href="#" class="btn btn-primary m-btn m-btn--icon m-btn--pill m-btn--air   dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--																	<i class="la la-cloud-download"></i>&nbsp;&nbsp;Export--}}
{{--																</a>--}}
{{--																<div class="dropdown-menu dropdown-menu-right">--}}
{{--																	<a class="dropdown-item" href="#">--}}
{{--																		<i class="flaticon-share"></i> Action</a>--}}
{{--																	<a class="dropdown-item" href="#">--}}
{{--																		<i class="flaticon-settings"></i> Another action</a>--}}
{{--																	<a class="dropdown-item" href="#">--}}
{{--																		<i class="flaticon-graphic-2"></i> Something else</a>--}}
{{--																</div>--}}
{{--															</div>--}}
{{--														</div>--}}
{{--													</li>--}}
{{--												</ul>--}}
{{--											</div>--}}
{{--										</li>--}}

									</ul>
								</div>
							</div>

							<!-- end::Horizontal Menu -->
						</div>
					</div>
				</div>
			</header>

			<!-- end::Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">

                @yield('contents')

			</div>

			<!-- end::Body -->

			<!-- begin::Footer -->
			<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-footer__wrapper">
						<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
									2017 &copy; Metronic theme by
									<a href="https://keenthemes.com" class="m-link">Keenthemes</a>
								</span>
							</div>
							<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
								<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">About</span>
										</a>
									</li>

									<li class="m-nav__item">
										<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
											<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Sidebar chat -->


		<!-- end::Quick Sidebar chat -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!-- begin::Quick Nav -->


		<!-- begin::Quick Nav -->

		<!--begin::Base Scripts -->
		<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/demo/demo8/base/scripts.bundle.js') }}" type="text/javascript"></script>

		<!--end::Base Scripts -->

		<!--begin::Page Vendors Scripts -->
		<script src="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>

		<!--end::Page Vendors Scripts -->

		<!--begin::Page Snippets -->
		<script src="{{ asset('assets/app/js/dashboard.js') }}" type="text/javascript"></script>

		<!--end::Page Snippets -->

		<!-- begin::Page Loader -->
        @yield('js')
		<script>
			$(window).on('load', function() {
				$('body').removeClass('m-page--loading');
			});
		</script>

		<!-- end::Page Loader -->
	</body>

	<!-- end::Body -->
</html>