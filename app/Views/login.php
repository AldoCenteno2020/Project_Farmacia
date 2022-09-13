<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include_once "include/link.php" ?>
    <!-- css propio -->
    <link href="../public/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="container BoxLogin">

        <div class="BoxLogin_title">
            <img _ngcontent-twj-c22="" alt="logo-inkafarma" class="img-fluid rounded mx-auto d-block BoxLogin_title-img" src="//images.ctfassets.net/l9x8e72nkkav/6xqbBgTHavdMuuDVCyKdI/afd0935a8e51a6a3f7ac89f17499baf7/inkafarma.svg">
        </div>
        <div class="BoxLogin_form">
            

            <!-- Para ingresar -->
            <form class="BoxLogin_form-login">
                <div class="row">
                    <i class="fa-solid fa-user col-2 align-middle fs-5"></i>
                    <input class="col" type="text" placeholder="Nombre" />
                </div>
                <div class="row">
                    <i class="fa-solid fa-key col-2 align-middle fs-5"></i>
                    <input class="col" type="password" placeholder="Contraseña" />
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-block BoxLogin_form-btn">Ingresar</button>
                </div>
            </form>
        </div>

    </div> 
</body>

</html>