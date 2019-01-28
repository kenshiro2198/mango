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
    <section class="two-rows">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>School Year</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sys = "SELECT * FROM schoolyear ORDER BY schoolyear_name ASC";
                                $syr = mysqli_query($conn,$sys);
                                $sysc2 = "SELECT COUNT(*) as activecount FROM schoolyear ORDER BY schoolyear_name ASC";
                                $syrc2 = mysqli_query($conn,$sysc2);
                                $syfc2 = mysqli_fetch_assoc($syrc2);
                                for ($i=0; $i < $syfc2['activecount']; $i++) { 
                                $syf = mysqli_fetch_array($syr);
                                ?>
                                    <tr id="<?php echo $syf['id']; ?>">
                                        <td hidden data-target="syear1"><?php echo substr($syf['schoolyear_name'],0,-8); ?></td>
                                        <td hidden data-target="syear2"><?php echo substr($syf['schoolyear_name'],8); ?></td>
                                        <td><?php echo $syf['schoolyear_name']; ?></td>
                                        <td>
                                        <?php
                                        if ($syf['active'] == 1) {
                                            ?>
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox activebtn" id="sy<?php echo $i; ?>" data-check="update" data-name="<?php echo $syf['id'];?>" checked>
                                                <label class="onoffswitch-label" for="sy<?php echo $i; ?>">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        <?php  
                                        }
                                        elseif ($syf['active'] != 1) {
                                        ?>
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox activebtn" id="sy<?php echo $i; ?>" data-check="update" data-name="<?php echo $syf['id'];?>">
                                                <label class="onoffswitch-label" for="sy<?php echo $i; ?>">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        <?php  
                                        }
                                        ?>
                                    </td>
                                        <td><a class="btn btn-primary admin-useroptions viewbtn syeditbtn" role="button" id="schoolyearviewbtn" data-id="<?php echo $syf['id']; ?>"  data-role="edit" >Edit</a></td>
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
                <form>
                    <h4>School Year</h4>
                    <div class="form-group sytexts">
                        <input class="form-control addschoolyear-input stoptypesy" id="schoolyear1" type="text">
                        <span style="line-height:40px;margin:0 10px;">To</span>
                        <input class="form-control addschoolyear-input stoptypesy" id="schoolyear2" type="text">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary smallbtn syaddbtn dbuttonsy" id="syaddbtn" type="submit" name="add" value="Add" disabled>
                        <input class="btn btn-primary smallbtn syupdatebtn dbuttonsy2" type="submit"  data-role="update" name="update" value="Update" hidden disabled>
                        <input class="btn btn-primary smallbtn" type="submit" id="syCancel" value="Cancel" hidden>
                    </div>
                    <span class="badge badge-primary success-badge" id="sysuccess" hidden="">Adding...</span>
                </form>
            </div>
        </div>
    </section>
    <script src="../assets/js/Maintenance/maintenance.js"></script>
</body>