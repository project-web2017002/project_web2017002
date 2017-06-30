$(function(){

    $(':radio[id=company]').change(function(){
        $("#companytab").show('slow');
        $("#company-name").prop('required',true);
        $("#company-email").prop('required',true);
    });

    $(':radio[id=individual]').change(function(){
        $("#company-name").removeAttr('required');
        $("#company-email").removeAttr('required');
        $("#companytab").hide('slow');
    });

    $(':radio[id=free-adv]').change(function(){
        $("#diamondser").removeAttr('required');
        $("#premiumser").removeAttr('required');
        $("#paidadvtab").hide('slow');
        $("#freeadvtab").show('slow');
    });

    $(':radio[id=paid-adv]').change(function(){
        $("#diamondser").prop('required',true);
        $("#premiumser").prop('required',true);
        $("#freeadvtab").hide('slow');
        $("#paidadvtab").show('slow');
    });

    $('#ser-type').change(function(){
        $("#servicetitletab").show('slow');
    });

});