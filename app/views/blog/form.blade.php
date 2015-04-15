

{{ HTML::style('css/public.css') }}
{{ HTML::style('css/default.css') }}

{{ HTML::script('js/jquery-1.10.2.min.js') }}
{{ HTML::script('js/kindeditor-min.js') }}
{{ HTML::script('js/zh_CN.js') }}
		<style>
			form {
				margin: 0;
			}
			textarea {
				display: block;
			}
		</style>

		<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					allowFileManager : true
				});
				K('input[name=getHtml]').click(function(e) {
					alert(editor.html());
				});
				K('input[name=isEmpty]').click(function(e) {
					alert(editor.isEmpty());
				});
				K('input[name=getText]').click(function(e) {
					alert(editor.text());
				});
				K('input[name=selectedHtml]').click(function(e) {
					alert(editor.selectedHtml());
				});
				K('input[name=setHtml]').click(function(e) {
					editor.html('<h3>Hello KindEditor</h3>');
				});
				K('input[name=setText]').click(function(e) {
					editor.text('<h3>Hello KindEditor</h3>');
				});
				K('input[name=insertHtml]').click(function(e) {
					editor.insertHtml('<strong>插入HTML</strong>');
				});
				K('input[name=appendHtml]').click(function(e) {
					editor.appendHtml('<strong>添加HTML</strong>');
				});
				K('input[name=clear]').click(function(e) {
					editor.html('');
				});
			});
		</script>
<div class=" w cnt_box">
 @include('blog.nav')
    <div class="container">
          {{ Form::open(array('url'=>'blog/create', 'class'=>'form-signin')) }}
        <div class="text-form">
            <ul>
                <li ><span>标&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题:</span><input type="text" name="title" value=""></li>
                <li class="author"><span>作&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;者:</span><input type="text" name="author" value=""></li>
                <li class="colum"><span>隶属栏目:</span><input type="text" name="colum" value=""></li>
                <li  class="short_news"><span>信息摘要:</span><input type="text" name="short_desc" value=""></li>
                <li class="content"><span>详细内容</span>: 
                
  			<textarea name="content" style="width:800px;height:400px;visibility:hidden;">KindEditor</textarea>
			<p>
				<input type="button" name="getHtml" value="取得HTML" />
				<input type="button" name="isEmpty" value="判断是否为空" />
				<input type="button" name="getText" value="取得文本(包含img,embed)" />
				<input type="button" name="selectedHtml" value="取得选中HTML" />
				<br />
				<br />
				<input type="button" name="setHtml" value="设置HTML" />
				<input type="button" name="setText" value="设置文本" />
				<input type="button" name="insertHtml" value="插入HTML" />
				<input type="button" name="appendHtml" value="添加HTML" />
				<input type="button" name="clear" value="清空内容" />
				<input type="reset" name="reset" value="Reset" />
			</p>              
                
                
                </li>
                <li class="sure_sub"><input type="submit" value="添加文章"></li>
            </ul>
        </div>
        {{ Form::close() }}
    </div>
    
    
</div>




