<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spam Numbers</title>
</head>
<body>
            <div class="container">
                <h1>Report</h1>
                <form action="{{ route('numbers.store') }}" method="post">
                {{ csrf_field() }}
                <label for="number" class="report">Report Spam Number</label>
                <input type="number" name="number" id="number" class="number">
                <input type="text" name="reported_by" id="reported_by" class="report">

                <input type="submit" value="Report Number">

                </form>
            </div>
</body>

</html>