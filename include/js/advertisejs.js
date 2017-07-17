$(function(){

    //prevent from entering characters and special characters
    $("#cost").keydown(function(e){
        if(!((e.which > 47 && e.which < 58) || (e.which > 95 && e.which < 106) || e.which == 9 || e.which == 8 || e.which == 46)){
            e.preventDefault();
        }
    });

    $("#user-name").keydown(function(e){
        if((e.which > 47 && e.which < 58) || (e.which > 95 && e.which < 106)){
            e.preventDefault();
        }
    });

    $("#user-contact").keydown(function(e){
        if(!((e.which > 47 && e.which < 58) || (e.which > 95 && e.which < 106) || e.which == 9 || e.which == 8 || e.which == 46)){
            e.preventDefault();
        }
    });

    $(':radio[id=company]').change(function(){
        $("#companytab").show();
    });
    $(':radio[id=individual]').change(function(){
        $("#companytab").hide();
    });

    $(':radio[id=free-adv]').change(function(){
        $("#paidadvtab").hide();
        $("#freeadvtab").show();
    });
    $(':radio[id=paid-adv]').change(function(){
        $("#freeadvtab").hide();
        $("#paidadvtab").show();
    });

    $('#ser-type').change(function(){
        $("#servicetitletab").show();
    });

    $(':radio[id=Sell]').change(function(){
        $("#buyhometab").hide();
        $("#renthometab").hide();
        $("#sellhometab").show();
    });
    $(':radio[id=Buy]').change(function(){
        $("#renthometab").hide();
        $("#sellhometab").hide();
        $("#buyhometab").show();
    });

    $(':radio[id=Rent]').change(function(){
        $("#buyhometab").hide();
        $("#sellhometab").hide();
        $("#renthometab").show();
    });

    $(':radio[id=car-sell]').change(function(){
        $("#sellcartab").show();
    });
    $(':radio[id=car-buy]').change(function(){
        $("#sellcartab").hide();
    });

    $(':radio[id=bike-sell]').change(function(){
        $("#sellbiketab").show();
    });
    $(':radio[id=bike-buy]').change(function(){
        $("#sellbiketab").hide();
    });

    $("#education-type").on('change',function(){
        if( this.value == "Other" ) {
            $("#otherEducationtab").show();
        }else{
            $("#otherEducationtab").hide();
        }
    });

    $('#event-type').on('change', function () {
        if (this.value == 'Event Management') {
            $("#management-event-tab").show();
            $("#live-event-tab").hide();
        } else if(this.value == 'Live Event') {
            $("#management-event-tab").hide();
            $("#live-event-tab").show();
        }else{
            $("#management-event-tab").hide();
            $("#live-event-tab").hide();
        }
    });

    $("#management-event-ser-type").on('change',function(){
        if (this.value == "Other"){
            $("#OtherEventServiceTab").show();
        }else{
            $("#OtherEventServiceTab").hide();
        }
    });

    $("#live-event-ser-type").on('change',function(){
        if (this.value == "Other"){
            $("#OtherEventServiceTab").show();
        }else{
            $("#OtherEventServiceTab").hide();
        }
    });

    $("#mobiles-condition").on('change',function(){
        if (this.value == "Used"){
            $("#usedmobiletab").show();
        }else{
            $("#usedmobiletab").hide();
        }
    });

    $("#electronics-subcategory").on('change',function(){
        if (this.value == "Other"){
            $("#electronicsothertab").show();
        }else{
            $("#electronicsothertab").hide();
        }
    });

    $("#elect-condition").on('change',function(){
        if (this.value == "Used"){
            $("#usedelectronicstab").show();
        }else{
            $("#usedelectronicstab").hide();
        }
    });

    $("#homelife-condition").on('change',function(){
        if (this.value == "Used"){
            $("#usedhomelifetab").show();
        }else{
            $("#usedhomelifetab").hide();
        }
    });

    $("#home-cat").on('change',function(){
        if (this.value == "Furniture & Decoration"){
            $("#furnituretab").show();
            $("#fashiontab").hide();
            $("#otherhomenlifetab").hide();
            $("#kidstab").hide();
            $("#sportstab").hide();
        }else if(this.value == "Kids & Toys"){
            $("#furnituretab").hide();
            $("#fashiontab").hide();
            $("#otherhomenlifetab").hide();
            $("#kidstab").show();
            $("#sportstab").hide();
        }else if(this.value == "Sports, Books & Hobbies"){
            $("#furnituretab").hide();
            $("#fashiontab").hide();
            $("#otherhomenlifetab").hide();
            $("#kidstab").hide();
            $("#sportstab").show();
        }else if(this.value == "Fashion"){
            $("#furnituretab").hide();
            $("#fashiontab").show();
            $("#otherhomenlifetab").hide();
            $("#kidstab").hide();
            $("#sportstab").hide();
        }else if(this.value == "Other"){
            $("#furnituretab").hide();
            $("#fashiontab").hide();
            $("#otherhomenlifetab").show();
            $("#kidstab").hide();
            $("#sportstab").hide();
        }else{
            $("#furnituretab").hide();
            $("#fashiontab").hide();
            $("#otherhomenlifetab").hide();
            $("#kidstab").hide();
            $("#sportstab").hide();
        }
    });
});