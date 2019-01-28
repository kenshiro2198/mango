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
    <section class="two-rows" id="room_detail">
        <div class="card">
            <div class="card-body">
                <div class="control-header">
                    <div class="search-bar"><i class="fa fa-search"></i><input type="text" placeholder="Search" class="search-text"></div><a class="btn btn-outline-dark delete_room" role="button" href="#"><i class="fa fa-trash"></i></a></div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="checkbox roomarchive"></th>
                                <th>Room</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
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
                <h4>Room</h4>
                <div class="form-group"><input class="form-control addschoolyear-input stoptyperm" id="room" type="text"></div>
                <div class="form-group">
                    <input class="btn btn-primary smallbtn rmaddbtn dbuttonrm" id="rmaddbtn" type="submit" name="rmadd" value="Add" disabled>
                    <input class="btn btn-primary smallbtn rmupdatebtn dbuttonrm2" type="submit"  data-role="updaterm" name="rmupdate" value="Update" hidden disabled>
                    <input class="btn btn-primary smallbtn" type="submit" id="rmCancel" value="Cancel" hidden>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/js/Maintenance/maintenance.js"></script>
</body>