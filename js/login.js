function checkuname(){
	var uname=document.getElementById("uname").value;
	if(uname==""){
		document.getElementById("tname").innerHTML="<span style='color:red'>用户名不能为空</span>"
	}else{
	  
	    
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
	    document.getElementById("tname").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","http://localhost/shopping/rc_name.php?name="+uname,true);
	xmlhttp.send();
}
}
function checkpwd(){
	var pwd=document.getElementById("upwd").value;
	if(pwd==""){
		document.getElementById("tpwd").innerHTML="<span style='color:red'>密码不能为空</span>"
	}else{
		document.getElementById("tpwd").innerHTML='&nbsp';
	}
}

function checkverify(){
	var rgcode=document.getElementById("verify").value;
    var  url="http://localhost/shopping/rc_velcode.php?code="+rgcode;
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
	    document.getElementById("tverify").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
}

function check(){
	var a=ajax_pub();
	console.log(a);
	if(a==3){
		document.getElementById("checkuser").innerHTML="密码错误";
		return false;
	}
	else{	
		return true;	
	}	
}


function ajax_pub(){
	var pwd=document.getElementById("upwd").value;
	var uname=document.getElementById("uname").value;
	var sign=0;
	if(pwd!=''){
		var url="http://localhost/shopping/checkpwd.php?uname="+uname+"&pwd="+pwd;
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		
		xmlhttp.open("GET",url,false);
		xmlhttp.send(null);
		return xmlhttp.responseText;
	}
}