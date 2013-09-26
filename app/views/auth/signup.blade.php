<div class="row text-center">
    <div class="offset4 span4">
        {{ Form::open(array('class'=>'form-block')) }}
            <legend>New to Need a Hand? <span class="muted">Sign up</span></legend>
            {{ Form::text('fullname', NULL, array('placeholder'=>'Full name')) }}
            {{ Form::email('email', NULL, array('placeholder'=>'Email')) }}
            {{ Form::password('password', array('placeholder'=>'Password')) }}
            {{ Form::submit('Sign up',array('class'=>'btn')) }}
        {{ Form::close() }}
    </div>
</div>

