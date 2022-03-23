<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="dist/css/bootstrap-colorpicker.css" rel="stylesheet">
</head>

<body>
    <div id="demo">
        <h1>Bootstrap Colorpicker Demo (without Bootstrap)</h1>
        <input type="text" value="rgb(255, 128, 0)" />
    </div>
    <script src="//code.jquery.com/jquery-3.4.1.js"></script>
    <script src="dist/js/bootstrap-colorpicker.js"></script>
    <script>
        $(function() {
            $('#demo').colorpicker({
                popover: false,
                inline: true,
                container: '#demo'
            });
        });
    </script>
</body>