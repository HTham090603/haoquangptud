
    <style>
        body {
            background-color: #ececec;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .header {
            
            padding: 10px;
        }

        .header a {
            color: #fff;
            text-decoration: none;
        }

        .product-card {
            background-color: white;
            padding: 15px;
            margin-bottom: 10px;
            color: #000000;
        }

        .product-card img {
            width: 100px;
            height: 100px;
        }

        .product-card .product-info {
            display: flex;
            justify-content: space-between;
        }

        .product-card .product-info .details {
            flex: 1;
            margin-left: 15px;
        }

        .product-card .product-info .price {
            text-align: right;
        }

        .product-card .product-info .price del {
            color: #888;
        }

        .total-section {
            background-color: lightgray;
            padding: 15px;
            margin-top: 10px;
            color: #000000;

        }

        .total-section .total-info {
            display: flex;
            justify-content: space-between;
            
        }

        .total-section .total-info .total-price {
            color: #ff424e;
            font-size: 1.2em;
            color: black;
        }

        .btn-buy {
            background-color: #ff424e;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
        }
    </style>



    

    <body>
        <h1 style="color: #000000; text-align: center; margin-top: 10px; ">GIỎ HÀNG</h1>
        <div class="container mt-3">
            <div class="product-card">
                <div class="product-info">
                    <input checked="" style="width: 30px; margin-right: 10px;" type="checkbox" />
                    <img alt="Product image of a pepperoni pizza" height="100"
                        src="https://storage.googleapis.com/a1aa/image/BHf1zDM1FaXfYEflCtrOCHL4swSkSYDHkTx86zfuDefOn856E.jpg"
                        width="100" />
                    <div class="details">
                        <p>
                            Pizza Pepperoni
                        </p>
                        <p>
                            Size: Large
                        </p>
                        <p>
                            Đổi trả 15 ngày
                        </p>
                    </div>
                    <div class="price">
                        <del>
                            ₫300.000
                        </del>
                        <p>
                            ₫215.000
                        </p>
                        <div class="quantity">
                            <button class="btn btn-sm btn-outline-light">
                                -
                            </button>
                            <span>
                                1
                            </span>
                            <button class="btn btn-sm btn-outline-light">
                                +
                            </button>
                        </div>
                        <p>
                            Còn 2 sản phẩm
                        </p>
                    </div>
                    <a class="text-danger" href="#">
                        Xóa
                    </a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-info">
                    <input checked="" style="width: 30px; margin-right: 10px;" type="checkbox" />
                    <img alt="Product image of a margherita pizza" height="100"
                        src="https://storage.googleapis.com/a1aa/image/dmf3KdtUIXWKfEDNHwdjBjbIQTY3vQGfAWDpcNAm73h0kPXnA.jpg"
                        width="100" />
                    <div class="details">
                        <p>
                            Pizza Margherita
                        </p>
                        <p>
                            Size: Medium
                        </p>
                        <p>
                            Đổi trả 15 ngày
                        </p>
                    </div>
                    <div class="price">
                        <del>
                            ₫150.000
                        </del>
                        <p>
                            ₫120.000
                        </p>
                        <div class="quantity">
                            <button class="btn btn-sm btn-outline-light">
                                -
                            </button>
                            <span>
                                1
                            </span>
                            <button class="btn btn-sm btn-outline-light">
                                +
                            </button>
                        </div>
                        <p>
                            Còn 5 sản phẩm
                        </p>
                    </div>
                    <a class="text-danger" href="#">
                        Xóa
                    </a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-info">
                    <input checked="" style="width: 30px; margin-right: 10px;" type="checkbox" />
                    <img alt="Product image of a veggie pizza" height="100"
                        src="https://storage.googleapis.com/a1aa/image/Gw7S2JSHenSqfEOVt4efvRJQ2tPNd5dGKRDFr2DMduxlJfcdC.jpg"
                        width="100" />
                    <div class="details">
                        <p>
                            Pizza Veggie
                        </p>
                        <p>
                            Size: Large
                        </p>
                        <p>
                            Đổi trả 15 ngày
                        </p>
                    </div>
                    <div class="price">
                        <del>
                            ₫500.000
                        </del>
                        <p>
                            ₫450.000
                        </p>
                        <div class="quantity">
                            <button class="btn btn-sm btn-outline-light">
                                -
                            </button>
                            <span>
                                1
                            </span>
                            <button class="btn btn-sm btn-outline-light">
                                +
                            </button>
                        </div>
                        <p>
                            Còn 3 sản phẩm
                        </p>
                    </div>
                    <a class="text-danger" href="#">
                        Xóa
                    </a>
                </div>
            </div>
            <div class="total-section">
                <div class="total-info">
                    <div>
                        <input checked="" style="width: 30px; margin-right: 10px;" type="checkbox" />
                        Chọn Tất Cả (3)
                        
                        
                    </div>
                    <div class="total-price">
                        <p>
                            Tổng thanh toán (3 Sản phẩm): ₫785.250
                        </p>
                        <p>
                            Tiết kiệm ₫95,75k
                        </p>
                    </div>
                    <a href="index.php?page=giohang/thanhtoan">
                        <button class="btn-buy">
                            Mua Hàng
                        </button>
                    </a>
                    
                </div>
            </div>
        </div>
    </body>
  
  