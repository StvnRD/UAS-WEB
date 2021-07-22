<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <style>
            a, button,input[type=submit],input[type=reset] {
            font-family: sans-serif;
            font-size: 15px;
            background: #1f5faa;
            color: white;
            border: white 1px solid;
            border-radius: 10px;
            padding: 3px 8px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        a {
            text-decoration: none;
        }
        a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
            opacity:0.9;
        }
        </style>

        <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
 
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: rgb(19, 110, 170);
            color: white;
        }
        tr:hover {background-color: #f5f5f5;}
</style>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <div class="antrian-section">
    </br>
        <h2><left>Antrian Loket</left></h2>
            <table>
                <tr>
                    <th rowspan="1">Nama</th>
                    <th rowspan="1">Jenis Kelamin</th>
                    <th rowspan="1">Pekerjaan</th>
                    <th rowspan="1">Nomor Antrian</th>
                    <th rowspan="1">Loket</th>
                </tr>



                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                    </br> </br>
                    </br> </br>
            </table>
                    </br> </br>
                    </br> </br>

        <a href="antrianbaru">Buat Antrian Baru</a>
        </br> </br>
    <?= $this->include('template/footer'); ?>
</body>
</html>