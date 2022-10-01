    <ul>        
        <?php 
            if($_SESSION['position'] == 'Admin'){
            ?>
                <li class="<?php echo $dashboard; ?>">
                    <a href="dashboard">
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo $addCrime; ?>">
                    <a href="addCrime">
                        <span class="title">Add Case</span>
                    </a>
                </li>
                <li class="<?php echo $addSuspect; ?>">
                    <a href="addSuspect">
                        <span class="title">Add Suspect</span>
                    </a>
                </li>
                <li class="<?php echo $addC; ?>">
                    <a href="addC">
                        <span class="title">Add complainant</span>
                    </a>
                </li>
                <li class="<?php echo $listOfCrime; ?>">
                    <a href="listOfCrime">
                        <span class="title">Cases</span>
                    </a>
                </li>
                <li class="<?php echo $complains; ?>">
                    <a href="Complains">
                        <span class="title">Complains</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="title">Logout</span>
                    </a>
                </li>

            <?php
            }
        ?>
    </ul>



    <ul>        
        <?php 
            if($_SESSION['position'] == 'User'){
            ?>
                <li class="<?php echo $dashboard; ?>">
                    <a href="dashboard">
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="title">Logout</span>
                    </a>
                </li>
            <?php
            }
        ?>
    </ul>
    