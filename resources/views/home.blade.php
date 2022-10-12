@extends('layouts.app')

@section('css')
    <style>
        input {
            margin-top: 10px;
            margin-bottom: 2px;
            display: block;
        }
        button{
            display: block;
            margin: 20px;
            margin-left: 0;
        }
        .container4 {
            background-color: rgb(154, 154, 154);
            z-index: -1;
            border-radius: 20px;
            width: 100%;
        }
        .text4 {
            font-size: 20px;
            color: white;
            width:100%;
            text-align: center;
            z-index: 1;
            margin-top: -25px;
            text-shadow: inset rgb(24, 21, 21) 1px;
        }
        .container2 {
            background-color: rgb(232, 231, 231);
            width: 100%;
            padding:5px;
            width: calc(100% );
            border-radius: 30px;
        }
        .container1 {
            background: linear-gradient(rgb(153, 150, 150),rgb(232, 231, 231)) border-box; /*3*/
            -webkit-mask: /*4*/
                linear-gradient(rgb(192, 192, 192) 0 0) padding-box,
                linear-gradient(rgb(199, 199, 199) 0 0);
            mask-composite: exclude;
            border: 2px solid transparent;
            width: 400px;
            border-radius: 20px;
        }
        .skill {
            display: block;
            color: white;
            padding: 1%;
            border-radius: 20px;
            background-color: #5fef61;
            box-shadow: inset 0 2px 9px rgba(255, 255, 255, 0.3),
            inset 0 -2px 6px rgba(0, 0, 0, 0.4);
            position: relative;
            overflow: hidden;
            height: 20px;
        }
        .skill::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-image: linear-gradient(
            -45deg,
            rgba(255, 255, 255, 0.2) 25%,
            transparent 25%,
            transparent 50%,
            rgba(255, 255, 255, 0.2) 50%,
            rgba(255, 255, 255, 0.2) 75%,
            transparent 75%,
            transparent
            );
            /* z-index: 1; */
            background-size: 50px 50px;
            border-radius: 20px;
            overflow: hidden;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4">
                <div style="display: flex; flex-direction:row; margin-bottom: 10px;">
                    <div>CASH BALANCE:</div>
                    <div id="cash" style="margin-left: 25px;">$0</div>
                </div>
                <div style="display: flex; flex-direction:row;margin-bottom: 20px;">
                    <div>Bitcoin BALANCE:</div>
                    <div id="bitcoin" style="margin-left: 20px;">0BTC</div>
                </div>
                <div >
                    <input type="text4" id="code" value="" >
                    <button onclick="mining()" class="mt-2">START mining</button>
                    <button onclick="withraw()" class="mt-2">WITHRAW</button>

                </div>
                <div class="container1 mt-3">
                    <div id="width" class="container2">
                        <div class="container4">
                            <div class="skill" id="progress"  style="width: 50%;">
                                <p id="text" style="margin-top: -6px;margin-left: 174px; color:black;">80%</p>
                            </div>
                            <p id="text1" style="margin-top:-22.1px;width: 100%; text-align: center;margin-bottom: 0px;">80%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        init()
    </script>
@endsection
