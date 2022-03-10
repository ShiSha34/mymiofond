<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mymio_2021
 */

?>

	<footer id="colophon" class="site-footer" style="background: #343E48">
	    <div class="maxwidth-theme">      
            <div class="row left-footer col-lg-6 col-xs-12" style="align-items: center;">                       
                    <div class="footer-logo col-lg-5 col-xs-12">
                        <div class="footer-wrap">
                            <a href="/">
                                <img src="<? echo get_template_directory_uri()?>/assets/images/logo_white.png" alt=""/>
                            </a> 
                        </div>   
                    </div>
                    <div class="footer-description col-lg-7 col-xs-12">
                       <div class="footer-wrap">
                        <p>Благотворительный фонд помощи детям с миодистрофией Дюшенна и иными тяжелыми нервно-мышечными заболеваниями
                        </p>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="social col-lg-5 col-xs-12">
                        <div class="footer-wrap">
                        <a href="https://www.facebook.com/mymiofond/" target="_blank"><img src="<? echo get_template_directory_uri()?>/assets/images/icons/fb.svg"></a>
                        <a href="https://www.instagram.com/mymiofond/" target="_blank"><img src="<? echo get_template_directory_uri()?>/assets/images/icons/inst.svg"></a>
                        <a href="https://vk.com/mymiofond" target="_blank"><img src="<? echo get_template_directory_uri()?>/assets/images/icons/vk.svg"></a>
                        <a href="https://www.youtube.com/channel/UC1h969MxrGpYW89OQwbTPOw/videos" target="_blank"><img src="<? echo get_template_directory_uri()?>/assets/images/icons/youtube.svg"></a>
                        </div>
                    </div>
                    <div class="footer-contacts col-lg-7 col-xs-12">
                        <div class="footer-phone"><a href="tel:+74957905895"><span>8 495 790 58 95</span></a></div>
                        <div class="footer-email"><a href="mailto:info@mymiofond.ru"><span>info@mymiofond.ru</span></a></div>                   
                    </div> 
            </div>
            <div class="row right-footer col-lg-6 col-xs-12">
                <div class="footer-menu col-lg-5 col-md-offset-1 col-xs-12">
                    <div class="footer-wrap">
                        <div class="item">
                            <a href="<?php echo get_home_url(); ?>/o-fonde">О фонде</a>
                        </div>
                        <div class="item">
                            <a href="<?php echo get_home_url(); ?>/o-fonde/#statutory-documents">Документы и отчетность</a>
                        </div>
                        <div class="item">
                            <a href="<?php echo get_home_url(); ?>/akcii-i-meropriyatiya/">Новости</a>
                        </div>
                        <?/*<div class="item">
                            <a href="/">Друзья и партнеры</a>
                        </div>*/?>
                        <div class="item">
                            <a href="<?php echo get_home_url(); ?>/myi-pomogli">Вы помогли</a>
                        </div>
                    </div>
                </div>
                <div class="footer-help col-lg-4 col-md-offset-2 col-xs-12">
                    <div class="footer-wrap">
                        <a href="<?php echo get_home_url(); ?>/kontakty/#request-form-container"><span class="btn need-help">Нужна помощь?</span></a>
                    </div>
                    <div class="footer-wrap">
                        <a href="<?php echo get_home_url(); ?>/pomoch-sejchas"><span class="btn to-help">Хочу помочь</span></a>
                    </div>
                </div>
            </div>
            <div class="copyright col-xs-12">
                <div class="rights col-lg-6 col-xs-12"> 
                    <div class="footer-wrap">
                        <p>© 2021. Права на изображения и тексты защищены и принадлежат благотворительному фонду «МойМио».<br>Копирование информации без разрешения правообладателя запрещено.</p>
                    </div>
                </div>
                <div class="branches col-lg-5 col-xs-12"> 
                    <div class="footer-wrap">
                        <p>Фонд находится в Москве. Филиалов и представительств в регионах нет. </p>
                    </div>
                </div>
                <a href="http://liizzzer.tilda.ws/" target="_blank"><div class="site-design col-lg-1 col-xs-12">
                    <div class="footer-wrap">Дизайн сайта</div>
                    <div class="footer-wrap"><img src="<? echo get_template_directory_uri()?>/assets/images/site-design.png"></div>
                </div>
                </a>
            </div>
		</div>
		<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(45071099, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <!-- /Yandex.Metrika counter --><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  $(window).on('load', function () {
        $('#page-loading').fadeOut(1500);
  });
</script>
<script>

</script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfojBVghq0sidCQDDn-8D3ITvKF5tZDco&libraries=places&callback=activatePlacesSearch">
</script>
</body>
</html>
