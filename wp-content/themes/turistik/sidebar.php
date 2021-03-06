<div class="sidebar">

    <? if ($tags = get_terms(array('taxonomy' => 'post_tag', 'hide_empty'=>0))):?>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <ul class="tags-list">
                    <? foreach ($tags as $tag):?>
                        <li class="tags-list__item"><a href="<? echo get_term_link($tag->term_id)?>" class="tags-list__item__link"><? echo $tag->name?></a></li>
                    <? endforeach;?>
                </ul>
            </div>
        </div>
    <? endif;?>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <li class="category-list__item"><a href="#" class="category-list__item__link">
                        Вылеты из
                        столиц</a>
                    <ul class="category-list__inner">
                        <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                        <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a></li>
                    </ul>
                </li>
                <li class="category-list__item"><a href="#" class="category-list__item__link">
                        Вылеты из
                        регионов</a>
                    <ul class="category-list__inner">
                        <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                        <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>