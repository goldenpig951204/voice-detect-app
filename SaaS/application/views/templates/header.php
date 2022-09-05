<?php defined('ASSETS_URL') OR define('ASSETS_URL', base_url('assets'));?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= ASSETS_URL . '/images/favicon.ico';?>">

    <title>My Voice Admin - Dashboard</title>
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?= ASSETS_URL . '/plugins/vendor_components/bootstrap/dist/css/bootstrap.css';?>">
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?= ASSETS_URL . '/styles/global/bootstrap-extend.css';?>">
	<!-- theme style -->
	<link rel="stylesheet" href="<?= ASSETS_URL . '/styles/global/master_style.css';?>">
	<!-- AIUI Admin skins -->
	<link rel="stylesheet" href="<?= ASSETS_URL . '/styles/global/skins/_all-skins.css';?>">	
	<link rel="stylesheet" href="<?= ASSETS_URL . '/plugins/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css';?>"/>
	<link rel="stylesheet" href="<?= ASSETS_URL . '/styles/global/loading.min.css';?>"/>
	<?php foreach ($styles as $style):?>
		<link rel="stylesheet" href="<?= ASSETS_URL . '/' . $style;?>"/>
	<?php endforeach;?>
  </head>

<body class="hold-transition skin-black dark-sidebar sidebar-mini">
<div class="wrapper">

  <header class="main-header">	
	  <div class="p-10 clearfix float-left logo-block">
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<i class="ti-align-left"></i>
		</a>
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <span class="logo-lg">
			  <img src="<?= ASSETS_URL . '/images/logo.png';?>" alt="logo" class="light-logo">
			  <img src="<?= ASSETS_URL . '/images/logo.png';?>" alt="logo" class="dark-logo">
		  </span>
		</a>	  
	  </div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
		<div class="ml-10 app-menu">
			<ul class="header-megamenu nav">
				<li class="btn-group nav-item">
					<a href="#" class="nav-link rounded" data-toggle="dropdown" aria-expanded="false">
						<i class="nav-link-icon mdi mdi-view-dashboard text-white mx-5"> </i>
                        Mega Menu
						<i class="fa fa-angle-down ml-2"></i>
					</a>
					<div class="dropdown-menu dropdown-grid">
						<div class="dropdown-mega-menu">
							<div class="row">
								<div class="col-lg-4 col-12">
									<ul class="nav flex-column">
										<li class="nav-item-header nav-item">
											Overview
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">
												<i class="nav-link-icon fa fa-inbox">
												</i>
												<span>
													Contacts
												</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">
												<i class="nav-link-icon fa fa-book">
												</i>
												<span>
													Incidents
												</span>
												<div class="ml-auto badge badge-pill badge-danger">5
												</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">
												<i class="nav-link-icon fa fa-picture-o">
												</i>
												<span>
													Companies
												</span>
											</a>
										</li>
										<li class="nav-item">
											<a disabled="" href="javascript:void(0);" class="nav-link disabled">
												<i class="nav-link-icon fa fa-dashboard">
												</i>
												<span>
													Dashboards
												</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-lg-4 col-12 bx-1">
									<ul class="nav flex-column">
										<li class="nav-item-header nav-item">
											Favourites
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">
												Reports Conversions
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">
												Quick Start
												<div class="ml-auto badge badge-success">New</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">Users &amp; Groups</a>
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">Proprieties</a>
										</li>
									</ul>
								</div>
								<div class="col-lg-4 col-12">
									<ul class="nav flex-column">
										<li class="nav-item-header nav-item">
											Sales & Marketing
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">Queues
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">Resource Groups
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">Goal Metrics
												<div class="ml-auto badge badge-warning">3
												</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">Campaigns
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="btn-group nav-item">
					<a href="#" class="nav-link rounded" data-toggle="dropdown" aria-expanded="false">
						<span class="badge badge-pill badge-danger ml-0 mr-2">4</span>
						Settings
						<i class="fa fa-angle-down ml-2"></i>
					</a>
					<div class="dropdown-menu">
						<div class="dropdown-menu-header-inner bg-img" style="background-image: url('../images/gallery/landscape1.jpg');" data-overlay="5">
							<div class="px-10 py-20 w-250 text-center">
								<h5 class="text-white">Overview</h5>
								<h6 class="text-white mb-0">Dropdown menus for everyone</h6>
							</div>
						</div>
						<div>
							<h4 class="dropdown-header py-15 text-success font-size-18">Key Figures</h4>
							<button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left no-radius"><i class="fa fa-folder mr-10"> </i>Service Calendar</button>
							<button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left no-radius"><i class="fa fa-folder mr-10"> </i>Knowledge Base</button>
							<button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left no-radius"><i class="fa fa-folder mr-10"> </i>Accounts</button>
							<div tabindex="-1" class="dropdown-divider"></div>
							<button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left no-radius"><i class="fa fa-folder mr-10"> </i>Products</button>
							<button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left no-radius"><i class="fa fa-folder mr-10"> </i>Rollup Queries</button>
						</div>
						<ul class="nav flex-column p-20">
							<li class="nav-item-divider nav-item"></li>
							<li class="nav-item-btn nav-item">
								<button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
							</li>
						</ul>
					  </div>
				</li>
				<li class="dropdown nav-item">
					<a href="#" aria-haspopup="true"  data-toggle="dropdown" class="nav-link rounded" aria-expanded="false">
						<i class="nav-link-icon fa fa-cogs mx-5 text-white"></i>
						Projects
						<i class="fa fa-angle-down ml-2"></i>
					</a>
					<div class="dropdown-menu">
						<div class="dropdown-menu-header-inner bg-img" style="background-image: url('../images/gallery/landscape1.jpg');" data-overlay="5">
							<div class="p-30 text-left w-250">
								<h5 class="text-white">Overview</h5>
								<h6 class="text-white">Unlimited options</h6>
								<div class="menu-header-btn-pane">
									<button class="mr-2 btn btn-success btn-sm">Settings</button>
									<button class="btn-icon btn-icon-only btn btn-info btn-sm">
										<i class="fa fa-cog"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="p-10">
							<button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Graphic Design</button>
							<button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>App Development</button>
							<button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Icon Design</button>
							<div tabindex="-1" class="dropdown-divider"></div>
							<button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Miscellaneous</button>
							<button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Frontend Dev</button>
						</div>
					  </div>
				</li>
			</ul> 
		</div>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">		  
          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 5 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= ASSETS_URL . '/images/avatar/user2-160x160.jpg';?>" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Lorem Ipsum
                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                         </h4>
                         <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= ASSETS_URL . '/images/avatar/user3-128x128.jpg';?>" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Nullam tempor
                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                         </h4>
                         <span>Curabitur facilisis erat quis metus congue viverra.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= ASSETS_URL . '/images/avatar/user4-128x128.jpg';?>" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Proin venenatis
                          <small><i class="fa fa-clock-o"></i> Today</small>
                         </h4>
                         <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= ASSETS_URL . '/images/avatar/user3-128x128.jpg';?>" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Praesent suscipit
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                         </h4>
                         <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= ASSETS_URL . '/images/avatar/user4-128x128.jpg';?>" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Donec tempor
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                         </h4>
                         <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See all e-Mails</a></li>
            </ul>
          </li>
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= $this->session->userdata("photo") ? base_url("uploads/admin/" . $this->session->userdata("photo")) : ASSETS_URL . '/images/avatar/avatar1.png';?>" class="rounded-circle" style="width: 25px; margin-top: -4px;" alt="" />
            </a>
			<ul class="dropdown-menu scale-up">
              <!-- Menu Body -->
              <li class="user-body">
				    <a class="dropdown-item" href="<?= base_url('settings');?>"><i class="ion ion-person"></i> My Profile</a>
					<a class="dropdown-item" href="<?= base_url('login/logout');?>"><i class="ion-log-out"></i> Logout</a>
					<div class="dropdown-divider"></div>
					<div class="p-10"><a href="<?= base_url('settings');?>" class="btn btn-sm btn-success">View Profile</a></div>
              </li>
            </ul>
          </li>	
        </ul>
      </div>
    </nav>
  </header>