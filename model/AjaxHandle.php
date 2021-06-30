<?php
    include_once '../../config/Connect.php';
    class AjaxHandle extends Connect
    {
        public  function  __construct()
        {
            parent::__construct();
        }
        public function searchStudent($key)
        {
            $keys = "%".$key."%";
            $sql = "SELECT students.id ,name,phone,email,address,students.faculty_id, title from students,faculty
            WHERE (phone like :key  or email LIKE :key  or name LIKE :key ) AND faculty.id = students.faculty_id";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':key',$keys);
            $pre->execute();
            $result =  $pre->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>
