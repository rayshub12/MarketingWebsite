// JavaScript Document

//********************Validation for "Subscribe to free Updates"*****************************



function Form20_Validator(theForm)
{
// allow ONLY alphanumeric keys, no symbols or punctuation
// this can be altered for any "checkOK" string you desire

// check if first_name field is blank
if ((theForm.name.value.replace(' ','') == "") || (theForm.name.value.replace(' ','') == "Name"))
{
alert("You must enter Your Name.");
theForm.name.focus();
return (false);
}


// check if email field is blank
var emailStructure = "\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*";

if ((theForm.emailfrom.value.replace(' ','') == "") || (theForm.emailfrom.value.replace(' ','') == "Email"))
{
alert("Please enter a value for the \"Email\" field.");
theForm.emailfrom.focus();
return (false);
}
else
  {
	  if (!emailStructure.test(theForm.emailfrom.value))
	  {
		alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
		theForm.emailfrom.focus();
		return false;
	  }
  }

// test if valid email address, must have @ and .
/*var checkEmail = "@.";
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
alert("The \"email\" field must contain an \"@\" and a \".\".");
theForm.emailfrom.focus();
return (false);
}*/

// check if company field is blank

if ((theForm.company.value.replace(' ','') == "") || (theForm.company.value.replace(' ','') == "Company"))
{
alert("You must enter Company Name.");
theForm.company.focus();
return (false);
}


//check if Title is blank

if ((theForm.title.value.replace(' ','') == "") || (theForm.title.value.trim() == "report title"))
{
alert("Please enter a value for the Report Title field.");
theForm.title.focus();
return (false);
}




// test if valid email address, must have @ and .
/*var checkEmail = "@.";
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
alert("The \"email\" field must contain an \"@\" and a \".\".");
theForm.emailfrom.focus();
return (false);
}*/

}

/*//discount page form Validations*/
function Form60_Validator(theForm)
{
// allow ONLY alphanumeric keys, no symbols or punctuation
// this can be altered for any "checkOK" string you desire

// check if first_name field is blank
if ((theForm.name.value.replace(' ','') == "") || (theForm.name.value.replace(' ','') == "Name"))
{
alert("You must enter Your Name.");
theForm.name.focus();
return (false);
}
else
{
if (!isProper(theForm.name,"Name"))
return false;
}


// check if email field is blank

if ((theForm.emailfrom.value.replace(' ','') == "") || (theForm.emailfrom.value.replace(' ','') == "Email"))
{
alert("Please enter a value for the \"Email\" field.");
theForm.emailfrom.focus();
return (false);
}
else
  {
	  if (!theForm.emailfrom.value.test("\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"))
	  {
		alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
		theForm.emailfrom.focus();
		return false;
	  }
  }

// test if valid email address, must have @ and .
/*var checkEmail = "@.";
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
alert("The \"email\" field must contain an \"@\" and a \".\".");
theForm.emailfrom.focus();
return (false);
}*/

// check if company field is blank
if ((theForm.job_title.value.replace(' ','') == "") || (theForm.job_title.value.replace(' ','') == "report title"))
{
alert("Please enter your Designation.");
theForm.job_title.focus();
return (false);
}
else
{
if (!isProper(theForm.job_title,"Designation"))
return false;
}

if ((theForm.company.value.replace(' ','') == "") || (theForm.company.value.replace(' ','') == "Company"))
{
alert("You must enter Company Name.");
theForm.company.focus();
return (false);
}
else
{
if (!isProper(theForm.company," Company Name"))
return false;
}


//check if Title is blank

if ((theForm.phone_no.value.replace(' ','') == "") || (theForm.phone_no.value.replace(' ','') == "report title"))
{
alert("Please enter your Phone Number.");
theForm.phone_no.focus();
return (false);
}
else
{
if (!isProper(theForm.phone_no,"Phone Number"))
return false;
}



// test if valid email address, must have @ and .
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
alert("Please enter only digit characters in the \"Phone\" field.");
theForm.phone_no.focus();
return (false);
}

if ((theForm.country.value.replace(' ','') == "") || (theForm.country.value.replace(' ','') == "company"))
{
alert("Please enter your Country Name.");
theForm.country.focus();
return (false);
}
else
{
if (!isProper(theForm.country,"Country Name"))
return false;
}


if ((theForm.title.value.replace(' ','') == "") || (theForm.title.value.trim() == "report title"))
{
alert("Please enter the title of the report you are interested.");
theForm.title.focus();
return (false);
}
else
{
if (!isProper(theForm.country,"Report Interested in"))
return false;
}
if (!isProper(theForm.comments,"comments"))
return false;

}


function Form1560_Validator(theForm)
{
// allow ONLY alphanumeric keys, no symbols or punctuation
// this can be altered for any "checkOK" string you desire

// check if first_name field is blank
if ((theForm.name.value.replace(' ','') == "") || (theForm.name.value.replace(' ','') == "Name"))
{
alert("You must enter Your Name.");
theForm.name.focus();
return (false);
}


// check if email field is blank

if ((theForm.emailfrom.value.replace(' ','') == "") || (theForm.emailfrom.value.replace(' ','') == "Email"))
{
alert("Please enter a value for the \"Email\" field.");
theForm.emailfrom.focus();
return (false);
}
else
  {
	  if (!theForm.emailfrom.value.test("\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"))
	  {
		alert("Email Id: Enter complete Email Id like tom_cruise@xyz.com");
		theForm.emailfrom.focus();
		return false;
	  }
  }

// test if valid email address, must have @ and .
/*var checkEmail = "@.";
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
alert("The \"email\" field must contain an \"@\" and a \".\".");
theForm.emailfrom.focus();
return (false);
}*/

// check if company field is blank
if ((theForm.job_title.value.replace(' ','') == "") || (theForm.job_title.value.trim() == "report title"))
{
alert("Please enter your Designation.");
theForm.job_title.focus();
return (false);
}

if ((theForm.company.value.replace(' ','') == "") || (theForm.company.value.replace(' ','') == "Company"))
{
alert("You must enter Company Name.");
theForm.company.focus();
return (false);
}


//check if Title is blank

if ((theForm.phone_no.value.replace(' ','') == "") || (theForm.phone_no.value.trim() == "report title"))
{
alert("Please enter your Phone Number.");
theForm.phone_no.focus();
return (false);
}




// test if valid email address, must have @ and .
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
alert("Please enter only digit characters in the \"Phone\" field.");
theForm.phone_no.focus();
return (false);
}

if ((theForm.country.value.replace(' ','') == "") || (theForm.country.value.replace(' ','') == "company"))
{
alert("Please enter your Country Name.");
theForm.country.focus();
return (false);
}


if ((theForm.title.value.replace(' ','') == "") || (theForm.title.value.trim() == "report title"))
{
alert("Please enter the title of the report you are interested.");
theForm.title.focus();
return (false);
}

theForm.submit.disabled=true;

}


