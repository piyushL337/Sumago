<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/form.png" type="image/x-icon">
	<title>Simple Calculator Using PHP - Piyush</title>
</head>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}

?>

<body>
     <div class="section">
	<h1>Simple Calculator Using PHP</h1>
  
	  <form action="" method="post" id="quiz-form">
            
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            
            
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            
            
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            
<div class="controls">
        <a href="#" id="add_fields">Add</a>
        <a href="#" id="remove_fields" >Remove</a></div>
            <input type="submit" name="operator" value="Add" class="addBtn" />
            <input type="submit" name="operator" value="Subtract" class="addBtn" />
            <input type="submit" name="operator" value="Multiply" class="addBtn" />
            <input type="submit" name="operator" value="Divide" class="addBtn" />
	  </form>
    </div>

    <footer>
        <p>&#x3c; &#47; &#x3e; with ❤️ by 
          <a href="https://PiyushL337.github.io/">Piyush Joshi</a>
</body>
</html>
