
$(function(){


//################################################################################################
// 1.3.3 Tabs   
$('#inhoud').tabs();
// eind scripts voor tabs

//################################################################################################
//  1.3.4.1 Retour

//verbogen "terug datum"
$('#terugdatum').hide(); 
$('#terugdatum').siblings().hide(); 
//end verbogen "terug datum"
//
    $('#retour').click(function () {
        if ($(this).is(':checked')) {
            $('#terugdatum').show();
            $('#terugdatum').siblings().show();
        } else {
            $('#terugdatum').hide();
            $('#terugdatum').siblings().hide();
        }
    });
 //   
 
 //################################################################################################
// 1.3.4.2 Opvullen keuzelijsten : Load of country list
 $.getJSON("php/ajax_json_countries.php",function(data,status){
      //console.log(status);
     //console.log(data);  
   var strHTML = "<option value=''>Kiez uw land van vertrek</option>";  
   $.each(data, function(i, field){       
       strHTML += "<option value='" + field.country_code + "'>"+field.country_name+"</option>";
    });
    $('#countries').html(strHTML);
  });
// End load of country list

//################################################################################################
// 1.3.4.2 Opvullen keuzelijsten : Load of airport list
 $('#countries').change(function(){
 $.getJSON("php/ajax_json_airports.php",{country_code:$('#countries').val()},function(data,status){
      //console.log(status);
     //console.log(data);  
    var strHTML = "<option value=''>Kiez uw luchthaven</option>";  
   $.each(data, function(i, field){       
       strHTML += "<option value='" + field.airport_code + "'>"+field.airport_name+"</option>";
    });
    $('#airports').html(strHTML);
  });
  
 });
// End load of airport list

 
 //################################################################################################
 // 1.3.4.3 Datumvelden
    $.datepicker.setDefaults({
        dateFormat: "yy-mm-dd",
        minDate:new Date(),
        maxDate:"+1y",        
        changeMonth: false,
        changeYear: false
    });
    
   $(".datum").datepicker({onClose:function(){ $(this).blur();}   });


//################################################################################################
 // 1.3.5 Formulier validatie
   if (jQuery().validate) {
        console.log("validate geladen");
    }
    else {
        console.log("validate NIET geladen");
    }
    
  $.validator.addMethod("LetterandNumbers", function (value, element) {
        return value.match(/^[^\W_]+$/);
    });
    
var $foutBoksen_frmVlucht = $('#fouten1');    
var $foutBoksen_frmCheckin  = $('#fouten2'); 

    
    
//#######################################################
// frmVlucht   
$("#frmVlucht").validate({   
        debug: true,
        rules: {
        vertrekdatum: {
        required: true,
        dateISO: true
            },
        terugdatum: { 
        required: "#retour:checked", 
        dateISO: true
         },            
        tickettype: {
        required: true    
        }
        },            
        messages: {
                vertrekdatum: {
                required: "Geef uw vertrek datum in, aub",
                dateISO: "de datum moet het formaat YYYY-MM-DD hebben" },
        terugdatum: {
                required: "Geef uw terug datum in, aub",
                dateISO: "de datum moet het formaat YYYY-MM-DD hebben" },
           
        tickettype: {
         required: "Geef uw ticket type, aub"   
        }
       },   
        errorContainer: $foutBoksen_frmVlucht,
        errorLabelContainer: $("ul", $foutBoksen_frmVlucht),
        wrapper: "li",
        submitHandler: function (form) {
        form.submit();
        }
    });//einde validator frmVlucht     
       
       
//#######################################################      
//alle dialoogvensters: instellingen
    $(".dialoogvenster").dialog({
        autoOpen: false,
        buttons: {
            "Ok": function () {
                $(this).dialog("close");
            }
        },
        modal: true,
        width: 600
    });
// de dialoog Button
    $('#dialog_link_boekingsreferentie')
            //.button({icons: {secondary: "ui-icon-help"}})
            .click(function (e) {
                e.preventDefault();
                $('#dialog_boekingsreferentie').dialog('open');
            });
    
//#######################################################
// frmCheckin 

  

    $("#frmCheckin").validate({   
        debug: true,
        rules: {
        boekingreferentie: {
        required: true,
        rangelength: [6, 6],
        LetterandNumbers: true
            },
        kredietkaartnummer: {
        required: true,
        creditcard: true
        },
        familienaam: {
        required: true    
        }
        },            
        messages: {
                boekingreferentie: {
                required: "Geef uw boekingreferentie in, aub",
                rangelength: "Boekingreferentie is 6 karakters",
                LetterandNumbers: "Enkel letters en cijfers"},
                kredietkaartnummer: {
                required: "Geef uw kredietkaartnummer in, aub",
                rangelength: "Geef een geldig kredietkaartnummer in, aub"
                },
                familienaam: { required: "Geef uw familienaam in, aub"}
            },
        errorContainer: $foutBoksen_frmCheckin,
        errorLabelContainer: $("ul", $foutBoksen_frmCheckin),
        wrapper: "li",
        submitHandler: function (form) {
        form.submit();
        }
    });//einde validator frmCheckin
    
    
  
   
//################################################################################################
 // 1.3.6 Slideshow
$('.allprent').slick({ autoplay: true, arrows: false, dots: false});  

    
    
});// einde doc.ready




