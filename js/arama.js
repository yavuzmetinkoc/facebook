$( document ).ready(function() {
    var $row = $('#aramabutonicerik');
    var $rows = $('#aramabutonicerik #aranacakicerik');
    $rows.hide();
    $row.hide();
    
    var aramaicerik = $("#search").val();
    
    $('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    $rows.show().filter(function() {
        $row.show();
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
        
    }).hide();
    if ($("#search").val()==""){
            $row.hide();
        }
    });
    
    });