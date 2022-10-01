<div class="dynamicBodyNav">
    
</div>

<div class="row" style="padding:20px;">
    <div class="col-md-4" style="display:flex;justify-content:center;">
        <div class="row">
            <div class="col-md-11 bg-info" style="width:200px;height:200px;display:flex;justify-content:center;align-items:center;">
                <?php 
                    $tblquery = "SELECT count(id_number) as total FROM criminal";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    if($select){
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                                echo "
                                    <h3>Cases $total</h3>
                                ";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4" style="display:flex;justify-content:center;">
        <div class="row">
            <div class="col-md-11 bg-info" style="width:200px;height:200px;display:flex;justify-content:center;align-items:center;">
                <?php 
                    $tblquery = "SELECT count(id_number) as total FROM complainant";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    if($select){
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                                echo "
                                    <h3>Complainant $total</h3>
                                ";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4" style="display:flex;justify-content:center;">
        <div class="row">
            <div class="col-md-11 bg-info" style="width:200px;height:200px;display:flex;justify-content:center;align-items:center;">
                <?php 
                    $tblquery = "SELECT count(id_number) as total FROM criminal WHERE type = 'Guilty'";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    if($select){
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                                echo "
                                    <h3>Guilty $total</h3>
                                ";
                        }
                    }
                ?>
            </div>
        </div>
    </div>    
</div>
<div class="row" style="padding:20px;">
    <div class="col-md-4" style="display:flex;justify-content:center;">
        <div class="row">
            <div class="col-md-11 bg-info" style="width:200px;height:200px;display:flex;justify-content:center;align-items:center;">
                <?php 
                    $tblquery = "SELECT count(id_number) as total FROM criminal WHERE type = 'Suspect'";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    if($select){
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                                echo "
                                    <h3>Suspect $total</h3>
                                ";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>