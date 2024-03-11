jQuery(document).ready(function($)
{
    $('#loading').hide();
    $('#accordion_btn').on("click", function (e) {
        document.querySelector('._141-open-button-wrapper').style.zIndex = "0";
        document.body.insertAdjacentHTML('beforeend', "<div style='position: fixed; width: 100%; height: 100%; z-index: 300;left: 0; top: 0;' id='overlay-temp'></div>");
        $("#overlay-temp").click(function () {
            document.querySelector('._141-close-button-wrapper').click();
        })
    })

    $('._141-close-button-wrapper').on('click', function () {
        setTimeout(() => {  document.querySelector('._141-open-button-wrapper').style.zIndex = "300"; }, 800);
        $("#overlay-temp").remove();
    })

    $(document).on("click","#send_otp",function(e2)
    {
        email = $("#sa_email").val();
        if( email.length<1 )
        {
            toastr.error("Please enter your email");
        }
        else
        {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            is_email = regex.test(email);
            if(!is_email)
            {
                toastr.error("Please enter a valid email");
            }
            else
            {   
                $('#loading').show();
                $.ajax({
                    type: "POST",
                    url: "function.php",
                    data:
                    {
                        action : 'send-otp',
                        sa_email : email
                    },
                    success: function(response)
                    {
                        $('#loading').hide();
                        data = JSON.parse(response);
                        if (data.status == 201)
                        {
                            toastr.success(data.message);
                            $(".step-1").hide();
                            $(".step-2").hide();
                            window.location.href = "../login.php";
                            // $("#step-3").show();
                            // $("#progressbar>li").addClass("active");
                        }
                        else if (data.status == 200)
                        {
                            toastr.success(data.message);
                            $(".shop_assistant_email_input").addClass("d-none");
                            $(".otp-verification").removeClass("d-none");
                            $("#verify_btn").removeClass("d-none");
                            $("#send_otp").addClass("d-none");
                            $("#step_1_msg").addClass("d-none");
                            $("#otp_response").val(data.data);
                            // setTimeout(
                            //     function() {
                            //         window.location.reload();
                            //     }, 1500);
                        }
                        else
                        {
                            toastr.error(data.message);
                            setTimeout(
                                function()
                                {
                                    window.location.reload();
                                },
                            1500);
                            // $(".shop_assistant_email_input").addClass("d-none");
                            // $(".otp-verification").removeClass("d-none");
                            // $("#verify_btn").removeClass("d-none");
                            // $("#send_otp").addClass("d-none");
                            // $("#step_1_msg").addClass("d-none");
                            // $("#otp_response").val(data.data);
                        }
                        //console.log(data);
                    }
                });
            }
        }
    });
    $(document).on("change","#last_digit",function(e3)
    {
        last_digit = $("#last_digit").val();
        third_digit = $("#last_digit").prev().val();
        second_digit = $("#last_digit").prev().prev().val();
        first_digit = $("#last_digit").prev().prev().prev().val();

        entered_otp = first_digit+second_digit+third_digit+last_digit;
        otp_response = $("#otp_response").val();

        if(entered_otp != otp_response)
        {
            toastr.error("Verification code does not match. Please reenter!");
        }
        else
        {
            toastr.success("Congratulations! Your email has been verified.");
            $("#verify_btn").addClass("d-none");
            $(".step1-btn").removeClass("d-none");
            $("#confirmation-text").text("Congratulations! Your email has been verified.");
        }
    });

    $(document).on("click","#verify_btn",function(e3)
    {
        last_digit = $("#last_digit").val();
        third_digit = $("#last_digit").prev().val();
        second_digit = $("#last_digit").prev().prev().val();
        first_digit = $("#last_digit").prev().prev().prev().val();

        entered_otp = first_digit+second_digit+third_digit+last_digit;
        otp_response = $("#otp_response").val();

        if(entered_otp != otp_response)
        {
            toastr.error("Verification code does not match. Please re-enter!");
        }
        else
        {
            toastr.success("Congratulations! Your email has been verified.");
            $("#verify_btn").addClass("d-none");
            $(".step1-btn").removeClass("d-none");
        }
    });

    $(document).on("click","#sa_sign_up",function(e)
    {
        if( $("#sa_user_name").val().length == 0 )
        {
            toastr.error("Please enter your name");
            return false;
        }
        if( $("#sa_user_phone_no").val().length == 0 )
        {
            toastr.error("Please enter your phone");
            return false;
        }
        if( $("#sa_username").val().length == 0 )
        {
            toastr.error("Please enter your preferred username");
            return false;
        }
        if( $("#sa_password").val().length == 0 )
        {
            toastr.error("Please enter your password");
            return false;
        }
        if( $("#sa_cpassword").val() != $("#sa_password").val() )
        {
            toastr.error("Confirm password does not match!");
            return false;
        }
        if( $("#sa_street_address").val().length == 0 )
        {
            toastr.error("Please enter your street address");
            return false;
        }
        if( $("#sa_city").val().length == 0 )
        {
            toastr.error("Please enter your city");
            return false;
        }
        if( $("#sa_country").val().length == 0 )
        {
            toastr.error("Please choose your country");
            return false;
        }
        if( $("#sa_zipcode").val().length == 0 )
        {
            toastr.error("Please enter your city zipcode");
            return false;
        }
        else
        {   
            
            zipcode = $("#sa_zipcode").val();
            zip_len = zipcode.length;
            $('#loading').show();
            $.ajax({
                url  : 'https://maps.googleapis.com/maps/api/geocode/json?address='+zipcode+'&sensor=true&key=AIzaSyD6zLsfMk3jv6bydjtXy5hXxk7nD-y-rzg',
                success : function( data, state, state_shortname) 
                {   
                    $('#loading').hide();
                    try
                    {
                        if( zip_len < 6 )
                        {
                            state = data.results[0]['address_components'][4].long_name;
                            state_shortname = data.results[0]['address_components'][4].short_name;
                            
                            console.log(state);
                            console.log(state_shortname);
                        }
                        else
                        {
                            state = data.results[0]['address_components'][4].long_name;
                            state_shortname = data.results[0]['address_components'][4].short_name;
                            
                            console.log(state);
                            console.log(state_shortname);
                        }
                        if(typeof state === "undefined" && state == '' && typeof state_shortname === "undefined" && state_shortname == '')
                        {
                            $(".sa_zipcode").val("");
                            toastr.error("Please enter a valid zipcode");
                            return false;
                        }
                        else
                        {
                            $.ajax({
                                type: "POST",
                                url: "function.php",
                                data:
                                {
                                    action : 'validate-username',
                                    name : $("#sa_user_name").val(),
                                    username : $("#sa_username").val(),
                                    password : $("#sa_password").val(),
                                    country_code : $("#sa_user_phone_no").intlTelInput("getSelectedCountryData").dialCode,
                                    phone : $("#sa_phone").val(),
                                    email : $("#sa_email").val(),
                                    street_address : $("#sa_street_address").val(),
                                    city : $("#sa_city").val(),
                                    country : $("#sa_country").val(),
                                    zipcode : $("#sa_zipcode").val(),
                                    state:state,
                                    state_shortname:state_shortname,
                                },
                                success: function(response)
                                {
                                    data = JSON.parse(response);
                                    if (data.status != 200)
                                    {
                                        toastr.error(data.message);
                                    }
                                    else
                                    {   
                                        toastr.success(data.message);
                                        $("#step-2").hide();
                                        $("#step-3").show();
                                        $("#step_2_btn").click();
                                        setTimeout(
                                            function()
                                            {
                                                // window.location.reload();
                                                window.location.href = "../login.php";
                                            },
                                        1000);
                                    }
                                }
                            });
                        }
                    }
                    catch(e)
                    {
                        $(".sa_zipcode").val("");
                        toastr.error("Please enter a valid zipcode");
                        return false;
                    }
                }
            });
        }
    });

    $(document).on("click","#add_more_product",function(e)
    {
        add_more_product = `<div class="form-row product_row">
        <div class="form-group fg_2">
             <div class="row">
                <div class="col-4">
                    <input type="url" class="form-control product_link" placeholder="Product Link" name="product_link[]" required>
                </div>
                <div class="col-4">
                    <input type="number" class="form-control product_qty" name="product_qty[]" placeholder="Product Quantity" required>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control product_cost" name="product_cost[]" placeholder="Product Unit Cost" required>
                </div>
            </div>
        </div>
    </div>`;
    $(".product_row:last").after(add_more_product);
    });

    const inputFields = document.querySelectorAll('.form-control_number');
    inputFields.forEach((input, index) =>
    {

        input.addEventListener('input', function()
        {
            this.value = this.value.replace(/\D/g, '');

            if (this.value.length > 1)
            {
                this.value = this.value.charAt(0);
            }

            if (this.value !== '')
            {
                if (index < inputFields.length - 1)
                {
                    inputFields[index + 1].focus();
                }
                else
                {
                    this.blur(); // Remove focus from the last input
                }
            }
            else
            {
                if (index > 0)
                {
                    inputFields[index - 1].focus();
                }
            }
        });
    });

    const input_const = document.querySelector("#sa_user_phone_no");
    if(input_const)
    {
        window.intlTelInput(input_const, 
        {
            'separateDialCode': true,
            'preferredCountries': ["US"]
        });
    }
    // Other code for password strength calculation
    $("#password").on("input", function() 
    {
        let password = $(this).val();
        let strength = calculatePasswordStrength(password);
        $("#password-strength").text("Password Strength: " + strength);
    });

    function calculatePasswordStrength(password) 
    {
        // Implement your password strength calculation logic here
        // Return a strength indicator like "Weak", "Medium", "Strong"
    }

    $('#ReceiptCountryId').select2();
    $('#sa_country').select2();

    $(document).on("click","#last_step_btn", function(e)
    {   
        var err = 0;
        product_link = $(".product_link");
        product_link.each(function(i, obj) 
        {   
            if($(obj).val().length < 1)
            {
                toastr.error("Please paste product link");
                err = err+1;
                return false;
            }
        });

        product_qty = $(".product_qty");
        product_qty.each(function(i, obj) 
        {   
            if($(obj).val().length < 1)
            {
                toastr.error("Please enter product quantity");
                err = err+1;
                return false;
            }
        });

        product_cost = $(".product_cost");
        product_total_cost = 0;
        product_total_weight = 0;
        product_total_qty = 0;
        counter = 0;
        shopping_list = '';
        list_item = '';
        product_cost.each(function(i, obj) 
        {   
            if($(obj).val().length < 1)
            {
                toastr.error("Please enter product cost in USD");
                err = err+1;
                return false;
            }
            else
            {   
                counter = counter+1;
                curr_item_qty = parseInt($(".product_qty").eq(i).val());
                curr_item_unit_cost = parseFloat($(obj).val());
                // console.log(curr_item_unit_cost);
                curr_item_cost = parseFloat(curr_item_unit_cost*curr_item_qty);
                product_total_cost = product_total_cost+curr_item_cost;
                // product_total_weight = product_total_weight+parseFloat($(".product_weight").eq(i).val()*curr_item_qty);
                product_total_qty = product_total_qty+counter;
                product_link = $(".product_link").eq(i).val();

                items = `<div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <img src="https://bellshipitnow.com/v7/assets/img/item.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                            </div>
                            <div class="ms-3 col-6">
                                <h5><a href="`+product_link+`">`+product_link.substring(0, 50)+`...</a></h5>
                                <!-- <p class="small mb-0">256GB, Navy Blue</p> -->
                            </div>
                            <div class="ms-5 col-3">
                                <h5 class="fw-normal mb-0">`+curr_item_qty+`</h5>
                            </div>
                            <div class="ms-5 col-3" style="width: 80px;">
                                <h5 class="mb-0">$`+curr_item_unit_cost+`</h5>
                            </div>
                        </div>
                    </div>
                </div>`;

                $('#item_list').append(items);

                list_item = `<tr>
                    <td>
                        <div>
                            <img src="https://bellshipitnow.com/v7/assets/img/item.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                    </td>
                    <td>
                        <div class="ms-3">
                            <h5><a href="`+product_link+`">`+product_link.substring(0, 50)+`...</a></h5>
                        <!-- <p class="small mb-0">256GB, Navy Blue</p> -->
                        </div>
                    </td>
                    <td>
                        <div style="width: 50px;">
                            <h5 class="fw-normal mb-0">`+curr_item_qty+`</h5>
                        </div>
                    </td>
                    <td>
                        <div style="width: 80px;">
                            <h5 class="mb-0">$`+curr_item_unit_cost+`</h5>
                        </div>
                    </td>
                </tr>`;
                shopping_list = shopping_list+list_item;
            }
            $("#total_items_in_cart").text(i+1);
        });
        // product_weight = $(".product_weight");
        // product_weight.each(function(i, obj) 
        // {   
        //     if($(obj).val().length < 1)
        //     {
        //         toastr.error("Please enter product weight in lbs");
        //         err = err+1;
        //         return false;
        //     }
        // });

        shipping_charges = 50.00;

        // $('#loading').show();
        // $.ajax({
        //     type: "POST",
        //     url: "function.php",
        //     data:
        //     {
        //         action : 'get-shipping-charges',
        //         weight : product_total_weight,
        //         length : 3,
        //         width : 3,
        //         height : 3,
        //         type : 'Parcel',
        //         cost : product_total_cost,
        //         email : $("#sa_email").val(),
        //     },
        //     success: function(response)
        //     {   
        //         $('#loading').hide();
        //         data = JSON.parse(response);
        //         if (data.status != 200)
        //         {
        //             toastr.error(data.message);
        //         }
        //         else
        //         {   
        //             shipping_charges = data.data;
        //             if(err == 0)
        //             {   
                        $(".shop-assistant-checkout").removeClass("d-none");
                        $("#step-3").hide();
                        // toastr.success(data.message);
                        // product_total_cost = parseFloat(product_total_cost).toFixed(2);
                        // handling_charges = 17.00;
                        // tca = (0.07*product_total_cost).toFixed(2);  
                        // shipping_charges = shipping_charges;
                        // consolidation_charges = 15.00;
                        // total_charges = (parseFloat(product_total_cost)+parseFloat(tca)+parseFloat(shipping_charges)+parseFloat(handling_charges)+parseFloat(consolidation_charges));
                        // total_charges =  total_charges.toFixed(2);
                        // $("#sub_total").text("$"+product_total_cost+" USD");
                        // $("#shipping_charges").text("$"+shipping_charges+" USD");
                        // $("#handling_charges").text("$"+handling_charges+" USD");
                        // $("#tca").text("$"+tca+" USD");
                        // $("#consolidation_charges").text("$"+consolidation_charges+" USD");
                        // $("#total_charges").text("$"+total_charges+" USD");
                        // $("#total_checkout_amt").text("$"+total_charges+" USD");
    //                 }
    //             }
    //         }
    //     });
    });

    $(document).on("click","#send_shopping_list", function(e)
    {   
        $('#loading').show();
        $.ajax({
            type: "POST",
            url: "function.php",
            data:
            {
                action : 'send-shopping-list',
                customer_email : $("#sa_email").val(),
                shopping_list : shopping_list,
            },
            success: function(response)
            {   
                $('#loading').hide();
                data = JSON.parse(response);
                if (data.status != 200)
                {
                    toastr.error(data.message);
                }
                else
                {
                    toastr.success(data.message);
                    setTimeout(
                        function()
                        {
                            window.location.reload();
                        },
                    1500);
                } 
            }
        });
    });
});
