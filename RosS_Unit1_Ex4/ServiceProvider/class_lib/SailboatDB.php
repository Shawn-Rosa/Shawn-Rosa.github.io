<?php
include('Sailboat.php');

class SailboatDB
{
    public function getSailboat($aBoatName)
    {
        $sailboat = new Sailboat();
		
        $sailboat->setBoatName($aBoatName);
        
        if ($aBoatName == "Santa Maria")
        {
            $sailboat->setOwnerName("Spain");
			$sailboat->SetNumberOfSails(6);
            $sailboat->setPrice(49.50);
        }
        else if ($aBoatName == "Pinta")
        {
            $sailboat->setOwnerName("Spain");
			$sailboat->SetNumberOfSails(4);
            $sailboat->setPrice(49.50);
        }
        else if ($aBoatName == "Nina")
        {
            $sailboat->setOwnerName("Spain");
			$sailboat->SetNumberOfSails(2);
            $sailboat->setPrice(49.50);
        }
        else if ($aBoatName == "Lorraine")
        {
            $sailboat->setOwnerName("Shawn");
			$sailboat->SetNumberOfSails(3);
            $sailboat->setPrice(49.50);
        }
		else if ($aBoatName == "Monica")
        {
            $sailboat->setOwnerName("James");
			$sailboat->SetNumberOfSails(1);
            $sailboat->setPrice(49.50);
        }
		else
        {
            $sailboat->setOwnerName("Unknown Owner");
			$sailboat->SetNumberOfSails("Unknown Number of Sails");
			$sailboat->setPrice(0.00);
        }
		
        return $sailboat;
    }
}
?>