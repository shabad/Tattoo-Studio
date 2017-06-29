            <?php
            require('./template/header.php');
            ?>

            <div id="main">

            <?php
            require('./template/bar.php');
            ?>

            <?php
            require('./include/db.php');
            ?>

            <div id="main">

                <!-- ============ Contacts Bar - START ============ -->

                <div id="contacts-bar" class="row">
                    <div class="address col-md-6"><strong>THE TATTOOIST - Tattoo Studio</strong>, 1234 Our Awesome Street, Our Awesome City, OAS 123456</div>
                    <div class="other col-md-6">
                        <span class="contact"><i class="fa fa-phone"></i>Phone: <strong>(00) 123 456789</strong></span>
                        <span class="contact"><i class="fa fa-envelope"></i>Email: <a href="mailto:email@domain.com"><strong>email@domain.com</strong></a></span>
                    </div>
                </div>

                <!-- ============ Contacts Bar - END ============ -->



                <!-- ============ Our Artists - START ============ -->

                <div id="artists" class="section">

                    <div class="section-title bg-glyph center">
                        <h2>Our Artists</h2>
                    </div>

                    <div class="content container">
                    <?php

                        $sql = "SELECT * FROM artists";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                                // echo "First Name: " . $row["fname"]. " - Last Name: " . $row["lname"]. " " . $row["id"]. "<br>";

                        // $conn->close();



                    ?>

                        <div class="artist full row">

                            <div class="col-md-3">

                            <?php

                               echo '<img class="rounded" src="./artist/server/avatars/'.$row['avatar'].'" alt="Tattoo Artist A">';

                            ?>

                            </div>

                            <div class="col-md-9">
                            <?php  $c = "3";  ?>

                                <h3 class="artist-name" style = "text-transform: capitalize;">
                                <?php

                                echo "<a href='./artist_profile.php?id=". $row['id'] ."'>";
                                echo $row["fname"]; echo " "; echo $row["lname"];  
                                echo '</a>';

                                ?>
                                </h3>
                                <!-- <div class="artist-role">Tattoo artist role</div> -->
                                <p>  <?php  echo $row["bio"];   ?>  </p>


                                <!-- <ul class="social-links">
                                    <li><a title="Facebook" href="#"><i class="fa fa-facebook"></i> </a></li>
                                    <li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a title="Google+" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a title="Instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul> -->
                                <?php
                                 echo "<a class='btn sm light' href='./artist_profile.php?id=". $row['id'] ."'>";
                                 ?>
                                 View Profile</a>


                            </div>

                        </div>

                <?php 
                            }
                        } 
                ?>

                    </div>

                </div>



                <!-- ============ Our Artists - END ============ -->

                
            <?php
            require('./template/insta_bar.php');
            ?>

            </div>

            <!-- ============ Footer - START ============ -->
            <?php
            require('./template/footer.php');
            ?>
            