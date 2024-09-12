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

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.
~~~ php 
// metode untuk mengatur nilai atribut/properti
    public function setName($name) {
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

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.
~~~ php
 // metode untuk mengatur nilai atribut/properti studentID
     public function setStudentID($studentID) {
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
}
~~~

### Objek dan akses untuk menampilkan
#### Objek digunakan untuk menyimpan informasi terkait, seperti name, studentID dari class . Lalu di tampilkan hasil nya

~~~ php
// Instansiasi objek dari class Student dan menggunakan metode setter untuk menetapkan nilai
$student = new Student();
// Mengisi nilai atribut menggunakan metode set
$student->setName("Efendi");
$student->setStudentID("23232323");

// memanggil metode getName dan getStudentID untuk menampilkan hasilnya
echo "Name: " . $student->getName() . "<br>";
echo "Student ID: " . $student->getStudentID() . "<hr>";
?>
~~~

### Output
![Screenshot 2024-09-12 085040](https://github.com/user-attachments/assets/dce99a9e-f281-48f9-aeb9-d83bb309ca5b)


## 2. Polymorphism
### Class dan atribut
### Mendefinisikan sebuah kelas yang bernama Pengguna dan memiliki atribut $name

~~~ php
<?php
//membuat/mendefinisikan sebuah class Person
class Person {
    //menambah atribut nama
    protected $name;
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
    // metode untuk mengatur nilai atribut/properti
    public function setName($name) {
        $this->name = $name;
}
~~~

### Method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $nama yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string
~~~ php

    //mengambil nilai dari atribut/properti
    public function getName() {
        //untuk mengembalikan informasi Pengguna
        return $this->name;
    }
}
~~~

### Class dan atribut
### Mendefinisikan sebuah kelas yang bernama Student dan memiliki atribut $Student

~~~ php
class Student extends Person {
    //Menyimpan nama student
    public $studentID;
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
// metode untuk mengatur nilai atribut/properti studentID
public function setStudentID($studentID) {
    $this->studentID = $studentID;
}
~~~

### Method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $nama yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~php
 //mengambil nilai dari atribut/properti
    public function getStudentID() {
        //untuk mengembalikan informasi
        return $this->studentID;
    }
~~~
### Class dan atribut
### Mendefinisikan sebuah kelas yang bernama Teacher dan memiliki atribut $teacherID

~~~ php
// class Teacher mewarisi class Person
class Teacher extends Person {
    public $teacherID;
}
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
// metode untuk mengatur nilai atribut/properti teacherID
    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID;
    }
~~~

### Method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti $nama yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php

// override method getName untuk memberikan format khusus pada Teacher
    public function getName() {
        //untuk mengembalikan informasi
        return "Teacher: " . $this->name;
    }

//mengambil nilai dari atribut/properti
    public function getTeacherID() {
        //untuk mengembalikan informasi
        return $this->teacherID;
    }
~~~

### Objek dan akses untuk menampilkan
#### Objek digunakan untuk menyimpan informasi terkait, Lalu di tampilkan hasil nya

~~~ php
// Instansiasi objek dari class Student and Teacher
$student = new Student();
// Mengisi nilai atribut menggunakan metode set
$student->setName("Tika");
$student->setStudentID("230102");

$teacher = new Teacher();
// Mengisi nilai atribut menggunakan metode set
$teacher->setName("Pak Annas");
$teacher->setTeacherID("098765");

// memanggil metode getName, menampilkan hasil dan nilainya
echo $student->getName() . "<br>"; // output
echo $teacher->getName() . "<hr>"; // output
?>
~~~

## Output
![Screenshot 2024-09-12 090427](https://github.com/user-attachments/assets/36e94682-067c-4c12-a6f7-92501c5f3b95)


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
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut $name dari objek tersebut saat membuat objek baru dari kelas Mahasiswa

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



## 4. Abstraction
### Class dan atribut
#### Mendefinisikan sebuah kelas  dan memiliki atribut 

~~~ php
// class abstrak Course
abstract class Course {
    protected $courseName;
~~~

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php
// method abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
// setter untuk mengatur nama course
    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }
}
~~~

### Class dan atribut
#### Mendefinisikan sebuah kelas  dan memiliki atribut 

~~~ php
  // class OnlineCourse yang mengimplementasikan getCourseDetails
class OnlineCourse extends Course {
    private $platform;
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
 // setter untuk mengatur platform
    public function setPlatform($platform) {
        $this->platform = $platform;
    }
~~~
### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php
//mengambil nilai dari atribut/properti
    public function getCourseDetails() {
        //mengembalikan informasi
        return "Online Course: " . $this->courseName . " via " . $this->platform;
    }
}
~~~

### Class dan atribut
#### Mendefinisikan sebuah kelas  dan memiliki atribut 

~~~ php

// class OfflineCourse yang mengimplementasikan getCourseDetails
class OfflineCourse extends Course {
    private $location;
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
// setter untuk mengatur lokasi
    public function setLocation($location) {
        $this->location = $location;
    }
~~~

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string

~~~ php
//mengambil nilai dari atribut/properti
    public function getCourseDetails() {
        //mengembalikan informasi
        return "Offline Course: " . $this->courseName . " at " . $this->location;
    }
}
~~~


### Objek dan akses untuk menampilkan
#### Objek digunakan untuk menyimpan informasi terkait, seperti nama dan student. Lalu di tampilkan hasil nya 

~~~ php
// Instansiasi objek dari class
$onlineCourse = new OnlineCourse();
// Mengisi nilai atribut menggunakan metode set
$onlineCourse->setCourseName("PHP Programming");
$onlineCourse->setPlatform("W3Schools");

$offlineCourse = new OfflineCourse();
// Mengisi nilai atribut menggunakan metode set
$offlineCourse->setCourseName("JavaScript Programming");
$offlineCourse->setLocation("PNC");

// memanggil metode getCourseDetails, menampilkan hasil dan nilainya
echo $onlineCourse->getCourseDetails() . "<br>";  // output
echo $offlineCourse->getCourseDetails() . "<br>"; // output
?>
~~~

### Output
![Screenshot 2024-09-12 091735](https://github.com/user-attachments/assets/fb6711a8-b9fd-4eed-9f14-2de39201506d)

## Tugas
### Class dan atribut
#### Mendefinisikan sebuah kelas  dan memiliki atribut 
~~~ php
<?php

//membuat/mendefinisikan sebuah class Person
class Person {
    //menambah atribut nama
    protected $name;
~~~
### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php

 // metode untuk mengatur nilai atribut/properti
 public function setName($name) {
    $this->name = $name;
}
~~~


### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string
~~~ php

    // Metode Polymorphism getRole()
    public function getRole() {
        //untuk mengembalikan informasi
        return "Person";
    }

//mengambil nilai dari atribut/properti
    public function getName() {
        //untuk mengembalikan informasi
        return $this->name;
    }
}

~~~

### Class Dosen dan Atribut
#### Mendefinisikan sebuh kelas Dosen yang merupakan kelas turunan pewaris dari kelas Person
~~~ php

// class Dosen mewarisi Person
class Dosen extends Person {
    private $nidn;
}
~~~
### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
// metode untuk mengatur NIDN
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
~~~
### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.
~~~ php
// metode untuk mengatur NIDN
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
~~~

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string
~~~ php

    // Override metode getRole untuk Polymorphism
    public function getRole() {
        return "Dosen";
    }

    // Getter dan Setter untuk NIDN (Encapsulation)
    public function getNidn() {
        return $this->nidn;
    }
}
~~~

### Class Dosen dan Atribut
#### Mendefinisikan sebuh kelas Dosen yang merupakan kelas turunan pewaris dari kelas Person
~~~ php
//class mahasiswa turunan dari person
class Mahasiswa extends Person {
    private $nim;
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.
~~~ php
 // metode untuk mengatur NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }
~~~

### method getter
#### digunakan untuk mengambil atau mengakses nilai dari properti yang ada di dalam sebuah objek. Fungsi ini akan mengembalikan sebuah string
~~~ php

// Override metode getRole untuk Polymorphism
    public function getRole() {
        return "Mahasiswa";
    }

    // Getter dan Setter untuk NIM (Encapsulation)
    public function getNim() {
        return $this->nim;
    }
}
~~~

###  property atau atribut dari class
#### variabel yang dideklarasikan di dalam class dan digunakan untuk menyimpan data atau nilai yang terkait dengan objek dari class tersebut.

~~~ php
//mendefinisikan ini sebagai abstrak
abstract class Jurnal {
    protected $title;
~~~

### Method
#### fungsi yang di definisikan dalam sebuah kelas yang di gunakan untuk manipilasi data atau objek, biasanya mempresentasikan perilaku yang dapat di lakukan oleh objek dari class

~~~ php
// metode untuk mengatur judul jurnal
    public function setTitle($title) {
        $this->title = $title;
    }

    // Metode abstrak untuk submit jurnal
    abstract public function submitJurnal();
}
~~~

### Class dan Atribut
#### Mendefinisikan sebuh kelas Dosen yang merupakan kelas turunan/pewaris dari kelas Person dan jurnal

~~~ php
//implementasi kelas turunan dan properti tambahan
class JurnalDosen extends Jurnal {
    private $nidn;
~~~

### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php
// metode untuk mengatur NIDN
   public function setNidn($nidn) {
    $this->nidn = $nidn;
}
~~~

### Method
#### fungsi yang di definisikan dalam sebuah kelas yang di gunakan untuk manipilasi data atau objek, biasanya mempresentasikan perilaku yang dapat di lakukan oleh objek dari class

~~~ php
/ Implementasi metode submitJurnal
    public function submitJurnal() {
        return "Jurnal dengan judul '$this->title' telah diterima oleh Dosen dengan NIDN $this->nidn.";
    }
}
~~~

### Class dan Atribut
#### Mendefinisikan sebuh kelas Dosen yang merupakan kelas turunan/pewaris dari kelas Person dan jurnal

~~~ php
//implementasi kelas turunan dan properti tambahan
class JurnalMahasiswa extends Jurnal {
    private $nim;
~~~


### Method setter
#### digunakan untuk menetapkan nilai ke properti dari objek saat ini. Setiap kali kamu ingin mengubah nama dari objek, kamu dapat menggunakan fungsi ini dan memberikan nilai baru sebagai parameter.

~~~ php

    // metode untuk mengatur NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }
~~~

### Method
#### fungsi yang di definisikan dalam sebuah kelas yang di gunakan untuk manipilasi data atau objek, biasanya mempresentasikan perilaku yang dapat di lakukan oleh objek dari class

~~~ php
// Implementasi metode submitJurnal
    public function submitJurnal() {
        return "Jurnal dengan judul '$this->title' telah diterima oleh Mahasiswa dengan NIM $this->nim. ";
    }
}
~~~


### Objek dan akses untuk menampilkan
#### Objek digunakan untuk menyimpan informasi terkait, seperti nama dan student. Lalu di tampilkan hasil nya 

~~~ php
// Instansiasi objek dari class
$dosen = new Dosen();
// Mengisi nilai atribut menggunakan metode set
$dosen->setName("Bpk Anto");
$dosen->setNidn("203035098");
echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN " . $dosen->getNidn() . "<br>";
echo "<hr>";

$mahasiswa = new Mahasiswa();
// Mengisi nilai atribut menggunakan metode set
$mahasiswa->setName("Rini");
$mahasiswa->setNim("230302029");
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM " . $mahasiswa->getNim() . "<br>";
echo "<hr>";

$jurnalDosen = new JurnalDosen();
// Mengisi nilai atribut menggunakan metode set
$jurnalDosen->setTitle("Sistem Informasi Manajemen");
$jurnalDosen->setNidn($dosen->getNidn());
echo $jurnalDosen->submitJurnal() . "<br>";
echo "<hr>";

$jurnalMahasiswa = new JurnalMahasiswa();
// Mengisi nilai atribut menggunakan metode set
$jurnalMahasiswa->setTitle("Sistem Interaksi");
$jurnalMahasiswa->setNim($mahasiswa->getNim());
echo $jurnalMahasiswa->submitJurnal() . "<br>";
echo "<hr>";

?>
~~~
### Output
![Screenshot 2024-09-12 095840](https://github.com/user-attachments/assets/62847684-c4cb-4498-8727-7144a1c4c480)

