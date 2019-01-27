<?php
$sysession = $_SESSION['schoolyear'];
?>
<div class="card">
    <div class="card-body">
        <div class="control-header"><label style="font-size:0.8rem;">Options:&nbsp;</label><a href="#" id="trash-icon-subject" class="trash-icon delete_department"><i class="fa fa-trash"></i></a></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="checkbox-0" class="checkbox departmentarchive"></th>
                        <th>Department Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="department_detail">
                    <?php
                    $departmentsql = "SELECT * FROM department WHERE schoolyear_id = '$sysession' AND delete_flag = 0";
                    $departmentres = mysqli_query($conn,$departmentsql);
                    $departmentsqlcount = "SELECT COUNT(*) as activecount FROM department WHERE schoolyear_id = '$sysession' AND delete_flag = 0";
                    $departmentrescount = mysqli_query($conn,$departmentsqlcount);
                    $departmentfetcount = mysqli_fetch_assoc($departmentrescount);
                    for ($a=1; $a <= $departmentfetcount['activecount']; $a++) { 
                    $departmentfet = mysqli_fetch_assoc($departmentres);
                    ?>
                    <tr id="dept-<?php echo $departmentfet['id']; ?>">
                        <td hidden=""><input type="hidden" class="deptcount" value="<?php echo $departmentfetcount['activecount'] ?>"></td>
                        <td><input type="checkbox" id="checkbox[]" class="checkbox archivedepartment" value="<?php echo $departmentfet['id'];?>"></td>
                        <td data-target="dept"><?php echo $departmentfet['department_name']; ?></td>
                        <td>
                        <?php
                            if ($departmentfet['active'] == 1) {
                                ?>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox deptactivebtn" id="dept<?php echo $a; ?>" data-check="deptupdate" data-name="<?php echo $departmentfet['id'];?>" checked>
                                <label class="onoffswitch-label" for="dept<?php echo $a; ?>">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        <?php  
                            }
                            elseif ($departmentfet['active'] != 1) {
                            ?>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox deptactivebtn" id="dept<?php echo $a; ?>" data-check="deptupdate" data-name="<?php echo $departmentfet['id'];?>">
                                <label class="onoffswitch-label" for="dept<?php echo $a; ?>">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        <?php  
                        }
                        ?>
                        </td>    
                        <td><a class="btn btn-primary admin-useroptions depteditbtn" data-id="<?php echo $departmentfet['id']; ?>"  data-role="deptedit" role="button" >Edit</a></td>
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
        <h6>Department Name</h6>
        <div class="form-group"><input class="form-control addschoolyear-input stoptypedept" id="department" name="department" type="text"><span class="badge badge-primary success-badge"><?php echo $department; ?> is added</span></div>
        <div class="form-group">
            <input class="btn btn-primary smallbtn deptaddbtn dbuttondept" id="deptaddbtn" type="submit" name="deptadd" value="Add" disabled>
            <input class="btn btn-primary smallbtn deptupdatebtn dbuttondept2" type="submit"  data-role="updatedept" name="deptupdate" value="Update" hidden disabled>
            <input class="btn btn-primary smallbtn" type="submit" id="deptCancel" value="Cancel" hidden>
        </div>
    </div>
</div>
<script src="assets/js/Maintenance/maintenance.js"></script>