<?php
// Enter your code here, enjoy!
	$buy_dollarRate = 3870;
	$sell_dollarRate = 3650;
	$charges = 0.02;
	
	// prices in USD
	$john = 100;
	$mark = 150;
	$sly = 1100;
	$juma = 3500;
	$mike = 600;
	$san = 50;
	$linda = 8000;
	$amount = null;
	$rate = null;
	
	// convert amount to UGX
	function convertCurrency($amount){
		return $amount * $sell_dollarRate;
	}
	
	// above 1 million
	function charges ($rate){
		if($rate > 1000000){
			return $rate * 0.02;
		}
	}
	
	
	// exchange rates for each individual
if($john){
	$pr_one = convertCurrency($john);
	echo $pr_one;
	$charge_one = charges($pr_one);
	$final_price_one = $pr_one - $charge_one;
    echo $final_price_one;
} else if($mark){
	$pr_two = convertCurrency($mark);
	echo $pr_two;
	$charge_two = charges($pr_two);
	$final_price_two = $pr_two - $charge_two;
    echo $final_price_two;

}else if($sly){
	$pr_three = convertCurrency($sly);
	echo $pr_three;
	$charge_three = charges($pr_three);
	$final_price_three = $pr_three - $charge_three;
    echo $final_price_three;

}else if($juma){
	$pr_four = convertCurrency($juma);
	echo $pr_four;
	$charge_four = charges($pr_four);
	$final_price_four = $pr_four - $charge_four;
    echo $final_price_four;

}else if($mike){
	$pr_five = convertCurrency($mike);
	echo $pr_five;
	$charge_five = charges($pr_five);
	$final_price_five = $pr_five - $charge_five;
    echo $final_price_five;

}else if($san){
	$pr_six = convertCurrency($san);
	echo $pr_six;
	$charge_six = charges($pr_six);
	$final_price_six = $pr_six - $charge_six;
    echo $final_price_six;


}else if($linda){
	$pr_seven = convertCurrency($linda);
	echo $pr_seven;
	$charge_seven = charges($pr_seven);
	$final_price_seven = $pr_seven - $charge_seven;
    echo $final_price_seven;

}else{
	
}
	





?>