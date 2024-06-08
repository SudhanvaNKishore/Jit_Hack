<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | KYC</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Know Your College!</h2>

        <form id="search-form" onsubmit="return redirectToClub()">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter the club name..." />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Our College Societies
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="https://www.instagram.com/world.language.club_jit/" target="_blank">
                    <div class="city-card rounded-circle">
                        <img src="img/c1.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="https://www.instagram.com/sports.jit/" target="_blank">
                    <div class="city-card rounded-circle">
                        <img src="img/c2.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="https://www.instagram.com/techclubjit/" target="_blank">
                    <div class="city-card rounded-circle">
                        <img src="img/c3.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="https://www.instagram.com/__bitsnbytes__/" target="_blank">
                    <div class="city-card rounded-circle">
                        <img src="img/b4.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="https://www.instagram.com/crea_jit/" target="_blank">
                    <div class="city-card rounded-circle">
                        <img src="img/c5.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="https://www.instagram.com/edc_jit/" target="_blank">
                    <div class="city-card rounded-circle">
                        <img src="img/c6.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="https://www.instagram.com/__ieee_.jit__/" target="_blank">
                    <div class="city-card rounded-circle">
                        <img src="img/c7.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="https://www.instagram.com/rotaract.jit/" target="_blank">
                    <div class="city-card rounded-circle">
                        <img src="img/c8.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

    <script>
        function redirectToClub() {
            const clubName = document.getElementById('city').value.toLowerCase();
            const clubs = {
                "world language club": "https://www.instagram.com/world.language.club_jit/",
                "sports club": "https://www.instagram.com/sports.jit/",
                "tech club": "https://www.instagram.com/techclubjit/",
                "bits and bytes": "https://www.instagram.com/__bitsnbytes__/",
                "crea club": "https://www.instagram.com/crea_jit/",
                "edc club": "https://www.instagram.com/edc_jit/",
                "ieee club": "https://www.instagram.com/__ieee_.jit__/",
                "rotaract club": "https://www.instagram.com/rotaract.jit/"
            };

            for (let key in clubs) {
                if (key.includes(clubName)) {
                    window.open(clubs[key], '_blank'); // Open in a new tab
                    return false; // Prevent form submission
                }
            }

            alert('Club not found!');
            return false; // Prevent form submission
        }
    </script>
</body>

</html>
