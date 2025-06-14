<!DOCTYPE html>
<html lang="en">

<head>
   <?php
    include('../include_files.php');
	include('../head.php');
	?>
</head>

<body>
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="1.jpg" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="1.jpg" alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="2.jpg" alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="3.jpg" alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="4.jpg" alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="5.jpg" alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="6.jpg" alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->


                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body"><B>
							<h1 id="product-title" class="h2">GADZO INDUCTION STOVE BUTTON CERAMIC -GZ K IC2W</h1></B>
							<p id="product-price" class="h3 py-2">₹ 3750</p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Gadzo</strong></p>
                                </li>
                            </ul>

                            <h6>Gadzo Induction Stove</h6>
                            <p>Premium Induction cookers For Better cooking Experience</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Gray with glass Lid</strong></p>
                                </li>
                            </ul>

                            <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>2000 Watts</li>
                                <li>Touch/ Button</li>
                                <li>Multi Cooking display</li>
                                <li>Elegant Look</li>
                                <li>Auto Shut-Off Function</li>
								<li>1 Year Warranty</li>
                            </ul>

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Models :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
											<li class="list-inline-item">
											  <span class="btn btn-success btn-size" data-title="GADZO INDUCTION STOVE BUTTON CERAMIC -GZ K IC2W" data-price="3750">Button</span>
											</li>
											<li class="list-inline-item">
											  <span class="btn btn-success btn-size" data-title="GADZO INDUCTION STOVE TOUCH -GZ K ICT2W" data-price="5099">Touch</span>
											</li>

                                           
                                        </ul>
                                    </div><!-- Close Content 
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                               <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                    </div>
                                </div>--> 
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Start Article -->
	<?php
    include('../../related-products.php');
	?>
    
    <!-- End Article -->


    <!-- Start Footer -->
	<?php
    include('../../footer.php');
	?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="../../assets/js/jquery-1.11.0.min.js"></script>
    <script src="./../assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/templatemo.js"></script>
    <script src="../../assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="../../assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
	<script>
  document.querySelectorAll('.btn-size').forEach(btn => {
    btn.addEventListener('click', function () {
      const newTitle = this.getAttribute('data-title');
      const newPrice = this.getAttribute('data-price');

      document.getElementById('product-title').textContent = newTitle;
      document.getElementById('product-price').textContent = '₹ ' + newPrice;
    });
  });
</script>
    <!-- End Slider Script -->

</body>

</html>