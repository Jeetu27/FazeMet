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

            </div>

            <div class="profile">
                <i class="fa fa-bell-o"></i>
                <img src="../img/img.jpg" alt="">
            </div>
        </div>

        <h3 class="i-name">
            Dashboard
        </h3>

        <div class="values">
            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    <h3>500</h3>
                    <span>Total Students</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fas fa-sign-in"></i>
                <div>
                    <h3>50</h3>
                    <span>Total In</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fas fa-sign-out"></i>
                <div>
                    <h3>250</h3>
                    <span>Total Out</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fa fa-street-view"></i>
                <div>
                    <h3>200</h3>
                    <span>On Leave</span>
                </div>
            </div>
        </div>

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Time</td>
                        <td>Status</td>
                        <!--<td></td>-->
                    </tr>
                </thead>

                <tbody>
                    <tr>
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

                        <!--<td class="Edit"><a href="#">Edit</a></td>-->
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

                        <!--<td class="Edit"><a href="../Manage Students/Update_Students.php">Edit</a></td>-->
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

                        <!--<td class="Edit"><a href="../Manage Students/Update_Students.php">Edit</a></td>-->
                    </tr>
                </tbody>
            </table>
        </div>
        
    </section>

    
</body>
