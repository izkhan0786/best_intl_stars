
<!--=========================================================
    Item Name: Admin & Dashboard HTML Template.
    Author: Jhathu Maharaj
    Version: 1.0
    Copyright 2025
 ============================================================-->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="admin, dashboard, crm, analytics, eCommerce, team, vendor, ai chat bot, backend, panel">
	<meta name="description" content="Best multipurpose admin dashboard template.">
	<meta name="author" content="Maraviya Infotech">


	<title>The Best International Strar</title>

	<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('images/WhatsApp Image 2025-07-27 at 5.53.33 PM.jpeg') }}">

<!-- Icon CSS -->
<link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/remixicon.css') }}" rel="stylesheet">

<!-- Vendor -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/apexcharts.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/jquery.datatables.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/datatables.bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/slick.min.css') }}" rel="stylesheet">

<!-- Main CSS -->
<link id="mainCss" href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body data-cx-mode="light">

	<main class="wrapper sb-default">

		<!-- Loader -->
		<div id="cx-overlay">
			<div class="loader">
				<span>C</span>x.
				<span class="shape"></span>
			</div>
		</div>

		<!-- Sidebar -->
		<div class="cx-sidebar-overlay"></div>
		<div class="cx-sidebar">
			<div class="cx-sidebar-head">
				<a href="{{route('dashboard')  }}" class="logo mx-5"><img src="{{ asset('images/WhatsApp Image 2025-07-27 at 5.48.39 PM.jpeg') }}" height="60" width="100" alt="logo"></a>
			</div>
			<div class="cx-sidebar-body">
				<ul class="cx-sb-list">



<ul class="navbar-nav">

    <li class="cx-sb-item sb-drop-item">
    <a href="{{ route('dashboard') }}" class="cx-drop-toggle">
      <i class="ri-bank-line"></i>
      <span class="condense">Dashboard</span>
    </a>
  </li>
  <!-- Financial Management -->
  <li class="cx-sb-item sb-drop-item">
    <a href="javascript:void(0)" class="cx-drop-toggle">
      <i class="ri-bank-line"></i>
      <span class="condense">Financial Management <i class="drop-arrow ri-arrow-down-s-line"></i></span>
    </a>
    <ul class="cx-sb-drop">
      <li class="list"><a href="#" class="cx-page-link drop">Billing & Invoicing</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Payables</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Receivables</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Expense Tracking</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Financial Reports</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">P&L Statement</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Revenue Statement</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Cash Flow</a></li>
    </ul>
  </li>

  <!-- Trip & Load Management -->
  <li class="cx-sb-item sb-drop-item">
    <a href="javascript:void(0)" class="cx-drop-toggle">
      <i class="ri-truck-line"></i>
      <span class="condense">Trip & Load Management <i class="drop-arrow ri-arrow-down-s-line"></i></span>
    </a>
    <ul class="cx-sb-drop">
      <li class="list"><a href="#" class="cx-page-link drop">Truck Trips</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Outbound Load</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Return Load</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Waybills & Notes</a></li>
    </ul>
  </li>

  <!-- Client/Vendor/Investor Management -->
  <li class="cx-sb-item sb-drop-item">
    <a href="javascript:void(0)" class="cx-drop-toggle">
      <i class="ri-team-line"></i>
      <span class="condense">Client/Vendor/Investor <i class="drop-arrow ri-arrow-down-s-line"></i></span>
    </a>
    <ul class="cx-sb-drop">
      <li class="list"><a href="#" class="cx-page-link drop">Client Profiles</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Contracts & Rates</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Investor Logs</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Vendor Management</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Invoice History</a></li>
    </ul>
  </li>

  <!-- Compliance & Regulatory -->
  <li class="cx-sb-item sb-drop-item">
    <a href="javascript:void(0)" class="cx-drop-toggle">
      <i class="ri-shield-check-line"></i>
      <span class="condense">Compliance & Regulatory <i class="drop-arrow ri-arrow-down-s-line"></i></span>
    </a>
    <ul class="cx-sb-drop">
      <li class="list"><a href="#" class="cx-page-link drop">Renewals</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">GCC Permits</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Transport Compliance</a></li>
    </ul>
  </li>

  <!-- HR & Payroll -->
  <li class="cx-sb-item sb-drop-item">
    <a href="javascript:void(0)" class="cx-drop-toggle">
      <i class="ri-user-settings-line"></i>
      <span class="condense">HR & Payroll <i class="drop-arrow ri-arrow-down-s-line"></i></span>
    </a>
    <ul class="cx-sb-drop">
      <li class="list"><a href="#" class="cx-page-link drop">Employee Records</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Hiring & Training</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Salary Processing</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">WPS Statements</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Bonuses & Advances</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Attendance</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Evaluations</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Payroll Reports</a></li>
    </ul>
  </li>

  <!-- Analytics & Reporting -->
  <li class="cx-sb-item sb-drop-item">
    <a href="javascript:void(0)" class="cx-drop-toggle">
      <i class="ri-bar-chart-line"></i>
      <span class="condense">Analytics & Reporting <i class="drop-arrow ri-arrow-down-s-line"></i></span>
    </a>
    <ul class="cx-sb-drop">
      <li class="list"><a href="#" class="cx-page-link drop">Trip Reports</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Utilization Stats</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Driver Reports</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Client Profitability</a></li>
      <li class="list"><a href="#" class="cx-page-link drop">Summary Reports</a></li>
    </ul>
  </li>

</ul>
		<!-- Admin & Settings -->
<li class="cx-sb-item sb-drop-item">
  <a href="javascript:void(0)" class="cx-drop-toggle">
    <i class="ri-settings-3-line"></i>
    <span class="condense">User Role Management <i class="drop-arrow ri-arrow-down-s-line"></i></span>
  </a>
  <ul class="cx-sb-drop">
    <li class="list"><a href="#" class="cx-page-link drop">Profile</a></li>
    <li class="list"><a href="#" class="cx-page-link drop">Sign In</a></li>
    <li class="list"><a href="#" class="cx-page-link drop">Sign Up</a></li>
    <li class="list"><a href="#" class="cx-page-link drop">Activity Logs</a></li>
    <li class="list"><a href="#" class="cx-page-link drop">Backup & Security Settings</a></li>
    <li class="list"><a href="#" class="cx-page-link drop">Company Correspondence</a></li>
    <li class="list"><a href="#" class="cx-page-link drop">Company Assets</a></li>
    <li class="list"><a href="#" class="cx-page-link drop">Notification/Reminder Setup</a></li>
  </ul>
</li>

					</li>
					<li class="cx-sb-item sb-drop-item">
						<a href="javascript:void(0)" class="cx-drop-toggle">
							<i class="ri-service-line"></i>
							<span class="condense">Services<i class="drop-arrow ri-arrow-down-s-line"></i></span>
						</a>
						<ul class="cx-sb-drop">
							<li class="list">
								<a href="#" class="cx-page-link drop">404 Error</a>
							</li>
							<li class="list">
								<a href="#" class="cx-page-link drop">Maintenance</a>
							</li>
						</ul>
					</li>
<li class="cx-sb-item sb-drop-item">
    <a href="#" class="cx-drop-toggle">
      <i class="ri-bank-line"></i>
      <span class="condense">Profile</span>
    </a>
  </li>
  <li class="cx-sb-item sb-drop-item">
    <a href="{{ route('logout') }}" class="cx-drop-toggle">
      <i class="ri-bank-line"></i>
      <span class="condense">Logout</span>
    </a>
  </li>
				</ul>
			</div>
		</div>

		<!-- Notify sidebar -->
		<div class="cx-notify-bar-overlay"></div>
		<div class="cx-notify-bar">
			<div class="cx-bar-title">
				<h6>Notifications<span class="label">12</span></h6>
				<a href="javascript:void(0)" class="close-notify"><i class="ri-close-line"></i></a>
			</div>
			<div class="cx-bar-content">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="alert-tab" data-bs-toggle="tab" data-bs-target="#alert"
							type="button" role="tab" aria-controls="alert" aria-selected="true">Alert</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
							type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log" type="button"
							role="tab" aria-controls="log" aria-selected="false">Log</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="alert" role="tabpanel" aria-labelledby="alert-tab">
						<div class="cx-alert-list">
							<ul>
								<li>
									<div class="icon cx-alert">
										<i class="ri-alarm-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your final report is overdue</div>
										<p class="time">Just now</p>
										<p class="message">Please submit your quarterly report before - June 15.</p>
									</div>
								</li>
								<li>
									<div class="icon cx-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your product campaign is stop!</div>
										<p class="time">5:45AM - 25/05/2023</p>
										<p class="message">Please submit your quarterly report before Jun 15.</p>
									</div>
								</li>
								<li>
									<div class="icon cx-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your payment is successfully processed</div>
										<p class="time">9:20PM - 19/06/2023</p>
										<p class="message">Check your account wallet. if there is any issue, create
											support ticket.</p>
									</div>
								</li>
								<li>
									<div class="icon cx-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">Budget threshold exceeded!</div>
										<p class="time">4:15AM - 01/04/2023</p>
										<p class="message">Budget threshold was exceeded for project "finx" B612
											elements.</p>
									</div>
								</li>
								<li>
									<div class="icon cx-warn">
										<i class="ri-close-line"></i>
									</div>
									<div class="detail">
										<div class="title">Project submission was decline!</div>
										<p class="time">4:15AM - 01/04/2023</p>
										<p class="message">Your project "B126" is declined by Theresa Mayeras.</p>
									</div>
								</li>
								<li>
									<div class="icon cx-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">Your payment is successfully processed</div>
										<p class="time">9:20PM - 19/06/2023</p>
										<p class="message">Check your account wallet. if there is any issue, create
											support ticket.</p>
									</div>
								</li>
								<li class="check"><a class="cx-primary-btn" href="#">View all</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
						<div class="cx-message-list">
							<ul>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/9.jpg" alt="user">
										<span class="label online"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Boris Whisli</a>
										<p class="time">5:30AM, Today</p>
										<p class="message">Hello, I am sending some file. Please use this in landing
											page. And make sure this all files are comppress.</p>
										<span class="download-files">
											<span class="download">
												<img src="assets/img/other/1.jpg" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<img src="assets/img/other/2.jpg" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-ppt-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/8.jpg" alt="user">
										<span class="label offline"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Frank N. Stein</a>
										<p class="time">8:30PM, 05/12/2023</p>
										<p class="message">Please take a look on landing page. There is some bus to open
											popup model. and save form data.</p>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/7.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Frank N. Stein</a>
										<p class="time">8:30PM, 05/12/2023</p>
										<p class="message">Please take a look on landing page. There is some bus to open
											popup model. and save form data.</p>
										<span class="download-files">
											<span class="download">
												<span class="file">
													<i class="ri-file-zip-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-text-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-ppt-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/6.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Paige Turner</a>
										<p class="time">4:30PM, 12/12/2023</p>
										<p class="message">Landing page issues are done. and now i am working on admin
											user module.</p>
									</div>
								</li>
								<li>
									<a href="#" class="reply">Reply</a>
									<div class="user">
										<img src="assets/img/user/5.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="#" class="name">Allie Grater</a>
										<p class="time">8:30PM, 05/12/2023</p>
										<p class="message">Take marketing module task.</p>
									</div>
								</li>
								<li class="check"><a class="cx-primary-btn" href="#">View all</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="log-tab">
						<div class="cx-activity-list activity-list">
							<ul>
								<li>
									<span class="date-time">8 Thu<span class="time">11:30 AM - 05:10 PM
										</span></span>
									<p class="title">Project Submitted from Smith</p>
									<p class="detail">Lorem Ipsum is simply dummy text of the printing and
										lorem is typesetting industry.</p>
									<span class="download-files">
										<span class="download">
											<img src="assets/img/other/1.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<img src="assets/img/other/2.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-ppt-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time warn">7 Wed<span class="time">1:30 PM - 02:30 PM
										</span></span>
									<p class="title">Morgus pvt - project due</p>
									<p class="detail">Project modul delay for some bugs.</p>
									<span class="download-files">
										<span class="download">
											<span class="file">
												<i class="ri-file-zip-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-text-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<img src="assets/img/other/3.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time">6 Tue<span class="time">9:30 AM - 11:00 AM
										</span></span>
									<p class="title">Interview for management dept.</p>
									<p class="detail">There are many variations of passages of Lorem Ipsum
										available, but the majority have suffered alteration in some form,
										by injected humour.</p>
									<span class="download-files">
										<span class="download">
											<span class="file">
												<i class="ri-file-zip-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-text-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-ppt-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time">5 Mon<span class="time">3:30 AM - 4:00 PM
										</span></span>
									<p class="title">Meeting with mr. Ken doe</p>
									<p class="detail">The majority have suffered alteration in some form,
										by injected humour.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header -->
		<header class="cx-header">
			<div class="cx-header-items">
				<div class="left-header">
					<a href="javascript:void(0)" class="cx-toggle-sidebar">
						<span class="outer-ring">
							<span class="inner-ring"></span>
						</span>
					</a>
					<div class="header-search-box">
						<div class="header-search-drop">

						</div>
					</div>
				</div>
				<div class="right-header">
					<div class="cx-header-logo">
						<img src="assets/img/logo/full-logo-dark.png" alt="logo" class="dark-logo">
						<img src="assets/img/logo/full-logo.png" alt="logo" class="white-logo">
					</div>
					<div class="inner-right-header">
						<div class="cx-right-tool cx-flag-drop language">
							<div class="cx-hover-drop">
								<div class="cx-hover-tool">

								</div>

							</div>
						</div>


						<div class="cx-right-tool cx-user-drop">
							<div class="cx-hover-drop">
								<div class="cx-hover-tool">
									<img class="user" src="assets/img/user/1.jpg" alt="user">
								</div>
								<div class="cx-hover-drop-panel right">
									<div class="details">
										<h6>{{ auth()->user()->name }}</h6>
										<p>{{ auth()->user()->email }}</p>
									</div>
									<ul class="border-top">
										<li><a href="#">Profile</a></li>
									</ul>
									<ul class="border-top">
										<li><a href="{{ route('logout') }}"><i class="ri-logout-circle-r-line"></i>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Main Content -->
		<div class="cx-main-content">
			<div class="cx-breadcrumb">
				<div class="cx-page-title">
					<h5>Dashboard</h5>
					
				</div>
				<div class="cx-tools">
					<a href="javascript:void(0)" class="refresh" data-bs-toggle="tooltip" aria-label="Refresh"
						data-bs-original-title="Refresh"><i class="ri-refresh-line"></i></a>
					<div class="filter m-l-10">
						<div class="dropdown" data-bs-toggle="tooltip" data-bs-original-title="Filter">
							<a class="dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="ri-sound-module-line"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Deal</a></li>
								<li><a class="dropdown-item" href="#">Revenue</a></li>
								<li><a class="dropdown-item" href="#">Expense</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxl-12">
					<div class="cx-statistics">
						<div class="owl-carousel label-cards">
							<div class="cx-card card-1 cx-label-card">
								<div class="cx-card-content">
									<div class="title">
										<div class="growth-numbers">
											<h5>Users</h5>
											<h4>56.2k</h4>
										</div>
										<span class="icon"><i class="ri-exchange-dollar-line"></i></span>
									</div>
									<p class="card-groth up">
										<i class="ri-arrow-up-line"></i>
										9%
										<span>Last Month</span>
									</p>
									<div class="mini-chart">
										<div id="userNumbers"></div>
									</div>
								</div>
							</div>
							<div class="cx-card card-2 cx-label-card">
								<div class="cx-card-content">
									<div class="title">
										<div class="growth-numbers">
											<h5>Campaign</h5>
											<h4>$98k</h4>
										</div>
										<span class="icon"><i class="ri-shield-user-line"></i></span>
									</div>
									<p class="card-groth up">
										<i class="ri-arrow-up-line"></i>
										25%
										<span>Last Month</span>
									</p>
									<div class="mini-chart">
										<div id="campaignNumbers"></div>
									</div>
								</div>
							</div>
							<div class="cx-card card-3 cx-label-card">
								<div class="cx-card-content">
									<div class="title">
										<div class="growth-numbers">
											<h5>Lead</h5>
											<h4>76%</h4>
										</div>
										<span class="icon"><i class="ri-shopping-bag-3-line"></i>
										</span>
									</div>
									<p class="card-groth down">
										<i class="ri-arrow-down-line"></i>
										.5%
										<span>Last Month</span>
									</p>
									<div class="mini-chart">
										<div id="leadNumbers"></div>
									</div>
								</div>
							</div>
							<div class="cx-card card-4 cx-label-card">
								<div class="cx-card-content">
									<div class="title">
										<div class="growth-numbers">
											<h5>Revenue</h5>
											<h4>$84k</h4>
										</div>
										<span class="icon"><i class="ri-money-dollar-circle-line"></i></span>
									</div>
									<p class="card-groth down">
										<i class="ri-arrow-down-line"></i>
										2.1%
										<span>Last Month</span>
									</p>
									<div class="mini-chart">
										<div id="revenueNumbers"></div>
									</div>
								</div>
							</div>
							<div class="cx-card card-5 cx-label-card">
								<div class="cx-card-content">
									<div class="title">
										<div class="growth-numbers">
											<h5>Expenses</h5>
											<h4>$25k</h4>
										</div>
										<span class="icon"><i class="ri-exchange-dollar-line"></i></span>
									</div>
									<p class="card-groth up">
										<i class="ri-arrow-up-line"></i>
										9%
										<span>Last Month</span>
									</p>
									<div class="mini-chart">
										<div id="expensesNumbers"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-8">
					<div class="col-md-12">
						<div class="cx-card revenue-overview">
							<div class="cx-card-header border-0">
								<h4 class="cx-card-title">Overview</h4>
								<div class="header-tools">
									<div class="cx-date-range date" title="Date">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cx-card-content">
								<div class="cx-chart-header">
									<div class="block">
										<h6>Orders</h6>
										<h5>825
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Revenue</h6>
										<h5>$89k
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Expense</h6>
										<h5>$68k
											<span class="down"><i class="ri-arrow-down-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Profit</h6>
										<h5>$21k
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
								</div>
								<div class="cx-chart-content">
									<div id="overviewChart"></div>
								</div>
							</div>
						</div>
					</div>


				</div>
				<div class="col-xxl-4">
					<div class="cx-sticky">
						<div class="row">
							<div class="col-xxl-12 col-xl-6 col-md-12">
								<div class="sub-card m-b-30">
									<div class="cx-card-header border-0">
										<h4 class="cx-card-title">Profit</h4>
										<div class="header-tools">
											<div class="dropdown" title="Settings">
												<a class="dropdown-toggle icon" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="mdi mdi-dots-vertical"></i>
												</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="#">Today</a></li>
													<li><a class="dropdown-item" href="#">Yesterday</a></li>
													<li><a class="dropdown-item" href="#">Last 7 Days</a></li>
													<li><a class="dropdown-item" href="#">This Month</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sub-card-body">
										<div class="cx-chart-content mt-m-24">
											<div id="profitChart"></div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer>
			<div class="copyright">
				<p><span id="copyright_year"></span> All Right Reserved.</p>
				<p>The Best Intl Stars</p>
			</div>
		</footer>

	</main>

	<!-- Vendor Custom -->
	<script src="assets/js/jquery-3.7.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/apexcharts.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/daterangepicker.js"></script>
	<script src="assets/js/jquery.simple-calendar.js"></script>
	<script src="assets/js/jquery.datatables.min.js"></script>
	<script src="assets/js/fullcalendar.min.js"></script>
	<script src="assets/js/slick.min.js"></script>

	<!-- Main Custom -->
	<script src="assets/js/main.js"></script>
	<script src="assets/js/chart-data.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // For nested submenu under User Role
    document.querySelectorAll('.role-toggle').forEach(btn => {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        const submenu = this.nextElementSibling;
        if (submenu) {
          submenu.classList.toggle('d-none');
        }
      });
    });
  });
</script>





</body>

</html>
