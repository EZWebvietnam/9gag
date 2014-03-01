<script src="<?php echo base_url() ?>plugin/ckeditor/ckeditor.js"></script>
                     <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<div class="badge-page page">
            <div class="main-wrap">
             <section id="list-view-2" class="badge-list-view-element variant-right">
                  <span id="jsid-gat-interval" data-post-interval="-1" class="hide"></span>
                  <span id="jsid-last-update-ts" class="hide"></span>
                  <div class="badge-entry-collection">
                  <form method="post" enctype="multipart/form-data">
                  <p>Tiêu đề:
                  <input id="title" name="title" type="text"/></p>
                  <p>Hình ảnh:
                  <input type="file" name="userfile" id="file"/></p>
                  Nội dung:
                <textarea style="width: 100px; height: 100px;" class="ckeditor" name="editor1" id="editor21"></textarea>

                            <script type="text/javascript">

                                CKEDITOR.replace('editor1');

                            </script>
                            <input type="submit" value="POST" /> 
                 </form>
                                 </div>
                 
               </section>
            
            </div>
             
            <section id="sidebar">
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
                           <input type="hidden" name="auto_expand" value="1">
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
                           <input type="hidden" name="auto_animated" value="0">
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
                           <input type="hidden" name="show_nsfw" value="0">
                           </span>
                        </li>
                     </ul>
                     <div class="btn-container">
                        <a class="btn size-30 blue" href="#" id="jsid-personalise-btn-save">Save</a>
                        <a class="link" href="#" id="jsid-personalise-btn-reset">Reset</a>
                     </div>
                  </section>
                  <input type="hidden" name="customize_reset" value="">
                  <input type="hidden" name="url" value="/u/beobeboi91/posts">
               </form>
               <div id="sidebar-content">
                  <section class="badge-block-ad block-ad">
                     <div class="img-container">
                        <!-- 9gag-list-sidebar1-300x250-atf --> 
                        <div class="s-300" id="div-gpt-ad-1365137578270-1" style="width:300px; height:250px;">
                           <script type="text/javascript"> googletag.cmd.push(function() { googletag.display('div-gpt-ad-1365137578270-1'); }); </script> 
                        <div id="google_ads_iframe_/16921351/9gag-list-sidebar1-300x250-atf_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/16921351/9gag-list-sidebar1-300x250-atf_0" name="google_ads_iframe_/16921351/9gag-list-sidebar1-300x250-atf_0" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" src="javascript:&quot;<html><body style='background:transparent'></body></html>&quot;" __idm_frm__="28" style="border: 0px; vertical-align: bottom;"></iframe></div><iframe id="google_ads_iframe_/16921351/9gag-list-sidebar1-300x250-atf_0__hidden__" name="google_ads_iframe_/16921351/9gag-list-sidebar1-300x250-atf_0__hidden__" width="0" height="0" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" src="javascript:&quot;<html><body style='background:transparent'></body></html>&quot;" __idm_frm__="27" style="border: 0px; vertical-align: bottom; visibility: hidden; display: none;"></iframe></div>
                     </div>
                  </section>
                  <section class="block-feature-cover">
                     <h2 class="sidebar-title">Featured</h2>
                     <ul id="jsid-featured-item-container" data-ads-position="10" data-list-key="profile" <="" ul="">
                     <div class="loading hide">
                        <a class="btn spin" href="#">Loading</a>
                     </div>
                  </ul></section>
                  <div id="jsid-featured-sidebar-tail">
                     <section id="jsid-featured-sidebar-ad" class="badge-block-ad block-ad">
                        <div class="img-container">
                           <!-- 9gag-list-sidebar2-300x250-sticky --> 
                           <div class="s-300" id="div-gpt-ad-1365137578270-2" style="width:300px; height:250px;">
                              <script type="text/javascript"> googletag.cmd.push(function() { googletag.display('div-gpt-ad-1365137578270-2'); }); </script> 
                           <div id="google_ads_iframe_/16921351/9gag-list-sidebar2-300x250-sticky_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/16921351/9gag-list-sidebar2-300x250-sticky_0" name="google_ads_iframe_/16921351/9gag-list-sidebar2-300x250-sticky_0" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" src="javascript:&quot;<html><body style='background:transparent'></body></html>&quot;" __idm_frm__="28" style="border: 0px; vertical-align: bottom;"></iframe></div></div>
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
                     <a href="http://9gag.com/about">About</a> · 
                     <a href="http://9gag.com/faq">FAQ</a> · 
                     <a href="http://9gag.com/privacy">Privacy</a> · 
                     <a href="http://9gag.com/contact">Contact</a>
                  </p>
               </section>
            </section>
            <div id="overlay-container" class="overlay-scroll-container hide">
               <section id="modal-upload" class="modal upload hide">
                  <a class="badge-overlay-close btn-close" href="#">✖</a>
                  <section id="upload-file">
                     <form id="form-modal-post-image" class="modal" action="/submit" enctype="multipart/form-data" method="POST" onsubmit="return GAG.UploadController.validateForm();">
                        <input type="hidden" name="type" value="Photo">
                        <input type="hidden" id="csrftoken" name="csrftoken" value="df2322577ab6a21ecaccc1daeffffdf5">
                        <input id="post_type" type="hidden" name="post_type" value="Photo">
                        <div id="jsid-disable-mask">
                           <h2>Post a fun</h2>
                           <p class="lead">Upload funny pictures, paste pictures or YouTube URL, accepting GIF/JPG/PNG (Max size: 3MB)</p>
                           <div class="field photo">
                              <label style="display:none;">
                              <a id="jsid-upload-url-btn" class="" href="javascript:void(0);">Paste URL</a> / 
                              <a id="jsid-upload-file-btn" class="upload-selected" href="javascript:void(0);">Upload File</a>
                              </label>
                              <input id="jsid-upload-url-input" class="hide" type="url" name="url" placeholder="http://" value="">
                              <div id="jsid-upload-file-input" class="file-field ">
                                 <input class="file text" type="file" name="image" accept="image/gif,image/jpeg,image/jpg,image/png">
                              </div>
                              <p id="jsid-upload-content-error" class="error-message hide"></p>
                           </div>
                           <div class="field title">
                              <label>Title</label>
                              <p id="jsid-char-count" class="count ">120</p>
                              <textarea id="jsid-upload-title" name="title" data-maxlength="120"></textarea>
                              <p id="jsid-upload-title-error" class="error-message hide"></p>
                           </div>
                           <div class="field section-picker">
                              <ul id="jsid-section-list" class="section-list" data-sections-count-max="5">
                              </ul>
                              <p id="jsid-upload-section-error" class="error-message hide"></p>
                           </div>
                           <div class="field checkbox">
                              <label id="jsid-source-checkbox-label"><input type="checkbox" id="jsid-source-checkbox"> Attribute original creator</label>
                              <input id="jsid-source-input" type="text" class="text hide" name="source" value="" placeholder="http://">
                           </div>
                           <div class="btn-container">
                              <input id="jsid-submit-btn" type="submit" value="Upload">
                           </div>
                           <div id="spinner-here" class="disabled-mask"></div>
                        </div>
                     </form>
                  </section>
               </section>
               <section id="modal-report" class="badge-overlay-report modal report hide">
                  <header>
                     <h3>Report Post</h3>
                     <p>What do you report this post for?</p>
                     <a class="btn-close badge-overlay-close" href="#">✖</a>
                  </header>
                  <form id="form-modal-report" class="popup-report" action="" onsubmit="return false;">
                     <div class="field checkbox">
                        <label><input name="radio-report" type="radio" value="1"> Contains a trademark or copyright violation</label>
                     </div>
                     <div class="field checkbox">
                        <label><input name="radio-report" type="radio" value="2"> Spam, blatant advertising, or solicitation</label>
                     </div>
                     <div class="field checkbox">
                        <label><input name="radio-report" type="radio" value="3"> Contains offensive materials/nudity</label>
                     </div>
                     <div class="field checkbox">
                        <label><input name="radio-report" type="radio" value="4"> Repost of another post on 9GAG</label>
                        <input id="jsid-repost-link" type="text" class="text" placeholder="http://9gag.com/gag/post_ID">
                     </div>
                     <div class="btn-container">
                        <input type="submit" value="Submit" class="badge-report-submit-btn" data-text-loading="Please wait ...">
                     </div>
                  </form>
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
         

                    