<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration</title>
</head>

<body class="p-3 mb-2 " style="background-color: #5B8FB9;">
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 mt-5">
                <img src="login4.png" class="img-fluid" width="650" alt="">
            </div>
            <div class="col-6 mb-3">
                <h1 class="text-warning h3 mb-3 text-center mt-5 ">REGISTRATION FORM </h1>
                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="col">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 mt-3">
                                    <label for="firstName" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                        required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-sm-6 mt-3">
                                    <label for="lastName" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                        required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>


                                <div class="col-12 mt-3 mt-3">
                                    <label for="email" class="form-label">Email <span class="text-muted"></label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>

                                <div class="col-12 mt-3">
                                    <label for="username" class="form-label"> Create Username</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control" id="username" placeholder="Username"
                                            required>
                                        <div class="invalid-feedback">
                                            Your username is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-3">
                                    <label for="password" class="form-label"> Password <span class="text-muted"></label>
                                    <input type="password" class="form-control" id="password" placeholder="">
                                    <div class="invalid-feedback">
                                        Please enter a valid password.
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="password2" class="form-label">Confirm Your Password <span
                                            class="text-muted"></label>
                                    <input type="password" class="form-control" id="password2" placeholder="">
                                    <div class="invalid-feedback">
                                        Please enter a valid password.
                                    </div>
                                </div>
                                <figure class="text-center">
                                    <a href="#" class="btn btn-primary mt-3">Register </a>
                                    <a href="/home" class="btn btn-danger mt-3">Batal </a>
                                    </form>
                                    <small class="d-block text-center mt-3">Already Registered? <a
                                            href="/login">Login</a></small>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


</body>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
