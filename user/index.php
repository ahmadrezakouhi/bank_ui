<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

            </ul>

        </div>
    </nav>





    <div class="container mt-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="">complaint</h3>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">button</button>
            </div>
            <div class="card-body" style="max-height:500px ;overflow:auto">
                <table class="table  table-striped">
                    <thead>

                        <th>title</th>
                        <th>answer</th>
                        <th>actions</th>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<10;$i++): ?>
                        <tr>
                            <td>withdraw</td>
                            <td><a class="btn btn-outline-info" href="#" role="button">Link button</a></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-outline-warning">edit</button>
                                    <button type="button" class="btn btn-outline-danger">delete</button>

                                </div>
                            </td>
                        </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
