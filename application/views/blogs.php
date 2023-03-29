<?php
if ($this->session->userdata('UserLoginSession')) {
    $udata = $this->session->userdata('UserLoginSession');
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <title>Welcome to blog list</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo 'Welcome <i>' . ' ' . $udata['username'] . ' </i> '; ?></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('welcome/dashboard') ?>">Add Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('welcome/blogs') ?>">View Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('welcome/logout') ?>">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Authors') ?>">Home Page Blogs</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container">

        <h2>Blogs list using Datatables </h2>


        <table id="blogs-list" class="table table-bordered table-striped table-hover">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Post Title</th>

                    <th>Post Description</th>

                </tr>

            </thead>

            <tbody>


            </tbody>

        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

<script type="text/javascript">
$(document).ready(function() {

    $('#blogs-list').DataTable({

        "ajax": {

            url: "<?php echo base_url(); ?>get_blogs",
            type: 'GET'

        },

    });

});
</script>

</html>


<?php
} else {
    redirect(base_url('welcome/login'));
}



?>