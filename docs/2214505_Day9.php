<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第９回</title>
</head>
<?php
$condition = $_POST["condition"];
$my_option = $_POST["option"];
$images = ["../img/2214505_janken1.png","../img/2214505_janken2.png","../img/2214505_janken3.png"];
function toCompare($option1, $option2, $images) {
    if ($option1==$option2) {return "和";} else {
        if ($option1==$images[0]) {
            if ($option2==$images[1]) {return "勝";}
            else {return "負";}
        }
        if ($option1==$images[1]) {
            if ($option2==$images[2]) {return "勝";}
            else {return "負";}
        }
        if ($option1==$images[2]) {
            if ($option2==$images[0]) {return "勝";}
            else {return "負";}
        }
    }
}
switch ($condition) {
    case "random":
        $pc_option = $images[random_int(0, 2)];
        break;
    case "auto-win":
        if ($my_option==$images[0]) {$pc_option = $images[1];}
        if ($my_option==$images[1]) {$pc_option = $images[2];}
        if ($my_option==$images[2]) {$pc_option = $images[0];}
        break;
    case "auto-lose":
        if ($my_option==$images[0]) {$pc_option = $images[2];}
        if ($my_option==$images[2]) {$pc_option = $images[1];}
        if ($my_option==$images[1]) {$pc_option = $images[0];}
        break;
}
?>
<body>
    <a id="top-menu" href="../2214505.html" style="position: fixed; z-index: 100; top: 10px; left: 10px; width: fit-content; background-color: rgba(255, 255, 255, 0.3); color: rgba(0, 0, 0, 0.6); font-size: 20px; font-weight: bold; text-align: center; padding: 10px; text-decoration: none;">My Menu</a>
    <div id="main">
        <div style="position: absolute; z-index: 1; top: 3vh; width: 100%;">
            <div id="title">第９回：乱数</div>
            <div id="result">
                <div id="game-name">じゃんけんぽん</div>
                <div id="condition">
                    <span>
                        <input type="radio" name="condition" id="condition1" value="auto-win" <?php echo boolval($condition=="auto-win") ? 'checked' : '';?>>
                        <label for="condition1">Auto Win</label>
                    </span>
                    <span>
                        <input type="radio" name="condition" id="condition3" value="random" <?php echo boolval($condition=="random") ? 'checked' : '';?>>
                        <label for="condition3">Random</label>
                    </span>
                    <span>
                        <input type="radio" name="condition" id="condition2" value="auto-lose" <?php echo boolval($condition=="auto-lose") ? 'checked' : ''?>>
                        <label for="condition2">Auto Lose</label>
                    </span>
                </div>
                <div id="match">
                    <div id="my-option">
                        <p>あなた</p>
                        <img src="<?=$my_option?>" alt="my option">
                    </div>
                    <div id="compare">
                        <?=$result = toCompare($my_option, $pc_option, $images)?>
                    </div>
                    <div id="pc-option">
                        <p>パソコン</p>
                        <img src="<?=$pc_option?>" alt="pc's option">
                    </div>
                </div>
            </div>
            <div id="deccorate"><span>じゃん</span><span>けん</span><span>ぽん</span></div>
        </div>
    </div>
    <div id="footer">
        Designed by N.Q.Thanh
    </div>
</body>
<style>
* {
    margin: 0; 
    padding: 0;
    box-sizing: border-box;
}

#main {
    background-image: linear-gradient( 60deg, rgb(254, 255, 204), rgb(248, 193, 255));
    width: 100vw;
    height: calc(100vh - 25px);
    position: relative;
    overflow-x: hidden;
    overflow-y: scroll;
}
#main::before{
    content: "";
    width: 5vw;
    height: 5vw;
    position: absolute;
    top: 20%;
    left: 20%;
    z-index: 0;
    background-color: rgba(255, 117, 237, 0.7);
    border-radius: 50%;
    box-shadow: 0 0 10px 10px rgba(255, 117, 237, 0.2), 
    0 0 40px 70px rgba(255, 117, 237, 0.4), 
    0 0 100px 200px rgba(255, 117, 237, 0.3);
}
#main::after{
    content: "";
    width: 5vw;
    height: 5vw;
    position: absolute;
    bottom: 20%;
    right: 20%;
    z-index: 0;
    background-color: rgb(255, 251, 0);
    border-radius: 50%;
    box-shadow: 0 0 5px 3px rgba(255, 251, 32, 0.8), 
    0 0 10px 15px rgba(255, 251, 32, 0.7),
    0 0 100px 200px rgba(255, 251, 32, 0.6);
}
#title {
    text-align: right;
    font-weight: bold;
    padding: 20px;
    font-size: 24px;
}
form {
    margin: 20px auto;
    padding: 20px;
    max-width: 800px;
    background-color: rgba(255, 255, 255, 0.4);
}
#game-name {
    font-size: 30px;
    text-align: center;
}
input {
    display: none;
}
#condition, #match {
    display: flex;
    height: fit-content;
    flex-direction: row;
    justify-content: space-around;
    margin: 20px 5vw;
    padding: 10px 5px;
    border: solid 1px rgb(0, 0, 0);
    pointer-events: none;
}
label {
    padding: 10px;
    transition: ease 0.5s;
}
#condition input:checked + label {
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
}
#match {
    border: none;
}
#match p {
    text-align: center;
}
#match div {
    height: fit-content;
    margin: auto;
    padding: 30px;
}
#match div:nth-child(2) {
    background-color: <?php
        if ($result=="勝") {
            echo "rgb(0, 189, 72)";
        } else {
            echo ($result=="負") ? "rgb(146, 0, 0)" : "rgb(143, 0, 172)" ;
        }
    ?>;
    color: white;
    border-radius: 50%;
}
img {
    height: 90px;
    padding: 20px;
    border-radius: 20%;
    transition: ease 0.2s;
}
#deccorate {
    margin: 20px auto;
    width: fit-content;
}
#deccorate span {
    display: inline-block;
    padding: 10px;
    margin: 10px;
    border-radius: 50%;
    background-color: black;
    color: white;
}
#deccorate > span:nth-child(1) {
    transform: rotate(20deg);
}
#deccorate > span:nth-child(2) {
    transform: rotate(-10deg);
}
#footer {
    background-color: rgb(0, 0, 0);
    color: white;
    font-size: 15px;
    padding: 5px 20px;
    text-align: right;
}
</style>
</html>