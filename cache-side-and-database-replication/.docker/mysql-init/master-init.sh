#!/bin/bash
set -e

# Espera o MySQL estar pronto
until mysqladmin ping -h "localhost" --silent; do
  sleep 1
done

# Cria usuário de replicação se não existir, usando mysql_native_password
mysql -uroot -proot -e \
  "CREATE USER IF NOT EXISTS 'repl'@'%' IDENTIFIED WITH mysql_native_password BY 'replpass';"
# Dá permissão de replicação
echo "GRANT REPLICATION SLAVE ON *.* TO 'repl'@'%';" | mysql -uroot -proot
echo "FLUSH PRIVILEGES;" | mysql -uroot -proot
