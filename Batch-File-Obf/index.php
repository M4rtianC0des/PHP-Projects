<style type="text/css">

* {
	outline: none!important;
	text-decoration: none!important;
}


html {
	box-shadow: inset 0 0 80px -15px #000;
	background-color: #d0d0d0;
	font-family: sans-serif;
}

body {
	margin: 10%;
}

.input {
	position: relative;
	display: block;
	width: 75%;
	height: 65px;
	padding: 20px 0;
	background-color: #fff;
	box-shadow: 0 0 80px -25px black;
	color: #555;
	font-size: 24px;
	text-align: center;
	border: 2px solid #000;
	border-radius: 10px;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
	transition: .2s;
}

.version {
	position: fixed;
	top: 5px;
	right: 10px;
	color: #000;
	font-family: monospace;
	font-style: italic;
	font-weight: bold;
	text-shadow: 0 0 20px white;
}

.input:hover {
	width: 80%;
	border: 2px solid #f00;
	border-radius: 10px !important;
}

input#file {
	padding: 98px 0 0 0;
	background: url('./batch_ico.png') center center no-repeat #fff;
	background-size: 95px 95px;
	overflow: hidden;
}

.btn {
	position: relative;
	display: block;
	width: 75%;
	padding: 10px;
	min-height: 50px;
	background-color: #dd2a2a;
	box-shadow: inset 0 0 80px -25px black;
	color: #fff;
	font-size: 28px;
	text-align: center;
	border: 0;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	transition: .2s;
	cursor: pointer;
	-webkit-appearance: none;
}

.btn:hover {
	width: 80%;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	background-color: #bb2424;
}

</style>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="swag.png">
<title>Batch File obfuscator</title>


<body>

	<span class="version">v1.3 stable-DEV</span>

	<br>
	<br>

	<center>
		<form enctype="multipart/form-data" action="" method="POST">
			<input type="file" name="batchfile" class="input" id="file" style="border-bottom:1px solid #000;"/>
			<input type="number" min="1" max="20" name="passage" class="input" placeholder="Number of passes (Default: 1, Max: 20)" style="border-radius: 0px;border-top:1px solid #000;" />
			<input type="submit" class="btn" value="Obfuscate!" onclick="this.value='Obfuscation in progress..'"/>
		</form>
	</center>

</body>




<?php

ini_set('memory_limit', '-1');

if (isset($_FILES['batchfile'])) {
	if ($_FILES['batchfile']['error'] == False && $_FILES['batchfile']['size'] <= 1000000) { /* if weighs at most 1mo */
		
		if ($_POST['passage'] > 0 && $_POST['passage'] <= 20) {
			$passage = htmlspecialchars($_POST['passage']);
		} else {
			$passage = 1;
		}

		sleep(1);

		if (!is_dir('data')) mkdir('data', 0755);

		foreach(glob('data/'."*") as $file) {
			if (filemtime($file) < time() - 86400) {
				unlink($file);
			}
		}

		file_put_contents('data/'.$_FILES['batchfile']['name'], batchfile_obfuscate($_FILES['batchfile']['tmp_name'], $passage));

		echo '<br><br><center><a class="btn" style="padding-top: 15px;border-radius: 10px;"href="./data/'.$_FILES['batchfile']['name'].'">Collect <strong>'.$_FILES['batchfile']['name'].'</strong> obfuscated x'.$passage.'</a></center>';

	} else {
		echo "<center><strong>Oh a wild error appears :(</strong><br>(No attached file or the file is larger than 1MB)</center>";
	}
}


function batchfile_obfuscate($batchfile, $pass = 1) {

	for ($i=0; $i < $pass; $i++) {

		if ($i == 0) {
			$script = file_get_contents($batchfile); /* for the first pass we recover the original script */
		} else {
			$script = $batchfile_obfuscate; /* we resume what has already been obfuscated for the following passages */
		}

		$batchfile_obfuscate = ''; /* we empty all the work before */

		$stringVar0 = '@ 0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$stringVar1 = '_ÄÅÇÉÑÖÜáàâäãåçéèêëíìîïñóòôöõúùûüabcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$stringVar8 = 'abcdefghijklmnopqrstuvwxyz';
		$stringVar2 = '_¯-ஐ→あⓛⓞⓥⓔ｡°º¤εïз╬㊗⑪⑫⑬㊀㊁㊂のðabcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		$stringGen1 = substr(str_shuffle($stringVar1),0 , rand(3, 5)); /* Value of the variable for the passage */
		$stringGen2 = '';


		$arrayTable = array();
		$arrayVar0 = str_split($stringVar0);
		shuffle($arrayVar0);
		
		foreach ($arrayVar0 as $pos => $char) {
			$arrayTable[] = [$char,'%'.$stringGen1.':~'.$pos.',1%'];
			$stringGen2.= $char;
		}

		$arrayText = str_split($script);
		$convertWaitVar = False;
		$convertWaitLabel = False;
		$sautLigne = True; /* to consider the first line as a line break, if ever there is a label on the first line */
		if ($i == $pass-1) $batchfile_obfuscate.= "\xFF\xFE".'&@cls&';
		$batchfile_obfuscate.= '@set "'.$stringGen1.'='.$stringGen2.'"'.PHP_EOL;


		foreach ($arrayText as &$charOriginal) {

			if ($sautLigne = True && $charOriginal == ':') { /* if we detect a label */
				$convertWaitLabel = True;
			} 


			if ($charOriginal == "\n") {
				$sautLigne = True; /* memorize that we skip a line to test the next line */
				$convertWaitVar = False; /* we put it back to false because we can no longer be in a variable in any case if we skip a line */
				$convertWaitLabel = False; /* in any case, we put label back to false because we pass a line and if we were in a label we are no longer there */
			} else {
				$sautLigne = False;
			}

			if ($charOriginal == ' ') {
				$convertWaitLabel = False; /* to resume after a : in a string because a label cannot contain spaces */
			}


			if ($convertWaitVar == False && ($charOriginal == '%' || $charOriginal == '!')) { 
				$convertWaitVar = True; /* If we encounter first % or ! of a variable so as not to corrupt*/
			} elseif ($convertWaitVar == True && ($charOriginal == '%' || $charOriginal == '!')) { 
				$convertWaitVar = False; /* If we encounter the end of a % or ! of a variable to resume */
				$convertWaitLabel = False; /* for cases like [%time:~0,-3%] to continue anyway after the variable, because we will have detected a label in fact*/
			}


			if ($convertWaitVar == False && $convertWaitLabel == False && $sautLigne == False) { /* if we are not in a variable or in a label then replace */

				$convert = False;
				foreach ($arrayTable as list($char1, $char2)) {
					if ($charOriginal == $char1) {

						if (rand(1, 20) == 8){
							$batchfile_obfuscate.= $char2.'%'.substr(str_shuffle($stringVar1), 3, 7).'%'; /* replace if found in table + add empty variable (1x out of 10) */
						} else {
							$batchfile_obfuscate.= $char2;
						}
						
						$convert = True;
					}
				}

				if ($convert == False) {
					$batchfile_obfuscate.= $charOriginal; /* if we did not find in the table then we do not replace */
				}

			} else {
				$batchfile_obfuscate.= $charOriginal; /* we are in a var or a label so we do not replace anything */
			}
		}


	}


	return(html_entity_decode($batchfile_obfuscate));
}

?>