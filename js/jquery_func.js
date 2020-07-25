$(document).ready(function () {
    $(window).on( "load", function() {
        $('#'+$('#currency').text()).addClass('active')
    });
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
    var productContainer = $('#product-list-item'), gender = [], gen = [], shape = [], shp = [], material = [], mtrl = [], colour = [], clr = []
    $("input[type='checkbox']").change(function() {
        if ($(this).attr('id') === 'gender')
        {
            gen = []
            if (this.checked) {
                gender.push($(this).val())
                for (let elements of gender.values()) { 
                    gen.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                gender = gender.filter(el => el != $(this).val())
                for (let elements of gender.values()) { 
                    gen.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
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
                $.get('includes/filt_product.php?gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                shape = shape.filter(el => el != $(this).val())
                for (let elements of shape.values()) { 
                    shp.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
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
                $.get('includes/filt_product.php?gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                material = material.filter(el => el != $(this).val())
                for (let elements of material.values()) { 
                    mtrl.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
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
                $.get('includes/filt_product.php?gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                $(this).parent('.color-item').css('border-color', 'grey')
                colour = colour.filter(el => el != $(this).val())
                for (let elements of colour.values()) { 
                    clr.push("'"+ elements + "'");
                } 
                $.get('includes/filt_product.php?gender='+gen+'&shape='+shp+'&material='+mtrl+'&colour='+clr, function(response) {
                    productContainer.html(response)
                })
            }
        }
    });
    $('img').click(function() {
        $('#main-image').attr('src', $(this).attr('src'))
    })
    // $('#search-bar').focus(function() {
    //     $('#search-bar').css('width', '80%').fadeOut(2000), () => {
    //         $('#search-bar').css('display', 'block')
    //     };
    // });
    $("a").hover(function() {
        if ($(this).hasClass('dropdown-toggle'))
            $(this).dropdown('toggle');
    });
    $('div').hover(function() {
        if ($(this).hasClass('dropdown-menu'))
            $(this).siblings('a').dropdown('toggle');
    })
    // $("a").mouseleave(function() {
    //     $(this).dropdown('toggle');
    // });
});