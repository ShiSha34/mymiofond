<?php
/**
Template Name: Национальный регистр
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
        <section id="register">
            <div class="maxwidth-theme">
               <div class="heading-article">
                   <h1>Национальный регистр</h1>
                   <p>Проект реализуется победителем конкурса «Новое измерение» благотворительной программы «Эффективная филантропия» Благотворительного фонда Владимира Потанина»<br><br>Программное обеспечение объединит данные о всех пациентах с миодистрофией Дюшенна в России и поможет создать единый регистр с актуальной информацией о состоянии и нуждаемости подопечного</p>
               </div>
               <div class="items row">
                  <div class="how-we-do take-part col-xs-12">
                       <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-10">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/national-register/1.png" alt="Схематичные мальчики на карте России">
                           </div>
                       </div>
                   </div>
                   <div class="how-we-do col-xs-12 col-md-6">
                       <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-8">
                               <h1>Почему это нужно</h1>
                               <span>В России нет официального регистра пациентов с миодистрофией Дюшенна. Поэтому невозможно ответить на вопрос сколько мальчиков с этой болезнью живет в нашей стране и какие у них проблемы. Систематизация данных поможет наглядно показать масштаб проблемы и положение пациентов с миодистрофией Дюшенна в том или ином регионе России. Появится возможность отслеживать определенные закономерности течения болезни, например, при разных поломках гена или объеме и качестве оказываемой помощи. Это даст дополнительные аргументы, чтобы отстаивать права и улучшать доступность системной и квалифицированной помощи для наших подопечных, которые задекларированы государством.</span>
                           </div>
                       </div> 
                   </div>
                   <div class="why-it-needs col-xs-12 col-md-6">
                         <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-8">
                               <h1>Что это будет</h1>
                               <span>Разрабатывается программное обеспечение, которое позволит собирать, систематизировать и анализировать данные. Это позволит еще лучше понимать каждого редкого пациента – подопечного с миодистрофией Дюшенна. От вида мутации гена, особенностей течения заболевания до качества жизни мальчика и его семьи. Обеспечение лекарственными препаратами, техническими средствами реабилитации, удаленность от специалиста и возможность их посещать, наличие доступной среды и многое другое. Это поможет нам помогать еще больше и эффективнее.</span>
                           </div>
                       </div>       
                   </div>
                   
               </div>
            </div>
        </section>
        <section id="leyka-form">
         <div class="maxwidth-theme">
          <div class="heading-article">
               <h1 class="without-p">Поддержите программу</h1>
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
                    <div class="help-as-partner col-xs-12 col-lg-5">
                        <h1>Помочь как партнер</h1>
                        <div class="wrap">
                            <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/knight_partner.svg">
                            </div>
                            <div>
                                <span>Вы можете стать Хранителем программы «Национальный регистр» и присоединиться к ордену МойМио. Мы предоставляем финансовую отчетность, держим в курсе событий, а вы участвуете в формировании годового бюджета для реализации программы и увеличиваете масштабы помощи редким мальчикам с миодистрофией Дюшенна.<br><br><b>Напишите на почту partners@mymiofond.ru</b> с темой письма «Сотрудничество». Будем рады знакомству, подробнее расскажем о программе и ответим на вопросы.</span>
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