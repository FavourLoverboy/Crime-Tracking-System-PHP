<div class="row">
    <div class="col-md-12 text-center bg-info" style="margin-top:9px">
        <h1>People Involve in the Act</h1>
        
    </div>
</div>

<a href="addPeople" class="btn btn-info" style="margin:10px 0px;">Add Person Involve</a>

<table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Sex</th>
                <th>Arrest Date</th>
                <th>Level</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $tblquery = "SELECT * FROM criminal WHERE id_number = '$_SESSION[id_number]' ORDER BY name";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    foreach($select as $data){
                        extract($data);
                        ?>
                        <?php
                            echo "
                                <tr>
                                    <td>$name</td>
                                    <td>$email</td>
                                    <td>$sex</td>
                                    <td>$arrest_date</td>
                                    <td>$type</td>
                                    <td>
                                        <form action='viewCrime' method='POST'>
                                            <input type='hidden' name='id' value='$id'>
                                            <input type='submit' name='view' class='btn btn-primary' value='View'>
                                        </form>
                                    </td>
                                </tr>
                            ";
                    }
                ?>
            </tr>
        </tbody>
    </table>

    <div class="col-md-2 mp submit">
        <a href="listOfCrime" class="btn btn-primary">Back</a>
    </div>


    <?php
        if($_POST['view']){

            extract($_POST);
            $_SESSION['id'] = $id;

            echo '<script> window.location="http://localhost/samuel/view"; </script>';
        }
    ?>