<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第５回</title>
</head>
<body>
    <a id="top-menu" href="../2214505.html" style="position: fixed; z-index: 100; top: 10px; right: 10px; width: fit-content; background-color: rgba(255, 255, 255, 0.3); color: rgba(0, 0, 0, 0.6); font-size: 20px; font-weight: bold; text-align: center; padding: 10px; text-decoration: none;">My Menu</a>
    <?php
    $number = $_POST["number"];
    $name = $_POST["name"];
    $score = $_POST["score"];
    $comment = $_POST["comment"];
    $student = array($number, $name, $score, $comment);
    $avr = 0;
    $avr_comment = "";
    $error = 0;
    foreach ($score as $s) {
        if ($s>100 or $s<0) {
            $error = 1;
        }
    }
    if ($error == 0) {
        foreach ($student[2] as $a) {
            $avr = $avr + $a;
        }
        $avr = $avr/count($student[2]);
        if ($avr<30) {
            $avr_comment = "不可";
        } else {
            if ($avr<60) {
                $avr_comment = "可";
            } else {
                if ($avr_comment<80) {
                    $avr_comment = "優";
                } else {
                    $avr_comment = "秀";
                }
            }
        }
        if ($avr!=0 and $avr<60) {
            $result = "あなたは今学期に<span>不合格</span>";
        }
        if ($avr>60) {
            $result = "あなたは今学期に<span>合格</span>";
        }
    } else {
        $avr_comment = "点数が正しくない";
        $avr = 000;
    }

    ?>
    <h2 id="title"><?php echo $name;?> さん</h2>
    <table id="input-score">
        <col width="20%">
        <col width="20%">
        <col>
        <tr>
            <th>科目名</th>
            <th>点数</th>
            <th>コメント</th>
        </tr>
        <tr>
            <td>数学</td>
            <td><?php echo $score[0];?></td>
            <td><?php echo $comment[0];?></td>
        </tr>
        <tr>
            <td>物理</td>
            <td><?php echo $score[1];?></td>
            <td><?php echo $comment[1];?></td>
        </tr>
        <tr>
            <td>科学</td>
            <td><?php echo $score[2];?></td>
            <td><?php echo $comment[2];?></td>
        </tr>
        <tr>
            <td>生物</td>
            <td><?php echo $score[3];?></td>
            <td><?php echo $comment[3];?></td>
        </tr>
        <tr>
            <td>文学</td>
            <td><?php echo $score[4];?></td>
            <td><?php echo $comment[4];?></td>
        </tr>
        <tr>
            <td>歴史</td>
            <td><?php echo $score[5];?></td>
            <td><?php echo $comment[5];?></td>
        </tr>
        <tr>
            <td>地理</td>
            <td><?php echo $score[6];?></td>
            <td><?php echo $comment[6];?></td>
        </tr>
        <tr>
            <td>英語</td>
            <td><?php echo $score[7];?></td>
            <td><?php echo $comment[7];?></td>
        </tr>
        <tr>
            <td>情報</td>
            <td><?php echo $score[8];?></td>
            <td><?php echo $comment[8];?></td>
        </tr>
        <tr>
            <td>体育</td>
            <td><?php echo $score[9];?></td>
            <td><?php echo $comment[9];?></td>
        </tr>
        <tr>
            <th>合計</th>
            <th><?php echo $avr;?></th>
            <th><?php echo $avr_comment;?></th>
        </tr>
    </table>
    <h3><?php echo $result;?></h3>
    <div id="slogan">
        <div><span>now</span>doing decides in<span>future</span>what you are... BUT</div>
        <div><span>"</span>the scores are not all of things !</div>
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
    body {
        background-color: black;
        color: white;
    }
    #title {
        text-align: center;
        margin: 30px;
        color: rgb(0, 238, 255);
        font-size: 30px;
    }
    span {
        width: fit-content;
        display: inline-block;
        padding: 10px;
        width: 20vw;
        letter-spacing: 2px;
        font-size: 18px;
    }
    #input-score {
        width: 90%;
        margin: 5%;
        background-image: linear-gradient(45deg, rgb(0, 238, 255) 10%, rgb(0, 255, 85) 75%);
    }
    th, td {
        background-color: black;
        padding: 10px;
        margin: 5px;
        background-clip: padding-box;
        font-size: 20px;
        text-align: center;
    }
    td {
        font-size: 18px;
    }
    h3 {
        text-align: center;
    }
    h3>span {
        display: block;
        font-size: 35px;
        text-align: center;
        width: 100%;
    }
    #slogan {
        width: 100%;
        letter-spacing: 3px;
        text-align: center;
        margin-bottom: 20px;
    }
    #slogan span {
        width: fit-content;
        display: inline-block;
        font-size: 40px;
        margin: 20px;
        letter-spacing: 5px;
    }
    #slogan>div:nth-child(1)>span:nth-child(1) {
        color: rgb(0, 238, 255);
    }
    #slogan>div:nth-child(1)>span:nth-child(2) {
        color: rgb(0, 255, 85);
    }
    #slogan>div:nth-child(2) {
        font-size: 30px;
        font-weight: bold;
        background-image: linear-gradient(45deg, rgb(0, 238, 255) 10%, rgb(0, 255, 85) 75%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    #footer {
        text-align: right;
        background-color: white;
        color: black;
        padding: 5px;
    }
</style>
</html>