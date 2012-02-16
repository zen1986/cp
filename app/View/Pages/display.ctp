<div class="container">
    <div class="span10 " id="name">
        <div  class="page-header">
        <h1>today is thursday</h1>
        </div>
    <p>
Pear Mail Queue 的docs有一个bug让我花了不少时间来fix。
本来想图个方便，直接把Mail Queue的docs copy到web root run。但不管怎么都不能put mail到database。我用的是mysql的driver，唯一的error 就是一个unknown error。把error_display set成 E_ALL | E_STRICT，出来一大堆deprecated的错误。Mail_Queue.php中的put直接return container->put()。我找到container/mdb2.php 中的put function，发现它有获取一个auto increment的id,这个过程是由db的nextID来完成的。我在得到这个id之后立即var_dump这个id, 发现突然多出来了一个”no such field”的错误。这个错误在没有var_dump id的情况下没有被输出，这个很奇怪。然后我在_connect()里找到了db的定义MDB2.php。奇怪的是在MDB2 class里的nextID直接return了一个raiseError()。我查网上的文档，上面的确说明了这个函数是用来auto increment sequence id的，可是这个还是返回的是一个错误啊。还是我对OOP的不够熟悉，原来这个函数是被driver class重载了。在MDB2/Driver/mysql.php里面，这个函数有得到一个result，然后我var_dump这个result发现，它得到一个MDB2_Error: Last executed query: INSERT INTO mail_queue_seq (sequence) VALUES (NULL)。于是找到mail_queue_seq这个table，发现它只有一个id field。把它改成sequence，fixed。
    
    </p>
    </div>
</div>
