        <?php
    $host = "localhost";
    $dbname = "sisfonews";
    $username = "root";
    $password = " ";
    $db = "";//db adalah objek dari class PDO
    try {
        $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
        catch (PDOException $exception){
        die("Connection error: ".$exception->getMessage());
    }

        $query = $db->prepare("SELECT * FROM berita");//prepare konsepnya hanyalah mempersiapkan bahan bahan yang di perlukan 
        $query->execute();
        $data = $query->fetchAll();?>





        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- First Blog Post -->
                <?php foreach ($data as $ib) { ?>
                <h2>
                <a href="ambildata.php">
                    <h1> <?php echo $ib['judul'] ?> </h1>
                    </a> 
                   <!-- <a href="ambildata.php">Blog Post Title</a> -->
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on <?php echo $ib ['tanggal'] ?> </p>
                <hr>
                <p> <?php echo $ib ['isi'] ?> </p>
                
                <hr>
               

                <hr>

                <!-- Second Blog Post -->
                <h2>
                <h1> <?php echo $ib['judul'] ?> </h1>
                    </a> 
                    <!--<a href="#">Blog Post Title</a>-->
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <p> <?php echo $ib ['isi'] ?> </p>
                
                <hr>
                
                <hr>

                <!-- Third Blog Post -->
                <h2>
                    <a href="ambildata.php">
                    <h1> <?php echo $ib['judul'] ?> </h1>
                    </a> 
                   <!-- <a href="ambildata.php">Blog Post Title</a> -->
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <p> <?php echo $ib ['isi'] ?> </p>
                
                <hr>

                
            <?php }?>
            

                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>




