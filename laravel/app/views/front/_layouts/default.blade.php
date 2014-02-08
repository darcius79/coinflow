<!DOCTYPE html>
<html>
<head>
    <title><?=Config::get('app.site_name')?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
    
      <!-- CSS -->
    <link href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
    <!-- JS -->
	<script src="{{ URL::asset('assets/js/vendor/jquery/jquery-2.1.0.min.js') }}"></script>
    <!-- JS Bootstrap -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="{{ URL::asset('assets/js/vendor/jquery/3rdparty/jquery.stickUp.min.js') }}"></script>
    <!-- JS Custom -->
    <script src="{{ URL::asset('assets/js/config.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>


    
</head>

<body>



<!-- coinflow.io side bar -->
<nav id="sidebar" class="sidebar">
    <ul id="side-nav" class="side-nav">
        <li class="active">
            <a href="index.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#markets-collapse"><i class="fa fa-bar-chart-o"></i> <span class="name">Markets</span></a>
            <ul id="markets-collapse" class="panel-collapse collapse">
                <li><a href="form_account.html">Account</a></li>
                <li><a href="form_article.html">Article</a></li>
                <li><a href="form_elements.html">Elements</a></li>
                <li><a href="form_validation.html">Validation</a></li>
                <li><a href="form_wizard.html">Wizard</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#balances-collapse"><i class="fa fa-dollar pad"></i> <span class="name">Balances</span></a>
            <ul id="balances-collapse" class="panel-collapse collapse">
                <li><a href="form_account.html">Account</a></li>
                <li><a href="form_article.html">Article</a></li>
                <li><a href="form_elements.html">Elements</a></li>
                <li><a href="form_validation.html">Validation</a></li>
                <li><a href="form_wizard.html">Wizard</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#orders-collapse"><i class="fa fa-book"></i> <span class="name">Open Orders &nbsp;<span class="label label-success">17</span></span></a>
            <ul id="orders-collapse" class="panel-collapse collapse">
                <li><a href="stat_statistics.html">Stats</a></li>
                <li><a href="stat_charts.html">Charts</a></li>
                <li><a href="stat_realtime.html">Realtime</a></li>
            </ul>
        </li>
         <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#trading-collapse"><i class="fa fa-group"></i> <span class="name">Trading <span class="label label-success">7</span></span></a>
            <ul id="trading-collapse" class="panel-collapse collapse">
                <li><a href="ui_buttons.html">Recent <span class="label label-important">7</span></a></li>
                <li><a href="ui_buttons.html">History <span class="label label-important">7</span></a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#fave-collapse"><i class="fa fa-bookmark pad-s"></i> <span class="name">Favourites</span></a>
            <ul id="fave-collapse" class="panel-collapse collapse">
                <li><a href="ui_buttons.html">Buttons</a></li>
            </ul>
        </li>
      
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#faq-collapse"><i class="fa fa-comment"></i> <span class="name">FAQs</span></a>
            <ul id="faq-collapse" class="panel-collapse collapse">
                <li><a href="component_calendar.html">Calendar</a></li>
                <li><a href="component_maps.html">Maps</a></li>
                <li><a href="component_gallery.html">Gallery</a></li>
                <li><a href="component_fileupload.html">Fileupload</a></li>
                <li><a href="component_bootstrap.html">Bootstrap &nbsp; <span class="label label-important">new</span></a></li>
                <li><a href="component_list_groups.html">List Groups &nbsp; <span class="label label-important">new</span></a></li>
            </ul>
        </li>
        
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#support-collapse"><i class="fa fa-inbox"></i> <span class="name">Support</span></a>
            <ul id="support-collapse" class="panel-collapse collapse">
                <li><a href="ui_buttons.html">Buttons</a></li>
            </ul>
        </li>
      
        
       
        <li class="visible-xs">
            <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
        </li>
    </ul>
   
</nav>


<!-- Main Wrapper -->
<div class="wrap">
	<!-- coinflow.io header -->
<header class="page-header">
        <div class="navbar">
        		<div id="logo" class="pull-left"><?=Config::get('app.site_name')?><div class="beta inline">beta</div></div>
                <ul class="nav navbar-nav navbar-right pull-right">
                	 <li class="hidden-xs dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" id="quick-jump" title="Quick Jump" href="#">
                                <i class="fa fa-ellipsis-v"></i> <div class="text inline"><?=trans('common.quick_jump')?></div>
                            </a>
                            <ul role="menu" class="dropdown-menu quick-jump" id="quick-jump-menu">
                                <li class="cat" role="presentation">
                                    <i class="fa  fa-sort-down"></i>Trending Markets
                                </li>
                                <li role="presentation">
                                    <a class="link" href="form_account.html">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="link" href="component_calendar.html">
                                        <i class="fa fa-calendar"></i>
                                        Calendar
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="link" href="#">
                                        <i class="fa fa-inbox"></i>
                                        Inbox
                                    </a>
                                </li>
                                <li class="cat" role="presentation">
                                    <i class="fa  fa-sort-down"></i>Recent Markets
                                </li>
                                <li role="presentation">
                                    <a class="link" href="form_account.html">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="link" href="component_calendar.html">
                                        <i class="fa fa-calendar"></i>
                                        Calendar
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="link" href="#">
                                        <i class="fa fa-inbox"></i>
                                        Inbox
                                    </a>
                                </li>
                                <li class="cat" role="presentation">
                                    <i class="fa  fa-sort-down"></i>Open Orders
                                </li>
                                <li role="presentation">
                                    <a class="link" href="form_account.html">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="link" href="component_calendar.html">
                                        <i class="fa fa-calendar"></i>
                                        Calendar
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                	<li class="divider"></li>
                    <? if($appUser->loggedIn) { ?>
                            <li><a href="#"><?=trans('common.logout')?> <?=$appUser->user->fname?></a></li>
                            <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" id="messages" title="Messages" href="#">
                                <i class="fa fa-comments"></i>
                            </a>
                            <ul role="menu" class="dropdown-menu messages" id="messages-menu">
                                <li role="presentation">
                                    <a class="message" href="#">
                                        <img alt="" src="img/1.jpg">
                                        <div class="details">
                                            <div class="sender">Jane Hew</div>
                                            <div class="text">
                                                Hey, John! How is it going? ...
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="message" href="#">
                                        <img alt="" src="img/2.jpg">
                                        <div class="details">
                                            <div class="sender">Alies Rumiancaŭ</div>
                                            <div class="text">
                                                I'll definitely buy this template
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="message" href="#">
                                        <img alt="" src="img/3.jpg">
                                        <div class="details">
                                            <div class="sender">Michał Rumiancaŭ</div>
                                            <div class="text">
                                                Is it really Lore ipsum? Lore ...
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="text-align-center see-all" href="#">
                                        See all messages <i class="fa fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" title="8 support tickets" href="#">
                                <i class="fa fa-group"></i>
                                <span class="count">8</span>
                            </a>
                            <ul role="menu" class="dropdown-menu support" id="support-menu">
                                <li role="presentation">
                                    <a class="support-ticket" href="#">
                                        <div class="picture">
                                            <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                        </div>
                                        <div class="details">
                                            Check out this awesome ticket
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="support-ticket" href="#">
                                        <div class="picture">
                                            <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                        </div>
                                        <div class="details">
                                            "What is the best way to get ...
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="support-ticket" href="#">
                                        <div class="picture">
                                            <span class="label label-success"><i class="fa fa-tag"></i></span>
                                        </div>
                                        <div class="details">
                                            This is just a simple notification
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="support-ticket" href="#">
                                        <div class="picture">
                                            <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                        </div>
                                        <div class="details">
                                            12 new orders has arrived today
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="support-ticket" href="#">
                                        <div class="picture">
                                            <span class="label label-important"><i class="fa fa-plus"></i></span>
                                        </div>
                                        <div class="details">
                                            One more thing that just happened
                                        </div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="text-align-center see-all" href="#">
                                        See all tickets <i class="fa fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="hidden-xs">
                            <a data-placement="bottom" data-toggle="popover" title="" id="settings" href="#" data-original-title="Settings">
                                <i class="fa fa-cog"></i>
                            </a>
                        </li>
                        <li class="hidden-xs dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" id="account" title="Account" href="#">
                                <i class="fa fa-user"></i>
                            </a>
                            <ul role="menu" class="dropdown-menu account" id="account-menu">
                                <li class="account-picture" role="presentation">
                                    <img alt="" src="img/2.jpg">
                                    Philip Daineka
                                </li>
                                <li role="presentation">
                                    <a class="link" href="form_account.html">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="link" href="component_calendar.html">
                                        <i class="fa fa-calendar"></i>
                                        Calendar
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a class="link" href="#">
                                        <i class="fa fa-inbox"></i>
                                        Inbox
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Toggle siebar nav for mobile icon -->
                        <li class="visible-xs">
                            <a title="" data-target=".sidebar" data-toggle="collapse" class="btn-navbar" href="#">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <!-- Hide logout when viewed on mobile -->
                        <li class="hidden-xs"><a href="login.html"><i class="fa fa-sign-out"></i></a></li>
                    <? }else{ ?>
                    	<li><a href="#"><i class="fa fa-sign-in"></i> <div class="text inline"><?=trans('common.login')?></div></a></li>
                        <li><a href="#"><i class="fa fa-user"></i> <div class="text inline"><?=trans('common.register')?></div></a></li>
                    <? } ?>
                   
                    
                </ul>
               
        </div>
    </header>

</div>


@yield('main')

</body>
</html>