<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>اتوبوس من</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <style>
        .border-radius-card-img {
            border-radius: .5rem;
        }

        .img-main {
            width: 100%;
            max-width: 100%;
            height: 55vh;
        }

        .img-service {
            width: 100%;
            height: 200px;
        }

        .more-icon {
            border-radius: .5rem;
            transform: all linear .2s;
        }

        .more-icon:hover {
            border-radius: 0;
        }

        .f-14px {
            font-size: 14px;
        }

        .bg-gray {
            background-color: #f9f9f9;
        }

        ::-ms-input-placeholder {
            /* Edge 12-18 */
            color: red;
        }

        ::placeholder {
            color: #858585 !important;
            font-size: 14px !important;
        }

        .bg-f2f4fb {
            background-color: #f2f4fb!important;
        }

        .box-shadow {
            box-shadow: 2px 2px 10px 5px rgba(0,0,0,.1)
        }
    </style>
</head>

<body dir="rtl">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-dark sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5 m-0">
            <img src="{{ asset('assets/img/bus-logo.png') }}" class="img-fluid bg-warning rounded-1" style="width: 100px; height: 150px;"
                alt="">
            <!-- <h4 class="mb-2 text-dark" style="font-family: 'Courier New', Courier, monospace;">اتوبوس من</h4> -->
        </a>
        <button type="button" class="navbar-toggler ms-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto pe-3 p-lg-0">
                <a href="{{ route('home.index') }}" class="nav-item nav-link active">خانه</a>
                <a href="#" class="nav-item nav-link">فروش بلیط مسافر</a>
                <a href="#" class="nav-item nav-link">دربستی</a>
                <a href="#" class="nav-item nav-link">اربعین</a>
                <a href="#" class="nav-item nav-link">سامانه رزرواسیون مراکز اقامتی</a>
            </div>
            <h4 class="ms-4 pe-lg-5 d-none d-lg-block">۰۲۱-۲۳۴۵۶<i class="fas fa-headphones-alt text-primary me-3"></i>
            </h4>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <img class="img-fluid img-main" src="{{ asset('assets/img/bus-2.avif') }}" alt="" />
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="py-5">
        <div class="container-xxl box-shadow" style="border: 1px solid #cccccc; border-radius: 1rem 1rem 0 0;background-color: #ffffff">
            <div class="container">
                <div class="nav nav-tabs border-bottom-0 border-top-0" id="nav-tab" role="tablist">
                    <button class="nav-link f-14px active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" style="color: rgb(0, 0, 0);">درون شهری</button>
                    <button class="nav-link f-14px" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="color: rgb(0, 0, 0);">استفاده از ناوگان حمل و نقل برون شهری</button>
                    <button class="nav-link f-14px" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="color: rgb(0, 0, 0);">استفاده از ناوگان حمل و نقل برون شهری</button>
                    <button class="nav-link f-14px" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="color: rgb(0, 0, 0);">برون شهری</button>
                    <button class="nav-link f-14px" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" style="color: rgb(0, 0, 0);">برون مرزی</button>
                  </div>
            </div>
        </div>
        <div class="p-0">
            <div class="container-xxl box-shadow"
                style="border-radius: 0 0 1rem 1rem;border: 1px solid #cccccc;border-top:none;background-color: #ffffff; display: flex; align-items: center;justify-content: center;width: 100%; padding: 40px 0">
                <div class="container">
                    <form class="px-4">
                        <div class="row">
                            <div class="col-3 px-1 mb-3">
                                <select class="form-select form-select rounded-1">
                                    <option value="1">یک طرفه</option>
                                    <option value="2">دو طرفه</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-1 mb-3">
                                <input type="text" class="form-control rounded-1" id="validationServer01"
                                    placeholder="مبدا(شهر)">
                            </div>
                            <div class="col-md-3 px-1 mb-3">
                                <input type="text" class="form-control rounded-1" id="validationServer02"
                                    placeholder="مقصد(شهر)">
                            </div>
                            <div class="col-md-2 px-1 mb-3">
                                <input type="text" class="form-control rounded-1" id="validationServer01"
                                    placeholder="تاریخ رفت">
                            </div>
                            <div class="col-md-2 px-1 mb-3">
                                <input type="text" class="form-control rounded-1" id="validationServer02"
                                    placeholder="تاریخ برگشت">
                            </div>
                            <div class="col-md-1 px-1 mb-3">
                                <button type="submit" class="btn btn-warning rounded-1 px-5">جستجو</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" style="margin-top: 40px;" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">آدرس</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt ms-3"></i>ایران - تهران</p>
                    <p class="mb-2"><i class="fa fa-phone-alt ms-3"></i>۰۲۱-۲۳۴۵۶</p>
                    <p class="mb-2"><i class="fa fa-envelope ms-3"></i>mybus@gmail.com</p>
                    <div class="d-flex pt-2 d-none">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-none">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Air Freight</a>
                    <a class="btn btn-link" href="">Sea Freight</a>
                    <a class="btn btn-link" href="">Road Freight</a>
                    <a class="btn btn-link" href="">Logistic Solutions</a>
                    <a class="btn btn-link" href="">Industry solutions</a>
                </div>
                <div class="col-lg-3 col-md-6 d-none">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6 d-none">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row d-none">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </br>Distributed By <a class="border-bottom" href="https://themewagon.com"
                            target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End

    Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
