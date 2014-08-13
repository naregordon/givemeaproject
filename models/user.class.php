<?php

class User {
	private $id;
	private $username;
	private $email;
	private $photo;
	private $type;
	private $nom;
	private $prenom;
	private $presentation;
	private $paypal;
	private $competences;

	public function getId() {
		return $this->id;
	}

	public function getUsername() {
		return $this->username;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getPhoto() {
		return $this->photo;
	}

	public function getType() {
		return $this->type;
	}

	public function getNom() {
		return $this->nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function getPresentation() {
		return $this->presentation;
	}

	public function getPaypal() {
		return $this->paypal;
	}

	public function getCompetences() {
		return $this->competences;
	}
}