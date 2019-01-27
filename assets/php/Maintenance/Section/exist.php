<?php
$sysession = $_SESSION['schoolyear'];
?>
<div class="card">
    <div class="card-body">
        <div class="control-header"><label style="font-size:0.8rem;">Options:&nbsp;</label><a href="#" id="trash-icon-subject" class="trash-icon delete_section"><i class="fa fa-trash"></i></a></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="checkbox" class="checkbox sectionarchive"></th>
                        <th>Section</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="sc_detail">
                    <?php
                    $sectionsql = "SELECT * FROM section WHERE delete_flag = 0 AND schoolyear_id = '$sysession'";
                    $sectionres = mysqli_query($conn,$sectionsql);
                    $sectionsqlcount2 = "SELECT COUNT(*) as activecount FROM section WHERE delete_flag = 0 AND schoolyear_id = '$sysession'";
                    $sectionrescount2 = mysqli_query($conn,$sectionsqlcount2);
                    $sectionfetcount2 = mysqli_fetch_assoc($sectionrescount2);
                    for ($a=0; $a < $sectionfetcount2['activecount']; $a++) { 
                    $sectionfet = mysqli_fetch_assoc($sectionres);
                    $sectiongradesql = "SELECT * FROM grade WHERE id = {$sectionfet['id']} AND schoolyear_id = '$sysession' AND delete_flag = 0";
                    $sectiongraderes = mysqli_query($conn,$sectiongradesql);
                    $sectiongradefet = mysqli_fetch_assoc($sectiongraderes);
                    ?>
                    <tr id="sc-<?php echo $sectionfet['id']; ?>">
                        <td><input type="checkbox" id="checkbox[]" class="checkbox archivesection" value="<?php echo $sectionfet['id'];?>"></td>
                        <td data-target="sc"><?php echo $sectionfet['section_name'];?></td>
                        <td hidden  data-target="grsc"><?php echo $sectionfet['id'];?></td>
                        <td><?php echo $sectiongradefet['grade_name'];?></td>
                        <td>
                            <?php
                            if ($sectionfet['active'] == 1) {
                                ?>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox scactivebtn" id="sc<?php echo $a; ?>" data-check="scupdate" data-name="<?php echo $sectionfet['id'];?>" checked>
                                <label class="onoffswitch-label" for="sc<?php echo $a; ?>">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        <?php  
                            }
                            elseif ($sectionfet['active'] != 1) {
                            ?>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox scactivebtn" id="sc<?php echo $a; ?>" data-check="scupdate" data-name="<?php echo $sectionfet['id'];?>">
                                <label class="onoffswitch-label" for="sc<?php echo $a; ?>">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        <?php  
                        }
                        ?>
                        </td>
                        <td><a class="btn btn-primary admin-useroptions sceditbtn" data-id="<?php echo $sectionfet['id']; ?>"  data-role="scedit" role="button" >Edit</a>
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
        <h6>Section Name</h6>
        <div class="form-group"><input class="form-control addschoolyear-input stoptypesc" type="text" id="section"></div>
        <div class="form-group">
            <select class="form-control stoptypesc" id="grsc">
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
            <span class="updating">
            </span>
        </div>
        <div class="form-group">
            <input class="btn btn-primary smallbtn scaddbtn dbuttonsc" id="scaddbtn" type="submit" name="scadd" value="Add" disabled>
            <input class="btn btn-primary smallbtn scupdatebtn dbuttonsc2" type="submit"  data-role="updatesc" name="scupdate" value="Update" hidden disabled>
            <input class="btn btn-primary smallbtn" type="submit" id="scCancel" value="Cancel" hidden>
        </div>
    </div>
</div>
<script src="assets/js/Maintenance/maintenance.js"></script>