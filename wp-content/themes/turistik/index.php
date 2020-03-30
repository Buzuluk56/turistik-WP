<? get_header()?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <h1 class="title-page"><?
                if(is_tag()){
                    single_tag_title();
                }elseif (is_search()){
                    echo 'Результаты поиска для &quot'.get_search_query().'&quot';
                }
                else{
                    echo 'Последние новости и акции из мира туризма';}?></h1>
                <? if (have_posts()):?>
                <div class="posts-list">
                    <? while (have_posts()): the_post();?>
                    <!-- post-mini-->
                    <div class="post-wrap">
<!--                        <img src="--><?// echo get_stylesheet_directory_uri() ?><!--/img/post_thumb/thumb_1.jpg" alt="Image поста" class="post-thumbnail__image"></div>-->
                        <? if(has_post_thumbnail()):?>
                            <div class="post-thumbnail">
                                <? the_post_thumbnail('thumbnail')?>
                            </div>
                        <? endif; ?>
                        <div class="post-content">
                            <div class="post-content__post-info">
                                <div class="post-date"><? the_time('d.m.Y')?></div>
                            </div>
                            <div class="post-content__post-text">
                                <div class="post-title">
                                    <? the_title()?>
                                </div>
                                <? the_excerpt()?>
                            </div>
                            <div class="post-content__post-control"><a href="<? the_permalink()?>" class="btn-read-post">Читать далее >></a></div>
                        </div>
                    </div>
                    <!-- post-mini_end-->
                    <? endwhile;?>
                </div>
                <div class="pagenavi-post-wrap">
                    <?
                    echo paginate_links(
                            array(
                                    'prev_next'=> true,
                                    'prev_next'=> '<i class="icon icon-angle-double-left"></i>',
                                    'next_text' => '<i class="icon icon-angle-double-right"></i>',
                            )
                    )
                    ?>
<!--                    <a href="#" class="pagenavi-post__prev-postlink"></a><span class="pagenavi-post__current">1</span><a href="#" class="pagenavi-post__page">2</a><a href="#" class="pagenavi-post__page">3</a><a href="#" class="pagenavi-post__page">...</a><a href="#" class="pagenavi-post__page">10</a><a href="#" class="pagenavi-post__next-postlink"><i class="icon icon-angle-double-right"></a></div>-->
                </div>
                <? else: ?>
                    <p>Никаких записей не найдено.</p>
                <? endif;?>
            </div>
            <!-- sidebar-->
            <? get_sidebar()?>
        </div>
    </div>
    <? get_footer()?>