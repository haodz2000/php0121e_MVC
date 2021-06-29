<?php  
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'layout/head.php'; ?>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<?php include_once 'layout/header.php'; ?>

			<?php include_once 'layout/sidebar.php'; ?>

			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<!-- Phần thân hiển thị nội dung website -->
						<?php  
							if (isset($_GET['page'])) {
								$page = $_GET['page'];
							}else{
								$page = 'student';
							}

							switch ($page) {
								case 'student':
									include_once 'controller/StudentController.php';
									$stu = new StudentController;
									$stu->students();
									break;

                                case 'faculty':
                                    include_once 'controller/FacultyController.php';
                                    $fac = new FacultyController();
                                    $fac->faculty();
                                    break;
								
								default:
									# code...
									break;
							}
						?>

					</div>
				</div>
			</div>
		</div>
	</div>


	<?php include_once 'layout/script.php'; ?>
</body>
</html>