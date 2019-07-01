// JavaScript Document

function Form201_Validator(theForm)
{
	
if (theForm.email.value == "")
{
alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com"); //alert("Email Id: Enter (a to z, 0 to 9, @.); no signs such as +, -, ( ), # , blank space");
theForm.email.focus();
return (false);
}

//
//// test if valid email address, must have @ and .
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

if (theForm.pwd.value == "")
{
alert("Enter Password");
theForm.pwd.focus();
return (false);
}

if (theForm.pwd.value.length < 5)
{
	alert("Please enter atleast 5 character password");
	theForm.pwd.focus();
	return(false);
}

if(theForm.temppwd.value != theForm.pwd.value)
{
	alert("Password  and  Re-Enter Password Fields do not Match !!");
	theForm.temppwd.value = "";
	theForm.pwd.value = "";
	theForm.pwd.focus();
	return(false);
}

if (theForm.first_name.value == "")
{
alert("Enter Your First Name"); //alert("First Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), # , blank space");
theForm.first_name.focus();
return (false);
}
//else
//{
//	if (!isProper(theForm.first_name,"First Name"))
//        return false;
//}

if (theForm.last_name.value == "")
{
alert("Enter Your Last Name");
theForm.last_name.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.last_name,"Last Name"))
//return false;
//}


if (theForm.job_title.value == "")
{
alert("Job Title: Enter Your Designation In Your Organisation");
theForm.job_title.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.job_title,"Job Title"))
//return false;
//}


if (theForm.company.value == "")
{
alert("Company Name: Enter The name Of Your Organisation");
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
alert("Phone No: Enter Your Phone Number with no signs other than '+', '_' and '-'");
theForm.phone_no.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.phone_no,"Phone Number"))
//return false;
//}

if (theForm.Address.value == "")
{
alert("Address: Enter Your Postal Address");
theForm.Address.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.Address,"Address"))
//return false;
//}



if (theForm.zipcode.value == "")
{
alert("Zip Code: Enter The Postal Code Of Your Area");
theForm.zipcode.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.zipcode,"Zip Code"))
//return false;
//}


if (theForm.City.value == "")
{
alert("City: Enter The Name of Your City");
theForm.City.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.City,"City"))
//return false;
//}

if (theForm.State.value == "")
{
alert("State: Enter The Name of Your State");
theForm.State.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.State,"State"))
//return false;
//}

if (theForm.country.value == "Select Country")
{
alert("Please Select Appropriate Country");
theForm.country.focus();
return (false);
}
//else
//{
//if (!isProper(theForm.country,"Country"))
//return false;
//}

// only allow numbers to be entered
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
alert("Phone No: Enter Your Phone Number with no signs other than '+', '_' and '-'");
theForm.phone_no.focus();
return (false);
}


//if (theForm.interest.value == "")
//{
//alert("Specific Interests: Enter (a to z, 0 to 9); no signs such as +, -, ( ), #, blank space");
//theForm.interest.focus();
//return (false);
//}
switch (theForm.pcode.value)
{
case 'YGK68':
 return(true);
  break;
case 'JGB23':
  return(true);
 break;
case 'LND53':
  return(true);
  break;
case 'VAS17':
  return(true);
  break;
case 'TFD79':
  return(true);
  break;
case 'XGD90':
  return(true);
  break;
case 'BVL39':
  return(true);
  break;
case '':
  return(true);
  break;
default:
 alert("Wrong Promotion code");
  return false;
}
theForm.submit.value='Please wait..';
theForm.submit.disabled=true;
}



function isProper(formField,fieldLabel) 
{
var result = true;
var string = formField.value.length;
var stringValue = formField.value;
//var iChars = "*|,\":<>[]{}`\';()@&$#%";
var iChars = "<>";
var iCharsCount = iChars.length;
/*alert("res"+ result +" str "+ string + "ichars" +iChars )*/
for (var i = 0; i < string; i++) 
{
	/*alert("i "+ i + " iChars.indexOf(stringValue.charAt(i)  " + iChars.indexOf(stringValue.charAt(i))+"result"+result)*/
	if (iChars.indexOf(stringValue.charAt(i)) != -1)
	{
	result = false;
	}
	
}

if (result == false)
{
alert(fieldLabel +'": Enter (a to z, 0 to 9); no signs such as +, -, ( ), #, blank space"'); 
result = false;
}
else
{
result = true;
}

return result;
} 


function Form301_Validator(theForm)
{
	if (theForm.usr.value == "")
	{
		alert("Login field cannot be kept blank..");
		theForm.usr.focus();
		return(false);
	}
	
	if (theForm.lgnpwd.value == "")
	{
		alert("Password field cannot be kept blank..");
		theForm.lgnpwd.focus();
		return(false);
	}
	
	if (theForm.usr.value == "")
{
alert("Please enter a value for the \"Login\" field.");
theForm.usr.focus();
return (false);
}
//
//// test if valid email address, must have @ and .
var checkEmail = "@.";
var checkStr = theForm.usr.value;
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
alert("The Login field must contain an @ and .");
theForm.usr.focus();
return (false);
}

if (theForm.lgnpwd.value == "")
{
alert("You must enter Password.");
theForm.lgnpwd.focus();
return (false);
}

if (theForm.lgnpwd.value.length < 5)
{
	alert("Password can be minimum 5 characters!");
	theForm.lgnpwd.focus();
	return(false);
}

theForm.submit.value='Please wait..';
theForm.submit.disabled=true;
}

function Form401_Validator(theForm)
{

if (theForm.first_name.value == "")
{
alert("First Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), #, blank space");
theForm.first_name.focus();
return (false);
}

if (theForm.last_name.value == "")
{
alert("Last Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), #, blank space");
theForm.last_name.focus();
return (false);
}


if (theForm.job_title.value == "")
{
alert("Designation: Enter (a to z, 0 to 9); no signs such as +, -, ( ), #, blank space");
theForm.job_title.focus();
return (false);
}
if (theForm.company.value == "")
{
alert("Company Name: Enter (a to z, 0 to 9); no signs such as +, -, ( ), #, blank space");
theForm.company.focus();
return (false);
}
if (theForm.phone_no.value == "")
{
alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), #  blank space");
theForm.phone_no.focus();
return (false);
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
alert("Phone No: Enter (0 to 9); no signs such as +, -, ( ), #, blank space");
theForm.phone_no.focus();
return (false);
}


if (theForm.Address.value == "")
{
alert("Address: Enter (a to z, 0 to 9); no signs such as +, -, ( ), #, blank space");
theForm.Address.focus();
return (false);
}
else
{
if (!isProper(theForm.Address,"Address"))
return false;
}



if (theForm.zipcode.value == "")
{
alert("Zip Code: Enter (a to z,0 to 9); no signs such as +, -, ( ), #, blank space");
theForm.zipcode.focus();
return (false);
}
else
{
if (!isProper(theForm.zipcode,"Zip Code"))
return false;
}


if (theForm.City.value == "")
{
alert("City: Enter (a to z, 0 to 9); no signs such as +, -, ( ), #, blank space");
theForm.City.focus();
return (false);
}
else
{
if (!isProper(theForm.City,"City"))
return false;
}

if (theForm.State.value == "")
{
alert("State: Enter (a to z, 0 to 9); no signs such as +, -, ( ), #, blank space");
theForm.State.focus();
return (false);
}
else
{
if (!isProper(theForm.State,"State"))
return false;
}

if (theForm.country.value == "Select Country")
{
alert("Please Select appropriate country in Country field");
theForm.country.focus();
return (false);
}
else
{
if (!isProper(theForm.country,"Country"))
return false;
}

switch (theForm.pcode.value)
{
case 'YGK68':
 return(true);
  break;
case 'JGB23':
  return(true);
 break;
case 'LND53':
  return(true);
  break;
case 'VAS17':
  return(true);
  break;
case 'TFD79':
  return(true);
  break;
case 'XGD90':
  return(true);
  break;
case 'BVL39':
  return(true);
  break;
case '':
  return(true);
  break;
default:
 alert("Wrong Promotion code");
  return false;
}
theForm.submit.value='Please wait..';
theForm.submit.disabled=true;
}


