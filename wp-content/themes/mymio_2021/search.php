<?php get_header(); ?>
<div class="maxwidth-theme">
    <div class="container" style="margin-top:30px;min-height: 500px;max-height:100%; padding: 0; margin-left: 0; margin-right: 0;">
        <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12" style="padding: 0;">
            <div class="middle-section">
                <?php if(have_posts() && $s != ''): ?>
                    <h2>Результаты поиска по вашему запросу: &laquo;<em><?php echo $s?></em>&raquo;</h2>
                    <?php while(have_posts()): the_post(); ?>
                        <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12 contentpost-search">
                            <h5><?php the_title(); ?></h5>
                            <?php get_the_excerpt(); ?>
                            <a href="<?php echo the_permalink();?>" style="float: right;">подробнее..</a>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="contentpost">
                        <h1>По вашему запросу <em>&laquo;<?php echo $s?>&raquo;</em> ничего не найдено</h1>

                    </div>
                    <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12" style="padding: 0;">
                            <div class="search" style="text-align: center;">
                                <div id="title-search_fixed_page">
                                <form method="get" action="<?php echo home_url( '/' ); ?>" class="search">
                                    <div class="search-input-div">
                                        <input class="search-input twosmallfont" id="title-search-input_fixed" type="text" name="s" id="s" placeholder="Поиск по сайту" size="40" maxlength="50" autocomplete="off" />
                                    </div>
                                    <div class="search-button-div">
                                        <button class="btn-search" type="submit" title="Поиск по сайту"><i class="svg svg-search"></i></button>
                                    </div>
                                </form>
				            </div>
                            </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
            <?php //get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>