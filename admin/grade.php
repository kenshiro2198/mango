<?php
    session_start();
    include('../assets/php/connection.php');
    $syras = "SELECT * FROM schoolyear WHERE active = 1";
    $syraq = mysqli_query($conn,$syras);
    $syraf = mysqli_fetch_assoc($syraq);
    $_SESSION['schoolyear'] = $syraf['id'];
    $sysession = $_SESSION['schoolyear'];
?>
<body>
    <section class="two-rows" id="grade_detail">
        <div class="card">
            <div class="card-body">
                <div class="control-header">
                    <div class="search-bar"><i class="fa fa-search"></i><input type="text" placeholder="Search" class="search-text"></div><a class="btn btn-outline-dark delete_grade" role="button" href="#"><i class="fa fa-trash"></i></a></div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="checkbox" class="checkbox gradearchive"></th>
                                <th>Grade</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $gradesql = "SELECT * FROM grade WHERE delete_flag = 0";
                            $graderes = mysqli_query($conn,$gradesql);
                            $gradesqlcount2 = "SELECT COUNT(*) as activecount FROM grade WHERE schoolyear_id = '$sysession' AND delete_flag = 0";
                            $graderescount2 = mysqli_query($conn,$gradesqlcount2);
                            $gradefetcount2 = mysqli_fetch_assoc($graderescount2);
                            for ($a=0; $a < $gradefetcount2['activecount']; $a++) { 
                            $gradefet = mysqli_fetch_assoc($graderes);
                            ?>
                            <tr id="gr-<?php echo $gradefet['id']; ?>">
                                <td><input type="checkbox" id="checkbox[]" class="checkbox archivegrade" value="<?php echo $gradefet['id'];?>"></td>                                
                                <td data-target="gr"><?php echo $gradefet['grade_name']; ?></td>   
                                <td><a class="btn btn-primary admin-useroptions greditbtn" data-id="<?php echo $gradefet['id']; ?>"  data-role="gredit" role="button" >Edit</a></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row no-gutters pagination-container">
                    <div class="col offset-9">
                        <div class="row no-gutters pagination-control">
                            <div class="col align-self-center prev-next"><a class="text-primary" href="#"><i class="fa fa-caret-left pgntn-arrow"></i>&nbsp;Previous</a></div>
                            <div class="col align-self-center pgntn-info"><span>1 of 4 pages</span></div>
                            <div class="col align-self-center prev-next"><a class="text-primary" href="#">Next&nbsp;<i class="fa fa-caret-right pgntn-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h6>Grade Name</h6>
                <div class="form-group"><input class="form-control addschoolyear-input stoptypegr" id="grade" name="grade" type="text"></div>
                <div class="form-group">
                    <input class="btn btn-primary smallbtn graddbtn dbuttongr" id="graddbtn" type="submit" name="gradd" value="Add" disabled>
                    <input class="btn btn-primary smallbtn grupdatebtn dbuttongr2" type="submit"  data-role="updategr" name="grupdate" value="Update" hidden disabled>
                    <input class="btn btn-primary smallbtn" type="submit" id="grCancel" value="Cancel" hidden>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/js/Maintenance/maintenance.js"></script>
</body>