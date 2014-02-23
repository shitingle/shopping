function allnew(name){
	var f=document.getElementById("page_t").innerHTML;
	var e=parseInt(f);
	var value=parseInt(name);
	 var na=1;
	if(!value&&value==null){
		j=1;
	var na=i;
	}else if(value==0){
		j=1;
	 var na=j;	
	}else if(value==-1){
		if(j-1<=0){
		var	na=1;
		}else{
			j=j+value;
		var	na=j;
		}
	}else if(value==1){
		if(j+1<e){
		j=j+value;
	var	na=j;
		}else{
		j=e;
	var	na=j;	
		}
	}else{
		j=value;
	var	na=j;
	}
	document.getElementById("page_f").innerHTML=j;
	
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    document.getElementById("page_count").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","allnew_page.php?page="+na,true);
	xmlhttp.send();
}
