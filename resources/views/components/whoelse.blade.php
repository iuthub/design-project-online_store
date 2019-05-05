@if(Auth::guard('web')->check())
<p class="text-success">
    You are Logged IN as a <strong>USER</strong>
</p>
@else
<p class="text-danger">
    You are Logged OUT as a <strong>USER</strong>
</p>
@endif
