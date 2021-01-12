<?php 
$upload_dir = wp_upload_dir();// lây url tới folder upload để lấy hình ảnh

// echo '<pre>';
// print_r($upload_dir['url']);
// echo '</pre>';
get_header(); ?>
<?php
get_sidebar(); 
?>



                <!--    Nội dung  phải      -->
                <div class="homepage__right content-right ">

                    <h2 class="main-title">máy nén khí polo - máy nén khí chất lượng cao - bảo hành chính hãng</h2>
                    <!-- sản phẩm mới -->
                    <div class="new-products ">
                        <div class="title flex b-left bg-text">
                            <h3>Sản phẩm mới</h3>
                            <p>0828.039.666</p>
                            <img src="<?php echo $upload_dir['url']; ?>/text-banner.png" alt="">
                        </div>
                        <div class="new-products__slider">
                            <div class="swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type'           => 'product',
                                'post_status'         => 'publish',
                                'ignore_sticky_posts' => 1,
                                'orderby'             => 'date',
                                'posts_per_page'        => '12',
                                'order'               => 'desc',
                                
                            );
                            // The query
                            $query = new WP_Query( $args);
                            if ( $query->have_posts() ) :
                                while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                                $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                            ?>
                                <div class="swiper-slide card-infor">
                                    <a href="<?php the_permalink(); ?>"><img data-src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="img-detail" class="lazyload"></a>

                                    <div class="text">
                                        <a href="<?php the_permalink(); ?>">
                                            <h4 class="product-name"><?php the_title(); ?></h4>
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
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>

                        </div>
                    </div>
                    <!-- Sản phẩm nổi bật -->
                    <div class="special-products">
                        <div class="title flex b-left bg-text">
                            <h3>Sản phẩm nổi bật</h3>
                            <p>0828.039.666</p>
                            <img src="<?php echo $upload_dir['url']; ?>/text-banner.png" alt="">
                        </div>
                        <div class="special-products__wrap">
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
                            <div class="special-products__card card-infor">
                                <a href="<?php the_permalink(); ?>"> <img data-src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="special" class="lazyload"></a>
                                <div class="text">
                                    <a href="<?php the_permalink(); ?>">
                                        <h4 class="product-name"><?php the_title(); ?></h4>
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
                    </div>
                </div>

            </div>
        </div>





<?php get_footer(); ?>