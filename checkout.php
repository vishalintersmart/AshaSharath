<?php include "./includes/header.php"?>

<div id="pageWrapper" class="CheckoutPage FloralBG">

    <!-- BREADCRUMBS -->
    <section id="BreadCrumb">
        <div class="container">
            <ul>
                <li>
                    <a href="#!">Home</a>
                </li>
                <li>
                    <a class="current" href="javascript:void(0);">Dance Costumes</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- BREADCRUMBS -->

    <!-- CHECKOUT SEC -->
    <section id="ChckOutSec">
        <div class="container">
            <div class="FlxRow">

                <div class="LftAside accordion" id="AddAddressAcord">
                    <div class="BoxHead">
                        <div class="Head">Select Delivery Address</div>
                        <div class="accordion-header">
                            <button class="addadrs" type="button" data-bs-toggle="collapse" data-bs-target="#AddAddress"
                                aria-expanded="false" aria-controls="AddAddress">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                    <path d="M14,28C6.3,28,0,21.7,0,14S6.3,0,14,0s14,6.3,14,14S21.7,28,14,28z M14,1C6.8,1,1,6.8,1,14c0,7.2,5.8,13,13,13
                                        c7.2,0,13-5.8,13-13C27,6.8,21.2,1,14,1z" />
                                    <path
                                        d="M17.9,14.5v-1.3H15v-3.1h-1.4v3.1h-2.9v1.3h2.9v3.2H15v-3.3H17.9L17.9,14.5z" />
                                </svg>
                                ADD NEW ADDRESS
                            </button>
                        </div>
                    </div>
                    <div class="BoxCntnt">
                        <div class="accordion-item">
                            <div id="AddAddress" class="accordion-collapse collapse" data-bs-parent="#AddAddressAcord">
                                <div class="accordion-body">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="Name">Name</label>
                                                    <input type="text" class="form-control" id="Name" name="Name"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="Name">Email</label>
                                                    <input type="text" class="form-control" id="Email" name="Email"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="Name">Mobile Number</label>
                                                    <input type="text" class="form-control" id="Mobile Number"
                                                        name="Mobile Number" required="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="Name">Address</label>
                                                    <textarea name="Address" class="form-control" id="Address" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="sbmitbtn combtn hoveranim">
                                            <span>Save address & proceed</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="AddressBox">
                            <div class="listFlex">
                                <div class="listitm">
                                    <div class="Box">
                                        <input id="Address1" checked type="radio" name="address">
                                        <label for="Address1">
                                            <div class="Name">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 94.5 118.9">
                                                    <path d="M83.9,17.7c-1.7-2.1-4.4-4.8-8.1-7.9C64.7,1,52.2-1.5,39.3,0.8C19.8,4.3,6.6,16.1,1.6,35.5c-4.9,19.3,1.5,35.3,16.4,48.1
                                                        c8.7,7.5,17.2,15.2,26,23.1v12.2h6.4v-11.8c1.4-1.3,2.6-2.4,3.8-3.5c9-8.2,18.3-16,26.8-24.7C98,62,98.9,36.2,83.9,17.7z
                                                        M74.6,72.7c-8.5,8.6-17.8,16.5-27.1,25.1c-9.6-8.7-19-16.4-27.6-25.1c-15.8-16-14-41.1,3.4-55.1C40.9,3.5,66,7.2,78.4,25.7
                                                        C88.9,41.2,87.7,59.4,74.6,72.7z" />
                                                    <circle cx="47.3" cy="46.7" r="7.3" />
                                                </svg>
                                                SHIPPING ADDRESS
                                            </div>
                                            <ul>
                                                <li>
                                                    Intersmart Solutions <br>
                                                    2nd floor <br>
                                                    Lillys tower<br>
                                                    Palarivattom
                                                </li>
                                                <li>
                                                    9568987956
                                                </li>
                                            </ul>
                                        </label>
                                    </div>
                                </div>
                                <div class="listitm">
                                    <div class="Box">
                                        <input id="Address2" type="radio" name="address">
                                        <label for="Address2">
                                            <div class="Name">
                                                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 94.5 118.9">
                                                    <path d="M83.9,17.7c-1.7-2.1-4.4-4.8-8.1-7.9C64.7,1,52.2-1.5,39.3,0.8C19.8,4.3,6.6,16.1,1.6,35.5c-4.9,19.3,1.5,35.3,16.4,48.1
                                                        c8.7,7.5,17.2,15.2,26,23.1v12.2h6.4v-11.8c1.4-1.3,2.6-2.4,3.8-3.5c9-8.2,18.3-16,26.8-24.7C98,62,98.9,36.2,83.9,17.7z
                                                        M74.6,72.7c-8.5,8.6-17.8,16.5-27.1,25.1c-9.6-8.7-19-16.4-27.6-25.1c-15.8-16-14-41.1,3.4-55.1C40.9,3.5,66,7.2,78.4,25.7
                                                        C88.9,41.2,87.7,59.4,74.6,72.7z" />
                                                    <circle cx="47.3" cy="46.7" r="7.3" />
                                                </svg>
                                                SHIPPING ADDRESS
                                            </div>
                                            <ul>
                                                <li>
                                                    Intersmart Solutions <br>
                                                    2nd floor <br>
                                                    Lillys tower<br>
                                                    Palarivattom
                                                </li>
                                                <li>
                                                    9568987956
                                                </li>
                                            </ul>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="PaYOptnS">
                            <div class="BoxHead">
                                <div class="Head">Select a Payment Method</div>
                            </div>
                            <div class="paymentMethod">
                                <div class="flexBox">
                                    <div class="OptItm">
                                        <div class="options">
                                            <input type="radio" name="paymentOption" checked="">
                                            <label for="paymentOption">
                                                <div class="Wrp">
                                                    <span></span>
                                                    <div class="label">Cash On Delivery
                                                    </div>
                                                    <img src="assets/images/cod.png" alt="COD" class="img-fluid">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="OptItm">
                                        <div class="options">
                                            <input type="radio" name="paymentOption">
                                            <label for="paymentOption">
                                                <div class="Wrp">
                                                    <span></span>
                                                    <div class="label">Payment Gateway
                                                    </div>
                                                    <img src="assets/images/visa.png" alt="COD" class="img-fluid">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chk_bx Terms">
                            <input type="checkbox" class="trigger" id="BillingAddressSlct" name="" value="" checked=""
                                required="" data-trigger="BillingAddrs">
                            <label for="BillingAddressSlct">
                                By continuing to checkout you agree to our
                                <a href="privacy.php">Terms and conditions</a>
                            </label>
                        </div>

                        <button type="submit" class="btn CnfrmBtn hoveranim">
                            <span>Confirm Order</span>
                        </button>

                    </div>
                </div>

                <div class="RitAside">
                    <div class="CartSummerY">
                        <div class="BoxHead">
                            <div class="Head">Order Summary</div>
                        </div>
                        <div class="OrderdItms">
                            <div class="Itm">
                                <a href="" class="ProItmBox">
                                    <div class="Proimg">
                                        <img src="assets/images/Pro1.webp" alt="Pro1">
                                    </div>
                                    <div class="Proinfo">
                                        <div class="ProHeader">
                                            <div class="ProName">Nayaki</div>
                                            <div class="Collection">RAGAMALIKA COLLECTION</div>
                                            <div class="PriceWrp">
                                                <span class="CPrice">Rs. 1,500.00</span>
                                            </div>
                                            <div class="Qty">
                                                QTY
                                                <span>1</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="Itm">
                                <a href="" class="ProItmBox">
                                    <div class="Proimg">
                                        <img src="assets/images/Pro1.webp" alt="Pro1">
                                    </div>
                                    <div class="Proinfo">
                                        <div class="ProHeader">
                                            <div class="ProName">Nayaki</div>
                                            <div class="Collection">RAGAMALIKA COLLECTION</div>
                                            <div class="PriceWrp">
                                                <span class="CPrice">Rs. 1,500.00</span>
                                            </div>
                                            <div class="Qty">
                                                QTY
                                                <span>1</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="couponcode">
                            <div class="title">
                                Apply Discount Code
                            </div>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" required="" name="couponcode" class="inputText form-control"
                                        id="couponcode" value="" placeholder="Enter Coupon Code">
                                    <div class="btnSec">
                                        <input type="submit" class="applyBtn" name="apply_coupon" value="Apply">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <ul class="PriceSec">
                            <li>
                                <span>
                                    Subtotal
                                </span>
                                <span>
                                    RS. 3,000
                                </span>
                            </li>
                            <li>
                                <span>
                                    SHIPPING
                                </span>
                                <span>
                                    0
                                </span>
                            </li>
                        </ul>
                        <ul class="TotalPrice">
                            <li>
                                <span>
                                    TOTAL
                                </span>
                                <span>
                                    Rs. 1,500.00
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<?php include "./includes/footer.php"?>