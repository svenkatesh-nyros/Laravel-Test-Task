<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testing Task</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    </head>
    <body>
        <div>
            <!-- navbar header -->
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">Home</a>
                </div>
              </div>
            </nav>

            <!-- backup database button -->
            <button style="margin: 1%;" class="btn btn-primary btn-sm" onclick="backupDatabase()">Backup Database</button>

            <!-- error or success message tag -->
            <p style="margin: 1%;" id="success_msg"></p>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>

        // fn def for backup database button click action
        function backupDatabase() {
            $.ajax({
                url:'backup-database',
                type:'get',
                dataType:'json',
                success:function (res) {
                    // checking status and print error or success message
                    if (res.status) {
                        $("#success_msg").text(res.message);
                    } else {
                        $("#success_msg").text(res.message);
                    } 
                },
                error:function (err) {
                    console.log('err', err);
                }
            })
        }
    </script>
</html>
