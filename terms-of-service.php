<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Terms of Service</title>
    <meta name="description" content="Alphatrac details the different products available.">
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
                        <h2 class="ms-2 style4">Terms of Service</h2>
                    </div>
                    <div class="row border rounded g-0 mt-2 ms-2 me-2 pt-1 pb-1 border-2" id="article">
                        <div class="col">
                            <div class="d-flex">
                                <article class="article">
                                    <p class="fw-light ps-3 pe-2">
                                        <br><b>Introduction</b><br><br>
                                        Welcome to Carrier Beacon, a product of AlphaTrac. We are a web-based platform designed to assist with finding, organizing, monitoring, and contacting registered freight carriers across the United States and parts of Canada. Our services are designed to streamline your freight management process and provide you with comprehensive tools and solutions for your motor carrier needs.
                                        This Terms of Service Agreement ("Agreement") is a legal agreement between you (either an individual or entity) and AlphaTrac, the company that owns and operates the Carrier Beacon platform. This Agreement sets forth the terms and conditions that govern your use of our services.
                                        <br><br><b>Acceptance of Terms</b><br><br>
                                        By accessing our website, using our services, or clicking to accept or agree to this Agreement when this option is made available to you, you acknowledge that you have read, understood, and agree to be bound by this Agreement and our Privacy Policy, which is incorporated into this Agreement by reference. If you do not agree with these terms, you must not access or use our services.
                                        If you are using our services on behalf of a company, organization, or other legal entity, you represent and warrant that you are authorized to bind that entity to this Agreement, in which case
                                        Welcome to AlphaTrac.
                                        Software solutions for businesses and individuals looking to supercharge their motor carrier and logistics management.
                                        Thanks for your interest.
                                    </p>
                                </article>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button id="btn1" class="btn border rounded text-secondary mt-4 mb-3 me-2" dmx-on:click="">Done<i class="fas fa-arrow-right ps-2"></i></button>
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