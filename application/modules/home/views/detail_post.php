<div class="main-wrap">
   <section id="individual-post">
      <article data-entry-id="<?php echo $post[0]['code']?>" data-entry-thumbnail-url="<?php echo base_url();?>file/uploads/post/<?php echo $post[0]['code']?>/<?php echo $post[0]['img']?>" data-entry-url="<?php echo base_url();?>post/<?php echo $post[0]['code']?>" data-entry-votes="10421" data-entry-comments="31" id="jsid-entry-entity-<?php echo $post[0]['code']?>" class="badge-entry-container badge-entry-entity post-page">
         <header>
            <h2 class="badge-item-title"><?php echo $post[0]['title']?></h2>
            <p class="post-meta">
               <a class="badge-evt point" id="love-count-<?php echo $post[0]['code']?>" href="javascript:void(0);" data-evt="EntryAction,VotePointLinkUnderTitle,PostPage">
               <span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
               <span itemprop="ratingValue" style="display: none;">5</span>
               <span class="badge-item-love-count" itemprop="ratingCount">10,421</span>
               </span> points</a> ·
               <a class="comment badge-evt" href="#comment" data-evt="EntryAction,CommentLinkUnderTitle,PostPage">
               <span class="badge-item-comment-count">31</span> comments</a>
            </p>
         </header>
         <div class="badge-toolbar-pre fixed-wrap-post-bar">
            <div class="badge-entry-toolbar-sticky post-afterbar-a in-post-top">
               <ul class="badge-item-vote-container horizontal-vote">
                  <li><a class="badge-item-vote-up up" href="javascript:void(0);"><span>UP</span></a></li>
                  <li><a class="badge-item-vote-down down" href="javascript:void(0);"><span>DOWN</span></a></li>
               </ul>
               <div class="share">
                  <ul>
                     <li><a class="badge-facebook-share badge-evt badge-track btn-share facebook" href="javascript:void(0);" data-track="social,fb.s,,,d,aqmWw1P,p" data-evt="Facebook-Share,PostClicked,<?php echo base_url();?>post/<?php echo $post[0]['code']?>" data-share="<?php echo base_url();?>post/<?php echo $post[0]['code']?>">Facebook</a></li>
                     <li><a class="badge-twitter-share badge-evt badge-track btn-share twitter" href="javascript:void(0);" data-track="social,t.s,,,d,aqmWw1P,p" data-evt="Twitter-Share,PostClicked,<?php echo base_url();?>post/<?php echo $post[0]['code']?>" data-title="<?php echo $post[0]['title']?>" data-share="<?php echo base_url();?>post/<?php echo $post[0]['code']?>">Twitter</a></li>
                  </ul>
               </div>
               <div class="post-nav">
                  <a class="badge-fast-entry badge-prev-post-entry hide  disabled" data-entry-key="a5djpwO" href=""></a>
                  <a class="badge-fast-entry badge-next-post-entry next" data-entry-key="a5djpwO" href="/gag/a5djpwO"><span class="label">Next Post</span><span class="arrow"></span></a>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="badge-post-container badge-entry-content post-container">
            <?php if($post[0]['type']==1)
               {
               ?>
            <a href="javascript: void(0);" class="badge-post-zoom zoomable" style="min-height:783.91304347826px;">
            <img class="badge-item-img" src="<?php echo base_url();?>file/uploads/post/<?php echo $post[0]['code']?>/<?php echo $post[0]['img']?>" alt="<?php echo $post[0]['title']?>">
            </a>
            <?php } else {
               echo $post[0]['content'];
               } ?>
         </div>
         <div class="post-afterbar-a in-post-bot full-width">
            <div class="share">
               <ul>
                  <li><a class="badge-facebook-share badge-facebook-bot-share badge-evt badge-track btn-share facebook" href="javascript:void(0);" data-track="social,fb.s,,,d,<?php echo $post[0]['code']?>,p" data-evt="Facebook-Share-Bot,PostClicked,<?php echo base_url();?>post/<?php echo $post[0]['code']?>" data-title="<?php echo $post[0]['title']?>" data-share="<?php echo base_url();?>post/<?php echo $post[0]['code']?>">Share on Facebook</a></li>
                  <li><a class="badge-twitter-share badge-twitter-bot-share badge-evt badge-track btn-share twitter" href="javascript:void(0);" data-track="social,t.s,,,d,<?php echo $post[0]['code']?>,p" data-evt="Twitter-Share-Bot,PostClicked,<?php echo base_url();?>post/<?php echo $post[0]['code']?>" data-title="<?php echo $post[0]['title']?>" data-share="<?php echo base_url();?>post/<?php echo $post[0]['code']?>">Share on Twitter</a></li>
               </ul>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="badge-entry-info post-afterbar-meta">
            <p>
               <a class="badge-item-report" href="javascript: void(0);">Report</a>
            </p>
         </div>
      </article>
   </section>
   <div id="comment"></div>
   <div id="comments"></div>
   <section class="post-comment">
      <div class="section-nav">
         <div class="width-limit">
            <div class="options">
               <ul>
                  <li>
                     <a href="javascript:void(0);" class="badge-evt badge-comment-switch-9gag selected" data-evt="EntryAction,CommentSystemTabClicked,PostPage">
                        FACEBOOK Comments (
                        <span class="badge-item-comment-count">
                           <fb:comments-count href="<?php echo base_url();?>post/<?php echo $post[0]['code']?>"/>
                           </fb:comments-count>
                        </span>
                        )
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
      <div id="jsid-comment-sys" class="badge-comment" data-width="600" style="width: 600px; height: 1889px;" data-rendered="1" data-href="<?php echo base_url();?>post/<?php echo $post[0]['code']?>">
         <div class="fb-comments" data-href="<?php echo base_url();?>post/<?php echo $post[0]['code']?>" data-numposts="5" data-colorscheme="light"></div>
      </div>
   </section>
</div>
