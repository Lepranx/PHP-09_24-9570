<html>
    <body>
        <form method="GET">
            用户名：<input name="username"><br/><br/>
            密码：<input name="password" type="password"><br/><br/>
            <button type="submit">提交</button>
            <button type="reset">重置</button>
        </form>
    </body>
    <?php
        //三元判断
        $username = isset($_GET["username"]) ? $_GET["username"] : "";
        $password = isset($_GET["password"]) ? $_GET["password"] : "";
        if($username){
            echo "本次提交内容: username:". $username. " password:".$password;
        }        
    ?>
</html>