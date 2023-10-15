@extends('welcome')

@section('content')
<!doctype html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Product Details</title>
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
body {
    background-color: #eee;
    font-family: "Poppins", sans-serif
}

.card {
    background-color: #fff;
    padding: 14px;
    border: none
}
#lightSlider li{}

.demo {
    width: 100%
}

ul {
    list-style: none outside none;
    padding-left: 0;
    margin-bottom: 0
}

li {
    display: block;
    float: left;
    margin-right: 6px;
    cursor: pointer
}

img {
    display: block;
    height: auto;
    width: 100%
}

.stars i {
    color: #f6d151
}

.stars span {
    font-size: 13px
}

hr {
    color: #d4d4d4
}

.badge {
    padding: 5px !important;
    padding-bottom: 6px !important
}

.badge i {
    font-size: 10px
}

.profile-image {
    width: 35px
}

.comment-ratings i {
    font-size: 13px
}

.username {
    font-size: 12px
}

.comment-profile {
    line-height: 17px
}

.date span {
    font-size: 12px
}

.p-ratings i {
    color: #f6d151;
    font-size: 12px
}

.btn-long {
    padding-left: 35px;
    padding-right: 35px
}

.buttons {
    margin-top: 15px
}

.buttons .btn {
    height: 46px
}

.buttons .cart {
    border-color: #ff7676;
    color: #ff7676
}

.buttons .cart:hover {
    background-color: #e86464 !important;
    color: #fff
}

.buttons .buy {
    color: #fff;
    background-color: #ff7676;
    border-color: #ff7676
}

.buttons .buy:focus,
.buy:active {
    color: #fff;
    background-color: #ff7676;
    border-color: #ff7676;
    box-shadow: none
}

.buttons .buy:hover {
    color: #fff;
    background-color: #e86464;
    border-color: #e86464
}

.buttons .wishlist {
    background-color: #fff;
    border-color: #ff7676
}

.buttons .wishlist:hover {
    background-color: #e86464;
    border-color: #e86464;
    color: #fff
}

.buttons .wishlist:hover i {
    color: #fff
}

.buttons .wishlist i {
    color: #ff7676
}

.comment-ratings i {
    color: #f6d151
}

.followers {
    font-size: 9px;
    color: #d6d4d4
}

.store-image {
    width: 42px
}

.dot {
    height: 10px;
    width: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    margin-right: 5px
}

.bullet-text {
    font-size: 12px
}

.my-color {
    margin-top: 10px;
    margin-bottom: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    border: 2px solid #8f37aa;
    display: inline-block;
    color: #8f37aa;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-transform: uppercase;
    transition: 0.5s all
}

label.radio .red {
    background-color: red;
    border-color: red
}

label.radio .blue {
    background-color: blue;
    border-color: blue
}

label.radio .green {
    background-color: green;
    border-color: green
}

label.radio .orange {
    background-color: orange;
    border-color: orange
}

label.radio input:checked+span {
    color: #fff;
    position: relative
}

label.radio input:checked+span::before {
    opacity: 1;
    content: '\2713';
    position: absolute;
    font-size: 13px;
    font-weight: bold;
    left: 4px
}

.card-body {
    padding: 0.3rem 0.3rem 0.2rem
}
  </style>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
  <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>

  @if (Route::has('login'))

  @auth

  @foreach ($data as $item)
  <div class="container-fluid mt-2 mb-3">
    <div class="row no-gutters">
      <div class="col-md-5 pr-2">
        <div class="card">
          <div class="demo">
            <ul id="lightSlider">
              <li data-thumb="images/{{$item['PImage']}}"> <img src="images/{{$item['PImage']}}" /> </li>
            </ul>
          </div>
        </div>
        <div class="card mt-2">
          <h6>Reviews</h6>
          <div class="d-flex flex-row">
            <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="ml-1 font-weight-bold">4.6</span>
          </div>
          <hr>
          <div class="badges"> <span class="badge bg-dark ">All (230)</span> <span class="badge bg-dark "> <i class="fa fa-image"></i> 23 </span> <span class="badge bg-dark "> <i class="fa fa-comments-o"></i> 23 </span> <span class="badge bg-warning"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="ml-1">2,123</span> </span> </div>
          <hr>
          <div class="comment-section">
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/tmdHXOY.jpg" class="rounded-circle profile-image">
                <div class="d-flex flex-column ml-1 comment-profile">
                  <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="username">Dhruvik Patel</span>
                </div>
              </div>
              <div class="date"> <span class="text-muted">2 May</span> </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/tmdHXOY.jpg" class="rounded-circle profile-image">
                <div class="d-flex flex-column ml-1 comment-profile">
                  <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="username">Aastha Tank</span>
                </div>
              </div>
              <div class="date"> <span class="text-muted">12 May</span> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card">
          <div class="d-flex flex-row align-items-center">
            <div class="p-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="ml-1">5.0</span>
          </div>
          <div class="about"> <span class="font-weight-bold">{{$item['PName']}}</span>
            <h4 class="font-weight-bold">₹{{$item['PPrice']}}</h4>
          </div>
          <div class="buttons"> <button class="btn btn-outline-warning btn-long cart">Add to Cart</button> <button class="btn btn-warning btn-long buy">Buy it Now</button> <button class="btn btn-light wishlist"> <i class="fa fa-heart"></i> </button> </div>
          <hr>
          <div class="product-description">
            <div><span class="font-weight-bold">Color:</span><span> blue</span></div>
            <div class="my-color"> <label class="radio"> <input type="radio" name="gender" value="MALE" checked> <span class="red"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="blue"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="green"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="orange"></span> </label> </div>
            <div class="d-flex flex-row align-items-center"> <i class="fa fa-calendar-check-o"></i> <span class="ml-1">Delivery from Rajkot, 6-7 days</span> </div>
            <div class="mt-2"> <span class="font-weight-bold">Description</span>
              <p>{{$item['PMore']}}</p>
              <div class="bullets">
                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Best in Quality</span> </div>
                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Letest Processor</span> </div>
                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">1 year warrenty</span> </div>
                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">gorilla glass</span> </div>
                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">High gloss, high style</span> </div>
                <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Free cloud service</span> </div>
              </div>
            </div>
            <div class="mt-2"> <span class="font-weight-bold">Store</span> </div>
            <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/N2fYgvD.png" class="rounded-circle store-image">
              <div class="d-flex flex-column ml-1 comment-profile">
                <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="username">Rajkot </span> <small class="followers">25K Followers</small>
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-2"> <span>Similar items:</span>
          <div class="similar-products mt-2 d-flex flex-row">
            <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYBh9eDQDdK38aczFegcAcEQ7AUznqbmHKdA&usqp=CAU" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">₹98000</h6>
              </div>
            </div>
            <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjejlH5GMGOp932EGiUdNL5sdjJTnE21N6Dg&usqp=CAU" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">₹78000</h6>
              </div>
            </div>
            <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzjkL2yLqdFNpg1hAtZaT8VAlINPtOPDyMKQ&usqp=CAU" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">₹67999</h6>
              </div>
            </div>
            <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1LNcXxOT5Llcp0ZazjQ1uEHfJuJNEInItrQ&usqp=CAU" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">₹91999</h6>
              </div>
            </div>
            <div class="card border p-1" style="width: 9rem;"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQGGvC_xGP9ZlbWAon0ym8h-_-6zc8CeRXtw&usqp=CAU" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">₹74999</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  @else
  <script>
    window.alert('You are not loggedin!!');
    window.location.replace("http://localhost:8000/");
    </script>  
  

  @endauth
  @endif


  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
  <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
  <script>
    
  </script>
  <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
  <script type='text/javascript' src=''></script>
  <script type='text/javascript' src=''></script>
  <script type='text/Javascript'></script>
</body>

</html>

@endsection