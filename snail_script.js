//Done in May, 2022
//Trevor Bohl
function sleep(ms){
	return new Promise(res => setTimeout(res, ms));
}

//spins the snail	
function spin(){
	let snail = document.getElementsByClassName("snail")[0];
	let i = 0;
	let spinning = async () =>{
		while(i<=361){
			snail.style.transform = `rotate(${i}deg)`;
			i+=1;
			await sleep(1);
		}
	}
	spinning();
}


