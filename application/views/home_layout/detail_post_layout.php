<!DOCTYPE html>
<html lang="en">
   <head>
      <title><?php echo $post[0]['title']?></title>
      <link rel="image_src" href="<?php echo base_url();?>file/uploads/post/<?php echo $post[0]['code']?>/<?php echo $post[0]['img']?>" />
      <link rel="publisher" href="https://plus.google.com/u/0/110969448173982102496" />
      <link rel="canonical" href="<?php echo base_url();?>post/<?php echo $post[0]['code']?>" />
      <link rel="shortcut icon" href="//d1y9yo7q4hy8a7.cloudfront.net/static/main/core/20140127_1390790332/img/favicon_v2.png" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="keywords" content="9gag,fun,funny,lol,meme,GIF,wtf,omg,fail,video,cosplay,geeky,forever alone" />
      <meta name="description" content="9GAG has the best funny pics, GIFs, videos, memes, cute, wtf, geeky, cosplay photos on the web. We are your best source of happiness and awesomeness." />
      <meta name="robots" content="noodp" />
      <meta name="twitter:card" content="photo" />
      <meta name="twitter:site" content="@9gag" />
      <meta name="twitter:image" content="<?php echo base_url();?>file/uploads/post/<?php echo $post[0]['code']?>/<?php echo $post[0]['img']?>" />
      <meta property="og:title" content="<?php echo $post[0]['title']?>" />
      <meta property="og:site_name" content="9GAG" />
      <meta property="og:url" content="<?php echo base_url();?>post/<?php echo $post[0]['code']?>" />
      <meta property="og:description" content="Click to see the pic and write a comment..." />
      <meta property="og:type" content="article" />
      <meta property="og:image" content="<?php echo base_url();?>file/uploads/post/<?php echo $post[0]['code']?>/<?php echo $post[0]['img']?>" />
      <meta name="viewport" content="width=980, initial-scale=1" />
      <meta name="verify-v1" content="vvFhqhXLAn+191Kl3iZjjHHY6wzkyGG0CJqGMoFIZEg=" />
      <meta http-equiv="X-UA-Compatible" content="IE=9" />
      <link href="<?php echo base_url();?>template/ezwebvietnam/home/9gag/css/style.css" media="screen,projection" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url();?>template/ezwebvietnam/home/9gag/css/haivl_style.css" media="screen,projection" rel="stylesheet" type="text/css" />
      <!--[if lt IE 9]>
      <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
      <![endif]-->
      
   </head>
   <body class="background-white">
      <div class="badge-sticky-subnav-static">
         <?php include('header.php');?>
      </div>
      <div class="toast toast-color- badge-toast-container" style="display:none">
         <p class="close">
            <span class="badge-toast-message"></span>
            <a class="btn-close badge-toast-close" href="#">&#10006;</a>
         </p>
      </div>
      <div id="container" class="">
         <div class="badge-page page">
            <?php echo $this->load->view($main_content);?>
            
            <section id="sidebar">
            <div id="rightColumn">
                  <div class="box infoBox highlightBox">
                     <b>Vào Facebook để duyệt haivl sướng hơn! Bạn không vào được? Xem hướng dẫn <a href="/cach-vao-facebook-bi-chan-mang-vnpt-viettel-fpt">cách vào Facebook</a>.</b>
                  </div>
                  <div>
                     <a class="buttons spaceBottom" href="/upload" style="float: left; width: 278px; color: white">
                     Click để bắt đầu chia sẻ những bức ảnh vui!</a>
                     <div class="clear">
                     </div>
                  </div>
                  <div class="box darkBox">
                     <h3 class="topUsers">
                        Top danh hài
                     </h3>
                     <ul class="topUsersSort topUsersSortHome">
                        <li><a href="#" data-sort="week" class="selected">tuần</a> / </li>
                        <li><a href="#" data-sort="month">tháng</a> / </li>
                        <li><a href="#" data-sort="all">tất cả</a> </li>
                     </ul>
                     <div class="clear">
                     </div>
                     <div id="topUserContent">
                        <div class="topUsers">
                           <div class="item">
                              <a href="/uploader/34951">
                                 <img src="http://s.haivl.com/data/avatar/34951/e82bcb42664643c0ac861209c9886200/thumbnail.jpg">
                                 <div class="info">
                                    <span class="name">CHIPKA - 칩카</span> <span class="likes">50.370</span>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a href="/uploader/10926">
                                 <img src="http://s.haivl.com/data/avatar/10926/7c993ff10e5048c4a7f1826d9209198d/thumbnail.jpg">
                                 <div class="info">
                                    <span class="name">nhathotinht...</span> <span class="likes">35.143</span>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a href="/uploader/329000">
                                 <img src="http://s.haivl.com/data/avatar/329000/03683f8227c04f00931bd90e897ff2d0/thumbnail.jpg">
                                 <div class="info">
                                    <span class="name">Futaro Kudo</span> <span class="likes">28.255</span>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a href="/uploader/227444">
                                 <img src="http://s.haivl.com/data/avatar/20140129/0a75440eff314414b685826b72593559/thumbnail-a407a646fab3417e84ad04102d0c6319.jpg">
                                 <div class="info">
                                    <span class="name">Nguyễn Trun...</span> <span class="likes">26.487</span>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a href="/uploader/56248">
                                 <img src="http://s.haivl.com/data/avatar/56248/e24a4354c7974fee9f3f643eb43cc92f/thumbnail.jpg">
                                 <div class="info">
                                    <span class="name">Pi Joker</span> <span class="likes">19.067</span>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a href="/uploader/166231">
                                 <img src="http://graph.facebook.com/100003281019991/picture?type=normal">
                                 <div class="info">
                                    <span class="name">May Ars</span> <span class="likes">17.184</span>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a href="/uploader/117853">
                                 <img src="http://graph.facebook.com/100004455159447/picture?type=normal">
                                 <div class="info">
                                    <span class="name">Phát Manucian</span> <span class="likes">16.859</span>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a href="/uploader/35818">
                                 <img src="http://s.haivl.com/data/avatar/20140203/2905a5d0321149c889f5b9ded9a07d3e/thumbnail-4b033335cd534fbf878a84418a14d4d4.jpg">
                                 <div class="info">
                                    <span class="name">Hài Vê Lờ</span> <span class="likes">14.779</span>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="clear">
                        </div>
                        <div class="moreTop"><a href="/top-user/week">xem thêm »</a></div>
                     </div>
                  </div>
                  <div class="box darkBox newestBox">
    <h3>
        Bài mới</h3>
    <div>
        <div class="photoListItemSmall">
            <a href="/photo/2386406?ref=n1">
                <div class="thumbnail">
                    <img src="http://s2.haivl.com/data/photos2/20140225/8e37e0ed0814494084a105fcf31d0dc5/thumbnail-414d4c8804a547f9ac4a1fc780b3e239.jpg">
                </div>
                <div class="info">
                    <h3>
                        Xếp đi. @@
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem">1.045</span>
                        <span class="comments" title="lượt bình luận">12</span>
                        <span class="likes" title="lượt thích">32</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
        <div class="photoListItemSmall">
            <a href="/photo/2397963?ref=n2">
                <div class="thumbnail">
                    <img src="http://s2.haivl.com/data/photos2/20140227/bc3c747042ac43a1a20d71e8f9f56a27/thumbnail-5692dc56b87548f7be604169f0ab8d8b.jpg">
                </div>
                <div class="info">
                    <h3>
                        Đã tìm ra lý do phụ nữ thích hút thuốc lá <img class="emo" src="http://s.haivl.com/content/images/emo/static/laugh.png">
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem">545</span>
                        <span class="comments" title="lượt bình luận">1</span>
                        <span class="likes" title="lượt thích">7</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
        <div class="photoListItemSmall last">
            <a href="/photo/2394991?ref=n3">
                <div class="thumbnail">
                    <img src="http://s2.haivl.com/data/photos2/20140226/d2107f85ac6c4dec9b18e8988ed959c2/thumbnail-f4209978e541495794bb235a8d49f4f2.jpg">
                </div>
                <div class="info">
                    <h3>
                        Bạn nào biết thì liên hệ giúp nha.Share luôn cho khổ chủ
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem">1.612</span>
                        <span class="comments" title="lượt bình luận">6</span>
                        <span class="likes" title="lượt thích">13</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
</div>

</div>
<div class="box darkBox newestBox">
    <h3>
        Bài Chờ Duyệt</h3>
    <div>
        <div class="photoListItemSmall">
            <a href="/photo/2386406?ref=n1">
                <div class="thumbnail">
                    <img src="http://s2.haivl.com/data/photos2/20140225/8e37e0ed0814494084a105fcf31d0dc5/thumbnail-414d4c8804a547f9ac4a1fc780b3e239.jpg">
                </div>
                <div class="info">
                    <h3>
                        Xếp đi. @@
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem">1.045</span>
                        <span class="comments" title="lượt bình luận">12</span>
                        <span class="likes" title="lượt thích">32</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
        <div class="photoListItemSmall">
            <a href="/photo/2397963?ref=n2">
                <div class="thumbnail">
                    <img src="http://s2.haivl.com/data/photos2/20140227/bc3c747042ac43a1a20d71e8f9f56a27/thumbnail-5692dc56b87548f7be604169f0ab8d8b.jpg">
                </div>
                <div class="info">
                    <h3>
                        Đã tìm ra lý do phụ nữ thích hút thuốc lá <img class="emo" src="http://s.haivl.com/content/images/emo/static/laugh.png">
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem">545</span>
                        <span class="comments" title="lượt bình luận">1</span>
                        <span class="likes" title="lượt thích">7</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
        <div class="photoListItemSmall last">
            <a href="/photo/2394991?ref=n3">
                <div class="thumbnail">
                    <img src="http://s2.haivl.com/data/photos2/20140226/d2107f85ac6c4dec9b18e8988ed959c2/thumbnail-f4209978e541495794bb235a8d49f4f2.jpg">
                </div>
                <div class="info">
                    <h3>
                        Bạn nào biết thì liên hệ giúp nha.Share luôn cho khổ chủ
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem">1.612</span>
                        <span class="comments" title="lượt bình luận">6</span>
                        <span class="likes" title="lượt thích">13</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
</div>

</div>
<div class="box darkBox newestBox">
    <h3>
        Bài Hot</h3>
    <div>
        <div class="photoListItemSmall">
            <a href="/photo/2386406?ref=n1">
                <div class="thumbnail">
                    <img src="http://s2.haivl.com/data/photos2/20140225/8e37e0ed0814494084a105fcf31d0dc5/thumbnail-414d4c8804a547f9ac4a1fc780b3e239.jpg">
                </div>
                <div class="info">
                    <h3>
                        Xếp đi. @@
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem">1.045</span>
                        <span class="comments" title="lượt bình luận">12</span>
                        <span class="likes" title="lượt thích">32</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
        <div class="photoListItemSmall">
            <a href="/photo/2397963?ref=n2">
                <div class="thumbnail">
                    <img src="http://s2.haivl.com/data/photos2/20140227/bc3c747042ac43a1a20d71e8f9f56a27/thumbnail-5692dc56b87548f7be604169f0ab8d8b.jpg">
                </div>
                <div class="info">
                    <h3>
                        Đã tìm ra lý do phụ nữ thích hút thuốc lá <img class="emo" src="http://s.haivl.com/content/images/emo/static/laugh.png">
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem">545</span>
                        <span class="comments" title="lượt bình luận">1</span>
                        <span class="likes" title="lượt thích">7</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
        <div class="photoListItemSmall last">
            <a href="/photo/2394991?ref=n3">
                <div class="thumbnail">
                    <img src="http://s2.haivl.com/data/photos2/20140226/d2107f85ac6c4dec9b18e8988ed959c2/thumbnail-f4209978e541495794bb235a8d49f4f2.jpg">
                </div>
                <div class="info">
                    <h3>
                        Bạn nào biết thì liên hệ giúp nha.Share luôn cho khổ chủ
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem">1.612</span>
                        <span class="comments" title="lượt bình luận">6</span>
                        <span class="likes" title="lượt thích">13</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
</div>

</div>
               </div>
               <form method="post" action="/profile/setcustomize" id="jsid-personalise-form">
                  <section class="section-control" id="jsid-personalise-selector" style="display:none;">
                     <div class="title">
                        <h3>Personalise 9GAG <em>Beta</em></h3>
                     </div>
                     <ul>
                        <li class="selected">
                           <p>
                              <span class="cell-title">Auto Expand Posts</span>
                           </p>
                           <span class="toggle on badge-personalise-options">
                           <span class="on">On</span>
                           <span class="off">Off</span>
                           <span class="switch"></span>
                           <input type="hidden" name="auto_expand" value="1"/>
                           </span>
                        </li>
                        <li class="">
                           <p>
                              <span class="cell-title">Auto Play GIFs</span>
                           </p>
                           <span class="toggle  badge-personalise-options">
                           <span class="on">On</span>
                           <span class="off">Off</span>
                           <span class="switch"></span>
                           <input type="hidden" name="auto_animated" value="0"/>
                           </span>
                        </li>
                        <li class="">
                           <p>
                              <span class="cell-title">Show NSFW Posts</span>
                           </p>
                           <span class="toggle  badge-personalise-options badge-personalise-option-nsfw">
                           <span class="on">On</span>
                           <span class="off">Off</span>
                           <span class="switch"></span>
                           <input type="hidden" name="show_nsfw" value="0"/>
                           </span>
                        </li>
                     </ul>
                     <div class="btn-container">
                        <a class="btn size-30 blue" href="#" id="jsid-personalise-btn-save">Save</a>
                        <a class="link" href="#" id="jsid-personalise-btn-reset">Reset</a>
                     </div>
                  </section>
                  <input type="hidden" name="customize_reset" value=""/>
                  <input type="hidden" name="url" value="/gag/amXMQXv"/>
               </form>
               <div id="sidebar-content">
                  <div class="badge-sticky-sidedock-static">
                     <!-- this is used for measurement -->
                     <div class="">
                        <!-- this is the actual sticky element -->
                        <div class="block-ad">
                           <div class="badge-gag-ads-container img-container" data-gag-ads="post-sidebar1-300x250-atf"></div>
                        </div>
                        <section class="block-feature-cover">
                           <h2 class="sidebar-title">Featured</h2>
                           <ul id="jsid-featured-item-container" data-ads-position="5" data-list-key="post" ></ul>
                           <div class="loading hide">
                              <a class="btn spin" href="#">Loading</a>
                           </div>
                        </section>
                        <div id="jsid-featured-sidebar-tail">
                           <section id="jsid-featured-sidebar-ad" class="badge-block-ad block-ad">
                              <div class="badge-gag-ads-container img-container" data-gag-ads="post-sidebar2-300x250-btf"></div>
                           </section>
                           <section class="badge-get-the-app get-the-app">
                              <h2 class="sidebar-title">Get the App</h2>
                              <ul>
                                 <li><a class="app-store" href="http://9gag.com/iphone" target="_blank" onclick="GAG.GA.track('iPhone-App', 'Clicked-Download', 'SidNavBanner');">Download on App Store</a></li>
                                 <li><a class="google-play" href="http://9gag.com/android" target="_blank" onclick="GAG.GA.track('Android-App', 'Clicked-Download', 'SidNavBanner');">Get it on Google Play</a></li>
                              </ul>
                           </section>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div id="overlay-container" class="overlay-scroll-container hide">
               <section class="modal signup badge-overlay-signin hide">
                  <a class="btn-close badge-overlay-close" href="#">&#10006;</a>
                  <section id="signup">
                     <h2>Login</h2>
                     <p class="lead">Connect with a social network</p>
                     <div class="social-signup">
                        <a class="btn-connect-option facebook badge-facebook-connect" href="#" onclick="GAG.GA.track('login-signup', 'facebook-connect', 'login-form');">Facebook</a>
                        <span class="badge-gplus-connect"><a class="btn-connect-option google-plus" href="javascript:void(0);" onclick="GAG.GPlus.btnClicked = true;">Google</a></span> 
                     </div>
                     <form id="login-email" class="badge-login-form" action="https://9gag.com/login" method="POST">
                        <input type="hidden" id="jsid-login-form-csrftoken" name="csrftoken" value=""/>
                        <input type="hidden" id="jsid-login-form-next-url" name="next" value=""/>
                        <input type="hidden" name="location" value="1"/>
                        <p class="lead">Log in with your email address </p>
                        <div class="field">
                           <label for="jsid-login-email-name">Email</label>
                           <input id="jsid-login-email-name" type="text" name="username" value="" autofocus="autofocus"/>
                        </div>
                        <div class="field">
                           <label for="login-email-password">Password</label>
                           <input id="login-email-password" type="password" name="password" value="" />
                        </div>
                        <div class="btn-container">
                           <input type="submit" value="Log in" onclick="GAG.GA.track('login-signup', 'login', 'login-form');"/>
                           <a class="forgot-password" href="https://9gag.com/recover" onclick="GAG.GA.track('login-signup', 'clicked', 'forgot-password');">Forgot Password</a>
                        </div>
                     </form>
                  </section>
               </section>
               <section class="modal signup hide badge-overlay-signup-fb">
                  <a class="badge-overlay-close btn-close" href="#">&#10006;</a>
                  <section id="signup">
                     <div id="signup-fb" class="">
                        <h2>Hey there!</h2>
                        <p class="lead">9GAG is your best source of fun. Share anything you find interesting, get real responses from people all over the world, and discover what makes you laugh.</p>
                        <div class="social-signup">
                           <a class="btn-connect-option facebook badge-facebook-connect" href="#" onclick="GAG.GA.track('login-signup', 'facebook-connect', 'signup-form');">Facebook</a>
                           <span class="badge-gplus-connect"><a class="btn-connect-option google-plus" href="javascript:void(0);" onclick="GAG.GPlus.btnClicked = true; GAG.GA.track('login-signup', 'gplus-connect', 'signup-form');">Google</a></span>
                        </div>
                        <p class="alternative">Sign up with your <a href="#" class="badge-signup-email-link">Email Address</a></p>
                        <p class="alternative">Have an account? <a href="https://9gag.com/login?ref=" class="badge-signup-login-link">Login</a></p>
                     </div>
                     <div id="signup-email" class=" hide">
                        <h2>Become a member</h2>
                        <form id="signup-email" action="https://9gag.com/member/email-signup" autocomplete="off" method="post">
                           <input type="hidden" id="jsid-login-form-next-url" name="next" value=""/>
                           <div class="field">
                              <label for="signup-email-name">Full Name</label>
                              <input id="signup-email-name" type="text" name="fullname" class="badge-input-fullname badge-input-field" placeholder="" value="" maxlength="20"/>
                           </div>
                           <div class="field">
                              <label for="signup-email-email">Email Address</label>
                              <input type="email" name="email" id="signup-email-email" class="badge-input-email badge-input-field" placeholder="" value="" />
                           </div>
                           <div class="field">
                              <label for="signup-email-password">Password</label>
                              <input id="signup-email-password" type="password" name="password" value="">
                           </div>
                           <div class="field captcha">
                              <div id='captchawrapper' style="display:none;">
                                 <h3 id='capchatitle'>Please enter the words below</h3>
                                 <div id='captchadiv' data-apiKey="6Lf0iMkSAAAAALGZpEfzpO13sqJNiEgr6znqfm9r">
                                    <div id="recaptcha_widget" style="" class="">
                                       <div id="recaptcha_image" style="width: 300px; height: 57px;"></div>
                                       <div class="recaptcha_function">
                                          <div class="recaptcha_reload"><a href="javascript:Recaptcha.reload()">Reload</a></div>
                                          ·
                                          <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Listen</a></div>
                                          <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Image</a></div>
                                          · 
                                          <div><a href="javascript:Recaptcha.showhelp()">Help</a></div>
                                       </div>
                                       <span class="recaptcha_only_if_image">Enter the words above:</span>
                                       <span class="recaptcha_only_if_audio">Type what you hear:</span>
                                       <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" autocomplete="off" tabindex="1">
                                    </div>
                                 </div>
                              </div>
                              <p class="error-message red"></p>
                           </div>
                           <div class="btn-container">
                              <input type="submit" value="Sign Up" onclick="GAG.GA.track('login-signup', 'signup', 'signup-form');"/>
                           </div>
                           <input type="hidden" name="tzo" class="badge-input-tzo" value="0" />
                           <input type="hidden" name="next" value="" class="badge-signup-form-next-url"/>
                           <input type="hidden" name="csrftoken" id="csrftoken" value=""/>
                           <input type="hidden" name="src" value="" />
                           <input type="hidden" name="ref" value="" />
                           <input type="hidden" name="app" value="web" />
                           <input type="hidden" name="recaptcha_challenge_field" value="" id="recaptcha_challenge"/>
                           <input type="hidden" name="recaptcha_response_field" value="" id="recaptcha_response"/>
                        </form>
                     </div>
                  </section>
               </section>
               <div id="jsid-modal-post-zoom" class="hide" style="height: 100%;">
                  <div class="badge-post-zoom-img zoom-container">			
                  </div>
                  <a class="badge-overlay-close close-button" href="javascript: void(0);">Close</a>
               </div>
            </div>
            <!--end overlay-container-->                
            <div class="clearfix"></div>
         </div>
         <footer>
            <div class="width-limit">
               <div class="naughty-box">
                  <div class="width-limit">
                     <div class="badge-gag-ads-container image-container" data-gag-ads="post-footer-728x90">
                     </div>
                  </div>
               </div>
               <div class="primary">
                  <ul>
                     <li><a href="http://9gag.com/about">About</a></li>
                     <li><a href="http://9gag.com/privacy">Privacy</a></li>
                     <li><a href="http://9gag.com/tos">Terms</a></li>
                     <li><a href="http://9gag.com/advertise">Advertise</a></li>
                     <li><a href="http://9gag.com/faq">FAQ</a></li>
                     <li><a href="mailto:support%2Bweb@9gag.com?subject=Shut%20up%20and%20take%20my%20feedback" target="_blank">Give Feedback</a></li>
                     <li>9GAG © 2014</li>
                  </ul>
               </div>
            </div>
            <a class="give-feedback" href="mailto:support%2Bweb@9gag.com?subject=Shut%20up%20and%20take%20my%20feedback" target="_blank">Give Feedback</a>
         </footer>
      </div>
      <!--end #container-->
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
      
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/9gag/js/lib.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/9gag/js/gag.js"></script>
             
      <div id="fb-root" style="display:none;"></div>
      
      <!-- 9gVQ01EVBRXTUllMMRVS61UewknTEVUY -->
   </body>
</html>
