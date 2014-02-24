/*-------------------------------------------------------------------------------
	*	FileName ; $common.js
	* Function : commmon utilies functions
	* CreatedDate : 01/02/2003
	* LastUpdate : 01/03/2003
-------------------------------------------------------------------------------*/
var arrPixFiles = new Array("jpg","jpeg","gif","png","bmp","tif","jpe");
var arrDocFiles = new Array("doc","xls","txt","xls","pdf","ppt","rtf","zip","rar","gz","bz2","tar","psd","fla");
var arrMovieFiles = new Array("div","mov","wmv","wma","avi","mpg","mpeg","qt","mp4","ram");
var arrFlashFiles = new Array("swf");
var _fileName;
var marked_row = new Array;
function stoperror(){ 
return true 
} 
window.onerror=stoperror 

//------------------------------------------------
// Function Name : LTrim 
// Actions : Remove left string.
//------------------------------------------------
function LTrim(Str) {
	return Str.replace(/^\s+/, '');
}

//------------------------------------------------
// Function Name : RTrim 
// Actions : Remove right space.
//------------------------------------------------
function RTrim(Str) {
	return Str.replace(/\s+$/, '');
}

//------------------------------------------------
// Function Name : Trim 
// Actions : Remove left&right space.
//------------------------------------------------
function Trim(Str) {
	return RTrim(LTrim(Str));
}

//------------------------------------------------
// Function Name : RemoveSpace 
// Actions : Remove left, right & all unwanted spaces inside a Str
//------------------------------------------------
function RemoveSpace(Str) {
	var str = Trim(Str).replace(/\s+/g, ' ');
	str = str.replace(/\s+[,]/g, ',');
	str = str.replace(/\s+[;]/g, ' ;');
	str = str.replace(/\s+[:]/g, ' :');
	return str.replace(/\s+[.]/g, '.');
}

//------------------------------------------------
// Function Name : AddSpace 
// Actions : Add some space to correct sentense
//------------------------------------------------
function AddSpace(Str) {
	var str = Str.replace(/\,/g, ', ');
	str = str.replace(/;/g, '; ');
	str = str.replace(/;/g, ' ;');
	str = str.replace(/\./g, '. ');
	str = str.replace(/\:/g, ' :');
	str = str.replace(/\:/g, ': ');
	str = RemoveSpace(str);
	return str;
}

//------------------------------------------------
// Function Name : TypingCheck 
// Actions : Check spell
//------------------------------------------------
function TypingCheck(Str) {
	var arrayStr = new Array();
	Str = AddSpace(Str);
	for (var i = 0; i < Str.length; i++) {
			arrayStr[i] = Str.charAt(i);
	}
	for (var i = 0; i < Str.length; i++) {
		if ( ( (isPeriod = (arrayStr[i] == '.')) || (arrayStr[i] == ',') || (arrayStr[i] == ';') )  && (i != Str.length - 1) ) {
			arrayStr[i+2] = isPeriod ? arrayStr[i+2].toUpperCase() : arrayStr[i+2].toLowerCase();
		}
	}
	arrayStr[0] = arrayStr[0].toUpperCase();
	var str = "";
	for (var i = 0; i < Str.length; i++) {
			str += arrayStr[i];
	}
	return str;
}
function CheckAll_bottom(f)
{
	if(f.allbox_up.checked) {
		for(var i=0;i<f.elements.length;i++)
		{
			var e=f.elements[i];
			if((e.name!='allbox_up')&&(e.type=='checkbox')&&(e.disabled==false)) {
				if(!e.checked) {
					e.click();
				}
			}
		}
	}else {
		for(var i=0;i<f.elements.length;i++)
		{
			var e=f.elements[i];
			if((e.name!='allbox_up')&&(e.type=='checkbox')&&(e.disabled==false)) {
				e.click();
			}
		}
	}
}
function CheckAll_bottom_v2(f)
{
	if(f.allbox_up.checked) {
		for(var i=0;i<f.elements.length;i++)
		{
			var e=f.elements[i];
			if((e.name!='allbox_up')&&(e.type=='checkbox')&&(e.disabled==false)) {
				if(!e.checked) {
					e.click();
				}
			}
		}
	}else {
		for(var i=0;i<f.elements.length;i++)
		{
			var e=f.elements[i];
			if((e.name!='allbox_up')&&(e.type=='checkbox')&&(e.disabled==false)) {
				e.click();
			}
		}
	}
}
 function pasteClass(e,classSelect,classNormal)
    {
	var r = null;
	if (e.parentNode && e.parentNode.parentNode) {
	    r = e.parentNode.parentNode;
	}
	else if (e.parentElement && e.parentElement.parentElement) {
	    r = e.parentElement.parentElement;
	}
	if (r) {
		r.className = e.checked ? classSelect : classNormal;
	}
    }

 function nothing(e,bg,row_number,mark_color)
    {
	var r = null;
	if (e.parentNode && e.parentNode.parentNode) {
	    r = e.parentNode.parentNode;
	}
	else if (e.parentElement && e.parentElement.parentElement) {
	    r = e.parentElement.parentElement;
	}
	if (r) {
		var  theCells = null;
		//r.style.backgroundColor=bg;
		if (typeof(document.getElementsByTagName) != 'undefined') {
			theCells = r.getElementsByTagName('td');
		}
		else if (typeof(r.cells) != 'undefined') {
			theCells = r.cells;
		}
		else {
			return false;
		}
		 var rowCellsCnt  = theCells.length;
         for (var c = 0; c < rowCellsCnt; c++) {
              //theCells[c].style.backgroundColor = bg;
			  theCells[c].setAttribute('bgcolor', bg, 0);
         }
		 if(bg.toLowerCase()==mark_color.toLowerCase()) {
			 marked_row[row_number] = true;
		 }
		 else marked_row[row_number] = false;
	}
    }
	
function setPointer(theRow, theRowNum, theAction, theDefaultColor, thePointerColor, theMarkColor)
{
    var theCells = null;

    // 1. Pointer and mark feature are disabled or the browser can't get the
    //    row -> exits
    if ((thePointerColor == '' && theMarkColor == '')
        || typeof(theRow.style) == 'undefined') {
        return false;
    }

    // 2. Gets the current row and exits if the browser can't get it
    if (typeof(document.getElementsByTagName) != 'undefined') {
        theCells = theRow.getElementsByTagName('td');
    }
    else if (typeof(theRow.cells) != 'undefined') {
        theCells = theRow.cells;
    }
    else {
        return false;
    }

    // 3. Gets the current color...
    var rowCellsCnt  = theCells.length;
    var domDetect    = null;
    var currentColor = null;
    var newColor     = null;
    // 3.1 ... with DOM compatible browsers except Opera that does not return
    //         valid values with "getAttribute"
    if (typeof(window.opera) == 'undefined'
        && typeof(theCells[0].getAttribute) != 'undefined') {
        currentColor = theCells[0].getAttribute('bgcolor');
        domDetect    = true;
    }
    // 3.2 ... with other browsers
    else {
        currentColor = theCells[0].style.backgroundColor;
        domDetect    = false;
		
    } // end 3

    // 3.3 ... Opera changes colors set via HTML to rgb(r,g,b) format so fix it
    if (currentColor.indexOf("rgb") >= 0)
    {
        var rgbStr = currentColor.slice(currentColor.indexOf('(') + 1,
                                     currentColor.indexOf(')'));
        var rgbValues = rgbStr.split(",");
        currentColor = "#";
        var hexChars = "0123456789ABCDEF";
        for (var i = 0; i < 3; i++)
        {
            var v = rgbValues[i].valueOf();
            currentColor += hexChars.charAt(v/16) + hexChars.charAt(v%16);
        }
    }

    // 4. Defines the new color
    // 4.1 Current color is the default one
    if (currentColor == ''
        || currentColor.toLowerCase() == theDefaultColor.toLowerCase()) {
        if (theAction == 'over' && thePointerColor != '') {
            newColor              = thePointerColor;
        }
        else if (theAction == 'click' && theMarkColor != '') {
            newColor              = theMarkColor;
            marked_row[theRowNum] = true;
            // Garvin: deactivated onclick marking of the checkbox because it's also executed
            // when an action (like edit/delete) on a single item is performed. Then the checkbox
            // would get deactived, even though we need it activated. Maybe there is a way
            // to detect if the row was clicked, and not an item therein...
            // document.getElementById('id_rows_to_delete' + theRowNum).checked = true;
        }
    }
    // 4.1.2 Current color is the pointer one
    else if (currentColor.toLowerCase() == thePointerColor.toLowerCase()
             && (typeof(marked_row[theRowNum]) == 'undefined' || !marked_row[theRowNum])) {
        if (theAction == 'out') {
            newColor              = theDefaultColor;
        }
        else if (theAction == 'click' && theMarkColor != '') {
            newColor              = theMarkColor;
            marked_row[theRowNum] = true;
            // document.getElementById('id_rows_to_delete' + theRowNum).checked = true;
        }
    }
    // 4.1.3 Current color is the marker one
    else if (currentColor.toLowerCase() == theMarkColor.toLowerCase()) {
        if (theAction == 'click') {
            newColor              = (thePointerColor != '')
                                  ? thePointerColor
                                  : theDefaultColor;
            marked_row[theRowNum] = (typeof(marked_row[theRowNum]) == 'undefined' || !marked_row[theRowNum])
                                  ? true
                                  : null;
            // document.getElementById('id_rows_to_delete' + theRowNum).checked = false;
        }
    } // end 4

    // 5. Sets the new color...
    if (newColor) {
        var c = null;
        // 5.1 ... with DOM compatible browsers except Opera
        if (domDetect) {
            for (c = 0; c < rowCellsCnt; c++) {
                theCells[c].setAttribute('bgcolor', newColor, 0);
            } // end for
        }
        // 5.2 ... with other browsers
        else {
            for (c = 0; c < rowCellsCnt; c++) {
                theCells[c].style.backgroundColor = newColor;
            }
        }
    } // end 5

    return true;
} // end of the 'setPointer()' function

function checkSearch(f) {
	var keys;
	var keys_lower;
	var keys_upper;
	keys = Trim(f.k.value);
	if (keys!='') {
		f.k.value = keys;
		keys_lower = keys.toLowerCase();
		f.l.value = keys_lower;
		keys_upper = keys.toUpperCase();
		f.u.value = keys_upper;
		f.pgid.value="search";
		return true;
	}
	return false;
}	
function checkNewsletter(f){
	if(isEmail(f.email.value)){
		window.open('newsletter.php?email='+f.email.value,'PopNewsLetter','width=350,height=60');
	}
	else{
		alert('Email không hợp lệ. Vui lòng kiểm tra lại !');
		f.email.focus();
	}
	return false;
}
function checkMail(f){
	if(isEmail(f.email.value)){
		window.open('mail2friend.php?email='+f.email.value,'PopEmail','width=350,height=60');
	}
	else{
		alert('Email không hợp lệ. Vui lòng kiểm tra lại !');
		f.email.focus();
	}
	return false;
}
	function setCookie(name,value){
		document.cookie = name + '=' + escape(value) +  ';path=/';
		return ;
	}
	function getCookie(name){
		var cname = name + '=';
		var dc = document.cookie;
		if (dc.length > 0) {
			var begin = dc.indexOf(cname);
			if (begin != -1) {
			begin += cname.length;
			var end = dc.indexOf(';', begin);
			if (end == -1) end = dc.length;
				return unescape(dc.substring(begin, end));
			}
		}
		return null;
	}
	
function GetYear() {
	var mydate=new Date()
	var year=mydate.getYear()
	if (year < 1000)
		year+=1900
	document.write (year)
}
function showImage(url)
{
	showDialog('ImageView.htm?' + url.substr(url.indexOf('?') + 1), 524, 524);
}

function showDialog(url, width, height)
{
	return showWindow(url, false, false, false, false, false, false, true, true, width, height, 0, 0);
}

function showWindow(url, isStatus, isResizeable, isScrollbars, isToolbar, isLocation, isFullscreen, isTitlebar, isCentered, width, height, top, left)
{
	if (isCentered)
	{
		top = (screen.height - height) / 2;
		left = (screen.width - width) / 2;
	}

	open(url, '_blank', 'status=' + (isStatus ? 'yes' : 'no') + ','
	+ 'resizable=' + (isResizeable ? 'yes' : 'no') + ','
	+ 'scrollbars=' + (isScrollbars ? 'yes' : 'no') + ','
	+ 'toolbar=' + (isToolbar ? 'yes' : 'no') + ','
	+ 'location=' + (isLocation ? 'yes' : 'no') + ','
	+ 'fullscreen=' + (isFullscreen ? 'yes' : 'no') + ','
	+ 'titlebar=' + (isTitlebar ? 'yes' : 'no') + ','
	+ 'height=' + height + ',' + 'width=' + width + ','
	+ 'top=' + top + ',' + 'left=' + left);
}
function openBox(winWidth, winHeight, scrollbars,toolbar,top,left,fileSrc) {
	var newParameter = "width=" + winWidth + ",height=" + winHeight ;
	newParameter += ",scrollbars="+scrollbars+",toolbar="+toolbar+",top="+top+",left="+left;
    var newWindow = open(fileSrc,"",newParameter);
}
function DateDisplay() {
	var mydate=new Date()
	var year=mydate.getYear()
	if (year < 1000)
		year+=1900
	var day=mydate.getDay()
	var month=mydate.getMonth()
	var daym=mydate.getDate()
	if (daym<10) daym="0"+daym
		var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
		var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
		document.write(dayarray[day]+", "+montharray[month]+" "+daym+", "+year)
}

function writeTime()
{
	var mydate=new Date()
	
	var year = mydate.getYear()
	if (year < 1000)
		year += 1900
	var month = mydate.getMonth() + 1
	if (month < 10)
		month = "0" + month
	var day = mydate.getDate()
	if (day < 10)
		day = "0" + day

	var dayw = mydate.getDay()
	
	var hour = mydate.getHours()
	if (hour < 10)
		hour = "0" + hour
	
	var minute=mydate.getMinutes()
	if (minute < 10)
		minute = "0" + minute
	var dayarray=new Array("Ch&#7911; Nh&#7853;t","Th&#7913; Hai","Th&#7913; Ba","Th&#7913; T&#432;","Th&#7913; N&#259;m","Th&#7913; S&#225;u","Th&#7913; B&#7843;y")
	document.write(dayarray[dayw]+", "+day+"/"+month+"/"+year+",&nbsp;"+hour+":"+minute+" (GMT+7)")
}

	function getCategoryName(id){
		var i;
		for(i=0;i<Tree.length;i++){
			var arrElement = Tree[i].split('|');
			if(arrElement[0]==id){
				return arrElement[2];
			}
		}
		return 'Products';
	}
	function getCategoryName4member(id){
		var i;
		for(i=0;i<Tree4member.length;i++){
			var arrElement = Tree4member[i].split('|');
			if(arrElement[0]==id){
				return arrElement[2];
			}
		}
		return '';
	}
	function instantStr(str){
		var imax = str.length;
		var str_new = '';
		for(var i=0;i<str.length;i++){
			str_new += str.charAt(i)+'&nbsp;'; 
		}
		return str_new;
	}
	function getTopicName(id){
		var i;
		for(i=0;i<arr_document_topic.length;i++){
			if(arr_document_topic[i][0]==id) return arr_document_topic[i][1];
		}
		return 'N/A';
	}
	function setCookie(name,value){
		document.cookie = name + '=' + escape(value) +  ';path=/';
		return ;
	}
	function getCookie(name){
		var cname = name + '=';
		var dc = document.cookie;
		if (dc.length > 0) {
			var begin = dc.indexOf(cname);
			if (begin != -1) {
			begin += cname.length;
			var end = dc.indexOf(';', begin);
			if (end == -1) end = dc.length;
				return unescape(dc.substring(begin, end));
			}
		}
		return null;
	}	
	

