# simple_html_dom
[![Latest Stable Version](https://poser.pugx.org/weglot/simplehtmldom/v/stable)](https://packagist.org/packages/weglot/simplehtmldom)
[![License](https://poser.pugx.org/weglot/simplehtmldom/license)](https://packagist.org/packages/weglot/simplehtmldom)

## Overview
Simple fork of [simple_html_dom](http://simplehtmldom.sourceforge.net/) PHP library with some tweaks.

## Changelog





## Unit Test

1. 执行指定目录所有用例

```sh
$ ./vendor/phpunit/phpunit/phpunit --configuration phpunit.xml
```

2. 执行指定文件

```sh
$ ./vendor/phpunit/phpunit/phpunit --configuration phpunit.xml --test-suffix TemplateTest.php
```

3. 执行 TemplateTest 用例

```sh
$ ./vendor/phpunit/phpunit/phpunit --configuration phpunit.xml --filter TemplateTest
```

4. 执行 TemplateTest::test01 用例

```sh
$ ./vendor/phpunit/phpunit/phpunit --configuration phpunit.xml --filter TemplateTest::test01
```
