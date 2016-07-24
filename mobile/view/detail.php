<!DOCTYPE html>
<html lang="vi" class=""><!--<![endif]-->
    <head>
          <?php
                include $APPLICATION_PATH . '/mobile/view/head.php';
                ?>
          <link rel="stylesheet" id="woocommerce-css" href="/static/mobile/alterna-woocommerce.css" type="text/css" media="all">
    </head>
    <body class="single single-product postid-277 wide-layout woocommerce woocommerce-page">
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
                            <li><a>&gt;</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/<?php echo $category_info['alilas']?>"><?php echo $category_info['name']?></a></li>
                        </ul>
                    </div>
    </div>
            <!-- end page-header-wrap -->
            <div class="content-wrap">
                <div id="main" class="container">
                    <div class="row">
                       <section class="alterna-col col-lg-9 col-md-8 col-sm-8 alterna-right">
	
		
			

<div itemscope="" itemtype="http://schema.org/Product" id="product-277" class="post-277 product type-product status-publish has-post-thumbnail shipping-taxable product-type-simple product-cat-cong-xep-inox-cao-cap instock">

	<div class="images">

	<a href="<?php echo $product_info["product_url"] ?>" itemprop="image" class="woocommerce-main-image zoom" title="THP-0089" data-rel="prettyPhoto"><img width="360" height="181" src="<?php echo $product_info["product_thumb"] ?>" class="attachment-shop_single wp-post-image" alt="THP-0089" title="THP-0089"></a>
	
</div>

	<div class="summary entry-summary">

		<h3 itemprop="name" class="product_title entry-title"> <?php echo $product_info['name']?></h3><div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

	<p class="price"><?php echo $product_info['price']?></p>
        <p >Click gọi ngay <span class="blink" style="color: darkgreen">=></span> <a style="color:red" href="tel:<?php echo $mobile_phone?>"><?php echo $mobile_phone?></a></p>
	<meta itemprop="price" content="">
	<meta itemprop="priceCurrency" content="VND">
	<link itemprop="availability" href="http://schema.org/InStock">

</div>
<!--                <div itemprop="description">
	<p>Xem thêm: <a href="http://www.baisheng.vn/cong-xep/cong-xep-inox-304-201/">Cổng xếp inox 304 – 201</a></p>
<p>Xem thêm: <a href="http://www.baisheng.vn/cong-xep/cong-xep-hop-kim-nhom/">Cổng xếp hợp kim nhôm</a></p>
</div>-->
                <div class="product_meta">

	
	
                    <span class="posted_in">Danh mục: <a href="<?php echo $category_info["alilas"]?>" rel="tag" style="text-decoration: underline"><?php echo $category_info["name"]?></a></span>
	
	
</div>

	</div><!-- .summary -->

	
	<div class="woocommerce-tabs">
		
		
			<div class="panel entry-content" id="tab-description" style="display: block;">
				
  <h2>Mô tả sản phẩm</h2>


 <?php echo $product_info['description']?>
			</div>

			</div>


	<div class="related products">

		<h2>Sản phẩm liên quan</h2>

		<ul class="products">
			  <?php
                    foreach ($list_category_product as $index=>$product) {


                            include $APPLICATION_PATH . '/mobile/view/a-product.php';
                         
                    }
                    ?>

			
		</ul>
	</div>


	<meta itemprop="url" content="http://www.baisheng.vn/san-pham/cong-xep-inox-cao-cap-thp-0089/">

</div><!-- #product-277 -->


		
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
       
    </body>
</html>

