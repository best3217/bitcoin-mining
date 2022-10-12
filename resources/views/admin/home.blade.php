@extends('layouts.app')

@section('css')
    <style>
        .container4 {
            background-color: rgb(154, 154, 154);
            z-index: -1;
            border-radius: 25px;
        }
        .text4 {
            font-size: 20px;
            color: rgb(255, 255, 255);
            width:100%;
            text-align: center;
            z-index: 1000;
            margin-top: -30px;
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
            border-radius: 30px;
        }
        .skill {
            z-index: 0;
            display: block;
            color: white;
            padding: 1%;
            border-radius: 30px;
            background-color: #5fef61;
            background-image: linear-gradient(
            center bottom,
            rgb(43, 194, 83) 37%,
            rgb(84, 240, 84) 69%
            );
            box-shadow: inset 0 2px 9px rgba(255, 255, 255, 0.3),
            inset 0 -2px 6px rgba(0, 0, 0, 0.4);
            box-shadow: inset 0 2px 9px rgba(255, 255, 255, 0.3),
            inset 0 -2px 6px rgba(0, 0, 0, 0.4);
            position: relative;
            overflow: hidden;
            height: 20px;
        }
        .skill::after {
            z-index: 0;
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
            z-index: 1;
            background-size: 50px 50px;
            border-radius: 30px;
            overflow: hidden;
        }
    </style>
@endsection

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="container">
                    <div class="dropdown" style="display: inline;">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            Select Cash
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" onclick="Cash(3)">0</a></li>
                            <li><a class="dropdown-item" onclick="Cash(1)">100</a></li>
                            <li><a class="dropdown-item" href="#" onclick="Cash(2)">1000</a></li>
                        </ul>
                        </div>
                        <button type="button" class="btn btn-primary " onclick="Stopming()">
                        Stop mining
                        </button>
                        <div style="display: flex; flex-direction:row; margin-bottom: 10px;margin-top: 10px;">
                        <div>CASH BALANCE:</div>
                        <div id="cash" style="margin-left: 25px;">$0</div>
                        <div style="display: flex; flex-direction:row;margin-bottom: 20px;">
                            <div>Bitcoin BALANCE:</div>
                            <div id="bitcoin" style="margin-left: 20px;">0BTC</div>
                        </div>
                    </div>
                </div>
                <div class="container1">
                    <div id="width" class="container2">
                    <div class="container4">
                        <div class="skill" id="progress"  style="width: 0%;">
                            <p id="text" style="margin-top: -6px;margin-left: 174.2px; color:black;">0%</p>
                        </div>
                        <p id="text1" style="margin-top:-22.1px;width: 100%; text-align: center;margin-bottom: 0px;">0%</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

@section('js')
<script>
    admin()
</script>
@endsection
