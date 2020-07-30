var productContainer = $('#product-list-item'), loc = '', pgdata = '', gender = [], gen = [], shape = [], shp = [], material = [], mtrl = [], colour = [], clr = []
var productContainerIndex = $('#product-list-item-index')
let uri = $(location).attr("href")
$(window).on( "load", function() {
    if(uri.includes('?q=err'))
    {
        $('#loginmodal').modal()
        $('#nv-pill .nav-item:last-child .nav-link').removeClass('active')
        $('.tab-content #create').removeClass('active show')
        $('#nv-pill .nav-item:first-child .nav-link').addClass('active')
        $('.tab-content #login').addClass('active show')
    }
    $('#'+$('#currency').text()).addClass('active')
    if (uri.includes('mens_frame'))
        pgdata = 'meneye'
    else if (uri.includes('mens_sunglass'))
        pgdata = 'mensunglass'
    else if (uri.includes('mens_allglass'))
        pgdata = 'menall'
    if (uri.includes('womens_frame'))
        pgdata = 'womeneye'
    else if (uri.includes('womens_sunglass'))
        pgdata = 'womensunglass'
    else if (uri.includes('womens_allglass'))
        pgdata = 'womenall'
    $.get('includes/filt_product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
        productContainer.html(response)
    })
});
$(document).ready(function () {
    $('#sign-in').click(function () {
        $('#loginmodal').modal()
        $('#nv-pill .nav-item:last-child .nav-link').removeClass('active')
        $('.tab-content #create').removeClass('active show')
        $('#nv-pill .nav-item:first-child .nav-link').addClass('active')
        $('.tab-content #login').addClass('active show')
    });
    $('#sign-up').click(function () {
        $('#loginmodal').modal()
        $('#nv-pill .nav-item:first-child .nav-link').removeClass('active')
        $('.tab-content #login').removeClass('active show')
        $('#nv-pill .nav-item:last-child .nav-link').addClass('active')
        $('.tab-content #create').addClass('active show')
    });
    $('#dropdown-currency li').click(function (){
        $('#dropdown-currency li').removeClass('active')
        $('#symbol').text('')
        $('#currency').text($(this).text())
        $(this).addClass('active')
    });
    $("input[type='checkbox']").change(function() {
        if ($(this).attr('id') === 'gender')
        {
            gen = []
            if (this.checked) {
                gender.push($(this).val())
                for (let elements of gender.values()) { 
                    gen.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                gender = gender.filter(el => el != $(this).val())
                for (let elements of gender.values()) { 
                    gen.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
        }
        else if ($(this).attr('id') === 'shape')
        {
            shp = []
            if (this.checked) {
                shape.push($(this).val())
                for (let elements of shape.values()) { 
                    shp.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                shape = shape.filter(el => el != $(this).val())
                for (let elements of shape.values()) { 
                    shp.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
        }
        else if ($(this).attr('id') === 'material')
        {
            mtrl = []
            if (this.checked) {
                material.push($(this).val())
                for (let elements of material.values()) { 
                    mtrl.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                material = material.filter(el => el != $(this).val())
                for (let elements of material.values()) { 
                    mtrl.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
        }
        else if ($(this).attr('id') === 'colour')
        {
            clr = []
            if (this.checked) {
                $(this).parent('.color-item').css('border-color', 'blue')
                colour.push($(this).val())
                for (let elements of colour.values()) { 
                    clr.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                $(this).parent('.color-item').css('border-color', 'grey')
                colour = colour.filter(el => el != $(this).val())
                for (let elements of colour.values()) { 
                    clr.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
        }
    });
    $('li').click(function() {
        loc = $(this).attr('id')
        if ($(this).hasClass('currency_val'))
            if (uri.includes('index'))
                $.get('includes/product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            else 
                $.get('includes/filt_product.php?to='+loc+'&pgdata='+pgdata+'&gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
    })
    $('img').click(function() {
        if ($(this).hasClass('im'))
            $('#main-image').attr('src', $(this).attr('src'))
    })

    $("a").hover(function() {
        if ($(this).hasClass('dropdown-toggle'))
            $(this).dropdown('toggle');
            $(this).css('color', 'black');
            $(this).mouseleave(function() {
                $(this).css('color', 'grey');
            })
    });
    $('div, ul').hover(function() {
        if ($(this).hasClass('dropdown-menu'))
            $(this).siblings('a').dropdown('toggle');
    })
    $('.ls-type-box').on('click', function() {
        if($(this).hasClass("ls-type-box-focus"))
        {
            $(this).removeClass("ls-type-box-focus ");
        }
        else
        {
            $(".ls-type-box").removeClass("ls-type-box-focus ");
            $(this).addClass("ls-type-box-focus");

        }
    });

// *--------------------------------- NAVIGATING THORUGH MULTIPLES DIV ---------------------------------* 
    var First = 1;    
    $('#child'+First).addClass('current');
    // on next click, add +1 to First, Second and Third
    $('#next').click(function(){
        if( !$('#child'+First).is(':last-child') ) {
            $("#group div").removeClass('current');
            First++;
            $('#child'+First).addClass('current');
        }
    });
    $('#back').click(function(){
        
        if( !$('#child'+First).is(':first-child') ) {
            $("#group div").removeClass('current');
            First--;
            $('#child'+First).addClass('current');
        }
    });
// *--------------------------------- END OF NAVIGATING THORUGH MULTIPLES DIV ---------------------------------* 

    $(".img-add").on("click", function (){
        $('#add-form').addClass('current');
        $.get('../includes/addform.php', function(response) {
            $('#adform').html(response)
        })
    })

    $("img").on("click", function() {
        if ($(this).hasClass("delete-icon")){
            // alert($(this).attr('id'))
            window.location.replace('../includes/delete_product.php?id='+$(this).attr('id'))
        }
    })

    $("img").on("click", function() {
        if ($(this).hasClass("edit-icon")){
            $('#add-form').addClass('current');
            $.get('../includes/set_update_product.php?pid='+$(this).attr('id'), function(response) {
                $('#adform').html(response)
            })
            // window.location.replace('../includes/delete_product.php?id='+$(this).attr('id'))
        }
    })
});
