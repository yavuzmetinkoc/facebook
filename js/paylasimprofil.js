$( document ).ready(function() {
    var $row = $('.paylasimgizli');
    var $rows = $('.paylasimgizli');
    $rows.hide();
    $row.hide();
    
    var aramaicerik = $("#paylasiminput").val();
    
    $paylasimicerik = $('#paylasimicerik');
    $paylasimalani = $('#paylasimalani');
    $paylasimsecenek = $('#paylasimsecenek');
    $paylasimgizli = $('.paylasimgizli');
    $exit = $('#exit');
    $exit.hide();
    $paylasimlar = $('#paylasimlar');

    $paylasimresim = $('.paylasimresim');

    $paylasimresim.on("click",function(){
        $('#paylasimresimdosya').trigger('click');
        $paylasimicerik.css({"height":"150px","background-color":"white","width":"500px"});
        $paylasimalani.css({"z-index":"1","position":"fixed","overflow":"auto","background-color":"rgb(0,0,0)","background-color":"rgba(0,0,0,0.4)","width":"100%","height":"100%","left":"0px","top":"0px","padding-top":"70px","padding-left":"400px"});
        $paylasimsecenek.css({"width":"500px"});
        $paylasimlar.css("margin-top","200px");
        $exit.show();
    });
    $('.gonderiolustur').on("click",function(){
        $paylasimicerik.css({"height":"150px","background-color":"white","width":"500px"});
        $paylasimalani.css({"z-index":"1","position":"fixed","overflow":"auto","background-color":"rgb(0,0,0)","background-color":"rgba(0,0,0,0.4)","width":"100%","height":"100%","left":"0px","top":"0px","padding-top":"70px","padding-left":"400px"});
        $paylasimsecenek.css({"width":"500px"});
        $paylasimlar.css("margin-top","200px");
        $exit.show();
    });

    $exit.on("click",function(){
        $('#paylasimalani').removeAttr("style");
        $('#paylasimsecenek').removeAttr("style");
        $('#paylasimicerik').removeAttr("style");
        $('body').removeAttr("style");
        $paylasimgizli.hide();
        $paylasimlar.css("margin-top","30px");
        $exit.hide();
    });



    $("#paylasiminput").on("focus",function(){
        $paylasimicerik.css({"height":"150px","background-color":"white","width":"500px"});
        $paylasimalani.css({"z-index":"1","position":"fixed","overflow":"auto","background-color":"rgb(0,0,0)","background-color":"rgba(0,0,0,0.4)","width":"100%","height":"100%","left":"0px","top":"0px","padding-top":"70px","padding-left":"410px"});
        $paylasimsecenek.css({"width":"500px"});
        $paylasimlar.css("margin-top","200px");
        $("body").css({"overflow":"hidden"});
        $exit.show();
    });
    
   
    if ($("#paylasiminput").val()==""){
            $row.hide();
        }
    });
    