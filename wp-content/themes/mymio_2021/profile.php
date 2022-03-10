<?php
/**
Template Name: Личный кабинет
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
                      $('#progs').flexslider({
                        animation: "slide",
                        animationLoop: false,
                        slideshow: false,
                        controlsContainer: $("#controls-progs"),
                        customDirectionNav: $("#nav-progs a"),
                        touch: true,
                        itemWidth: 320,
                        itemMargin: 25,
                        minItems: 1,
                        maxItems: 3
                      });
                    });
            </script>
        </div>
            <div class="maxwidth-theme overfl">
               <div class="heading-article">
                    <h1 class="without-p">Личный кабинет</h1>
               </div>
               <div class="toggler">
                    <input type="checkbox" id="toggler__checkbox-id-1" class="toggler__checkbox">
                    <label for="toggler__checkbox-id-1" class="toggler__label">Основная информация</label>
                    <section  class="request-form-container toggler__content-box profile-sect">
                        
                        <div class="maxwidth-theme">
                           <div class="request-block">
                               <? echo do_shortcode('[contact-form-7 id="39868" title="Основная информация"]') ;?>
                            </div>
                        </div>
                    </<section>
                            
                </div>
                <div class="toggler">
                    <input type="checkbox" id="toggler__checkbox-id-2" class="toggler__checkbox">
                    <label for="toggler__checkbox-id-2" class="toggler__label">Анкета фонда "МойМио"</label>
                    <section  class="request-form-container toggler__content-box profile-sect">
                        
                        <div class="maxwidth-theme">
                           <div class="request-block">
                               <div role="form">
                                   <form action="" method="post">
                                   <p>
                                       <span class="wpcf7-form-control-wrap">
                                       ФИО родителей, законных представителей
                                       <span class="addition-text">Указывайте, пожалуйста, ФИО и степень родства, либо статуса представителя (мама, папа, бабушка, опекун, представитель по доверенности и т.д.)</span>
                                        <input type="text" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contacts-form-mymio" aria-required="true" aria-invalid="false" placeholder="Мой ответ" /></span><br />
                                        <span class="wpcf7-form-control-wrap">
                                        Укажите свои контактные номера телефонов
                                        <span class="addition-text">Пожалуйста, указывайте номера в формате 8-ХХХ-ХХХ-ХХ-ХХ мама Ольга, 8-ХХХ-ХХХ-ХХ-ХХ папа Михаил и укажите номер телефона хотя бы одного близкого Вам человека, через которого с Вами можно связаться в экстренной ситуации (8-ХХХ-ХХХ-ХХ-ХХ друг семьи Иван/бабушка Мария/двоюродная сестра Евгения)</span>
                                        <input type="text" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contacts-form-mymio" aria-required="true" aria-invalid="false" placeholder="Мой ответ" /></span><br />
                                        <span class="wpcf7-form-control-wrap">
                                        ФИО ребенка (полностью)
                                        <span class="addition-text"></span>
                                        <input type="text" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Мой ответ" /></span><br />
                                        <span class="wpcf7-form-control-wrap your-city">
                                        Дата рождения ребенка
                                        <span class="addition-text"></span>
                                        <input type="date" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Мой ответ" min="1991-01-01" /></span><br />
                                        <span class="wpcf7-form-control-wrap">
                                        В каком регионе проживает ребенок? Выберите из списка
                                        <span class="addition-text">Если ребенок не проживает в РФ - выберите "Не проживаю в РФ" и переходите к следующему пункту</span>
                                        <input id="child-city" name="child-city" aria-required="true" aria-invalid="false" placeholder="Мой ответ" /></span><br />
                                        <input type="email" name="your-email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email contacts-form-mymio" aria-required="true" aria-invalid="false" placeholder="Электронная почта для связи" /></span><br />
                                        <span class="wpcf7-form-control-wrap your-number">
                                        <input type="tel" name="your-number" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel contacts-form-mymio" aria-required="true" aria-invalid="false" placeholder="Телефон для связи" /></span><br />
                                        <span class="wpcf7-form-control-wrap diagnosis">
                                        <textarea name="diagnosis" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required contacts-form-mymio" aria-required="true" aria-invalid="false" placeholder="Диагноз"></textarea></span><br />
                                        <span class="wpcf7-form-control-wrap your-condition">
                                        <textarea name="your-condition"class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required contacts-form-mymio" aria-required="true" aria-invalid="false" placeholder="Описание вашей ситуации"></textarea></span><br />
                                        <span class="wpcf7-form-control-wrap acceptance-mymio">
                                        <span class="wpcf7-form-control wpcf7-acceptance">
                                        <span class="wpcf7-list-item">
                                            <label>
                                                <input type="checkbox" name="acceptance-mymio" value="1" aria-invalid="false" class="mymio-acceptance" />
                                                <span class="wpcf7-list-item-label">Согласен на обработку <a href="/personal-data-usage-terms" target="_blank" class="leyka-js-pd-trigger">персональных данных</a></span>
                                            </label>
                                        </span></span></span><br />
                                        <span class="wpcf7-form-control-wrap kc_captcha">
                                        <span class="wpcf7-form-control wpcf7-radio"> 
    <span class="captcha-image" >
        <span class="cf7ic_instructions">Пожалуйста, докажите, что вы человек, выбрав <span>  ключ</span>.</span><label><input type="radio" name="kc_captcha" value="bot" /><svg width="50px" height="50px" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M414.9 24C361.8 24 312 65.7 288 89.3 264 65.7 214.2 24 161.1 24 70.3 24 16 76.9 16 165.5c0 72.6 66.8 133.3 69.2 135.4l187 180.8c8.8 8.5 22.8 8.5 31.6 0l186.7-180.2c2.7-2.7 69.5-63.5 69.5-136C560 76.9 505.7 24 414.9 24z"></path></svg></label><label><input type="radio" name="kc_captcha" value="bot" /><svg width="50px" height="50px" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M349.565 98.783C295.978 98.783 251.721 64 184.348 64c-24.955 0-47.309 4.384-68.045 12.013a55.947 55.947 0 0 0 3.586-23.562C118.117 24.015 94.806 1.206 66.338.048 34.345-1.254 8 24.296 8 56c0 19.026 9.497 35.825 24 45.945V488c0 13.255 10.745 24 24 24h16c13.255 0 24-10.745 24-24v-94.4c28.311-12.064 63.582-22.122 114.435-22.122 53.588 0 97.844 34.783 165.217 34.783 48.169 0 86.667-16.294 122.505-40.858C506.84 359.452 512 349.571 512 339.045v-243.1c0-23.393-24.269-38.87-45.485-29.016-34.338 15.948-76.454 31.854-116.95 31.854z"></path></svg></label><label><input type="radio" name="kc_captcha" value="kc_human" /><svg width="50px" height="50px" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M512 176.001C512 273.203 433.202 352 336 352c-11.22 0-22.19-1.062-32.827-3.069l-24.012 27.014A23.999 23.999 0 0 1 261.223 384H224v40c0 13.255-10.745 24-24 24h-40v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24v-78.059c0-6.365 2.529-12.47 7.029-16.971l161.802-161.802C163.108 213.814 160 195.271 160 176 160 78.798 238.797.001 335.999 0 433.488-.001 512 78.511 512 176.001zM336 128c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"></path></svg></label>
    </span>
    <span style="display:none">
        <input type="text" name="kc_honeypot">
    </span></span></span><br />
<input type="submit" value="Отправить заявку" class="wpcf7-form-control wpcf7-submit mymio-submit" /></p>
<input type='hidden' class='wpcf7-pum' value='{"closepopup":false,"closedelay":0,"openpopup":false,"openpopup_id":0}' /><div class="wpcf7-response-output" aria-hidden="true"></div></form></div>                <div class="bow-arrows"></div>
                                    
                                   </form>
                               </div>
                           
                        </div>
                    </section>
                </div>

                

                <div class="toggler">
                    <input type="checkbox" id="toggler__checkbox-id-3" class="toggler__checkbox">
                    <label for="toggler__checkbox-id-3" class="toggler__label">Раздел II</label>
                    <section id="help-as-volunteer-kak" class="toggler__content-box">
                       <div class="maxwidth-theme">
                        <div class="items row">
                           <div class="wrap">
                            <div class="help-as-volunteer col-xs-12">
                                <div class="wrap">
                                    <div><img src="<? echo get_template_directory_uri()?>/assets/images/icons/boy_knight.svg">
                                    </div>
                                    <div>
                                        <span>Ваша компетенция может быть очень нужна фонду. Автоволонтеры, графические дизайнеры, верстальщики, фотографы – ваше участие поможет нам помогать!<br><br>Напишите на почту info@mymiofond.ru с рассказом о себе и темой письма «Как стать волонтёром/автоволонтером/фотографом фонда». Будем рады знакомству, подробнее обо всем расскажем и ответим на ваши вопросы</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                           </div>
                </div>
            </section>
                </div>
	</main><!-- #main -->

<?php
get_footer();