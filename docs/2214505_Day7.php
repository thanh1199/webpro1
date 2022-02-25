<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第７回</title>
</head>
<?php
$num1 = $_POST["first"];
$num2 = $_POST["second"];
$operater = $_POST["operater"];
$value = "";
$result = "";

if ($operater=="addition") {
    $value = $num1 + $num2;
    $result = $num1." + ".$num2."  =  ";
} else if ($operater=="multiply") {
    $value = $num1 * $num2;
    $result = $num1." × ".$num2."  =  ";
} else if ($operater=="subtraction") {
    $value = $num1 - $num2;
    $result = $num1." - ".$num2."  =  ";
} else if ($operater=="division" and ($num2 != 0)) {
    $value = $num1 / $num2;
    $result = $num1." ÷ ".$num2."  =  ";
} else if (!empty($num1) && ($num2 == 0)) {
    $result= $num1." ÷ ".$num2."  = <br>";
    $value = "This caculation's result is Not a number!";
} else {
    $result= $num1." ? ".$num2."  = <br>";
    $value = "This caculation's result is Not a number!";
}

?>

<body>
    <a id="top-menu" href="../2214505.html" style="position: fixed; z-index: 100; top: 10px; left: 10px; width: fit-content; background-color: rgba(255, 255, 255, 0.3); color: rgba(0, 0, 0, 0.6); font-size: 20px; font-weight: bold; text-align: center; padding: 10px; text-decoration: none;">My Menu</a>
    <div id="wrapper">
        <div id="title">第７回：計算機</div>
        <div id="main">
            <div id="form-name">数字と演算子を入れてください。。。</div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <input type="number" step="10" name="first" required placeholder="<?php echo $num1; ?>">
                <select name="operater" id="operater" required placeholde="<?php echo $operater; ?>">
                    <option value="none">?</option>
                    <option value="addition">+</option>
                    <option value="multiply">×</option>
                    <option value="subtraction">-</option>
                    <option value="division">÷</option>
                </select>
                <input type="number" step="10" name="second" required placeholder="<?php echo $num2; ?>">
                <button type="submit">計算</button>
            </form>
            <div id="result">
                <?php
                    echo $result.$value;
                ?>
            </div>
            <div id="slogan"><p>Human has never <span>Created</span> Math, </p><p>We have only <span>Found</span> it out .</p></div>
        </div>
    </div>
    <div id="footer">Designed by N.Q.Thanh</div>
</body>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body {
        background-color: black;
    }
    #wrapper {
        background-image: linear-gradient(to left top, rgb(104, 49, 255), rgb(238, 50, 255));
        border-radius: 0 0 20px 20px;
        padding-bottom: 2vw;
    }
    #title {
        color: black;
        font-size: 5vw;
        text-align: right;
        padding: 2vw 5vw;
    }
    #main {
        min-height: 90vh;
        margin: 0 5vw;
        background-color: black;
        border-radius: 20px;
        padding: 3vw;
        color: white;
        margin-bottom: 3vw;
    }
    #form-name {
        font-size: 3vw;
        text-align: center;
        padding: 10px;
        position: relative;
    }
    #form-name::before {
        content: "";
        border-left: solid 20px transparent;
        border-right: solid 20px transparent;
        border-top: solid 10px transparent;
        border-bottom: solid 10px black;
        position: absolute;
        bottom: -20px;
        right: 50%;
        transform: translateX(50%);
        z-index: 1;
    }
    #form-name::after {
        content: "";
        position: absolute;
        width: 40px;
        height: 20px;
        background-image: linear-gradient(to left, rgb(147,32,255) 10%, rgb(199,17,254) 75%);
        bottom: -20px;
        right: 50%;
        transform: translateX(50%);
        z-index: 0;
    }
    form {
        margin: 5vh 12vw;

    }
    input, button, select, #result {
        background-color: rgba(0, 0, 0, 0);
        margin: 20px auto;
        padding: 10px;
        outline: none;
        font-size: 22px;
        text-align: center;
        color: white;
        min-height: 40px;
    }
    #result {
        width: fit-content;
        padding: 20px;
        border: solid 3px;
        border-image: linear-gradient(to left,rgb(99, 43, 255), rgb(234, 0, 255)) 1;
    }
    input {
        height: 100%;
        width: 32%;
        border: none;
        border-bottom: solid 3px;
        border-image: linear-gradient(to left,rgb(99, 43, 255), rgb(234, 0, 255)) 1;
    }
    select {
        height: 100%;
        width: 30%;
        color: #ccc;
        border: none;
        border-bottom: solid 3px;
        border-image: linear-gradient(to left,rgb(99, 43, 255), rgb(234, 0, 255)) 1;
    }
    button {
        cursor: pointer;
        display: block;
        background-image: linear-gradient(to bottom right, rgb(104, 49, 255), rgb(238, 50, 255));
        border: none;
    }
    button:hover {
        background-image: linear-gradient(to left top, rgb(104, 49, 255), rgb(238, 50, 255));
        opacity: 0.8;
        transition: ease 1s;
    }
    #slogan {
        font-size: 3vh;
        font-weight: lighter;
        margin: 30px 20% 20px;
        pointer-events: none;
    }
    #slogan span {
        font-size: 4vh;
        margin: 0 10px;
        letter-spacing: 5px;
    }
    #slogan p:nth-child(1) span {
        color: rgb(99, 43, 255);
    }
    #slogan p:nth-child(2) span{
        color: rgb(234, 0, 255);
    }
    #slogan p:nth-child(2) {
        width: fit-content;
        margin-left: auto;
    }
    #footer {
        background-color: black;
        width: fit-content;
        background-image: linear-gradient(to bottom, rgb(99, 43, 255) 10%, rgb(234, 0, 255) 75%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        color: rgb(255, 255, 255);
        padding: 1vw;
        margin-left: auto;
        font-size: 18px;
    }
</style>
</html>