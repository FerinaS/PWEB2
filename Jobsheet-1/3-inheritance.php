<?php
//membuat/mendefinisikan sebuah class Pengguna
Class Pengguna {
     //menambah atribut nama
    public $nama;


//mengambil nilai dari atribut/properti
public function getNama() {
            //untuk mengembalikan informasi Pengguna
        return "Nama Dosen:  $this->nama";
    }

//mengubah nilai dari atribut/properti
public function setNama($nama) {
    $this->nama = $nama;
}
}

//mewarisi semua atribut/properti dari kelas pengguna
class Dosen extends Pengguna{
    private $mataKuliah;

    //mengambil nilai dari atribut/properti
    public function getMataKuliah() {
        //untuk mengembalikan informasi Dosen
        return "Mengajar Matkul: $this->mataKuliah";

    }
 //mengubah nilai dari atribut/properti
 public function setMataKuliah($mataKuliah) {
    $this->mataKuliah = $mataKuliah;
}
}

// Instansiasi objek dari class Dosen
$dosen = new Dosen();

// Mengisi nilai atribut menggunakan metode set
$dosen->setNama("Pak Abdau");
$dosen->setMataKuliah("Pemrograman Web 2");

// memanggil metode getname, menampilkan hasil dan nilainya
echo $dosen->getNama();
echo "<br>";
echo $dosen->getMataKuliah();

?>