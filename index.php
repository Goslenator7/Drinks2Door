<!DOCTYPE html>
<html lang="en">

<head>
  <title>Drinks2Door - Home</title>

  <!-- Meta tags -->
  <meta charset="utf-8" />
  <!-- Auto Detect screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <!-- CSS stylesheet -->
  <link href="style2.css" type="text/css" rel="stylesheet" />

  <!-- Icons stylesheet -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>



<body>
  <!-- TOP NAV BAR -->
  <div class="container-fluid">
    <nav class="navbar navbar-light bg-#eceff1 blue-grey lighten-5 navbar-expand-lg fixed-top">
      <!-- SETS NAVBAR TO FILL SCREEN ON LARGE SCREEN, FIXED TO PAGE TOP -->
      <a class="navbar-brand" href="index.php"><img class="d-inline-block align-top" src="images/Drinks2DoorLogo.jpg"
          alt="The Drinks2Door Logo" title="The
        Drinks2Door Logo" height="100px" />
      </a>
      <!-- CODE NEEDED FOR BOOTSTRAP TO RESIZE NAVBAR -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- COLLAPSE THE BELOW WITHIN MENU ICON ON SMALL SCREEN SIZE -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav">
          <li class="nav-item active" alt="Home button" title="Home button">
            <a class="nav-link" href="index.php"> Home </a>
          </li>
          <li class="nav-item active" alt="Products button" title="Products button">
            <a class="nav-link" href="products.html"> Products </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <!-- ACCOUNT ICON -->
          <li class="nav-item active">
            <a class="nav-link" href="account.html" alt="Account button" title="Account button"><span
                class="fas fa-user-circle"></span>
              Account
            </a>
          </li>
          <!-- BASKET ICON -->
          <li class="nav-item active">
            <a class="nav-link" href="#" alt="Basket button" title="Basket button"><span
                class="fas fa-shopping-cart"></span> Basket
            </a>
          </li>
          <li class="nav-item active">
            <form action="./scripts/logout.php" method="post">
			<button class="btn btn-danger" type="submit" id="logout">Logout</button>
		</form>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- Navbar close -->

  <!-- JUMBOTRON (TITLE) -->
  <div class="jumbotron text-center" id="jumbo">
    <!-- Jumbotron open -->
    <div class="container-fluid">
      <!-- Jumbotron container open -->
      <h1>Welcome to Drinks2Door!</h1>
      <br />
      <div class="container-fluid">
        <h2>
          We are a company based in the heart of Edinburgh and we deliver
          <br />
          drinks straight to your door within the hour!
        </h2>
      </div>
    </div>
    <!-- Jumbotron container close -->
  </div>
  <!-- Jumbotron close -->


  <!-- MAIN INFO -->
  <div class="container info">
    <!-- Info div open -->
    <h3>
      To use our site and get refreshing beverages on demand, follow these
      4 simple steps:
    </h3>
    <br />
    <ol>
      <li>
        <a href="account.html"> Sign up </a> for an account on our site, or <a href="login.html"> log in </a> if you
        already have
        one
      </li>
      <li>
        Browse our wide range of products and find something (or
        somethings!) that take your fancy and add them to your basket
      </li>
      <li>Simply pay the driver upon receipt of your chosen drinks</li>
      <li>Enjoy!</li>
    </ol>
  </div>
  <!-- Info div close -->
  </div>
  <!-- Row div close -->
  </div>
  <!--  Container div close -->

  <!-- FOOTER -->
  <hr />
  <footer class="pageFooter">
    <p> Copyright @ Drinks2Door 2019</p>
  </footer>

  <!-- SCRIPTS FOR BOOTSTRAP -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>