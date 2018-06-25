<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Org</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
	.container2{padding-right:0px;
				padding-left:0px;
				margin-right:auto;
				margin-left:auto;
				}
	#container2{height:50px;
				
	}
	.bg{
	 background-image: url("1.jpg");
    background-color: #cccccc;
			}
	.hr2 { 
    display: block;
    margin-top: -1.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
}	

	.hr3 { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 3px;
	color: #0000FF;
}	

	.hr4{
		color: #0085ff;
	background-color: #0085ff;
height: 5px;
		
	}
	.p {
    font-family: "Times New Roman", Times, serif;
}

	
	
	</style>
  </head>
  <body class="bg">
  
  <div class="container2" >
  <div class="panel panel-primary">
    <div class="panel-heading" id="container2">Student Organization</div>  
  </div>
</div>

	<div class="container">
			<div class="row">
			  <div class="col-md-12">
				<hr class="hr2">
			  </div>
			    <div class="col-md-12">
				<h1 align="center" class="p">Student Organization</h1>
				<hr class="hr4">
			  </div>  
			</div>
			<div class="row">
			<div class="col-md-2">
				<h2 class="p"><a href="index.php" class="active">Home</a></h2>
			  </div>
			<div class="col-md-2">
				<h2 class="p"><a href="about.php">About</a></h2>
			  </div>
			  <div class="col-md-2">
				<h2 class="p"><a href="index.php">Registration</a></h2>
			  </div>
			  <div class="col-md-2">
				<h2 class="p"><a href="index.php">Calendar of Event</a></h2>
			  </div>
			  <div class="col-md-2">
				<h2 class="p"><a href="index.php">Resource</a></h2>
			  </div>
			  <div class="col-md-2">
				<h2 class="p"><a href="#">Contact</a></h2>
			  </div>
			</div>
	</div>
	
	<div class="container">
	
	<div class="col-md-9">
	
	
		<form>
			<h3> Registration </h3><br><br>
			<b>First name:</b><br>
			<input type="text" name="firstname"><br>
			<b>Last name:</b><br>
			<input type="text" name="lastname"><br>
			<b>Course:</b><br>
			<input type="text" name="course"><br><br>
			<b>Year :</b><br>
			<input type="radio" name="year" value="first" checked> 1st
			<input type="radio" name="year" value="second"> 2nd
			<input type="radio" name="year" value="third"> 3rd
			<input type="radio" name="year" value="third"> 3rd
			<input type="radio" name="year" value="fifth"> 5th<br><br>
			<b>Gender :</b> <br>
			<input type="radio" name="gender" value="male" checked> Male
			<input type="radio" name="gender" value="female"> Female<br><br>
			<b>Birthday :</b> <br>
			Month
			<select name="Birthday">
			<option value="jan">January</option>
			<option value="feb">February</option>
			<option value="mar">March</option>
			<option value="apr">April</option>
			<option value="may">May</option>
			<option value="jun">June</option>
			<option value="jul">July</option>
			<option value="aug">August</option>
			<option value="sep">September</option>
			<option value="oct">October</option>
			<option value="nov">November</option>
			<option value="dec">December</option>
			</select>
			
			
			Day 
					<select name='day' id='dayddl'>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>4</option>
					<option value='5'>5</option>
					<option value='6'>6</option>
					<option value='7'>7</option>
					<option value='8'>8</option>
					<option value='9'>9</option>
					<option value='10'>10</option>
					<option value='11'>11</option>
					<option value='12'>12</option>
					<option value='13'>13</option>
					<option value='14'>14</option>
					<option value='15'>15</option>
					<option value='16'>16</option>
					<option value='17'>17</option>
					<option value='18'>18</option>
					<option value='19'>19</option>
					<option value='20'>20</option>
					<option value='21'>21</option>
					<option value='22'>22</option>
					<option value='23'>23</option>
					<option value='24'>24</option>
					<option value='25'>25</option>
					<option value='26'>26</option>
					<option value='27'>27</option>
					<option value='28'>28</option>
					<option value='29'>29</option>
					<option value='30'>30</option>
					<option value='31'>31</option>
					</select>
			
			
			Year
			<select name='day' id='blah'>
				<option value='1947'>1947</option>
				<option value='1948'>1948</option>
				<option value='1949'>1949</option>
				<option value='1950'>1950</option>
				<option value='1951'>1951</option>
				<option value='1952'>1952</option>
				<option value='1953'>1953</option>
				<option value='1954'>1954</option>
				<option value='1955'>1955</option>
				<option value='1956'>1956</option>
				<option value='1957'>1957</option>
				<option value='1958'>1958</option>
				<option value='1959'>1959</option>
				<option value='1960'>1960</option>
				<option value='1961'>1961</option>
				<option value='1962'>1962</option>
				<option value='1963'>1963</option>
				<option value='1964'>1964</option>
				<option value='1965'>1965</option>
				<option value='1966'>1966</option>
				<option value='1967'>1967</option>
				<option value='1968'>1968</option>
				<option value='1969'>1969</option>
				<option value='1970'>1970</option>
				<option value='1971'>1971</option>
				<option value='1972'>1972</option>
				<option value='1973'>1973</option>
				<option value='1974'>1974</option>
				<option value='1975'>1975</option>
				<option value='1976'>1976</option>
				<option value='1977'>1977</option>
				<option value='1978'>1978</option>
				<option value='1979'>1979</option>
				<option value='1980'>1980</option>
				<option value='1981'>1981</option>
				<option value='1982'>1982</option>
				<option value='1983'>1983</option>
				<option value='1984'>1984</option>
				<option value='1985'>1985</option>
				<option value='1986'>1986</option>
				<option value='1987'>1987</option>
				<option value='1988'>1988</option>
				<option value='1989'>1989</option>
				<option value='1990'>1990</option>
				<option value='1991'>1991</option>
				<option value='1992'>1992</option>
				<option value='1993'>1993</option>
				<option value='1994'>1994</option>
				<option value='1995'>1995</option>
				<option value='1996'>1996</option>
				<option value='1997'>1997</option>
				<option value='1998'>1998</option>
				<option value='1999'>1999</option>
				<option value='2000'>2000</option>
				<option value='2001'>2001</option>
				<option value='2002'>2002</option>
				<option value='2003'>2003</option>
				<option value='2004'>2004</option>
				<option value='2005'>2005</option>
				<option value='2006'>2006</option>
				<option value='2007'>2007</option>
				<option value='2008'>2008</option>
				<option value='2009'>2009</option>
				<option value='2010'>2010</option>
				<option value='2011'>2011</option>
				<option value='2012'>2012</option>
				<option value='2013'>2013</option>
				<option value='2014'>2014</option>
				<option value='2015'>2015</option>
				<option value='2016'>2016</option>
				<option value='2017'>2017</option>
				
			</select><br><br>
			<b>Member Status :</b> <br>
			<input type="radio" name="status" value="new" checked> New
			<input type="radio" name="status" value="renew"> Renew<br><br><br><br>
			
			<input type="button" onclick="alert('Welcome!')" value="Submit">
			<br><br><br><br><br><br>

    
    </form>
	</div>
</body>
</html>
		</form>
	  

	
	</div>
	</div>
	
  
  
  </body>
  </html>