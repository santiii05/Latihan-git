<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Siswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('DLemas/cetak'); ?>" method="post">
        <?php echo validation_errors() ?>
            <table>
                <tr>
                    <th colspan="3"> 
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="tgl" id="tgl">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tmpt" id="tmpt">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
                    </td>
                </tr> 
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki"> Laki-laki
                        <input type="radio" name="jk" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td>
                    <select name="agama" id="agama">
                            <option value="">Pilih agama</option>
                            <option agama="1">Islam</option>
                            <option agama="2">Kristen</option>
                            <option agama="3">Katolik</option>
                            <option agama="4">Budha</option>
                            <option agama="5">Hindu</option>
                            <option agama="6">Protestan</option>
                            <option agama="7">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center"> <br>
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>