<?php include "includes/header.php" ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Simple Full Name Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="route.php?page=get-full-name" method="post">
                            <div class="row mb-4">
                                <label for="" class="col-md-4">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Full Name</label>
                                <div class="col-md-8">
                                    <input type="text" readonly class="form-control" name="full_name" value="<?= isset($fullName) ? $fullName : "" ?>">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" value="Submit" class="btn btn-outline-secondary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php" ?>