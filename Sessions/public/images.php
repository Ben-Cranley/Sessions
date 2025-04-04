<?php require_once '../template/loginHeader.php';?>
<title>Home page</title>
</head>


<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contacts.php">Contact</a></li>
                <li><a href="information.php">Information</a></li>
                <li><a href="images.php">Image</a></li>

            </ul>
        </nav>
        <h3 class="text-muted">PHP Login exercise - Image page</h3>
    </div>

    <div class="mainarea">
        <h1> Here is an image</h1>
        <p class="lead">HOW CUTE</p>

    </div>

        <div>
            <img src="../images/PHPElephant.png" alt="PHP Elephant">
        </div>

        <?php require_once '../template/footer.php';?>
