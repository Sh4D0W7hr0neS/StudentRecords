<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="icon" href="assets/images/icon.png" />
    <title>Student Database</title>
</head>
<body>
    <section id="MainContainer">
        <div class="container-fluid" id="maincont">
            <section id="header">
                <div class="container-fluid">
                    <a href="Homepage.html">
                        <img class="img-fluid" src="assets/images/bmsce_logo.jpg" id="hicon">
                    </a>
                </div>
            </section>
            <section id="banner">
                <div class="container-fluid" id="bannerOuter">
                    <div class="container-fluid" id="bannerInner">
                        <br />
                        <h1>Department of Information Science</h1>
                        <h2>Student Profile Database</h2>
                        <br />
                        <button class="loginButton" onclick="document.getElementById('modal1').style.display='block'">Login</button>
                        <h1> </h1>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!--=====================================================Modal==========================================-->
    <section id="modal">
        <div class="limiter">
            <div class="modal" id="modal1">
                <div class="container-fluid modalMainOuter">
                    <div class="modalMainCont">
                        <form>
                            <span id="cancelbutton" onclick="document.getElementById('modal1').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <div id="modalHeader">
                                <h2><label id="modalHeader1">Student Login</label></h2>
                            </div>
                            <div id="modalPic">
                                <img id="modalpic1" src="assets/images/index.png" />
                            </div>
                            <div id="modalInput">
                                <input id="usn" class="wrap-input100 validate-input" maxlength="10" type="text" name="usn" placeholder="USN" required />
                                <input class="wrap-input100 validate-input" type="password" name="pass" placeholder="Password" required>
                            </div>
                            <div id="modalButton">
                                <button class="loginButton" type="submit" name="btS">Login</button>
                            </div>
                            <div id="modalFooter">
                                <span id="forgotGo" onclick="document.getElementById('modal1').style.display = 'none'; document.getElementById('modal2').style.display='block'">Forgot Password?</span><br>
                                <span id="register">No Account? <a href="AccGen.html">Register here</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================================Modal 2==========================================-->
    <section id="modal">
        <div class="limiter">
            <div class="modal" id="modal2">
                <div class="container-fluid modalMainOuter">
                    <div class="modalMainCont">
                        <form>
                            <span id="cancelbutton" onclick="document.getElementById('modal2').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <div id="modalHeader">
                                <h2><label id="modalHeader1">Forgot Password</label></h2>
                            </div>
                            <div id="modalInput">
                                <input id="usn" class="wrap-input100 validate-input" maxlength="10" type="text" name="usnForgot" placeholder="USN" required />
                                <input class="wrap-input100 validate-input" type="password" name="pass" placeholder="College Email" required>
                            </div>
                            <div id="modalButton">
                                <h6>Password will be sent to your college email.</h6>
                            </div>
                            <div id="modalButton">
                                <button class="loginButton" type="submit" name="btS">Send</button>
                            </div>
                            <div id="modalFooter">
                                <span id="forgotReturn" onclick="document.getElementById('modal2').style.display = 'none'; document.getElementById('modal1').style.display='block'">Return</span><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var modal1 = document.getElementById('modal1');
        window.onclick = function (event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }
    </script>
</body>
</html>