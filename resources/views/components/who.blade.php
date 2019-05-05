
@if(Auth::guard('admin')->check())
<p class="text-success">
    You are Logged IN as a <strong>ADMIN</strong>
</p>
@else
<p class="text-danger">
    You are Logged OUT as an <strong>ADMIN</strong>
</p>
@endif
