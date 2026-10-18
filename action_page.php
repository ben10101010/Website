<html>
<body>

Welcome <?php echo $_POST["fname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

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
$msg = "New contact form submission:\nName: $fname $lname\nEmail: $email\nSubject: $subject";
$webhookUrl = 'https://discord.com/api/webhooks/1561480875521220649/AD_5dPsy4DxzcMr7jQX4yaHb5i-_c8R3YkMdGXlkMdDAGTb6SgpHvfXy7_MwfF93rCJH';
sendDiscordMessage($webhookUrl, $msg); ?>

</body>
</html>