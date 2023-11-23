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
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
</head>

<body is="dmx-app" id="index">
    <dmx-value id="selected_product"></dmx-value>
    <div is="dmx-browser" id="browser1"></div>
    <?php include 'comp--header_navbar.php'; ?>
    <main class="vh-100">
        <div class="h-100 container-fluid">
            <div class="row vh-100 justify-content-between">
                <div class="col-lg-6 main-col-pt align-self-center gx-5 pt-5">
                    <div class="row justify-content-center">
                        <div class="col" style="max-width: 750px;">
                            <div class="d-flex me-4">
                                <h2 class="style4 mt-5 ms-2 mt-lg-4">Products</h2>
                            </div>
                            <div class="d-flex style2 mt-2 ms-2">
                                <h5 class="fw-light lh-base mb-4 me-4">Discover our suite of tools to supercharge your motor carrier and logistics management. Choose a product to continue...</h5>
                            </div>
                            <div class="row border rounded g-0 mt-2 ms-2 me-4 pt-1 pb-1 univ-hover" dmx-on:click="selected_product.setValue('https://unstable.alphatracit.com/landing.php')" dmx-class:glow="(selected_product.value == 'https://unstable.alphatracit.com/landing.php')">
                                <div class="offset-0 align-self-center col-12 col-lg-auto text-start ps-2">
                                    <a><img src="assets/carrier-beacon-logo.png" class="img-fluid mt-3 mb-2 ms-2 mb-lg-3 ms-lg-3" width="154px" height="60px"></a>
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
                                    <div class="d-flex justify-content-between mt-3 pb-5"><button id="btn2" class="btn border rounded text-secondary mt-4 ms-2" dmx-show="selected_product.value" dmx-on:click="selected_product.setValue()"><i class="fal fa-ban fal fa-fw me-2"></i>Cancel</button><button id="btn1" class="btn border rounded text-secondary mt-4 ms-auto me-4" dmx-on:click="browser1.goto(selected_product.value)" dmx-class:btn-primary="selected_product.value" dmx-class:text-white="selected_product.value">Continue&nbsp;<i class="fa-arrow-right ps-2 fal fa-fw"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="col-lg-6 bg-primary main-col-pt text-light text-center fw-light gx-5 h-100">
                    <?php include 'comp--alphatrac_right_col.php'; ?>
                </div>
            </div>
        </div>
    </main>



    <script src="bootstrap/5/js/bootstrap.min.js"></script>


    <script src="js/script.js"></script>
</body>

</html>