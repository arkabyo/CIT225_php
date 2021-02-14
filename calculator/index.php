<?php
  ini_set('display_errors',0);
  if( isset( $_REQUEST['calculate'] ))
  {
    if (isset($_REQUEST['operator'])) #checks the operator
    {
      $operator=$_REQUEST['operator'];
      if($operator=="+")
      {
        $a1 = $_REQUEST['num1'];
        $a2 = $_REQUEST['num2'];
        $res= $a1+$a2;
      }
      if($operator=="-")
      {
        $a1 = $_REQUEST['num1'];
        $a2 = $_REQUEST['num2'];
        $res= $a1-$a2;
      }
      if($operator=="*")
      {
        $a1 = $_REQUEST['num1'];
        $a2 = $_REQUEST['num2'];
        $res =$a1*$a2;
      }
      if($operator=="/")
      {
        $a1 = $_REQUEST['num1'];
        $a2 = $_REQUEST['num2'];
        $res= $a1/$a2;
      }
      if($operator=="%")
      {
        $a1 = $_REQUEST['num1'];
        $a2 = $_REQUEST['num2'];
        $res= $a1%$a2;
      }
      if($_REQUEST['num1']==NULL && $_REQUEST['num2']==NULL)
      {
        echo "<script language=javascript> alert(\"Please Enter values.\");</script>";
      }
      else if($_REQUEST['num1']==NULL)
      {
        echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";
      }
      else if($_REQUEST['num2']==NULL)
      {
        echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";
      }

    }
    else $operator = "none";
  }
    
?>
<!Doctype HTML>
<html>

<head>
  <title>A simple math calculator</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <script type="text/javascript">
    function clearCalc() {
      document.getElementById("num1").value = "";
      document.getElementById("num2").value = "";
      document.getElementById("result").value = "";
      document.getElementById("operator").value = "";
    }
  </script>
  <div id="main">
    <h1 class="center">Simple Calculator</h1>
    <hr class="center">
    <form action="" method="post">
      <input name="num1" id="num1" type="number" placeholder="Num1" value="<?php echo htmlspecialchars($a1); ?>" />&nbsp;

      <select name="operator" id="operator">
        <option name = "empty" value = ""></option>
        <option name = "add" value="+" <?php $operator == "+"? print "selected='selected'" : "";  ?> >+</option>
        <option name = "substract" value="-" <?php $operator == "-"? print "selected='selected'" : "";  ?> >-</option>
        <option name = "multiplication" value="*" <?php if($operator == "*"){ print "selected='selected'"; } ?> >*</option>
        <option name = "divide" value="/" <?php if($operator == "/"){ print "selected='selected'"; } ?> >/</option>
        <option name = "remainder" value="%" <?php if($operator == "%"){ print "selected='selected'"; } ?> >%</option>
      </select> &nbsp;

      <input name="num2" id="num2" type="number" placeholder="Num2" value="<?php echo htmlspecialchars($a2); ?>" /> =
      <input type="text" name="result" id="result" placeholder="Result" readonly value=<?php echo $res;?> ><br><br>

      <input class="button" name="calculate" type="submit" value="Calculate" /> &nbsp;
      <input class="button" type="button" value="Reset" onclick="clearCalc();" />
    </form>
    <br>
    <hr class="center">
    <pre class="center">&copy;Avijit Roy Kabyo</pre>
  </div>
</body>

</html>