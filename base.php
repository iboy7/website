<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=iso-8859-2">
		<title>SSS of Genetics and Molecular Medicine</title>
		<link href="back.css" rel="stylesheet" type="text/css">	
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
							<td class="menu_t"><a class="menu_l" href="base.php?pg=1">Home</a> </td>
						</tr>

						<tr>
							<td class="menu_t"><a class="menu_l" href="base.php?pg=2">Statistics</a></td>
						</tr>
						
						<tr>
							<td class="menu_t"><a class="menu_l" href="base.php?pg=3">Add a member</a></td>
						</tr>
						
						<tr>
							<td class="menu_t"><a class="menu_l" href="base.php?pg=4">Edit members list</a></td>
						</tr>
						
						<tr>
							<td class="menu_t"><a class="menu_l" href="base.php?pg=5">Delete member</a></td>
						</tr>
					</table>
				</td>
				
				<td valign="top" class="tresc">
					<?php
					if(!isset($_GET["pg"])) include("home.php");
					if($_GET["pg"]==1) include("home.php");
					if($_GET["pg"]==2) include("stats.php");
					if($_GET["pg"]==3) include("addn.php");
					if($_GET["pg"]==31) include("adds.php");
					if($_GET["pg"]==4) include("search.php");
					if($_GET["pg"]==41) include("editsub.php");
					if($_GET["pg"]==42) include("apply.php");
					if($_GET["pg"]==5) include("erase.php");
					if($_GET["pg"]==51) include("erasescrip.php");
					?>
				</td>
			<tr>
				<td colspan="2" height="50">
					<p class="prawa">
						Author: Marcin Kaszkowiak © <br>
						All rights reserved.
					</p>
				</td>
			</tr>
		</table>
	</body>
</html>


