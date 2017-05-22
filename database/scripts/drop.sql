-- mysql -h localhost -u root -p
-- source drop.sql

SET foreign_key_checks = 0;
drop table if exists escriba.ocupacao_cargo cascade; 
drop table if exists escriba.cargo cascade; 
drop table if exists escriba.pais cascade; 
drop table if exists escriba.potencia cascade; 
drop table if exists escriba.email cascade; 
drop table if exists escriba.endereco cascade; 
drop table if exists escriba.telefone cascade; 

drop table if exists escriba.loja cascade; 


drop table if exists escriba.visita cascade; 
drop table if exists escriba.visitante cascade; 

drop table if exists escriba.dependente cascade; 


drop table if exists escriba.presenca_sessao cascade; 
drop table if exists escriba.sessao cascade; 


drop table if exists escriba.irmao cascade; 


drop table if exists escriba.password_resets cascade; 
drop table if exists escriba.users cascade; 
drop table if exists escriba.tagging_tag_groups cascade; 
drop table if exists escriba.tagging_tagged cascade; 
drop table if exists escriba.tagging_tags cascade; 
drop table if exists escriba.migrations cascade; 

SET foreign_key_checks = 1;