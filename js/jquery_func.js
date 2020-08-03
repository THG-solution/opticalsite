var productContainer = $('#product-list-item'), loc = '', pgdata = '', gender = [], gen = [], shape = [], shp = [], material = [], mtrl = [], colour = [], clr = [], rim = [], rm = [], brand = [], brnd = []

// Variable Decalaration for Prescription Section
var lens_type = 'Single Vision', lens = 'Plastic', lens_price = 16; presc = 'later', coating = 'Basic', coating_price = 0;
var p_l = { sphere: '+15', cylinder: '+8', axis: 'none', add: 'none' };
var p_r = { sphere: '+15', cylinder: '+8', axis: 'none', add: 'none' };
var pd_l = 'none';
var pd_r = 'none';
var total_price = 0;
var presc_id = 0;
if (typeof variable === 'undefined') {
    var p_color_name;
}
alert(p_color_name)
// prd_price = <?php echo "{$price}"?>;

var productContainerIndex = $('#product-list-item-index')
let uri = $(location).attr("href")
$(window).on("load", function () {
    if (uri.includes('?q=err')) {
        $('#loginmodal').modal()
        $('#nv-pill .nav-item:last-child .nav-link').removeClass('active')
        $('.tab-content #create').removeClass('active show')
        $('#nv-pill .nav-item:first-child .nav-link').addClass('active')
        $('.tab-content #login').addClass('active show')
    }
    if (uri.includes('?q=pnc')) {
        $('#loginmodal').modal()
        $('#nv-pill .nav-item:first-child .nav-link').removeClass('active')
        $('.tab-content #login').removeClass('active show')
        $('#nv-pill .nav-item:last-child .nav-link').addClass('active')
        $('.tab-content #create').addClass('active show')
    }
    $('#' + $('#currency').text()).addClass('active')
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
    $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
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
    $('#sign-out').click(function () {
        window.location.replace('../includes/logout.php')
    })
    $('#dropdown-currency li').click(function () {
        $('#dropdown-currency li').removeClass('active')
        $('#symbol').text('')
        $('#currency').text($(this).text())
        $(this).addClass('active')
    });
    $("input[type='checkbox']").change(function () {
        if ($(this).attr('id') === 'gender') {
            gen = []
            if (this.checked) {
                gender.push($(this).val())
                for (let elements of gender.values()) {
                    gen.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                gender = gender.filter(el => el != $(this).val())
                for (let elements of gender.values()) {
                    gen.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
            }
        }
        else if ($(this).attr('id') === 'shape') {
            shp = []
            if (this.checked) {
                shape.push($(this).val())
                for (let elements of shape.values()) {
                    shp.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                shape = shape.filter(el => el != $(this).val())
                for (let elements of shape.values()) {
                    shp.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
            }
        }
        else if ($(this).attr('id') === 'material') {
            mtrl = []
            if (this.checked) {
                material.push($(this).val())
                for (let elements of material.values()) {
                    mtrl.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                material = material.filter(el => el != $(this).val())
                for (let elements of material.values()) {
                    mtrl.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
            }
        }
        else if ($(this).attr('id') === 'colour') {
            clr = []
            if (this.checked) {
                $(this).parent('.color-item').css('border-color', 'blue')
                colour.push($(this).val())
                for (let elements of colour.values()) {
                    clr.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                $(this).parent('.color-item').css('border-color', 'grey')
                colour = colour.filter(el => el != $(this).val())
                for (let elements of colour.values()) {
                    clr.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
            }
        }

        else if ($(this).attr('id') === 'rim') {
            rm = []
            if (this.checked) {
                rim.push($(this).val())
                for (let elements of rim.values()) {
                    rm.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm, function (response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                rim = rim.filter(el => el != $(this).val())
                for (let elements of rim.values()) {
                    rm.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm, function (response) {
                    productContainer.html(response)
                })
            }
        }

        else if ($(this).attr('id') === 'brand') {
            brnd = []
            if (this.checked) {
                brand.push($(this).val())
                for (let elements of brand.values()) {
                    brnd.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
            }
            else if (!this.checked) {
                brand = brand.filter(el => el != $(this).val())
                for (let elements of brand.values()) {
                    brnd.push("'" + elements + "'");
                }
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
            }
        }
    });
    $('li').click(function () {
        loc = $(this).attr('id')
        if ($(this).hasClass('currency_val'))
            if (uri.includes('index'))
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr, function (response) {
                    productContainer.html(response)
                })
            else
                $.get('includes/filt_product.php?to=' + loc + '&pgdata=' + pgdata + '&gender=' + gen + '&shape=' + shp + '&material=' + mtrl + '&colour=' + clr + '&rim=' + rm + '&brand=' + brnd, function (response) {
                    productContainer.html(response)
                })
    })
    $('img').click(function () {
        if ($(this).hasClass('im'))
            $('#main-image').attr('src', $(this).attr('src'))
    })

    $("a").hover(function () {
        if ($(this).hasClass('dropdown-toggle'))
            $(this).dropdown('toggle');
        $(this).css('color', 'black');
        $(this).mouseleave(function () {
            $(this).css('color', 'grey');
        })
    });
    $('div, ul').hover(function () {
        if ($(this).hasClass('dropdown-menu'))
            $(this).siblings('a').dropdown('toggle');
    })
    // $("a").mouseleave(function() {
    //     $(this).dropdown('toggle');
    // });

    // *--------------------------------- COLORS JQUERY IN PROD_DESC ---------------------------------*  
    color_name = $('.c-list').first().attr('id');

    $('.c-list').on('click', function () {
        color_name = $(this).attr('id');
        alert(color_name);

        $.get('update_color_image.php?div=banner&color=' + color_name + '&id=' + prd_id, function (response) {
            alert(response);
            $('#banner').html(response);
        });
        $.get('update_color_image.php?div=main&color=' + color_name + '&id=' + prd_id, function (response) {
            alert(response);
            $('#main_img').html(response);
        });

    })
    $('#select_lenses').on('click', function () {
        location.href = '../prescription.php?id=' + prd_id + '&color=' + color_name;
    });
    // *--------------------------------- END OF COLORS JQUERY IN PROD_DESC ---------------------------------*  


    // *--------------------------------- SELECTING THE LENS BOXES ---------------------------------*  
    $('.ls-type-box').on('click', function () {
        // if ($(this).hasClass("ls-type-box-focus")) {
        //     $(this).removeClass("ls-type-box-focus ");
        // }
        // else {
        $(this).siblings().removeClass("ls-type-box-focus ");
        $(this).addClass("ls-type-box-focus");
        var lsId = $(this).attr('id');

        switch (lsId) {
            case "Single Vision":
            case "Progressive No Line":
            case "Bifocals":
            case "Readers":
            case "Non-prescription":
                lens_type = lsId;
                // alert(lens_type);

                // Query to store the lens_type value in database
                break;

            case "ls-type-box-later":
                presc = 'later';
                // alert(presc);
                // Query to store the presc value in database

                break;

            case "ls-type-box-already":
                presc = 'already'
                p_l = { sphere: '', cylinder: '', axis: '', add: '' };
                p_r = { sphere: '', cylinder: '', axis: '', add: '' };
                pd_r = '';
                pd_l = '';
                // Query to retrive the prescription of the specific customer

                // Code to store retrive prescription in the prescription variables

                break;

            case "ls-type-box-yes":
                presc = 'yes'
                // Code to Store the values of tables in the variable
                p_r.sphere = $('#sphereR').children('option:selected').val();
                p_r.cylinder = $('#cylinderR').children('option:selected').val();
                p_r.axis = $('#axisR').children('option:selected').val();
                p_r.add = $('#addR').children('option:selected').val();
                p_l.sphere = $('#sphereL').children('option:selected').val();
                p_l.cylinder = $('#cylinderL').children('option:selected').val();
                p_l.axis = $('#axisL').children('option:selected').val();
                p_l.add = $('#addL').children('option:selected').val();
                // var pr=Object.values(p_r);
                // var pl=Object.values(p_l);
                // // alert(pr);
                // // alert(pl);

                // Query to Store the prescription data in the database

                break;

            case "Plastic CR-39":
            case "Polycarbonte":
            case "Thinner":
            case "Thinnest":
                lens = lsId;
                lens_price = $(this).find('.lns-price').text()
                alert(lens_price);
                total_price = +coating_price + prd_price + +lens_price;
                alert(total_price);
                // Add price to the above price to check the calculations
                $.get('includes/update_price_prescription.php?lp=' + lens_price, function (response) {
                    $('#lens-price').html(response)
                });
                $.get('includes/update_price_prescription.php?tp=' + total_price, function (response) {
                    $('#total-price').html(response)
                });

                break;
            case "Basic":
            case "Standard":
            case "Premium":
                coating = lsId;
                coating_price = $(this).find('.option_price').text()
                total_price = +prd_price + +lens_price + +coating_price;
                alert(coating_price);
                alert(total_price);
                $.get('includes/update_price_prescription.php?cp=' + coating_price, function (response) {
                    $('#coating-price').html(response)
                });
                $.get('includes/update_price_prescription.php?tp=' + total_price, function (response) {
                    $('#total-price').html(response)
                });
                // Add price to the above price to check the calculations

                break;
            default:
                break;
        }


        // }
    });
    // *--------------------------------- END OF SELECTING THE LENS BOXES ---------------------------------* 


    // *--------------------------------- SELECTING PR, PL AND PD-R, PD-L VALUES ---------------------------------* 
    $("select.presc-select").change(function () {
        var selectedPresc = $(this).children("option:selected").val();
        prescId = $(this).attr('id');
        switch (prescId) {
            case 'sphereR':
                p_r.sphere = selectedPresc;
                break;
            case 'cylinderR':
                p_r.cylinder = selectedPresc;
                break;
            case 'axisR':
                p_r.axis = selectedPresc;
                break;
            case 'addR':
                p_r.add = selectedPresc;
                break;
            case 'sphereL':
                p_l.sphere = selectedPresc;
                break;
            case 'cylinderL':
                p_l.cylinder = selectedPresc;
                break;
            case 'axisL':
                p_l.axis = selectedPresc;
                break;
            case 'select-pd-l':
                pd_l = selectedPresc;
                break;
            case 'select-pd-r':
                pd_r = selectedPresc;
                break;

        }
        var pr = Object.values(p_r);
        var pl = Object.values(p_l);
        alert(p_r.sphere);
        alert(p_l.sphere);

    });
    // *--------------------------------- END OF SELECTING PR, PL AND PD-R, PD-L VALUES ---------------------------------* 


    // *--------------------------------- NAVIGATING THORUGH MULTIPLES DIV ---------------------------------* 
    var First = 1;
    $('#child' + First).addClass('current');
    // on next click, add +1 to First, Second and Third
    $('#next').click(function () {
        if (!$('#child' + First).is(':last-child')) {
            $("#group div").removeClass('current');
            First++;
            $('#child' + First).addClass('current');
        }
        $("#choose_pd").removeClass('d-flex');
        // $(".ls-type-box").removeClass("ls-type-box-focus ");
    });
    $('#back').click(function () {

        if (!$('#child' + First).is(':first-child')) {
            $("#group div").removeClass('current');
            First--;
            $('#child' + First).addClass('current');
        }
        $("#choose_pd").removeClass('d-flex');
        // $(".ls-type-box").removeClass("ls-type-box-focus ");
    });
    // *--------------------------------- END OF NAVIGATING THORUGH MULTIPLES DIV ---------------------------------* 

    // *---------------------------------  REMOVING AND SHOWING PDs WHEN PDs RADIO BUTTON SELECTED ---------------------------------* 
    $("#noPD").on('click', function () {
        $('#pd-r').removeClass('d-flex');
        $('#pd-l').removeClass('d-flex');
    });
    $("#onePD").on('click', function () {
        $('#pd-r').addClass('d-flex');
        $('#pd-l').removeClass('d-flex');
    });
    $("#twoPDs").on('click', function () {
        $('#pd-r').addClass('d-flex');
        $('#pd-l').addClass('d-flex');
    });
    // *--------------------------------- END OF REMOVING AND SHOWING PDs WHEN PDs RADIO BUTTON SELECTED ---------------------------------* 

    // *--------------------------------- ADD TO CART FUNCTIONALITY ---------------------------------* 
    $('#add-cart-btn').mousedown(function () {
        if (session_email == 'empty') {
            alert('PLEASE LOGIN TO CONTINUE')

        }
        else {
            // Code for adding prescription
            switch (presc) {
                case 'later':
                    presc_id = 0;
                case 'already':
                    $.get({
                        url: 'includes/get_prescription.php?email=' + session_email,
                        success: function (response) {
                            presc_id = response;
                            $('#rs2').html('presc_id :' + presc_id)
                            // alert(presc_id + 'first');
                        },
                        async: false
                    });
                    break;
                case 'yes':
                    alert('done');
                    $.get('includes/insert_prescription.php?email=' + session_email +
                        '&pr_s=' + p_r.sphere + '&pr_c=' + p_r.cylinder + '&pr_ax=' + p_r.axis + '&pr_ad=' + p_r.add + '&pd_r=' + pd_r +
                        '&pl_s=' + p_l.sphere + '&pl_c=' + p_l.cylinder + '&pl_ax=' + p_l.axis + '&pl_ad=' + p_l.add + '&pd_l=' + pd_l, function (response) {
                            alert('done3');
                            $('#rs').html(response)
                        });
                    $.get({
                        url: 'includes/get_prescription.php?email=' + session_email,
                        success: function (response) {
                            presc_id = response;
                            $('#rs2').html('presc_id :' + presc_id)
                            // alert(presc_id + 'first');
                        },
                        async: false
                    });
                    break;
            }
        }
    });
    $('#add-cart-btn').mouseup(function () {
        if (session_email == 'empty') {
            alert('PLEASE LOGIN TO CONTINUE')
        }
        else {
            alert(presc_id + 'Second');
            $.get('includes/add_to_cart.php?email=' + session_email + '&id=' + prd_id + '&colour=' + p_color_name + '&lens_type=' + lens_type
                + '&lens=' + lens + '&coating=' + coating + '&prescription=' + presc + '&presc_id=' + presc_id + '&coating_price=' + coating_price + '&lens_price=' + lens_price, function (response) {
                    alert('done5');
                    $('#rs2').html(response)
                });
            location.href= 'cart.php';        
        }
    });
    // *--------------------------------- END OF ADD TO CART FUNCTIONALITY ---------------------------------* 

    // *--------------------------------- CHANGE TOTAL PRICE ON QTY CHANGE ---------------------------------* 
    
    $('.quantity').change(function(){
        var qty = $(this).val();
        
        if(typeof gtp !== undefined)
        {
            gtpqty =  +gtp * +qty;
        }
        // alert(+gtpqty)
        $(this).closest('.cart-text').find('.gtp').html(gtpqty)
        //  . nextAll('.qtp').html(gtpqty);
    })

    // *--------------------------------- END OF CHANGE TOTAL PRICE ON QTY CHANGE ---------------------------------* 
    

    $('#ls-type-box-yes').on('click', function () {

        $("#choose_pd").addClass('d-flex');

    });
    $('#ls-type-box-already, #ls-type-box-later').on('click', function () {
        $("#choose_pd").removeClass('d-flex');
    });

    $(".img-add").on("click", function () {
        $('#add-form').addClass('current');
        $.get('../includes/addform.php', function (response) {
            $('#adform').html(response)
        })
    })

    $("img").on("click", function () {
        if ($(this).hasClass("delete-icon")) {
            // alert($(this).attr('id'))
            window.location.replace('../includes/delete_product.php?id=' + $(this).attr('id'))
        }
    })


    $("img").on("click", function () {
        if ($(this).hasClass("edit-icon")) {
            $('#add-form').addClass('current');
            $.get('../includes/set_update_product.php?pid=' + $(this).attr('id'), function (response) {
                $('#adform').html(response)
            })
        }
    })
});
