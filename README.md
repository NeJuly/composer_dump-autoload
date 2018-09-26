# 总结：	
	//总结类文件自动加载机制
	//1，通过composer dump-autoload 自动加载类文件和文件
	/*{
		  "autoload" : {
		    "files" : [
		      "common/functions.php",
		      "common/test.php"
		    ],
		    "classmap":["class/"]
		  }
		}*/
	//2，如果需要定义公共方法 在框架中需要加载公共文件。
	

	//实现步骤：
	//1，编写composer.json文件。自动加载文件。  composer  dump-autoload	
	//2，每修改一次composer.json文件就应该执行一次composer dump-autoloadd
