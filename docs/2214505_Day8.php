<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <metawidth=device-width, initial-scale=1.0">
    <title>Day8-Result</title>
</head>
<body>
<?php
$colors = explode(",", $_POST["colors"]);
array_pop($colors);
$red = $_POST["red"];
$red_answer = [0];
$yellow = $_POST["yellow"];
$yellow_answer = [0];
$blue = $_POST["blue"];
$blue_answer = [0];

for ($i=1; $i<10; $i++) {
    $color = $colors[$i-1];
    if ($color == "white") {
        $red_answer[] = $i;
        $yellow_answer[] = $i;
        $blue_answer[] = $i;
    }
    if ($color == "red") {
        $red_answer[] = $i;
    }
    if ($color == "yellow") {
        $yellow_answer[] = $i;
    }
    if ($color == "blue") {
        $blue_answer[] = $i;
    }
    if ($color == "orange") {
        $red_answer[] = $i;
        $yellow_answer[] = $i;
    }
    if ($color == "green") {
        $blue_answer[] = $i;
        $yellow_answer[] = $i;
    }
    if ($color == "violet") {
        $red_answer[] = $i;
        $blue_answer[] = $i;
    }
}


$ans1 = count(array_diff($red_answer, $red)) + count(array_diff($red, $red_answer));
$ans2 = count(array_diff($yellow_answer, $yellow)) + count(array_diff($yellow, $yellow_answer));
$ans3 = count(array_diff($blue_answer, $blue)) + count(array_diff($blue, $blue_answer));
$answer = "";

if ($ans1==0 && $ans2==0 && $ans3==0) {
    $answer = "WIN";
} else {
    $answer = "NOT CORRECT";
}
?>
    <a id="top-menu" href="../2214505.html" style="position: fixed; z-index: 100; top: 20px; left: 30px; width: fit-content; background-color: rgba(255, 255, 255, 0.3); color: rgba(0, 0, 0, 0.6); font-size: 20px; font-weight: bold; text-align: center; padding: 15px; text-decoration: none;">My Menu</a>
    <div id="main">
        <div id="title">第８回：Checkbox</div>
        <p><?=$answer?></p>
        <div id="result">
            <div id="user-answer">
                <p>あなたの結果</p>
                <div class="window red-window">
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(1,$red)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(2,$red)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(3,$red)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(4,$red)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(5,$red)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(6,$red)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(7,$red)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(8,$red)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(9,$red)) {echo "background-color: unset";}?>"></span>
                    </label>
                </div>
                <div class="window yellow-window">
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(1,$yellow)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(2,$yellow)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(3,$yellow)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(4,$yellow)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(5,$yellow)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(6,$yellow)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(7,$yellow)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(8,$yellow)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(9,$yellow)) {echo "background-color: unset";}?>"></span>
                    </label>
                </div>
                <div class="window blue-window">
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(1,$blue)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(2,$blue)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(3,$blue)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(4,$blue)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(5,$blue)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(6,$blue)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(7,$blue)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(8,$blue)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(9,$blue)) {echo "background-color: unset";}?>"></span>
                    </label>
                </div>
            </div>
            <div id="true-answer">
                <p>正解</p>
                <div class="window red-window">
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(1,$red_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(2,$red_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(3,$red_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(4,$red_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(5,$red_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(6,$red_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(7,$red_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(8,$red_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit">
                        <span style="<?php if (!in_array(9,$red_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                </div>
                <div class="window yellow-window">
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(1,$yellow_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(2,$yellow_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(3,$yellow_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(4,$yellow_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(5,$yellow_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(6,$yellow_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(7,$yellow_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(8,$yellow_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit">
                        <span style="<?php if (!in_array(9,$yellow_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                </div>
                <div class="window blue-window">
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(1,$blue_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(2,$blue_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(3,$blue_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(4,$blue_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(5,$blue_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(6,$blue_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(7,$blue_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(8,$blue_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit">
                        <span style="<?php if (!in_array(9,$blue_answer)) {echo "background-color: unset";}?>"></span>
                    </label>
                </div>
            </div>
        </div>
        <div id="slogan">今日に<span>あ</span> <span>な</span> <span>た</span> の色を <span>彩</span> りましょう。。。</div>
    </div>
    <div id="footer">Designed by N.Q.Thanh</div>
</body>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    #title {
        background-image: linear-gradient(to right, orange, yellow);
        color: black;
        font-size: 3vw;
        padding: 2vw;
        text-align: right;
        border-radius: 0 0 0 50%;
        position: relative;
        height: 10vw;
        letter-spacing: 5px;
    }
    #title::after {
        content: "";
        position: absolute;
        width: 100vw;
        height: 30%;
        top: 100%;
        right: 0;
        z-index: 1;
        background-image: linear-gradient(to right, orange, yellow);
    }
    #title::before {
        content: "";
        position: absolute;
        width: 100vw;
        height: 30%;
        top: 100%;
        left: 0;
        z-index: 2;
        background-color: white;
        border-radius: 0 50% 0 0;
    }
    #main > p {
        margin: 5vw 0;
        padding: 30px 0;
        text-align: center;
        font-size: 22px;
        font-weight: bold;
        letter-spacing: 5px;
        background-image: linear-gradient(to right, white, <?php if ($answer=="WIN") {echo "green";} else {echo "red";}?>, white);
    }
    #result {
        padding: 5vw 0;
        min-height: 70vh;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    .window {
        padding: 30px 30px;
        width: fit-content;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(3, auto); 
        grid-template-rows: repeat(3, auto); 
        grid-gap: 20px 20px;
    }
    .red-window span {
        background-color: red;
    }
    .yellow-window span {
        background-color: yellow;
    }
    .blue-window span {
        background-color: blue;
    }
    label {
        position: relative;
    }
    label span {
        position: absolute;
        top: 0;
        left: 0;
        width: 7vw;
        height: 7vw;
        min-width: 30px;
        min-height: 30px;
        background-color: white;
        border: solid 3px rgb(48, 48, 48);
        color: rgb(0, 0, 0);
        font-size: 15px;
        text-align: center;
        padding-top: 35%
    }
    .unit {
        width: 7vw;
        height: 7vw;
        min-width: 30px;
        min-height: 30px;
    }
    .red-unit:checked + span {
        background-color: red;
    }
    .yellow-unit:checked + span {
        background-color: yellow;
    }
    .blue-unit:checked + span {
        background-color: blue;
    }
    #slogan {
        padding: 40px 20px;
        text-align: center;
        font-size: 3vh;
    }
    #slogan span {
        font-size: 5vh;
        padding: 0 5px;
        display: inline-block;
    }
    #slogan span:nth-child(1) {
        margin-left: 20px;
        transform: translateY(-10px) rotate(30deg);
        color: orangered;
    }
    #slogan span:nth-child(2) {
        transform: translateY(5px) rotate(-20deg);
        color: rgb(14, 170, 0);
    }
    #slogan span:nth-child(3) {
        color: rgb(0, 133, 185);
    }
    #slogan span:nth-child(4) {
        background-image: linear-gradient(to top right, rgb(251, 255, 0), rgb(255, 0, 128));
        color: rgb(255, 255, 255);
    }
    #footer {
        background-color: black;
        color: white;
        padding: 10px;
        text-align: right;
        font-size: 18px;
    }
</style>
</html>