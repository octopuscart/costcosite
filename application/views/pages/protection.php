<?php
$this->load->view('layout/header');
?>
<!-- Slider -->
<section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
        <div class="container">
            <h4><?php echo $product['title']; ?></h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><?php echo $product['title']; ?></li>
            </ol>
        </div>
    </div>
</section>

<!-- Content -->
<div id="content"> 

    <!--======= PAGES INNER =========-->
    <section class="item-detail-page">
        <div class="container">
            <div class="row"> 

                <!--======= IMAGES SLIDER =========-->
                <div class="col-sm-5 large-detail">
                    <div class="images-slider">
                        <ul class="slides">
                            <?php
                            foreach ($product['images'] as $ikey => $ivalue) {
                                ?>
                                <li data-thumb="<?php echo base_url(); ?>assets/images/<?php echo $ivalue; ?>"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/<?php echo $ivalue; ?>"  alt=""> </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <!--======= ITEM DETAILS =========-->
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5><?php echo $product['title']; ?></h5>
                            <hr>
                            <span class="price">Material: <?php echo $product['material']; ?></span> </div>
                        <div class="col-sm-12"> <span class="code">Item Code: <?php echo $product['item_code']; ?></span>
                            <div class="some-info">
                                <div class="in-stoke" style="text-transform: uppercase;">certification: <i class="fa fa-check-circle"></i> <?php echo $product['certification']; ?></div>

                            </div>
                        </div>
                        <ul>
                            <?php
                            foreach ($product['points'] as $key => $value) {
                                echo "<li> <p>" . $value . "<p/></li>";
                            }
                            ?>
                        </ul>

                        <hr>

                    </div>
                </div>


            </div>
    </section>

    <!-- Shop Content -->
    <section class="shop-content related-pro pad-t-b-130">
        <div class="container"> 
            <!-- Heading -->
            <div class="heading-block margin-bottom-30">
                <h3>Related Products</h3>
                <hr>
            </div>

            <div class="row"> 
                <?php
                unset($allproducts[$unset]);
                foreach ($allproducts as $pkey => $pvalue) {
                    ?>
                    <!-- Item -->
                    <div class="col-sm-4">
                        <article class="shop-artical"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/<?php echo $pvalue['images'][0] ?>" alt="" >
                        </article>
                        <div class="info"> <a href="<?php echo site_url("protection/".$pkey);?>"><?php echo $pvalue['title']; ?></a> <span class="price"><?php echo $pvalue['item_code']; ?></span> </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
</div>
<!-- End Content --> 

<?php
$this->load->view('layout/footer');
?>