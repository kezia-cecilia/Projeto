<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <select name="" id="">
                <?php
                    $sql  = "select * from reserva order by lugar ";
                    include_once 'conexao.php';
                    $result = mysqli_query($con, $sql);
                        
                    if(mysqli_num_rows($result) > 0){
                        
                        while($row = mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $row["cod_reser"]; ?>"><?php echo $row["lugar"]; ?></option>
                            <?php
                        }
                        
                    }
                    
                ?>
                
            </select>
        
            <br>
            <!-- o meu button esta baixo-->
            <input type="submit" value="Cadastrar" class="btn">

                  
    </form>
</body>
</html>