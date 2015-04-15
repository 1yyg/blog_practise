<?php

class Blog extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'blog';
                    
 	/**
	 * 主键id
	 *
	 * @var string
	 */       
                    protected $primaryKey = 'gid';
        	/**
	 * 博客添加验证字段
	 *
	 * @var array
	 */
                    public static $rules = array(
                                                "title"=>"required",
                                                "author"=>"required",
                                                "colum"=>"required",
                                                "short_desc"=>"required",
                                                "content"=>"required"
                   );

}
