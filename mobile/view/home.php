<!DOCTYPE html>
<html lang="vi" class=""><!--<![endif]-->
    <head>
          <?php
                include $APPLICATION_PATH . '/mobile/view/head.php';
                ?>
    </head>
    <body class="home page page-id-2 page-template-default wide-layout">
        <div class="wrapper">
            <div class="header-wrap">
                <?php
                include $APPLICATION_PATH . '/mobile/view/header-wrap.php';
                ?>
            </div>
            <!-- end header-wrap -->
            <div class="page-header-wrap">
                <?php
                include $APPLICATION_PATH . '/mobile/view/page-header-wrap.php';
                ?>
            </div>
            <div id="page-breadcrumb">
        <div class="container">
                        <ul>
                            <li><a href="/" title="Home"><i class="fa fa-home"></i></a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/">Trang chủ</a></li>
                            <!--<li><i class="fa fa-chevron-right"></i><span>Motor cửa lùa</span></li>-->
                        </ul>
                    </div>
    </div>
            <!-- end page-header-wrap -->
            <div class="content-wrap">
                <div id="main" class="container">
                    <div class="row">
                        <section class="col-md-12 col-sm-12">
<!--                            <p>
                                &nbsp;
                            </p>
                            <p style="line-height: 20.7999992370605px;">
                                <a href="http://www.baisheng.vn/cong-xep/cong-xep-inox-cao-cap/"><span style="font-size:18px;"><strong><span style="font-family: arial, helvetica, sans-serif;">Cổng xếp inox cao cấp</span></strong></span></a>
                            </p>
                            <p style="line-height: 20.7999992370605px;">
                                <span style="line-height: 20.7999992370605px;"></span>
                            </p>-->
                            <div class="woocommerce columns-3">
                                <ul class="products">
                                     <?php
                    foreach ($list_home_product_bosch as $index=>$product) {

                            include $APPLICATION_PATH . '/mobile/view/a-product.php';
               
                    }
                    ?>

                                </ul>
                            </div>
                            <p></p>

                            
                        </section>
                    </div>
                </div>
            </div>
            <!-- end content-wrap -->
            <div class="footer-wrap">
                <?php
                include $APPLICATION_PATH . '/mobile/view/footer-wrap.php';
                ?>
            </div>
            <!-- end footer-wrap -->
        </div>
        <!-- end wrapper -->
       
       <?php
                include $APPLICATION_PATH . '/mobile/view/unknownjs.php';
                ?>
<!--        <a id="back-top" href="#top" style="display: block;"></a>
        <a id="back-top" href="#top"></a>-->
    </body>
</html>

