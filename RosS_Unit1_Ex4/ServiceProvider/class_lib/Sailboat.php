<?php

class Sailboat
{
	private $boatName = "my boat";
	private $ownerName = "my name";
	private $numberOfSails;
	private $price;
	
	public function getBoatName()
	{
		return $this->boatName;
	}
	public function setBoatName($aBoatName)
	{
		$this->boatName = $aBoatName;
	}
	public function getOwnerName()
	{
		return $this->ownerName;
	}
	public function setOwnerName($aOwnerName)
	{
		$this->ownerName = $aOwnerName;
	}
	public function getNumberOfSails()
	{
		return $this->numberOfSails;
	}
	public function SetNumberOfSails($aNumberOfSails)
	{
		$this->numberOfSails = $aNumberOfSails;
	}
	public function getPrice()
	{
		return $this->price;
	}
	public function getFormattedPrice()
	{
		$formattedPrice = "$" . number_format($this->price, 2);
		return $formattedPrice;
	}
	public function setPrice($aPrice)
	{
		$this->price = $aPrice;
	}
	public function toString()
	{
		$rString = $this->getBoatName() . ", " . $this->getOwnerName() . ", " . $this->getNumberOfSails()
			. ", " . $this->getFormattedPrice();
		return $rString;
	}
}


?>