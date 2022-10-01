<div class="row">
    <div class="col-md-12" style="justify-content:center;margin-top:9px;display:flex;">
        <?php
            $tblquery = "SELECT * FROM criminal WHERE id = '$_SESSION[id]'";
            $tblvalue = array();
            $select = $collect->tbl_select($tblquery, $tblvalue);
            foreach($select as $data){
                extract($data);
                ?>
                <?php
                echo "
                    <p>$type</p>
                ";
            }
        ?> 
    </div>
</div>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="height:300px;display:flex;justify-content:center;">
        <?php
            $tblquery = "SELECT * FROM criminal WHERE id = '$_SESSION[id]'";
            $tblvalue = array();
            $select = $collect->tbl_select($tblquery, $tblvalue);
            foreach($select as $data){
                extract($data);
                ?>
                <?php
                echo "
                    <img src='./upload/$pics' class='' style='border-radius:50%;height:280px;width:280px;margin:10px' alt='Profile Pictures'>
                ";
            }
        ?>
    </div>
    <div class="col-md-4"></div>
</div>

<div class="row">
    <div class="col-md-12" style="background:#fff;padding:20px;">
        <form action="addCrime" method="POST" enctype="multipart/form-data" class="insert">
            <div class="row mp">
                <div class="col-md-6 box1 mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <?php
                                $tblquery = "SELECT * FROM criminal WHERE id = '$_SESSION[id]'";
                                $tblvalue = array();
                                $select = $collect->tbl_select($tblquery, $tblvalue);
                                foreach($select as $data){
                                    extract($data);
                                    ?>
                                    <?php
                                    echo "
                                        <label>Name:</label>
                                        <input type='text' value='$name' readonly>
                                        <label>Height:</label>
                                        <input type='text'  value='$height' readonly>
                                        <label>Complexion:</label>
                                        <input type='text' value='$complextion' readonly>
                                    ";
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box2 mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                        <?php
                                $tblquery = "SELECT * FROM criminal WHERE id = '$_SESSION[id]'";
                                $tblvalue = array();
                                $select = $collect->tbl_select($tblquery, $tblvalue);
                                foreach($select as $data){
                                    extract($data);
                                    ?>
                                    <?php
                                    echo "
                                        <label>Email:</label>
                                        <input type='email' value='$email' readonly>
                                        <label>Weight:</label>
                                        <input type='text'  value='$weight' readonly>
                                        <label>Occupation:</label>
                                        <input type='text' value='$occupation' readonly>
                                    ";
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-12 box mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <?php
                                $tblquery = "SELECT * FROM criminal WHERE id = '$_SESSION[id]'";
                                $tblvalue = array();
                                $select = $collect->tbl_select($tblquery, $tblvalue);
                                foreach($select as $data){
                                    extract($data);
                                    ?>
                                    <?php
                                    echo "
                                        <label>Name:</label>
                                        <textarea readonly>$adds</textarea>
                                    ";
                                }
                            ?>
    
                        </div>        
                    </div>
                </div>
                <div class="col-md-6 box1 mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <?php
                                $tblquery = "SELECT * FROM criminal WHERE id = '$_SESSION[id]'";
                                $tblvalue = array();
                                $select = $collect->tbl_select($tblquery, $tblvalue);
                                foreach($select as $data){
                                    extract($data);
                                    ?>
                                    <?php
                                    echo "
                                        <label>LGA:</label>
                                        <input type='text' value='$lga' readonly>
                                        <label>Marital Status:</label>
                                        <input type='text'  value='$ms' readonly>
                                        <label>Arrest Time:</label>
                                        <input type='text'  value='$arrest_time' readonly>
                                    ";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 box2 mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <?php
                                $tblquery = "SELECT * FROM criminal WHERE id = '$_SESSION[id]'";
                                $tblvalue = array();
                                $select = $collect->tbl_select($tblquery, $tblvalue);
                                foreach($select as $data){
                                    extract($data);
                                    ?>
                                    <?php
                                    echo "
                                        <label>State Of Origin:</label>
                                        <input type='text' value='$soo' readonly>
                                        <label>Sex:</label>
                                        <input type='text'  value='$sex' readonly>
                                        <label>Arrest Date:</label>
                                        <input type='text' value='$arrest_date' readonly>
                                    ";
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-12 box mp">
                    <div class="row mp">
                        <div class="col-md-11 mp">
                            <?php
                                $tblquery = "SELECT * FROM criminal WHERE id = '$_SESSION[id]'";
                                $tblvalue = array();
                                $select = $collect->tbl_select($tblquery, $tblvalue);
                                foreach($select as $data){
                                    extract($data);
                                    ?>
                                    <?php
                                    echo "
                                        <label>Remark:</label>
                                        <textarea readonly>$remark</textarea>
                                        
                                    ";
                                }
                            ?>
                            
                        </div>        
                    </div>
                </div>
                
                <div class="col-md-2 mp submit">
                    <a href="viewCrime" class="btn btn-primary">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>