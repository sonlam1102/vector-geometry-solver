@extends('main')
@section('content')
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
                                              style="font-size:18px; width: 100%; height:58vh; background:#e6e6e6; color:#4d4d4d;"
                                              placeholder="Click để nhập đề"></textarea>
                        </div>
                    </td>
                </tr>
            </table>

            @include('solve.input')
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
@endsection