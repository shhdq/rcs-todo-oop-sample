<!-- Header -->
<?php include_once './components/header.php'; ?>
<!--// Header -->

<style>
    .container {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>
<!--// Styles -->

<?php

include_once './controler.php';

$controler = new Controler();

$controler->insert();

?>

<div class="container">
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">

        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<!-- Footer -->
<?php include_once './components/footer.php'; ?>
<!--// Footer -->