<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <br>
        <a href="/"><button class="btn btn-secondary" style="display: block; float: right; margin-bottom: 15px">Back
                to Home</button></a>
        <br>
        <br>
    </div>
    <div class="row">
        {{-- <section class="review" id="review">
            <h1 class="heading"> The <span>Board</span> </h1>
            <div class="box-container"> --}}

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ URL('images/pic1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Manager</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">contact here</a>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ URL('images/pic3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Director</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">contact here</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ URL('images/pic2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Supervisor</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">contact here</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</body>

</html>
