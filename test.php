<?php

require_once "vendor/autoload.php";
require_once "generated-conf/config.php";

//Test without the crossRefEnabled and value = "USER"
$relationship = RelationshipQuery::create()->findOneById(1);
$contact = ContactQuery::create()->useEntityRelationshipQuery()->filterByRelationship($relationship)->endUse()->findOne();

//needed behaviour
$contact = new Contact();
$contact->getEntityRelationshipsJoinRelationship();



