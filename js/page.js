function ajax(name){
	var f=document.getElementById("page_t").innerHTML;
	var e=parseInt(f);
	var value=parseInt(name);
	var url=1;
	if(!value&&value==null){
		i=1;
		url=i;
	}else if(value==0){
		i=1;
	    url=i;	
	}else if(value==-1){
		if(i-1<=0){
			url=1;
		}else{
			i=i+value;
			url=i;
		}
	}else if(value==1){
		if(i+1<e){
		i=i+value;
		url=i;
		}else{
		i=e;
		url=i;	
		}
	}else{
		i=value;
		url=i;
	}
	document.getElementById("page_f").innerHTML=i;
	
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
	xmlhttp.open("GET","http://localhost/shopping/newhot_page.php?page="+url,true);
	xmlhttp.send();
}
