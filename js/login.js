function checkuname(){
	var uname=document.getElementById("uname").value;
	if(uname==""){
		document.getElementById("tname").innerHTML="<span style='color:red'>用户名不能为空</span>"
	}else{
	url="http://localhost/shopping/rc_name.php?name="+uname;
	ajax(url,"tname");}
}

function checkpwd(){
	var pwd=document.getElementById("upwd").value;
	if(pwd==""){
		document.getElementById("tpwd").innerHTML="<span style='color:red'>密码不能为空</span>"
	}else{
		document.getElementById("tpwd").innerHTML="";
	}
}

function checkverify(){
	var rgcode=document.getElementById("verify").value;
    url="http://localhost/shopping/rc_velcode.php?code="+rgcode;
    ajax(url,"tverify");
}

function ajax(url,div){
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
	    document.getElementById(div).innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
}