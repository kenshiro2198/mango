<?php 

include('../assets/php/connection.php');
foreach (glob("../assets/php/Maintenance/CMS_Viewing/*.php") as $filename) 
{
    include $filename;
}

 ?>
<body>
    <div>
        <ul class="nav nav-tabs nav-justified eval-types" style="box-shadow:none;">
            <li class="nav-item"><a class="nav-link active child" role="tab" data-toggle="tab" href="#tab-8">Guidance</a></li>
            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-9">Student</a></li>
            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-10">Peer</a></li>
            <li class="nav-item"><a class="nav-link child" role="tab" data-toggle="tab" href="#tab-11">Self</a></li>
            <li class="nav-item"><a class="nav-link disabled addarea-btn" role="tab" data-toggle="tab"><button class="btn btn-primary add-area-btn" type="button" id="add-area-btn">Add Area</button></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-8">
                <div class="container-fluid admin-area-container">
                    <div class="kukunoko-container">
                        <h5 style="margin:0;">Guidance Evaluation Questionnaire</h5>
                        <div class="area-label-container"><span>Total Area Weight:</span><input type="text" disabled="" id="area3" name="area3" value="<?php echo $num3; ?>"></div>
                    </div>
                    <div class="row no-gutters eval-sched">
                        <div class="col-12">
                            <h6 class="text-dark" style="font-weight:bold;">Schedule</h6>
                        </div>
                        <div class="col-12"><span>Start</span></div>
                        <div class="col-6"><input type="date" class="eval-sched-date"></div>
                        <div class="col-6"><!--SELECT TAGSS-->

<select class="eval-sched-time" style="display:block;">
    <option value="7a">7:00AM</option>
    <option value="730a">7:30AM</option>
    <option value="8a">8:00AM</option>
    <option value="830a">8:30AM</option>
    <option value="9a">9:00AM</option>
    <option value="930a">9:30AM</option>
    
    <option value="10a">10:00AM</option>
    <option value="1030a">10:30AM</option>
    <option value="11a">11:00AM</option>
    <option value="1130a">11:30AM</option>
    <option value="12p">12:00NN</option>
    <option value="1230p">12:30PM</option>
    <option value="1p">1:00PM</option>
    <option value="13p">1:30PM</option>
    
    <option value="2p">2:00PM</option>
    <option value="230p">2:30PM</option>
    <option value="3p">3:00PM</option>
    <option value="330p">3:30PM</option>
    <option value="4p">4:00PM</option>
    <option value="430p">4:30PM</option>
    <option value="5p">5:00PM</option>
    <option value="530p">5:30PM</option>
    <option value="6p">6:00PM</option>
    <option value="630p">6:30PM</option>
    <option value="7p">7:00PM</option>
    <option value="730p">7:30PM</option>
    <option value="8p">8:00PM</option>
</select></div>
                        <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon start"><i class="fa fa-play"></i></a></div>
                        <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon pause"><i class="fa fa-pause"></i></a></div>
                        <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon stop"><i class="fa fa-stop"></i></a></div>
                    </div>
                    <div role="tablist" id="accordion-3">
                        <?php echo $view3; ?>
                        <div id="addedarea3"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" id="tab-9">
            <div class="container-fluid admin-area-container">
                <div class="kukunoko-container">
                    <h5 style="margin:0;">Student Evaluation Questionnaire</h5>
                    <div class="area-label-container"><span>Total Area Weight:</span><input type="text" disabled="" id="area1" name="area1" value="<?php echo $num1; ?>"></div>
                </div>
                <div class="row no-gutters eval-sched">
                    <div class="col-12">
                        <h6 class="text-dark" style="font-weight:bold;">Schedule</h6>
                    </div>
                    <div class="col-12"><span>Start</span></div>
                    <div class="col-6"><input type="date" class="eval-sched-date"></div>
                    <div class="col-6"><!--SELECT TAGSS-->

<select class="eval-sched-time" style="display:block;">
    <option value="7a">7:00AM</option>
    <option value="730a">7:30AM</option>
    <option value="8a">8:00AM</option>
    <option value="830a">8:30AM</option>
    <option value="9a">9:00AM</option>
    <option value="930a">9:30AM</option>
    
    <option value="10a">10:00AM</option>
    <option value="1030a">10:30AM</option>
    <option value="11a">11:00AM</option>
    <option value="1130a">11:30AM</option>
    <option value="12p">12:00NN</option>
    <option value="1230p">12:30PM</option>
    <option value="1p">1:00PM</option>
    <option value="13p">1:30PM</option>
    
    <option value="2p">2:00PM</option>
    <option value="230p">2:30PM</option>
    <option value="3p">3:00PM</option>
    <option value="330p">3:30PM</option>
    <option value="4p">4:00PM</option>
    <option value="430p">4:30PM</option>
    <option value="5p">5:00PM</option>
    <option value="530p">5:30PM</option>
    <option value="6p">6:00PM</option>
    <option value="630p">6:30PM</option>
    <option value="7p">7:00PM</option>
    <option value="730p">7:30PM</option>
    <option value="8p">8:00PM</option>
</select></div>
                    <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon start"><i class="fa fa-play"></i></a></div>
                    <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon pause"><i class="fa fa-pause"></i></a></div>
                    <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon stop"><i class="fa fa-stop"></i></a></div>
                </div>
                <div role="tablist" id="accordion-3">
                    <?php echo $view1; ?>
                    <div id="addedarea1"></div>
            </div>
        </div>
    </div>
    <div class="tab-pane" role="tabpanel" id="tab-10">
        <div class="container-fluid admin-area-container">
            <div class="kukunoko-container">
                <h5 style="margin:0;">Peer Evaluation Questionnaire</h5>
                <div class="area-label-container"><span>Total Area Weight:</span><input type="text" disabled="" id="area2" name="area2" value="<?php echo $num2; ?>"></div>
            </div>
            <div class="row no-gutters eval-sched">
                <div class="col-12">
                    <h6 class="text-dark" style="font-weight:bold;">Schedule</h6>
                </div>
                <div class="col-12"><span>Start</span></div>
                <div class="col-6"><input type="date" class="eval-sched-date"></div>
                <div class="col-6"><!--SELECT TAGSS-->

<select class="eval-sched-time" style="display:block;">
    <option value="7a">7:00AM</option>
    <option value="730a">7:30AM</option>
    <option value="8a">8:00AM</option>
    <option value="830a">8:30AM</option>
    <option value="9a">9:00AM</option>
    <option value="930a">9:30AM</option>
    
    <option value="10a">10:00AM</option>
    <option value="1030a">10:30AM</option>
    <option value="11a">11:00AM</option>
    <option value="1130a">11:30AM</option>
    <option value="12p">12:00NN</option>
    <option value="1230p">12:30PM</option>
    <option value="1p">1:00PM</option>
    <option value="13p">1:30PM</option>
    
    <option value="2p">2:00PM</option>
    <option value="230p">2:30PM</option>
    <option value="3p">3:00PM</option>
    <option value="330p">3:30PM</option>
    <option value="4p">4:00PM</option>
    <option value="430p">4:30PM</option>
    <option value="5p">5:00PM</option>
    <option value="530p">5:30PM</option>
    <option value="6p">6:00PM</option>
    <option value="630p">6:30PM</option>
    <option value="7p">7:00PM</option>
    <option value="730p">7:30PM</option>
    <option value="8p">8:00PM</option>
</select></div>
                <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon start"><i class="fa fa-play"></i></a></div>
                <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon pause"><i class="fa fa-pause"></i></a></div>
                <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon stop"><i class="fa fa-stop"></i></a></div>
            </div>
            <div role="tablist" id="accordion-3">
                <?php echo $view2; ?>
                <div id="addedarea2"></div>
        </div>
    </div>
    </div>
    <div class="tab-pane" role="tabpanel" id="tab-11">
        <div class="container-fluid admin-area-container">
            <div class="kukunoko-container">
                <h5 style="margin:0;">Self-Evaluation Questionnaire</h5>
                <div class="area-label-container"><span>Total Area Weight:</span><input type="text" disabled="" id="area4" name="area4" value="<?php echo $num4; ?>"></div>
            </div>
            <div class="row no-gutters eval-sched">
                <div class="col-12">
                    <h6 class="text-dark" style="font-weight:bold;">Schedule</h6>
                </div>
                <div class="col-12"><span>Start</span></div>
                <div class="col-6"><input type="date" class="eval-sched-date"></div>
                <div class="col-6"><!--SELECT TAGSS-->

<select class="eval-sched-time" style="display:block;">
    <option value="7a">7:00AM</option>
    <option value="730a">7:30AM</option>
    <option value="8a">8:00AM</option>
    <option value="830a">8:30AM</option>
    <option value="9a">9:00AM</option>
    <option value="930a">9:30AM</option>
    
    <option value="10a">10:00AM</option>
    <option value="1030a">10:30AM</option>
    <option value="11a">11:00AM</option>
    <option value="1130a">11:30AM</option>
    <option value="12p">12:00NN</option>
    <option value="1230p">12:30PM</option>
    <option value="1p">1:00PM</option>
    <option value="13p">1:30PM</option>
    
    <option value="2p">2:00PM</option>
    <option value="230p">2:30PM</option>
    <option value="3p">3:00PM</option>
    <option value="330p">3:30PM</option>
    <option value="4p">4:00PM</option>
    <option value="430p">4:30PM</option>
    <option value="5p">5:00PM</option>
    <option value="530p">5:30PM</option>
    <option value="6p">6:00PM</option>
    <option value="630p">6:30PM</option>
    <option value="7p">7:00PM</option>
    <option value="730p">7:30PM</option>
    <option value="8p">8:00PM</option>
</select></div>
                <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon start"><i class="fa fa-play"></i></a></div>
                <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon pause"><i class="fa fa-pause"></i></a></div>
                <div class="col align-self-center container-eval-sched-link"><a href="#" class="eval-sched-icon stop"><i class="fa fa-stop"></i></a></div>
            </div>
            <div role="tablist" id="accordion-3">
                <?php echo $view4; ?>
                <div id="addedarea4"></div>
        </div>
    </div>
    </div>
    </div>
    </div>
<form id="mainForm" name="mainForm">
    <div class="modal fade new-area-modal" role="dialog" tabindex="-1" id="new-area-modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header addnewarea">
                    <h4 class="modal-title">New Area</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body addnewarea">
                    <div class="container for-container">
                        <div class="form-check"><input class="form-check-input" type="radio" name="for-evaltype" value="3" checked="" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Guidance Evaluation</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="for-evaltype" value="1" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Student Evaluation</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="for-evaltype" value="2" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Peer Evaluation</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="for-evaltype" value="4" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Self Evaluation</label></div>
                    </div>
                    <div class="container text-container"><input type="text" placeholder="Area Name" id="newareatxt" class="newareatxt"><input type="text" placeholder="Area Weight" id="newweighttxt" class="newareatxt">
                        <div class="nw-ar-rdlbl">
                            <h6>Answer Type</h6>
                            <div class="form-check"><input class="form-check-input" type="radio" name="answer-rate-type" value="1" checked="" id="formCheck-29"><label class="form-check-label" for="formCheck-29" id="label-peer" name="label-peer">Rate</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" name="answer-rate-type" value="2" id="formCheck-30"><label class="form-check-label" for="formCheck-30">Essay</label></div>
                        </div>
                    </div><span class="badge badge-danger error-badge" id="errnewa" name="errnewa"></span><span class="badge badge-primary success-badge" id="succnewa" name="succnewa"></span></div>
                <div class="modal-footer addnewarea"><button class="btn btn-primary" type="button" id="save-area-btn" name="save-area-btn">Save</button></div>
            </div>
        </div>
    </div>
</form>
    <div class="modal fade update-area-modal" role="dialog" tabindex="-1" id="update-area-modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header update-area">
                    <h4 class="modal-title" id="anum"></h4>
                    <h6 id="awum"></h6><button type="button" class="close update-area" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body addnewarea">
                    <form class="text-container"><input class="form-control newareatxt" type="text" placeholder="Area Name" id="updateareatxt"><input class="form-control newareatxt" type="text" placeholder="Area Weight" id="updateweighttxt"><input class="form-control newareatxt" type="text" placeholder="Area Weight" id="hiddenid"><input class="form-control newareatxt" type="text" placeholder="Area Weight" id="hiddenqtype"><input class="form-control newareatxt" type="text" placeholder="Area Weight" id="hiddenwv"><input class="form-control newareatxt" type="text" placeholder="Area Weight" id="hiddenet"></form><span class="badge badge-danger error-badge" id="errmsgum" name="errmsgum"></span><span class="badge badge-primary success-badge" id="succmsgum" name="succmsgum"></span></div>
                <div
                    class="modal-footer update-area"><button class="btn btn-primary" type="button" id="update-area-btn" name="update-area-btn">Save</button></div>
        </div>
    </div>
    </div>
    <div class="modal fade view-questions-modal" role="dialog" tabindex="-1" id="view-questions-modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">&lt;Area&gt; Questionnaires</h4><button type="button" class="close viewquest-modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body modal-quest-container">
                    <div class="container modal-quest-parent-container">
                        <div role="tablist" id="accordion-2">
                            <div class="card question">
                                <div class="card-header questionnaire" role="tab">
                                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-2 .item-1" href="div#accordion-2 .item-1" class="accord-links modal-quest">The teacher has pleasing personality</a></h5>
                                </div>
                                <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <div class="d-flex flex-column quest-container">
                                            <div class="d-flex quest-header">
                                                <div class="quest-close-btn-container"><button class="close quest"><span aria-hidden="true">×</span></button></div>
                                            </div>
                                            <div class="quest-body"><textarea placeholder="Enter text here.." class="quest-textarea-ta"></textarea></div>
                                            <div class="quest-footer"><button class="btn btn-primary quest-update-btn" type="button">Update</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><a class="badge badge-primary return-home" href="home.html" id="link-return-home"><i class="fa fa-chevron-left"></i>&nbsp;Back to home</a>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin-page.js"></script>

</body>