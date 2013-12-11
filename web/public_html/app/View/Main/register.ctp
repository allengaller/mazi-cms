<head>
    <!-- Bootstrap core CSS -->
    <link href="/app/webroot/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/app/webroot/css/justified-nav.css" rel="stylesheet">

    <script src="/app/webroot/js/jquery-2.0.3.min.js"></script>
</head>

<body>
<div class="container-fluid" style="text-align:center;margin-left:auto;margin-right:auto;">
    <div class="row-fluid">
        <div class="span4">
        </div>
        <div class="span4">
            <form>
                <fieldset>
                    <legend>注册码字</legend>
                    <p>
                        <strong>Email</strong>
                    </p>
                    <p>
                        <input type="text" id="email"/>
                    </p>
                    <p>
                        <strong>密码</strong>
                    </p>
                    <p>
                        <input type="password" id="password"/>
                    </p>
                    <p>
                        <button class="btn" type="submit" id="submit">注册</button>
                    </p>

                    <fieldset>
                        <legend>第三方登录</legend>


                    </fieldset>
                </fieldset>
            </form>
        </div>
        <div class="span4">
        </div>
    </div>
</div>
</body>

<script>
    $(function(){
        $("#submit").click(function(){
            $.ajax({
                type: 'POST',
                url: 'http://mazi.ag/Main/do_register',
                data: $("#email").val()+$("#password").val(),
                success: function(data){
                    alert(data);
                },
                dataType: 'html'
            });
        }
        );
    });
</script>
