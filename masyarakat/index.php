<?php
session_start();

    include '../layout/header.php';

        if(isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'tanggapan':
                include 'tanggapan.php';
                break;

                default:
                echo "Halaman ini tidak tersedia!";
                break;
            }
        } else {
            include 'home.php';
        }

    include '../layout/footer.php';

?>