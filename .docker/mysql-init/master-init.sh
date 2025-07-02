#!/bin/bash
set -e

# Espera o MySQL estar pronto
until mysqladmin ping -h "localhost" --silent; do
  sleep 1
done

# Cria usuário de replicação se não existir
echo "CREATE USER IF NOT EXISTS 'repl'@'%' IDENTIFIED BY 'replpass';" | mysql -uroot -proot
# Dá permissão de replicação
echo "GRANT REPLICATION SLAVE ON *.* TO 'repl'@'%';" | mysql -uroot -proot
echo "FLUSH PRIVILEGES;" | mysql -uroot -proot
