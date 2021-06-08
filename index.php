<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>This is a simpleRegister Form made using Boostrap.</p>
            </div>

            <div class="form-content">

                <form id="frm-register-client">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number *" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>

    <script>
        $(function() {
            console.log("data:", $('#frm-register-client').serialize());




        })
    </script>
</body>

</html>