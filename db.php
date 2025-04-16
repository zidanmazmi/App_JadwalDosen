<?php

class db{
    private $koneksi;
    function __construct()
    {
        $this->koneksi= $koneksi=new mysqli("localhost","root","","db_pelatihan_zidanemazmi");
        
    }
    function get_user($username,$password){
        $data=$this->koneksi->query("SELECT * from tbl_user where username='$username' and password='$password'");
        return $data;
    }
    
    
    // mahasiswa
    function get_allMhs(){
        $data=$this->koneksi->query("SELECT * from tbl_mahasiswa");
        return $data;
    }

    function add_mhs($nim,$nama,$alamat,$jurusan){
        $this->koneksi->query("INSERT INTO tbl_mahasiswa(nim,nama,alamat,jurusan) values('$nim','$nama','$alamat','$jurusan')");
        return true;

    }

    function update_mhs($nim,$nama,$alamat,$jurusan){
            $this->koneksi->query("UPDATE tbl_mahasiswa SET nama = '$nama', alamat = '$alamat', jurusan = '$jurusan' WHERE nim='$nim'");
            return true;
    }

    function get_MhdByNim($nim){
        $data=$this->koneksi->query("SELECT * from tbl_mahasiswa where nim='$nim'");
        return $data;
    }

    function del_mhs($nim){
        $this->koneksi->query("DELETE from tbl_mahasiswa where nim='$nim'");
        return true;

    }

    // dosen
    function get_allDsn(){
        $data=$this->koneksi->query("SELECT * from tbl_dosen");
        return $data;
    }

    function add_dsn($kd_dosen,$nama,$alamat){
        $this->koneksi->query("INSERT INTO tbl_dosen(kd_dosen,nama,alamat) values('$kd_dosen','$nama','$alamat')");
        return true;

    }

    function update_dsn($kd_dosen,$nama,$alamat){
            $this->koneksi->query("UPDATE tbl_dosen SET nama = '$nama', alamat = '$alamat' WHERE kd_dosen='$kd_dosen'");
            return true;
    }

    function get_dsnbyids($kd_dosen){
        $data=$this->koneksi->query("SELECT * from tbl_dosen where kd_dosen='$kd_dosen'");
        return $data;
    }

    function del_dsn($kd_dosen){
        $this->koneksi->query("DELETE from tbl_dosen where kd_dosen='$kd_dosen'");
        return true;

    }

    //matkul
    function get_allmtkl(){
        $data=$this->koneksi->query("SELECT * from tbl_matkul");
        return $data;
    }

    function add_mtkl($kd_matkul,$nama,$sks){
        $this->koneksi->query("INSERT INTO tbl_matkul(kd_matkul,nama,sks) values('$kd_matkul','$nama','$sks')");
        return true;
    }

    function update_mtkl($kd_matkul, $nama, $sks){
        $this->koneksi->query("UPDATE tbl_matkul SET nama = '$nama', sks = '$sks' WHERE kd_matkul = '$kd_matkul'");
        return true;
    }
    

function get_mtklbykid($kd_matkul){
    $data=$this->koneksi->query("SELECT * from tbl_matkul where kd_matkul='$kd_matkul'");
    return $data;
}

function del_mtkl($kd_matkul){
    $this->koneksi->query("DELETE from tbl_matkul where kd_matkul='$kd_matkul'");
    return true;

}
    // jadwal
    function get_alljdwl() {
        return $this->koneksi->query("SELECT j.*, d.nama AS nama_dosen, m.nama AS nama_matkul 
                                      FROM tbl_jadwal j 
                                      LEFT JOIN tbl_dosen d ON j.kd_dosen = d.kd_dosen 
                                      LEFT JOIN tbl_matkul m ON j.kd_matkul = m.kd_matkul");
    }
    

    function add_jdwl($id,$kd_dosen,$kd_matkul,$waktu,$ruang){
        $this->koneksi->query("INSERT INTO tbl_jadwal(id,kd_dosen,kd_matkul,waktu,ruang) values('$id','$kd_dosen','$kd_matkul','$waktu','$ruang')");
        return true;

    }

    function update_jdwl($id, $kd_dosen, $kd_matkul, $waktu, $ruang){
        $this->koneksi->query("UPDATE tbl_jadwal SET kd_dosen = '$kd_dosen', kd_matkul = '$kd_matkul', waktu = '$waktu', ruang = '$ruang' WHERE id='$id'");
        return true;
    }
    

    function get_jdwlbyids($id){
        $data=$this->koneksi->query("SELECT * from tbl_jadwal where id='$id'");
        return $data;
    }

    function del_jdwl($id){
        $this->koneksi->query("DELETE from tbl_jadwal where id='$id'");
        return true;

    }



} 

?>


