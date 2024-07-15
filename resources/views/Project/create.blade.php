<h1>User create Page</h1>
<p>This is a Create Page</p>

<div class="row">
    <div class="col-6">
<form action="{{url ('users') }}"method="POST">
@csrf
<div class="form-group">
    <label for="fullname" class="form-label">Fullname</label>
    <input type="text" class="form-control" id="fullname" name="fullname" />
</div>
<div class="form-group">
    <button class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>
</div>
