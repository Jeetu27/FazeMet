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

            </div>

            <div class="profile">
                <i class="fa fa-bell-o"></i>
                <img src="../img/img.jpg" alt="">
            </div>
        </div>

        <h3 class="i-name">
            Applications
        </h3>

        </div>

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Date</td>
                        <td>Applicant's Name</td>
                        <td>Reason</td>
                        <td>Parent's status</td>
                        <!--<td>Admin's Status</td>-->
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="date">
                        <h5>20-08-2022</h5>
                        </td>

                        <td class="Applicant">
                            <h5>Jitendra Suthar</h5>
                        </td>

                        <td class="reason"> 
                            <h5>for going to home</h5>
                        </td>

                        <td class="status">
                            <p>Approved</p>
                        </td>

                        <!--<td class="status">
                            <select name="status" id="Admin_status" required>
                                <option disabled selected>Select Status</option>
                                <option>Approve</option>
                                <option>Reject</option>
                            </select>
                        </td>-->

                    </tr>

                    <tr>
                        <td class="date">
                        <h5>22-08-2022</h5>
                        </td>

                        <td class="Applicant">
                            <h5>Kirtan Nair</h5>
                        </td>

                        <td class="reason"> 
                            <h5>for meeting to doctor</h5>
                        </td>

                        <td class="status">
                            <p>Approved</p>
                        </td>

                        <!--<td class="status">
                            <select name="status" id="Admin_status" required>
                                <option disabled selected>Select Status</option>
                                <option>Approve</option>
                                <option>Reject</option>
                            </select>
                        </td>-->

                    </tr>
                </tbody>
            </table>
        </div>
        
    </section>

</body>