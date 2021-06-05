<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
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
                <h3 class="">complicates</h3>

            </div>
            <div class="card-body" style="max-height:500px ;overflow:auto">
                <table class="table  table-striped">
                    <thead>
                        <th>from</th>
                        <th>title</th>

                        <th>actions</th>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<10;$i++): ?>
                        <tr>
                            <td>ahmad reza</td>
                            <td>withdraw</td>

                            <td>
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-warning">importan</button>
                                    <button type="button" class="btn btn-info">answer</button>

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
