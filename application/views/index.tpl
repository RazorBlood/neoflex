{include file="$view/header.tpl"}
<div class="bg--dark"></div>

<div class="wrapper">
    <div class="add-articles">
        <form class="form-wrapper">
            <div class="form-left">
                <input type="text" name="title" placeholder="Заголовок статьи">

                <textarea name="text" rows="10" placeholder="Поле ввода текста статьи"></textarea>
            </div>
            <div class="form-right">
                <input type="text" class="surname" name="surname" placeholder="Фамилия">
                <input type="text" class="name" name="name" placeholder="Имя">
                <input type="text" class="patronymic" name="patronymic" placeholder="Отчество">

                <select name="rubric_id">
                    {foreach from=$rubrics item=rubric}
                        <a class="rubrics-item" data-rubric="{$rubric.id}" >{$rubric.name}</a>
                        <option value="{$rubric.id}">{$rubric.name}</option>
                    {/foreach}
                </select>

                <button type="button" class="submit">Опубликовать</button>

            </div>
        </form>
    </div>
    <div class="rubrics-list">
        {foreach from=$rubrics item=rubric}
            <a class="rubrics-item" data-rubric="{$rubric.id}" >{$rubric.name}</a>
        {/foreach}
    </div>
    <div class="articles-list">
        {include file="$view/article.tpl"}
    </div>
</div>

{include file="$view/script.tpl"}
{include file="$view/footer.tpl"}
