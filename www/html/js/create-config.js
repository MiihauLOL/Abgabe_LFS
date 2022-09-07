	function saveDynamicDataToFile() {

          
			
            var blob = new Blob(["test"], { type: "text/plain;charset=utf-8" });
            saveAs(blob, "dynamic.txt");
        }
        
       
function clickbutt(){
var button = document.getElementbyID('button')

button.addEventListener(click',function(e){
alert("button clicked")
}
}
