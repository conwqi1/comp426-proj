<?php
  require_once ("config/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Find the Amazing Brewer</title>
	<link type="text/css" rel="stylesheet "href="index2.css" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="JS/jquery.cookie.js"></script>
    <script src="JS/index.js"></script>
</head>

<body background="http://www.peerfit.com/blog/wp-content/uploads/2013/06/beer.jpg">
	<div id="piaofublock">
		<button id = "disableBack" type="button">disable background</button>
	</div>

	<div class="top">
		<div id = "cookies">
		</div>
		<form id = "form1">
			<h2>Find out the great brewers!</h2>
			Enter your city here: 
			<input type="text" id="city" />
			<br/><br/>
			Price Range:
			<select id = "price" name="Price Range">
				<option value="volvo">5-10</option>
				<option value="saab">11-15</option>
				<option value="fiat">16-20</option>
				<option value="audi">21-25</option>
			</select>
			Rating:
			<select id = "rate" name="Price Range">
				<option value="5">5</option>
				<option value="4">4</option>
				<option value="3">3</option>
				<option value="2">2</option>
			</select>
			Distance:
			<select id = "dist" name="Price Range">
				<option value="volvo">next block</option>
				<option value="saab">several blocks</option>
				<option value="fiat">miles</option>
				<option value="audi">other state</option>
			</select>
			Style:
			<select id = "style" name="Price Range">
				<option value="volvo">wine</option>
				<option value="saab">beer</option>
				<option value="fiat">alcohol</option>
				<option value="audi">tea</option>
			</select>
			<br/><br/>
			<button id = "submission" type="submit">Search</button>
		</form>
	</div>

	<div class="centerleft">
		<table id = "centerLeftTable">
			<tr>
				<td>
				</td>
			</tr>
			<tr>
				<td><img src="http://3.bp.blogspot.com/_fXEFJ-weJmg/TUjFWHyKo9I/AAAAAAAAAhU/CbqETu1-H2A/s1600/Brewery+Vivant+-+January+27%252C+2011+074.jpg"></td>
			</tr>
			<tr>
				<td><img src="http://media-cdn.tripadvisor.com/media/photo-s/02/8f/c6/36/bold-city-brewery.jpg"></td>
			</tr>
			<tr>
				<td><img src="http://static.wixstatic.com/media/f90ea6_b1177bdc6c2d83f91d1579da666ecbac.jpg_srz_575_355_85_22_0.50_1.20_0.00_jpg_srz"></td>
			</tr>
			<tr>
				<td><img src="http://camraswl.org.uk/images/brewery_tap_ascot_ales_01.jpg"></td>
			</tr>
		</table>
	</div>

	<div class="centerright">
		<table id = "centerRightTable">
			<tr>
				<h2>Results</h2>  
				<div id = "outputBlk"></div>
			</tr>
		</table>
	</div>


	<div id = "xinDian">
		<form id = "form2">
			<h2>Tell us a new brewer</h2><br>
			Name
			<input id="name2" type="text" name="name" />
			Street
			<input id="street2" type="text" name="street" />
			City
			<input id="city2" type="text" name="city" />
			State
			<input id="state2" type="text" name="state" />
			<br/>
			<button id = "newBrewer" type="submit">upload</button>
		</form>
	</div>


<div class="bottom">
	<table id = "bottomTable">
		<tr>
			<td>About</td>   
			<td>Help </td>
			<td>More</td>
			<td>Contact Us</td>
		</tr>
	</table>
</div>

</body>

</html>