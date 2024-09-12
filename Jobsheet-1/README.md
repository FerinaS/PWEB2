
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
$mahasiswa = new Mahasiswa();

// Mengisi nilai atribut atau properti dengan cara manual
$mahasiswa->nama = "Ferina Sheren";
$mahasiswa->nim = "230302036";
$mahasiswa->jurusan = "Komputer dan bisnis";
//menampilkan data mahasiswa
echo $mahasiswa->tampilkanData();
?>

~~~
#### Output 
![Screenshot 2024-09-12 075433](https://github.com/user-attachments/assets/476212f3-d03f-42bf-a04f-d10c746b53c3)


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
$mahasiswa = new Mahasiswa();

// Mengisi nilai atribut menggunakan metode set
$mahasiswa->setNama("Azzahra");
$mahasiswa->setNim("2301020467");
$mahasiswa->setJurusan("Komputer dan Bisnis");

//memanggil metode getname, menampilkan hasil dan nilainya
echo $mahasiswa->getNama();
echo "<br>"; 
echo $mahasiswa->getNim(); 
echo "<br>"; 
echo $mahasiswa->getJurusan(); 

?>
~~~

#### Output
![Screenshot 2024-09-12 075534](https://github.com/user-attachments/assets/73d05a15-ab3c-4fb5-b252-11f55aa43fd5)


## 3. Inheritance
### Class dan atribut
#### Mendefinisikan sebuah kelas yang bernama Pengguna dan memiliki atribut $nama

~~~ php
//membuat/mendefinisikan sebuah class Pengguna
Class Pengguna {
     //menambah atribut nama
    public $nama;
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php

//mengubah nilai dari atribut/properti
public function setNama($nama) {
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

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
//mengubah nilai dari atribut/properti
 public function setMataKuliah($mataKuliah) {
    $this->mataKuliah = $mataKuliah;
}
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
$dosen = new Dosen();

// Mengisi nilai atribut menggunakan metode set
$dosen->setNama("Pak Abdau");
$dosen->setMataKuliah("Pemrograman Web 2");

// memanggil metode getname, menampilkan hasil dan nilainya
echo $dosen->getNama();
echo "<br>";
echo $dosen->getMataKuliah();

?>
~~~

### Output
![Screenshot 2024-09-12 080634](https://github.com/user-attachments/assets/19225d0d-5fa6-4daa-b6d8-fc7f01e51fa8)


## 4. Polymorphism
### Class dan atribut
#### Mendefinisikan sebuah kelas yang bernama Pengguna dan memiliki atribut $nama

~~~ php
//membuat/mendefinisikan sebuah class mahasiswa
Class Pengguna {
     //menambah atribut nama
    public $nama;
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

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
//mengubah nilai dari atribut/properti
    public function setNama($nama) {
        $this->nama = $nama;
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


### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $nama yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string 

~~~ php

nilai dari atribut/properti
    public function getMataKuliah() {
        //untuk mengembalikan informasi Dosen
        return "Mata Kuliah: $this->mataKuliah";

    }
~~~
### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php

    //mengubah nilai dari atribut/properti
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
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


### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $jurusan yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string 

~~~ php
//mengambil nilai dari atribut/properti
    public function getJurusan() {
        //untuk mengembalikan informasi Mahasiswa
        return "Jurusan: $this->jurusan";
    }
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.
~~~ php
//mengubah nilai dari atribut/properti
public function setJurusan($jurusan) {
    $this->jurusan = $jurusan;
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
$dosen = new Dosen();
// Mengisi nilai atribut menggunakan metode set
$dosen->setNama("Pak Abdau");
$dosen->setMataKuliah("Pemrograman Web 2");

$mahasiswa = new Mahasiswa();
// Mengisi nilai atribut menggunakan metode set
$mahasiswa->setNama("Tri");
$mahasiswa->setJurusan("Komputer dan Bisnis");

// memanggil metode aksesFitur, menampilkan hasil dan nilainya
echo $dosen->aksesFitur();
echo "<br>";
echo $mahasiswa->aksesFitur();
?>
~~~

### Output
![Screenshot 2024-09-12 081157](https://github.com/user-attachments/assets/7a0a814f-6a8c-4724-bec8-7a9203c6d1ec)

## 5. Abstraction
### Class dan atribut
#### Mendefinisikan sebuah kelas  dan memiliki atribut 

~~~ php
// Abstraction class Pengguna
abstract class Pengguna {
    //menambhakan atribut
   public $nama;
~~~

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php
//mengambil nilai dari atribut/properti
public function getNama() {
        return  $this->nama;
    }
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
//mengubah nilai dari atribut/properti
public function setNama($nama) {
        $this->nama = $nama;
    }
~~~

### Akses Fitur
#### Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna Function aksesFitur()

~~~ php
// Abstraction method yang harus diimplementasikan di dalam class anak
    abstract public function aksesFitur();
~~~

### Class Dosen dan atributnya
#### Mendefinisikan sebuh kelas Dosen yang merupakan kelas turunan pewaris dari kelas Pengguna
~~~ php
Class Dosen yang mengimplementasikan metode aksesFitur
class Dosen extends Pengguna { 
    //menambahkan atribut 
    private $mataKuliah;
~~~
### Method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $mataKuliah yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php
//mengambil nilai dari atribut/properti
public function getMatakuliah() {
        return  $this->mataKuliah;
    }
~~~
### Method setter
#### digunakan untuk menetapkan nilai ke properti $name dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
//mengubah nilai dari atribut/properti
public function setMatakuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }
~~~

### Akses Fitur
#### Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna Function aksesFitur()

~~~ php
// Implementasi metode aksesFitur untuk Dosen
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur pengelolaan nilai mahasiswa dan jadwal mata kuliah " . $this->getMatakuliah() . ".";
    }
}
~~~

### Class Mahasiswa dan atributnya
#### Mendefinisikan sebuh kelas Mahasiswa yang merupakan kelas turunan pewaris dari kelas Pengguna

~~~ php
// Class Mahasiswa yang mengimplementasikan metode aksesFitur
class Mahasiswa extends Pengguna {
    //menamabahkan atribut di class mahasiswa
    private $jurusan;
~~~

### Method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $jurusan yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php
//mengambil nilai dari atribut/properti
public function getJurusan() {
        return "Jurusan $this->jurusan";
    }
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti $Jurusan dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php

    //mengubah nilai dari atribut/properti
public function setJurusan($jurusan) {
    $this->jurusan = $jurusan;
}
~~~

### Akses Fitur
#### Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna Function aksesFitur()

~~~ php
 // Implementasi metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa TI dapat mengakses fitur Data mahasiswa di website " . $this->getJurusan() . ".";
    }
}
~~~

### Objek dan akses untuk menampilkan
#### Objek digunakan untuk menyimpan informasi terkait, seperti nama dan student. Lalu di tampilkan hasil nya

~~~ php
// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen();
// Mengisi nilai atribut menggunakan metode set
$dosen->setNama("Pak Wahyu");
$dosen->setMataKuliah("Alpro");

// Instansiasi objek dari class Dosen dan Mahasiswa
$mahasiswa = new Mahasiswa();
// Mengisi nilai atribut menggunakan metode set
$mahasiswa->setNama("Laura");
$mahasiswa->setJurusan("Komputer dan Bisnis");

// memanggil metode aksesFitur, menampilkan hasil dan nilainya
echo $dosen->aksesFitur();
echo "<br>";
echo $mahasiswa->aksesFitur();
?>
~~~

### Output

![Screenshot 2024-09-12 081659](https://github.com/user-attachments/assets/c89ee9e4-9e56-43d7-bbf8-20794465d771)





 
