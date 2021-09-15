@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                  
                    <?php
 $con = mysqli_connect("localhost","root","","userreg");

        if(!$con)
        {
            die("Connection failed: " . mysqli_connect_error());
        }

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    body {
  background: #555;
}

.content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}
 select { 
                appearance: none; 
                outline: 0; 
                background: green; 
                background-image: none; 
                width: 100%; 
                height: 100%; 
                color: black; 
                cursor: pointer; 
                border:1px solid black; 
                border-radius:3px; 
            } 
            .select { 
                position: relative; 
                display: block; 
                width: 15em; 
                height: 2em; 
                line-height: 3; 
                overflow: hidden; 
                border-radius: .25em; 
                padding-bottom:10px; 
                  
            }
            #results{
              background-color:red;
            }
            input[type="text"],input[type="number"],{
  border-radius:25px;
  outline:hidden;
  border:2px solid #3498db;
  margin:20px auto;
  background:none;
}
  input[type="submit"]{
  border-radius:25px;
  outline:hidden;
  border:2px solid blue;
  margin:20px auto;
  background:none;
  padding:10px;
  background-color:green;
}
  </style>
</head>
<body>

<div class="content">

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET" name="form">
    <label>Select food1 ID</label>
  <br>
  <div class="select">
   <select class="form-control" name="product">
    <?php $result = mysqli_query($con,"SELECT product FROM food1 ");
 while($row = mysqli_fetch_array($result)) 
 {
   echo "<option value='" . $row['product'] . "'>" .$row['product'] . "</option>";
 }
 ?>
  </select>
</div>
  <br>
 <label>Select food3 ID</label><br>
    <div class="select">
   <select class="form-control" name="products">
    <?php $result = mysqli_query($con,"SELECT products FROM food2 ");
 while($row = mysqli_fetch_array($result)) 
 {
   echo "<option value='" . $row['products'] . "'>" .$row['products'] . "</option>";
 }
 ?>
  </select>
</div><br>

   <label>Select food3 ID</label><br>
    <div class="select">
   <select class="form-control" name="product3">
    <?php $result = mysqli_query($con,"SELECT product3 FROM food3 ");
 while($row = mysqli_fetch_array($result)) 
 {
   echo "<option value='" . $row['product3'] . "'>" .$row['product3'] . "</option>";
 }
 ?>
  </select>
</div><br>
   <label>Select food4 ID</label><br>
   <div class="select">
   <select class="form-control" name="product4">
    <?php $result = mysqli_query($con,"SELECT product4 FROM food4 ");
 while($row = mysqli_fetch_array($result)) 
 {
   echo "<option value='" . $row['product4'] . "'>" .$row['product4'] . "</option>";
 }
 ?>
  </select>
</div><br>
<p>first submit your selected items</p>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_REQUEST['submit']))
{

  $value=$_GET['product']; 
  
 $query = "SELECT price FROM food1 WHERE product='$value';";

  if($result = mysqli_query($con, $query)){
    if(mysqli_num_rows($result) > null){
      
        while($row = mysqli_fetch_array($result)){
        
         $var1=$row['price'];
        }
       
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $query. " ;
}
 
} ?>
 <?php
if(isset($_REQUEST['submit']))
{

  $value=$_GET['products']; 

 $query = "SELECT prices FROM food2 WHERE products='$value';";

  if($result = mysqli_query($con, $query)){
    if(mysqli_num_rows($result) > null){
      
        while($row = mysqli_fetch_array($result)){
        
         $var2= $row['prices'];
        }
       
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
 
} ?>
 
<?php
if(isset($_REQUEST['submit']))
{

  $value=$_GET['product3']; 
 $query = "SELECT price3 FROM food3 WHERE product3='$value';";

  if($result = mysqli_query($con, $query)){
    if(mysqli_num_rows($result) > null){
      
        while($row = mysqli_fetch_array($result)){
        
         $var3= $row['price3'];
        }
       
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
 
} ?>



<?php
if(isset($_REQUEST['submit']))
{

  $value=$_GET['product4']; 
 $query = "SELECT price4 FROM food4 WHERE product4='$value';";

  if($result = mysqli_query($con, $query)){
    if(mysqli_num_rows($result) > null){
      
        while($row = mysqli_fetch_array($result)){
         
         $var4= $row['price4'];
        
        }
       
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
 
} ?>
<form id="results" method="post" action="{{ action('MpesaController@customerMpesaSTKPush') }}" accept-charset="UTF-8">
<?php 
 if(isset($_REQUEST['submit'])){
  $value1=$_GET['product'];
  echo '<table>
    <tr>
        <th>ID</th>
        <th><h1>food selected</h1></th>

    </tr>'; 
      echo '
        <tr>
            <td>1</td>
            <td>'.$value1.'</td>
        </tr>';
          echo "<br>";
       $value2=$_GET['products']; 
       echo '
        <tr>
             <td>2</td>
            <td>'.$value2.'</td>
        </tr>';
 
          echo "<br>";
          $value3=$_GET['product3']; 
        echo '
        <tr>
             <td>3</td>
            <td>'.$value3.'</td>
        </tr>';

          echo "<br>";
          $value4=$_GET['product4']; 
        echo '
        <tr>
             <td>4</td>
            <td>'.$value4.'</td>
        </tr>';

          echo "<br>";
  $var5=$var1+$var2+$var3+$var4;
    echo '
        <tr>
             <td>total to pay : kshs</td>
            <td><input required  type = "text" name = "shs" value="' . $var5. '" /></td>
        </tr>';
  echo "<br>";
   echo '
        <tr>
             <td>enter your phone number:</td>
            <td><input required  type = "number" name = "num" placeholder="enter your number 254..."/></td>
        </tr>';
    echo '
 </table>';
  }
  echo "Make sure to save your order as pdf to show prove of purchase..";
 ?>

  <input type="submit" name="submit" value="pay now" onclick="myPrint('results')">
 </form>
</div>

    <script>
        function myPrint(results) {
            var printdata = document.getElementById(results);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
    </script>
</body>
</html>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
