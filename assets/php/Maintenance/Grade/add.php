<?php
$sysession = $_SESSION['schoolyear'];
?>
<div class="card">
    <div class="card-body">
        <div class="control-header"><label style="font-size:0.8rem;">Options:&nbsp;</label><a href="#" id="trash-icon-subject" class="trash-icon delete_grade"><i class="fa fa-trash"></i></a></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="checkbox-0" class="checkbox gradearchive"></th>
                        <th>Grade</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="grade_detail">
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
<script src="assets/js/Maintenance/maintenance.js"></script>