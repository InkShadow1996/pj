// JavaScript Document
//alert(123);
function checkad(){
	if (admin.aduser.value==""){
     alert("用户名不能为空");admin.aduser.focus();return false;
	}
	if (admin.adpwd.value==""){
     alert("密码不能为空");admin.adpwd.focus();return false;
    }
}

