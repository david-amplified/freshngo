<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
 $total= ProductController::cartItem();

 if($total > 0){
    $icon='https://freshngo.s3.amazonaws.com/core/icons8-picnic-basket-32.png';
 } else {
    $icon='https://freshngo.s3.amazonaws.com/core/icons8-picnic-basket-nawicon-glyph-32.png';
 }
} else {

    $icon='https://freshngo.s3.amazonaws.com/core/icons8-picnic-basket-nawicon-glyph-32.png';
 }
?>

 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="https://freshngo.s3.amazonaws.com/core/FRESHn'GO_Logo_Color.png" alt="" height="48"></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About Us</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#menu">Menu Options</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="text-white text-center">
            <div class="d-flex align-items-center flex-column">
                <img src="https://freshngo.s3.amazonaws.com/core/pasta-set-up.jpeg" width="100%">
                <p class="masthead-subheading font-weight-light mb-0">Bringing a New Dining Idea to San Pedro</p>
            </div>
        </header>