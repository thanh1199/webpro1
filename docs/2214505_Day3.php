<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
</head>
<?php
    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $company = $_POST["company-name"];
    $tel = $_POST["tel-number"];
    $email = $_POST["email"];
    $requestable_date = $_POST["requestable-date"];
    $requestable_time = $_POST["requestable-time"];
    $main_content = $_POST["content"];
    $rating = $_POST["rating"]
?>
<body>
    <a id="top-menu" href="../2214505.html" style="position: fixed; z-index: 100; top: 10px; right: 10px; width: fit-content; background-color: rgba(255, 255, 255, 0.3); color: rgba(0, 0, 0, 0.6); font-size: 20px; font-weight: bold; text-align: center; padding: 10px; text-decoration: none;">My Menu</a>
    <label for="" class="unit">お名前*</label>
    <span><?php echo $name;?></span>
    <div class="unit">生年月日*</div>
    <div>
        <span class="inline"><?php echo $birthday;?></span>
        <span class="inline"><?php echo $gender;?></span>
    </div>
    <label for="company-name" class="unit">職業ー会社名</label>
    <span><?php echo $company;?></span>
    <label for="tel-number" class="unit">電話番号*</label>
    <span><?php echo $tel;?></span>
    <label for="email" class="unit">E-mail*</label>
    <span><?php echo $email;?></span>
    <div class="unit">連絡できる時間</div>
    <div>
        <span class="inline"><?php echo $requestable_date;?></span>
        <span class="inline"><?php echo $requestable_time;?></span>
    </div>
        <div class="unit">お問い合わせ内容*</div>
        <span><?php echo $main_content;?></span>
        <div class="unit">評価：</div>
        <span><?php 
        for($i=0; $i<count($rating); $i++) {echo $rating[$i]."<br>";}
        ?></span>
    </div>
</body>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body {
        background-color: rgb(255, 238, 238);
        display: flex;
        flex-direction: column;
        padding: 10px;
        justify-content: space-between;
    }
    div, label, span {
        margin: 20px 0 5px 0;
    }
    span {
        border: 1px solid black;
        padding: 10px;
        margin: 0 20px;
    }
    .inline {
        margin-right: 0 20px;
    }
    .unit {
        width: 100%;
        border-left: 5px solid rgb(255, 21, 138);
        padding: 10px 30px;
    }
</style>
</html>