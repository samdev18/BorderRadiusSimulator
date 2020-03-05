<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="css3, border radius, css3 border radius, webkit border radius, firefox border radius">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Simulador Border Radius </title>
    <link rel="stylesheet" href="assets/css/estilo.min.css">
    <script src="assets/js/prototype.min.js" type="text/javascript"></script>
    <script src="assets/js/master.min.js" type="text/javascript"></script>
</head>

<body>
    <div id="logo">CSS Border Radius</div>
    <div id="container">
        <div class="input_wrapper" id="input_wrapper_tl">
            <input type="text" id="input_tl" class="chars_1 form-control form-control-sm" value="0" onkeypress="return observe_input_keypress(event)">
        </div>
        <div class="input_wrapper" id="input_wrapper_tr">
            <input type="text" id="input_tr" class="chars_1 form-control form-control-sm" value="0" onkeypress="return observe_input_keypress(event)">
        </div>
        <div class="input_wrapper" id="input_wrapper_br">
            <input type="text" id="input_br" class="chars_1 form-control form-control-sm" value="0" onkeypress="return observe_input_keypress(event)">
        </div>
        <div class="input_wrapper" id="input_wrapper_bl">
            <input type="text" id="input_bl" class="chars_1 form-control form-control-sm" value="0" onkeypress="return observe_input_keypress(event)">
        </div>

        <div id="surface" style="overflow:auto;">
            <textarea style="overflow:scroll;" id="code" class="col" readonly="readonly"></textarea>

            <div id="options">

                <div class="form-row justify-content-center">
                    <div class="custom-control custom-checkbox form-check-inline">
                        <input type="checkbox" checked class="custom-control-input" id="opt_webkit" name="opt_webkits">
                        <label class="custom-control-label" for="opt_webkit">WebKit</label>
                    </div>
                    <div class="custom-control custom-checkbox form-check-inline">
                        <input type="checkbox" checked class="custom-control-input" id="opt_gecko" name="opt_geckos">
                        <label class="custom-control-label" for="opt_gecko">Gecko</label>
                    </div>

                    <div class="custom-control custom-checkbox form-check-inline">
                        <input type="checkbox" checked class="custom-control-input" id="opt_css3" name="opt_css3s">
                        <label class="custom-control-label" for="opt_css3">Gecko</label>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <script src="assets/js/functions.js" type="text/javascript">

    </script>


</body>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
