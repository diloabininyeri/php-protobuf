###  php protobuf server client via gRPC

server
```console
php server.php
```

client
```console
php client.php
```


if  you want to compile to  proto file you can run bellow code (**no need for test**)...
```console

 protoc --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=$(which grpc_php_plugin) helloworld.proto

```