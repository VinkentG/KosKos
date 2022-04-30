@extends('layouts.app')
@section('Nav1')
@guest
<li class="scroll-to-section"><a class="nav-link" href="/home">Home</a></li>
<li class="scroll-to-section"><a class="nav-link" href="/about">About Us</a></li>
<li class="scroll-to-section"><a class="nav-link" href="/contact">Contact</a></li>
@else
<li class="scroll-to-section"><a class="nav-link" href="/home">Home</a></li>
<li class="scroll-to-section"><a class="nav-link" href="/visual/{{ Auth::user()->ID_Pemilik }}">Visualization</a></li>
<li class="scroll-to-section"><a class="nav-link" href="/about">About Us</a></li>
<li class="scroll-to-section"><a class="nav-link" href="/contact">Contact</a></li>
@endguest
@endsection

<style>

.carouselExampleSlidesOnly{
    bottom: 0;
    right: 0;
    left: 0;
}
.ba{
    margin-top: -25px;
    background-image: url("https://media.istockphoto.com/photos/businessman-trading-online-stock-market-on-teblet-screen-digital-picture-id1311598658?b=1&k=20&m=1311598658&s=170667a&w=0&h=Ln_dpeXRkCDCZjuqOe2r7AlWP29xHFbc9wyKzxajloA=");
    background-position: center;
    background-size: cover;
    height: 650px;
    position: relative;
}
.bb {
    margin-top: -35px;
    margin-bottom: -40px;
    background-image: url('{{ asset('storage/pexels-lukas-669615.jpg') }}')
    background-position: center;
    background-size: cover;
    height: 650px;
    position: relative;
}
.ba .container{
    margin-top: -10px;
    z-index: 1;
    position: relative;
}
.ba .display-4{
    margin-top: 150px;
    font-size: 800px;
    font-weight: 400;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0,7);
    color: whitesmoke;
}
.ba .display-4 span{
    font-weight: 600px;
    color: red;
}
.ba .display-4 h1{
    font-size: 70px;
    font-weight: 700px;
}
.ba .display-4 .a{
    font-size: 50px;
    font-weight: 700px;
}
.ba .display-4 a{
    margin-top: 20px;
    font-weight: 600;
    font-size: 30px;
}
.bb .display-4 {
    /* margin-top: 200px; */
    font-weight: 600px;
    font-size: 30px;
}
.bb .display-4 p{
    margin-top: 40px;
    /* font-weight: 600;
    font-size: 30px; */
}

.ba::after{
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to top,rgba(0,0,0,1),rgba(0,0,0,0) );
    position: absolute;
    bottom:0;
}
.btn{
    border-radius: 60px;
}
.jumbotron .bb{
    margin-top: -25px;
    background-image: url("https://media.istockphoto.com/photos/businessman-trading-online-stock-market-on-teblet-screen-digital-picture-id1311598658?b=1&k=20&m=1311598658&s=170667a&w=0&h=Ln_dpeXRkCDCZjuqOe2r7AlWP29xHFbc9wyKzxajloA=");
    background-position: center;
    background-size: cover;
    height: 650px;
    position: relative;
}

</style>

@section('content')

@guest
<div class="jumbotron jumbotron-fluid ba" id="home">
    <div class="container">
        <div class="display-4">
        <h1 class="a">Get Work Done <span>Faster</span> <br>With Data Visualisations
        <br><a class="btn btn-primary" href="login" role="button">Join US</a></h1>
        </div>
    </div>
  </div>
  @else
  <div class="jumbotron jumbotron-fluid ba" id="home">
    <div class="container">
        <div class="display-4">
        <h1>Wellcome <span>Back</span> <br> {{ Auth::user()->name }}
        <br><a class="btn btn-primary shadow" href="/visual/{{ Auth::user()->ID_Pemilik }}" role="button">Get Started</a></h1>
        </div>
    </div>
  </div>
@endguest

<div class="jumbotron jumbotron-fluid bb" id="about">
    <div class="container">
        <div class="display-4">
            <h1>About Us</h1>
            <p>
                Platform ini menyediakan jasa untuk menyediakan sarana melihat data rumah kost secara mudah dan cepat dengan visualisasi.
            </p>
            <p>
              --------------------------------------------------------------------------------------------
            <p>
                This platform provides services to provide a means of viewing boarding house data easily and quickly with visualization.
            </p>
            <p>
                --------------------------------------------------------------------------------------------
              <p>
            </div>
    </div>
  </div>


@endsection
@section('foot')
<footer>
    <div class="footer-content" id="contact">
        <h3>VizKost Developer</h3>
        <p>Contact us if you need more help</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy; <a href="#">VizKost Developer</a>  </p>
    </div>

</footer>
@endsection



