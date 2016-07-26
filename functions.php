<?php
	class Temperature{
		
		function to_fahrenheit($temp_c){
			($temp_c * 1.8) + 32;
		}

		function to_celsius($temp_f){
			($temp_f - 32) * 1.8;
		}
	}

	class Distance{

		function to_miles($dist_km){
			($dist_km) * 0.62137;
		}

		function to_kilometers($dist_m){
			($dist_m) / 0.62137;
		}
	}

	class Mass{

		function lb_to_st($mass_lb){
			($mass_lb) / 14;
		}

		function lb_to_kg($mass_lb){
			($mass_lb) * 0.45359237;
		}

		function kg_to_st($mass_kg){
			($mass_kg) * 0.15747;
		}

		function kg_to_lb($mass_kg){
			($mass_kg) / 0.45359237;
		}

		function st_to_lb($mass_st){
			($mass_st) * 14;
		}

		function st_to_kg($mass_st){
			($mass_st) / 0.15747;
		}
	}
?>