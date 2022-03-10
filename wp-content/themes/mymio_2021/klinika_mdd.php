<?php
/**
Template Name: Клиника МДД
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
        <section id="klinika_mdd">
            <div class="maxwidth-theme">
               <div class="heading-article">
                   <h1>Клиника МДД</h1>
                   <p>Современное медицинское обследование в Москве для подопечных из регионов.</p>
               </div>
               <div class="items row">
                   <div class="how-we-do mdd col-xs-12 col-md-6">
                       <div class="element-wrap">
                           <div class="photo-block">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/klinika-mdd/1.png" alt="Врач делает ультразвуковое исследование">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/klinika-mdd/2.png" alt="Семья на приеме у специалиста">
                               <div class="w-100"></div>
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/klinika-mdd/3.png" alt="Мама разговаривает с сыном">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/klinika-mdd/4.png" alt="Доктор объясняет как пользоваться мешком амбу">
                           </div>
                       </div>
                       <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-8">
                               <h1>Кто может принять участие</h1>
                               <span>– подопечные, которые не обследовались или обследовались давно, а очередь в федеральное лечебное учреждение составляет более 6 месяцев.<br><br>– подопечные, которым срочно необходимо назначение стероидной терапии и\или кардиопротекторной терапии.<br><br>– подопечные старше 18 лет, которым некуда госпитализироваться. потому что в государственной системе есть только детские отделения.</span>
                           </div>
                       </div>
                   </div>
                   <div class="why-it-needs col-xs-12 col-md-6">
                     <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-8">
                               <h1>Почему это нужно</h1>
                               <span>В России единицы врачей знают о современных методах лечения миодистрофии Дюшенна, имеющих доказательную базу и опыт применения во всем мире. Региональные врачи до сих пор редко вовремя диагностируют болезнь и часто не назначают нужные лекарственные препараты. В Европе пациенты с миодистрофией Дюшенна живут до 30-40 лет – в России средняя продолжительность в 2 раза меньше. Очередь на госпитализацию в лечебное учреждение с редкими специалистами по болезни может составлять от 10 до 14 месяцев. Для прогрессирующего заболевания такое ожидание недопустимо.</span>
                           </div>
                       </div>
                      <div class="element-wrap">
                           <div class="photo-block">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/klinika-mdd/5.png" alt="Мальчик улыбается на ультразвуковом исследовании">
                               <div class="w-100"></div>
                           </div>
                       </div>
                       
                   </div>
                   <div class="how-we-do take-part col-xs-12">
                       <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-10">
                               <h1>Как мы это делаем</h1>
                               <span>Фонд оплачивает все расходы по участию подопечного. В течение двух дней подопечных обследуют высококвалифицированные специалисты по миодистрофии Дюшенна: невролог, физический терапевт, пульмонолог, ортопед, кардиолог, эндокринолог, гастроэнтеролог, педиатр. С проведением функциональной диагностики — эхо, узи сердца, экг. При необходимости — дополнительные исследования, например, рентген кисти руки для оценки костного возраста. Обязательна лабораторная диагностика: анализы крови по 30 показателям. Как результат, каждый подопечный получает индивидуальные рекомендации. После приема врачей директор программ и мама мальчика с миодистрофией Дюшенна &mdash; Елена Шеперд по традиции общается с семьями, отвечает на вопросы, рассказывает почему важно соблюдать рекомендации редких специалистов по возвращению домой.</span>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
            <script src="<? echo get_template_directory_uri()?>/assets/flexslider/jquery.flexslider-min.js"></script>
            
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
        </section>
        <section id="support">
            <div class="maxwidth-theme">
                <div class="items row support">
                    <h1><b>С вашей поддержкой</b></h1>
                    <div class="once-support col-xs-12">
                        <div class="flex-wrapper">
                            <div class="left col-12 col-lg-4">
                                
                                    <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>17</span>
                                                <span>клиник<br>МДД</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">фонд провел начиная с 2017 года</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="middle col-12 col-lg-4">
                               <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>131</span>
                                                <span>подопечный</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">прошел комплексное обследование и получил индивидуальные рекомендации</span>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="right col-12 col-lg-4">
                               <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>3937</span>
                                                <span>диагностических<br>исследований</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">было проведено</span>
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
                                      <span>«Я узнала много нового о нашем заболевании, в плане медикаментозного поддержания, например, про сердечные препараты. Узнала, что коляски есть разные, и что их надо подбирать. И про дыхательную функцию, для поддержания которой надо делать специальную гимнастику со специальным мешком АМБУ. Мы начали кардиопротекторную терапию, о которой ничего не знали»</span>
                                    </div>
                                    <div class="author">
                                    <span>Мама подопечного</span>
                                  </div>
                                </li>
                                <li>
                                  <div class="quote">
                                      <span>«Спасибо вам большое! Мы очень рады, что хоть кто-то нам может помочь, в лагерь прилетим всей семьей!!! Ну а пока выполним все рекомендации и сделаем операцию на спину! Приедем ровненькие и повзрослевшие! Спасибо ещё раз, ваша работа это огромный труд!»</span>
                                    </div>
                                     <div class="author">
                                      <span>Мама подопечного</span>
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
               <p>Благодаря вашей поддержке мы привлечем больше специалистов по миодистрофии Дюшенна, увеличим количество диагностик и анализов. Это улучшит качество обследования редких мальчиков с миодистрофией Дюшенна.</p>
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
                    <div class="help-as-volunteer bez-perenosa col-xs-12 col-lg-5">
                        <h1>Помочь как автоволонтер</h1>
                        <div class="wrap">
                            <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/car.svg">
                            </div>
                            <div>
                                <span>Семьи приезжают на «Клинику МДД» из разных уголков страны и их нужно встретить в аэропорту, на вокзале и довезти до места проведения клиники.<br><br>Если вы хотите стать автоволонтером - <b>напишите на почту info@mymiofond.ru</b> с пометкой «Хочу стать автоволонтером» Будем рады знакомству, подробнее расскажем о программе и ответим на ваши вопросы.</span>
                            </div>
                        </div>
                    </div>
                    <div class="help-as-partner col-xs-12 col-lg-5 col-lg-offset-2">
                        <h1>Помочь как партнер</h1>
                        <div class="wrap">
                            <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/knight_partner.svg">
                            </div>
                            <div>
                                <span>Вы можете стать Хранителем медицинской программы и присоединиться к ордену МойМио. Мы предоставляем финансовую отчетность, держим в курсе событий, а вы участвуете в формировании годового бюджета для реализации программы и увеличиваете масштабы помощи редким мальчикам с миодистрофией Дюшенна.<br><br><b>Напишите на почту partners@mymiofond.ru</b> с темой письма «Сотрудничество». Будем рады знакомству, подробнее расскажем о программе и ответим на вопросы.</span>
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