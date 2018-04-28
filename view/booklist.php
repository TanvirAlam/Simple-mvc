<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple MVC</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">
                Simple MVC
            </a>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Create book database</div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Book Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($books as $title => $book)
                                    {
                                        echo '<tr>
                                                <td>
                                                    '.$book->title.'
                                                </td>
                                                <td>
                                                     <a class="btn btn-danger" href="#" role="button">Delete</a>
                                                </td>
                                              </tr>';
                                    }
                                ?>
                                </tbody>
                            </table>
                            <div class="form-check-label">
                                <a class="btn btn-primary" href="#" role="button">Add books</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
