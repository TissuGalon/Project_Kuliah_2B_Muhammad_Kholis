<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body style="height: 3000px">
    <!-- Header -->
    <?php include "header.php"; ?>
    <!-- Header -->
    <div class="container-lg">
        <div class="row">
            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- End Sidebar -->

            <!-- Content -->
            <div class="col-lg-9 mt-2">
                <div class="card">
                    <div class="card-header">
                        Order
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ini adalah bagian Order</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet neque recusandae,
                            ducimus voluptatibus aliquam! Recusandae mollitia sequi nihil reiciendis iusto quae totam
                            sit exercitationem. Modi distinctio veniam nemo soluta.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>

        <div class="fixed-bottom text-center mb-2">
            Copyright 2023 Muhammad Kholis
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


</body>

</html>