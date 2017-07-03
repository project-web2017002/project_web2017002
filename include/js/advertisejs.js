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

    $(':radio[id=Sell]').change(function(){
        $("#buyhometab").hide();
        $("#renthometab").hide();
        $("#sellhometab").show('slow');
        $(".home-sell-type").each(function(){
            $(".home-sell-type").prop('required',true);
        });
        $(".home-rent-type").each(function(){
            $(".home-rent-type").removeAttr('required');
        });
        $(".home-buy-type").each(function(){
            $(".home-buy-type").removeAttr('required');
        });
    });

    $(':radio[id=Buy]').change(function(){
        $("#renthometab").hide();
        $("#sellhometab").hide();
        $("#buyhometab").show('slow');
        $(".home-buy-type").each(function(){
            $(".home-buy-type").prop('required',true);
        });
        $(".home-rent-type").each(function(){
            $(".home-rent-type").removeAttr('required');
        });
        $(".home-sell-type").each(function(){
            $(".home-sell-type").removeAttr('required');
        });
    });

    $(':radio[id=Rent]').change(function(){
        $("#buyhometab").hide();
        $("#sellhometab").hide();
        $("#renthometab").show('slow');
        $(".home-rent-type").each(function(){
            $(".home-rent-type").prop('required',true);
        });
        $(".home-sell-type").each(function(){
            $(".home-sell-type").removeAttr('required');
        });
        $(".home-buy-type").each(function(){
            $(".home-buy-type").removeAttr('required');
        });
    });

    $(':radio[id=car-sell]').change(function(){
        $("#sellcartab").show();
        $("#car-driven").prop('required',true);
    });

    $(':radio[id=car-buy]').change(function(){
        $("#sellcartab").hide();
        $("#car-driven").removeAttr('required');
    });

    $(':radio[id=bike-sell]').change(function(){
        $("#sellbiketab").show();
        $("#bike-driven").prop('required',true);
    });

    $(':radio[id=bike-buy]').change(function(){
        $("#sellbiketab").hide();
        $("#bike-driven").removeAttr('required');
    });

    $("#education-type").on('change',function(){
        if( this.value == "Other" ) {
            $("#otherEducationtab").show();
            $("#other-edu-val").prop('required',true);
        }else{
            $("#otherEducationtab").hide();
            $("#other-edu-val").removeAttr('required');
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