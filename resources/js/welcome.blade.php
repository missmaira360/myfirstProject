<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-color:grey">

    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold text-body-emphasis">Centered screenshot</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="bootstrap-docs.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"
                    width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>



    <div>
        <nav class="navbar navbar-expand-sm bg-light " style="box-shadow: 0 .125rem .25rem rgb(146, 143, 143);;">
            <div class="container-fluid justify-content-end">

                <ul class="navbar-nav">
                    <li class="nav-item pl-4">
                        <a class="nav-link" href="home">home</a>
                    </li>

                    <li class="nav-item pl-4">
                        <a class="nav-link" href="contact">contact</a>
                    </li>

                    <li class="nav-item pl-4">
                        <a class="nav-link" href="AboutUs">About Us</a>
                    </li>
                    <li class="nav-item pl-4">
                        <a class="nav-link" href="login">login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    </div>
    <br>
    <div>
        <h1 style="font-family: fantasy; text-align: center;">Welcome to Pangisha Online</h1>
    </div>

    <div class="row mt-5" style="height: 15rem;  ">
        <div class="col-lg-4">
            <img class="animated" style="height: 15rem; width: 100%;" src="{{ URL('images/house1.jpg') }}">
        </div>
        <div class="col-lg-8 justify-content-center " style="margin: auto;">
            <h1>Best house</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur dolores labore porro architecto
                libero, perferendis quidem itaque numquam minus earum ducimus iusto vitae mollitia tempore vel quia
                consequatur rerum . Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quaerat amet vel
                eveniet reiciendis, repellendus ducimus qui rem quasi ex obcaecati facere nobis quis in omnis
                praesentium consequatur molestiae atque?</p>
            <div>
                <!-- <a href="Gallery2.html"><button class="btn btn-success" style="display: block; float: right; margin-bottom: 15px">Click here</button></a> -->
            </div>
        </div>


    </div>

    <div class="row mt-5" style="height: 15rem; ">
        <div class="col-lg-8 justify-content-center " style="margin: auto;">
            <h1>affordable price.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur dolores labore porro architecto
                libero, perferendis quidem itaque numquam minus earum ducimus iusto vitae mollitia tempore vel quia
                consequatur rerum . Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quaerat amet vel
                eveniet reiciendis, repellendus ducimus qui rem quasi ex obcaecati facere nobis quis in omnis
                praesentium consequatur molestiae atque?</p>
            <div>
                <!-- <a href="Gallery3.html"><button class="btn btn-success" style="display: block; float: left; margin-bottom: 15px">Click here</button></a> -->
            </div>
        </div>
        <div class="col-lg-4">
            <img class="animated" style="height: 15rem; width: 100%;" src="{{ URL('images/house2.jpg') }}">
        </div>

    </div>




</body>

</html>
