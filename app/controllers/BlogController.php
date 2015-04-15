<?php

class BlogController extends \BaseController {

    
                public function __construct() {
                    $this->beforeFilter('csrf', array('on'=>'post'));
                     $this->beforeFilter('auth', array('only'=>array('getDashboard')));
              }       
    
	/**
	 * 
	 * 博客列表
	 *@author 黄云兵
	 * @return Response
	 */
	public function index()
	{   
                            $blog = Blog::all()->toArray();
                            return        View::make('blog.index')->with("blogs",$blog);
                    
	}

	/**
	 * 博客创建数据校验
	 * POST/blog/create
	 *
	 * @return Response
                     * @author 黄云兵
	 */
	public function create()
	{
                        $gid = Input::get("gid");

                        //校验创建博客数据是否为空
                        $validator = Validator::make(Input::all(), Blog::$rules);                              
                        if ($validator->passes()) {
                                //判断是否是新增，编辑的请求
                                if(!empty($gid)){
                                     $blog = Blog::where("gid","=",$gid)->first();
                               }else{
                                      $blog = new Blog;
                               }                                           
                                $blog->title = Input::get('title');
                                $blog->author = Input::get('author');
                                $blog->colum = Input::get('colum');
                                $blog->short_desc= Input::get('short_desc');
                                $blog->content= Input::get('content');

                                $blog->save();

                                return Redirect::to('blog/manage')->with('message', '博客发布成功，您可以区博客列表页中查看!');    
                        } else {
                                 // 验证没通过就显示错误提示信息   
                                 return Redirect::to('blog/show')->with('message', '请您正确填写下列数据')->withErrors($validator)->withInput();           
                        }
	}

        
	/**
	 * 博客列表管理
	 * POST /blog
	 *
	 * @return Response
	 */
	public function manage()
	{
                            
                            $blog = Blog::paginate(5);
                             return        View::make('blog.manage')->with("blogs",$blog);
	}

	/**
	 * 博客增加视图
	 * GET /blog/{id}
	 *
	 * @param  int  $gid
	 * @return Response
	 */
	public function show()
	{
                          return        View::make('blog.form');
	}

	/**
	 * 博客修改
	 * GET /blog/{gid}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{                    
                             //视图展示，取得博客内容
                            $blog = Blog::where("gid","=",$id)->first();
                            return View::make("blog.edit")->with("blog",$blog);                              
	}

	/**
	 * 详情页
	 * PUT /blog/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function detail($id)
	{
                            $blog = Blog::where("gid","=",$id)->first();
                            return View::make("blog.detail")->with("blog",$blog);    
	}

	/**
	 * 博客文章删除
	 * DELETE /blog/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
                            $blog = Blog::find($id);
                            $blog->delete();
                             return Redirect::to('blog/manage')->with('message', '博客删除成功'); 
	}

}