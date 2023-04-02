<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sending HTML email using PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
   
   <!--NavBar-->

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: gray">
        <div class="container-fluid">
            <a class="navbar-brand" href="Welcome.html">Solomon's Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Welcome.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Me</a>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.html">Portfolio</a>
                   <!--<li class="nav-item">
                       <a class="nav-link" href="resume.html">Resume</a>--> 
                    <li class="nav-item">
                        <a class="nav-link" href="store.html">My Store</a>
                    </li>
                    <li class="nav-item">
                        <button class="button" onclick="cchange()">Toggle dark mode</button>
                    </li>
            </div>
        </div>
    </nav>
    <!--End-->

      <?php
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field,FILTER_VALIDATE_EMAIL)) {
        return true;
    } else { return false; }
    }

    $name = $_POST['name'];
    $mailto = $_POST['mailto'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $mailfrom = $_POST['mailfrom'];
    $secure_check=sanitize_my_email($mailfrom);
    if((sanitize_my_email($mailfrom)==false) ||
    (sanitize_my_email($mailto)==false)) {
        die("Invalid email");
    }
    $headers = "From $mailfrom (Note, This is a test email! Do not open anything from this email if you are not testing!!!!)";
    $message = "$name sent you an email. \n\n". $message;
    if(mail($mailto,$subject,$message,$headers)){
        print"<h3>Mail was sent successfully</h3><br/>";}
        else{ print"<h3>Could not send mail</h3><br/>";}
      ?>

   <!--Footer-->
    <footer class="footer">
        <footer class="text-center text-lg-start bg-light text-muted">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: gray">
                <div class="container-fluid">
                    <div class="center">

                        <button class="button"><a href="https://github.com/ThomSolo">GitHub</a></button>

                        <button class="button"><a
                                href="https://www.linkedin.com/in/solomon-thomas-982548252/?original_referer=">LinkedIn</a></button>

                        <div class="text-center p-4">
                            © 2023 Solomon Thomas


                        </div>
                    </div>
                </div>
            </nav>
        </footer>
    </footer>
    <!--Footer-->


    <!--CSS, JavaScript, etc-->

    <style>
        /* Button Code */
        button {
            display: inline-block;
            padding: 10px 10px;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            color: #fff;
            background-color: #bbbbbb;
            border: none;
            border-radius: 15px;
        }

        .button:hover {
            background-color: #5a5a5a
        }

        .button:active {
            background-color: #bbbbbb;
            transform: translateY(4px);
        }

        /* Button Code */

        /* Header, Body, Container, and Footer Code */
        html {
            position: relative;
            min-height: 100%;
        }

        /* Color Change */
        body {
            margin-bottom: 60px;
            background-color: white;
            color: black;
        }

        .dark-mode {
            background-color: black;
            color: white;
        }

        /* Color Change */

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;

            height: 60px;
            background-color: gray;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100;
        }

        /* Header, Body, Container, and Footer Code */
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">



        </script>

    <script>
        function cchange() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>

    <!--CSS, JavaScript, etc-->
</body>

</html>