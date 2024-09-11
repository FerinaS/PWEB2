
# JOBSHEET-1

## 1. Membuat Class dan Object
### Class dan atribut
#### Mendefinisikan sebuah kelas yang bernama Mahasiswa dan memiliki atribut $nama, $nim, dan $jurusan

~~~ php
 //membuat/mendefinisikan sebuah class mahasiswa
Class Mahasiswa {
//menambah atribut nama,nim,dan jurusan
    public $nama;
    public $nim;
    public $jurusan;
}
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
}
~~~
### Method
#### Method ini digunakan untuk menampilkan data mahasiswa yang telah di inputkan kedalam bentuk string
~~~ php
//metode untuk menampilkan data
public function tampilkanData() {
    //untuk mengembalikan informasi mahasiswa, termasuk nama, NIM, dan jurusannya
    return"Nama: $this->nama" . "<br>" . "NIM: $this->nim" . "<br>" .  "Jurusan: $this->jurusan" . "<hr>";
    }
~~~
### Objek dan akses untuk menampilkan
####  Objek digunakan untuk menyimpan informasi terkait, seperti nama, NIM, dan jurusan dari mahasiswa. Lalu di tampilkan hasil nya
 ~~~ php
// Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("FERINA", "230302036", "Komputer dan Bisnis");
//menampilkan data mahasiswa
echo $mahasiswa->tampilkanData();
?>
~~~
#### Output 
![Screenshot 2024-09-11 055123](https://github.com/user-attachments/assets/308e4cdb-668c-4b1b-acd6-6552b3de86f6)

## 2. Encapsulation 
### Class dan atribut
#### Mendefinisikan sebuah kelas yang bernama Mahasiswa dan memiliki atribut $nama, $nim, dan $jurusan

~~~ php
//membuat/mendefinisikan sebuah class mahasiswa
Class Mahasiswa {
    //menambah atribut nama,nim,dan jurusan
    private $nama;
    private $nim;
    private $jurusan;
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

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $nama yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string 

~~~ php
//mengambil nilai dari atribut/properti
    public function getNama() {
        //untuk mengembalikan informasi Mahasiswa
        return "Nama: $this->nama";
    }
~~~

###  setter method
#### digunakan untuk menetapkan nilai ke properti $nama dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
//mengubah nilai dari atribut/properti
    public function setNama($nama) {
        $this->nama = $nama;
}
~~~

#### lanjutan getter dan setter NIM dan Jurusan

~~~ php
//mengambil nilai dari atribut/properti
    public function getNim() {
        return "Nim: $this->nim";
    }
//mengubah nilai dari atribut/properti
    public function setNim($nim) {
        $this->nim = $nim;
    }
//mengambil nilai dari atribut/properti
    public function getJurusan() {
        return "Jurusan: $this->jurusan";
    }
//mengubah nilai dari atribut/properti
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}
~~~
### Objek dan akses untuk menampilkan
####  Objek digunakan untuk menyimpan informasi terkait, seperti nama, NIM, dan jurusan dari mahasiswa. Lalu di tampilkan hasil nya

~~~ php
// Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("FERINA", "230302036", "Komputer dan Bisnis");
//memanggil metode getname, menampilkan hasil dan nilainya
echo $mahasiswa->getNama();
echo "<br>"; 
echo $mahasiswa->getNim(); 
echo "<br>"; 
echo $mahasiswa->getJurusan(); 
?>
~~~

#### Output
![Screenshot 2024-09-11 060931](https://github.com/user-attachments/assets/309be84b-ac82-4830-8196-cf137af48f1c)

## 3. Inheritance
### Class dan atribut
#### Mendefinisikan sebuah kelas yang bernama Pengguna dan memiliki atribut $nama

~~~ php
//membuat/mendefinisikan sebuah class Pengguna
Class Pengguna {
     //menambah atribut nama
    public $nama;
~~~

### Constructor
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $nama dari objek tersebut saat membuat objek baru dari kelas Pengguna

~~~ php
//metode construct untuk menginisialisasi
    public function __construct($nama) {
        //properties ini akan diisi value dari parameter $nama
        $this->nama = $nama;
}
~~~

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $nama yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string 

~~~ php
//mengambil nilai dari atribut/properti
public function getNama() {
        //untuk mengembalikan informasi Pengguna
        return "Nama Dosen:  $this->nama";
    }
~~~

### Class Dosen dan Atribut
#### Mendefinisikan sebuh kelas Dosen yang merupakan kelas turunan?pewaris dari kelas Pengguna
~~~ php
//mewarisi semua atribut/properti dari kelas pengguna
class Dosen extends Pengguna{
    //Menyimpan nama mata kuliah
    private $mataKuliah;
~~~

### Constructor
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $nama, $mataKuliah dari objek tersebut saat membuat objek baru dari kelas Mahasiswa

~~~ php
//metode construct untuk menginisialisasi
    public function __construct($nama,$mataKuliah) {
        //Memanggil konstruktor induk
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
~~~

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti mataKuliah yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string 

~~~ php
//mengambil nilai dari atribut/properti
    public function getMataKuliah() {
        //untuk mengembalikan informasi Dosen
        return "Mengajar Matkul: $this->mataKuliah";
    }
~~~

### Objek dan akses untuk menampilkan
####  Objek digunakan untuk menyimpan informasi terkait, seperti nama dan mataKuliah. Lalu di tampilkan hasil nya

~~~ php
// Instansiasi objek dari class Dosen
$dosen = new Dosen("Pak Abdau", "Pemrograman Web 2");
// memanggil metode getname, menampilkan hasil dan nilainya
echo $dosen->getNama();
echo "<br>";
echo $dosen->getMataKuliah();
~~~

### Output
![Screenshot 2024-09-11 063306](https://github.com/user-attachments/assets/4f247beb-32fd-422b-b178-37eb810a6bb7)

## 3. Polymorphism
### Class dan atribut
#### Mendefinisikan sebuah kelas yang bernama Pengguna dan memiliki atribut $nama

~~~ php
//membuat/mendefinisikan sebuah class mahasiswa
Class Pengguna {
     //menambah atribut nama
    public $nama;
~~~
### Constructor
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $nama dari objek tersebut saat membuat objek baru dari kelas Pengguna

~~~ php
//metode construct untuk menginisialisasi
    public function __construct($nama) {
        //properties ini akan diisi value dari parameter $nama
        $this->nama = $nama;

    }
~~~

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $nama yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string 

~~~ php
         //mengambil nilai dari atribut/properti
    public function getNama() {
        //untuk mengembalikan informasi Pengguna
        return "Nama: $this->nama";
    }
~~~
 ### Akses Fitur
 #### Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna Function aksesFitur()

 ~~~ php
// Implementasi metode aksesFitur untuk pengguna
    public function aksesFitur() {
        //untuk mengembalikan informasi Pengguna
        return "akses fitur dasar pengguna";
    }
~~~

### Class Dosen dan Atribut
#### Mendefinisikan sebuh kelas Dosen yang merupakan kelas turunan pewaris dari kelas Pengguna

~~~ php
//mewarisi semua atribut/properti dari kelas pengguna
class Dosen extends Pengguna{
    //Menyimpan nama mata kuliah
    private $mataKuliah;
~~~

### Constructor
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $nama, $mataKuliah dari objek tersebut saat membuat objek baru dari kelas Dosen
~~~ php
 //metode construct untuk menginisialisasi
    public function __construct($nama,$mataKuliah) {
        //Memanggil konstruktor induk
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
~~~

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $nama yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string 

~~~ php

nilai dari atribut/properti
    public function getMataKuliah() {
        //untuk mengembalikan informasi Dosen
        return "Mata Kuliah: $this->mataKuliah";

    }
~~~

 ### Akses Fitur
 #### Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna Function aksesFitur()

 ~~~ php
// Implementasi metode aksesFitur untuk dosen
    public function aksesFitur() {
        //untuk mengembalikan informasi Pengguna
        return "Dosen dapat mengakses : akses fitur pengelolaan nilai dan jadwal mata kuliah <br> " . $this->getMataKuliah() . ".";

    }
~~~

### Class Dosen dan Atribut
#### Mendefinisikan sebuh kelas Mahasiswa yang merupakan kelas turunan pewaris dari kelas Pengguna

~~~ php
//mewarisi semua atribut/properti dari kelas pengguna
class Mahasiswa extends Pengguna{
    private $Jurusan;
~~~

### Constructor
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $nama, $jurusan dari objek tersebut saat membuat objek baru dari kelas Mawasiswa

~~~ php

 //metode construct untuk menginisialisasi
    public function __construct($nama,$jurusan) {
        //Memanggil konstruktor induk
        parent::__construct($nama);
        $this->jurusan = $jurusan;
    }
~~~

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $jurusan yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string 

~~~ php
//mengambil nilai dari atribut/properti
    public function getJurusan() {
        //untuk mengembalikan informasi Mahasiswa
        return "Jurusan: $this->jurusan";
    }
~~~

 ### Akses Fitur
 #### Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Mahasiswa Function aksesFitur()

~~~ php
 // Implementasi metode aksesFitur untuk mahasiswa
    public function aksesFitur() {
        //untuk mengembalikan informasi mahasiswa
        return "Mahasiswa dapat mengakses : akses fitur data Mahasiswa <br> " . $this->getJurusan() . ".";
    }
}
~~~

### Objek dan akses untuk menampilkan
####  Objek digunakan untuk menyimpan informasi terkait,  Lalu di tampilkan hasil nya

~~~ php

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen("Pak Abdau", "Pemrograman Web 2");
$mahasiswa = new Mahasiswa("Pak Abdau", "Komputer dan Bisnis");

// memanggil metode getname, menampilkan hasil dan nilainya
echo $dosen->aksesFitur();
echo "<br>";
echo $mahasiswa->aksesFitur();
~~~

### Output
![Screenshot 2024-09-11 065438](https://github.com/user-attachments/assets/d9457d40-1e78-41e3-8e23-f8732c622fea)




