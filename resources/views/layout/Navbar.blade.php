<style>
.bg-light {
    background-color: #f7f7f7!important;
}
.search_top{
    color:#000;
    margin-top:20px;
}

.search_input_top{
    margin-top: 5px;
    width: 95%;
    height: 33px;
    border: none;
    border-bottom: 2px solid #000;
    float: left;
    margin-left: 4px;
    background-color: transparent;
}
.search_input_top:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: none;
}

.navbar-light .navbar-nav .nav-link {
    margin-top: 21px;
    margin: 7px;
    font-weight: bold;
    color: rgb(0 0 0);
}


.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link:hover {
  color:#ff6634;
}
.navbar-light .navbar-nav .nav-link:hover {
  text-decoration: underline;
  text-decoration-color:#ff6634;
  text-decoration-style:solid;
  text-decoration-style: solid;
  text-decoration-thickness: 5px;
}







.navbar-nav {
    padding-left: 50px !important;
    padding-right: 50px !important;
}

.dropdown-menu {
    position: absolute;
    top: 45%;
    left: 15px;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #e2e0e0;
    background-clip: padding-box;
    border: 0px solid rgba(0,0,0,.15);
    border-radius: 0rem;
}

</style>



<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <a class="navbar-brand" href="#"><img src="{{asset('img/icon_menu/MPK_logo-02.png')}}" width="180" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Home.index') }}" tabindex="-1" aria-disabled="true">HOME</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ route('Product.index') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        PRODUCT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('select_your_bike.index') }}">SELECT YOUR BIKE</a>
          <a class="dropdown-item" href="{{ route('category.index') }}">CATEGORY</a>
          <a class="dropdown-item" href="{{ route('bike_for_sell.index') }}">BIKE FOR SELL</a>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Promotion.index') }}" tabindex="-1" aria-disabled="true">PROMOTION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Service.index') }}" tabindex="-1" aria-disabled="true">SERVICE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('News.index') }}" tabindex="-1" aria-disabled="true">NEWS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Gallery.index') }}" tabindex="-1" aria-disabled="true">GALLERY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('About.index') }}" tabindex="-1" aria-disabled="true">ABOUT</a>
      </li>

      <li class="nav-item">
      <input type="text" class="search_input_top" name="search">
      <i class="fas fa-search search_top" style="margin-left:-20px; position: absolute; fone-size:20px; z-imdex:1;"></i>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Register.index') }}" tabindex="-1" aria-disabled="true">Register</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="{{ route('Contact.index') }}" tabindex="-1" aria-disabled="true">
      <i class="fas fa-map-marker-alt"></i>
      </a>
      </li>


      <li class="nav-item">
<p>
  <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  <img src="{{asset('img/icon_menu/menu1_14.png')}}" width="90px" />
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">

    <div class="text_title"> QUICK INFO </div>
    <div class="box_line">
<br>
    <div class="row" style="margin-top:10px;">
    <div class="col-1"><img src="{{asset('img/contact/location_orange.png')}}" width="25px" alt=""/></div> 
    <div class="col-8">1097 Rama 3 Rd. <br>Chong Nonsi  Yannawa, <br>Bangkok 10120</div>
    </div>

    <div class="row" style="margin-top:10px;">
    <div class="col-1"><img src="{{asset('img/contact/time_orange.png')}}" width="25px" alt=""/></div> 
    <div class="col-8">Mon-Sat : 10am - 6.30pm</div>
    </div>

    <div class="row" style="margin-top:10px;">
    <div class="col-1"><img src="{{asset('img/contact/tel_orange.png')}}" width="25px" alt=""/></div> 
    <div class="col-8">(+66)86-326-1730</div>
    </div>

    <div class="row" style="margin-top:10px;">
    <div class="col-1"><img src="{{asset('img/contact/mail_orange.png')}}" width="25px" alt=""/></div> 
    <div class="col-8">mpkconcept.th@gmail.com</div>
    </div>

    <div class="row" style="margin-top:10px;">
    <div class="col-1"><img src="{{asset('img/contact/chat_orange.png')}}" width="25px" alt=""/></div> 
    <div class="col-8">@mpkconcept</div>
    </div>
<br><br>

</div>




  </div>
</div>






      </li>

  
    </ul>
  </div>
</nav>