<div class="row text-center">
    <div class="offset4 span4">
        {{ Form::open(array('class'=>'form-block')) }}
        {{ Form::email('email', NULL, array('placeholder'=>'Email')) }}
        {{ Form::password('password', array('placeholder'=>'Password')) }}
        {{ Form::submit('Login',array('class'=>'btn')) }}
        {{ Form::close() }}
    </div>
</div>

