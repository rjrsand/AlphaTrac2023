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
    <script src="dmxAppConnect/dmxBootstrap5Modal/dmxBootstrap5Modal.js" defer></script>
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
                    <div class="d-flex fw-light mt-2 ms-2 flex-column" id="whoSent">
                        <label for="fullName" class="ps-1 style7 col" id="fName">Enter your name:</label>
                        <input id="fullName" name="user-name" type="text" class="form-control mt-2 mb-3 fw-light" placeholder="Jane Smith" required="">
                    </div>
                    <div class="d-flex fw-light mt-2 ms-2 flex-column" id="receivedFrom">
                        <label for="emailAddress" class="ps-1" id="eAddress">Enter you email address:</label>
                        <input id="emailAddress" name="user-email" type="email" class="form-control mt-2 mb-3 fw-light" placeholder="jane@smithy.co" required="">
                    </div>
                    <div class="d-flex fw-light mt-2 ms-2 text-break flex-column" id="bgDetails">
                        <label for="ticketDetails" class="pb-2 ps-1">Tell us what is on your mind?</label>
                        <textarea id="ticketDetails" class="form-control fw-light" placeholder="Your message to our team..." required="true"></textarea>


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

        <div class="modal pb-5 show" id="modal_platform_support" is="dmx-bs5-modal" tabindex="-1" style="display: block;" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-light-subtle">
                    <div class="modal-header border-bottom-0 mb-2 pb-1">
                        <h5 class="modal-title">Contact us</h5>
                        <button class="btn-close" data-bs-dismiss="modal" is="dmx-button" value="" type="button"></button>
                    </div>

                    <div class="modal-body pt-1" id="modal_body">

                        <div class="row" id="contact_thankyou" style="">
                            <div class="col mt-2 pt-2">
                                <h4 class="text-center">Thank you for your message.</h4>
                                <p class="text-center pt-3">Thank you for your message! Someone from Alphatrac will respond within 5 to 7 business days.</p>
                            </div>
                        </div>

                        <!-- Place the provided form HTML code just before the closing </script> tag -->

                    </div>

                    <div class="modal-footer border-top-0" id="modal_footer">
                        <button class="btn text-light bg-primary border rounded mt-0 ms-auto me-auto" data-bs-dismiss="modal" id="close_btn" is="dmx-button" value="" type="button" style=""><i class="bi-x-lg me-1"></i>Close</button>
                    </div>
                </div>
            </div>
        </div>

    </main>



    <script src="bootstrap/5/js/bootstrap.min.js"></script>


    <script src="js/script.js"></script>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>