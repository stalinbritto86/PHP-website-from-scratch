<?php

/**
 * header file
 * included in all pages for displaying header section
 */

require 'includes/index.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>My Brand</title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/website-1/assets/scss/website-1.css?<?php echo date("mdYhis") ?>">
</head>

<body>

    <header>

        <div id="top-bar">

            <a href="#" class="brand-logo">MY BRAND</a>

            <ul class="top-menu">

                <li><a href="<?php echo homepage_url() ?>">Home</a></li>
                <li><a href="http://localhost/website-1/services/">Services</a></li>
                <li><a href="http://localhost/website-1/products/">Products</a></li>
                <li><a href="http://localhost/website-1/careers/">Careers</a></li>
                <li><a href="http://localhost/website-1/about/">About</a></li>
                <li><a href="http://localhost/website-1/contact/">Contact</a></li>

            </ul>

        </div>

    </header>