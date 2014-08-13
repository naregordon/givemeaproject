<?php

class Projet {
	private $id;
	private $projetnom;
	private $projetdescription;
	private $projetwords;
	private $profilrecherche;
	private $username;
	private $tempstravail;
	private $projetdate;
	private $statut;

	public function getProjetid() {
		return $this->id;
	}

	public function getProjetnom() {
		return $this->projetnom;
	}

	public function getProjetdescription() {
		return $this->projetdescription;
	}

	public function getProjetwords() {
		return $this->projetwords;
	}

	public function getProjetusername() {
		return $this->username;
	}

	public function getProfilrecherche() {
		return $this->profilrecherche;
	}

	public function getTempstravail() {
		return $this->tempstravail;
	}

	public function getProjetdate() {
		return $this->projetdate;
	}

	public function getStatut() {
		return $this->statut;
	}
}