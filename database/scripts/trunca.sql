-- mysql -h localhost -u root -p
-- source trunca.sql

SET foreign_key_checks = 0;

truncate table  escriba.ocupacao_cargo; 

truncate table  escriba.cargo; 

truncate table  escriba.pais; 
truncate table  escriba.potencia; 
truncate table  escriba.email; 
truncate table  escriba.endereco; 
truncate table  escriba.telefone; 
truncate table  escriba.loja; 
truncate table  escriba.visita; 
truncate table  escriba.visitante; 
truncate table  escriba.dependente; 
truncate table  escriba.presenca_sessao; 
truncate table  escriba.sessao; 
truncate table  escriba.irmao; 

truncate table  escriba.password_resets; 
truncate table  escriba.users; 

truncate table  escriba.tagging_tag_groups; 
truncate table  escriba.tagging_tagged; 
truncate table  escriba.tagging_tags; 
truncate table  escriba.migrations; 

SET foreign_key_checks = 1;