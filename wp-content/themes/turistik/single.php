<? get_header(); the_post();?>
    <!-- header_end-->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="article-title title-page"><? the_title()?></div>
                <? if(has_post_thumbnail()):?>
                <div class="article-image">
                    <? the_post_thumbnail()?>
                </div>
                <? endif; ?>
                <div class="article-info">
                    <div class="post-date"><? the_time('d.m.Y')?></div>
                </div>
                <div class="article-text">
                    <? the_content()?>
                </div>
                <div class="article-pagination">
                    <div class="article-pagination__block pagination-prev-left"><a href="#" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"><img src="img/1.jpg" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#" class="post-date">23.07.2016</a></div>
                                <div class="preview-article__text">Сезонные скидки на авиа билеты в AirFace</div>
                            </div>
                        </div>
                    </div>
                    <? if($next = get_next_post()):?>
                        <div class="article-pagination__block pagination-prev-right"><a href="<? echo get_permalink($next->ID)?>" class="article-pagination__link">Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
                            <div class="wrap-pagination-preview pagination-prev-right">
                                <div class="preview-article__img">
                                <? if(has_post_thumbnail($next->ID)):?>
                                    <div class="article-image">
                                        <? echo get_the_post_thumbnail($next->ID,array(160,108))?>
                                    </div>
                                <? endif; ?>
                                <img src="img/2.jpg" class="preview-article__image"></div>
                                <div class="preview-article__content">
                                    <div class="preview-article__info"><a href="#" class="post-date"><? echo get_the_time('d.m.Y',$next->ID)?></a></div>
                                    <div class="preview-article__text"><? echo get_the_title($next->ID)?></div>
                                </div>
                            </div>
                        </div>
                    <? endif;?>
                </div>
            </div>
            <!-- sidebar-->
            <? get_sidebar()?>
        </div>
    </div>
<? get_footer()?>