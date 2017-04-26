<?php

require_once "vendor/autoload.php";
require_once "generated-conf/config.php";

//Criando um contato
//$contact = new Contact();
//$contact->setName("Lucas Dimas Cavalcante Lopes");
//$contact->save();

//Criando um relacionamento
//$rel = new Relationship();
//$rel->setName("Doador");
//$rel->save();

//Salvando um Relacionamento Entidade usando apenas o ID do relacionamento - OK
//$et = new EntityRelationship();
//$et->setRelationshipId(1);
//$et->setContact($doadorg);
//$et->save();

$relq = RelationshipQuery::create()->findOneByName("Doador");
$doadorg = ContactQuery::create()->where("Contact.name like ?","%Lucas%")->limit(1)->findOne();
$relacionamentos = EntityRelationshipQuery::create()->filterByContact($doadorg)->delete();
ContactQuery::create()->delete();

//todo











