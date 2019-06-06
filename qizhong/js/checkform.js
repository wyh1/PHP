function checkAge() {
    var age  = $("#age").val();
    var zhengze = /^\d{1,2}$/;
    var flag = zhengze.test(age);
    if(flag){
        //success("ageClass","agemsg");
        $("#ageClass").removeClass("has-error has-feedback");
        $("#ageClass").addClass("has-success has-feedback");
        $("#agemsg").removeClass("glyphicon-remove");
        $("#agemsg").addClass("glyphicon-ok");
    }else{
       //error("ageClass","agemsg");
        $("#ageClass").removeClass("has-success has-feedback");
        $("#ageClass").addClass("has-error has-feedback");
        $("#agemsg").removeClass("glyphicon-ok");
        $("#agemsg").addClass("glyphicon-remove");
    }
    return flag;
}
function checkRepassword() {
    var repassword = $("#repassword").val();
    var zhengze =$("#password").val();
    if(zhengze!="" &&repassword==zhengze){
        var flag = true;
    } else {
        var flag = false;
    }

    if(flag){
        $("#repasswordClass").removeClass("has-error has-feedback");
        $("#repasswordClass").addClass("has-success has-feedback");
        $("#repasswordmsg").removeClass("glyphicon-remove");
        $("#repasswordmsg").addClass("glyphicon-ok");
    }else{
        $("#repasswordClass").removeClass("has-success has-feedback");
        $("#repasswordClass").addClass("has-error has-feedback");
        $("#repasswordmsg").removeClass("glyphicon-ok");
        $("#repasswordmsg").addClass("glyphicon-remove");
    }
    return flag;
}
function checkTel() {
    var tel = $("#tel").val();
    var zhengze = /^\d{11}$/;
    var flag = zhengze.test(tel);
    if(flag){
        $("#telClass").removeClass("has-error has-feedback");
        $("#telClass").addClass("has-success has-feedback");
        $("#telmsg").removeClass("glyphicon-remove");
        $("#telmsg").addClass("glyphicon-ok");
    }else{
        $("#telClass").removeClass("has-success has-feedback");
        $("#telClass").addClass("has-error has-feedback");
        $("#telmsg").removeClass("glyphicon-ok");
        $("#telmsg").addClass("glyphicon-remove");
    }
    return flag;
}
function checkName() {
    var name = $("#name").val();
    var zhengze = /^[\u4e00-\u9fa5]{1,4}$/;
    var flag = zhengze.test(name);
    if(flag){
        $("#nameClass").removeClass("has-error has-feedback");
        $("#nameClass").addClass("has-success has-feedback");
        $("#namemsg").removeClass("glyphicon-remove");
        $("#namemsg").addClass("glyphicon-ok");
    }else{
        $("#nameClass").removeClass("has-success has-feedback");
        $("#nameClass").addClass("has-error has-feedback");
        $("#namemsg").removeClass("glyphicon-ok");
        $("#namemsg").addClass("glyphicon-remove");
    }
    return flag;
}
function checkEmail() {
    var email = $("#email").val();
    var zhengze = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    var flag = zhengze.test(email);
    if(flag){
        $("#emailClass").removeClass("has-error has-feedback");
        $("#emailClass").addClass("has-success has-feedback");
        $("#emailmsg").removeClass("glyphicon-remove");
        $("#emailmsg").addClass("glyphicon-ok");
    }else{
        $("#emailClass").removeClass("has-success has-feedback");
        $("#emailClass").addClass("has-error has-feedback");
        $("#emailmsg").removeClass("glyphicon-ok");
        $("#emailmsg").addClass("glyphicon-remove");
    }
    return flag;
}
function checkUsername() {
    var username = $("#username").val();
    var zhengze =/^[a-z0-9_-]{3,16}$/;
    var flag = zhengze.test(username);
    if(flag){
        $("#usernameClass").removeClass("has-error has-feedback");
        $("#usernameClass").addClass("has-success has-feedback");
        $("#usernamemsg").removeClass("glyphicon-remove");
        $("#usernamemsg").addClass("glyphicon-ok");
    }else{
        $("#usernameClass").removeClass("has-success has-feedback");
        $("#usernameClass").addClass("has-error has-feedback");
        $("#usernamemsg").removeClass("glyphicon-ok");
        $("#usernamemsg").addClass("glyphicon-remove");
    }
    return flag;
}
function checkPassword() {
    var password = $("#password").val();
    var reg_password = /^[a-z0-9_-]{6,18}$/;
    var flag = reg_password.test(password);
    if(flag){
        //密码合法
        $("#passwordClass").removeClass("has-error has-feedback");
        $("#passwordClass").addClass("has-success has-feedback");
        $("#passwordmsg").removeClass("glyphicon-remove");
        $("#passwordmsg").addClass("glyphicon-ok");
    }else{
        //密码非法
        $("#passwordClass").removeClass("has-success has-feedback");
        $("#passwordClass").addClass("has-error has-feedback");
        $("#passwordmsg").removeClass("glyphicon-ok");
        $("#passwordmsg").addClass("glyphicon-remove");
    }
    return flag;
}
function success(whitch){
    $("#Class").removeClass("has-error has-feedback");
    $("#Class").addClass("has-success has-feedback");
    $("#Msg").removeClass("glyphicon-remove");
    $("#Msg").addClass("glyphicon-ok");
}
function error(Class,Msg){
    $("#Class").removeClass("has-success has-feedback");
    $("#Class").addClass("has-error has-feedback");
    $("#Msg").removeClass("glyphicon-ok");
    $("#Msg").addClass("glyphicon-remove");
}
$(function(){
    $("#registerForm").submit(function() {
        if (checkUsername() && checkPassword() && checkRepassword() && checkAge() && checkEmail() && checkTel() && checkEmail() && checkName()) {
            return true;
        }
        return false;
    })
    $("#username").blur(checkUsername);
    $("#password").blur(checkPassword);
    $("#repassword").blur(checkRepassword);
    $("#email").blur(checkEmail);
    $("#name").blur(checkName);
    $("#tel").blur(checkTel);
    $("#age").blur(checkAge);
})
/**
 * Created by 11030 on 2019/4/26.
 */
