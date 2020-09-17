<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
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
          <a class="dropdown-item" href="#">PRODUCT</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
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
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
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
      <!-- <a class="nav-link" href="" tabindex="-1" aria-disabled="true">
      <img src="{{asset('img/icon_menu/menu1_14.png')}}" width="100%" alt=""/>
      </a> -->

<p>
  <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  <img src="{{asset('img/icon_menu/menu1_14.png')}}" width="100px" />
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