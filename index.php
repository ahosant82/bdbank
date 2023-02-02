<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banglades Bank</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assects/css/bootstrap.min.css">

    <!-- wp head -->
    <?php wp_head();?>
</head>
<body>
    <!-- wrepper area -->
    <div class="container wrepperArea">
        <!-- header -->
        <header>
            <!-- header top -->
            <div class="header_top">
                <div class="row">
                    <div class="col-6 top_lft">
                        nav
                    </div>
                    <div class="col-6 top_rgt text-end">
                    lng
                    </div>
                </div>
            </div>
            <!-- logo -->
            <div class="main_logo">
                <div class="logo">
                    <?php the_custom_logo();?>
                </div>
                <div class="nevigetions">
                    <nav class="">
                    <?php 
                        wp_nav_menu([
                            'menu_location' => 'main-menu',
                            'menu_class'=> 'nav_item'
                        ]);
                        ?>
                        <ul class="navbar-nav">
                            
                        </ul>
                    </nav>
    
                </div>
            </div>
        </header>
        <!-- main content -->
        <section class="main_content">
            <div class="row">
                <!-- content -->
                <div class="content">
                    <!-- content top -->
                    <div class="cnt_top">
                        <!-- bannar -->
                        <div class="bannar px-4 pt-2 bg-light">
                            <div class="row">
                                <div class="col-9 slider  pt-2 pb-2 bg-white">
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                                        <div class="carousel-inner">
                                            <?php 
                                            $x= 0;
                                            while (have_posts()){the_post();
                                                $x++;
                                            ?>
                                          <div class="carousel-item active">
                                              <?php the_post_thumbnail();?>
                                          </div>

                                        <?php }?>
                                          
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    
                                </div>
                                <!-- post -->
                                <div class="col-3 post">
                                    <div class="post_tlt">
                                    <?php dynamic_sidebar('post_tlt');?>
                                    </div>

                                    <div class="post_bidy">
                                        <div class="row">
                                            <div class="col-6"><?php dynamic_sidebar('post_img');?></div>
                                            <div class="col-6"><?php dynamic_sidebar('post_txt');?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- rnt news -->
                        <div class="rnt_news">
                            <div class="row">
                                <div class="col-2 label">Recent news</div>
                                <div class="col-9 cnt">
                                    <?php dynamic_sidebar('news');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content btm -->
                    <div class="cnt_btm">
                        <div class="row">
                            <!-- cnt post -->
                            <div class="col-8 cnt_post">
                                <div class="row">
                                    <div class="col-6 box box-green"> <?php dynamic_sidebar('box_1');?></div>
                                    <div class="col-6 box box-red"><?php dynamic_sidebar('box_2');?></div>
                                    <div class="col-6 box box-green"><?php dynamic_sidebar('box_3');?></div>
                                    <div class="col-6 box box-red"><?php dynamic_sidebar('box_4');?></div>
                                    <div class="col-6 box box-green"><?php dynamic_sidebar('box_5');?></div>
                                    <div class="col-6 box box-red"><?php dynamic_sidebar('box_6');?></div>
                                </div>
                            </div>

                            <!-- sidebar -->
                            <div class="col-4 sidebar">
                                <div class="contuct_info p-3 bg-light"><?php dynamic_sidebar('contuct_info');?></div>
                                <div class="acotion_info bg-light"><?php dynamic_sidebar('acotion_info');?></div>
                                <div class="emrg_hotline p-3 mt-1 bg-light"><?php dynamic_sidebar('emrg_hotline');?></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->

        <footer class="bg-light">
            <div class="main_footer">
                <div class="row">
                    <div class="col-4 cnt_lft">
                        <div class="title">CONTACT</div>
                        <div class="body">
                            <div class="row">
                                <div class="col-1 icons">
                                    <?php dynamic_sidebar('icons');?>
                                </div>

                                <div class="col-11 lists">
                                    <?php dynamic_sidebar('lists');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 cnt_center">
                        <div class="title">CONTACT</div>
                    </div>
                    <div class="col-4 cnt_rgt">
                        <div class="title">CONTACT</div>
                    </div>
                </div>
            </div>
            <!-- footer menu -->
            <div class="footer_menu">
                menus
            </div>
            <!-- frt msg -->
            <div class="footer_msg">msg</div>
        </footer>
    </div>
    


    <!-- wp footer -->
    <?php wp_footer();?>
</body>
</html>