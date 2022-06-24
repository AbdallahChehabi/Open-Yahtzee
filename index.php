<!DOCTYPE html>
<html lang="fr">

	<head>
	<title>Open Yahtzee</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="style.css" />	
	</head>
	<body>

		<h1>Yahytzee</h1>

		<a id="new" href="http://localhost/CHEHABI/index.php">Nouveau jeu</a>
	
		<a id="help" href="https://www.openyahtzee.org/pages/HowToPlay-fr.html">Comment jouer</a>
    	<br>

		<hr >

		<fieldset class="s_h">
			<legend> Section haute: </legend>

			 	<div>
				<input class="boutton" id="AsButton" type="submit" name="As" value="As"/>
				<input type="text" id="AsText" name="S_As"/><br><br>
				</div>

				<div>
				<input class="boutton" id="DeuxButton" type="submit" name="Deux" value="Deux"/>
				<input type="text" id="DeuxText" name="S_Deux"/><br><br>
				</div>

				<div>
				<input class="boutton" id="TroisButton" type="submit" name="Trois" value="Trois"/>
				<input type="text" id="TroisText" name="S_Trois"/><br><br>
				</div>

				<div>
				<input class="boutton" id="QuatreButton" type="submit" name="Quatre" value="Quatre"/>
				<input type="text" id="QuatreText" name="S_Quatre"/><br><br>
				</div>

				<div>
				<input class="boutton" id="CinqButton" type="submit" name="Cinq" value="Cinq"/>
				<input type="text" id="CinqText" name="S_Cinq"/><br><br>
				</div>

				<div>
				<input class="boutton" id="SixButton" type="submit" name="Six" value="Six"/>
				<input type="text" id="SixText" name="S_Six"/><br><br>
				</div>

				<div>
				<input class="boutton" id="TSHButton" type="submit" name="TSH" value="Total section haute:"/>
				<input type="text" id="TotalSectionHauteText" name="S_TSH"/><br><br>
				</div>
				
		</fieldset>

		<fieldset class="s_b">
			<legend>Section basse:</legend>

			 	<div>
				<input class="boutton" id="BrelanButton" type="submit" name="Brelan" value="Brelan"/>
				<input type="text" id="BrelanText" name="S_Brelan"/><br><br>
				</div>

				<div>
				<input class="boutton" id="CareeButton" type="submit" name="Caree" value="Caree"/>
				<input type="text" id="CareeText" name="S_Caree"/><br><br>
				</div>

				<div>
				<input class="boutton" id="FullButton" type="submit" name="Full" value="Full"/>
				<input type="text" id="FullText" name="S_Full"/><br><br>
				</div>

				<div>
				<input class="boutton" id="PSuiteButton" type="submit" name="Petite_suite" value="Petite suite"/>
				<input type="text" id="PSuiteText" name="S_Petite_suite"/><br><br>
				</div>

				<div>
				<input class="boutton" id="GSuiteButton" type="submit" name="Grande_suite" value="Getite suite"/>
				<input type="text" id="GSuiteText" name="S_Grande_suite"/><br><br>
				</div>

				<div>
				<input class="boutton" id="YahtzeeButton" type="submit" name="Yahtzee" value="Yahtzee"/>
				<input type="text" id="YahtzeeText" name="S_Yahtzee"/><br><br>
				</div>

				<div>
				<input class="boutton" id="ChanceButton" type="submit" name="Chance" value="Chance"/>
				<input type="text" id="ChanceText" name="S_Cshance"/><br><br>
				</div>

				<div>
				<input class="boutton" id="TSBButton" type="submit" name="TSB" value="Total section base:"/>
				<input type="text" id="TotalSectionBaseText" name="S_TSB"/><br><br>
				</div>

				<div>
				<input class="boutton" id="TotalButton" type="submit" name="Total" value="Total:"/>
				<input type="text" id="TotalText" name="S_Total"/><br><br>
				</div>

		</fieldset>
		
	    
		<p id="ex">Une fois que vous ne voulez plus (ou ne pouvez plus) lancer les dés pour ce tour, vous devez appuyer sur les bouttons pour calculer vos point. Bonne chance!</p>
		
		
		<!--Les 5 dés -->
		<fieldset id="dices">
			<legend class="des"> Les Des </legend>

			<div id="de1">
				<img src="dice1.png" alt="imp" width="40" height="40" />	
			</div>
			<input type="checkbox" id="check1" name = "check1" value="garder"> 
				cocher cette case pour garder la première dé.<br><br>

			<div id="de2" class="de2">
				<img src="dice2.png" alt="imp" width="40" height="40" />
			</div>
			<div>
				<input type="checkbox" id="check2" name = "check2">
				cocher cette case pour garder la deuxième dé.<br><br>
			</div>

			<div id="de3" class="de3">
				<img src="dice3.png" alt="imp" width="40" height="40" />
			</div>
			<input type="checkbox" id="check3" name = "check3">	
				cocher cette case pour garder la troisième dé.<br><br>

			<div id="de4" class="de4">
				<img src="dice4.png" alt="imp" width="40" height="40" />
			</div>
				<input type="checkbox" id="check4" name = "check4">	
				cocher cette case pour garder la quatrième dé.<br><br>

			<div id="de5" class="de5">
				<img src="dice5.png" alt="imp" width="40" height="40" />	
			</div> 
				<input type="checkbox" id="check5" name = "check5">
				cocher cette case pour garder la cinqième dé.<br><br>

			<button id="btn" onclick="clicks(); roll();"> Rollez les dés </button>
			<br>
		</fieldset>

		<br>
		<div id="res">

			<h2 id="yahtzee">YAHTZEE ou NON ?</h2>
			<h2 id="counter">Le nombre total de vos tentatives est:</h2>
			<p>Vous avez joué: <span id="dis_cou">0</span> fois!</p><br>
		</div>
		<br>

		<div id="regle">
			<h3>Pour vous aider à connaître comment les tableau vont remplir:</h3>

			<p>La Section Haute: <br><br>
			<img src="regle-sh.png" alt="imp" width="700" height="150" />
			</p>

			<p>La Section Base:
			Si le joueur choisit une case de la section basse, il marque le nombre de points indiqué par
			le tableau suivant si sa combinaison remplit la condition associée et 0 sinon. <br><br>
			<img src="regle.png" alt="imp" width="900" height="200" />
			</p>
		</div>

		<div id="dev"> 
			<br>
			This site est programmé et developpé par CHEHABI.
		</div>

		<script>
			"use strict";
			var count = 0;
			function clicks() {
				count++;
				var button = document.getElementById("btn");
				var display = document.getElementById("dis_cou");
				display.innerHTML = count;
				if (count >= 3) {
					document.getElementById("btn").disabled = true;
					display.innerHTML = "Le maximum est 3 "
				}
			}
			
		    <!--La fonction pour produire 5 numéros au hasard entre 1 et 6 -->
			var dices2 = new Array(5);
			//var ch = new Array(5);

			function roll() {
				for  (var i = 0; i  < 5; i++) {				
						dices2[i] = Math.floor(Math.random()*6) + 1;
				}
				
				/*if (document.getElementById(ch[1]).checked) {
						dices2[0] = Math.floor(Math.random()*6) + 1;
				}
				if (document.getElementById(ch[2]).checked) {
						dices2[1] = Math.floor(Math.random()*6) + 1;
				}
				if (document.getElementById(ch[3]).checked) {
						dices2[2] = Math.floor(Math.random()*6) + 1;
				}if (document.getElementById(ch[4]).checked) {
						dices2[3] = Math.floor(Math.random()*6) + 1;
				}
				if (document.getElementById(ch[5]).checked) {
						dices2[4] = Math.floor(Math.random()*6) + 1;
				}*/

				var des1 = document.getElementById("de1");	
				var des2 = document.getElementById("de2");	
				var des3 = document.getElementById("de3");	
				var des4 = document.getElementById("de4");	
				var des5 = document.getElementById("de5");
			
			<!--générer 5 numéros au hasard entre 1 et 6-->
                var dices = new Array(
					Math.floor(Math.random()*6) + 1,
					Math.floor(Math.random()*6) + 1,
					Math.floor(Math.random()*6) + 1,
					Math.floor(Math.random()*6) + 1,
					Math.floor(Math.random()*6) + 1
				);

				var de_un = Math.floor(Math.random()*6) + 1;
				var de_deux = Math.floor(Math.random()*6) + 1;
				var de_trois = Math.floor(Math.random()*6) + 1;
				var de_quatre = Math.floor(Math.random()*6) + 1;
				var de_cinq = Math.floor(Math.random()*6) + 1;
				
				var yat = document.getElementById("yahtzee"); <!--montrer si YAHTZEE ou pas-->
			
			<!-- pour verifier si on a fait Yahtzee ou non-->
				if(de_un==de_deux && de_un==de_trois && de_un==de_quatre && de_un==de_cinq) {
					yat.innerHTML = "YAHTZEE wow";
				}
				else {
					yat.innerHTML = "Ce n'est pas YAHTZEE";
				}
			
			<!--montre les valeurs-->
				des1.innerHTML = "Votre premier dés est:      "+("<img src='dice"+dices2[0]+".png'></img>");
				des2.innerHTML = "Votre deuxième dés est:     "+("<img src='dice"+dices2[1]+".png'></img>");
				des3.innerHTML = "Votre troisième dés est:    "+("<img src='dice"+dices2[2]+".png'></img>");
				des4.innerHTML = "Votre quatreième dés est: "+("<img src='dice"+dices2[3]+".png'></img>");
				des5.innerHTML = "Votre cinqième dés est:     "+("<img src='dice"+dices2[4]+".png'></img>");
				//tot.innerHTML = total;
			 }

			 function getTotalOfValue(diceNumber) {
				 var result = 0;
				 for  (var i = 0; i  < 5; i++) {
					 if  (dices2[i] === diceNumber) {
						 result  += dices2[i];
					 }
				 }
				 return result;
			 }
			 function diceListener(diceTextId, diceNumber) {
				document.getElementById(diceTextId).value = getTotalOfValue(diceNumber);
			 }

/*
             var frequency = new Array(6); // frequency[i] how many dices of value (i-1)
			 for (var i = 0; i<5; i++) {
				 frequency[dices[i] - 1]++; // dices[i] = 1: frequency[0]++
			 }
*/

             document.getElementById("AsButton").onclick = function() {
				 diceListener("AsText", 1);
			 }
			 document.getElementById("DeuxButton").onclick = function() {
				 diceListener("DeuxText", 2);
			 }
			 document.getElementById("TroisButton").onclick = function() {
				 diceListener("TroisText", 3);
			 }
			 document.getElementById("QuatreButton").onclick = function() {
				 diceListener("QuatreText", 4);
			 }
			 document.getElementById("CinqButton").onclick = function() {
				 diceListener("CinqText", 5);
			 }
			 document.getElementById("SixButton").onclick = function() {
				 diceListener("SixText", 6);
			 }
			 
			 function TSH () {
				 var s_tsh = 0;
				 var r1 = Number(document.getElementById("AsText").value);
				 var r2 = Number(document.getElementById("DeuxText").value);
				 var r3 = Number(document.getElementById("TroisText").value);
				 var r4 = Number(document.getElementById("QuatreText").value);
				 var r5 = Number(document.getElementById("CinqText").value);
				 var r6 = Number(document.getElementById("SixText").value);
				 s_tsh = Number(r1 + r2 +r3 + r4 + r5 + r6); 
				 return s_tsh;
			 }

			 function sumDice () {
				 var res = 0;
				 for  (var i = 0; i  < 5; i++) {
					 res  += dices2[i];
				 }
				 return res;
			 }
			 document.getElementById("TSHButton").onclick = function() {
				document.getElementById("TotalSectionHauteText").value = TSH();
			 }


			 document.getElementById("BrelanButton").onclick = function() {
				 var count = 0;
				 for (var i = 0; i < 5; i++) {
					 for (var j = i + 1; j < 5; j++) {
						 if (dices2[i] == dices2[j]) {
							 count ++;
						 }
					 }
				 }
				 if (count > 2) {
					document.getElementById("BrelanText").value = sumDice();
				 } else {
					document.getElementById("BrelanText").value = 0;
				 }
			 }

			 document.getElementById("CareeButton").onclick = function() {
				var count = 0;
				 for (var i = 0; i < 5; i++) {
					 for (var j = i + 1; j < 5; j++) {
						 if (dices2[i] == dices2[j]) {
							 count ++;
						 }
					 }
				 }
				 if (count > 5) {
					document.getElementById("CareeText").value = sumDice();
				 } else {
					document.getElementById("CareeText").value = 0;
				 }
			 }

			 function pair () {
				var c = 0;
				var count = 0;
				 for (var i = 0; i < 5; i++) {
					 for (var j = i + 1; j < 5; j++) {
						 if (dices2[i] == dices2[j]) {
							 count ++;
						 }
					 }
				 }
				 if (count >= 1) {
					 c = 1;
				 }
				 return c;
			 }
			 function b() {
				var res = 0; 
				var count = 0;
				 for (var i = 0; i < 5; i++) {
					 for (var j = i + 1; j < 5; j++) {
						 if (dices2[i] == dices2[j]) {
							 count ++;
						 }
					 }
				 }
				 if (count > 2) {
					res = 1;
				 }
				 return res;
			 }
			 document.getElementById("FullButton").onclick = function() {
				var r = false;
		 		for (var i = 0; i < 5; i++) {
					 if (b() == 1 && pair() == 1) {
						 r = true;
					 }
				}
				if (r == true) {
					document.getElementById("FullText").value = 25;
				} else {
					document.getElementById("FullText").value = 0;
				}
			 }

			 document.getElementById("PSuiteButton").onclick = function() {
				var c1 = true;
				var c2 = true;
				var c3 = true;
		 		for (var i = 1; i <= 4; i++) {
					 if (dices2[i] != i) {
						 c1 = false;
					 }
					 if (dices2[i] != (i+1) ) {
						 c2 = false;
					 }
					 if (dices2[i] != (i+2) ) {
						 c3 = false;
					 }
				}
				var c4 = true;
				var c5 = true;
				var c6 = true;
				for (var i = 2; i <= 5; i++) {
					if (dices2[i] != (i-1) ) {
						 c4 = false;
					 }
					 if (dices2[i] != i) {
						 c5 = false;
					 }
					 if (dices2[i] != (i+1) ) {
						 c6 = false;
					 }
				}
				if (c1 == true || c2 == true || c3 == true || c4 == true || c5 == true || c6 == true) {
					document.getElementById("PSuiteText").value = 30;
				} else {
					document.getElementById("PSuiteText").value = 0;
				}				
			 }
			 document.getElementById("GSuiteButton").onclick = function() {
				var c1 = true;
				var c2 = true;
				 for (var i = 1; i <= 5; i++) {
					if (dices[i] != i) {
						c1 = false;
					}
					if (dices[i] != (i + 1)) {
						c2 = false;
					}
				 }
				 if (c1 == true || c2 == true) {
					document.getElementById("GSuiteText").value = 40;
				 }
				 else {
					document.getElementById("GSuiteText").value = 0;					
				 }
			 }

			 document.getElementById("YahtzeeButton").onclick = function() {
				for (var i = 0; i < 5; i++) {
					if (dices2[0] == dices2[1] && dices2[0] == dices2[2] && dices2[0] == dices2[3] && dices2[0] == dices2[4]) {
						document.getElementById("YahtzeeText").value = 50;
					} else {
					document.getElementById("YahtzeeText").value = 0;
					}
				}
			 }
			 document.getElementById("ChanceButton").onclick = function() {
				document.getElementById("ChanceText").value = sumDice();
			 }

			 function TSB () {
				 var tsb = 0;
				 var r1 = Number(document.getElementById("BrelanText").value);
				 var r2 = Number(document.getElementById("CareeText").value);
				 var r3 = Number(document.getElementById("FullText").value);
				 var r4 = Number(document.getElementById("PSuiteText").value);
				 var r5 = Number(document.getElementById("GSuiteText").value);
				 var r6 = Number(document.getElementById("YahtzeeText").value);
				 var r7 = Number(document.getElementById("ChanceText").value);
				 tsb = Number(r1 + r2 +r3 + r4 + r5 + r6 + r7);
				 return tsb;
			 }
			 document.getElementById("TSBButton").onclick = function() {
				document.getElementById("TotalSectionBaseText").value = TSB();
			 }
			 function ST () {
				 var st = 0;
				 var r1 = Number(document.getElementById("TotalSectionHauteText").value);
				 var r2 = Number(document.getElementById("TotalSectionBaseText").value);
				 st = r1 + r2;
				 return st;
			 }
			 document.getElementById("TotalButton").onclick = function() {
				document.getElementById("TotalText").value = ST();
			 }

		</script>

	</body>
</html>