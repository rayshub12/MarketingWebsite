// Form Validator
// Created on : 13/10/2004
// Last Modified on : 14/10/2004

function Form1_Validator(theForm)
{

// allow ONLY alphanumeric keys, no symbols or punctuation
// this can be altered for any "checkOK" string you desire

// check if first_name field is blank
if (theForm.first_name.value == "")
{
alert("First Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.first_name.focus();
return (false);
}
else
{
if (!isProper(theForm.first_name,"First Name"))
return false;
}

// check if last_name field is blank

if (theForm.last_name.value == "")
{
alert("Last Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.last_name.focus();
return (false);
}
else
{
if (!isProper(theForm.last_name,"Last Name"))
return false;
}

// check if job_title field is blank

if (theForm.job_title.value == "")
{
alert("Job Title: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.job_title.focus();
return (false);
}
else
{
if (!isProper(theForm.job_title,"Job Title"))
return false;
}

// check if company field is blank

if (theForm.company.value == "")
{
alert("Company Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.company.focus();
return (false);
}
else
{
if (!isProper(theForm.company,"Company"))
return false;
}

// check if email field is blank
if (theForm.email.value == "")
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}


/*
// test if valid email address, must have @ and .
var checkEmail = "@.";
var checkStr = theForm.email.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
	// if both the @ and . were in the string
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}
*/

if (theForm.phone_no.value == "")
{
alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}
else
{
if (!isProper(theForm.phone_no,"Phone No."))
return false;
}

/*
var checkOK = "0123456789";
var checkStr = theForm.phone_no.value;
var allValid = true;
var allNum = "";
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkOK.length;  j++)
if (ch == checkOK.charAt(j))
break;
if (j == checkOK.length)
{
allValid = false;
break;
}
if (ch != ",")
allNum += ch;
}
if (!allValid)
{
alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}
*/

if (!isProper(theForm.street,"Address"))
return false;


if (theForm.city.value == "")
{
alert("City: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.city.focus();
return (false);
}
else
{
if (!isProper(theForm.city,"City"))
return false;
}

if (theForm.state.value == "")
{
alert("State: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.state.focus();
return (false);
}
else
{
if (!isProper(theForm.state,"State"))
return false;
}
if (theForm.country.value == "")
{
alert("Country: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.country.focus();
return (false);
}
else
{
if (!isProper(theForm.country,"country"))
return false;
}


}



//********************Validation for "Subscribe to free Updates"*****************************



function Form10_Validator(theForm)
{
// allow ONLY alphanumeric keys, no symbols or punctuation
// this can be altered for any "checkOK" string you desire

// check if first_name field is blank
if ((theForm.first_name.value == "") || (theForm.first_name.value == "Name"))
{
alert("First Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.first_name.focus();
return (false);
}

// check if last_name field is blank

if ((theForm.last_name.value == "") || (theForm.last_name.value == "Last Name"))
{
alert("Last Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.last_name.focus();
return (false);
}

// check if company field is blank

if ((theForm.company.value == "") || (theForm.company.value == "Company"))
{
alert("Company Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.company.focus();
return (false);
}

// check if email field is blank

if ((theForm.emailfrom.value == "") || (theForm.company.value == "Email"))
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}


// test if valid email address, must have @ and .
var checkEmail = "@.";
var checkStr = theForm.emailfrom.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
	// if both the @ and . were in the string
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.emailfrom.focus();
return (false);
}
}

// validations for forms under Pirchase report,TOC ,PDF DOwnlaod




function Form101_Validator(theForm)
{

// allow ONLY alphanumeric keys, no symbols or punctuation
// this can be altered for any "checkOK" string you desire

// check if first_name field is blank
if (theForm.first_name.value == "")
{
alert("First Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.first_name.focus();
return (false);
}
else
{
if (!isProper(theForm.first_name,"First Name"))
return false;
}

// check if last_name field is blank

if (theForm.last_name.value == "")
{
alert("Last Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.last_name.focus();
return (false);
}
else
{
if (!isProper(theForm.last_name,"Last Name"))
return false;
}

// check if job_title field is blank

if (theForm.job_title.value == "")
{
alert("Job Title: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.job_title.focus();
return (false);
}
else
{
if (!isProper(theForm.job_title,"Job Title"))
return false;
}

// check if company field is blank

if (theForm.company.value == "")
{
alert("Company Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.company.focus();
return (false);
}
else
{
if (!isProper(theForm.company,"Company"))
return false;
}

// check if email field is blank

if (theForm.email.value == "")
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}


// test if valid email address, must have @ and .
var checkEmail = "@.";
var checkStr = theForm.email.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
	// if both the @ and . were in the string
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}


if (theForm.phone_no.value == "")
{
alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}
else
{
if (!isProper(theForm.phone_no,"Phone No"))
return false;
}


// only allow numbers to be entered
var checkOK = "0123456789";
var checkStr = theForm.phone_no.value;
var allValid = true;
var allNum = "";
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkOK.length;  j++)
if (ch == checkOK.charAt(j))
break;
if (j == checkOK.length)
{
allValid = false;
break;
}
if (ch != ",")
allNum += ch;
}
if (!allValid)
{
alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}

if (theForm.country.value == "")
{
alert("Country: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.country.focus();
return (false);
}
else
{
if (!isProper(theForm.country,"Country"))
return false;
}

if (theForm.interest.value == "")
{
alert("Specific Interests: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.interest.focus();
return (false);
}
else
{
if (!isProper(theForm.interest,"Specific Interest"))
return false;
}

}


function Form360_Validator(theForm)
{
	
if (theForm.fname.value == "")
{
alert("First Name: Enter Your First Name"); //alert("First Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.fname.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.first_name,"First Name"))
//return false;
//}


// check if last_name field is blank
if (theForm.lname != undefined )
{
if (theForm.lname.value == "")
{
alert("Last Name: Enter Your Last Name"); //alert("Last Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.lname.focus();
return (false);
}
}
//else
//{
//if (!isProper(theForm.last_name,"Last Name"))
//return false;
//}


// check if email field is blank
if (theForm.email.value == "")
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}

// test if valid email address, must have @ and .
var checkEmail = "@.";
var checkStr = theForm.email.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
	// if both the @ and . were in the string
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}

// check if job_title field is blank

if (theForm.job_title.value == "")
{
alert("Job Title: Enter Your Designation In Your Organisation"); //alert("Job Title: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.job_title.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.job_title,"Job Title"))
//return false;
//}

// check if company field is blank

if (theForm.company.value == "")
{
alert("Company Name: Enter The name Of Your Organisation"); //alert("Company Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.company.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.company,"Company"))
//return false;
//}

if (theForm.phone_no.value == "")
{
alert("Phone No: Enter Your Phone Number with no signs other than '+', '_' and '-'"); //alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.phone_no,"Phone Number"))
//return false;
//}

var checkOK = "0123456789 +_-()";
var checkStr = theForm.phone_no.value;
var allValid = true;
var allNum = "";
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkOK.length;  j++)
if (ch == checkOK.charAt(j))
break;
if (j == checkOK.length)
{
allValid = false;
break;
}
if (ch != ",")
allNum += ch;
}
if (!allValid)
{
alert("Phone No: Enter Your Phone Number with no signs other than '+', '_' and '-'"); //alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}

if (theForm.country.value == "Select Country")
{
	alert("Country: Select The Name Of Your Country"); //alert("Country: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
		theForm.country.focus();
			return (false);
}

//else
//{
//	if (!isProper(theForm.country,"Country"))
//		return false;
//}


if (theForm.acode != undefined )
{
if (theForm.acode.value == "")
{
alert("Area Code: Enter The Postal Code Of Your Area");
theForm.acode.focus();
return (false);
}
}
//else
//{
//if (!isProper(theForm.acode,"Area Code"))
//return false;
//}

if (theForm.rtitle != undefined )
{
if (theForm.rtitle.value == "")
{
alert("Report Name: Enter Report Name");
theForm.rtitle.focus();
return (false);
}
}


//if (!isProper(theForm.intrest,"Interest"))
//return false;



}





function FormNew360_Validator(theForm)
{
	
if (theForm.first_name.value == "")
{
alert("First Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.first_name.focus();
return (false);
}
else
{
if (!isProper(theForm.first_name,"First Name"))
return false;
}

// check if last_name field is blank

if (theForm.last_name.value == "")
{
alert("Last Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.last_name.focus();
return (false);
}
else
{
if (!isProper(theForm.last_name,"Last Name"))
return false;
}

// check if email field is blank
if (theForm.email.value == "")
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}

// test if valid email address, must have @ and .
var checkEmail = "@.";
var checkStr = theForm.email.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
	// if both the @ and . were in the string
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}

// check if job_title field is blank

if (theForm.job_title.value == "")
{
alert("Job Title: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.job_title.focus();
return (false);
}
else
{
if (!isProper(theForm.job_title,"Job Title"))
return false;
}

// check if company field is blank

if (theForm.company.value == "")
{
alert("Company Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.company.focus();
return (false);
}
else
{
if (!isProper(theForm.company,"Company"))
return false;
}

if (theForm.phone_no.value == "")
{
alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}
else
{
if (!isProper(theForm.phone_no,"Phone No"))
return false;
}


var checkOK = "0123456789";
var checkStr = theForm.phone_no.value;
var allValid = true;
var allNum = "";
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkOK.length;  j++)
if (ch == checkOK.charAt(j))
break;
if (j == checkOK.length)
{
allValid = false;
break;
}
if (ch != ",")
allNum += ch;
}
if (!allValid)
{
alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}
if (theForm.country.value == "")
{
alert("Country: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.country.focus();
return (false);
}
else
{
if (!isProper(theForm.country,"Country"))
return false;
}



if (theForm.acode.value == "")
{
alert("Area Code: Country: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.acode.focus();
return (false);
}
else
{
if (!isProper(theForm.acode,"Area Code"))
return false;
}


if (theForm.rtitle.value == "")
{
alert("Report Name: Enter Report Name");
theForm.rtitle.focus();
return (false);
}



if (!isProper(theForm.intrest,"Interest"))
return false;



}








 /*//Custom Research Services*/
function Form1360_Validator(theForm)
{
	if (theForm.fname.value == "")
{
alert("First Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.fname.focus();
return (false);
}
else
{
if (!isProper(theForm.fname,"First Name"))
return false;
}

// check if last_name field is blank

if (theForm.lname.value == "")
{
alert("Last Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.lname.focus();
return (false);
}
else
{
if (!isProper(theForm.lname,"Last Name"))
return false;
}

// check if email field is blank
if (theForm.email.value == "")
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}


// test if valid email address, must have @ and .
var checkEmail = "@.";
var checkStr = theForm.email.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
	// if both the @ and . were in the string
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}

// check if job_title field is blank

if (theForm.job_title.value == "")
{
alert("Job Title: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.job_title.focus();
return (false);
}
else
{
if (!isProper(theForm.job_title,"Designation"))
return false;
}

// check if company field is blank

if (theForm.company.value == "")
{
alert("Company Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.company.focus();
return (false);
}
else
{
if (!isProper(theForm.company,"Company"))
return false;
}

if (theForm.phone_no.value == "")
{
alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}
else
{
if (!isProper(theForm.phone_no,"Phone No."))
return false;
}

var checkOK = "0123456789";
var checkStr = theForm.phone_no.value;
var allValid = true;
var allNum = "";
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkOK.length;  j++)
if (ch == checkOK.charAt(j))
break;
if (j == checkOK.length)
{
allValid = false;
break;
}
if (ch != ",")
allNum += ch;
}
if (!allValid)
{
alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}
if (theForm.country.value == "")
{
alert("Country: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.country.focus();
return (false);
}
else
{
if (!isProper(theForm.country,"Country"))
return false;
}

if (theForm.acode.value == "")
{
alert("Area Code: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.acode.focus();
return (false);
}
else
{
if (!isProper(theForm.acode,"Area Code"))
return false;
}

if (!isProper(theForm.spec,"Detailed Specifications"))
return false;



if (theForm.tframe.value == "")
{
alert("Time-Frame: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.tframe.focus();
return (false);
}
else
{
if (!isProper(theForm.tframe,"Time Frame"))
return false;
}



if (theForm.budget.value == "")
{
alert("Budget: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.budget.focus();
return (false);
}
else
{
if (!isProper(theForm.budget,"Budget"))
return false;
}

if (!isProper(theForm.tandd,"Time & Date"))
return false;

}

/*//This Is for Pdf Downlaod*/
function Form2360_Validator(theForm)
{
	if (theForm.first_name.value == "")
{
alert("First Name: Enter Your First Name"); //alert("First Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.first_name.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.first_name,"First Name"))
//return false;
//}


// check if last_name field is blank
if (theForm.last_name.value == "")
{
alert("Last Name: Enter Your Last Name"); //alert("Last Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.last_name.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.last_name,"Last Name"))
//return false;
//}


// check if email field is blank
if (theForm.email.value == "")
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}

// test if valid email address, must have @ and .
var checkEmail = "@.";
var checkStr = theForm.email.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
	// if both the @ and . were in the string
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
theForm.email.focus();
return (false);
}

// check if job_title field is blank

if (theForm.job_title.value == "")
{
alert("Job Title: Enter Your Designation In Your Organisation"); //alert("Job Title: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.job_title.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.job_title,"Job Title"))
//return false;
//}

// check if company field is blank

if (theForm.company.value == "")
{
alert("Company Name: Enter The name Of Your Organisation"); //alert("Company Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.company.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.company,"Company"))
//return false;
//}

if (theForm.phone_no.value == "")
{
alert("Phone No: Enter Your Phone Number with no signs other than '+', '_' and '-'"); //alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.phone_no,"Phone Number"))
//return false;
//}

var checkOK = "0123456789 +_-()";
var checkStr = theForm.phone_no.value;
var allValid = true;
var allNum = "";
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkOK.length;  j++)
if (ch == checkOK.charAt(j))
break;
if (j == checkOK.length)
{
allValid = false;
break;
}
if (ch != ",")
allNum += ch;
}
if (!allValid)
{
alert("Phone No: Enter Your Phone Number with no signs other than '+', '_' and '-'"); //alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.phone_no.focus();
return (false);
}

if (theForm.country.value == "Select Country")
{
	alert("Country: Select The Name Of Your Country"); //alert("Country: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
		theForm.country.focus();
			return (false);
}

//else
//{
//	if (!isProper(theForm.country,"Country"))
//		return false;
//}

if (theForm.Budget.value == "Select") {
    alert("Budget: Select Your Budget"); //alert("Country: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
    theForm.Budget.focus();
    return (false);
}
if (theForm.Time.value == "") {
    alert("Time: Enter Best Time to Contact!"); //alert("Country: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
    theForm.Time.focus();
    return (false);
}
if (theForm.Industryinfo.value == "") {
    alert("Industry Info: Specify your Industry"); //alert("Country: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
    theForm.Industryinfo.focus();
    return (false);
}

}



function changeMenuImage(imgName,linkPath)
{

   var elmeImageHolder = document.getElementById(imgName);
   
   //alert('imgName' + imgName + 'linkPath'+ linkPath);
   if(imgname = "menuImage1")
   {
//alert("elmeImageHolder.src" + elmeImageHolder.src);
      elmeImageHolder.src=linkPath;     
   }
   else
   {   if(imgname = "menuImage2")
			{
			// alert("elmeImageHolder.src" + elmeImageHolder.src);
			 elmeImageHolder.src=linkPath;			
			}
			else
			{
					if(imgname = "menuImage3")
					{
					 //alert("elmeImageHolder.src" + elmeImageHolder.src);
					 elmeImageHolder.src=linkPath;				
					}
			
			}
   
   }
   
   

}

