{if $show_notif}
<div id="mynotifmodule">
    <div class="container">
        <h3>{$title|escape:'htmlall':'UTF-8'}</h3>
        <div>
            <blockquote>
                {$text|escape:'htmlall':'UTF-8'}<br>
                {if $show_user}
                    <small>{$user|escape:'htmlall':'UTF-8'}</small>
                {/if}
            </blockquote>
        </div>
    </div>
</div>
{/if}