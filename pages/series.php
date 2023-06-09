<?php include "includes/header.php" ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Series</h2>
                    </div>
                    <div class="card-body">
                        <form action="route.php?page=get-result" method="post">
                            <div class="row mb-3">
                                <label for="" class="col-md-4">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="first_number" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Second Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="second_number" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Option</label>
                                <div class="col-md-8">
                                    <input type="radio" checked name="option" value="odd"> Odd
                                    <input type="radio" name="option" value="even"> Even
                                    <input type="radio" name="option" value="sum"> Sum of Series
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" cols="30" rows="5" readonly><?= isset($result) ? $result : "" ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" value="Get Result" class="btn btn-outline-primary">
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