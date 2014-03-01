
                  <?php 
                  foreach($list_post as $post_user)
                  {
                  ?>
                     <article data-entry-id="<?php echo $post_user['code']?>" data-entry-thumbnail-url="http://d24w6bsrhbeh9d.cloudfront.net/photo/aPvXRWG_92x92.jpg" data-entry-url="http://9gag.com/gag/aPvXRWG" data-entry-votes="1" data-entry-comments="0" id="jsid-entry-entity-<?php echo $post_user['code']?>" class="badge-entry-container badge-entry-entity badge-in-view badge-in-view-focus">
                        <header>
                           <h2 class="badge-item-title">
                              <a class="badge-evt badge-track" data-evt="ref-post-from-list,profile-Upload,position-1" data-track="post,v,,,d,<?php echo $post_user['code']?>,l" href="<?php echo base_url();?>post/<?php echo $post_user['code']?>" target="_blank">
                              <?php echo $post_user['title']?>            </a>
                           </h2>
                           <p class="post-meta">
                              <a class="badge-evt point" id="love-count-<?php echo $post_user['code']?>" href="<?php echo base_url();?>post/<?php echo $post_user['code']?>" target="_blank" data-evt="EntryAction,VotePointLinkUnderTitle,ProfilePageUpload">
                              <span class="badge-item-love-count">1</span> points</a> ·
                              <a class="comment badge-evt" href="<?php echo base_url();?>post/<?php echo $post_user['code']?>#comment" target="_blank" data-evt="EntryAction,CommentLinkUnderTitle,ProfilePageUpload">0 comments</a>
                           </p>
                           <div class="badge-entry-sticky-shadow sticky-action">
                              <div class="badge-entry-sticky" style="position: relative; z-index: 1;">
                                 <ul class="badge-item-vote-container vertical-vote up ">
                                    <li><a class="badge-item-vote-up up" href="javascript:void(0);">Upvote</a></li>
                                    <li><a class="badge-item-vote-down down" href="javascript:void(0);">Downvote</a></li>
                                 </ul>
                                 <ul class="others">
                                    <li><a class="comment badge-evt badge-item-comment" target="_blank" href="<?php echo base_url();?>post/<?php echo $post_user['code']?>#comment" data-evt="EntryAction,CommentButtonClicked,ProfilePageUpload">Comment</a></li>
                                 </ul>
                              </div>
                           </div>
                        </header>
                        <div class="badge-post-container post-container">
                           <div class="">
                              <a href="<?php echo base_url();?>post/<?php echo $post_user['code']?>" class="badge-evt badge-track badge-track-no-follow" data-evt="EntryAction,EntryImageRedirect,ProfilePageUpload" data-track="post,c,,,d,aPvXRWG,l" style="min-height:280.4347826087px;" target="_blank">
                              <?php 
                              if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/post/'.$post_user['code'].'/'.$post_user['img']) && is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/post/'.$post_user['code'].'/'.$post_user['img']))
                              {
                              ?>
                              <img class="badge-item-img" src="<?php echo base_url();?>file/uploads/post/<?php echo $post_user['code']?>/<?php echo $post_user['img']?>" alt="<?php echo $post_user['title']?>"/>
                              <?php } else { ?>
                               <img class="badge-item-img" src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $post_user['title']?>"/>
                              <?php } ?>
                              </a>
                           </div>
                        </div>
                        <div class="post-afterbar-a in-list-view">
                           <div class="share">
                              <ul>
                                 <li><a href="javascript:void(0);" class="badge-facebook-share badge-evt badge-track btn-share facebook" data-track="social,fb.s,,,d,<?php echo $post_user['code']?>,l" data-evt="Facebook-Share,ProfileClickedUpload,<?php echo base_url();?>post/<?php echo $post_user['code']?>" data-share="<?php echo base_url();?>post/<?php echo $post_user['code']?>">Facebook</a></li>
                                 <li><a href="javascript:void(0);" class="badge-twitter-share badge-evt badge-track btn-share twitter" data-track="social,t.s,,,d,<?php echo $post_user['code']?>,l" data-evt="Twitter-Share,ProfileClickedUpload,<?php echo base_url();?>post/<?php echo $post_user['code']?>" data-title="<?php echo $post_user['title']?>" data-share="<?php echo base_url();?>post/<?php echo $post_user['code']?>">Twitter</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="others">
                              <a class="badge-more-share-button more" href="javascript:void(0);">More</a>
                           </div>
                           <div class="badge-more-share-menu popup-menu more-share hide">
                              <ul>
                                 <li><a href="javascript:void(0);" class="badge-gplus-share badge-evt badge-track" data-track="social,gp.s,,,d,<?php echo $post_user['code']?>,l" data-evt="GPlus-Share,ProfileClickedUpload,<?php echo base_url();?>post/<?php echo $post_user['code']?>" data-share="<?php echo base_url();?>post/<?php echo $post_user['code']?>">Google+</a></li>
                                 <li><a href="javascript:void(0);" class="badge-pinterest-share badge-evt badge-track" data-track="social,pn.s,,,d,<?php echo $post_user['code']?>,l" data-evt="Pinterest-Share,ProfileClickedUpload,http://9gag.com/gag/aPvXRWG" data-title="<?php echo $post_user['title']?>" data-img="http://d24w6bsrhbeh9d.cloudfront.net/photo/aPvXRWG_700b.jpg" data-share="<?php echo base_url();?>post/<?php echo $post_user['code']?>">Pinterest</a></li>
                                 <li><a href="mailto:?subject=Check%20out%20%22Why%20You%20So%20Serious%22&amp;body=This%20is%20funny%2C%20you%20must%20check%20it%20out%21%20%3AD%0AWhy%20You%20So%20Serious%0Ahttp%3A%2F%2F9gag.com%2Fgag%2FaPvXRWG%3Fref%3D9g.m" class="badge-email-share badge-evt badge-track" data-track="social,9g.m,,,d,<?php echo $post_user['code']?>,l" data-evt="Email-Share,ProfileClickedUpload,http://9gag.com/gag/aPvXRWG" target="_blank">Email</a></li>
                              </ul>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </article>
                     <?php } ?>
