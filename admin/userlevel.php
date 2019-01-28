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
    <section class="user-priv-parentcontainer">
                                    <div class="card user-priv">
                                        <div class="card-header user-priv">
                                            <h5 class="mb-0">User Privileges</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="control-header"><label style="font-size:0.8rem;">Options:&nbsp;</label><a href="#" id="trash-icon-userlevel" class="trash-icon"><i class="fa fa-trash" id="archive-trash"></i></a></div>
                                            <div class="table-responsive userpriv">
                                                <table class="table table-hover table-sm" id="student-table">
                                                    <thead class="usermgmt-tb-header">
                                                        <tr class="usermgmt-tb-header-row">
                                                            <th><input type="checkbox" class="userlvl-checkall"></th>
                                                            <th rowspan="0" colspan="0" class="table-cell">User Level</th>
                                                            <th class="table-cell">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="user-tb-body nicetarget">

<?php
$ups = "SELECT * FROM usertype WHERE delete_flag = 0";
$upr = mysqli_query($conn,$ups);
    while($upf = mysqli_fetch_array($upr)){
?>
        <tr id=tr<?php echo $upf['usertype_name']; ?> class=tr<?php echo $upf['usertype_id']; ?> >
           <td class="tbcell-id paddingleft checkbox-cell">
            <?php 
            if($upf['usertype_name']!="Administrator"){echo " <input type='checkbox' class='checkbox selectcheck' value=".$upf["usertype_id"]." >";}else{ echo "";} 
            ?>
        </td>
            <td class="tbcell-name paddingleft"><?php echo $upf['usertype_name'];?></td>
            <td class="admin-useroptions">
                <div class="btn-group" role="group"><a class="btn btn-primary admin-useroptions viewbtn userlvl-editbtn" role="button" id="<?php echo $upf['usertype_name'];?>">Edit</a><a  class="btn btn-primary admin-useroptions archivebtn userlvl-archivebtn" role="button"  id="<?php echo $upf['usertype_name'];?>" <?php if($upf['usertype_name']=="Administrator"){echo "Hidden ";}else{ echo "";} ?> 
                >Archive</a></div>
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

<div class="target"></div><!--USER LEVEL-->

</section>


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin-page.js"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/closebtn.js"></script>
    <script src="../assets/js/enrollment-daytime-dropdown.js"></script>
    <script src="../assets/js/faculty-loading.js"></script>
    <script src="../assets/js/home.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="http://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/floatthead/2.1.2/jquery.floatThead.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="../assets/js/image-preview.js"></script>
    <script src="../assets/js/index.js"></script>
    <script src="../assets/js/load.js"></script>
    <script src="../assets/js/prev-eval-page.js"></script>
    <script src="../assets/js/reports.js"></script>
    <script src="../assets/js/scroll.js"></script>
    <script src="../assets/js/selectedtabonrefresh.js"></script>
    <script src="../assets/js/showpass.js"></script>
    <script src="../assets/js/Simple-Slider.js"></script>
    <script src="../assets/js/user-priv.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="../assets/js/view-usertype-userlevel.js"></script>
</body>

</html>