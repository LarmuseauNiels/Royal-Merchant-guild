<?php
session_start();
require_once 'autoloader.php';
output::header("discord");
?>
<style>body{background-image: url("https://cdn.discordapp.com/attachments/427875154371280898/427877800624652288/sea-of-thieves-shark_encounter_ii-web.jpg")}</style>
<div id="discord">
    <section>
        <p id="discordmessage"> Whether you want to share a nice cold Grog in our Tavern with some of the finest Buccaneers sailing the Sea,</br> or partake on an adventure with one of our feared Galleon crews; Our Discord is the place to be!</br>
        Join us now and take the first steps into an adventure you couldn't dare dream of.</br>
        See you in our Tavern!</p>
        <a href="https://discord.gg/txrCZWd">
        <img id="discordbanner" src='https://cdn.discordapp.com/attachments/427875154371280898/430090437160861697/discord_banner_2.png' alt='join discord'></a>
    </section>
    <aside>
        <iframe src="https://discordapp.com/widget?id=427483031062970368&theme=light" width="300" height="600" allowtransparency="true" frameborder="0"></iframe>
    </aside>
</div>
<?php
output::footer();