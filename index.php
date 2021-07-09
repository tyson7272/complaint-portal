<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <title>Complaint portal</title>

    <link rel="stylesheet" href="style.css">
</head>
    
<body>
    <header>
        <div class="logo">
            
        </div>
    </header>
 <div class="container">
 <div class="service">
     
     
    <div class="max-width">
       <h2 style="color:antiquewhite; text-align: center;">Complaint portal</h2>
       <div class="content">
          
           <div class="card">
             <div class="box">
                 <img src="1.png" alt="light flickering" class="soap" style="height: 70px; width: 90px;">
                 <!--<i class="fa  fa-tint"></i>-->
                 <h6 style="color: beige; margin-left: 30px;">Light</h6>
                 <form method="POST">
                 <input style="margin-left: 20px; margin-top: 10px;" type="submit" value="Submit" onclick="insert()" name="button1">
                 </form>
                 <!--<a href="#" class="card-link"  onclick="alert('Submitted')">Submit</a>
                 <a href="#" class="card-link" onclick="alert('Thank you for the review')">Review</a>
                 -->
             
                 </div>
            </div>     
            
            <?php 
            if(isset($_POST['button1'])){
                $conn = new PDO('mysql:host=localhost;dbname=smartdwell_cabin','root','');
                //$filename = "data.json";
                //$data = file_get_contents($filename);
                //$results = json_decode($data);
                //foreach($results as $result){
                    
                    //echo '<br>id: '.$result->id;
                
                $id = '1215';
                //$date = '2021-07-10';
                $query = 'flickering lights';
                $location = 'block-D';
                $stmt = $conn->prepare('insert into dashboard(id, query, location) values(:id, :query, :location)');
                $stmt->bindValue(':id', $id);
                //$stmt->bindValue(':date', $date);
                $stmt->bindValue(':query', $query);
                $stmt->bindValue(':location', $location);
                $stmt->execute();
                //}
            }
            ?>

           <div class="card">
             <div class="box">
                 <img src="2.png" alt="air conditioner" class="house-cleaning" style="height: 70px; width: 90px;">
                 <!--<i class="fa fa-bed fa-xs"></i>-->
                 <h6 style="color: beige; margin-left: 15px;">Air conditioner</h6>
                 <form method="POST">
                 <input style="margin-left: 20px; margin-top:-5px;" type="submit" value="Submit" onclick="insert()" name="button2">
                 </form>
                 <!--<a href="#" class="card-link"  onclick="alert('Submitted')">Submit</a>
                 <a href="#" class="card-link" onclick="alert('Thank you for the review')">Review</a>
                 -->
                </div>

            </div> 
            <?php 
            if(isset($_POST['button2'])){
                $conn = new PDO('mysql:host=localhost;dbname=smartdwell_cabin','root','');
                //$filename = "data.json";
                //$data = file_get_contents($filename);
                //$results = json_decode($data);
                //foreach($results as $result){
                    
                    //echo '<br>id: '.$result->id;
                
                $id = '1216';
                //$date = '2021-07-11';
                $query = 'Air conditioner';
                $location = 'block-C';
                $stmt = $conn->prepare('insert into dashboard(id, query, location) values(:id, :query, :location)');
                $stmt->bindValue(':id', $id);
                //$stmt->bindValue(':date', $date);
                $stmt->bindValue(':query', $query);
                $stmt->bindValue(':location', $location);
                $stmt->execute();
                //}
            }
            ?>  
            
           <div class="card">
             <div class="box">
                 <img src="3.png" alt="Telephone" class="house-cleaning" style="height: 70px; width: 90px;">
                 <!--<i class="fa fa-shower"></i>-->
                 <h6 style="color: beige; margin-left: 14px;">Telephone</h6>
                 <form method="POST">
                 <input style="margin-left: 20px; margin-top: 10px;" type="submit" value="Submit" onclick="insert()" name="button3">
                 </form>
                 <!--<a href="#" class="card-link"  onclick="alert('Submitted')">Submit</a>
                 <a href="#" class="card-link" onclick="alert('Thank you for the review')">Review</a>
                 --> 
                </div>
            </div>   
            <?php 
            if(isset($_POST['button3'])){
                $conn = new PDO('mysql:host=localhost;dbname=smartdwell_cabin','root','');
                //$filename = "data.json";
                //$data = file_get_contents($filename);
                //$results = json_decode($data);
                //foreach($results as $result){
                    
                    //echo '<br>id: '.$result->id;
                
                $id = '1217';
                //$date = '2021-07-11';
                $query = 'Telephone';
                $location = 'block-G';
                $stmt = $conn->prepare('insert into dashboard(id, query, location) values(:id, :query, :location)');
                $stmt->bindValue(':id', $id);
                //$stmt->bindValue(':date', $date);
                $stmt->bindValue(':query', $query);
                $stmt->bindValue(':location', $location);
                $stmt->execute();
                //}
            }
            ?>
         
            <div class="card">
              <div class="box">
                  <img src="4.png" alt="Technical" class="house-cleaning" style="height: 70px; width: 90px;">
                  <!--<i class="fa fa-shower"></i>-->
                  <h6 style="color: beige; margin-left: 16px;">Technical</h6>
                  <form method="POST">
                  <input style="margin-left: 20px; margin-top: 10px;" type="submit" value="Submit" onclick="insert()" name="button4">
                  </form>
                  <!--<a href="#" class="card-link"  onclick="alert('Submitted')">Submit</a>
                  <a href="#" class="card-link" onclick="alert('Thank you for the review')">Review</a>
                  --> 
                 </div>
             </div>  
             <?php 
             if(isset($_POST['button4'])){
                $conn = new PDO('mysql:host=localhost;dbname=smartdwell_cabin','root','');
                //$filename = "data.json";
                //$data = file_get_contents($filename);
                //$results = json_decode($data);
                //foreach($results as $result){
                    
                    //echo '<br>id: '.$result->id;
                
                $id = '1218';
                //$date = '2021-07-11';
                $query = 'Technical';
                $location = 'block-A';
                $stmt = $conn->prepare('insert into dashboard(id, query, location) values(:id, :query, :location)');
                $stmt->bindValue(':id', $id);
                //$stmt->bindValue(':date', $date);
                $stmt->bindValue(':query', $query);
                $stmt->bindValue(':location', $location);
                $stmt->execute();
                //}
            }
            ?> 
           
             <div class="card">
              <div class="box">
                  <img src="5.png" alt="house-cleaning" class="house-cleaning" style="height: 70px; width: 90px;">
                  <!--<i class="fa fa-shower"></i>-->
                  <h6 style="color: beige; margin-left: 16px;">House cleaning</h6>
                  <form method="POST">
                  <input style="margin-left: 20px; margin-top: -5px;" type="submit" value="Submit" onclick="insert()" name="button5">
                  </form>
                  <!--<a href="#" class="card-link"  onclick="alert('Submitted')">Submit</a>
                  <a href="#" class="card-link" onclick="alert('Thank you for the review')">Review</a>
                  --> 
                 </div>
             </div>
             <?php 
             if(isset($_POST['button5'])){
                $conn = new PDO('mysql:host=localhost;dbname=smartdwell_cabin','root','');
                //$filename = "data.json";
                //$data = file_get_contents($filename);
                //$results = json_decode($data);
                //foreach($results as $result){
                    
                    //echo '<br>id: '.$result->id;
                
                $id = '1219';
                //$date = '2021-07-11';
                $query = 'House Cleaning';
                $location = 'block-B';
                $stmt = $conn->prepare('insert into dashboard(id, query, location) values(:id, :query, :location)');
                $stmt->bindValue(':id', $id);
                //$stmt->bindValue(':date', $date);
                $stmt->bindValue(':query', $query);
                $stmt->bindValue(':location', $location);
                $stmt->execute();
                //}
            }
            ?> 
           
             <div class="card">
              <div class="box">
                  <img src="6.png" alt="Water" class="house-cleaning" style="height: 70px; width: 90px;">
                  <!--<i class="fa fa-shower"></i>-->
                  <h6 style="color: beige; margin-left: 16px;">Water</h6>
                  <form method="POST">
                  <input style="margin-left: 20px; margin-top: 10px;" type="submit" value="Submit" onclick="insert()" name="button6">
                  </form>
                  <!--<a href="#" class="card-link"  onclick="alert('Submitted')">Submit</a>
                  <a href="#" class="card-link" onclick="alert('Thank you for the review')">Review</a>
                  --> 
                 </div>
             </div>
             <?php 
             if(isset($_POST['button6'])){
                $conn = new PDO('mysql:host=localhost;dbname=smartdwell_cabin','root','');
                //$filename = "data.json";
                //$data = file_get_contents($filename);
                //$results = json_decode($data);
                //foreach($results as $result){
                    
                    //echo '<br>id: '.$result->id;
                
                $id = '1220';
                //$date = '2021-07-11';
                $query = 'Water';
                $location = 'block-A';
                $stmt = $conn->prepare('insert into dashboard(id, query, location) values(:id, :query, :location)');
                $stmt->bindValue(':id', $id);
                //$stmt->bindValue(':date', $date);
                $stmt->bindValue(':query', $query);
                $stmt->bindValue(':location', $location);
                $stmt->execute();
                //}
            }
            ?> 
            
             <div class="card">
              <div class="box">
                  <img src="8.png" alt="Unsafe condition" class="house-cleaning" style="height: 70px; width: 90px;">
                  <!--<i class="fa fa-shower"></i>-->
                  <h6 style="color: beige; margin-left: 16px;">Unsafe Condition</h6>
                  <form method="POST">
                  <input style="margin-left: 20px; margin-top: -5px;" type="submit" value="Submit" onclick="insert()" name="button7">
                  </form>
                  <!--<a href="#" class="card-link"  onclick="alert('Submitted')">Submit</a>
                  <a href="#" class="card-link" onclick="alert('Thank you for the review')">Review</a>
                  --> 
                 </div>
             </div>
             <?php 
             if(isset($_POST['button7'])){
                $conn = new PDO('mysql:host=localhost;dbname=smartdwell_cabin','root','');
                //$filename = "data.json";
                //$data = file_get_contents($filename);
                //$results = json_decode($data);
                //foreach($results as $result){
                    
                    //echo '<br>id: '.$result->id;
                
                $id = '1221';
                //$date = '2021-07-11';
                $query = 'Unsafe Condition';
                $location = 'block-H';
                $stmt = $conn->prepare('insert into dashboard(id, query, location) values(:id, :query, :location)');
                $stmt->bindValue(':id', $id);
                //$stmt->bindValue(':date', $date);
                $stmt->bindValue(':query', $query);
                $stmt->bindValue(':location', $location);
                $stmt->execute();
                //}
            }
            ?> 
             
             <div class="card" onclick="">
              <div class="box">
                  <img src="7.png" alt="Other" class="house-cleaning" style="height: 70px; width: 90px;">
                  <!--<i class="fa fa-shower"></i>-->
                  <h6 style="color: beige; margin-left: 16px;">Other</h6>
                  <!--<a href="#" class="card-link"  onclick="alert('Submitted')">Submit</a>
                  <a href="#" class="card-link" onclick="alert('Thank you for the review')">Review</a>
                  --> 
                 </div>
                </div>
             
      </div><br>
      <!--
      <div class="submit">
        <input style="align-items: center; padding: 6px; margin-left: 125px; border-radius: 5px; background-color: rgb(67, 130, 185); border-style: solid; border-color: rgb(67, 130, 185); color: white; font-family: Arial, Helvetica, sans-serif; font-size: 17px;" type="button" value="Submit">

      </div>
      -->
    </div>
   </div>

</div>               
</body>
</html>