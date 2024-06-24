<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <section class="vh-100" style="background-color: #eee">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-10 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign Up</p>

                                        <form class="mx-1 mx-md-4" method="POST" action="/submit_data">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center md-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" id="form3Example1c" class="form-control" name="name" id="name"/>
                                                    <label class="form-label">Your Name</label>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center md-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="email" id="form3Example3c" class="form-control" name="email" id="email"/>
                                                    <label class="form-label">Your Email</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="/vendor/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
