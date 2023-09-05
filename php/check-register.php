<?php
    session_start();
    include "connect.php";

    if(isset($_POST['Name']))
    {
        function Kiem_tra($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlSpecialchars($data);
            return $data;
        }

        //Kiểm tra tên đăng nhập trên data 
        $Name = Kiem_tra( $_POST['Name']);

        //xét data
        if(empty($Name))
        {
            header("Location: register.php?error= Nhập Tên Đăng Nhập");
            exit();
        }
        else
        {
            $sql = "SELECT * FROM account WHERE account.name= '$Name' ";

            $kq= mysqli_query($conn, $sql);

            //echo "<br>". mysqli_num_rows($kq);

            if(mysqli_num_rows($kq) == 1)
            {
                $row = mysqli_fetch_array($kq, MYSQLI_ASSOC);

                //echo "<br>". $row['Name'];
                
                if( ( $row['Name'] == $Name) )
                {
                    header("Location: register.php?error= Tên Đăng Nhập Đã Tồn Tại");
                    exit();
                }
                
            }
            else if(isset($_POST['submit']))
            {
                //Xét phần tử 
                $email= $_POST['Email'];
                $phone= $_POST['Phone'];
                $pass =  $_POST['Password'];
                $pass2 =  $_POST['cPassword'];

                //chuyển hướng
                function restrict_url() 
                {
                    header("Location: home.php");
                    exit();
                }

                //kiểm tra phone
                function validate_mobile($phone)
                {
                    return preg_match('/^[0-9]{10}+$/', $phone);
                }

                //kiểm tra mk
                function Check_MatKhau($pass)
                {
                    return preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $pass);
                }

                //kiểm tra email
                if(empty($email))
                {
                    header("Location: register.php?error_email= Nhập Email");
                    exit();
                }

                else if(empty($phone))
                {
                    header("Location: register.php?error_phone= Nhập Số Điện Thoại");
                    exit();
                }
                else if(validate_mobile($phone) == false)
                {
                    header("Location: register.php?error_phone= Số Điện Thoại Không Đúng ");
                    exit();
                }

                else if(empty($pass))
                {
                    header("Location: register.php?error_pass= Nhập Mật Khẩu");
                    exit();
                }
                else if(Check_MatKhau($pass) == false)
                {
                    header("Location: register.php?error_pass= Mật khẩu phải có ít nhất 8 ký tự bao gồm: chữ hoa, chữ thường, số và ký tự đặc biệt");
                    exit();
                }

                else if($pass != $pass2)
                {
                    header("Location: register.php?error_pass2= Nhập Lại Mật Khẩu");
                    exit();
                }
                /*else if(empty($pass2))
                {
                    header("Location: register.php?error_pass2= Nhập Lại Mật Khẩu");
                    exit();
                }
                */

                //lưu thông tin
                else
                {
                    $sql= " INSERT INTO `user` (`AccName`, `User-Name`, `Email`, `Phone`, `DiaChi`, `GioiTinh`) 
                    VALUES ('$Name', NULL, '$email', '$phone', NULL, NULL);";
                    $kq= mysqli_query($conn, $sql);

                    $sql2 = "INSERT INTO `account` (`Acc-Id`, `Name`, `Pass`) VALUES (NULL, '$Name', '$pass');";
                    $kq2= mysqli_query($conn, $sql2);
                    
                    //echo "<br>". "Dk thành công";

                    header("Location: register.php?DK= Đăng kí thành công");
                    exit();
                    /*if(mysqli_num_rows($kq) == 1)
                    {
                        $row = mysqli_fetch_array($kq, MYSQLI_ASSOC);

                        echo "<br>". $row['Name'];
                        
                        if( ( $row['Name'] == $Name) && ($row['Password'] == $Pass) )
                        {
                            //return restrict_url( );
                        }
                    }*/
                
                }
                
                //echo "<br>". $Name ." " . $email ." " . $phone ." ". $pass ." " .$pass2;
            }

            
        }

    }

    
    

        



        
      
    
?>