// tabClick(arrTabEmployer,arrTabEmployerFile,'list','td_parent_window',1);
//var arrTabEmployer = ['list','detail'];
//var arrTabEmployerFile = ['inc_employer_list','inc_employer_detail'];
function tabClick(arrTabName,arrTabNameFile,tabName,tagDiv,isSC){
	  var tabObj;
	  var fileName;
	  var tagDivObj = document.getElementById(tagDiv);
	  if(tagDivObj)	  tagDivObj.style.height = 100;
	  for(var i=0;i<arrTabName.length;i++){
		  tabObj = document.getElementById('td_'+arrTabName[i]);
		  if(tabObj){
			  if(arrTabName[i]!=tabName) tabObj.className = 'tab';
			  else {
				  tabObj.className = 'tabselect';
				  fileName = arrTabNameFile[i];
			  }
			  
		  }
  	  }
	  if(typeof(fileName)!='undefined'){
		  if(isSC!=null){
		  	 ajaxLoadIF(fileName+'.php', tagDiv);
		  }else{
			 ajaxManager('load_page', fileName+'.php', tagDiv); 
		  }
  	  }
  }
  
  
  function ajaxLoadIF(){
	var args = ajaxLoadIF.arguments;
	var el = document.getElementById(args[1]);
	if(el){
		el.innerHTML = '<IFrame align=top frameborder=0 height="100%" width="100%" marginheight=0 marginwidth=0 style="margin-top:10px; margin-left:0px; margin-right:0px; margin-bottom:0px;" scrolling=no src="'+args[0]+'" name="if_parent_window"></Iframe>';	
	}
}
  
  
 // ex: ajaxManager('load_page','inc_employee_list.php','td_parent_window');
  function ajaxManager(){
	var args = ajaxManager.arguments;
	viewLoadStatus(args[2]);
	switch (args[0]){
		case "load_page":
			if (document.getElementById) {
				var x = (window.ActiveXObject) ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest();
			}
			if (x){
				x.onreadystatechange = function(){
					if (x.readyState == 4 && x.status == 404){
						var el = document.getElementById(args[2]);
						if(el){
								//showThisItem(el);
								if((el.tagName.toUpperCase()=='INPUT')||(el.tagName.toUpperCase()=='TEXTAREA')){
									el.value = "Sorry, Sir/Madam. I tried, but, content you require's not found !";	
								}else{
									el.innerHTML = "Sorry, Sir/Madam. I tried, but, content you require's not found !";	
								}
						}
						//remove_loading(args[2]);
					}
					if (x.readyState == 4 && x.status == 200){
						var el = document.getElementById(args[2]);
						if(el){
							//showThisItem(el);
							if(args[5]){
								var eval_str = args[5]+'("'+ x.responseText +'","'+args[2]+'")';
								eval(eval_str);
							}else{
								if((el.tagName.toUpperCase()=='INPUT')||(el.tagName.toUpperCase()=='TEXTAREA')){
									el.value = x.responseText;
								}else{
									marked_row = new Array;
									var location = Trim(x.responseText.substr(0,9).toString().toLowerCase());
									if(location!="location"){
										el.innerHTML = x.responseText;
										runAfterLoad();	
										/*
										if((args[1].toString().substr("http://"+window.location.hostname+"/employee/".length,19).toLowerCase()=='inc_resume_create.p')||(args[1].toString().substr("http://"+window.location.hostname+"/employee/".length,19).toLowerCase()=='inc_resume_edit.php')){
											
										}
										*/
									}else{
										window.location.href=x.responseText.substr(10);
									}
								}
							}
						}
						//remove_loading(args[2]);
					}
				}
				if((args[3])&&(args[4])){
					try{
						x.open(args[3], args[1], true);
						x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						x.send(args[4]);
					}catch(e){
						alert(e);
					}
				}else{
					try{
						x.open("GET", args[1], true);
						x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						x.send(null);
					}catch(e){
						alert(e);
					}	
				}
			}
			break;
		case "load_js" :
			if (document.getElementById) {
				var x = (window.ActiveXObject) ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest();
				}
				if (x)
					{
				x.onreadystatechange = function(){
					if (x.readyState == 4 && x.status == 200){
						var getheadTag = document.getElementsByTagName('head')[0];
						setjs = document.createElement('script'); 
						//setjs.setAttribute('type', 'text/javascript');
						if(args[2]){
						setjs.setAttribute('language', args[2]);
						}
						getheadTag.appendChild(setjs); 
						setjs.text = x.responseText;
						}
					}
					x.open("GET", args[1],true);
					x.send(null);
					}
				break;	
	}
}

function viewLoadStatus(tagHTML){
	if(tagHTML!=null){
		var targelem = document.getElementById(tagHTML);
		if((targelem.tagName.toUpperCase()!='INPUT')&&(targelem.tagName.toUpperCase()!='TEXTAREA')){
			targelem.innerHTML = '<div align="center"><img src="../../Content/images/loading.gif" border=0><br>Loading...</div>';
		}
	}
}

function runAfterLoad(){
	putValue2Option('reg_jobtitle','jobtitle_dest');
	putValue2Option('reg_location','location_dest');
}