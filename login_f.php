<?PHP
DEFINE('host','127.0.0.1');//local host
DEFINE('user','root');
DEFINE('pass','');
$conn=mysqli_connect(host,user,pass);
if(mysqli_connect_errno($conn)){
    echo "błąd połączenia z serwerem baz danych!";
}else{
    $baza=mysqli_select_db($conn,'usermanagment');
     
	if(isset($_POST['uLogin'])&&isset($_POST['uPass'])&& strlen($_POST['uLogin'])!= 0&&strlen($_POST['uPass'])!=0)
	$uLogin=mysqli_real_escape_string($conn, trim($_POST['uLogin']));
    $uPass=mysqli_real_escape_string($conn, trim($_POST['uPass']));
    $kwerenda="Select user_name, user_pass from users where user_name='$uLogin'";
    $wynik=mysqli_query($conn,$kwerenda);
    if(mysqli_affected_rows($conn)==1){
        $wiersz=mysqli_fetch_row($wynik);
        $passCheck=password_verify($uPass,$wiersz[1]);
       
        if( $passCheck==true){
            echo"Zwerifikowano uzytkowania ";
            session_start();
            $_SESSION['user']=$wiersz[0];
            header("refresh:5;url='dashboard.php'");
        }
    }else{
        echo"dane niepoprawne!";
    }
}

?>