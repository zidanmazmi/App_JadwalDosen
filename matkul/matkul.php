<?php
include "../db.php";
$db=new db;

switch ($_GET['action'])
{

    case 'save':

        $kd_matkul = $_POST['kd_matkul'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];
        

        $query = $db->add_mtkl($kd_matkul,$nama,$sks);
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :";
        }
    break;

    case 'edit':

        $kd_matkul = $_POST['kd_matkul'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];
      
        $query = $db->update_mtkl($kd_matkul,$nama,$sks);
       
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :";
        }
    break;

    case 'delete':

        $kd_matkul = $_POST['kd_matkul'];
        $query = $db->del_mtkl($kd_matkul);
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" ;
        }
    break;
}
?>
