<?php
require_once(__DIR__ . '/RestGetAllEndpointClass.php');
$benefit_endpoint = new RestGetAllEndpointClass('benefit');
$benefit_endpoint->add_actions();
$benefit_endpoint = new RestGetAllEndpointClass('abilities');
$benefit_endpoint->add_actions();
$benefit_endpoint = new RestGetAllEndpointClass('subscriptions');
$benefit_endpoint->add_actions();
$benefit_endpoint = new RestGetAllEndpointClass('projects');
$benefit_endpoint->add_actions();
$benefit_endpoint = new RestGetAllEndpointClass('technologies');
$benefit_endpoint->add_actions();
?>