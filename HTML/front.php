<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOTTO BIG WIN</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<h1>LOTTO BIG WIN</h1>
<table id="elem" align="center">
    <tr>
        <td class="balls" id="00"></td>
        <td class="balls" id="01"></td>
        <td class="balls" id="02"></td>
        <td class="balls" id="03"></td>
        <td class="balls" id="04"></td>
        <td class="balls" id="05"></td>
        <td class="balls" id="06"></td>
        <td class="balls" id="07"></td>
        <td class="balls" id="08"></td>
        <td class="balls" id="09"></td>
    </tr>
    <tr>
        <td class="balls" id="10"></td>
        <td class="balls" id="11"></td>
        <td class="balls" id="12"></td>
        <td class="balls" id="13"></td>
        <td class="balls" id="14"></td>
        <td class="balls" id="15"></td>
        <td class="balls" id="16"></td>
        <td class="balls" id="17"></td>
        <td class="balls" id="18"></td>
        <td class="balls" id="19"></td>
    </tr>
    <tr>
        <td class="balls" id="20"></td>
        <td class="balls" id="21"></td>
        <td class="balls" id="22"></td>
        <td class="balls" id="23"></td>
        <td class="balls" id="24"></td>
        <td class="balls" id="25"></td>
        <td class="balls" id="26"></td>
        <td class="balls" id="27"></td>
        <td class="balls" id="28"></td>
        <td class="balls" id="29"></td>
    </tr>
</table>
<button type="submit" id="but" onclick="generate()">Play</button>
<button tipe="submit" id="but1">Get</button>
<script src = "../JS/lotto.js"></script>
<div id="return_num"></div>
<script>
     //import arrayNums from '../JS/lotto.js';
    $("#but1").click(function()
        {
            $.get('../PHP/random.php',
                function(data){
                    $('#return_num').html(data);
                    //var count = 0;
                     //if(arrayNums.indexOf(data) != -1){ // check if number exists in lotto

                       //  var index = arrayNums.indexOf(data);

                    //     document.getElementById(index.toString()).style.backgroundColor = "green";
                    //     count++;
                    // }
                },
            );
        }
    )
</script>
</body>
</html>