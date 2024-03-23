﻿<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Aero Bootstrap4 Admin :: Themify Icons</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">

<!-- Just for demo not include in project -->
<style>
.icon-section{ clear: both; overflow: hidden;}
.icon-section .icon-container { width: 260px; padding: .7em 0; float: left; position: relative; text-align: left;}
.icon-section .icon-name {color: #555;  margin-left: 35px; transition: .3s;}
.icon-section .icon-container [class^="ti-"], .icon-section .icon-container [class*=" ti-"]{color: #0c7ce6; position: absolute; margin-top: 3px; transition: .3s;}
.icon-section .icon-container:hover [class^="ti-"], .icon-section .icon-container:hover [class*=" ti-"]{font-size: 2.2em; margin-top: -5px;}
</style>
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
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Components</span></a>
                <ul class="ml-menu">
                    <li><a href="ui_kit.html">Aero UI KIT</a></li>                    
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
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-flower"></i><span>Font Icons</span></a>
                <ul class="ml-menu">
                    <li><a href="icons.html">Material Icons</a></li>
                    <li class="active"><a href="icons-themify.html">Themify Icons</a></li>
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

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Themify Icons</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">Icons</li>
                        <li class="breadcrumb-item active">Themify Icons</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Arrows</strong> &amp; Direction Icons</h2>
                        </div>
                        <div class="body">
                            <div class="icon-section">
                    
                                <div class="icon-container">
                                    <span class="ti-arrow-up"></span><span class="icon-name"> ti-arrow-up</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrow-right"></span><span class="icon-name"> ti-arrow-right</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrow-left"></span><span class="icon-name"> ti-arrow-left</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrow-down"></span><span class="icon-name"> ti-arrow-down</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrows-vertical"></span><span class="icon-name"> ti-arrows-vertical</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrows-horizontal"></span><span class="icon-name"> ti-arrows-horizontal</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-angle-up"></span><span class="icon-name"> ti-angle-up</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-angle-right"></span><span class="icon-name"> ti-angle-right</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-angle-left"></span><span class="icon-name"> ti-angle-left</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-angle-down"></span><span class="icon-name"> ti-angle-down</span>
                                </div>	
                                <div class="icon-container">
                                    <span class="ti-angle-double-up"></span><span class="icon-name"> ti-angle-double-up</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-angle-double-right"></span><span class="icon-name"> ti-angle-double-right</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-angle-double-left"></span><span class="icon-name"> ti-angle-double-left</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-angle-double-down"></span><span class="icon-name"> ti-angle-double-down</span>
                                </div>					
                                <div class="icon-container">
                                    <span class="ti-move"></span><span class="icon-name"> ti-move</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-fullscreen"></span><span class="icon-name"> ti-fullscreen</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrow-top-right"></span><span class="icon-name"> ti-arrow-top-right</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrow-top-left"></span><span class="icon-name"> ti-arrow-top-left</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrow-circle-up"></span><span class="icon-name"> ti-arrow-circle-up</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrow-circle-right"></span><span class="icon-name"> ti-arrow-circle-right</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrow-circle-left"></span><span class="icon-name"> ti-arrow-circle-left</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrow-circle-down"></span><span class="icon-name"> ti-arrow-circle-down</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-arrows-corner"></span><span class="icon-name"> ti-arrows-corner</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-split-v"></span><span class="icon-name"> ti-split-v</span>
                                </div>
                    
                                <div class="icon-container">
                                    <span class="ti-split-v-alt"></span><span class="icon-name"> ti-split-v-alt</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-split-h"></span><span class="icon-name"> ti-split-h</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-hand-point-up"></span><span class="icon-name"> ti-hand-point-up</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-hand-point-right"></span><span class="icon-name"> ti-hand-point-right</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-hand-point-left"></span><span class="icon-name"> ti-hand-point-left</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-hand-point-down"></span><span class="icon-name"> ti-hand-point-down</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-back-right"></span><span class="icon-name"> ti-back-right</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-back-left"></span><span class="icon-name"> ti-back-left</span>
                                </div>
                                <div class="icon-container">
                                    <span class="ti-exchange-vertical"></span><span class="icon-name"> ti-exchange-vertical</span>
                                </div>
                    
                            </div> <!-- Arrows Icons -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Web</strong> App Icons</h2>
                        </div>
                        <div class="body">
                            <div class="icon-section">
                                <div class="icon-container"><span class="ti-wand"></span><span class="icon-name"> ti-wand</span></div>
                                <div class="icon-container"><span class="ti-save"></span><span class="icon-name"> ti-save</span></div>
                                <div class="icon-container"><span class="ti-save-alt"></span><span class="icon-name"> ti-save-alt</span></div>                    
                                <div class="icon-container"><span class="ti-direction"></span><span class="icon-name"> ti-direction</span></div>
                                <div class="icon-container"><span class="ti-direction-alt"></span><span class="icon-name"> ti-direction-alt</span></div>
                                <div class="icon-container"><span class="ti-user"></span><span class="icon-name"> ti-user</span></div>
                                <div class="icon-container"><span class="ti-link"></span><span class="icon-name"> ti-link</span></div>
                                <div class="icon-container"><span class="ti-unlink"></span><span class="icon-name"> ti-unlink</span></div>
                                <div class="icon-container"><span class="ti-trash"></span><span class="icon-name"> ti-trash</span></div>
                                <div class="icon-container"><span class="ti-target"></span><span class="icon-name"> ti-target</span></div>
                                <div class="icon-container"><span class="ti-tag"></span><span class="icon-name"> ti-tag</span></div>
                                <div class="icon-container"><span class="ti-desktop"></span><span class="icon-name"> ti-desktop</span></div>
                                <div class="icon-container"><span class="ti-tablet"></span><span class="icon-name"> ti-tablet</span></div>
                                <div class="icon-container"><span class="ti-mobile"></span><span class="icon-name"> ti-mobile</span></div>
                                <div class="icon-container"><span class="ti-email"></span><span class="icon-name"> ti-email</span></div>	
                                <div class="icon-container"><span class="ti-star"></span><span class="icon-name"> ti-star</span></div>
                                <div class="icon-container"><span class="ti-spray"></span><span class="icon-name"> ti-spray</span></div>
                                <div class="icon-container"><span class="ti-signal"></span><span class="icon-name"> ti-signal</span></div>
                                <div class="icon-container"><span class="ti-shopping-cart"></span><span class="icon-name"> ti-shopping-cart</span></div>
                                <div class="icon-container"><span class="ti-shopping-cart-full"></span><span class="icon-name"> ti-shopping-cart-full</span></div>
                                <div class="icon-container"><span class="ti-settings"></span><span class="icon-name"> ti-settings</span></div>
                                <div class="icon-container"><span class="ti-search"></span><span class="icon-name"> ti-search</span></div>
                                <div class="icon-container"><span class="ti-zoom-in"></span><span class="icon-name"> ti-zoom-in</span></div>
                                <div class="icon-container"><span class="ti-zoom-out"></span><span class="icon-name"> ti-zoom-out</span></div>
                                <div class="icon-container"><span class="ti-cut"></span><span class="icon-name"> ti-cut</span></div>
                                <div class="icon-container"><span class="ti-ruler"></span><span class="icon-name"> ti-ruler</span></div>
                                <div class="icon-container"><span class="ti-ruler-alt-2"></span><span class="icon-name"> ti-ruler-alt-2</span></div>			
                                <div class="icon-container"><span class="ti-ruler-pencil"></span><span class="icon-name"> ti-ruler-pencil</span></div>
                                <div class="icon-container"><span class="ti-ruler-alt"></span><span class="icon-name"> ti-ruler-alt</span></div>
                                <div class="icon-container"><span class="ti-bookmark"></span><span class="icon-name"> ti-bookmark</span></div>
                                <div class="icon-container"><span class="ti-bookmark-alt"></span><span class="icon-name"> ti-bookmark-alt</span></div>
                                <div class="icon-container"><span class="ti-reload"></span><span class="icon-name"> ti-reload</span></div>
                                <div class="icon-container"><span class="ti-plus"></span><span class="icon-name"> ti-plus</span></div>
                                <div class="icon-container"><span class="ti-minus"></span><span class="icon-name"> ti-minus</span></div>
                                <div class="icon-container"><span class="ti-close"></span><span class="icon-name"> ti-close</span></div>			
                                <div class="icon-container"><span class="ti-pin"></span><span class="icon-name"> ti-pin</span></div>
                                <div class="icon-container"><span class="ti-pencil"></span><span class="icon-name"> ti-pencil</span></div>
                                <div class="icon-container"><span class="ti-pencil-alt"></span><span class="icon-name"> ti-pencil-alt</span></div>
                                <div class="icon-container"><span class="ti-paint-roller"></span><span class="icon-name"> ti-paint-roller</span></div>
                                <div class="icon-container"><span class="ti-paint-bucket"></span><span class="icon-name"> ti-paint-bucket</span></div>
                                <div class="icon-container"><span class="ti-na"></span><span class="icon-name"> ti-na</span></div>
                                <div class="icon-container"><span class="ti-medall"></span><span class="icon-name"> ti-medall</span></div>
                                <div class="icon-container"><span class="ti-medall-alt"></span><span class="icon-name"> ti-medall-alt</span></div>
                                <div class="icon-container"><span class="ti-marker"></span><span class="icon-name"> ti-marker</span></div>
                                <div class="icon-container"><span class="ti-marker-alt"></span><span class="icon-name"> ti-marker-alt</span></div>                    
                                <div class="icon-container"><span class="ti-lock"></span><span class="icon-name"> ti-lock</span></div>
                                <div class="icon-container"><span class="ti-unlock"></span><span class="icon-name"> ti-unlock</span></div>
                                <div class="icon-container"><span class="ti-location-arrow"></span><span class="icon-name"> ti-location-arrow</span></div>
                                <div class="icon-container"><span class="ti-layout"></span><span class="icon-name"> ti-layout</span></div>
                                <div class="icon-container"><span class="ti-layers"></span><span class="icon-name"> ti-layers</span></div>
                                <div class="icon-container"><span class="ti-layers-alt"></span><span class="icon-name"> ti-layers-alt</span></div>
                                <div class="icon-container"><span class="ti-key"></span><span class="icon-name"> ti-key</span></div>
                                <div class="icon-container"><span class="ti-image"></span><span class="icon-name"> ti-image</span></div>
                                <div class="icon-container"><span class="ti-heart"></span><span class="icon-name"> ti-heart</span></div>
                                <div class="icon-container"><span class="ti-heart-broken"></span><span class="icon-name"> ti-heart-broken</span></div>
                                <div class="icon-container"><span class="ti-hand-stop"></span><span class="icon-name"> ti-hand-stop</span></div>
                                <div class="icon-container"><span class="ti-hand-open"></span><span class="icon-name"> ti-hand-open</span></div>
                                <div class="icon-container"><span class="ti-hand-drag"></span><span class="icon-name"> ti-hand-drag</span></div>
                                <div class="icon-container"><span class="ti-flag"></span><span class="icon-name"> ti-flag</span></div>
                                <div class="icon-container"><span class="ti-flag-alt"></span><span class="icon-name"> ti-flag-alt</span></div>
                                <div class="icon-container"><span class="ti-flag-alt-2"></span><span class="icon-name"> ti-flag-alt-2</span></div>
                                <div class="icon-container"><span class="ti-eye"></span><span class="icon-name"> ti-eye</span></div>
                                <div class="icon-container"><span class="ti-import"></span><span class="icon-name"> ti-import</span></div>			
                                <div class="icon-container"><span class="ti-export"></span><span class="icon-name"> ti-export</span></div>
                                <div class="icon-container"><span class="ti-cup"></span><span class="icon-name"> ti-cup</span></div>
                                <div class="icon-container"><span class="ti-crown"></span><span class="icon-name"> ti-crown</span></div>
                                <div class="icon-container"><span class="ti-comments"></span><span class="icon-name"> ti-comments</span></div>
                                <div class="icon-container"><span class="ti-comment"></span><span class="icon-name"> ti-comment</span></div>
                                <div class="icon-container"><span class="ti-comment-alt"></span><span class="icon-name"> ti-comment-alt</span></div>
                                <div class="icon-container"><span class="ti-thought"></span><span class="icon-name"> ti-thought</span></div>			
                                <div class="icon-container"><span class="ti-clip"></span><span class="icon-name"> ti-clip</span></div>                    
                                <div class="icon-container"><span class="ti-check"></span><span class="icon-name"> ti-check</span></div>
                                <div class="icon-container"><span class="ti-check-box"></span><span class="icon-name"> ti-check-box</span></div>
                                <div class="icon-container"><span class="ti-camera"></span><span class="icon-name"> ti-camera</span></div>
                                <div class="icon-container"><span class="ti-announcement"></span><span class="icon-name"> ti-announcement</span></div>
                                <div class="icon-container"><span class="ti-brush"></span><span class="icon-name"> ti-brush</span></div>
                                <div class="icon-container"><span class="ti-brush-alt"></span><span class="icon-name"> ti-brush-alt</span></div>
                                <div class="icon-container"><span class="ti-palette"></span><span class="icon-name"> ti-palette</span></div>			
                                <div class="icon-container"><span class="ti-briefcase"></span><span class="icon-name"> ti-briefcase</span></div>
                                <div class="icon-container"><span class="ti-bolt"></span><span class="icon-name"> ti-bolt</span></div>
                                <div class="icon-container"><span class="ti-bolt-alt"></span><span class="icon-name"> ti-bolt-alt</span></div>
                                <div class="icon-container"><span class="ti-blackboard"></span><span class="icon-name"> ti-blackboard</span></div>
                                <div class="icon-container"><span class="ti-bag"></span><span class="icon-name"> ti-bag</span></div>
                                <div class="icon-container"><span class="ti-world"></span><span class="icon-name"> ti-world</span></div>
                                <div class="icon-container"><span class="ti-wheelchair"></span><span class="icon-name"> ti-wheelchair</span></div>
                                <div class="icon-container"><span class="ti-car"></span><span class="icon-name"> ti-car</span></div>
                                <div class="icon-container"><span class="ti-truck"></span><span class="icon-name"> ti-truck</span></div>
                                <div class="icon-container"><span class="ti-timer"></span><span class="icon-name"> ti-timer</span></div>
                                <div class="icon-container"><span class="ti-ticket"></span><span class="icon-name"> ti-ticket</span></div>
                                <div class="icon-container"><span class="ti-thumb-up"></span><span class="icon-name"> ti-thumb-up</span></div>
                                <div class="icon-container"><span class="ti-thumb-down"></span><span class="icon-name"> ti-thumb-down</span></div>                    
                                <div class="icon-container"><span class="ti-stats-up"></span><span class="icon-name"> ti-stats-up</span></div>
                                <div class="icon-container"><span class="ti-stats-down"></span><span class="icon-name"> ti-stats-down</span></div>
                                <div class="icon-container"><span class="ti-shine"></span><span class="icon-name"> ti-shine</span></div>
                                <div class="icon-container"><span class="ti-shift-right"></span><span class="icon-name"> ti-shift-right</span></div>
                                <div class="icon-container"><span class="ti-shift-left"></span><span class="icon-name"> ti-shift-left</span></div>                    
                                <div class="icon-container"><span class="ti-shift-right-alt"></span><span class="icon-name"> ti-shift-right-alt</span></div>
                                <div class="icon-container"><span class="ti-shift-left-alt"></span><span class="icon-name"> ti-shift-left-alt</span></div>
                                <div class="icon-container"><span class="ti-shield"></span><span class="icon-name"> ti-shield</span></div>
                                <div class="icon-container"><span class="ti-notepad"></span><span class="icon-name"> ti-notepad</span></div>
                                <div class="icon-container"><span class="ti-server"></span><span class="icon-name"> ti-server</span></div>                    
                                <div class="icon-container"><span class="ti-pulse"></span><span class="icon-name"> ti-pulse</span></div>
                                <div class="icon-container"><span class="ti-printer"></span><span class="icon-name"> ti-printer</span></div>
                                <div class="icon-container"><span class="ti-power-off"></span><span class="icon-name"> ti-power-off</span></div>
                                <div class="icon-container"><span class="ti-plug"></span><span class="icon-name"> ti-plug</span></div>
                                <div class="icon-container"><span class="ti-pie-chart"></span><span class="icon-name"> ti-pie-chart</span></div>                    
                                <div class="icon-container"><span class="ti-panel"></span><span class="icon-name"> ti-panel</span></div>
                                <div class="icon-container"><span class="ti-package"></span><span class="icon-name"> ti-package</span></div>
                                <div class="icon-container"><span class="ti-music"></span><span class="icon-name"> ti-music</span></div>
                                <div class="icon-container"><span class="ti-music-alt"></span><span class="icon-name"> ti-music-alt</span></div>
                                <div class="icon-container"><span class="ti-mouse"></span><span class="icon-name"> ti-mouse</span></div>
                                <div class="icon-container"><span class="ti-mouse-alt"></span><span class="icon-name"> ti-mouse-alt</span></div>
                                <div class="icon-container"><span class="ti-money"></span><span class="icon-name"> ti-money</span></div>
                                <div class="icon-container"><span class="ti-microphone"></span><span class="icon-name"> ti-microphone</span></div>
                                <div class="icon-container"><span class="ti-menu"></span><span class="icon-name"> ti-menu</span></div>
                                <div class="icon-container"><span class="ti-menu-alt"></span><span class="icon-name"> ti-menu-alt</span></div>
                                <div class="icon-container"><span class="ti-map"></span><span class="icon-name"> ti-map</span></div>
                                <div class="icon-container"><span class="ti-map-alt"></span><span class="icon-name"> ti-map-alt</span></div>                    
                                <div class="icon-container"><span class="ti-location-pin"></span><span class="icon-name"> ti-location-pin</span></div>                    
                                <div class="icon-container"><span class="ti-light-bulb"></span><span class="icon-name"> ti-light-bulb</span></div>
                                <div class="icon-container"><span class="ti-info"></span><span class="icon-name"> ti-info</span></div>
                                <div class="icon-container"><span class="ti-infinite"></span><span class="icon-name"> ti-infinite</span></div>
                                <div class="icon-container"><span class="ti-id-badge"></span><span class="icon-name"> ti-id-badge</span></div>
                                <div class="icon-container"><span class="ti-hummer"></span><span class="icon-name"> ti-hummer</span></div>
                                <div class="icon-container"><span class="ti-home"></span><span class="icon-name"> ti-home</span></div>
                                <div class="icon-container"><span class="ti-help"></span><span class="icon-name"> ti-help</span></div>
                                <div class="icon-container"><span class="ti-headphone"></span><span class="icon-name"> ti-headphone</span></div>
                                <div class="icon-container"><span class="ti-harddrives"></span><span class="icon-name"> ti-harddrives</span></div>
                                <div class="icon-container"><span class="ti-harddrive"></span><span class="icon-name"> ti-harddrive</span></div>
                                <div class="icon-container"><span class="ti-gift"></span><span class="icon-name"> ti-gift</span></div>
                                <div class="icon-container"><span class="ti-game"></span><span class="icon-name"> ti-game</span></div>
                                <div class="icon-container"><span class="ti-filter"></span><span class="icon-name"> ti-filter</span></div>
                                <div class="icon-container"><span class="ti-files"></span><span class="icon-name"> ti-files</span></div>
                                <div class="icon-container"><span class="ti-file"></span><span class="icon-name"> ti-file</span></div>
                                <div class="icon-container"><span class="ti-zip"></span><span class="icon-name"> ti-zip</span></div>
                                <div class="icon-container"><span class="ti-folder"></span><span class="icon-name"> ti-folder</span></div>			
                                <div class="icon-container"><span class="ti-envelope"></span><span class="icon-name"> ti-envelope</span></div>
                                <div class="icon-container"><span class="ti-dashboard"></span><span class="icon-name"> ti-dashboard</span></div>
                                <div class="icon-container"><span class="ti-cloud"></span><span class="icon-name"> ti-cloud</span></div>
                                <div class="icon-container"><span class="ti-cloud-up"></span><span class="icon-name"> ti-cloud-up</span></div>
                                <div class="icon-container"><span class="ti-cloud-down"></span><span class="icon-name"> ti-cloud-down</span></div>
                                <div class="icon-container"><span class="ti-clipboard"></span><span class="icon-name"> ti-clipboard</span></div>
                                <div class="icon-container"><span class="ti-calendar"></span><span class="icon-name"> ti-calendar</span></div>
                                <div class="icon-container"><span class="ti-book"></span><span class="icon-name"> ti-book</span></div>
                                <div class="icon-container"><span class="ti-bell"></span><span class="icon-name"> ti-bell</span></div>
                                <div class="icon-container"><span class="ti-basketball"></span><span class="icon-name"> ti-basketball</span></div>
                                <div class="icon-container"><span class="ti-bar-chart"></span><span class="icon-name"> ti-bar-chart</span></div>
                                <div class="icon-container"><span class="ti-bar-chart-alt"></span><span class="icon-name"> ti-bar-chart-alt</span></div>
                                <div class="icon-container"><span class="ti-archive"></span><span class="icon-name"> ti-archive</span></div>
                                <div class="icon-container"><span class="ti-anchor"></span><span class="icon-name"> ti-anchor</span></div>                   
                                <div class="icon-container"><span class="ti-alert"></span><span class="icon-name"> ti-alert</span></div>
                                <div class="icon-container"><span class="ti-alarm-clock"></span><span class="icon-name"> ti-alarm-clock</span></div>
                                <div class="icon-container"><span class="ti-agenda"></span><span class="icon-name"> ti-agenda</span></div>
                                <div class="icon-container"><span class="ti-write"></span><span class="icon-name"> ti-write</span></div>                    
                                <div class="icon-container"><span class="ti-wallet"></span><span class="icon-name"> ti-wallet</span></div>
                                <div class="icon-container"><span class="ti-video-clapper"></span><span class="icon-name"> ti-video-clapper</span></div>
                                <div class="icon-container"><span class="ti-video-camera"></span><span class="icon-name"> ti-video-camera</span></div>
                                <div class="icon-container"><span class="ti-vector"></span><span class="icon-name"> ti-vector</span></div>                    
                                <div class="icon-container"><span class="ti-support"></span><span class="icon-name"> ti-support</span></div>
                                <div class="icon-container"><span class="ti-stamp"></span><span class="icon-name"> ti-stamp</span></div>
                                <div class="icon-container"><span class="ti-slice"></span><span class="icon-name"> ti-slice</span></div>
                                <div class="icon-container"><span class="ti-shortcode"></span><span class="icon-name"> ti-shortcode</span></div>
                                <div class="icon-container"><span class="ti-receipt"></span><span class="icon-name"> ti-receipt</span></div>
                                <div class="icon-container"><span class="ti-pin2"></span><span class="icon-name"> ti-pin2</span></div>
                                <div class="icon-container"><span class="ti-pin-alt"></span><span class="icon-name"> ti-pin-alt</span></div>
                                <div class="icon-container"><span class="ti-pencil-alt2"></span><span class="icon-name"> ti-pencil-alt2</span></div>
                                <div class="icon-container"><span class="ti-eraser"></span><span class="icon-name"> ti-eraser</span></div>			
                                <div class="icon-container"><span class="ti-more"></span><span class="icon-name"> ti-more</span></div>
                                <div class="icon-container"><span class="ti-more-alt"></span><span class="icon-name"> ti-more-alt</span></div>
                                <div class="icon-container"><span class="ti-microphone-alt"></span><span class="icon-name"> ti-microphone-alt</span></div>
                                <div class="icon-container"><span class="ti-magnet"></span><span class="icon-name"> ti-magnet</span></div>
                                <div class="icon-container"><span class="ti-line-double"></span><span class="icon-name"> ti-line-double</span></div>
                                <div class="icon-container"><span class="ti-line-dotted"></span><span class="icon-name"> ti-line-dotted</span></div>
                                <div class="icon-container"><span class="ti-line-dashed"></span><span class="icon-name"> ti-line-dashed</span></div>                    
                                <div class="icon-container"><span class="ti-ink-pen"></span><span class="icon-name"> ti-ink-pen</span></div>
                                <div class="icon-container"><span class="ti-info-alt"></span><span class="icon-name"> ti-info-alt</span></div>
                                <div class="icon-container"><span class="ti-help-alt"></span><span class="icon-name"> ti-help-alt</span></div>
                                <div class="icon-container"><span class="ti-headphone-alt"></span><span class="icon-name"> ti-headphone-alt</span></div>                    
                                <div class="icon-container"><span class="ti-gallery"></span><span class="icon-name"> ti-gallery</span></div>
                                <div class="icon-container"><span class="ti-face-smile"></span><span class="icon-name"> ti-face-smile</span></div>
                                <div class="icon-container"><span class="ti-face-sad"></span><span class="icon-name"> ti-face-sad</span></div>
                                <div class="icon-container"><span class="ti-credit-card"></span><span class="icon-name"> ti-credit-card</span></div>
                                <div class="icon-container"><span class="ti-comments-smiley"></span><span class="icon-name"> ti-comments-smiley</span></div>
                                <div class="icon-container"><span class="ti-time"></span><span class="icon-name"> ti-time</span></div>
                                <div class="icon-container"><span class="ti-share"></span><span class="icon-name"> ti-share</span></div>
                                <div class="icon-container"><span class="ti-share-alt"></span><span class="icon-name"> ti-share-alt</span></div>
                                <div class="icon-container"><span class="ti-rocket"></span><span class="icon-name"> ti-rocket</span></div>                    
                                <div class="icon-container"><span class="ti-new-window"></span><span class="icon-name"> ti-new-window</span></div>                    
                                <div class="icon-container"><span class="ti-rss"></span><span class="icon-name"> ti-rss</span></div>                    
                                <div class="icon-container"><span class="ti-rss-alt"></span><span class="icon-name"> ti-rss-alt</span></div>                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Control</strong> Icons</h2>
                        </div>
                        <div class="body">
                            <div class="icon-section">
                                <div class="icon-container"><span class="ti-control-stop"></span><span class="icon-name"> ti-control-stop</span></div>
                                <div class="icon-container"><span class="ti-control-shuffle"></span><span class="icon-name"> ti-control-shuffle</span></div>
                                <div class="icon-container"><span class="ti-control-play"></span><span class="icon-name"> ti-control-play</span></div>
                                <div class="icon-container"><span class="ti-control-pause"></span><span class="icon-name"> ti-control-pause</span></div>
                                <div class="icon-container"><span class="ti-control-forward"></span><span class="icon-name"> ti-control-forward</span></div>
                                <div class="icon-container"><span class="ti-control-backward"></span><span class="icon-name"> ti-control-backward</span></div>	
                                <div class="icon-container"><span class="ti-volume"></span><span class="icon-name"> ti-volume</span></div>
                                <div class="icon-container"><span class="ti-control-skip-forward"></span><span class="icon-name"> ti-control-skip-forward</span></div>
                                <div class="icon-container"><span class="ti-control-skip-backward"></span><span class="icon-name"> ti-control-skip-backward</span></div>
                                <div class="icon-container"><span class="ti-control-record"></span><span class="icon-name"> ti-control-record</span></div>
                                <div class="icon-container"><span class="ti-control-eject"></span><span class="icon-name"> ti-control-eject</span></div>
                            </div> <!-- Control Icons -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Text</strong> Editor</h2>
                        </div>
                        <div class="body">
                            <div class="icon-section">                    
                                <div class="icon-container"><span class="ti-paragraph"></span><span class="icon-name"> ti-paragraph</span></div>
                                <div class="icon-container"><span class="ti-uppercase"></span><span class="icon-name"> ti-uppercase</span></div>                    
                                <div class="icon-container"><span class="ti-underline"></span><span class="icon-name"> ti-underline</span></div>
                                <div class="icon-container"><span class="ti-text"></span><span class="icon-name"> ti-text</span></div>
                                <div class="icon-container"><span class="ti-Italic"></span><span class="icon-name"> ti-Italic</span></div>
                                <div class="icon-container"><span class="ti-smallcap"></span><span class="icon-name"> ti-smallcap</span></div>
                                <div class="icon-container"><span class="ti-list"></span><span class="icon-name"> ti-list</span></div>
                                <div class="icon-container"><span class="ti-list-ol"></span><span class="icon-name"> ti-list-ol</span></div>
                                <div class="icon-container"><span class="ti-align-right"></span><span class="icon-name"> ti-align-right</span></div>
                                <div class="icon-container"><span class="ti-align-left"></span><span class="icon-name"> ti-align-left</span></div>
                                <div class="icon-container"><span class="ti-align-justify"></span><span class="icon-name"> ti-align-justify</span></div>
                                <div class="icon-container"><span class="ti-align-center"></span><span class="icon-name"> ti-align-center</span></div>
                                <div class="icon-container"><span class="ti-quote-right"></span><span class="icon-name"> ti-quote-right</span></div>
                                <div class="icon-container"><span class="ti-quote-left"></span><span class="icon-name"> ti-quote-left</span></div>                    
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Layout</strong> Icons</h2>
                        </div>
                        <div class="body">
                            <div class="icon-section">
                                <div class="icon-container"><span class="ti-layout-width-full"></span><span class="icon-name"> ti-layout-width-full</span></div>
                                <div class="icon-container"><span class="ti-layout-width-default"></span><span class="icon-name"> ti-layout-width-default</span></div>
                                <div class="icon-container"><span class="ti-layout-width-default-alt"></span><span class="icon-name"> ti-layout-width-default-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-tab"></span><span class="icon-name"> ti-layout-tab</span></div>
                                <div class="icon-container"><span class="ti-layout-tab-window"></span><span class="icon-name"> ti-layout-tab-window</span></div>
                                <div class="icon-container"><span class="ti-layout-tab-v"></span><span class="icon-name"> ti-layout-tab-v</span></div>
                                <div class="icon-container"><span class="ti-layout-tab-min"></span><span class="icon-name"> ti-layout-tab-min</span></div>
                                <div class="icon-container"><span class="ti-layout-slider"></span><span class="icon-name"> ti-layout-slider</span></div>
                                <div class="icon-container"><span class="ti-layout-slider-alt"></span><span class="icon-name"> ti-layout-slider-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-sidebar-right"></span><span class="icon-name"> ti-layout-sidebar-right</span></div>
                                <div class="icon-container"><span class="ti-layout-sidebar-none"></span><span class="icon-name"> ti-layout-sidebar-none</span></div>
                                <div class="icon-container"><span class="ti-layout-sidebar-left"></span><span class="icon-name"> ti-layout-sidebar-left</span></div>
                                <div class="icon-container"><span class="ti-layout-placeholder"></span><span class="icon-name"> ti-layout-placeholder</span></div>
                                <div class="icon-container"><span class="ti-layout-menu"></span><span class="icon-name"> ti-layout-menu</span></div>
                                <div class="icon-container"><span class="ti-layout-menu-v"></span><span class="icon-name"> ti-layout-menu-v</span></div>
                                <div class="icon-container"><span class="ti-layout-menu-separated"></span><span class="icon-name"> ti-layout-menu-separated</span></div>
                                <div class="icon-container"><span class="ti-layout-menu-full"></span><span class="icon-name"> ti-layout-menu-full</span></div>
                                <div class="icon-container"><span class="ti-layout-media-right"></span><span class="icon-name"> ti-layout-media-right</span></div>
                                <div class="icon-container"><span class="ti-layout-media-right-alt"></span><span class="icon-name"> ti-layout-media-right-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-media-overlay"></span><span class="icon-name"> ti-layout-media-overlay</span></div>
                                <div class="icon-container"><span class="ti-layout-media-overlay-alt"></span><span class="icon-name"> ti-layout-media-overlay-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-media-overlay-alt-2"></span><span class="icon-name"> ti-layout-media-overlay-alt-2</span></div>
                                <div class="icon-container"><span class="ti-layout-media-left"></span><span class="icon-name"> ti-layout-media-left</span></div>
                                <div class="icon-container"><span class="ti-layout-media-left-alt"></span><span class="icon-name"> ti-layout-media-left-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-media-center"></span><span class="icon-name"> ti-layout-media-center</span></div>
                                <div class="icon-container"><span class="ti-layout-media-center-alt"></span><span class="icon-name"> ti-layout-media-center-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-list-thumb"></span><span class="icon-name"> ti-layout-list-thumb</span></div>
                                <div class="icon-container"><span class="ti-layout-list-thumb-alt"></span><span class="icon-name"> ti-layout-list-thumb-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-list-post"></span><span class="icon-name"> ti-layout-list-post</span></div>
                                <div class="icon-container"><span class="ti-layout-list-large-image"></span><span class="icon-name"> ti-layout-list-large-image</span></div>
                                <div class="icon-container"><span class="ti-layout-line-solid"></span><span class="icon-name"> ti-layout-line-solid</span></div>
                                <div class="icon-container"><span class="ti-layout-grid4"></span><span class="icon-name"> ti-layout-grid4</span></div>
                                <div class="icon-container"><span class="ti-layout-grid3"></span><span class="icon-name"> ti-layout-grid3</span></div>
                                <div class="icon-container"><span class="ti-layout-grid2"></span><span class="icon-name"> ti-layout-grid2</span></div>
                                <div class="icon-container"><span class="ti-layout-grid2-thumb"></span><span class="icon-name"> ti-layout-grid2-thumb</span></div>
                                <div class="icon-container"><span class="ti-layout-cta-right"></span><span class="icon-name"> ti-layout-cta-right</span></div>
                                <div class="icon-container"><span class="ti-layout-cta-left"></span><span class="icon-name"> ti-layout-cta-left</span></div>
                                <div class="icon-container"><span class="ti-layout-cta-center"></span><span class="icon-name"> ti-layout-cta-center</span></div>
                                <div class="icon-container"><span class="ti-layout-cta-btn-right"></span><span class="icon-name"> ti-layout-cta-btn-right</span></div>
                                <div class="icon-container"><span class="ti-layout-cta-btn-left"></span><span class="icon-name"> ti-layout-cta-btn-left</span></div>
                                <div class="icon-container"><span class="ti-layout-column4"></span><span class="icon-name"> ti-layout-column4</span></div>
                                <div class="icon-container"><span class="ti-layout-column3"></span><span class="icon-name"> ti-layout-column3</span></div>
                                <div class="icon-container"><span class="ti-layout-column2"></span><span class="icon-name"> ti-layout-column2</span></div>
                                <div class="icon-container"><span class="ti-layout-accordion-separated"></span><span class="icon-name"> ti-layout-accordion-separated</span></div>
                                <div class="icon-container"><span class="ti-layout-accordion-merged"></span><span class="icon-name"> ti-layout-accordion-merged</span></div>
                                <div class="icon-container"><span class="ti-layout-accordion-list"></span><span class="icon-name"> ti-layout-accordion-list</span></div>
                                <div class="icon-container"><span class="ti-widgetized"></span><span class="icon-name"> ti-widgetized</span></div>
                                <div class="icon-container"><span class="ti-widget"></span><span class="icon-name"> ti-widget</span></div>
                                <div class="icon-container"><span class="ti-widget-alt"></span><span class="icon-name"> ti-widget-alt</span></div>
                                <div class="icon-container"><span class="ti-view-list"></span><span class="icon-name"> ti-view-list</span></div>
                                <div class="icon-container"><span class="ti-view-list-alt"></span><span class="icon-name"> ti-view-list-alt</span></div>
                                <div class="icon-container"><span class="ti-view-grid"></span><span class="icon-name"> ti-view-grid</span></div>
                                <div class="icon-container"><span class="ti-upload"></span><span class="icon-name"> ti-upload</span></div>
                                <div class="icon-container"><span class="ti-download"></span><span class="icon-name"> ti-download</span></div>	
                                <div class="icon-container"><span class="ti-loop"></span><span class="icon-name"> ti-loop</span></div>
                                <div class="icon-container"><span class="ti-layout-sidebar-2"></span><span class="icon-name"> ti-layout-sidebar-2</span></div>
                                <div class="icon-container"><span class="ti-layout-grid4-alt"></span><span class="icon-name"> ti-layout-grid4-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-grid3-alt"></span><span class="icon-name"> ti-layout-grid3-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-grid2-alt"></span><span class="icon-name"> ti-layout-grid2-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-column4-alt"></span><span class="icon-name"> ti-layout-column4-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-column3-alt"></span><span class="icon-name"> ti-layout-column3-alt</span></div>
                                <div class="icon-container"><span class="ti-layout-column2-alt"></span><span class="icon-name"> ti-layout-column2-alt</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Brand</strong> Icons</h2>
                        </div>
                        <div class="body">
                            <div class="icon-section">                    
                                <div class="icon-container"><span class="ti-flickr"></span><span class="icon-name"> ti-flickr</span></div>
                                <div class="icon-container"><span class="ti-flickr-alt"></span><span class="icon-name"> ti-flickr-alt</span></div>			
                                <div class="icon-container"><span class="ti-instagram"></span><span class="icon-name"> ti-instagram</span></div>
                                <div class="icon-container"><span class="ti-google"></span><span class="icon-name"> ti-google</span></div>
                                <div class="icon-container"><span class="ti-github"></span><span class="icon-name"> ti-github</span></div>                    
                                <div class="icon-container"><span class="ti-facebook"></span><span class="icon-name"> ti-facebook</span></div>
                                <div class="icon-container"><span class="ti-dropbox"></span><span class="icon-name"> ti-dropbox</span></div>
                                <div class="icon-container"><span class="ti-dropbox-alt"></span><span class="icon-name"> ti-dropbox-alt</span></div>
                                <div class="icon-container"><span class="ti-dribbble"></span><span class="icon-name"> ti-dribbble</span></div>
                                <div class="icon-container"><span class="ti-apple"></span><span class="icon-name"> ti-apple</span></div>
                                <div class="icon-container"><span class="ti-android"></span><span class="icon-name"> ti-android</span></div>
                                <div class="icon-container"><span class="ti-yahoo"></span><span class="icon-name"> ti-yahoo</span></div>
                                <div class="icon-container"><span class="ti-trello"></span><span class="icon-name"> ti-trello</span></div>
                                <div class="icon-container"><span class="ti-stack-overflow"></span><span class="icon-name"> ti-stack-overflow</span></div>
                                <div class="icon-container"><span class="ti-soundcloud"></span><span class="icon-name"> ti-soundcloud</span></div>
                                <div class="icon-container"><span class="ti-sharethis"></span><span class="icon-name"> ti-sharethis</span></div>
                                <div class="icon-container"><span class="ti-sharethis-alt"></span><span class="icon-name"> ti-sharethis-alt</span></div>
                                <div class="icon-container"><span class="ti-reddit"></span><span class="icon-name"> ti-reddit</span></div>                    
                                <div class="icon-container"><span class="ti-microsoft"></span><span class="icon-name"> ti-microsoft</span></div>
                                <div class="icon-container"><span class="ti-microsoft-alt"></span><span class="icon-name"> ti-microsoft-alt</span></div>
                                <div class="icon-container"><span class="ti-linux"></span><span class="icon-name"> ti-linux</span></div>
                                <div class="icon-container"><span class="ti-jsfiddle"></span><span class="icon-name"> ti-jsfiddle</span></div>
                                <div class="icon-container"><span class="ti-joomla"></span><span class="icon-name"> ti-joomla</span></div>
                                <div class="icon-container"><span class="ti-html5"></span><span class="icon-name"> ti-html5</span></div>
                                <div class="icon-container"><span class="ti-css3"></span><span class="icon-name"> ti-css3</span></div>	
                                <div class="icon-container"><span class="ti-drupal"></span><span class="icon-name"> ti-drupal</span></div>
                                <div class="icon-container"><span class="ti-wordpress"></span><span class="icon-name"> ti-wordpress</span></div>		
                                <div class="icon-container"><span class="ti-tumblr"></span><span class="icon-name"> ti-tumblr</span></div>
                                <div class="icon-container"><span class="ti-tumblr-alt"></span><span class="icon-name"> ti-tumblr-alt</span></div>
                                <div class="icon-container"><span class="ti-skype"></span><span class="icon-name"> ti-skype</span></div>
                                <div class="icon-container"><span class="ti-youtube"></span><span class="icon-name"> ti-youtube</span></div>
                                <div class="icon-container"><span class="ti-vimeo"></span><span class="icon-name"> ti-vimeo</span></div>
                                <div class="icon-container"><span class="ti-vimeo-alt"></span><span class="icon-name"> ti-vimeo-alt</span></div>			
                                <div class="icon-container"><span class="ti-twitter"></span><span class="icon-name"> ti-twitter</span></div>
                                <div class="icon-container"><span class="ti-twitter-alt"></span><span class="icon-name"> ti-twitter-alt</span></div>
                                <div class="icon-container"><span class="ti-linkedin"></span><span class="icon-name"> ti-linkedin</span></div>
                                <div class="icon-container"><span class="ti-pinterest"></span><span class="icon-name"> ti-pinterest</span></div>                    
                                <div class="icon-container"><span class="ti-pinterest-alt"></span><span class="icon-name"> ti-pinterest-alt</span></div>
                                <div class="icon-container"><span class="ti-themify-logo"></span><span class="icon-name"> ti-themify-logo</span></div>
                                <div class="icon-container"><span class="ti-themify-favicon"></span><span class="icon-name"> ti-themify-favicon</span></div>
                                <div class="icon-container"><span class="ti-themify-favicon-alt"></span><span class="icon-name"> ti-themify-favicon-alt</span></div>                    
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

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>


</html>