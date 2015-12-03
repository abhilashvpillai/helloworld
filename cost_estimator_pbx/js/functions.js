<script type="text/javascript">
var boolCheckName=false;
var boolCheckEmail=false;
var boolCheckPhone=false;
var boolCheckCompany=false;
var boolCheckNext=false;

//<![CDATA[
$(window).load(function(){
 $(function() {
    var totalCostArr = new Array( 0,30.00 ,60.00 ,90.00 ,100.00 ,125.00 ,150.00 ,175.00 ,200.00 ,225.00 ,220.00 ,242.00 ,264.00 ,286.00 ,308.00 ,330.00 ,352.00 ,374.00 ,396.00 ,418.00 ,400.00 ,420.00 ,440.00 ,460.00 ,480.00 ,500.00 ,520.00 ,540.00 ,560.00 ,580.00 ,600.00 ,620.00 ,640.00 ,660.00 ,680.00 ,700.00 ,720.00 ,740.00 ,760.00 ,780.00 ,800.00 ,820.00 ,840.00 ,860.00 ,880.00 ,900.00 ,920.00 ,940.00 ,960.00 ,980.00 ,1000.00 ,969.00 ,988.00 ,1007.00 ,1026.00 ,1045.00 ,1064.00 ,1083.00 ,1102.00 ,1121.00 ,1140.00 ,1159.00 ,1178.00 ,1197.00 ,1216.00 ,1235.00 ,1254.00 ,1273.00 ,1292.00 ,1311.00 ,1330.00 ,1278.00 ,1296.00 ,1314.00 ,1332.00 ,1350.00 ,1368.00 ,1386.00 ,1404.00 ,1422.00 ,1440.00 ,1458.00 ,1476.00 ,1494.00 ,1512.00 ,1530.00 ,1548.00 ,1566.00 ,1584.00 ,1602.00 ,1620.00 ,1638.00 ,1656.00 ,1674.00 ,1692.00 ,1710.00 ,1728.00 ,1746.00 ,1764.00 ,1782.00 ,1800.00 );
    var dedicatedDataArr = new Array(0, 50.00  ,50.00  ,50.00  ,50.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,60.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,150.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,250.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00  ,400.00 );
    var fourGLTE = 20;

    var numUsers, totalCost, boolDedicatedData, boolOptionalAddon, dataToSend;

    numUsers = 0;
    totalCost = 0;
    boolOptionalAddon = false;
    boolDedicatedData = false;


    $( "#slider" ).slider({
        range: "min",
        value:0,
        min: 0,
        max: 100,
        step: 1,
        slide: function( event, ui ) {
            $( "#days" ).val( ui.value );
            $("#label").html(ui.value);
            numUsers = ui.value;
            calculate();
            $("#tot_cost").html("$" + totalCost + ".00/month");
            $("#tt_cost").html("$" + totalCost + ".00/month");
            $( "#slider .ui-slider-range" ).css('background', '#2F3C71');
        }
    });

    numUsers = $("#slider").slider("value");
    $("#label").html(numUsers);
    $("#tot_cost").html("$" + totalCostArr[numUsers] + ".00/month");
    //  $("#label").html(labelArr[$( "#slider" ).slider( "value" )]);

    $("#radio1").on('click',function() {
       boolDedicatedData=false;

       $("#tot_cost").html("$" + totalCost + ".00/month");
       $("#tt_cost").html("$" + totalCost + ".00/month");
    });

    $("#radio2").on('click',function() {
       boolDedicatedData=true;
       calculate();
       $("#tot_cost").html("$" + totalCost + ".00/month");
       $("#tt_cost").html("$" + totalCost + ".00/month");
    });

    $("#checkboxG1").click(function() {
        if($(this).is(':checked'))
            boolOptionalAddon = true;
        else
            boolOptionalAddon = false;

        calculate();
        $("#tot_cost").html("$" + totalCost + ".00/month");
        $("#tt_cost").html("$" + totalCost + ".00/month");
    });


    function calculate() {
        if(numUsers>0) {
            totalCost = totalCostArr[numUsers];
            boolCheckNext=true;
            if(boolDedicatedData) {
                totalCost = totalCostArr[numUsers] + dedicatedDataArr[numUsers];
            }
            if(boolOptionalAddon) {
                totalCost += fourGLTE;
            }
        } else {
            totalCost = 0;
            boolCheckNext=false;
        }
        $("#numusers").val(numUsers);
        $("#dedicateddata").val(boolDedicatedData);
        $("#optionaladdon").val(boolOptionalAddon);
        $("#estimatedcost").val(totalCost);
    }

    $("#name").on('keyup keypress click focusout',function() {
        var iname = $.trim($("#name").val());
        if(iname==="" || iname.length<3) {
            $(this).css({"border":"1px solid red"});
            boolCheckName=false;
        } else {
            $(this).css({"border":"1px solid green"});
            boolCheckName=true;
        }
    });
    $("#company").on('keyup keypress click focusout',function() {
        if($.trim($("#company").val())==="") {
            $(this).css({"border":"1px solid red"});
            boolCheckCompany=false;
        } else {
            $(this).css({"border":"1px solid green"});
            boolCheckCompany=true;
        }
    });
     $("#email").on('keyup keypress click focusout',function() {
        var emailTest = $.trim($("#email").val());
        if(!IsEmail(emailTest)) {
            $(this).css({"border":"1px solid red"});
            boolCheckEmail=false;
        } else {
            $(this).css({"border":"1px solid green"});
            boolCheckEmail=true;
        }
    });
    $("#phone").on('keyup keypress click focusout',function() {
        var iPhone = $.trim($("#phone").val());
        if(!IsPhoneNum(iPhone)) {
            $(this).css({"border":"1px solid red"});
            boolCheckPhone=false;
        } else {
            $(this).css({"border":"1px solid green"});
            boolCheckPhone=true;
        }
    });

});
});
//]]>

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function IsPhoneNum(phone) {
    var intRegex = /[0-9 -()+]+$/;
    return intRegex.test(phone);
}

function checkAll() {
    if(IsEmail($.trim($("#email").val()))) {
        boolCheckEmail = true;
    }
    if(IsPhoneNum($.trim($("#phone").val()))) {
        boolCheckPhone=true;
    }
    if($.trim($("#name").val())!="") {
        boolCheckName=true;
    }
    if($.trim($("#company").val())!="") {
        boolCheckCompany=true;
    }
}

//available update field by ajax
function showUser2()
{
    if(boolCheckNext) {
        $("#wrapper_area").hide(); //SUBMIT FORM
        $("#wrapper_area2").show(); //SUBMIT FORM
//        $("#tt_cost").html("$"+("#estimatedcost").val()+".00/month");
    }
}

//available update field by ajax

function showUser3()
{
    checkAll();
    if(boolCheckName && boolCheckEmail && boolCheckCompany && boolCheckPhone) {
        $("#form_1_submit").submit(function(e) {

            dataToSend = $("#form_1_submit").serializeArray();
            $.ajax(
            {
                url : 'process.php',
                type: "GET",
                data : dataToSend,
                cache: false,
                success: function(response) {
                    $("#wrapper_area2").hide();
                    $("#wrapper_message").show();
                    $("#success_message").html("Thanks! We'll contact you with the estimate within 24 hours.");
                }
            });
            e.preventDefault();
            e.unbind();

        });

        $("#form_1_submit").submit();
    } else if(!boolCheckName) {
        $("#name").focus();
        return false;
    } else if(!boolCheckCompany) {
        $("#company").focus();
        return false;
    } else if(!boolCheckEmail) {
        $("#email").focus();
        return false;
    } else if(!boolCheckPhone) {
        $("#phone").focus();
        return false;
    }
}

</script>