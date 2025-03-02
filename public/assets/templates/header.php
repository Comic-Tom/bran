<?php 
/**
 * requires bran config file.
 * CHECKS IF BRAN IS INSTALLED
 */
include "../../bran-config.php";
if ($installed === false): 
    header("../setup/installation.php");
else: 
    header("../login");
endif;


$included_files = get_included_files();
$initial_file = $included_files[0];
$initial_file_dir = dirname($initial_file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="../assets/style/global.css">
    <link rel="stylesheet" href="../assets/style/fonts.css">
<style>
body {
    background-image: url('../<?php $inital_file_dir ?>assets/img/radial.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
</style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <h2 class="navbar-brand"><?php echo '\\\\bran\\'. basename($initial_file_dir) ?></h2>
                </ul>
                <div class="d-flex">
                    <!-- <p>hi</p> -->
                </div>
                </div>
            </div>
        </nav>
    </header>