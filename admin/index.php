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
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="">Contacts</h3>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">button</button>
            </div>
            <div class="card-body" style="max-height:500px ;overflow:auto">
                <table class="table table-dark table-striped">
                    <thead>
                        <th>name</th>
                        <th>last name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>actions</th>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<10;$i++): ?>
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
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">add contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">

                        <div class="form-group"><label for="name">name</label><input type="text" class="form-control" id="name"></div>
                        <div class="form-group"><label for="last_name">last name</label><input type="text" class="form-control" id="last_name"></div>
                        <div class="form-group"><label for="email">email</label><input type="email" class="form-control" id="email"></div>
                        <div class="form-group"><label for="phone">phone</label><input type="text" class="form-control" id="phone"></div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="is_employee" name="is_employee">
                            <label class="custom-control-label" for="is_employee"> employee</label>
                        </div>

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-success">button</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
