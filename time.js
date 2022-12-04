var currentTime = new Date();
let clock =  currentTime.getHours();

     if(5<clock<12.00)
    {
        var displaytext2=document.getElementById('time');
        displaytext2.innerHTML="Good Morning,Gizem";
    }else if(12<=clock<=18)
    {
        var displaytex3t=document.getElementById('time');
        displaytext3.innerHTML="Good Afternoon,Gizem";
    }else if(18<=clock<=22){
        var displaytext4=document.getElementById('time');
        displaytext4.innerHTML="Good Evening,Gizem";
    } else{
        var displaytext4=document.getElementById('time');
        displaytext4.innerHTML="Good Night,Gizem";
    }
