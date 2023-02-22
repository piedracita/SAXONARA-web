<!-- NOT WORKING BECAUSE ONLY HTML FOR 404 -->
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- COMMON-HEAD -->
    <?php include "common-php/head.html"; ?>
    <!-- COMMON-HEAD END -->

    <!-- CANONICAL -->
    <link rel="canonical" href="https://www.saxonara.com/404.html">

    <!-- SITE INFORMATION -->
    <title>404 - Page not found | SAXONARA</title>
    <meta name="description" content="Página no encontrada, vuelve a la página inicial de SAXONARA para ver los vídeos y conocer más acerca del saxofonista profesional.">

    <!-- COMMON-OPENGRAPH -->
    <?php include "common-php/opengraph/es.html"; ?>
    <!-- COMMON-OPENGRAPH END -->
    
</head>

<body class="page">
    <!-- COMMON-BODY -->
    <?php include "common-php/body.html"; ?>
    <!-- COMMON-BODY END -->

    <header id="top" class="top-header">
        <!-- NAVIGATION -->
        <?php include "common-php/navigation/es.html"; ?>
        <!-- NAVIGATION END -->
    </header>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container text-center">
            <ol class="breadcrumb">
                <li>Page not found</li>
            </ol>
            <h1 class="page-title">404</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="main-wrap">
        <!-- 404 -->
        <div class="section section-padding section-404">
            <div class="container text-center">
                <div class="img-404">
                    <img loading="lazy" class="img-responsive" src="/images/page/404.png" alt="Content not found">
                </div>
                <h3 class="title-404">¡Estás en el backstage!<br/>¡Vuelve al escenario, empieza el show!</h3>
            </div>
        </div>
        <!-- 404 END -->
    </div>
    
    </div>

    <!-- FOOTER -->
    <?php include "common-php/footer/es.html"; ?>
    <!-- FOOTER END -->

    <!-- COMMON-BODY-SCRIPT -->
    <?php include "common-php/body-script.html"; ?>
    <!-- COMMON-BODY-SCRIPT END -->
</body>

</html>
