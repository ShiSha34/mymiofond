<?php

/**

Template Name: Программы

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

        <section id="proggrams-description">

            <div class="maxwidth-theme">

               <div class="heading-article">

                   <h1>Программы фонда</h1>

                   <p>Фонд оказывает системную помощь семьям детей с миодистрофией Дюшенна.<br>Все программы разработаны с учетом особенностей редкой болезни.</p>

               </div>

                <div class="container-fluid">

                    <div class="items row">

                        <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">

                            <div class="item-wrapper">

                                <div class="image">

                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste.png" alt="Радостный мальчик в интеграционном лагере">

                                    <div class="img-label">

                                        <div class="wrap-icon">

                                            <div class="item-info">

                                                <span>Программа</span>

                                                <div class="item-name">

                                                    <span>Мы вместе</span>

                                                </div>

                                            </div>

                                            <div class="about-link">

                                                <a href="<?php echo get_home_url(); ?>/programmy/my-vmeste/">подробнее</a>

                                            </div>

                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste-icons.png">

                                        </div>

                                    </div>

                                </div>

                                <div class="body-info">

                                    <span>Проводим психолого-реабилитационные и интеграционные лагеря, где ребята отдыхают от борьбы с болезнью. Семьи получают ценную информацию от редких специалистов и работают с психологами. Это важное время для всей семьи</span>

                                </div>

                            </div>    

                        </div>

                        <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">

                            <div class="item-wrapper">

                                <div class="image">

                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya.png" alt="Брошюра с ответами на вопросы про редкое заболевание">

                                    <div class="img-label">

                                        <div class="wrap-icon">

                                            <div class="item-info">

                                                <span>Программа</span>

                                                <div class="item-name">

                                                    <span>Образовательная</span>

                                                </div>

                                            </div>

                                            <div class="about-link">

                                                <a href="<?php echo get_home_url(); ?>/programmy/obrazovatelnaya-programma/">подробнее</a>

                                            </div>

                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya-icons.png">

                                        </div>

                                    </div>

                                </div>

                                <div class="body-info">

                                    <span>Обучаем врачей в регионах, проводим вебинары, переводим и распространяем клинические рекомендации для врачей и руководства по болезни для семей, чтобы редкие мальчики даже в самых удаленных уголках России вовремя получали помощь</span>

                                </div>

                            </div>

                        </div>   

                        <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">

                            <div class="item-wrapper">

                                <div class="image">

                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/meditsinskaya.png" alt="Мама с сыном на приеме у специалиста">

                                    <div class="img-label">

                                        <div class="wrap-icon">

                                            <div class="item-info">

                                                <span>Программа</span>

                                                <div class="item-name">

                                                    <span>Медицинская</span>

                                                </div>

                                            </div>

                                            <div class="about-link">

                                                <a href="<?php echo get_home_url(); ?>/programmy/klinika-mdd/">подробнее</a>

                                            </div>

                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/meditsinskaya-icons.png">

                                        </div>

                                    </div>

                                </div>

                                <div class="body-info">

                                    <span>Проводим комплексные двухдневные обследования в Москве ребят из разных регионов России, которые никогда не были у редких специалистов. Используем международные стандарты и внедряем модель мультидисциплинарной помощи</span>

                                </div>

                            </div>

                        </div>        

                        <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">

                            <div class="item-wrapper">

                                <div class="image">

                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/srochnaya-pomosch.png" alt="Папа держит ребенка за руку">

                                    <div class="img-label">

                                        <div class="wrap-icon">

                                            <div class="item-info">

                                                <span>Программа</span>

                                                <div class="item-name">

                                                    <span>Срочная помощь</span>

                                                </div>

                                            </div>

                                            <div class="about-link">

                                                <a href="<?php echo get_home_url(); ?>/programmy/srochnaya-pomoshh/">подробнее</a>

                                            </div>

                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/srochnaya-pomosch-icons.png">

                                        </div>

                                    </div>

                                </div>

                                <div class="body-info">

                                    <span>В критических и экстренных ситуациях организуем и оказываем срочную медицинскую помощь подопечным: связываем лечащего врача пациента с редкими специалистами по болезни, отправляем на место нужных врачей и оборудование</span>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">

                            <div class="item-wrapper">

                                <div class="image">

                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/professiya.png" alt="Онлайн-обучение для парня с двигательными нарушениями">

                                    <div class="img-label">

                                        <div class="wrap-icon">

                                            <div class="item-info">

                                                <span>Проект</span>

                                                <div class="item-name">

                                                    <span>Профессия</span>

                                                </div>

                                            </div>

                                            <div class="about-link">

                                                <a href="<?php echo get_home_url(); ?>/programmy/proekt-professiya">подробнее</a>

                                            </div>

                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/professiya-icons.png">

                                        </div>

                                    </div>

                                </div>

                                <div class="body-info">

                                    <span>Фонд сотрудничает с образовательными онлайн-платформами. Подопечные проходят 3-х ступенчатый отбор, где лучше узнают себя, раскрывают свои возможности и выбирают подходящую и нужную им специальность</span>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">

                            <div class="item-wrapper">

                                <div class="image">

                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/nac-registr.png" alt="Схематичные мальчики на карте России">

                                    <div class="img-label">

                                        <div class="wrap-icon">

                                            <div class="item-info">

                                                <span>Программа</span>

                                                <div class="item-name">

                                                    <span>Национальный регистр</span>

                                                </div>

                                            </div>

                                            <div class="about-link">

                                                <a href="<?php echo get_home_url(); ?>/programmy/naczionalnyj-registr/">подробнее</a>

                                            </div>

                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/nac-registr-icons.png">

                                        </div>

                                    </div>

                                </div>

                                <div class="body-info">

                                    <span>Разрабатываем программное обеспечение, которое позволит собирать и систематизировать данные о подопечных, чтобы создать единый регистр всех пациентов с миодистрофией Дюшенна в России</span>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">

                            <div class="item-wrapper">

                                <div class="image">

                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch.png" alt="Семья с набором первой помощи после комплексного обследования">

                                    <div class="img-label">

                                        <div class="wrap-icon">

                                            <div class="item-info">

                                                <span>Программа</span>

                                                <div class="item-name">

                                                    <span>Адресная помощь</span>

                                                </div>

                                            </div>

                                            <div class="about-link">

                                                <a href="<?php echo get_home_url(); ?>/programmy/adresnaya-pomoshh/">подробнее</a>

                                            </div>

                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch-icons.png">

                                        </div>

                                    </div>

                                </div>

                                <div class="body-info">

                                    <span>В рамках программы покупаем жизненно-необходимое оборудование: аппараты НИВЛ, откашливатели, наборы скорой и первой помощи. Осуществляем материальную, правовую и консультационную поддержку семей</span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            

            </div>

        </section>

        <section id="reccurent-payments-block">

            <div class="maxwidth-theme">

                <div class="container-fluid" style="padding: 60px 0;">

                   <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/boy-with-flag.png" class="boy-with-flag">

                    <div class="left col-lg-6 col-xs-12">

                       <div class="pay-description">

                        <span>Подписаться на регулярное пожертвование значит вступить в доверительные отношения с фондом. Это наша уверенность в вас – мы понимаем сколько человек поддержит нас в следующем месяце и смело строим планы. <b>Это и ваша уверенность в нас</b> – мы пришлем отчет, что мы сделали с вашей поддержкой</span>

                        </div>

                    </div>

                    <div class="right col-lg-6 col-xs-12">

                        <div class="block-with-btn  col-xs-12">

                            <div class="heading-block col-xs-8 col-xs-offset-2">Небольшие, но регулярные пожертвования – это много</div>

                            <div class="pay-description-text col-xs-9 col-xs-offset-2">

                              Сумма увеличивается с количеством человек. Если 1500 человек жертвует по 100 рублей в месяц – у фонда появляется стабильный ежемесячный бюджет в 150 000 рублей на оплату важных проектов, где больше всего требуется помощь  

                            </div>

                            <div class="help-button-block col-xs-8 col-xs-offset-2">

                                <a><span class="btn to-help">Хочу помочь</span></a>

                            </div>

                        </div>

                    </div>

                </div>

               

           </div>

       </section>

        

	</main><!-- #main -->



<?php

get_footer();