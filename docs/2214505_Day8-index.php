<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第８回</title>
</head>
<?php
$colors = [0,0,0,0,0,0,0,0,0];
array_walk($colors, function(&$a) {
    $a = intval(rand(0,20)) % 8;
    if ($a == 0) {$a = "red";}
    if ($a == 1) {$a = "yellow";}
    if ($a == 2) {$a = "blue";}
    if ($a == 3) {$a = "orange";}
    if ($a == 4) {$a = "green";}
    if ($a == 5) {$a = "violet";}
    if ($a == 6) {$a = "white";}
    if ($a == 7) {$a = "black";}
})
?>
<body>
    <a id="top-menu" href="../2214505.html" style="position: fixed; z-index: 100; top: 20px; left: 30px; width: fit-content; background-color: rgba(255, 255, 255, 0.3); color: rgba(0, 0, 0, 0.6); font-size: 20px; font-weight: bold; text-align: center; padding: 15px; text-decoration: none;">My Menu</a>
    <div id="main">
        <div id="title">第８回：Checkbox</div>
        <form action="./Day8.php" method="post">
            <input type="text" value="<?php 
                array_map(function($color) {echo $color.",";}, $colors);
            ?>" name="colors" style="display: none;">
            <input type="checkbox" name="red[]" value=0 checked="checked" style="display: none">
            <input type="checkbox" name="yellow[]" value=0 checked="checked" style="display: none">
            <input type="checkbox" name="blue[]" value=0 checked="checked" style="display: none">
            <h1 id="form-name">配色ゲーム</h1>
            <div id="manual">以下のような Color Window を作るため、赤ー黄ー青の３つ基本色から適切な合わせ方が要ります。 <br>当たる四角形にどの色を入れれべきかを決めてください。
            <br>-----<span class="manual-red">red</span>+<span class="manual-yellow">yellow</span>=<span class="manual-orange">orange</span> 
            <br>-----<span class="manual-yellow">yellow</span>+<span class="manual-blue">blue</span>=<span class="manual-green">green</span> 
            <br>----- <span class="manual-blue">blue</span>+<span class="manual-red">red</span>=<span class="manual-violet">violet</span> 
            <br>----- <span class="manual-red">red</span>+<span class="manual-yellow">yellow</span>+<span class="manual-blue">blue</span>=<span class="manual-white">white</span> 
            <br>----- <span>NoColor</span>=<span class="manual-black">black</span> 
            </div>
            <div id="question">
                <div id="wrapper" class="window">
                    <label>
                        <input type="checkbox" class="unit" checked="checked" name ="question[]">
                        <span style="background-color: <?=$colors[0]?>;"><?php echo $colors[0];?></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit" checked="checked" name ="question[]">
                        <span style="background-color: <?=$colors[1]?>;"><?=$colors[1]?></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit" checked="checked" name ="question[]">
                        <span style="background-color: <?=$colors[2]?>;"><?=$colors[2]?></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit" checked="checked" name ="question[]">
                        <span style="background-color: <?=$colors[3]?>;"><?=$colors[3]?></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit" checked="checked" name ="question[]">
                        <span style="background-color: <?=$colors[4]?>;"><?=$colors[4]?></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit" checked="checked" name ="question[]">
                        <span style="background-color: <?=$colors[5]?>;"><?=$colors[5]?></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit" checked="checked" name ="question[]">
                        <span style="background-color: <?=$colors[6]?>;"><?=$colors[6]?></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit" checked="checked" name ="question[]">
                        <span style="background-color: <?=$colors[7]?>;"><?=$colors[7]?></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit" checked="checked" name ="question[]">
                        <span style="background-color: <?=$colors[8]?>;"><?=$colors[8]?></span>
                    </label>
                </div>
            </div>
            <div id="answer">
                <div class="ans-title" style="color: red; background-image: linear-gradient(to left, rgb(255, 0, 0), rgb(163, 0, 49), rgb(0, 0, 0));">赤</div>
                <div class="window">
                    <label>
                        <input type="checkbox" class="unit red-unit" name="red[]" value=1>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit" name="red[]" value=2>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit" name="red[]" value=3>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit" name="red[]" value=4>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit" name="red[]" value=5>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit" name="red[]" value=6>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit" name="red[]" value=7>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit" name="red[]" value=8>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit red-unit" name="red[]" value=9>
                        <span></span>
                    </label>
                </div>
                <div class="ans-title" style="color: yellow; background-image: linear-gradient(to left, yellow, rgb(255, 166, 0), rgb(0, 0, 0));">黄</div>
                <div class="window">
                    <label>
                        <input type="checkbox" class="unit yellow-unit" name="yellow[]" value=1>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit" name="yellow[]" value=2>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit" name="yellow[]" value=3>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit" name="yellow[]" value=4>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit" name="yellow[]" value=5>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit" name="yellow[]" value=6>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit" name="yellow[]" value=7>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit" name="yellow[]" value=8>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit yellow-unit" name="yellow[]" value=9>
                        <span></span>
                    </label>
                </div>
                <div class="ans-title" style="color: blue; background-image: linear-gradient(to left, rgb(0, 110, 255), rgb(58, 0, 105), rgb(0, 0, 0));">青</div>
                <div class="window">
                    <label>
                        <input type="checkbox" class="unit blue-unit" name="blue[]" value=1>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit" name="blue[]" value=2>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit" name="blue[]" value=3>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit" name="blue[]" value=4>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit" name="blue[]" value=5>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit" name="blue[]" value=6>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit" name="blue[]" value=7>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit" name="blue[]" value=8>
                        <span></span>
                    </label>
                    <label>
                        <input type="checkbox" class="unit blue-unit" name="blue[]" value=9>
                        <span></span>
                    </label>
                </div>
            </div>
            <button type="submit">採点</button>
        </form>
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
    form {
        padding: 5vw 0;
    }
    h1 {
        padding: 10px 10%;
        font-size: 3vw;
        text-align: center;
        color: rgb(202, 199, 0);
    }
    #manual {
        text-align: center;
        padding: 20px;
        font-size: 18px;
        line-height: 36px;
    }
    #manual span {
        padding: 0 10px;
        width: fit-content;
        border: solid 2px black;
    }
    #manual .manual-red {
        background-color: red;
    }
    #manual .manual-yellow {
        background-color: yellow;
    }
    #manual .manual-blue {
        background-color: blue;
    }
    #manual .manual-orange {
        background-color: orange;
    }
    #manual .manual-green {
        background-color: green;
    }
    #manual .manual-violet {
        background-color: violet;
    }
    #manual .manual-white {
        background-color: white;
    }
    #manual .manual-black {
        background-color: black;
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
    label {
        position: relative;
    }
    label span {
        position: absolute;
        top: 0;
        left: 0;
        width: 80px;
        height: 80px;
        background-color: white;
        border: solid 3px rgb(48, 48, 48);
        color: rgb(0, 0, 0);
        font-size: 15px;
        text-align: center;
        padding-top: 35%
    }
    .unit {
        width: 80px;
        height: 80px;
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
    #question {
        background-color: rgb(255, 255, 255);
        padding: 20px 0;
    }
    #wrapper {
        background-color: rgb(0, 0, 0);
        margin: 20px auto;
        pointer-events: none;
        border: solid 3px;
        border-color: orange;
        box-shadow: 0 0 60px 20px rgb(255, 174, 0);
    }
    .ans-title {
        text-align: left;
        font-size: 20px;
        padding: 20px 40px;
        border-radius: 20% 120% 120% 20%;
    }
    button {
        border: solid 1px rgb(255, 153, 0);
        background-image:  linear-gradient(to right, orange, yellow);
        font-size: 22px;
        padding: 10px 30px;
        margin-top: 5vw;
        margin-left: 50%;
        transform: translateX(-50%);
    }
    button:hover {
        background-image: unset;
        background-color: black;
        color: white;
        cursor: pointer;
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
    @media (max-width: 741px) {
        #title {
            font-size: 25px;
            height: 50px
        }
        h1 {
            font-size: 25px;
        }
    }
    
</style>
</html>