<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Thêm mới học viên</div>
                <span class="text-danger">
                    <?php
                        if(isset($error) && !empty($error)){
                            echo $error;
                        }
                    ?>
                </span>
            </div>
            <form action="" method="POST" name="frm-create-student">
                <div class="card-body">
                    <div class="form-group mb-0">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo (isset($name)) ? $name : '' ?>" required class="form-control" id="name" placeholder="Enter name">
                    </div>

                    <div class="form-group mb-0">
                        <label for="faculty">Faculty</label>
                        <select class="form-control input-pill" name="faculty" id="faculty">
                            <?php
                                foreach ($faculty as $val){
                            ?>
                                <option value="<?= $val['id'] ?>"><?= $val['title'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group mb-0">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" value="<?php echo (isset($email)) ? $email : '' ?>" required class="form-control" id="email" placeholder="Enter Email">
                    </div>

                    <div class="form-group mb-0">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" value="<?php echo (isset($phone)) ? $phone : '' ?>" class="form-control" id="number" placeholder="Enter phone">
                    </div>

                    <div class="form-group mb-0">
                        <label for="address">Address</label>
                        <input type="text" name="address" value="<?php echo (isset($address)) ? $address : '' ?>" class="form-control" id="address" placeholder="Enter address">
                    </div>
                </div>

                <div class="card-action">
                    <button type="submit" name="submit" class="btn btn-success">Thêm mới</button>
                    <button type="reset" class="btn btn-danger">Hủy</button>
                </div>
            </form>
        </div>
    </div>
</div>