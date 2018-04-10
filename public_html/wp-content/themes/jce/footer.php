<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="footer">
    <div class="container">
        <nav class="mainNav">
            <?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => '' ) ); ?>
        </nav>
        <div class="footer-social">
            <a target="_blank" href="https://www.facebook.com/Jobcentereu-279158989220894/"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://vk.com/public143703998"><i class="fa fa-vk"></i></a>
        </div>
        <a href="#popup1" class="logo2 fancyboxPopup">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jce/logo2_bw.png" width="55" height="70" alt="jce">
        </a>
    </div>
</footer>

</div>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/all.js"></script>
<style>
.team .col4 {
    min-height: 640px;
}
.partners .cycle-slideshow .slidePartner img {
    vertical-align: middle;
}
section.news article.single .image {
display:block;
margin-right: 15px;
margin-top: 0;
margin-bottom: 30px;

}
.single-team section.news article.single .image {
	float: none;
	display: block;
}
.single-team ul.contacts,
.single-team article ul {
	margin: 10px 0;
	padding-left: 0;
list-style: inside;
    color: #969798;
}
.team .person h3 a,
.teamPersons .person h3 a {text-decoration: none;}
.single-team .job {
font-size: 12px;
    color: #a4a6a9;
    line-height: 18px;
    font-weight: 300;
    text-transform: uppercase;
}
.team .person ul {
    margin: 15px 0;
}
.team .person ul li {
list-style: none;
    display: block;
    font-size: 13px;
    font-weight: 300;
    color: #404449;
    line-height: 24px;
}
section.news article.single .superDate {display: block; margin-bottom: 18px;}
section.news article.single p {margin-bottom: 10px;}
#popup1 {width: 500px; max-width: 100%;}
#popup1 h3 {
margin-bottom: 20px;
}
#popup1 p {
margin-bottom: 10px;
}
header .topBar-contacts .free {
display: none;
}
header .topBar-language .address {float: left;}
.cycle-pager {z-index: 9999;}
</style>
<div style="display: none">
<div id="popup1">
<h3>Ми активно співпрацюємо з Домом Полонії на Поділлі </h3>
<p>Являємось генеральним партнером для них.</p> <p><strong>Дім Полоніі на Поділлі</strong> - це організація яка здійсненює діяльність, та спрямована на всебічний розвиток та популяризацію польської культури та народних традицій. Організація активано сприяє вивченню польської мови, розвитком культури та вивченням історії. Основою метою спілки є популяризація спільної історії українського та польського народу, зміцнення дружби між поляками, українцями та представниками інших націй, громадський та культурний розвиток громадян України польського походження та усіх зацікавлених польською культурою та історією. Надамо інформацію стосовно навчальних закладів у Польщі. </p>
<p><a href="https://vk.com/public135604584" target="_blank">https://vk.com/public135604584</a></p>
<p>Звертайтесь до нас за адресою <strong>м. Хмельницький вул. Подільська 102</strong></p> 
<p>тел <strong>+38(0<span>67)</span>-990-51-53</strong></p>
</div>
</div>


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'NUzjqnqnRu';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<?php wp_footer(); ?>
</body>
</html>
