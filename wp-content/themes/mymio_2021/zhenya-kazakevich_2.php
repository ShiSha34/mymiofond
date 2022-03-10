<?php
/**
Template Name: Женя Казакевич (31.12.21)
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
                       <div class="col-xs-12" style="padding: 0; margin-bottom: 60px;"><a href="<?php echo get_home_url(); ?>/zhenya-kazakevich-2/#form-link">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/glavnaya/zhenya-kazakevich-2.png" alt=""></a>
                       <div class="img-label item">
                                   <?php $campaign = new Leyka_Campaign(40714);?>
                                    <div class="boy-name">
                                        <div class="wrapper-row">
                                                <span>Женя Казакевич</span>
                                                <span>29 лет</span>
                                        </div>
                                        <div class="goal">
                                        <span style="font-size: 10.2px;">необходима оплата длительного лечения с применением медикаментов,  расходных материалов, лабораторных исследований и регулярной поддержки медицинского персонала, оплата двухместной палаты, реанимации, постоянного мониторинга (обследования+КТ), энтерального питание и прочее</span>
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
                                    <a href="<?php echo get_home_url(); ?>/zhenya-kazakevich-2/#form-link"><span class="btn to-help now">Помочь сейчас</span></a>
                            </div>
                       </div>
                       <div class="col-xs-10">
                           <span>До последнего надеялись, что получится справиться без вашей поддержки. Не хотели тревожить вас в праздники. Но нашему самому взрослому подопечному срочно нужна помощь.</span>
                       </div>
                       <div class="col-xs-11">
                           <span>
                           <p><b>Update!</b> Прогнозировать лечение Жени в экстренной ситуации было сложно, никто точно не мог сказать, как долго Женя пробудет в больнице. Врачи составили примерный план лечения, включили расходы на оплату длительной госпитализации и операции торакотомия, которую проводят для лечения заболевания легких, и выставили предварительный счет.</p><br>
                           <p>Мы направили в больницу гарантийное письмо об оплате и в канун Нового года обратились к вам со срочным сбором на сумму 1 850 000 рублей. Но все обошлось, состояние Жени стабилизировалось, третья операция не понадобилась. Парня выписали домой и сумма на оплату госпитализации и транспортировки уменьшилась в разы — 695 836 рублей. Почти половину вы уже помогли собрать, спасибо вам за поддержку!</p><br>
                           <p>Женя Казакевич вновь сражается с миодистрофией Дюшенна. Он не сдался ни разу, он держится и не отступает, но болезнь находит всё новые и новые способы атаки.</p><br>
                           <p>Звонок в трубку – через слезы мамы можно расслышать только «Женя, Женя, вся еда из него выливается, не знаю, что делать, помогите».</p><br>
                           <p>После замены гастростомы – трубки через которую поступала еда в организм Жени, у парня появились боли в животе. Обычные лекарства не помогали, что происходит – понять никто не мог. Отправили запрос в московскую больницу, где уже наблюдали Женю и могли дать рекомендации. Ответ – срочно убирать гастростому, вся еда сейчас поступает не в желудок, а в кишечник – внутри повреждение.</p><br>
                           <p>В родном городе Азове Жене поставили зонд – это единственный способ питаться, когда пища поступает через специальную трубку в носу. Но длительно зонд использовать нельзя, а в состоянии Жени опасно вдвойне, нужна операция, чтобы убрать повреждение желудка. Местные врачи пытались помочь Жене, но их техника даже не смогла рассмотреть повреждение внутренних органов на КТ, а оперировать такого пациента еще страшнее. Врачи в Ильинской больнице согласились принять Женю для срочной операции. Мы организовали транспортировку и решили все вопросы с госпитализацией Жени с мамой и бригадой опытных врачей из Азова в Ильинскую больницу. Коллеги из фонда «Вера» взяли на себя расходы по операции. Это пример совместной работы. Спасибо, коллеги!</p><br>
                           <p>План лечения выполнен, проведена операция, установлена гастростома, но мы полагаем, а случается… иное:</p><br>
                           <p>Женя попал в реанимацию, ателектаз и кровь в легком. Нашли поврежденный сосуд, зашили. Сейчас хирурги, пульмонологи, терапевты, кардиологи и реаниматологи наблюдают за состоянием Жени. Борются за него, но состояние не стабильно. Женю предстоит еще одна операция. Сложная. Оставить Женю мы не можем. Вместе с мамой Женя прошел очень и очень многое: множественные госпитализации, в прошлом году Жене установили трахеостому, мама заново учила Женю сидеть, но вместе у них получилось. Каждый день учились заново сидеть, сначала 5 минут, потом 10 минут. Мама массировала руки – Женя смог снова сидеть и вновь пользоваться компьютером. Женя и в этот раз победит. Мы верим. Верим, что мама вернется домой вместе с Женей.</p><br>
                            <p>У них дома кошка Кнопа, приятные совместные дела – попить чай, запустить убираться робот-пылесос Федю, посмеяться, собрать друзей Жени и попеть песни под гитару. У Жени очень много друзей и поддержки, и из танцевального клуба и из молодежного клуба, где Женя был руководителем, есть племянники, которые очень его любят. Все они, как и мы, верят и ждут, что Женя вернется домой.</p><br><br>
                            
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
                <?php echo do_shortcode( '[leyka_campaign_form id="40714"]' ); ?>
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