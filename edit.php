<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Moin!</title>
    <meta name="description" content="HTML und PHP Tutorial File">
    <meta name="author" content="Felix Burwitz">


    <!-- Bootstrap V4.5.2-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <!-- FA CSS -->

</head>
<body>


<?php
include_once("includes/config.php");
if(isset($_POST['update'])) {

    #declares
    $id = $_POST['id'];

    $in1 = $_POST['input_two'];
    $in2 = $_POST['input_three'];
    $in3 = $_POST['input_four'];

    #Updates
    $result = mysqli_query($conn, "UPDATE inputs SET input_two='$in1', input_three='$in2', input_four='$in3' WHERE id=$id");

    #redirect
    header("Location: index.php");
}
?>
<?php
include_once("includes/config.php");
# Display data based on given ID (we get the ID from the URL)
$id = $_GET['id'];

# Display data based on given ID
$result = mysqli_query($conn, "SELECT * FROM inputs WHERE id=$id");

while($row = mysqli_fetch_array($result)) {
    $in1 = $row['input_two'];
    $in2 = $row['input_three'];
    $in3 = $row['input_four'];
}

?>
<div class="row">
    <div class="col-6" style="margin: auto; margin-top: 5%">
        <h1><b>V</b>erySimpleCrud</h1>
        <form action="edit.php" method="post" name="update_user" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Name:</label>
                    <input type="text" class="form-control" id="validationCustom01" name="input_two" placeholder="John Doe" value="<?php echo $in1 ?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Street</label>
                    <input type="text" class="form-control" id="validationCustom02" name="input_three" placeholder="1600 Pennsylvania Ave" value="<?php echo $in2 ?>" required>
                    <div class="valid-feedback">
                        Looks perfect!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">TelNr</label>
                    <input type="text" class="form-control" id="validationCustom02" name="input_four" placeholder="12342069" value="<?php echo $in3 ?>" required>
                    <div class="valid-feedback">
                        Looks even better!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Check me to Submit
                    </label>
                    <div class="invalid-feedback">
                        You must check the box to Submit.
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <input class="btn btn-success" type="submit" name="update" value="Update">
        </form>
        <hr><a class="btn btn-info" href="index.php">Exit</a>
        <h5 style="float: right">2021 @FelixBurwitz</h5>
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
</body>
</html>
