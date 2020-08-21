<?php
session_start();

?>
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation</title>
<meta name="reservation hotel for malaysia" >
<meta name="zulkarnain" content="gambohnetwork.com.my">
<meta name="copyright" content="Hotel Malaysia, inc. Copyright (c) 2014">
<link rel="stylesheet" href="scss/foundation.css">
<link rel="stylesheet" href="scss/style.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="icon/css/fontello.css">
<link rel="stylesheet" href="icon/css/animation.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="jquery.backstretch.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<meta class="foundation-data-attribute-namespace"><meta class="foundation-mq-xxlarge"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-large"><meta class="foundation-mq-medium"><meta class="foundation-mq-small"><style></style><meta class="foundation-mq-topbar"></head>
<body class="fontbody" style="background-image : url(img/background.jpg); no-repeat center center fixed; background-size: cover;">
<div class="row " >
	<div class="large-4 columns blackblur "  style="margin-top:100px; ">
		<p class="fontslabo " style="text-align:left; font-size:18px;"><br><h4>Transaction Cancelled</h4><hr> Dear <?php echo $_SESSION['firstname'];?>, <br>You cancel your offer. Your payment status is pending.</p>
		<br>
		<a class="button small" href="#">Homepage</a>
		<a class="button small" href="index">Make New Booking</a></p>
	</div>
</div>
<?php
session_unset();
session_destroy();
?>
</body></html>