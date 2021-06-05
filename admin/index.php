<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
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
        <table class="table table-dark table-striped">
            <thead>
                <th>name</th>
                <th>last name</th>
                <th>email</th>
                <th>phone</th>
                <th>actions</th>
            </thead>
            <tbody>
                <tr>
                    <td>ahmad reza</td>
                    <td>kouhi</td>
                    <td>ahmadrezakouhi@gmail.com</td>
                    <td>0913077493</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-warning">edit</button>
                            <button type="button" class="btn btn-danger">delete</button>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
