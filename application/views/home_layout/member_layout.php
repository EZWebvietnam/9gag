<!DOCTYPE html>
<html lang="en">
   <head>
      <title>beobeboi91 - 9GAG</title>
      <link rel="image_src" href="http://d1y9yo7q4hy8a7.cloudfront.net/img/9gag-fb-pic-latest.png" />
      <link rel="publisher" href="https://plus.google.com/u/0/110969448173982102496" />
      <link rel="canonical" href="http://9gag.com/u/beobeboi91" />
      <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/inmkmihphgjhmeabggdcokmkjhbnmdml"/>
      <link rel="shortcut icon" href="//d1y9yo7q4hy8a7.cloudfront.net/static/main/core/20140127_1390790332/img/favicon_v2.png" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="keywords" content="9gag,fun,funny,lol,meme,GIF,wtf,omg,fail,video,cosplay,geeky,forever alone" />
      <meta name="description" content="9GAG has the best funny pics, GIFs, videos, memes, cute, wtf, geeky, cosplay photos on the web. We are your best source of happiness and awesomeness." />
      <meta name="robots" content="noodp" />
      <meta name="twitter:card" content="photo" />
      <meta name="twitter:site" content="@9gag" />
      <meta name="twitter:image" content="http://d1y9yo7q4hy8a7.cloudfront.net/img/9gag-fb-pic-latest.png" />
      <meta property="og:title" content="Just For Fun" />
      <meta property="og:site_name" content="9GAG" />
      <meta property="og:url" content="http://9gag.com/u/beobeboi91" />
      <meta property="og:description" content="9GAG is the easiest way to have fun!" />
      <meta property="og:type" content="blog" />
      <meta property="og:image" content="http://d1y9yo7q4hy8a7.cloudfront.net/img/9gag-fb-pic-latest.png" />
      <meta property="fb:app_id" content="111569915535689" />
      <meta name="viewport" content="width=980, initial-scale=1" />
      <meta name="verify-v1" content="vvFhqhXLAn+191Kl3iZjjHHY6wzkyGG0CJqGMoFIZEg=" />
      <meta http-equiv="X-UA-Compatible" content="IE=9" />
      <link href="<?php echo base_url();?>template/ezwebvietnam/home/9gag/css/style.css" media="screen,projection" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url();?>template/ezwebvietnam/home/9gag/css/haivl_style.css" media="screen,projection" rel="stylesheet" type="text/css" />
       <?php 
      if($_SERVER['SERVER_NAME'] != 'localhost')
      {
      ?>
      <script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
        <?php } ?>
      <!--[if lt IE 9]>
      <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
      <![endif]-->
      
   </head>
   <body class="background-white">
      <div class="badge-sticky-subnav-static">
         <?php include('header.php');?>
      </div>
      <section class="profile-header">
         <div class="profile no-banner">
            <div class="banner-container" style="">
            </div>
            <div class="avatar-container">
               <a href="#">
               <img src="<?php echo $this->session->userdata('img')?>" alt="Profile Pic">
               </a>
            </div>
            <div class="info">
               <header>
                  <h2><?php echo $this->session->userdata('full_name');?></h2>
               </header>
               <p>My Funny Collection</p>
            </div>
         </div>
      </section>
      <div class="section-nav">
         <div class="width-limit">
            <ul>
               <li><a  class="" 
                  onclick="GAG.GA.track('User-Activity', 'OverviewClicked', 1);"
                  href="/u/beobeboi91">
                  OVERVIEW                </a>
               </li>
               <li><a  class="selected" 
                  
                  href="<?php echo base_url();?>thanh-vien/post">
                  POSTS                </a>
               </li>
               <li><a  class="" 
                  onclick="GAG.GA.track('User-Activity', 'UpvoteClicked', 1);"
                  href="/u/beobeboi91/likes">
                  UPVOTES                </a>
               </li>
               <li><a  class="" 
                  onclick="GAG.GA.track('User-Activity', 'CommentClicked', 1);"
                  href="/u/beobeboi91/comments">
                  COMMENTS                </a>
               </li>
            </ul>
            <div class="clearfix"></div>
         </div>
      </div>
      <div class="toast toast-color- badge-toast-container" style="display:none">
         <p class="close">
            <span class="badge-toast-message"></span>
            <a class="btn-close badge-toast-close" href="#">&#10006;</a>
         </p>
      </div>
      <div id="container" class="">
         <?php echo $this->load->view($main_content);?>
      </div>
      <!--end #container-->
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/9gag/js/lib.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/9gag/js/gag.js"></script>
          
      <div id="fb-root" style="display:none;"></div>
      
      <!-- 9gVQ01EVBRXTqlUeMR1YzwEVJBzTB1TY -->
   </body>
</html>