<?php
    // including F8th MFA SDK
    include_once('f8th/f8th.php');
    // creating the F8th object
    $f8th = new F8th('f8th4');
	$userId = $_GET['id'];
	$cdnUrl = $f8th->cdnUrl();
	
?>
<!doctype html>
<html lang="en">

<head>
    <script src="<?= $f8th->cdnUrl() ?>f8th.js?sid=<?= $f8th->sessionId() ?>"></script>
    <title>F8th MFA PHP SDK Example 01</title>
</head>

<body>
    Session ID: <?= $f8th->sessionId(); ?> <br/>
	UserID: <?= $userId; ?> <br/>
	cdnUrl: <?= $cdnUrl; ?> <br/>
</body>

</html>