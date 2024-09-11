<?php

//membuat/mendefinisikan sebuah class Dosen
class Dosen {
    //menambah atribut nama,nip,dan mataKuliah
    public $nama;
    public $nip;
    public $mataKuliah;

    
    //metode untuk menampilkan data
    public function tampilkanDosen() {
            //untuk mengembalikan informasi mahasiswa, termasuk nama, NIP, dan mataKuliah
            return "Nama: $this->nama" . "<br>" . "NIP: $this->nip" . "<br>" . "Mata Kuliah: $this->mataKuliah" . "<hr>";
        }
       
        //metode untuk mengatur nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    //metode untuk mengatur NIP
    public function setNip($nip) {
        $this->nip = $nip;
    }

    //metode untuk mengatur Mata Kuliah
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }
}

// Instansiasi objek dari class Dosen
$dosen1 = new Dosen();
// Mengisi nilai atribut menggunakan metode set
$dosen1->setNama("Pak Lutfi");
$dosen1->setNip("11009");
$dosen1->setMataKuliah("Desain Interaksi Pengguna");

//menampilkan data Dosen
echo "TAMPILAN DATA DOSEN <br>";
echo $dosen1->tampilkanDosen();

?>
