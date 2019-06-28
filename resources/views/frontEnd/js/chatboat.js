
$(document).ready(function(){
    $(".top-search-icon").click(function(){
        $(".top-search-section").toggleClass("myInput");				
    });
	$(".short-icon").click(function(){
        $(".advance-search").toggleCla3d("show");		
    });
	 $(".top-search-icon").click(function(){
        $(".advance-search").toggleClass("hide");						
    });
});

function PopulateCountry() {
			//debugger;
			  $.ajax({
				  type: "POST",
				  url: "https://www.marketsandmarkets.com/APIchatboat.asp?reportid=1&apitype=GetCountries&token=abc",
				  //data: '{"countryname": "'+country+'"}',
				  contentType: "application/json; charset=utf-8",
				  dataType: "json",
				  success:function( response ) {
					  //debugger;
					   var toAppend = '';
						   $.each(response.data,function(i,o){
							   //debugger;
						   toAppend += '<option value='+o.ID+'>'+o.Country+'</option>';
						  });
					      $('#country').append(toAppend);
					  },
				  error: function( response ) {  },
				  //crossDomain:true,
				  async: false ,
				  timeout: 1000
			   });
					 
         
}

$(document).ready( function() {
		 var base_url = "http://192.168.3.222/"
		 //var headerUrl = getHeaderUrl();
		var mini="0";
		
		//Auto trigger Chatbot after 5 second
		// setTimeout(function() {
			// if($(".chat-box-live1").css("display")!="none" && $(".open-box-row").css("display")=="none" )
				// $(".chat-box-live1").trigger('click');
		  // }, 5000);
		  
		$(".chat-box-live1").click(function(){
			if(mini=="0"){callchat();}
			$(".open-box-row").slideToggle("slow");
		});
		 $(".chat-close-btn").click(function(){
			 mini="0";
			$(".open-box-row").slideToggle("hide");
		});
		$(".chat-minimize-btn").click(function(){
			mini="1";
			$(".open-box-row").slideToggle("hide");
		});
		
		
		 
		function callchat(){
			var n = Math.floor(Math.random() * 11);
			var k = Math.floor(Math.random() * 10000000000);
			var uniqueId = String.fromCharCode(n) + k;
			//alert(m);
			let newToken= 'mnm|'+uniqueId;
		    var valToken=btoa(newToken);
		//if( headerUrl == 'mega_trends' || headerUrl == 'industry_trends' ) {
			var pathname = window.location.pathname;
			var pathSecondParam = pathname.split('/').reverse()[0];
			//if( pathSecondParam != 'mega_trends' &&  pathSecondParam != 'industry_trends' ) {
				//alert(valToken);
				$('#chatpot').html("");
				$.ajax({
					url			: "https://www.marketsandmarkets.com/APIchatboat.asp?reportid="+NewsID+"&apitype=chatboat&token="+valToken+"",
					type		: "POST",
					minLength	: 2,
					//data		: { 'api_key' : 'BB77116CC587B5889B81E4835D458' },
					scroll		: true,
					dataType	: "json",
					success		: function( response ) { 
					//debugger;
					$('.chat-box-live1').show();
						console.log(response['chat_id']);
						//alert('okdd');
						if( typeof response['chat_id'] !== 'undefined') {
							//alert(response['token']);
							html = '<div class="form-group">';
							html += '<input type="text" class="form-control" name="firstName" id="firstName" placeholder="Name" required></div>';
							html += '<div class="form-group">';
							html += '<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>';
							html += '<div class="help-block with-errors"></div></div>';
							html += '<div class="form-group">';
							html += '<input type="text" class="form-control" name="jobTitle" id="jobTitle" placeholder="Job Title" required></div>';
							html += '<div class="form-group">';
							html += '<input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name" required></div>';
							html += '<div class="form-group">';
							html += '<input type="text" class="form-control" name="description" id="description" placeholder="Do you have any specific field of interest?" placeholder?" required></div>';
							//html += '<div class="form-group">';
									
							html += '<div class="form-group"> <button onClick="Validate(\'' + response['token'] +'\')" id="startChartId" >Submit</button></div>';
							$('#chatpot').append(html);
						} else {
							var ulSelectCount = 0;
							var ulSelectHtml = '<ul class="default-option">';
							var checkBoxCount = 0;
							var liCheckboxHtml = '<li class="inputTypeParent yes-no-checkbox">';
							let token = response['token'];
							let CheckboxChat_id = 0;
							let CheckboxParent_id= 0;
							$.each( response, function( key, value ) {
								if( key != 'token') {
									if( value['text_type'] == null || value['text_type'] == "null") {
										//alert('o')
										$('#chatpot').append('<li class="chat-resiver"><p>' + value['chat_desc'] +'</p></li>');
										commonfun(value['chat_id'], value['parent_id'], token );
									}
									if( value['text_type'] == 'radio' ) {
										ulSelectCount = 1;
										ulSelectHtml += '<li class="inputTypeParent"><label><input type="radio" title="radio" name="userChoice" id="selected_value_' + value['chat_id'] +'\" onclick="commonfun(\'' + value['chat_id'] +'\', \'' + value['parent_id'] +'\', \'' + token +'\')" value="' +value['chat_desc']+'"><span>' + value['chat_desc'] +'</span></label></li>';
									}
									if( value['text_type'] == 'checkbox' && value['url'] == '' ) {
										checkBoxCount = 1;
										CheckboxChat_id = value['chat_id'];
										CheckboxParent_id = value['parent_id'];
										var checkArray = value['chat_desc'].split('||');
										$.each( checkArray, function( index2, value2 ) {
											liCheckboxHtml += '<div><input type="checkbox" title="checkbox" name="normalCheckbox" id="selected_value_' + value['chat_id'] +'\" value="' +value['key']+'"><label>' + value2 +'</label></div>';
										});
										//liCheckboxHtml += '<div><input type="checkbox" title="checkbox" name="normalCheckbox" id="selected_value_' + value['chat_id'] +'\" value="' +value['key']+'"><label>' + value['chat_desc] +'</label></div>';
										
									} 
								}
								
							});

							if( ulSelectCount == 1) {
								ulSelectHtml += '</ul>';
								$('#chatpot').append(ulSelectHtml);
							}
							if( checkBoxCount == 1) {
								liCheckboxHtml += '<button name="Submit" onclick="commonfun(\'' + CheckboxChat_id +'\', \'' + CheckboxParent_id +'\', \'' + token +'\')" class="btn btn-default btn-sm" id="text_button" >Submit</button></li>';
								$('#chatpot').append(liCheckboxHtml);
							}
						}
						
					}
					,error : function( response ) { 
					debugger;
					     alert(response);
					}
				});
			//}			
		//}	
		
		}
		
	});
	

    function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
	
	function ValidatePhone(phno) 
	{ 
	  var expr=/^[0-9-+ ]+$/;    // regular expression pattern
	  return expr.test(phno); 
	} 

	
	function Validate( token, chat_id ) {
		debugger;
		let firstName = $('#firstName').val();
		let lastName = "";//$('#lastName').val();
		let jobTitle = $('#jobTitle').val();
		let company = $('#company').val();
		let description = $('#interest').val();
		let email = $("#inputEmail").val();
		let phone = $("#inputPhone").val();
		let country=$("#country").val();
		let countryname=$("#country option:selected").text();
		let newsLetter="1";
		let ModeEMail=$("#ModeEMail").val();
		let ModePhone=$("#ModePhone").val();
		let ModeSocialMedia=$("#ModeSocialMedia").val();
		let interest = $("#interest").val();
		let reportname=$(".reportName").html();
		let reportcode =$(".date").html();
		
		if(firstName == '' || firstName == "null" ) {
			alert('Please Enter Name');
			return false;
		}
		if( jobTitle == '' || jobTitle == "null" ) {
			alert('Please Enter Job Title');
			return false;
		}
		if( company == '' || company == "null" ) {
			alert('Please Enter Company Name');
			return false;
		}
		if( country == '' || country == "null" ) {
			alert('Please Enter Country');
			return false;
		 }
		 if( phone != '' && phone != "null" ) {
			 if(!ValidatePhone(phone)){
			 alert('Please Enter Valid Phone number,only numbers from 0-9 and + or - sign allowed');
			 return false;
		 }
		 }
		
		if (!ValidateEmail(email)) {
            alert("Invalid email address.");
			return false;
        }
		
		//alert("Posting Lead to CRM as LeadType=Chatboat");
		//debugger;
		$.ajax({
			url			: "https://www.marketsandmarkets.com/APIchatboat.asp?reportid="+NewsID+"&apitype=CRM_PostLead&token="+token+"&chat_id="+chat_id+"&firstName="+firstName+"&lastName="+lastName+"&jobTitle="+jobTitle+"&company="+company+"&description="+description+"&email="+email+"&country="+country+"&phone="+phone+"&ModeEMail="+ModeEMail+"&ModePhone="+ModePhone+"&ModeSocialMedia="+ModeSocialMedia+"&interest="+interest+"&reportname="+reportname.replace(/&/g,"and")+"&reportcode="+reportcode+"",  //'"
			type		: "POST",
			minLength	: 2,
			//data		: { 'token' : token, 'answer': '', 'chat_id':chat_id,  'firstName':firstName, 'jobTitle': jobTitle, 'company': company, 'description': description, 'email': email  },
			scroll		: true,
			dataType	: "json",
			success		: function( response ) { 
			//debugger;
			//alert(response.message);
			},
			error       : function(response){
				//alert(response);
			}
		});
		
		var n = Math.floor(Math.random() * 11);
		var k = Math.floor(Math.random() * 10000000000);
		var uniqueId = String.fromCharCode(n) + k;
		$( ".inputTypeParent" ).remove();
		//let newToken= token+'|'+uniqueId;
		//'token' : btoa(newToken),
		//let newToken= token+'|'+ firstName+ '|'+email+'|'+uniqueId;
		
		$.ajax({
			url			: "https://www.marketsandmarkets.com/APIchatboat.asp?reportid="+NewsID+"&apitype=chatboat&token="+token+"&chat_id="+chat_id+"&firstName="+firstName+"&jobTitle="+jobTitle+"&company="+company+"&description="+description+"&email="+email+"&phonenumber="+phone+"&country="+countryname+"",
			type		: "POST",
			minLength	: 2,
			//data		: { 'token' : token, 'answer': '', 'chat_id':chat_id,  'firstName':firstName, 'jobTitle': jobTitle, 'company': company, 'description': description, 'email': email  },
			scroll		: true,
			dataType	: "json",
			success		: function( response ) { 
			$('.chat-box-live').show();
				console.log(response['chat_id']);
				var token1 = response['token'];
				var ulSelectCount = 0;
				var ulSelectHtml = '<ul class="default-option">';
				$.each( response, function( key, value ) {
					if( key != 'token' ) {
						if( value['text_type'] == null || value['text_type'] == "null" ) {
							$('#chatpot').append('<li class="chat-resiver"><p>' + value['chat_desc'] +'</p></li>');
							commonfun(value['chat_id'], value['parent_id'], token );
						}
						if( value['text_type'] == 'radio' ) {
							ulSelectCount = 1;
							ulSelectHtml += '<li class="inputTypeParent"><label><input type="radio" title="radio" name="userChoice" id="selected_value_' + value['chat_id'] +'\" onclick="commonfun(\'' + value['chat_id'] +'\', \'' + token1 +'\')" value="' +value['chat_desc']+'"><span>' + value['chat_desc'] +'</span></label></li>';
						}
					}
				});
				if( ulSelectCount == 1) {
					ulSelectHtml += '</ul>';
					$('#chatpot').append(ulSelectHtml);
				}
			},
			error      : function(response){alert(response);}
		});
	
	}

    
	
	function commonfun(chat_id, parent_id, token, gotoback = 0 ) {
		$('.chat-sender').css('pointer-events','none');
		// alert(chat_id);
		var min = 500;
		var max = 2000;
		var delay = Math.floor(Math.random() * (max - min + 1)) + min;
		//var delay = 1000;
		var res = {
			loader: $("<div />", {
			class: "loader"
			})
		};
		var selectedTag 	= $( '#selected_value_' + chat_id ).attr('title');
		var selectedValue 	= '';
		
		if( selectedTag == 'radio' ) {
			selectedValue 	= $( '#selected_value_'+ chat_id + ':checked' ).val().replace(/\"/g, "");
		}
		if( selectedTag == 'select' ) {
			selectedValue 	= $( '#selected_value_' + chat_id + ' :selected' ).html().replace(/\"/g, "");
		}
		
		if( selectedTag == 'text_box' ) {
			selectedValue 	= $( '#selected_value_' + chat_id ).val().replace(/\"/g, "");
			if( selectedValue == '' ) {
                 $('#selected_value_' + chat_id).css('border-color','red');
                 return false;
            }

		}
		var selectedCheckboxTag     = $( '#selected_value_' + chat_id + ' input' ).attr('title');
		var segmentCheckboxValue = '';
		var segmentFlag = false;
		if( selectedCheckboxTag == 'checkbox' ) {
			segmentName = finalName = '';
			$.each($("input[name='segmentCheckbox']:checked"), function(){            
				segmentCheckboxValue += $(this).val()+ ', ';
				var segmentNameNew = $(this).parent().parent().find('span').text();
				if( segmentNameNew != segmentName ) {
					segmentName = segmentNameNew;
					finalName += selectedValue + '  ' +segmentNameNew + ': ';
					selectedValue = '';
					
				} 
				selectedValue += $(this).next().text() + ', ';
				
				//console.log(selectedValue)
			});
			finalName += selectedValue;
			selectedValue = finalName;
			
			// $.each($("input[name='userChoiceCheckbox']:checked"), function(){   
			// 	segmentFlag = true;
			// 	selectedValue += $(this).next().text() + ', ';
			// });
			$.each($("input[name='normalCheckbox']:checked"), function(){            
				selectedValue += $(this).next().text() + ', ';
			});
			if( segmentCheckboxValue == '' &&  selectedValue == '') {
				alert('Please select at least one option');
				$('.chat-sender').css('pointer-events','');
				return false;
			}
		}
		//alert(gotoback);
		if( selectedTag == 'select_text' ) {
			selectedValue = $( "#inputId" ).val();
		}
		$( ".default-option" ).remove();
		var selectedParent 	= $( ".inputTypeParent" ).remove();
		
		if( gotoback == '1' ) {
			$('#chatanswerId_'+parent_id).nextAll('li').detach();
			$('.default-option').detach();
			$('#chatanswerId_'+parent_id).detach();
		} else  {
			//if( selectedValue != '' && segmentCheckboxValue != '' ) {
			// if( ( selectedValue != '' && segmentCheckboxValue != '') || ( selectedValue != '' && segmentFlag == true ) ) {
			// 	$('#chatpot').append('<li class="chat-sender" id="chatanswerId_'+ chat_id + '">' + selectedValue +'</li>');
			// } else {
			if(selectedValue != '' ) {		
				$('#chatpot').append('<li class="chat-sender" style="pointer-events:none;" onclick="commonfun(\'' + parent_id +'\',\'' + chat_id +'\', \'' + token +'\', \'1\')" id="chatanswerId_'+ chat_id + '">' + selectedValue +'&nbsp; &nbsp;<span class="btn btn-default btn-sm back-btn" title="Go back to previous step"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </span></li>');
			}
			//}
		}
		// if( segmentCheckboxValue != '' ) {
			// recursive_call( chat_id, token, segmentCheckboxValue, selectedValue );
			// return false;
		// }
		
		setTimeout(function() {
			$.ajax({
				url			: "https://www.marketsandmarkets.com/APIchatboat.asp?reportid="+NewsID+"&apitype=chatboatByid&token="+token+"&chat_id="+chat_id+"&answer="+selectedValue+"",
				type		: "post",
				minLength	: 2,
				scroll		: true,
				//data		: { 'chat_id' : chat_id, 'answer': selectedValue, 'token': token },
				dataType	: "json",
				beforeSend	: function() {
					$("#chatpot").append(res.loader);
				},
				complete: function() {
					$('.chat-sender').css('pointer-events','');
				},  
				success		: function( response ) { 
					
						var selectTag 		= 0;
						var selectOption 	= '';
						var ulSelectionCount = 0 ;
						var ulSelection = '<ul class="default-option" >';
						var liSelection = '';
						var count=0;
						var segmentCheckBoxCount= 0;
						var checkBoxCount = 0;
						var liCheckboxHtml = '<li class="inputTypeParent yes-no-checkbox">';
						var liSegmentCheckboxHtml = '<li class="inputTypeParent yes-no-checkbox yes-no-inner">';
						$.each( response, function( key, value ) {
							count++;
							$('.loader').remove();
							if( key != 'token') {
								if( value['text_type'] == null || value['text_type'] == "null") {
									$('#chatpot').append('<li class="chat-resiver"><p>' + value['chat_desc'] + '</p></li>');
									commonfun(value['chat_id'], value['parent_id'], token );
								}
								if( value['text_type'] == 'radio' ) {
									ulSelectionCount = 1;
									ulSelection += '<li class="inputTypeParent" id="selected_value_' + count +'\"><label><input type="radio" title="radio" name="userChoice" id="selected_value_' + value['chat_id'] +'\" onclick="commonfun(\'' + value['chat_id'] + '\', \'' + value['parent_id'] + '\', \'' + token + '\')" value="' + value['chat_desc'] + '" ><span>' + value['chat_desc'] +'</span></lable></li>';
								}
								if( value['text_type'] == 'text_box' ) {
									$('#chatpot').append('<li class="chat-resiver" id="chatanswerId_' + value['chat_id'] +'\">' + value['chat_desc'] + '</li>');
									//$('#chatTextBox').show();
									//$('#chatpot').append('<input type="hidden" title="text_box" name="userChoice" id="selected_value" value=' + value['_id'] + ' >');
									$('#chatpot').append('<li class="inputTypeParent" style="display:flex; width:100%;" id="selected_value_' + count +'\"><input type="text" class="form-control input-sm" title="text_box" name="userChoice" id="selected_value_' + value['chat_id'] +'\" ><button name="Submit" class="btn btn-default btn-sm" id="text_button" onclick="commonfun(\'' + value['chat_id'] +'\',\'' + value['parent_id'] +'\', \'' + token +'\')" >Submit</button></li>');
									$('#chatpot').animate({scrollTop:$('#chatpot').height()}, 'slow');
								}
								if( value['text_type'] == 'form' ) {
									
									//alert(response['token']);
									html = '<div class="form-group inputTypeParent">';
									html += '<input type="text" class="form-control" name="firstName" id="firstName" placeholder="Name" required></div>';
									html += '<div class="form-group inputTypeParent">';
									html += '<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required></div>';
																		
									html += '<div class="form-group inputTypeParent">';
									html +='<select class="form-control code" name="country" id="country" data-style="btn-primary"  required	title="Please select Country ">'
									html +='<option value="">Country</option>';
									html +='</select></div>';
									html += '<div class="form-group inputTypeParent">';
									html += '<input type="text" class="form-control" name="inputPhone" id="inputPhone" placeholder="Phone" required></div>';
									html += '<div class="form-group">';
									html += '<div class="form-group inputTypeParent">';
									html += '<input type="text" class="form-control" name="jobTitle" id="jobTitle" placeholder="Job Title" required></div>';
									html += '<div class="form-group inputTypeParent">';
									html += '<input type="text" class="form-control" name="companyName" id="company" placeholder="Company Name" required></div>';
									html += '<div class="form-group inputTypeParent">';
									html += '<textarea required="" name="interest" id="interest" class="form-control" rows="3" placeholder="Share your specific area of interest for our analysts to help you."></textarea></div>';
									
									html +='<div class="capcha-section inputTypeParent" id="GDPR" style="display:none;">';
									html +='<label style="font-weight:bold; margin-top:10px; display:inline-block;"> Preferred modes for discussion</label>'; 
										html +='<ul style="list-style:none; margin: 0px;padding: 0px;">';
											//html +='<li><input type="checkbox" name="ModeSelectAll" > Select all</li>';
											html +='<li><input type="checkbox" name="ModeEMail" > <span id="txModeEMail"> Email </span> ';
												html +='<input type="checkbox" name="ModePhone" > <span id="txModePhone"> Phone</span><br>';
												html +='<input type="checkbox" name="ModeSocialMedia" > <span id="txModeSocialMedia"> Professional and social network (Linkedin, etc)</span>';
											html +='</li>';
										html +='</ul></div>';
									html += '<div class="form-group inputTypeParent" id="selected_value_' + count +'\"> <button onClick="Validate(\'' + response['token'] +'\', \'' + value['chat_id'] +'\')" id="startChartId" >Submit</button></div>';
									$('#chatpot').append(html);
									PopulateCountry();
								}
								if( value['text_type'] == 'checkbox' && value['url'] == '' ) { //alert('dd')
									checkBoxCount = 1;
									CheckboxChat_id = value['chat_id'];
									CheckboxParent_id = value['parent_id'];
									var checkArray = value['chat_desc'].split('||');
									$.each( checkArray, function( index2, value2 ) {
										count++;
										liCheckboxHtml += '<div class="check-select" id="selected_value_' + CheckboxChat_id +'\"><input type="checkbox" title="checkbox" name="normalCheckbox" id="selected_value_' + count +'\" value="' +CheckboxChat_id+'"><label for="_selected_value_' + count +'\">' + value2 +'</label></div>';
									});
									//liCheckboxHtml += '<div><input type="checkbox" title="checkbox" name="normalCheckbox" id="selected_value_' + value['chat_id'] +'\" value="' +value['key']+'"><label>' + value['chat_desc'] +'</label></div>';
								} 
								if( value['text_type'] == 'checkbox' && value['url'] != '' ) {
									segmentCheckBoxCount = 1;
									CheckboxChat_id = value['chat_id'];
									CheckboxParent_id = value['parent_id'];
									var arrSegmentData = value['chat_desc']; 
									//console.log(value['chat_desc']);
									//console.log('ok')
									liSegmentCheckboxHtml += '<div class="segmentHeader"><span>'+ value['key']+'</span>'
									$.each( arrSegmentData, function( index2, value2 ) {
									//	console.log(value2)
										liSegmentCheckboxHtml += '<div class="check-select" id="selected_value_' + value['chat_id'] +'\">';
										liSegmentCheckboxHtml += '<input type="checkbox" title="checkbox" name="segmentCheckbox" id="selected_value_' + count +'\" value="' +value2+'">';
										liSegmentCheckboxHtml += '<label for="__selected_value_' + count +'\">' + value2 +'</label></div>';
									});
									liSegmentCheckboxHtml += '</div>';
									
									
								}
					
								if( value['text_type'] == 'select' || value['text_type'] == 'select_text' ) {
									if( value['url'] != '') {
										var headerUrl = getHeaderUrl();
										var selectDataList = "<input type='hidden' name='select_text_name' value='" + value['chat_id'] + "' id='selected_value_" + value['chat_id'] +"\' title='select_text'/>";
										selectDataList += "<input type='hidden' name='select_text_parent_id' value='" + value['parent_id'] + "' id='parentId' title='select_text'/>";
										selectDataList += "<input type='hidden' name='select_text_url' value='" + value['url'] + "' id='urlId' title='select_text'/>";
										selectDataList += "<input type='hidden' name='select_token' value='" + token + "' id='selectTokenId' title='select_text'/>";
										selectDataList += "<input type='hidden' name='selectedValue' value='" + selectedValue + "' id='selectedId' title='select_text'/>";
										selectDataList += "<input type='text' class='form-control input-sm ui-autocomplete-input' oninput='onInput()' id='inputId' placeholder='" + value['chat_desc'] + "' />";
										selectDataList += "<div class='autocompSearch1'></div> ";
										//selectDataList += '<datalist id="dlist">';
										$('#chatpot').append('<li class="inputTypeParent" id="selected_value_' + count +'\">' + selectDataList + '</li>');
										$('#chatpot').animate({scrollTop:$('#chatpot').height()}, 'slow');

									} else {
										if( selectTag == 0 ) {
											selectOption += '<select onchange="commonfun(this.value)" id="selected_value_' + value['chat_id'] +'\" class="chat-resiver" title="select">';
											selectOption += '<option> Select Option</option>';
											selectOption += '<option value="' + value['chat_id'] + '">' + value['chat_desc'] + '</option>';
											selectTag = 1;
										} else {
											selectOption += '<option value="' + value['chat_id'] + '">' + value['chat_desc'] + '</option>';
										}
									}
								}
							}
						});
						
						if( ulSelectionCount == 1 ) {
							ulSelection += '</ul>' 
							$('#chatpot').append(ulSelection);
						}
						selectOption += '</select>';
						if( selectTag == 1 ) {
							$('#chatpot').append('<li class="inputTypeParent">' + selectOption + '</li>');
						}
						if( checkBoxCount == 1) {
							liCheckboxHtml += '<button name="Submit" onclick="commonfun(\'' + CheckboxChat_id +'\', \'' + CheckboxParent_id +'\', \'' + token +'\')" class="btn btn-default btn-sm" id="text_button" >Submit</button></li>';
							$('#chatpot').append(liCheckboxHtml);
						}
						if( segmentCheckBoxCount == 1) {
							liSegmentCheckboxHtml += '<button name="Submit" onclick="commonfun(\'' + CheckboxChat_id +'\', \'' + CheckboxParent_id +'\', \'' + token +'\')" class="btn btn-default btn-sm" id="text_button" >Submit</button></li>';
							$('#chatpot').append(liSegmentCheckboxHtml);
						}
						//$('#chatpot').animate({scrollTop:$('#chatpot').offset().top}, 'slow');
						count--;
						//count--;
						//debugger;
						var elmnt = document.getElementById('selected_value_'+count);
						if(elmnt != null) {
							elmnt.scrollIntoView();
						}

					
					//alert('ok');
					
				}
			}, delay);
		});
	}

	function recursive_call( chat_id, token, segmentCheckboxValue, selectedValue = '' ) {
		var min = 500;
		var max = 2000;
		var delay = Math.floor(Math.random() * (max - min + 1)) + min;
		//var delay = 1000;
		var res = {
			loader: $("<div />", {
			class: "loader"
			})
		};

		var selectedTag 	= $( '#selected_value_' + chat_id ).attr('title');
		if( selectedValue == '' ) {
			//if( selectedTag == 'checkbox' ) {
				$.each($("input[name='userChoiceCheckbox']:checked"), function(){            
					selectedValue += $(this).next().text() + ', ';
				});
			//}
			var selectedParent 	= $( ".inputTypeParent" ).remove();
			if( selectedValue != '' ) {
				$('#chatpot').append('<li class="chat-sender" id="chatanswerId_'+ chat_id + '">' + selectedValue +'</li>');
			}
		}
		//alert(segmentCheckboxValue);	
	setTimeout(function() {		
		$.ajax({
			//url			: base_url +  'Chatbot/getSubSegment',
			url			: "https://www.marketsandmarkets.com/APIchatboat.asp?reportid="+NewsID+"&apitype=getSubSegment&token="+token+"&chatid="+chat_id+"&answer="+selectedValue+"&segmentCheckboxValue="+segmentCheckboxValue+"",
			type		: "post",
			minLength	: 2,
			scroll		: true,
			//data		: { 'chat_id' : chat_id, 'answer': selectedValue, 'token': token, 'segmentCheckboxValue': segmentCheckboxValue },
			dataType	: "json",
			beforeSend	: function() {
				$("#chatpot").append(res.loader);
			},
			complete: function() {
                $('.chat-sender').css('pointer-events','');
            },  
			success		: function( response ) { 
				
					$('.loader').remove();	
					var selectTag 		= 0;
					var selectOption 	= '';
					var ulSelectionCount = 0 ;
					var ulSelection = '<ul class="default-option" >';
					var liSelection = '';
					var count=0;
					var checkBoxCount = 0;
					var liCheckboxHtml = '<li class="inputTypeParent yes-no-checkbox">';
					var isrecursiveCall = '';
					console.log(response)
					$.each( response, function( key, value ) {
						count++;
						if( key == 'segmentId') {
							isrecursiveCall = value;
						} 
						if( key != 'token') {
							if(  value['text_type']=='' || value['text_type']=="null" ) {
								$('#chatpot').append('<li class="chat-resiver"><p>' + value['chat_desc'] + '</p></li>');
								commonfun(value['chat_id'], value['parent_id'], token );
							}
							if( value['text_type'] == 'checkbox' ) {
								checkBoxCount = 1;
								CheckboxChat_id = value['chat_id'];
								CheckboxParent_id = value['parent_id'];
								liCheckboxHtml += '<div class="check-select" id="selected_value_' + CheckboxChat_id +'\" ><input type="checkbox" title="checkbox" name="userChoiceCheckbox" id="selected_value_' + count +'\" value="' +value['chat_desc']+'"><label for="selected_value_' + count +'\">' + value['chat_desc'] +'</label></div>';
							}
						}
					});
					if( isrecursiveCall != '' ) {
						if( checkBoxCount == 1 ) {
							liCheckboxHtml += '<button name="Submit" onclick="recursive_call(\'' + CheckboxChat_id +'\', \'' + token +'\', \'' + isrecursiveCall +'\')" class="btn btn-default btn-sm" id="text_button" >Submit</button></li>';
							$('#chatpot').append(liCheckboxHtml);
						}
					}else {
						if( checkBoxCount == 1 ) {
							liCheckboxHtml += '<button name="Submit" onclick="commonfun(\'' + chat_id +'\', \'' + chat_id +'\', \'' + token +'\' )" class="btn btn-default btn-sm" id="text_button" >Submit</button></li>';
							$('#chatpot').append(liCheckboxHtml);
						}
					}
					$('#chatpot').animate({scrollTop:$('#chatpot').offset().top}, 'slow');
				
				//alert('ok');
				
			}
		});
		}, delay);
		return false;
	}
	

		
	function onInput() {
		//var headerUrl = getHeaderUrl();
		var chat_id = $('input[name=select_text_name]').val();
		var searchCase = $('#urlId').val();
		var token = $('#selectTokenId').val();
		//alert(url);
		var term = $('#inputId').val();
		var selectedValue = $('#selectedId').val();
		//alert(selectedValue);
		$("#inputId").autocomplete({
               source: function (request, response) {
                   var input = this.element;
                   var attr = $(input).attr('data');
                    if (typeof attr !== typeof undefined && attr !== false) {
                        reqvalue
                    }
                   //var url value
				   var term = request.term;

					console.log(request.term);
                   $.ajax({
                       //url: base_url +  'Chatbot/searchAjaxCall',
					   url			: "https://www.marketsandmarkets.com/APIchatboat.asp?reportid="+NewsID+"&apitype=chatboatSearch&token="+token+"&term="+term+"&selectedValue="+selectedValue+"&searchCase="+searchCase+"",
                       type: "GET",
                       minLength: 2,
                       scroll: true,
                       //data: {'term': term, 'selectedValue' : selectedValue, 'searchCase': searchCase },
                       dataType: "json",
                       success: function (result) {
						console.log(result);
                           if(!result.length){
                               var result = [{label: 'No matches found', value: ''}];
                               response(result);
                           } else {
							   response(result);
                           }
                       }
                   });
               },
			   appendTo: '.autocompSearch1',
               focus: function (event, ui) {
					event.preventDefault();
					this.value = ui.item.label;
               },
               select: function (event, ui) {
				   event.preventDefault();   
				  
					this.value = ui.item.label;
					if(ui.item.value != ''){
						commonfun(chat_id, token)
                    }           
               }           
        });
        
	}

	
	

	$(document).ready(function(){
	    $(".open-box-expand").click(function(){
	        $(".open-box-list-style").slideToggle("slow");
			$(this).find('i').toggleClass('fa-angle-up').toggleClass('fa-angle-down');
	    });
		
		
	
	});
	
	$(document).ready(function(){
	  $(document).on('click', '.check-select', function(e){
		var inputType = $(this).find('input[type=checkbox]').attr('checked');
		if( inputType == 'checked'){
			$(this).find('input[type=checkbox]').attr('checked', false)
		}else{
			$(this).find('input[type=checkbox]').attr('checked', 'checked')
		}
	  
	  })
	  
	  
	$(document).on("change","select[name='country']",function() {
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
			$("#GDPR").hide();
		}else{
			if(response.country[0].EuropeRegion==true){
				$("#GDPR").show();
				if(globalcount==7){
					$("#GDPR").hide();
				}
			}else {
				 $("#GDPR").hide();
			}
		}
	}
	function countryerrorInfo(response){
		//debugger;
		//alert(response.statusText+"country");
	}

	});
