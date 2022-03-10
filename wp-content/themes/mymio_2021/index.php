<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mymio_2021
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="maxwidth-theme">
		<?/*php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;*/

			/* Start the Loop */
			/*while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				/*get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		*/?>
        </div>
         <script src="<? echo get_template_directory_uri()?>/assets/flexslider/jquery.flexslider-min.js"></script>
          <script>            
            
            jQuery(document).ready(function($) {  
                  
                  jQuery('#slider').flexslider({
                    animation: "slide",
                    animationLoop: true,
                    smoothHeight: true,
                    slideshow: false,
                    touch: true,
                    controlsContainer: $("#controls-progs"),
                    customDirectionNav: $("#nav-progs a"),
                    start: function() {
                        $('#slider li').show();
                    }
                    /*start: function() {
                      $('.flex-next').on('click', function(e){
                        stopVideos();
                      });
                      $('.flex-prev').on('click', function(e){
                        stopVideos();
                      });
                    }*/
                  });
                });

                function stopVideos() {
                  $('video').each(function() {
                  this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*')
                  });
                }
            </script>
            <script type="text/javascript">
                <?/*$(document).ready()
                  $('.flexslider').flexslider({
                    animation: "slide"
                    });
            </script>*/?>
            
                   jQuery(document).ready(function($) {
                      $('#quote-slider').flexslider({
                        animation: "slide",
                        animationLoop: false,
                        smoothHeight: true,
                        slideshow: false,
                        controlsContainer: $("#controls-quote"),
                        customDirectionNav: $("#nav-quote a"),
                        touch: true,
                        slideToStart: 0
                      });
                       
                    });
            </script>
            
            <script type="text/javascript">
                <?/*$(document).ready()
                  $('.flexslider').flexslider({
                    animation: "slide"
                    });
            </script>*/?>
            
                   jQuery(document).ready(function($) {
                      $('#progs').flexslider({
                        animation: "slide",
                        animationLoop: false,
                        slideshow: false,
                        controlsContainer: $(".main-prog-controls"),
                        customDirectionNav: $(".main-prog a"),
                        touch: true,
                        move: 1,
                        itemWidth: 320,
                        itemMargin: 25,
                        minItems: 1,
                        maxItems: 3
                      });
                    });
            </script>
            <script type="text/javascript">
                <?/*$(document).ready()
                  $('.flexslider').flexslider({
                    animation: "slide"
                    });
            </script>*/?>
            
                   jQuery(document).ready(function($) {
                      $('#help').flexslider({
                        animation: "slide",
                        animationLoop: false,
                        slideshow: false,
                        controlsContainer: $(".main-help-controls"),
                        customDirectionNav: $(".main-help a"),
                        touch: true,
                        move: 1,
                        itemWidth: 320,
                        itemMargin: 25,
                        minItems: 1,
                        maxItems: 2,
                        start: function() {
                      $('.item').matchHeight();
                      $('.sub-item').matchHeight();
                    }
                      });
                    });
                        
                
            </script>
            <script>
            jQuery(document).ready(function($) {
                
            $('.slides li video').on({
                mouseenter: function () {
                  jQuery('.slides video').attr('controls',"controls")
                },
                mouseleave: function () {
                  jQuery('.slides video').removeAttr('controls');
                }
            });
                });
                </script>
            <section id="main-banner">
            <div class="maxwidth-theme">
                <div id="slider" class="flexslider">
                  <ul class="slides">
                  
                    <li id="fourth_slide"><div class="col-sm-12 col-md-6 slide-desc">
                        <span><b>Борис Гребенщиков дарит новый альбом «Дань» редким мальчикам с миодистрофией Дюшенна</b>
                        <a href="<? echo get_home_url()?>/album"><span id="banner_button" class="btn to-help">Скачать альбом</span></a></span>
                        </div>
                        <div class="col-sm-12 col-md-6" style="padding: 0;">
                            <div class="banner-img-wrapper">
                                    <div class="first-image">
                                        <img src="<? echo get_template_directory_uri()?>/assets/images/album_bg.tif" alt="">
                                    </div>
                                    <div class="second-image">
                                        <img src="<? echo get_template_directory_uri()?>/assets/images/track_list.jpg" alt="">
                                    </div>
                                </div>
                        </div>
                    </li>
                    <li id="first_slide">
                    <img src="<? echo get_template_directory_uri()?>/assets/images/slider/main_slider_1.png" alt="">
                    <div class="col-xs-6 col-md-6 slide-desc">
                        <span>Первый фонд в России, который специализируется на <b>помощи детям с миодистрофией Дюшенна</b></span>
                        <a href="<? echo get_home_url()?>/o-fonde"><span id="banner_button" class="btn to-help">Подробнее</span></a>
                    </div>
                    </li>
                    <li id="second_slide"><img src="<? echo get_template_directory_uri()?>/assets/images/slider/main_slider_2.png" alt="">
                       <div class="col-xs-9 col-sm-7 slide-desc">
                        <span><b>Мечтаем о рыцарских подвигах – ваших и наших</b></span>
                        <a href="<? echo get_home_url()?>/pomoch-sejchas/"><span id="banner_button" class="btn help-now">Помочь сейчас</span></a></div>
                        </li>
                    <li id="third_slide"><div><div class="col-sm-12 col-md-6 slide-desc">
                       
                        <span><b>Рассказываем о редких мальчиках с Ксенией Раппопорт и подопечными фонда</b></span>
                        </div>
                        <div class="col-sm-12 col-md-6" style="padding: 0;">
                            <video name="media" style="width: 100%; height: auto; max-height: 100%; border-radius: 10px;" poster="<? echo get_template_directory_uri()?>/assets/images/main_preview.png"><source src="<? echo get_home_url()?>/wp-content/themes/mymio_2021/assets/videos/we-will-walk-into-the-light.mp4" type="video/mp4"></video>
                        </div>
                        </div>
                    </li>
                    

                  </ul>
                </div>
                <div class="custom-navigation" id="nav-progs">
                  
                  <div class="custom-controls-container" id="controls-progs"></div>
                </div>
    
            </div>
            </section>
            <section id="why-mio">
                <div class="maxwidth-theme">
                    <div class="heading-article">
                       <h1 style="max-width: 662px;">Почему Миодистрофия Дюшенна</h1>
                </div>
                <div class="items row">
                   <div class="col-sm-12 visible-xs visible-sm">
                       <div class="right-mio">
                           <div>
                              <span>Миодистрофия Дюшенна – это редкая генетическая болезнь мальчиков, которая постепенно разрушает мышцы</span>
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/1st_period.svg" alt="">
                               <span>В 2-10 лет болезнь становится заметной. Мальчик начинает спотыкаться и часто падает – слабеют мышцы ног</span>
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/2nd_period.svg" alt="">
                            <span>В 11-12 лет ребенок перестает ходить</span>
                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/3rd_period.svg" alt="">
                               <span>В подростковом возрасте у парней начинаются проблемы с мышцами дыхания, развивается сколиоз и деформируется грудная клетка. Затем возникают проблемы с главной мышцей – сердцем</span>
                           </div>
                        </div>
                   </div>
                    <div class="col-lg-6 visible-md visible-lg">
                        <div class="left-mio">
                            <span>Миодистрофия Дюшенна – это редкая генетическая болезнь мальчиков, которая постепенно разрушает мышцы</span>
                            <div id="third-period">
                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/2nd_period.svg" alt="">
                            <span>В 11-12 лет ребенок перестает ходить</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 visible-md visible-lg">
                       <div class="right-mio">
                           <div id="first-period">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/1st_period.svg" alt="">
                               <span>В 2-10 лет болезнь становится заметной. Мальчик начинает спотыкаться и часто падает – слабеют мышцы ног</span>
                           </div>
                           <div id="second-period">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/3rd_period.svg" alt="">
                               <span>В подростковом возрасте у парней начинаются проблемы с мышцами дыхания, развивается сколиоз и деформируется грудная клетка. Затем возникают проблемы с главной мышцей – сердцем</span>
                           </div>
                       </div>
                    </div>
                    <div class="bottom-mio">
                        <div class="flex-wrapper-row">
                            <div class="pull-left">
                                <span>2600</span>
                                <span>редких мальчиков</span>
                                <span>с миодистрофией Дюшенна может быть в России, если полагаться на мировую статистику</span>
                            </div>
                            <span>Всем этим ребятам нужна своевременная диагностика, помощь и лечение
</span>
                            <div class="pull-right">
                                <span>> 700</span>
                                <span>редких мальчиков</span>
                                <span>с миодистрофией Дюшенна  из разных уголков России нашел фонд за 6 лет работы</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <section class="proggrams">
                <div class="maxwidth-theme">
                <div class="heading-article">
                  
                   <h1 class="without-p"><a href="<?php echo get_home_url(); ?>/programmy/">Как мы помогаем</a></h1>
                <div class="flexslider" id="progs" style="direction:ltr;">
                  <ul class="slides" id="proggrams-description">
                   <li>
                      <div class="image">
                                   <a href="<?php echo get_home_url(); ?>/programmy/obrazovatelnaya-programma/"></a>
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya.png" alt="Брошюра с ответами на вопросы про редкое заболевание">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                
                                                <div class="item-name">
                                                    <span>>300 врачей узнали об особенностях редкой болезни</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="<?php echo get_home_url(); ?>/programmy/obrazovatelnaya-programma/">подробнее</a>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <li>
                      <div class="image">
                                   <a href="<?php echo get_home_url(); ?>/programmy/klinika-mdd/"></a>
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/meditsinskaya.png" alt="Мама с сыном на приеме у специалиста">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                
                                                <div class="item-name">
                                                    <span>131 подопечный прошел комплексное обследование</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="<?php echo get_home_url(); ?>/programmy/klinika-mdd/">подробнее</a>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <li>
                      <div class="image">
                                   <a href="<?php echo get_home_url(); ?>/programmy/my-vmeste/"></a>
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste.png" alt="Радостный мальчик в интеграционном лагере">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                
                                                <div class="item-name">
                                                    <span>191 семья посетила лагерь и отдохнула от борьбы с болезнью</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="<?php echo get_home_url(); ?>/programmy/my-vmeste/">подробнее</a>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <li>
                      <div class="image">
                                   <a href="<?php echo get_home_url(); ?>/programmy/naczionalnyj-registr/"></a>
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/nac-registr.png" alt="Схематично обозначенные мальчики с миодистрофией Дюшенна на карте России">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                
                                                <div class="item-name">
                                                    <span>Создаем единый регистр с информацией о каждом подопечном</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="<?php echo get_home_url(); ?>/programmy/naczionalnyj-registr/">подробнее</a>
                                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                    </li>
                    
                    <li class="hide">
                      <div class="image">
                                   <a href="<?php echo get_home_url(); ?>/programmy/srochnaya-pomoshh/"></a>
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/srochnaya-pomosch.png" alt="Папа держит ребенка за руку">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                
                                                <div class="item-name">
                                                    <span>Организуем и оказываем срочную медицинскую помощь</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="<?php echo get_home_url(); ?>/programmy/srochnaya-pomoshh/">подробнее</a>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                    </li>
                    
                    <li>
                      <div class="image">
                                   <a href="<?php echo get_home_url(); ?>/programmy/adresnaya-pomoshh/"></a>
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch.png" alt="Семья с набором первой помощи после комплексного обследования">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                
                                                <div class="item-name">
                                                    <span>Обеспечиваем подопечных жизненно-необходимым оборудованием</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="<?php echo get_home_url(); ?>/programmy/adresnaya-pomoshh/">подробнее</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                  
                </div>
                <div class="custom-navigation main-prog" id="nav-progs">
                  
                  <div class="custom-controls-container main-prog-controls" id="controls-progs"></div>
                </div>
                    </div></div>
            </section>
            <div class="maxwidth-theme" style="background: #E0FBFA; margin-top: 60px; margin-bottom: 20px;">
                <div class="pre-head-block">
                   <div class="col-xs-10 col-lg-10">
                    <span>Когда болезнь добирается до мышц дыхания – мальчикам требуется жизненно-необходимое оборудование. Не в критичных ситуациях фонд помогает семье добиваться положенного жизненно-важного оборудования и медицинской помощи в рамках государственной поддержки. В экстренных случаях, когда нельзя ждать – мы открываем срочные сборы и обращаемся к друзьям и жертвователям</span>
                    </div>
                </div>
            </div>
            <script src="<? echo get_template_directory_uri()?>/assets/js/jquery.matchHeight.js"></script>
            <script>
                jQuery(document).ready(function($) {
                    $('.item').matchHeight();
                });
            </script>
            <script>
                jQuery(document).ready(function($) {
                    $('.sub-item').matchHeight();
                });
            </script>
            <span id="srochniy-sbor"></span>
            <section class="need-ur-help" id="need-ur-help">
              <div class="maxwidth-theme">
               <div class="heading-article">
                       <h1 style="margin-bottom: 0;">Срочно требуется помощь</h1>
                </div>
                   <div id="help" class="flexslider" style="direction:ltr;">
                     <ul class="slides">
                     <li>
                       <div><a href="<?php echo get_home_url(); ?>/zhenya-kazakevich-2/"></a>
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/zhenya-kazakevich-2.png" alt="">
                       <div class="img-label item">
                                   <?php $campaign = new Leyka_Campaign(40714);?>
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Женя Казакевич</span>
                                                <span>29 лет</span>
                                        </div>
                                    </div>
                                    <span class="sub-item">Женя Казакевич вновь сражается с миодистрофией Дюшенна. Он не сдался ни разу, он держится и не отступает, но болезнь находит всё новые и новые способы атаки.<br>
Жене необходима оплата длительного лечения с применением медикаментов,  расходных материалов, лабораторных исследований и регулярной поддержки медицинского персонала, оплата двухместной палаты, реанимации, постоянного мониторинга (обследования+КТ), энтерального питание и прочее.</span>
                                    <div class="progress-bar">
                                        <?php $percent = $campaign->target ? round(100.0 * $campaign->total_funded / $campaign->target, 1) : 0;
            $percent = $percent > 100.0 ? 100.0 : $percent;?>
                                        <span style="width: <?php echo $percent; ?>%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                            <div class="left-amount">
                                               <span><?php echo leyka_amount_format($campaign->total_funded);?></span>
                                                <span>собрано</span>
                                            </div>
                                            <div class="right-amount">
                                               <span><?php 
                                                    $left_sum = $campaign->target - $campaign->total_funded;
                                                    echo leyka_amount_format($campaign->target - $campaign->total_funded);?></span>
                                                <span>осталось</span>
                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <a href="<?php echo get_home_url(); ?>/zhenya-kazakevich-2/"><span class="btn to-help now">Помочь сейчас</span></a>
                            </div>
                       </div>
                       </li>

                       <li>
                       <div><a href="<?php echo get_home_url(); ?>/grisha-hramczov/"></a>
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/grisha_hramtsov.png" alt="">
                       <div class="img-label item">
                                   <?php $campaign = new Leyka_Campaign(41266);?>
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Гриша Храмцов</span>
                                                <span>11 лет</span>
                                        </div>
                                    </div>
                                    <span class="sub-item">Гриша активный и любознательный парень, учится в школе, его любимый урок адаптивная физическая культура. Из-за болезни Грише важно регулярно разрабатывать руки и ноги. Мы открываем сбор на тренажер активно-пассивного типа, который поможет Грише поддерживать физическую активность в любое время.</span>
                                    <div class="progress-bar">
                                        <?php $percent = $campaign->target ? round(100.0 * $campaign->total_funded / $campaign->target, 1) : 0;
            $percent = $percent > 100.0 ? 100.0 : $percent;?>
                                        <span style="width: <?php echo $percent; ?>%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                            <div class="left-amount">
                                               <span><?php echo leyka_amount_format($campaign->total_funded);?></span>
                                                <span>Собрана вся сумма. Спасибо!</span>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <a><span class="btn to-help now disable">Помочь сейчас</span></a>
                            </div>
                       </div>
                       </li>

                       <li>
                       <div><a href="<?php echo get_home_url(); ?>/daniil-vassaliev/"></a>
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/d_vassaliev.png" alt="">
                       <div class="img-label item">
                                   <?php $campaign = new Leyka_Campaign(30767);?>
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Даниил Вассалиев</span>
                                                <span>13 лет</span>
                                        </div>
                                    </div>
                                    <span class="sub-item">Все было хорошо, пока Даня не простудился. Оказалось, мышц, чтобы кашлять уже недостаточно. Близкие об этом не знали. Не знали и врачи. Сейчас Даня в реанимации и дышать ему помогает трубка в горле. Чтобы Даня вернулся к учебе, увлечениям и семье в Нижний Новгород поедет врач, аппарат НИВЛ и интрапульмональный перкуссионный вентилятор.</span>
                                    <div class="progress-bar">
                                        <?php $percent = $campaign->target ? round(100.0 * $campaign->total_funded / $campaign->target, 1) : 0;
            $percent = $percent > 100.0 ? 100.0 : $percent;?>
                                        <span style="width: <?php echo $percent; ?>%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                            <div class="left-amount">
                                               <span><?php echo leyka_amount_format($campaign->total_funded);?></span>
                                                <span>Собрана вся сумма. Спасибо!</span>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <a><span class="btn to-help now disable">Помочь сейчас</span></a>
                            </div>
                       </div>
                       </li>
                       <li>
                       <div><a href="<?php echo get_home_url(); ?>/kirill-shushkin/"></a>
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/kirill-shushkin.png" alt="">
                       <div class="img-label item">
                                   <?php $campaign = new Leyka_Campaign(40354);?>
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Кирилл Шушкин</span>
                                                <span>24 года</span>
                                        </div>
                                    </div>
                                    <span class="sub-item">Гастроэнтеролог дистанционно проконсультировала парня и назначила специализированное лечебное питание, которое облегчает усвоение всех нужных питательных веществ у пациентов с резко пониженной способностью всасывания. Кирилл попробовал так питаться целый месяц и стал вновь набирать в весе. Стоимость запаса лечебного питания на год – 60 000 рублей.</span>
                                    <div class="progress-bar">
                                        <?php $percent = $campaign->target ? round(100.0 * $campaign->total_funded / $campaign->target, 1) : 0;
            $percent = $percent > 100.0 ? 100.0 : $percent;?>
                                        <span style="width: <?php echo $percent; ?>%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                        <div class="left-amount">
                                               <span>60 000</span>
                                                <span>Собрана вся сумма. Спасибо!</span>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <a href="<?php echo get_home_url(); ?>/kirill-shushkin/"><span class="btn to-help now disable">Помочь сейчас</span></a>
                            </div>
                       </div>
                       </li>
                       
                       <li>
                       <div><a href="<?php echo get_home_url(); ?>/batyr-hajydov/"></a>
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/batyr-hyjydov.png" alt="">
                       <div class="img-label item">
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Батыр Хайыдов</span>
                                                <span>19 лет</span>
                                        </div>
                                    </div>
                                    <span class="sub-item">Звонок на телефон фонда, голос взволнованный: «Я сестра Батыра, мне позвонила мама — Батыр хватает воздух как рыбка, ему тяжело, мы боимся!». Доктор провел в Самаре несколько дней, сейчас сатурация уверенно на аппаратах держится 97, подопечный бодр, стал есть — и говорит, что хочет лечиться. Предпринятые меры помогут временно, юноше необходима медицинская помощь, обследования, динамическое наблюдение.</span>
                                    <div class="progress-bar">
                                        <span style="width: 100%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                            <div class="left-amount">
                                               <span>118 200</span>
                                                <span>Собрана вся сумма. Спасибо!</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <a><span class="btn to-help now disable">Помочь сейчас</span></a>
                            </div>
                       </div>
                       </li>
                       </ul>
                    </div>
                    <div class="custom-navigation main-help" id="nav-progs">
                  
                  <div class="custom-controls-container main-help-controls" id="controls-progs"></div>
                </div>
            </div>
              
          </section>
           <section class="need-ur-help visible-xs visible-sm" style="display:none !important;">
              <div class="maxwidth-theme">
               <div class="heading-article">
                       <h1 style="margin-bottom: 0;">Срочно требуется помощь</h1>
                </div>
                   <div class="items row">
                       <div class="col-sm-6 col-lg-6"><a href="/">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/zhenya_kazakevich.png" alt=""></a>
                           <div class="img-label item">
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Женя Казакевич</span>
                                                <span>28 лет</span>
                                        </div>
                                    </div>
                                    <span class="sub-item">Женя – настоящий победитель. В августе ему исполнилось 28 лет. Он не раз побеждал болезнь: миодистрофия Дюшенна как будто пугалась достижений парня и переставала на время прогрессировать. Сейчас Жене и его маме как никогда требуется ваша поддержка. Женя попал в реанимацию в родном городе Азов.</span>
                                    <div class="progress-bar">
                                        <span style="width: 51.40793481473865%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                            <div class="left-amount">
                                               <span>520 000</span>
                                                <span>собрано</span>
                                            </div>
                                            <div class="right-amount">
                                               <span>491 517</span>
                                                <span>осталось</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=""><span class="btn to-help now">Помочь сейчас</span></a>
                            </div>
                       </div>
                       <div class="col-sm-6 col-lg-6"><a href="/">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/batyr-hyjydov.png" alt=""></a>
                       <div class="img-label item">
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Батыр Хайыдов</span>
                                                <span>19 лет</span>
                                        </div>
                                    </div>
                                    <span class="sub-item">Звонок на телефон фонда, голос взволнованный: «Я сестра Батыра, мне позвонила мама — Батыр хватает воздух как рыбка, ему тяжело, мы боимся!». Доктор провел в Самаре несколько дней, сейчас сатурация уверенно на аппаратах держится 97, подопечный бодр, стал есть — и говорит, что хочет лечиться. Предпринятые меры помогут временно, юноше необходима медицинская помощь, обследования, динамическое наблюдение.</span>
                                    <div class="progress-bar">
                                        <span style="width: 100%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                            <div class="left-amount">
                                               <span>118 200</span>
                                                <span>собрана вся сумма</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <a href="<?php echo get_home_url(); ?>/batyr-hajydov/"><span class="btn to-help now disable">Помочь сейчас</span></a>
                            </div>
                       </div>
                       <div class="col-sm-6 col-lg-6"><a href="/">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/d_vassaliev.png" alt=""></a>
                           <div class="img-label item">
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Даниил Вассалиев</span>
                                                <span>13 лет</span>
                                        </div>
                                    </div>
                                    <span class="sub-item">Все было хорошо, пока Даня не простудился. Оказалось, мышц, чтобы кашлять уже недостаточно. Близкие об этом не знали. Не знали и врачи. Сейчас Даня в реанимации и дышать ему помогает трубка в горле. Чтобы Даня вернулся к учебе, увлечениям и семье в Нижний Новгород поедет врач, аппарат НИВЛ и аппарат перкуссии.</span>
                                    <div class="progress-bar">
                                        <span style="width: 17.16617591359488%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                            <div class="left-amount">
                                               <span>70 250</span>
                                                <span>собрано</span>
                                            </div>
                                            <div class="right-amount">
                                               <span>409 235</span>
                                                <span>осталось</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <a href="<?php echo get_home_url(); ?>/daniil-vassaliev/"><span class="btn to-help now">Помочь сейчас</span></a>
                            </div>
                       </div>
                    </div>
            </div>
              
          </section>
            <section id="quote" class="main-page">
            <div class="maxwidth-theme">
               <div class="heading-article">
                       <h1 class="without-p">Фонд МойМио поддерживают</h1>
                   </div>
                <div class="wrap">
                   <div class="quote-block col-xs-8 col-lg-8">
                    <div class="flexslider" id="quote-slider" style="direction:ltr;">
                              <ul class="slides main-page">
                                <li>
                                  <div class="quote col-xs-12 col-lg-8">
                                      <span>«Я целиком и полностью доверяю людям, которые организовали фонд «МойМио» и занимаются такой сложной работой – помогают детям с тяжелой болезнью.
                                          Самое главное, что я уяснил – без денег с этой бедой вообще ничего не сделаешь.
                                          Здесь я могу пригодиться: играть концерты в пользу ребят и привлекать к этой теме людей, которые мне доверяют.
                                          Альбом «Дань», который писался дольше всего в жизни группы, мы решили отдать фонду «МойМио», чтобы деньги собранные от его продажи пошли ни нам, ни авторам, а редким мальчикам, которые в них нуждаются»<br>
                                          <br><a href="<? echo get_home_url()?>/album" style="color: #009D9A;">Скачать альбом</a></span>
                                    </div>
                                    <div class="author-block col-xs-12 col-lg-4">
                                       <div class="author-img">
                                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/b_grebenschikov.png" alt="">
                                       </div>
                                        <div class="author">
                                            <span>Борис Гребенщиков</span>
                                        </div>
                                        <div class="author-post">
                                            <span>поэт, музыкант, композитор, певец, гитарист рок-группы «Аквариум», попечитель</span>
                                        </div>
                                    </div>
                                
                                </li>
                                <li>
                                  <div class="quote col-xs-12 col-lg-8">
                                      <span>«Миодистрофия Дюшенна – сложное и опасное заболевание. Государство не знает точно, сколько мальчишек с миодистрофией Дюшенна в нашей стране. Если государство не знает, сколько таких ребят, оно не умеет или не хочет им помочь. Мы объединились, чтобы искать ребят и помогать им. Команда фонда работает, чтобы этот диагноз перестал быть приговором для ребенка и семьи, чтобы необходимая помощь была доступна и на государственном уровне»</span>
                                    </div>
                                    <div class="author-block col-xs-12 col-lg-4">
                                       <div class="author-img">
                                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/i_yasina.png" alt="">
                                       </div>
                                        <div class="author">
                                            <span>Ирина Ясина</span>
                                        </div>
                                        <div class="author-post">
                                            <span>публицист, журналист, правозащитник, попечитель фонда</span>
                                        </div>
                                    </div>
                                
                                </li>
                                <li>
                                  <div class="quote col-xs-12 col-lg-8">
                                      <span>«Для того, чтобы ребятам с такой болезнью жилось полегче, чтобы они могли ездить в лагерь, ходить в школы, радоваться жизни, получать необходимые лекарства создан фонд «МойМио». Чтобы у людей вокруг и внутри болезни появилась элементарная информация о том, что это и как с этим живут»</span>
                                    </div>
                                    <div class="author-block col-xs-12 col-lg-4">
                                       <div class="author-img">
                                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/e_gordeeva.png" alt="">
                                       </div>
                                        <div class="author">
                                            <span>Катерина Гордеева</span>
                                        </div>
                                        <div class="author-post">
                                            <span>журналист, автор документальных фильмов, попечитель фонда</span>
                                        </div>
                                    </div>
                                
                                </li>
                                <li>
                                  <div class="quote col-xs-12 col-lg-8">
                                      <span>«Фонд делает то, что недоступно на государственном уровне. Мы можем это поддержать и маленькими шагами менять будущее этих храбрых парней!»</span>
                                    </div>
                                    <div class="author-block col-xs-12 col-lg-4">
                                       <div class="author-img">
                                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/k_rappoport.png" alt="">
                                       </div>
                                        <div class="author">
                                            <span>Ксения Раппопорт</span>
                                        </div>
                                        <div class="author-post">
                                            <span>актриса театра и кино, попечитель фонда</span>
                                        </div>
                                    </div>
                                
                                </li>
                                <li>
                                  <div class="quote col-xs-12 col-lg-8">
                                      <span>«Помогать детям – это хорошо»</span>
                                    </div>
                                    <div class="author-block col-xs-12 col-lg-4">
                                       <div class="author-img">
                                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/d_korobov.png" alt="">
                                       </div>
                                        <div class="author">
                                            <span>Дмитрий Коробов</span>
                                        </div>
                                        <div class="author-post">
                                            <span>попечитель фонда</span>
                                        </div>
                                    </div>
                                
                                </li>
                                <!-- items mirrored twice, total of 12 -->
                              </ul>
                              <?/*<ul class="custom-navigation">
                              <li><a href="#" class="flex-prev">Prev</a></li>
                              <li><a href="#" class="flex-next">Next</a></li>
                            </ul>*/?>
                    </div>
                    <div class="custom-navigation" id="nav-quote">
                        <div class="custom-controls-container" id="controls-quote"></div>
                    </div>
                    <div class="quotes-up">
                    </div>
                    <div class="quotes-down">
                    </div>
                </div>
                </div>
                <div class="wrap">
                    <div class="partners">
                        <div class="col-xs-12 col-sm-4">
                            <a href="https://www.kaspersky.ru/" target="_blank"><img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/kaspersky.png" alt="Kaspersky"></a>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="https://thgm.ru" target="_blank"><img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/goodman.png" alt="Гудмэн"></a>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="https://skillbox.ru/" target="_blank"><img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/skillbox.png" alt="Skillbox"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          
           <section id="trust">
               <div class="maxwidth-theme">
                   <div class="heading-article">
                       <h1 class="without-p">Почему еще нам доверяют</h1>
                   </div>
                   <div class="items row trust">
                       <div class="col-xs-12 col-sm-4">
                          <a href="<?php echo get_home_url(); ?>/o-fonde/#reports"></a>
                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/1.svg">
                           <span>Мы за прозрачную, надежную и профессиональную благотворительность – публикуем <a href="<?php echo get_home_url(); ?>/o-fonde/#reports">годовые</a> отчеты о нашей деятельности фонда и регулярно отчитываемся о том, что удалось сделать с вашей поддержкой.</span>
                       </div>
                       <div class="col-xs-12 col-sm-4">
                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/2.svg">
                           <span>Мы сотрудничаем с бизнесом и благодарны каждому партнеру за доверие к нашей деятельности и неравнодушие к редким мальчикам с миодистрофией Дюшенна.</span>
                       </div>
                       <div class="col-xs-12 col-sm-4">
                          <a href="https://takiedela.ru/2015/04/vremya-zhizni/" target="_blank"></a>
                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/3.svg">
                           <span><p>О нас пишут в СМИ. «Диагностика миодистрофии Дюшенна в регионах обыкновенно поздняя, а это значит, что чаще всего потеряно время, — гораздо более ценное для этих людей, чем для нас с вами. Чаще всего отсутствует в регионах и понимание стандарта ежедневного ухода за больным, и реабилитация…»</p>Виктор Шендерович, <a href="https://takiedela.ru/2015/04/vremya-zhizni/" target="_blank">материал на Таких Делах</a></span>
                       </div>
                   </div>
               </div>
           </section>
            <div class="subscribe-form-block" id="subscribe-section">
            <div class="maxwidth-theme">
              <div class="items row subscribe">
                  <div class="block-box">
               <div class="text-block">
                  <img src="<? echo get_template_directory_uri()?>/assets/images/icons/paper-plane.svg">
                  <div class="wrapper">
                   <span>Вступайте в орден хранителей МойМио!</span>
                   <span>Отправляем письмо раз в две недели с самыми важными новостями о редких мальчиках с миодистрофией Дюшенна</span>
                   </div>
               </div>
               </div>
               <div class="wrapper">
                <form method="POST" action="https://cp.unisender.com/ru/subscribe?hash=64ehc9br4hpsbuwicmd8ewszew3psyohq95xwgaxooft561thsz7o" name="subscribtion_form">
                        <div class="subscribe-form-item subscribe-form-item--input-email input-subscribe">
                            <input class="subscribe-email-mio" type="text" name="email" value="" placeholder="Ваша электронная почта">
                            <input class="subscribe-submit-mio" type="submit" value="Хочу">
                        </div>
                        <input type="hidden" name="charset" value="UTF-8">
                        <input type="hidden" name="default_list_id" value="20668111">
                        <input type="hidden" name="overwrite" value="2">
                        <input type="hidden" name="is_v5" value="1">
                </form>
                </div>
            </div>
            </div>
            </div>
        
        
            
	</main><!-- #main -->

<?php
get_footer();
