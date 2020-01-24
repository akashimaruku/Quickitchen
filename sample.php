
<html>
<body>
           <?php
                                                           
                                                           include 'db.php';
                                                           $stmt = $con->prepare("SELECT * FROM qk_products");
                                                           $stmt->execute();
                                                           $result = $stmt->get_result();
                                                           while($row = $result->fetch_assoc()); 
                                                           
                                                           echo '<img height="300" width="300" src="'.$row[1].'">';
                                                           ?>

                                                           </body>
                                                           </html>