<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
            <div class="header_top_left">
                <ul class="top_nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="pages/contact.html">Contact</a></li>
                </ul>
            </div>
            <?php
                if(\Session::has('admin')){
            ?>
            <div class="header_top_right">
                <ul class="top_nav" style="text-align: right;">
                    <li style="background-color: #ec971f"><a href="/adminLogout">Logout</a></li>
                </ul>
            </div>
            <?php

                }
            ?>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
            <div class="logo_area"><a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a></div>
            <div class="weather"></div>
        </div>
    </div>
</div>