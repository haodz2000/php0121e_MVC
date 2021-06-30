<?php
//    class Connect
//    {
//        private $dsn   = 'mysql:host=localhost;dbname=php0121e_manager';
//        private $user  = 'root';
//        private $passw = '';
//        protected $pdo = null;
//
//        public function __construct()
//        {
//            try {
//                $this->pdo = new PDO($this->dsn, $this->user, $this->passw);
//                $this->pdo->query("SET NAMES utf8");
//            }catch (PDOException $e){
//                echo $e->getMessage();
//                exit();
//            }
//        }
//    }
//    class Student extends Connect
//    {
//        public function __construct()
//        {
//            parent::__construct(); // luon luon duoc ket noi CSDL va ton tai bien $this->pdo
//        }
//
//        // Viet cac ham truy van
//
//        public function search($key)
//        {
//
//            $sql = "SELECT students.id ,name,phone,email,address,students.faculity_id, title from students,faculty
//                WHERE (phone like '%$key%' or email LIKE '%$key%' or name LIKE '%$key%') AND faculty.id = students.faculity_id";
//            $pre = $this->pdo->prepare($sql);
//            $pre->execute();
//            $result = $pre->fetchAll(PDO::FETCH_ASSOC);
//            return $result;
//
//        }
//    }
//    $student = new Student();
//    if(isset($_GET['key']))
//    {
//        $key = $_GET['key'];
//        $data = $student->search($key);
//        $info ='';
//        foreach ($data as $key=>$value)
//        {
//            $name = $value['name'];
//            $title = $value['title'];
//            $email = $value['email'];
//            $phone = $value['phone'];
//            $info .= "<tr>
//                                                <td scope='col''>#</td>
//                                                <td scope='col'>{$name}</td>
//                                                <td scope='col'>{$title}</td>
//                                                <td scope='col'>{$email}</td>
//                                                <td scope='col'>{$phone}</td>
//                                                <td scope='col'>Action</td>
//                                            </tr>";
//        }
//        echo $info;
//    }
//?>
<?php
    include_once '../../controller/AjaxController.php';
    $ajax = new AjaxController();
    $ajax ->Ajax();
?>
