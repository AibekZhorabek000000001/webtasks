<!DOCTYPE html>
<html>

  <head>
	<style>
		.car{
		  display:flex;
		  border:1px solid black;
		  border-radius:5px;
		  width:250px;
		  padding:10px;
		}
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		.car img{
		  margin-right:10px;
		}
        .select{
            margin: 20px;
        }
	</style>
  </head>

  <body>
    <div class="cars">
        <div class='select'>
            <form action="#" method="post">
                    <select name="maker">
                        <option></option>
                        <?php
                            $mycon = mysqli_connect('localhost','root','','task10');
                            mysqli_select_db($mycon,'task10');
                            $query = "SELECT * FROM 'cars2'";
                            $res = mysqli_query($mycon,$query);
                            $array = array();
                            while($row = mysqli_fetch_array($res)){
                                $maker = $row['maker'];
                                if(!in_array($maker,$array)){
                                    array_push($array,$maker);
                                }
                            }
                            foreach($array as $i){
                                $option = "<option>$i</option>";
                                echo $option;
                            }
                            mysqli_close($mycon);
                        ?>
                </select>
            <input type="submit" name="submit" value="Filter">
        </form>
    </div>
  <?php
    if(isset($_POST['submit'])){
        $opt = $_POST['maker'];
        $mycon = mysqli_connect('localhost','root','','task10');
        $query = "SELECT * FROM `cars2` WHERE `maker`='$opt'";
        $res = mysqli_query($mycon,$query);
        while($row = mysqli_fetch_array($res)){
            $image = $row['image'];
            $maker = $row['maker'];
            $model = $row['model'];
            $price = $row['price'];
            $year = $row['year'];
            $car = "<div class='car'>
                        <img width='100' height='60' src='$image'/>
	                    <div class='right'>
		                    <div class='title'>$maker $model</div>
		                    <div class='attributes'>
		                        <div class='row'><div class='name'>Year:</div><div>$year</div></div>
		                        <div class='row'><div class='name'>Price:</div><div>$price$</div></div>
		                    </div>
		                </div>
                    </div>";
            echo $car;
        }
      mysqli_close($mycon);
    }
  ?>
  </div>
  </body>

</html>
