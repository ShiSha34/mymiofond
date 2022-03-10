<?php
/**
Template Name: Гриша Храмцов
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
                       <div class="col-xs-12" style="padding: 0; margin-bottom: 60px;"><a href="<?php echo get_home_url(); ?>/grisha-hramczov/#form-link">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/grisha_hramtsov.png" alt=""></a>
                       <div class="img-label item">
                                   <?php $campaign = new Leyka_Campaign(41266);?>
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Гриша Храмцов</span>
                                                <span>11 лет</span>
                                        </div>
                                        <div class="goal">
                                        <span>необходим тренажер активно-пассивного типа, который поможет Грише поддерживать физическую активность</span>
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
                                    <a href="<?php echo get_home_url(); ?>/grisha-hramczov/#form-link"><span class="btn to-help now">Помочь сейчас</span></a>
                            </div>
                       </div>
                       <div class="col-xs-10">
                           <span>«Когда мы пытались получить положенную нам коляску с электроприводом, нам ответили: «Там так много писанины, заявлений, может не стоит? Да и очередь на эти коляски большая, все равно не получите»</span>
                       </div>
                       <div class="col-xs-11">
                           <span><p>У 11-летнего Гриши миодистрофия Дюшенна – болезнь, которая постепенно разрушает мышцы. Он живет вместе с мамой, папой и сестрой в Екатеринбурге. Папа Гриши – преподаватель. «Каждое лето мы садились в машину и уезжали, были на всех озерах Челябинской области, на Алтае, в Крыму, в Башкирии, в Тюменской, Новосибирской и Омской области, ездили всегда дикарями, останавливаясь только в интересных местах. Хотели успеть показать Грише мир, дать ему больше, поэтому везде брали с собой», – делится мама. С 2020 года путешествий стало меньше – парень уже не ходит самостоятельно.</p><br>
                           <p>У Гриши есть старшая сестра – Катя, ей 12, она ласково заботится о брате. «Я могу их вдвоем оставить, она всегда поможет, и в туалет сходить, и покушать приготовить. Они часто в Майнкрафт играют и любят гулять, но в инвалидной коляске Кате брать Гришу с собой стало непросто, с коляской ведь не поиграешь, не побегаешь, даже ссорились с Гришей из-за этого. Да и Гришу, когда он сел в коляску, приходилось именно выгонять на улицу. Ну а как хотеть гулять, если за спиной мама, едь туда, едь сюда, а хочется самостоятельности и свободы, да и со мной время прогулки ограничено, у меня ведь дела по дому», – рассказывает мама.</p><br>
                           <p>«Когда мы пытались получить положенную нам коляску с электроприводом, нам ответили: «Там так много писанины, заявлений, может не стоит? Да и очередь на эти коляски большая, все равно не получите». Да что говорить, если врач нужные нам ортопедические ботинки не хотела выписывать: «А зачем, он ведь уже не ходит?!»</p><br>
                           <p>В апреле 2020 года мы лежали в больнице и от службы паллиативной помощи узнали о фонде «МойМио».</p><br>
                           <p>«Я не знала, что существуют такие специалисты. Юрист фонда подробно объяснила, как получить нужную нам коляску, и составила необходимые заявления. Я сразу же относила их на почту, и, удивительно, мы всегда получали ответ. Видимо, там сразу понимали, что тут уже не просто мама, а юрист. Если бы не юрист, то после первых двух отказов, я бы опустила руки, подумала, что это нереально, одни бумажки, а толку ноль.</p><br>
                           <p>Честно, не верила, что это возможно, но 12 декабря к нам приехала коляска с электроприводом. Гриша сразу сказал, что пойдет гулять, на улице врубил такую скорость, что сестре за ним бежать пришлось. В общем радости у детей было полные штаны. И дома Гриша теперь всегда на коляске. Мы потихонечку и в догонялки играем, правда, если Гриша нас догоняет, то у нас ноги отдавлены», – смеется мама. «Теперь еще точно попробуем получить и кровать, и подъемник».</p><br>
                            <p>К сожалению, не все нужные технические средства реабилитации можно получить от государства. Гриша активный, любознательный и настойчивый парень, учится в школе, его любимый урок адаптивная физическая культура, но Грише желательно еще чаще разрабатывать руки и ноги.</p><br>
                            
                            <p>Мы открываем сбор на сумму 38 000 рублей на тренажер активно-пассивного типа, который поможет Грише поддерживать физическую активность и позволит слабеющим от болезни рукам и ногам сохранять амплитуду движений, что в свою очередь уменьшит вероятность осложнений.</p>
                        </span>
                       </div>
                    </div>
            </div>
        </section>
        <span id="form-link"></span>
        <section id="leyka-form">
         
            <div class="maxwidth-theme">
                 <div class="heading-article">
                      <h1 class="without-p">Помочь Грише</h1>
                </div>
               <div class="form-block">
                <?php echo do_shortcode( '[leyka_campaign_form id="41266"]' ); ?>
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