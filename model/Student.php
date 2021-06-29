<?php
    // Ket noi CSDL va thuc thi truy van: Liet ke, them, sua, xoa, tim kiem
    include_once 'config/Connect.php';

    class Student extends Connect
    {
        public function __construct()
        {
            parent::__construct(); // luon luon duoc ket noi CSDL va ton tai bien $this->pdo
        }

        // Viet cac ham truy van
        public function getAllStudents(){
            $sql = "SELECT *FROM students, faculty WHERE students.faculty_id  = faculty.id";
            return $this->pdo->query($sql);
        }

        public function getFaculty(){
            $sql = "SELECT *FROM faculty";
            return $this->pdo->query($sql);
        }

        public function create($faculty_id, $name, $email, $phone, $address){
            $sql = "INSERT INTO students(faculty_id, name, email, phone, address) VALUES(:faculty_id, :name, :email, :phone, :address)";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':faculty_id', $faculty_id);
            $pre->bindParam(':name', $name);
            $pre->bindParam(':email', $email);
            $pre->bindParam(':phone', $phone);
            $pre->bindParam(':address', $address);
            return $pre->execute();
        }

        public function search($key){

            $sql = "SELECT students.id ,name,phone,email,address,students.faculty_id, title from students,faculty
            WHERE (phone like '%$key%' or email LIKE '%$key%' or name LIKE '%$key%') AND faculty.id = students.faculty_id";
            $pre = $this->pdo->prepare($sql);
            $pre->execute();
            $result =  $pre->fetchAll(PDO::FETCH_ASSOC);
            return $result;

        }

    }
