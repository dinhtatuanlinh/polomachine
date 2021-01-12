<?php $upload_dir = wp_upload_dir();// lây url tới folder upload để lấy hình ảnh; ?>
<?php 
        // lấy dữ liệu từ customize footer info
        global $CustomizeVal;// gọi biến $DDNCustomize để có thể dùng ở đây
        $background_data = $CustomizeVal->background_data(); // tham số desktop truyền vào để xác định các dữ liệu nằm trên giao diện desktop
        $logo_data = $CustomizeVal->logo_data();
        // echo '<pre style="color: #fff">';
        // print_r($logo_data);
        // echo '</pre>';
    ?>
        <!--          Slider              -->
        <div class="swiper-container linh-mobile-hiden linh-space-for-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img data-src="<?php echo $background_data['img_1']; ?>" alt="img-detail" class="swiper-lazy dttlimg_1">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="swiper-slide">
                    <img data-src="<?php echo $background_data['img_2']; ?>" alt="img-detail" class="swiper-lazy dttlimg_2">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="swiper-slide">
                    <img data-src="<?php echo $background_data['img_3']; ?>" alt="img-detail" class="swiper-lazy dttlimg_3">
                    <div class="swiper-lazy-preloader"></div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

        </div>