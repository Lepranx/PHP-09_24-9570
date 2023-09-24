<html>
    <body>
        <form method="GET">
            <input type="radio" name="city" value="深圳" checked="true" >深圳<br>
            <input type="radio" name="city" value="上海">上海<br>
            <input type="radio" name="city" value="北京">北京<br>
            <input type="radio" name="city" value="广州">广州<br><br>
            <button type="submit">提交</button>
            <button type="reset">重置</button>
        </form>
        <?php
            $city = isset($_GET["city"]) ? $_GET["city"] : "";
            if($city){
                echo "本次提交内容: city:". $city;
            }     
        ?>
    </body>
</html>