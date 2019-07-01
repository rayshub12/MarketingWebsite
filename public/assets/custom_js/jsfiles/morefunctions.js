// JavaScript Document

 function tabchange(activetab,inactivetab,tabmenuActive, tabmenuInactive)
            {
              
              	var elemActive = document.getElementById(activetab);
                var elemInactive = document.getElementById(inactivetab);
				var menuActive = document.getElementById(tabmenuActive);
				var menuInactive = document.getElementById(tabmenuInactive);
    
                 elemActive.style.display = "block";
                     elemInactive.style.display = "none";
					  if (tabmenuActive == "tabPublish")
                          {                     
                             menuActive.src = "/Images/Latest/published_red.gif"; 
                             menuInactive.src = "/Images/Latest/unpublished_grey.gif"; 
                          }
                        else
                          {                     
                             menuActive.src = "/Images/Latest/unpublished_red.gif"; 
                             menuInactive.src = "/Images/Latest/published_grey.gif"; 
                          }
               
			}
			
			
			
	function imposeMaxLength(Object, MaxLen)
		{
		  return (Object.value.length <= MaxLen);
		}
		
		
		
var change = 1;
var tabDiv = 'tabCon01';
var tab = 'tab01';
var aval2 = 'a01';
var activecolor = 'tabBlueActive';
var nonactivecolor = 'tabRed';

function tabMenu_alt(option,tabVal,aval,nid){
	if(option == 'tabCon01' && document.getElementById(option).style.display == 'block')
	{
	 if(((typeof(inittab) != "undefined") && inittab == 1))	
	 {
	 }
	 else
	 {
		 alert("Please wait for a moment...until the page is finished loading!");
	     var url = document.URL;
	     window.location.href=url;
	 }
	}
	else if((document.getElementById(option).style.display=='none' || document.getElementById(option).style.display=='') && ((typeof(inittab) != "undefined") && inittab == 1)){
	
    document.getElementById(option).style.display = 'block';
	document.getElementById(tabDiv).style.display = 'none';
	
	document.getElementById('a01').src = "/Images/Latest/tab01_over.gif";
	document.getElementById('a02').src = "/Images/Latest/tab02_over.gif";
	document.getElementById('a03').src = "/Images/Latest/tab03_over.gif";
	document.getElementById('a04').src = "/Images/Latest/tab04_over.gif";
	
	
	if(aval == 'a01')
	{
	document.getElementById(aval).src = "/Images/Latest/tab01.gif"; 
	
	}
	else if(aval == 'a02')
	{
	document.getElementById(aval).src = "/Images/Latest/tab02.gif"; 
	document.getElementById('a01').src = "/Images/Latest/tab01_over2.gif";		
	}
	else if(aval == 'a03')
	{
	document.getElementById(aval).src = "/Images/Latest/tab03.gif"; 
	document.getElementById('a02').src = "/Images/Latest/tab02_over2.gif";
	}
	else if(aval == 'a04')
	{
	document.getElementById(aval).src = "/Images/Latest/tab04.gif"; 
	document.getElementById('a03').src = "/Images/Latest/tab03_over2.gif";
	}
	tabDiv = option;
	tab = tabVal;
	aval2 = aval;
    change = 1;
	//inittab = 1;
	}
	
	else if (typeof(inittab)!="undefined" && inittab == 1)
	{
	}
	else
	{
	alert("Please wait for a moment...until the page is finished loading!");
	var url = document.URL;
	window.location.href=url;
	//inittab = 0;
	}
}