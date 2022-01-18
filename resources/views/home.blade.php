@extends('layouts.app')
@section('Nav1')
@guest
<li class="scroll-to-section"><a class="nav-link" href="#login">Home</a></li>
<li class="scroll-to-section"><a class="nav-link" href="#login">About Us</a></li>
<li class="scroll-to-section"><a class="nav-link" href="#login">Contact</a></li>
@else
<li class="scroll-to-section"><a class="nav-link" href="#login">Home</a></li>
<li class="scroll-to-section"><a class="nav-link" href="/visual/{{ Auth::user()->ID_Pemilik }}">Visualization</a></li>
<li class="scroll-to-section"><a class="nav-link" href="#login">About Us</a></li>
<li class="scroll-to-section"><a class="nav-link" href="#login">Contact</a></li>
@endguest
@endsection

<style>

.carouselExampleSlidesOnly{
    bottom: 0;
    right: 0;
    left: 0;
}
.jumbotron{
    margin-top: -25px;
    background-image: url("https://media.istockphoto.com/photos/businessman-trading-online-stock-market-on-teblet-screen-digital-picture-id1311598658?b=1&k=20&m=1311598658&s=170667a&w=0&h=Ln_dpeXRkCDCZjuqOe2r7AlWP29xHFbc9wyKzxajloA=");
    background-position: center;
    background-size: cover;
    height: 650px;
    position: relative;
}
.jumbotron .container{
    z-index: 1;
    position: relative;
}
.jumbotron .display-4{
    margin-top: 100px;
    font-size: 700px;
    font-weight: 300;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0,7);
    color: whitesmoke;
}
.jumbotron .display-4 span{
    font-weight: 600;
    color: red;
}
.jumbotron .display-4 a{
    margin-top: 20px;
    font-weight: 600;
    font-size: 30px;
}


.jumbotron::after{
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to top,rgba(0,0,0,1),rgba(0,0,0,0) );
    position: absolute;
    bottom:0;
}

</style>

@section('content')

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="display-4">
        <h1>Get Work Done <span>Faster</span> <br>With Data Visualisations
        <br><a class="btn btn-primary" href="#" role="button">Get Started</a></h1>
        </div>
    </div>

  </div>

@endsection



