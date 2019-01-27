/*view user modals*/

$("#studviewbtn").click(
    
    function() {
        $('.user-studentview-modal').modal({backdrop: 'static', keyboard: false})  
      
    }
    
)

$("#facultyviewbtn").click(
    
    function() {
        $('.user-facultyview-modal').modal({backdrop: 'static', keyboard: false})  
      
    }
    
)

$("#supervisorviewbtn").click(
    
    function() {
        $('.user-adminview-modal').modal({backdrop: 'static', keyboard: false})  
      
    }
    
)

$("#adminviewbtn").click(
    
    function() {
        $('.user-adminview-modal').modal({backdrop: 'static', keyboard: false})  
      
    }
    
)

/*view user modals*/

/*add user modals*/
$("#studaddbtn").click(
    
    function() {
        $('.user-addstudent-modal').modal({backdrop: 'static', keyboard: false}) 
    }
    
)

$("#facultyaddbtn").click(
    
    function() {
        $('.user-addfaculty-modal').modal({backdrop: 'static', keyboard: false}) 
    }
    
)

$(".adminaddbtn").click(
    
    function() {
        $('.user-addadmin-modal').modal({backdrop: 'static', keyboard: false}) 
    }
    
)



/*add user modals*/




var check = function() {
  if (document.getElementById('password-field-newpass').value ==
    document.getElementById('password-field-confpass').value) {
      
    document.getElementById('password-field-newpass').style.border = '1px solid rgb(27,195,0)';
    document.getElementById('password-field-confpass').style.border = '1px solid rgb(27,195,0)';  
      
      
  } 
    
    else if (document.getElementById('password-field-newpass').value == null||
    document.getElementById('password-field-confpass').value == null) {
      
    document.getElementById('password-field-newpass').style.border = '1px solid rgb(27,195,0)';
    document.getElementById('password-field-confpass').style.border = '1px solid rgb(27,195,0)';  
      
      
  } 
    
    
    else {
      
    document.getElementById('password-field-newpass').style.border = '1px solid rgb(195,0,0)';
    document.getElementById('password-field-confpass').style.border = '1px solid rgb(195,0,0)';
  }
}



$(".view-quest-btn").click(
    
    function() {
        $('.view-questions-modal').modal({backdrop: 'static', keyboard: false})
    }
    
)





$(".add-area-btn").click(
    
    
    function() {
        $('.new-area-modal').modal({backdrop: 'static', keyboard: false}) 
    }
    
)

$(".update-area-btn").click(
    
    function() {
        $('#update-area-modal').modal({backdrop: 'static', keyboard: false}) 
    }
    
)



$('#facultyloadbtn').click(
    function()
    {
         $('#faculty-loading-modal').modal({backdrop: 'static', keyboard: false}) 
    }
)

$(document).ready(function(){
    $('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 30,
    minTime: '7',
    maxTime: '5:00pm',
    defaultTime: '7',
    startTime: '7:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
});


$(document).ready(function() {
    $('#formCheck-23').change(function() {
        $('.hidden-monday').toggle();
    });
});

$(document).ready(function() {
    $('#formCheck-24').change(function() {
        $('.hidden-tuesday').toggle();
    });
});

$(document).ready(function() {
    $('#formCheck-25').change(function() {
        $('.hidden-wednesday').toggle();
    });
});


$(document).ready(function() {
    $('#formCheck-26').change(function() {
        $('.hidden-thursday').toggle();
    });
});

$(document).ready(function() {
    $('#formCheck-27').change(function() {
        $('.hidden-friday').toggle();
    });
});

$(document).ready(function() {
    $('#formCheck-28').change(function() {
        $('.hidden-saturday').toggle();
    });
});

/******************************************/

$('#asdqwe').floatThead({
	position: 'fixed'
});

