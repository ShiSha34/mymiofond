<?php
/**
Template Name: Как помочь
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
                      $('#progs').flexslider({
                        animation: "slide",
                        animationLoop: false,
                        slideshow: false,
                        controlsContainer: $("#controls-progs"),
                        customDirectionNav: $("#nav-progs a"),
                        touch: true,
                        itemWidth: 320,
                        itemMargin: 25,
                        minItems: 1,
                        maxItems: 3
                      });
                    });
            </script>
        </div>
            <div class="maxwidth-theme overfl">
               <div class="heading-article">
               <h1 class="without-p">Как помочь</h1>
           </div>
                <div class="toggler">
                    <input type="checkbox" id="toggler__checkbox-id-1" class="toggler__checkbox">
                    <label for="toggler__checkbox-id-1" class="toggler__label">Сделать пожертвование</label>
                    <section id="leyka-form" class="toggler__content-box">
                     <div class="maxwidth-theme">
                      <p class="alone-p">Ваше участие меняет настоящее и будущее редких мальчиков с миодистрофией Дюшена. Именно вы помогаете нам помогать</p>
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
                </div>

                <div class="toggler">
                    <input type="checkbox" id="toggler__checkbox-id-2" class="toggler__checkbox">
                    <label for="toggler__checkbox-id-2" class="toggler__label">Стать партнером фонда</label>
                    <section id="to-help-as" class="toggler__content-box">
                    <div class="maxwidth-theme">
                        <div class="items row">
                           <div class="wrap">
                            <div class="help-as-partner col-xs-12">
                                <div class="wrap">
                                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/knight_partner.svg">
                                    </div>
                                    <div>
                                        <span>Вы или ваша организация можете стать Хранителями любой программы помощи редким мальчикам с миодистрофией Дюшенна и перечислять целевое пожертвование на ее реализацию. Мы предоставляем финансовую отчетность, рассказываем о результатах и держим в курсе событий. Напишите на почту partners@mymiofond.ru с темой письма «Сотрудничество». Будем рады знакомству, подробнее обо всем расскажем и ответим на вопросы.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="maxwidth-theme">
                <div class="flexslider" id="progs" style="direction:ltr;">
                  <ul class="slides" id="proggrams-description">
                    <li>
                      <div class="image">
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste.png">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                <span>Программа</span>
                                                <div class="item-name">
                                                    <span>Мы вместе</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="/">подробнее</a>
                                            </div>
                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/my-vmeste-icons.png">
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <li>
                      <div class="image">
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya.png">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                <span>Программа</span>
                                                <div class="item-name">
                                                    <span>Образовательная</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="/">подробнее</a>
                                            </div>
                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/obrazovatelnaya-icons.png">
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
                                                <span>Программа</span>
                                                <div class="item-name">
                                                    <span>Медицинская</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="/">подробнее</a>
                                            </div>
                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/meditsinskaya-icons.png">
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
                                                <span>Программа</span>
                                                <div class="item-name">
                                                    <span>Срочная помощь</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="/">подробнее</a>
                                            </div>
                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/srochnaya-pomosch-icons.png">
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <li>
                      <div class="image">
                                    <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/professiya.png">
                                    <div class="img-label">
                                        <div class="wrap-icon">
                                            <div class="item-info">
                                                <span>Программа</span>
                                                <div class="item-name">
                                                    <span>Профессия</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="/">подробнее</a>
                                            </div>
                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/professiya-icons.png">
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
                                                <span>Программа</span>
                                                <div class="item-name">
                                                    <span>Национальный регистр</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="/">подробнее</a>
                                            </div>
                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/nac-registr-icons.png">
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
                                                <span>Программа</span>
                                                <div class="item-name">
                                                    <span>Адресная помощь</span>
                                                </div>
                                            </div>
                                            <div class="about-link">
                                                <a href="/">подробнее</a>
                                            </div>
                                            <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch-icons.png">
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                  
                </div>
                <div class="custom-navigation" id="nav-progs">
                  
                  <div class="custom-controls-container" id="controls-progs"></div>
                </div>
            </div>
                    </div>
                </section>
                </div>

                <div class="toggler">
                    <input type="checkbox" id="toggler__checkbox-id-3" class="toggler__checkbox">
                    <label for="toggler__checkbox-id-3" class="toggler__label">Стать волонтером фонда</label>
                    <section id="help-as-volunteer-kak" class="toggler__content-box">
                       <div class="maxwidth-theme">
                        <div class="items row">
                           <div class="wrap">
                            <div class="help-as-volunteer col-xs-12">
                                <div class="wrap">
                                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/boy_knight.svg">
                                    </div>
                                    <div>
                                        <span>Ваша компетенция может быть очень нужна фонду. Автоволонтеры, графические дизайнеры, верстальщики, фотографы – ваше участие поможет нам помогать!<br><br>Напишите на почту info@mymiofond.ru с рассказом о себе и темой письма «Как стать волонтёром/автоволонтером/фотографом фонда». Будем рады знакомству, подробнее обо всем расскажем и ответим на ваши вопросы</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                           </div>
                </div>
            </section>
                </div>
	</main><!-- #main -->

<?php
get_footer();