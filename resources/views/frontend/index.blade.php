<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="frontend/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
</head>

<body>

    <!-- <header class="header-section">
        <div class="hero-content">
            <h1>Organic Dry Food</h1>
            <p>Be fit and healthy. Test our organic food</p>
            <a href="#checkout" class="btn-custom">buy now</a>
        </div>
    </header> -->

    <header class="header-section">
        <img src="frontend/images/banner.webp" class="img-responsive">
        
        <div class="hero-content">
            <h1>Organic Dry Food</h1>
            <p>Be fit and healthy. Test our organic food</p>
            <a href="#checkout" class="btn-custom">buy now</a>
        </div>
    </header>

    <!-- Product Description -->
    <section class="features-section">
        <div class="container">
            <h2>Why Choose Our Product?</h2>

            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="frontend/images/feature.webp">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="frontend/images/feature.webp">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="frontend/images/feature.webp">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="frontend/images/feature.webp">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="frontend/images/feature.webp">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="frontend/images/feature.webp">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Review -->
    <section class="mt-5">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div>
                        <img src="https://placehold.co/80X80">
                        <p>This is an amazing product</p>
                        <h5>Custimer1</h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div>
                        <img src="https://placehold.co/80X80">
                        <p>This is an amazing product</p>
                        <h5>Custimer2</h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div>
                        <img src="https://placehold.co/80X80">
                        <p>This is an amazing product</p>
                        <h5>Custimer3</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Checkout Form -->
    <section class="checkout-section" id="checkout">
        <div class="container">
            <h2>Checkout</h2>
            <form action="" method="" class="checkout-form">
                <div class="mb-3">
                    <label for="" class="form-label">Full Name*</label>
                    <input type="text" class="form-control custom-input" name="" value="" id="" placeholder="Your full name*" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Phone Number*</label>
                    <input type="text" class="form-control custom-input" name="" value="" id="" placeholder="Your Phone number*" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Address*</label>
                    <textarea class="form-control custom-input" name="" id="" placeholder="Your full address*"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Area*</label>
                    <select class="form-control custom-input" name="" id="">
                        <option value="" selected disabled>Select Area</option>
                        <option value="in-dhaka">inside Dhaka (80)</option>
                        <option value="out-dhaka">outside Dhaka (150)</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Confirm Order</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
     <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="https://placehold.co/150X60">
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <p>&copy 2024 LandingPage. All Rights Reserved</p>
            </div>
        </div>
     </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>