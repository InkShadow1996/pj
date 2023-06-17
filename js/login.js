// JavaScript Document
//登录表单验证脚本

function checklog(){
	if (denglu.user.value==""){
     alert("用户名不能为空");denglu.user.focus();return false;
	}
	if (denglu.pwd.value==""){
     alert("密码不能为空");denglu.pwd.focus();return false;
    }
}

function checksp(){
	if (sendpost.title.value==""){
     alert("标题不能为空");sendpost.title.focus();return false;
	}
	
	var text=document.getElementById("text");
	
	if (text.value==""){
		
     alert("内容不能为空");document.getElementById("text").focus();return false;
    }
}

 function checkreply(){
     if (myform.reply.value==""){
       alert("请输入你想回复的内容");
       myform.reply.focus();
       return false;
     }

}

function checkspa(){
	if (sendapost.titlea.value==""){
     alert("标题不能为空");sendapost.titlea.focus();return false;
	}
	
	var text=document.getElementById("texta");
	
	if (texta.value==""){
		
     alert("内容不能为空");document.getElementById("texta").focus();return false;
    }
}

 function checkreplya(){
     if (myforma.replya.value==""){
       alert("请输入你想回复的内容");
       myforma.replya.focus();
       return false;
     }

}