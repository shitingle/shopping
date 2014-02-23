function alldel(){
	var inputs=document.getElementsByTagName('input');
	for(var i=0;i<inputs.length;i++){
		if(inputs[i].getAttribute('type')=='checkbox'){
			inputs[i].checked=true;
		}
	}
	}
function overdel(){
	var inputs=document.getElementsByTagName('input');
	for(var i=0;i<inputs.length;i++){
		if(inputs[i].getAttribute('type')=='checkbox'){
			inputs[i].checked=false;
		}
	}
}
function del(){
	var j=0;
	var rd=new Array();
	var inputs=document.getElementsByTagName('input');
	for(var i=0;i<inputs.length;i++){
		if(inputs[i].getAttribute('type')=='checkbox'){
			if(inputs[i].checked==true){
				rd[j]=inputs[i].value;
				j++;
			}
		}
	}
	if(rd==''){
		alert("请选择要删除的数据");
	}else{
		var url="delshop.php?rd="+rd;
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {
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
		     if(msg!=1){
		    	 alert("删除失败");
		     }else{
		    	 alert("删除成功");
		    	 location="index.php?page=shopcar";
		     }
		    }
		  }
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
}