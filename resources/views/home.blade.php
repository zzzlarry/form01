<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        /* Start with core styles outside of a media query that apply to mobile and up */
        /* Global typography and design elements, stacked containers */
        body { font-family: Helvetica, san-serif; }
        H1 { color: green; }
        a:link { color:purple; }

        /* Stack the two content containers */
        .main,
        .sidebar { display:block; width:100%; }

        /* First breakpoint at 576px */
        /* Inherits mobile styles, but floats containers to make columns */
        @media all and (min-width: 36em){
            .main { float: left; width:60%; }
            .sidebar { float: left; width:40%; }
        }

        /* Second breakpoint at 800px */
        /* Adjusts column proportions, tweaks base H1 */
        @media all and (min-width: 50em){
            .main { width:70%; }
            .sidebar { width:30%; }

            /* You can also tweak any other styles in a breakpoint */
            H1 { color: blue; font-size:1.2em }
        }


    .formp{
        margin-left: 3%;
        margin-right: 3%;
        font-size: 22px;
    -webkit-border-top-right-radius: 25px;
    -webkit-border-bottom-right-radius: 20px;
    }
        .checkbox-inline{
            margin-left: 3%;
            margin-right: 3%;
            font-size: 22px;
        }
        .radio-inline{
            margin-left: 3%;
            margin-right: 3%;
            font-size: 22px;        }
    </style>
    <title>問卷</title>
</head>
<body background="bg01.png" style="background-size: 100% 100%">
<p></p>
<img src="asia.png" alt="">
<p></p>
<form action="store" method="post">
<p for="id" class="formp" style="background-color: lightpink;font-weight: 100">學號<input name="id" type="text" class="form-control" placeholder="Student ID"></p>
<p class="formp" style="background-color: lightblue">姓名<input name="name" type="text" class="form-control" placeholder="Name"></p>
<p class="formp" style="background-color: lightseagreen">信箱<input name="email" type="email" class="form-control" placeholder="E-Mail"></p>
<p class="formp" style="background-color: lightsalmon">系別
    <select name="department">
    <optgroup label="資訊電機學院">
        <option class="form-control" value="生物資訊與醫學工程學系">生物資訊與醫學工程學系</option>
        <option class="form-control" selected="true" value="資訊工程學系">資訊工程學系</option>
        <option class="form-control" value="行動商務與多媒體應用學系">行動商務與多媒體應用學系</option>
        <option class="form-control" value="光電與通訊學系">光電與通訊學系</option>
        <option class="form-control" value="資訊傳播學系">資訊傳播學系</option>
    <optgroup label="創意設計學院">
        <option class="form-control" value="數位媒體設計學系">數位媒體設計學系</option>
        <option class="form-control" value="視覺傳達設計學系">視覺傳達設計學系</option>
        <option class="form-control" value="創意商品設計學系">創意商品設計學系</option>
        <option class="form-control" value="時尚設計學系">時尚設計學系</option>
        <option class="form-control" value="室內設計學系">室內設計學系</option>
        <option class="form-control" value="國際設計學士班">國際設計學士班</option>
    <optgroup label="醫學暨健康學院">
        <option class="form-control" value="健康產業管理學系">健康產業管理學系</option>
        <option class="form-control" value="食品營養與保健生技學系">食品營養與保健生技學系</option>
        <option class="form-control" value="生物科技學系">生物科技學系</option>
        <option class="form-control" value="心理學系">心理學系</option>
        <option class="form-control" value="護理學系">護理學系</option>
        <option class="form-control" value="視光學系">視光學系</option>
        <option class="form-control" value="聽力暨語言治療學系">聽力暨語言治療學系</option>
        <option class="form-control" value="職能治療學系">職能治療學系</option>
        <option class="form-control" value="學士後獸醫學系">學士後獸醫學系</option>
    <optgroup label="管理學院">
        <option class="form-control" value="經營管理學系">經營管理學系</option>
        <option class="form-control" value="休閒與遊憩管理學系">休閒與遊憩管理學系</option>
        <option class="form-control" value="會計與資訊學系">會計與資訊學系</option>
        <option class="form-control" value="財務金融學系">財務金融學系</option>
        <option class="form-control" value="財經法律學系">財經法律學系</option>
        <option class="form-control" value="國際企業學系">國際企業學系</option>
    <optgroup label="人文社會學院">
        <option class="form-control" value="外國語文學系">外國語文學系</option>
        <option class="form-control" value="社會工作學系">社會工作學系</option>
        <option class="form-control" value="幼兒教育學系">幼兒教育學系</option>
    <optgroup label="國際學院">
        <option class="form-control" value="國際學術交流中心">國際學術交流中心</option>
        <option class="form-control" value="創意領導中心">創意領導中心</option>
    </select></p>


<p class="formp" style="background-color: lightpink">年級
    <select name="year">
     <option class="form-control" value="1">1年級</option>
     <option class="form-control" value="2">2年級</option>
     <option class="form-control" value="3">3年級</option>
     <option class="form-control" value="4">4年級</option>
    </select></p>

    <p style="margin-left: 30px">Q1:複選<label class="checkbox-inline">
    <input type="checkbox" name="Q1" id="inlineCheckbox1" value="option1"> 1
</label>
<label class="checkbox-inline">
    <input type="checkbox" name="Q1" id="inlineCheckbox2" value="option2"> 2
</label>
<label class="checkbox-inline">
    <input type="checkbox" name="Q1" id="inlineCheckbox3" value="option3"> 3
</label>
<label class="checkbox-inline">
    <input type="checkbox" name="Q1" id="inlineCheckbox1" value="option1"> 4
</label></p>

<p style="margin-left: 30px">Q2:單選<label class="radio-inline">
    <input type="radio" name="Q2" id="inlineRadio1" value="option1"> 1
</label>
<label class="radio-inline">
    <input type="radio" name="Q2" id="inlineRadio2" value="option2"> 2
</label>
<label class="radio-inline">
    <input type="radio" name="Q2" id="inlineRadio3" value="option3"> 3
</label>
<label class="radio-inline">
    <input type="radio" name="Q2" id="inlineRadio3" value="option3"> 4
</label>
</p>
<button style="margin-left: 75%" type="submit" class="btn btn-primary">Submit</button></form>
</body>
</html>