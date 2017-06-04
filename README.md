# patchDiffOnline

功能：
A.通过补丁形式上线代码
1.项目上线或测试前打包，找出不同的文件
2.对比差异文件，审核代码，审核通过后上线代码;代码有问题可以回退
3.不同机器间代码的同步
B.通过切换代码分支上线代码


---
提交到composer
curl -XPOST -H'content-type:application/json' 'https://packagist.org/api/update-package?username=liujiankang&apiToken=API_TOKEN' -d'{"repository":{"url":"PACKAGIST_PACKAGE_URL"}}'
