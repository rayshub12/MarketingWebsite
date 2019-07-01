var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;

function _mobilecolapsmenu() {
    //$('.top1').parent().append("<ul/>",{id:"mainNav"});
    $("<div/>", { id: "mainNavDiv" }).appendTo($('.top1').parent());
    //$("<ul/>",{id:"mainNav"}).appendTo('#mainNavDiv');
    $('li > h2').each(function(key, elem) {
        $(elem).siblings('h3').slideToggle();
    });


    var handleClick = function() {
        $(this).siblings('h3').slideToggle();
    };

    $(document).on('click', 'li > h2', handleClick);

    $(document).on('click', 'li > h2 >a', function(event) {
        event.preventDefault();
    });

    //$('.topleftnvg > a').each(function(key,elem){
    //	$('<li/>').appendTo('#mainNav').html($(elem));
    //});
    $('#mainNavDiv').append($('.tpNav'));
    $('.top1').empty();
    $('.top1').html('<button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>');
    $(document).on('click', '.navbar-toggle', function() {
        $('#mainNavDiv').slideToggle();
    });
    $('#mainNavDiv').slideToggle()
    //	$('.topleftnvg').html($('#mainNav'));  


}


//$(document).ready(function(){
var SelectAllCheckCoun = 0;
var ModeSelectAll = 0;	
var globalcount=0;
function GetEmailflag(email)
{
	//debugger;
		$.ajax({
			type: "POST",
			//url: "https://devapi.marketsandmarkets.com/api/getcontacts/GetContactInfo",
			url: "https://www.marketsandmarkets.com/API.asp?apitype=email&value="+email,
			//data: '{"gettype": "email","value": "'+email+'"}',
			contentType: "application/json; charset=utf-8",
			dataType: "json",
			success:GetSuccessInfo,
			error: GeterrorInfo,
			crossDomain:true,
			async: false ,
			timeout: 1000
		 });

}
function GeterrorInfo(response){
	//debugger;
	
	//var parsed = jQuery.parseJSON(response.d);
	//alert(response.statusText+"contact");
}
function GetSuccessInfo(response){
	//debugger;
	var chkcount = 0;
	//$("#Managepreferences").show();
	 SelectAllCheckCoun = 0;
	 ModeSelectAll = 0;
	
	if(response.message=="Success"){
		if(response.contact[0].Newsletter == "True"){
			$("input[name='Newsletter']").prop('checked', true);
			$("input[name='Newsletter']").hide();
			$("#txNewsletter").hide();
			chkcount += 1;
			SelectAllCheckCoun += 1;
		}
		else {
			$("input[name='Newsletter']").prop('checked', false);
			$("input[name='Newsletter']").show();
			$("#txNewsletter").show();
		}
		if(response.contact[0].ProductAndService == "True"){
			$("input[name='ProductAndService']").prop('checked', true);
			$("input[name='ProductAndService']").hide();
			$("#txProductAndService").hide();
			chkcount += 1;
			SelectAllCheckCoun += 1;
		}
		else {
			$("input[name='ProductAndService']").prop('checked', false);
			$("input[name='ProductAndService']").show();
			$("#txProductAndService").show();
		}
		if(response.contact[0].InsightAndInformation == "True"){
			$("input[name='InsightAndInformation']").prop('checked', true);
			$("input[name='InsightAndInformation']").hide();
			$("#txInsightAndInformation").hide();
			chkcount += 1;
			SelectAllCheckCoun += 1;
		}
		else {
			$("input[name='InsightAndInformation']").prop('checked', false);
			$("input[name='InsightAndInformation']").show();
			$("#txInsightAndInformation").show();
		}
		if(response.contact[0].EventsAndConferences == "True"){
			$("input[name='EventsAndConferences']").prop('checked', true);
			$("input[name='EventsAndConferences']").hide();
			$("#txEventsAndConferences").hide();
			chkcount += 1;
			SelectAllCheckCoun += 1;
		}
		else {
			$("input[name='EventsAndConferences']").prop('checked', false);
			$("input[name='EventsAndConferences']").show();
			$("#txEventsAndConferences").show();
		}
		if(response.contact[0].ModeEMail == "True"){
			$("input[name='ModeEMail']").prop('checked', true);
			$("input[name='ModeEMail']").hide();
			$("#txModeEMail").hide();
			chkcount += 1;
			ModeSelectAll += 1;
		}
		else {
			$("input[name='ModeEMail']").prop('checked', false);
			$("input[name='ModeEMail']").show();
			$("#txModeEMail").show();
		}
		if(response.contact[0].ModePhone == "True"){
			$("input[name='ModePhone']").prop('checked', true);
			$("input[name='ModePhone']").hide();
			$("#txModePhone").hide();
			chkcount += 1;
			ModeSelectAll += 1;
		}
		else {
			$("input[name='ModePhone']").prop('checked', false);
			$("input[name='ModePhone']").show();
			$("#txModePhone").show();
		}
		if(response.contact[0].ModeSocialMedia == "True"){
			$("input[name='ModeSocialMedia']").prop('checked', true);
			$("input[name='ModeSocialMedia']").hide();
			$("#txModeSocialMedia").hide();
			chkcount += 1;
			ModeSelectAll += 1;
		}
		else {
			$("input[name='ModeSocialMedia']").prop('checked', false);
			$("input[name='ModeSocialMedia']").show();
			$("#txModeSocialMedia").show();
		}
		
		if(chkcount==7){
			$("#Managepreferences").hide();
			globalcount=7;
		}
	
		if(SelectAllCheckCoun>=4) {
            $("input[name='SelectAll']").prop('checked', true);
			$("input[name='SelectAll']").hide();
		}
		if(ModeSelectAll>=3) {
				$("input[name='ModeSelectAll']").prop('checked', true);
				$("input[name='ModeSelectAll']").hide();
		}
		
	}
	else{
		$("input[name='Newsletter']").show();
		$("#txNewsletter").show();
		$("input[name='ProductAndService']").show();
		$("#txProductAndService").show();
		$("input[name='InsightAndInformation']").show();
		$("#txInsightAndInformation").show();
		$("input[name='EventsAndConferences']").show();
		$("#txEventsAndConferences").show();
		$("input[name='ModeEMail']").show();
		$("#txModeEMail").show();
		$("input[name='ModePhone']").show();
		$("#txModePhone").show();
		$("input[name='ModeSocialMedia']").show();
		$("#txModeSocialMedia").show();
		$("input[name='Newsletter']").prop('checked', false);
		$("input[name='ProductAndService']").prop('checked', false);
		$("input[name='InsightAndInformation']").prop('checked', false);
		$("input[name='EventsAndConferences']").prop('checked', false);
		$("input[name='ModeEMail']").prop('checked', false);
		$("input[name='ModePhone']").prop('checked', false);
		$("input[name='ModeSocialMedia']").prop('checked', false);
	}
	
	
	
} 
	////select all checked 
	$(document).on("change","input[name='SelectAll']",function() {
        if($(this).is(":checked")) {
            $("input[name='Newsletter']").prop('checked', true);
			$("input[name='ProductAndService']").prop('checked', true);
			$("input[name='InsightAndInformation']").prop('checked', true);
			$("input[name='EventsAndConferences']").prop('checked', true);
        }
		else{
			$("input[name='Newsletter']").prop('checked', false);
			$("input[name='ProductAndService']").prop('checked', false);
			$("input[name='InsightAndInformation']").prop('checked', false);
			$("input[name='EventsAndConferences']").prop('checked', false);
		}     
    });
	$(document).on("change","input[name='ModeSelectAll']",function() {
        if($(this).is(":checked")) {
            $("input[name='ModeEMail']").prop('checked', true);
			$("input[name='ModePhone']").prop('checked', true);
			$("input[name='ModeSocialMedia']").prop('checked', true);
        }
		else{
			$("input[name='ModeEMail']").prop('checked', false);
			$("input[name='ModePhone']").prop('checked', false);
			$("input[name='ModeSocialMedia']").prop('checked', false);
		}     
    });
	
	
	changeCountry($("select[name='country'] option:selected").text());
	
	$(document).on("change","select[name='country']",function() {
		changeCountry($(this).val())
    });
	$(document).on("change","select[name='Code']",function() {
		changeCountry($(this).val())
    });
	function changeCountry(country){
		//debugger;
		
	if(country!=""){
		
		$.ajax({
			type: "POST",
			//url: "https://devapi.marketsandmarkets.com/api/checkcountry/getcountry",
			url: "https://www.marketsandmarkets.com/API.asp?apitype=country&value="+country,
			//data: '{"countryname": "'+country+'"}',
			contentType: "application/json; charset=utf-8",
			dataType: "json",
			success:countrySuccessInfo,
			error: countryerrorInfo,
			//crossDomain:true,
			async: false ,
			timeout: 1000
		 });
	 }
	}
	function countrySuccessInfo(response){
		//debugger;
		if(response.message=="NoRecord"){
			$("#Managepreferences").hide();
		}else{
			if(response.country[0].EuropeRegion==true){
				$("#Managepreferences").show();
				if(globalcount==7){
					$("#Managepreferences").hide();
				}
			}else {
				 $("#Managepreferences").hide();
				 // $("input[name='newsletter']").prop('checked', true);
				 // $("input[name='productandservice']").prop('checked', true);
				 // $("input[name='insightandinformation']").prop('checked', true);
				 // $("input[name='eventsandconferences']").prop('checked', true);
				 // $("input[name='modeemail']").prop('checked', true);
				 // $("input[name='modephone']").prop('checked', true);
				 // $("input[name='modesocialmedia']").prop('checked', true);
			}
		}
	}
	function countryerrorInfo(response){
		//debugger;
		//alert(response.statusText+"country");
	}
	
	
	
	$(document).on("change","input[name='Newsletter']",function() {
        if($(this).is(":checked")) 
			SelectAllCheckCoun += 1;
	    else
			SelectAllCheckCoun = SelectAllCheckCoun - 1;
		if(SelectAllCheckCoun>=4) 
            $("input[name='SelectAll']").prop('checked', true);
		else
			$("input[name='SelectAll']").prop('checked', false);
    });
	$(document).on("change","input[name='ProductAndService']",function() {
        if($(this).is(":checked")) 
			SelectAllCheckCoun += 1;
	    else
			SelectAllCheckCoun = SelectAllCheckCoun - 1;
		if(SelectAllCheckCoun>=4) 
            $("input[name='SelectAll']").prop('checked', true);
		else
			$("input[name='SelectAll']").prop('checked', false);
    });
	$(document).on("change","input[name='InsightAndInformation']",function() {
        if($(this).is(":checked")) 
			SelectAllCheckCoun += 1;
	    else
			SelectAllCheckCoun = SelectAllCheckCoun - 1;
		if(SelectAllCheckCoun>=4) 
            $("input[name='SelectAll']").prop('checked', true);
		else
			$("input[name='SelectAll']").prop('checked', false);
    });
	$(document).on("change","input[name='EventsAndConferences']",function() {
        if($(this).is(":checked")) 
			SelectAllCheckCoun += 1;
	    else
			SelectAllCheckCoun = SelectAllCheckCoun - 1;
		if(SelectAllCheckCoun>=4) 
            $("input[name='SelectAll']").prop('checked', true);
		else
			$("input[name='SelectAll']").prop('checked', false);
    });
	
	$(document).on("change","input[name='ModeEMail']",function() {
        if($(this).is(":checked")) 
			ModeSelectAll += 1;
	    else
			ModeSelectAll = ModeSelectAll - 1;
		if(ModeSelectAll>=3) 
            $("input[name='ModeSelectAll']").prop('checked', true);
		else
			$("input[name='ModeSelectAll']").prop('checked', false);
    });
	$(document).on("change","input[name='ModePhone']",function() {
        if($(this).is(":checked")) 
			ModeSelectAll += 1;
	    else
			ModeSelectAll = ModeSelectAll - 1;
		if(ModeSelectAll>=3) 
            $("input[name='ModeSelectAll']").prop('checked', true);
		else
			$("input[name='ModeSelectAll']").prop('checked', false);
    });
	$(document).on("change","input[name='ModeSocialMedia']",function() {
        if($(this).is(":checked")) 
			ModeSelectAll += 1;
	    else
			ModeSelectAll = ModeSelectAll - 1;
		if(ModeSelectAll>=3) 
            $("input[name='ModeSelectAll']").prop('checked', true);
		else
			$("input[name='ModeSelectAll']").prop('checked', false);
    });
	
	

	

	
	
	
	
	//});//document.ready end


