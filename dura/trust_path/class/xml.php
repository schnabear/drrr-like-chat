<?php


class Dura_Class_Xml extends SimpleXMLElement
{
	public function asXML($string = '')
	{
		if ( !empty($string) )
		{
			return parent::asXML($string);
		}

		$string = parent::asXML();

		if ( $string === false )
		{
			return false;
		}

		$this->_creanupXML($string);
		return $string;
	}

	public function asArray()
	{
		$this->_objectToArray($this);
		return $this;
	}

	public function addChild($name, $value = null, $namespace = null)
	{
		if ( is_string($value) )
		{
			// NOTE >> http://www.w3.org/TR/REC-xml/#charsets
			$value = preg_replace('/[^\x{0009}\x{000A}\x{000D}\x{0020}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}]/uS', '�', $value);
			$value = str_replace('&', '&amp;', $value);
		}

		return parent::addChild($name, $value, $namespace);
	}

	protected function _creanupXML(&$string)
	{
		$string = preg_replace("/>\s*</", ">\n<", $string);
		$lines  = explode("\n", $string);
		$string = array_shift($lines) . "\n";
		$depth  = 0;

		foreach ( $lines as $line )
		{
			if ( preg_match('/^<[\w]+>$/U', $line) )
			{
				$string .= str_repeat("\t", $depth);
				$depth++;
			}
			elseif ( preg_match('/^<\/.+>$/', $line) )
			{
				$depth--;
				$string .= str_repeat("\t", $depth);
			}
			else
			{
				$string .= str_repeat("\t", $depth);
			}

			$string .= $line . "\n";
		}

		$string = trim($string);
	}

	protected function _objectToArray(&$object)
	{
		if ( is_object($object) ) $object = (array) $object;
		if ( !is_array($object) ) return;

		foreach ( $object as &$member )
		{
			$this->_objectToArray($member);
		}
	}
}

?>
