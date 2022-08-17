<?php
$z='';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $x=$_POST['1n'];
    $y=$_POST['2n'];
    if($_POST['num']==1)
    {
        $z=$x+$y;
    }
    if($_POST['num']==2)
    {
        $z=$x-$y;  
    }
    if($_POST['num']==3){
        $z=$x*$y;
    }
    if($_POST['num']==4){
        $z=$x/$y;
    }
    if($_POST['num']>=5){
        $z="error";
    }    
}
?>

    <!DOCTYPE html>

    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
    <link rel="stylesheet" href="ro.css">
    </head>
    <body>
    <fieldset class="design">
    <h1 >CALCULATOR</h1>

    <form action="#" method="post">
    <input type="text"  class="hh" name="1n" placeholder="enter 1st number" value="<?php if($_SERVER['REQUEST_METHOD']=='POST')
    {
    echo$_POST['1n'];
    }?>" required></input>
    <input type="text" class="hh" name="2n" placeholder="enter 2nd number" value="<?php if($_SERVER['REQUEST_METHOD']=='POST'){ 
        echo$_POST['2n'];
    }
     ?>" required></input><br>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
     &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
    <input type="number" class="hh" name="num" placeholder="select operation" >
    <p>1.ADDITION</p>
    <p>2.SUBTRACTION</p>
    <p>3.MULTIPLICATION</p>
    <p>4.DIVISION</p>
    <button class="btn">calculate</button>
    <input type="text" class="hh"  value=<?php echo"$z" ?>></input>
    </form>
    </fieldset>
    </body>
    </html>
    


