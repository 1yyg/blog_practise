
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
        <div class="article_title">{{{$blog->title}}}</div>
        <div class="article_message">{{{$blog->author}}} &nbsp;&nbsp;更新时间：{{{$blog->created_at}}}</div>
        <div class="article_abstract">{{{$blog->short_desc}}}</div>
        <div class="article_content">{{{$blog->content}}}</div>
    </div>
    
    
</div>




<!--<div class="container">
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">欢迎登录</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('url'=>'user/signin', 'class'=>'form-signin')) }}
                <fieldset>
                    <div class="form-group">
                     {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'邮箱')) }}
                    </div>
                    <div class="form-group">
                     {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'密码')) }}
                    </div>
                     {{ Form::submit('马上登录',array('class'=>'btn btn-large btn-success btn-block')) }}

                </fieldset>
                {{ Form::close() }}
                  <hr/>
            </div>
        </div>
    </div>
</div>
</div>-->