<?php
	// The commands
	$payload = json_decode($_POST["payload"]);
	$ref = $payload->{"ref"};
	$current_path = getcwd();
	$branch = "";
	if (strpos($ref, 'master') !== false && !(strpos($current_path,"test.karlaaguirre.com") !== false)) {
		$branch = "master";
	}
	elseif (strpos($ref, 'development') !== false && (strpos($current_path,"test.karlaaguirre.com") !== false)){
		$branch = "development";
	}
	else{echo "wrong conditions";}
	$commands = array(
		'echo $PWD',
		'whoami',
		'git config --global user.name',
		'git config --global user.email',
		'git fetch 2>&1',
		'git status',
		'git pull origin '.$branch.' 2>&1',
		'git status',
	);
	// Run the commands for output
	$output = '';
	if ($branch != ""){
		foreach($commands AS $command){
			// Run it
			$tmp = shell_exec($command);
			// Output
			$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
			$output .= htmlentities(trim($tmp)) . "\n";
		}
	}
	// Make it pretty for manual user access (and why not?)
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
 ____________________________
|                            |
| Git Deployment Script v0.6 |
|____________________________|

<?php echo $output; ?>
</pre>
</body>
</html>
