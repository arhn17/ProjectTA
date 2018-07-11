<label for="name">Nama</label>   
<div class="form-group">
    <div class="form-line">
        {{ Form::text('name', null, ['class' => 'form-control'])}}
    </div>
</div>

<label for="email">Email</label>    
<div class="form-group">
    <div class="form-line">
        {{ Form::text('email', null, ['class' => 'form-control'])}}
    </div>
</div>

<label for="username">Password</label>
<div class="form-group">
    <div class="form-line">
        {{ Form::input('password', 'password', null, ['class' => 'form-control'])}}
    </div>
</div>   

<div class="form-group">
    <label for="role">Role</label>
    {{ Form::select('role',$roles, null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="role">Status</label>
    <select name="status" class="form-control">
        <option value="0">Active</option>
        <option value="1">Non Active</option>
    </select>
</div>
