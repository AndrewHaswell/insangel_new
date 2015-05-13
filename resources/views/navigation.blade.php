<div id="head">
    <div id="insangel_logo"><img src="images/insangel.png" alt="Insangel Logo"/></div>
    <div id="navigation">
        <ul id="menu">
            @foreach ($navigation as $link_title => $link)
                @if (is_string($link))
                    <li><a href="{{$link}}">{{$link_title}}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
