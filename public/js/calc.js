// calculator JS
// calc.js
//  /js/calc.js
"use strict";

	// give txtField's variables
	var LtxtField = document.getElementById("LtxtField");
	var MtxtField = document.getElementById("MtxtField");
	var RtxtField = document.getElementById("RtxtField");
	var BtxtField = document.getElementById("BtxtField");
	// default activeWindow (use for switch for L/R windows)
	var activeWindow = document.getElementById("LtxtField");

//////////////////////////////////////////////////////////////

	// button 1
	var btn1 = document.getElementById("btn1");
	btn1.addEventListener("click", ibtn1, false)
	function ibtn1(){
		activeWindow.value += "1";
	};
	// button 2
	var btn2 = document.getElementById("btn2");
	btn2.addEventListener("click", ibtn2, false)
	function ibtn2(){
		activeWindow.value += "2";
	};
	// button 3
	var btn3 = document.getElementById("btn3");
	btn3.addEventListener("click", ibtn3, false)
	function ibtn3(){
		activeWindow.value += "3";
	};
	// button 4
	var btn4 = document.getElementById("btn4");
	btn4.addEventListener("click", ibtn4, false)
	function ibtn4(){
		activeWindow.value += "4";
	};
	// button 5
	var btn5 = document.getElementById("btn5");
	btn5.addEventListener("click", ibtn5, false)
	function ibtn5(){
		activeWindow.value += "5";
	};
	// button 6
	var btn6 = document.getElementById("btn6");
	btn6.addEventListener("click", ibtn6, false)
	function ibtn6(){
		activeWindow.value += "6";
	};	
	// button 7
	var btn7 = document.getElementById("btn7");
	btn7.addEventListener("click", ibtn7, false)
	function ibtn7(){
		activeWindow.value += "7";
	};
	// button 8
	var btn8 = document.getElementById("btn8");
	btn8.addEventListener("click", ibtn8, false)
	function ibtn8(){
		activeWindow.value += "8";
	};
	// button 9
	var btn9 = document.getElementById("btn9");
	btn9.addEventListener("click", ibtn9, false)
	function ibtn9(){
		activeWindow.value += "9";
	};
	// addition
	var add = document.getElementById("add");
	add.addEventListener("click", iadd, false)
	function iadd(){
		MtxtField.value = "+";	
		// if statement (middle holds string) then activeWINDOW  = RIGHTONE
		if(MtxtField.value !== ""){
		 activeWindow = document.getElementById("RtxtField");
		} 	
	};
	// subtraction
	var subtract = document.getElementById("subtract");
	subtract.addEventListener("click", isubtract, false)
	function isubtract(){
		MtxtField.value = "-";	
		// if statement (middle holds string) then activeWINDOW  = RIGHTONE
		if(MtxtField.value !== ""){
		 activeWindow = document.getElementById("RtxtField");
		} 	
	};
	// multiply
	var multiply = document.getElementById("multiply");
	multiply.addEventListener("click", imultiply, false)
	function imultiply(){
		MtxtField.value = "*";	
		// if statement (middle holds string) then activeWINDOW  = RIGHTONE
		if(MtxtField.value !== ""){
		 activeWindow = document.getElementById("RtxtField");
		} 	
	};
	// divide
	var divide = document.getElementById("divide");
	divide.addEventListener("click", idivide, false)
	function idivide(){
		MtxtField.value = "/";	
		// if statement (middle holds string) then activeWINDOW  = RIGHTONE
		if(MtxtField.value !== ""){
		 activeWindow = document.getElementById("RtxtField");
		} 	
	};
	// zero
	var btn0 = document.getElementById("btn0");
	btn0.addEventListener("click", izero, false)
	function izero(){
		activeWindow.value += "0";
	};
	// clear button 2
	var clear2 = document.getElementById("clear2");
	clear2.addEventListener("click", iclear2, false)
	function iclear2(){
		LtxtField.value = "";
		MtxtField.value = "";
		RtxtField.value = "";
		BtxtField.value = "";
		activeWindow = document.getElementById("LtxtField");			
	};		
	// decimal button
	var decimal = document.getElementById("decimal");
	decimal.addEventListener("click", idecimal, false)
	function idecimal(){
		activeWindow.value += ".";
	};	
    

	// = sign pressed RUN FUNCTION (that does equation  based on if + or * was pressed) 
	var equal = document.getElementById("equal");
	// event listener for equal
		equal.addEventListener("click", iequal, false)
	function iequal(){

			// add left and right field
		if (MtxtField.value == "+"){
			var x = parseFloat(LtxtField.value) + parseFloat(RtxtField.value);
			BtxtField.value = x;

			// subtract left from right field
		} else if (MtxtField.value == "-"){
			var x = parseFloat(LtxtField.value) - parseFloat(RtxtField.value);
			BtxtField.value = x;

		// multiply left and right field
		} else if (MtxtField.value == "*"){
			var x = parseFloat(LtxtField.value) * parseFloat(RtxtField.value);
			BtxtField.value = x;

			// divide left from right
		} else if (MtxtField.value == "/"){
			var x = parseFloat(LtxtField.value) / parseFloat(RtxtField.value);
			BtxtField.value = x;
		} else { 
			alert("please select an opperand")
		}
	}