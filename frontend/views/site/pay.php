<!DOCTYPE html>
<html>
<head>
<input type="hidden" name="subtotal" class="subtotal" value="<?php echo $sum; ?>">
<script src="/pos/frontend/web/assets/498b0cb3/jquery.js"></script>
<script>
$(document).ready(function(){
    var input = $('#numpad_modal');
    $('#btnmodal button').on('click', function() {
        var value = $(this).val();
        input.val(input.val() + value);
    });

    $('.clear_modal').on('click', function () {
        input.val('');
    }); 

    $('#numpad_modal').focus(function(){
      $('.numpad_modal').keydown(function (e) {
        var key = e.keyCode;
        var k = e.which;
        e.stopImmediatePropagation();
        if (key == 48 || key == 96) {
            $('.num0_modal').trigger('click');
        } else if (key == 49 || key == 97) {
            $('.num1_modal').trigger('click');
        } else if (key == 50 || key == 98) {
            $('.num2_modal').trigger('click');
        } else if (key == 51 || key == 99) {
            $('.num3_modal').trigger('click');
        } else if (key == 52 || key == 100) {
            $('.num4_modal').trigger('click');
        } else if (key == 53 || key == 101) {
            $('.num5_modal').trigger('click');
        } else if (key == 54 || key == 102) {
            $('.num6_modal').trigger('click');
        } else if (key == 55 || key == 103) {
            $('.num7_modal').trigger('click');
        } else if (key == 56 || key == 104) {
            $('.num8_modal').trigger('click');
        } else if (key == 57 || key == 105) {
            $('.num9_modal').trigger('click');
        } else if (key == 190) {
            $('.numPoint_modal').trigger('click');
        } else if (key == 46) {
            $('.clear_modal').trigger('click');
        };

      });

    });

    $('.proses_modal').on('click', function () {
        var cash = $(".numpad_modal").val();
        var subtotal = $(".subtotal").val();


        var sum = cash - subtotal;

        $('span.cash').html(cash);
        $('span.total').html((sum).toFixed(2));

    }); 

    

});
</script>



<div class="portlet-body">
    <input type="text" class="form-control input-lg numpad_modal" id="numpad_modal" readonly="readonly">

    <br>

    <style type="text/css">

    #size {
        width: 50px;
        height: 50px;
    }

    #size0 {
        width: 108px;
        height: 50px;
    }

    </style>
    <div id="btnmodal">
        <button type="button" id="size" value="7" class="btn btn-default num7_modal">7</button>
        <button type="button" id="size" value="8" class="btn btn-default num8_modal">8</button>
        <button type="button" id="size" value="9" class="btn btn-default num9_modal">9</button>
        <button type="button" id="size" class="btn btn-default clear_modal">C</button>
        <br><br>
        <button type="button" id="size" value="4" class="btn btn-default num4_modal">4</button>
        <button type="button" id="size" value="5" class="btn btn-default num5_modal">5</button>
        <button type="button" id="size" value="6" class="btn btn-default num6_modal">6</button>
        <button type="button" id="size" value="." class="btn btn-default numPoint_modal">.</button>
        <br><br>
        <button type="button" id="size" value="1" class="btn btn-default num1_modal">1</button>
        <button type="button" id="size" value="2" class="btn btn-default num2_modal">2</button>
        <button type="button" id="size" value="3" class="btn btn-default num3_modal">3</button>

        <br><br>
        <button type="button" id="size" value="0" class="btn btn-default num0_modal">0</button>
        <button type="button" id="size0" class="btn btn-default proses_modal">Proses</button>
    </div>
</div>
