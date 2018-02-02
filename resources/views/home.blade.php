@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <input type="hidden" value="{!!csrf_token()!!}" id="token">
                    <input type="text" id="country">
                    &nbsp; INR Rate:<input type="text" id="inr_rate" disabled>
                    <span class="glyphicon glyphicon-heart like"></span>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mapouter"><div class="gmap_canvas"><a href="https://www.pureblack.de"></a><iframe width="720" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=India&t=&z=5&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{overflow:hidden;height:500px;width:600px;}.gmap_canvas {background:none!important;height:500px;width:600px;}</style></div>


                </div>
            </div>
        </div>
    </div>

</div>
@endsection
