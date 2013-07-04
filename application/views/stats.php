<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>ACME Dashboard - Perfect Bootstrap Admin Template</title>
    <meta name="description" content="ACME Dashboard Bootstrap Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="ACME, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link href="<?php echo(THEME_PATH); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo(THEME_PATH); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo(THEME_PATH); ?>css/style.min.css" rel="stylesheet">
    <link href="<?php echo(THEME_PATH); ?>css/style-responsive.min.css" rel="stylesheet">
    <link href="<?php echo(THEME_PATH); ?>css/retina.css" rel="stylesheet">
    <!-- end: CSS -->

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="<?php echo(THEME_PATH); ?>css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="<?php echo(THEME_PATH); ?>css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo(THEME_PATH); ?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo(THEME_PATH); ?>ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo(THEME_PATH); ?>ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo(THEME_PATH); ?>ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo(THEME_PATH); ?>ico/favicon.png">
    <!-- end: Favicon and Touch Icons -->




</head>

<body>
<!-- start: Header -->
<div class="navbar">
<div class="navbar-inner">
<div class="container-fluid">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>
<a class="brand" href="index.html"><span>Acme, Inc</span></a>

<!-- start: Header Menu -->
<div class="nav-no-collapse header-nav">
<ul class="nav pull-right">
<li class="dropdown hidden-phone">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="halflings-icon white warning-sign"></i>
    </a>
    <ul class="dropdown-menu notifications">
        <li>
            <span class="dropdown-menu-title">You have 11 notifications</span>
        </li>
        <li>
            <a href="#">
                + <i class="halflings-icon white user"></i> <span class="message">New user registration</span> <span class="time">1 min</span>
            </a>
        </li>
        <li>
            <a href="#">
                + <i class="halflings-icon white comment"></i> <span class="message">New comment</span> <span class="time">7 min</span>
            </a>
        </li>
        <li>
            <a href="#">
                + <i class="halflings-icon white comment"></i> <span class="message">New comment</span> <span class="time">8 min</span>
            </a>
        </li>
        <li>
            <a href="#">
                + <i class="halflings-icon white comment"></i> <span class="message">New comment</span> <span class="time">16 min</span>
            </a>
        </li>
        <li>
            <a href="#">
                + <i class="halflings-icon white user"></i> <span class="message">New user registration</span> <span class="time">36 min</span>
            </a>
        </li>
        <li>
            <a href="#">
                + <i class="halflings-icon white cart"></i> <span class="message">2 items sold</span> <span class="time">1 hour</span>
            </a>
        </li>
        <li class="warning">
            <a href="#">
                - <i class="halflings-icon white user"></i> <span class="message">User deleted account</span> <span class="time">2 hour</span>
            </a>
        </li>
        <li class="warning">
            <a href="#">
                - <i class="halflings-icon white shopping-cart"></i> <span class="message">Transaction was canceled</span> <span class="time">6 hour</span>
            </a>
        </li>
        <li>
            <a href="#">
                + <i class="halflings-icon white comment"></i> <span class="message">New comment</span> <span class="time">yesterday</span>
            </a>
        </li>
        <li>
            <a href="#">
                + <i class="halflings-icon white user"></i> <span class="message">New user registration</span> <span class="time">yesterday</span>
            </a>
        </li>
        <li>
            <a class="dropdown-menu-sub-footer">View all notifications</a>
        </li>
    </ul>
</li>
<!-- start: Notifications Dropdown -->
<li class="dropdown hidden-phone">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="halflings-icon white tasks"></i>
    </a>
    <ul class="dropdown-menu tasks">
        <li>
            <span class="dropdown-menu-title">You have 17 tasks in progress</span>
        </li>
        <li>
            <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                <div class="taskProgress progressSlim progressBlue">80</div>
            </a>
        </li>
        <li>
            <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                <div class="taskProgress progressSlim progressBlue">47</div>
            </a>
        </li>
        <li>
            <a href="#">
										<span class="header">
											<span class="title">Django Project For Google</span>
											<span class="percent"></span>
										</span>
                <div class="taskProgress progressSlim progressBlue">32</div>
            </a>
        </li>
        <li>
            <a href="#">
										<span class="header">
											<span class="title">SEO for new sites</span>
											<span class="percent"></span>
										</span>
                <div class="taskProgress progressSlim progressBlue">63</div>
            </a>
        </li>
        <li>
            <a href="#">
										<span class="header">
											<span class="title">New blog posts</span>
											<span class="percent"></span>
										</span>
                <div class="taskProgress progressSlim progressBlue">80</div>
            </a>
        </li>
        <li>
            <a class="dropdown-menu-sub-footer">View all tasks</a>
        </li>
    </ul>
</li>
<!-- end: Notifications Dropdown -->
<!-- start: Message Dropdown -->
<li class="dropdown hidden-phone">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="halflings-icon white envelope"></i>
    </a>
    <ul class="dropdown-menu messages">
        <li>
            <span class="dropdown-menu-title">You have 9 messages</span>
        </li>
        <li>
            <a href="#">
                <span class="avatar"><img src="<?php echo(THEME_PATH); ?>img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Łukasz Holeczek
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="avatar"><img src="<?php echo(THEME_PATH); ?>img/avatar2.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Megan Abott
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="avatar"><img src="<?php echo(THEME_PATH); ?>img/avatar3.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Kate Ross
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="avatar"><img src="<?php echo(THEME_PATH); ?>img/avatar4.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Julie Blank
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="avatar"><img src="<?php echo(THEME_PATH); ?>img/avatar5.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Jane Sanders
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
            </a>
        </li>
        <li>
            <a class="dropdown-menu-sub-footer">View all messages</a>
        </li>
    </ul>
</li>
<!-- end: Message Dropdown -->
<li>
    <a class="btn" href="#">
        <i class="halflings-icon white wrench"></i>
    </a>
</li>
<!-- start: User Dropdown -->
<li class="dropdown">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="halflings-icon white user"></i> Łukasz Holeczek
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="#"><i class="halflings-icon white user"></i> Profile</a></li>
        <li><a href="<?php echo(THEME_PATH); ?>login.html"><i class="halflings-icon white off"></i> Logout</a></li>
    </ul>
</li>
<!-- end: User Dropdown -->
</ul>
</div>
<!-- end: Header Menu -->

</div>
</div>
</div>
<!-- start: Header -->

<div class="container-fluid">
<div class="row-fluid">


<!-- start: Main Menu -->
<div id="sidebar-left" class="span1">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="<?php echo(THEME_PATH); ?>index.html"><i class="fa-icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>infrastructure.html"><i class="fa-icon-hdd"></i><span class="hidden-tablet"> Infrastructure</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>messages.html"><i class="fa-icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>tasks.html"><i class="fa-icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>ui.html"><i class="fa-icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>widgets.html"><i class="fa-icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
            <li>
                <a class="dropmenu" href="#"><i class="fa-icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span></a>
                <ul>
                    <li><a class="submenu" href="submenu1.html"><i class="fa-icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
                    <li><a class="submenu" href="submenu2.html"><i class="fa-icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
                    <li><a class="submenu" href="submenu3.html"><i class="fa-icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
                </ul>
            </li>
            <li><a href="<?php echo(THEME_PATH); ?>form.html"><i class="fa-icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>chart.html"><i class="fa-icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>typography.html"><i class="fa-icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>gallery.html"><i class="fa-icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>table.html"><i class="fa-icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>calendar.html"><i class="fa-icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>file-manager.html"><i class="fa-icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>icon.html"><i class="fa-icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
            <li><a href="<?php echo(THEME_PATH); ?>login.html"><i class="fa-icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
        </ul>
    </div>
</div>
<a id="main-menu-toggle" class="hidden-phone open"><i class="fa-icon-reorder"></i></a>
<!-- end: Main Menu -->

<noscript>
    <div class="alert alert-block span11">
        <h4 class="alert-heading">Warning!</h4>
        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
    </div>
</noscript>

<!-- start: Content -->
<div id="content" class="span11">


<div class="row-fluid">

    <div class="stats-date span3">
        <div>Monthly Statistics</div>
        <div class="range">02/10/2012 - 02/11/2012</div>
    </div>

    <div class="stats span9">

        <div class="stat">
            <div class="left">
                <div class="number green">1.324.996</div>
                <div class="title"><span class="color green"></span> Visits</div>
            </div>
            <div class="right">
                <div class="arrow">
                    <img src="<?php echo(THEME_PATH); ?>img/uparrow.png">
                </div>
                <div class="percent">+13%</div>
            </div>
        </div>

        <div class="stat">
            <div class="left">
                <div class="number yellow">12.894.765</div>
                <div class="title"><span class="color yellow"></span> Pageviews</div>
            </div>
            <div class="right">
                <div class="arrow">
                    <img src="<?php echo(THEME_PATH); ?>img/uparrow.png">
                </div>
                <div class="percent">+17%</div>
            </div>
        </div>

        <div class="stat">
            <div class="left">
                <div class="number blue">432.980</div>
                <div class="title"><span class="color blue"></span>Visitors</div>
            </div>
            <div class="right">
                <div class="arrow">
                    <img src="<?php echo(THEME_PATH); ?>img/downarrow.png">
                </div>
                <div class="percent">-33%</div>
            </div>
        </div>

        <div class="stat">
            <div class="left">
                <div class="number red">11.324</div>
                <div class="title"><span class="color red"></span>New Visitors</div>
            </div>
            <div class="right">
                <div class="arrow">
                    <img src="<?php echo(THEME_PATH); ?>img/uparrow.png">
                </div>
                <div class="percent">+3%</div>
            </div>
        </div>

    </div>

</div>

<div class="row-fluid">

    <div id="stats-chart2"  class="span12" style="height:300px;overflow:hidden;" ></div>

</div>

<hr>

<div class="row-fluid">

<div class="widget span5" onTablet="span12" onDesktop="span5">

    <h2><span class="glyphicons globe"><i></i></span> Demographics</h2>

    <hr>

    <div class="content">

        <div class="verticalChart">

            <div class="singleBar">

                <div class="bar">

                    <div class="value">
                        <span>37%</span>
                    </div>

                </div>

                <div class="title">US</div>

            </div>

            <div class="singleBar">

                <div class="bar">

                    <div class="value">
                        <span>16%</span>
                    </div>

                </div>

                <div class="title">PL</div>

            </div>

            <div class="singleBar">

                <div class="bar">

                    <div class="value">
                        <span>12%</span>
                    </div>

                </div>

                <div class="title">GB</div>

            </div>

            <div class="singleBar">

                <div class="bar">

                    <div class="value">
                        <span>9%</span>
                    </div>

                </div>

                <div class="title">DE</div>

            </div>

            <div class="singleBar">

                <div class="bar">

                    <div class="value">
                        <span>7%</span>
                    </div>

                </div>

                <div class="title">NL</div>

            </div>

            <div class="singleBar">

                <div class="bar">

                    <div class="value">
                        <span>6%</span>
                    </div>

                </div>

                <div class="title">CA</div>

            </div>

            <div class="singleBar">

                <div class="bar">

                    <div class="value">
                        <span>5%</span>
                    </div>

                </div>

                <div class="title">FI</div>

            </div>

            <div class="singleBar">

                <div class="bar">

                    <div class="value">
                        <span>4%</span>
                    </div>

                </div>

                <div class="title">RU</div>

            </div>

            <div class="singleBar">

                <div class="bar">

                    <div class="value">
                        <span>3%</span>
                    </div>

                </div>

                <div class="title">AU</div>

            </div>

            <div class="singleBar">

                <div class="bar">

                    <div class="value">
                        <span>1%</span>
                    </div>

                </div>

                <div class="title">N/A</div>

            </div>

        </div>

    </div>

</div><!--/span-->

<div class="widget span3 noMargin" onTablet="span6" onDesktop="span3">

    <h2><span class="glyphicons pie_chart"><i></i></span> Browsers</h2>

    <hr>

    <div class="content">

        <div class="browserStat big">
            <img src="<?php echo(THEME_PATH); ?>img/browser-chrome-big.png" alt="Chrome">
            <span>34%</span>
        </div>
        <div class="browserStat big">
            <img src="<?php echo(THEME_PATH); ?>img/browser-firefox-big.png" alt="Firefox">
            <span>34%</span>
        </div>
        <div class="browserStat">
            <img src="<?php echo(THEME_PATH); ?>img/browser-ie.png" alt="Internet Explorer">
            <span>34%</span>
        </div>
        <div class="browserStat">
            <img src="<?php echo(THEME_PATH); ?>img/browser-safari.png" alt="Safari">
            <span>34%</span>
        </div>
        <div class="browserStat">
            <img src="<?php echo(THEME_PATH); ?>img/browser-opera.png" alt="Opera">
            <span>34%</span>
        </div>


    </div>
</div>

<div class="widget span4" onTablet="span6" onDesktop="span4">
    <h2><span class="glyphicons charts"><i></i></span> Weekly Stat</h2>

    <hr>

    <div class="content">
        <div class="sparkLineStats">

            <ul class="unstyled">

                <li><span class="sparkLineStats3"></span>
                    Pageviews:
                    <span class="number">781</span>
                </li>
                <li><span class="sparkLineStats4"></span>
                    Pages / Visit:
                    <span class="number">2,19</span>
                </li>
                <li><span class="sparkLineStats5"></span>
                    Avg. Visit Duration:
                    <span class="number">00:02:58</span>
                </li>
                <li><span class="sparkLineStats6"></span>
                    Bounce Rate: <span class="number">59,83%</span>
                </li>
                <li><span class="sparkLineStats7"></span>
                    % New Visits:
                    <span class="number">70,79%</span>
                </li>
                <li><span class="sparkLineStats8"></span>
                    % Returning Visitor:
                    <span class="number">29,21%</span>
                </li>

            </ul>

        </div><!-- End .sparkStats -->
    </div>
</div><!--/span-->

</div>

<hr>

<div class="row-fluid">

    <div class="widget span6" onTablet="span6" onDesktop="span6">
        <h2><span class="glyphicons facebook"><i></i></span>Facebook Fans</h2>
        <hr>
        <div class="content">
            <div id="facebookChart" style="height:300px;overflow:hidden;" ></div>
        </div>
    </div><!--/span-->

    <div class="widget span6" onTablet="span6" onDesktop="span6">
        <h2><span class="glyphicons twitter"><i></i></span>Twitter Followers</h2>
        <hr>
        <div class="content">
            <div id="twitterChart" style="height:300px;overflow:hidden;" ></div>
        </div>
    </div><!--/span-->

</div>




</div>
<!-- end: Content -->

<!-- start: Widgets Area -->
<div id="widgets-area" class="span2 hidden-tablet hidden-phone">

    <ul class="nav tab-menu nav-tabs" id="myTab">
        <li class="active"><a href="#charts"><i class="fa-icon-bar-chart"></i></a></li>
        <li><a href="#users"><i class="fa-icon-group"></i></a></li>
        <li><a href="#messages"><i class="fa-icon-envelope"></i></a></li>
        <li><a id="close-widgets-area" href="#"><i class="fa-icon-signin"></i></a></li>
    </ul>

    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="charts">

            <div class="bar-stat">
                <span class="title">Account balance</span>
                <span class="value">$19 999,99</span>
                <span class="chart green">7,3,2,6,6,3,9,0,1,4</span>
            </div>

            <hr>

            <div class="bar-stat">
                <span class="title">Clients</span>
                <span class="value">1278</span>
                <span class="chart yellow">8,2,5,4,7,4,7,2,5,9</span>
            </div>

            <hr>

            <div class="bar-stat">
                <span class="title">Orders</span>
                <span class="value">5876</span>
                <span class="chart blue">2,4,6,8,3,5,9,3,2,2</span>
            </div>

            <hr>

            <div class="bar-stat">
                <span class="title">Messages</span>
                <span class="value">673</span>
                <span class="chart red">0,3,3,8,3,3,2,7,8,4</span>
            </div>

            <hr>

            <div id="cpu-usage"></div>

            <ul class="progress-bars">

                <li>
                    <span class="title">Free Memory</span>
                    <span class="percent"></span>
                    <div class="taskProgress progressSlim progressGreen">80</div>
                </li>

                <li>
                    <span class="title">Free HDD Drive</span>
                    <span class="percent"></span>
                    <div class="taskProgress progressSlim progressYellow">20</div>
                </li>

                <li>
                    <span class="title">Free SSD Drive</span>
                    <span class="percent"></span>
                    <div class="taskProgress progressSlim progressBlue">57</div>
                </li>

                <li>
                    <span class="title">Transfer</span>
                    <span class="percent"></span>
                    <div class="taskProgress progressSlim progressRed">45</div>
                </li>

            </ul>

        </div>
        <div class="tab-pane" id="users">

            <ul class="users-list">
                <li>
                    <a href="#">
                        <span class="status active"></span>
                        <span class="avatar"><img class="img-circle" src="<?php echo(THEME_PATH); ?>img/avatar.jpg" alt="Avatar"></span>
                        <span class="name">Łukasz Holeczek</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="status busy"></span>
                        <span class="avatar"><img class="img-circle" src="<?php echo(THEME_PATH); ?>img/avatar2.jpg" alt="Avatar"></span>
                        <span class="name">Megan Abott</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="status disable"></span>
                        <span class="avatar"><img class="img-circle" src="<?php echo(THEME_PATH); ?>img/avatar3.jpg" alt="Avatar"></span>
                        <span class="name">Kate Ross</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="status active"></span>
                        <span class="avatar"><img class="img-circle" src="<?php echo(THEME_PATH); ?>img/avatar4.jpg" alt="Avatar"></span>
                        <span class="name">Julie Blank</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="status"></span>
                        <span class="avatar"><img class="img-circle" src="<?php echo(THEME_PATH); ?>img/avatar5.jpg" alt="Avatar"></span>
                        <span class="name">Jane Sanders</span>
                    </a>
                </li>
                <li>
                    <a href="#">View all users</a>
                </li>
            </ul>

        </div>
        <div class="tab-pane" id="messages">

            <ul class="messages-list">
                <li>
                    <a href="#">
                        <div class="avatar"><img class="img-circle" src="<?php echo(THEME_PATH); ?>img/avatar.jpg" alt="Avatar"></div>
                        <span class="name">Łukasz Holeczek</span>
                        <span class="date">25/6/2013</span>
                        <span class="title">Custom Bootstrap design for new client</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="avatar"><img class="img-circle" src="<?php echo(THEME_PATH); ?>img/avatar2.jpg" alt="Avatar"></div>
                        <span class="name">Megan Abott</span>
                        <span class="date">25/6/2013</span>
                        <span class="title">Custom Bootstrap design for new client</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="avatar"><img class="img-circle" src="<?php echo(THEME_PATH); ?>img/avatar3.jpg" alt="Avatar"></div>
                        <span class="name">Kate Ross</span>
                        <span class="date">25/6/2013</span>
                        <span class="title">Custom Bootstrap design for new client</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="avatar"><img class="img-circle" src="<?php echo(THEME_PATH); ?>img/avatar4.jpg" alt="Avatar"></div>
                        <span class="name">Julie Blank</span>
                        <span class="date">25/6/2013</span>
                        <span class="title">Custom Bootstrap design for new client</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="avatar"><img class="img-circle" src="<?php echo(THEME_PATH); ?>img/avatar5.jpg" alt="Avatar"></div>
                        <span class="name">Jane Sanders</span>
                        <span class="date">25/6/2013</span>
                        <span class="title">Custom Bootstrap design for new client</span>
                    </a>
                </li>
                <li>
                    <a href="#">View all messages</a>
                </li>
            </ul>

        </div>
    </div>

</div>
<!-- end: Widgets Area -->

<a id="widgets-area-button" class="hidden-tablet hidden-phone open"><i class="fa-icon-reorder"></i></a>
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<div class="clearfix"></div>

<footer>
    <p>
        <span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">creativeLabs</a></span>
        <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co" alt="Bootstrap Admin Templates">ACME Dashboard</a></span>
    </p>
</footer>

</div><!--/.fluid-container-->

<!-- start: JavaScript-->

<script src="<?php echo(THEME_PATH); ?>js/jquery-1.9.1.min.js"></script>
<script src="<?php echo(THEME_PATH); ?>js/jquery-migrate-1.0.0.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.ui.touch-punch.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/modernizr.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/bootstrap.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.cookie.js"></script>

<script src='<?php echo(THEME_PATH); ?>js/fullcalendar.min.js'></script>

<script src='<?php echo(THEME_PATH); ?>js/jquery.dataTables.min.js'></script>

<script src="<?php echo(THEME_PATH); ?>js/excanvas.js"></script>
<script src="<?php echo(THEME_PATH); ?>js/jquery.flot.js"></script>
<script src="<?php echo(THEME_PATH); ?>js/jquery.flot.pie.js"></script>
<script src="<?php echo(THEME_PATH); ?>js/jquery.flot.stack.js"></script>
<script src="<?php echo(THEME_PATH); ?>js/jquery.flot.resize.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/gauge.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.chosen.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.uniform.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.cleditor.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.noty.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.elfinder.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.raty.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.iphone.toggle.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.uploadify-3.1.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.gritter.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.imagesloaded.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.masonry.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.knob.modified.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/jquery.sparkline.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/counter.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/raphael.2.1.0.min.js"></script>
<script src="<?php echo(THEME_PATH); ?>js/justgage.1.0.1.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/retina.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/core.min.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/charts.js"></script>

<script src="<?php echo(THEME_PATH); ?>js/custom.js"></script>
<!-- end: JavaScript-->

</body>
</html>