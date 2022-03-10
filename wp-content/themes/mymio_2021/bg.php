<?php
/**
Template Name: Альбом "Дань"
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
         <?/* date_default_timezone_set( 'Europe/Moscow' );
            $serverDate = date('d/m/Y/H/i/s');
            echo $serverDate;
        // Date to check against
            $dateToCheck = '27/05/2021/0/0/0';
            $serverDate = strtotime($serverDate);
            $dateToCheck = strtotime($dateToCheck);
            echo $serverDate;
            $cur_time = $dateToCheck > $serverDate;
            if($cur_time = true) {
              $cur_time = 1;
            } else {
              $cur_time = 0;
            }
            */?>
            
            <script type="text/javascript">/*
                $(document).ready(function() {
                    $var = <?php //echo $cur_time;?>;
                    if ($var == 1) {
                    $('.heading-article.align-center p').after('<p>будет доступен для скачивания с 27 мая</p>');
                    $('.leyka-pf input').prop('disabled', true);
                    $('input[type="submit"]').css('background-color', '#c4c4c4').prop('value', "Будет доступно 27 мая");
                    $('.without-p').text('С 27 мая вы сможете поддержать редких мальчиков с миодистрофией Дюшенна и получить альбом «Дань» от Бориса Гребенщикова');
                    $('.donation-list-caption span').text('С 27 мая ссылка на скачивание альбома будет приходить в письме после пожертвования');
                        
                        
                    }
                });*/
            </script>
      
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
            jQuery(".fancybox").fancybox({
                clickOutside: "close"
            });
            </script>
            
            
        </div>
          <section id="o-fonde">
               <div class="maxwidth-theme">
                    <div class="heading-article align-center">
                       <h1>«Дань»</h1>
                       <p>Альбом Бориса Гребенщикова в пользу редких мальчиков</p>
                       <p>NEW! Альбом на CD и виниле доступен для предзаказа по <a href="https://planeta.ru/campaigns/mymiofond " target="_blank" style="color: #009D9a;">ссылке</a></p>
                   </div>
            
                <div class="items row o-fonde dan">
                   <div class="quote-block col-xs-12 col-lg-8">
                                  <div class="quote">
                                      <span><p>«Я целиком и полностью доверяю людям, которые организовали фонд «МойМио» и занимаются такой сложной работой – помогают детям с тяжелой болезнью. Самое главное, что я уяснил – без денег с этой бедой вообще ничего не сделаешь. Здесь я могу пригодиться: играть концерты в пользу ребят и привлекать к этой теме людей, которые мне доверяют.</p><br><br><p>Мы решили, что альбом «Дань», который писался дольше всего в жизни группы, нужно отдать фонду «МойМио», чтобы деньги собранные от его продажи пошли ни нам, ни авторам, а детям, которые в них нуждаются»</p></span>

                                    </div>
                                 
                    </div>
                    <div class="author-block col-xs-12 col-lg-4">
                       <div class="author-img">
                           <img src="<? echo get_template_directory_uri()?>/assets/images/bg.png" alt="Борис Гребенщиков с подопечным фонда">
                       </div>
                        <div class="author">
                            <span>Борис Гребенщиков</span>
                        </div>
                        <div class="author-post">
                            <span>поэт, музыкант, композитор, певец и гитарист рок-группы «Аквариум», попечитель фонда «МойМио»</span>
                        </div>
                    </div>

                    <div class="quotes-up">
                    </div>
                    <div class="quotes-down">
                    </div>
                </div>
                
               </div>
            </section>
            <section id="leyka-form" class="album">
         <div class="maxwidth-theme">
          <div class="heading-article bg">
               <h1>Поддержите редких мальчиков с миодистрофией Дюшенна и получите альбом «Дань» от Бориса Гребенщикова</h1>
               <span style="display: block; font-size: 18px;font-weight: 500; line-height: 24px; margin-bottom: 60px;">Стать обладателем альбома на CD и виниле можно на <a href="https://planeta.ru/campaigns/mymiofond" target="_blank" style="color: #009D9a;">краудфандинговой платформе</a></span>
           </div>
           </div>
            <div class="maxwidth-theme">
               <div class="form-block">
                <?php echo do_shortcode( '[leyka_campaign_form id="31840"]' ); ?>
                    <div class="donations-custom-block">   
                        <div class="donation-list-caption" style="max-width: 480px;">
                            <span>Ссылка на скачивание альбома придет в письме после пожертвования</span>
                            <span style="font-size: 18px;font-weight: 500;
    line-height: 24px;">(Проверьте, пожалуйста, папку спам, если не получили письмо)</span>
                        </div>
                        <div class="album-wrapper">
                            <div class="album-flex">
                                <div class="bg-wrapper">
                                    <div class="first-image">
                                        <img src="<? echo get_template_directory_uri()?>/assets/images/album_bg.tif" alt="">
                                    </div>
                                    <div class="second-image">
                                        <img src="<? echo get_template_directory_uri()?>/assets/images/track_list.jpg" alt="">
                                    </div>
                                </div>
                                <div class="track-list">
                                    <div>
                                        <?php echo do_shortcode( '[sc_embed_player fileurl="https://www.mymiofond.ru/wp-content/uploads/2021/05/05_RASTAFARA_M2R2_ALT_END_MFIT.mp3" volume="30"]' ); ?>
                                    </div>
                                    <div><p style="font-size: 18px;">Растафара &nbsp&nbsp‒&nbsp&nbsp 4:20</p></div>
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