<?php include 'pages/includes/header.php';?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-3">
                                <label for="" class="col-md-4">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="first_number" class="form-control" id="firstNumber" placeholder="Enter your first number"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="last_number" class="form-control" id="lastNumber" placeholder="Enter your last number"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Action</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="action" value="+">+</label>
                                    <label for=""><input type="radio" name="action" value="+">-</label>
                                    <label for=""><input type="radio" name="action" value="+">*</label>
                                    <label for=""><input type="radio" name="action" value="+">?</label>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for="fullName" class="col-md-4">Full Name</label>
                                <div class="col-md-8">
                                    <?php
                                    if (isset($result)){
                                        ?>
                                        <input type="text" name="" class="form-control" id="fullName" value="<?php echo $result ?>" disabled/>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="full_name_btn" class="btn btn-success" value="Calculator"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php';?>
