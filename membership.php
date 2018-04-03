<?php
session_start();
require_once 'autoloader.php';
output::header("membership");
require __DIR__ . '/vendor/autoload.php';
$configs = include('config.php');
echo '<div id="membership"> <style>background-image: url("https://cdn.discordapp.com/attachments/427875154371280898/427878078417731594/sea-of-thieves-2016-po-3840x2400.jpg")</style>';
$provider = new \Discord\OAuth\Discord([
    'clientId'     => $configs[clientId],
    'clientSecret' => $configs[clientSecret],
    'redirectUri'  => $configs[redirectUri],
]);
if (!isset($_GET['code'])) {
    showloginwithdiscord($provider);
} else {
    $token = $provider->getAccessToken('authorization_code', ['code' => $_GET['code'],]);
    $user = $provider->getResourceOwner($token);
    
    if(ispartofguid($user)){showform($user);}
    else{showjoindiscord($user);}
}
echo '</div>';
output::footer();

////////////////////////////////////////////////////////////////////////////////////////////////////////

function ispartofguid($user) {
    $guilds = $user->guilds;
    foreach ($guilds as &$guild) {
        if ($guild->id == 427483031062970368){
            return true;
        }
    }
    return false;
}

function showform($user) {
?>
<h1>Application Form</h1>
<section>
  <form>
    <h2>DISCORD</h2>
    
    <div class="discordcard">
    <?php
        echo '<img src="https://cdn.discordapp.com/avatars/' . $user->id . '/' . $user->avatar .'">';
        echo '<div class="text">';
        echo '<h2>'. $user->username .'</h2>';
        echo '<p>';
        echo $user->email;
        echo '</p>';
        echo '</div>';
    ?>
    </div>
    <label  for="username">USERNAME
    <p class="explanation">Your XBOX Gamertag</p></label>
    <input type="text" id="username" name="username" required>
    <label for="age">AGE</label>
    <input type="text" id="age" name="age" required>
    <label for="location">LOCATION<p class="explanation">What country are you from?</p></label>
    <input type="text" id="location" name="location" required>
    <label for="reference"> REFERENCED BY (OPTIONAL)
    <p class="explanation">How did you find us?</p>
      </label>
    <input type="text" id="reference" name="reference">
    <label for="motivation">MOTIVATION FOR APPLYING
    <p class="explanation">Why would you like to join us?</p>
    </label>
     <textarea name="motivation" id="motivation" rows="4" required></textarea>
    <input type="submit" value="APPLY">
  </form>
</section>
<?php
}

function showjoindiscord($user) {
    ?>
    <a class="logindiscord" href="discord">JOIN DISCORD FIRST</a>
    <?php
}

function showloginwithdiscord($provider) {
    echo '<a class="logindiscord" href="'.'https://discordapp.com/api/oauth2/authorize?client_id=430344729259933697&redirect_uri=https%3A%2F%2Froyalmerchantguild.eu%2Fmembership&response_type=code&scope=email%20guilds%20identify'.'">LOGIN WITH DISCORD</a>';
}