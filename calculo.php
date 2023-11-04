<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
<div id="cor2">
<div id="cor">
</body>
</html>
<?php
$altura=$_POST['altura'];
$peso=$_POST['peso'];
$sexo=$_POST['sexo'];
$idade=$_POST['idade'];
$imc = $peso/($altura*$altura);
echo "<h1>";
echo "<br>";
if($sexo == "valor1" && $idade < 20)
{
if($idade == 10)
{
if($imc < 15)
{
    echo "desnutrido";
}
if($imc >= 15 && $imc <=17){
    echo "saudavel";
}
if($imc > 17.1)
{
    echo "sobrepeso";
}
}
if($idade == 11)
{
if($imc < 15)
{
echo "desnutrido";
}
if($imc >= 15 && $imc <= 17.28)
{
        echo "saudavel";
}
if($imc > 17.29)
{
        echo "sobrepeso";
}
}
if($idade == 12)
{
if($imc < 16)
{
        echo "desnutrido";
}
if($imc > 15 && $imc < 18)
{
        echo "saudavel";
}
if($imc >= 18 
){
        echo "sobrepeso";
}
}
if($idade == 13)
{
if($imc < 16)
{
        echo "desnutrido";
}
if($imc >= 16 && $imc < 19)
{
        echo "saudavel";
}
if($imc >= 19)
{
        echo "sobrepeso";
}
  }
if($idade == 14)
{
if($imc < 17)
{
        echo "desnutrido";
}
if($imc >= 17 && $imc <= 19.99)
{
        echo "saudavel";
}
if($imc >= 20)
{
        echo "sobrepeso";
}
  }
if($idade == 15)
{
if($imc < 17)
{
        echo "desnutrido";
}
if($imc >= 17 && $imc <= 19.99)
{
        echo "saudavel";
}
if($imc >= 20)
{
        echo "sobrepeso";
}
}
if($idade == 16)
{
if($imc < 18)
{
        echo "desnutrido";
}
if($imc >= 18 && $imc <= 21)
{
        echo "saudavel";
}
if($imc >= 21.1)
{
        echo "sobrepeso";
}
}
if($idade == 17)
{
if($imc < 18)
{
        echo "desnutrido";
}
if($imc >= 18 && $imc <= 22)
{
        echo "saudavel";
}
if($imc >= 22.1)
{
        echo "sobrepeso";
}
}
if($idade == 18)
{
if($imc < 18)
{
        echo "desnutrido";
}
if($imc >= 18&& $imc < 22)
{
        echo "saudavel";
}
if($imc >= 22)
{
        echo "sobrepeso";
}
}
if($idade == 19)
{
if($imc < 18)
{
        echo "desnutrido";
}
if($imc >= 18 && $imc < 22)
{
        echo "saudavel";
}
if($imc >= 22)
{
        echo "sobrepeso";
}
}
  
}
if($idade >= 20){
  if($imc <= 18.5){
        echo "Abaixo do peso";
  }
  if($imc >= 18.6 && $imc < 25){
        echo "Peso normal";
}
}
if($imc > 25 && $imc < 30){
        echo "Pré-obesidade";
}
if($imc >= 30 && $imc < 35){
        echo "Obesidade Grau 1";
}
if($imc >= 35 && $imc < 40){
        echo "Obesidade Grau 2";
}
if($imc >=40){
        echo "Obesidade Grau 3";
}
if($sexo == "valor2" && $idade < 20){
    if($idade == 10)
    {
    if($imc < 15)
    {
        echo "desnutrido";
    }
    if($imc >= 15 && $imc <=17){
        echo "saudavel";
    }
    if($imc > 17.1)
    {
        echo "sobrepeso";
    }
    }
    if($idade == 11)
    {
    if($imc < 15)
    {
    echo "desnutrido";
    }
    if($imc >= 15 && $imc < 18)
    {
            echo "saudavel";
    }
    if($imc >= 18)
    {
            echo "sobrepeso";
    }
    }
    if($idade == 12)
    {
    if($imc < 15)
    {
            echo "desnutrido";
    }
    if($imc >= 15 && $imc < 19)
    {
            echo "saudavel";
    }
    if($imc >= 19 )
    {
            echo "sobrepeso";
    }
    }
    if($idade == 13)
    {
    if($imc < 16)
    {
            echo "desnutrido";
    }
    if($imc >= 16 && $imc < 19)
    {
            echo "saudavel";
    }
    if($imc >= 19)
    {
            echo "sobrepeso";
    }
      }
    if($idade == 14)
    {
    if($imc < 16)
    {
            echo "desnutrido";
    }
    if($imc >= 16 && $imc <= 19.99)
    {
            echo "saudavel";
    }
    if($imc >= 20)
    {
            echo "sobrepeso";
    }
      }
    if($idade == 15)
    {
    if($imc < 17)
    {
            echo "desnutrido";
    }
    if($imc >= 17 && $imc <= 19.99)
    {
            echo "saudavel";
    }
    if($imc >= 20)
    {
            echo "sobrepeso";
    }
    }
    if($idade == 16)
    {
    if($imc < 17)
    {
            echo "desnutrido";
    }
    if($imc >= 17 && $imc < 21)
    {
            echo "saudavel";
    }
    if($imc >= 21)
    {
            echo "sobrepeso";
    }
    }
    if($idade == 17)
    {
    if($imc < 17)
    {
            echo "desnutrido";
    }
    if($imc >= 17 && $imc <= 21)
    {
            echo "saudavel";
    }
    if($imc >= 21.1)
    {
            echo "sobrepeso";
    }
    }
    if($idade == 18)
    {
    if($imc < 17)
    {
            echo "desnutrido";
    }
    if($imc >= 17&& $imc < 21)
    {
            echo "saudavel";
    }
    if($imc >= 21.1)
    {
            echo "sobrepeso";
    }
    }
    if($idade == 19)
    {
    if($imc < 17)
    {
            echo "desnutrido";
    }
    if($imc >= 17 && $imc < 20.90)
    {
            echo "saudavel";
    }
    if($imc >= 20.90)
    {
            echo "sobrepeso";
    }
    }
}
if($idade >= 20){
        if($imc <= 18.5){
              echo "Abaixo do peso";
        }
      }
      if($imc > 25 && $imc < 30){
              echo "Pré-obesidade";
      }
      if($imc >= 30 && $imc < 35){
              echo "Obesidade Grau 1";
      }
      if($imc >= 35 && $imc < 40){
              echo "Obesidade Grau 2";
      }
      if($imc >=40){
              echo "Obesidade Grau 3";
      }
echo "</h1>";
echo "<h3>";

echo "seu imc é  ". $imc;
echo "</h3>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="calculo.css">
</head>
<body>
      
<table border="1">
        <tr>
            <th></th>
            <th>5</th>
            <th>15</th>
            <th>50</th>
            <th>85</th>
            <th>95</th>
        </tr>
        <?php
        if($sexo == "valor2"){
                echo"tabela FEMININO";
        $data1 = array(
            array(10, 14.23, 15.09, 17.00, 20.19, 23.20),
            array(11, 14.60, 15.53, 17.67, 21.18, 24.59),
            array(12, 14.98, 15.98, 18.35, 22.17, 25.95),
            array(13, 15.36, 16.43, 18.95, 23.08, 27.07),
            array(14, 15.67, 16.79, 19.32, 23.88, 27.97),
            array(15, 16.01, 17.16, 19.69, 24.29, 28.51),
            array(16, 16.37, 17.54, 20.09, 24.74, 29.10),
            array(17, 16.59, 17.81, 20.36, 25.23, 29.72),
            array(18, 16.71, 17.99, 20.57, 25.56, 30.22),
            array(19, 16.87, 18.20, 20.80, 25.85, 30.72)
        );

        foreach ($data1 as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
}
if($sexo == "valor1"){
                echo"tabela MASCULINO";
        $data2 = array(
                array(10, 14.42, 15.15, 16.72, 19.60, 22.60),
                array(11, 14.83, 15.59, 17.28, 20.35, 23.70),
                array(12, 15.24, 16.06, 17.87, 21.12, 24.89),
                array(13, 15.73, 16.62, 18.53, 21.93, 25.93),
                array(14, 16.18, 17.20, 19.22, 22.77, 26.93),
                array(15, 16.59, 17.76, 19.92, 23.63, 27.76),
                array(16, 17.01, 18.32, 20.63, 24.45, 28.53),
                array(17, 17.31, 18.68, 21.12, 25.28, 29.32),
                array(18, 17.54, 18.89, 21.45, 25.95, 30.02),
                array(19, 17.80, 19.20, 21.86, 26.36, 30.66)
            );
    
            foreach ($data2 as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
    </div>
    </div>

</body>
</html>