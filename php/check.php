<?php
    session_start();
    include('connect.php');

    if(isset($_POST['Name']) && isset($_POST['Pass']))
    {
        function Kiem_tra($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlSpecialchars($data);
            return $data;
        }

        $Name = Kiem_tra( $_POST['Name']);
        $Pass = Kiem_tra( $_POST['Pass']);

        //echo "<br>" . $Name." ". $Pass;

        //chuyển hướng
        function restrict_url( ) 
        {
            header("Location: home.php");
            exit();
        }

        //kiểm tra user 
        if(empty($Name))
        {
            header("Location: login.php?error= Nhập Username");
            exit();
        }
        else if(empty($Pass))
        {
            header("Location: login.php?error= Nhập Passwords");
            exit();
        }
        else 
        {
            $sql= " SELECT* FROM user JOIN account on account.Name = user.AccName
            WHERE account.Name = '$Name' and account.Pass = '$Pass'";

            $kq= mysqli_query($conn, $sql);

            //echo "<br>". mysqli_num_rows($kq);

            if(mysqli_num_rows($kq) == 1)
            {
                $row = mysqli_fetch_array($kq, MYSQLI_ASSOC);

                //echo "<br>". $row['Name'];
                
                if( ( $row['Name'] == $Name) && ($row['Pass'] == $Pass) )
                {
                    return restrict_url( ) ;
                }

            }
        }
    }
?>