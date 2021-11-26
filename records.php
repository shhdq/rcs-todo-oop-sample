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


<div class="container">
    <h1>Records</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <!--// thead -->
        <tbody>
            <?php

            include_once './controler.php';

            $controler = new Controler();

            $rows = $controler->fetch();

            if (!empty($rows)) {
                foreach ($rows as $row) {

            ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>


            <?php
                }
            } else {
                echo "0000000000000000000000";
            }


            ?>
        </tbody>

    </table>
</div>


<!-- Footer -->
<?php include_once './components/footer.php'; ?>
<!--// Footer -->