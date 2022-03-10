<?php
/**
Template Name: Женя Казакевич
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
                       <div class="col-xs-12" style="padding: 0; margin-bottom: 60px;"><a href="<?php echo get_home_url(); ?>/zhenya-kazakevich/#form-link">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/zhenya_kazakevich.png" alt=""></a>
                       <div class="img-label item">
                                   <?php $campaign = new Leyka_Campaign(26595);?>
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Женя Казакевич</span>
                                                <span>28 лет</span>
                                        </div>
                                        <div class="goal">
                                        <span style="font-size: 13px;">необходима оплата транспортировки реанимобилем из Азова в Москву и обратно, оплата госпитализации, операции по установке трахеостомы и гастростомы, оплата консультаций специалистов и диагностических мероприятий</span>
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
                                    <a href="<?php echo get_home_url(); ?>/zhenya-kazakevich/#form-link"><span class="btn to-help now">Помочь сейчас</span></a>
                            </div>
                       </div>
                       <div class="col-xs-10">
                           <span>У Жени должна остаться возможность говорить. Коммуникация с другими – его работа и жизнь.</span>
                       </div>
                       <div class="col-xs-11">
                           <span><p>Женя – настоящий победитель. Ему уже 28 лет. Он не раз побеждал болезнь: миодистрофия Дюшенна как будто пугалась достижений парня и переставала на время прогрессировать. Мы и сами, когда читаем историю Жени, не верим глазам. Женя закончил 11 классов с одной четверкой, сдал ЕГЭ на отлично, поступил в институт – сначала на программиста, потом на экономический факультет. Было сложно, но он старался! С 16 лет Женя начал заниматься танцами на колясках. Через три года выиграл первый международный конкурс, танцевал на Паралимпийских играх, за 6 лет выиграл 8 медалей. После операции на позвоночнике занятия танцами пришлось прекратить.</p><br><br><p>
Но Женя нашел себя в работе с компьютером. Он любит делиться знаниями и опытом: сейчас руководит движением людей с инвалидностью в родном городе. Женя и для других ребят с миодистрофией Дюшенна сделал ролик, как сам преодолел страх перед аппаратом неинвазивной вентиляции легких (НИВЛ). Показал, как аппарат позволяет дышать по-новому и дает силы, чтобы мальчишки не боялись его использовать.</p><br><br><p>
У Жени любящая и героическая мама, благодаря которой Женя никогда не терял надежду: мама продала квартиру в городе, взяла кредит и купила дом, чтобы Женя свободно выезжал из дома и гулял. Мама сделала все, чтобы желание Жени танцевать исполнилось, чтобы он мог заниматься, ездить в другие города и выступать.</p><br><br><p>
Сейчас Жене и его маме как никогда требуется ваша поддержка. В сентябре Женя подавился и попал в реанимацию в родном городе Азов. Врачи сделали все, что могли: интубировали Женю, далее требовалась установка трахеостомы, гастростомы и имплантация порт-системы. Состояние осложнялось непонятной этиологии пневмотораксом. Фонд получил тревожные новости и рекомендацию о переводе пациента в многофункциональную больницу Москвы.</p><br><br><p>
А у Жени должна была остаться возможность говорить. Коммуникация с другими – его работа и жизнь. Жене требовались очные консультации специалистов по миодистрофии Дюшенна, оценка бульбарных нарушений и возможности возвращения к масочной, неинвазивной вентиляции.</p><br><br><p>
Решение нужно было принимать быстро. Женя преодолел на реанимобиле более 1000 км. Он в Москве, врачи работают! Для того, чтобы был ресурс помогать в экстренных ситуациях, необходимы средства.</p><br><br><p>
Открываем срочный сбор на оплату транспортировки Жени реанимобилем из Азова в Москву и обратно домоф, на оплату госпитализации, операции по установке трахеостомы и гастростомы, консультации врачей: невролога, эндокринолога, лора, кардиолога и пульмонолога, диагностические мероприятия. Верим, что и сейчас Женя победит!</p>
</span>
                       </div>
                    </div>
            </div>
        </section>
        <span id="form-link"></span>
        <section id="leyka-form">
         
            <div class="maxwidth-theme">
                 <div class="heading-article">
                      <h1 class="without-p">Помочь Жене</h1>
                </div>
               <div class="form-block">
                <?php echo do_shortcode( '[leyka_campaign_form id="26595"]' ); ?>
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