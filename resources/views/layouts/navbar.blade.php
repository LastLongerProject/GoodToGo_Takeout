<nav class="navbar navbar-default gtg-navbar" role="navigation">
  <div class="navbar-header">
   {{--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> --}}
{{--       <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>     --}}
    <a class="navbar-brand" href="{{ Route('home') }}">@yield('title')</a>
  </div>
  {{-- <div class="navbar-collapse collapse"> --}}
    @if( URL::current() != url('/'))


    <ul class="nav navbar-nav navbar-left">
        <li><a href="{{ URL::previous() }}" class="gtg-navback"><img src="data:image/svg+xml;base64,CjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDEwMDAgMTAwMCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTAwMCAxMDAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPG1ldGFkYXRhPiBTdmcgVmVjdG9yIEljb25zIDogaHR0cDovL3d3dy5vbmxpbmV3ZWJmb250cy5jb20vaWNvbiA8L21ldGFkYXRhPgogIDxnPjxwYXRoIGQ9Ik05OTAsNTAzLjRjMCwyNS45LTIxLDQ2LjktNDYuOSw0Ni45SDU2LjljLTI1LjksMC00Ni45LTIxLTQ2LjktNDYuOXYtNC42YzAtMjUuOSwyMS00Ni45LDQ2LjktNDYuOWg4ODYuMWMyNS45LDAsNDYuOSwyMSw0Ni45LDQ2LjlWNTAzLjR6IiBzdHlsZT0iZmlsbDojRkZGRkZGIj48L3BhdGg+PHBhdGggZD0iTTQzMC45LDEzMS4xYzE4LjMsMTguMywxOC4zLDQ4LjEsMCw2Ni40TDkzLjEsNTM1LjJjLTE4LjMsMTguMy00OC4xLDE4LjMtNjYuNCwwbC0yLjktMi45QzUuNSw1MTQsNS41LDQ4NC4zLDIzLjksNDY2bDMzNy43LTMzNy43YzE4LjMtMTguMyw0OC4xLTE4LjMsNjYuNCwwTDQzMC45LDEzMS4xeiIgc3R5bGU9ImZpbGw6I0ZGRkZGRiI+PC9wYXRoPjxwYXRoIGQ9Ik00MzAuOSw4NjguOWMxOC4zLTE4LjMsMTguMy00OC4xLDAtNjYuNEw5My4xLDQ2NC44Yy0xOC4zLTE4LjMtNDguMS0xOC4zLTY2LjQsMGwtMi45LDIuOUM1LjUsNDg2LDUuNSw1MTUuNywyMy45LDUzNGwzMzcuNywzMzcuN2MxOC4zLDE4LjMsNDguMSwxOC4zLDY2LjQsMEw0MzAuOSw4NjguOXoiIHN0eWxlPSJmaWxsOiNGRkZGRkYiPjwvcGF0aD48L2c+PC9zdmc+CiAg" width="24" height="24">
        </a></li>
    </ul>
      @endif
{{--     <ul class="nav navbar-nav navbar-right">
      <li><a href="#about">Right</a></li>
      <li><a href="#contact">Right</a></li>
    </ul> --}}
{{--   </div> --}}
</nav>