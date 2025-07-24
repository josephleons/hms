 <na>
    <h2 style="text-transform: capitalize,font-weight:bold">Welcome Login As: {{Auth::user()->username}}</h2><hr>
    <button style="background-color:olivedrab">  <a href="{{route('jobs.index')}}">Job Listing</a></button>
<button style="background-color:rgb(173, 72, 4)">  <a href="{{'/auth'}}">Logout</a></button>
</na>