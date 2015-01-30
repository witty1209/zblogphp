<div class="post single">
	<h4 class="post-date">{$article.Time('Y年m月d日')}</h4>
	<h2 class="post-title">{$article.Title}</h2>
	<div class="post-body">{$article.Content}</div>
	<h5 class="post-tags"></h5>
	<h6 class="post-footer">
		作者:{$article.Author.StaticName}&nbsp;&nbsp;分类:{$article.Category.Name}&nbsp;&nbsp;浏览:{$article.ViewNums}&nbsp;&nbsp;评论:{$article.CommNums}
	</h6>
</div>

{if !$article.IsLock}
{template:comments}
{/if}