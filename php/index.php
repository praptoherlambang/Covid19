<!DOCTYPE html>
<html>
    <head>
        <title>DATA COVID-19 DI INDONESIA</title>
        <meta http-equiv="refresh" content="60" />
        <link rel="stylesheet" href="../plugins/bootstrap-3.0.3/css/bootstrap.min.css">
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>

        <div class="container">

            <h2>DATA COVID-19 DI INDONESIA</h2>

            <table style="width:100%" class="table table-striped table-hover">

                <tr>
                    <th>#</th>
                    <th>PROVINSI</th>
                    <th>POSITIF</th>
                    <th>MENINGGAL</th>
                    <th>SEMBUH</th>
                </tr>

                <?php

                    $json   = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');
                    $obj    = json_decode($json);

                    $nomor = 1;
                    foreach ($obj as $provinsi) {

                        echo 
                        '
                            <tr>
                                <td>'.$nomor.'</td>
                                <td>'.$provinsi->attributes->Provinsi.'</td>
                                <td>'.$provinsi->attributes->Kasus_Posi.'</td>
                                <td>'.$provinsi->attributes->Kasus_Meni.'</td>
                                <td>'.$provinsi->attributes->Kasus_Semb.'</td>
                            </tr>
                        ';

                        $nomor++;
                    }

                ?>

            </table>

        </div>

    </body>
</html>