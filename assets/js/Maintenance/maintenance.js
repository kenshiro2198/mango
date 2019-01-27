//Schoolyear
	//add
	//edit
	//delete
	//update active
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Department
	//
		$(document).on('click','a[data-role=deptedit]',function(){
	        var id = "dept-"+$(this).data('id');
	        var depta = $('#'+id).children('td[data-target=dept]').text();
	        var depta2 = $('td[data-target=dept]').text();
	        
	        $('#department').val(depta);
	        $('.deptupdatebtn').removeAttr("hidden");
	        $('.deptaddbtn').attr('hidden','true');
	        $('.dbuttondept2').attr('id',id);
	        $('#textu').attr('hidden','true');
	        $('#deptCancel').removeAttr("hidden");
	    });
	    $(document).on('click', '#deptCancel', function(){
	        $('#department').val('');
	        $('.deptupdatebtn').attr('hidden','true');
	        $('.deptaddbtn').removeAttr('hidden');
	        $('#textu').attr('hidden','true');
	        $('#deptCancel').attr('hidden','true');
	    });
	    $(document).on('click', '.deptupdatebtn', function(){
	        $('.deptaddbtn').removeAttr("hidden");
	        $('.deptupdatebtn').attr('hidden','true');
	    });
	    $(document).on('change keyup','.stoptypedept', function(e){
	        let Disabled = true;

	        $(".stoptypedept").each(function(){
	            let value = this.value
	            if ((value)&&(value.trim() !='')) {
	                Disabled = false
	            }
	            else{
	                Disabled = true
	                return false
	            }
	        });
	        if (Disabled) {
	            $('.dbuttondept').prop("disabled",true);
	            $('.dbuttondept2').prop("disabled",true);
	        }
	        else{
	            $('.dbuttondept').prop("disabled",false);
	            $('.dbuttondept2').prop("disabled",false);
	        }
	    });
	//add
		$(document).on('click','#deptaddbtn',function(){
	        var depta = $("#department").val();
	        var sy = 1; //$('.sytab').val();
	        $.ajax({
	            url: "assets/php/Maintenance/maintenance.php",
	            type:"POST",
	            data:{
	                "department" : 1,
	                "depta" : depta,
	                "sy"    : sy
	            },
	            success: function(data){
	                $("#department_section_detail").html(data);
	                var delayInMilliseconds = 5000; //1 second
	                setTimeout(function() {
						$('.errmsgcontainer').attr('hidden','true');
						$('.success-badge').attr('hidden','true');
					}, delayInMilliseconds);
	            }
	        }) 
	    });
	//edit
		$(document).on('click','input[data-role=updatedept]',function(){
	        var id = $(this).attr('id');
	        var dept = $("#department").val();
	        var sy = 1;
	        $.ajax({
	            url: "assets/php/Maintenance/maintenance.php",
	            type:"POST",
	            data:{
	                "department" : 2,
	                "aid" : id,
	                "dept" : dept
	                
	            },
	            success: function(data){
	                $("#department").val('');
	               	$("#department_section_detail").html(data);
	               	var delayInMilliseconds = 5000; //1 second
	                setTimeout(function() {
						$('.errmsgcontainer').attr('hidden','true');
						$('.success-badge').attr('hidden','true');
					}, delayInMilliseconds);
	            }
	        }) 
	    });
	//delete  
	   	$('.departmentarchive').click(function() {
		    if ($(this).is(':checked')) {
		        $('.archivedepartment').attr('checked', true);
		    } else {
		        $('.archivedepartment').attr('checked', false);
		    }
		});
		$(document).on('click','.delete_department',function(){
			if(confirm("Are you sure you want to delete the selected data/s?")){
				var e=[];$(".archivedepartment:checked").each(function(t){
				e[t]=$(this).val()}),0===e.length?
		        alert("Please Select atleast 1 data"):$.ajax({
		            url: "assets/php/Maintenance/maintenance.php",
		            type:"POST",
		            data:{
		                "department" : 3,
		                "checkArr" : e
		            },
		            success: function(data){
		                $("#department_section_detail").html(data);
		               	var delayInMilliseconds = 5000; //1 second
		                setTimeout(function() {
							$('.errmsgcontainer').attr('hidden','true');
							$('.success-badge').attr('hidden','true');
						}, delayInMilliseconds);
		            }
		        });
		    } 
	    });
	//update active
		$(document).on('click','input[data-check=deptupdate]',function(){
	        var id = $(this).attr('data-name');
	        if ($(this).prop("checked") == false) {
	                $.ajax({
	                url: "assets/php/Maintenance/maintenance.php",
	                type:"POST",
	                data:{
	                    "department" : 4,
	                    "activeid" : id
	                },
	                success: function(data){

	                }
	            }) 
	        }
	        else if ($(this).prop("checked") == true){
	            $.ajax({
	                url: "assets/php/Maintenance/maintenance.php",
	                type:"POST",
	                data:{
	                    "department" : 5,
	                    "activeid" : id
	                },
	                success: function(data){

	                }
	            }) 
	        }
	    });
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Grade
	//
		$(document).on('click','a[data-role=gredit]',function(){
	        var id = "gr-"+$(this).data('id');
	        var gra = $('#'+id).children('td[data-target=gr]').text();
	        var gra2 = $('td[data-target=gr]').text();
	        
	        $('#grade').val(gra);
	        $('.grupdatebtn').removeAttr("hidden");
	        $('.graddbtn').attr('hidden','true');
	        $('.dbuttongr2').attr('id',id);
	        $('#textu').attr('hidden','true');
	        $('#grCancel').removeAttr("hidden");
	    });
	    $(document).on('click', '#grCancel', function(){
	        $('#grade').val('');
	        $('.grupdatebtn').attr('hidden','true');
	        $('.graddbtn').removeAttr('hidden');
	        $('#textu').attr('hidden','true');
	        $('#grCancel').attr('hidden','true');
	    });
	    $(document).on('click', '.grupdatebtn', function(){
	        $('.graddbtn').removeAttr("hidden");
	        $('.grupdatebtn').attr('hidden','true');
	    });
	    $(document).on('change keyup','.stoptypegr', function(e){
	        let Disabled = true;

	        $(".stoptypegr").each(function(){
	            let value = this.value
	            if ((value)&&(value.trim() !='')) {
	                Disabled = false
	            }
	            else{
	                Disabled = true
	                return false
	            }
	        });
	        if (Disabled) {
	            $('.dbuttongr').prop("disabled",true);
	            $('.dbuttongr2').prop("disabled",true);
	        }
	        else{
	            $('.dbuttongr').prop("disabled",false);
	            $('.dbuttongr2').prop("disabled",false);
	        }
	    });
	//add
		$(document).on('click','#graddbtn',function(){
	        var gra = $("#grade").val();
	        var sy = 1; //$('.sytab').val();
	        $.ajax({
	            url: "assets/php/Maintenance/maintenance.php",
	            type:"POST",
	            data:{
	                "grade" : 1,
	                "gra" : gra,
	                "sy"    : sy
	            },
	            success: function(data){
	                $("#grade_section_detail").html(data);
	                var delayInMilliseconds = 5000; //1 second
	                setTimeout(function() {
						$('.errmsgcontainer').attr('hidden','true');
						$('.success-badge').attr('hidden','true');
					}, delayInMilliseconds);
	            }
	        }) 
	    });
	//edit
		$(document).on('click','input[data-role=updategr]',function(){
	        var id = $(this).attr('id');
	        var gr = $("#grade").val();
	        var sy = 1;
	        $.ajax({
	            url: "assets/php/Maintenance/maintenance.php",
	            type:"POST",
	            data:{
	                "grade" : 2,
	                "aid" : id,
	                "gr" : gr
	                
	            },
	            success: function(data){
	                $("#grade").val('');
	               	$("#grade_section_detail").html(data);
	               	var delayInMilliseconds = 5000; //1 second
	                setTimeout(function() {
						$('.errmsgcontainer').attr('hidden','true');
						$('.success-badge').attr('hidden','true');
					}, delayInMilliseconds);
	            }
	        }) 
	    });
	//delete
		$('.gradearchive').click(function() {
		    if ($(this).is(':checked')) {
		        $('.archivegrade').attr('checked', true);
		    } else {
		        $('.archivegrade').attr('checked', false);
		    }
		});
		$(document).on('click','.delete_grade',function(){
			if(confirm("Are you sure you want to delete the selected data/s?")){
				var e=[];$(".archivegrade:checked").each(function(t){
				e[t]=$(this).val()}),0===e.length?
		        alert("Please Select atleast 1 data"):$.ajax({
		            url: "assets/php/Maintenance/maintenance.php",
		            type:"POST",
		            data:{
		                "grade" : 3,
		                "checkArr" : e
		            },
		            success: function(data){
		                $("#grade_section_detail").html(data);
		               	var delayInMilliseconds = 5000; //1 second
		                setTimeout(function() {
							$('.errmsgcontainer').attr('hidden','true');
							$('.success-badge').attr('hidden','true');
						}, delayInMilliseconds);
		            }
		        });
		    } 
	    });
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
//Section
	//
		$(document).on('click','a[data-role=scedit]',function(){
	        var id = "sc-"+$(this).data('id');
	        var sca = $('#'+id).children('td[data-target=sc]').text();
	        var sca2 = $('td[data-target=sc]').text();
	        
	        $('#section').val(sca);
	        $('.scupdatebtn').removeAttr("hidden");
	        $('.scaddbtn').attr('hidden','true');
	        $('.dbuttonsc2').attr('id',id);
	        $('#textu').attr('hidden','true');
	        $('#scCancel').removeAttr("hidden");
	    });
	    $(document).on('click', '#scCancel', function(){
	        $('#section').val('');
	        $('.scupdatebtn').attr('hidden','true');
	        $('.scaddbtn').removeAttr('hidden');
	        $('#textu').attr('hidden','true');
	        $('#scCancel').attr('hidden','true');
	    });
	    $(document).on('click', '.scupdatebtn', function(){
	        $('.scaddbtn').removeAttr("hidden");
	        $('.scupdatebtn').attr('hidden','true');
	    });
	    $(document).on('change keyup','.stoptypesc', function(e){
	        let Disabled = true;

	        $(".stoptypesc").each(function(){
	            let value = this.value
	            if ((value)&&(value.trim() !='')) {
	                Disabled = false
	            }
	            else{
	                Disabled = true
	                return false
	            }
	        });
	        if (Disabled) {
	            $('.dbuttonsc').prop("disabled",true);
	            $('.dbuttonsc2').prop("disabled",true);
	        }
	        else{
	            $('.dbuttonsc').prop("disabled",false);
	            $('.dbuttonsc2').prop("disabled",false);
	        }
	    });
	//add
		$(document).on('click','#scaddbtn',function(){
	        var sc = $("#section").val();
	        var gr = $("#grsc").val();
	        var sy = 1; //$('.sytab').val();
	        $.ajax({
	            url: "assets/php/Maintenance/maintenance.php",
	            type:"POST",
	            data:{
	                "section" : 1,
	                "sc" : sc,
	                "gr" : gr,
	                "sy" : sy
	            },
	            success: function(data){
	                $(".section_section_detail").html(data);
	                var delayInMilliseconds = 5000; //1 second
	                setTimeout(function() {
						$('.errmsgcontainer').attr('hidden','true');
						$('.success-badge').attr('hidden','true');
					}, delayInMilliseconds);
	            }
	        }) 
	    });
	//edit
		$(document).on('click','input[data-role=updatesc]',function(){
	        var id = $(this).attr('id');
	        var sc = $("#section").val();
	        var gr = $('#grsc').val();
	        var sy = 1;
	        $.ajax({
	            url: "assets/php/Maintenance/maintenance.php",
	            type:"POST",
	            data:{
	                "section" : 2,
	                "aid" : id,
	                "sc" : sc,
                    "gr" : gr
	                
	            },
	            beforeSend: function(){
	            	var delayInMilliseconds = 5000;
	                setTimeout(function() {
	            	$('.updating').html("Updating...");
	            	}, delayInMilliseconds);
	            },
	            complete: function(){
	            	var delayInMilliseconds = 5000;
	                setTimeout(function() {
	            	$('.updating').html("Complete");
	            	}, delayInMilliseconds);
	            },
	            success: function(data){
	               	$(".section_section_detail").html(data);
	               	var delayInMilliseconds = 5000;
	                setTimeout(function() {
						$('.errmsgcontainer').attr('hidden','true');
						$('.success-badge').attr('hidden','true');
					}, delayInMilliseconds);
	            }
	        }) 
	    });
	//delete
		$('.sectionarchive').click(function() {
		    if ($(this).is(':checked')) {
		        $('.archivesection').attr('checked', true);
		    } else {
		        $('.archivesection').attr('checked', false);
		    }
		});
		$(document).on('click','.delete_section',function(){
			if(confirm("Are you sure you want to delete the selected data/s?")){
				var e=[];$(".archivesection:checked").each(function(t){
				e[t]=$(this).val()}),0===e.length?
		        alert("Please Select atleast 1 data"):$.ajax({
		            url: "assets/php/Maintenance/maintenance.php",
		            type:"POST",
		            data:{
		                "section" : 3,
		                "checkArr" : e
		            },
		            success: function(data){
		                $(".section_section_detail").html(data);
		               	var delayInMilliseconds = 5000; //1 second
		                setTimeout(function() {
							$('.errmsgcontainer').attr('hidden','true');
							$('.success-badge').attr('hidden','true');
						}, delayInMilliseconds);
		            }
		        });
		    } 
	    });
	//update active
		$(document).on('click','input[data-check=scupdate]',function(){
	        var id = $(this).attr('data-name');
	        if ($(this).prop("checked") == false) {
	                $.ajax({
	                url: "assets/php/Maintenance/maintenance.php",
	                type:"POST",
	                data:{
	                    "section" : 4,
	                    "activeid" : id
	                },
	                success: function(data){
	                }
	            }) 
	        }
	        else if ($(this).prop("checked") == true){
	            $.ajax({
	                url: "assets/php/Maintenance/maintenance.php",
	                type:"POST",
	                data:{
	                    "section" : 5,
	                    "activeid" : id
	                },
	                success: function(data){

	                }
	            }) 
	        }
	    });
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
//Subject
	//
		$(document).on('click','a[data-role=sbedit]',function(){
	        var id = "sb-"+$(this).data('id');
	        var sba = $('#'+id).children('td[data-target=sb]').text();
	        var sba2 = $('td[data-target=sb]').text();
	        
	        $('#subject').val(sba);
	        $('.sbupdatebtn').removeAttr("hidden");
	        $('.sbaddbtn').attr('hidden','true');
	        $('.dbuttonsb2').attr('id',id);
	        $('#textu').attr('hidden','true');
	        $('#sbCancel').removeAttr("hidden");
	    });
	    $(document).on('click', '#sbCancel', function(){
	        $('#subject').val('');
	        $('.sbupdatebtn').attr('hidden','true');
	        $('.sbaddbtn').removeAttr('hidden');
	        $('#textu').attr('hidden','true');
	        $('#sbCancel').attr('hidden','true');
	    });
	    $(document).on('click', '.sbupdatebtn', function(){
	        $('.sbaddbtn').removeAttr("hidden");
	        $('.sbupdatebtn').attr('hidden','true');
	    });
	    $(document).on('change keyup','.stoptypesb', function(e){
	        let Disabled = true;

	        $(".stoptypesb").each(function(){
	            let value = this.value
	            if ((value)&&(value.trim() !='')) {
	                Disabled = false
	            }
	            else{
	                Disabled = true
	                return false
	            }
	        });
	        if (Disabled) {
	            $('.dbuttonsb').prop("disabled",true);
	            $('.dbuttonsb2').prop("disabled",true);
	        }
	        else{
	            $('.dbuttonsb').prop("disabled",false);
	            $('.dbuttonsb2').prop("disabled",false);
	        }
	    });
	//add
		$(document).on('click','#sbaddbtn',function(){
	        var sb = $("#subject").val();
	        var gr = $("#grsb").val();
	        alert(gr);
	        var sy = 1; //$('.sytab').val();
	        $.ajax({
	            url: "assets/php/Maintenance/maintenance.php",
	            type:"POST",
	            data:{
	                "subject" : 1,
	                "sb" : sb,
	                "gr" : gr,
	                "sy"   : sy
	            },
	            success: function(data){
	                $("#subject_section_detail").html(data);
	                var delayInMilliseconds = 5000; //1 second
	                setTimeout(function() {
						$('.errmsgcontainer').attr('hidden','true');
						$('.success-badge').attr('hidden','true');
					}, delayInMilliseconds);
	            }
	        }) 
	    });
	//edit
		$(document).on('click','input[data-role=updatesb]',function(){
	        var id = $(this).attr('id');
	        var sb = $("#subject").val();
	        var gr = $("#grsb").val();
	        var sy = 1;
	        $.ajax({
	            url: "assets/php/Maintenance/maintenance.php",
	            type:"POST",
	            data:{
	                "subject" : 2,
	                "aid" : id,
	                "sb" : sb,
                    "gr" : gr   
	            },
	            success: function(data){
	                $("#subject").val('');
	               	$("#subject_section_detail").html(data);
	               	var delayInMilliseconds = 5000; //1 second
	                setTimeout(function() {
						$('.errmsgcontainer').attr('hidden','true');
						$('.success-badge').attr('hidden','true');
					}, delayInMilliseconds);
	            }
	        }) 
	    });
	//delete
	    $('.subjectarchive').click(function() {
		    if ($(this).is(':checked')) {
		        $('.archivesubject').attr('checked', true);
		    } else {
		        $('.archivesubject').attr('checked', false);
		    }
		});
		$(document).on('click','.delete_subject',function(){
			if(confirm("Are you sure you want to delete the selected data/s?")){
				var e=[];$(".archivesubject:checked").each(function(t){
				e[t]=$(this).val()}),0===e.length?
		        alert("Please Select atleast 1 data"):$.ajax({
		            url: "assets/php/Maintenance/maintenance.php",
		            type:"POST",
		            data:{
		                "subject" : 3,
		                "checkArr" : e
		            },
		            success: function(data){
		                $("#subject_section_detail").html(data);
		               	var delayInMilliseconds = 5000; //1 second
		                setTimeout(function() {
							$('.errmsgcontainer').attr('hidden','true');
							$('.success-badge').attr('hidden','true');
						}, delayInMilliseconds);
		            }
		        });
		    } 
	    });
	//update active
		$(document).on('click','input[data-check=sbupdate]',function(){
	        var id = $(this).attr('data-name');
	        if ($(this).prop("checked") == false) {
	                $.ajax({
	                url: "assets/php/Maintenance/maintenance.php",
	                type:"POST",
	                data:{
	                    "subject" : 4,
	                    "activeid" : id
	                },
	                success: function(data){

	                }
	            }) 
	        }
	        else if ($(this).prop("checked") == true){
	            $.ajax({
	                url: "assets/php/Maintenance/maintenance.php",
	                type:"POST",
	                data:{
	                    "subject" : 5,
	                    "activeid" : id
	                },
	                success: function(data){

	                }
	            }) 
	        }
	    });
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
//Room
	//
		$(document).on('click','a[data-role=rmedit]',function(){
	        var id = "rm-"+$(this).data('id');
	        var rma = $('#'+id).children('td[data-target=rm]').text();
	        var rma2 = $('td[data-target=rm]').text();
	        
	        $('#room').val(rma);
	        $('.rmupdatebtn').removeAttr("hidden");
	        $('.rmaddbtn').attr('hidden','true');
	        $('.dbuttonrm2').attr('id',id);
	        $('#textu').attr('hidden','true');
	        $('#rmCancel').removeAttr("hidden");
	    });
	    $(document).on('click', '#rmCancel', function(){
	        $('#room').val('');
	        $('.rmupdatebtn').attr('hidden','true');
	        $('.rmaddbtn').removeAttr('hidden');
	        $('#textu').attr('hidden','true');
	        $('#rmCancel').attr('hidden','true');
	    });
	    $(document).on('click', '.rmupdatebtn', function(){
	        $('.rmaddbtn').removeAttr("hidden");
	        $('.rmupdatebtn').attr('hidden','true');
	    });
	    $(document).on('change keyup','.stoptyperm', function(e){
	        let Disabled = true;

	        $(".stoptyperm").each(function(){
	            let value = this.value
	            if ((value)&&(value.trim() !='')) {
	                Disabled = false
	            }
	            else{
	                Disabled = true
	                return false
	            }
	        });
	        if (Disabled) {
	            $('.dbuttonrm').prop("disabled",true);
	            $('.dbuttonrm2').prop("disabled",true);
	        }
	        else{
	            $('.dbuttonrm').prop("disabled",false);
	            $('.dbuttonrm2').prop("disabled",false);
	        }
	    });
	//add
		$(document).on('click','#rmaddbtn',function(){
	        var rm = $("#room").val();
	        var sy = 1; //$('.sytab').val();
	        $.ajax({
	            url: "assets/php/Maintenance/maintenance.php",
	            type:"POST",
	            data:{
	                "room" : 1,
	                "rm"   : rm,
	                "sy"   : sy
	            },
	            success: function(data){
	                $("#room_section_detail").html(data);
	                var delayInMilliseconds = 5000; //1 second
	                setTimeout(function() {
						$('.errmsgcontainer').attr('hidden','true');
						$('.success-badge').attr('hidden','true');
					}, delayInMilliseconds);
	            }
	        }) 
	    });
	//edit
		$(document).on('click','input[data-role=updaterm]',function(){
	        var id = $(this).attr('id');
	        var rm = $("#room").val();
	        var sy = 1;
	        $.ajax({
	            url: "assets/php/Maintenance/maintenance.php",
	            type:"POST",
	            data:{
	                "room" : 2,
	                "aid" : id,
	                "rm" : rm
	                
	            },
	            success: function(data){
	               	$("#room_section_detail").html(data);
	               	var delayInMilliseconds = 5000; //1 second
	                setTimeout(function() {
						$('.errmsgcontainer').attr('hidden','true');
						s$('.success-badge').attr('hidden','true');
					}, delayInMilliseconds);
	            }
	        }) 
	    });
	//delete  
	   	$('.roomarchive').click(function() {
		    if ($(this).is(':checked')) {
		        $('.archiveroom').attr('checked', true);
		    } else {
		        $('.archiveroom').attr('checked', false);
		    }
		});
		$(document).on('click','.delete_room',function(){
			if(confirm("Are you sure you want to delete the selected data/s?")){
				var e=[];$(".archiveroom:checked").each(function(t){
				e[t]=$(this).val()}),0===e.length?
		        alert("Please Select atleast 1 data"):$.ajax({
		            url: "assets/php/Maintenance/maintenance.php",
		            type:"POST",
		            data:{
		                "room" : 3,
		                "checkArr" : e
		            },
		            success: function(data){
		                $("#room_section_detail").html(data);
		               	var delayInMilliseconds = 5000; //1 second
		                setTimeout(function() {
							$('.errmsgcontainer').attr('hidden','true');
							$('.success-badge').attr('hidden','true');
						}, delayInMilliseconds);
		            }
		        });
		    } 
	    });
	//update active
		$(document).on('click','input[data-check=rmupdate]',function(){
	        var id = $(this).attr('data-name');
	        if ($(this).prop("checked") == false) {
	                $.ajax({
	                url: "assets/php/Maintenance/maintenance.php",
	                type:"POST",
	                data:{
	                    "room" : 4,
	                    "activeid" : id
	                },
	                success: function(data){

	                }
	            }) 
	        }
	        else if ($(this).prop("checked") == true){
	            $.ajax({
	                url: "assets/php/Maintenance/maintenance.php",
	                type:"POST",
	                data:{
	                    "room" : 5,
	                    "activeid" : id
	                },
	                success: function(data){

	                }
	            }) 
	        }
	    });
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Faculty
	//add
	//edit
	//delete
	//update active
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Student
	//add
	//edit
	//delete
	//update active
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Faculty Loading
	//add
	//edit
	//delete
	//update active
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//User Level
	//add
	//edit
	//delete
	//update active
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
//Evaluation
	//add
$(document).on('click', '#save-area-btn', function() //ADD AREA
{
	//AREA WEIGHTS VALUE
	var weightnum1 = parseFloat($('#area1').val());
	var weightnum2 = parseFloat($('#area2').val());
	var weightnum3 = parseFloat($('#area3').val());
	var weightnum4 = parseFloat($('#area4').val());
	//!AREA WEIGHTS
	//AREA NAME AND WEIGHT TEXT VALUE
	var newareatxt = $.trim( $('#newareatxt').val() );
	var newweighttxt = $.trim( $('#newweighttxt').val() );
	//!AREA NAME AND WEIGHT TEXT VALUE
	//AREA AND QUESTIONNAIRE TYPE VALUE
	var qtype = document.querySelector('input[name="answer-rate-type"]:checked').value;
	var evalstype = document.querySelector('input[name="for-evaltype"]:checked').value;
	//!AREA AND QUESTIONNAIRE TYPE VALUE
	
	alert(weightnum1);
	alert(newareatxt);
	alert(newweighttxt);
	alert(qtype);
	alert(evalstype);
	if(newareatxt == '' || newweighttxt == '')
	{
		document.getElementById('succnewa').innerHTML = '';
		$("#errnewa").text("Text field/s must not be blank").fadeIn(400, function()
		{
			$(this).fadeOut(5000);
		});
	}

	else
	{
		if(newweighttxt > weightnum1 || newweighttxt > weightnum2 || newweighttxt > weightnum3 || newweighttxt > weightnum4)
		{
			document.getElementById('succnewa').innerHTML = '';
			$("#errnewa").text("Area weight exceeded").fadeIn(400, function()
			{
				$(this).fadeOut(5000);
			});
		}
			
		else
		{
			$.ajax({
			url: '../assets/php/Maintenance/Evaluation/add-area.php',
			type: 'POST',
			data:
			{
				'add': 1,
				'newareatxt': newareatxt,
				'newweighttxt': newweighttxt,
				'evalstype': evalstype,
				'qtype': qtype
			},
			success: function(response)
			{
				if(response === 'Area name in the same evaluation and question type already exist')
				{
					document.getElementById('succnewa').innerHTML = '';
					$("#errnewa").text(response).fadeIn(400, function()
					{
						$(this).fadeOut(5000);
					});
				}
					
				else
				{
					if(evalstype == '1')
					{
						let totalw = parseFloat(weightnum1) - parseFloat(newweighttxt);
						$('#area1').val(totalw.toFixed(2));
						$('#newareatxt').val('');
						$('#newweighttxt').val('');
						$('#addedarea1').append(response);
					}

					else if(evalstype == '2')
					{
						let totalw = parseFloat(weightnum2) - parseFloat(newweighttxt);
						$('#area2').val(totalw.toFixed(2));
						$('#newareatxt').val('');
						$('#newweighttxt').val('');
						$('#addedarea2').append(response);
					}

					else if(evalstype == '3')
					{
						let totalw = parseFloat(weightnum3) - parseFloat(newweighttxt);
						$('#area3').val(totalw.toFixed(2));
						$('#newareatxt').val('');
						$('#newweighttxt').val('');
						$('#addedarea3').append(response);
					}

					else if(evalstype == '4')
					{
						let totalw = parseFloat(weightnum4) - parseFloat(newweighttxt);
						$('#area4').val(totalw.toFixed(2));
						$('#newareatxt').val('');
						$('#newweighttxt').val('');
						$('#addedarea4').append(response);
					}

					document.getElementById('errnewa').innerHTML = '';
					$("#succnewa").text("Area name added").fadeIn(400, function()
					{
						$(this).fadeOut(5000);
					});
				}
			}
		});
		}
	}
});
	//edit
	//delete
$(document).on('click', 'button[class="close quest addquest"]', function() //DELETE AREA
{
	if(confirm('Are you sure you want to delete the area?'))
	{
	var id = $(this).data('id');
	var evalstype = $(this).siblings('#evalstype').val();
	var weightvalue = $(this).siblings('#weightvalue').val();
	var weightnum1 = $('#area1').val();
	var weightnum2 = $('#area2').val();
	var weightnum3 = $('#area3').val();
	var weightnum4 = $('#area4').val();
	var $clicked = $(this);
	
	if(evalstype == '1')
	{
		let total = parseFloat(weightnum1) + parseFloat(weightvalue);
		var totalnum = total.toFixed(2);
		
		$.ajax({
		url: '../assets/php/Maintenance/Evaluation/add-area.php',
		type: 'GET',
		data:
		{
			'delete': 1,
			'id': id,
			'evalstype': evalstype,
			'totalnum': totalnum
		},
		success: function()
		{
			$('#area1').val(totalnum);
			$clicked.parent().parent().parent().parent().parent().parent().remove();
		}
	});
	}
	
	else if(evalstype === '002')
	{
		let total = parseFloat(weightnum2) + parseFloat(weightvalue);
		var totalnum = total.toFixed(2);
		
		$.ajax({
		url: 'assets/php/delete-area.php',
		type: 'GET',
		data:
		{
			'delete': 1,
			'id': id,
			'evalstype': evalstype,
			'totalnum': totalnum
		},
		success: function()
		{
			$('#area2').val(totalnum);
			$clicked.parent().parent().parent().parent().parent().parent().remove();
		}
	});
	}
	
	else if(evalstype === '003')
	{
		let total = parseFloat(weightnum3) + parseFloat(weightvalue);
		var totalnum = total.toFixed(2);
		
		$.ajax({
		url: 'assets/php/delete-area.php',
		type: 'GET',
		data:
		{
			'delete': 1,
			'id': id,
			'evalstype': evalstype,
			'totalnum': totalnum
		},
		success: function()
		{
			$('#area3').val(totalnum);
			$clicked.parent().parent().parent().parent().parent().parent().remove();
		}
	});
	}
	
		else if(evalstype === '004')
	{
		let total = parseFloat(weightnum4) + parseFloat(weightvalue);
		var totalnum = total.toFixed(2);
		
		$.ajax({
		url: 'assets/php/delete-area.php',
		type: 'GET',
		data:
		{
			'delete': 1,
			'id': id,
			'evalstype': evalstype,
			'totalnum': totalnum
		},
		success: function()
		{
			$('#area4').val(totalnum);
			$clicked.parent().parent().parent().parent().parent().parent().remove();
		}
	});
	}
	}
	else
	{
		
	}
});
	//update active
	//for peer
$(document).on('click', "input[name='for-evaltype']", function()
{
	var a = document.querySelector("input[name='for-evaltype']:checked").value;

	if(a == '2')
	{
		document.getElementsByName("answer-rate-type")[0].style.display = 'none';
		document.getElementById("label-peer").style.display = 'none';
		document.getElementsByName("answer-rate-type")[1].checked = true;
	}

	else
	{
		document.getElementsByName("answer-rate-type")[0].style.display = 'block';
		document.getElementById("label-peer").style.display = 'block';
	}
});

