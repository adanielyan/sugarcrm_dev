<form target="_BLANK" method="POST" action="https://www.pdfforsugar.com/prefillPDF.aspx?id={{sugarvar key='ext2'}}"><input type="submit" value="{{sugarvar key='default'}}" title="{{sugarvar key='help'}}">
{foreach from=$fields key=k item=i}
{if is_string($bean->$k)}
<input type="hidden" name="{$k}" value="{$bean->$k}">
{/if}
{/foreach}
</form>