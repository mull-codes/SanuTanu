<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta name="robots" content="index, follow" />
    <title>SanuTanu</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/resources/node_modules/sweetalert2/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/resources/custom.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets/images/fav.png"/>
  </head>
  <body>

    <!-- Header
    ================================================= -->
    <header id="header-inverse">
      <nav class="navbar navbar-default navbar-fixed-top menu" style="margin-top: 0%;">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-register.html"><img src="<?=base_url()?>assets/images/sanutanu-white.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" onMouseOver="this.style.color='rgb(164, 27, 227)'"
   onMouseOut="this.style.color='#ffffff'" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                <ul class="dropdown-menu newsfeed-home">
                  <li><a href="index.html">Landing Page 1</a></li>
                  <li><a href="index-register.html">Landing Page 2</a></li>
                </ul>
              </li>
              <li class="dropdown">
							<!-- <span><img src="<?=base_url()?>assets/images/down-arrow.png" alt="" /></span>  -->
							<a href="#" class="dropdown-toggle" onMouseOut="this.style.color='#ffffff'"onMouseOver="this.style.color='rgb(164, 27, 227)'" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed </a>
                <ul class="dropdown-menu newsfeed-home">
                  <li><a href="newsfeed.html">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.html">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" onMouseOut="this.style.color='#ffffff'" onMouseOver="this.style.color='rgb(164, 27, 227)'" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline</a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.html">Timeline Album</a></li>
                  <li><a href="timeline-friends.html">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.html">Edit: Basic Info</a></li>
                  <li><a href="edit-profile-work-edu.html">Edit: Work</a></li>
                  <li><a href="edit-profile-interests.html">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings.html">Account Settings</a></li>
                  <li><a href="edit-profile-password.html">Change Password</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages"onMouseOut="this.style.color='#ffffff'" onMouseOver="this.style.color='rgb(164, 27, 227)'" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages</a>
                <ul class="dropdown-menu page-list">
                  <li><a href="index.html">Landing Page 1</a></li>
                  <li><a href="index-register.html">Landing Page 2</a></li>
                  <li><a href="newsfeed.html">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.html">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.html">Timeline Album</a></li>
                  <li><a href="timeline-friends.html">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.html">Edit Profile</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="faq.html">FAQ Page</a></li>
                  <li><a href="404.html">404 Not Found</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="contact.html"onMouseOut="this.style.color='#ffffff'" onMouseOver="this.style.color='rgb(164, 27, 227)'" >Contact</a></li>
              <li class="dropdown"><span class=" glyphicon glyphicon-bell dropdown-toggle" data-toggle="dropdown"role="button" aria-haspopup="true" aria-expanded="false"style="font-size: 20px;margin-top: 16px;color: #fff;"></span>
                 <ul class="dropdown-menu" style="width: 392px;">
                   <li>
                    <div class="row">
                     <div class="col-lg-4">
                      <img id="ul" src="<?=base_url()?>assets/images/images9.jpg">
                     </div>
                     <div class="col-lg-4" id="li">
                      <p>hello from pakistan</p>
                    </div>
                   </div></li>
                 <li>
                  <div class="row">
                     <div class="col-lg-4">
                      <img id="ul" src="<?=base_url()?>assets/images/images9.jpg">
                     </div>
                     <div class="col-lg-4" id="li">
                      <p>hello ......</p>
                   </div>
                 </div>
                 </li>
                 </ul>
              </li>
              <li class="dropdown" style="margin-left: 15px;"><span class=" fas dropdown-toggle" data-toggle="dropdown"role="button" aria-haspopup="true" aria-expanded="false"style="font-size: 20px;margin-top: 16px;color: #fff;">&#xf075;</span>
                 <ul class="dropdown-menu" style="width: 392px;">
                   <li>
                    <div class="row">
                     <div class="col-lg-4">
                      <img id="ul" src="<?=base_url()?>assets/images/images9.jpg">
                     </div>
                     <div class="col-lg-4" id="li">
                      <p>hello from pakistan</p>
                    </div>
                   </div></li>
                 <li>
                  <div class="row">
                     <div class="col-lg-4">
                      <img id="ul" src="<?=base_url()?>assets/images/images9.jpg">
                     </div>
                     <div class="col-lg-4" id="li">
                      <p>hello ......</p>
                   </div>
                 </div>
                 </li>
                 </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
     <!-- Scripts
    ================================================= -->
<input type="hidden"id="base_url" value="<?php echo base_url(); ?>">
