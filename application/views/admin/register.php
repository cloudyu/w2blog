<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>用户注册</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="apple-mobile-web-app-title" content="用户注册" />
    <link rel="stylesheet" href="//cdn.bootcss.com/amazeui/2.7.2/css/amazeui.min.css" />
    <link rel="stylesheet" href="../../static/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="../../static/css/app.css">
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
</head>
<body data-type="login">
<script src="../../static/js/theme.js"></script>
<?php echo validation_errors(); ?>
<div class="am-g tpl-g">
    <!-- 风格切换 -->
    <div class="tpl-skiner">
        <div class="tpl-skiner-toggle am-icon-cog">
        </div>
        <div class="tpl-skiner-content">
            <div class="tpl-skiner-content-title">
                选择主题
            </div>
            <div class="tpl-skiner-content-bar">
                <span class="skiner-color skiner-white" data-color="theme-white"></span>
                <span class="skiner-color skiner-black" data-color="theme-black"></span>
            </div>
        </div>
    </div>
    <div class="tpl-login">
        <div class="tpl-login-content">
            <div class="tpl-login-title">注册用户</div>
            <span class="tpl-login-content-info">
                  创建一个新的用户
              </span>
            <form class="am-form tpl-form-line-form" method="post" href="../register" accept-charset="utf-8">
                <input type="hidden" name="method" value="register" />
                <div class="am-form-group">
                    <input type="text" class="tpl-form-input" name="email" placeholder="邮箱">
                </div>
                <div class="am-form-group">
                    <input type="text" class="tpl-form-input" name="name" placeholder="用户名">
                </div>
                <div class="am-form-group">
                    <input type="password" class="tpl-form-input" name="passwd" placeholder="请输入密码">
                </div>
                <div class="am-form-group">
                    <input type="password" class="tpl-form-input" id="passwd" placeholder="再次输入密码">
                </div>
                <div class="am-form-group tpl-login-remember-me">
                    <input id="remember-me" type="checkbox" name="agree">
                    <label for="remember-me">
                        我已阅读并同意 <a href="javascript:alert('你居然想读协议?');">《用户注册协议》</a>
                    </label>
                </div>
                <div class="am-form-group">
                    <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="//cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
<script src="../../static/js/app.js"></script>
</body>
</html>