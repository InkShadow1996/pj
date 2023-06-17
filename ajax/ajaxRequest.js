// JavaScript Document

//js中window是最顶级对象，代表一个窗体，这里用来区分浏览器，IE8.0,9.0火狐浏览器都有window.XMLHttpRequest这个属性IE6.0 5.5没有
//注册用户名查重，传输数据
var http_request=false;  
function http_xmlhttprequest(url)  
    {  
       http_request=false;  
        //开始初始化XMLHttpRequest对象  
        if(window.XMLHttpRequest){//Mozilla浏览器  
         http_request=new XMLHttpRequest();  
          if(http_request.overrideMimeType){//设置MIME类别  
           http_request.overrideMimeType("text/xml");  
          }  
         }  
         else if(window.ActiveXObject){//IE浏览器  
         try{  
          http_request=new ActiveXObject("Msxml2.XMLHttp");  
          }catch(e){  
           try{  
          http_request=new ActiveXobject("Microsoft.XMLHttp");  
           }catch(e){}  
          }  
     }  
         if(!http_request){//异常，创建对象实例失败  
         window.alert("创建XMLHttp对象失败！");  
          return false;  
         }  
        http_request.onreadystatechange=alertContents;  
        //确定发送请求方式，URL，及是否同步执行下段代码  
    http_request.open("GET",url,true);  
        http_request.send(null);  
}  
//处理返回信息的函数  
/*function processrequest(){  
    if(http_request.readyState==4){//判断对象状态  
     if(http_request.status==200){//信息已成功返回，开始处理信息  
          document.getElementById(reobj).innerHTML=http_request.responseText;  
          }  
          else{//页面不正常  
          alert("您所请求的页面不正常！");  
          }  
    }  
}*/

  function alertContents(){
	if(http_request.readyState == 4){
		if(http_request.status == 200){
			//alert(http_request.ResponsText); //只会返回undefined
			document.getElementById("zcu").innerHTML=http_request.responseText;
		}else{
			alert("您的请求页面发生错误");
		}
	}
}

function testname(){
	var zcna = document.zc.zcuser.value;
	if(zcna==""){
		window.alert("请填写用户名");
		document.zc.zcuser.focus();
		return false;
	}
	/*else if(!http_request){
		alert("不能创建XML实例");
		return false;
	}*/
	else {
		//alert("yunxingdaozheli");
		
		http_xmlhttprequest('testname.php?zcuser='+zcna+'&nocache='+new Date().getTime());  //若zcna为object HTMLInputElement，则指没有定义，先定义在使用
	}
}

