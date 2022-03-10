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
            
            jQuery(window).load(function() {  
                  
                  jQuery('#slider').flexslider({
                    animation: "slide",
                    animationLoop: false,
                    smoothHeight: true,
                    slideshow: false,
                    touch: true,
                    controlsContainer: $("#controls-progs"),
                    customDirectionNav: $("#nav-progs a"),
                    start: function() {
                      $('.flex-next').on('click', function(e){
                        stopVideos();
                      });
                      $('.flex-prev').on('click', function(e){
                        stopVideos();
                      });
                    }
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
                        itemWidth: 320,
                        itemMargin: 25,
                        minItems: 1,
                        maxItems: 3
                      });
                    });
            </script>
            <section id="main-banner">
            <div class="maxwidth-theme">
                <div id="slider" class="flexslider">
                  <ul class="slides">
                    
                    <li>
                    <img src="<? echo get_template_directory_uri()?>/assets/images/slider/main_slider_1.png" alt="">
                    <div class="col-xs-6 col-md-6 slide-desc">
                        <span>Первый фонд в России, который специализируется на <b>помощи детям с миодистрофией Дюшенна</b></span>
                        <a href="<? echo get_home_url()?>/o-fonde"><span id="banner_button" class="btn to-help">подробнее</span></a>
                    </div>
                    </li>
                    <li><img src="<? echo get_template_directory_uri()?>/assets/images/slider/main_slider_2.png" alt="">
                       <div class="col-xs-5 col-md-5 slide-desc">
                        <span>Мечтаем о рыцарских подвигах – ваших и наших</span></div>
                        </li>
                    <li>
                      <video controls="" name="media" style="width: 100%; height: auto; max-height: 100%;" poster="<? echo get_template_directory_uri()?>/assets/images/video_preview.png"><source src="<? echo get_home_url()?>/wp-content/themes/mymio_2021/assets/videos/we-will-walk-into-the-light.mp4" type="video/mp4"></video>
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
                              <span>Миодистрофия Дюшенна – редкая генетическая болезнь мальчиков, которая постепенно разрушает мышцы</span>
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/1st_period.svg" alt="">
                               <span>2-10 лет. Болезнь становится заметной. Сначала слабеют мышцы ног: мальчик часто спотыкается и падает</span>
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/2nd_period.svg" alt="">
                            <span>11-12 лет. Ребенок перестает ходить.</span>
                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/3rd_period.svg" alt="">
                               <span>Подростковый возраст. Начинаются проблемы с мышцами дыхательной системы. Затем проблемы с главной мышцей – сердцем. Развивается сколиоз и деформируется грудная клетка</span>
                           </div>
                        </div>
                   </div>
                    <div class="col-lg-6 visible-md visible-lg">
                        <div class="left-mio">
                            <span>Миодистрофия Дюшенна – редкая генетическая болезнь мальчиков, которая постепенно разрушает мышцы</span>
                            <div id="third-period">
                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/2nd_period.svg" alt="">
                            <span>11-12 лет. Ребенок перестает ходить</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 visible-md visible-lg">
                       <div class="right-mio">
                           <div id="first-period">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/1st_period.svg" alt="">
                               <span>2-10 лет. Болезнь становится заметной. Сначала слабеют мышцы ног: мальчик часто спотыкается и падает</span>
                           </div>
                           <div id="second-period">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/3rd_period.svg" alt="">
                               <span>Подростковый возраст. Начинаются проблемы с мышцами дыхательной системы. Затем проблемы с главной мышцей – сердцем. Развивается сколиоз и деформируется грудная клетка</span>
                           </div>
                       </div>
                    </div>
                    <div class="bottom-mio">
                        <div class="flex-wrapper-row">
                            <div class="pull-left">
                                <span>2600</span>
                                <span>мальчиков</span>
                                <span>с миодистрофией Дюшенна
может быть в России если полагаться на мировую статистику</span>
                            </div>
                            <span>Всем этим ребятам нужна своевременная диагностика, помощь и лечение
</span>
                            <div class="pull-right">
                                <span>> 550</span>
                                <span>редких мальчиков</span>
                                <span>нашел фонд за 5 лет работы</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <section class="proggrams">
                <div class="maxwidth-theme">
                <div class="heading-article">
                   <h1 class="without-p">Как мы помогаем</h1>
                <div class="flexslider" id="progs" style="direction:ltr;">
                  <ul class="slides" id="proggrams-description">
                   <li>
                      <div class="image">
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya.png">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                
                                                <div class="item-name">
                                                    <span>>250 врачей узнали об особенностях редкой болезни</span>
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
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/meditsinskaya.png">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                
                                                <div class="item-name">
                                                    <span>171 подопечный прошел комплексное обследование</span>
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
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste.png">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                
                                                <div class="item-name">
                                                    <span>191 семья посетила лагерь и отдохнула от борьбы</span>
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
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/nac-registr.png">
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
                    
                    <li>
                      <div class="image">
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/srochnaya-pomosch.png">
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
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch.png">
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
                    <span>Когда болезнь добирается до мышц дыхания – мальчикам требуется жизненно-необходимое оборудование. В экстренных случаях, когда нельзя ждать – мы открываем срочные сборы и обращаемся к друзьям и жертвователям. Не в критичных ситуациях фонд помогает семье добиваться положенного жизненно-важного оборудования и медицинской помощи в рамках государственной поддержки</span>
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
            <section class="need-ur-help">
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
                                    <a href="<?php echo get_home_url(); ?>/batyr-hajydov/"><span class="btn to-help now">Помочь сейчас</span></a>
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
                                      <span>«Я целиком и полностью доверяю людям, которые этот фонд организовали и занимаются такой сложной работой – помогают детям с тяжелой болезнью (...) Я могу торговать своей мордой, раз. Могу играть концерты в их пользу, что я и делаю, – два. Самое главное, что я уяснил, – фонду, чтобы существовать и помогать, больше всего на свете нужны деньги. Без денег с этой бедой вообще ничего не сделаешь, деньги надо как-то собирать, зарабатывать. Здесь я могу пригодиться: играть концерты, привлекать каким-то образом к этой теме людей, которые мне доверяют, чтобы они тоже помогали»</span>
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
                                            <span>Екатерина Гордеева</span>
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
            </div>
        </section>
          
           <section id="trust">
               <div class="maxwidth-theme">
                   <div class="heading-article">
                       <h1 class="without-p">Почему еще нам доверяют</h1>
                   </div>
                   <div class="items row trust">
                       <div class="col-xs-12 col-sm-4">
                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/1.svg">
                           <span>Мы за прозрачную, надежную и профессиональную благотворительность – публикуем <a href="<?php echo get_home_url(); ?>/o-fonde/#reports">годовые</a> отчеты о нашей деятельности фонда и регулярно отчитываемся о том, что удалось сделать с вашей поддержкой.</span>
                       </div>
                       <div class="col-xs-12 col-sm-4">
                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/2.svg">
                           <span>Мы сотрудничаем с бизнесом и благодарны каждому партнеру за доверие к нашей деятельности и неравнодушие к редким мальчикам с миодистрофией Дюшенна.</span>
                       </div>
                       <div class="col-xs-12 col-sm-4">
                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/3.svg">
                           <span><p>О нас пишут в СМИ. «Диагностика миодистрофии Дюшенна в регионах обыкновенно поздняя, а это значит, что чаще всего потеряно время, — гораздо более ценное для этих людей, чем для нас с вами. Чаще всего отсутствует в регионах и понимание стандарта ежедневного ухода за больным, и реабилитация…»</p>Виктор Шендерович, <a href="https://takiedela.ru/2015/04/vremya-zhizni/" target="_blank">материал на Таких Делах</a></span>
                       </div>
                   </div>
               </div>
           </section>
            <div class="subscribe-form-block">
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
                <form method="POST" action="https://cp.unisender.com/ru/subscribe?hash=6xngsk3uxi58x9wicmd8ewszew3psyohq95xwgapjifnoyuxgxu9y" name="subscribtion_form" id="subscribe">

                    <div class="subscribe-form-item subscribe-form-item--input-email input-subscribe">

                        <input class="subscribe-email-mio" type="email" name="email" id="email" value="" placeholder="Ваша электронная почта">

                        <input class="subscribe-submit-mio" type="submit" value="Хочу" id="submit" >

                    </div>

                    <input type="hidden" name="charset" value="UTF-8">

                    <input type="hidden" name="default_list_id" value="11683413">

                    <input type="hidden" name="list_ids[]" value="11683413">

                    <input type="hidden" name="list_ids[]" value="15653997">

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
