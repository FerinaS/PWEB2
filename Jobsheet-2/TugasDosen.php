<?php

//membuat/mendefinisikan sebuah class Dosen
class Dosen {
    //menambah atribut nama,nip,dan mataKuliah
    public $nama;
    public $nip;
    public $mataKuliah;

    //metode construct untuk menginisialisasi
    public function __construct($nama, $nip, $mataKuliah) {
        //properties ini akan diisi value dari parameter $nama, $nip, dan $mataKuliah
        $this->nama = $nama;
        $this->nip= $nip;
        $this->mataKuliah = $mataKuliah;

    }
    //metode untuk menampilkan data
    public function tampilkanDosen() {
            //untuk mengembalikan informasi mahasiswa, termasuk nama, NIP, dan mataKuliah
            return "Nama: $this->nama" . "<br>" . "NIP: $this->nip" . "<br>" . "Mata Kuliah: $this->mataKuliah" . "<hr>";
        }
}
// Instansiasi objek dari class Dosen
$dosen1 = new Dosen("Pak Lutfi", "11009", "Desain Interaksi Pengguna");
//menampilkan data Dosen
echo "TAMPILAN DATA DOSEN <br>";
echo $dosen1->tampilkanDosen();

?>
