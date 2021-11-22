function devarsh()
{
	var app=document.getElementById('app').value;
	var stu=document.getElementById('fullName').value;
	var email=document.getElementById('email').value;
	var cnumber=document.getElementById('number').value;
	//var dob=document.getElementById('dob').value;
	//var gender=document.getElementById('').value;
	var adhar=document.getElementById('aadhar').value;
	var fname=document.getElementById('fName').value;
	var mname=document.getElementById('mName').value;
	//var cat=document.getElementById('category').value;
	//var reli=document.getElementById('religionDrop').value;
	var nati=document.getElementById('nationality').value;
	var adetails=document.getElementById('pAddress').value;
	//var state=document.getElementById('stateTxt1').value;
	var city=document.getElementById('pCity').value;
	var pincode=document.getElementById('pPincode').value;
	//var Discipline=document.getElementById('program').value;
	//var Programme=document.getElementById('course').value;
	//var Specialization=document.getElementById('stream').value;
	//var Status=document.getElementById('tenBoardTxt').value;
	var Board=document.getElementById('tenBoardTxt').value;
	//var Percentage=document.getElementById('tenCGPA').value;



	if(app=="")
	{
		document.getElementById('sapp').innerHTML="enter application no";
		document.getElementById('all').innerHTML="enter apllication number";
		return false;
	}
	if(stu=="")
	{
		document.getElementById('ctl08').innerHTML="enter student name";
		document.getElementById('all').innerHTML="enter student name";
		return false;
	}
	if(email=="")
	{
		document.getElementById('ctl09').innerHTML="enter email";
		document.getElementById('all').innerHTML="enter email";
		return false;
	}
	if(cnumber=="")
	{
		document.getElementById('ctl10').innerHTML="enter contact number";
		document.getElementById('all').innerHTML="enter contact number";
		return false;
	}
	// if(bob=="")
	// {
	// 	document.getElementById('ctl11').innerHTML="enter student name";
		//document.getElementById('all').innerHTML="enter student name";
	// 	return false;
	// }
	if(adhar=="")
	{
		document.getElementById('ctl13').innerHTML="enter adhar number";
		document.getElementById('all').innerHTML="enter adhar number";
		return false;
	}
	if(fname=="")
	{
		document.getElementById('ctl14').innerHTML="enter father name";
		document.getElementById('all').innerHTML="Enter Father name";
		return false;
	}
	if(mname=="")
	{
		document.getElementById('ctl15').innerHTML="enter mother name";
		document.getElementById('all').innerHTML="enter mother name";
		return false;
	}
	// if(cat=="")
	// {
	// 	document.getElementById('ctl16').innerHTML="select category";
	//	document.getElementById('all').innerHTML="select category";
	// 	return false;
	// }
	// if(reli=="")
	// {
	// 	document.getElementById('ctl17').innerHTML="select religion";
	//	document.getElementById('all').innerHTML="Select religion";
	// 	return false;
	// }
	if(nati=="")
	{
		document.getElementById('ctl18').innerHTML="select nationality";
		document.getElementById('all').innerHTML="Select nationality";
		return false;
	}
	if(adetails=="")
	{
		document.getElementById('ctl19').innerHTML="Select Aaddress";
		document.getElementById('all').innerHTML="Select Aaddress";
		return false;
	}
	// if(state=="")
	// {
	// 	document.getElementById('ctl20').innerHTML="Select state";
	// 	document.getElementById('all').innerHTML='select state';
	// 	return false;
	// }
	if(city=="")
	{
		document.getElementById('ctl21').innerHTML="enter city";
		document.getElementById('all').innerHTML="enter city";
		return false;
	}
	if(pincode=="")
	{
		document.getElementById('ctl22').innerHTML="enter pin code";
		document.getElementById('all').innerHTML="enter pin code";
		return false;
	}
	// if(Discipline=="")
	// {
	// 	document.getElementById('ctl24').innerHTML="select Discipline";
	// 	document.getElementById('all').innerHTML="select Discipline";
	// 	return false;
	// }
	// if(Programme=="")
	// {
	// 	document.getElementById('ctl25').innerHTML="enter programm name";
	// 	document.getElementById('all').innerHTML="enter programm name";
	// 	return false;
	// }
	// if(Specialization=="")
	// {
	// 	document.getElementById('ctl26').innerHTML="enter Specialization";
	// 	document.getElementById('all').innerHTML="enter Specialization";
	// 	return false;
	// }
	// if(Status=="")
	// {
	// 	document.getElementById('tenPassDropValid').innerHTML="select states";
	// 	document.getElementById('all').innerHTML="select states";
	// 	return false;
	// }
	if(Board=="")
	{
		document.getElementById('tenBoardTxtValid').innerHTML="Select Board";
		document.getElementById('tenBoardTxt').innerHTML="selet board";
		return false;
	}
	// if(Percentage=="")
	// {
	// 	document.getElementById('tenCGPA').innerHTML="enter pr";
	// 	document.getElementById('tenCGPAValid').innerHTML="enter pr";
	// 	return false;
	// }



	


	
	return true;
}