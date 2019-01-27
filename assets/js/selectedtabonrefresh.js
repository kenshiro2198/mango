$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
});

var activeTab = localStorage.getItem('activeTab');

console.log(activeTab);

if (activeTab) {
   $('a[href="' + activeTab + '"]').tab('show');
}