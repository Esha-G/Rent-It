$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $.validator.addMethod("emailRegex", function(value, element) {
        return this.optional(element) || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/i.test(value);
    }, "Please enter valid Email");

    $.validator.addMethod("usernameRegex", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
    }, "Username must contain only letters, numbers");
    
    $.validator.addMethod("contactRegex", function(value, element) {
        return this.optional(element) || /^((\+){1}91){1}[1-9]{1}[0-9]{9}$/i.test(value);
    }, "Please enter valid contact number");

    $(".next").click(function(){

        
        //Mera input start
        var form = $("#msform");
        form.validate({
            errorElement: 'span',
			errorClass: 'help-block',
			highlight: function(element, errorClass, validClass) {
				$(element).parent('div').addClass("has-error");
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).parent('div').removeClass("has-error");
			},
            rules: {
                email: {
                    required: true,
                    emailRegex: true,
                    email: true,
                },
                username: {
                    required: true,
                    usernameRegex: true,
                    minlength: 2,
                    maxlength: 16
                },
                contactno: {
                    required: true,
                    contactRegex: true,
                },
                address: {
                    required: true,
                    minlength: 10,
                },
                productName: {
                    required: true,
                    minlength: 5
                },
                category: {
                    required: true,
                },
                shortDescription: {
                    required: true,
                    minlength: 10,
                    maxlength: 50
                },
                detailSpecification: {
                    required: true,
                    minlength: 10,
                    maxlength: 100
                },
                dayRent:{
                    required: true,
                },
                weekRent:{
                    required: true,
                },
                monthRent:{
                    required: true,
                },
                replaceCost:{
                    required: true,
                },
                productQuantity: {  
                    required: true,
                },

            },
            messages: {
                email: {
                    required: "Email is required",
                },
                username: {
                    required: "Username is required",
                },
                contactno: {
                    required: "Contact Number is required",
                },
                address: {
                    required: "Address is required",
                },
                productName: {
                    required: "Product Name is required",
                },
                category: {
                    required: "Please select a category",
                },
                shortDescription: {
                    required: "Please write some description about the product",
                },
                detailSpecification: {
                    required: "Please write the specifications of the product",
                },
                dayRent:{
                    required: "Please enter the Day Rent Amount",
                },
                weekRent:{
                    required: "Please enter the Week Rent Amount",
                },
                monthRent:{
                    required: "Please enter the Month Rent Amount",
                },
                replaceCost:{
                    required: "Please enter the Replacement Cost",
                },
                productQuantity: {  
                    required: "Please enter the Product Quantity",
                },
            }
            
        });
        if (form.valid() === true){
            if ($('#Owner-Details').is(":visible")){
                current_fs = $('#Owner-Details');
                next_fs = $('#Product-Details');
            }
            else if($('#Product-Details').is(":visible")){
                current_fs = $('#Product-Details');
                next_fs = $('#Rental-Details');
            }
            else if($('#Rental-Details').is(":visible")){
                current_fs = $('#Rental-Details');
                next_fs = $('#Success-Page');
            }
            
            next_fs.show(); 
            current_fs.hide();
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        }
        //mera input ends

        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                
                current_fs.css({
                'display': 'none',
                'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            },
            duration: 600
        });

        /*
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                
                current_fs.css({
                'display': 'none',
                'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            },
            duration: 600
        });*/
    });
    
    $(".previous").click(function(){

        if($('#Product-Details').is(":visible")){
            current_fs = $('#Product-Details');
            previous_fs = $('#Owner-Details');
        }
        else if ($('#Owner-Details').is(":visible")){
            current_fs = $('#Owner-Details');
            previous_fs = $('#Product-Details');
        }
        previous_fs.show(); 
        current_fs.hide();

        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        current_fs.animate({opacity: 0}, {
            step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;
            
            current_fs.css({
            'display': 'none',
            'position': 'relative'
            });
            previous_fs.css({'opacity': opacity});
            },
            duration: 600
        });

        /*
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
        
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;
        
        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        previous_fs.css({'opacity': opacity});
        },
        duration: 600
        });*/
    });
    
    $('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
    return false;
    })
});