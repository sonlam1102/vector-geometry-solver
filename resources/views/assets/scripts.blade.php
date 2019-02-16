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