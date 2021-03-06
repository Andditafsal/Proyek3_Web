

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Bootstrap css -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <!-- Custom css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <!-- Form Section -->
    <section id="auth-form">
      <div class="auth--wrapper">
        <nav class="navbar navbar-expand-md px-md-5">
          <a class="navbar-brand" href="{{ url('/tampilan')}}">Home</a>
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
                {{-- <a class="nav-link" href="#">Home</a> --}}
              </li>
              <li class="nav-item">
                {{-- <a class="nav-link" href="index.html#reservation-form"
                  >Reservations</a
                > --}}
              </li>

              {{-- <li class="nav-item dropdown">
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
                </a> --}}
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

        <div class="bg-image">
          <span>
            Nikmati waktumu bersama dengan orang yang kamu cintai
          </span>
        </div>
        <div class="form-wrapper">
          <div class="form-card">
            <h2>Silahkan Daftar</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="d-none">
              Icons made by
              <a href="https://www.flaticon.com/authors/freepik" title="Freepik"
                >Freepik</a
              >
              from
              <a href="https://www.flaticon.com/" title="Flaticon">
                www.flaticon.com</a
              >
            </div>

            <div class="group">
              {{-- <img src="./media/logo/google.svg" alt="google logo" /> --}}
              {{-- <button href="" class="btn">Sign in with google</button> --}}
            </div>
            <form action="/tampilanregister" method="post" class="form">
                @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <input
                  type="nama"
                  name="nama"
                  placeholder="Nama"
                  class="form-control"
                />
                <!-- is-invalid add this class along with form-control -->
                <!-- <small id="passwordHelp" class="text-danger">
                  Must be 8-20 characters long.
                </small> -->
              </div>
                <div class="form-group">
                  <label for="password">Email</label>
                  <input
                    type="Email"
                    name="Email"
                    placeholder="Email"
                    class="form-control"

                    />
                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                      type="password"
                      name="password"
                      placeholder="password"
                      class="form-control"

                    />
              </div>
              <div class="form-group">
                <button type="submit" name="login-user" class="btn">
                  Daftar
                </button>
              </div>

              <div class="alternate-auth">
                <span>
                  Sudah punya akun?
                  <a href="{{ url('/logintampilan')}}">&nbsp;Login</a>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

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

    <!-- Custom -->
    <script>
      $(document).ready(function () {
        $("nav").addClass("navbar-light");
      });
    </script>
  </body>
</html>
