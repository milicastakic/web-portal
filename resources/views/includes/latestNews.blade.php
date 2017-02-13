<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php
        $url = 'http://web-portal/objave';
        $content = file_get_contents($url);
        $json_odgovor = json_decode($content, true);
        ?>
        <div class="latest_newsarea"> <span>Najnovije vesti</span>
            <ul id="ticker01" class="news_sticker">
                <?php
                foreach ($json_odgovor as $odgovor) {
                if($odgovor['nazivKategorije']=='vest'){

                ?>
                <li><a href="page?id=<?php echo $odgovor['id']?>"><img src="images/news_thumbnail3.jpg" alt=""><?php echo $odgovor['naziv'];}?></a></li>
                <?php } ?>
            </ul>
            <div class="social_area">
                <ul class="social_nav">
                    <li class="facebook"><a href="#"></a></li>
                    <li class="twitter"><a href="#"></a></li>
                    <li class="flickr"><a href="#"></a></li>
                    <li class="pinterest"><a href="#"></a></li>
                    <li class="googleplus"><a href="#"></a></li>
                    <li class="vimeo"><a href="#"></a></li>
                    <li class="youtube"><a href="#"></a></li>
                    <li class="mail"><a href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>