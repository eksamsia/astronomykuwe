<!DOCTYPE html>
<html lang="en" dir="ltr">

<head?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>astronomyku</title>
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome CDN link -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!-- <style type="text/css">
    .wrapper {
        width: 500px;
        margin: 0 auto;
    }
    </style> -->
    </head>

    <body>
        <header>
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="page-header">
                                <h2 align="center">Add New Data</h2>
                            </div>
                            <p align="center">Please fill this form and submit to add planet record to the database.
                            </p>
                            <form action="insertDo.php" method="POST">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Overview</label>
                                    <input type="text" name="deskripsi" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Distance From Sun</label>
                                    <input type="number" name="jarak" class="form-control">
                                </div>
                                <input type="submit" class="btn btn-primary" name="submit" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>

</html>