<?php
include('../assets/php/connection.php');

$sql = "SELECT * FROM questionarea WHERE evaluationtype_id = 3 AND delete_flag=0";
$result = mysqli_query($conn, $sql);

$view3 = '<div>';
while($row = mysqli_fetch_array($result))
{
	$sql1 = "SELECT count(*) as total FROM evaluationform WHERE questionarea_id='{$row['id']}' AND delete_flag=0";
	$result1 = mysqli_query($conn, $sql1);
	$count = mysqli_fetch_assoc($result1);

	if($row['evaluationtype_id'] == '3')
	{
		if($row['questiontype_id'] == '1')
		{
							$view3 .= '<div class="card">
                                                <div class="card-header questionnaire" role="tab">
                                                    <h5 class="mb-0">
													<a class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="accordion-3 .item-'.$row['id'].'" href="div#accordion-3 .item-'.$row['id'].'">'.$row['area_name'].'</a></h5>
													<button class="btn btn-primary update-area-btn" type="button" data-target=".update-area-modal" data-id="'.$row['id'].'" name="updatebtn'.$row['id'].'">Update Area</button>
													<input type="hidden" value="Update '.$row['area_name'].' Area" id="anmodal">
													<input type="hidden" value="Area: '.$row['area_weight'].'" id="awmodal">
													<input type="hidden" value="'.$row['evaluationtype_id'].'" id="evalstype">
													<input type="hidden" value="'.$row['area_weight'].'" id="weightval">
													<input type="hidden" value="'.$row['questiontype_id'].'" id="qtypeval"></div>
                                                <div class="collapse show item-'.$row['id'].' role="tabpanel" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column quest-container">
                                                            <div class="d-flex quest-header">
                                                                <div class="container d-flex answer-control-types">
																<input type="radio" name="rate-type-choose'.$row['id'].'" value="'.$row['evaluationtype_id'].'" id="answer-type-radio-rate'.$row['id'].'" class="answer-type-rate" checked="">
																<label class="d-flex justify-content-center align-items-center align-content-center rate-control-type-rate"
                                                                        for="answer-type-radio-rate'.$row['id'].'" id="answer-type-label-rate">Rate</label>
                                                                </div>
                                                                <div class="quest-close-btn-container">
																<button class="close quest addquest" data-id="'.$row['id'].'">
																<span aria-hidden="true">×</span>
																</button>
																<input type="hidden" value="'.$row['evaluationtype_id'].'" id="evalstype">
																<input type="hidden" value="'.$row['area_weight'].'" id="weightvalue">
																</div>
                                                            </div>
                                                            <div class="quest-body">
															<textarea placeholder="Enter questions here.." class="quest-textarea" id="questions'.$row['id'].'"></textarea>
															</div>
                                                            <div class="quest-footer">
															<button class="btn btn-primary quest-save-btn" type="button" data-id="'.$row['id'].'">Save</button></div>
                                                        </div>
														<span class="badge badge-danger error-badge" id="errmsg'.$row['id'].'"></span>
														<span class="badge badge-primary success-badge" id="succ'.$row['id'].'"></span>
                                                        <div class="row no-gutters view-quest-btn-container">
                                                            <div class="col d-flex justify-content-center control-btns">
                                                            <input type="hidden" value="'.$row['area_name'].'" id="areaname'.$row['id'].'">
															<button class="btn btn-primary view-quest-btn" type="button" data-id="'.$row['id'].'" data-target=".view-questions-modal">View Saved Questions<span class="badge badge-primary quest-counts" id="savednotif'.$row['id'].'">'.$count['total'].'</span>
															</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
	}
	
	else if($row['questiontype_id'] == '2')
		{
							$view3 .= '<div class="card">
                                                <div class="card-header questionnaire" role="tab">
                                                    <h5 class="mb-0">
													<a class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="accordion-3 .item-'.$row['id'].'" href="div#accordion-3 .item-'.$row['id'].'">'.$row['area_name'].'</a></h5>
													<button class="btn btn-primary update-area-btn" type="button" data-target=".update-area-modal" data-id="'.$row['id'].'" name="updatebtn'.$row['id'].'">Update Area</button>
													<input type="hidden" value="Update '.$row['area_name'].' Area" id="anmodal">
													<input type="hidden" value="Area: '.$row['area_weight'].'" id="awmodal">
													<input type="hidden" value="'.$row['evaluationtype_id'].'" id="evalstype">
													<input type="hidden" value="'.$row['area_weight'].'" id="weightval">
													<input type="hidden" value="'.$row['questiontype_id'].'" id="qtypeval"></div>
                                                <div class="collapse show item-'.$row['id'].' role="tabpanel" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column quest-container">
                                                            <div class="d-flex quest-header">
                                                                <div class="container d-flex answer-control-types">
																<input type="radio" name="rate-type-choose'.$row['id'].'" value="'.$row['evaluationtype_id'].'" id="answer-type-radio-rate'.$row['id'].'" class="answer-type-rate" checked="">
																<label class="d-flex justify-content-center align-items-center align-content-center rate-control-type-rate"
                                                                        for="answer-type-radio-rate'.$row['id'].'" id="answer-type-label-rate">Essay</label>
                                                                </div>
                                                                <div class="quest-close-btn-container">
																<button class="close quest addquest" data-id="'.$row['id'].'">
																<span aria-hidden="true">×</span>
																</button>
																<input type="hidden" value="'.$row['evaluationtype_id'].'" id="evalstype">
																<input type="hidden" value="'.$row['area_weight'].'" id="weightvalue">
																</div>
                                                            </div>
                                                            <div class="quest-body">
															<textarea placeholder="Enter questions here.." class="quest-textarea" id="questions'.$row['id'].'"></textarea>
															</div>
                                                            <div class="quest-footer">
															<button class="btn btn-primary quest-save-btn" type="button" data-id="'.$row['id'].'">Save</button></div>
                                                        </div>
														<span class="badge badge-danger error-badge" id="errmsg'.$row['id'].'"></span>
														<span class="badge badge-primary success-badge" id="succ'.$row['id'].'"></span>
                                                        <div class="row no-gutters view-quest-btn-container">
                                                            <div class="col d-flex justify-content-center control-btns">
                                                            <input type="hidden" value="'.$row['area_name'].'" id="areaname'.$row['id'].'">
															<button class="btn btn-primary view-quest-btn" type="button" data-id="'.$row['id'].'" data-target=".view-questions-modal">View Saved Questions<span class="badge badge-primary quest-counts" id="savednotif'.$row['id'].'">'.$count['total'].'</span>
															</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
	}
}
}
$view3 .= '</div>';
?>