<?php

?>
<section class="top-sec" id="news-top">
    <div class="main-sec-overlay"></div>
    <div class="content">
        <h2>Новости</h2>
        <div class="descr">
            <p>Новости, информация о скидках и спецпредложениях</p>
        </div>
    </div>
</section>
<div class="content-nav">
    <ul>
        <li><a href="/user/about">О комбинате</a></li>
        <li><a href="/user/history">История</a></li>
        <li><a class="active" href="/user/news_article">Новости</a></li>
    </ul>
</div>
<section class="news-content">
    <div class="content">
        <ul class="news-items items">
            <?php
            $count = 1;
            foreach ($data['articles'] AS $article){ ?>
            <li <?php echo 'data-count='.$count ?>><a href="/user/news_article/<?php echo $article['id'] ?>">
                    <div class="news-header">
                        <p><?php echo $article['title'] ?></p>
                    </div>
                    <p><?php echo $article['caption'] ?></p>
                    <div class="news-date">
                        <p><?php echo date('Y-m-d', strtotime($article['date'])) ?></p>
                    </div>
                </a>
            </li>
            <?php $count++;
            } ?>
        </ul>
        <div class="pagination">
            <ul>
                <?php
                    $news_count = count($data['articles']);
                    $pages_count = ceil($news_count / 8);
                    if($pages_count > 1){
                ?>
                <li class="prev"><a href="#">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
                            <path d="M16.7,22.7l9-9c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7l-9-9C16.5,3.1,16.3,3,16,3s-0.5,0.1-0.7,0.3l-1.4,1.4  c-0.4,0.4-0.4,1,0,1.4l4,4c0.3,0.3,0.1,0.9-0.4,0.9H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h16.6c0.4,0,0.7,0.5,0.4,0.9l-4,4  c-0.4,0.4-0.4,1,0,1.4l1.4,1.4c0.2,0.2,0.4,0.3,0.7,0.3C16.3,23,16.5,22.9,16.7,22.7z"></path>
                        </svg></a></li>
                        <?php
                            for($i = 1; $i <= $pages_count; $i++){

                                    ?>
                            <li class="<?php echo $i ?>"><a href="#" class="<?php echo $i == 1 ? "active" : '' ?>" data-page="<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php

                        }

                        ?>
                            <li class="dots"><p>...</p></li>
                            <li class="news-total"><a href="#" data-page="<?php echo $pages_count ?>"><?php echo $pages_count ?></a></li>

<!--                <li><a class="disabled" href="#">1</a></li>-->
<!--                <li><a href="#">2</a></li>-->
<!--                <li><a class="active" href="#">3</a></li>-->
<!--                <li><a href="#">4</a></li>-->
<!--                <li><a href="#">5</a></li>-->
<!--                <li>-->
<!--                    <p>...</p>-->
<!--                </li>-->
<!--                <li class="news-total"><a href="#">88</a></li>-->
                <li class="next"><a href="#">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
                            <path d="M16.7,22.7l9-9c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7l-9-9C16.5,3.1,16.3,3,16,3s-0.5,0.1-0.7,0.3l-1.4,1.4  c-0.4,0.4-0.4,1,0,1.4l4,4c0.3,0.3,0.1,0.9-0.4,0.9H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h16.6c0.4,0,0.7,0.5,0.4,0.9l-4,4  c-0.4,0.4-0.4,1,0,1.4l1.4,1.4c0.2,0.2,0.4,0.3,0.7,0.3C16.3,23,16.5,22.9,16.7,22.7z"></path>
                        </svg></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>
<div class="about-bot-nav">
    <ul class="wrapper">
        <li><a class="prev" href="#"><span><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 23"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:3px;}</style></defs><title>slider_arrow</title><polyline class="cls-1" points="12.69 22.07 2.25 11.63 12.75 1.07"/></svg></span>О комбинате</a></li>
        <li><a class="prev" href="#"><span><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 23"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:3px;}</style></defs><title>slider_arrow</title><polyline class="cls-1" points="12.69 22.07 2.25 11.63 12.75 1.07"/></svg></span>История</a></li>
    </ul>
</div>
<script>
    $(document).ready(function(){
        $('.news-items li').each(function () {
            var count = $(this).data('count');
            if(count > 8){
                $(this).hide();
            }
        })
        $('.pagination ul li').each(function () {
            if($(this).find('a').data('page') > 3){
                $(this).hide();
                $('li.dots').show();
                $('li.news-total').show();
            }
        })
    })
    $(function(){
        $('.pagination ul li').click(function (e) {
            e.preventDefault();
            if($(this).hasClass('prev') || $(this).hasClass('next')){
                var current = $('.pagination ul li').find('a.active').data('page');
                $('.pagination ul li').hide();
            }else{
                var page = $(this).find('a').data('page');
                $('.news-items li').hide();
                $('a').removeClass('active');
                $(this).find('a').addClass('active');
                $('.pagination ul li').hide();
                $(this).show();
                $('li.next, li.prev, li.dots, li.news-total').show();
                $('li.' + (page - 1) + ', li.' + (page + 1)).show();
                var first = page * 8 - 8;
                var last = page * 8;
                $('.news-items li').each(function () {
                    if ($(this).data('count') > first && $(this).data('count') <= last){
                        $(this).show();
                    }
                })
            }
        })
    })
</script>