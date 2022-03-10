<?php
/**
Template Name: Даниил Вассалиев
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
              
        <section id="sbor">
            <div class="maxwidth-theme">
                <div class="heading-article">
               <h1 class="without-p">Срочный сбор</h1>
           </div>
            
                   <div class="items row margin0">
                       <div class="col-xs-12" style="padding: 0;"><a href="<?php echo get_home_url(); ?>/daniil-vassaliev/#form-link">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/d_vassaliev.png" alt=""></a>
                       <div class="img-label item">
                                   <?php $campaign = new Leyka_Campaign(30767);?>
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Даниил Вассалиев</span>
                                                <span>13 лет</span>
                                        </div>
                                        <div class="goal">
                                        <span>необходим интрапульмональный перкуссионный вентилятор, выезд врача и аппарат НИВЛ во временное пользование</span>
                                    </div>
                                    </div>
                                    
                                    <div class="progress-bar">
                                        <?php $percent = $campaign->target ? round(100.0 * $campaign->total_funded / $campaign->target, 1) : 0;
            $percent = $percent > 100.0 ? 100.0 : $percent;?>
                                        <span style="width: <?php echo $percent; ?>%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                            <div class="left-amount">
                                               <span><?php echo leyka_amount_format($campaign->total_funded);?></span>
                                                <span>собрано</span>
                                            </div>
                                            <div class="right-amount">
                                               <span><?php 
                                                    $left_sum = $campaign->target - $campaign->total_funded;
                                                    echo leyka_amount_format($campaign->target - $campaign->total_funded);?></span>
                                                <span>осталось</span>
                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <a href="<?php echo get_home_url(); ?>/daniil-vassaliev/#form-link"><span class="btn to-help now">Помочь сейчас</span></a>
                            </div>
                       </div>
                       <div class="col-xs-10" style="margin-top: -70px;">
                           <span>«Даня в реанимации, хотят установить трахеостому, а ему всего 13 лет», – вновь раздался тревожный звонок на телефон фонда, на этот раз от мамы нашего нового подопечного Даниила.</span>
                       </div>
                       <div class="col-xs-11">
                           <span><p>Даня активный и любознательный ребенок – собрал впечатляющие коллекции натуральных камней и динозавров. Любит путешествовать, горы и Абхазию. Два года назад начал читать фантастику. Увлекается английским с детства, недавно в любимые предметы подтянулась алгебра. «В школу мы со всеми ходим только на подготовительные занятия, а так учимся отдельно. У нас большая и дружная семья – у Дани есть младшие брат, он с ним «не разлей вода», еще бабушка с дедушкой, которые всегда рядом».</p><br>
                           <p>Учеба, увлечения, ежедневные занятия физической терапией и любимая семья. Все было хорошо, пока Даня не простудился. Оказалось, мышц, чтобы кашлять уже недостаточно. Близкие об этом не знали. Не знали и врачи. Сейчас Даня в реанимации и дышать ему помогает трубка в горле.</p><br>
                           <p>«Первые несколько дней нам давали шанс, что мы раздышимся. Потом врач сказал, что нужно делать операцию – устанавливать трахеостому и дал два дня на размышления».</p><br>
                           <p>Установить трахеостому значит сделать дырку в трахее, куда вставят трубку навсегда. Это инвазивная вентиляция легких. Но есть неинвазивная искусственная вентиляция легких – когда оперативное вмешательство не требуется, используется маска и аппарат НИВЛ. Аппарат НИВЛ дает возможность быть мобильным, аппарат работает от розетки или аккумулятора, его можно переносить и перевозить.</p><br>
                           <p>В России, к сожалению, почти в 100 процентах случаев, когда у врачей появляется пациент с дыхательной недостаточностью — его интубируют и ставят трахеостому. Для европейских коллег установка трахеостомы — исключительный случай. В Америке соотношение больных с трахеостомой в сотни раз меньше, чем масочных.</p><br>
                           <p>Чтобы пациента с миодистрофией Дюшенна перевести с инвазивной вентиляции легких (ИВЛ) на неинвазивную (через маску), нужно пытаться. Нужно умение, желание и время. Раз за разом нужно тренировать пациента и отлучать от постоянной принудительной вентиляции в пользу масочной.</p><br>
                           <p>Дане всего 13, он активный ребенок, почему трахеостома</p><br>
                           <p>Неделю мы, фонд, искали решение. Вместе с экспертом решили направить в Нижний Новгород врача с оборудованием. Это лучшее из возможного – решение проблемы Дани послужит пользой для других детей в регионе. Когда местные врачи увидят оборудование, вместе с экспертом будут работать с Даней – у них появится знание и умение чтобы помогать. Чтобы трахеостома перестала быть единственным решением в ситуации дыхательной недостаточности у ребят с миодистрофией Дюшенна и других сложных пациентов.</p><br>
                           <p>В Нижний Новгород поедет врач, аппарат НИВЛ и аппарат перкуссии. И наша с вами вера, что все получится!</p><br>
                           <p>Чтобы важная миссия состоялась и Даня вернулся к учебе, увлечениям и семье, нужно собрать 479 485 рублей.</p></span>
                       </div>
                    </div>
            </div>
        </section>
        <span id="form-link"></span>
        <section id="leyka-form">
         
            <div class="maxwidth-theme">
              <div class="heading-article">
                      <h1 class="without-p">Помочь Дане</h1>
                </div>
               <div class="form-block">
                <?php echo do_shortcode( '[leyka_campaign_form id="30767"]' ); ?>
                <div class="donations-custom-block">
                <div class="boy-to-left"></div>
                <div class="donation-list-caption">
                    <span>Спасибо за помощь!</span>
                </div>
                <?php echo do_shortcode('[leyka_donations_list campaign_id="0" unstyled="true" length="5"]'); ?>           
                
                
                </div>
                </div>
            </div>
        </section>
        <div class="subscribe-form-block">
            <div class="maxwidth-theme">
              <div class="items row subscribe">
                  <div class="block-box">
               <div class="text-block v2">
                  <img src="<? echo get_template_directory_uri()?>/assets/images/icons/paper-plane.svg">
                  <div class="wrapper">
                   <span>Письмо раз в две недели с самыми важными новостями о редких мальчиках с миодистрофией Дюшенна</span>
                   
                   </div>
               </div>
               </div>
               <div class="wrapper">
                <form method="POST" action="https://cp.unisender.com/ru/subscribe?hash=64ehc9br4hpsbuwicmd8ewszew3psyohq95xwgaxooft561thsz7o" name="subscribtion_form">
                        <div class="subscribe-form-item subscribe-form-item--input-email input-subscribe">
                            <input class="subscribe-email-mio" type="text" name="email" value="" placeholder="Ваша электронная почта">
                            <input class="subscribe-submit-mio" type="submit" value="Хочу">
                        </div>
                        <input type="hidden" name="charset" value="UTF-8">
                        <input type="hidden" name="default_list_id" value="20668111">
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