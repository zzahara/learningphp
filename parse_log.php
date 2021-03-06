<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="generator" content="Adobe GoLive" />
		<title>Zahara's Website</title>
		<style type="text/css" media="screen"><!--
			#outline { position: relative; height: 800px; width: 800px; margin: 18px auto 0; border: solid 1px #999; }
			#caption { width: 260px; left: 48px; top: 318px; position: absolute; visibility: visible; }
			#text { left: 336px; top: 318px; position: absolute; width: 400px; visibility: visible; margin-top: 10px; }
			#title { width: 800px; top: 100px; position: absolute; visibility: visible; }
			p { color: #666; font-size: 16px; font-family: "Lucida Grande", Arial, sans-serif; font-weight: normal; margin-top: 0; }
			h1 { color: #778fbd; font-size: 20px; font-family: "Lucida Grande", Arial, sans-serif; font-weight: 500; line-height: 32px; margin-top: 4px; }
			h2 { color: #778fbd; font-size: 18px; font-family: "Lucida Grande", Arial, sans-serif; font-weight: normal; margin: 0.83em 0 0; }
			h3 { color: #666; font-size: 60px; font-family: "Lucida Grande", Arial, sans-serif; font-weight: bold; text-align: center; letter-spacing: -1px; width: auto; }
			h4 { font-weight: bold; text-align: center; margin: 1.33em 0; }
			a { color: #666; text-decoration: underline; }
		--></style>
	</head>

	<body>
		<div id="outline">
			<img src="images/gradient.jpg" alt="" height="304" width="800" border="0" />
			<div id="title">
				<h3>Zahara's website.</h3>
			</div>
			<div id="caption">
				<h1>Create and publish your own website quickly and easily using iWeb, Pages, and many other applications available<br />
					for Mac OS X.</h1>
			</div>
			<div id="text">
                <?php print "Hello World!<br>"; 
                $string = "Hello World";
                print $string ."<br>";
                print '$string <br>';
                print "$string <br>";

                // create an array
                $list = array(
				"<p>It’s a snap to create and publish your own website from your Mac. When your site is ready, it’s just as easy to publish it.</p> ",
				"<p>Open System Preferences and click Sharing, then select Web Sharing.</p>",
				"<p>Your done. Your site is now available on your private network at home or work.</p>",
				"<p>If you’re connected to the Internet, it can also be available to friends everywhere. Just send them the address shown in Sharing preferences.</p>"); 

                
                //echo "<pre>"; print_r(file("/var/log/apache2/access_log")); echo "</pre>";

                
                /* PARSE LOGS */

                $logs = file("/var/log/apache2/access_log");
                $total_bytes = 0;

                echo "PARSING LOGS:";
                foreach ($logs as $key => $value) {
                    $split_log = preg_split('/ /', $value, -1, PREG_SPLIT_NO_EMPTY); 
                    echo "<pre>"; print_r($split_log); echo "</pre>";

                    $byte = (int)$split_log[9];
                    $total_bytes = $total_bytes + $byte; // index of # of bytes served = 9
                    echo "TOTAL BYTES = ".$total_bytes;

                }

?>

                
				<h2>Apache Power</h2>
				<p>Web Sharing is built on the <a href="http://www.apache.org/httpd">Apache</a> web server, an industry standard technology included with Mac OS X. For more information about the Apache web server, see the <a href="/manual/">Apache manual</a>.</p>
			</div>
			
		</div>
		
	</body>

</html>
