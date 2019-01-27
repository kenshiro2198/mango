<?php
session_start();
include('../../connection.php');

if(isset($_POST['add']))
{
	$newareatxt = stripslashes(trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['newareatxt']))));
	$newweighttxt = stripslashes(trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['newweighttxt']))));
	$evalstype = stripslashes(trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['evalstype']))));
	$qtype = stripslashes(trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['qtype']))));
	
	$sql = "SELECT * FROM evaluationtype WHERE id=". $evalstype;
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$total = $row['evaluation_weight'] - $newweighttxt;
	
	$sql1 = "SELECT * FROM questionarea WHERE area_name='{$newareatxt}' AND evaluationtype_id='{$evalstype}' AND questiontype_id='{$qtype}' AND delete_flag=0";
	$result1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_num_rows($result1);
	
	if($row1 > 0)
	{
		$err = 'Area Name In The Same Evaluation And Quesion Type Already Exist';
		echo $err;
	}
	
	else
	{
		$sql2 = "UPDATE evaluationtype SET evaluation_weight='{$total}' WHERE id='{$evalstype}'";
		mysqli_query($conn, $sql2);
		
		$sql3 = "INSERT INTO questionarea(evaluationtype_id, questiontype_id, area_name, area_weight, created_by, updated_at, updated_by) VALUES ('{$evalstype}', '{$qtype}', '{$newareatxt}', '{$newweighttxt}', '1', CURRENT_TIMESTAMP, '1')";

		if(mysqli_query($conn, $sql3))
		{
			$id = mysqli_insert_id($conn);

			$sql4 = "SELECT count(*) as total FROM evaluationform WHERE questionarea_id='{$id}'";
			$result4 = mysqli_query($conn, $sql4);
			$count = mysqli_fetch_assoc($result4);

				if($qtype == '001')
				{
									$add = '<div class="card">
                                                <div class="card-header questionnaire" role="tab">
                                                    <h5 class="mb-0">
													<a class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="accordion-3 .item-'.$id.'" href="div#accordion-3 .item-'.$id.'">'.$newareatxt.'</a></h5>
													<button class="btn btn-primary update-area-btn" type="button" data-target=".update-area-modal" data-id="'.$id.'" name="updatebtn'.$id.'">Update Area</button>
													<input type="hidden" value="Update '.$newareatxt.' Area" id="anmodal">
													<input type="hidden" value="Area: '.$newweighttxt.'" id="awmodal">
													<input type="hidden" value="'.$evalstype.'" id="evalstype">
													<input type="hidden" value="'.$newweighttxt.'" id="weightval">
													<input type="hidden" value="'.$qtype.'" id="qtypeval"></div>
                                                <div class="collapse show item-'.$id.'" role="tabpanel" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column quest-container">
                                                            <div class="d-flex quest-header">
                                                                <div class="container d-flex answer-control-types">
																<input type="radio" name="rate-type-choose'.$id.'" value="001" id="answer-type-radio-rate'.$id.'" class="answer-type-rate" checked="">
																<label class="d-flex justify-content-center align-items-center align-content-center rate-control-type-rate"
                                                                        for="answer-type-radio-rate'.$id.'" id="answer-type-label-rate">Rate</label>
                                                                </div>
                                                                <div class="quest-close-btn-container">
																<button class="close quest addquest" data-id="'.$id.'">
																<span aria-hidden="true">×</span>
																</button>
																<input type="hidden" value="'.$evalstype.'" id="evalstype">
																<input type="hidden" value="'.$newweighttxt.'" id="weightvalue">
																</div>
                                                            </div>
                                                            <div class="quest-body">
															<textarea placeholder="Enter questions here.." class="quest-textarea" id="questions'.$id.'"></textarea>
															</div>
                                                            <div class="quest-footer">
															<button class="btn btn-primary quest-save-btn" type="button" data-id="'.$id.'">Save</button></div>
                                                        </div>
														<span class="badge badge-danger error-badge" id="errmsg'.$id.'"></span>
														<span class="badge badge-primary success-badge" id="succ'.$id.'"></span>
                                                        <div class="row no-gutters view-quest-btn-container">
                                                            <div class="col d-flex justify-content-center control-btns">
                                                            <input type="hidden" value="'.$newareatxt.'" id="areaname'.$id.'">
															<button class="btn btn-primary view-quest-btn" type="button" data-id="'.$id.'" data-target=".view-questions-modal">View Saved Questions<span class="badge badge-primary quest-counts" id="savednotif'.$id.'">'.$count['total'].'</span>
															</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
						echo $add;
				}
				
				else if($qtype == '002')
				{
									$add = '<div class="card">
                                                <div class="card-header questionnaire" role="tab">
                                                    <h5 class="mb-0">
													<a class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="accordion-3 .item-'.$id.'" href="div#accordion-3 .item-'.$id.'">'.$newareatxt.'</a></h5>
													<button class="btn btn-primary update-area-btn" type="button" data-target=".update-area-modal" data-id="'.$id.'" name="updatebtn'.$id.'">Update Area</button>
													<input type="hidden" value="Update '.$newareatxt.' Area" id="anmodal">
													<input type="hidden" value="Area: '.$newweighttxt.'" id="awmodal">
													<input type="hidden" value="'.$evalstype.'" id="evalstype">
													<input type="hidden" value="'.$newweighttxt.'" id="weightval">
													<input type="hidden" value="'.$qtype.'" id="qtypeval"></div>
                                                <div class="collapse show item-'.$id.'" role="tabpanel" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column quest-container">
                                                            <div class="d-flex quest-header">
                                                                <div class="container d-flex answer-control-types">
																<input type="radio" name="rate-type-choose'.$id.'" value="002" id="answer-type-radio-essay'.$id.'" class="answer-type-essay" checked="">
                                                                    <label class="d-flex justify-content-center align-items-center align-content-center rate-control-type-essay" 
																	for="answer-type-radio-essay'.$id.'" id="answer-type-label-essay" style="font-weight:bold;font-family:Noto Sans, sans-serif;">Essay</label>
                                                                </div>
                                                                <div class="quest-close-btn-container">
																<button class="close quest addquest" data-id="'.$id.'">
																<span aria-hidden="true">×</span>
																</button>
																<input type="hidden" value="'.$evalstype.'" id="evalstype">
																<input type="hidden" value="'.$newweighttxt.'" id="weightvalue">
																</div>
                                                            </div>
                                                            <div class="quest-body">
															<textarea placeholder="Enter questions here.." class="quest-textarea" id="questions'.$id.'"></textarea>
															</div>
                                                            <div class="quest-footer">
															<button class="btn btn-primary quest-save-btn" type="button" data-id="'.$id.'">Save</button></div>
                                                        </div>
														<span class="badge badge-danger error-badge" id="errmsg'.$id.'"></span>
														<span class="badge badge-primary success-badge" id="succ'.$id.'"></span>
                                                        <div class="row no-gutters view-quest-btn-container">
                                                            <div class="col d-flex justify-content-center control-btns">
                                                            <input type="hidden" value="'.$newareatxt.'" id="areaname'.$id.'">
															<button class="btn btn-primary view-quest-btn" type="button" data-id="'.$id.'" data-target=".view-questions-modal">View Saved Questions<span class="badge badge-primary quest-counts" id="savednotif'.$id.'">'.$count['total'].'</span>
															</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
						echo $add;
			}
		}
	}
}
?>