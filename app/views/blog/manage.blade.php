

{{ HTML::style('css/public.css') }}
{{ HTML::style('css/default.css') }}

{{ HTML::script('js/jquery-1.10.2.min.js') }}

<script type="text/javascript">
    
</script>
<div class=" w cnt_box">

        @include('blog.nav')


    <div class="container">

<table width="90%" id="mytab"  border="1" class="t1">
  <thead>
    <th width="10%">标题</th>
    <th width="30%">作者</th>
    <th width="20%">栏目</th>
    <th width="20%">短描述</th>
     <th width="10%">创建时间</th>
    <th width="10%">操作</th>
  </thead>
  
  @foreach($blogs as $blog)
  <tr>
    <td>{{{$blog->title}}}</td>
    <td>{{{$blog->author}}}</td>
    <td>{{{$blog->colum}}}</td>
    <td>{{{$blog->short_desc}}}</td>
    <td>{{{$blog->created_at}}}</td>
    <td>
        <a href="{{url('blog/edit/'.$blog['gid'])}}">修改</a>
        <a href="{{url('blog/destroy/'.$blog['gid'])}}">删除</a>
        <a href="{{url('blog/detail/'.$blog['gid'])}}">查看</a>
    </td>
  </tr>
 @endforeach
</table>
        <?php echo $blogs->links(); ?>

    
    </div>
</div>




