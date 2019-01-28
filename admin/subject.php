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
    <section class="two-rows" id="subject_detail">
        <div class="card">
            <div class="card-body">
                <div class="control-header">
                    <div class="search-bar"><i class="fa fa-search"></i><input type="text" placeholder="Search" class="search-text"></div><a class="btn btn-outline-dark delete_subject" role="button" href="#"><i class="fa fa-trash"></i></a></div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="checkbox subjectarchive"></th>
                                <th>Subject</th>
                                <th>Grade</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sbs = "SELECT * FROM subject WHERE delete_flag = 0 AND schoolyear_id = '$sysession'";
                            $sbr = mysqli_query($conn,$sbs);
                            $sbsc2 = "SELECT COUNT(*) as activecount FROM subject WHERE delete_flag = 0 AND schoolyear_id = '$sysession'";
                            $sbrc2 = mysqli_query($conn,$sbsc2);
                            $sbfc2 = mysqli_fetch_assoc($sbrc2);
                            for ($a=0; $a < $sbfc2['activecount']; $a++) { 
                            $sbf = mysqli_fetch_assoc($sbr);
                            $sbgrs = "SELECT * FROM grade WHERE id = '{$sbf['grade_id']}' AND delete_flag = 0";
                            $sbgrr = mysqli_query($conn,$sbgrs);
                            $sbgrf = mysqli_fetch_array($sbgrr);
                            ?>
                            <tr id="sb-<?php echo $sbf['id']; ?>">
                                <td><input type="checkbox" class="checkbox archivesubject" name="archive_subject[]" value="<?php echo $sbf['id'];?>"></td>
                                <td data-target="sb"><?php echo $sbf['subject_name']; ?></td>
                                <td data-target="sbdept"><?php echo $sbgrf['grade_name']; ?></td>
                                <td>
                                <?php
                                    if ($sbf['active'] == 1) {
                                        ?>
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox sbactivebtn" id="sb<?php echo $a; ?>" data-check="sbupdate" data-name="<?php echo $sbf['id'];?>" checked>
                                        <label class="onoffswitch-label" for="sb<?php echo $a; ?>">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                <?php  
                                    }
                                    elseif ($sbf['active'] != 1) {
                                    ?>
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox sbactivebtn" id="sb<?php echo $a; ?>" data-check="sbupdate" data-name="<?php echo $sbf['id'];?>">
                                        <label class="onoffswitch-label" for="sb<?php echo $a; ?>">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                <?php  
                                }
                                ?>
                                </td>    
                                <td><a class="btn btn-primary admin-useroptions sbeditbtn" data-id="<?php echo $sbf['id']; ?>"  data-role="sbedit" role="button" >Edit</a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h6>Subject Name</h6>
                <div class="form-group">
                    <input class="form-control addschoolyear-input stoptypesb" id="subject" type="text">
                </div>
                <div class="form-group">
                    <select class="form-control stoptypesb" id="grsb">
                        <option value="" disabled selected>Grade</option>
                        <?php 
                            $gradedropdsql = "SELECT * FROM grade WHERE delete_flag = 0";
                            $gradedropdres = mysqli_query($conn,$gradedropdsql);
                            while ($gradedropd = mysqli_fetch_array($gradedropdres)) {
                            ?>
                            <option value="<?php echo $gradedropd['id'];?>"><?php echo $gradedropd['grade_name'];?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary smallbtn sbaddbtn dbuttonsb" id="sbaddbtn" type="submit" name="sbadd" value="Add" disabled>
                    <input class="btn btn-primary smallbtn sbupdatebtn dbuttonsb2" type="submit"  data-role="updatesb" name="sbupdate" value="Update" hidden disabled>
                    <input class="btn btn-primary smallbtn" type="submit" id="sbCancel" value="Cancel" hidden>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/js/Maintenance/maintenance.js"></script>
</body>