# Food Recipe Website Setup
SET up 
1-install xampp server or alternative s/w
2-download the repository folder into xampp folder
3- set up xampp apche server  
4- go to your browser and type localhost:8080/website folder name 
5- open index.php file
6 - you are good to go
7- create new file<script type="text/javascript">
const fun2= () => {                      //fun2 is define 
    setTimeout(()=> {
        console.log("fun2 is starting");   //document.write("fun2 is starting");
     },3000);                      // wait and print this line after 3sec on 
     
}

const fun1=() =>{       //fun1 is define
    console.log("fun1 is Starting");            //document.writeln("fun1 is starting"); document.write("<br>")     //This line is print on console
    fun2();                             //fun2 is calling
    console.log("fun1 is stop");         // document.write("fun1 is stop")       // This line is print on console
}
fun1();          //fun1 is calling
    
</script>

