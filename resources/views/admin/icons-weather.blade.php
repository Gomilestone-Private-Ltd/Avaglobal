﻿<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Aero Bootstrap4 Admin :: Weather Icons</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">

<link rel="stylesheet" href="assets/css/weather-icons.min.css">
<!-- Just for demo not include in project -->
<style>
ul.Weather-demo, .Weather-demo2{ margin-bottom: 0;}
ul.Weather-demo li{margin-bottom: 20px;}
ul.Weather-demo li i{font-size: 20px; width: 40px; color: #0c7ce6;}
.icon-wrap .icon, .icon-wrap .wi{
    font-size: 18px;
    display: inline-block;
    font-family: 'weathericons';
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-right: 15px;
    margin-bottom: 15px;
    min-width: 54px;
    text-align: center;
}
.Weather-demo2 i{font-size: 20px; width: 40px; color: #0c7ce6;}
.Weather-demo2 span{display: block; padding: 10px 0;}

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
                    <li><a href="icons-themify.html">Themify Icons</a></li>
                    <li class="active"><a href="icons-weather.html">Weather Icons</a></li>
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
                    <h2>Weather Icons</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">Icons</li>
                        <li class="breadcrumb-item active">Weather Icons</li>
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
                    <div class="alert alert-warning" role="alert">
                        <div class="alert-icon"><i class="zmdi zmdi-notifications"></i></div>
                        <strong>Weather Icon</strong> <a href="https://github.com/erikflowers/weather-icons">Weather</a> Click to more icon here
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                        </button>
                    </div>
                    <div class="card">
                        <div class="body">
                            <ul class="row list-unstyled Weather-demo">
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-day-cloudy-high"></i>day-cloudy-high</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-day-light-wind"></i>day-light-wind</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-day-sleet"></i>day-sleet</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-day-haze"></i>day-haze</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-night-cloudy-high"></i>night-cloud-high</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-night-alt-partly-cloudy"></i>night-alt-partly-cloudy</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-sleet"></i>sleet</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-moonrise"></i>moonrise</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-moonset"></i>moonset</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-night-sleet"></i>night-sleet</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-night-alt-sleet"></i>night-alt-sleet</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-raindrop"></i>raindrop</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-barometer"></i>barometer</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-humidity"></i>humidity</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-na"></i>na (no report)</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-flood"></i>flood</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-sandstorm"></i>sandstorm</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-tsunami"></i>tsunami</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-earthquake"></i>earthquake</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-fire"></i>fire</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-volcano"></i>volcano</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-train"></i>train</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-small-craft-advisory"></i>small-craft-advisory</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-gale-warning"></i>gale-warning</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-storm-warning"></i>storm-warning</li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><i class="wi wi-hurricane-warning"></i>hurricane-warning</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Daytime</strong></h2>
                        </div>
                        <div class="body">
                            <ul class="row list-unstyled Weather-demo2">
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sunny"></i>wi-day-sunny</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-cloudy"></i>wi-day-cloudy</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-cloudy-gusts"></i>wi-day-cloudy-gusts</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-cloudy-windy"></i>wi-day-cloudy-windy</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-fog"></i>wi-day-fog</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-hail"></i>wi-day-hail</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-haze"></i>wi-day-haze</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-lightning"></i>wi-day-lightning</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-rain"></i>wi-day-rain</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-rain-mix"></i>wi-day-rain-mix</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-rain-wind"></i>wi-day-rain-wind</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-showers"></i>wi-day-showers</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sleet"></i>wi-day-sleet</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sleet-storm"></i>wi-day-sleet-storm</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-snow"></i>wi-day-snow</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-snow-thunderstorm"></i>wi-day-snow-thunderstorm</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-snow-wind"></i>wi-day-snow-wind</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sprinkle"></i>wi-day-sprinkle</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-storm-showers"></i>wi-day-storm-showers</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sunny-overcast"></i>wi-day-sunny-overcast</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-thunderstorm"></i>wi-day-thunderstorm</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-windy"></i>wi-day-windy</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-solar-eclipse"></i>wi-solar-eclipse</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-hot"></i>wi-hot</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-cloudy-high"></i>wi-day-cloudy-high</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-light-wind"></i>wi-day-light-wind</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-day-sunny"></i>wi-day-sunny</span></li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Neutral</strong></h2>
                        </div>
                        <div class="body">
                            <ul class="row list-unstyled Weather-demo2">
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloud"></i>wi-cloud</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloudy"></i>wi-cloudy</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloudy-gusts"></i>wi-cloudy-gusts</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloudy-windy"></i>wi-cloudy-windy</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-fog"></i>wi-fog</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-hail"></i>wi-hail</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-rain"></i>wi-rain</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-rain-mix"></i>wi-rain-mix</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-rain-wind"></i>wi-rain-wind</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-showers"></i>wi-showers</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-sleet"></i>wi-sleet</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-snow"></i>wi-snow</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-sprinkle"></i>wi-sprinkle</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-storm-showers"></i>wi-storm-showers</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-thunderstorm"></i>wi-thunderstorm</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-snow-wind"></i>wi-snow-wind</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-snow"></i>wi-snow</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-smog"></i>wi-smog</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-smoke"></i>wi-smoke</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-lightning"></i>wi-lightning</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-raindrops"></i>wi-raindrops</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-raindrop"></i>wi-raindrop</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-dust"></i>wi-dust</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-snowflake-cold"></i>wi-snowflake-cold</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-windy"></i>wi-windy</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-strong-wind"></i>wi-strong-wind</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-sandstorm"></i>wi-sandstorm</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-earthquake"></i>wi-earthquake</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-fire"></i>wi-fire</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-flood"></i>wi-flood</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-meteor"></i>wi-meteor</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-tsunami"></i>wi-tsunami</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-volcano"></i>wi-volcano</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-hurricane"></i>wi-hurricane</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-tornado"></i>wi-tornado</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-small-craft-advisory"></i>wi-small-craft-advisory</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-gale-warning"></i>wi-gale-warning</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-storm-warning"></i>wi-storm-warning</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-hurricane-warning"></i>wi-hurricane-warning</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-direction"></i>wi-wind-direction</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Beaufort</strong> Wind Scale</h2>
                        </div>
                        <div class="body">
                            <ul class="row list-unstyled Weather-demo2">
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-0"></i>wi-wind-beaufort-0</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-1"></i>wi-wind-beaufort-1</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-2"></i>wi-wind-beaufort-2</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-3"></i>wi-wind-beaufort-3</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-4"></i>wi-wind-beaufort-4</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-5"></i>wi-wind-beaufort-5</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-6"></i>wi-wind-beaufort-6</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-7"></i>wi-wind-beaufort-7</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-8"></i>wi-wind-beaufort-8</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-9"></i>wi-wind-beaufort-9</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-10"></i>wi-wind-beaufort-10</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-11"></i>wi-wind-beaufort-11</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-wind-beaufort-12"></i>wi-wind-beaufort-12</span></li>
                            </ul>                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Miscellaneous</strong></h2>
                        </div>
                        <div class="body">
                            <ul class="row list-unstyled Weather-demo2">
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-alien"></i>wi-alien</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-celsius"></i>wi-celsius</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-fahrenheit"></i>wi-fahrenheit</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-degrees"></i>wi-degrees</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-thermometer"></i>wi-thermometer</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-thermometer-exterior"></i>wi-thermometer-exterior</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-thermometer-internal"></i>wi-thermometer-internal</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloud-down"></i>wi-cloud-down</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloud-up"></i>wi-cloud-up</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-cloud-refresh"></i>wi-cloud-refresh</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-horizon"></i>wi-horizon</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-horizon-alt"></i>wi-horizon-alt</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-sunrise"></i>wi-sunrise</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-sunset"></i>wi-sunset</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-moonrise"></i>wi-moonrise</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-moonset"></i>wi-moonset</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-refresh"></i>wi-refresh</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-refresh-alt"></i>wi-refresh-alt</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-umbrella"></i>wi-umbrella</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-barometer"></i>wi-barometer</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-humidity"></i>wi-humidity</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-na"></i>wi-na</span></li>
                                <li class="col-xl-3 col-lg-4 col-md-6"><span><i class="wi wi-train"></i>wi-train</span></li>
                            </ul>                            
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