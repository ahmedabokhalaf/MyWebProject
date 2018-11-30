<!DOCTYPE html>
<html>
    <head>
        <title>Pharmacy</title>
        <link rel="stylesheet" href="main.css"/>
    </head>
    <body class="backGround">
        <div class="head">
            <a class="pharmacy" href="#">PHARMACY</a>
        </div>
        <div name="container">
            <table border=1px>
                <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Checked</th>
                </tr>                
                <?php
                    $con=mysqli_connect("localhost","root","");
                    mysqli_select_db($con,"myapp");
                    $rows=mysqli_query($con,"select ProductId, ProductName, ProductPrice from products");
                ?>
                <?php while($row=mysqli_fetch_array($rows)){?>
                    <tr>
                        <td><?php echo $row[0];?></td>
                        <td><?php echo $row[1];?></td>
                        <td><?php echo $row[2];?></td>
                        <td>
                            <form name="myForm" action="totalCost.php" method="post">
                            <input class="check" type="checkbox" name="check"></form>
                        </td>
                    </tr>
                    <?php
                }                    
                ?>
            </table>
        </div>
        <div class="footr">
            Copyright &copy; PHARMACY 2018 By <span><a href="https://www.linkedin.com/in/ahmedkhalaf1997/">AHMED KHALAF</a></span>
        </div>
    </body>
</html>