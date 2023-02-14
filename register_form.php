<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="includy/dashboard_main.css" type="text/css">
</head>
<body>
<?php
     include_once('includy/header.incl')
    ?>
    <form action="user_php.php" method="POST">
    <label>login: </label><input type="text" name="lValue" id="un" ><br>
    <label>haslo: </label><input type="password" name="hValue" id="we" ><br>
    <label>email: </label><input type="text" name="eValue" id="sd" ><br>
    <label >U</label><input type="radio" name="s" id="zx" value="U">
    <label >SU</label><input type="radio" name="s" id="as" value="SU">
    <label >AD</label><input type="radio" name="s" id="sda" value="AD"><br>
    
   
    <input type="submit" id="guz1" value="rejestracja">
    </form>
    <?php
     include_once('includy/footer.incl')
    ?>
    <script lang="JavaScript">
         var pass=document.getElementById('we');
        function userNameTest(){
            var uNameVal=document.getElementById('un').value;
            if(uNameVal.length>7){
                if((uNameVal.charCodeAt(x)>=32)&&(uNameVal.charCodeAt(x)<=47)){
                    alert("niedozwolony znak w loginie");
                }
                return true;
            }else{
                return false;
            }
        }
        function checkChars(){
            let cnt=pass.value.length;
            if(cnt>=8){
                return true;
            }else{
                return false;
            }
        }
        function checkNumbers(){
            var data=pass.value;
            for (let x = 0; x < data.length; x++) {
               if((data.charCodeAt(x)>=48)&&(data.charCodeAt(x)<=57)){
                return true
               }
                
            }
            return false
        }
        function checkBigLetter(){
            var data=pass.valuel
            for (let x = 0; x < data.length; x++) {
               if((data.charCodeAt(x)>=65)&&(data.charCodeAt(x)<=90)){
                return true
               }
                
            }
            return false
        }
        
        function userNameTest(){
            return false;
        }
        function userPassTest(){
            if(checkChars()&&checkBigLetter()&& checkNumbers()){
                return true;
            }else{
                return false;
            }
        }
        var frm=document.querySelector('form');
        var g1=document.getElementById('guz1');
        g1.addEventListener('click',function(){
            event.preventDefault()
            if(userNameTest()&&userPassTest()){
                frm.submit()
            }else{
                alert("niepoprawne lub niekompletne dane")
            }
        });
    </script>
</body>
</html>