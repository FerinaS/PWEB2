# JOBSHEET-3

## 1. Inheritance
### Class dan atribut
#### Mendefinisikan sebuah kelas yang bernama Pengguna dan memiliki atribut $name

~~~ php
//membuat/mendefinisikan sebuah class Persona
class Person {
    //menambah atribut nama
    protected $name;
~~~

### Constructor
### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $name dari objek tersebut saat membuat objek baru dari kelas Pengguna

~~~ php
//metode construct untuk menginisialisasi
    public function __construct($name) {
    //properties ini akan diisi value dari parameter $nama 
    $this->name = $name;

    }
~~~

### Method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $name yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php
 //mengambil nilai dari atribut/properti
    public function getName() {
        //properties ini akan diisi value dari parameter $nama 
        return $this->name;
    }
    }
~~~
### Class Student dan Atribut
#### Mendefinisikan sebuh kelas Student yang merupakan kelas turunan pewaris dari kelas Persona

~~~ php
//mewarisi semua atribut/properti dari kelas persona
class Student extends Person {
    public $studentID;
~~~

### Constructor
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $name, $studentID dari objek tersebut saat membuat objek baru dari kelas Student

~~~ php
//metode construct untuk menginisialisasi
    public function __construct($name, $studentID) {
        //Memanggil konstruktor induk
        parent::__construct($name);
        $this->studentID = $studentID;

    }
~~~

### Method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $nama yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php
  //mengambil nilai dari atribut/properti
    public function getStudentID() {
        //untuk mengembalikan informasi 
        return $this->studentID;

    }
~~~

### Objek dan akses untuk menampilkan
#### Objek digunakan untuk menyimpan informasi terkait, seperti name, studentID dari class . Lalu di tampilkan hasil nya

~~~ php
// Instansiasi objek dari class student
$student = new Student("Efendi", "23232323");
// memanggil metode getname, menampilkan hasil dan nilainya
echo "Name: " . $student->getName() . "<br>";
echo "Student ID: " . $student->getStudentID() . "<hr>";
?>
~~~

### Output
![Screenshot 2024-09-11 141057](https://github.com/user-attachments/assets/d3df49da-8af7-4b13-93ca-30b25ea9f861)

## 2. ab














## 3. Encapsulation
### Class dan atribut
#### Mendefinisikan sebuah kelas yang bernama Mahasiswa dan memiliki atribut $nama

~~~ php
//membuat/mendefinisikan sebuah class Person
Class Person {
    //menambah atribut nama
    private $name;
~~~

### Constructor
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $nama, $nim, dan $jurusan dari objek tersebut saat membuat objek baru dari kelas Mahasiswa

~~~ php
//metode construct untuk menginisialisasi
    public function __construct($name) {
        //properties ini akan diisi value dari parameter
        $this->name = $name;
    }
~~~

### Method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $nama yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string
~~~ php
//mengambil nilai dari atribut/properti
    public function getName() {
        //untuk mengembalikan informasi Person 
        return $this->name;
    }
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti $name dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
 //mengubah nilai dari atribut/properti
    public function setName($name) {
        //properties ini akan diisi value dari parameter
        $this->name = $name;
    }
}
~~~

### Class Student dan Atribut
#### Mendefinisikan sebuh kelas Student yang merupakan kelas turunan pewaris dari kelas Person

~~~ php
//mewarisi semua atribut/properti dari kelas Persona
class Student extends Person {
    private $studentID;
~~~

### Constructor
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $name, $StudentID dari objek tersebut saat membuat objek baru dari kelas person
~~~ php
//metode construct untuk menginisialisasi
    public function __construct($name, $studentID) {
        //Memanggil konstruktor induk
        parent::__construct($name);
        $this->studentID = $studentID;

    }
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti $studentID dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
 public function setStudentID($studentID) {
        $this->studentID = $studentID;

    }
~~~

### Method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $studentID yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php
//mengambil nilai dari atribut/properti
    public function getStudentID(){
        //untuk mengembalikan informasi Student
        return $this->studentID;
~~~

### Method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti getName yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php
//mengambil nilai dari atribut/properti
    public function getName() {
        //Memanggil konstruktor induk
        return parent::getName();
    }
~~~

### Objek dan akses untuk menampilkan
#### Objek digunakan untuk menyimpan informasi terkait, seperti nama dan student. Lalu di tampilkan hasil nya 

~~~ php
// Instansiasi objek 
$student = new Student ("Ferina Sheren", "12121212");
//menampilkan data
echo "<b>Sebelum Di Update</b><br>";
echo "Name : " . $student->getName();
echo "<br>";
echo "Student ID : " . $student->getStudentID();
echo "<br><hr>";
// instansiasi objek
$student->setName("Ferina Sheren Nurlita Anggraeni");
$student->setStudentID("230302036");
//menampilkan data
echo "<b>Setelah Di Update</b><br>";
echo "Name : " . $student->getName();
echo "<br>";
echo "Student ID : " . $student->getStudentID();

?>
~~~

### Output
![Screenshot 2024-09-11 130425](https://github.com/user-attachments/assets/54a44e08-02fb-4887-88b0-ca206caaf6b5)







