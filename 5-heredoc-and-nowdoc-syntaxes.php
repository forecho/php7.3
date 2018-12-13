<?php

# 更加方便的 Heredoc 和 Nowdoc 语法
# Heredoc 和 Nowdoc 语法 使 PHP 代码更加具有可读性，错误率也会降低


# Heredoc
if (version_compare(PHP_VERSION, '7.3.0') >= 0) {
    // php 7.3 之后
    // - 支持闭合标记符的缩进；
    // - 不再强制闭合标记符的换行；

    // $query = <<<SQL
    //         悲观锁（Pessimistic Lock），顾名思义，就是很悲观，每次去拿数据的时候都认为别人会修改，所以每次在拿数据的时候都会上锁，这样别人想拿这个数据就会block直到它拿到锁。
    //         悲观锁：假定会发生并发冲突，屏蔽一切可能违反数据完整性的操作。
    //         SQL;
    
    // $query = <<<SQL
    //     悲观锁（Pessimistic Lock），顾名思义，就是很悲观，每次去拿数据的时候都认为别人会修改，所以每次在拿数据的时候都会上锁，这样别人想拿这个数据就会block直到它拿到锁。
    //     悲观锁：假定会发生并发冲突，屏蔽一切可能违反数据完整性的操作。
    // SQL;

    // error: 需要注意的是 结束标签缩进不能大于（只能同级或者小于）内容的最小缩进，如下面几种情况都是错误的

    // $query = <<<SQL
    // 悲观锁（Pessimistic Lock），顾名思义，就是很悲观，每次去拿数据的时候都认为别人会修改，所以每次在拿数据的时候都会上锁，这样别人想拿这个数据就会block直到它拿到锁。
    //         悲观锁：假定会发生并发冲突，屏蔽一切可能违反数据完整性的操作。
    //     SQL;

    //  $query = <<<SQL
    //     悲观锁（Pessimistic Lock），顾名思义，就是很悲观，每次去拿数据的时候都认为别人会修改，所以每次在拿数据的时候都会上锁，这样别人想拿这个数据就会block直到它拿到锁。
    // 悲观锁：假定会发生并发冲突，屏蔽一切可能违反数据完整性的操作。
    //     SQL;

    // $query = <<<SQL
    // 悲观锁（Pessimistic Lock），顾名思义，就是很悲观，每次去拿数据的时候都认为别人会修改，所以每次在拿数据的时候都会上锁，这样别人想拿这个数据就会block直到它拿到锁。
    //     悲观锁：假定会发生并发冲突，屏蔽一切可能违反数据完整性的操作。
    // SQL;

} else {
    $query = <<<SQL
SELECT *
FROM `table`
WHERE `column` = true;
SQL;
}
print_r($query);
echo "\n";



## Heredoc 和 Nowdoc 的区别
# Nowdoc 是单引号字符串，Heredoc 是双引号字符串

$foo = 'bar';

$here = <<<HERE
    I'm here , $foo !
HERE;

$now = <<<'NOW'
    I'm now , $foo !      
NOW;

print_r($here);
echo "\n";
print_r($now);
echo "\n";