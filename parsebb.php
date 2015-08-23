<?php



class markup{
	public $bb = '';
	function __construct() {
		$this->bb = '';
	}
	function parseBB($value) {
		$search = array(
			'/\[b\](.*?)\[\/b\]/is',
			'/\[i\](.*?)\[\/i\]/is',
			'/\[u\](.*?)\[\/u\]/is',
			'/\[s\](.*?)\[\/s\]/is',
			'/\[size\=(.*?)\](.*?)\[\/size\]/is',
			'/\[color\=(.*?)\](.*?)\[\/color\]/is',
			'/\[center\](.*?)\[\/center\]/is',
			'/\[quote\](.*?)\[\/quote\]/is',
			'/\[quote\=(.*?)\](.*?)\[\/quote\]/is',
			'/\[url\](.*?)\[\/url\]/is',
			'/\[url\=(.*?)\](.*?)\[\/url\]/is',
			'/\[img\](.*?)\[\/img\]/is',
			'/\[img\ width\=(.*?)\ height\=(.*?)\](.*?)\[\/img\]/is',
			'/\[img\=(.*?)x(.*?)\](.*?)\[\/img\]/is',
			'/\[ol\](.*?)\[\/ol\]/is',
			'/\[ul\](.*?)\[\/ul\]/is',
			'/\[li\](.*?)\[\/li\]/is',
			'/\[code\](.*?)\[\/code\]/is',
			'/\[table\](.*?)\[\/table\]/is',
			'/\[tr\](.*?)\[\/tr\]/is',
			'/\[td\](.*?)\[\/td\]/is',
			'/\[th\](.*?)\[\/th\]/is',
			'/\[youtube\](.*?)\[\/youtube\]/is',
			'/\[move\](.*?)\[\/move\]/is',
			'/\[mover\](.*?)\[\/mover\]/is',
			'/\[up\](.*?)\[\/up]/is',
			'/\[down\](.*?)\[\/down]/is',
			'/\[noparse](.*?)\[\/noparse]/is' // Searching for a better way to do this.
		);
		$replace = array( // TODO: change to HTML5
			'<strong>$1</strong>',
			'<em>$1</em>',
			'<u>$1</u>',
			'<strike>$1</strike>',
			'<span style="font-size:$1">$2</span>',
			'<span style="color:$1">$2</span>',
			'<center>$1</center>',
			'<blockquote><p>$1</p></blockquote>',
			'<blockquote><p>$2</p><footer>- <cite>$1</cite></footer></blockquote>',
			'<a href="$1">$1</a>',
			'<a href="$1">$2</a>',
			'<img src="$1" alt="" />',
			'<img src="$3" width="$1" height="$2" alt="" />',
			'<img src="$3" width="$1" height="$2" alt="" />',
			'<ol class="bbol">$1</ol>',
			'<ul class="bbul">$1</ul>',
			'<li class="bbli">$1</li>',
			'<pre>$1</pre>',
			'<table>$1</table>',
			'<tr>$1</tr>',
			'<td>$1</td>',
			'<th>$1</th>',
			'<iframe width="90%" height="315" src="$1" frameborder="0" allowfullscreen></iframe>',
			'<marquee behavior="scroll" direction="left">$1</marquee>',
			'<marquee behavior="scroll" direction="right">$1</marquee>',
			'<marquee behavior="scroll" direction="up">$1</marquee>',
			'<marquee behavior="scroll" direction="down">$1</marquee>',
			'<xmp>$1</xmp>' // Searching for a better way to do this.
			);

		$var = preg_replace($search, $replace, $value);
		$this->bb = '';
		$this->bb = $var;
	}
	function getBB() {
		return $this->bb;
	}
}
?>
