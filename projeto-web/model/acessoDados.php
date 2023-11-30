<?php 

function obterPersonagens() {	
	$personagens = array(
		"tt0417741" => array(
						"name" => "Blanka",
						"birthdate" => "February 12",
						"birthplace" => "Brazil",
						"height" => "192 cm",
						"weight" => "98 kg",
						"eye_color" => "Green Blue",
						"hair_color" => "Orange",
						"fighting_style" => "Feral movement, electric attacks",
						"occupation" => "Tour Guide",
						"debut_game" => "Street Fighter II",
						"availability" => "Base Game",
						"image" => "blanka.png"
					   ),
		"tt0417742" => array(
						"name" => "Blanka2",
						"birthdate" => "February 12",
						"birthplace" => "Brazil",
						"height" => "192 cm",
						"weight" => "98 kg",
						"eye_color" => "Green Blue",
						"hair_color" => "Orange",
						"fighting_style" => "Feral movement, electric attacks",
						"occupation" => "Tour Guide",
						"debut_game" => "Street Fighter II",
						"availability" => "Base Game",
						"image" => "blanka.png"
					   ),
		"tt0417743" => array(
						"name" => "Blanka3",
						"birthdate" => "February 12",
						"birthplace" => "Brazil",
						"height" => "192 cm",
						"weight" => "98 kg",
						"eye_color" => "Green Blue",
						"hair_color" => "Orange",
						"fighting_style" => "Feral movement, electric attacks",
						"occupation" => "Tour Guide",
						"debut_game" => "Street Fighter II",
						"availability" => "Base Game",
						"image" => "blanka.png"
					   ),
		"tt0417744" => array(
						"name" => "Blanka4",
						"birthdate" => "February 12",
						"birthplace" => "Brazil",
						"height" => "192 cm",
						"weight" => "98 kg",
						"eye_color" => "Green Blue",
						"hair_color" => "Orange",
						"fighting_style" => "Feral movement, electric attacks",
						"occupation" => "Tour Guide",
						"debut_game" => "Street Fighter II",
						"availability" => "Base Game",
						"image" => "blanka.png"
					   ),
		"tt0417745" => array(
						"name" => "Blanka5",
						"birthdate" => "February 12",
						"birthplace" => "Brazil",
						"height" => "192 cm",
						"weight" => "98 kg",
						"eye_color" => "Green Blue",
						"hair_color" => "Orange",
						"fighting_style" => "Feral movement, electric attacks",
						"occupation" => "Tour Guide",
						"debut_game" => "Street Fighter II",
						"availability" => "Base Game",
						"image" => "blanka.png"
					   ),
		"tt0417746" => array(
						"name" => "Blanka6",
						"birthdate" => "February 12",
						"birthplace" => "Brazil",
						"height" => "192 cm",
						"weight" => "98 kg",
						"eye_color" => "Green Blue",
						"hair_color" => "Orange",
						"fighting_style" => "Feral movement, electric attacks",
						"occupation" => "Tour Guide",
						"debut_game" => "Street Fighter II",
						"availability" => "Base Game",
						"image" => "blanka.png"
					   ),
		"tt0417747" => array(
						"name" => "Blanka7",
						"birthdate" => "February 12",
						"birthplace" => "Brazil",
						"height" => "192 cm",
						"weight" => "98 kg",
						"eye_color" => "Green Blue",
						"hair_color" => "Orange",
						"fighting_style" => "Feral movement, electric attacks",
						"occupation" => "Tour Guide",
						"debut_game" => "Street Fighter II",
						"availability" => "Base Game",
						"image" => "blanka.png"
					   ),
		"tt0417748" => array(
						"name" => "Blanka8",
						"birthdate" => "February 12",
						"birthplace" => "Brazil",
						"height" => "192 cm",
						"weight" => "98 kg",
						"eye_color" => "Green Blue",
						"hair_color" => "Orange",
						"fighting_style" => "Feral movement, electric attacks",
						"occupation" => "Tour Guide",
						"debut_game" => "Street Fighter II",
						"availability" => "Base Game",
						"image" => "blanka.png"
					   ),

	);
	return $personagens;
}

function obterPersonagem($codPersonagem)
	{
		$personagens = obterPersonagens();

		return $personagens[$codPersonagem];
	}	

?>