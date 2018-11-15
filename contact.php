<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous"> -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
        <title>Quantum Software International</title>
    </head>
    <body>

        <header>


         <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <div class="container-fluid">
                    <a class="navbar-brand js-scroll-trigger" href="index.php">Quantum Software</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

</div>

    <div class="container">
        <form role="form" method="post" action="/success.php" id="reused_form">
            <div class="row">

                <div class="col-md-4 col-sm-6 form-group" >
                    <label for="name">
                        First Name:</label>
                        <input type="text" class="form-control" id="firstname" name="first_name" required maxlength="10">
                </div>

                <div class="col-md-4 col-sm-6 form-group">
                    <label for="name">
                        Last Name:</label>
                        <input type="text" class="form-control" id="lastname" name="last_name"  required maxlength="10">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                        <input type="text" class="form-control" id="email" name="email" required maxlength="50">
                </div>

                <div class="col-md-4 col-sm-6 form-group">
                    <label for="telephone">
                        Phone:</label>
                        <input type="text" class="form-control" id="phone" name="telephone" required maxlength="50">
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 form-group">
                    <label for="comments">
                    Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="comments" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Send Message ! </button>
                </div>
            </div>

        </form>

    </div>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
             crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>

    <!--

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script> -->
    </body>

</html>
