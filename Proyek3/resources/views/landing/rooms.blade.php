<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap css -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <!-- Jquery UI theme -->
    <link
      rel="stylesheet"
      href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Custom css -->
    <link rel="stylesheet" href="./css/main.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md px-md-5 bg-dark">
        {{-- <a class="navbar-brand" href="#"></a> --}}
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
              <a class="nav-link" href="{{ url('/rooms')}}">Kamar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/reservation')}}"
                >Reservasi</a
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
                <a class="dropdown-item" href="signup.html">Account</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container my-5">
      <div class="section-title">
        <h2>Koleksi Kamar Terbaik</h2>
      </div>
      <div class="row custom-room-cards">
        <!-- Room element start -->
        <div class="col-md-6">
          <div class="card card-expanded">
            <div class="basic">
              <div class="card-body">
                <img src="./media/images/backgrounds/home-2.jpg" alt="" />
              </div>
              <div class="card-footer">
                <div class="footer-head">
                  <div class="label">Premium</div>
                  <div class="price">$120/day</div>
                </div>
                <div class="footer-body">Daimond Suite</div>
                <!-- <div class="footer-foot">lemon</div> -->
              </div>
            </div>
            <div class="detail">
              <ul class="list-group list-unstyled">
                <li><span>View:&nbsp;</span>beach</li>
                <li><span>Bed type:&nbsp;</span>Normal</li>
                <li><span>Adults:&nbsp;</span>2</li>
                <li><span>Children:&nbsp;</span>2</li>
                <li>
                  <span>Amenities:&nbsp;</span>air-conditioning, free wi-fi,
                  hairdryer, in-room safety, laundry, minibar, telephone
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Room element end -->

        <!-- Room element start -->
        <div class="col-md-6">
          <div class="card card-expanded">
            <div class="basic">
              <div class="card-body">
                <img src="./media/images/backgrounds/home-1.jpg" alt="" />
              </div>
              <div class="card-footer">
                <div class="footer-head">
                  <div class="label">Premium</div>
                  <div class="price">$120/day</div>
                </div>
                <div class="footer-body">Daimond Suite</div>
                <!-- <div class="footer-foot">lemon</div> -->
              </div>
            </div>
            <div class="detail">
              <ul class="list-group list-unstyled">
                <li><span>View:&nbsp;</span>beach</li>
                <li><span>Bed type:&nbsp;</span>Normal</li>
                <li><span>Adults:&nbsp;</span>2</li>
                <li><span>Children:&nbsp;</span>2</li>
                <li>
                  <span>Amenities:&nbsp;</span>air-conditioning, free wi-fi,
                  hairdryer, in-room safety, laundry, minibar, telephone
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Room element end -->
      </div>
    </div>
  </body>
</html>
