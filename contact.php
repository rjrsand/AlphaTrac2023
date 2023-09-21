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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
    <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/medium-editor.css" />
    <script src="dmxAppConnect/dmxMediumEditor/medium-editor.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/dmxMediumEditor.css" />
    <script src="dmxAppConnect/dmxMediumEditor/dmxMediumEditor.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/themes/default.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-lite.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-lite.min.js" defer></script>
    <script src="dmxAppConnect/dmxSummernote/dmxSummernote.js" defer></script>

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
                        <a class="nav-item nav-link text-light" href="privacy-policy.php">Privacy Policy</a>
                        <a class="nav-item nav-link text-light">|</a>
                        <a class="nav-item nav-link text-light" href="terms-of-service.php">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="bootstrap/5/js/bootstrap.min.js">


    </script>
</body>

</html>