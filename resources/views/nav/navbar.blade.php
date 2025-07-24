<nav>
<h4 style="text-transform: capitalize,font-weight:bold">Welcome Login As: {{Auth::user()->username}}</h4><hr>
<button style="background-color: cadetblue">
    <a href="{{route('applications.index')}}">Application</a>
</button>
<button style="background-color:olivedrab">  <a href="{{route('jobs.index')}}">Job Listing</a></button>
<button style="background-color:darksalmon">  <a href="{{route('candidate.index')}}">Candidate</a></button>
<button style="background-color:rgb(173, 72, 4)">  <a href="{{'/auth'}}">Logout</a></button>
</nav>