
<?php
include "model/pdo.php";
include "model/danhmuc.php";
include "global.php";
include "model/sanpham.php";
include 'view/header.php';
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'about.php':
            include 'view/about.php';
            break;
        case 'lienhe.php':
            include 'view/lienhe.php';
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "" > 0)) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);


            include "view/sanpham.php";

            break;

        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id, $iddm);


                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }

            break;

        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}



include "view/fooder.php";
?>