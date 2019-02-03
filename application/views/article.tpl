{foreach from=$articles item=article}

    <div class="articles-item">
        <div class="articles-item-left">
            <p class="articles-item-title">{$article.title}</p>
            <div class="articles-item-text">{$article.text|truncate:200}</div>
        </div>
        <div class="articles-item-right">
            <p class="articles-item-name">{$article.author_surname} {$article.author_name} {$article.author_patronymic}</p>
            <button type="button" class="articles-item-btn" data-article="{$article.id}">Читать >>></button>
        </div>
    </div>

{/foreach}