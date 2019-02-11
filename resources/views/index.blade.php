<!doctype html>
<html>

<head>
    <title>Csmath | Math Problem Solver with Steps | Math Solving App</title>
    <meta name='description'
          content='Solve calculus and algebra problems online with Cymath math problem solver with steps to show your work. Get the Cymath math solving app on your smartphone!'/>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'/>
    <meta property='og:image' content='http://www.cymath.comimg/cymath_square.gif'/>
    <meta property='og:title' content='Cymath | Math Problem Solver with Steps | Math Solving App'/>
    <meta property='og:description'
          content='Solve calculus and algebra problems online with Cymath math problem solver with steps to show your work. Get the Cymath math solving app on your smartphone!'/>
    <meta property='og:url' content='1'/>
    <meta charset='utf-8'/>
    <meta name='apple-mobile-web-app-capable' content='yes'/>
    <meta name='apple-mobile-web-app-title' content='Cymath'/>
    <link rel='apple-touch-icon' href='img/icon.gif'/>
    <link rel='stylesheet' type='text/css' href='style/style.css'/>
    <link rel='shortcut icon' href='img/icon.ico'/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

</head>

<body link='#0000CC' alink='#0000CC' vlink='#0000CC'>
<input id="csrf_token" value="{{ @csrf_token() }}" hidden>
<div id="container">
    <div id="header" style='display:block;width:100%;  border-bottom:1px solid #e6e6e6;'>
        <table class='nav_bar_table' width='100%' cellpadding='0' cellspacing='0'>
            <tr>
                <td class='nar_bar_cell' style='width:100%;' align='center'>
                    <table class='nav_bar_inner_table' cellpadding='0' cellspacing='0'>
                        <tr>
                            <td class='nar_bar_cell'>
                                <a href='/'>
                                    <a href='/'>
                                        <div class='logo_text'>
                                            <div class='logo_text_cy'>Cs</div>
                                            <div class='logo_text_math'>math</div>
                                        </div>
                                    </a>
                                </a>
                            </td>
                            <td class='nar_bar_cell' width='100%' align='right'>
                                <div class='menu_div_social'>
                                    <a href='http://www.facebook.com/Cymath' target='_blank'><img
                                                class='social_link_icon' src='img/facebook.gif?3'>
                                    </a>
                                    <a href='http://www.twitter.com/TeamCymath' target='_blank'><img
                                                class='social_link_icon' src='img/twitter.gif?3'>
                                    </a>
                                </div>
                                <div class='menu_div_follow_us'>Follow Us</div>
                                <div class='menu_div'><a class='menu_link' href='/blog'>Blog</a>
                                </div>
                                <div class='menu_div'><a class='menu_link' href='/reference'>Reference</a>
                                </div>
                                <div class='menu_div'><a class='menu_link' href='/practice'>Practice</a>
                                </div>
                                <div class='menu_div'><a class='menu_link' href='/'>Home</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div class='content' style="text-align:center;  width:65%; margin-bottom:10px; ">
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
                    <table cellspacing='0' cellpadding='0' width='100%' style='table-layout:fixed;width:100%; '>
                        <tr>
                            <td width='100%'>
                                <div id='keyboard_div' style="width:100%;">
                                    <div class="row_desktop">
                                        <div id="math_cong" class="button">+</div>
                                        <div id="math_tru">&#8722;</div>
                                        <div id="math_bac2">
                                            <table style="width:100%;height:50%;border-spacing:0px;border-collapse:separate;margin-top:auto;margin-bottom:auto;">
                                                <tr>
                                                    <td style="width:25%"></td>
                                                    <td style="width:30%">
                                                        <div class="square_in_base"></div>
                                                    </td>
                                                    <td style="width:20%;padding:0px;margin:0px">
                                                        <div class="num_in_expt">
                                                            <div class="two_in_expt">2</div>
                                                        </div>
                                                    </td>
                                                    <td style="width:25%"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div id="math_bacn">
                                            <table style="width:100%;height:50%;border-spacing:0px;border-collapse:separate;margin-top:auto;margin-bottom:auto;">
                                                <tr>
                                                    <td style="width:25%"></td>
                                                    <td style="width:30%">
                                                        <div class="square_in_base"></div>
                                                    </td>
                                                    <td style="width:20%">
                                                        <div class="num_in_expt">
                                                            <div class="square_in_expt"></div>
                                                        </div>
                                                    </td>
                                                    <td style="width:25%"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div id="math_nhan">&#215;</div>
                                        <div id="math_vector">
                                            <table style="width:100%;height:50%;border-spacing:0px;border-collapse:separate;margin-top:auto;margin-bottom:auto;">
                                                <tr>
                                                    <td style="width:25%"></td>
                                                    <td style="width:30%">
                                                        <div class="square_in_base"></div>
                                                    </td>
                                                    <td style="width:20%;padding:0px;margin:0px">
                                                        <div class="num_in_arrow">
                                                            <div class="two_in_expt">&rarr;</div>
                                                        </div>
                                                    </td>
                                                    <td style="width:25%"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div id="math_equal">=</div>

                                    </div>

                                    <div class="row_desktop">
                                        <div id="math_br_l">(</div>
                                        <div id="math_br_r">)</div>
                                        <div id="math_sqrt">&#8730;
                                            <div class="square_big"></div>
                                        </div>
                                        <div id="math_sqrtn"><sup>
                                                <div class="square_small"></div>
                                            </sup>&#8730;
                                            <div class="square_big"></div>
                                        </div>
                                        <div id="math_chia">&#247;</div>
                                        <div id="math_splash">/</div>
                                        <div id="math_frac">
                                            <div class="square_big_in_frac"></div>
                                            <div class="frac_line"></div>
                                            <div class="square_big_in_frac"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td width='30%'>
                                <input id="step_solve" class='submit_solve' style='height:100%;line-height:40px; '
                                       name='enter' type='submit' value='Solve!'></input>
                            </td>
                        </tr>
                    </table>


            </tr>

            </tr>
        </table>
        <div style="text-align:center; margin-top:50px; ">
            <div style="border-top:1px solid #cccccc; width:80%; margin-left:80px;"></div>
            <h3>Hướng dẫn giải</h3>
        </div>

        <div class="solver_math" id="txtResult"
             style="text-align:left; background:#e6e6e6; color:#4d4d4d;  width:100%; height:auto; "></div>
        <div class="solver_math" id="MathBuffer" style="text-align:left; background:#e6e6e6; color:#4d4d4d;  width:100%; height:auto; margin-top:10px; margin-bottom:20px;
			visibility:hidden; position:absolute; top:0; left: 0"></div>
    </div>
    <div class='content_footer' style="height:62px; position:absolute; bottom:0px; width:100%; ">
        <div style='display:inherit' class='footer_div'>
            <table class='footer_inner_table' cellspacing=0 cellpadding=0>
                <tr>
                    <td align='center' class='footer_cell'>
                        <div id='footer_links_div'>
                            <p class='footer_text'>
                                <a class='footer_link' href='/about'>About</a>
                                <a class='footer_link' href='/contact'>Contact Us</a>
                                <a class='footer_link' href='/terms'>Terms</a>
                                <a class='footer_link' href='/privacy'>Privacy</a>
                            </p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type='text/javascript'
        src='https://cdn.mathjax.org/mathjax/2.6-latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
<script src='js/jquery-fieldselection.js'></script>
<script src='js/MathInput.js'></script>
<script type="text/x-mathjax-config">
	  MathJax.Hub.Config({
		showProcessingMessages: false,
		tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
	  });

</script>
<script>
    var Preview = {
        delay: 150,        // delay after keystroke before updating

        preview: null,     // filled in by Init below
        buffer: null,      // filled in by Init below

        timeout: null,     // store setTimout id
        mjRunning: false,  // true when MathJax is processing
        oldText: null,     // used to check if an update is needed

        //
        //  Get the preview and buffer DIV's
        //
        Init: function () {
            this.preview = document.getElementById("txtResult");
            this.buffer = document.getElementById("MathBuffer");
        },

        //
        //  Switch the buffer and preview, and display the right one.
        //  (We use visibility:hidden rather than display:none since
        //  the results of running MathJax are more accurate that way.)
        //
        SwapBuffers: function () {
            var buffer = this.preview, preview = this.buffer;
            this.buffer = buffer;
            this.preview = preview;
            buffer.style.visibility = "hidden";
            buffer.style.position = "absolute";
            preview.style.position = "";
            preview.style.visibility = "";
        },

        //
        //  This gets called when a key is pressed in the textarea.
        //  We check if there is already a pending update and clear it if so.
        //  Then set up an update to occur after a small delay (so if more keys
        //    are pressed, the update won't occur until after there has been
        //    a pause in the typing).
        //  The callback function is set up below, after the Preview object is set up.
        //
        Update: function () {
            if (this.timeout) {
                clearTimeout(this.timeout)
            }
            this.timeout = setTimeout(this.callback, this.delay);
        },

        //
        //  Creates the preview and runs MathJax on it.
        //  If MathJax is already trying to render the code, return
        //  If the text hasn't changed, return
        //  Otherwise, indicate that MathJax is running, and start the
        //    typesetting.  After it is done, call PreviewDone.
        //
        CreatePreview: function () {
            Preview.timeout = null;
            if (this.mjRunning) return;
            var text = document.getElementById("").value;
            if (text === this.oldtext) return;
            this.buffer.innerHTML = this.oldtext = text;
            this.mjRunning = true;
            MathJax.Hub.Queue(
                ["Typeset", MathJax.Hub, this.buffer],
                ["PreviewDone", this]
            );
        },

        //
        //  Indicate that MathJax is no longer running,
        //  and swap the buffers to show the results.
        //
        PreviewDone: function () {
            this.mjRunning = false;
            this.SwapBuffers();
        }

    };

    //
    //  Cache a callback to the CreatePreview action
    //
    Preview.callback = MathJax.Callback(["CreatePreview", Preview]);
    Preview.callback.autoReset = true;  // make sure it can run more than once

</script>
<script>
    Preview.Init();
</script>