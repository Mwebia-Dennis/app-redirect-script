<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Redirecting</title>
</head>

    <body>
        <p>Zoom Login Successful...</p>
        <!--<a href="com.penguinstech.zoommeetingapp://penguinstech.com/?code=1234">sdfsd</a>-->
	    <p id="code"></p>
        <a id="link" href="intent://penguinstech.com/?code=1234#Intent;scheme=com.penguinstech.zoommeetingapp;package=com.penguinstech.zoommeetingapp;end">Continue to App</a>
    </body>
    <script>
        // window.location.replace("com.penguinstech.zoommeetingapp://12345")
        var url = new URL(window.location);
        var code = url.searchParams.get("code");
	var state = url.searchParams.get("state");
	document.getElementById('code').innerHTML = code;
        var url = "intent://penguinstech.com/?code="+code+"&state="+state+"#Intent;scheme=com.penguinstech.penguinsmeetingapp;package=com.penguinstech.penguinsmeetingapp;end"
        document.getElementById('link').href = url
        // document.getElementById('link').click()

        
    </script>
</html>
