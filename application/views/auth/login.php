<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->auths->app()->appname ?></title>
    <link rel="icon" href="<?= base_url('assets') ?>/img/LOGO FIX.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            background-color: #FA8BFF;
            background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);
        }

        .title-login {
            text-decoration: underline;
            animation: titleLogin 5s ease infinite;
        }

        .card-login {
            /* box-shadow: 0px 5px 10px 5px rgba(0, 0, 0, 0.30); */
            animation: cardLogin 5s ease infinite;
        }

        @keyframes titleLogin {
            0% {
                color: navy;
                text-shadow: 0px 5px 5px rgba(0, 0, 0, 0.35);
            }

            20% {
                color: navy;
                text-shadow: 0px 6px 6px rgba(0, 0, 0, 0.40);
            }

            40% {
                color: navy;
                text-shadow: 0px 7px 7px rgba(0, 0, 0, 0.45);
            }

            60% {
                color: navy;
                text-shadow: 0px 8px 8px rgba(0, 0, 0, 0.50);
            }

            80% {
                color: navy;
                text-shadow: 0px 7px 9px rgba(0, 0, 0, 0.45);
            }

            100% {
                color: blueviolet;
                text-shadow: 0px 6px 10px rgba(0, 0, 0, 0.40);
            }
        }

        @keyframes cardLogin {
            0% {
                box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.35);
            }

            20% {
                box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.40);
            }

            40% {
                box-shadow: 0px 7px 7px rgba(0, 0, 0, 0.45);
            }

            60% {
                box-shadow: 0px 8px 8px rgba(0, 0, 0, 0.50);
            }

            80% {
                box-shadow: 0px 7px 9px rgba(0, 0, 0, 0.45);
            }

            100% {
                box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.40);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="mt-5 mb-3 title-login text-info">TK ISLAM MIFTAHUL JANNAH</h2>
            <div class="col-md-8">
                <div class="card card-login mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <b>LOGIN</b>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('auth/postlogin') ?>" method="POST" class="m-3">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" class="form-control" id="staticEmail" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info float-right mt-3">Sign In</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer fixed-bottom">
            <div class="text-center">
                <p>Copyright 2019 - by <span style="color:darkorange"><?= $this->auths->app()->by ?></span></p>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets') ?>/js/jquery.3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        const success = '<?= $this->session->flashdata('success') ?>';
        const error = '<?= $this->session->flashdata('error') ?>';
        if (success) {
            toastr.success("<?= $this->session->flashdata('success') ?>")
        }
        if (error) {
            toastr.error("<?= $this->session->flashdata('error') ?>")
        }
    </script>
</body>

</html>