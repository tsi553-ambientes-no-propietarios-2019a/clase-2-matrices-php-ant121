<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Deber 1</title>
</head>
<body>
    <div class="container">
        <br>
        <h1>Datos Estudiantes</h1>
        <br>
        <table class="table table-striped">
            <thead>
                <tr class="bg-primary">
                    <th scope="col">Nombre</td>
                    <th scope="col">Apellido</td>
                    <th scope="col">Edad</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $datos = array(
                    'Carlos' => array('Granda','32'),
                    'Juan' => array('Martinez','31'),
                    'Maria' => array('Jimenez','22'),
                );

                foreach ($datos as $key => $value ){
                    echo '<tr>';
                    echo '<td>';
                    echo $key;
                    echo '</td>';
                    echo '<td>';
                    print_r($value[0]);
                    echo '</td>';
                    echo '<td>';
                    print_r($value[1]);
                    echo '</td>';
                    echo '</tr>';
                }?>
            </tbody>        
        </table>
    </div>
    
</body>
</html>