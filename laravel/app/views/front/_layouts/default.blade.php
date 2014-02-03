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


@yield('main')

</body>
</html>