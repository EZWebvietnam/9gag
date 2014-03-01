
<header id="top-nav" class="badge-sticky-nav">
            <div class="nav-wrap">
    <h1><a href="http://9gag.com">9GAG</a></h1>

    
<div class="headbar-items">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#parent").hover(function(){
         $(this).parent().find('#sub').stop(true,true).show();
           $(this).find('#sub_li').stop(true,true).show(50);
    }, function(){
    $(this).parent().find('#sub').stop(true,true).hide(50);
           $(this).find('#sub_li').stop(true,true).hide(50);
    });
    $("#parent2").hover(function(){
         $(this).parent().find('#sub_2').stop(true,true).show();
           $(this).find('#sub_li_2').stop(true,true).show(50);
    }, function(){
    $(this).parent().find('#sub_2').stop(true,true).hide(50);
           $(this).find('#sub_li_2').stop(true,true).hide(50);
    });
});
</script>
    <ul id="menuBar">
           <li class="selected"><a href="/">Trang chủ</a></li>
            <li  id="parent2" style="cursor:pointer;">
                <span><a href="/hot">Kênh</a></span>
                <ul id="sub_2">
                    <li id="sub_li_2"><a href="/builder/rage">Chế rage comic</a></li>    
                    <li id="sub_li_2"><a href="/builder/memes">Chế meme</a></li>
                     <li id="sub_li_2"><a href="/builder/memes">Chế memeChế memeChế meme</a></li>        
                </ul>
            </li>
            <li><a href="<?php echo base_url();?>new">Bài mới</a></li>
            <li><a href="/vote">Bình chọn</a></li>
			<li><a target="_blank" href="<?php echo base_url();?>hot">Bài hot</a></li>
		    
            
            <li id="parent" style="cursor:pointer;">
                <span><a href="#">Viết bài</a></span>
                <ul id="sub">
                    <li id="sub_li"><a href="<?php echo base_url();?>thanh-vien/post">Đăng bài</a></li>    
                    <li id="sub_li"><a href="<?php echo base_url();?>thanh-vien/img">Đăng ảnh</a></li>
                            
                </ul>
            </li>
        </ul>
</div>
<?php 
if(!$this->tank_auth->is_logged_in())
{
?>
<div class="visitor-function">
        <a class="badge-login-button link" href="https://9gag.com/login">Log in</a>
        <a class="badge-signup-button link" href="https://9gag.com/signup">Sign up</a>        
        
    </div>  
 <?php } else {?>
 <div class="user-function">
                

        
        <div id="jsid-header-user-menu" class="avatar">
            <a class="avatar-container" href="<?php echo base_url();?>thanh-vien">
                <img src="<?php echo $this->session->userdata('img');?>" alt="Avatar">
                <span class="name">Me</span>
            </a>
        </div>

                
    </div>
 <?php  } ?>   
       
   
    

    <form id="headbar-search" class="badge-header-search" action="http://9gag.com/search">
    <input type="text" name="query" id="jsid-search-input" class="ui-autocomplete-input search search_input" data-placeholder="Search…" tabindex="1" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>

    <div class="ui-widget"></div>
<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul></form>
    <div class="clearfix"></div>
</div>
         </header>