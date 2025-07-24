<p>Appliy For Job</p>
<hr>
<ul class="lead" style="text-align:left; text-transform: capitalize;list-style:none">
<li>Position :<strong> {{$apply->title}}</strong></li>
<li>department :<strong> {{$apply->department}}</strong></li>
<li>location :<strong> {{$apply->location}}</strong></strong></li>
<li>salary :<strong> {{$apply->salary}}</strong></li>
<li>State :<strong> {{$apply->state->name}}</strong></li>
    <form action="{{route('applications.store')}}" method="POST">
    @csrf
    <input value="{{$apply->id}}" hidden name="job_id">
    <input value="{{Auth::user()->id}}" hidden name="user_id">
    <button type="submit">Apply</button>
</form>
</ul>