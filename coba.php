<!DOCTYPE html>
<html>
<head>
	<title>coba</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <style type="text/css"> #mapid {height: 100vh}</style>
</head>
<body>
 <div id="mapid"></div>
                        <?php
                        $conn   = mysqli_connect('localhost', 'root', '', 'losari');
                        $sql    = 'SELECT * FROM desa WHERE parent = 0';
                        $query  = mysqli_query($conn, $sql);
                        $first  = true;


                       while($row = mysqli_fetch_array($query)) 
{
                            $html .= '<li>' . $row['id_desa'] . '<ul>';
                            
                            $sql_subkat     = 'SELECT nama_desa FROM desa ';
                            $query_subkat   = mysqli_query($conn, $sql);
                            while($row_subkat = mysqli_fetch_array($query_subkat)) {
                                $html .= '<li>' . $row_subkat['nama_desa'] . '</li>';
                            }
                            $html .= '</ul></li>';
                        }
                        $html .= '</ul>';
                        echo $html;

                        ?>


</body>


</html>