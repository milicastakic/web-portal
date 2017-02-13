<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
            <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img4.jpg" alt=""></a>
                <div class="slider_article">
                    <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                </div>
            </div>
            <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img2.jpg" alt=""></a>
                <div class="slider_article">
                    <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                </div>
            </div>
            <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img3.jpg" alt=""></a>
                <div class="slider_article">
                    <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                </div>
            </div>
            <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img1.jpg" alt=""></a>
                <div class="slider_article">
                    <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
            <h2><span>Novi postovi</span></h2>
            <div class="latest_post_container">
                <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                <ul class="latest_postnav">
                    <?php
                    $url = 'http://web-portal/objave';
                    $content = file_get_contents($url);
                    $json_odgovor = json_decode($content, true);
                    ?>
                    <?php
                    foreach ($json_odgovor as $odgovor) {
                    ?>
                    <li>
                        <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                            <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> <?php echo $odgovor['naziv'];?></a> </div>
                        </div>
                    </li>
                    <?php }?>
                </ul>
                <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
            </div>
        </div>
    </div>
</div>