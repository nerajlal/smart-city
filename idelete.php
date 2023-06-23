<?php
include('dbconnect.php');
$id=$_GET['id'];
$sql="delete From picture where id=$id";

                                 //echo"$sql";
                                 $result=mysql_query($sql,$conn);
                                if($result)
                                {
                                    echo "<script>alert('PHOTO DELETED!');location.href='iphoto.php';</script>";
                                }
                                else
                                {
                                    echo "<script>alert('Can't Delete Photo!');location.href='iphoto.php';</script>";
                                }	
?>