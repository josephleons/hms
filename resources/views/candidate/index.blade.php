<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application</title>
</head>
<body>
    <h3>Welcome Job Application Management Portal</h3>
    Logged in As
        <a href="#" style="text-transform:capitalize;list-style:none;font-size:1.6em">{{Auth::user()->username}}
            </a>
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
                <a href="{{route('candidate.show',$job->id)}}">Apply</a>
            </span>
        </li>
        </ul>
         @endforeach
    </span>
    
</body>
</html>