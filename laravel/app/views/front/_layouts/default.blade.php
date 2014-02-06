<!DOCTYPE html>
<html>
<head>
    <title>Crypt Index</title>
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
	<script src="{{ URL::asset('assets/js/vendor/bootstrap/bootstrap.min.js') }}"></script>
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
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#forms-collapse"><i class="fa fa-edit"></i> <span class="name">Forms</span></a>
            <ul id="forms-collapse" class="panel-collapse collapse">
                <li><a href="form_account.html">Account</a></li>
                <li><a href="form_article.html">Article</a></li>
                <li><a href="form_elements.html">Elements</a></li>
                <li><a href="form_validation.html">Validation</a></li>
                <li><a href="form_wizard.html">Wizard</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-bar-chart-o"></i> <span class="name">Statistics</span></a>
            <ul id="stats-collapse" class="panel-collapse collapse">
                <li><a href="stat_statistics.html">Stats</a></li>
                <li><a href="stat_charts.html">Charts</a></li>
                <li><a href="stat_realtime.html">Realtime</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">User Interface</span></a>
            <ul id="ui-collapse" class="panel-collapse collapse">
                <li><a href="ui_buttons.html">Buttons</a></li>
                <li><a href="ui_dialogs.html">Dialogs</a></li>
                <li><a href="ui_icons.html">Icons</a></li>
                <li><a href="ui_tabs.html">Tabs</a></li>
                <li><a href="ui_accordion.html">Accordion</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#components-collapse"><i class="fa fa-bookmark-o"></i> <span class="name">Components</span></a>
            <ul id="components-collapse" class="panel-collapse collapse">
                <li><a href="component_calendar.html">Calendar</a></li>
                <li><a href="component_maps.html">Maps</a></li>
                <li><a href="component_gallery.html">Gallery</a></li>
                <li><a href="component_fileupload.html">Fileupload</a></li>
                <li><a href="component_bootstrap.html">Bootstrap &nbsp; <span class="label label-important">new</span></a></li>
                <li><a href="component_list_groups.html">List Groups &nbsp; <span class="label label-important">new</span></a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-table"></i> <span class="name">Tables</span></a>
            <ul id="tables-collapse" class="panel-collapse collapse">
                <li><a href="tables_static.html">Static</a></li>
                <li><a href="tables_dynamic.html">Dynamic</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#grid-collapse"><i class="fa fa-bars"></i> <span class="name">Grid</span></a>
            <ul id="grid-collapse" class="panel-collapse collapse">
                <li><a href="grid.html">Basic</a></li>
                <li><a href="grid_live.html">Live &nbsp; <span class="label label-important">new</span></a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#special-collapse"><i class="fa fa-asterisk"></i> <span class="name">Special</span></a>
            <ul id="special-collapse" class="panel-collapse collapse">
                <li><a href="special_search.html">Search</a></li>
                <li><a href="special_invoice.html">Invoice</a></li>
                <li><a href="special_inbox.html">Inbox <span class="label label-important">3</span></a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="special_404.html">404</a></li>
                <li><a href="landing.html">Landing</a></li>
                <li><a href="white/index.html">White <i class="fa fa-external-link-square"></i></a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#menu-levels-collapse"><i class="fa fa-code-fork"></i> <span class="name">Menu Levels</span></a>
            <ul id="menu-levels-collapse" class="panel-collapse collapse">
                <li><a href="#">Item 1.1</a></li>
                <li><a href="#">Item 1.2</a></li>
                <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#menu-levels-collapse" href="#sub-menu-1-collapse">Item 1.3</a>
                    <ul id="sub-menu-1-collapse" class="panel-collapse collapse">
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#sub-menu-1-collapse" href="#sub-menu-3-collapse">Item 2.1</a>
                            <ul id="sub-menu-3-collapse" class="panel-collapse collapse">
                                <li><a href="#">Item 3.1</a></li>
                                <li><a href="#">Item 3.2</a></li>
                                <li><a href="#">Item 3.3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Item 2.2</a></li>
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#sub-menu-1-collapse" href="#sub-menu-2-collapse">Item 2.3</a>
                            <ul id="sub-menu-2-collapse" class="panel-collapse collapse">
                                <li><a href="#">Item 3.4</a></li>
                                <li><a href="#">Item 3.5</a></li>
                                <li><a href="#">Item 3.6</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="visible-xs">
            <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
        </li>
    </ul>
   
</nav>


<!-- Main Wrapper -->
<div class="wrap">
	<header class="page-header">
        <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a id="search-toggle" href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
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
                    <li class="visible-xs">
                        <a title="" data-target=".sidebar" data-toggle="collapse" class="btn-navbar" href="#">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="login.html"><i class="fa fa-sign-out"></i></a></li>
                </ul>
                <form role="search" class="navbar-form pull-right" id="search-form">
                    <input type="search" placeholder="Search..." class="search-query">
                </form>
                <div class="notifications pull-right">
                    <div class="alert pull-right">
                        <a data-dismiss="alert" class="close" href="#">×</a>
                        <i class="fa fa-info-circle"></i> Check out Light Blue <a href="#" id="notification-link">settings</a> on the right!
                    </div>
                </div>
        </div>
    </header>

</div>


@yield('main')

</body>
</html>