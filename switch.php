<?php
if (isset($_GET['hal'])) {
 $halaman = $_GET['hal'];
 $file = "$halaman.php";
 
 if(!file_exists($file)) { 
  include '404.php';
 }else{
  include "$file";
 }
}else{
 include'home.php';
 }
