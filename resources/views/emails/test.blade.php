<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            .container{
                background-color: cornsilk;
                display: flex;
                flex-direction: column;
                align-content: center;                
            }
            .text-primary{
                color: #1F6DDB;
            }
    </style>    
</head>
<body>
    <div class="container">
        <h1 class="text-primary">Copie este código para finalizar su registro</h1>
        <table border="1px">
            <thead>
                <tr>
                    <th>Código</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$cod}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>