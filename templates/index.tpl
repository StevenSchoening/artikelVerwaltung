<!DOCTYPE html>
<html>
<title>Artikelverwaltung</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="http://localhost/artikelverwaltung/templates/stylesheets/styles.css">

<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Artikelverwaltung</a>
    </div>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">

            <!-- Accordion -->
            <div class="w3-card w3-round">
                <div class="w3-white">
                    <button onclick="myFunction('search-area')" class="w3-button w3-block w3-theme-l1 w3-left-align">
                        <i class="fa fa-search fa-fw w3-margin-right"></i> Artikelsuche
                    </button>
                    <div id="search-area" class="w3-hide w3-container">
                        <form method="get" action="/artikelverwaltung/index.php">
                            <input type="text" placeholder="Suchgbegriff" id="artikel-search" name="query">
                        </form>
                    </div>

                </div>
            </div>
            <br>

            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->
        <div class="w3-col m9">

            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <h4>John Doe</h4>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>


            <!-- End Middle Column -->
        </div>

        <!-- Right Column -->
        {*<div class="w3-col m2">*}
            {*<div class="w3-card w3-round w3-white w3-center">*}
                {*<div class="w3-container">*}
                    {*<p>Upcoming Events:</p>*}
                {*</div>*}
            {*</div>*}
            {*<br>*}
            {*<!-- End Right Column -->*}
        {*</div>*}

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>
<br>

<!-- Footer -->
{*<footer class="w3-container w3-theme-d3 w3-padding-16">*}
    {*<h5>Footer</h5>*}
{*</footer>*}

<script type="text/javascript" src="http://localhost/artikelverwaltung/templates/javascript/navigation.js"></script>
</body>
</html>
