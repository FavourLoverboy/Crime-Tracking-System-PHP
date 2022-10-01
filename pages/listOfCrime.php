<div class="row">
    <div class="col-md-12 text-center bg-info" style="margin-top:9px">
        <h1>List Of Crimes Committed</h1>
    </div>
</div>

<table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>Case ID</th>
                <th>Case</th>
                <th>Officer In Charge</th>
                <th>Date Convicted</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $tblquery = "SELECT * FROM criminal GROUP BY id_number ORDER BY arrest_date DESC";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    foreach($select as $data){
                        extract($data);
                        ?>
                        <?php
                            echo "
                                <tr>
                                    <td>$id_number</td>
                                    <td>$crime_code</td>
                                    <td>$oic</td>
                                    <td>$date_convicted</td>
                                    <td>
                                        <form action='listOfCrime' method='POST'>
                                            <input type='hidden' name='id' value='$id_number'>
                                            <input type='hidden' name='oic' value='$oic'>
                                            <input type='hidden' name='cc' value='$crime_code'>
                                            <input type='hidden' name='dc' value='$date_convicted'>
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

    <?php
        if($_POST['view']){

            extract($_POST);
            $_SESSION['id_number'] = $id;
            $_SESSION['oic'] = $oic;
            $_SESSION['cc'] = $cc;
            $_SESSION['dc'] = $dc;

            echo '<script> window.location="http://localhost/samuel/viewCrime"; </script>';
        }
    ?>