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
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name *" value="Web Developer" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number *" value="+55" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="password" name="password" class="form-control" placeholder="Your Password *" value="123" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="conf_password" name="conf_password" class="form-control" placeholder="Confirm Password *" value="123" />
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