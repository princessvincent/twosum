<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorithm</title>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('num') }}" method="post">
            @csrf
                <input type="number" name="num" id="">
                <input type="number" name="nums" id="">
                <input type="number" name="target" id="">
                <input type="submit" value="">

            </form>
        </div>
    </div>
</body>

</html>
