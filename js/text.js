// JavaScript Document
//注册表单验证脚本
function check(){
   if (zc.zcuser.value==""){
     alert("用户名不能为空");zc.zcuser.focus();return false;  /*foucus()将光标返回到该组件*/
   }
   if (zc.zcpwd1.value==""){
     alert("密码不能为空");zc.zcpwd1.focus();return false;   /*return false js终止事件*/
   }
   if (zc.zcpwd1.value.length<8){
     alert("密码至少为8位，请重新输入");zc.zcpwd1.focus();return false;
   }  
   if (zc.zcpwd2.value==""){
     alert("请确认密码");zc.zcpwd2.focus();return false;
    }
    if (zc.email.value==""){
      alert("email地址不能为空");zc.email.focus();return false;
    }
	/*indexof()用于检测字符在字符串的位置，若未指定第二个参数，则从下标0检测（即第一个字符）下标为负则字符不存在*/
    var x=zc.email.value.indexOf("@");    
    var y=zc.email.value.indexOf(".");
	if((x<0)||(x-y>0)||(y<0)){
      alert("您输入的Email地址不正确，请重新输入");zc.email.value="";zc.email.focus();return false;
    }
	if (zc.cardID.value==""){
	  alert("身份证不能为空");zc.cardID.focus();return false;
    }
	if (zc.cardID.value.length!=18){
	  alert("您输入的身份证格式有误，请重新输入");zc.cardID.focus();return false;
	}
}

function checkform(){
	var zcuser = checkuser();
	var zcpwd1 = checkpwda();
	var zcpwd2 = checkpwdb();
	var email = checkemail();
	var cardID = checkcard();
	if(zcuser&&zcpwd1&&zcpwd2&&email&&cardID){
		return true;
	}else{
		return false;
	}
}

function checkuser(){
	var zcu = document.getElementById("zcuser").value; /*doucument.getElementById("").value获取指定id元素的值*/
	var reg = new RegExp("^[a-z][a-z0-9]{7,11}$","i");
	if(reg.test(zcu)==true){                           /*.test()zcu字符串与reg规则匹配成功返回true，否则返回false*/
		document.getElementById("zcu").innerHTML="正确".fontcolor("green");  /*innerHTML获取对象内容或向对象插入内容*/
		return true;
	}
	else{
		document.getElementById("zcu").innerHTML="只能以字母开头且在8-12位之间".fontcolor("red");
		return false;
		}
}

function checkpwda(){
	var pwa = document.getElementById("zcpwd1").value;
	var pwb = document.getElementById("zcpwd2").value;
	var reg = new RegExp("^[A-Z][0-9a-zA-Z]+");
	if((pwa.length<8)||(pwa.length>16)){
		document.getElementById("zcp1").innerHTML="密码介于8-16位之间".fontcolor("red");
		return false;
		}
		else if(reg.test(pwa)==true){
			document.getElementById("zcp1").innerHTML="正确".fontcolor("green");
			return true;
		}
		else{
			document.getElementById("zcp1").innerHTML="密码只能包含数字和大小写字母,且以大写字母开头".fontcolor("red");
			return false;
		}
		if(pwa!=pwb){
		document.getElementById("zcp2").innerHTML="两次密码不一致".fontcolor("red");
		return false;
	}
	else
	{
		document.getElementById("zcp2").innerHTML="正确".fontcolor("green");
		return true;
	}
}

function checkpwdb(){
    var pwa = document.getElementById("zcpwd1").value;
	var pwb = document.getElementById("zcpwd2").value;
	if(pwa!=pwb){
		document.getElementById("zcp2").innerHTML="两次密码不一致".fontcolor("red");
		return false;
	}
	else
	{
		document.getElementById("zcp2").innerHTML="正确".fontcolor("green");
		return true;
	}
}

function checkemail(){
	var em = document.getElementById("email").value;
	var reg = new RegExp("^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$");
	if(reg.test(em)==true){
		document.getElementById("ema").innerHTML="正确".fontcolor("green");
		return true;
	}
	else{
		document.getElementById("ema").innerHTML="您的邮箱格式有误，请重新输入".fontcolor("red");
		return false;
	}
}

function checkcard(){
	var ca = document.getElementById("cardID").value;
	var reg = new RegExp("^[1-9][0-9]{5}19|20[0-9]{2}(([0][1-9])|10|11|12)(([0-2][1-9])|10|20|30|31)[0-9]{3}[0-9]$");
	if(ca.length!=18){
		document.getElementById("card").innerHTML="第二代身份证是18位".fontcolor("red");
		return false;
	}
	else if(reg.test(ca)==true){
		document.getElementById("card").innerHTML="正确".fontcolor("green");
		return true;
	}
	else{
	    document.getElementById("card").innerHTML="身份证号错误，请重新输入".fontcolor("red");
		return false;
	}
}