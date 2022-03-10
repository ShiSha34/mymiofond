<?php

/**

Template Name: Профессия

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
        <script src="<? echo get_template_directory_uri()?>/assets/fancybox-master/dist/jquery.fancybox.min.js"></script>
            
            <script>
                jQuery(document).ready(function($) {
            $('[data-fancybox]').fancybox({
                clickOutside: "close",
                loop: true
            });
                
                    
                }
            </script>
        </div>

        <section id="professiya">

            <div class="maxwidth-theme">

               <div class="heading-article">

                   <h1>Проект «Профессия»</h1>
                    <p>У подопечных есть возможность получить специальность или новые навыки на образовательной платформе партнера фонда. Перед началом обучения ребят ждет подготовительный этап: тестирование, где подопечные лучше поймут себя, свои желания и готовность учиться, а также познакомятся с разнообразием мира профессий.</p>
               </div>

               <div class="items row">

                   <div class="how-we-do col-xs-12 col-md-6">

                       <div class="element-wrap">

                           <div class="photo-block with-single">

                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/professiya/1.png" alt="Парень делает задания на курсе по веб-программированию">

                        

                           </div>

                       </div>

                       <div class="element-wrap">

                           <div class="block-description col-xs-10 col-md-8">

                               <h1>Как мы это делаем</h1>

                               <span>В начале ребята проходят 3-х ступенчатое тестирование, где лучше узнают себя, раскрывают свои возможности, смотрят интервью, читают статьи, делятся мыслями друг с другом и пишут эссе, фантазируя о будущем. После тестирования для ребят проводится 3-х часовой профориентационный тренинг под руководством карьерных консультантов. Как результат – участники получают список подходящих им профессий. Теперь ребята могут выбрать подходящую специальность и начать обучение. Фонд сотрудничает с крупными образовательными онлайн-платформами. Срок обучения зависит от выбранной специальности.</span>
                               <br><br>
                               <span><a class="fancybox" data-fancybox href="/wp-content/themes/mymio_2021/assets/docs/professiya-terms.pdf">Подробные условия и алгоритм участия в проекте</a></span>

                           </div>

                       </div>

                   </div>

                   <div class="why-it-needs col-xs-12 col-md-6">

                     <div class="element-wrap">

                           <div class="block-description col-xs-10 col-md-8">

                              <h1>Почему это нужно</h1>

                               <span>Мальчики с миодистрофией Дюшенна растут в условиях, когда учеба и образование для них представляется чем-то лишним и необязательным. Часто семьи слышат от учителей и просто знакомых: «А зачем ему учиться, если болезнь неизлечимая? Зачем идти в 11 класс, сдавать экзамены?». Бывает, что наши подопечные теряют интерес и мотивацию к учебе уже в 6-8 классе. В рамках проекта «Профессия» мы стремимся, чтобы наши подопечные и их родители увидели смысл в школе и понимали, что после ее окончания можно и нужно освоить специальность. Общение с преподавателями, специалистами и однокурсниками уже будет «глотком воздуха» для редких мальчиков с миодистрофией Дюшенна после окончания дистанционного обучения в школе. Вместе с большой целью на будущее, например, получить первый гонорар, появятся и маленькие цели, которые будут двигать наших ребят каждый день вперед.</span>

                           </div>

                       </div>

                      <div class="element-wrap">

                           <div class="photo-block">

                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/professiya/2.png" alt="Учитель объясняет мальчику задание">

                               

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

        <section id="quote">

            <div class="maxwidth-theme">

                <div class="wrap">

                   <div class="quote-block col-xs-8 col-lg-7">

                    <div class="flexslider" id="quote-slider" style="direction:ltr;">

                              <ul class="slides">


                                <li>

                                  <div class="quote">

                                      <span>«Одним из смыслов для наших подопечных ребят и может стать учеба. Проснуться утром и привести себя в порядок, чтобы встретиться с учителем. Сделать задание к следующей неделе, написать сочинение, освоить специальность, чтобы получить первый гонорар. Такая ежедневная рутина, у которой есть большие и маленькие цели и смыслы, дает возможность почувствовать движение вперед. А ведь это и есть жизнь»</span>

                                    </div>

                                    <div class="author">
                                    <span>Команда фонда</span>
                                  </div>

                                </li>

                                <li>

                                  <div class="quote">

                                      <span>«Да, это начало, и Никита с этим справился очень заинтересованно, он настойчиво идет к цели и с рвением выполняет все задания. Говорит, что сильно сложного нет ничего. Все очень здорово. Это обучение открывает для нашего сына много нового. За последние несколько лет не видела Никиту таким замотивированным и целеустремленным. Спасибо!!!»</span>

                                    </div>

                                    <div class="author">

                                    <span>Мама участника проекта Никиты, Людмила</span>

                                  </div>

                                </li>

                                <li>

                                  <div class="quote">

                                      <span>«Главное поставить цель и идти к ней, и тогда все получится. Учиться всегда стоит. Ты получаешь новые знания, новые возможности, да и жить становится интереснее»</span>

                                    </div>

                                     <div class="author">

                                      <span>Ефремов Никита, 21 год, участник проекта</span>

                                  </div>

                                </li>

                                <li>

                                  <div class="quote">

                                      <span>«Если нужно учиться, то я учусь. Я просто пытаюсь заставлять себя учиться через силу, когда вспоминаю ради чего – я хочу в будущем быть самостоятельным и помогать семье, а иногда меня просто увлекает процесс учёбы»</span>

                                    </div>

                                     <div class="author">

                                      <span>Ловыгин Владимир, 17 лет, участник проекта</span>

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

               <p>Ваша поддержка даст мальчикам шанс на другую жизнь, в которой будет место для самореализации, чувства значимости и гордости!</p>

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

                        <h1>Другие способы помочь</h1>

                        <div class="wrap">

                            <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/computer.svg">

                            </div>

                            <div>

                                <span>Будем благодарны, если вы поможете приобрести нашим подопечным необходимое оборудование для онлайн-занятий: наушники с микрофоном, веб-камеры, ноутбуки, мониторы и системные блоки.</span>

                            </div>

                        </div>

                    </div>

                    <div class="help-as-partner col-xs-12 col-lg-5 col-lg-offset-2">

                        <h1>Помочь как партнер</h1>

                        <div class="wrap">

                            <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/knight_partner.svg">

                            </div>

                            <div>

                                <span>Вы можете стать Хранителем проекта «Профессия» и присоединиться к ордену МойМио. Мы предоставляем финансовую отчетность, держим в курсе событий, а вы участвуете в формировании годового бюджета для реализации программы и увеличиваете масштабы помощи редким мальчикам с миодистрофией Дюшенна.</span>

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
        <section class="request-form-container" id="request-form-container">
            <div class="maxwidth-theme">
             <div class="heading-article">
                   <h1>Как принять участие в проекте «Профессия»?</h1>
                   <p>1. Внимательно прочитать <a class="fancybox" data-fancybox href="/wp-content/themes/mymio_2021/assets/docs/professiya-terms.pdf">подробные условия и алгоритм проекта.</a><br>2. Заполнить форму, если вы согласны с правилами и алгоритмом проекта. Куратор проекта свяжется с вами в течение нескольких дней, чтобы обсудить заявку.</p>
               </div>
              <div class="contact-wrapper">
               <div class="request-block col-md-12 col-lg-6 form-proffesiya">
                <?php echo do_shortcode( '[contact-form-7 id="39309" title="Проект Профессия"]' ); ?>
                <div class="bow-arrows"></div>
                <div class="sword-shield"></div>
                </div>
                </div>
            </div>
        </section> 

        <div class="prof-fixed-button">
              <span> <a href="#request-form-container">Подать заявку на<br>участие в проекте<br>«Профессия»</a></span>
        </div>

	</main><!-- #main -->



<?php

get_footer();