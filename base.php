<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=iso-8859-2">
		<title>SSS of Genetics and Molecular Medicine</title>
		<link href="/Users/iboy/OneDrive/studia/informatyka/srodowisko pracy informatyka/website/ost/back.css" rel="stylesheet" type="text/css">	
	</head>
	
	<body>
		<table class="glowna" width="960" align="center">
			<tr>
				<td colspan="2" class="naglowek">
					SSS of Genetics and Molecular Medicine
				</td>
			</tr>

			<tr>
				<td width="200" height="400" valign="top">
					<table cellspacing="0"  width="200">
						<tr>
							<td class="menu_t"><a class="menu_l" href="base.html?pg=1">Home</a> </td>
						</tr>

						<tr>
							<td class="menu_t"><a class="menu_l" href="index.php?pg=2">Statistics</a></td>
						</tr>
						
						<tr>
							<td class="menu_t"><a class="menu_l" href="index.php?pg=3">Add a member</a></td>
						</tr>
						
						<tr>
							<td class="menu_t"><a class="menu_l" href="index.php?pg=4">Edit members list</a></td>
						</tr>
						
						<tr>
							<td class="menu_t"><a class="menu_l" href="index.php?pg=5">Delete student</a></td>
						</tr>
					</table>
				</td>
				
				<td valign="top" class="tresc">
					<?php
					if(!isset($_GET["pg"])) include("home.php");
					if($_GET["pg"]==1) include("home.php");
					if($_GET["id"]==2) include("wykaz.php");
					if($_GET["id"]==3) include("dodaj.php");
					if($_GET["id"]==4) include("edycja.php");
					if($_GET["id"]==5) include("usun.php");
					if($_GET["id"]==10) include("form1.php");
					if($_GET["id"]==11) include("wynik.php");
					?>
				</td>
			<tr>
				<td colspan="2" height="50">
					<p class="srodek">
						stopka
					</p>
				</td>
			</tr>
		</table>
	</body>
</html>


