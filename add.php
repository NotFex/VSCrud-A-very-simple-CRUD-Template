<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Moin!</title>
        <meta name="description" content="HTML und PHP Tutorial File">
        <meta name="author" content="Felix Burwitz">


        <!-- Bootstrap V4.5.2-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-6" style="margin: auto; margin-top: 5%">
                <h1><b>V</b>erySimpleCrud</h1>
                <form action="add.php" method="post" name="form1" class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Name:</label>
                            <input type="text" class="form-control" id="validationCustom01" name="input_two" placeholder="John Doe" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Street</label>
                            <input type="text" class="form-control" id="validationCustom02" name="input_three" placeholder="1600 Pennsylvania Ave"  required>
                            <div class="valid-feedback">
                                Looks perfect!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">TelNr</label>
                            <input type="text" class="form-control" id="validationCustom02" name="input_four" placeholder="12342069"  required>
                            <div class="valid-feedback">
                                Looks even better!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Check me to Submit
                            </label>
                            <div class="invalid-feedback">
                                You must check the box to Submit.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" name="Submit" type="submit">Add</button>
                </form>
                <hr><a class="btn btn-info" href="index.php">Exit</a>
                <h5 style="float: right">2021 @FelixBurwitz</h5>
                <?php
                if(isset($_POST['Submit'])) {
                    $in2 = $_POST['input_two'];
                    $in3 = $_POST['input_three'];
                    $in4 = $_POST['input_four'];

                    // includes the db config once
                    include_once("config.php");

                    $result = mysqli_query($conn, "INSERT INTO inputs(input_two, input_three, input_four) VALUES('$in2','$in3','$in4')");

                    echo "test";
                }
                ?>
                <script>
                    // Below: @Bootstrap Documentation <3
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
        </div>
    </body>
</html>
