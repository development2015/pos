$(function(){


    var input = $('#numpad');
    $('#btn button').on('click', function() {
        var value = $(this).val();
        input.val(input.val() + value);
    });

    $('.clear').on('click', function () {
        input.val('');
    }); 

    /*$('.numpad').keydown(function (e) {
        //alert(e.keyCode);
        var key = e.keyCode; 
        //alert(key);
        if (key == 55) {
          var a = $('.num7').val();
          alert(a);

        } else if(key == 49) {

        };

    }); */
    $('#numpad').focus(function(){
      $('.numpad').keydown(function (e) {
        var key = e.keyCode;
        var k = e.which;
        e.stopImmediatePropagation();
        if (key == 48 || key == 96) {
            $('.num0').trigger('click');
        } else if (key == 49 || key == 97) {
            $('.num1').trigger('click');
        } else if (key == 50 || key == 98) {
            $('.num2').trigger('click');
        } else if (key == 51 || key == 99) {
            $('.num3').trigger('click');
        } else if (key == 52 || key == 100) {
            $('.num4').trigger('click');
        } else if (key == 53 || key == 101) {
            $('.num5').trigger('click');
        } else if (key == 54 || key == 102) {
            $('.num6').trigger('click');
        } else if (key == 55 || key == 103) {
            $('.num7').trigger('click');
        } else if (key == 56 || key == 104) {
            $('.num8').trigger('click');
        } else if (key == 57 || key == 105) {
            $('.num9').trigger('click');
        } else if (key == 190) {
            $('.numPoint').trigger('click');
        } else if (key == 46) {
            $('.clear').trigger('click');
        };

      });



    });



    $(".plus").click(function(){
      val1 = $(this).parent().parent().parent().find('input')[0].value; 
      val2 = $(this).parent().parent().parent().find('input')[1].value; 
      //console.log('this is val1 : '+val1);
      //console.log('this is val2 : '+val2);
      
        var quantity = val1;
        var id = val2;
        var dataString = 'quantity='+ quantity + '&id='+ id ;

        $.ajax({
              type: "POST",
              url: "index.php?r=site%2Fquantity",
              data: dataString,
              success: function()
              {
                window.location.reload(true);
              }
        });

    });

    $(".minus").click(function(){
      val1 = $(this).parent().parent().parent().find('input')[0].value; 
      val2 = $(this).parent().parent().parent().find('input')[1].value; 
      //console.log('this is val1 : '+val1);
      //console.log('this is val2 : '+val2);
      
        var quantity = val1;
        var id = val2;
        var dataString = 'quantity='+ quantity + '&id='+ id ;

        $.ajax({
              type: "POST",
              url: "index.php?r=site%2Fquantity",
              data: dataString,
              success: function()
              {
                window.location.reload(true);

              }
        });

    });

    $(".enter").click(function(){
        var numpad = $(".numpad").val();
        var dataString = 'barcode='+ numpad;

        $.ajax({
              type: "POST",
              url: "index.php?r=site%2Fbarcode",
              data: dataString,
              success: function()
              {
                 window.location.reload(true);

              }
        });

    });

});


