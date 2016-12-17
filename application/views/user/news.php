<section id="news">
    <div class="sec-number">
        <p>04</p>
    </div>
    <h2>Новости</h2>
    <ul>
        <?php
        $i = 1;
        foreach ($data['news'] AS $article) {
            $i++;
            ?>
            <li><a href="#">
                    <div class="news-header">
                        <p><?php echo $article['title'] ?></p>
                    </div>
                    <div class="news-brief">
                        <p><?php echo $article['caption']; ?></p>
                    </div>
                    <div class="news-date">
                        <p><?php echo $article['date'] ?></p>
                    </div>  
                </a></li>
            <?php
            if ($i == 3) breack;
         }
        ?>
    </ul>
    <div class="all-news"><a href="#">Все новости</a></div>
</section> 