﻿<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Aero Bootstrap4 Admin :: Advanced Form Elements</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link  rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Morris Chart Css-->
<link rel="stylesheet" href="assets/plugins/morrisjs/morris.css" />
<!-- Colorpicker Css -->
<link rel="stylesheet" href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
<!-- Multi Select Css -->
<link rel="stylesheet" href="assets/plugins/multi-select/css/multi-select.css">
<!-- Bootstrap Spinner Css -->
<link rel="stylesheet" href="assets/plugins/jquery-spinner/css/bootstrap-spinner.css">
<!-- Bootstrap Tagsinput Css -->
<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
<!-- Bootstrap Select Css -->
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css" />
<!-- noUISlider Css -->
<link rel="stylesheet" href="assets/plugins/nouislider/nouislider.min.css" />
<!-- Select2 -->
<link rel="stylesheet" href="assets/plugins/select2/select2.css" />

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
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-flower"></i><span>Font Icons</span></a>
                <ul class="ml-menu">
                    <li><a href="icons.html">Material Icons</a></li>
                    <li><a href="icons-themify.html">Themify Icons</a></li>
                    <li><a href="icons-weather.html">Weather Icons</a></li>
                </ul>
            </li>
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span></a>
                <ul class="ml-menu">
                    <li><a href="basic-form-elements.html">Basic Form</a></li>
                    <li class="active"><a href="advanced-form-elements.html">Advanced Form</a></li>
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
                    <h2>Advanced Form Elements</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Advanced Form</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Color Pickers -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Color</strong> Pickers</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Taken from <a href="https://github.com/mjolnic/bootstrap-colorpicker/" target="_blank">github.com/mjolnic/bootstrap-colorpicker</a></p>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>HEX CODE</label>
                                        <div class="input-group colorpicker">
                                            <input type="text" class="form-control" value="#00AABB">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="input-group-addon"> <i></i> </span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>RGB(A) CODE</label>
                                        <div class="input-group colorpicker">
                                            <input type="text" class="form-control" value="rgba(0,0,0,0.7)">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="input-group-addon"> <i></i> </span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Star Rating Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Star</strong> Rating Input</h2>
                        </div>
                        <div class="body">
                            <form class="rating">
                                <label>
                                    <input type="radio" name="stars" value="1" />
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="2" />
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="3" />
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>   
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="4" />
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="5" />
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                    <span class="icon"><i class="zmdi zmdi-star"></i></span>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advanced Select2 -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Advanced</strong> Select2</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Taken from <a href="http://select2.github.io/select2" target="_blank">select2.github.io/select2</a></p>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6">
                                    <p> <b>Basic</b> </p>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <p> <b>With OptGroups</b> </p>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        <optgroup label="Picnic">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                        <option>Tent</option>
                                        <option>Flashlight</option>
                                        <option>Toilet Paper</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <p> <b>Multiple Select</b> </p>
                                    <select class="form-control show-tick ms select2" multiple data-placeholder="Select">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <p> <b>With Clear Button</b> </p>
                                    <select class="form-control show-tick ms search-select" data-placeholder="Select">
                                        <option></option>
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row clearfix m-t-30">
                                <div class="col-lg-3 col-md-6">
                                    <p> <b>Max Selection Limit: 2</b> </p>
                                    <select id="max-select" class="form-control show-tick ms" multiple>
                                        <option></option>
                                        <optgroup label="Condiments" data-max-options="2">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Breads" data-max-options="2">
                                        <option>Plain</option>
                                        <option>Steamed</option>
                                        <option>Toasted</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <p> <b>Loading Data</b> </p>
                                    <input type="hidden" id="loading-select" class="form-control"/>
                                    
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <p> <b>Loading Array Data</b> </p>
                                    <input type="hidden" id="array-select" class="form-control">
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <p>Disabled Option</p>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        <option>Mustard</option>
                                        <option disabled>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Masked Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Masked</strong> Input</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Taken from <a href="https://github.com/RobinHerbots/jquery.inputmask" target="_blank">github.com/RobinHerbots/jquery.inputmask</a></p>
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6">
                                    <label>Date</label>
                                    <div class="input-group masked-input">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label>Time (24 hour)</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                        </div>
                                        <input type="text" class="form-control time24" placeholder="Ex: 23:59">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label>Time (12 hour)</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                        </div>
                                        <input type="text" class="form-control time12" placeholder="Ex: 11:59 pm">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label>Date Time</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-calendar-note"></i></span>
                                        </div>
                                        <input type="text" class="form-control datetime" placeholder="Ex: 30/07/2016 23:59">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label>Mobile Phone Number</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-smartphone"></i></span>
                                        </div>
                                        <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label>Phone Number</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label>Money (Dollar)</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-money"></i></span>
                                        </div>
                                        <input type="text" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                    </div>
                                </div>                               
                                <div class="col-lg-4 col-md-6">
                                    <label>Date</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-laptop"></i></span>
                                        </div>
                                        <input type="text" class="form-control ip" placeholder="Ex: 255.255.255.255">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label>Credit Card</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control credit-card" placeholder="Ex: 0000 0000 0000 0000">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label>Email Address</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                                        </div>
                                        <input type="text" class="form-control email" placeholder="Ex: example@example.com">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label>Serial Key</label>
                                    <div class="input-group masked-input mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-key"></i></span>
                                        </div>
                                        <input type="text" class="form-control key" placeholder="Ex: XXX0-XXXX-XX00-0XXX">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Multi Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> <strong>Multi</strong> Select</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Taken from <a href="https://github.com/lou/multi-select/" target="_blank">github.com/lou/multi-select</a></p>
                            <select id="optgroup" class="ms" multiple="multiple">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Select -->
            
            <div class="row clearfix"> 
                <!-- Spinners -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Spinners</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Taken from <a href="https://github.com/vsn4ik/jquery.spinner" target="_blank">github.com/vsn4ik/jquery.spinner</a></p>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="input-group spinner" data-trigger="spinner">
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-caret-up"></i></a>
                                                    <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-caret-down"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="input-group spinner" data-trigger="spinner">
                                            <input type="text" class="form-control text-center" value="1" data-rule="currency">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <a href="javascript:void(0);" class="spin-up" data-spin="up"><i class="zmdi zmdi-caret-up"></i></a>
                                                    <a href="javascript:void(0);" class="spin-down" data-spin="down"><i class="zmdi zmdi-caret-down"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tags Input -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Tags</strong> Input</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Taken from <a href="https://github.com/bootstrap-tagsinput/bootstrap-tagsinput" target="_blank">github.com/bootstrap-tagsinput/bootstrap-tagsinput</a></p>
                            <div class="form-group mb-0">
                                <div class="form-line">
                                    <input type="text" class="form-control" data-role="tagsinput" value="Amsterdam,Sydney,Cairo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Tags Input --> 
            </div>

            <!-- Advanced Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Advanced</strong> Select</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Taken from <a href="https://silviomoreto.github.io/bootstrap-select/" target="_blank">silviomoreto.github.io/bootstrap-select</a></p>
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6">
                                    <p>Basic</p>
                                    <div class="mb-3">
                                        <select class="form-control show-tick">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <p>With OptGroups</p>
                                    <div class="mb-3">
                                        <select class="form-control show-tick">
                                            <optgroup label="Picnic">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Camping">
                                                <option>Tent</option>
                                                <option>Flashlight</option>
                                                <option>Toilet Paper</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <p>Multiple Select</p>
                                    <div class="mb-3">
                                        <select class="form-control show-tick" multiple>
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <p>With Search Bar</p>
                                    <div class="mb-3">
                                        <select class="form-control show-tick" data-live-search="true">
                                            <option>Hot Dog, Fries and a Soda</option>
                                            <option>Burger, Shake and a Smile</option>
                                            <option>Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <p>Max Selection Limit: 2</p>
                                    <div class="mb-3">
                                        <select class="form-control show-tick" multiple>
                                            <optgroup label="Condiments" data-max-options="2">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Breads" data-max-options="2">
                                                <option>Plain</option>
                                                <option>Steamed</option>
                                                <option>Toasted</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <p>Display Count</p>
                                    <div class="mb-3">
                                        <select class="form-control show-tick" multiple data-selected-text-format="count">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                            <option>Onions</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <p>With SubText</p>
                                    <div class="mb-3">
                                        <select class="form-control show-tick" data-show-subtext="true">
                                            <option data-subtext="French's">Mustard</option>
                                            <option data-subtext="Heinz">Ketchup</option>
                                            <option data-subtext="Sweet">Relish</option>
                                            <option data-subtext="Miracle Whip">Mayonnaise</option>
                                            <option data-divider="true"></option>
                                            <option data-subtext="Honey">Barbecue Sauce</option>
                                            <option data-subtext="Ranch">Salad Dressing</option>
                                            <option data-subtext="Sweet &amp; Spicy">Tabasco</option>
                                            <option data-subtext="Chunky">Salsa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <p>Disabled Option</p>
                                    <div class="mb-3">
                                        <select class="form-control show-tick">
                                            <option>Mustard</option>
                                            <option disabled>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Input Slider -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> <strong>Input</strong> Slider</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Taken from <a href="http://refreshless.com/nouislider" target="_blank">refreshless.com/nouislider</a> & <a href="http://materializecss.com/" target="_blank">materializecss.com</a></p>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <p><b>Basic Example</b></p>
                                    <div id="nouislider_basic_example"></div>
                                    <div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value"></span></div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p><b>Range Example</b></p>
                                    <div id="nouislider_range_example"></div>
                                    <div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input Slider --> 
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 
<script src="assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> <!-- Jquery Spinner Plugin Js --> 
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="assets/plugins/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js -->

<script src="assets/plugins/select2/select2.min.js"></script> <!-- Select2 Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/advanced-form-elements.js"></script> 
</body>


</html>