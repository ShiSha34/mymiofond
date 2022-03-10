<?php
/**
Template Name: О фонде
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
                      $('#faces').flexslider({
                        animation: "slide",
                        animationLoop: true,
                        slideshow: false,
                        slideToStart: 0,
                        controlsContainer: $(".controls-faces"),
                        customDirectionNav: $(".nav-faces a"),
                        touch: true,
                        move: 1,
                        itemWidth: 240,
                        minItems: 1,
                        maxItems: 5
                      });
                    });
            </script>
            
            <script src="<? echo get_template_directory_uri()?>/assets/fancybox-master/dist/jquery.fancybox.min.js"></script>
            
            <script>
                jQuery(document).ready(function($) {
            $("a[rel=docs]").fancybox({
                clickOutside: "close",
                loop: true
            });
                
                $("a[rel=statutory]").fancybox({
                clickOutside: "close",
                loop: true
            });
                    
                }
            </script>
            
            <script type="text/javascript">
             jQuery(document).ready(function($) {
            var fActive = 'now__year';
 
                function filterYear(year){
                 if(fActive != year){
                 
                 $('.filtred-docs').filter('.'+year).show();
                 $('.filtred-docs').filter(':not(.'+year+')').hide();
                 fActive = year;
                         }
                }

                $('#2018').click(function(){ 
                    filterYear('year');
                    $(".reports-head div").removeClass("active");
                    $('#2018').addClass("active");
                                           });
                $('#2019').click(function(){ 
                    filterYear('pre_last__year');
                    $(".reports-head div").removeClass("active");
                    $('#2019').addClass("active");});
                 
                $('#2020').click(function(){ 
                    filterYear('last__year');
                    $(".reports-head div").removeClass("active");
                    $('#2020').addClass("active");});
                 
                $('#2021').click(function(){
                    filterYear('now__year'); 
                    $(".reports-head div").removeClass("active");
                    $('#2021').addClass("active");});
                });   
            </script>
        </div>
          <section id="o-fonde">
               <div class="maxwidth-theme">
                    <div class="heading-article">
                       <h1 class="without-p">О фонде</h1>
                   </div>
            
                <div class="items row o-fonde">
                   <div class="quote-block col-xs-12 col-lg-8">
                                  <div class="quote">
                                      <span><p>Когда диагноз миодистрофия Дюшенна был поставлен моему сыну, мне потребовалось пять рабочих дней и бесконечное число звонков, поиска людей, от которых бы я услышала: «Да, мы знаем этот диагноз». Пять рабочих дней ушло просто на то, чтобы найти человека, который сказал бы: «Да, мне это знакомо».</p><p>Состояние родителей после оглашения редкого, смертельного опасного диагноза – это шок, затем приходит адское ощущение боли, которое не прекращается. В голове кружится множество вопросов: «Зачем?», «Почему я?», и «В чем моя вина?». Затем появляется чувство вины. Обо всем этом знает семья, которой озвучили неутешительный редкий диагноз.</p><p><b>Для того, чтобы:</b></p><p>– услышать такую важную фразу «Да, мы знаем, что это. Мы можем помочь».</p><p>– объяснить матери, что нет ее вины в том, что случилось с сыном.</p><p>– рассказать, но еще важнее – научить семью жить, как прежде, не запрещая себе радости и счастья</p></span><span><b>был создан фонд. Теперь нет нужды в бесконечных звонках и днях поиска информации. Достаточно несколько кликов в Интернете и звонок на номер фонда.</b></span>

                                    </div>
                                 
                    </div>
                    <div class="author-block col-xs-12 col-lg-4">
                       <div class="author-img">
                           <img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/elena_sheperd.png" alt="">
                       </div>
                        <div class="author">
                            <span>Елена Шеперд</span>
                        </div>
                        <div class="author-post">
                            <span>директор благотворительных программ фонда и мама мальчика с миодистрофией Дюшенна</span>
                        </div>
                    </div>

                    <div class="quotes-up">
                    </div>
                    <div class="quotes-down">
                    </div>
                </div>
                
               </div>
            </section>
            <section id="mio-marks">
                <div class="wrap">
                    <div class="maxwidth-theme">
                        <div class="mark-block">
                            <div class="col-xs-12 col-lg-10">
                                <span>
                                    <p>Для сложных, редких пациентов есть как минимум три очень и очень важных рубежа – это семья, врачи и общество.</p>
                                    <p><b>Семья</b> – первый и самый важный рубеж. От знания и информированности семьи, от того насколько семья подготовлена, насколько она соблюдает золотые правила и стандарты, разработанные международным врачебным сообществом, специалистами по миодистрофии Дюшенна, от этого зависит так много в состоянии болеющего ребенка.</p>
                                    <p>Второй рубеж – <b>врачи.</b> Врачи, которые не боятся редких диагнозов и с энтузиазмом, сочувствием и здоровой эмпатией помогают своим пациентам. Мы, как организация, всегда открыты и благодарны таким врачам, открыты к сотрудничеству, к взаимной помощи, для этого существуют образовательные программы и другие возможности становиться «Citius, Altius, Fortius!».*</p>
                                    <p>Третий рубеж, не менее важный, чем два предыдущих – <b>общество.</b> Общество, которому мы рассказываем о редких мальчиках. Общество, которое видит в людях и детях, теряющих движение и слабеющих каждый день, не объект для жалости, а человека, которого можно поддержать. Его стремление жить, его стремление бороться, его стремление развиваться, и жить полноценной жизнью. Столько, сколько ему отмерено.<br>Все три рубежа очень-очень важны!</p>
                                    <p><b>Фонд работает и выстраивает мосты, мостики к каждому из этих рубежей.</b></p>
                                    <p>*Девиз Олимпийских игр, дословно означающий «Быстрее, выше, сильнее!»</p>
                                </span>
                            </div>
                            <div class="shield-absolute-icon"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="fond-faces">
                <div class="maxwidth-theme">
                    <div class="heading-article">
                       <h1 class="without">Фонд в лицах</h1>
                       <strong>Команда фонда</strong>
                   </div>
                </div>
                <div class="maxwidth-theme">
                    <div class="flexslider" id="faces" style="direction:ltr;">
                  <ul class="slides" id="faces-slides">
                    <li>
                     <div class="el">
                      <div class="image">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/p_sveshnikov.png">
                        </div>
                              <div class="face-name">
                                  <span>Петр Свешников</span>
                              </div>
                              <div class="face-post">
                                  <span>Учредитель и директор фонда</span>
                              </div>
                               
                    </div>
                    </li>
                    <li>
                     <div class="el">
                      <div class="image">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/o_sveshnikova.png">
                        </div>
                              <div class="face-name">
                                  <span>Ольга Свешникова</span>
                              </div>
                              <div class="face-post">
                                  <span>Учредитель фонда</span>
                              </div>
                               
                    </div>
                    </li>
                    <li>
                     <div class="el">
                      <div class="image">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/e_sheperd.png">
                        </div>
                              <div class="face-name">
                                  <span>Елена Шеперд</span>
                              </div>
                              <div class="face-post">
                                  <span>Учредитель фонда, директор благотворительных программ</span>
                              </div>
                               
                    </div>
                    </li>
                    <li>
                     <div class="el">
                      <div class="image">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/t_kostenko.png">
                        </div>
                              <div class="face-name">
                                  <span>Татьяна Костенко</span>
                              </div>
                              <div class="face-post">
                                  <span>Исполнительный директор</span>
                              </div>
                               
                    </div>
                    </li>
                    <li>
                     <div class="el">
                      <div class="image">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/k_tretyuhina.png">
                        </div>
                              <div class="face-name">
                                  <span>Ксения Третьюхина</span>
                              </div>
                              <div class="face-post">
                                  <span>Координатор управления благотворительных программ</span>
                              </div>
                               
                    </div>
                    </li>
                    <li>
                     <div class="el">
                      <div class="image">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/m_komarova.png">
                        </div>
                              <div class="face-name">
                                  <span>Марина Комарова</span>
                              </div>
                              <div class="face-post">
                                  <span>Координатор управления благотворительных программ</span>
                              </div>
                               
                    </div>
                    </li>
                    <li>
                     <div class="el">
                      <div class="image">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/n_gorlov.png">
                        </div>
                              <div class="face-name">
                                  <span>Никита Горлов</span>
                              </div>
                              <div class="face-post">
                                  <span>Координатор управления благотворительных программ</span>
                              </div>
                               
                    </div>
                    </li>
                    <li>
                     <div class="el">
                      <div class="image">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/y_titkova.png">
                        </div>
                              <div class="face-name">
                                  <span>Юлия Титкова</span>
                              </div>
                              <div class="face-post">
                                  <span>Координатор управления благотворительных программ</span>
                              </div>
                               
                    </div>
                    </li>
                    <li>
                     <div class="el">
                      <div class="image">
                       <img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/s_kasilova.png">
                        </div>
                              <div class="face-name">
                                  <span>Светлана Касилова</span>
                              </div>
                              <div class="face-post">
                                  <span>Юрист</span>
                              </div>
                               
                    </div>
                    </li>
                    </ul>
                    </div>
                    <div class="custom-navigation nav-faces" id="nav-progs">
                  
                  <div class="custom-controls-container controls-faces" id="controls-progs"></div>
                </div>
                </div>
            </section>
            <section id="fond-mission">
                <div class="maxwidth-theme">
                      <div class="heading-article">
                       <h1 class="without-p">Миссия, ценности и принципы фонда</h1>
                      </div>
                      <div class="docs-flex">
                    <a class="fancybox" rel="docs" data-fancybox data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/uploads/2021/05/fond-mission.pdf">
                    <div><img style="width: 225px;" src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/fond-mission.jpg"><span class="docs-caption">Миссия фонда</span></div>
                    </a>
                    <a class="fancybox" rel="docs" data-fancybox data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/uploads/2021/05/fond-values.pdf">
                    <div><img style="width: 225px;" src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/fond-values.jpg"><span class="docs-caption">Ценности фонда</span></div>
                    </a>
                    <a class="fancybox" rel="docs" data-fancybox data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/uploads/2021/05/fond-principle.pdf">
                    <div><img style="width: 225px;" src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/fond-principle.jpg"><span class="docs-caption">Принципы фонда</span></div>
                    </a>
               
               </div>
            
                </div>
            </section>
            <section id="statutory-documents">
                <div class="maxwidth-theme">
                      <div class="heading-article">
                       <h1 class="without-p">Уставные документы</h1>
                      </div>
                      <div class="docs-flex">
                    <a class="fancybox" rel="statutory" data-fancybox="gallery" data-fancybox-type="image" href="<? echo get_home_url()?>/wp-content/themes/mymio_2021/assets/images/pages/o-fonde/big_grnko.png">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/grnko.png"><span class="docs-caption">Свидетельство о государственной регистрации некомерческой организации</span></div>
                    </a>
                    <a class="fancybox" rel="statutory" data-fancybox="gallery" data-fancybox-type="image" href="<? echo get_home_url()?>/wp-content/themes/mymio_2021/assets/images/pages/o-fonde/big_gryul.png">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/gryul.png"><span class="docs-caption">Свидетельство о государственной регистрации юридического лица</span></div>
                    </a>
                    <a class="fancybox" rel="statutory" data-fancybox="gallery" data-fancybox-type="image" href="<? echo get_home_url()?>/wp-content/themes/mymio_2021/assets/images/pages/o-fonde/big_uchet.png">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/uchet.png"><span class="docs-caption">Свидетельство о постановке на учет российской организации в налоговом органе по месту ее нахождения</span></div>
                    </a>
                    <a class="fancybox" rel="statutory" data-fancybox="gallery" data-fancybox-type="iframe" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/uploads/2016/03/Устав.pdf">
                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/pages/o-fonde/ustav.png"><span class="docs-caption">Устав благотворительного фонда «МойМио»</span></div></a>
               
               </div>
            
                </div>
            </section>
            <section id="reports">
                <div class="maxwidth-theme">
                    <div class="heading-article">
                       <h1 class="without-p">Отчеты</h1>
                    </div>
                    <div class="reports-wrapper">
                    <div class="reports-head">
                        <a><div id="2018"><span>2018</span></div></a>
                        <a><div id="2019"><span>2019</span></div></a>
                       <a><div id="2020"><span>2020</span></div></a>
                        <a><div class="active" id="2021"><span>2021</span></div></a>
                    </div>
                    </div>
                    <div class="docs-list-filter">
                        <div class="filtred-docs year">
                            <div class="list-items-flex">
                                <a target="blank" href="<? echo get_home_url()?>/about/otchetnost/otchet-yanvar-2018/">
                                    <div>
                                       <span>Январь</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/about/otchetnost/otchet-fevral-2018/">
                                    <div>
                                       <span>Февраль</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/about/otchetnost/otchet-mart-2018/">
                                    <div>
                                       <span>Март</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/about/otchetnost/otchet-aprel-2018/">
                                    <div>
                                       <span>Апрель</span>
                                    </div>
                               </a>
                               
                               <a target="blank" href="<? echo get_home_url()?>/about/otchetnost/otchet-may-2018/">
                                    <div>
                                       <span>Май</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/about/otchetnost/otchet-iyun-2018/">
                                    <div>
                                       <span>Июнь</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/about/otchetnost/otchet-iyul-2018/">
                                    <div>
                                       <span>Июль</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/about/otchetnost/otchet-avgust-2018/">
                                    <div>
                                       <span>Август</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/about/otchetnost/otchet-sentyabr-2018/">
                                    <div>
                                       <span>Сентябрь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Октябрь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Ноябрь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Декабрь</span>
                                    </div>
                               </a>
                               <a data-fancybox data-fancybox-type="iframe" class="fancybox" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/uploads/2019/08/Godovoy-otchet-fonda-MoyMio-2018.pdf">
                                    <div>
                                       <span>Годовой отчет 2018</span>
                                    </div>
                               </a>
                            </div>
                        </div>
                        <div class="filtred-docs pre_last__year"><div class="list-items-flex">
                                <a class="disable">
                                    <div>
                                       <span>Январь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Февраль</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Март</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Апрель</span>
                                    </div>
                               </a>
                               
                               <a class="disable">
                                    <div>
                                       <span>Май</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Июнь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Июль</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Август</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Сентябрь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Октябрь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Ноябрь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Декабрь</span>
                                    </div>
                               </a>
                               <a data-fancybox data-fancybox-type="iframe" class="fancybox" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/uploads/2019/12/Godovoy-otchet-fonda-MoyMio-2019.pdf">
                                    <div>
                                       <span>Годовой отчет 2019</span>
                                    </div>
                               </a>
                            </div></div>
                        <div class="filtred-docs last__year"><div class="list-items-flex">
                                <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-yanvar-2020/">
                                    <div>
                                       <span>Январь</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-fevral-2020/">
                                    <div>
                                       <span>Февраль</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-mart-2020/">
                                    <div>
                                       <span>Март</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-aprel-2020/">
                                    <div>
                                       <span>Апрель</span>
                                    </div>
                               </a>
                               
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-may-2018/">
                                    <div>
                                       <span>Май</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-iyun-2020/">
                                    <div>
                                       <span>Июнь</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-iyul-2020/">
                                    <div>
                                       <span>Июль</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-avgust-2020/">
                                    <div>
                                       <span>Август</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-sentyabr-2020/">
                                    <div>
                                       <span>Сентябрь</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-oktyabr-2020/">
                                    <div>
                                       <span>Октябрь</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-noyabr-2020/">
                                    <div>
                                       <span>Ноябрь</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-dekabr-2020/">
                                    <div>
                                       <span>Декабрь</span>
                                    </div>
                               </a>
                               <a data-fancybox data-fancybox-type="iframe" class="fancybox" href="<? echo get_home_url()?>/ViewerJS/#../wp-content/uploads/2021/05/Godovoy-otchet-fonda-MoyMio-2020.pdf">
                                    <div>
                                       <span>Годовой отчет 2020</span>
                                    </div>
                               </a>
                            </div></div>
                        <div class="filtred-docs now__year"><div class="list-items-flex">
                                <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-yanvar-2021">
                                    <div>
                                       <span>Январь</span>
                                    </div>
                               </a>
                               <a target="blank" href="<? echo get_home_url()?>/o-fonde/otchet-fevral-2021">
                                    <div>
                                       <span>Февраль</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Март</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Апрель</span>
                                    </div>
                               </a>
                               
                               <a class="disable">
                                    <div>
                                       <span>Май</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Июнь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Июль</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Август</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Сентябрь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Октябрь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Ноябрь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Декабрь</span>
                                    </div>
                               </a>
                               <a class="disable">
                                    <div>
                                       <span>Годовой отчет 2021</span>
                                    </div>
                               </a>
                            </div></div>
                    </div>
                </div>
            </section>
            <section id="requisites">
                
                    <div class="maxwidth-theme">
                       <div class="heading-article">
                           <h1 class="without-p">Реквизиты</h1>
                        </div>
                        <div class="requisites-block">
                            <div class="col-xs-12 col-lg-6">
                                <span>
                                    <strong>Сбербанк</strong>
                                    <p>Полное наименование: Благотворительный фонд помощи детям с миодистрофией Дюшенна и иными тяжелыми нервно-мышечными заболеваниями «МойМио»</p>
                                    <p>Сокращенное наименование: «МойМио» Фонд</p>
                                    <p>Юридический адрес: 108803, г. Москва, поселение Сосенское, деревня Зименки, территория ПК Газовик, владение 6А, строение 1</p>
                                    <p>ИНН: 7713391127 КПП: 775101001</p>
                                    <p>Р/С: 40703810438000001266 в ПАО «Сбербанк России» г. Москва</p>
                                    <p>К/С: 30101810400000000225</p>
                                    <p>БИК: 044525225</p>
                                    <p>Назначение платежа: Благотворительное пожертвование на уставную деятельность Фонда</p>
                                </span>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                    <span>
                                    <strong>Банк Открытие</strong>
                                    <p>Полное наименование: Благотворительный фонд помощи детям с миодистрофией Дюшенна и иными тяжелыми нервно-мышечными заболеваниями «МойМио»</p>
                                    <p>Сокращенное наименование: «МойМио» Фонд</p>
                                    <p>Юридический адрес: 108803, г. Москва, поселение Сосенское, деревня Зименки, территория ПК Газовик, владение 6А, строение 1</p>
                                    <p>ИНН: 7713391127 КПП: 775101001</p>
                                    <p>Р/С: 40701810204250000004 в Филиал Центральный ПАО Банка «ФК Открытие»</p>
                                    <p>К/С: 30101810945250000297 ГУ Банка России по ЦФО</p>
                                    <p>БИК: 044525297</p>
                                    <p>Назначение платежа: Благотворительное пожертвование на уставную деятельность Фонда</p>
                                </span>
                            </div>
                            
                        </div>
                    </div>
                
            </section>
	</main><!-- #main -->

<?php
get_footer();