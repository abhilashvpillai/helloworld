<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cost Estimator For Hosted PBX </title>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link type="text/css" href="style.css" rel="stylesheet" />
<script type="text/javascript" src="js/jspatch.js"></script>
<script src="js/jquery-1.7.2.js" type="text/javascript"></script>
<script src="js/jquery-ui-min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />

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
</script>


<script type="text/javascript">
//available update field by ajax
function showUser2()
{
    if(boolCheckNext) {
        $("#wrapper_area").hide(); //SUBMIT FORM
        $("#wrapper_area2").show(); //SUBMIT FORM
//        $("#tt_cost").html("$"+("#estimatedcost").val()+".00/month");
    }
}
</script>


<script type="text/javascript">
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


</head>

<body>

<!-- FIRST WINDOW -->

<form name="first_form" action="#" method="get" id="form_1_submit">
<div id="wrapper_area">


<div class="wrapper">
<div class="top_text"><span>Estimated cost for a Hosted PBX solution for your business</span></div>


<div id="inner_text_area">

<div class="ui_slider">

<span class="num_user">no of users</span>

<div id="label" class="user_no">Please slide !</div>
<div id="slider"></div>
</div>


<div class="data_connection">
<span class="data_title">Data Connection</span>

<div class="connection_options">


<div class="radio_inner">
<input type="radio" name="radiog_lite" id="radio1" class="css-checkbox" value="existing" checked="checked" />
<label for="radio1" class="css-label radGroup1 radGroup1">Use Existing<br />Internet (BYOB)</label></div>

<div class="radio_inner">
<input type="radio" name="radiog_lite" id="radio2" class="css-checkbox" value="dedicated"/>
<label for="radio2" class="css-label radGroup1 radGroup1">Dedicated Data for Voice<br /> (For Voice Quality/Security <br />Guarantee)</label></div>
</div>

<div class="optional_checkbox"><input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" />
<label for="checkboxG1" class="css-label radGroup1">Optional Add-on 4G/LTE - Backup Data<br />Connection For Voice</label></div>

<div class="total_cost">TOTAL ESTIMATED COST<span id="tot_cost">$0.00</span></div></div>


<div class="query_btn">
<input type="button" value="get a detailed quote now" name="submit"  onclick="showUser2()" /></div>


</div>


<div class="power_by"><img src="images/broadsoft.png" /></div>
<div class="" id="available_update2"></div>



<div class="clear"></div>
</div>
</div>

<!-- SECOND WINDOW -->

<div id="wrapper_area2" >
<div class="wrapper">
<div class="top_text"><span>Estimated cost for a Hosted PBX solution for your business</span></div>
<div class="total_cost_second">TOTAL ESTIMATED COST<span id="tt_cost">$0.00</span></div>
<div class="fill_info">please fill out the form below<br />so that we can send you the quote</div>

<div class="form_feilds" id="form_fields">
<input type="text" value="" name="name" id="name" placeholder="Your Name" class="input_feild" /> <!-- required -->
<input type="text" value="" name="company" id="company" placeholder="Company" class="input_feild"  /> <!-- required -->
<input type="text" value="" name="email" id="email" placeholder="Email Address" class="input_feild" /> <!-- required -->
<input type="text" value="" name="phone" id="phone" placeholder="Phone" class="input_feild form_extra_bottom" />
<input type="hidden" value="" name="numUser" id="numusers" />
<input type="hidden" value="" name="dedicatedData" id="dedicateddata" />
<input type="hidden" value="" name="optionalAddon" id="optionaladdon" />
<input type="hidden" value="" name="estimatedCost" id="estimatedcost" />
</div>

<div class="query_btn_second"><input type="button" value="send me the quote" name="submit" onclick="showUser3()" /></div>
<div class="power_by_second"><img src="images/broadsoft.png" /></div>

<div class="clear"></div>
</div>
</div>
</form>

<!-- THIRD WINDOW -->

<div id="wrapper_message">
<div class="wrapper">
    <div class="top_text"><span>Estimated cost for a Hosted PBX solution for your business</span></div>
    <span class="message_success" id="success_message">&nbsp;</span>
    <div class="power_by_message"><img src="images/broadsoft.png" /></div>
</div>
</div>
</body>
</html>