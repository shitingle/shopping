function shopcar(key){
	var url="chklogin.php?mid="+key;
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
	    var msg=xmlhttp.responseText;
	    if(msg=='2'){alert('请您先登录');
	    return false;}
	    else if(msg=='3'){alert('该商品已添加');
	    return false}
	    else{
	    location='index.php?page=shopcar'}
	    }
	  }
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	}
