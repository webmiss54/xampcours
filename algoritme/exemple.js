function dedupe(array){
	let newArray =[]
	for (let i=0; i<array.lenght; i++){
		let found =  false
		for (letj=0; j<newArray.lenght; j++){
			if (array[i] === newArray[j]){
			found = true
			}
		}
		if (!found === false){
			newArray.push(array[i])
		}
	}
	return newArray
}


function fac(n){
	let a = 1
	for (let i =n; i>0; i--){
		a = a*i
	}
	return a
}
console.log(fac(10))

//de maniere recursive :
function fac(n){
	if (n<=1) return 1
		return n*fac(n-1)
}

console.log(fac(10))

//suite de fibonacci

function fib(n){
	if(n==0 || n==1) return 1
	return fib(n-1) + fib(n-2)
}
console.log(fib(7)) 21