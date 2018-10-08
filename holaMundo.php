<?php
/*Multiline
 comment*/
//uno line comment
#other one line comment
function variablesTest(){
$name = 'Cuauhtlahuac';
echo "Hola $name double quotes , security problems <br/>";
echo 'Hola $name simple quotes <br/>';
echo 'Hola '.$name. ' simple quotes concatenated <br/>';
echo 'get type of name '. gettype($name) . '<br/>';
define('PI',3.14);
echo 'define constant with: define("PI",3.14) , global scope '. PI;
};
variablesTest();
echo '<br><br>';
function arrays(){
    $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo' );
    echo $semana[0]. ' :( <br/>';
    $semana[10] = '"Sleep day"';
    echo "New week day ". $semana[10] . " yeah! <br />";
    #Other way to create an array
    $semanaTwo = ['Martes', 'Jueves', 'Sábado'];
    echo $semanaTwo[1];
    echo '<h4>Arreglos Asosiativos =></h4>';
    $alex = array('tel'=>'236564','edad'=>30,'apellido'=>'Falcon');
    $alex['edad'] = 31;
    echo $alex['edad'];
    echo '<h4>Multidimencionales</h4>';
    $friends = array(
        array('Alejandro', 43),
        array('Axel',4),
        array('Yare', 9)
    );
    echo 'Nombre: ' . $friends[0][0] . ' Edad: ' . $friends[0][1];
};
$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
sort($months);
rsort($months);//reverse sort
arrays();
echo '<br><br>';
function conditionals(){
    /*
    if(condition){
        Instructions
    }
    */
    //isset() is set if the variable is setting, sirve para saber si una variable tiene valor o no
    //OPERADOR TENARIO
    $edad = (isset($edad)) ? $edad : 'El usuario no esableció su edad';
    echo 'Edad: ' . $edad;
}
conditionals();
$alejandro = array('Teléfono' => 54568978, 'Edad' => 43 , 'País' => 'México');
echo '<br><br>';
# var_dump() imprime el desglose y el valor
# puedes pasar multples valores ausando los []
echo "<h3> Var_dump EXAMPLE. Desglosa </h3>";
var_dump($alejandro);
#print_r() imprime sólo el valor
# puedes pasar multples valores ausando los []
echo "<h3> print_r EXAMPLE. Devuelve solo valores</h3>";
print_r($alejandro);
echo '<br><br>';
echo "Default CONST " . __DIR__;
echo '<br><br>';
echo 'Array Function Example' . print_r(array_count_values($alejandro));
echo '<br><br>';
//getting all define functions
$arrDefineFun = get_defined_functions();
echo "Only gettype of variable:: " . gettype($alejandro);
echo '<br><br>';
//FUNCIONES ESPECIALES PARA STRINGS
echo '<h2>Funciones especiales para strings</h2>';
$texto = '<b>Hola</b>';
$texto_2 = ' Cadena Larga de Texto Ejemplo '; 
echo htmlspecialchars($texto); #No permite inyectar codigo html pues lo transforma
echo '<br/> trim: espacios in final = '.trim($texto_2);#Quita los espacios en blanco del principio y el final
echo '<br/> strlen: length = '.strlen($texto_2);#Tamaño del string
echo '<br/> substr corta donde indiques = '.substr($texto_2,1,4);#Cuantos caracteres quieres
echo '<br/> strtoupper an lower = '.strtoupper($texto_2);echo strtolower($texto_2);
//FUNCIONES ESPECIALES  PARA ARRAYS
echo '<h2>Funciones especiales para arrays</h2>';
$amigo = array('telefono' => 6565656, 'edad'=>20,'pais'=>'argentina');
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
extract($amigo);
echo 'extract(), es como descomponer en JS = '. "telefono: $telefono, edad: $edad";#Permite extraer los indices como si fueran variables.
echo '<br/>Join Function, separa con el caracter que le pongas. ejemplo: -'; echo join(' - ',$semana);
$semana_reverse = array_reverse($semana);
echo '<br/>function array_reverse voltea el orden del arreglo = ';echo join(' - ',$semana_reverse);
echo '<h2>Funciones Matemáticas</h2>';
$numero = 15.185;
echo 'num  = $numero';
echo '<br/>round($numero, 1) redondea a un decimal = ' . $numero;
echo '<br/>rand(-100,100) da un Numero random el primer parametro, desde donde, segundo hasta donde = ' . rand(-100,100);
#ceil(12.1) Redondea Hacia arriba

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP practice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style></style>
</head>
<body>
<h3>Recorrer Arreglo</h3>
<h4>Meses del año</h4>
<ul>
<?php
foreach($months as $mes){
    echo '<li style="color: #55f; background-color: #000">' . $mes . '</li>';
}
#Recorrer con Array Asociativo
foreach($alejandro as $key => $valor){
    echo '<li>' . $key . ': ' . $valor . '</li>';
}
?>
</ul>
    <h2><?php echo 'Hello World'?></h2>    
</body>
</html>