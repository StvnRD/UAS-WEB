<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
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

        .btn2 {
            background-color: #1f5faa;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .btn2:hover{
            opacity:0.9;
        }
    </style>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <fieldset>
    </br>
    <h2 style="background-color:#1f5faa;"></br><center><font color=white>Buat Antrian Baru</color></center></br></h2>
    </br> <hr> </br>
        <form method="post"> </br>
            <font color=black>
                <label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nama &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;: </label>
                <input type="text" name="nama" placeholder="Nama lengkap..." /></br>
                </br></br>
                <tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Jenis Kelamin &emsp;&emsp;: </td><td>
                        <input type="radio" name="jenis_kelamin" value="L">Laki Laki &emsp;
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td></tr> </br>
                    </br></br>
                    <tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Pekerjaan &emsp;&emsp;&emsp;&ensp;: </td></tr>
                    <select name="pekerjaan">
                            <option value="Guru">Guru</option>
                            <option value="Freelance">Freelance</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="Pegawai Negeri">Pegawai Negeri</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Wirausaha">Wirausaha</option>
                        </select>
                    </td></tr></br>
                    </br></br>
                    <tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nomor Antrian&emsp;&ensp;:</td><td>
                        <input type="number" name="Masukkan angka">&ensp;
                    </td></tr>
                    </br></br></br>
                    <tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Loket &emsp;&emsp; &emsp; &emsp; &emsp;:</td><td>
                        <input type="radio" name="loket1" value="1"> 1 &ensp;&ensp;
                        <input type="radio" name="loket2" value="2"> 2 &ensp;&ensp;
                        <input type="radio" name="loket3" value="3"> 3
                    </td></tr>
                    </br></br> </br></br>
                    </color>
                    <center><a href="antrian" button class="btn2">BUAT</button></a><center>  
                    </br>
                    <?= $this->include('template/footer'); ?>
    </div>
</body>
</html>