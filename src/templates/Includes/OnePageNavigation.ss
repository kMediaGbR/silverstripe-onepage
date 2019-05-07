<% loop $Menu(1) %>
    <% if $isSection %>
        <% if $Children %>
            <ul>
                <% loop $Children %>
                    <li><a href="#$URLSegment">$MenuTitle</a></li>
                <% end_loop %>
            </ul>
        <% end_if %>
    <% end_if %>
<% end_loop %>
