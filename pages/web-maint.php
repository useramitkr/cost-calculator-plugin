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

            <!-- Technology -->
            <div class="box-container">
                <div class=inner-title>Technology?</div>
                <form method="post">
                    <input type="checkbox" id="static" name="static" class="box-form tech-form">
                    <label for="static" class="box-lbl">Static Website</label>
                    <input type="checkbox" id="shopify" name="shopify" class="box-form tech-form">
                    <label for="shopify" class="box-lbl">Shopify</label>
                    <input type="checkbox" id="woocommerce" name="woocommerce" class="box-form tech-form">
                    <label for="woocommerce" class="box-lbl">Woocommerce</label>
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

            <!-- Pages -->
            <div class="box-container">
                <div class=inner-title>I want...</div>
                <form method="post">
                    <input type="checkbox" id="pname1" name="pname1" class="box-form">
                    <label for="pname1" class="box-lbl">Upto 3 Blog Updation</label>
                    <input type="checkbox" id="pname2" name="pname2" class="box-form">
                    <label for="pname2" class="box-lbl">Content Updation</label>
                    <input type="checkbox" id="pname3" name="pname3" class="box-form">
                    <label for="pname3" class="box-lbl">Security Checks</label>
                    <input type="checkbox" id="pname4" name="pname4" class="box-form">
                    <label for="pname4" class="box-lbl">Backup & Recovery</label>
                    <input type="checkbox" id="pname5" name="pname5" class="box-form">
                    <label for="pname5" class="box-lbl">Software Updates</label>
                    <input type="checkbox" id="pname6" name="pname6" class="box-form">
                    <label for="pname6" class="box-lbl">Mobile Responsive</label>
                    <input type="checkbox" id="pname7" name="pname7" class="box-form">
                    <label for="pname7" class="box-lbl">Speed Optimization</label>
                    <input type="checkbox" id="pname8" name="pname8" class="box-form">
                    <label for="pname8" class="box-lbl">Virus Removal</label>
                </form>
            </div>

            <!-- No. Of Products -->
            <div class="box-container">
                <div class=inner-title>Number of Pages...</div>
                <form method="post">
                    <input type="checkbox" id="mpage1" name="mpage1" class="box-form mpage-form">
                    <label for="mpage1" class="box-lbl">Up to 10</label>
                    <input type="checkbox" id="mpage2" name="mpage2" class="box-form mpage-form">
                    <label for="mpage2" class="box-lbl">Up to 30</label>
                    <input type="checkbox" id="mpage3" name="mpage3" class="box-form mpage-form">
                    <label for="mpage3" class="box-lbl">Up to 70</label>
                    <input type="checkbox" id="mpage4" name="mpage4" class="box-form mpage-form">
                    <label for="mpage4" class="box-lbl">Up to 150</label>
                </form>
                <script>
                var mradioTech = document.querySelectorAll('.mpage-form');

                mradioTech.forEach(function (radio) {
                    radio.addEventListener('change', function () {
                        // Unselect all other radio buttons
                        mradioTech.forEach(function (otherRadio) {
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
                <div class=inner-title>Monthly Charges</div>
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
            innerValueContainer.innerHTML = '<div class="inner-title">Your Order - Monthly' + orderTable + '</div>';

            // Display both "Total" and the actual total value in the total container
            totalContainer.innerHTML = '<table style="width: 100%; border-collapse: collapse;">' +
                '<tr><td style="padding: 5px; text-align: left;">Total (INR)</td><td style="padding: 5px; text-align: right;">' + formatCurrency(total, 'INR') + '</td></tr>' +
                '<tr><td style="padding: 5px; text-align: left;">Total (USD)</td><td style="padding: 5px; text-align: right;">' + formatCurrency(convertToUSD(total), 'USD') + '</td></tr></table>';
        }

        function getCheckboxValue(checkboxId) {
            switch (checkboxId) {
                case 'static':
                    return 999;
                case 'shopify':
                    return 3000;
                case 'woocommerce':
                    return 2000;
                case 'php':
                    return 8000;
                case 'pname1':
                    return 299;
                case 'pname2':
                    return 299;
                case 'pname3':
                    return 999;
                case 'pname4':
                    return 1999;
                case 'pname5':
                    return 0;
                case 'pname6':
                    return 4999;
                case 'pname7':
                    return 4999;
                case 'pname8':
                    return 4999;
                case 'mpage1':
                    return 0;
                case 'mpage2':
                    return 3000;
                case 'mpage3':
                    return 5000;
                case 'mpage4':
                    return 10000;
                    
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