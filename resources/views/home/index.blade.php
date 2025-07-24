<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application</title>
</head>
<body>
    <a href="{{route('users.create')}}">Register</a> Or
    <a href="{{'/auth'}}">login</a> To Apply
    <p>All Available Jobs <strong style="color:blue">({{$totaljobs}})</strong></p>
    <hr>
    @foreach($jobs as $job)
    <span>
    <ul class="lead" style="text-align:left; text-transform: capitalize;list-style:none">
        <li>Position :<strong> {{$job->title}}</strong></li>
        <li>department :<strong> {{$job->department}}</strong></li>
        <li>location :<strong> {{$job->location}}</strong></strong></li>
        <li>salary :<strong> {{$job->salary}}</strong></li>
        <li>State :<strong> {{$job->state->name}}</strong></li>
        <li>
            <span>
                <a href="{{'/auth'}}">Apply</a>
            </span>
        </li>
        </ul>
         @endforeach
    </span>
    
</body>
</html>