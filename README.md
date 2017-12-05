PHP Study
====================================
###一、创建/删除一个多级目录
1.     mkdir()/rmdir()
2.错误：PHP Warning:  mkdir(): No such file or directory in ...
3.原因：目录要一级一级的建
4.     if(!is_dir(test/haha)){
            mkdir("test/");
            mkdir("haha/");
        }