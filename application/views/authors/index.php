<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CodeIgniter Default Pagination</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Login</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Authors') ?>">Home Page Blogs</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Search</button>
		      </form> -->
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="title is-3">CodeIgniter Default Pagination</h3>
        <div class="column">
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post Title</th>
                        <th>Post Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($authors as $author) : ?>
                        <tr>
                            <td><?= $author->post_id ?></td>
                            <td><?= $author->post_title ?></td>
                            <td><?= $author->post ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p><?php echo $links; ?></p>
        </div>
    </div>
</body>

</html>