<html>
<head>
    <title> Display Latest Product Table </title>
    <style>
        body{
            background-color: lightblue;
        }
        
    </style>    
</head>
     
<body>
    <center>
    <h1> Latest Product Table</h1>
        <form action="" method="POST" enctype="multipart/form-data"></form>
             <table width="50%" border="1" cellpadding="5" cellspacing="5"> 
                 <thead>
                     <tr>
                         <th> IMAGE </th>
                         <th>NAME</th>
                         <th>TYPE</th>
                         <th>PRICE (RM)</th>
                         <th>QUANTITY</th>
                     </tr>
                 </thead>
                 <?php
                      $connection = mysqli_connect("localhost","root","");
                      $db = mysqli_select_db($connection,'myshopdb');

                      $query = " SELECT * FROM `tbl_product` ";
                      $query_run = mysqli_query($connection,$query);

                      while($row = mysqli_fetch_array($query_run))
                      {
                          ?>
                          <tr>
                              <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt= "Image" style="width: 100px; height: 100px;" >'; ?> </td>
                              <td><?php echo $row['ProductName']; ?> </td>
                              <td><?php echo $row['ProductType']; ?></td>
                              <td><?php echo $row['ProductPrice']; ?></td>
                              <td><?php echo $row['ProductQuantity']; ?></td>
                          </tr>
                          
                          <?php
                      }
                 ?>
             </table><br>
             <a href="newproduct.php" class="button">UPDATE NEW PRODUCT</a>

    </center>
</body>
</html>