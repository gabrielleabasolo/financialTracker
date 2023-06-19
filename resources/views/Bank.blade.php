<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bank.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="Bank/Add" method="post">
            @csrf
            @method('POST')
                <H1>Add a Bank</H1>
                <label for="Bank">Bank Name:</label>
                <input type="text" name="bank" id="bank">
                <label for="balance">Balance:</label>
                <input type="text" name="balance" id="balance">
                <input type="submit" value="add bank" id="add-button">
        </form>
    </div>
</body>
</html>