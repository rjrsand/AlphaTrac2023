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
</head>

<body is="dmx-app" id="index">
    <?php include 'header.php'; ?>
    <main class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <h1>Products</h1>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <p>Discover our new tools to supercharge your motor carrier and logistics management.</p>
                    </div>
                </div>
            </div>
            <div class="row border-2 rounded border-secondary border mb-4 style2" id="carrierBeacon">
                <div class="text-center col align-self-center">
                    <a><img src="assests/carrier-beacon-logo.png"></a>

                </div>
                <div class="align-self-center text-center col-1 border-secondary border border-1 style3">
                    <a><img src="assests/Rectangle%201.webp"></a>

                </div>
                <div class="col">
                    <h1>Carrier Beacon</h1>
                    <p>Find, qualify, organize and contact motor carriers from anywhere in the country.</p>

                </div>
            </div>
            <div class="row">
                <div class="col offset-10 mt-2 mb-1">
                    <button id="btn1" class="btn border-2 rounded border-secondary w-100 text-secondary">
                        Continue<i class="fas fa-arrow-right ps-2"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="offset-10 col mt-1">
                    <button id="btn2" class="btn border-2 rounded border-secondary w-100 bg-primary text-light">Continue<i class="fas fa-arrow-right fa-fw ps-2"></i></button>
                </div>
            </div>
        </div>
    </main>






    <script src="bootstrap/5/js/bootstrap.min.js"></script>
</body>

</html>