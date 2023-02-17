<main>
    <section class="promo">
        <div class="container promo-container">
            <h1 class="promo-heading">
                <span class="promo-heading-brand">THE BRAND</span><br>
                <span class="promo-heading-lux">OF LUXURIOUS</span>
                <span class="promo-heading-fashion">FASHION</span>
            </h1>
        </div>
    </section>
    <section class="categories container">
        <h2 class="hidden">categories of products</h2>
        <a class="categories-card categories-women" href="/catalog/women">
            <span class="categories-text">WOMEN</span>
        </a>
        <a class="categories-card categories-men" href="/catalog/men">
            <span class="categories-text">MEN</span>
        </a>
        <a class="categories-card categories-kids" href="/catalog/kids">
            <span class="categories-text">KIDS</span>
        </a>

    </section>
    <section class="products container">
        <h2 class="products-heading">Featured Items</h2>
        <p class="products-text">Shop for items based on what we featured during this week</p>
        <div class="products-items">
            <?php foreach ($products as $product) : ?>
                <figure class="products-card">
                    <div class="products-card-image">
                        <img class="products-card-img" src="/img/<?= $product['main_img'] ?>.jpg" alt="product 1" ;>
                        <div class="products-card-overlay">
                            <button class="products-card-overlay-button" type="button"><svg class="products-card-overlay-icon" width="26" height="24" viewBox="0 0 32 29" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.2 29C25.5522 28.9738 24.9405 28.6948 24.4962 28.2227C24.0519 27.7506 23.8104 27.1232 23.8235 26.475C23.8366 25.8269 24.1033 25.2097 24.5663 24.7559C25.0293 24.3022 25.6518 24.048 26.3 24.048C26.9483 24.048 27.5707 24.3022 28.0337 24.7559C28.4967 25.2097 28.7634 25.8269 28.7765 26.475C28.7896 27.1232 28.5481 27.7506 28.1038 28.2227C27.6594 28.6948 27.0478 28.9738 26.4 29H26.2ZM6.75195 26.32C6.75195 25.79 6.90913 25.2718 7.20361 24.8311C7.4981 24.3904 7.91667 24.0469 8.40637 23.844C8.89608 23.6412 9.43497 23.5881 9.95483 23.6915C10.4747 23.7949 10.9522 24.0502 11.327 24.425C11.7018 24.7998 11.9571 25.2773 12.0605 25.7972C12.164 26.317 12.1108 26.8559 11.908 27.3456C11.7051 27.8353 11.3616 28.2539 10.9209 28.5483C10.4802 28.8428 9.96206 29 9.43201 29C9.0799 29.0003 8.73114 28.9311 8.40576 28.7966C8.08038 28.662 7.78472 28.4646 7.53564 28.2158C7.28657 27.9669 7.08903 27.6713 6.95422 27.3461C6.81942 27.0208 6.75 26.6721 6.75 26.32H6.75195ZM10.552 20.686C10.2926 20.6868 10.04 20.6024 9.83313 20.4457C9.62629 20.2891 9.47661 20.0689 9.40698 19.819L4.57397 2.36401H1.18103C0.867544 2.36401 0.566883 2.23947 0.345215 2.01781C0.123547 1.79614 -0.000976562 1.49549 -0.000976562 1.18201C-0.000976562 0.868519 0.123547 0.567873 0.345215 0.346205C0.566883 0.124537 0.867544 5.81268e-06 1.18103 5.81268e-06H5.46204C5.72153 -0.00080736 5.97406 0.0837201 6.18079 0.240568C6.38751 0.397416 6.53686 0.617884 6.60596 0.868006L11.439 18.323H24.6169L29 8.27501H14.4C14.2418 8.27961 14.0844 8.25242 13.9369 8.19507C13.7894 8.13771 13.6549 8.05134 13.5414 7.94108C13.4279 7.83082 13.3376 7.69891 13.276 7.55315C13.2144 7.40739 13.1826 7.25075 13.1826 7.0925C13.1826 6.93426 13.2144 6.77762 13.276 6.63186C13.3376 6.4861 13.4279 6.35419 13.5414 6.24393C13.6549 6.13367 13.7894 6.0473 13.9369 5.98994C14.0844 5.93259 14.2418 5.90541 14.4 5.91001H30.813C31.0087 5.90996 31.2013 5.95866 31.3734 6.05172C31.5456 6.14478 31.6918 6.27926 31.799 6.44301C31.9068 6.60729 31.9724 6.79569 31.9899 6.99145C32.0073 7.18721 31.9762 7.38424 31.899 7.565L26.494 19.977C26.4016 20.1876 26.25 20.3668 26.0575 20.4927C25.865 20.6186 25.64 20.6858 25.41 20.686H10.552Z" />
                                </svg>Add to Cart</button>
                        </div>
                    </div>
                    <figcaption class="products-card-info">
                        <a class="products-card-link" href="product.html">
                            <h3 class="products-card-link-heading"><?= $product['title'] ?></h3>
                            <p class="products-card-link-text"><?= $product['desc'] ?></p>
                        </a>
                        <p class="products-card-pricetag">$<?= $product['price'] ?></p>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
        <a class="products-all" href="catalog">Browse All Products</a>
    </section>
</main>