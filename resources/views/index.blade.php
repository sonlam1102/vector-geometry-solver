<!doctype html>
<html>

<head>
    <title> Giải toán Vector</title>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'/>

    <meta name='apple-mobile-web-app-title' content='Cymath'/>

    <link rel='apple-touch-icon' href='img/icon.gif'/>
    <link rel='stylesheet' type='text/css' href='style/style.css'/>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

</head>

<body link='#0000CC' alink='#0000CC' vlink='#0000CC'>
<input id="csrf_token" value="{{ @csrf_token() }}" hidden>

<div id="container">

    <div id="header" style='display:block;width:100%;  border-bottom:1px solid #e6e6e6;'>
        <table class='nav_bar_table' width='100%' cellpadding='0' cellspacing='0'>
            <tr>
                <td class='nar_bar_cell' style='width:50%;' align='left'>
                    <table class='nav_bar_inner_table' cellpadding='0' cellspacing='0'>
                        <tr>
                            <td class='nar_bar_cell' align='left'>
                                <a href='/'>
                                    <a href='/'>
                                        <div class='logo_text'>
                                            <div class='logo_text_cy'>Giải toán</div>
                                            <div class='logo_text_math'>Vector hình học</div>
                                        </div>
                                    </a>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td class='nar_bar_cell' style='width:50%;' align='right'>
                    <table class='nav_bar_inner_table' cellpadding='0' cellspacing='0'>
                        <tr>
                            <td class='nar_bar_cell' align='left'>
                                <a href='/'>
                                    <div class='logo_text_math'>Thông tin</div>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <div class='content' style="text-align:center;  width:90%;">
        <div id="title-sol" style="text-align:center; border-radius: 10px 10px 0 0;">
            <h3>Giải toán đại Số Vector</h3>
        </div>
        <table>
            <tr>
                <td>
                    <table cellspacing='0' cellpadding='0' width='100%' style='table-layout:fixed;width:100%; '>
                        <tr>
                            <td>
                                <div id='outer_q'>
                                    <textarea class="solver_math" id="txtEquation"
                                              style=" font-size:18px; width: 100%; height:58vh; background:#e6e6e6; color:#4d4d4d;"
                                              placeholder="Click để nhập đề"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>

                    @include('input')
                </td>
            </tr>
        </table>

        <div style="text-align:center; margin-top:50px;">
            <div style="border-top:1px solid #cccccc; width:80%; margin-left:80px;"></div>
            <h3>Hướng dẫn giải</h3>
        </div>

        <div class="solver_math" id="txtResult"
             style="text-align:left; background:#e6e6e6; color:#4d4d4d;  width:100%; height:650px; overflow-x:auto; overflow:scroll;"></div>

        <div class="solver_math" id="MathBuffer" style="text-align:left; background:#e6e6e6; color:#4d4d4d;  width:100%; height:auto; margin-top:10px; margin-bottom:20px;
			visibility:hidden; position:absolute; top:0; left: 0"></div>
    </div>

    <div class='content_footer' style="position:absolute;bottom:0px;width:100%;text-align: center;height: 0px;">
        <div style='display:inherit' class='footer_div'>
            <p>Created in: @2016</p>
            <p>Authors: <b>Hien D. Nguyen, Pham M. Hoang, Dien V. Nguyen, Son T. Luu </b></p>
        </div>
    </div>

</div>

</body>

</html>
@include('scripts')