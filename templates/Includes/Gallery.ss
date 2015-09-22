<% if GalleryItems %>
<ul class="large-block-grid-5 medium-block-grid-3 small-block-grid-2">
    <% loop GalleryItems %>
    <li>
        <% if VideoURL %>
        <a href="{$VideoURL}" title="<% if Title %>{$Title}<% else %>{$Image.Title}<% end_if %>" class="fancybox-media" rel="gallery">
            <img src="{$Image.CroppedImage(200, 200).URL}" class="th video-thumb" alt="<% if Title %>{$Title}<% else %>{$Image.Title}<% end_if %>" />
        </a>
        <% else %>
        <a href="{$Image.URL}" title="<% if Title %>{$Title}<% else %>{$Image.Title}<% end_if %>" class="fancybox" rel="gallery">
            <img src="{$Image.CroppedImage(200, 200).URL}" class="th" alt="<% if Title %>{$Title}<% else %>{$Image.Title}<% end_if %>" />
        </a>
        <% end_if %>
    </li>
    <% end_loop %>
</ul>
<% end_if %>
