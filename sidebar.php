<?php $upload_dir = wp_upload_dir();// lây url tới folder upload để lấy hình ảnh; ?>
        <!--  -->
        <main class="homepage product-detail">
        <?php 
        if (is_home()){
            get_sidebar('slider'); 
        }
        
        ?>
        <div class="container ">
            <div class="homepage__wrap flex-content">
                <!--    Nội dung  trái    -->
                <div class="homepage__left content-left">
                    <!-- danh mục sản phẩm -->
                    <aside class="menu">
                        <h2 class="title">
                            danh mục sản phẩm
                        </h2>
                        <?php
                        if(has_nav_menu('sidebar')){
                            $args = array(
                                'menu'                 => '',
                                'container'            => 'nav',
                                'container_class'      => 'menu-content',
                                'container_id'         => 'menu-content',
                                'container_aria_label' => '',
                                'menu_class'           => '',
                                'menu_id'              => '',
                                'echo'                 => true,
                                'fallback_cb'          => 'wp_page_menu',
                                'before'               => '',
                                'after'                => '',
                                'link_before'          => '',
                                'link_after'           => '',
                                'items_wrap'           => '<ul>%3$s<hr/></ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                                'item_spacing'         => 'preserve',
                                'depth'                => 2,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                                'walker'               => '',
                                'theme_location'       => 'sidebar',
                            );
                            wp_nav_menu( $args );
                        }
                        ?>
                        <!--
                        <div class="menu-content" id="menu-content">
                            <a href=""><i class="demo-icon icon-right-dir"></i> Máy nén khí không dầu, giảm âm polo</a>
                            <a href=""><i class="demo-icon icon-right-dir"></i> Máy nén khí đầu tiên polo </a>
                            <a href=""><i class="demo-icon icon-right-dir"></i> Máy nén khí dây đai polo </a>
                            <a href=""><i class="demo-icon icon-right-dir"></i> áy nén khí trục vít polo</a>
                            <a href=""><i class="demo-icon icon-right-dir"></i> bình tích khí polo</a>
                            <a href=""><i class="demo-icon icon-right-dir"></i> phụ kiện máy nén khí polo</a>
                        </div>
                        -->
                    </aside>

                    <!-- Hỗ trợ trục tuyến -->
                    <aside class="service-center">
                        <h2 class="title">
                            Hỗ trợ trực tuyến
                        </h2>
                        <div class="service-content">
                            <div class="hotline">
                                <h3>hotline</h3>
                                <a href="tel:+0828.039.666">0828.039.666</a>
                            </div>
                            <div class="retail">
                                <h3>liên hệ làm đại lí</h3>
                                <a href="tel:0974465436">Miss Thủy: 0974465436 </a>
                            </div>
                            <div class="warranty">
                                <h3>Liên hệ bảo hành</h3>
                                <a href="tel:+0828.039.666">0828.039.666</a>
                            </div>
                        </div>
                    </aside>
                    <!-- sản phẩm nổi bật-->
                    <aside class="special">
                        <h2 class="title">
                            Sản phẩm nổi bật
                        </h2>
                        <div class="special-content">

                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>
                                    <span class="price">12.800.000 đ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/red1.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>
                                    <span class="price">Liên hệ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/red2.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">12.800.000 đ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/green.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">Liên hệ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/red2.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">12.800.000 đ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">12.800.000 đ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/red1.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">12.800.000 đ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/yellow.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">Liên hệ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/red2.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">Liên hệ</span>
                                </div>
                            </div>

                        </div>
                    </aside>
                </div>
