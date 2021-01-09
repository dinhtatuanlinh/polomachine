<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php 
        wp_title('|', true, 'right');
        bloginfo('name');
    ?></title>
    <meta name="title" content="" />
    <meta name="description" content="" />
    <meta property="og:locale" content="vi" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Trang chủ" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />

    <?php wp_head(); ?>
    <?php $default_posts_per_page = get_option( 'posts_per_page' ); ?>
</head>

<body>
<?php
$upload_dir = wp_upload_dir();
?>
    <header class="header">
        <div id="contact">
            <div class="phone-number">
                <span>Hotline : 0828.039.666 - 0349.380.555</span>
            </div>
        </div>
        <div class="container">
            <div class="header__wrap">
                <div class="header__top">
                    <a href="" class="logo">
                        <i class="logo__icon"><img src="<?php echo $upload_dir['url']; ?>/logo.svg" alt=""></i>
                    </a>
                    <div class="company-infor">
                        <h1 class="title">Công ty tnhh máy công nghiệp polo </h1>
                        <p class="des"> nhà phân phối máy nén khí hàng đầu việt nam</p>

                    </div>
                    <!-- menu mobile -->
                    <div class="hamburger">
                        <div></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="nav">
            <div class="container">
                <!-- menu desktop-->
                <nav class="nav-link">
                    <ul>
                        <li>
                            <a href="index.html">Trang chủ</a>
                        </li>
                        <li>
                            <a href="about.html">Giới thiệu</a>
                        </li>
                        <li class="dropdown-menu" onmouseover="show()" onmouseout="out()">
                            <a href="#menu-content">Sản phẩm</a>
                            <div class="dropdown-content">
                                <a href="#"> Máy nén khí không dầu, giảm âm polo</a>
                                <a href="#">Máy nén khí đầu tiên polo</a>
                                <a href="#">Máy nén khí dây đai polo</a>
                                <a href="#">Máy nén khí trục vít polo</a>
                                <a href="#">bình tích khí polo</a>
                                <a href="#">phụ kiện máy nén khí polo</a>
                            </div>
                        </li>
                        <li>
                            <a href="video.html">Video</a>
                        </li>
                        <li>
                            <a href="payment.html">Thanh toán - vận chuyển</a>
                        </li>
                        <li>
                            <a href="guarantee.html">Bảo hành</a>
                        </li>
                        <li>
                            <a href="job.html">Tuyển dụng</a>
                        </li>
                        <li>
                            <div class="search-container">
                                <form>
                                    <input type="text" placeholder="Search.." name="search">

                                </form>
                                <button type="submit"><i class="demo-icon icon-search"></i></button>
                            </div>
                        </li>
                    </ul>

                </nav>

                <!-- menu mobile -->
                <nav id="menu-mobile">
                    <ul>
                        <li>
                            <a href="index.html">Trang chủ</a>
                        </li>
                        <li>
                            <a href="about.html">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="#menu-content">Sản phẩm</a>
                        </li>
                        <li>
                            <a href="video.html">Video</a>
                        </li>
                        <li>
                            <a href="payment.html">Thanh toán - vận chuyển</a>
                        </li>
                        <li>
                            <a href="guarantee.html">Bảo hành</a>
                        </li>
                        <li>
                            <a href="job.html">Tuyển dụng</a>
                        </li>
                        <li>
                            <div class="search-container">
                                <form>
                                    <input type="text" placeholder="Search.." name="search">

                                </form>
                                <button type="submit"><i class="demo-icon icon-search"></i></button>
                            </div>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
    </header>