<?php
/**
Template Name: Кирилл Шушкин
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
                       <div class="col-xs-12" style="padding: 0;"><a href="<?php echo get_home_url(); ?>/kirill-shushkin/#form-link">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/kirill-shushkin.png" alt=""></a>
                       <div class="img-label item">
                                   <?php $campaign = new Leyka_Campaign(40354);?>
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Кирилл Шушкин</span>
                                                <span>24 года</span>
                                        </div>
                                        <div class="goal">
                                        <span>необходим годовой запас специализированного лечебного питания</span>
                                    </div>
                                    </div>
                                    
                                    <div class="progress-bar">
                                        <?php $percent = $campaign->target ? round(100.0 * $campaign->total_funded / $campaign->target, 1) : 0;
            $percent = $percent > 100.0 ? 100.0 : $percent;?>
                                        <span style="width: 100%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                            <div class="left-amount">
                                               <span>60 000</span>
                                                <span>Собрана вся сумма. Спасибо!</span>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <a href="<?php echo get_home_url(); ?>/kirill-shushkin/#form-link"><span class="btn to-help now disable">Помочь сейчас</span></a>
                            </div>
                       </div>
                       <div class="col-xs-10" style="margin-top: -70px;">
                           <span>Полгода назад наш подопечный 24-летний Кирилл Шушкин из Владимирской области начал стремительно худеть. «Стал кушать совсем без аппетита, а раньше ел и первое и второе. Потерял 20 килограмм, даже косточки стали видны», – поделилась мама.</span>
                       </div>
                       <div class="col-xs-11">
                           <span><p>Гастроэнтеролог дистанционно проконсультировала парня и назначила специализированное лечебное питание, которое облегчает усвоение всех нужных питательных веществ у пациентов с резко пониженной способностью всасывания. Кирилл попробовал так питаться целый месяц и стал вновь набирать в весе. Стоимость запаса лечебного питания на год – 60 000 рублей.</p><br>
<p>Долгое время семья Кирилла, как и многие семьи детей с миодистрофией Дюшенна, не знала о диагнозе. В детстве, когда родители стали подозревать неладное, невролог не распознал болезнь, а посчитал, что у мальчика обычное плоскостопие. Диагноз мама узнала, когда сыну было девять. До этого была уверена: у Кирилла сколиоз и плоскостопие, как сказала врач. В 12 лет Кирилл уже сидел в инвалидной коляске.</p><br>
<p>«Кирилл у меня спокойный по характеру, очень воспитанный и скромный. С 1 по 4 класс ходил в школу. Зимой, когда выпадал снег и были сугробы, я возила его на санках. Весной и осенью приходилось выходить к занятиям рано – Кирилл долго шел. В 5 классе мы перешли на дистанционное обучение, в средней школе нужно уже самому ходить в разные классы, Кирилл боялся, что его кто-то толкнет или еще чего.</p><br>
<p>У нас дома 4 кошки и собака. Я человек жалостливый и всех котят подбираю, а когда Кирилл захотел собаку, мы взяли ее из приюта. Назвали – Чарли. Но самый любимый питомец у Кирилла – кошка Дымка. Она у нас самая старшая. Она всегда на руках у него, спит с ним, у них особая любовь.</p><br>
<p>По вечерам мы с Кириллом заходим в Одноклассники и играем в мини-приложениях в слова. Это наша любимая игра. А еще Кирилл часто смотрит футбол – он у меня фанат «Зенита», – рассказывает мама.</p><br>
<p>О фонде семья узнала в 2017 году, когда Кириллу было 20 лет. Кирилл сразу попал на проект «Клиника МДД» в Москву, так как до этого ни разу не был у специалистов по миодистрофии Дюшенна. 20 лет семья была один на один с диагнозом и своей бедой.</p><br>
<p>Специалисты обследовали парня и дали нужные рекомендации. «В нашей области таких врачей не было и нет, мы до сих пор пользуемся всем, что нам сказали на Клинике». После – Кирилл с мамой поехал в психолого-реабилитационном лагере, где пообщался с другими ребятами, а мама познакомилась с родителями таких же детей, как Кирилл. «Общения нам с сыном очень не хватало». В 2018 году вы помогли приобрести жизненно-необходимый Кириллу аппарат НИВЛ, который помог Кириллу полноценно дышать.</p><br>
<p>Сейчас, чтобы Кирилл продолжил набирать вес, чтобы Кирилл стал чувствовал себя лучше и мог играть с мамой в слова и болеть за «Зенит» нужно собрать 60 000 рублей на годовой запас специализированного лечебного питания.
</p></span>
                       </div>
                    </div>
            </div>
        </section>
        <span id="form-link"></span>
        <section id="leyka-form">
         
            <div class="maxwidth-theme">
              <div class="heading-article">
                      <h1 class="without-p">Помочь Кириллу</h1>
                </div>
               <div class="form-block">
                <?php echo do_shortcode( '[leyka_campaign_form id="40354"]' ); ?>
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