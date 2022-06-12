@extends('master')
@section("content")
       <!-- About Section-->
       <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase">Our Story</h2>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="col-lg ms-auto">
                    <p class="lead">
                        We started Fresh n Go because we wanted to bring something new and different to the island, we now call home. While we enjoy the cuisine here, we found ourselves missing some of the foods we grew up eating, and though other expats and tourists might share that sentiment.<br/><br/> 
                    At Fresh n Go, we believe that everything should be made from scratch. Therefore, you will never find commercially packaged mixes in our dishes; we make all of our beef, chicken, and vegetable stock from scratch with fresh carrots, onions, celery, and whole herbs. Our gravy is made with meat drippings, flour, and our house-made stock. Our deli meats are seasoned, slow-roasted, and sliced in-house. All our salad dressings are made in house in small batches and are available to purchase!<br/><br/> 
                    We also understand the need for convenience, so we set out to develop meals that can be prepared from scratch and frozen so that you can stock up your freezer with good, wholesome foods that you can easily reheat and eat on those days when you just don't feel like shopping or cooking dinner
                    </p></div>
            </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://freshngo.s3.amazonaws.com/documents/family-style-menu.pdf" target="_blank">
                        <i class="fas fa-download me-2"></i>
                        Get Our Family Style Menu
                    </a>
                </div>
            </div>
        </section>        
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="menu">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Menu Options</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://freshngo.s3.amazonaws.com/core/breakfast.jpeg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://freshngo.s3.amazonaws.com/core/lunch.jpeg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://freshngo.s3.amazonaws.com/core/dinner.jpeg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://freshngo.s3.amazonaws.com/core/sides.jpeg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://via.placeholder.com/1120.png?text=Specailty" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://freshngo.s3.amazonaws.com/core/PaintedGringos.png" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Get In Touch</h2>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                    <form id="contactForm" data-sb-form-api-token="fce4aca1-f9a9-4756-a488-2d124a17a1fe">
                        <div class="form-floating mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <label class="form-label" for="emailAddress">Email Address</label>
                            <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <input class="form-control" id="phoneNumber" type="text" placeholder="Phone Number" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phoneNumber:required">Phone Number is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        </section>
@endsection