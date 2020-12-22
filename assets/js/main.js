$(document).ready(function() {

    $('#subscribeBtn').click(function() {
        alert('Hvala Vam što ste se prijavili na naš newsletter.');
    });

    // banner owl carousel
    $('#banner-area .owl-carousel').owlCarousel({
        loop: true,
        dots: true,
        nav: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    // latest owl carousel
    $('#latest .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: true,
        responsive: {
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

    // outlet owl carousel
    $('#outlet .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: true,
        responsive: {
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

    // blog owl carousel
    $('#blog-area .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $(".product_check").click(function() {
        $("#loader").show();

        var action = 'data';
        // var minimum_price = $('#hidden_minimum_price').val();
        // var maximum_price = $('#hidden_maximum_price').val();
        var price = get_filter_text('price');
        var color = get_filter_text('color');
        var size = get_filter_text('size');

        $.ajax({
            url:'action.php',
            method:'POST',
            data:{action:action, /* minimum_price:minimum_price, maximum_price:maximum_price,*/price:price, color:color, size:size},
            success:function(response){
                $('#result').html(response);
                $('#loader').hide();
            }
        });
    });

    function get_filter_text(text_id) {
        var filterData = [];
        $('#'+text_id+':checked').each(function(){
            filterData.push($(this).val());
        });
        return filterData;
    }

    /* $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loader" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var size = get_filter('size');
        var color = get_filter('color');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, size:size, color:color},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    
    /* $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    }); 
    $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        value:[1000,65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    }); */
});