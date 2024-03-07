<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>About Alphatrac</title>
    <meta name="description" content="A description and breif history of Alphatrac is detailed">
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
                <div class="col-lg-6 main-col-pt align-self-center gx-5">
                    <div class="d-flex">
                        <h2 class="ms-2 style4">About</h2>
                    </div>
                    <div class="d-flex fw-light mt-2 ms-2">
                        <article class="article">
                            <p>Insert your bunch(es) of words here. Beginning in 2022, <i>AlphaTrac</i> started as a technology solutions provider focused on creatingand improving software tools for the trucking (and surrounding) industries. <br><br>As we continue to grow, our team and technologies grow too. Find out how you can become a satisfied <i>AlphaTrac</i> partner. Insert your bunch(es) of words here. Beginning in 2022, <i>AlphaTrac</i> started as a technology solutions provider focused on creatingand improving software tools for the trucking (and surrounding) industries. <br><br>As we continue to grow, our team and technologies grow too. Find out how you can become a satisfied <i>AlphaTrac</i> partner. Insert your bunch(es) of words here. Beginning in 2022, <i>AlphaTrac</i> started as a technology solutions provider focused on creatingand improving software tools for the trucking (and surrounding) industries.Insert your bunch(es) of words here. Beginning in 2022, <i>AlphaTrac</i> started as a technology solutions provider focused on creatingand improving software tools for the trucking (and surrounding) industries.<br><br>Insert your bunch(es) of words here. Beginning in 2022, <i>AlphaTrac</i> started as a technology solutions provider focused on creatingand improving software tools for the trucking (and surrounding) industries.As we continue to grow, our team and technologies grow too. Find out how you can become a satisfied <i>AlphaTrac</i> partner. Insert your bunch(es) of words here. Beginning in 2022, <i>AlphaTrac</i> started as a technology solutions provider focused on creatingand improving software tools for the trucking (and surrounding) industries.</p>
                        </article>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button id="btn2" class="btn border rounded w-100 text-light bg-primary mt-4 mb-2 me-2" dmx-on:click="browser1.goto('contact.php')">Contact Us<i class="fas fa-arrow-right ps-2"></i></button>
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
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>