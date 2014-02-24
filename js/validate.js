/*-------------------------------------------------------------------------------
	*	FileName ; $common.js
	* Function : validative functions
	* CreatedDate : 01/02/2003
	* LastUpdate : 25/10/2004
-------------------------------------------------------------------------------*/
/*The following functions are described by their names*/

//-------------------------------------------------------------------------------
function isSpaces (Str) {
	if (isEmpty (Str)) return true;
	var i = 0;	
	while (Str.charAt(i)==' ' && i<Str.length) {
		i++;
	}
	if (i== Str.length) return true;
	return false;
}

//-------------------------------------------------------------------------------
function isEmpty(Str) {
	empty = (Str === "") ? true :  false;
	return empty;
}

//-------------------------------------------------------------------------------
function isNumber(Digit) {
	return /^\d+[\.\d*]?$/.test(Digit);
}

//------------------------------------------------------------------------------
function isAlphabet(Digit) {
	return /^[a-zA-Z]$/.test(Digit);
}

//-------------------------------------------------------------------------------
function isInteger(Str) {
	return /^[+-]?\d+$/.test(Str);
}

//-------------------------------------------------------------------------------
function isFloat(Str) {
		return /^[+-]?\d+\.{1}\d*$/.test(Str);
}

//-------------------------------------------------------------------------------
function isCurrency(Str) {
		return /^\d+[.]{1}[0-9]{2,}$/.test(Str);
}

//-------------------------------------------------------------------------------
function isDate(Str) {
	var bool1=/^[0]?\d[\/|-][0-2]\d[\/|-]\d{4}$/.test(Str);		//0x month format 0X-2X date format
	var bool2=/^[1][0-2][\/|-][0-2]\d[\/|-]\d{4}$/.test(Str);	//1x month format 3X date format
	var bool3=/^[1][0-2][\/|-][3][0,1][\/|-]\d{4}$/.test(Str);	
	var bool4=/^[0]?\d[\/|-][3][0,1][\/|-]\d{4}$/.test(Str);
	return ((bool1)||(bool2)||(bool3)||(bool4));
}

//-------------------------------------------------------------------------------
function isValidDate(nDay,nMonth,nYear) {
	if (nMonth==2 && nDay > 29) return false;
	if (nMonth==2 && nDay ==29 && nYear % 4 !=0) return false;
	if (nDay==31 && (nMonth == 4 || nMonth == 6 || nMonth == 9 || nMonth == 11 )) return false;
	return true;
}

//-------------------------------------------------------------------------------
function isTime(Str) {
		var bool1 = /^[0-1]?\d:[0-5]\d(:[0-5]\d)?$/.test(Str);
		var bool2 = /^[2][0-3]:[0-5]\d(:[0-5]\d)?$/.test(Str);
		return ((bool1)||(bool2));
}

//-------------------------------------------------------------------------------
function isDateTime(Str) {
		var str = RemoveSpace(Str).split(' ');
		return isDate(str[0]) && isTime(str[1]);
}

//-------------------------------------------------------------------------------
function isDomain (Str) {
	// The pattern for matching all special characters. 
  	//These characters include ( ) < > [ ] " | \ / ~ ! @ # $ % ^ & ? ` ' : ; , 
	var specialChars="\\(\\)<>#\\$&\\*!`\\^\\?~|/@,;:\\\\\\\"\\.\\[\\]";
	// The range of characters allowed in a username or domainname. 
	// It really states which chars aren't allowed. 
	var validChars="\[^\\s" + specialChars + "\]";
	 // An atom (basically a series of  non-special characters.) 
	var atom=validChars + '+';
	// The structure of a normal domain 
	var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
	
	// Check if IP
	var ipDomainPat=/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/;
	var IPArray=Str.match(ipDomainPat);
	if (IPArray!=null) {
  	// this is an IP address
	 	 for (var i=1;i<=4;i++) {
	    		if (IPArray[i]>255) {
	 			return false
	   		 }
   		 }
	}
	// Check Domain
	var domainArray=Str.match(domainPat)
	if (domainArray==null) {
    		return false;
	}

	/* domain name seems valid, but now make sure that it ends in a
	 three-letter word (like com, edu, gov ... ) or a two-letter word,
   	representing country (uk, vn) or a four-letter word (.info), and that there's a hostname preceding 
   	the domain or country. */

	/* Now we need to break up the domain to get a count of how many atoms
	it consists of. */
	var atomPat=new RegExp(atom,"g")
	var domArr=Str.match(atomPat)
	var len=domArr.length
	if (domArr[domArr.length-1].length<2 || domArr[domArr.length-1].length>4) {
	 // the address must end in a two letter or three letter word or four-letter word.
		return false;
	}

	// Make sure there's a host name preceding the domain.
	if (len<2) {
   		 return false;
	}

	return true;
}

//-------------------------------------------------------------------------------
function isOpenDomain (Str) { // E.g : lengvu.saigonnet.vn:81 or 203.162.6.65:8080
	var pos=Str.indexOf(':');
	if (pos==-1) {
		return (isDomain(Str))
	}
	else {
		domain=Str.substring(0,pos);
		openDomain = Str.substring(pos,Str.length);
	}
		return ((/^[\:]{1}\d+$/.test(openDomain))&&(isDomain(domain)));
}

//-------------------------------------------------------------------------------
function isUser (Str) {
	var specialChars="\\(\\)<>#\\$&\\*!`\\^\\?~|/@,;:\\\\\\\"\\.\\[\\]";
	var validChars="\[^\\s" + specialChars + "\]";
	/* The pattern applies if the "user" is a quoted string (in
   	which case, there are no rules about which characters are allowed
   	and which aren't; anything goes).  E.g. "le nguyen vu"@webtome.com
   	is a valid (legal) e-mail address. */
	var quotedUser="(\"[^\"]*\")";
	var atom=validChars + '+'
	var word="(" + atom + "|" + quotedUser + ")";
	var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
	// See if "user" is valid 
	if (Str.match(userPat)==null) {
    		return false ;
	}
	return true;
}

//-------------------------------------------------------------------------------
function isURL(Str) { //not include http://
	var pos=Str.indexOf('/');
	var domain = (pos==-1)?Str:Str.substring(0,pos);
	var subURL = (pos==-1)?'':Str.substring(pos,Str.length);
	if (!isOpenDomain(domain)) {
		return false;
	}
	if ((subURL=='')||(subURL.length==1)) {
		return true;
	}
	var subPat = /^\/[^\/\\]+\.?[^\/\\]+(\/[^\/\\]*\.{0,1}[^\/\\]*)*$/;
	var ArrayURL=subURL.match(subPat);
	if (ArrayURL==null) {
		return false;
	}
	return true;
}

//-------------------------------------------------------------------------------
function isEmail (emailStr) {
	/* The pattern for matching fits the user@domain format. */
	var emailPat=/^(.+)@(.+)$/ ;
	var matchArray=emailStr.match(emailPat);
	if (matchArray==null) {
 	 /* Too many/few @'s or something; basically, this address doesn't
    	 even fit the general mould of a valid e-mail address. */
		return false;
	}
	var user=matchArray[1];
	var domain=matchArray[2];

	// See if "user" is valid 
	if (!isUser(user)) {
    	// user is not valid
   		 return false ;
	}

	// Check Domain
	if (!isDomain(domain)) {
   		return false;
	}
	return true;
}
function isUserName(strUserName){
	return /^[a-z0-9_\-]{4,15}$/.test(strUserName);
}
//-------------------------------------------------------------------------------
function isPhone(strPhone) {
	return  /^(\d{6,15})$/.test(strPhone);
	//return  /^[\+\-\(]?(\d*[\.\-\(\)\s\+]*\d*)*$/.test(strPhone);
}

//-------------------------------------------------------------------------------
function checkNumRange (value, nMin,nMax){
	if (!isInteger(value)) return false;
	if (value <nMin || value > nMax ) return false;
	return true;
}

//-------------------------------------------------------------------------------
function isFlash(fileName) {
  if (fileName=='') {
   	return false;   	
  }
  var ext = getExtension(fileName).toLowerCase();
  var e;
for(e in arrFlashFiles){
	if(arrFlashFiles[e]==ext) return true;
}
return false;
}

//-------------------------------------------------------------------------------
function isPix(fileName) {
  if (fileName=='') {
   	return false;   	
  }
  var ext = getExtension(fileName).toLowerCase();
  var e;
for(e in arrPixFiles){
	if(arrPixFiles[e]==ext) return true;
}
return false;
}

//-------------------------------------------------------------------------------
function getExtension(fileName){
		return fileName.substr(fileName.lastIndexOf(".")+1);
}


function checkContact(f){
			f.sender.value = Trim(f.sender.value);
			f.address.value = Trim(f.address.value);
			f.phone.value = Trim(f.phone.value);
			f.email.value = Trim(f.email.value);
			f.content.value = Trim(f.content.value);
			f.title.value = Trim(f.title.value);
			
			if(f.sender.value==''){
				alert(msg_pls_yourname);
				f.sender.focus();
				return false;
			}
			if(!isEmail(f.email.value)){
				alert(msg_pls_valild_email);
				f.email.focus();
				return false;
			}
			if(f.title.value==''){
				alert(msg_pls_subject);
				f.title.focus();
				return false;
			}
			if(f.content.value==''){
				alert(msg_pls_content);
				f.content.focus();
				return false;
			}
			return true;
		}
		

function checkRegister(f){
			f.username.value = Trim(f.username.value);
			f.name.value = Trim(f.name.value);
			f.address.value = Trim(f.address.value);
			f.company.value = Trim(f.company.value);
			f.phone.value = Trim(f.phone.value);
			f.email.value = Trim(f.email.value);
			
			if(f.username.value==''){
				alert(msg_pls_username);
				f.username.focus();
				return false;
			}
			if(!isUserName(f.username.value)){
				alert(msg_pls_valild_username);
				f.username.focus();
				return false;
			}
			if(f.name.value==''){
				alert(msg_pls_yourname);
				f.name.focus();
				return false;
			}
			
			if(!isEmail(f.email.value)){
				alert(msg_pls_valild_email);
				f.email.focus();
				return false;
			}
			
			return true;
		}

function checkLogin(f){

		if(Trim(f.username.value)=='') {
				alert(msg_pls_username);
				f.username.focus();
				return false;
		}
		if(f.password.value=='') {
				alert(msg_pls_password);
				f.password.focus();
				return false;
		}
		return true;
}
function checkProfile(f){
		f.name.value = Trim(f.name.value);
		f.address.value = Trim(f.address.value);
		f.phone.value = Trim(f.phone.value);
		f.email.value = Trim(f.email.value);
		f.company.value = Trim(f.company.value);
		if(f.name.value==''){
			alert(msg_pls_yourname);
			f.name.focus();
			return false;
		}
		
		if(!isEmail(f.email.value)){
			alert(msg_pls_valild_email);
			f.email.focus();
			return false;
		}
		
		if(f.change_pass.checked){
			if(f.password_old.value==''){
				alert(msg_changepass_pls_oldpass);
				f.password_old.focus();
				return false;
			}
			if(f.password_new.value==''){
				alert(msg_changepass_pls_newpass);
				f.password_new.focus();
				return false;
			}
			if(f.password_new.value.length<4){
				alert(msg_changepass_pls_rulepass);	
				f.password_new.focus();
				return false;
			}
			if(f.retype.value==''){
				alert(msg_pls_retype);
				f.retype.focus();
				return false;
			}
			if(f.retype.value!=f.password_new.value){
				alert(msg_changepass_pls_cofirm_wrong);	
				f.retype.focus();
				return false;
			}
		}
		return true;
	}
function checkForgot(f){
	f.username.value = Trim(f.username.value);
	f.email.value = Trim(f.email.value);
	if((f.username.value=='')&&(f.email.value=='')){
		alert(msg_forgot_password);
		f.username.focus();
		return false;
	}
}

	function checkFaq(f){
		f.sender.value = Trim(f.sender.value);
		f.email.value = Trim(f.email.value);
		f.title.value = Trim(f.title.value);
		f.question.value = Trim(f.question.value);
		if(f.sender.value==''){
			alert('Please input your full name !');
			f.sender.focus();
			return false;
		}
		if(!isEmail(f.email.value)){
			alert('Please input valid email, we\'ll reply to you via this email !');
			f.email.focus();
			return false;
		}
		if(f.title.value==''){
			alert('Please input the subject !');
			f.title.focus();
			return false;
		}
		if(f.question.value==''){
			alert('Please input the content question !');
			f.question.focus();
			return false;
		}
	}




	function checkEmail(f){
		f.email.value = Trim(f.email.value)
		if(!isEmail(f.email.value)){
			alert('Please input your valid email, thank you !');
			f.email.focus();
			return false;
		}
		window.open('newsletter.php?email='+f.email.value,'','width=400,height=150');
		return false;
	}

function checkSendMail2Friend(f){
	f.email.value = Trim(f.email.value); 
	if(!isEmail(f.email.value)){
			alert(msg_pls_valild_email);
			f.email.focus();
			return false;
		}
	window.open('send_mail.php?email_to_1='+f.email.value,'','width=400,height=300');
	return false;
}
function checkComment(f){
	var nameObj = document.getElementById('guest_name');
	if(nameObj){
		nameObj.value = Trim(nameObj.value);	
		if(nameObj.value==''){
			alert('Please input your full name !');
			nameObj.focus();
			return false;
		}
	}
	var emailObj = document.getElementById('email');
	if(emailObj){
		emailObj.value = Trim(emailObj.value);
		if(!isEmail(emailObj.value)){
			alert('Please input a valid email, thank you !');
			emailObj.focus();
			return false;
		}
	}
	f.title.value = Trim(f.title.value);
	f.content.value = Trim(f.content.value);
	if(f.title.value==''){
		alert('Please input your subject, thank you !');
		f.title.focus();
		return false;
	}
	if(f.content.value.length < 30){
		alert('Comment more than 30 characters, please check again !');	
		f.content.focus();
		return false;
	}
	//f.content.value = TypingCheck(f.content.value);
	return true;
}
function checkLyric(f){
	f.lyric.value = Trim(f.lyric.value);
	if(f.lyric.value.length < 30){
		alert('Lyric more than 30 characters, please check again !');	
		f.lyric.focus();
		return false;
	}
	//f.lyric.value = TypingCheck(f.lyric.value);
	return true;
}
function checkPost(f){
	f.content.value = Trim(f.content.value);
	if(f.content.value==''){
		alert('Please input your informations, thank you !');	
		f.content.focus();
		return false;
	}
	//f.lyric.value = TypingCheck(f.lyric.value);
	return true;
}
function checkTopSearch(f){
	if((f.withby.value=='album')||(f.withby.value=='production')) {
		f.action = 'albums.php';
		if(f.withby.value=='production') f.manu_id.value='';
	}
	else {f.action = 'musics.php';}
}
function checkVote(f){
		return true;
}
											function checkShipping(f){
												if(f.ship_to.value=='1'){
													if(f.name!=null){
														f.name.value = Trim(f.name.value);
														if(f.name.value==''){
															alert('Vui lòng nhập họ tên của bạn !');
															f.name.focus();
															return false;
														}
													}
													if(f.address!=null){
														f.address.value = Trim(f.address.value);	
														if(f.address.value==''){
															alert('Vui lòng nhập địa chỉ của bạn !');
															f.address.focus();
															return false;
														}
													}
													if(f.city!=null){
														f.city.value = Trim(f.city.value);	
														if(f.city.value==''){
															alert('Vui lòng nhập tỉnh/thành của bạn !');
															f.city.focus();
															return false;
														}
													}
													if(f.country!=null){
														f.country.value = Trim(f.country.value);
														if(f.country.value==''){
															alert('Vui lòng chọn quốc gia của bạn !');
															f.country.focus();
															return false;
														}
													}
												}
												f.submit();
												return true;
											}

											function checkStep1(f){
													if(f.billing_first_name!=null){
														f.billing_first_name.value = Trim(f.billing_first_name.value);
														if(f.billing_first_name.value==''){
															alert('Please input billing first name !');
															f.billing_first_name.focus();
															return false;
														}
													}
													if(f.billing_last_name!=null){
														f.billing_last_name.value = Trim(f.billing_last_name.value);
														if(f.billing_last_name.value==''){
															alert('Please input billing last name !');
															f.billing_last_name.focus();
															return false;
														}
													}
													if(f.billing_email!=null){
														f.billing_email.value = Trim(f.billing_email.value);
														if(!isEmail(f.billing_email.value)){
															alert('Please input correct billing email !');
															f.billing_email.focus();
															return false;
														}
													}
													if(f.billing_address!=null){
														f.billing_address.value = Trim(f.billing_address.value);	
														if(f.billing_address.value==''){
															alert('Please input billing email !');
															f.billing_address.focus();
															return false;
														}
													}
													if(f.billing_city!=null){
														f.billing_city.value = Trim(f.billing_city.value);	
														if(f.billing_city.value==''){
															alert('Please input billing city !');
															f.billing_city.focus();
															return false;
														}
													}
													if(f.billing_country!=null){
														f.billing_country.value = Trim(f.billing_country.value);
														if(f.billing_country.value==''){
															alert('Please input billing country !');
															f.billing_country.focus();
															return false;
														}
													}
													if(f.billing_phone!=null){
														f.billing_phone.value = Trim(f.billing_phone.value);
														if(f.billing_phone.value==''){
															alert('Please input billing phone !');
															f.billing_phone.focus();
															return false;
														}
													}
													if(f.delivery_first_name!=null){
														f.delivery_first_name.value = Trim(f.delivery_first_name.value);
														if(f.delivery_first_name.value==''){
															alert('Please input shipping first name !');
															f.delivery_first_name.focus();
															return false;
														}
													}
													if(f.delivery_last_name!=null){
														f.delivery_last_name.value = Trim(f.delivery_last_name.value);
														if(f.delivery_last_name.value==''){
															alert('Please input shipping last name !');
															f.delivery_last_name.focus();
															return false;
														}
													}
													if(f.delivery_email!=null){
														f.delivery_email.value = Trim(f.delivery_email.value);
														if(!isEmail(f.delivery_email.value)){
															alert('Please input correct shipping email !');
															f.delivery_email.focus();
															return false;
														}
													}
													if(f.delivery_address!=null){
														f.delivery_address.value = Trim(f.delivery_address.value);	
														if(f.delivery_address.value==''){
															alert('Please input shipping email !');
															f.delivery_address.focus();
															return false;
														}
													}
													if(f.delivery_city!=null){
														f.delivery_city.value = Trim(f.delivery_city.value);	
														if(f.delivery_city.value==''){
															alert('Please input shipping city !');
															f.delivery_city.focus();
															return false;
														}
													}
													if(f.delivery_country!=null){
														f.delivery_country.value = Trim(f.delivery_country.value);
														if(f.delivery_country.value==''){
															alert('Please input shipping country !');
															f.delivery_country.focus();
															return false;
														}
													}
													if(f.delivery_phone!=null){
														f.delivery_phone.value = Trim(f.delivery_phone.value);
														if(f.delivery_phone.value==''){
															alert('Please input shipping phone !');
															f.delivery_phone.focus();
															return false;
														}
													}
												//f.submit_img.disabled = true;	
												return true;
											}
function exportBilling(f,field_src,field_dest){
	field_src.value = upper_first_char(field_src.value);
	if(f.same_billing.checked){
		field_dest.value = field_src.value;
	}
	return ;
}
function exportBillingAll(f){
	f.delivery_first_name.value = f.billing_first_name.value
	f.delivery_last_name.value = f.billing_last_name.value
	f.delivery_email.value = f.billing_email.value
	f.delivery_address1.value = f.billing_address1.value
	f.delivery_address2.value = f.billing_address2.value
	f.delivery_city.value = f.billing_city.value
	f.delivery_postcode.value = f.billing_postcode.value
	f.delivery_state.value = f.billing_state.value
	f.delivery_country.value = f.billing_country.value
	f.delivery_phone.value = f.billing_phone.value
	return ;
}
function cardImage(value){
	var cardImgObj = document.getElementById('card_img');
	switch(value){
		case 'MasterCard':
			cardImgObj.src = 'images/mastercard_ccid.jpg';
			break;
		case 'Discover':
			cardImgObj.src = 'images/discover_ccid.jpg';
			break;
		case 'Amex':
			cardImgObj.src = 'images/amex_ccid.jpg';
			break;
		default :
			cardImgObj.src = 'images/visa_ccid.jpg';
			break;
	}
	
}
function checkStep2(f){
	if(f.payment_method[1].checked){
		f.creditCardNumber.value = Trim(f.creditCardNumber.value);
		f.cvv2Number.value = Trim(f.cvv2Number.value);
		if(f.creditCardNumber.value==''){
			alert('Please input credit card number !');
			f.creditCardNumber.focus();
			return false;
		}
		if(f.cvv2Number.value==''){
			alert('Please input CCID !');
			f.cvv2Number.focus();
			return false;
		}
	}
	return true;
}

function AcceptNumbersOnly() {
	switch (event.keyCode) {
		case 48:
		case 49:
		case 50:
		case 51:
		case 52:
		case 53:
		case 54:
		case 55:
		case 56:
		case 57:
		case 8:
		case 9:
		case 35:
		case 36:
		case 37:
		case 39:
		case 46:
		case 96:
		case 97:
		case 98:
		case 99:
		case 100:
		case 101:
		case 102:
		case 103:
		case 104:
		case 105:
			break;
		case 86:
			if (event.ctrlKey) {
				event.returnValue=true;
			}	else {
				event.returnValue=false;
			}
			break;
		case 45:
			event.returnValue=true;
			break;
		default:
			event.returnValue=false;
			break;
	}
}
function AcceptNumbersAndPlus() {
	var compareString = '0123456789+';
		var mainString=String.fromCharCode(window.event.keyCode);
		if(compareString.indexOf(mainString)!=-1)
			return;
		else
			window.event.returnValue=false;
}