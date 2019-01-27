<?php
$sysession = $_SESSION['schoolyear'];
?>
<div class="card">
    <div class="card-body">
        <div class="control-header"><label style="font-size:0.8rem;">Options:&nbsp;</label><a href="#" id="trash-icon-subject" class="trash-icon delete_subject"><i class="fa fa-trash"></i></a><div class="searchbar-container"><button class="btn btn-primary transparentbutton" type="button" style="color:rgb(50,50,50)"><i class="fa fa-search" ></i></button><input type="search" name="user-search" placeholder="Search.." class="syertsbar"></div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="checkbox roomarchive"></th>
                        <th>Room</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="rm_detail">
                    <?php
                    $rms = "SELECT * FROM room WHERE delete_flag = 0 AND schoolyear_id = '$sysession'";
                    $rmr = mysqli_query($conn,$rms);
                    $rmsc2 = "SELECT COUNT(*) as activecount FROM room WHERE delete_flag = 0 AND schoolyear_id = '$sysession'";
                    $rmrc2 = mysqli_query($conn,$rmsc2);
                    $rmfc2 = mysqli_fetch_assoc($rmrc2);
                    for ($a=0; $a < $rmfc2['activecount']; $a++) { 
                    $rmf = mysqli_fetch_assoc($rmr);
                    ?>
                    <tr id="rm-<?php echo $rmf['id']; ?>">
                        <td><input type="checkbox" class="checkbox archiveroom" name="archive_room[]" value="<?php echo $rmf['id'];?>"></td>
                        <td data-target="rm"><?php echo $rmf['room_name']; ?></td>
                        <td>
                        <?php
                            if ($rmf['active'] == 1) {
                                ?>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox gractivebtn" id="rm<?php echo $a; ?>" data-check="rmupdate" data-name="<?php echo $rmf['id'];?>" checked>
                                <label class="onoffswitch-label" for="rm<?php echo $a; ?>">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        <?php  
                            }
                            elseif ($rmf['active'] != 1) {
                        ?>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox rmactivebtn" id="rm<?php echo $a; ?>" data-check="rmupdate" data-name="<?php echo $rmf['id'];?>">
                                <label class="onoffswitch-label" for="rm<?php echo $a; ?>">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        <?php  
                        }
                        ?>
                        </td>    
                        <td><a class="btn btn-primary admin-useroptions rmeditbtn" data-id="<?php echo $rmf['id']; ?>"  data-role="rmedit" role="button" >Edit</a>
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
        <h4>Room</h4>
        <div class="form-group"><input class="form-control addschoolyear-input stoptyperm" id="room" type="text"></div>
        <div class="form-group">
            <input class="btn btn-primary smallbtn rmaddbtn dbuttonrm" id="rmaddbtn" type="submit" name="rmadd" value="Add" disabled>
            <input class="btn btn-primary smallbtn rmupdatebtn dbuttonrm2" type="submit"  data-role="updaterm" name="rmupdate" value="Update" hidden disabled>
            <input class="btn btn-primary smallbtn" type="submit" id="rmCancel" value="Cancel" hidden>
        </div>
    </div>
</div>
<script src="assets/js/Maintenance/maintenance.js"></script>