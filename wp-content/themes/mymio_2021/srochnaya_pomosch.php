<?php
/**
Template Name: Срочная помощь
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
        <section id="srochnaya-pomosch">
            <div class="maxwidth-theme">
               <div class="heading-article">
                   <h1>Срочная помощь</h1>
                   <p>Организуем и оказываем срочную медицинскую помощь подопечным в экстренных и критических ситуациях</p>
               </div>
               <div class="items row">
                   <div class="how-we-do col-xs-12 col-md-6">
                       
                   </div>
                   <div class="why-it-needs col-xs-12 col-md-6">
                     <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-8">
                               <h1>Почему это нужно</h1>
                               <span>Должны признаться &mdash; эта программа, где невозможно четко планировать, определить объем помощи и бюджет. Всё это сложно предсказать, так как речь о критической ситуации, в которой может оказаться наш подопечный с редкой и коварной болезнью. За время пандемии количество запросов на экстренную медицинскую помощь подопечным возросло. Совет фонда решил создать неприкосновенный денежный резерв, так называемую «подушку безопасности», чтобы в экстренной ситуации иметь возможность быстро среагировать, организовать медицинскую помощь и спасти жизнь. К сожалению, часто мы понимаем, что если не поможем мы &mdash; то не поможет никто.</span>
                           </div>
                       </div>            
                   </div>
                   <div class="how-we-do take-part col-xs-12">
                       <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-10">
                               <h1>Как мы это делаем</h1>
                               <span>Миодистрофия Дюшенна – редкое заболевание и часто врачи не знают об особенностях болезни. Если подопечный попадает в больницу – первым делом мы связываем лечащего врача со специалистом по миодистрофии Дюшенна или с консультантом фонда. Мы стараемся, чтобы помощь была оказана в рамках государственных гарантий. В экстренных случаях, когда помощь на месте оказана быть не может, фонд организует и оплачивает медицинскую помощь сторонних медицинских организаций: многопрофильных центров.</span>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </section>
        <section id="history">
            <div class="maxwidth-theme">
                <div class="wrap">
                   <div class="col-lg-11 with-border">
                       <div class="img-absolute">
                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/srochnaya-pomosch/2.png" alt="Мама с сыном">
                       </div>
                        <div class="quote col-lg-8">
                                          <span>Женя – настоящий победитель. В августе ему исполнилось 28 лет. Он не раз побеждал болезнь: миодистрофия Дюшенна как будто пугалась достижений парня и переставала на время прогрессировать.<br><br>...дома Женя подавился и попал в реанимацию в родном городе Азов. Врачи сделали все, что могли: интубировали Женю, далее требовалась установка трахеостомы, гастростомы и имплантация порт-системы. Состояние осложнялось непонятной этиологии пневмотораксом. Фонд получил тревожные новости и рекомендацию о переводе пациента в многофункциональную больницу Москвы. Решение нужно было принимать быстро...</span>
                                          <a href="<?php echo get_home_url(); ?>/zhenya-kazakevich/">Читать полную историю ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?/*<section id="programm-fees">
            <div class="maxwidth-theme">
                <div class="items row help-banner">
                   <div class="col-xs-12 col-md-6 ">
                       <div class="element-wrap">
                           <div class="left-side col-xs-10 col-md-8">
                              <span>Уже собрано на программу</span>
                               <span>80 030 рублей</span>
                           </div>                           
                       </div>
  
                   </div>
                   <div class="col-xs-12 col-md-6">
                       <div class="element-wrap">
                           <div class="right-side col-xs-10 col-md-8">
                              <span>Осталось собрать</span>
                               <span>239 420 рублей</span>
                           </div>                           
                       </div>                 
                   </div>
                </div>
            </div>
        </section>*/?>
        <section id="leyka-form">
         <div class="maxwidth-theme">
          <div class="heading-article">
               <h1>Поддержите программу</h1>
               <p>Благодаря вашей поддержке у фонда будет необходимый запас средств на оказание срочной медицинской помощи мальчикам в критических ситуациях. Вы можете быть уверены, что ваше пожертвование пойдет на спасение жизни.</p>
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
                                <span>Вы можете стать Хранителем программы «Срочная помощь» и присоединиться к ордену МойМио. Мы предоставляем финансовую отчетность, держим в курсе событий, а вы участвуете в формировании годового бюджета для реализации программы и увеличиваете масштабы помощи редким мальчикам с миодистрофией Дюшенна.<br><br><b>Напишите на почту partners@mymiofond.ru</b> с темой письма «Сотрудничество». Будем рады знакомству, подробнее расскажем о программе и ответим на вопросы.</span>
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