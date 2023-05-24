<?php
namespace Models\FIN;
use \Models\Model;

class PaiementchequeDetail extends Model {

	protected static $sqlQueries = array();

	protected static $table = 'paiementchequedetails';
	protected static $pk = array(
		'ID' => array(
			'auto' => true,
		),
	);
	protected static $fields = array(
		'Banque' => array(
			'fk' => 'FIN\\Banque',
		),
		'NumCheque' => array(
			'type' => 'varchar',
		),
		'Tireur' => array(
			'type' => 'varchar',
		),
		'Client' => array(
			'type' => 'varchar',
		),
		'DateEncaissement' => array(
			'type' => 'date',
		),
	);
	
	
	
}
