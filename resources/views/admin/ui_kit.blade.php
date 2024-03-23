﻿<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Aero Bootstrap4 Admin ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<script src="../../../../cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<style>
    pre.prettyprint {
        background-color: #eee;
        border: 0px;
        margin: 0;        
        padding: 20px;
        text-align: left;
        font-size: 14px;
    }

    .atv,
    .str {
        color: #05AE0E;
    }

    .tag,
    .pln,
    .kwd {
        color: #3472F7;
    }

    .atn {
        color: #2C93FF;
    }

    .pln {
        color: #333;
    }

    .com {
        color: #999;
    }
    .typography-line {
        padding-left: 25%;
        margin-bottom: 35px;
        position: relative;
        display: block;
        width: 100%;
    }
    .typography-line span {
        bottom: 10px;
        color: #868686;
        display: block;
        font-weight: 400;
        font-size: 13px;
        line-height: 13px;
        left: 0;
        position: absolute;
        width: 220px;
        text-transform: none;
    }
</style>
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
        <input type="search" value="" placeholder="Search..." />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="#search" class="main_search" title="Search..."><i class="zmdi zmdi-search"></i></a></li>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" title="App" data-toggle="dropdown" role="button"><i class="zmdi zmdi-apps"></i></a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">App Sortcute</li>
                <li class="body">
                    <ul class="menu app_sortcut list-unstyled">
                        <li>
                            <a href="image-gallery.html">
                                <div class="icon-circle mb-2 bg-blue"><i class="zmdi zmdi-camera"></i></div>
                                <p class="mb-0">Photos</p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle mb-2 bg-amber"><i class="zmdi zmdi-translate"></i></div>
                                <p class="mb-0">Translate</p>
                            </a>
                        </li>
                        <li>
                            <a href="events.html">
                                <div class="icon-circle mb-2 bg-green"><i class="zmdi zmdi-calendar"></i></div>
                                <p class="mb-0">Calendar</p>
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <div class="icon-circle mb-2 bg-purple"><i class="zmdi zmdi-account-calendar"></i></div>
                                <p class="mb-0">Contacts</p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle mb-2 bg-red"><i class="zmdi zmdi-tag"></i></div>
                                <p class="mb-0">News</p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle mb-2 bg-grey"><i class="zmdi zmdi-map"></i></div>
                                <p class="mb-0">Maps</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">Notifications</li>
                <li class="body">
                    <ul class="menu list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                <div class="menu-info">
                                    <h4>8 New Members joined</h4>
                                    <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
                                <div class="menu-info">
                                    <h4>4 Sales made</h4>
                                    <p><i class="zmdi zmdi-time"></i> 22 mins ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> Deleted account</h4>
                                    <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> Changed name</h4>
                                    <p><i class="zmdi zmdi-time"></i> 2 hours ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-grey"><i class="zmdi zmdi-comment-text"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> Commented your post</h4>
                                    <p><i class="zmdi zmdi-time"></i> 4 hours ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-purple"><i class="zmdi zmdi-refresh"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> Updated status</h4>
                                    <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-blue"><i class="zmdi zmdi-settings"></i></div>
                                <div class="menu-info">
                                    <h4>Settings Updated</h4>
                                    <p><i class="zmdi zmdi-time"></i> Yesterday </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">Tasks List <small class="float-right"><a href="javascript:void(0);">View All</a></small></li>
                <li class="body">
                    <ul class="menu tasks list-unstyled">
                        <li>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge">eCommerce Website</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>                        
                                <ul class="list-unstyled team-info">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li>
                                        <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                    </li>
                                    <li>
                                        <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                    </li>
                                    <li>
                                        <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                    </li>                            
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="progress-container">
                                <span class="progress-badge">iOS Game Dev</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                        <span class="progress-value">45%</span>
                                    </div>
                                </div>
                                <ul class="list-unstyled team-info">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li>
                                        <img src="assets/images/xs/avatar10.jpg" alt="Avatar">
                                    </li>
                                    <li>
                                        <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                                    </li>
                                    <li>
                                        <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                                    </li>
                                    <li>
                                        <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                    </li>
                                    <li>
                                        <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="progress-container progress-warning">
                                <span class="progress-badge">Home Development</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                        <span class="progress-value">29%</span>
                                    </div>
                                </div>
                                <ul class="list-unstyled team-info">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li>
                                        <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                                    </li>
                                    <li>
                                        <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                    </li>
                                    <li>
                                        <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                    </li>                            
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="javascript:void(0);" class="app_calendar" title="Calendar"><i class="zmdi zmdi-calendar"></i></a></li>
        <li><a href="javascript:void(0);" class="app_google_drive" title="Google Drive"><i class="zmdi zmdi-google-drive"></i></a></li>
        <li><a href="javascript:void(0);" class="app_group_work" title="Group Work"><i class="zmdi zmdi-group-work"></i></a></li>
        <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li><a href="sign-in.html" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Super Admin</small>                        
                    </div>
                </div>
            </li>
            <li><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span></a>
                <ul class="ml-menu">
                    <li><a href="mail-inbox.html">Email</a></li>
                    <li><a href="chat.html">Chat Apps</a></li>
                    <li><a href="events.html">Calendar</a></li>
                    <li><a href="contact.html">Contact</a></li>                    
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Projects</span></a>
                <ul class="ml-menu">
                    <li><a href="project-list.html">Projects List</a></li>
                    <li><a href="taskboard.html">Taskboard</a></li>
                    <li><a href="ticket-list.html">Ticket List</a></li>
                    <li><a href="ticket-detail.html">Ticket Detail</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File Manager</span></a>
                <ul class="ml-menu">
                    <li><a href="file-dashboard.html">All File</a></li>
                    <li><a href="file-documents.html">Documents</a></li>
                    <li><a href="file-images.html">Images</a></li>
                    <li><a href="file-media.html">Media</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                <ul class="ml-menu">
                    <li><a href="blog-dashboard.html">Dashboard</a></li>
                    <li><a href="blog-post.html">Blog Post</a></li>
                    <li><a href="blog-list.html">List View</a></li>
                    <li><a href="blog-grid.html">Grid View</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span></a>
                <ul class="ml-menu">
                    <li><a href="ec-dashboard.html">Dashboard</a></li>
                    <li><a href="ec-product.html">Product</a></li>
                    <li><a href="ec-product-List.html">Product List</a></li>
                    <li><a href="ec-product-detail.html">Product detail</a></li>
                </ul>
            </li>
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Components</span></a>
                <ul class="ml-menu">
                    <li class="active"><a href="ui_kit.html">Aero UI KIT</a></li>                    
                    <li><a href="alerts.html">Alerts</a></li>                    
                    <li><a href="collapse.html">Collapse</a></li>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="dialogs.html">Dialogs</a></li>                    
                    <li><a href="list-group.html">List Group</a></li>
                    <li><a href="media-object.html">Media Object</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="notifications.html">Notifications</a></li>                    
                    <li><a href="progressbars.html">Progress Bars</a></li>
                    <li><a href="range-sliders.html">Range Sliders</a></li>
                    <li><a href="sortable-nestable.html">Sortable & Nestable</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                    <li><a href="waves.html">Waves</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-flower"></i><span>Font Icons</span></a>
                <ul class="ml-menu">
                    <li><a href="icons.html">Material Icons</a></li>
                    <li><a href="icons-themify.html">Themify Icons</a></li>
                    <li><a href="icons-weather.html">Weather Icons</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span></a>
                <ul class="ml-menu">
                    <li><a href="basic-form-elements.html">Basic Form</a></li>
                    <li><a href="advanced-form-elements.html">Advanced Form</a></li>
                    <li><a href="form-examples.html">Form Examples</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-wizard.html">Form Wizard</a></li>
                    <li><a href="form-editors.html">Editors</a></li>
                    <li><a href="form-upload.html">File Upload</a></li>
                    <li><a href="form-summernote.html">Summernote</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span></a>
                <ul class="ml-menu">
                    <li><a href="normal-tables.html">Normal Tables</a></li>
                    <li><a href="jquery-datatable.html">Jquery Datatables</a></li>
                    <li><a href="editable-table.html">Editable Tables</a></li>
                    <li><a href="footable.html">Foo Tables</a></li>
                    <li><a href="table-color.html">Tables Color</a></li>
                </ul>
            </li>            
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span></a>
                <ul class="ml-menu">
                    <li><a href="c3.html">C3 Chart</a></li>
                    <li><a href="morris.html">Morris</a></li>
                    <li><a href="flot.html">Flot</a></li>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="sparkline.html">Sparkline</a></li>
                    <li><a href="jquery-knob.html">Jquery Knob</a></li>
                </ul>
            </li>            
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a>
                <ul class="ml-menu">
                    <li><a href="widgets-app.html">Apps Widgets</a></li>
                    <li><a href="widgets-data.html">Data Widgets</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span></a>
                <ul class="ml-menu">
                    <li><a href="sign-in.html">Sign In</a></li>
                    <li><a href="sign-up.html">Sign Up</a></li>
                    <li><a href="forgot-password.html">Forgot Password</a></li>
                    <li><a href="404.html">Page 404</a></li>
                    <li><a href="500.html">Page 500</a></li>
                    <li><a href="page-offline.html">Page Offline</a></li>
                    <li><a href="locked.html">Locked Screen</a></li>
                </ul>
            </li>
            <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span></a>
                <ul class="ml-menu">
                    <li><a href="blank.html">Blank Page</a></li>
                    <li><a href="image-gallery.html">Image Gallery</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="invoices-list.html">Invoices List</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                </ul>
            </li>
            <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span></a>
                <ul class="ml-menu">
                    <li><a href="google.html">Google Map</a></li>
                    <li><a href="yandex.html">YandexMap</a></li>
                    <li><a href="jvectormap.html">jVectorMap</a></li>
                </ul>
            </li>
            <li>
                <div class="progress-container progress-primary m-t-10">
                    <span class="progress-badge">Traffic this Month</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                            <span class="progress-value">67%</span>
                        </div>
                    </div>
                </div>
                <div class="progress-container progress-info">
                    <span class="progress-badge">Server Load</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                            <span class="progress-value">86%</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs sm">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="setting">
                <div class="slim_scroll">
                    <div class="card">
                        <h6>Theme Option</h6>
                        <div class="light_dark">
                            <div class="radio">
                                <input type="radio" name="radio1" id="lighttheme" value="light" checked="">
                                <label for="lighttheme">Light Mode</label>
                            </div>
                            <div class="radio mb-0">
                                <input type="radio" name="radio1" id="darktheme" value="dark">
                                <label for="darktheme">Dark Mode</label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h6>Color Skins</h6>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="purple"><div class="purple"></div></li>                   
                            <li data-theme="blue"><div class="blue"></div></li>
                            <li data-theme="cyan"><div class="cyan"></div></li>
                            <li data-theme="green"><div class="green"></div></li>
                            <li data-theme="orange"><div class="orange"></div></li>
                            <li data-theme="blush" class="active"><div class="blush"></div></li>
                        </ul>                    
                    </div>
                    <div class="card">
                        <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled">
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Report Panel Usage</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">Email Redirect</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox" checked="">
                                    <label for="checkbox3">Notifications</label>
                                </div>                        
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Auto Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">Offline</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox6" type="checkbox" checked="">
                                    <label for="checkbox6">Location Permission</label>
                                </div>
                            </li>
                        </ul>
                    </div>                
                </div>                
            </div>       
            <div class="tab-pane right_chat" id="chat">
                <div class="slim_scroll">
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Sophia <small class="float-right">11:00AM</small></span>
                                            <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Grayson <small class="float-right">11:30AM</small></span>
                                            <span class="message">All the Lorem Ipsum generators on the</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Isabella <small class="float-right">11:31AM</small></span>
                                            <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="me">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">John <small class="float-right">05:00PM</small></span>
                                            <span class="message">It is a long established fact that a reader</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Alexander <small class="float-right">06:08PM</small></span>
                                            <span class="message">Richard McClintock, a Latin professor</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>UI Kit</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
                        <li class="breadcrumb-item active">UI Kit</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Typography</strong></h2>                        
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="typography-line">
                                        <h1><span>Header 1</span>The Life of Now UI Kit </h1>
                                    </div>
                                    <div class="typography-line">
                                        <h2><span>Header 2</span>The Life of Now UI Kit</h2>
                                    </div>
                                    <div class="typography-line">
                                        <h3><span>Header 3</span>The Life of Now UI Kit</h3>
                                    </div>
                                    <div class="typography-line">
                                        <h4><span>Header 4</span>The Life of Now UI Kit</h4>
                                    </div>
                                    <div class="typography-line">
                                        <h5><span>Header 5</span>The Life of Now UI Kit</h5>
                                    </div>
                                    <div class="typography-line">
                                        <h6><span>Header 6</span>The Life of Now UI Kit</h6>
                                    </div>
                                    <div class="typography-line">
                                        <p>
                                            <span>Paragraph</span>
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                                        </p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Quote</span>
                                        <blockquote>
                                            <p class="blockquote blockquote-primary">
                                                "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                                                <br>
                                                <br>
                                                <small>
                                                    - ThemeMakker
                                                </small>
                                            </p>
                                        </blockquote>
                                    </div>
                                    <div class="typography-line">
                                        <span>Muted Text</span>
                                        <p class="text-muted">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Primary Text</span>
                                        <p class="text-primary">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Info Text</span>
                                        <p class="text-info">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Success Text</span>
                                        <p class="text-success">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Warning Text</span>
                                        <p class="text-warning">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                                    </div>
                                    <div class="typography-line">
                                        <span>Danger Text</span>
                                        <p class="text-danger">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                    </div>
                                    <div class="typography-line">
                                        <h2>
                                            <span>Small Tag</span>
                                            Header with small subtitle
                                            <br>
                                            <small>Use "small" tag for the headers</small>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Buttons</strong> Colors</h2>                        
                        </div>
                        <div class="body">
                            <p>We worked over the original Bootstrap classes, choosing a different, slightly intenser color pallete:</p>
                            <button class="btn btn-default">Default</button>
                            <button class="btn btn-primary">Primary</button>
                            <button class="btn btn-info">Info</button>
                            <button class="btn btn-success">Success</button>
                            <button class="btn btn-warning">Warning</button>
                            <button class="btn btn-danger">Danger</button>
                            <button class="btn btn-neutral">Neutral</button>
<pre class="prettyprint">
&lt;button class=&quot;btn btn-default&quot;&gt;Default&lt;/button&gt;
&lt;button class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button class=&quot;btn btn-neutral&quot;&gt;Neutral&lt;/button&gt;</pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Buttons</strong> Sizes</h2>                        
                        </div>
                        <div class="body">
                            <p>Buttons come in all needed sizes:</p>
                            <button class="btn btn-primary btn-lg">Large</button>
                            <button class="btn btn-primary">Normal</button>
                            <button class="btn btn-primary btn-sm">Small</button>
<pre class="prettyprint">
&lt;button class=&quot;btn btn-primary btn-lg&quot;&gt;Large&lt;/button&gt;
&lt;button class=&quot;btn btn-primary&quot;&gt;Normal&lt;/button&gt;
&lt;button class=&quot;btn btn-primary btn-sm&quot;&gt;Small&lt;/button&gt;</pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Buttons</strong> Styles</h2>                        
                        </div>
                        <div class="body">
                            <p>We added extra classes that can help you better customise the look. You can use regular buttons, rounded corners buttons or plain simple buttons. Let's see some examples:
                            </p>
                            <button class="btn btn-primary">Default</button>
                            <button class="btn btn-primary btn-round">Round</button>
                            <button class="btn btn-primary btn-round"><i class="zmdi zmdi-favorite-outline"></i> With Icon</button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-favorite-outline"></i></button>
                            <button class="btn btn-primary btn-simple">Simple</button>
<pre class="prettyprint">
&lt;button class=&quot;btn btn-primary&quot;&gt;Default&lt;/button&gt;
&lt;button class=&quot;btn btn-primary btn-round&quot;&gt;Round&lt;/button&gt;
&lt;button class=&quot;btn btn-primary btn-round&quot;&gt; &lt;i class=&quot;zmdi zmdi-favorite-outline6&quot;&gt;&lt;/i&gt; With Icon &lt;/button&gt;
&lt;button class=&quot;btn btn-primary btn-icon btn-icon-mini btn-round&quot;&gt; &lt;i class=&quot;zmdi zmdi-favorite-outline&quot;&gt;&lt;/i&gt; &lt;/button&gt;
&lt;button class=&quot;btn btn-primary btn-simple&quot;&gt;Simple&lt;/button&gt;</pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Checkboxes</strong></h2>                        
                        </div>
                        <div class="body">
                            <p>To use the custom checkboxes, you don't need to import any separate Javascript file, just add the below code:</p>
                            <div class="checkbox">
                                <input id="checkbox10" type="checkbox">
                                <label for="checkbox10">
                                    Unchecked
                                </label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox12" type="checkbox" checked="">
                                <label for="checkbox12">
                                    Checked
                                </label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox13" type="checkbox" disabled="">
                                <label for="checkbox13">
                                    Disabled unchecked
                                </label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox14" type="checkbox" checked="" disabled="">
                                <label for="checkbox14">
                                    Disabled checked
                                </label>
                            </div>
<pre class="prettyprint">
&lt;div class="checkbox"&gt;
    &lt;input id="checkbox1" type="checkbox"&gt;
    &lt;label for="checkbox1"&gt;Unchecked&lt;/label&gt;
&lt;/div&gt;

&lt;div class="checkbox"&gt;
    &lt;input id="checkbox2" type="checkbox" checked=""&gt;
    &lt;label for="checkbox2"&gt;Checked&lt;/label&gt;
&lt;/div&gt;

&lt;div class="checkbox"&gt;
    &lt;input id="checkbox3" type="checkbox" disabled=""&gt;
    &lt;label for="checkbox3"&gt;Disabled unchecked&lt;/label&gt;
&lt;/div&gt;

&lt;div class="checkbox"&gt;
    &lt;input id="checkbox4" type="checkbox" checked="" disabled=""&gt;
    &lt;label for="checkbox4"&gt;Disabled checked&lt;/label&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Radio</strong> Buttons</h2>                        
                        </div>
                        <div class="body">
                            <p>To use the custom radio buttons, you don't need to import any separate Javascript file, just add the below code:</p>
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio1" value="option1">
                                <label for="radio1">
                                    Radio is off
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio2" value="option2" checked="">
                                <label for="radio2">
                                    Radio is on
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio3" id="radio3" value="option3" disabled="">
                                <label for="radio3">
                                    Disabled radio is off
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio4" id="radio4" value="option4" checked="" disabled="">
                                <label for="radio4">
                                    Disabled radio is on
                                </label>
                            </div>
<pre class="prettyprint">
&lt;div class="radio"&gt;
    &lt;input type="radio" name="radio1" id="radio1" value="option1"&gt;
    &lt;label for="radio1"&gt;Radio is off&lt;/label&gt;
&lt;/div&gt;

&lt;div class="radio"&gt;
    &lt;input type="radio" name="radio1" id="radio2" value="option2" checked=""&gt;
    &lt;label for="radio2"&gt;Radio is on&lt;/label&gt;
&lt;/div&gt;

&lt;div class="radio"&gt;
    &lt;input type="radio" name="radio3" id="radio3" value="option3" disabled=""&gt;
    &lt;label for="radio3"&gt;Disabled radio is off&lt;/label&gt;
&lt;/div&gt;

&lt;div class="radio"&gt;
    &lt;input type="radio" name="radio4" id="radio4" value="option4" checked="" disabled=""&gt;
    &lt;label for="radio4"&gt;Disabled radio is on&lt;/label&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>
                </div>            
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Inputs</strong></h2>                        
                        </div>
                        <div class="body">
                            <p>We restyled the Bootstrap input to give it a more flat, minimal look. You can use them with regular labels, states or input groups.</p>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input class="form-control mb-2 form-control-lg" type="text" placeholder=".form-control-lg">
                                    <input class="form-control mb-2" type="text" placeholder="Default input">
                                    <input class="form-control mb-2 form-control-sm" type="text" placeholder=".form-control-sm">
                                </div>
                            </div>
<pre class="prettyprint">
&lt;input class=&quot;form-control form-control-lg&quot; type=&quot;text&quot; placeholder=&quot;.form-control-lg&quot;&gt;
&lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Default input&quot;&gt;
&lt;input class=&quot;form-control form-control-sm&quot; type=&quot;text&quot; placeholder=&quot;.form-control-sm&quot;&gt;
</pre><hr>
                            <form>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationServer01">First name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationServer02">Last name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationServerUsername">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend3">@</span></div>
                                            <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required="">
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer03">City</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required="">
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationServer04">State</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required="">
                                        <div class="invalid-feedback">Please provide a valid state.</div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationServer05">Zip</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required="">
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Textarea</strong></h2>                        
                        </div>
                        <div class="body">
                            <p>The textarea has a new style, so it looks similar to all other inputs.</p>
                            <textarea class="form-control m-b-20" placeholder="Here can be your nice text" rows="5"></textarea>
                            <pre class="prettyprint">
    &lt;textarea class=&quot;form-control&quot; placeholder=&quot;Here can be your nice text&quot; rows=&quot;5&quot;&gt;&lt;/textarea&gt;</pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Nav</strong> Pills</h2>                        
                        </div>
                        <div class="body">
                            <p>
                                We changed the design for the Bootstrap nav pills into something a bit more fresh. We also added more color classes for customisation like
                                <code>.nav-pills-primary</code>,
                                <code>.nav-pills-info</code>,
                                <code>.nav-pills-success</code>,
                                <code>.nav-pills-warning</code>,
                                <code>.nav-pills-danger</code>
                            </p>
                            <ul class="nav nav-pills nav-pills-primary m-b-20" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#active" role="tablist">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#link" role="tablist">
                                        <i class="zmdi zmdi-library"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link" role="tablist">
                                        <i class="zmdi zmdi-lamp"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" data-toggle="tab" href="#disabled" role="tablist">
                                        <i class="zmdi zmdi-lock"></i>
                                    </a>
                                </li>
                            </ul>
<pre class="prettyprint">
&lt;ul class="nav nav-pills nav-pills-primary" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" data-toggle="tab" href="#active" role="tablist"&gt;
            &lt;i class="zmdi zmdi-favorite"&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" data-toggle="tab" href="#link" role="tablist"&gt;
            &lt;i class="zmdi zmdi-library"&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" data-toggle="tab" href="#link" role="tablist"&gt;
            &lt;i class="zmdi zmdi-lamp"&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link disabled" data-toggle="tab" href="#disabled" role="tablist"&gt;
            &lt;i class="zmdi zmdi-lock"&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;</pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Pagination</strong></h2>                        
                        </div>
                        <div class="body">
                            <p>The Bootstrap pagination elements were customised to fit the overall theme. Besides the classic look, we also added the color classes to offer more customisation like
                                <code>.pagination-info</code>,
                                <code>.pagination-success</code>,
                                <code>.pagination-warning</code>,
                                <code>.pagination-danger</code>,
                                <code>.pagination-primary</code>.
                            </p>
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="pagination pagination-primary">
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0);">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">5</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="pagination pagination-info">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">5</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="pagination pagination-success">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0);">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">5</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="pagination pagination-warning">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">3</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0);">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">5</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="pagination pagination-danger">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">4</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0);">5</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">4</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0);">5</a>
                                        </li>
                                    </ul>
                                </div>                            
                                <div class="col-md-12">
                                        <p>We build two classes<code>.arrow-margin-left</code> and <code>.arrow-margin-right</code>, so once that you will apply these classes pagination will be full-width. To see where to put the mentioned classes please see the example below.</p>
                                    <div class="pagination-container justify-content-center">
                                        <ul class="pagination pagination-primary">
                                            <li class="page-item arrow-margin-left">
                                                <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                                    <span aria-hidden="true"><i class="zmdi zmdi-chevron-left" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0);">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">5</a>
                                            </li>
                                            <li class="page-item arrow-margin-right">
                                                <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                                    <span aria-hidden="true"><i class="zmdi zmdi-chevron-right" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
<pre class="prettyprint">
//Pagination simple
&lt;ul class="pagination pagination-primary"&gt;
    &lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;5&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;


//Pagination full-width
&lt;div class="justify-content-center"&gt;
    &lt;ul class="pagination pagination-primary"&gt;
        &lt;li class="page-item arrow-margin-left"&gt;
            &lt;a class="page-link" href="javascript:void(0);" aria-label="Previous"&gt;
                &lt;span aria-hidden="true"&gt;&lt;i class="zmdi zmdi-chevron-left" aria-hidden="true"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/a&gt;
        &lt;/li&gt;


        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;5&lt;/a&gt;&lt;/li&gt;



        &lt;li class="page-item arrow-margin-right"&gt;
            &lt;a class="page-link" href="javascript:void(0);" aria-label="Next"&gt;
                &lt;span aria-hidden="true"&gt;&lt;i class="zmdi zmdi-chevron-right" aria-hidden="true"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Progress</strong> Bars</h2>                        
                        </div>
                        <div class="body">
                            <p>The progress bars from Bootstrap hold the same classes and functionality. Adding this kit over your existing project will only make it look more clean. The default line is gray, each bar has a specific color but you can add some colors for the background lines using the next classes
                                <code>.progress-primary</code>,
                                <code>.progress-info</code>,
                                <code>.progress-success</code>,
                                <code>.progress-warning</code>,
                                <code>.progress-danger</code>,
                            </p>
                            <div class="progress-container">
                                <span class="progress-badge">Default</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        <span class="progress-value">25%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge">Primary</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="progress-value">60%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-container progress-info">
                                <span class="progress-badge">Info</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="progress-value">60%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-container progress-success">
                                <span class="progress-badge">Success</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="progress-value">60%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-container progress-danger">
                                <span class="progress-badge">Danger</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="progress-value">60%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-20 progress-container progress-warning">
                                <span class="progress-badge">Warning</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="progress-value">60%</span>
                                    </div>
                                </div>
                            </div>
<pre class="prettyprint">
&lt;div class="progress-container"&gt;
    &lt;span class="progress-badge"&gt;Default&lt;/span&gt;
    &lt;div class="progress"&gt;
        &lt;div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"&gt;
            &lt;span class="progress-value"&gt;25%&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress-container progress-primary"&gt;
    &lt;span class="progress-badge"&gt;Primary&lt;/span&gt;
    &lt;div class="progress"&gt;
        &lt;div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"&gt;
            &lt;span class="progress-value"&gt;60%&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress-container progress-info"&gt;
    &lt;span class="progress-badge"&gt;Info&lt;/span&gt;
    &lt;div class="progress"&gt;
        &lt;div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"&gt;
            &lt;span class="progress-value"&gt;60%&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress-container progress-success"&gt;
    &lt;span class="progress-badge"&gt;Success&lt;/span&gt;
    &lt;div class="progress"&gt;
        &lt;div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"&gt;
            &lt;span class="progress-value"&gt;60%&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress-container progress-danger"&gt;
    &lt;span class="progress-badge"&gt;Danger&lt;/span&gt;
    &lt;div class="progress"&gt;
        &lt;div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"&gt;
            &lt;span class="progress-value"&gt;60%&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress-container progress-warning"&gt;
    &lt;span class="progress-badge"&gt;Warning&lt;/span&gt;
    &lt;div class="progress"&gt;
        &lt;div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"&gt;
            &lt;span class="progress-value"&gt;60%&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Labels</strong></h2>                        
                        </div>
                        <div class="body">                        
                            <p>We restyled the default options for labels and we added the filled class, that can be used in any combination.</p>
                            <span class="badge badge-default">Default</span>
                            <span class="badge badge-primary">Primary</span>
                            <span class="badge badge-success">Success</span>
                            <span class="badge badge-info">Info</span>
                            <span class="badge badge-warning">Warning</span>
                            <span class="badge badge-danger">Danger</span>
<pre class="prettyprint">
&lt;span class="badge badge-default"&gt;Default&lt;/span&gt;
&lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge badge-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge badge-danger"&gt;Danger&lt;/span&gt;</pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Notifications</strong></h2>                        
                        </div>
                        <div class="body">
                            <p>The new notifications are looking fresh and clean. They go great with the navbar. For these notifications examples we used the
                                <code>.container-fluid</code> class, so they will be fluid, please use the class
                                <code>.container</code> when you use them outside of the
                                <code>.wrapper</code> so they will be alignd with the general page container
                            </p>
                            <div class="alert alert-success" role="alert">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="zmdi zmdi-thumb-up"></i>
                                    </div>
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="zmdi zmdi-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="alert alert-info" role="alert">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="zmdi zmdi-alert-circle-o"></i>
                                    </div>
                                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="zmdi zmdi-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="zmdi zmdi-notifications"></i>
                                    </div>
                                    <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="zmdi zmdi-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="alert alert-danger" role="alert">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="zmdi zmdi-block"></i>
                                    </div>
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="zmdi zmdi-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
<pre class="prettyprint">
&lt;div class="alert alert-success" role="alert"&gt;
    &lt;div class="container"&gt;
        &lt;div class="alert-icon"&gt;
            &lt;i class="zmdi zmdi-thumb-up"&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message.
        &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;
                &lt;span aria-hidden="true"&gt;
                &lt;i class="zmdi zmdi-close"&gt;&lt;/i&gt;
            &lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="alert alert-info" role="alert"&gt;
    &lt;div class="container"&gt;
        &lt;div class="alert-icon"&gt;
            &lt;i class="zmdi zmdi-alert-circle-o"&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;strong&gt;Heads up!&lt;/strong&gt; This alert needs your attention, but it's not super important.
        &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;
                &lt;span aria-hidden="true"&gt;
                &lt;i class="zmdi zmdi-close"&gt;&lt;/i&gt;
            &lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="alert alert-warning" role="alert"&gt;
    &lt;div class="container"&gt;
        &lt;div class="alert-icon"&gt;
            &lt;i class="zmdi zmdi-notifications"&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;strong&gt;Warning!&lt;/strong&gt; Better check yourself, you're not looking too good.
        &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;
            &lt;span aria-hidden="true"&gt;
                &lt;i class="zmdi zmdi-close"&gt;&lt;/i&gt;
            &lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="alert alert-danger" role="alert"&gt;
    &lt;div class="container"&gt;
        &lt;div class="alert-icon"&gt;
            &lt;i class="zmdi zmdi-block"&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;strong&gt;Oh snap!&lt;/strong&gt; Change a few things up and try submitting again.
        &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;
            &lt;span aria-hidden="true"&gt;
                &lt;i class="zmdi zmdi-close"&gt;&lt;/i&gt;
            &lt;/span&gt;
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Images</strong></h2>                        
                        </div>
                        <div class="body m-b-20">
                            <div class="row">
                                <div class="col-sm-2">
                                    <p class="category">Image</p>
                                    <img src="assets/images/lg/avatar1.jpg" alt="Rounded Image" class="rounded">
                                </div>
                                <div class="col-sm-2">
                                    <p class="category">Circle Image</p>
                                    <img src="assets/images/lg/avatar1.jpg" alt="Circle Image" class="rounded-circle">
                                </div>
                                <div class="col-sm-2">
                                    <p class="category">Raised</p>
                                    <img src="assets/images/lg/avatar1.jpg" alt="Raised Image" class="rounded img-raised">
                                </div>
                                <div class="col-sm-2">
                                    <p class="category">Circle Raised</p>
                                    <img src="assets/images/lg/avatar1.jpg" alt="Thumbnail Image" class="rounded-circle img-raised">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>


</html>