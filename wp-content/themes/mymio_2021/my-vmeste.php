<?php
/**
Template Name: Мы вместе
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
        
        <section id="my-vmeste-programm">
            <div class="maxwidth-theme">
               <div class="heading-article">
                   <h1>Мы вместе</h1>
                   <p>Первый и самый любимый проект фонда — психолого-реабилитационный лагерь, из которого выросла программа «Мы вместе». Суть программы — в психологической, информационной и социальной поддержке семей, где есть дети с миодистрофией Дюшенна.</p>
               </div>
               <div class="items row">
                   <div class="how-we-do col-xs-12 col-md-6">
                       <div class="element-wrap">
                           <div class="photo-block">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/1.png" alt="Мальчики показывают сценку родителям">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/2.png" alt="Мамы и сыновья за столом в родительском клубе">
                               <div class="w-100"></div>
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/3.png" alt="Волонтеры и подопечные танцуют">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/4.png" alt="Подопечные смотрят шоу фокусов">
                           </div>
                       </div>
                       <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-8">
                               <h1>Как мы это делаем</h1>
                               <span>Весной и осенью на целую неделю подопечные семьи из регионов съезжаются в психолого-реабилитационный лагерь в Подмосковье. Все расходы фонд берет на себя. Родители получают психологическую помощь и ценные знания от редких специалистов, слушают лекции и обсуждают волнующие вопросы. Ребята вместе с волонтерами и психологами играют, рисуют, творят, разыгрывают сценки, заводят друзей и даже создают мультфильмы.<br><br>Летом фонд проводит интеграционный лагерь «Дети как дети» для семей. Это семь дней свежего воздуха, передышка от борьбы с болезнью и встреча с друзьями из разных уголков страны, с которыми подружил фонд!</span>
                           </div>
                       </div>
                   </div>
                   <div class="why-it-needs col-xs-12 col-md-6">
                     <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-8">
                               <h1>Почему это нужно</h1>
                               <span>Часто семьи, которые столкнулись со страшной болезнью ребенка, не знают, как жить дальше. Нет информации, как правильно помочь сыну. Нет сил учиться быть счастливыми в непростых условиях и держать удар. Нет понимания, как вернуться, насколько это возможно, к обычной жизни.<br><br>Информация и поддержка, которые семьи получают в лагерях и на встречах «Родительского клуба», дают понимание: «Вы — сильные, и мы — вместе!»</span>
                           </div>
                       </div>
                      <div class="element-wrap">
                           <div class="photo-block">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/5.png" alt="Общая фотография всех участников на закрытии лагеря">
                               <div class="w-100"></div>
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/6.png" alt="Родители с детьми утром на зарядке">
                           </div>
                       </div>
                       
                   </div>
               </div>
            </div>
            <div class="maxwidth-theme">
                <div class="items row icon">
                   <div class="col-xs-12 col-md-6 ">
                       <div class="element-wrap">
                           <div class="left-side col-xs-10 col-md-8">
                               <span>Для семей из Москвы и Московской области фонд проводит «Родительский клуб» — встречи родителей детей с МДД с психологом или врачом. Пока родители общаются со специалистами, волонтеры проводят время с детьми и устраивают увлекательные воркшопы.</span>
                           </div>                           
                       </div>
  
                   </div>
                   <div>
                          <div class="pseudo-img">
                           
                           </div>
                    </div>
                   <div class="col-xs-12 col-md-6">
                       <div class="element-wrap">
                           <div class="right-side col-xs-10 col-md-8">
                               <span>Также фонд ежегодно проводит праздники: Новогоднюю Елку, Пикник на ВДНХ. Организует акции для привлечения внимания и информировании о миодистрофии Дюшенна.</span>
                           </div>                           
                       </div>                 
                   </div>
                
                    
                </div>
            </div>
            <script src="<? echo get_template_directory_uri()?>/assets/flexslider/jquery.flexslider-min.js"></script>
            
               <script type="text/javascript">
                <?/*$(document).ready()
                  $('.flexslider').flexslider({
                    animation: "slide"
                    });
            </script>*/?>
            jQuery(document).ready(function($) {

                    $('#parents').flexslider({
                        animation: "slide",
                        slideshow: false,
                        animationLoop: true,
                        slideToStart: 0,
                        controlsContainer: $("#controls-parents"),
                        customDirectionNav: $("#nav-parents a"),
                        touch: true,
                        start: function(slider) {
                            $('a.slide_thumb').click(function() {
                                $('#parents').show();
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
            <div class="maxwidth-theme">
                <div class="flexslider" id="parents" style="direction:ltr;">
                  <ul class="slides">
                    <li>
                      <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/flexslider-1.png" alt="Мамы редких мальчиков задают вопросы физическому терапевту"/>
                    </li>
                    <li>
                      <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/flexslider-2.png" />
                    </li>
                    <li>
                      <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/flexslider-3.png" />
                    </li>
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                  
                </div>
                <div class="custom-navigation" id="nav-parents">
                  
                  <div class="custom-controls-container" id="controls-parents"></div>
                </div>
            </div>
        </section>
        <section id="support">
            <div class="maxwidth-theme">
                <div class="items row support">
                    <h1><b>С вашей поддержкой</b></h1>
                    <div class="left-support col-12 col-xs-8 col-lg-3">
                        <div class="flex-wrapper">
                            <div class="top-left-block">
                                
                                    <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>14</span>
                                                <span>лагерей</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">фонд провел за все время существования программы</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="bottom-left-block">
                               <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>20</span>
                                                <span>онлайн-мероприятий</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">фонд провел для подопечных в 2020 году во время карантина</span>
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
                                  <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/flexslider-4.png" alt="Мама с сыном смотрят друг на друга" />
                                </li>
                                <li>
                                  <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/flexslider-5.png" />
                                </li>
                                <li>
                                  <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/flexslider-6.png" />
                                </li>
                                <li>
                                  <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/flexslider-7.png" />
                                </li>
                                <li>
                                  <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste/flexslider-8.png" />
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
                                                <span>900</span>
                                                <span>человек</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">создавали неповторимую атмосферу в лагерях за все время существования программы</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="bottom-left-block">
                               <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>191</span>
                                                <span>семья</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">посетила лагерь и получила необходимую им поддержку</span>
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
                <div class="wrap">
                   <div class="quote-block col-xs-8 col-lg-7">
                    <div class="flexslider" id="quote-slider" style="direction:ltr;">
                              <ul class="slides">
                                <li>
                                  <div class="quote">
                                      <span>Огромное спасибо всем-всем-всем, кто создал фонд «МойМио», кто поддерживает в нём огонь. Всем сотрудникам, волонтерам, психологам и просто неравнодушным людям. Вы супер! Вы очень много для нас делаете и очень нас вдохновляете. Вы соединяете нас всех из разных городов, благодаря вам мы не одиноки. Мы очень ценим и очень благодарны вам. Спасибо!!!</span>
                                    </div>
                                    <div class="author">
                                    <span>Ольга и сыновья Иван, Илья, Лев из Перми. 2019 год</span>
                                  </div>
                                </li>
                                <li>
                                  <div class="quote">
                                      <span>Благодаря фонду мы смогли встретиться с семьей – начала мы узнали друг друга на просторах интернета, в этой группе [группа фонда ВКонтакте]. Реальная наша встреча была в лагере в мае 2019. Яхонты нас сдружили – все семьи до сих пор общаются как одна большая шумная семья! Вовсе не важно, что нас разделяют километры. Мы знаем, что мы есть друг у друга.</span>
                                    </div>
                                     <div class="author">
                                      <span>Инна, мама подопечного Ильи, 2019 год</span>
                                  </div>
                                </li>
                                <li>
                                  <div class="quote">
                                      <span>«В весеннем реабилитационном лагере, где я был вожатым, был мальчик Илья. И общаясь с ним,чувствовалось, что он очень старается избегать коляски. Он пытался как можно больше постоять — а если сидеть, то на стуле. Рассказывал о том, что он только в лагере на коляске, а дома ходит сам. И в вечер закрытия смены, когда и так все были на эмоциях, Илья с радостью произнес (наверное даже прокричал) своей маме и Елене Шеперд: «Я не боюсь больше коляски!». В этот момент я пустил пару мужских скупых слез».</span>
                                  </div>
                                     <div class="author">
                                     <span>Волонтер Андрей</span>
                                     </div>
                                </li>
                                <li>
                                  <div class="quote">
                                      <span>«Осенью я поехала в лагерь, узнала мальчишек. Они необыкновенные! Веселые, начитанные, интересные собеседники, очень глубокие. Конечно, кто-то из них открыт новым людям больше, кто-то меньше. Но думаю, что это мы,  волонтеры, у них учимся: радости, простоте, любви, терпению и мудрому принятию жизни».</span>
                                    </div>
                                      <div class="author">
                                      <span>Волонтер Маша</span>
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
               <p>Благодаря вашей поддержке у семей появится возможность отдохнуть от борьбы с болезнью.Информация о заболевании, как помочь сыну и такое нужное понимание, что они больше не одиноки!</p>
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
                <div class="items row">
                   <div class="wrap">
                    <div class="help-as-volunteer col-xs-12 col-lg-5">
                        <h1>Помочь как волонтер</h1>
                        <div class="wrap">
                            <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/boy_knight.svg">
                            </div>
                            <div>
                                <span> Если вы любите играть с детьми - присоединяйтесь к ордену МойМио и приезжайте волонтером в лагерь. Вас ждет невероятная неделя, незабываемые эмоции и впечатления. Нам нужны волонтеры, фотографы и автоволонтеры.<br><br><b>Напишите на почту info@mymiofond.ru</b>  с рассказом о себе и темой письма «Как стать волонтёром/автоволонтером/фотографом фонда». Будем рады знакомству, подробнее расскажем о программе и ответим на ваши вопросы.</span>
                            </div>
                        </div>
                    </div>
                    <div class="help-as-partner col-xs-12 col-lg-5 col-lg-offset-2">
                        <h1>Помочь как партнер</h1>
                        <div class="wrap">
                            <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/knight_partner.svg">
                            </div>
                            <div>
                                <span>Будем благодарны, если вы поможете приобрести нужные товары для мастерских в лагерях. Это канцелярия, сувениры и всевозможные товары для творчества. Все это нужно, чтобы программа состоялась.<br><br>Вы можете стать Хранителем программы «Мы вместе» и присоединиться к ордену МойМио. Мы предоставляем финансовую отчетность, держим в курсе событий, а вы участвуете в формировании годового бюджета для реализации программы и увеличиваете масштабы помощи редким мальчикам с миодистрофией Дюшенна.<br><br><b>Напишите на почту partners@mymiofond.ru</b> с темой письма «Сотрудничество». Будем рады знакомству, подробнее расскажем о программе и ответим на вопросы.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        
	</main><!-- #main -->

<?php
get_footer();