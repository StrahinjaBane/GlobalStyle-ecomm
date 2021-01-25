
<?php




if(isset($_POST['adminlogin-button'])) {
    require 'dbh.inc.php';

    $adminuid = $_POST['adminuid'];
    $adminpwd = $_POST['adminpwd'];

    if(empty($adminuid) || empty($adminpwd)) {
        header("Location: adminlogin.php?error=emptyfields");
        exit(); 
    }
    else {
        $sql = "SELECT * FROM admins WHERE uidAdmins=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: adminlogin.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $adminuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if ($row = mysqli_fetch_assoc($result)) {
                
               

               # $pwdCheck = password_verify($adminpwd, $row['pwdAdmins']);
               
                if ($adminpwd !== $row['pwdAdmins']) {
                    header("Location: adminlogin.php?error=wrongpwd");
                    exit();
                }
                else if ($adminpwd == $row['pwdAdmins']) {
                    session_start();
                    $_SESSION['adminsId'] = $row['idAdmins'];
                    $_SESSION['adminsUid'] = $row['uidAdmins'];

                    header("Location: adminpanel.php?login=success");
                    exit();
                }
            }
            else {
                header("Location: adminlogin.php?error=noadmin");
                exit();
            }
        }
    }
}
else{
    header("Location: index.php");
    exit();
}