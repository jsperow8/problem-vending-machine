<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SASKIT| HOME</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css" />

    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/jscript">
        $(document).ready(function (){
          $("#amount").keyup(function(num) {
              var $answer = num[0] + num[1]
            $("#monney").html("ยอดเงินของคุณคือ : " + $answer+ " ");
          });
        });
    </script>

</head>
<body>
  <div class="row">
          <div class="col-12">ตู้หยอดเหรียญอัติโนมัต</div>

    <div class="col-4" width:"50px">
                      <form id="summ" action="result.php?test1=<?=$answer?>" method="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="summ" );>
                        <!-- input -->
                        กรุณายอดเหรียญ : <input id="amount" type="text" style="width:300px;" name="amount" placeholder="กรุณาใส่เหรียญ 1 2 5 และ 10 บาท เท่านั้น ">
                        <!-- Submit -->
                        <!-- <input id="submit" name="submit" type="submit" value="ENTER"></input> -->
                        <!-- output -->
                        <div id="monney"></div>
                    </div>
                  </div>



                   <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                       <div class="row">
                         <div class="col-sm-12">
                           <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                             <tbody>
                             <thead>
                               <tr role="row">
                                           <th  tabindex="0"  rowspan="1" colspan="1" style="width: 10%;"><center>id</center></th>
                                           <th  tabindex="0"  rowspan="1" colspan="1" style="width: 40%;"><center>name</center></th>
                                           <th  tabindex="0"  rowspan="1" colspan="1" style="width: 40%;"><center>image</center></th>
                                           <th  tabindex="0"  rowspan="1" colspan="1" style="width: 50px;"><center>price</center></th>
                                           <th  tabindex="0"  rowspan="1" colspan="1" style="width: 80px;"><center>in_stock</center></th>
                                           <th  tabindex="0"  rowspan="1" colspan="1" style="width:20%;"><center>เลือกสินค้า</th>

                                </tr>
                              </thead>

                              <?php
                              $conn = mysqli_connect("localhost","root","", "saksit");
                              mysqli_set_charset($conn, "utf8");
                              $condition = "";
                              if (isset($_POST["keyword"])) {
                                  $condition = " where ques like '%".$_POST["keyword"]."%'";
                              }
                              $strSQL = "SELECT * FROM `test`";
                              $objQuery = mysqli_query($conn, $strSQL);//  or die(mysql_error());
                              while($row = mysqli_fetch_assoc($objQuery)){
                              		print "<tr>";
                              		print '<td>'.$row["id"].'</td>';
                              		print '<td>'.$row["name"].'</td>';
                              		print '<td>'.$row["image"].'</td>';
                              		print '<td>'.$row["price"].'</td>';
                              		print '<td>'.$row["in_stock"].'</td>';
                                  print "<td><p><input type='radio' class='form-check-input' name='optradio'>SELECE PRODUCE</a></td>";

                              		print "</tr>";
                              }

                              ?>
                            </tbody>
                            </table>
                            <div>

                              <?php
                              $price = array(15,20,15,20,25,13);
                              for($i=0 ;$i<=$pricelength;$i++){
                                if ($answer<$price[i]) {
                                  echo "";
                                }else {

                                }

                              }
                              ?>
                              <input name="btnSubmit" type="submit" value="Submit">
                              <input name="btnCancel" type="reset" value="cancel">
                          </div>
                        </form>

  </div>
</div>
</div>









      <script src="node_modules/jquery/dist/jquery.min.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>
