var timer; //timer变量，控制时间
var count = 60; //间隔函数，1秒执行
var curCount;//当前剩余秒数
function sendMessage(){
	curCount = count;
	$("#btn").attr("disabled", "true");
	$("#btn").css("font-size", "15px");
	$("#btn").html("重新获取("+curCount+")");
    timer= window.setInterval(go, 1000); //启动计时器，1秒执行一次请求后台发送验证码 TODO
}
//timer处理函数
function go() {
	curCount=curCount-1;
	if(curCount==0){
        window.clearInterval(timer);//停止计时器
        $("#btn").removeAttr("disabled");//启用按钮
        $("#btn").html("重新获取");
    }
    else{
    	$("#btn").html("重新获取("+curCount+")");
    }

}