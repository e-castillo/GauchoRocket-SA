<?php ?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/styles.css" rel="stylesheet">
    <title>GauchoRocket</title>
</head>
<body class="body_login">

<div id="login" class="container w-75 shadow">
    <div class="row align-items-stretch">
        <div id="login_image"class="col d-none d-lg-block col-md-5 col-lg-5 col-XL-6">

        </div>
        <div id="login_form" class="col p-5">
            <div class="text-end">
                <img src="../images/logo.png" width="48" alt="">
            </div>
            <h2 class="fw-bold text-center py-5"> Entra a tu cuenta</h2>
            <form action="">
                <div class="mb-4">
                    <label for="email" class="form-label">Correo electronico</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass">
                    <span><a href="">Recuperar password</a></span>
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" name="connected" class="form-check-input">
                    <label for="connected" class="form-check-label">Mantenerme conectado</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn-primary">Iniciar sesion</button>
                </div>
                <div class="my-3">
                    <span>No tenes cuenta? <a href="Register.php">Registrate</a></span>

            </form>

            <div class="container w-100 my-5">
                <div class="row text-center">
                    <div class="col-12">
                        Iniciar Sesion
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-outline-primary w-100 my-1">
                            <div class="row align-items-center">
                                <div class="col-2 d-none d-md-block">
                                    <img src="../images/fb.png" width="32" alt="">
                                </div>
                                <div class="col-12 col-md-10 text-center">
                                    Facebook
                                </div>
                            </div>
                        </button>
                    </div>
                        <div class="col">
                        <button class="btn btn-outline-danger w-100 my-1">
                            <div class="row align-items-center">
                                <div class="col-2 d-none d-md-block">
                                    <img src="../images/google.png" width="32" alt="">
                                </div>
                                <div class="col-12 col-md-10 text-center">
                                    Google
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
