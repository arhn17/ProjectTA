<label for="email_address">Name</label>
<div class="form-group">
    <div class="form-line">
	    {{ Form::select('user_id',$user, null, ['class' => 'form-control show-tick'])}}
    </div>
</div>
<label for="email_address">Alamat</label>
<div class="form-group">
    <div class="form-line">
        {{ Form::text('alamat', null, ['class' => 'form-control'])}}
    </div>
</div>
<label for="email_address">Telepon</label>
<div class="form-group">
    <div class="form-line">
        {{ Form::text('telepon', null, ['class' => 'form-control'])}}
        
    </div>
</div>
