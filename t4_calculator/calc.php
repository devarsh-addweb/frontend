<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
	<style>
		
	
	input[type="button"]
	{
	width:80px;
	height:80px;
	border-radius: 5px;
	color:blue;	
	box-shadow: 3px 3px 5px 0px lightblue;
	font-size: 30px;
	color: black;

	}	
input[type="text"]
	{
	width:375px;
	height:70px;
	border-radius: 5px;
	color:black;
	background-color: lightblue;	
	text-align: right;
	font-size: 30px;
	box-shadow: 3px 3px 8px 0px lightblue;

	}
.Manish:hover span
{
	background-color: lightblue;
}

</style>
</head>
<body>
<center>
	<form name="zeel" id="Manish">
	<table bgcolor="grey" cellpadding="10" cellpadding="10" style="border-radius: 10px; margin-top: 100px;">

		<tr>
			<td colspan="4"> <center><b><font style="font-size:20px; color:lightsalmon;">Devarsh Scientific Calculator</font></b></center></td>
		</tr>
		
		<tr>
			<td colspan="4"> <input type="text" name="result" id="result"></td>
		</tr>
		<tr>
			 
				<td><input type="button" value="7" onclick="Manish.result.value+='7'"></td>
				<td><input type="button" name="8" value="8" onclick="Manish.result.value+='8'" >
				<td><input type="button" name="9" value="9" onclick="Manish.result.value+='9'" >
				<td><input type="button" name="+" value="+" onclick="Manish.result.value+='+'" style="background-color: dimgrey;">
			

		</tr>
		<tr>
			<td>
				<input type="button" name="4" value="4" onclick="Manish.result.value+='4'" >
				<td><input type="button" name="5" value="5" onclick="Manish.result.value+='5'">
				<td><input type="button" name="6" value="6" onclick="Manish.result.value+='6'" >
				<td><input type="button" name="-" value="-"  class="Manish" onclick="Manish.result.value+='-'" style="background-color: dimgrey;">
			</td>

		</tr>

		<tr>
			<td>
				<input type="button" name="1" value="1" onclick="Manish.result.value+='1'" >
				<td><input type="button" name="2" value="2" onclick="Manish.result.value+='2'" >
				<td><input type="button" name="3" value="3" onclick="Manish.result.value+='3'">
				<td><input type="button" name="" value="" class="Manish" onclick="Manish.result.value+='*'" style="background-color: dimgrey; color: ;">
			</td>
		</tr>
		<tr>
			<td>
				<input type="button" name="c" value="C"  class="Manish" onclick="Manish.result.value=' '" style="background-color: red; font-color:white;">
				<td><input type="button" name="0" value="0" onclick="Manish.result.value+='0'">
				<td><input type="button" name="=" value="=" class="Manish" onclick="Manish.result.value=eval(Manish.result.value)" style="background-color: dimgrey;">
				<td><input type="button" name="/" value="/"  class="Manish" style="background-color: dimgrey;">
			</td>
		</tr>
	
	</table>

</form>
</center>
</body>
</html>