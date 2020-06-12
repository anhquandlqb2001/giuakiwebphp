<?php

    require "./header.php";
?>

    <main>
        <div class="container body-container">
            <div class="item item-1">
            <h5 class="category-heading text-primary text-uppercase">Danh muc</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="fas fa-tshirt"></i>
                    <a href="">Ao quan Nam</a>
                </li>
                <li class="list-group-item">
                    <i class="fas fa-tshirt"></i>
                    <a href="">Ao quan Nam</a>
                </li>
                <li class="list-group-item">
                    <i class="fas fa-tshirt"></i>
                    <a href="">Ao quan Nam</a>
                </li>
                <li class="list-group-item">
                    <i class="fas fa-tshirt"></i>
                    <a href="">Ao quan Nam</a>
                </li>
            </ul>
            </div>
            <div class="item item-2">
            <!-- Slideshow container -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/slide1.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/slide1.jpg" class="d-block w-100 h-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/slide1.jpg." class="d-block w-100 h-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="item item-3">
                <div class="sub-item"></div>
                <div class="sub-item"></div>
                <div class="sub-item"></div>
                <div class="sub-item"></div>
                <div class="sub-item"></div>
                <div class="sub-item"></div>
            </div>

            <div class="item item-4">
                <div class="sub-item my-0"></div>
                <div class="sub-item my-0"></div>
            </div>

            
        </div>

        <!-- product slides -->
        
        <div class="product-slides container mt-5">
            <div class="line"></div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-25">
                        <!-- <div class="product-slider-item card">
                            <img src="img/slide1.jpg" class="">
                            <div class="card-body">
                                <div class="card-title">Tui xach hang hieu 2020</div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="card-text">2.500.000</div>
                                <div class="card-text">Da Nang</div>
                            </div>
                        </div> -->

                        <div class="product-slider-item text-center product-item my-2">
                            <a href="./product.php"><img src="img/slide1.jpg" class="img-fluid" alt=""></a>
                            <a href="./product.php"><p class="card-header" id="card-header">Ao quan thu dong 2020</p></a>
                            <div class="card-body">
                                <div class="container-stars">
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star rated"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted card-text">Da Nang</p>
                                    <p class="card-text">Da ban 256</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>
        <!--  -->
        <div class="container product-container">
            <div class="row">
                <div class="col col-3 text-center product-item my-2">
                    <a href="./product.php"><img src="img/slide1.jpg" class="img-fluid" alt=""></a>
                    <a href="./product.php"><p class="card-header" id="card-header">Ao quan thu dong 2020</p></a>
                    <div class="card-body">
                        <div class="container-stars">
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted card-text">Da Nang</p>
                            <p class="card-text">Da ban 256</p>
                        </div>
                    </div>
                </div>
                <div class="col col-3 text-center product-item my-2">
                    <a href="./product.php"><img src="img/slide1.jpg" class="img-fluid" alt=""></a>
                    <a href="./product.php"><p class="card-header" id="card-header">Ao quan thu dong 2020</p></a>
                    <div class="card-body">
                        <div class="container-stars">
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted card-text">Da Nang</p>
                            <p class="card-text">Da ban 256</p>
                        </div>
                    </div>
                </div>
                <div class="col col-3 text-center product-item my-2">
                    <a href="./product.php"><img src="img/slide1.jpg" class="img-fluid" alt=""></a>
                    <a href="./product.php"><p class="card-header" id="card-header">Ao quan thu dong 2020</p></a>
                    <div class="card-body">
                        <div class="container-stars">
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted card-text">Da Nang</p>
                            <p class="card-text">Da ban 256</p>
                        </div>
                    </div>
                </div>
                <div class="col col-3 text-center product-item my-2">
                    <a href="./product.php"><img src="img/slide1.jpg" class="img-fluid" alt=""></a>
                    <a href="./product.php"><p class="card-header" id="card-header">Ao quan thu dong 2020</p></a>
                    <div class="card-body">
                        <div class="container-stars">
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted card-text">Da Nang</p>
                            <p class="card-text">Da ban 256</p>
                        </div>
                    </div>
                </div>
                <div class="col col-3 text-center product-item my-2">
                    <a href="./product.php"><img src="img/slide1.jpg" class="img-fluid" alt=""></a>
                    <a href="./product.php"><p class="card-header" id="card-header">Ao quan thu dong 2020</p></a>
                    <div class="card-body">
                        <div class="container-stars">
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted card-text">Da Nang</p>
                            <p class="card-text">Da ban 256</p>
                        </div>
                    </div>
                </div>
                <div class="col col-3 text-center product-item my-2">
                    <a href="./product.php"><img src="img/slide1.jpg" class="img-fluid" alt=""></a>
                    <a href="./product.php"><p class="card-header" id="card-header">Ao quan thu dong 2020</p></a>
                    <div class="card-body">
                        <div class="container-stars">
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted card-text">Da Nang</p>
                            <p class="card-text">Da ban 256</p>
                        </div>
                    </div>
                </div>
                <div class="col col-3 text-center product-item my-2">
                    <a href="./product.php"><img src="img/slide1.jpg" class="img-fluid" alt=""></a>
                    <a href="./product.php"><p class="card-header" id="card-header">Ao quan thu dong 2020</p></a>
                    <div class="card-body">
                        <div class="container-stars">
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted card-text">Da Nang</p>
                            <p class="card-text">Da ban 256</p>
                        </div>
                    </div>
                </div>
                <div class="col col-3 text-center product-item my-2">
                    <a href="./product.php"><img src="img/slide1.jpg" class="img-fluid" alt=""></a>
                    <a href="./product.php"><p class="card-header" id="card-header">Ao quan thu dong 2020</p></a>
                    <div class="card-body">
                        <div class="container-stars">
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star rated"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted card-text">Da Nang</p>
                            <p class="card-text">Da ban 256</p>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Paganition -->
            <nav aria-label="Page navigation example" class="my-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <!--  -->
        </div>

    </main>

<?php

    require "footer.php";