<?php

class Projet {
	private $projetnom;
	private $projetdescription;
	private $projetwords;
	private $profilrecherche;
	private $username;
	private $tempstravail;
	private $projetdate;
	private $statut;

	public function getProjetnom() {
		return $this->projetnom;
	}

	public function getProjetdescription() {
		return $this->projetdescription;
	}

	public function getProjetwords() {
		return $this->projetwords;
	}

	public function getProjectUsername() {
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