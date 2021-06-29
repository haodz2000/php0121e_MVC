<h4 class="page-title">Dashboard</h4>

<div class="row">
    <div class="col-md-12">
	<div class="card">
		<div class="card-header ">
			<h4 class="card-title">Student List</h4>
<!--			<form action="" method="POST" role="form">-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" onkeyup="search(this.value)" name="key" class="form-control" id="search" placeholder="Input phone search">
						</div>
					</div>
<!--					<div class="col-md-2" style="padding-top: 15px;">-->
<!--						<button type="button"  id="btn-search" class="btn btn-primary">Search</button>-->
<!--					</div>-->
				</div>
<!--			</form>-->
		</div>
		<div class="card-body">
            <a href="index.php?page=student&method=add" class="btn btn-success mb-3">Thêm mới</a>
			<table id="list-students" class="table table-head-bg-success table-striped table-hover">
				<thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Faculty</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
				</thead>
				<tbody id="info-students">
                <?php
                    foreach ($result as $key => $val){
                        ?>
                        <tr>
                            <td scope="col">#</td>
                            <td scope="col"><?= $val['name']; ?></td>
                            <td scope="col"><?= $val['title']; ?></td>
                            <td scope="col"><?= $val['email']; ?></td>
                            <td scope="col"><?= $val['phone']; ?></td>
                            <td scope="col">Action</td>
                        </tr>
                    <?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>