<?php
/**
Template Name: Адресная помощь
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
        <section id="adresnaya-pomosch">
            <div class="maxwidth-theme">
               <div class="heading-article">
                   <h1>Адресная помощь</h1>
                   <p>Проект «Дыши», наборы первой и скорой помощи и социально-юридическое сопровождение подопечных семей.</p>
               </div>
               <div class="items row">
                  <div class="top-adress">
                      <div class="wrap col-xs-12">
                       <div class="photo-block col-md-12 col-lg-9">
                           <div class="element-wrap">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch/1.png">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch/2.png">
                               <div class="w-100"></div>
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch/3.png">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch/4.png">
                           </div>
                        </div>
                        
                       <div class="teal-block col-md-12 col-lg-3">
                           <div class="element-wrap">
                              <a href="<?php echo get_home_url(); ?>/myi-pomogli/" target="_blank"></a>
                               <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>151</span>
                                                <span>мальчик</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">начал дышать</span>
                                            </div>
                                        </div>
                                    </div>
                           </div>
                       </div>
                       </div>
                   </div>
                   <div class="how-we-do take-part col-xs-12">
                       <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-10">
                               <h1>Что такое проект «Дыши»?</h1>
                               <span>Когда миодистрофия Дюшенна добирается до мышц дыхания, они ослабевают и дыхание становится недостаточным, поверхностным. В такой ситуации обычная простуда и ОРВИ могут привести к серьезным осложнениям. Чтобы вернуть дыхание мальчикам жизненно-необходимы неинвазивные аппараты искусственной вентиляции легких – аппараты НИВЛ. Подбирается маска, а также аппарат небольшого размера. Вместе с ним ребенок начинает полноценно дышать и «чувствовать» воздух. Это совсем другая жизнь – когда чувствуешь силы, когда вновь появляется настроение учиться и творить. Вместе с воздухом к мальчикам возвращается жизнь.<br><br>Проект «Дыши» подразумевает покупку и настройку жизненно-необходимого оборудования. Фонд собирает информацию о состоянии здоровья подопечных мальчиков на проектах: в лагерях, Клиниках МДД, в родительских клубах и на консультациях. В ситуациях, где аппарат НИВЛ требуется не в кратчайшие сроки, фонд помогает семье добиться аппарата от государства. В экстренных случаях, когда нельзя ждать, мы открываем срочные сборы и обращаемся к друзьям и жертвователям с просьбой приобрести для подопечного аппарат НИВЛ. Но вместе с этим работаем над тем, чтобы семей детей с миодистрофией Дюшенна своевременно обеспечивали жизненно-необходимым оборудованием и расходными материалами в рамках государственной программы помощи.</span>
                           </div>
                       </div>
                   </div>
                   <div class="top-adress">
                      <div class="wrap col-xs-12">
                       <div class="teal-block col-md-12 col-lg-4">
                           <div class="element-wrap">
                               <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>>150</span>
                                                <span>наборов</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">первой помощи</span>
                                            </div>
                                        </div>
                                    </div>
                           </div>
                           <div class="element-wrap">
                               <div class="flex-wrapper-row">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>>150</span>
                                                <span>наборов</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">скорой помощи</span>
                                            </div>
                                        </div>
                                    </div>
                           </div>
                       </div>
                       <div class="photo-block col-md-12 col-lg-8">
                           <div class="element-wrap">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch/5.png" alt="Мальчик дышит через мешок амбу">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch/6.png" alt="Мальчик с маской для аппарата НИВЛ">
                               <div class="w-100"></div>
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch/7.png" alt="мальчик учится тренировать дыхание">
                               <img src="<? echo get_template_directory_uri()?>/assets/images/pages/programms/adresnaya-pomosch/8.png" alt="Врач показывает как пользоваться мешком амбу">
                           </div>
                        </div>
                       </div>
                   </div>
                   <div class="how-we-do take-part col-xs-12">
                       <div class="element-wrap">
                           <div class="block-description col-xs-10 col-md-10">
                               <h1>Что такое наборы первой помощи и зачем они нужны?</h1>
                               <span>Набор первой помощи – это набор безопасности: пульсоксиметр и мешок Амбу. Пульсоксиметр позволяет следить за сатурацией – насыщением крови кислородом. Это важно если ребенок заболел простудой, ОРВИ или гриппом.<br><br>Мешок Амбу – механическое подобие аппарата НИВЛ. Используется в критических ситуациях, когда рядом нет аппарата и для дыхательной гимнастики. С 8 лет подопечным нужно тренировать легкие: расправлять их, делая по 100 вдохов в день через мешок Амбу. Набор высылается подопечным по запросу и выдается на проекте «Клиника MDD», где физический терапевт или пульмонолог рассказывают, как правильно им пользоваться.<br><br>Набор скорой помощи – это аппарат НИВЛ и аппарат откашливания, оборудование, состоящее на балансе фонда. Фонд предоставляет набор скорой помощи временно, когда подопечный в тяжелом состоянии, ему тяжело дышать или кашлять и рядом невозможно найти аппарат НИВЛ или аппарат откашливания. Аппараты всегда в рабочем состоянии. После каждого подопечного проходят дезинфекцию и передаются подопечному в чистом и полностью укомплектованном виде.</span>
                           </div>
                       </div>
                   </div>
                   
               </div>
            </div>
        </section>
        <section id="legal-assistance">
            <div class="maxwidth-theme">
                <div class="heading-article">
                   <h1 class="without-p">Юридическая помощь</h1>
                </div>
               <div class="items row">
                   <div class="col-md-12 col-lg-8">
                       <span>Фонд работает над тем, чтобы семьи детей с миодистрофией Дюшенна своевременно обеспечивались всем необходимым в рамках государственной программы помощи. В фонде есть юрист с опытом работы более 25 лет, который занимается юридическим сопровождением семей, регулярно отправляет запросы в государственные органы, отстаивает права подопечных в сложных ситуациях и помогает разбираться семьям в правовых вопросах.</span>
                   </div>
                   <div class="col-md-12 col-lg-4">
                      <div class="wrapper">
                        <div class="img-wrapper">
                           
                           </div>
                        <span>Светлана</span>
                       </div>
                   </div>
               </div>
           
           
            </div>
        </section>
        <section id="adresnaya-support">
            <div class="maxwidth-theme">
                <div class="items row support">
                  <h1><b>С вашей поддержкой</b></h1>
                   <div class="once-support col-xs-12">
                   <div class="flex-wrapper">
                    <div class="element-wrap">
                               <div class="flex-wrapper-col">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>> 2000</span>
                                                <span>консультаций</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">проведено</span>
                                            </div>
                                        </div>
                                </div>
                    </div>
                    <div class="element-wrap">
                               <div class="flex-wrapper-col">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>> 4000</span>
                                                <span>обращений</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">обработано</span>
                                            </div>
                                        </div>
                                </div>
                    </div>
                    <div class="element-wrap">
                               <div class="flex-wrapper-col">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>7</span>
                                                <span>подопечных</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">в экстренной ситуации получили набор скорой помощи</span>
                                            </div>
                                        </div>
                                </div>
                    </div>
                    <div class="element-wrap">
                               <div class="flex-wrapper-col">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>5</span>
                                                <span>подопечных</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">обеспечены жизненно-важным оборудованием (аппараты НИВЛ и расходные материалы к ним)</span>
                                            </div>
                                        </div>
                                </div>
                    </div>
                    <div class="element-wrap">
                               <div class="flex-wrapper-col">
                                        <div class="left-half">
                                            <div class="flex-wrapper inner">
                                                <span>49</span>
                                                <span>подопечным</span>
                                            </div>
                                        </div>
                                        <div class="right-half">
                                           <div class="flex-wrapper inner">
                                            <span class="desc">оказана иная адресная помощь (маски, контуры, ТО, настройка и дезинфекция аппаратов, оплата транспортировок, медицинских услуг и специалистов)</span>
                                            </div>
                                        </div>
                                </div>
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