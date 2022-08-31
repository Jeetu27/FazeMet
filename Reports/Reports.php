<?php
    include('../menu/menu.php');
    include('../header/header.php');
    include('../footer/footer.php');
?>

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fa fa-bars"></i>
                </div>

                <!--<div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Enter Student ID">
                </div>

                <div class="buttons">
                    <button class="searchBtn">
                        <span class="btnText">Search</span>
                    </button>
                </div>-->

            </div>

            <div class="profile">
                <i class="fa fa-bell-o"></i>
                <img src="../img/img.jpg" alt="">
            </div>
        </div>

        <h3 class="i-name">
            Report
        </h3>

        </div>

        <form action="#">
            <div class="details">

                <div class="fields">
                    <label>From</label>
                    <input type="date" placeholder="Select Date" required>
                </div>

                <div class="fields">
                    <label>To</label>
                    <input type="date" placeholder="Select Date" required>
                </div>

                <div class="board">
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Time</td>
                                <td>Date</td>
                                <td>Status</td>
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

                                <td class="date">
                                    <h5>20-08-2022</h5>
                                </td>

                                <td class="status">
                                    <p>In</p>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="buttons">
                    <button class="backBtn">
                        <span class="btnText">Export</span>
                </div>

        </form>

        </div>

    </section>

</body>
