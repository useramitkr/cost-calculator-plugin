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

            <!-- Keyword Research & Strategy -->
            <div class="box-container">
                <div class=inner-title>Keyword Research & Strategy (No. of keywords)</div>
                <form method="post">
                    <input type="checkbox" id="keyr1" name="keyr1" class="box-form tech-form">
                    <label for="keyr1" class="box-lbl">Up to 3</label>
                    <input type="checkbox" id="keyr2" name="keyr2" class="box-form tech-form">
                    <label for="keyr2" class="box-lbl">Up to 10</label>
                    <input type="checkbox" id="keyr3" name="keyr3" class="box-form tech-form">
                    <label for="keyr3" class="box-lbl">Up to 50</label>
                    <input type="checkbox" id="keyr4" name="keyr4" class="box-form tech-form">
                    <label for="keyr4" class="box-lbl">Up to 150</label>
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

            <!-- On Page SEO -->
            <div class="box-container">
                <div class=inner-title>On-Page SEO (Number of Pages)</div>
                <form method="post">
                    <input type="checkbox" id="mpage1" name="mpage1" class="box-form mpage-form">
                    <label for="mpage1" class="box-lbl">Only 01</label>
                    <input type="checkbox" id="mpage2" name="mpage2" class="box-form mpage-form">
                    <label for="mpage2" class="box-lbl">Up to 06</label>
                    <input type="checkbox" id="mpage3" name="mpage3" class="box-form mpage-form">
                    <label for="mpage3" class="box-lbl">Up to 12</label>
                    <input type="checkbox" id="mpage4" name="mpage4" class="box-form mpage-form">
                    <label for="mpage4" class="box-lbl">Up to 20</label>
                    <input type="checkbox" id="mpage5" name="mpage5" class="box-form mpage-form">
                    <label for="mpage5" class="box-lbl">Up to 50</label>
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

            <!-- Selected Keywords -->
            <div class="box-container">
                <div class=inner-title>Number of Keywords (Selected)</div>
                <form method="post">
                    <input type="checkbox" id="keyword1" name="keyword1" class="box-form keyword-build">
                    <label for="keyword1" class="box-lbl">Up to 2</label>
                    <input type="checkbox" id="keyword2" name="keyword2" class="box-form keyword-build">
                    <label for="keyword2" class="box-lbl">Up to 5</label>
                    <input type="checkbox" id="keyword3" name="keyword3" class="box-form keyword-build">
                    <label for="keyword3" class="box-lbl">Up to 10</label>
                    <input type="checkbox" id="keyword4" name="keyword4" class="box-form keyword-build">
                    <label for="keyword4" class="box-lbl">Up to 30</label>
                    <input type="checkbox" id="keyword5" name="keyword5" class="box-form keyword-build">
                    <label for="keyword5" class="box-lbl">Up to 50</label>
                </form>
                <script>
                var keywordBuilding = document.querySelectorAll('.keyword-build');

                keywordBuilding.forEach(function (radio) {
                    radio.addEventListener('change', function () {
                        // Unselect all other radio buttons
                        keywordBuilding.forEach(function (otherRadio) {
                            if (otherRadio !== radio) {
                                otherRadio.checked = false;
                            }
                        });
                    });
                });
            </script>
            </div>

            <!-- Link Building -->
            <div class="box-container">
                <div class=inner-title>Only Link Building (Per keywords)</div>
                <form method="post">
                    <input type="checkbox" id="link1" name="link1" class="box-form link-build">
                    <label for="link1" class="box-lbl">70</label>
                    <input type="checkbox" id="link2" name="link2" class="box-form link-build">
                    <label for="link2" class="box-lbl">100</label>
                    <input type="checkbox" id="link3" name="link3" class="box-form link-build">
                    <label for="link3" class="box-lbl">200</label>
                    <input type="checkbox" id="link4" name="link4" class="box-form link-build">
                    <label for="link4" class="box-lbl">300</label>
                    <input type="checkbox" id="link5" name="link5" class="box-form link-build">
                    <label for="link5" class="box-lbl">500</label>
                </form>
                <script>
                var linkBuilding = document.querySelectorAll('.link-build');

                linkBuilding.forEach(function (radio) {
                    radio.addEventListener('change', function () {
                        // Unselect all other radio buttons
                        linkBuilding.forEach(function (otherRadio) {
                            if (otherRadio !== radio) {
                                otherRadio.checked = false;
                            }
                        });
                    });
                });
            </script>
            </div>

            <!-- eCommerce SEO -->
            <div class="box-container">
                <div class=inner-title>Ecommerce SEO (Number of Products)</div>
                <form method="post">
                    <input type="checkbox" id="ecomm1" name="ecomm1" class="box-form ecomm-seo">
                    <label for="ecomm1" class="box-lbl">Up to 15</label>
                    <input type="checkbox" id="ecomm2" name="ecomm2" class="box-form ecomm-seo">
                    <label for="ecomm2" class="box-lbl">Up to 35</label>
                    <input type="checkbox" id="ecomm3" name="ecomm3" class="box-form ecomm-seo">
                    <label for="ecomm3" class="box-lbl">Up to 70</label>
                    <input type="checkbox" id="ecomm4" name="ecomm4" class="box-form ecomm-seo">
                    <label for="ecomm4" class="box-lbl">Up to 150</label>
                    <input type="checkbox" id="ecomm5" name="ecomm5" class="box-form ecomm-seo">
                    <label for="ecomm5" class="box-lbl">Up to 300</label>
                </form>
                <script>
                var ecommseo = document.querySelectorAll('.ecomm-seo');

                ecommseo.forEach(function (radio) {
                    radio.addEventListener('change', function () {
                        // Unselect all other radio buttons
                        ecommseo.forEach(function (otherRadio) {
                            if (otherRadio !== radio) {
                                otherRadio.checked = false;
                            }
                        });
                    });
                });
            </script>
            </div>

            <!-- Amazon SEO -->
            <div class="box-container">
                <div class=inner-title>Amazon SEO (Number of Products)</div>
                <form method="post">
                    <input type="checkbox" id="amazon1" name="amazon1" class="box-form amazon-seo">
                    <label for="amazon1" class="box-lbl">Up to 15</label>
                    <input type="checkbox" id="amazon2" name="amazon2" class="box-form amazon-seo">
                    <label for="amazon2" class="box-lbl">Up to 35</label>
                    <input type="checkbox" id="amazon3" name="amazon3" class="box-form amazon-seo">
                    <label for="amazon3" class="box-lbl">Up to 70</label>
                    <input type="checkbox" id="amazon4" name="amazon4" class="box-form amazon-seo">
                    <label for="amazon4" class="box-lbl">Up to 150</label>
                    <input type="checkbox" id="amazon5" name="amazon5" class="box-form amazon-seo">
                    <label for="amazon5" class="box-lbl">Up to 300</label>
                </form>
                <script>
                var amazonseo = document.querySelectorAll('.amazon-seo');

                amazonseo.forEach(function (radio) {
                    radio.addEventListener('change', function () {
                        // Unselect all other radio buttons
                        amazonseo.forEach(function (otherRadio) {
                            if (otherRadio !== radio) {
                                otherRadio.checked = false;
                            }
                        });
                    });
                });
            </script>
            </div>

            <!-- services -->
            <div class="box-container">
                <div class=inner-title>Other Services</div>
                <form method="post">
                    <input type="checkbox" id="serv1" name="serv1" class="box-form">
                    <label for="serv1" class="box-lbl">Technical SEO</label>
                    <input type="checkbox" id="serv2" name="serv2" class="box-form">
                    <label for="serv2" class="box-lbl">Local SEO</label>
                </form>
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
                case 'keyr1':
                    return 999;
                case 'keyr2':
                    return 3000;
                case 'keyr3':
                    return 5000;
                case 'keyr4':
                    return 15000;
                case 'mpage1':
                    return 999;
                case 'mpage2':
                    return 5000;
                case 'mpage3':
                    return 10000;
                case 'mpage4':
                    return 15000;
                case 'mpage5':
                    return 35000;
                case 'keyword1':
                    return 5000;
                case 'keyword2':
                    return 10000;
                case 'keyword3':
                    return 19000;
                case 'keyword4':
                    return 55000;
                case 'keyword5':
                    return 95000;
                case 'link1':
                    return 5000;
                case 'link2':
                    return 6000;
                case 'link3':
                    return 10000;
                case 'link4':
                    return 15000;
                case 'link5':
                    return 25000;
                case 'ecomm1':
                    return 4500;
                case 'ecomm2':
                    return 10000;
                case 'ecomm3':
                    return 20000;
                case 'ecomm4':
                    return 40000;
                case 'ecomm5':
                    return 80000;
                case 'amazon1':
                    return 10500;
                case 'amazon2':
                    return 23000;
                case 'amazon3':
                    return 48000;
                case 'amazon4':
                    return 90000;
                case 'amazon5':
                    return 175000;
                case 'serv1':
                    return 2999;
                case 'serv2':
                    return 5000;
                    
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
