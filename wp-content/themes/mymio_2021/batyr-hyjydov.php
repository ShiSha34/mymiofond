<?php
/**
Template Name: Батыр Хайыдов
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
                       <div class="col-xs-12" style="padding: 0;"><a href="/">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/batyr-hyjydov.png" alt=""></a>
                       <div class="img-label item">
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Батыр Хайыдов</span>
                                                <span>19 лет</span>
                                        </div>
                                        <div class="goal">
                                        <span>необходим аппарат НИВЛ</span>
                                    </div>
                                    </div>
                                    
                                    <div class="progress-bar">
                                        <span style="width: 100%;"></span>
                                    </div>
                                    <div class="amounts">
                                        <div class="wrapper-row">
                                            <div class="left-amount">
                                               <span>118 200</span>
                                                <span>Собрана вся сумма. Спасибо!</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <a><span class="btn to-help now disable">Помочь сейчас</span></a>
                            </div>
                       </div>
                       <div class="col-xs-10">
                           <span>Звонок на телефон фонда, голос взволнованный:  «Я (имя), сестра Батыра, мне позвонила мама — Батыр хватает воздух как рыбка, ему тяжело, мы боимся!»</span>
                       </div>
                       <div class="col-xs-11">
                           <span><p style="font-weight: 600;">Из записей координатора фонда:</p><p>«Подопечный нуждается в оказании паллиативной помощи и динамическом наблюдении. Мама с папой плохо владеют русским, простые люди, которые просто не могут разобраться в заболевании».</p><br><p>Батыру 19 лет, он живет вместе с мамой и папой в Самаре. Хорошо, что этот звонок SOS из Самары. В Самаре есть потрясающая Ольга Васильевна, главный врач АНО Самарский хоспис, она смогла выехать к Батыру и оценить его состояние. Сомнений не было — юноше необходима экстренная вентиляционная поддержка. Аппарат НИВЛ на месте найти не удалось, и тогда координатор подопечных Дарья отправила НСП (набор скорой помощи) — аппарат НИВЛ — самой быстрой экспресс-доставкой.</p><br><p>Батыру стало лучше, он порозовел. Казалось, проблема решена, но нет. Спустя какое-то время состояние ухудшилось, появился дискомфорт от вентиляции, сатурация не хотела держаться на нормальных значениях. Это значит, пациенту необходима врачебная помощь, медицинская. Значит, необходим более сложный аппарат, и настраивать аппарат необходимо медленно и по-настоящему, с динамикой показателей газов крови, с оценкой сердечного ритма.</p><br><p>Выручивший нас АНО Самарский хоспис — учреждение негосударственное и, к сожалению, работает только с онкопациентами. Попытки найти лечебное учреждение в Самаре для помощи и обследования Батыра (даже на платной основе!) не увенчались успехом.</p><br><p>Значит, Срочная помощь! Пока реаниматолог из Москвы готовился к выезду, врач ультразвуковой диагностики провел исследования ЭХО-КГ на дому у Батыра (ох, какое же СПАСИБО мы говорили этому врачу!), чтобы понять, не может ли состояние сердца так влиять на вентиляцию. Успели вовремя — пациент начал уходить в кому, когда врач и сложный аппарат из Москвы приехали.</p><br><p>Реаниматолог обследовал юношу. На тот момент только вентиляция, обогащенная кислородом, помогла стабилизировать Батыра. Но у доктора-реаниматолога много разного диковинного оборудования —  дефибриллятор, газовый анализатор, ИВЛ и др. А концентратора нет. Помогли коллеги из местного БФ Евита, они передали Батыру во временное пользование кислородный концентратор.</p><br><p>Доктор провел в Самаре несколько дней, сейчас сатурация уверенно на аппаратах держится 97, подопечный бодр, стал есть — и говорит, что хочет лечиться. Предпринятые меры помогут временно, юноше необходима медицинская помощь, обследования, динамическое наблюдение. И это не может обеспечивать маленький фонд, пусть даже и тем более из Москвы. Это государственная облигация. Обязанность.</p></span>
                       </div>
                    </div>
            </div>
        </section>
        <section id="leyka-form">
         
            <div class="maxwidth-theme">
               <div class="form-block">
                <?php echo do_shortcode( '[leyka_campaign_form id="19939"]' ); ?>
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