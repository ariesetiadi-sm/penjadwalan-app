<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Broadcast Notulen</title>
</head>

<body>
    <h1>Broadcast Notulen</h1>
    <br>
    <div>
        <h3>Detail Notulen :</h3>
        <table border="0">
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td>{{ $note['title'] }}</td>
            </tr>
            @if ($note['contentText'])
                <tr>
                    <td>Isi Notulen</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">{!! $note['contentText'] !!}</td>
                </tr>
            @endif
        </table>
    </div>
</body>

</html>
