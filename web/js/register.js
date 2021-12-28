function check_code() {
  console.log(1);
  var code =
    document.getElementById("code").value;
  var span =
    document.getElementById("code_msg");
  var reg = /^\w{6,10}$/;
  if(reg.test(code)) {
    span.className = "ok";
  } else {
    span.className = "error";
  }
}
function check_pwd(){
  console.log(2);
  var code2 =document.getElementById("pwd").value;
  var span2 =
    document.getElementById("pwd_msg");
  var reg2 = /^\w{6,10}$/;
  if(reg2.test(code2)) {
    span2.className = "ok";
  } else {
    span2.className = "error";
  }

}
function check_pwd1(){
  console.log(3);
  var code2 =document.getElementById("pwd1").value;
  var span2 =
    document.getElementById("pwd_msg1");
  var reg2 = /^\w{6,10}$/;
  if(reg2.test(code2)) {
    span2.className = "ok";
  } else {
    span2.className = "error";
  }
}