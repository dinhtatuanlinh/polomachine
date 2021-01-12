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
                            <?php
                            $tax_query[] = array(
                                'taxonomy' => 'product_visibility',
                                'field'    => 'name',
                                'terms'    => 'featured',
                                'operator' => 'IN', // or 'NOT IN' to exclude feature products
                            );
                            $args = array(
                                'post_type'           => 'product',
                                'post_status'         => 'publish',
                                'ignore_sticky_posts' => 1,
                                'orderby'             => 'date',
                                'order'               => 'desc',
                                'post__in'            => wc_get_featured_product_ids(),
                            );
                            // The query
                            $query = new WP_Query( $args);
                            if ( $query->have_posts() ) :
                                while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                                $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                            ?>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href="<?php the_permalink(); ?>"> <img data-src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                    <div class="product-text__btn">
                                        <a href="tel:0828039666" style="color: #fff;">Liên hệ 0828.039.666</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();// reset lại đối tương wp_query
                            ?>

                        </div>
                    </aside>
                </div>
