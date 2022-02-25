<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第Ⅳ回</title>
</head>
<body>
    <a id="top-menu" href="../2214505.html" style="position: fixed; z-index: 100; top: 10px; right: 10px; width: fit-content; background-color: rgba(255, 255, 255, 0.3); color: rgba(0, 0, 0, 0.6); font-size: 20px; font-weight: bold; text-align: center; padding: 10px; text-decoration: none;">My Menu</a>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $course = $_POST["courses"];
        $amount = $_POST["amount"];
        $voucher = $_POST["vouchers"];
        $course_error = "";
        $amount_error = "";
        $voucher_level = "";
        $total = $course*$amount*$voucher;
        $thousand = (int)($total/1000);
        $hundred = $total-$thousand*1000;
        $resurlt = strval($thousand).",".strval($hundred);
    
        if ($course == 0) {
            $course_error = "＊コース種類を指定ください。";
        }
        if ($amount == 0) {
            $amount_error = "＊数量を指定ください。";
        }
    }
    ?>
    <div id="title">
        第４回：第Ⅲ回の処理PHP & 金額計算機能
    </div>
    <div id="spa">
        <img src="../img/2214505_background-day5.jpg" alt="">
        <h1 class="spa">Virdet Spa</h1>
        <p class="spa">Love your beauty, love your life</p>
        <a href="#calculator">
            いくら払うのかを検討してみよう　👈
        </a>
    </div>
    <div id="courses">
        <div class="course">コース 1:　<span>￥2000</span></div>
        <div class="course">コース 2:　<span>￥2300</span></div>
        <div class="course">コース 3:　<span>￥2900</span></div>
        <div class="course">コース 4:　<span>￥3100</span></div>
        <div class="course">コース 5:　<span>￥3500</span></div>
        <div class="course">コース 6:　<span>￥3900</span></div>
        <div class="course">コース 7:　<span>￥4200</span></div>
    </div>
    <div id="calculator">
        <div id="sub">
            料金を計算してみよう！！
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <select name="courses" id="select-course" class="input-box">
                <option value="0">コース</option>
                <option value="2000">コース 1</option>
                <option value="2300">コース 2</option>
                <option value="2900">コース 3</option>
                <option value="3100">コース 4</option>
                <option value="3500">コース 5</option>
                <option value="3900">コース 6</option>
                <option value="4200">コース 7</option>
            </select>
            <select name="amount" id="amount" class="input-box">
                <option value="0">数量 （有効）</option>
                <option value="1">1 (4回)</option>
                <option value="2">2 (10回)</option>
                <option value="3">3 (16回)</option>
                <option value="4">4 (22回)</option>
                <option value="5">5 (30回)</option>
            </select>
            <select name="vouchers" id="vouchers" class="input-box">
                <option value="1">Voucher</option>
                <option value="0.9">A</option>
                <option value="0.8">B</option>
                <option value="0.7">C</option>
                <option value="0.6">D</option>
                <option value="0.5">E</option>
                <option value="0.2">黄金</option>
            </select>
            <input type="submit" value="検討" class="input-box">
        </form>
    </div>
    <div id="error">
        <p><?php echo $course_error;?></p>
        <p><?php echo $amount_error;?></p>
    </div>
    <div id="price"><?php
        if (empty($course_error) and empty($amount_error)) {
            echo "￥".$course."*".$amount."*".$voucher."<br>";
            echo "￥".$total;}
        ?>
    </div>
    <div id="footer">
        <div>Image: <a href="https://www.cosmeticsdesign-europe.com/Article/2019/11/27/Clean-and-ethical-beauty-summit-2020-Amsterdam-by-CosmeticsDesign-open-for-registration#">website</a></div>
        <div>Designed by N.Q.Thanh</div>
    </div>
</body>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        background-image: linear-gradient(45deg, rgb(0, 207, 140), rgb(59,83,52));
    }
    a{
        text-decoration: none;
        color: rgba(255, 255, 255);
        font-style: italic;
    }
    a:hover{
        color: rgb(0, 221, 155);
    }
    #title{
        color: rgb(0, 0, 0);
        font-size: 25px;
        padding: 0 20px;
        margin: 20px 0;
    }
    #spa a{
        display: block;
        background-color: rgba(157, 255, 250, 0.2);
        font-size: 3vw;
        font-weight: bold;
        font-style: normal;
        text-align: center;
        letter-spacing: 0.5vw;
        width: 100%;
        margin: 20px 0;
        padding: 10vw 20px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }
    #spa {
        position: relative;
        height: calc(100vw*40/75);
    }
    #spa img{
        width: 100%;
        height: auto;
        position: absolute;
        z-index: -1;
    }
    #spa h1{
        position: absolute;
        top: 2vw;
        padding-left: 15%;
        text-shadow: 0 0 2px rgba(255, 255, 255, 0.3);
        letter-spacing: 5px;
        font-size: 8vw;
        font-weight:lighter;
        pointer-events: none;
    }
    #spa p{
        position: absolute;
        font-size: 2.5vw;
        bottom: 2%;
        right: 3%;
        letter-spacing: 0.72vw;
    }
    #spa p::before{
        display: block;
        content:"";
        width: 60%;
        height: 1px;
        background-color: black;
        margin-left: auto;
        margin-bottom: 5px;
    }
    #courses {
        margin: 0 10px 0 0;
        display: grid;
        grid-template-rows: repeat(5, 12vw); 
        background-image: url(../img/2214505_course-background.jpg);
        background-size: cover;
    }
    .course{
        border: solid 10px rgb(255, 255, 255);
        margin: 0 -10px -10px 0;
        align-items: center;
        padding: 10px;
        font-size: 2.5vw;
        color: rgb(0, 0, 0);
        background-color: rgba(112, 143, 115, 0.4);
        letter-spacing: 1px;
    }
    .course:nth-child(1){
        grid-column-start: 1;
        grid-column-end: 3;
    }
    .course:nth-child(2){
        grid-column-start: 3;
        grid-column-end: 6;
    }
    .course:nth-child(3){
        grid-row-start: 2;
        grid-row-end: 5;
    }
    .course:nth-child(4){
        grid-column-start: 2;
        grid-column-end: 6;
    }
    .course:nth-child(5){
        grid-row-start: 3;
        grid-row-end: 5;
        grid-column-start: 2;
        grid-column-end: 4;
    }
    .course:nth-child(6){
        grid-row-start: 5;
        grid-row-end: 6;
        grid-column-start: 1;
        grid-column-end: 4;
    }
    .course:nth-child(7){
        grid-row-start: 3;
        grid-row-end: 6;
        grid-column-start: 4;
        grid-column-end: 6;
    }
    .course:hover {
        background-color: rgba(0, 0, 0, 0.4);
        color: white;
    }
    #calculator {
        width: fit-content;
        margin: 1vw auto 50px;
    }
    #sub{
        color: white;
        font-size: 20px;
        padding: 20px;
        text-align: center;
    }
    .input-box {
        border: none;
        outline: none;
        background-color: rgba(255, 255, 255, 0.9);
        line-height: 22px;
        padding: 10px;
        font-size: 16px;
        text-align: center;
        margin: 10px;
    }
    .input-box:last-child{
        background-color: rgb(0, 102, 14);
        color: white;
        cursor: pointer;
        padding: 10px 50px;
    }
    .input-box:last-child:hover{
        background-color: rgb(0, 187, 100);
    }
    #price {
        width: 100%;
        font-size: 3vw;
        color: black;
        font-weight: light;
        text-align: center;
        letter-spacing: 10px;
        margin-bottom: 10vw;
    }
    #footer {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding: 5px 10px;
        background-color: black;
        color: white;
    }
    #footer div:nth-child(2){
        text-align: right;
    }
</style>
</html>