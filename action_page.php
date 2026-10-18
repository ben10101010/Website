<html>
<div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <script src="sideNav.js" defer></script>
<title>Contact</title>
</head>

<body>

<div class="border">
    <h1 id="yes" class="yes">Contact]</h1>
    <span class="openNav" onclick="openNav()">&#9776;</span>
</div>

<div id="mySidenav" class="sidenav">
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
     <a href="https://vickenezik.com">About</a>
     <a href="https://vickenezik.com/projects">Projects</a>
     <a href="https://vickenezik.com/music">Music</a>
     <a href="https://vickenezik.com/games">Games</a>
     <a href="https://vickenezik.com/contact">Contact</a>
</div>

<div id="main">
   <p class="text">Thank you for filling out the contact form, <?php echo $_POST["fname"]; ?>!
        I will get back to you as soon as possible at <?php echo $_POST["email"]; ?>.
    </p>
</div>

<?php
  function sendDiscordMessage($webhookUrl, $message) {
    $data = json_encode(['content' => $message]);
    
    $ch = curl_init($webhookUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    return $httpCode >= 200 && $httpCode < 300;
}

// Usage
$fname = htmlspecialchars($_POST['fname'] ?? '');
$lname = htmlspecialchars($_POST['lname'] ??'');
$email = htmlspecialchars($_POST['email'] ??'');
$subject = htmlspecialchars($_POST['subject'] ??'');
$msg = "New contact form submission:\nName: $fname $lname\nEmail: $email\nSubject: $subject \n <@717500798317101086>";
$webhookUrl = 'https://discord.com/api/webhooks/1561480875521220649/AD_5dPsy4DxzcMr7jQX4yaHb5i-_c8R3YkMdGXlkMdDAGTb6SgpHvfXy7_MwfF93rCJH';
sendDiscordMessage($webhookUrl, $msg); ?>

</div>
</body>
</div>
</html>