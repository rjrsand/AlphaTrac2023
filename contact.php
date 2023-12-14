<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="description" content="Alphatrac's page to contact with any questions, comments or concerns.">
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
                        <h2 class="style4 mb-3 ms-2">Contact</h2>
                    </div>
                    <p class="style2 ms-2 lead">Our team is happy to address your question, concern, or general message. Please tell us...</p>
                    <div class="d-flex fw-light mt-2 ms-2 flex-column">
                        <label for="user-name" class="ps-1 style7 col">Enter your name:</label>
                        <input id="user-name" name="user-name" type="text" class="form-control mt-2 mb-3" placeholder="Jane Smith" required="">
                    </div>
                    <div class="d-flex fw-light mt-2 ms-2 flex-column">
                        <label for="user-email" class="ps-1">Enter you email address:</label>
                        <input id="user-email" name="user-email" type="email" class="form-control mt-2 mb-3" placeholder="jane@smithy.co" required="">
                    </div>
                    <div class="d-flex fw-light mt-2 ms-2 text-break flex-column">
                        <label for="message" class="pb-2 ps-1">Tell us what is on your mind?</label>
                        <textarea id="message" class="form-control" placeholder="Your message to our team..." required="true"></textarea>


                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button id="btn2" class="btn border rounded w-100 text-light bg-primary mt-3 mb-2 me-2" dmx-on:click="">Contact Us<i class="fas fa-arrow-right ps-2"></i></button>
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