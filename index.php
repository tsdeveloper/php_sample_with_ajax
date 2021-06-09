<?php

?>

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
                                <input type="text" name="name" class="form-control" placeholder="Your Name *" value="Web Developer" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="number" class="form-control" placeholder="Phone Number *" value="47" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="password" class="form-control" placeholder="Your Password *" value="123" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="conf_password" class="form-control" placeholder="Confirm Password *" value="123" />
                            </div>
                        </div>
                    </div>
                    <button type="button" id="enviar-form" class="btn btn-outline-success enviar-form">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.js"></script>


    <script>
        $(function() {

            $('#enviar-form').click(function() {

                $.ajax({
                    url: 'insert.php',
                    type: 'post',
                    data: $('#frm-register-client').serialize(),
                    success: function(meu_param) {

                        // var retorno_json = JSON.stringify(meu_param);
                        console.log(meu_param);

                        if (meu_param.success === "1") {
                            // location.href = 'index.php';
                        } else {
                            alert('Invalid credentials');
                        }

                    },
                    error: function(ex, hre) {
                        console.log()
                    }


                })

            })

        })
    </script>
</body>

</html>