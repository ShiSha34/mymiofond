<?php
/**
Template Name: Образовательная программа
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
        <section id="obrazovatelnaya">
            <div class="maxwidth-theme">
               <div class="heading-article">
                   <h1>Образовательная программа</h1>
                   <p>Одна из основных задач фонда &mdash; просветительская. Мы обучаем и рассказываем врачам и родителям об особенностях редкого заболевания, информируем общество и распространяем информацию о миодистрофии Дюшенна</p>
               </div>
               <div class="items row">
                   <div class="how-we-do col-xs-12 col-md-6">
                       <div class="element-wrap">
                           <div class="photo-block with-single">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya/1.png" alt="Физический терапевт обучает врачей">
                        
                           </div>
                       </div>
                       <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-8">
                               <h1>Как мы это делаем</h1>
                               <span>С 2018 года мы проводим выездные семинары и обучаем врачей на местах. Это возможность развивать врачебное сообщество, готовое помогать ребятам с миодистрофией Дюшенна. Даже если у ребенка было обследование в Москве, его обязательно нужно наблюдать в динамике, а это можно и должны делать по месту жительства.<br><br>Врачи любого региона страны могут обратиться за помощью в фонд, и мы направим нашего специалиста для обучения грамотному ведению пациентов с миодистрофией Дюшенна.<br><br>Мы работаем, чтобы врачи в любом самом удаленном уголке нашей страны имели доступ к рекомендациям по заболеванию, а редкие мальчики получали своевременное и современное лечение.</span>
                           </div>
                       </div>
                   </div>
                   <div class="why-it-needs col-xs-12 col-md-6">
                     <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-8">
                               <span class="without-heading">Что делать если у вас пациент с миодистрофией Дюшенна? Как помочь ребенку и не допустить преждевременных и вторичных осложнений?<br><br><b>Задачи образовательной программы:</b>
                               <br>– рассказывать о редкой болезни обществу<br>– обучать семьи основам DAILY CARE<br>– проводить научные и практические семинары для семей и специалистов<br>– повышать квалификацию редких специалистов</span>
                           </div>
                       </div>
                      <div class="element-wrap">
                           <div class="photo-block">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya/2.png" alt="Врачи из регионов с поднятыми руками хотят задать вопросы">
                               <div class="w-100"></div>
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya/3.png" alt="Специалист рассказывает родителям о болезни в лагере">
                           </div>
                       </div>
                       
                   </div>
               </div>
            </div>
            </section>
	        <script src="<? echo get_template_directory_uri()?>/assets/flexslider/jquery.flexslider-min.js"></script>
	        <script type="text/javascript">
                                    jQuery(document).ready(function($) {

                                        $('#camp').flexslider({
                                            animation: "slide",
                                            slideshow: false,
                                            animationLoop: true,
                                            slideToStart: 0,
                                            controlsContainer: $("#controls-camp"),
                                            customDirectionNav: $("#nav-camp a"),
                                            touch: true,
                                            start: function(slider) {
                                                $('a.slide_thumb').click(function() {
                                                    $('#camp').show();
                                                    var slideTo = $(this).attr("rel")//Grab rel value from link;
                                                    var slideToInt = parseInt(slideTo)//Make sure that this value is an integer;
                                                    if (slider.currentSlide != slideToInt) {
                                                        slider.flexAnimate(slideToInt)//move the slider to the correct slide (Unless the slider is also already showing the slide we want);
                                                    }
                                                });
                                            }

                                        });

                                    });
                </script>
                <script type="text/javascript">
                                    jQuery(document).ready(function($) {

                                        $('#quote-slider').flexslider({
                                            animation: "slide",
                                            slideshow: false,
                                            animationLoop: true,
                                            slideToStart: 0,
                                            smoothHeight: true,
                                            controlsContainer: $("#controls-quote"),
                                            customDirectionNav: $("#nav-quote a"),
                                            touch: true,
                                            start: function(slider) {
                                                $('a.slide_thumb').click(function() {
                                                    $('#camp').show();
                                                    var slideTo = $(this).attr("rel")//Grab rel value from link;
                                                    var slideToInt = parseInt(slideTo)//Make sure that this value is an integer;
                                                    if (slider.currentSlide != slideToInt) {
                                                        slider.flexAnimate(slideToInt)//move the slider to the correct slide (Unless the slider is also already showing the slide we want);
                                                    }
                                                });
                                            }

                                        });

                                    });
                                    </script>
                <section id="support-alter">
            <div class="maxwidth-theme">
                <div class="items row support ">
                    <h1><b>С вашей поддержкой</b></h1>
                    <div class="left-support col-12 col-xs-8 col-lg-3">
                        <div class="flex-wrapper">
                            <div class="top-left-block">
                                
                                    <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>20</span>
                                                <span>роликов</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">об уходе для семей детей с миодистрофией Дюшенна</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="bottom-left-block">
                               <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>15</span>
                                                <span>обучающих</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">памяток, методических материалов, руководств было выпущено для врачей и родителей за все время существования программы</span>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="middle-support col-xs-12 col-lg-6">
                        <div class="middle-block">
                           
                            <div class="flexslider" id="camp" style="direction:ltr;">
                              <ul class="slides">
                                <li>
                                  <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya/flexslider-11.png" alt="Круглый стол специалистов по болезни и сотрудников фонда" />
                                </li>
                                <li>
                                  <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya/flexslider-12.png" />
                                </li>
                                <li>
                                  <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya/flexslider-13.png" />
                                </li>
                                <li>
                                  <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya/flexslider-14.png" />
                                </li>
                                <!-- items mirrored twice, total of 12 -->
                              </ul>
                              <?/*<ul class="custom-navigation">
                              <li><a href="#" class="flex-prev">Prev</a></li>
                              <li><a href="#" class="flex-next">Next</a></li>
                            </ul>*/?>
                            </div>
                            <div class="custom-navigation" id="nav-camp">
                              <div class="custom-controls-container" id="controls-camp"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="right-support col-12 col-xs-8 col-lg-3">
                        <div class="flex-wrapper">
                            <div class="top-left-block">
                                
                                    <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>15</span>
                                                <span>обучающих</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">онлайн-вебинаров, выездных семинаров и мастер-классов провели за все время существования программы</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="bottom-left-block">
                               <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>250</span>
                                                <span>врачей</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">прошли обучение и узнали об особенностях редкой болезни – миодистрофии Дюшенна</span>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        <section id="quote">
            <div class="maxwidth-theme">
              <div class="heading-article">
               <p><b>Отзывы после поездки Марины Комаровой - медицинского координатора фонда и специалиста по миодистрофии Дюшенна в Пермь в 2019 году.</b></p>
               <p>В течение двух дней Марина обучала местных врачей, специалистов особенностям ведения пациентов с редким заболеванием:</p>
               </div>
                <div class="wrap">
                   <div class="quote-block col-xs-8 col-lg-7">
                    <div class="flexslider" id="quote-slider" style="direction:ltr;">
                              <ul class="slides">
                                <li>
                                  <div class="quote">
                                      <span>«Мне очень понравился семинар. После семинара мои знания и представление по МДД упорядочились, "разложились по полочкам". Очень понравилась подача материала Мариной, думаю от этого была понятна информация не только врачам. На консультациях поняла, какие уточняющие вопросы нужно задавать пациентам с МДД, чтобы складывалось полное представление о течении болезни, узнала, на что обращать внимание при подборе коляски”.</span>
                                    </div>
                                    <div class="author">
                                    <span>Врач-педиатр Резеда</span>
                                  </div>
                                </li>
                                <li>
                                  <div class="quote">
                                      <span>Семинар был очень насыщенным, полезным и познавательным для сотрудников паллиативной службы и людей, кто с этим заболеваниям сталкивается. Марина всё доступно рассказала, при каких стадиях заниматься той или иной проблемой, наглядно показала, как общаться с родителями и детьми на открытых консультациях. Это был крутой семинар, очень рада, что получила такие знания. В нашем регионе очень мало кто знает, что с этим заболеваниям делать и как помочь в таких ситуациях.</span>
                                    </div>
                                     <div class="author">
                                      <span>Медсестра по массажу, Татьяна</span>
                                  </div>
                                </li>
                                <li>
                                  <div class="quote">
                                      <span>Семинар позволил пересмотреть подходы к подбору ТСР, исключить использование тех средств, которые не несут положительного эффекта. Лектор постоянно акцентировала внимание на важность планирования действий на каждом новом этапе заболевания, чтобы жизнь ребёнка как можно дольше была нормальной, чтобы не было экстренного реагирования на то, что можно было заранее проработать: подобрать терапию, ТСР, изменить пространство, сформировать у родителя и ребёнка нужные навыки и умения в использовании оборудования и др. навыков. Для специалистов и родителей семинар стал уникальной историей, позволившей пересмотреть подходы в работе с особенными детьми.</span>
                                  </div>
                                     <div class="author">
                                     <span>Специалист по социально-правовой работе, Екатерина</span>
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
        <section id="leyka-form">
         <div class="maxwidth-theme">
          <div class="heading-article">
               <h1>Поддержите программу</h1>
               <p>С вашей поддержкой мы увеличиваем масштабы помощи и делаем все, чтобы родители редких мальчиков и врачи в любом самом удаленном уголке страны имели доступ к рекомендациям по заболеванию.</p>
           </div>
           </div>
            <div class="maxwidth-theme">
               <div class="form-block">
                <?php echo do_shortcode( '[leyka_campaign_form id="19939"]' ); ?>
                <div class="donations-custom-block">
                
                <div class="donation-list-caption">
                    <span>Спасибо за помощь!</span>
                </div>
                <?php echo do_shortcode('[leyka_donations_list campaign_id="0" unstyled="true" length="5"]'); ?>
                </div>
                </div>
            </div>
        </section>
        <section id="to-help-as">
            <div class="maxwidth-theme">
                <div class="items row pro-bono">
                  <h1>Другие способы помочь</h1>
                   <div class="wrap">
                    <div class="help-as-volunteer col-xs-12 col-lg-5">
                        <h1>Pro bono</h1>
                        <div class="wrap">
                            <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/pen.svg">
                            </div>
                            <div>
                                <span>Для перевода, печати и выпуска памяток, брошюр и методических рекомендаций нам требуется переводчики, редакторы и верстальщики. Будем рады взять ваши контакты и в случае необходимости и вашего свободного времени вместе поработать.</span>
                            </div>
                        </div>
                    </div>
                    <div class="help-as-partner col-xs-12 col-lg-5 col-lg-offset-2">
                        <h1>Стать партнером</h1>
                        <div class="wrap">
                            <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/knight_partner.svg">
                            </div>
                            <div>
                                <span>Вы можете стать Хранителем образовательной программы и присоединиться к ордену МойМио. Мы предоставляем финансовую отчетность, держим в курсе событий, а вы участвуете в формировании годового бюджета для реализации программы и увеличиваете масштабы помощи редким мальчикам с миодистрофией Дюшенна.</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="pre-head-block info-email">
                   <div class="col-xs-10 col-sm-7">
                    <span>Напишите на почту partners@mymiofond.ru с темой письма «Сотрудничество». Будем рады знакомству, подробнее расскажем о программе и ответим на вопросы</span>
                    </div>
                </div>
            </div>
            </div>
        </section>
<?php
get_footer();
