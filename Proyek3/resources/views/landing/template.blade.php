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

    <title>Hotel Management</title>
  </head>
  <body>
    <header id="home-header">
      <div id="home-header--bg-image">
        <nav class="navbar navbar-expand-md px-md-5">
          {{-- <a class="navbar-brand" href="./index.html">Home</a> --}}
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
                  <a class="dropdown-item" href="{{ url('/logintampilan')}}">Login</a>
                  <a class="dropdown-item" href="{{ url('/registertampilan')}}">Register</a>
                  <a class="dropdown-item" href="{{ url('/profiltampilan')}}">Profil</a>
                  <a class="dropdown-item" href="{{ url('/profiltampilan')}}">Keluar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                >
              </li>
            </ul>
          </div>
        </nav>
        <div class="home-header--title">
          <div class="container p-5">
            <h1>SELAMAT DATANG</h1>
            <h3 id="reservation-form">DI HOTEL ISTANA BANGUN JAGAT INDRAMAYU</h3>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section id="home-form">
        <div class="wrapper">
          <form id="find-available-rooms-form">
            <div class="form-group">
              <label for="check-in">Check in</label>
              <input
                type="hidden"
                id="check-in"
                class="form-control"
                name="check-in"
              />
              <button id="check-in-button" class="btn input-button">
                Tanggal Check In
              </button>
            </div>
            <div class="form-group">
              <label for="check-in">Check out</label>
              <input
                type="hidden"
                id="check-out"
                class="form-control"
                name="check-out"
                value=""
              />
              <button id="check-out-button" class="btn input-button">
                    Tanggal Check Out
              </button>
            </div>
            <div class="form-group">
              <label for="form-dropdown">Tamu</label>
              <button
                class="btn dropdown-toggle"
                id="form-dropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Tambahkan Tamu
              </button>
              <ul class="dropdown-menu" aria-labelledby="form-dropdown">
                <li class="dropdown-menu-item">
                  <div class="form-group form-group-nested">
                    <label for="count-adults">Dewasa</label>
                    <input
                      type="number"
                      class="form-control"
                      name="count-adults"
                      placeholder="Ages 13 or above"
                    />
                  </div>
                  <div class="form-group form-group-nested">
                    <label for="count-children">Anak-anak</label>
                    <input
                      type="number"
                      class="form-control"
                      name="count-children"
                      placeholder="Ages 1-12"
                    />
                  </div>
                </li>
              </ul>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="find-rooms">
                Cari
              </button>
            </div>
          </form>
        </div>
      </section>
      <!-- Featured Rooms -->
      <section id="featured-rooms">
        <div class="container my-5 py-5">
          <div class="section-title" >
            <h2 >Rekomendasi Kamar </h2>
          </div>
          <div class="row custom-room-cards">
            <div class="col col-md-3">
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/rooms/1.jpg" alt="" />
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
            </div>

            <div class="col col-md-3">
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/rooms/2.jpg" alt="" />
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
            </div>
            <div class="col col-md-3">
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/rooms/3.jpg" alt="" />
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
            </div>
            <div class="col col-md-3">
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/rooms/4.jpg" alt="" />
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
            </div>

            <!-- <div class="col col-md-4">
              <div class="img-wrapper">
                <img src="" alt="Room photo" />
              </div>
              <div class="content">
                <div class="title">Deluxe Suite</div>
                <div class="price">$&nbsp;<span class="value">480</span></div>
                <div class="book-room">
                  <a href="#">Book this room</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>

      <section id="decoration-accomodation">
        <div class="container my-5 py-5">
          <div class="row">
            <div class="col-md-5">
              <div class="content">
                <div class="section-title">
                  <h2 style="color: black;">Pilih kamar terbaik anda</h2>
                </div>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                  illum veniam qui veritatis praesentium voluptates atque enim
                  quia exercitationem ipsa quaerat, delectus officia dolore rem
                  consequatur nesciunt. Ullam, consequuntur necessitatibus.m
                </p>
              </div>
            </div>
            <div class="col-md-7 card-container">
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/backgrounds/home-1.jpg" alt="" />
                </div>
                <div class="card-footer">lemon</div>
              </div>
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/backgrounds/home-2.jpg" alt="" />
                </div>
                <div class="card-footer">lemon</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="premium-section">
        <div class="container my-5 py-5">
          <div class="row">
            <div class="col-md-7">
              <div class="card-container">
                <div class="card">
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

                <!-- <div class="spacer"></div>
                <div class="spacer"></div> -->
                <div class="card">
                  <div class="card-body">
                    <img src="./media/images/backgrounds/home-2.jpg" alt="" />
                  </div>
                  <div class="card-footer">
                    <div class="footer-head">
                      <div class="label">Premium</div>
                      <div class="price">Rp.120.000/day</div>
                    </div>
                    <div class="footer-body">Luxury Suite</div>
                    <!-- <div class="footer-foot">lemon</div> -->
                  </div>
                </div>
                <!-- <div class="card decoration"></div> -->
              </div>
            </div>
            <div class="col-md-5">
              <div class="content">
                <div class="section-title">
                  <h2>Penawaran kamar terbaik sesuai dengan kebutuhan anda</h2>
                </div>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                  illum veniam qui veritatis praesentium voluptates atque enim
                  quia exercitationem ipsa quaerat, delectus officia dolore rem
                  consequatur nesciunt. Ullam, consequuntur necessitatibus.m
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="home-banner">
        <div class="banner">
          <div class="container">
            <div class="jumbotron">
              <h6></h6>
              <h2 style="color: black;">Nikmati setiap moment bersama orang yang kalian cintai</h2>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
      <!-- Footer Links -->
      <div class="container">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-3">
            <h5>Alamat hotel</h5>
            <ul class="list-unstyled">
              <li>
                <a>KM.4, Jl. Raya Balongan No.8, Balongan, Kec. Balongan, Kabupaten Indramayu, Jawa Barat 45217</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="More">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Kamar</a>
              </li>
              <li>
                <a href="#!">Services</a>
              </li>
              <li>
                <a href="#!">Tentang</a>
              </li>
              <li>
                <a href="#!">News </a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="">Get in touch</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Toll Free no. </a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">
        © 2022 Copyright: Kelompok 7
        <a href="https://github.com/Andditafsal/Proyek3_Web/"
          >Proyek 3</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Jquery -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Bootstrap  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

    <!-- Custom js -->
    <script src="./js/handle-home-form.js"></script>
    <script src="./js/parallax.js"></script>
    <script src="./js/smooth-scroll.js"></script>
  </body>
</html>
