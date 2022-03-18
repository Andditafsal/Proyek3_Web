<html>
  <head>
    <title>Accounts</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <style>
      .col-4 {
        background-color: whitesmoke;
        border-radius: 10px;
        overflow-y: auto !important;
        height:800px

      }

      .col-8{
        padding-right:50px ;
      }

      img {
        border-radius: 10px;
        width:auto !important;
        height: 500px;
      }

      .container {
        margin-top: 30px;


      }

      h3{
        font-family: 'Amaranth';font-size: 30px;
        font-weight:bold;
      }

      h4{
        font-family: 'Amaranth';font-size: 18px;
        margin-left: 14px;
      }

      h2{
        font-family: 'Berkshire Swash';
        font-weight:bold;
      }

      .btn{
        margin-left: 14px;
        margin-top:10px

      }

      button{
        width:200px;
        border-radius: 7px !important;
      }

      p{
        font-family: 'Amaranth';
      }

      .review{
        padding: 0px 10px 0px 10px;
        margin:15px 10px 0px 10px;
        border-radius: 10px;
      }


    </style>
    <header>
      <nav class="navbar navbar-expand-md px-md-5">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/tampilan')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/rooms')}}s">Rooms & Suites</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/reservation')}}"
                >Reservations</a
              >
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="navbarDropdown"
              >
                <span class="dropdown-item"
                  >Signed in as <b>lemon potter</b></span
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.html">Log in</a>
                <a class="dropdown-item" href="signup.html">Sign up</a>
                <a class="dropdown-item" href="accounts.html">Account</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <center>
      <h2>ROOM DETAILS</h2>
    </center>
    <div class="container">
      <div class="row">
        <div class="col col-8 col-md-8">
          <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://i.pinimg.com/originals/c6/60/24/c66024ea79527d9bbafe79ed171558b9.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://housely.com/wp-content/uploads/2016/07/Hotel-Room.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://images.fineartamerica.com/images-medium-large/nice-hotel-room-atiketta-sangasaeng.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col"><h3>Lorem ipsum </h3></div>
            <div class="col" style="margin-top: 13px; margin-left:45px; font-family: 'Amaranth';font-weight:bold; font-size:20px">Starts from:something here...</div>
          </div>
          <div class="row">
            <div class="col" style="color:#FA4A5C;"><p><i class="fa fa-bed" aria-hidden="true"></i> 2 bedroom</p></div>
            <div class="col" style="color:#FA4A5C;"><p><i class="fa fa-shower" aria-hidden="true"></i> 2 bathroom</p></div>
            <div class="col" style="color:#FA4A5C;"><p><i class="fa fa-square" aria-hidden="true"></i> 1250 sq.ft</p></div>
            <div class="col" style="color:#FA4A5C;"><p><i class="fa fa-lock" aria-hidden="true"></i> Highly Secured</p></div>
          </div>
          <div class="row">
            <h4>DESCRIPTION</h4>
          </div>
          <div class="row">
            <div class="col">
              <p style=color:lightgrey>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                illum veniam qui veritatis praesentium voluptates atque enim
                quia exercitationem ipsa quaerat, delectus officia dolore rem
                consequatur nesciunt. Ullam, consequuntur necessitatibus
              </p>
            </div>

          </div>
          <div class="row">
            <button class="btn btn-danger">Book now</button>
          </div>
        </div>
        <div class="col col-4 col-md-4">
          <h3>Reviews</h3>
          <div class="row">
            <div class="review bg-white">

                <p>Users</p>

                <P style=color:lightgrey>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                  illum veniam qui veritatis praesentium voluptates atque enim
                  quia exercitationem ipsa quaerat, delectus officia dolore rem
                  consequatur nesciunt. Ullam, consequuntur necessitatibus </P>
            </div>
        </div>
        <div class="row">
          <div class="review bg-white">
            <p>Users</p>
              <P style=color:lightgrey>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                illum veniam qui veritatis praesentium voluptates atque enim
                quia exercitationem ipsa quaerat, delectus officia dolore rem
                consequatur nesciunt. Ullam, consequuntur necessitatibus </P>
          </div>
      </div>
      <div class="row">
        <div class="review bg-white">
          <p>Users</p>
            <P style=color:lightgrey>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
              illum veniam qui veritatis praesentium voluptates atque enim
              quia exercitationem ipsa quaerat, delectus officia dolore rem
              consequatur nesciunt. Ullam, consequuntur necessitatibus </P>
        </div>
    </div>
    <div class="row">
      <div class="review bg-white">
        <p>Users</p>
          <P style=color:lightgrey>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
            illum veniam qui veritatis praesentium voluptates atque enim
            quia exercitationem ipsa quaerat, delectus officia dolore rem
            consequatur nesciunt. Ullam, consequuntur necessitatibus </P>
      </div>
  </div>
  <div class="row">
    <div class="review bg-white">
      <p>Users</p>
        <P style=color:lightgrey>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
          illum veniam qui veritatis praesentium voluptates atque enim
          quia exercitationem ipsa quaerat, delectus officia dolore rem
          consequatur nesciunt. Ullam, consequuntur necessitatibus </P>
    </div>
</div>
<div class="row">
  <div class="review bg-white">
    <p>Users</p>
      <P style=color:lightgrey>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
        illum veniam qui veritatis praesentium voluptates atque enim
        quia exercitationem ipsa quaerat, delectus officia dolore rem
        consequatur nesciunt. Ullam, consequuntur necessitatibus</P>
  </div>
</div>
<div class="row">
  <div class="review bg-white">
    <p>Users</p>
      <P style=color:lightgrey>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
        illum veniam qui veritatis praesentium voluptates atque enim
        quia exercitationem ipsa quaerat, delectus officia dolore rem
        consequatur nesciunt. Ullam, consequuntur necessitatibus</P>
  </div>
</div>
<div class="row">
  <div class="review bg-white">
    <p>Users</p>
      <P style=color:lightgrey>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
        illum veniam qui veritatis praesentium voluptates atque enim
        quia exercitationem ipsa quaerat, delectus officia dolore rem
        consequatur nesciunt. Ullam, consequuntur necessitatibus </P>
  </div>
</div><div class="row">
  <div class="review bg-white">
    <p>Users</p>
      <P style=color:lightgrey>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
        illum veniam qui veritatis praesentium voluptates atque enim
        quia exercitationem ipsa quaerat, delectus officia dolore rem
        consequatur nesciunt. Ullam, consequuntur necessitatibus </P>
  </div>
</div>
<div class="row">
  <div class="review bg-white">
    <p>Users</p>
      <P style=color:lightgrey>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
        illum veniam qui veritatis praesentium voluptates atque enim
        quia exercitationem ipsa quaerat, delectus officia dolore rem
        consequatur nesciunt. Ullam, consequuntur necessitatibus </P>
  </div>
</div>
      </div>
    </div>
  </body>
</html>
