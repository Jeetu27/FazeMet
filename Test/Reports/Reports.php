<?php


//$database;

   // include('../dbcon.php');
    include('../menu/menu.php');
    include('../header/header.php');
    include('../footer/footer.php');

   // $reference = $database->getReference('Students');
    //echo $reference->getValue();

    //header("refresh: 3");
?>

<body>

    <section id="interface">
        
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fa fa-bars"></i>
                </div>

                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Enter Student ID">
                </div>

                <div class="buttons">
                    <button class="searchBtn">
                        <span class="btnText">Search</span>
                    </button>
                </div>

            </div>

            <div class="profile">
                <i class="fa fa-bell-o"></i>
                <img src="../img/img.jpg" alt="">
            </div>
        </div>

        <h3 class="i-name">
            Reports
        </h3>

        <div class="values">
            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    
                    <span>Total Students</span>
                    <?php
                        include('../dbcon.php');
                        $ref_table = "Students";
                        $totalNum = $database->getReference($ref_table)->getSnapshot()->numChildren();
                        echo "<h4>".$totalNum."<h4>";
                    ?>
                    
                </div>
            </div>

            <div class="fields">
                    <label>From</label>
                    <input type="date" name="dob" placeholder="Enter birth date" required>
            </div>

            <div class="fields">
                    <label>To</label>
                    <input type="date" name="dob" placeholder="Enter birth date" required>
            </div>

            <div class="val-box">
                <i class="fa fa-street-view"></i>
                <div>
                    
                    <span>On Leave</span>
                    <h3>0</h3>
                </div>
            </div>
        </div>

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Time</td>
                        <td>Date</td>
                        <td>Status</td>
                        <!--<td></td>-->
                    </tr>
                </thead>

                <tbody>

                    <!--<tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>Jitendra Suthar</h5>

                            </div>
                        </td>

                        <td class="time"> 
                            <h5>12:50 PM</h5>
                        </td>

                        <td class="status">
                            <p>In</p>
                        </td>

                       
                    </tr>

                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>Harsh Agrawal</h5>

                            </div>
                        </td>

                        <td class="time"> 
                            <h5>01:10 PM</h5>
                        </td>

                        <td class="status">
                            <p>In</p>
                        </td>

                       
                    </tr>

                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>Dhruvi Parekh</h5>
                            </div>
                        </td>

                        <td class="time"> 
                            <h5>01:25 PM</h5>
                        </td>

                        <td class="status">
                            <p>In</p>
                        </td>

                      
                    </tr>-->
                </tbody>
            </table>
        </div>
        
    </section>

    
</body>
