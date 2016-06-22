all: judged.cc
	g++ -Wall -c -I/usr/local/include/ -I/usr/local/include/mysql/ judged.cc
	g++ -Wall -o judged judged.o -L/usr/local/lib/mysql -L/usr/lib/mysql  -L/usr/lib64/mysql  -lmysqlclient
