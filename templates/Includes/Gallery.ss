<% if GalleryItems %>
<ul class="large-block-grid-5 medium-block-grid-3 small-block-grid-2 clearing-thumbs" data-clearing>
    <% loop GalleryItems %>
    <li>
        <a href="{$Image.URL}" title="<% if Title %>{$Title}<% else %>{$Image.Title}<% end_if %>">
            <img src="{$Image.CroppedImage(200, 200).URL}" class="th" alt="<% if Title %>{$Title}<% else %>{$Image.Title}<% end_if %>" />
        </a>
    </li>
    <% end_loop %>
</ul>
<% end_if %>
