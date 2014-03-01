<!DOCTYPE html>
<html lang="en">
   <head>
      <title>9GAG - Forever Alone No More!</title>
      <link rel="image_src" href="http://d1y9yo7q4hy8a7.cloudfront.net/img/9gag-fb-pic-latest.png" />
      <link rel="publisher" href="https://plus.google.com/u/0/110969448173982102496" />
      <link rel="canonical" href="http://9gag.com/" />
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
      <meta property="og:url" content="<?php echo base_url();?>" />
      <meta property="og:description" content="9GAG is the easiest way to have fun!" />
      <meta property="og:type" content="blog" />
      <meta property="og:image" content="http://d1y9yo7q4hy8a7.cloudfront.net/img/9gag-fb-pic-latest.png" />
      <meta name="viewport" content="width=980, initial-scale=1" />
   
      <meta http-equiv="X-UA-Compatible" content="IE=9" />
      <link href="<?php echo base_url();?>template/ezwebvietnam/home/9gag/css/style.css" media="screen,projection" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url();?>template/ezwebvietnam/home/9gag/css/haivl_style.css" media="screen,projection" rel="stylesheet" type="text/css" />
      <!--[if lt IE 9]>
      <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
      <![endif]-->
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
   </head>
   <body class="background-white">
      <div class="badge-sticky-subnav-static">
         <?php include('header.php'); ?>      
      </div>
      <div class="section-nav">
         <div class="width-limit">
            <div class="slogan">
               <p>9GAG is your best source of fun.</p>
            </div>
            <div class="social-love">
               <ul>
                  <li>
                     <span class="facebook-like badge_facebook_render">
                        <fb:like href="https://facebook.com/9gag" layout="button_count" show_faces="false" width="240" height="40" action="like" colorscheme="light"></fb:like>
                     </span>
                  </li>
                  <li><span class="twitter-follow"><a href="https://twitter.com/9gag" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @9gag</a></span></li>
                  <li>
                     <span class="google-plus-follow">
                        <div class="g-follow" data-annotation="none" data-height="20" data-href="https://plus.google.com/110969448173982102496/" data-rel="publisher"></div>
                     </span>
                  </li>
               </ul>
            </div>
            <a class="customize badge-personalise-btn " href="#">Personalise <span class="drop-arrow"></span></a>
            <div class="clearfix"></div>
         </div>
      </div>
      <div class="toast toast-color- badge-toast-container" style="display:none">
         <p class="close">
            <span class="badge-toast-message"></span>
            <a class="btn-close badge-toast-close" href="#">&#10006;</a>
         </p>
      </div>
      <?php echo $this->load->view($main_content);?>
      <!--end #container-->
      <script>
      $(document).ready(function() {
        $(document).on('click','.vote-up',function(event){
                var contentPanelId = jQuery(this).attr("id");
                $.ajax({
                                                    type: "POST"
                                                    , url: '<?php echo base_url();?>home/post/ajax_like_post'
                                                    , data: { code: contentPanelId,type:0}
                                                    , cache: false
                                                    , dataType: "json"
                                                    , success: function (data) {
                                                        if (data != null) {
                                                            if (data.msg == true) {
                                                                alert('Vote thành công')
                                                            }
                                                            else
                                                            {
                                                               alert('Vote thất bại')
                                                            }
                                                        }
                                                    }
                                                });
               
        });
        $(document).on('click','.vote-down',function(event){
                var contentPanelId = jQuery(this).attr("id");
                $.ajax({
                                                    type: "POST"
                                                    , url: '<?php echo base_url();?>home/post/ajax_like_post'
                                                    , data: { code: contentPanelId,type:1}
                                                    , cache: false
                                                    , dataType: "json"
                                                    , success: function (data) {
                                                        if (data != null) {
                                                            if (data.msg == true) {
                                                                alert('Vote thành công')
                                                            }
                                                            else
                                                            {
                                                               alert('Vote thất bại')
                                                            }
                                                        }
                                                    }
                                                });
               
        });
        
    });

      </script>        
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/9gag/js/lib.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/9gag/js/gag.js"></script>
      <div id="fb-root" style="display:none;"></div>
      <!-- :0DWBRXTUFEdNRVWywEVNFDTUdWY -->
   </body>
</html>