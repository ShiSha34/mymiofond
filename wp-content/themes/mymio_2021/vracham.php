<?php
/**
Template Name: Врачам
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
       <script src="<? echo get_template_directory_uri()?>/assets/flexslider/jquery.flexslider-min.js"></script>
            
               <script type="text/javascript">
                <?/*$(document).ready()
                  $('.flexslider').flexslider({
                    animation: "slide"
                    });
            </script>*/?>
            
                   jQuery(document).ready(function($) {
  // The slider being synced must be initialized first
                      $('#carousel').flexslider({
                        animation: "slide",
                        controlNav: false,
                        animationLoop: false,
                        directionNav: false,
                        slideshow: false,
                        itemWidth: 440,
                        asNavFor: '#useful-slider'
                      });
                       
                       $('#useful-slider').flexslider({
                        animation: "slider",
                        controlNav: false,
                        directionNav: false,
                        animationLoop: false,
                        itemWidth: 320,
                        slideshow: false,
                        sync: "#carousel",
                        start: function(slider) {
                            $('#carousel .slides li a').click(function(event){
                                $('#useful-slider').flexslider("play");
                            });
                        }
                      });
                   });
                   
                   jQuery(document).ready(function($) {
  // The slider being synced must be initialized first
                      $('#carousel-veb').flexslider({
                        animation: "slide",
                        animationLoop: false,
                        directionNav: false,
                        controlsContainer: $("#controls-camp"),
                        slideshow: false,
                        itemWidth: 200,
                        itemMargin: 15,
                        minItems: 2,
                        maxItems: 5,
                        asNavFor: '#veb-slider'
                      });
                       
                       $('#veb-slider').flexslider({
                        animation: "slider",
                        controlNav: false,
                        customDirectionNav: $("#nav-progs a"),
                        animationLoop: false,
                        slideshow: false,
                        sync: "#carousel-veb",
                        start: function(slider) {
                            $('#carousel-veb .slides li a').click(function(event){
                                $('#tutorial-slider').flexslider("play");
                            });
                        }
                           
                      });
                   });
                   
            </script>
            
            <script src="<? echo get_template_directory_uri()?>/assets/fancybox-master/dist/jquery.fancybox.min.js"></script>
            
            <script>
            jQuery(".fancybox").fancybox({
                clickOutside: "close"
            });
            </script>
            
        </div>
          <section id="vracham">
               <div class="maxwidth-theme">
                   <div class="items row margin0">
                   <div class="col-xs-12 col-lg-6">
                   
                    <div class="heading-article">
                      
                       <h1 class="without">Врачам</h1>
                       <img src="<? echo get_template_directory_uri()?>/assets/images/icons/med_report.svg" alt="">
                       <p>Мы специализируемся на редком, генетическом заболевании - миодистрофии Дюшенна. Все программы разработаны с учетом особенностей данной нозологии. Будем рады взаимодействию и партнерству с врачами. Можем помочь информационно, организовать обучение или скоординировать со специалистами с большим клиническим опытом в миодистрофии Дюшенна.<br><br><br><b>Давайте бороться с этим коварным заболеванием вместе!</b></p>
                   </div>
                   </div>
                   <div class="col-xs-12 col-lg-5">
                   <h3>Как связаться с фондом?</h3>
                   <p>Мы отвечаем в течение 3-х дней</p>
                   <? echo do_shortcode( '[contact-form-7 id="31050" title="Врачам"]' );?>
                    </div>
                   </div>
              </div> 
              </section>
            <section id="useful">
                <div class="maxwidth-theme">
                    <div class="heading-article">
                        <h1>Информационные материалы</h1>
                        <p>Научные статьи, руководства, брошюры и другие важные материалы по заболеванию</p>
                    </div>
                </div>
                <div class="useful-block visible-md visible-lg">
                    <div class="maxwidth-theme">
                       <div id="carousel" class="flexslider" style="margin-bottom: 60px;">
                        <ul class="slides" id="useful-links">
                            <li>Рекомендации по ведению пациентов с миодистрофией Дюшенна.</li>
                            <li>Искусственная вентиляция легких.</li>
                            <li><a>Подготовка к операции.</a></li>
                            <li><a>Сердечно-сосудистая система. Алгоритм наблюдения за состоянием.</a></li>
                            <li><a>Статьи по узким и проблемным темам: от эндокринологии до экстренных ситуаций.</a></li>
                            <li><a>Температура и признаки дыхательной недостаточности. Алгоритм действий.</a></li>
                            <li><a>Технические средства реабилитации. Подбор и назначение и использование.</a></li>
                            <li><a>Энтеральное питание у детей с хроническими заболеваниями: оптимальный способ доставки.<br>Комарова О.Н. Медицинский Совет. 2020</a></li>
                            <li><a>Анестезия и нейромышечные заболевания /<br>Всемирная федерация обществ анестезиологов<br>
World Federation of Societies of Anaesthesiologist (WFSA)<br>Редактор английского издания: Bruce McCormick<br>Редактор русского издания: В. В. Кузьков.</a></li>
                        </ul>
                        </div>
                        <div id="useful-slider" class="flexslider">
                          <ul class="slides">
                            <li>
                              <a class="fancybox" data-fancybox="gallery" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/1_rukovodstvo-dlya-vrachei.pdf">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/doc_preview.png"></div><span class="docs-caption open">Открыть</span>
                    </a>
                            </li>
                            <li>
                              <a class="fancybox" data-fancybox="gallery" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/2_ivl.pdf">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/doc_preview.png"></div><span class="docs-caption open">Открыть</span>
                    </a>
                            </li>
                            <li>
                              <a class="fancybox" data-fancybox="gallery" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/1_rukovodstvo-dlya-vrachei.pdf">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/doc_preview.png"></div><span class="docs-caption open">Открыть</span>
                    </a>
                            </li>
                            <li>
                              <a class="fancybox" data-fancybox="gallery" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/4_serdechno-sosudistaya.pdf">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/doc_preview.png"></div><span class="docs-caption open">Открыть</span>
                    </a>
                            </li>
                            <li>
                              <a class="fancybox" data-fancybox="gallery" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/5_broshyura_a5-avertikal.pdf">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/doc_preview.png"></div><span class="docs-caption open">Открыть</span>
                    </a>
                            </li>
                            <li>
                              <a class="fancybox" data-fancybox="gallery" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/6_PAMYATKA-po-DN_korrekt.pdf">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/doc_preview.png"></div><span class="docs-caption open">Открыть</span>
                    </a>
                            </li>
                            <li>
                              <a class="fancybox" data-fancybox="gallery" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/7_tsr.pdf">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/doc_preview.png"></div><span class="docs-caption open">Открыть</span>
                    </a>
                            </li>
                            <li>
                              <a class="fancybox" data-fancybox="gallery" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/enterialnoye_pitaniye.pdf">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/doc_preview.png"></div><span class="docs-caption open">Открыть</span>
                    </a>
                            </li>
                            <li>
                              <a class="fancybox" data-fancybox="gallery" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/anesteziya_i_NMZ.pdf">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/anesteziya_i_NMZ_preview.png"></div><span class="docs-caption open">Открыть</span>
                    </a>
                            </li>
                            <!-- items mirrored twice, total of 12 -->
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="useful-block-sm visible-xs visible-sm">
                    <div class="maxwidth-theme">
                        <ul>
                            <li><a class="fancybox" data-fancybox="gallery2" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/rvracham/1_rukovodstvo-dlya-vrachei.pdf">Рекомендации по ведению пациентов с миодистрофией Дюшенна.</a></li>
                            <li><a class="fancybox" data-fancybox="gallery2" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/2_ivl.pdf">Искусственная вентиляция легких.</a></li>
                            <li><a class="fancybox" data-fancybox="gallery2" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/1_rukovodstvo-dlya-vrachei.pdf">Подготовка к операции.</a></li>
                            <li><a class="fancybox" data-fancybox="gallery2" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/4_serdechno-sosudistaya.pdf">Сердечно-сосудистая система. Алгоритм наблюдения за состоянием.</a></li>
                            <li><a class="fancybox" data-fancybox="gallery2" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/rvracham/5_broshyura_a5-avertikal.pdf">Статьи по узким и проблемным вопроса от эндокринологии до экстренных ситуаций.</a></li>
                            <li><a class="fancybox" data-fancybox="gallery2" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/6_PAMYATKA-po-DN_korrekt.pdf">Температура и признаки дыхательной недостаточности. Алгоритм действий.</a></li>
                            <li><a class="fancybox" data-fancybox="gallery2" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/7_tsr.pdf">Технические средства реабилитации. Подбор и назначение и использование.</a></li>
                            <li><a class="fancybox" data-fancybox="gallery2" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/enterialnoye_pitaniye.pdf">Энтеральное питание у детей с хроническими заболеваниями: оптимальный способ доставки.<br>Комарова О.Н. Медицинский Совет. 2020</a></li>
                            <li><a class="fancybox" data-fancybox="gallery2" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/themes/mymio_2021/assets/docs/vracham/anesteziya_i_NMZ.pdf">Анестезия и нейромышечные заболевания /<br>Всемирная федерация обществ анестезиологов<br>
World Federation of Societies of Anaesthesiologist (WFSA)<br>Редактор английского издания: Bruce McCormick<br>Редактор русского издания: В. В. Кузьков.</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="tutorial" class="veb">
                <div class="maxwidth-theme">
                    <div class="heading-article">
                        <h1 class="without-p">Вебинары</h1>
                    </div>
                    
                </div>
                <script src="https://cdn.jsdelivr.net/gh/thelevicole/youtube-to-html5-loader@2.0.0/dist/YouTubeToHtml5.js"></script>
                
                <div class="useful-block">
                    <div class="maxwidth-theme">
                       
                        <div id="veb-slider" class="flexslider">
                          <ul class="slides">
                            <li>
                             <div class="row margin0">
                              <iframe width="560" height="445" src="https://www.youtube.com/embed/anEXasNdQbM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <div class="video-caption"><span>Пациенты с миодистрофией Дюшенна.<br>Гастроэнтерологические аспекты</span></div>
                              </div>
                              
                            </li>
                            <li>
                              <div class="row margin0">
                              <iframe width="560" height="445" src="https://www.youtube.com/embed/_kD_pi04i-o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <div class="video-caption"><span>Пациенты с миодистрофией Дюшенна.<br>Эндокринологические аспекты</span></div>
                              </div>
                            </li>
                            <li>
                              <div class="row margin0">
                              <iframe width="560" height="445" src="https://www.youtube.com/embed/83YqJREk-t0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <div class="video-caption"><span>Сердечно-сосудистые нарушения.<br>Методы диагностики и коррекции.<br>Мышечная дистрофия Дюшенна</span></div>
                              </div>
                            </li>
                            <li>
                              <div class="row margin0">
                              <iframe width="560" height="445" src="https://www.youtube.com/embed/DTJfHSo4bCM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <div class="video-caption"><span>Мышечная дистрофия Дюшенна.<br>Общее и частное.<br>Дети от 7 до 11 лет</span></div>
                              </div>
                            </li>
                            <li>
                              <div class="row margin0">
                              <iframe width="560" height="445" src="https://www.youtube.com/embed/xKnieTgPrjg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <div class="video-caption"><span>Миодистрофия Дюшенна.<br>Общее и частное.<br>Дети до 6 лет</span></div>
                              </div>
                            </li>
                            
                            <!-- items mirrored twice, total of 12 -->
                          </ul>
                          <div class="custom-navigation" id="nav-progs"><div class="custom-controls-container" id="controls-progs"></div></div>
                        </div>
                        
                        <div id="carousel-veb" class="flexslider">
                        <ul class="slides" id="useful-links-veb">
                            <li><img src="https://img.youtube.com/vi/anEXasNdQbM/hqdefault.jpg" alt="">
                            <li><img src="https://img.youtube.com/vi/_kD_pi04i-o/hqdefault.jpg" alt="">
                            <li><img src="https://img.youtube.com/vi/83YqJREk-t0/hqdefault.jpg" alt="">
                            <li><img src="https://img.youtube.com/vi/DTJfHSo4bCM/hqdefault.jpg" alt="">
                            <li><img src="https://img.youtube.com/vi/xKnieTgPrjg/hqdefault.jpg" alt="">
                        </ul>
                        </div>
                        <div class="custom-navigation" id="nav-camp">
                        <div class="custom-controls-container vebinar" id="controls-camp"></div>
                    </div>
                        <a href="https://www.youtube.com/channel/UC1h969MxrGpYW89OQwbTPOw" target="_blank"><span>Смотреть вебинары на YouTube ></span></a>
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
                      <span style="font-size: 24px; margin-bottom: 0;">Отправляем письма только с приглашениями на вебинары</span>
                   </div>
               </div>
               </div>
               <div class="wrapper">
               <?/* <form method="POST" action="https://cp.unisender.com/ru/subscribe?hash=6xngsk3uxi58x9wicmd8ewszew3psyohq95xwgapjifnoyuxgxu9y" name="subscribtion_form" id="subscribe">

                    <div class="subscribe-form-item subscribe-form-item--input-email input-subscribe">

                        <input class="subscribe-email-mio" type="email" name="email" id="email" value="" placeholder="Ваша электронная почта">

                        <input class="subscribe-submit-mio" type="submit" value="Хочу" id="submit" >

                    </div>

                    <input type="hidden" name="charset" value="UTF-8">

                    <input type="hidden" name="default_list_id" value="20668422">

                    <input type="hidden" name="list_ids[]" value="20668422">

                    <input type="hidden" name="overwrite" value="2">

                    <input type="hidden" name="is_v5" value="1">

                </form>*/?>
                   <form method="POST" action="https://cp.unisender.com/ru/subscribe?hash=6sy4bfcgdxydfxwicmd8ewszew3psyohq95xwgaj9s3hf8irbzupy" name="subscribtion_form">
                        <div class="subscribe-form-item subscribe-form-item--input-email input-subscribe">
                            <input class="subscribe-email-mio" type="text" name="email" value="" placeholder="Ваша электронная почта">
                            <input class="subscribe-submit-mio" type="submit" value="Хочу">
                        </div>
                        <input type="hidden" name="charset" value="UTF-8">
                        <input type="hidden" name="default_list_id" value="20668422">
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