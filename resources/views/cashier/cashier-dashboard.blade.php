<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @include('tool.htmlhead')
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        @include('tool.header')
        @include('cashier.tool.sidebar')
            <div class="page-wrapper">
                @include('tool.dbody')
            </div>
    </div>
        @include('tool.script')
</body>
</html>
