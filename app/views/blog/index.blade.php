

{{ HTML::style('css/public.css') }}
{{ HTML::style('css/default.css') }}

{{ HTML::script('js/jquery-1.10.2.min.js') }}

<script type="text/javascript">
    
</script>
<div class=" w cnt_box">
 @include('blog.nav')
    <div class="container">
          @foreach($blogs as $blog)
        <div class="desc">
            <div class="t_title"><a href="{{url('blog/detail/'.$blog['gid'])}}">{{{$blog['title']}}}</a></div>
            <div class="t_desc"><a href="{{{url("blog/detail/".$blog['gid'])}}}">{{{$blog['short_desc']}}}</a></div>
            <span class="t_author" >作者：{{{$blog['author']}}}&nbsp;&nbsp;&nbsp;更新时间：{{{$blog['created_at']}}}</span>
        </div>
          @endforeach
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