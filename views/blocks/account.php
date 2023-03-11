<main>
    <section class="breadcrumb">
        <div class="container account-nav">
            <div class="account-nav-top">
                <p class="account-nav-top-heading">Hi, <?= $first_name ?></p>
                <a class="account-nav-logout logout-mob" href="/"><span>Log out</span></a>
            </div>
            <ul class="account-nav-categories">
                <li class="account-nav-category"><a href="/account/orders"><span>ORDERS</span></a></li>
                <li class="account-nav-category"><a href="/account/info"><span>PERSONAL DETAILS</span></a>
                </li>
                <li class="account-nav-category"><a href="/account"><span>RETURNS</span></a></li>
                <li class="account-nav-category"><a href="/account"><span>WISH LIST</span></a></li>
            </ul>
            <a class="account-nav-logout logout-desk" href="/account/?action=logout"><span>Log out</span></a>
        </div>
    </section>
    <section class="account container">
        <?php if ($tab == 'orders') : ?>
            <div class="account-orders">
                <h2 class="account-header">My orders</h2>
                <div class="account-table-wrapper">
                    <table class="account-table">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                                <a class="account-table-view" href="/">#001</a>
                            </td>
                            <td>
                                01.03.2023 15:00
                            </td>
                            <td>
                                Pending
                            </td>
                            <td>
                                $300
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="account-table-view" href="/">#001</a>
                            </td>
                            <td>
                                01.03.2023 15:00
                            </td>
                            <td>
                                Pending
                            </td>
                            <td>
                                $300
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="account-table-view" href="/">#001</a>
                            </td>
                            <td>
                                01.03.2023 15:00
                            </td>
                            <td>
                                Pending
                            </td>
                            <td>
                                $300
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="account-table-view" href="/">#001</a>
                            </td>
                            <td>
                                01.03.2023 15:00
                            </td>
                            <td>
                                Pending
                            </td>
                            <td>
                                $300
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        <?php elseif ($tab == 'info') : ?>
            <!-- <div class="account-order">
            <h2 class="account-header">Order #001</h2>
            <div class="account-order-summary">
                <p>Ordered: 2023-03-09 11:18:49</p>
                <p>Delivered: </p>
                <p>Status: pending</p>
                <p>Total: $400</p>
            </div>
            <section class="account-order-items">
                <div class="account-order-item">
                    <picture class="account-order-item-image">
                        <img src="/img/catalog/product-1.jpg" alt="product-1">
                    </picture>
                    <p class="account-order-item-description">
                        <span class="account-order-item-title">Next TAILORED STANDARD - Day dress</span>
                        <span class="account-order-item-qty"> Quantity:2</span>
                        <span>Price: $200</span>
                    </p>
                </div>
                <div class="account-order-item">
                    <picture class="account-order-item-image">
                        <img src="/img/catalog/product-1.jpg" alt="product-1">
                    </picture>
                    <p class="account-order-item-description">
                        <span class="account-order-item-title">Reebok Classic SPARKLE - Tracksuit bottoms</span>
                        <span class="account-order-item-qty"> Quantity:2</span>
                        <span>Price: $200</span>
                    </p>
                </div>
                <div class="account-order-item">
                    <picture class="account-order-item-image">
                        <img src="/img/catalog/product-1.jpg" alt="product-1">
                    </picture>
                    <p class="account-order-item-description">
                        <span class="account-order-item-title">Next TAILORED STANDARD - Day dress</span>
                        <span class="account-order-item-qty"> Quantity:2</span>
                        <span>Price: $200</span>
                    </p>
                </div>
                <div class="account-order-item">
                    <picture class="account-order-item-image">
                        <img src="/img/catalog/product-1.jpg" alt="product-1">
                    </picture>
                    <p class="account-order-item-description">
                        <span class="account-order-item-title">Next TAILORED STANDARD - Day dress</span>
                        <span class="account-order-item-qty"> Quantity:2</span>
                        <span>Price: $200</span>
                    </p>
                </div>
            </section>
        </div> -->
            <div class="account-info">
                <h2 class="account-header">Personal details</h2>
                <form class="account-form" method="" action="">
                    <input hidden name="" value="">
                    <p>
                        <label for="first_name">First Name</label>
                        <input id="first_name" class="account-form-info" name="first_name" type="text" placeholder="First Name" value="Peter">
                    </p>
                    <p>
                        <label for="last_name">Last Name</label>
                        <input id="last_name" class="account-form-info" name="last_name" type="text" placeholder="Last Name" value="Pan">
                    </p>
                    <p>
                        <label for="emal">Email</label>
                        <input id="email" class="account-form-info" name="email" type="email" placeholder="Email" value="peter@pan.com">
                    </p>
                    <p>
                        <label for="phone">Phone</label>
                        <input id="phone" class="account-form-info" name="phone" type="phone" placeholder="Phone" value="+999 111 222 33">
                    </p>
                    <p>
                        <label for="address">Address</label>
                        <input id="address" class="account-form-info" name="address" type="address" placeholder="Address" value="105 Town Square, Main Street, USA Disnayland">
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input id="password" class="account-form-info" name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="1234">
                    </p>
                    <button class="account-form-join" type="submit">EDIT<svg width="17" height="10" viewBox="0 0 17 10" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.54 0.208095C11.6058 0.142131 11.684 0.0897967 11.77 0.0540883C11.8561 0.01838 11.9483 0 12.0415 0C12.1347 0 12.2269 0.01838 12.313 0.0540883C12.399 0.0897967 12.4772 0.142131 12.543 0.208095L16.7929 4.458C16.8589 4.5238 16.9112 4.60196 16.9469 4.68802C16.9826 4.77407 17.001 4.86632 17.001 4.95949C17.001 5.05266 16.9826 5.14491 16.9469 5.23097C16.9112 5.31702 16.8589 5.39518 16.7929 5.46098L12.543 9.71089C12.41 9.84389 12.2296 9.91861 12.0415 9.91861C11.8534 9.91861 11.673 9.84389 11.54 9.71089C11.407 9.57788 11.3323 9.39749 11.3323 9.2094C11.3323 9.0213 11.407 8.84091 11.54 8.70791L15.2898 4.95949L11.54 1.21107C11.474 1.14528 11.4217 1.06711 11.386 0.981059C11.3503 0.895005 11.3319 0.802752 11.3319 0.709584C11.3319 0.616415 11.3503 0.524162 11.386 0.438109C11.4217 0.352055 11.474 0.273891 11.54 0.208095Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 4.95948C0 4.77162 0.0746263 4.59146 0.207462 4.45862C0.340297 4.32579 0.52046 4.25116 0.708318 4.25116H15.583C15.7708 4.25116 15.951 4.32579 16.0838 4.45862C16.2167 4.59146 16.2913 4.77162 16.2913 4.95948C16.2913 5.14734 16.2167 5.3275 16.0838 5.46033C15.951 5.59317 15.7708 5.6678 15.583 5.6678H0.708318C0.52046 5.6678 0.340297 5.59317 0.207462 5.46033C0.0746263 5.3275 0 5.14734 0 4.95948Z" />
                        </svg>
                    </button>
                    <!-- <button class="account-form-join" type="submit">SUBMIT<svg width="17" height="10" viewBox="0 0 17 10" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.54 0.208095C11.6058 0.142131 11.684 0.0897967 11.77 0.0540883C11.8561 0.01838 11.9483 0 12.0415 0C12.1347 0 12.2269 0.01838 12.313 0.0540883C12.399 0.0897967 12.4772 0.142131 12.543 0.208095L16.7929 4.458C16.8589 4.5238 16.9112 4.60196 16.9469 4.68802C16.9826 4.77407 17.001 4.86632 17.001 4.95949C17.001 5.05266 16.9826 5.14491 16.9469 5.23097C16.9112 5.31702 16.8589 5.39518 16.7929 5.46098L12.543 9.71089C12.41 9.84389 12.2296 9.91861 12.0415 9.91861C11.8534 9.91861 11.673 9.84389 11.54 9.71089C11.407 9.57788 11.3323 9.39749 11.3323 9.2094C11.3323 9.0213 11.407 8.84091 11.54 8.70791L15.2898 4.95949L11.54 1.21107C11.474 1.14528 11.4217 1.06711 11.386 0.981059C11.3503 0.895005 11.3319 0.802752 11.3319 0.709584C11.3319 0.616415 11.3503 0.524162 11.386 0.438109C11.4217 0.352055 11.474 0.273891 11.54 0.208095Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 4.95948C0 4.77162 0.0746263 4.59146 0.207462 4.45862C0.340297 4.32579 0.52046 4.25116 0.708318 4.25116H15.583C15.7708 4.25116 15.951 4.32579 16.0838 4.45862C16.2167 4.59146 16.2913 4.77162 16.2913 4.95948C16.2913 5.14734 16.2167 5.3275 16.0838 5.46033C15.951 5.59317 15.7708 5.6678 15.583 5.6678H0.708318C0.52046 5.6678 0.340297 5.59317 0.207462 5.46033C0.0746263 5.3275 0 5.14734 0 4.95948Z" />
                    </svg>
                </button> -->
                </form>
            </div>
        <?php else : ?>
            <div class="account-index">
                <h2>Welcome to your account, <?= $first_name ?>!</h2>
                <p>You can manage your orders, returns and account info right here.</p>
                <a class="cart-actions-continue" href="/catalog">Continue shopping</a>
            </div>
        <?php endif; ?>
    </section>
</main>