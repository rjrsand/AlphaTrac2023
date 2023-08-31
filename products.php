<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
</head>

<body is="dmx-app" id="index">
    <div is="dmx-browser" id="browser1"></div>
    <header class="bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-transparent ps-4 pe-4">
                        <a class="navbar-brand ms-auto" href="#">
                            <img width="220px" height="50px" src="assets/alphatrac-logo.svg"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar1_collapse" aria-controls="navbar1_collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end fw-light" id="navbar1_collapse">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link active text-light" href="#">Products</a>
                                <a class="nav-item nav-link text-light" href="#">About</a>
                                <a class="nav-item nav-link text-light" href="#">Newsletter</a>
                                <a class="nav-item nav-link text-light" href="#">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main class="vh-100">
        <div class="h-100 container-fluid">
            <div class="row h-100">
                <div class="col-lg-6 main-col-pt align-self-center gx-5">
                    <div class="d-flex">
                        <h2 class="ms-2 style4">Products</h2>
                    </div>
                    <div class="d-flex style2 fw-light mt-2 ms-2">
                        <h3 class="fw-light mb-4">Discover our new tools to supercharge your motor carrier and logistics management.</h3>
                    </div>
                    <div class="row border rounded g-0 mt-2 ms-2 me-2">
                        <div class="style7 text-end offset-0 col-3 align-self-center">
                            <a><img src="assets/carrier-beacon-logo.png" class="img-fluid" width="154px" height="60px"></a>
                        </div>
                        <div class="align-self-center col-1 d-flex">
                            <hr class="hrvertical" id="hrvertical">
                        </div>
                        <div class="col">

                            <h2 class="style5 mt-2">Carrier Beacon</h2>
                            <p class="style6 fw-light">Find, qualify, organize and contact motor carriers from anywhere in the country.</p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button id="btn1" class="btn border rounded text-secondary mt-4 me-2" dmx-on:click="">Continue<i class="fas fa-arrow-right ps-2"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-primary main-col-pt text-light text-center fw-light align-self-center h-100 gx-5">
                    <div class="d-flex justify-content-center mt-5 mb-5">
                        <a><img class="img-fluid" src="assets/alpha-logo.svg" width="253" height="253"></a>
                    </div>
                    <div class="d-flex justify-content-center mt-5 mb-5">
                        <h3>Welcome to AlphaTrac.</h3>
                    </div>
                    <div class="d-flex  style5">
                        <p>Software solutions for businesses and individuals looking to supercharge their motor carrier and logistics management.</p>
                    </div>
                    <div class="d-flex justify-content-center style5 fst-italic mt-5 mb-5">
                        <p>Thanks for your interest.</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="nav-item nav-link text-light" href="#" dmx-on:click="browser1.goto('privacy-policy.php')">Privacy Policy</a>
                        <a class="nav-item nav-link text-light">|</a>
                        <a class="nav-item nav-link text-light" href="#" dmx-on:click="browser1.goto('terms-of-service.php')">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="bootstrap/5/js/bootstrap.min.js">


    </script>
</body>

</html>