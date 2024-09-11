# JOBSHEET-2

## 1. Class Object
### Class dan Atribut
#### Mendefinisikan sebuah kelas yang bernama Mahasiswa dan memiliki atribut $nama, $nim, dan $jurusan

~~~ php

//membuat/mendefinisikan sebuah class mahasiswa
class Mahasiswa {
    //menambah atribut nama,nim,dan jurusan
    public $nama;
    public $nim;
    public $jurusan;
~~~

### Constructor
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $nama, $nim, dan $jurusan dari objek tersebut saat membuat objek baru dari kelas Mahasiswa

~~~ php
//metode construct untuk menginisialisasi
    public function __construct($nama, $nim, $jurusan) {
        //properties ini akan diisi value dari parameter $nama, $nim, dan $jurusan
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
~~~

### Method
#### Method ini digunakan untuk menampilkan data mahasiswa yang telah di inputkan kedalam bentuk string

~~~ php

 //metode untuk menampilkan data
    public function tampilkanData() {
            //properties ini akan diisi value dari parameter $nama, $nim, dan $jurusan
            return "Nama: $this->nama" . "<br>" . "NIM: $this->nim" . "<br>" . "Jurusan: $this->jurusan" . "<hr>";
        }
~~~

### Update
#### update ini di gunakan untul mengubah sebuah atribut 

~~~ php
 //ubah jurusan menggunakan metode upadate
    public function updateJurusan($jurusanbaru) {
        //properties ini akan diisi value dari parameter $jurusanbaru
        $this->jurusan = $jurusanbaru;
}
~~~

### Setter method
#### digunakan untuk menetapkan nilai ke properti $nama dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter

~~~ php
 //mengubah nilai dari atribut/properti
    public function setNim($nim) {
        $this->nim = $nim;

    }
}

~~~

### Objek dan akses untuk menampilkan
####  Objek digunakan untuk menyimpan informasi terkait,  Lalu di tampilkan hasil nya

~~~ php
// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Ferina", "230302036", "Komputer dan Bisnis");
//memanggil/menampilkan hasil dan nilainya
echo "TAMPILAN DATA AWAL <br>";
echo $mahasiswa1->tampilkanData();

//memanggil metode update, setname, menampilkan hasil dan nilainya
$mahasiswa1->updateJurusan("Ekonomi Bisnis");
$mahasiswa1->setNim("098765");
echo "TAMPILAN DATA BARU<br>";
echo $mahasiswa1->tampilkanData();
~~~
### Output
![Screenshot 2024-09-11 081429](https://github.com/user-attachments/assets/75257e75-023a-4854-8543-27ef8de09726)


## 2. Tugas
### Class dan Atribut
#### Mendefinisikan sebuah kelas yang bernama Dosen dan memiliki atribut $nama, $nim, $NIP, dan $mataKuliah

~~~ php
//membuat/mendefinisikan sebuah class Dosen
class Dosen {
    //menambah atribut nama,nip,dan mataKuliah
    public $nama;
    public $nip;
    public $mataKuliah;
~~~

### Constructor
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $nama, $nip, dan $mataKuliahn dari objek tersebut saat membuat objek baru dari kelas Dosen

~~~ php
   //metode construct untuk menginisialisasi
    public function __construct($nama, $nip, $mataKuliah) {
        //properties ini akan diisi value dari parameter $nama, $nip, dan $mataKuliah
        $this->nama = $nama;
        $this->nip= $nip;
        $this->mataKuliah = $mataKuliah;

    }
~~~

### Method
#### Method ini digunakan untuk menampilkan data Dosen yang telah di inputkan kedalam bentuk string

~~~ php
 //metode untuk menampilkan data
    public function tampilkanDosen() {
            //untuk mengembalikan informasi mahasiswa, termasuk nama, NIP, dan mataKuliah
            return "Nama: $this->nama" . "<br>" . "NIP: $this->nip" . "<br>" . "Mata Kuliah: $this->mataKuliah" . "<hr>";
        }
~~~

### Objek dan akses untuk menampilkan
#### Objek digunakan untuk menyimpan informasi terkait, seperti nama, NIP, dan mataKuliah dari Dosen. Lalu di tampilkan hasil nya

~~~ php
// Instansiasi objek dari class Dosen
$dosen1 = new Dosen("Pak Lutfi", "11009", "Desain Interaksi Pengguna");
//menampilkan data Dosen
echo "TAMPILAN DATA DOSEN <br>";
echo $dosen1->tampilkanDosen();
~~~

### Output

![Screenshot 2024-09-11 082531](https://github.com/user-attachments/assets/128affbb-0e36-4f49-b8b3-673a184bf3b8)








