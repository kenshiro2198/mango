$('#save-report-btn').click(
    function()
    {
        window.scroll(0,0);
        
        $("#content").css("padding","60px 100px 60px 100px");
        $(".action-button-container").hide();
        
          var pdf = new jsPDF();
         pdf.addHTML($('#content')[0], function () {
          pdf.save('<instructor name> Guidance Evaluation.pdf');
         });    
         
    }
)


$('#print-report-btn').click(

    function()
    {
        window.print();
    }
)


