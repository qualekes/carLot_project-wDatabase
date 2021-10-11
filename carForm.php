<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<style>
      .center_form {
         margin: auto;
         width: 50%;
         border: 3px solid green;

      }
     h1 {
        text-align: center;
     }
      form {
         text-align: center;
      }
</style>
<body>

<div class="center_form">

   <h1>Sam's Used Cars</h1>
   <form action="SubmitCar.php" method="post">
      VIN: <input name="VIN" type="text"/> <br/>
      </br>
      MAKE: <input name="Make" type="text"/> <br/>
      <br/>
      MODEL: <input name="Model" type="text"/> <br/>
      <br/>
      PRICE: <input type="text" name="Asking_Price" /> <br/>
      <br>
      <input name="Submit1" value="submit" type="submit"/> <br/>
      <br/> &nbsp; </form>
      </div>
  
</body>
</html>