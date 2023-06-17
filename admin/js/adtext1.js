// JavaScript Document
function show(id){
	//alert("调用成功");
	//alert("123");
	
	/*遍历id为resu的div模块下所有class为r1的div模块
	getElementsByClassName函数会返回所有结集合果，作为NodeList对象
	NodeList 对象代表一个有顺序的节点列表，我们从零开始遍历改变所有符合条件的纸*/
	var x = document.getElementById("resu");
	var y = x.getElementsByClassName("rl");
	var i;
	for (i = 0; i < y.length; i++) {
        y[i].style.display = "none";
    }
	document.getElementById(id).style.display="inline";
}

function vip(){
	if (vipinsert.youxiang.value==""){
     alert("邮箱不能为空");vipinsert.youxiang.focus();return false;
	}
	if (vipinsert.shenfenzheng.value==""){
     alert("身份证不能为空");vipinsert.shenfenzheng.focus();return false;
    }
	if (vipinsert.address.value==""){
     alert("住址不能为空");vipinsert.address.focus();return false;
    }
}

function wy(){
	if (wypost.wytit.value==""){
     alert("标题不能为空");wypost.wytit.focus();return false;
	}
	if (wypost.wycontent.value==""){
     alert("公告内容不能为空");wypost.wycontent.focus();return false;
    }
}