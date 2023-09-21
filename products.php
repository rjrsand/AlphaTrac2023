<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-VhBcF/php0Z/P5ZxlxaEx1GwqTQVIBu4G4giRWxTKOCjTxsPFETUDdVL5B6vYvOt" crossorigin="anonymous" />
</head>

<body is="dmx-app" id="index">
    <div is="dmx-browser" id="browser1"></div>
    <?php include 'comp--header_navbar.php'; ?>
    <main class="vh-100">
        <div class="h-100 container-fluid">
            <div class="row h-100">
                <div class="col-lg-6 main-col-pt align-self-center gx-5 pt-5">
                    <div class="d-flex">
                        <h2 class="style4 mt-4 ms-2">Products</h2>
                    </div>
                    <div class="d-flex style2 mt-2 ms-2">
                        <h4 class="fw-light mb-4 lh-base">Discover our suite of tools to supercharge your motor carrier and logistics management.</h4>
                    </div>
                    <div class="row border rounded g-0 mt-2 ms-2 me-2 pt-1 pb-1">
                        <div class="offset-0 align-self-center col-12 col-lg-auto text-start ps-2">
                            <a><img src="assets/carrier-beacon-logo.png" class="img-fluid mt-3 mb-3 ms-3" width="154px" height="60px"></a>
                        </div>
                        <div class="align-self-center col-1 d-none d-lg-block">
                            <hr class="hrvertical" id="hrvertical">
                        </div>
                        <div class="col">

                            <h2 class="style5 mt-2 mb-1 ms-3 me-3">Carrier Beacon</h2>
                            <p class="style6 fw-light ms-3 me-3">Find, qualify, organize and contact motor carriers from anywhere in the country.</p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button id="btn1" class="btn border rounded text-secondary mt-4 mb-3 me-2" dmx-on:click="">Continue&nbsp;<i class="fa-arrow-right ps-2 fal fa-fw"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-primary main-col-pt text-light text-center fw-light gx-5 h-100 overflow-auto">
                    <?php include 'comp--alphatrac_right_col.php'; ?>
                </div>
            </div>
        </div>
    </main>



    <script src="bootstrap/5/js/bootstrap.min.js"></script>


    <script src="js/script.js"></script>
</body>

</html>