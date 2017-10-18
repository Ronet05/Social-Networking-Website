<html>

<head>
    <link rel="stylesheet" href="profilepage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato:300'>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Amiri|Lobster" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Profile Page</title>
</head>

<body>
    <div class="containercss heading">
        <h1>Connectify</h1>
    </div>
    <nav>
        <ul class="topnav">
            <li><a href="test.html">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">CONTACT</a></li>
            <li class="signout"><a href="#">SIGN OUT</a></li>
        </ul>
    </nav>
    <div class="containeracc">
        <button class="accordion">SOCIAL PROFILE</button>
        <div class="panel">
            <div class="col-sm-4">
                <div class="card">
                    <img src="#" alt="profilepic" style="width: 100%;" />

                </div>
                <div class="btn-primary btn-style"><a href="#"> Edit Profile Picture / Info</a></div>
            </div>
            <div class="col-sm-8">
                <p>Name: </p>
                <p>Email: </p>
                <p>Gender: </p>
                <p>Birthday: </p>
                <p>About Self: </p>
            </div>
        </div>
    </div>
    <button class="accordion">BUSINESS PROFILE</button>
    <div class="panel">

    </div>

    <!--JAVASCRIPT FOR ACCORDION-->
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            }
        }
    </script>


</body>




</html>