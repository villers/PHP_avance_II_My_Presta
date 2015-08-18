{if $show_notif}
<div id="mynotifmodule" class="block">
    <p class="title_block">{$title|escape:'htmlall':'UTF-8'}</p>
    <div class="block_content">
        <blockquote>
            {$text|escape:'htmlall':'UTF-8'}<br>
            {if $show_user}
                <small>{$user|escape:'htmlall':'UTF-8'}</small>
            {/if}
        </blockquote>
    </div>
</div>
{/if}