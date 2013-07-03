<?

$site = "http://tweetreports.com/brand-monitoring/twitter-clock-twitter-brand-monitoring/";
$page = file_get_contents($site);



$pieces = explode ("<head profile=\"http://gmpg.org/xfn/11\">",$page);
$pieces2 = explode ("</head>",$pieces[1]);
$header = $pieces2[0];

echo "<div style='display:none'>".$header."</div>";

$pieces = explode ("<div class=\"tcspace\">",$page);
$pieces = explode ("</h5>",$pieces[1]);



echo $poop = $pieces[0];


?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>


<form name="addform" id="addform" action="javascript:add();">
<input type="text" value="" name="number" id="number">
</form>
<div id="result"></div>


<script>
	function poop() {
		element = document.getElementById("tc_current_registration").innerHTML;
		$('#number').val(element);
		$.post('twitter_addCountToDB.php', $("#addform").serialize(), function(data) {$('#result').html(data);});

	}
	setTimeout( poop, 1000 );
</script>