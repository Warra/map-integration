<!DOCTYPE html>
<html>
<head>
    <title>Map Integration</title>
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') !!}
    {!! Html::style('css/main.css') !!}
</head>
<body>
    <div class="all-padding">
        <div class="col-md-6">
        {!! Form::open() !!}
            {!! Form::label('location', 'Location', ['class' => 'label']) !!}
            {!! Form::text('location', '', ['class' => 'form-control']) !!} <br />
            {!! Form::submit('Use Location') !!}
        {!! Form::close() !!}
        </div>
        <div id="map-canvas" class="col-md-6 map-section">
            
        </div>
    </div>
    
</body>
    {!! Html::script('http://code.jquery.com/jquery-1.11.3.min.js') !!}
    {!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCnB9CM1raIla-HdXTM_8fwnLtN2rY65Ig') !!}
    {!! Html::script('js/main.js') !!}
</html>