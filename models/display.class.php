<?php

class Display {
	private $skel;
	private $header;
	private $content;
	private $footer;

	public function setSkel($skel) {
		$this->skel = $skel;
	}

	public function setHeader($header) {
		$this->header = $header;
	}

	public function setContent($content) {
		$this->content = $content;
	}

	public function getHeader() {
		return $this->header;
	}

	public function getContent() {
		return $this->content;
	}

	public function getSkel() {
		return $this->skel;
	}

	public function display() {
		require("views/".$this->skel.".phtml");
		require("views/".$this->header.".phtml");
		require("views/".$this->content.".phtml");
		require("views/".$this->footer.".phtml");

	}


}