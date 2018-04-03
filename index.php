<?php
session_start();
require_once 'autoloader.php';
output::header("home");
?>
<div id="home">
    <div class="youtubevid">
    <iframe width="1000" height="560" src="https://www.youtube.com/embed/r5JIBaasuE8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="buttoncontainer">
    <a class="button" href="membership">APPLY FOR MEMBERSHIP</a>
    </div>
    <p id="a"> In name of His Majesty we sail into mysterious seas.</br>
    Exploring uncharted islands searching for riches and commodities.</br>
    From haven to sanctuary our ships sail with deliveries.</br>
    A Merchant fleet sailing under the banner of the nobility.</br>
    Charting new lands and gaining expertise, bringing riches back in immensity.</br>
    The Royal Merchant Guild rules the sea, achieving prosperity.</p>
</div>
<?php

output::footer();