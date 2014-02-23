function ckname(){
	var uname=document.getElementById("name").value;
	if(uname==""){
		document.getElementById("rgname").innerHTML="<span style='color:red'>用户名不能为空</span>";
	}else{
		url="rc_uname.php?uname="+uname;
		ajax(url,"rgname");
	}
}

function ckpwd(){
	var pwd=document.getElementById("pwd").value;
	if(pwd==""){
		document.getElementById("rgpwd").innerHTML="<span style='color:red'>密码不能为空</span>"
	}
}
function dckpwd(){
	var pwd=document.getElementById("pwd").value;
	var rpwd=document.getElementById("rpwd").value;
	if(rpwd!=pwd){
		document.getElementById("rgrpwd").innerHTML="<span style='color:red'>俩次输入密码不一致</span>"
	}else{
		document.getElementById("rgrpwd").innerHTML="";
	}
}

function ckanswer1(){
	var answer1=document.getElementById("answer1").value;
	if(answer1==""){
		document.getElementById("tanswer1").innerHTML="<span style='color:red'>答案不能为空</span>";
	}else{
		document.getElementById("tanswer1").innerHTML=""
	}
}

function chanswer2(){
	var answer2=document.getElementById("answer2").value;
	if(answer2==""){
		document.getElementById("tanswer2").innerHTML="<span style='color:red'>答案不能为空</span>"
	}else{
		document.getElementById("tanswer2").innerHTML=""
	}
}

function chanswer3(){
	var answer3=document.getElementById("answer3").value;
	if(answer3==""){
		document.getElementById("tanswer3").innerHTML="<span style='color:red'>答案不能为空</span>"
	}else{
		document.getElementById("tanswer3").innerHTML=""
	}
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