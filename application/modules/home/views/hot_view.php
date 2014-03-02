<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>
$(document).ready(function(){

    $('.badge-entry-collection  img').removeAttr( 'style' );
    $('.badge-entry-collection  img').css( 'width','500px' );

});
</script>
<div id="container" class="">
         <div class="badge-page page">
            <div class="main-wrap">
               <div id="gag-ads-init-mode" data-mode=""></div>
               <section id="list-view-2" class="badge-list-view-element variant-right">
                  <span id="jsid-gat-interval" data-post-interval="-1" class="hide">1393256824</span>
                  <span id="jsid-last-update-ts" class="hide">1393256824</span>
                  <div class="badge-entry-collection">
                  <?php 
                  foreach($list_post as $post)
                  {
                  ?>
                     <article
                        data-entry-id="<?php echo $post['code']?>"
                        data-entry-thumbnail-url="<?php echo base_url();?>file/uploads/post/<?php echo $post['code']?>/<?php echo $post['img']?>"
                        data-entry-url="<?php echo base_url();?>post/<?php echo $post['code']?>"
                        data-entry-votes="8803"
                        data-entry-comments="43"
                        id="jsid-entry-entity-<?php echo $post['code']?>"
                        class="badge-entry-container badge-entry-entity">
                        <header>
                           <h2 class="badge-item-title">
                              <a class="badge-evt badge-track"
                                 data-evt="ref-post-from-list,hot,position-1"
                                 data-track="post,v,,,d,<?php echo $post['code']?>,l"
                                 href="<?php echo base_url();?>post/<?php echo $post['code']?>"
                                 target="_blank">
                              <?php echo $post['title'];?>            </a>
                           </h2>
                           <p class="post-meta">
                              <a class="badge-evt point" id="love-count-<?php echo $post['code']?>" 
                                 href="<?php echo base_url();?>post/<?php echo $post['code']?>" 
                                 target="_blank" 
                                 data-evt="EntryAction,VotePointLinkUnderTitle,ListPage">
                              <span class="badge-item-love-count"><?php echo number_format($post['points'])?></span> points</a> &middot;
                              <a class="comment badge-evt" href="<?php echo base_url();?>post/<?php echo $post['code']?>#comment" target="_blank"
                                 data-evt="EntryAction,CommentLinkUnderTitle,ListPage" ><fb:comments-count href="<?php echo base_url();?>post/<?php echo $post['code']?>"/>
                           </fb:comments-count> comments</a>
                           </p>
                           <div class="badge-entry-sticky-shadow sticky-action">
                              <div class="badge-entry-sticky">
                                 <ul class="badge-item-vote-container vertical-vote  ">
                                 <?php 
                                 //print_r($this->session->userdata('username')); exit;
                        
                                 if(!$this->tank_auth->is_logged_in())
                                 {
                                   
                                 ?>
                                    <li><a class="badge-item-vote-up up" href="javascript:void(0);">Upvote</a></li>
                                    <li><a class="badge-item-vote-down down" href="javascript:void(0);">Downvote</a></li>
                                    <?php } else {?>
                                    <li><a id="<?php echo $post['code']?>" class="vote-up up" >Upvote</a></li>
                                    <li><a id="<?php echo $post['code']?>" class="vote-down down">Downvote</a></li>
                                    <?php } ?>
                                 </ul>
                                 <ul class="others">
                                    <li><a class="comment badge-evt badge-item-comment" target="_blank" href="<?php echo base_url();?>post/<?php echo $post['code']?>#comment"
                                       data-evt="EntryAction,CommentButtonClicked,ListPage">Comment</a></li>
                                 </ul>
                              </div>
                           </div>
                        </header>
                        <div class="badge-post-container post-container">
                           <div class="">
                            
                             <?php 
                                 if($post['type']==2)
                                 {
                                 ?>
                             <?php echo $post['content']?>
                             <?php } else {
                                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'/file/uploads/post/'.$post['code'].'/'.$post['img']) && is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'/file/uploads/post/'.$post['code'].'/'.$post['img']))
                                {
                                ?>
                              <img width="500" class="badge-item-img" src="<?php echo base_url();?>file/uploads/post/<?php echo $post['code']?>/<?php echo $post['img']?>" alt="<?php echo $post['title']?>"/>
                              <?php } else { ?> 
                              <img width="500" class="badge-item-img" src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $post['title']?>"/>
                              <?php }} ?>
                              
                           </div>
                        </div>
                        <div class="post-afterbar-a in-list-view">
                           <div class="share">
                              <ul>
                              
                                 <li><a class="badge-facebook-share badge-evt badge-track btn-share facebook" href="javascript:void(0);" data-track="social,fb.s,,,d,aqmWw1P,p" data-evt="Facebook-Share,PostClicked,<?php echo base_url();?>post/<?php echo $post['code']?>" data-share="<?php echo base_url();?>post/<?php echo $post['code']?>">Facebook</a></li>
                     <li><a class="badge-twitter-share badge-evt badge-track btn-share twitter" href="javascript:void(0);" data-track="social,t.s,,,d,aqmWw1P,p" data-evt="Twitter-Share,PostClicked,<?php echo base_url();?>post/<?php echo $post['code']?>" data-title="<?php echo $post['title']?>" data-share="<?php echo base_url();?>post/<?php echo $post['code']?>">Twitter</a></li>
                              </ul>
                           </div>
                           <div class="others">
                              <a class="badge-more-share-button more" href="javascript:void(0);">More</a>
                           </div>
                           <div class="badge-more-share-menu popup-menu more-share hide">
                              <ul>
                                 <li><a href="javascript:void(0);" class="badge-gplus-share badge-evt badge-track"
                                    data-track="social,gp.s,,,d,<?php echo $post['code']?>,l"
                                    data-evt="GPlus-Share,ListClicked,<?php echo base_url();?>post/<?php echo $post['code']?>"
                                    data-share="<?php echo base_url();?>post/<?php echo $post['code']?>">Google+</a></li>
                                 <li><a href="javascript:void(0);" class="badge-pinterest-share badge-evt badge-track"
                                    data-track="social,pn.s,,,d,<?php echo $post['code']?>,l"
                                    data-evt="Pinterest-Share,ListClicked,<?php echo base_url();?>post/<?php echo $post['code']?>"
                                    data-title="<?php echo $post['title']?>"
                                    data-img="http://d24w6bsrhbeh9d.cloudfront.net/photo/av0RXNX_700b.jpg"
                                    data-share="<?php echo base_url();?>post/<?php echo $post['code']?>">Pinterest</a></li>
                                 <li><a href="mailto:?subject=Check%20out%20%22EA%20created%20Pel%C3%A9%27s%20Fifa%20Ultimate%20Team%20thumbnail%20from%20a%20picture%20of%20him%20in%20the%20bath.%22&body=This%20is%20funny%2C%20you%20must%20check%20it%20out%21%20%3AD%0AEA%20created%20Pel%C3%A9%27s%20Fifa%20Ultimate%20Team%20thumbnail%20from%20a%20picture%20of%20him%20in%20the%20bath.%0Ahttp%3A%2F%2F9gag.com%2Fgag%2Fav0RXNX%3Fref%3D9g.m" class="badge-email-share badge-evt badge-track"
                                    data-track="social,9g.m,,,d,<?php echo $post['code']?>,l"
                                    data-evt="Email-Share,ListClicked,http://9gag.com/gag/av0RXNX"
                                    target="_blank">Email</a></li>
                              </ul>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </article>
                     <?php } ?>
                     
                  </div>
                  <?php 
                  if($page==$total_page || $total_page==1)
                  {}
                  else
                  {
                  ?>
                  <div class="loading">
                     <a class="btn badge-load-more-post" href="<?php echo base_url();?>hot/page/<?php echo $page+1;?>" data-loading-text="Loading more posts...">Load more posts</a>
                  </div>
                  <?php } ?>
               </section>
            </div>
            
            <section id="sidebar">
               <div id="rightColumn">
                  <div class="box infoBox highlightBox">
                     <b>Vào Facebook để duyệt haivl sướng hơn! Bạn không vào được? Xem hướng dẫn <a href="/cach-vao-facebook-bi-chan-mang-vnpt-viettel-fpt">cách vào Facebook</a>.</b>
                  </div>
                  <div>
                     <a class="buttons spaceBottom" href="<?php echo base_url();?>thanh-vien/img" style="float: left; width: 278px; color: white">
                     Click để bắt đầu chia sẻ những bức ảnh vui!</a>
                     <div class="clear">
                     </div>
                  </div>
                  <div class="box darkBox">
                     <h3 class="topUsers">
                        Top danh hài
                     </h3>
                    
                     <div class="clear">
                     </div>
                     <div id="topUserContent">
                        <div class="topUsers">
                        <?php 
                        foreach($list_users_hot as $user_hot)
                        {
                        ?>
                           <div class="item">
                              <a >
                                 <img src="<?php echo $user_hot['img']?>"/>
                                 <div class="info">
                                    <span class="name"><?php echo sub_string($user_hot['full_name'],7);?></span> <span class="likes"><?php echo $user_hot['total_like'];?></span>
                                 </div>
                              </a>
                           </div>
                        <?php } ?>   
                        </div>
                        <div class="clear">
                        </div>
                       
                     </div>
                  </div>
                  <div class="box darkBox newestBox">
    <h3>
        Bài mới</h3>
    <div>
    <?php 
    foreach($list_new_post as $new_post)
    {
    ?>
        <div class="photoListItemSmall">
            <a href="<?php echo base_url();?>post/<?php echo $new_post['code']?>">
                <div class="thumbnail">
                <?php 
                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'/file/uploads/post/'.$new_post['code'].'/'.$new_post['img']) && is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'/file/uploads/post/'.$new_post['code'].'/'.$new_post['img']))
                {
                ?>
                    <img src="<?php echo base_url();?>file/uploads/post/<?php echo $new_post['code']?>/<?php echo $new_post['img']?>"/>
                    <?php } else {?>
                    <img src="<?php echo base_url();?>file/uploads/no_image.gif"/>
                    <?php } ?>
                </div>
                <div class="info">
                    <h3>
                        <?php echo $new_post['title'];?>
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem"><?php echo $new_post['count_view']?></span>
                        <span class="comments" title="lượt bình luận"><fb:comments-count href="<?php echo base_url();?>post/<?php echo $new_post['code']?>"/>
                           </fb:comments-count></span>
                        <span class="likes" title="lượt thích"><?php echo $new_post['count_like']?></span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
    <?php } ?>
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
    <?php 
    foreach($list_post_hot as $post_hot)
    {
    ?>
        <div class="photoListItemSmall">
            <a href="<?php echo base_url();?>post/<?php echo $post_hot['code']?>">
                <div class="thumbnail">
                <?php 
                if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/post/'.$post_hot['code'].'/'.$post_hot['img']) && is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/post/'.$post_hot['code'].'/'.$post_hot['img']))
                {
                ?>
                    <img src="<?php echo base_url();?>file/uploads/post/<?php echo $post_hot['code']?>/<?php echo $post_hot['img']?>"/>
                    <?php } else { ?>
                    <img src="<?php echo base_url();?>file/uploads/no_image.gif"/>
                    <?php } ?>
                </div>
                <div class="info">
                    <h3>
                        <?php echo $post_hot['title']?>
                    </h3>
                    <div class="stats">
                        <span class="views" title="lượt xem"><?php echo $post_hot['count_view']?></span>
                        <span class="comments" title="lượt bình luận"><fb:comments-count href="<?php echo base_url();?>post/<?php echo $post_hot['code']?>"/>
                           </fb:comments-count></span>
                        <span class="likes" title="lượt thích"><?php echo $post_hot['count_like']?></span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </a>
        </div>
      <?php } ?> 
</div>

</div>
               </div>
               <div id="sidebar-content">
                  <section class="badge-block-ad block-ad">
                     <div class="img-container">
                        <!-- 9gag-list-sidebar1-300x250-atf --> 
                        <div class='s-300' id='div-gpt-ad-1365137578270-1' style='width:300px; height:250px;'>  </div>
                     </div>
                  </section>
                  <section class="block-feature-cover">
                     <h2 class="sidebar-title">Featured</h2>
                     <ul id="jsid-featured-item-container"
                     data-ads-position="8, 16"
                     data-list-key="hot"
                     </ul>
                     <div class="loading hide">
                        <a class="btn spin" href="#">Loading</a>
                     </div>
                  </section>
                  <div id="jsid-featured-sidebar-tail">
                     <section id="jsid-featured-sidebar-ad" class="badge-block-ad block-ad">
                        <div class="img-container">
                           <!-- 9gag-list-sidebar2-300x250-sticky --> 
                           <div class='s-300' id='div-gpt-ad-1365137578270-2' style='width:300px; height:250px;'>  </div>
                        </div>
                     </section>
                     <section class="badge-get-the-app get-the-app">
                        <h2 class="sidebar-title">Get the App</h2>
                        <ul>
                           <li><a class="app-store" href="http://9gag.com/iphone" target="_blank" onclick="GAG.GA.track('iPhone-App', 'Clicked-Download', 'SidNavBanner');">Download on App Store</a></li>
                           <li><a class="google-play" href="http://9gag.com/android" target="_blank" onclick="GAG.GA.track('Android-App', 'Clicked-Download', 'SidNavBanner');">Get it on Google Play</a></li>
                        </ul>
                     </section>
                  </div>
               </div>
               <section class="footer">
                  <div class="buttons-area" style="display: none;">
                     <a class="badge-scroll-to-top back-to-top" href="javascript: void(0);">Back to top</a>
                     <div class="keyboard-hint">
                        <ul>
                           <li><a class="badge-next-entry" href="javascript: void(0);"><strong>J</strong> <span class="next">Next</span></a></li>
                           <li><a class="badge-prev-entry" href="javascript: void(0);"><strong>k</strong> <span class="prev">Prev</span></a></li>
                        </ul>
                     </div>
                  </div>
                  <a class="give-feedback" href="mailto:support%2Bweb@9gag.com?subject=Shut%20up%20and%20take%20my%20feedback" target="_blank">Give Feedback</a>
                  <p class="static">
                     <a href="http://9gag.com/about">About</a> &middot; 
                     <a href="http://9gag.com/faq">FAQ</a> &middot; 
                     <a href="http://9gag.com/privacy">Privacy</a> &middot; 
                     <a href="http://9gag.com/contact">Contact</a>
                  </p>
               </section>
            </section>
            <div id="overlay-container" class="overlay-scroll-container hide">
               <section class="modal signup badge-overlay-signin hide">
                  <a class="btn-close badge-overlay-close" href="#">&#10006;</a>
                  <section id="signup">
                     <h2>Login</h2>
                     <p class="lead">Connect with a social network</p>
                     <div class="social-signup">
                        <a class="btn-connect-option facebook badge-facebook-connect" href="<?php echo base_url();?>facebook-signup">Facebook</a>
                        <span class="badge-gplus-connect"><a class="btn-connect-option google-plus" href="<?php echo base_url();?>google-signup">Google</a></span> 
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
                           <a class="btn-connect-option facebook badge-facebook-connect" href="<?php echo base_url();?>facebook-signup">Facebook</a>
                           <span class="badge-gplus-connect"><a class="btn-connect-option google-plus" href="<?php echo base_url();?>google-signup">Google</a></span>
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
      </div>