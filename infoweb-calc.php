<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
        #cost-calc {
            overflow: hidden;
        }

        #left-container {
            width: 63%;
            float: left;
            margin-right: 2px;
        }

        #right-container {
            width: 35%;
            float: right;
        }

        .box-container {
            border: 1px dotted black;
            padding: 15px 15px;
            margin-bottom: 20px;
            border-radius: 15px;
        }

        .inner-title {
            background-color: #251b48;
            color: white;
            padding: 8px 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .box-lbl {
            font-size: 17px;
            font-weight: 500;
            padding-right: 10px;
            padding-bottom: 10px;
        }

        #total-container {
            background-color: #fff; 
            color: #000; 
            padding: 15px; 
            font-weight: 450;
        }

        @media only screen and (max-width: 600px) {
            #left-container {
                width: 100%;
            }

            #right-container {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div id="pdfContent">
    <div id="cost-calc">
        <div id="left-container">

            <!-- Website type -->
            <div class="box-container">
                <div class=inner-title>Website Type...</div>
                <form method="post">
                    <input type="checkbox" id="type1" name="type1" class="box-form">
                    <label for="type1" class="box-lbl">Business</label>
                    <input type="checkbox" id="type2" name="type2" class="box-form">
                    <label for="type2" class="box-lbl">Portfolio</label>
                    <input type="checkbox" id="type3" name="type3" class="box-form">
                    <label for="type3" class="box-lbl">Blog</label>
                    <input type="checkbox" id="type4" name="type4" class="box-form">
                    <label for="type4" class="box-lbl">One-Page</label>
                    <input type="checkbox" id="type5" name="type5" class="box-form">
                    <label for="type5" class="box-lbl">LMS</label>
                </form>
                <script>
                    var radioButtons = document.querySelectorAll('.box-form');

                    radioButtons.forEach(function (radio) {
                        radio.addEventListener('change', function () {
                            // Unselect all other radio buttons
                            radioButtons.forEach(function (otherRadio) {
                                if (otherRadio !== radio) {
                                    otherRadio.checked = false;
                                }
                            });
                        });
                    });
                </script>
            </div>

            <!-- Technical Addons -->
            <div class="box-container">
                <div class=inner-title>Do You Want...</div>
                <form method="post">
                    <input type="checkbox" id="domain" name="domain" class="box-form">
                    <label for="domain" class="box-lbl">Domain</label>
                    <input type="checkbox" id="hosting" name="hosting" class="box-form">
                    <label for="hosting" class="box-lbl">Hosting</label>
                    <input type="checkbox" id="email" name="email" class="box-form">
                    <label for="email" class="box-lbl">Email</label>
                    <input type="checkbox" id="logo" name="logo" class="box-form">
                    <label for="logo" class="box-lbl">Logo</label>
                </form>
            </div>

            <!-- Pages -->
            <div class="box-container">
                <div class=inner-title>Number of Pages</div>
                <form method="post">
                    <input type="checkbox" id="pname1" name="pname1" class="box-form">
                    <label for="pname1" class="box-lbl">Home</label>
                    <input type="checkbox" id="pname2" name="pname2" class="box-form">
                    <label for="pname2" class="box-lbl">About</label>
                    <input type="checkbox" id="pname3" name="pname3" class="box-form">
                    <label for="pname3" class="box-lbl">Services</label>
                    <input type="checkbox" id="pname4" name="pname4" class="box-form">
                    <label for="pname4" class="box-lbl">Contact</label>
                    <input type="checkbox" id="pname5" name="pname5" class="box-form">
                    <label for="pname5" class="box-lbl">FAQ</label>
                    <input type="checkbox" id="pname6" name="pname6" class="box-form">
                    <label for="pname6" class="box-lbl">404 Error</label>
                    <input type="checkbox" id="pname7" name="pname7" class="box-form">
                    <label for="pname7" class="box-lbl">Landing Page</label>
                    <input type="checkbox" id="pname8" name="pname8" class="box-form">
                    <label for="pname8" class="box-lbl">Blog</label>
                    <input type="checkbox" id="pname9" name="pname9" class="box-form">
                    <label for="pname9" class="box-lbl">Portfolio</label>
                    <input type="checkbox" id="pname10" name="pname10" class="box-form">
                    <label for="pname10" class="box-lbl">Career</label>
                    <input type="checkbox" id="pname11" name="pname11" class="box-form">
                    <label for="pname11" class="box-lbl">Clients</label>
                    <input type="checkbox" id="pname12" name="pname12" class="box-form">
                    <label for="pname12" class="box-lbl">Gallery</label>
                    <input type="checkbox" id="pname13" name="pname13" class="box-form">
                    <label for="pname13" class="box-lbl">Mission & Vission</label>
                    <input type="checkbox" id="pname14" name="pname14" class="box-form">
                    <label for="pname14" class="box-lbl">Team</label>
                    <input type="checkbox" id="pname15" name="pname15" class="box-form">
                    <label for="pname15" class="box-lbl">Media</label>
                    <input type="checkbox" id="pname16" name="pname16" class="box-form">
                    <label for="pname16" class="box-lbl">Testimonials</label>
                    <input type="checkbox" id="pname17" name="pname17" class="box-form">
                    <label for="pname17" class="box-lbl">Events</label>
                    <input type="checkbox" id="pname18" name="pname18" class="box-form">
                    <label for="pname18" class="box-lbl">Terms & Conditions</label>
                    <input type="checkbox" id="pname19" name="pname19" class="box-form">
                    <label for="pname19" class="box-lbl">Privacy Policy</label>
                </form>
            </div>

            <!-- Addons -->
            <div class="box-container">
                <div class=inner-title>Addons</div>
                <form method="post">
                    <input type="checkbox" id="spcl1" name="spcl1" class="box-form">
                    <label for="spcl1" class="box-lbl">Popup Form</label>
                    <input type="checkbox" id="spcl2" name="spcl2" class="box-form">
                    <label for="spcl2" class="box-lbl">Live Chat Bot</label>
                    <input type="checkbox" id="spcl3" name="spcl3" class="box-form">
                    <label for="spcl3" class="box-lbl">Payment Gateway</label>
                    <input type="checkbox" id="spcl4" name="spcl4" class="box-form">
                    <label for="spcl4" class="box-lbl">Premium Theme</label>
                    <input type="checkbox" id="spcl5" name="spcl5" class="box-form">
                    <label for="spcl5" class="box-lbl">Calendly Integration</label>
                    <input type="checkbox" id="spcl6" name="spcl6" class="box-form">
                    <label for="spcl6" class="box-lbl">Google Review Integration</label>
                    <input type="checkbox" id="spcl7" name="spcl7" class="box-form">
                    <label for="spcl7" class="box-lbl">Google Analytics</label>
                    <input type="checkbox" id="spcl8" name="spcl8" class="box-form">
                    <label for="spcl8" class="box-lbl">Google Search Console</label>
                </form>
            </div>

            <!-- Technology -->
            <div class="box-container">
                <div class=inner-title>Technology?</div>
                <form method="post">
                    <input type="checkbox" id="wordpress" name="wordpress" class="box-form tech-form">
                    <label for="wordpress" class="box-lbl">WordPress</label>
                    <input type="checkbox" id="php" name="php" class="box-form tech-form">
                    <label for="php" class="box-lbl">PHP/JS/MYSQL</label>
                </form>
                <script>
                var radioTech = document.querySelectorAll('.tech-form');

                radioTech.forEach(function (radio) {
                    radio.addEventListener('change', function () {
                        // Unselect all other radio buttons
                        radioTech.forEach(function (otherRadio) {
                            if (otherRadio !== radio) {
                                otherRadio.checked = false;
                            }
                        });
                    });
                });
            </script>
            </div>
            
        </div>
        

        <div id="right-side">
            <div id="right-container">
                <div class=inner-title>Your Charges</div>
                <div class="inner-value"></div>
                <div id="total-container"></div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var checkboxes = document.querySelectorAll('.box-form');
        var innerValueContainer = document.querySelector('.inner-value'); // Get the inner value container
        var totalContainer = document.getElementById('total-container'); // Get the total container

        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                updateOrder();
            });
        });

        function updateOrder() {
            var orderTable = '<table style="width: 100%; border-collapse: collapse;">';
            var total = 0;

            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    var label = checkbox.nextElementSibling.textContent;
                    var value = getCheckboxValue(checkbox.id);
                    total += value;
                    orderTable += '<tr><td style="padding: 5px;">' + label + '</td><td style="padding: 5px;">' + formatCurrency(value, 'INR') + '</td></tr>';
                }
            });

            orderTable += '</table>';

            // Update content within the inner value container
            innerValueContainer.innerHTML = '<div class="inner-title">Your Order' + orderTable + '</div>';

            // Display both "Total" and the actual total value in the total container
            totalContainer.innerHTML = '<table style="width: 100%; border-collapse: collapse;">' +
                '<tr><td style="padding: 5px; text-align: left;">Total (INR)</td><td style="padding: 5px; text-align: right;">' + formatCurrency(total, 'INR') + '</td></tr>' +
                '<tr><td style="padding: 5px; text-align: left;">Total (USD)</td><td style="padding: 5px; text-align: right;">' + formatCurrency(convertToUSD(total), 'USD') + '</td></tr></table>';
        }

        function getCheckboxValue(checkboxId) {
            switch (checkboxId) {
                case 'wordpress':
                    return 0;
                case 'php':
                    return 50000;
                case 'type1':
                    return 5000;
                case 'type2':
                    return 3000;
                case 'type3':
                    return 5000;
                case 'type4':
                    return 3000;
                case 'type5':
                    return 15000;
                case 'page1':
                    return 0;
                case 'page2':
                    return 4500;
                case 'page3':
                    return 14000;
                case 'page4':
                    return 36000;
                case 'domain':
                    return 999;
                case 'hosting':
                    return 3500;
                case 'email':
                    return 500;
                case 'logo':
                    return 5000;
                case 'pname1':
                    return 1999;
                case 'pname2':
                    return 999;
                case 'pname3':
                    return 999;
                case 'pname4':
                    return 999;
                case 'pname5':
                    return 999;
                case 'pname6':
                    return 999;
                case 'pname7':
                    return 1999;
                case 'pname8':
                    return 999;
                case 'pname9':
                    return 999;
                case 'pname10':
                    return 999;
                case 'pname11':
                    return 999;
                case 'pname12':
                    return 999;
                case 'pname13':
                    return 999;
                case 'pname14':
                    return 999;
                case 'pname15':
                    return 999;
                case 'pname16':
                    return 999;
                case 'pname17':
                    return 999;
                case 'pname18':
                    return 499;
                case 'pname19':
                    return 499;
                case 'spcl1':
                    return 599;
                case 'spcl2':
                    return 999;
                case 'spcl3':
                    return 2999;
                case 'spcl4':
                    return 6000;
                case 'spcl5':
                    return 499;
                case 'spcl6':
                    return 499;
                case 'spcl7':
                    return 499;
                case 'spcl8':
                    return 499;
                    
                // Add more cases for other checkboxes if needed
                default:
                    return 0;
            }
        }

        function formatCurrency(amount, currencyCode) {
            // Add logic to format the amount based on currency code
            // For simplicity, using a basic formatting here
            return amount.toLocaleString('en-IN', { style: 'currency', currency: currencyCode });
        }

        function convertToUSD(amount) {
            // Static conversion rate for demonstration (1 INR = 0.014 USD)
            var conversionRate = 0.015;
            return amount * conversionRate;
        }
        });
    </script>
</div>
</body>
</html>