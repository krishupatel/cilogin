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

    <title>Welcome to Dashboard</title>
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
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card" style="margin-top: 30px">
                    <div class="card-header text-center">
                        Add New Blog
                    </div>
                    <div class="card-body">
                        <form method="post" autocomplete="off" action="<?= base_url('welcome/add_new_blog') ?>">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Post Title</label>
                                <input type="text" placeholder="Enter Post Title" name="post_title" class="form-control"
                                    id="post_title" aria-describedby="name">
                                <input type="hidden" name="user_id" id="user_id"
                                    value="<?php echo $udata['user_id']  ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Post Description</label>
                                <textarea class="form-control" placeholder="Enter post description here" rows="5"
                                    cols="40" name="post"></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                            <?php
                                if ($this->session->flashdata('success')) {    ?>
                            <p class="text-success text-center" style="margin-top: 10px;">
                                <?= $this->session->flashdata('success') ?></p>
                            <?php } ?>
                            <?php
                                if ($this->session->flashdata('error')) {    ?>
                            <p class="text-danger text-center" style="margin-top: 10px;">
                                <?= $this->session->flashdata('error') ?></p>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>


<?php
} else {
    redirect(base_url('welcome/login'));
}



?>