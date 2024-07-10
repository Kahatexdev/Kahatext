<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url('/assets/auth/css/style.css') ?>">

</head>

<body class="img js-fullheight" style="background-image: url('/assets/img/r6.png');">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Kaha.text</h2>
                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Realtime Texting Apps</h3>
                        <?php if (session()->getFlashdata('error')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
                        <form action="<?= base_url('verify')?>" method="post" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                               
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?=base_url('js/jquery.min.js')?>"></script>
    <script src="<?=base_url('js/popper.js')?>"></script>
    <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('js/main.js')?>"></script>

</body>

</html>