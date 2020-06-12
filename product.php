
<?php
    require "./header.php"
?>

    <main>
        <div class="container">
            <h5 class="text-primary my-4" style="font-size: 20px;">Ao quan thu dong 2020</h5>
            <div class="row">
                <div class="col col-5">
                    <img src="img/slide1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col col-7">
                    <div class="d-flex">
                        <p class="mr-2 bg-danger pt-1" style="font-size: 15px;">Yeu thich</p>
                        <p style="font-size: 20px;">Ao quan hop mot thoi thuong 2020 danh cho phai nam</p>
                    </div>
                    <div class="d-flex">
                        <ul class="list-group d-flex" style="flex-direction: row;">
                            <li class="list-group-item">4.7</li>
                            <li class="list-group-item">
                                <i class="fas fa-star" style="color: yellow;"></i>
                                <i class="fas fa-star" style="color: yellow;"></i>
                                <i class="fas fa-star" style="color: yellow;"></i>
                                <i class="fas fa-star" style="color: yellow;"></i>
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="list-group-item">120 Danh gia</li>
                            <li class="list-group-item">Da ban 239</li>
                        </ul>
                    </div>
                    <p class="card-header my-3 bg-secondary" id="price" style="color: red; font-size: 25px;">150000</p>
                    <div class="d-flex text-center">
                        <p style="font-size: 15px;" class="mt-3 pr-5">So luong</p>
                        <ul class="list-group d-flex" style="flex-direction: row;">
                            <li class="list-group-item" id="choice" onclick="valueChange('-')">-</li>
                            <li class="list-group-item" id="value">1</li>
                            <li class="list-group-item" id="choice" onclick="valueChange('+')">+</li>
                        </ul>
                        <div class="d-flex mt-3 ml-5">
                            <p style="font-size: 15px;">Tong cong: </p>
                            <p id="total-price" class="ml-2" style="font-size: 15px; color: red;">150000</p>d
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="btn btn-primary d-inline-flex">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            <p class="m-0">Them vao gio hang</p>
                        </div>
                        <p class="btn btn-secondary m-0">Mua ngay</p>
                    </div>
                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="text-primary">CHI TIET SAN PHAM</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Danh muc: Thoi trang</li>
                        <li class="list-group-item">Chat lieu: vai</li>
                        <li class="list-group-item">Xuat xu: Quang Chau</li>
                        <li class="list-group-item">Kho hang: 2</li>
                    </ul>
                </div>
                <div class="card-body">
                    <h3 class="text-primary">MO TA SAN PHAM</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Danh muc: Thoi trang</li>
                        <li class="list-group-item">Chat lieu: vai</li>
                        <li class="list-group-item">Xuat xu: Quang Chau</li>
                        <li class="list-group-item">Kho hang: 2</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

<?php
    require "./footer.php"
?>