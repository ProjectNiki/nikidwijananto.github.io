<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#about">Profile</a></li>
                    <li role="presentation"><a href="#portfolio">Messages</a></li>
                    <li role="presentation"><a href="#contact">Messages</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
        <img src="img/niki.jpg" alt="" class="img-circle">
        <h1>Niki Dwijananto</h1>
        <p>Backend Web Dev</p>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">About</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                </div>
                <div class="col-sm-5">
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir About -->

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Portfolio</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="img/portfolio/1.png" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="img/portfolio/2.png" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="img/portfolio/3.png" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="img/portfolio/4.jpg" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="img/portfolio/5.jpg" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="img/portfolio/6.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Portfolio -->

    <!-- Contatc -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Contact</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form action="">
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" class="form-control" id="name" placeholder="Name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email" placeholder="Email" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="tlp">No Tlp </label>
                            <input type="number" class="form-control" id="tlp" placeholder="Telp" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan </label>
                            <textarea name="pesan" id="pesan" rows="4" class="form-control" placeholder="Pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary btn-sm">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contatc -->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; Copyright <?= date('Y') ?> | Built <i style="color: salmon" class="glyphicon glyphicon-heart"></i> By. <a href="#">Niki Dwijananto</a> </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>