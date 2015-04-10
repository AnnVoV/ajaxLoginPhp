<?php
    header("Content-Type:text/html;charset=utf-8");
    $errors = array();
    $data = array();

    //登陆判断
    if(empty($_POST['name']))
        $errors['name'] = '用户名不能为空';
    if(empty($_POST['pass']))
        $errors['pass'] = '密码不能为空';

    if(!empty($errors)){
        $data['success'] = false;
        $data['errors'] = $errors;
    }else{
        $data['success'] = true;
        $data['message'] = '登陆成功!';
    }
    //为了返回我们的数据用于ajax调用,我们要使用echo 和 json_encode
    //传递的是json 数据
    //data.success:true | false
    //data.errors.name: 用户名的错误信息提示
    //data.errors.pass: 密码的错误信息提示
    echo json_encode($data);
?>