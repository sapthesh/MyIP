<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>
    <TITLE>MyIP - Simple IP Tool </TITLE>
    <META NAME="Keywords" CONTENT="IP, address, address translation, proxy, firewall, dhcp, network, games, voice chat, tutorials, find ip address, ip addres, whats ip, ip find, ipconfig, ipaddress">
    <META NAME="Description" CONTENT="MyIP - The #1 Way To Find Your IP Address!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">

</HEAD>
<body>

<div class="container">

    <div class="jumbotron rounded border border-danger" align="center">

        <h1 class="h1-responsive card-header deep-orange lighten-1 white-text">MY IP ADDRESS</h1>

        <h3 align="center">Your IP Is <br/></h3>

        <h1 class="indigo-text"><?php $ip = $_SERVER['REMOTE_ADDR'];
            echo "<b> $ip</b>"; ?></h1>

        <p class="lead" align="center">MyIP is the fastest and easiest way to determine your IP address.</p>
        <hr class="my-2">
        <br/>
        <h3>Advertisements</h3>
        <h2>Add Your Advertisements</h2>
        <br/>

    </div>

    <!--Footer-->
    <footer class="page-footer indigo center-on-small-only pt-0">


        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="https://blogy.eu.org"> Sapthesh V </a> | Powered By <a
                        href="https://mdbootstrap.com/">MDBootstrap.com</a>

            </div>
        </div>
        <!--/Copyright-->

    </footer>
    <!--/Footer-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>


</BODY>
</HTML>

